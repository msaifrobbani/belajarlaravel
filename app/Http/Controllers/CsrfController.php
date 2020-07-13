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
        $this->validate($request, [
            'name'      => 'required',
            'address'   => 'required'
        ]);
        $name = $request->input('name');
        $address = $request->input('address');
        return "Namaku : ".$name. "</br> Alamatku : ".$address;
        //dd($request);
    }
}
