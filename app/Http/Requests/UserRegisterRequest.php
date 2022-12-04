<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstName' => ['required'],
            'lastName' => ['required'],
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
            'firstName.required' => 'Just a test message'
        ];
    }
}
