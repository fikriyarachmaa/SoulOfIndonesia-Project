<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukBatik;

class ProdukBatikController extends Controller
{
    public function index()
    {
        $produks = ProdukBatik::where('status', 'approve')->get();
        return view('/batikshop/BatikShop', 
           compact(['produks']));
    }

    public function create()
    {
        $produks  = ProdukBatik::all();
        return view('pengrajin.produk', compact('produks'));
    }
    public function store(Request $request)
    {
        // Validation can be added here if needed
        $produks = new ProdukBatik;
        $produks->nama = $request->nama;
        $produks->kategori = $request->kategori;
        $produks->harga = $request->harga;
        $produks->stok = $request->stok;
        $produks->kota = $request->kota;
        $produks->deskripsi = $request->deskripsi;
        $produks->kontak_penjual = $request->kontak_penjual;

        // Handle file upload (you may want to customize this based on your needs)
        $file = $request->file('foto');
        $path = $file->storeAs('public/img', $file->getClientOriginalName());
        $produks->foto = 'storage/img/' . $file->getClientOriginalName();

        $produks->save();

        return redirect('/pengrajin/produk')->with('success', 'Produk added successfully');
    }


}
