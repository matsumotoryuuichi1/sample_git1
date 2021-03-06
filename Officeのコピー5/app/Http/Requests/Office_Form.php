<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Office_Form extends FormRequest
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
            'your_name'=>'required|string|max:20',
            'gender'=>'required',
            'section'=>'required',
            'caution'=>'required|accepted',
        ];
    }
}
