<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){
        return view('admin.index');
    }
    public function index() {
        $data = Admin::all();
        return view('admin.index', compact('data'));
    }

}
