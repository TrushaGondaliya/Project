<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
      $rules=[
        'first_name'=>[
            'required'
        ],
        'last_name'=>[
            'required'
        ],
        'email'=>[
            'required',
            'email',
            'unique:users'
        ],
        'phone_number'=>[
            'required',
            'min:10'
        ],
        'password'=>[
            'required',
            'min:5'
        ],
        'confirm_password'=>[
            'required',
            'same:password'
        ]

      ];
      return $rules;
    }
}
