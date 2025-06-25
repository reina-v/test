<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\DB;

class NewUserController extends Controller
{
    //新規登録フォームの表示
    public function showForm() {
        return view('new_user');
    }

    //登録処理
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('login.form')->with('success', '登録が完了しました。ログインしてください。');
    }

    public function registSubmit(ArticleRequest $request) {

        // トランザクション開始
        DB::beginTransaction();

        User::create([
            'user_name'  => $request->user_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        return redirect()->route('login.form')->with('success','登録が完了しました。ログインしてください。');
    }
}
