<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', // 実際のカラム名に合わせて調整
        // 他に登録可能なカラムがあればここに追加
    ];

    // 関連するリレーション（例: Productとの関係）
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
