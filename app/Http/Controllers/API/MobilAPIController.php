<?php

namespace App\Http\Controllers\API;

use App\Models\Mobil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MobilResource;

class MobilAPIController extends Controller
{
    public function index() {
        $data = Mobil::all();
        return MobilResource::collection($data);
    }
}
