<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'first_name'=>['required','max:30'],
            'last_name'=>['required','max:30'],
            'email'=>['required','email'],
            'phone'=>['required'],
            'address'=>['required'],
            'bio'=>['required'],
            "photo"=>["mimes:jpg,bmp,png,jpeg,max:2048"],
            'facebook'=>['url','nullable'],
            'linkedin'=>['url','nullable'],
            'github'=>['url','nullable'],
            'twitter'=>['url','nullable'],

        ];
    }
}
