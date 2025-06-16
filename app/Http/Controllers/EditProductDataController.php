<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Company;

class EditProductDataController extends Controller
{
    public function editProductData($id)
    {
        //商品新規登録フォームの表示
        $product = Product::with('company')->findOrFail($id); // 商品+メーカー情報を取得
        $companies = Company::all();

        return view('edit_product_data', compact('product', 'companies')); // ビューに渡す
    }

    // 編集内容の保存処理（PUT）
    public function updateProductData(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'company_id' => 'required|exists:companies,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'comment' => 'nullable|string',
            'img_path' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('img_path')) {
            $path = $request->file('img_path')->store('images', 'public');
            $validated['img_path'] = basename($path);
        }

        $product->update($validated);

        return redirect()->route('product.detail', $product->id)->with('success', '商品情報を更新しました');
    }
}
