<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index($post)
    {
        $validPosts = [
            'Platform',
            'Dewan-Pers',
            'Verifikasi-Kominfo',
            'Redaksi',
            'Kode-Etik',
            'Disclaimer',
            'Karir',
            'Media-Siber',
            'Kontak'
        ];

        if (!in_array($post, $validPosts)) {
            abort(404);
        }

        return view('page.pagefooter', ['post' => $post]);
    }
    public function showPage($post)
    {
        return view('page.pagefooter', ['post' => $post]);
    }
}
