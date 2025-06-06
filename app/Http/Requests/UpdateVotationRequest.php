<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateVotationRequest extends FormRequest
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

    public function rules()
    {
        return [
            'table_id' => ['required',Rule::exists('tables','id')],
            'candidate_id' => ['required',Rule::exists('candidates','id'),Rule::unique('votations')->where(function ($query){
                return $query->where('table_id',$this->table_id);
            })->ignore($this->votation)],
            'votes'=>'required|numeric',
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
            'table_id.required' => 'El :attribute es obligatorio.',
            'candidate_id.required' => 'El :attribute es obligatorio.',
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
