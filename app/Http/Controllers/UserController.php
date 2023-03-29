<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormRequest;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Http;
class UserController extends Controller
{
    public function index() {
        return view('user.form-user.create_booking');
    }
    public function addbooking(FormRequest $request){
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

        $nowa = '081265117697';
        $message = 'Syalom <br>' . $request->nama_pemesan . 'Nama Mobil:' . $request->nama_mobil . 'Tanggal Berangkat' . $request->date_booking . 'Tanggal Kembali' . $request->date_checkout . 'driver' . $request->driver;
        $api = 'https://wa.me/'. $nowa . urlencode($message);
        Http::get($api);

        return redirect()->away($api);
    }
}
