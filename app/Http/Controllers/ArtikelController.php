<?php

namespace App\Http\Controllers;

use App\Models\Adconfig;
use App\Models\Article;
use App\Models\tagging_tag;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class ArtikelController extends Controller
{
    // Method untuk menampilkan daftar artikel dengan fitur pencarian dan paginasi
    public function post()
    {
        $articles = Cache::rememberForever('query', function ()  {
            Log::info('Cache miss - fetching from database.');
            return Article::latest()
            ->filters(request(['search']))
            ->with(['section', 'subsection']) // Eager loading
            ->paginate(5);
        });

        return view('page.post', [
            'title' => 'Blog Post',
            'posts' => $articles
        ]);
    }

    // Method untuk menampilkan artikel berdasarkan ID dengan modifikasi paragraf pertama
    public function index($category, $posts)
    {
        $toptag = tagging_tag::orderBy('count', 'DESC')->take(5)->get();
        $adconfig = Adconfig::with('ad')->where('Halaman', 'Berita')->get();
        $waktu = Carbon::now()->setTimezone('Asia/Jakarta')->toDateTimeString();
        // dd($adconfig);
        $madconfig = Adconfig::with('ad')->where('Halaman', 'BeritaMobile')->get();
        $popUp = Adconfig::with('ad')->where('Halaman', 'PopUp')->get();


        $cacheKey = 'querya';
        $cache = Cache::rememberForever($cacheKey, function () use ($waktu) {
            Log::info('Cache miss - fetching from database.');
            return Article::with('section', 'subsection')
                ->where('Halaman_Awal', '1')
                ->where('Status', 'Y')
                ->where('published_at', '<', $waktu)
                ->latest('published_at')
                ->take(100) // Ambil hanya 100 data
                ->get();
        });
        

        if(Cache::get('querya') != null)
        {
            $cache = Cache::get('querya')->flatten();
        }

        if(Cache::get('sections') != null)
        {
            $section = Cache::get('sections')->flatten();
        }

        $random = $cache->sortByDesc('published_at')->where("section_id", "!=", "5")->where("section_id", "!=", "9")->take(25)->shuffle()->flatten();
        // Eager load 'section' dan 'subsection', dan filter menggunakan whereHas untuk section
        $post =  Article::with(['section', 'subsection'])
                ->whereHas('section', function ($querya) use ($category) {
                    $querya->where('Nama_Section', $category);
                })
                ->where('Url', $posts)
                ->firstOrFail();
     
        // Memecah isi artikel menjadi paragraf-paragraf
        $paragraphs = preg_split('/<\/p>/', $post->Isi_Article, -1, PREG_SPLIT_NO_EMPTY);

        if (!empty($paragraphs)) {
            // Menyisipkan teks ke dalam paragraf pertama
            $publishedAt = Carbon::parse($post->published_at)
                ->setTimezone('Asia/Jakarta')
                ->translatedFormat('j F Y H:i');
            $firstParagraph = '<p><span class="kota font-bold">RILISID, ' . $post->Kota . ' &mdash;</span>' . $paragraphs[0];
            $firstParagraph = preg_replace('/<\/span><p>/', '</span> ', $firstParagraph);
            $paragraphs[0] = $firstParagraph;
        }

        // Pagination for paragraphs
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 5; // Number of paragraphs per page
        $collection = new Collection($paragraphs);
        $currentPageItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedParagraphs = new LengthAwarePaginator($currentPageItems, count($collection), $perPage);
        $paginatedParagraphs->setPath(request()->url());

        $tags = explode(',', $post->Tag);

        // Mengirimkan konten yang sudah dimodifikasi ke view
        return view('page.posts', [
            'post' => $post,
            'paragraphs' => $paginatedParagraphs,
            'published' => $publishedAt,
            'tags' => $tags,
            'random' => $random,
            'toptag' => $toptag,
            'adconfig' =>  $adconfig,
            'madconfig' => $madconfig,
            'popUp' => $popUp
        ]);
    }
}
