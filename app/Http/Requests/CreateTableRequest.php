<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Styde\Html\Facades\Alert;

class CreateTableRequest extends FormRequest
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
     *'point_id','number','nvoters'
     * @return array
     */
    public function rules()
    {
        return [
            'point_id' => ['required',Rule::exists('points','id')],
            'number' => ['required','numeric',Rule::unique('tables')->where(function ($query){
                return $query->where('point_id',$this->point_id);
            })],
            'nvoters'=>'required|numeric',
        ];
    }
    protected function failedValidation(Validator $validator){
        Alert::message('La mesa no fue guardada, se presentaron los siguientes errores:', 'danger')->items($validator->errors());
        return parent::failedValidation($validator);
    }
    /**
     * @return array
     */
    public function messages()
    {
        return [
            'point_id.required' => 'El :attribute es obligatorio.',
            'number.unique' => 'El :attribute ya se encuentra registrado en este puesto.',
            'number.numeric' => 'El campo :attribute no es valido debe contener solo números',
            'nvoters.numeric' => 'El campo :attribute no es valido debe contener solo números',
        ];
    }
    public function attributes()
    {
        return [
            'point_id' => 'Puesto',
            'number' => 'Número',
            'nvoters' => 'Votantes'
        ];
    }
}
