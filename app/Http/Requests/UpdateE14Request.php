<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Styde\Html\Facades\Alert;

class UpdateE14Request extends FormRequest
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
//        dd($this->e14);
        return [
            'table_id' => ['required',Rule::exists('tables','id'),Rule::unique('e14_s','table_id')->ignore($this->e14->id)],
            'path'=>'required|image|mimes:jpeg,bmp,png',
        ];
    }
    protected function failedValidation(Validator $validator){
        Alert::message('El E14 no fue guardado, se presentaron los siguientes errores:', 'danger')->items($validator->errors());
        return parent::failedValidation($validator);
    }
    /**
     * @return array
     */
    public function messages()
    {
        return [
            'table_id.required' => 'El :attribute es obligatorio.',
            'table_id.unique' => 'La :attribute ya tiene registrada un E14.',
            'path.required' => 'La :attribute es obligatoria.',
            'path.image' => 'El Archivo no es una Imagen valida.',
        ];
    }
    public function attributes()
    {
        return [
            'table_id' => 'Mesa',
            'path' => 'Imagen'
        ];
    }
}
