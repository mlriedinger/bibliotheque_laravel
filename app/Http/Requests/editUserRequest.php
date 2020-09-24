<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editUserRequest extends FormRequest
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
            'name' => 'bail | required | alpha | max:120',
            'firstname' => 'bail | required | alpha | max:120',
            'email' => 'bail | required | email',
            'phone' => 'bail | required | regex:/(0)[1-9]\d{8}/',
        ];
    }
}
