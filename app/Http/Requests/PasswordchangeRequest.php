<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordchangeRequest extends FormRequest
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
            'oldpassword' => 'bail|required|min:4|max:255|current_password',
            'password' => 'bail|required|min:4|max:255|confirmed|regex:/^(?=.*?[a-z])(?=.*?\d)[a-z\d]+$/',
            'password_confirmation' => 'bail|required|max:255',
        ];
    }

    public function messages()
    {
        return[
            'oldpassword.required' => ':attributeは必須入力です。',
            'oldpassword.min' => ':attributeは4文字以上で入力してください。',
            'oldpassword.max' => ':attributeは255文字以下で入力してください。',
            'oldpassword.current_password' => ':attributeが一致しません。',
            'password.required' => ':attributeは必須入力です。',
            'password.min' => ':attributeは4文字以上で入力してください。',
            'password.max' => ':attributeは255文字以下で入力してください。',
            'password.confirmed' => ':attributeとぱすわーど【確認用】が一致しません。',
            'password.regex' => ':attributeは4文字以上の半角英数字をそれぞれ1種類以上含む値で入力してください。',
            'password_confirmation.required' => ':attributeは必須入力です。',
            'password_confirmation.max' => ':attributeは255文字以下で入力してください。',
        ];
    }

    public function attributes()
    {
        return[
            'oldpassword' => '現在のパスワード',
            'password' => '新しいパスワード',
            'password_confirmation' => '新しいパスワード【確認用】',
        ];
    }
}
