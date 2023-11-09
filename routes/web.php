<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukBatikController;
use App\Http\Controllers\artikelBatikController;

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
});
Route::get('/landingpage', function () {
    return view('landingpage');
});

/*BATIK SHOP ROUTE*/

Route::get('/batikshop/batikshop', [ProdukBatikController::class, 'index'])->name('produks');
/*BATIK SHOP ROUTE*/

Route::get('/components/header', function () {
    return view('components/header');
});
Route::get('/components/footer', function () {
    return view('components/footer');
});

Route::get('/galeribatik/galeribatik', [artikelBatikController::class, 'index'])->name('articles');

Route::get('/galeribatik/articleDetails', function () {
    return view('/galeribatik/articleDetails');
  })->name('articles');

Route::get('/galeribatik/{id}', [artikelBatikController::class, 'show_details'])->name('articles');

Route::get('/auth/loginuser', function () {
    return view('auth/loginuser');
});
Route::get('/auth/loginadmin', function () {
    return view('auth/loginadmin');
});
Route::get('/auth/login', function () {
    return view('auth/login');
});
Route::get('/auth/regis', function () {
    return view('auth/regis');
});


/*ADMIN ROUTE*/
Route::get('/admin/admin', function () {
    return view('admin/admin');
});
Route::get('/admin/profile', function () {
    return view('admin/profile');
});
Route::get('/admin/artikel', function () {
    return view('admin/artikel');
});
Route::get('/admin/rekomendasiWisata', function () {
    return view('admin/rekomendasiWisata');
});
Route::get('/admin/produk', function () {
    return view('admin/produk');
});
Route::get('/admin.regis', function () {
    return view('admin/regis');
});
/*ADMIN ROUTE*/

Route::get('/rekom/rekomwisata', function () {
    return view('rekom/rekomendasiWisata');
});
Route::get('/galeribatik/batikjamugendong', function () {
    return view('galeribatik/batikjamugendong');
});
Route::get('/rekom/kampungkauman', function () {
    return view('rekom/kampungkauman');
});

/*PENGRAJIN ROUTE*/
Route::get('/pengrajin/pengrajin', function () {
    return view('pengrajin/pengrajin');
});
Route::get('/pengrajin/profile', function () {
    return view('pengrajin/profile');
});
Route::get('/pengrajin/biodata', function () {
    return view('pengrajin/biodata');
});
Route::get('/pengrajin/produk', function () {
    return view('pengrajin/produk');
});
/*PENGRAJIN ROUTE*/