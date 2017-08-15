<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrialForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|min:10|unique:tasks',
            'class'=>'required|min:5'
        ];
    }
}
