<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\RedirectResponse;

class NewProductController extends Controller
{
    //商品新規登録フォームの表示
    public function showForm() {
        $companies = Company::all();
        return view('new_product', compact('companies'));
    }

    //登録処理
    public function registerProduct(StoreProductRequest $request) {

        // トランザクション開始
        DB::beginTransaction();
        try {
            $imgName = null;
            if ($request->hasFile('img_path')) {
                $img = $request->file('img_path');
                $imgName = time() . '_' . $img->getClientOriginalName();
                $img->move(public_path('storage/images'), $imgName);
            }

            Product::create([
                'product_name' => $request->product_name,
                'company_id'   => $request->company_id,
                'price'        => $request->price,
                'stock'        => $request->stock,
                'comment'      => $request->comment,
                'img_path'     => $imgName ?? null,
            ]);

            DB::commit();
            return redirect()->route('register.product')->with('success','登録が完了しました。');

        }catch (\Exception $e) {
            DB::rollBack();
            Log::error('商品登録エラー: ' . $e->getMessage());

            return back()->withErrors(['error' => '登録処理中にエラーが発生しました。'])->withInput();
        }
    }
}
