<?php

use App\Http\Controllers\ArtikelLayout;
use Illuminate\Support\Facades\Route;



Route::get('/artikel' , [ArtikelLayout::class, 'artikel']);
Route::get('/' , [ArtikelLayout::class, 'home']);
Route::get('/index' , [ArtikelLayout::class, 'post']);
Route::get('/index/berita/{posts}' , [ArtikelLayout::class, 'posts'])->name('page.posts');;
Route::get('/kategori' , function () {
    return view('page.category',['title' => 'kategory']);
});
           