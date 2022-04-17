<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'name'            => 'Nome',
            'email'           => 'E-mail',
            'password'        => 'Senha',
            'password_confirmation' => 'Confirmação Senha',
        ];
    }

    public function rules()
    {
        return [
            'name'            => ['required', 'max:255'],
            'email'           => ['required', 'max:255', 'email', 'unique:users,email'],
            'password'        => ['required', 'max:255'],
            'password_confirmation' => ['required', 'max:255', 'same:password'],
        ];
    }
}
