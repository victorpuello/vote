<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;


class CreateUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|string|max:40',
            'username' => 'required|string|max:40|min:6|unique:users,username',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'password-confirm' => 'same:password',
            'type' => 'required|in:admin,auxiliar'
        ];
    }

    /**
     * @param Validator $validator
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator){
        return parent::failedValidation($validator);
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio.',
            'email.required' => 'Añade una cuenta de email valida',
            'email.unique' => 'Este email ya está en uso',
            'username.alpha' => 'El :attribute debe ser solo letras',
            'username.unique' => 'El :attribute ya está en uso',
            'password-confirm.same' => 'La contraseña no coincide'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Nombres',
            'username' => 'Nombre de usuario',
            'email' => 'E-mail',
            'password' => 'Contraseña',
            'type' => 'Tipo de usuario'
        ];
    }
}
