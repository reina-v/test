<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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

    public function rules(): array
    {
        return [
            'product_name' => 'required|string|max:255',
            'company_id'   => 'required|exists:companies,id',
            'price'        => 'required|numeric|min:0',
            'stock'        => 'required|integer|min:0',
            'comment'      => 'nullable|string',
            'img_path'     => 'nullable|image|max:2048',
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
    
    public function messages(): array
    {
        return [
            'product_name.required' => '商品名は必須です。',
            'company_id.required'   => 'メーカーを選択してください。',
            'company_id.exists'     => '選択されたメーカーが存在しません。',
            'price.required'        => '価格は必須です。',
            'price.numeric'         => '価格は数値で入力してください。',
            'stock.required'        => '在庫数は必須です。',
            'stock.integer'         => '在庫数は整数で入力してください。',
            'img_path.max'          => '画像サイズは2MB以内にしてください。',
        ];
    }
}
