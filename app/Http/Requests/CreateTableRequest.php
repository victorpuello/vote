<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


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
