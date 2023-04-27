<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        // dd($request->all());
        $request->validate([
            'nama_mobil' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lokasi' => 'required',
            'badges' => 'required'
        ]);
        
        $badges = $request->input('badges');

        $newCars = Mobil::create([
            'nama_mobil' => $request->nama_mobil,
            'lokasi' => $request->lokasi,
            'gambar' => $request->gambar,
            'badges' => $request->badges,
        ]);

        
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public', $filename);
            $newCars->gambar = $filename;
            $newCars->save();
        }
        return redirect()->route('admin.mobil.index')->with('success', "Data berhasil ditamabh");
    }

    public function delete($id) {
        $deleteCars = Mobil::find($id);
        $deleteCars->delete();
        return redirect()->route('admin.mobil.index');
    }
    
}
