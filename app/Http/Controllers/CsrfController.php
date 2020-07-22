<?php

namespace App\Http\Controllers;

use App\Http\Requests\Formulir\BiodataFormRequest;
use App\Mail\UserVerificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CsrfController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function store(BiodataFormRequest $request)
    {
        $email = $request->input('email');
        
        Mail::to($email)->send(new UserVerificationMail());

        return "Email Terkirim";
    }
}
