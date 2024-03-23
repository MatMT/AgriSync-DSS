<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

class ClientRegisterRequest extends FormRequest
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
            'nombres' => ['required', 'string', 'regex:/^[\pL\s]+$/u'],
            'apellidos' => ['required', 'string', 'regex:/^[\pL\s]+$/u'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => [
                'required',
                'confirmed',
                // Clase de validación de contraseña
                PasswordRules::min(6)
            ]
        ];
    }

    public function messages()
    {
        return [
            'nombres' => 'El nombre es obligatorio. ',
            'nombres.regex' => 'El nombre solo puede contener letras. ',
            'apellidos' => 'El apellido es obligatorio. ',
            'apellidos.regex' => 'El apellido solo puede contener letras. ',
            'email' => 'El correo es obligatorio. ',
            'password' => 'La contraseña debe contener mínimo 6 caracteres. ',
            'email.email' => 'El correo no es válido. ',
            'email.unique' => 'El usuario ya esta registrado. ',
            'password.confirmed' => 'Las contraseñas no coinciden. '
        ];
    }
}
