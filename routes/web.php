<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/categories', [ArticleController::class, 'showCategories']);

// Pesanan: "URL '/category/{nama_kategori_apapun}'"
// {categoryName} adalah "wildcard", bisa diisi "Data Science" atau "Network Security"
// Tugas: "Panggil ArticleController, fungsi 'showByCategory'"
Route::get('/category/{categoryName}', [ArticleController::class, 'showByCategory']);

// Pesanan: "URL '/article/{article}'"
// {article} akan otomatis diisi ID artikel (misal /article/3)
// Tugas: "Panggil ArticleController, fungsi 'showDetail' (Read More)"
Route::get('/article/{article}', [ArticleController::class, 'showDetail']);


// === MENU PENULIS ===

// Pesanan: "URL '/writers'"
// Tugas: "Panggil WriterController, fungsi 'index'"
Route::get('/writers', [WriterController::class, 'index']);

// Pesanan: "URL '/writer/{writer}'"
// {writer} akan otomatis diisi ID penulis (misal /writer/1)
// Tugas: "Panggil WriterController, fungsi 'showDetail'"
Route::get('/writer/{writer}', [WriterController::class, 'showDetail']);


// === MENU HALAMAN STATIS ===

// Pesanan: "URL '/about'"
// Tugas: "Panggil PageController, fungsi 'about'"
Route::get('/about', [PageController::class, 'about']);
