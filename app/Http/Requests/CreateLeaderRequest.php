<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CreateLeaderRequest extends FormRequest
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
            'cedula' => ['required','numeric','max:9999999999','min:1000000',Rule::unique('leaders','cedula')],
            'name' => 'required|min:3|string|max:40',
            'lastname' => 'required|min:3|string|max:40',
            'phone'=>'required|numeric',
            'sector_id' => ['required',Rule::exists('sectors','id')]
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
            'lastname.required' => 'El :attribute es obligatorio.',
            'phone.required' => 'El :attribute es obligatorio.',
            'sector_id.required' => 'El sector es obligatorio.',
            'cedula.unique' => 'Esta cédula ya está registrada',
            'sector_id.exists' => 'El sector no existe.',
            'phone.numeric' => 'El campo telefono no es valido debe contener solo números',
        ];
    }
    public function attributes()
    {
        return [
            'cedula' => 'Cédula',
            'name' => 'Nombres',
            'lastname' => 'Apellidos',
            'phone' => 'Telefono',
            'sector_id' => 'Sector'
        ];
    }

}
