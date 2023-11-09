<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukBatik;

class ProdukBatikController extends Controller
{
    public function index()
    {
        $produks = ProdukBatik::all();
        return view('/batikshop/BatikShop', 
           compact(['produks']));
    }

}
