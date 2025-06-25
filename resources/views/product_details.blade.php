@extends('layouts.app')

@section('title', '商品新規登録画面')

@section('content')
    <div class="user-register">
        <div class="user-register__row">
            <h1 class="login__title">商品情報詳細画面</h1>
 
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

            <div class="register__form-group">
                <label for="product_name" class="product-create__label">ID</label>
                <div class="product-create__input-wrapper">
                    {{ $product->id }}
                </div>
            </div>

            <div class="register__form-group">
                <label for="img_path" class="product-create__label">商品画像</label>
                <div class="product-create__input-wrapper">
                    @if ($product->img_path)
                        <img src="{{ asset('storage/images/' . $product->img_path) }}" alt="商品画像" width="80">
                    @else
                        画像なし
                    @endif
                </div>
            </div>

            <div class="register__form-group">
                <label for="product_name" class="product-create__label">商品名</label>
                <div class="product-create__input-wrapper">
                    {{ $product->product_name }}
                </div>
            </div>

            <div class="register__form-group">
                <label for="company_id" class="product-create__label">メーカー</label>
                <div class="product-create__input-wrapper">
                    {{ $product->company->company_name ?? '不明' }}
                </div>
            </div>

            <div class="register__form-group">
                <label for="price" class="product-create__label">価格</label>
                <div class="product-create__input-wrapper">
                    {{ number_format($product->price) }} 円
                </div>
            </div>

            <div class="register__form-group">
                <label for="stock" class="product-create__label">在庫数</label>
                <div class="product-create__input-wrapper">
                    {{ $product->stock }}
                </div>
            </div>

            <div class="register__form-group1">
                <label for="comment" class="product-create__label">コメント</label>
                <div class="product-create__input-wrapper1">
                    {!! nl2br(e($product->comment)) !!}
                </div>
            </div>

            <div class="login__buttons">
                <div class="login__button-wrapper">
                    <button type="button" class="login__btn login__btn--blue" id="back-button" data-href="{{ route('products.list') }}">
                        戻る
                    </button>
                    <form action="{{ route('edit.product.data', $product->id) }}" method="GET" style="display:inline;">
                        <button type="submit" class="login__btn login__btn--orange">編集</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/backbtn.js') }}"></script>
@endsection

<link href="{{ asset('css/products-show.css') }}?v={{ time() }}" rel="stylesheet">
