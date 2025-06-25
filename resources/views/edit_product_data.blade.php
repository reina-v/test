@extends('layouts.app')

@section('title', '商品情報編集画面')

@section('content')
    <div class="edit-product">
        <div class="edit-register__row">
            <h1 class="login__title">商品情報編集画面</h1>
            <form class="user-register__form" action="{{ route('update.product.data', $product->id) }}"
                method="POST" enctype="multipart/form-data">   
                @csrf
                @method('PUT')

                @if ($errors->has('error'))
                    <div class="alert alert-danger">
                        {{ $errors->first('error') }}
                    </div>
                @endif

                <div class="register__form-group">
                    <label class="product-create__label">
                        商品ID : {{ $product->id }}
                    </label>
                </div>

                <div class="register__form-group">
                    <label for="product_name" class="product-create__label">
                        商品名 <span class="product-create__required">*</span>
                    </label>
                    <div class="product-create__input-wrapper">
                        <input
                            type="text"
                            class="form-control"
                            name="product_name"
                            id="product_name"
                            value="{{ old('product_name', $product->product_name) }}"
                        >
                    </div>
                </div>

                <div class="register__form-group">
                    <label for="company_id" class="product-create__label">
                        メーカー <span class="product-create__required">*</span>
                    </label>
                    <div class="product-create__input-wrapper">
                        <select class="form-control" name="company_id" id="company_id">
                            <option value="">選択してください</option>
                            @foreach ($companies as $company)
                                @php
                                    $selected = old('company_id', $product->company_id) == $company->id ? 'selected' : '';
                                @endphp
                                <option value="{{ $company->id }}" {{ $selected }}>
                                    {{ $company->company_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="register__form-group">
                    <label for="price" class="product-create__label">
                        価格 <span class="product-create__required">*</span>
                    </label>
                    <div class="product-create__input-wrapper">
                        <input
                            type="number"
                            class="form-control"
                            name="price"
                            value="{{ old('price', $product->price) }}"
                            id="price"
                            min="0"
                        >
                    </div>
                </div>

                <div class="register__form-group">
                    <label for="stock" class="product-create__label">
                        在庫数 <span class="product-create__required">*</span>
                    </label>
                    <div class="product-create__input-wrapper">
                        <input
                            type="number"
                            class="form-control"
                            name="stock"
                            value="{{ old('stock', $product->stock) }}"
                            id="stock" 
                            min="0"
                        >
                    </div>
                </div>

                <div class="register__form-group">
                    <label for="comment" class="product-create__label">
                        コメント
                    </label>
                    <div class="product-create__input-wrapper">
                        <textarea class="product-create__textarea" name="comment" id="comment">
                            {{ old('comment', $product->comment) }}
                        </textarea>
                    </div>
                </div>

                <div class="register__form-group">
                    <label for="img_path" class="product-create__label">
                        商品画像
                    </label>
                    <div class="product-create__input-wrapper">
                        <input
                            type="file"
                            class="form-control"
                            name="img_path"
                            id="img_path"
                        >

                        @if ($product->img_path)
                            <div class="form-group product-image__wrapper">
                                <label class="product-image__label">現在の画像</label>
                                <img src="{{ asset('storage/images/' . $product->img_path) }}" alt="商品画像" class="product-image__preview">
                            </div>
                        @endif
                    </div>
                </div>

                <div class="login__buttons">
                    <button type="button" class="login__btn login__btn--blue" id="back-button" data-href="{{ route('product.detail', $product->id) }}">
                        戻る
                    </button>
                    <button type="submit" class="login__btn login__btn--orange">
                        更新
                    </button>
                </div>
                 @if ($errors->any())
                    <div class="edit-product__errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
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
@endsection

<link href="{{ asset('css/products-edit.css') }}?v={{ time() }}" rel="stylesheet">
