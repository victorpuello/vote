<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateSectorRequest extends FormRequest
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
            'name' => ['required','min:3','string','max:140',Rule::unique('sectors')->ignore($this->sector)],
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
            'name.unique' => 'Este nombre ya está en uso'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Nombre'
        ];
    }
}
