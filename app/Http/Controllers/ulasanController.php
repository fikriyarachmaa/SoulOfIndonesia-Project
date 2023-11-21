<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ulasan;

class ulasanController extends Controller
{
    public function index()
    {
        $ulas = ulasan::all();
        return view('landingpage', [
            'title' => 'Home',
        ], compact(['ulas']));
    }
    public function create()
    {
        $ulas = ulasan::all();
        return view('landingpage', compact('ulas'));
    }
    public function store(Request $request)
    {
        // Validation can be added here if needed
        $ulas = new ulasan;
        $ulas->nama = $request->nama;
        $ulas->review = $request->review;

        $ulas->save();

        return redirect('landingpage')->with('success', 'Review added successfully');
    }
}
