<?php

namespace App\Http\Requests\Technician;

use Illuminate\Foundation\Http\FormRequest;

class FollowedUpRequestRequest extends FormRequest
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
            'target_date'             => 'date_format:Y-m-d|after_or_equal:requests,request_created_date', 
            'target_completion_date'  => 'date_format:Y-m-d|after_or_equal:target_date', 
            'technician'              => 'exists:users,name|max:100', 
            'is_done'                 => 'in:YES,CANCELED', 
        ];
    }
}