<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukBatik;

class PengrajinController extends Controller
{
    public function dashboard()
    {
        $countApproved = ProdukBatik::where('status', 'approve')->count();
        $countPending = ProdukBatik::where('status', 'pending')->count();

        return view('pengrajin.pengrajin', compact('countApproved', 'countPending'));
    }
}
