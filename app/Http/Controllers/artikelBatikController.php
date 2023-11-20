<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikelBatik;

class artikelBatikController extends Controller
{
    public function index()
    {
        $articles = artikelBatik::all();
        return view('/galeribatik/galeribatik', 
           compact(['articles']));
    }
    public function showMoreArticles()
    {
        $articles = artikelBatik::all();
        return view('/galeribatik/showMore', compact('articles'));
    }
    public function show_details($id)
    {
        $articles = artikelBatik::find($id);
       // $articles->judul = str_replace("\n", "<br>", $articles->judul);
        return view('/galeribatik/articleDetails', [
            //'title' => 'Article Details',
        ], compact(['articles']));
    }
    public function create()
    {
        $articles = artikelBatik::all();
        return view('admin.artikel', compact('articles'));
    }
    public function store(Request $request)
    {
        // Validation can be added here if needed
        $article = new artikelBatik;
        $article->judul = $request->judul;
        $article->opening = $request->opening;
        $article->asal_usul = $request->asal_usul;
        $article->filosofi = $request->filosofi;

        // Handle file upload (you may want to customize this based on your needs)
        $file = $request->file('foto');
        $path = $file->storeAs('public/img', $file->getClientOriginalName());
        $article->foto = 'storage/img/' . $file->getClientOriginalName();

        $article->save();

        return redirect('/admin/artikel')->with('success', 'Article added successfully');
    }

    public function edit($id)
    {
        $article = artikelBatik::find($id);
        return view('admin.editArtikel', compact('article'));
    }

    public function update(Request $request, $id)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'judul' => 'required|string',
            'opening' => 'required|string',
            'asal_usul' => 'required|string',
            'filosofi' => 'required|string',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Aturan validasi untuk foto
        ]);
    
        $article = artikelBatik::find($id);
        
        if(!$article) {
            return redirect('/admin/artikel')->with('error', 'Artikel tidak ditemukan');
        }
    
        $article->judul = $request->judul;
        $article->opening = $request->opening;
        $article->asal_usul = $request->asal_usul;
        $article->filosofi = $request->filosofi;
    
        // Proses foto jika ada yang diunggah
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('public/img', $filename);
            $article->foto = 'storage/img/' . $filename;
        }
    
        $article->save();
    
        return redirect('/admin/artikel')->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy($id)
    {
        $article = artikelBatik::find($id);

        if(!$article) {
            return redirect('/admin/artikel')->with('error', 'Artikel tidak ditemukan');
        }

        $article->delete();

        return redirect('/admin/artikel')->with('success', 'Artikel berhasil dihapus');
    }

}
