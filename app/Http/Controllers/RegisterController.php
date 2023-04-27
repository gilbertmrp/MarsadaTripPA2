<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('autentikasi.registrasi');
    }
    public function store(Request $request){

    //    dd($request->all());

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',

        ]);
        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        return redirect('/')->with('berhasil', "Registrasi berhasil, Silahkan login kembali!");

    }
}
