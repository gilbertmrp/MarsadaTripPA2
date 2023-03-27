<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index() {
        $datas = Mobil::all();
        return view('admin.mobil.index', compact('datas'));
    }

    public function addMobil() {
        return view('admin.mobil.add');
    }
    
    public function addMobilProcess(Request $request) {
        $request->validate([
            'nama_mobil' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lokasi' => 'required',
            'message' => 'required'
        ]);

        $newCars = Mobil::create([
            'nama_mobil' => $request->nama_mobil,
            'lokasi' => $request->lokasi,
            'message' => $request->message,
            'gambar' => $request->gambar,
        ]);
        if($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $newCars->gambar = $request->file('gambar')->getClientOriginalName();
            $newCars->save();
        }
        return redirect()->route('admin.mobil.index');
    }
}
