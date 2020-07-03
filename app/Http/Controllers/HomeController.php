<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return '<form action="'.route('Home').'" method="post"><input type="text" name="name"> <input type="submit" value="Oke"></form>';
    }

    public function store(Request $request)
    {
        echo $request->name;
    }
}
