<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginSubmitRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'max:20'],
        ];
    }

    /**
     * Get the validation messages which are applied in the rules.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
