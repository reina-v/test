<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Company;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\DB;

class EditProductDataController extends Controller
{
    public function editProductData($id)
    {
        // 商品編集フォームの表示
        $product = Product::with('company')->findOrFail($id); // 商品+メーカー情報を取得
        $companies = Company::all();

        return view('edit_product_data', compact('product', 'companies')); // ビューに渡す
    }

    // 編集内容の保存処理（PUT）
    public function updateProductData(UpdateProductRequest $request, $id)
    {
        // トランザクション開始
        DB::beginTransaction();

        try {
            $product = Product::findOrFail($id);
            $validated = $request->validated();

            if ($request->hasFile('img_path')) {
                $path = $request->file('img_path')->store('images', 'public');
                $validated['img_path'] = basename($path);
            }

            $product->update($validated);

            DB::commit();
            return redirect()->route('product.detail', $product->id)->with('success', '商品情報を更新しました');
        }catch (\Exception $e) {
            DB::rollback(); // ロールバック
            Log::error('商品更新エラー: '.$e->getMessage()); // ログに記録

            return back()
                ->withErrors(['error' => '商品情報の更新中にエラーが発生しました。'])
                ->withInput();
        }
    }
}
