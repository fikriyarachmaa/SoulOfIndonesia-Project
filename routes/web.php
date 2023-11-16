<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengrajinController;
use App\Http\Controllers\ProdukBatikController;
use App\Http\Controllers\artikelBatikController;
use App\Http\Controllers\rekomWisataController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/penjual/dashboard', [PengrajinController::class, 'dashboard'])->name('pengrajin.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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
    return view('auth/regis1');
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
Route::get('/admin/artikel', [artikelBatikController::class, 'create'])->name('admin.artikel.create');
Route::post('/admin/artikel', [artikelBatikController::class, 'store'])->name('admin.artikel.store');

Route::get('/admin/rekomendasiWisata', [rekomWisataController::class, 'create'])->name('admin.rekomendasiWisata.create');
Route::post('/admin/rekomendasiWisata', [rekomWisataController::class, 'store'])->name('admin.rekomendasiWisata.store');
/*ADMIN ROUTE*/

/*rekom ROUTE*/
Route::get('/rekom/rekomendasiWisata', [rekomWisataController::class, 'index'])->name('rekom');

Route::get('/rekom/wisataDetails', function () {
    return view('/rekom/wisataDetails');
  })->name('rekom');

Route::get('/rekom/{id}', [rekomWisataController::class, 'show_details'])->name('rekom');

/*
Route::get('/rekom/rekomendasiWisata', function () {
    return view('rekom/rekomendasiWisata');
});
Route::get('/rekom/wisataDetails', function () {
    return view('rekom/wisataDetails');
}); */
/*rekom ROUTE*/

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

require __DIR__.'/auth.php';
