<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($username)
    {
        //return '<form action="'.route('Home').'" method="post"><input type="text" name="name"> <input type="submit" value="Oke"></form>';

        return view('user.index', [
            'name'      => $username,
            'fullname'  => 'Saif Robbani'
        ]); // username yang pertama adalah variabel yang dikirim ke view. Jadi tergantung sama view.
        //cara mengirim variable ke view ada beberapa cara
        /*
            ->withUsername($username);
            ->with([
                'yang ditampilkan ke view' => 'variable di controller',
                'username' => $username,
                'fullname' => 'Syaifulloh Robbani'
            ]);
        */
    }

/*     public function store(Request $request)
    {
        echo $request->name;
    } */
}
