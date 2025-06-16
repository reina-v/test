<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class NewUserController extends Controller
{
    //新規登録フォームの表示
    public function showForm() {
        return view('new_user');
    }

    //登録処理
    public function registerUser(Request $request) {
        $request->validate([
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
                'regex:/^[a-zA-Z0-9]+$/', // 半角英数字のみ
                'min:8',
                'confirmed', // password_confirmation と一致する必要がある
            ],
        ],
        [
            'user_name.required' => 'ユーザー名は必須です。',
            'user_name.regex' => 'ユーザー名は半角英数字または全角文字で入力してください。',
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => 'メールアドレスの形式が不正です。',
            'email.unique' => 'このメールアドレスは既に登録されています。',
            'password.required' => 'パスワードは必須です。',
            'password.regex' => 'パスワードは半角英数字のみで入力してください。',
            'password.confirmed' => 'パスワードと確認用が一致しません。',
        ]);

            //ユーザーの作成
        User::create([
            'user_name'  => $request->user_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        return redirect()->route('login.form')->with('success','登録が完了しました。ログインしてください。');

    }
}
