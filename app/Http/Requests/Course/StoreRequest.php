<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => [
                'bail',
                'required',
                'string',
                'unique:App\Models\Course,name'
            ],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'trường này bắt buộc phải nhập',
            'name.unique' => ':attribute bị trùng'
        ];
    }
}