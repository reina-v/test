<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductDetailsController extends Controller
{
    public function detail($id)
    {
        $product = Product::with('company')->findOrFail($id); // 商品 + メーカー情報を取得

        return view('product_details', compact('product'));
    }
}
