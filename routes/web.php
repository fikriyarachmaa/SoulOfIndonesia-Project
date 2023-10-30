<?php

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
});
Route::get('/landingpage', function () {
    return view('landingpage');
});
Route::get('/batikshop/batikshop', function () {
    return view('batikshop/batikShop');
});
Route::get('/components/header', function () {
    return view('components/header');
});
Route::get('/components/footer', function () {
    return view('components/footer');
});
Route::get('/galeribatik/galeribatik', function () {
    return view('galeribatik/galeriBatik');
});
Route::get('/auth/login', function () {
    return view('auth/login');
});
Route::get('/auth/regis', function () {
    return view('auth/regis');
});
Route::get('/admin/admin', function () {
    return view('admin/admin');
});
Route::get('/rekom/rekomwisata', function () {
    return view('rekom/rekomendasiWisata');
});
Route::get('/galeribatik/batikjamugendong', function () {
    return view('galeribatik/batikjamugendong');
});
Route::get('/rekom/kampungkauman', function () {
    return view('rekom/kampungkauman');
});