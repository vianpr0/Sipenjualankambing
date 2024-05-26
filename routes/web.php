<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;



Route::get('/artikel' , [ArtikelController::class, 'artikel']);
Route::get('/' , [ArtikelController::class, 'home']);
Route::get('/artikel' , [ArtikelController::class, 'post']);
Route::get('/kategori' , [CategoryController::class , 'category'])->name('kategori.category');
Route::get('/kategori/{category}' , [CategoryController::class , 'categorys'])->name('kategori.categorys');


Route::get('/index', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/index/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/index/berita/{posts}' , [ArtikelController::class, 'posts'])->name('page.posts');

           