<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsrfController extends Controller
{
    public function index()
    {
        return view('todo');
    }

    public function store(Request $request)
    {
       dd($request->todo);
    }
}
