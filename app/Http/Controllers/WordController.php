<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mhs;


class WordController extends Controller
{

    public function display(Request $request)
    {
       return view('auto_proposal/auto_proposal');
    }

    public function store(Request $request)
    {
        // Store form data in session
        $request->session()->put('form_data', [
            'prodi' => $request->prodi,
            'doswal' => $request->doswal
        ]);
        
        return redirect()->route('wordb');
    }

    public function index(Request $request)
    {
        // Retrieve the data from session
        $formData = $request->session()->get('form_data');
        
        // Pass data to the view
        return view('auto_proposal/hasil', compact('formData'));
    }
}

