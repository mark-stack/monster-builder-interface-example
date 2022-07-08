<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonsterStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type' => 'required',
            'arms' => 'required|digits_between:0,6',
            'legs' => 'required|digits_between:0,8',
        ];
    }
}
