<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = ['nama_mobil', 'gambar','lokasi', 'badges'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
