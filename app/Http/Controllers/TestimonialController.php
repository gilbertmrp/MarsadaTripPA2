<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index() {
        return view('admin.testimoni.index');
    }

    public function addTesti() {
        return view('admin.testimoni.add');
    }
}
