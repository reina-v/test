@extends('layouts.app')

@section('title', 'ユーザーログイン画面')

@section('content')
    <div class="login">
        <h1 id="login-form" class="login__title">ユーザーログイン画面</h1>

        <form  class="login__form" action="{{ route('login') }}" method="post">               
                @csrf

            <div class="login__form-group">
                <input
                    type="email"
                    id="email"
                    class="form-control"
                    name="email"
                    placeholder="メールアドレス"
                    value="{{ old('email') }}"
                    autocomplete="email"
                >
            </div>

            <div class="login__form-group">
                <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password" 
                    placeholder="パスワード"
                    autocomplete="current-password"
                >
            </div>

            <div class="login__buttons">
                <button type="button" class="login__btn login__btn--orange" id="register-button" data-href="{{ route('register.form') }}">
                    新規登録
                </button>
                <button type="submit" class="login__btn login__btn--blue">
                    ログイン
                </button>
            </div>
        </form>

        @if ($errors->has('login'))
            <div class="alert__alert--danger">
                {{ $errors->first('login') }}
            </div>
        @endif
    </div>
    
@endsection

@section('scripts')
    <script src="{{ asset('js/login.js') }}"></script>
@endsection

<link href="{{ asset('css/login.css') }}?v={{ time() }}" rel="stylesheet">

