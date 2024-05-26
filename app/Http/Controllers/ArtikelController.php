<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ArtikelController extends Controller
{

    // Method untuk menampilkan daftar artikel dengan fitur pencarian dan paginasi
    public function post()
    {
        $articles = Article::latest()
            ->filters(request(['search']))
            ->paginate(5);

        return view('page.post', [
            'title' => 'Blog Post',
            'posts' => $articles
        ]);
    }

    // Method untuk menampilkan artikel berdasarkan ID dengan modifikasi paragraf pertama
    public function posts($id)
    {
        $post = Article::find($id); 
        // Menggunakan findOrFail untuk menangani jika ID tidak ditemukan

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

        // Menggabungkan kembali paragraf-paragraf menjadi satu string
        $modifiedContent = implode('</p>', $paragraphs);
        $tags = explode(',', $post->Tag);

        // Mengirimkan konten yang sudah dimodifikasi ke view
        return view('page.posts', [
            'post' => $post,
            'modifiedContent' => $modifiedContent,
            'published' => $publishedAt,
            'tags' => $tags,
        ]);
    }

    // Method untuk menampilkan halaman home dengan hasil pencarian
    public function home()
    {
        $searchResults = Article::latest()
            ->filters(request(['search']))
            ->paginate(5);
            

        return view('home', [
            'title' => 'Blog Post',
            'posts' => $searchResults
        ]);
    }
 
}
