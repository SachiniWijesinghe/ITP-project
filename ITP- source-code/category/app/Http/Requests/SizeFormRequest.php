<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SizeFormRequest extends FormRequest
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
        $rules= [
            'c_name'=>['required']
        ];
        return $rules;
    }
    public function messages()
    {
        return['c_name.required' => 'Size cannot be null... please insert a size', ];
    }
}