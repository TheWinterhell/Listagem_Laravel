<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaesRequest extends FormRequest
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

    public function rules()
    {
        return [
            'nome' => 'required|min:2',
            'raca' => 'required|min:2'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'O campo :attribute precisa ser preenchido',
            'min' => ':Attribute precisa ter pelo menos 2 caracteres'
         ];
    }
}
