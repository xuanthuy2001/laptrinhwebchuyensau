<?php

namespace App\Http\Requests\Course;

use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
                Rule::unique(Course::class)->ignore($this->course),
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