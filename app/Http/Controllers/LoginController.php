<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function linginindex(){
        return view('login');
    }



    public function login(Request $request){

        $request-> validate(
            [
       
                'email' => 'required|email',
                'password' => 'required',
              
            ]
            );
        echo "<pre>";
        print_r($request->all());

    }
}
