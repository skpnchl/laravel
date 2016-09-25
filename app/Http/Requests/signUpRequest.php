<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signUpRequest extends FormRequest
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
                    'fullname' =>'requird | min:2| max:50',
                    'email' =>'requird |email | unique:users',
                    'password'=>'requird | min:4',
            ];
    }
}
