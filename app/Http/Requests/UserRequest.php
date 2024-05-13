<?php

namespace App\Http\Requests;


use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;


class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'names' => ['required', 'regex:/^[a-zA-Z]+$/u', 'min:3'],
            'last_names' => ['required', 'regex:/^[a-zA-Z]+$/u', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => [
                'required',
                // Clase de validación de contraseña
                PasswordRules::min(6)->letters()->numbers()
            ],
            'DUI' => ['required', 'regex:/^\d{8}-\d$/', 'unique:users,DUI'],
            'gender' => ['required', 'in:F,M']
        ];
    }

    public function messages(): array
    {
        return [
            'names.required' => 'El campo nombres es obligatorio.',
            'names.regex' => 'El campo nombres solo puede contener letras.',
            'names.min' => 'El campo nombres debe tener al menos :min caracteres.',

            'last_names.required' => 'El campo apellidos es obligatorio.',
            'last_names.regex' => 'El campo apellidos solo puede contener letras.',
            'last_names.min' => 'El campo apellidos debe tener al menos :min caracteres.',

            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email' => 'El campo correo electrónico debe ser una dirección de correo electrónico válida.',
            'email.unique' => 'El correo electrónico ingresado ya está registrado.',

            'password.required' => 'El campo contraseña es obligatorio.',
            'password.confirmed' => 'La confirmación de contraseña no coincide.',

            'DUI.required' => 'El campo DUI es obligatorio.',
            'DUI.unique' >= 'El campo DUI ya ha sido registrado',
            'DUI.regex' => 'El campo DUI debe tener un formato válido.',

            'gender.required' => 'El campo género es obligatorio.',
            'gender.between' => 'El campo género debe ser F o M.'
        ];
    }
}
