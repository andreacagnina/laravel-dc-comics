<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:50',
            'author' => 'required|max:50',
            'description' => 'max:255',
            'price' => 'required|numeric|min:1|max:9999.99',
            'release_date' => 'required|date',
            'type' => 'required|max:20',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Devi indicare un titolo',
            'title.max' => 'Questo campo supera i limiti consentiti (50)',
            'author.required' => 'Devi indicare un autore',
            'author.max' => 'Questo campo supera i limiti consentiti (50)',
            'description.max' => 'Questo campo supera i limiti consentiti (255)',
            'price.request' => 'Devi indicare un prezzo per questo articolo',
            'price.min' => 'Questo campo non può essere inferiore a 0',
            'price.max' => 'Questo campo non può essere superiore a 9999.99',
            'release_date.required' => 'Devi indicare una data',
            'release_date.date' => 'Questo campo deve essere una data',
            'type.required' => 'Devi indicare una categoria',
            'type.max' => 'Questo campo supera i limiti consentiti (20)',
        ];
    }
}
