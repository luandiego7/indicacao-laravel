<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'email'    => 'E-mail',
            'password' => 'Password',
        ];
    }

    public function rules()
    {
        return [
            'email'    => ['required', 'max:255', 'email'],
            'password' => ['required', 'max:255'],
        ];
    }
}
