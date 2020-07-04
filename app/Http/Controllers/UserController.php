<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index'); // bisa juga menggunakan return view('user.index');

    }
}
