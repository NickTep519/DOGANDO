<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => ['required', 'min:4', 'string'],
            'description' => ['required', 'min:8', 'string'] , 
            'kg' => ['required', 'integer'],
            'price' => ['nullable', 'integer'],
            'city_starts' => ['required', 'string'],
            'city_ends' => ['required', 'string'],
            'm_transport' => ['nullable', 'string'],
            'company' => ['nullable', 'string'],
            'type' => ['nullable'],
            'status' => ['nullable']
        ];
    }
}
