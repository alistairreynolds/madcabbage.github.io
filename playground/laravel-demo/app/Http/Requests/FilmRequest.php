<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FilmRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;   //overriding to always be true for now
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'released' => 'required'
        ];

        return $rules;
    }
}
