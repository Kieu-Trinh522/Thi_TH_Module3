<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamsVadidate extends FormRequest
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
            'agent_code' => 'required',
            'agent_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',

        ];
    }

    public function messages()
    {
        $messages = [
            'agent_code.required'=>'khong duoc phep trung ma',
            'agent_name.required'=>'Ten la bat buoc',
            'email.required'=>'Email la bat buoc',
            'email.email'=>'Email khong dung dinh dang'
        ];
        return $messages;
    }
}
