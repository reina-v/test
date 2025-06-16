<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Product;

class NewProductController extends Controller
{
    //商品新規登録フォームの表示
    public function showForm() {
        $companies = Company::all();
        return view('new_product', compact('companies'));
    }

    //登録処理
    public function registerProduct(Request $request) {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'company_id'   => 'required|exists:companies,id',
            'price'        => 'required|numeric',
            'stock'        => 'required|numeric',
            'comment'      => 'nullable|string|max:255',
            'img_path'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8192',        
        ]);

        $imgName = null;
        if ($request->hasFile('img_path')) {
            $img = $request->file('img_path');
            $imgName = time() . '_' . $img->getClientOriginalName(); // 例: 画像名にタイムスタンプを追加
            $img->move(public_path('storage/images'), $imgName); // 保存先を指定（事前にstorage:linkが必要）
        }
        
        Product::create([
            'product_name' => $request->product_name,
            'company_id'   => $request->company_id,
            'price'        => $request->price,
            'stock'        => $request->stock,
            'comment'      => $request->comment,
            'img_path'     => $imgName ?? null,
        ]);

        return redirect()->route('register.product')->with('success','登録が完了しました。');

    }
}
