<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveSubscriberRequest extends FormRequest
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
            'first_name'        => 'required|string',
            'last_name'         => 'required|string',
            'birth_date'        => 'required|date',
            'gender_type_id'    => 'required|integer',
            'zip_code'          => [
                                    'required',
                                    'string',
                                    'size:6',
                                    'regex:/^\d{2}-\d{3}$/',
                                ],
            'city'              => 'required|string',
            'address'           => 'required|string',
        ];
    }
}
