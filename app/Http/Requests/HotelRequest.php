<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:11'],
        ];
    }
}
