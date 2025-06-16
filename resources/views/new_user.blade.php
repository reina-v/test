@extends('layouts.app')

@section('title', 'ユーザ新規登録画面')

@section('content')
    <div class="user-register">
        <div class="user-register__row">
            <h1 class="login__title">ユーザ新規登録画面</h1>
            <form id="register-form" class="user-register__form" action="{{ route('register.user') }}" method="post">
                @csrf

                {{-- ユーザー名 --}}
                <div class="register__form-group">
                    <input
                        type="text"
                        class="form-control"
                        id="user_name"
                        name="user_name"
                        placeholder="ユーザー名"
                        value="{{ old('user_name') }}"
                        autocomplete="username"
                    >
                </div>

                {{-- メールアドレス --}}
                <div class="register__form-group">
                    <input 
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="メールアドレス"
                        value="{{ old('email') }}"
                        autocomplete="email"
                    >
                </div>

                {{-- パスワード --}}
                <div class="register__form-group">
                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="パスワード"
                        autocomplete="new-password"
                    >
                </div>

                {{-- パスワード確認 --}}
                <div class="register__form-group">
                    <input
                        type="password"
                        class="form-control"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="パスワード確認"
                        autocomplete="new-password"
                    >
                </div>

                <div class="login__buttons">
                    <button type="button" class="login__btn login__btn--blue" id="back-button" data-href="{{ route('login.form') }}">
                        戻る
                    </button>
                    <button type="submit" class="login__btn login__btn--orange">
                        新規登録
                    </button>
                </div>

                {{-- サーバー側のバリデーションエラー --}}
                @if ($errors->any())
                    <div class="user-register__error">
                        <ul class="user-register__error-list">
                            @foreach ($errors->all() as $error)
                                <li class="user-register__error-item">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/backbtn.js') }}"></script>
    <script src="{{ asset('js/register.js') }}"></script>
@endsection

<link href="{{ asset('css/register.css') }}?v={{ time() }}" rel="stylesheet">
