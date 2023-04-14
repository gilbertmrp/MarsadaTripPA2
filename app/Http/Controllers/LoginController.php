<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('autentikasi.login');
    }

    public function indexlogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',

        ]);
        $input = $request->all();
        if(auth()->attempt(array('username' =>$input['username'], 'password' => $input['password']))){
            if(auth()->user()->role == "a"){
                return redirect('/admin');
            }else{
                return redirect('/home');
            }
        }
        return back()->with('loginerr', 'Login gagal')->onlyInput('email');
    }
}
