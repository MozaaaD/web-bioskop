<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/pesan/{id}', [App\Http\Controllers\HomeController::class, 'pesan'])->name('pesan');
Route::get('/deskripsi', [HomeController::class, 'deskripsi'])->name('deskripsi');

Route::post('/store', [FilmController::class, 'store'])->name('store');
Route::get('/create', [FilmController::class, 'create'])->name('create');
Route::get('/update/{id}', [FilmController::class, 'update'])->name('update');
Route::get('/delete/{id}', [FilmController::class, 'delete'])->name('delete');
Route::post('/edit/{id}', [FilmController::class, 'edit'])->name('edit');

Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

Route::get('/test', function () {
    return view('test.home');
});