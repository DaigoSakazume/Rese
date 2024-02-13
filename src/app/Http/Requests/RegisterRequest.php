<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'unique:users', 'string', 'email', 'max:191'],
            'password' => ['required', 'min:8','max:191'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'ユーザー名は必須です。',
            'name.string' => '名前を文字列で入力してください',
            'name.max' => '名前は191文字以下で入力してください',
            'email.required'     => 'メールアドレスは必須です。',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.unique'       => 'メールアドレスはすでに使用されています。',
            'password.required'     => 'パスワードは必須です。',
            'password.min'     => '最低8文字以上を入力してください',
            'password.max'     => 'パスワードは191文字以下で入力してください',
        ];
    }
}
