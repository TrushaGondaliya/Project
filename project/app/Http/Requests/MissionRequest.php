<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MissionRequest extends FormRequest
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
            'country'=>'required',
            'city'=>'required',
            'title'=>'required',
            'description'=>'required',
            'organization_name'=>'required',
            'organization_detail'=>'required',
            'start_date'=>'nullable',
            'end_date'=>'nullable',
            'mission_type'=>'required',
            'seat_left'=>'required',
            'theme_title'=>'required',
            'skill_id'=>'required',
            'image'=>'nullable',
            'document'=>'nullable',
            'availability'=>'nullable',
            'goal_objective_text'=>'nullable',
            'goal_value'=>'nullable'
        ];
        return $rules;
    }
}
