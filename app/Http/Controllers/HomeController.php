<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Section;
use App\Models\Video;
use App\Models\tagging_tag;
use App\Models\Adconfig;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;


class HomeController extends Controller
{
    public function index()
    {

        $waktu = Carbon::now()->setTimezone('Asia/Jakarta')->toDateTimeString();
        
        // $query = Article::with('section', 'subsection')
        //     ->where('Halaman_Awal', '1')
        //     ->where('Status', 'Y')
        //     ->where('published_at', '<', $waktu)
        //     ->latest('published_at')
        if (Cache::has('query')) {
            $query = Cache::get('query')->flatten();
            Log::info('Cache hit - data fetched from cache.');
        } else {
            $query = Cache::remember('query', 120, function () use ($waktu) {
                Log::info('Cache miss - fetching from database.');
                return Article::with('section', 'subsection')
                    ->where('Halaman_Awal', '1')
                    ->where('Status', 'Y')
                    ->where('published_at', '<', $waktu)
                    ->latest('published_at')
                    ->get();
            })->flatten();
        }

        if(Cache::get('sections') != null)
        {
            $section = Cache::get('sections')->flatten();
        }
        
        // Memeriksa apakah data 'query' ada di cache
        if (Cache::has('query')) {
            Log::info('Cache hit - data fetched from cache.');
        }
        
        // Menggunakan Cache untuk menyimpan query 'video'
        $video = Cache::rememberForever('video', function () {
            return Video::where('Status', 'Y')
                ->latest('published_at')
                ->take(10)
                ->get();
        });
        

        $video = Cache::rememberForever('video', function() {
            return Video::where('Status', 'Y')
            ->latest('published_at')
            ->take(10)
            ->get();
        });


        $toptag = tagging_tag::orderBy('count', 'DESC')->take(5)->get();
        $Quote = $query->where("section_id", "9")->sortDesc();
        $Headline = $query->where("Headline", 'Y')->flatten();
        $adconfig = Adconfig::with('ad')->where('Halaman', 'Depan')->get();
        $ID_Potret = 15;
        $ID_Quotes = Section::with('subsection')->where("Nama_Section", 'Quotes')->first()->section_id;
        // Assuming $query is a collection or a query builder instance
        // $BeritaTerbaru = $query->filter(function ($item) use ($ID_Potret, $ID_Quotes) {
        //     return $item->subsection_id != $ID_Potret && $item->section_id != $ID_Quotes;
        // })->sortByDesc('created_at')->take(15);
        $BeritaTerbaru = $query->where("subsection_id", "!=", $ID_Potret)->where("section_id", "!=", $ID_Quotes)->flatten()->sortDesc()->take(25);

        // $Pilihan = $query->wherle("subsection_id", "!=", $ID_Potret)->where("section_id", "!=", $ID_Quotes);
        // if ($Pilihan->count() < 50) {
        //     $Pilihan = $Pilihan->flatten();
        // } else {
        //     $Pilihan = $Pilihan->random(50)->flatten();
        // }
        $Pilihan = $query->where("subsection_id", "!=", $ID_Potret)->where("section_id", "!=", $ID_Quotes)->random(50)->flatten()->take(5);
        $Ragam = $query->where('section_id', Section::with('subsection')->where("Nama_Section", 'Ragam')->first()->section_id)->flatten();
        $Potret = $query->where('section_id', '11')->where('subsection_id', '15')->flatten();
        $Krakatau = $query->where('section_id', Section::with('subsection')->where("Nama_Section", 'Krakatau')->first()->section_id)->flatten();
        $Bisnis = $query->where('section_id', Section::with('subsection')->where("Nama_Section", 'Bisnis')->first()->section_id)->flatten();
        $Rilis_Network = $query->where("Kota", "Bandarlampung")->flatten();
        $Perspektif = $query->where("subsection_id", "8")->flatten();
        $Infografis = $query->where("subsection_id", "7")->flatten();
        $Inspirasi = $query->where("subsection_id", "9")->flatten();
        $Historia = $query->where("subsection_id", "10")->flatten();
        $Budaya = $query->where("subsection_id", "4")->flatten();
        $breaking = $query->take(5);


        $searchResults = Article::latest()
            ->filters(request(['search']))
            ->with(['section', 'subsection'])
            ->paginate(10);


        return view('home', [
            'title' => 'Blog Post',
            'posts' => $searchResults,
            'rilisnetwork' => $Rilis_Network,
            'beritaterbaru' => $BeritaTerbaru,
            'pilihan' => $Pilihan,
            'ragam' => $Ragam,
            'potret' => $Potret,
            'krakatau' => $Krakatau,
            'bisnis' => $Bisnis,
            'perspektif' => $Perspektif,
            'infografis' => $Infografis,
            'inspirasi' => $Inspirasi,
            'historia' => $Historia,
            'budaya' => $Budaya,
            "quote" => $Quote,
            "toptag" => $toptag,
            "adconfig" => $adconfig,
            "video" => $video,
            "breaking" => $breaking

        ]);
    }
}
