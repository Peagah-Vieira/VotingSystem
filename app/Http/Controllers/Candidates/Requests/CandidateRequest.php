<?php

namespace App\Http\Controllers\Candidates\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|integer|exists:users,id',
            'party_id' => 'required|integer|exists:parties,id',
            'number'   => 'required|string'
        ];
    }
}