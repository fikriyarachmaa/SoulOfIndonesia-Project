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
}
