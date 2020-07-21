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
        //return view('input');
        Mail::to('saif.robbani04@belajarlaravel.test')->send(new UserVerificationMail());

        return 'email terkirim';
    }

    public function store(BiodataFormRequest $request)
    {
        $email = $request->input('email');
        return "Emailku : ".$email;
    }
}
