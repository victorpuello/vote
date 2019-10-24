<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Styde\Html\Facades\Alert;

class CreateVotationRequest extends FormRequest
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
            'table_id' => ['required',Rule::exists('tables','id')],
            'candidate_id' => ['required',Rule::exists('candidates','id'),Rule::unique('votations')->where(function ($query){
                return $query->where('table_id',$this->table_id);
            })],
            'votes'=>'required|numeric',
        ];
    }
    protected function failedValidation(Validator $validator){
        Alert::message('La votación no fue guardada, se presentaron los siguientes errores:', 'danger')->items($validator->errors());
        return parent::failedValidation($validator);
    }
    /**
     * @return array
     */
    public function messages()
    {
        return [
            'table_id.required' => 'El :attribute es obligatorio.',
            'candidate_id.required' => 'El :attribute es obligatorio.',
            'candidate_id.unique' => 'El :attribute ya tiene registrada esta votación.',
            'votes.required' => 'El :attribute es obligatorio.',
            'table_id.exists' => 'La Mesa no existe.',
            'candidate_id.exists' => 'El candidato no existe.',
            'votes.numeric' => 'El campo :attribute no es valido debe contener solo números',
        ];
    }
    public function attributes()
    {
        return [
            'table_id' => 'Mesa',
            'candidate_id' => 'Candidato',
            'votes' => 'Votos'
        ];
    }
}
