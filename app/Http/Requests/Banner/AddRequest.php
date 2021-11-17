<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'title'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'content'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>' Title Banner Cannot Be Blank, please re-enter.',
            'image.required'=>' Logo Image Cannot Be Blank, please re-enter.',
            'image.image'=>' The image is not in the correct format, please re-enter.',
            'content.required'=>' Content Banner Cannot Be Blank, please re-enter.',
        ];
    }
}
