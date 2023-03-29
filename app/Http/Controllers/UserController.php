<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class UserController extends Controller
{
    public function index() {
        return view('user.form-user.create_booking');
    }
    public function addbooking(Request $request){
        //dd($request->all());
        $request->validate([
            'nama_pemesan' => ['required'],
            'nama_mobil' => ['required'],
            'date_booking' => 'required',
            'date_checkout' => 'required',
            'driver' => 'required',
        ]);

        $booking = new Booking;
        $booking->nama_pemesan = $request->nama_pemesan;
        $booking->nama_mobil = $request->nama_mobil;
        $booking->date_booking = $request->date_booking;
        $booking-> date_checkout = $request->date_checkout;
        $booking->driver = $request->driver;
        $booking->save();
        return redirect('/home')->with('status', 'Rental berhasil di tambahkan');
    }
}
