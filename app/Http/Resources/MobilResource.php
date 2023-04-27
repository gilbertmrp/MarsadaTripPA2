<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MobilResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama_mobil' => $this->nama_mobil,
            'lokasi' => $this->lokasi,
            'gambar' => base64_encode(file_get_contents(storage_path('app/public/' . $this->gambar))),
            'badges' => $this->badges,
        ];
    }
}
