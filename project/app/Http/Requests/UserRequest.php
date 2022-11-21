<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        'email'=>['required'],
        'password'=>['nullable'],
        'first_name'=>'nullable',
        'last_name'=>'nullable',
        'avtar'=>[
            'nullable',
          
        ],
        'employee_id'=>'nullable',
        'city_id'=>'nullable',
        'country_id'=>'nullable',
        'department'=>'nullable',
        'profile_text'=>'nullable',
       ];

       return $rules;
    }
}
