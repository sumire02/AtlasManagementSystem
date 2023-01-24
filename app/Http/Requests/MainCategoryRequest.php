<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainCategoryRequest extends FormRequest
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
    // mainバリデーション中
    public function rules()
    {
        return [
            'main_category_name' =>'required|string|max:100',
        ];
    }
    public function messages(){
        return [
            'main_category_name.required' =>'入力必須です。',
            'main_category_name.max'=>'最大文字数は100文字です。',
        ];}

}
