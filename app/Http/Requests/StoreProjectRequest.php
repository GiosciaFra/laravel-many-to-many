<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'used_technologies' => 'required|max:5000',
            'url' => 'required|max:5000',
            'description' => 'required|max:5000',
            'img' =>  'file|max:1024|nullable|mimes:jpg,bmp,png',
            'type_id' => 'nullable|exists:types,id'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il progetto deve avere un nome.',
            'name.max' => 'Puoi inserire :max caratteri',
            'used_technologies.required' => 'Devi specificare le tecnologie utilizzate.',
            'used_technologies.max' => 'Puoi inserire massimo :max caratteri',
            'url.required' => 'Collega un link alla tua repo.',
            'url.max' => "l'url può avere massimo :max caratteri",
            'description.required' => 'Inserisci una breve descrizione del progetto.',
            'description.max' => 'La descrizione può avere massimo :max caratteri',
            'img.mimes' => "Il file deve essere un'immagine",
            'img.max' => 'La dimensione del file non deve superare i 1024 KB',
        ];
    }
}
