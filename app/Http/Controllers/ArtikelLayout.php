<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArtikelLayout extends Controller
{
    // Method untuk menampilkan halaman home
    public function index()
    {
        return view('home');
    }

    // Method untuk menampilkan halaman artikel
    public function artikel()
    {
        return view('page.artikelLayout');
    }

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
        $post = Article::find($id); // Menggunakan findOrFail untuk menangani jika ID tidak ditemukan

        // Memecah isi artikel menjadi paragraf-paragraf
        $paragraphs = preg_split('/<\/p>/', $post->Isi_Article, -1, PREG_SPLIT_NO_EMPTY);

        if (!empty($paragraphs)) {
            // Menyisipkan teks ke dalam paragraf pertama
            $firstParagraph = '<p><span class="kota font-bold">RILISID, ' . $post->Kota . ' &mdash;</span>' . $paragraphs[0];
            $firstParagraph = preg_replace('/<\/span><p>/', '</span> ', $firstParagraph);
            $paragraphs[0] = $firstParagraph;
        }

        // Menggabungkan kembali paragraf-paragraf menjadi satu string
        $modifiedContent = implode('</p>', $paragraphs);

        // Mengirimkan konten yang sudah dimodifikasi ke view
        return view('page.posts', [
            'post' => $post,
            'modifiedContent' => $modifiedContent
        ]);
    }

    // Method untuk menangani pencarian (tambah logika pencarian sesuai kebutuhan)
    public function search()
    {
        //
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
