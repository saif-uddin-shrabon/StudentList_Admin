<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index(){
        return view('form');
    }



    public function register(Request $request){

        $request-> validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm-password' => 'required|same:password'
            ]
            );
        echo "<pre>";
        print_r($request->all());


        // Insert query
        $users = new User;
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->password = md5( $request['password']);
        $users->save();

       return redirect('/register/view');
    }

    public function view(){

       $users = User::all();
    //    echo "<pre>";
    //    print_r($users->toArray());
    //    echo "<pre>";
    //    die;

       $data = compact('users');
        return view('welcome')->with($data);
    }

}
