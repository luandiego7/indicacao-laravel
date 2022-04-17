<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndicationRequest extends FormRequest
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

    public function attributes()
    {
        return [
            'name'    => 'Nome',
            'cpf'     => 'CPF',
            'email'   => 'E-mail',
            'phone'   => 'Telefone',
            'product' => 'Produto'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'    => ['required', 'max:255'],
            'cpf'     => ['required', 'max:11', 'unique:indications,cpf'],
            'email'   => ['required', 'max:255', 'email'],
            'phone'   => ['required', 'max:14'],
            'product' => ['required', 'max:255'],
        ];
    }
}
