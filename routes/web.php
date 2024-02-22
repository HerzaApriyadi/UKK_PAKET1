<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/main', function () {
    return view('layouts.main');
});

/**Route Buku */
Route::get('/buku', [DataController::class, 'index'])->name('buku.index');
Route::get('/create', [DataController::class, 'create'])->name('create.index');
Route::post('/simpan-buku', [DataController::class, 'store'])->name('simpan.buku');
Route::get('/hapus-buku/{id}', [DataController::class, 'destroy'])->name('hapus.buku');
Route::get('/edit-buku/{id}', [DataController::class, 'edit'])->name('edit.buku');
Route::put('/perbarui-buku', [DataController::class, 'update'])->name('update.buku');


Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/buku', [DataController::class, 'index'])->name('buku.create');
Route::get('/home', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);