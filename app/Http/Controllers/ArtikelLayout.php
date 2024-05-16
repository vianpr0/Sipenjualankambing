<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelLayout extends Controller
{

    public function index () {
        return view('home');
    }

    public function artikel() {
        return view('page.artikelLayout');
    }
    public function post() {
        return view('page.post');
    }
}
