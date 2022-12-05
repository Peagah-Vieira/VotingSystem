<?php

namespace App\Http\Controllers\Parties\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|unique:parties,name',
            'prefix' => 'required|string|exists:parties,prefix',
        ];
    }
}