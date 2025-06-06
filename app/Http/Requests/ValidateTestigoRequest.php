<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ValidateTestigoRequest extends FormRequest
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
            'cedula' => ['required','numeric','max:9999999999','min:1000000',Rule::exists('testigos','cedula')],
        ];
    }
    protected function failedValidation(Validator $validator){
        return parent::failedValidation($validator);
    }
}
