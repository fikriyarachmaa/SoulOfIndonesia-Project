<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekomWisata;

class rekomWisataController extends Controller
{
    public function index()
    {
        $rekom = RekomWisata::all();
        return view('/rekom/rekomendasiWisata', 
           compact(['rekom']));
    }
    public function show_details($id)
    {
        $rekom = RekomWisata::find($id);
       // $articles->judul = str_replace("\n", "<br>", $articles->judul);
        return view('/rekom/wisataDetails', [
            //'title' => 'Article Details',
        ], compact(['rekom']));
    }
    public function create()
    {
        $rekom = RekomWisata::all();
        return view('admin.rekomendasiWisata', compact('rekom'));
    }
    public function store(Request $request)
    {
        // Validation can be added here if needed
        $rekom = new RekomWisata;
        $rekom->judul = $request->judul;
        $rekom->opening = $request->opening;
        $rekom->asal_usul = $request->asal_usul;
        $rekom->filosofi = $request->filosofi;

        // Handle file upload (you may want to customize this based on your needs)
        $file = $request->file('foto');
        $path = $file->storeAs('public/img', $file->getClientOriginalName());
        $rekom->foto = 'storage/img/' . $file->getClientOriginalName();

        $rekom->save();

        return redirect('/admin/rekomendasiWisata')->with('success', 'Article added successfully');
    }
}
