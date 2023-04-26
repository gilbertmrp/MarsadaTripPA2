<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function store(Request $request){
        $email = $request->email;
        $isi =  $request->isi;

        $data = [
            'email'=>$email,
            'isi'=>$isi
        ];
        $simpan = DB::table('feedback')->insert($data);
        if($simpan){
            return redirect('/home');
        }else{
            return redirect('/home');
        }
    }
}
