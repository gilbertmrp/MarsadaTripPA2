<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'booking';
    protected $fillable = [
        'nama_pemesan',
        'nama_mobil',
        'date_booking',
        'date_checkout',
        'driver',
    ];
}
