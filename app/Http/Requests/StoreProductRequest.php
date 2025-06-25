<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'product_name' => 'required|string|max:255',
            'company_id'   => 'required|exists:companies,id',
            'price'        => 'required|numeric|min:0',
            'stock'        => 'required|numeric|min:0',
            'comment'      => 'nullable|string|max:255',
            'img_path'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ];
    }

    public function attributes(): array
    {
        return [
            'product_name' => '商品名',
            'company_id'   => 'メーカー',
            'price'        => '価格',
            'stock'        => '在庫数',
            'comment'      => 'コメント',
            'img_path'     => '商品画像',
        ];
    }

    public function messages()
    {
        return [
            'product_name.required' => '商品名は必須です。',
            'company_id.required'   => 'メーカーを選択してください。',
            'price.required'        => '価格は必須です。',
            'stock.required'        => '在庫数は必須です。',
        ];
    }
}
