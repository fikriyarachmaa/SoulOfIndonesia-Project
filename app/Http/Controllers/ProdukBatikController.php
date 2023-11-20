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
    public function showAllProduct()
    {
        $produks = ProdukBatik::all();
        return view('/batikshop/showAll', compact('produks'));
    }
    public function show_details($id)
    {
        $produks = ProdukBatik::find($id);
        // $articles->judul = str_replace("\n", "<br>", $articles->judul);
         return view('/batikshop/viewProduk', [
             //'title' => 'Article Details',
         ], compact(['produks']));
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
            'foto' => 'image|mimes:jpeg,png,jpg,gif' // Aturan validasi untuk foto
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

        // Proses foto jika ada yang diunggah
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('public/img', $filename);
            $produks->foto = 'storage/img/' . $filename;
        }

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

    public function pending()
    {
        $produks = ProdukBatik::where('status', 'pending')->get();
        return view('admin.produk', compact('produks'));
    }

    public function approve($id)
    {
        $produks = ProdukBatik::find($id);
        $produks->status = 'approve';
        $produks->save();

        return redirect('/admin/produk')->with('success', 'Produk approve');
    }

    public function notApprove($id)
    {
        $produks = ProdukBatik::find($id);
        $produks->status = 'not approve';
        $produks->save();

        return redirect('/admin/produk')->with('success', 'Produk not approve');
    }


}
