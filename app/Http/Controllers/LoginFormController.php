<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;

class LoginFormController extends Controller
{
    //ログインフォーム表示
    public function showLoginForm() {
        return view('login_form');
    }

    //ログイン処理
    public function login(LoginRequest $request) {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            //ログイン成功後商品情報一覧画面へ
            return redirect()->route('products.list');
        }

        // エラーメッセージを含めてリダイレクト
        return back()->withErrors([
            'login' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->withInput();
    }
}
