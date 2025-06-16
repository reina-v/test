<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginFormController extends Controller
{
    //ログインフォーム表示
    public function showLoginForm() {
        return view('login_form');
    }

    //ログイン処理
    public function login(Request $request) {

        $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            //ログイン成功後商品情報一覧画面へ
            return redirect()->route('products.list')->with('success', '登録が完了しました。');
        }

        // エラーメッセージを含めてリダイレクト
        return back()->withErrors([
            'login' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->withInput();
    }

}
