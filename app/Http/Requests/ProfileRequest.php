<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileRequest extends FormRequest
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
            'user_name' => 'bail|max:32',
            'email' => 'bail|required|email|max:255|unique:users,email,'.Auth::user()->email.',email',
            'childname1' => 'bail|max:32',
            // 'year1' => 'bail|required',
            // 'month1' => 'bail|required',
            // 'day1' => 'bail|required',
            'childname2' => 'bail|max:32',
            // 'year2' => 'bail|required',
            // 'month2' => 'bail|required',
            // 'day2' => 'bail|required',
        ];
    }

    public function messages()
    {
        return[
            'user_name.max' => ':attributeは32文字以下で入力してください。',
            'email.required' => ':attributeは必須入力です。',
            'email.email' => ':attributeは正しい形式で入力してください。',
            'email.max' => ':attributeは255文字以下で入力してください。',
            'email.unique' => '入力した:attributeは既に登録されています。',
            'childname1.max' => ':attributeは32文字以下で入力してください。',
            'childname2.max' => ':attributeは32文字以下で入力してください。',
        ];
    }

    public function attributes()
    {
        return[
            'user_name' => 'ユーザー名',
            'email' => 'メールアドレス',
            'chiledname1' => 'お子さま1人目のお名前',
            'chiledname2' => 'お子さま2人目のお名前',
        ];
    }
}
