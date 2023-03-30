<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class FormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_pemesan' => 'required',
            'nama_mobil' => 'required',
            'date_booking' => 'required',
            'date_checkout' => 'required',
            'driver' => 'required'
        ];
    }
}
