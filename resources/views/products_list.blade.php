@extends('layouts.app')

@section('title', '商品一覧')

@section('content')
    <div class="product-list">
        <div class="product-list__header">
            <h1 class="list__title">商品情報一覧画面</h1>

            <div class="product-list__action">
                <button type="button" class="create__btn--orange js-goto-register" data-href="{{ route('register.product') }}">
                    商品新規登録
                </button>
            </div>
        </div>

        <!-- 検索フォーム -->
        <form method="GET" action="{{ route('products.list') }}" class="product-list__search-form">
            <div class="product-list__search-row">
                <div class="product-list__search-col">
                    <input
                        type="text"
                        name="keyword"
                        class="product-list__input"
                        placeholder="商品名・キーワードで検索"
                        value="{{ request('keyword') }}"
                    >
                </div>
                <div class="product-list__search-col">
                    <select name="company_id" class="product-list__select">
                        <option value="">全てのメーカー</option>
                        @foreach ($companies as $company)
                            @php
                                $selected = request('company_id') == $company->id ? 'selected' : '';
                            @endphp
                            <option value="{{ $company->id }}" {{ $selected }}>
                                {{ $company->company_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="button button--primary">検索</button>
                </div>
            </div>
        </form>

        <!-- テーブル -->
        <table class="product-list__table">
            <thead class="product-list__table-head">
                <tr>
                    <th>ID</th>
                    <th>商品画像</th>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>在庫数</th>
                    <th>メーカー名</th>
                    <th></th><!-- 編集ボタン用 -->
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            @if ($product->img_path)
                                <img src="{{ asset('storage/images/' . $product->img_path) }}" alt="商品画像" width="80">
                            @else
                                画像なし
                            @endif
                        </td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ number_format($product->price) }} 円</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->company->company_name ?? '不明' }}</td>
                        <td>
                            <!-- 詳細ボタン -->
                            <form action="{{ route('product.detail', $product->id) }}" method="GET" style="display:inline;">
                                <button type="submit" class="button button--danger button--small">詳細</button>
                            </form>
                            <!-- 削除ボタン -->
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button button--danger button--small delete-button">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-product-list__pagination">
            {{ $products->appends(request()->query())->links() }}
            <div class="pagination__page-info">
                ページ {{ $products->currentPage() }} / {{ $products->lastPage() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/confirm_delete.js') }}"></script>
    <script src="{{ asset('js/product_list.js') }}"></script>
@endsection

<link href="{{ asset('css/products-list.css') }}?v={{ time() }}" rel="stylesheet">

