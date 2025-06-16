<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login_form', [App\Http\Controllers\LoginFormController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [App\Http\Controllers\LoginFormController::class, 'login'])->name('login');

Route::get('/new_user', [App\Http\Controllers\NewUserController::class, 'showForm'])->name('register.form');
Route::post('/new_user', [App\Http\Controllers\NewUserController::class, 'registerUser'])->name('register.user');

Route::get('/products_list', [App\Http\Controllers\ProductsListController::class, 'showList'])
    ->middleware('auth')
    ->name('products.list');

Route::delete('/products/{id}', [App\Http\Controllers\ProductsListController::class, 'destroy'])->name('products.destroy');

Route::get('/new_product', [App\Http\Controllers\NewProductController::class, 'showForm'])->name('register.product');
Route::post('/new_product', [App\Http\Controllers\NewProductController::class, 'registerProduct'])->name('register.product'); 

Route::get('/product_details/{id}', [App\Http\Controllers\ProductDetailsController::class, 'detail'])->name('product.detail');

Route::get('/edit_product_data/{id}', [App\Http\Controllers\EditProductDataController::class, 'editProductData'])->name('edit.product.data');
Route::put('/edit_product_data/{id}', [App\Http\Controllers\EditProductDataController::class, 'updateProductData'])->name('update.product.data');

Route::get('/companies', [App\Http\Controllers\CompanyDataController::class, 'showForm'])->name('companies.form');
