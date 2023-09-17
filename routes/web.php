<?php

use App\Http\Controllers\informasihukumController;
use App\Http\Controllers\kegiatanhukumController;
use App\Http\Controllers\produkhukumController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('dasbor', function () {
    return view('dasbor');
})->name('dasbor');

Route::get('informasihukum', function () {
    return view('menu.informasihukum');
})->name('menu.informasihukum');

Route::get('tambahinformasi', function () {
    return view('menu.tambahinformasi');
})->name('menu.tambahinformasi');

Route::get('produkhukum', function () {
    return view('menu.produkhukum');
})->name('menu.produkhukum');

Route::get('tambahprodukhukum', function () {
    return view('menu.tambahprodukhukum');
})->name('menu.tambahprodukhukum');

Route::get('kegiatanhukum', function () {
    return view('menu.kegiatanhukum');
})->name('menu.kegiatanhukum');

Route::get('tambahkegiatanhukum', function () {
    return view('menu.tambahkegiatan');
})->name('menu.tambahkegiatan');

Route::get('informasihukum', [informasihukumController::class, 'index'])->name('menu.informasihukum');
Route::get('produkhukum', [produkhukumController::class, 'index'])->name('menu.produkhukum');
Route::get('kegiatanhukum', [kegiatanhukumController::class, 'index'])->name('menu.kegiatanhukum');
Route::post('/produkhukum/add', [produkhukumController::class, 'store_tambahprodukhukum']);
Route::get('/tambahprodukhukum', [produkhukumController::class, 'pilihanprodukhukum'])->name('menu.tambahprodukhukum');
Route::get('/produk', [produkhukumController::class, 'index'])->name('produk.index');
