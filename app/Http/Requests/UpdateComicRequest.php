<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'price' => 'required|numeric|min:0|max:9999.99',
            'release_date' => 'required|date',
            'type' => 'required|max:20',
        ];
    }

    public function messages() {}
}
