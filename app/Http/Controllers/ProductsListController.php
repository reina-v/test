<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Company;
use App\Http\Requests\DeleteProductRequest;

class ProductsListController extends Controller
{
    public function showList(Request $request)
    {
        $products = Product::with('company')
            ->filterByRequest($request)
            ->paginate(10);

        $companies = Company::all();

        return view('products_list', compact('products', 'companies'));
    }
    
    public function destroy(DeleteProductRequest $request, $id)
    {
        $product = Product::findOrFail($id); // 該当商品を取得（見つからない場合は404）
        $product->delete();

        return redirect()->route('products.list')->with('success', '商品を削除しました');
    }
}
