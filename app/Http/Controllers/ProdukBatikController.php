<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukBatik;

class ProdukBatikController extends Controller
{
    public function index()
    {
        $produks = ProdukBatik::all->get();
        return view('/batikshop/BatikShop', 
           compact(['produks', '']));
    }

    public function create()
    {
        $produks = ProdukBatik::where('status', 'approve')->get();
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

    public function edit($id)
    {
        $produks = ProdukBatik::find($id);
        return view('pengrajin.editProduk', compact('produks'));
    }

    public function update(Request $request, $id)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'nama' => 'required|string',
            'kategori' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'kota' => 'required|string',
            'deskripsi' => 'required|string',
            'kontak_penjual' => 'required|string',
        ]);

        $produks = ProdukBatik::find($id);
        
        if(!$produks) {
            return redirect('/pengrajin/produk')->with('error', 'Produk tidak ditemukan');
        }

        $produks->nama = $request->nama;
        $produks->kategori = $request->kategori;
        $produks->harga = $request->harga;
        $produks->stok = $request->stok;
        $produks->kota = $request->kota;
        $produks->deskripsi = $request->deskripsi;
        $produks->kontak_penjual = $request->kontak_penjual;

        $produks->save();

        return redirect('/pengrajin/produk')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        $produks = ProdukBatik::find($id);

        if(!$produks) {
            return redirect('/pengrajin/produk')->with('error', 'Produk tidak ditemukan');
        }

        $produks->delete();

        return redirect('/pengrajin/produk')->with('success', 'Produk berhasil dihapus');
    }


}
