<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollegeStudentRequest extends FormRequest
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
            'nim' => 'required|numeric',
            'name' => 'required',
            'email' => 'required|email',
            'class' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,bmp|max:2048',
        ];
    }
}
