<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
             'over_name' => 'required|string|max:10',
             'under_name' => 'required|string|max:10',
             'over_name_kana' => 'required|string|max:30|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u',
             'under_name_kana' => 'required|string|max:30',
             'mail_address' =>'required|string|email|max:100|unique:users,mail',
             'sex' => 'required|string',
             'old_year' => 'required|date|before:2000-01-01|after:today',
             'old_month' => 'required|date|before:2000-01-01|after:today',
             'old_day' => 'required|date|efore:2000-01-01|after:today',
             'role' => 'required|string',
             'password' => 'required|string|min:8|max:30|confirmed:password',
        ];
    }

    public function messages(){
        return [
            'over_name.max' => '姓は10文字以内で入力してください。',
            'under_name.max' => '名は10文字以内で入力してください。',
            'over_name_kana.max' => 'セイは30文字以内で入力してください。',
            'under_name_kana.max' => 'メイは30文字以内で入力してください。',
            'mail_address.max' => 'メールアドレスは100文字以内で入力してください。',
            'sex' => '選択必須です。',
            'old_year' => '2000年1月1日から本日までで入力してください。',
            'old_month' => '姓は10文字以内で入力してください。',
            'old_day' => '姓は10文字以内で入力してください。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'password.max' => 'パスワードは30文字以内で入力してください。',
        ];
    }

}
