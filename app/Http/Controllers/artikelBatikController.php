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
}
