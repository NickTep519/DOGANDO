<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kg' => ['numeric', 'gt:0', 'nullable'],
            'price' => ['numeric','gt:0', 'nullable'],
            'city_starts' => ['string', 'nullable'],
            'city_ends' => ['string', 'nullable']
        ];
    }
}