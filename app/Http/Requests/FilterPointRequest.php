<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class FilterPointRequest extends FormRequest
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
            'point_id' => ['required',Rule::exists('points','id')]
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
            'point_id.exists' => 'El punto no existe.'
        ];
    }
    public function attributes()
    {
        return [
            'point_id' => 'Puesto de Votación'
        ];
    }
}
