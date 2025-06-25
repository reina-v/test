<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //全角英数字・漢字ひらがなカタカナなどOK
            'user_name' => [
                'required',
                'regex:/^[\x20-\x7Eぁ-んァ-ヶ一-龥ーａ-ｚＡ-Ｚ０-９々〆〤ー]+$/u',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'unique:users,email',
            ],
            'password' => [
                'required',
                'regex:/^[a-zA-Z0-9]+$/',
                'min:8',
                'confirmed',
            ],
        ];
    }

    public function attributes()
    {
        return [
            'user_name' => '名前',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
        ];
    }

    public function messages()
    {
        return [
            'user_name.required' => '名前を入力してください。',
            'user_name.regex' => '名前の形式が正しくありません。',
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => '正しいメールアドレスを入力してください。',
            'email.unique' => 'このメールアドレスはすでに使用されています。',
            'password.required' => 'パスワードを入力してください。',
            'password.regex' => 'パスワードは英数字で入力してください。',
            'password.min' => 'パスワードは8文字以上にしてください。',
            'password.confirmed' => '確認用パスワードが一致しません。',
        ];
    }
}
