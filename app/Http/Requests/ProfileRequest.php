<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            //add
            'username' => 'required|max:12',
            'password' => 'required|max:12'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '名前を入力してください。',
            'username.max' => '名前は１２文字以内で入力してください。',
            'password' => 'パスワードを入力してください',
            'password.max' => 'パスワードを１２文字以内で入力してください。'
        ];
    }
}
