<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukBatik;
use App\Models\artikelBatik;
use App\Models\RekomWisata;

class AdminController extends Controller
{
    public function dashboard()
    {
        $countArtikel = artikelBatik::all()->count();
        $countRekom = RekomWisata::all()->count();
        $countProduk = ProdukBatik::where('status', 'pending')->count();

        return view('admin.admin', compact('countArtikel', 'countRekom', 'countProduk'));
    }

}
