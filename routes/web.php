<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InformasiController;



Route::get('/artikel' , [ArtikelController::class, 'artikel']);
Route::get('/' , [HomeController::class, 'index']);
Route::get('/artikel' , [ArtikelController::class, 'post']);
Route::get('/kategori' , [CategoryController::class , 'category'])->name('kategori.category');
Route::get('/Kategori/{category}' , [CategoryController::class , 'categorys'])->name('kategori.categorys');

Route::get('/index', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/index/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/index/Tag/{post}', [CategoryController::class, 'indextag'])->name('categories.indextag');
Route::get('/{category}/Berita/{article}' , [ArtikelController::class, 'index'])->name('page.posts');
Route::get('/Informasi/{post}', [InformasiController::class, 'showPage']);
// Route::get('/informasi', [InformasiController::class, 'index']);

           