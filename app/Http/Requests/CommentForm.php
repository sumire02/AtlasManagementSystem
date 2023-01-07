<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentForm extends FormRequest
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
            'comment' =>'required|string|max:2500',
        ];
    }

    public function messages(){
        return [
            'comment.required' =>'入力必須です。',
            'comment.string' =>'正しい文字で入力してください。',
            'comment.max' =>'最大文字数は2500文字です。',
        ];
    }

}
