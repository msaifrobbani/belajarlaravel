<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsrfController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function store(Request $request)
    {
        $name = $request->input('nama');
        $address = $request->input('alamat');
        return "Namaku : ".$name. "</br> Alamatku : ".$address;
        //dd($request);
    }
}
