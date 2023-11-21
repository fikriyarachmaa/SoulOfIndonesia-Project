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
    Route::get('/pengrajin/dashboard', [PengrajinController::class, 'dashboard'])->name('pengrajin.dashboard');
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/landingpage', function () {
    return view('landingpage');
});






/*BATIK SHOP ROUTE*/

Route::get('/batikshop/batikshop', [ProdukBatikController::class, 'index'])->name('produks');
Route::get('/batikshop/showAll', [ProdukBatikController::class, 'showAllProduct'])->name('show_all_product');

Route::get('/batikshop/viewProduk', function () {
    return view('/batikshop/viewProduk');
})->name('viewProduk');

Route::get('/batikshop/{id}', [ProdukBatikController::class, 'show_details'])->name('produks.show');

Route::get('/batikshop/showSearch', [ProdukBatikController::class, 'search'])->name('produks.search');

/*BATIK SHOP ROUTE*/

Route::get('/components/header', function () {
    return view('components/header');
});
Route::get('/components/footer', function () {
    return view('components/footer');
});

Route::get('/galeribatik/galeribatik', [artikelBatikController::class, 'index'])->name('articles');

Route::get('/galeribatik/showMore', [artikelBatikController::class, 'showMoreArticles'])->name('show_more_articles');

Route::get('/galeribatik/articleDetails', function () {
    return view('/galeribatik/articleDetails');
})->name('articleDetails');

Route::get('/galeribatik/{id}', [artikelBatikController::class, 'show_details'])->name('articles.show');

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
Route::get('/admin/artikel', function () {
    return view('admin/artikel');
});
Route::get('/admin/rekomendasiWisata', function () {
    return view('admin/rekomendasiWisata');
});
Route::get('/admin/produk', [ProdukBatikController::class, 'pending'])->name('admin.produk.pending');
Route::get('/admin/produk/approve/{id}', [ProdukBatikController::class, 'approve'])->name('admin.produk.approve');
Route::get('/admin/produk/notapprove/{id}', [ProdukBatikController::class, 'notapprove'])->name('admin.produk.notapprove');

Route::get('/admin.regis', function () {
    return view('admin/regis');
});
Route::get('/admin/artikel', [artikelBatikController::class, 'create'])->name('admin.artikel.create');
Route::post('/admin/artikel', [artikelBatikController::class, 'store'])->name('admin.artikel.store');
Route::get('/admin/artikel/edit/{id}', [artikelBatikController::class, 'edit'])->name('admin.artikel.edit');
Route::post('/admin/artikel/update/{id}', [artikelBatikController::class, 'update'])->name('admin.artikel.update');
Route::delete('/admin/artikel/delete/{id}', [artikelBatikController::class, 'destroy'])->name('admin.artikel.destroy');



Route::get('/admin/rekomendasiWisata', [rekomWisataController::class, 'create'])->name('admin.rekomendasiWisata.create');
Route::post('/admin/rekomendasiWisata', [rekomWisataController::class, 'store'])->name('admin.rekomendasiWisata.store');
Route::get('/admin/rekomendasiWisata/edit/{id}', [rekomWisataController::class, 'edit'])->name('admin.rekomendasiWisata.edit');
Route::post('/admin/rekomendasiWisata/update/{id}', [rekomWisataController::class, 'update'])->name('admin.rekomendasiWisata.update');
Route::delete('/admin/rekomendasiWisata/delete/{id}', [rekomWisataController::class, 'destroy'])->name('admin.rekomendasiWisata.destroy');
/*ADMIN ROUTE*/

/*rekom ROUTE*/
Route::get('/rekom/rekomendasiWisata', [rekomWisataController::class, 'index'])->name('rekom');

Route::get('/rekom/allArticle', [rekomWisataController::class, 'showMoreArticles'])->name('show_all_articles');

Route::get('/rekom/wisataDetails', function () {
    return view('/rekom/wisataDetails');
  })->name('rekom.details');

Route::get('/rekom/{id}', [rekomWisataController::class, 'show_details'])->name('rekom.show');

/*
Route::get('/rekom/rekomendasiWisata', function () {
    return view('rekom/rekomendasiWisata');
});
Route::get('/rekom/wisataDetails', function () {
    return view('rekom/wisataDetails');
}); */
/*rekom ROUTE*/

/*PENGRAJIN ROUTE*/
    Route::get('/pengrajin/profile', [ProfileController::class, 'edit2'])->name('pengrajin.profile.edit');
    Route::patch('/pengrajin/profile', [ProfileController::class, 'update'])->name('pengrajin.profile.update');
    Route::delete('/pengrajin/profile', [ProfileController::class, 'destroy'])->name('pengrajin.profile.destroy');
    Route::get('/pengrajin/biodata', [PengrajinController::class, 'biodata'])->name('pengrajin.biodata');
    Route::get('/pengrajin/produk', function () {
    return view('pengrajin/produk');
});
Route::get('/pengrajin/produk', [ProdukBatikController::class, 'create'])->name('pengrajin.produk.create');
Route::post('/pengrajin/produk', [ProdukBatikController::class, 'store'])->name('pengrajin.produk.store');
Route::get('/pengrajin/produk/edit/{id}', [ProdukBatikController::class, 'edit'])->name('pengrajin.produk.edit');
Route::post('/pengrajin/produk/update/{id}', [ProdukBatikController::class, 'update'])->name('pengrajin.produk.update');
Route::delete('/pengrajin/produk/delete/{id}', [ProdukBatikController::class, 'destroy'])->name('pengrajin.produk.destroy');
/*PENGRAJIN ROUTE*/

require __DIR__.'/auth.php';
