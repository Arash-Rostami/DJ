<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        if (empty($request->cellphone) OR !isset($request->cellphone)) {
            return true;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'type' => 'required',
            'name' => 'required|min:2',
            'email' => 'required|email:rfc,filter',
            'phone' => 'required|min:7|max:14',
            'message' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'type' => 'Choose the area of your request.',
            'name' => 'The name field should not be empty.',
            'name.min' => 'The name is too short!',
            'email.required' => 'The email field is empty; please submit a valid email.',
            'email.email' => 'The format of email is not correct; please submit a valid email format.',
            'email.max' => 'The email is too long!; please submit a shorter email',
            'phone.required' => 'The phone field should not be empty.',
            'phone.min' => 'The phone number is too short!',
            'phone.max' => 'The phone number is too long!',
            'message' => 'The message field should not be empty.'
        ];
    }
}
