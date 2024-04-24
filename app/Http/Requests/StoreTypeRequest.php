<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'nullable|max:4000',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Devi inserire un titolo.',
            'name.max' => 'Il nome della tipologia non può superare :max caratteri',

            'description.max' => 'La descrizione non può superare i :max caratteri'
        ];
    }
}
