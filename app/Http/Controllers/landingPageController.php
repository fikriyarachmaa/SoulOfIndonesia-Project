<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukBatik;
use App\Models\artikelBatik;
use App\Models\RekomWisata;
use App\Models\ulasan;

class landingPageController extends Controller
{
    public function index()
    {
        $produks = ProdukBatik::all();
        $articles = artikelBatik::all();
        $rekom = RekomWisata::all();
        $ulas = ulasan::all();
        return view('landingpage', [
            'title' => 'Home',
        ], compact(['produks', 'articles', 'rekom', 'ulas']));
    }
}
