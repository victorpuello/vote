<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Styde\Html\Facades\Alert;

class CreateVoterRequest extends FormRequest
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
            'cedula' => ['required','numeric','max:9999999999','min:1000000',Rule::unique('voters','cedula')],
            'name' => 'required|min:3|string|max:40',
            'lastname' => 'required|min:3|string|max:40',
            'phone'=>'required|numeric',
            'sector_id' => ['required',Rule::exists('sectors','id')],
            'leader_id' => ['required',Rule::exists('leaders','id')],
            'point_id' => ['required',Rule::exists('points','id')],
            'table_number' =>'nullable|numeric',
            'sufrago' => 'boolean'
        ];
    }

    /**
     * @param Validator $validator
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator){
        Alert::message('El votante no fue guardado, se presentaron los siguientes errores:', 'danger')->items($validator->errors());
        return parent::failedValidation($validator);
    }
    /**
     * @return array
     */
    public function messages()
    {
        return [
            'cedula.required' => 'El :attribute es obligatorio.',
            'name.required' => 'El :attribute es obligatorio.',
            'lastname.required' => 'El :attribute es obligatorio.',
            'phone.required' => 'El :attribute es obligatorio.',
            'sector_id.required' => 'El :attribute es obligatorio.',
            'leader_id.required' => 'El :attribute es obligatorio.',
            'point_id.required' => 'El :attribute es obligatorio.',
            'cedula.unique' => 'Esta cédula ya está registrada',
            'sector_id.exists' => 'El sector no existe.',
            'leader_id.exists' => 'El sector no existe.',
            'point_id.exists' => 'El sector no existe.',
            'phone.numeric' => 'El campo :attribute no es valido debe contener solo números',
            'table_number.numeric' => 'El campo :attribute no es valido debe contener solo números',
        ];
    }
    public function attributes()
    {
        return [
            'cedula' => 'Cédula',
            'name' => 'Nombres',
            'lastname' => 'Apellidos',
            'phone' => 'Telefono',
            'sector_id' => 'Sector',
            'leader_id' => 'Líder',
            'point_id' => 'Puesto de Votación',
            'table_number' => 'Número de mesa',
            'sufrago' => 'Sufragó'
        ];
    }
}
