<?php

namespace App\Http\Controllers;

use App\Http\Requests\Formulir\BiodataFormRequest;
use Illuminate\Http\Request;

class CsrfController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function store(BiodataFormRequest $request)
    {
        $email = $request->input('email');
        $address = $request->input('address');
        return "Emailku : ".$email;
    }
}
