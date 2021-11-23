<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'bail|required|max:255',
            'password' => 'bail|required|min:4|max:255',
        ];
    }

    public function messages()
    {
        return[
            'email.required' => ':attributeは必須入力です。',
            'email.max' => ':attributeは255文字以下で入力してください。',
            'password.required' => ':attributeは必須入力です。',
            'password.min' => ':attributeは4文字以上で入力してください。',
            'password.max' => ':attributeは255文字以下で入力してください。',
        ];
    }

    public function attributes()
    {
        return[
            'email' => 'メールアドレス',
            'password' => 'ぱすわーど',
        ];
    }
}
