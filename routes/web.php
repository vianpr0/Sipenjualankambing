<?php

use App\Http\Controllers\ArtikelLayout;
use Illuminate\Support\Facades\Route;



Route::get('/artikel' , [ArtikelLayout::class, 'artikel']);
Route::get('/' , [ArtikelLayout::class, 'index']);
Route::get('/index' , [ArtikelLayout::class, 'post']);


Route::get('/kategori' , function () {
    return view('page.category');
});
