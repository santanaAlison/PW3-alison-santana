<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class entradaController extends Controller
{
    public function index()
    {

        return view('entrada');
    }

    public function entrada(Request $request)
    {
        
    }
}
