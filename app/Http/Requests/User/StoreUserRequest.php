<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            //
            'name' => 'required',
            'last_name' => 'required',
            'identification' => 'required',
            'department_id' => 'required',
            'city_id' => 'required',
            'cellphone' => 'required',
            'email' => 'required|string|email|max:100|unique:users',
        ];
    }
}
