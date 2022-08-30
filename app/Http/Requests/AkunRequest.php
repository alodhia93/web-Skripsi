<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AkunRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nim'   =>  'required|unique:users,nim|numeric|digits:14',
            'nama'    =>  'required',
            'jenisKelamin'   =>  'required',
            'fakultas'      =>  'required',
            'email'          =>  'required|email',
            'kpm'   => 'required|image|mimes:jpg,jpeg,png',
            'password' => 'required|confirmed|string|min:6',
        ];
    }
}
