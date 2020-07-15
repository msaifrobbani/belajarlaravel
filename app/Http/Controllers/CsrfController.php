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
            'email'      => 'required|email',
            'address'   => 'required'
        ],[
            'email.required' => ':attribute harus diisi',
            'email.email'   => 'Isikan field sesuai dengan format email (gunakan @)'
        ]);
        $email = $request->input('email');
        $address = $request->input('address');
        return "Emailku : ".$email. "</br> Alamatku : ".$address;
    }
}
