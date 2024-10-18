<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        if ($this->type === true) {

            return [
                'title' => ['required', 'min:4', 'string'],
                'description' => ['required', 'min:8', 'string'] , 
                'kg' => ['required', 'integer'],
                'price' => ['required', 'integer'],
                'city_starts' => ['required', 'string'],
                'city_ends' => ['required', 'string'],
                'm_transport' => ['required', 'string'],
                'starts_at' => ['required', 'date'],
                'ends_at' => ['required', 'date'] , 
                'type' => ['required'],
                'status' => ['required']
            ] ;
        } else {

            return [
                'title' => ['required', 'min:4', 'string'],
                'description' => ['required', 'min:8', 'string'] ,
                'kg' => ['required', 'integer'],
                'city_starts' => ['required', 'string'],
                'city_ends' => ['required', 'string'],
                'company' => ['nullable', 'string'],
                'flight_number' => ['nullable', 'string'],
                'starts_at' => ['nullable', 'date'],
                'ends_at' => ['nullable', 'date'] , 
                'type' => ['nullable'],
                'status' => ['nullable']

            ] ; 
        }
        
      
    }
}
