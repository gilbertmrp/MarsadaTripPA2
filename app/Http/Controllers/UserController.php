<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Http;
use Twilio\Rest\Client;
use App\Models\Mobil;

class UserController extends Controller
{
    public function index() {
        return view('user.form-user.create_booking');
    }
    public function addbooking(Request $request){
        //dd($request->all());
        $request->validate([
            'nama_pemesan' => ['required'],
            'no_telepon' => ['required'],
            'nama_mobil' => ['required'],
            'date_booking' => 'required|date|after_or_equal:today',
            'date_checkout' => 'required',
            'driver' => 'required',
        ]);

        $booking = new Booking;
        $booking->nama_pemesan = $request->nama_pemesan;
        $booking->nama_mobil = $request->nama_mobil;
        $booking->no_telepon = $request->no_telepon;
        $booking->date_booking = $request->date_booking;
        $booking-> date_checkout = $request->date_checkout;
        $booking->driver = $request->driver;
        $booking->save();
;

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    //data to user page
    public function getdata(){
        $mobil = Mobil::all();
        return view ('user.index', compact('mobil'));
    }

}
