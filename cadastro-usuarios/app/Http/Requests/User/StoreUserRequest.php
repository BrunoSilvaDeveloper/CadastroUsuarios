<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'senha' => [
                'required',
                'string',
                'min:6',
                'regex:/[a-z]/',      
                'regex:/[A-Z]/',      
                'regex:/[0-9]/',      
                'regex:/[@$!%*#?&]/' 
            ],
        ];
    }

    public function messages()
    {
        return [
            'email.unique' =>  "O e-mail já está sendo utilizado.",
            'senha.min' =>  "A senha deve ter pelo menos 6 caracteres.",
            'senha.regex' => "A senha deve conter pelo menos uma letra maiúscula, uma minúscula, um número e um caractere especial.",
        ];
    }
}