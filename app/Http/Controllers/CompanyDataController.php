<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyDataController extends Controller
{
    /**
     * 会社一覧を取得してビューに渡す
     */
    public function showForm()
    {
        $companies = Company::all();
        return view('products_list', compact('companies'));
    }
}
