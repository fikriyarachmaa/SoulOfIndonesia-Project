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
Route::get('/batikshop', function () {
    return view('batikShop');
});
Route::get('/components/header', function () {
    return view('components/header');
});
Route::get('/components/footer', function () {
    return view('components/footer');
});
Route::get('/galeribatik', function () {
    return view('galeriBatik');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/regis', function () {
    return view('regis');
});
Route::get('/admin', function () {
    return view('admin');
});

