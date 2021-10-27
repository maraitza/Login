<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create()  {

        return view('login');
    }

    public function cargar()  {

        if(auth()-> attempt(request(['email', 'password'])) == false) {

            return back()->withErrors(['message'=>'El correo o el paswword invalidos']);

        }
        return redirect()->to('/');

    }
}
