<?php

namespace App\Http\Requests\Film;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'name'=>'required|unique:films,name,'.$this->id,
            'slug'=>'required|unique:films,slug,'.$this->id,
            'time'=>'required|numeric',
            'release_date'=>'required|date',
            'director'=>'required',
            'cast'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg',
            'trailer'=>'required',
            'description'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>' Name Cannot Be Blank, please re-enter.',
            'name.unique'=>" $this->name already exists, please re-enter .",
            'slug.required'=>' Name Cannot Be Blank, please re-enter.',
            'slug.unique'=>" $this->slug already exists, please re-enter .",
            'time.required'=>' Showtime Cannot Be Blank, please re-enter.',
            'time.numeric'=>' Showtime Must Be In The Correct Number Format, please re-enter.',
            'release_date.required'=>' Release Date Cannot Be Blank, please re-enter.',
            'release_date.date'=>' Release Date is not in correct date format , please re-enter.',
            'director.required'=>' Director Cannot Be Blank, please re-enter.',
            'cast.required'=>' Cast Cannot Be Blank, please re-enter.',
            'image.image'=>' The image is not in the correct format, please re-enter.',
            'trailer.required'=>' Trailer Cannot Be Blank, please re-enter.',
            'description.required'=>' Description Cannot Be Blank, please re-enter.',
        ];
    }
}