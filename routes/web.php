<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\OrderController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('product-category')->group(function () {
    Route::get('/',[ProductCategoryController::class,'index'])->name('product.category.list');
    Route::get('create',[ProductCategoryController::class,'create'])->name('product.category.create');
    Route::post('store',[ProductCategoryController::class,'store'])->name('product.category.store');
    Route::get('show/{id}',[ProductCategoryController::class,'show'])->name('product.category.show');
    Route::get('edit/{id}',[ProductCategoryController::class,'edit'])->name('product.category.edit');
    Route::put('update/{id}',[ProductCategoryController::class,'edit'])->name('product.category.update');
});

Route::prefix('product')->group(function () {
    Route::get('/',[ProductController::class,'index'])->name('product.list');
    Route::get('create',[ProductController::class,'create'])->name('product.create');
    Route::post('store',[ProductController::class,'store'])->name('product.store');
    Route::get('show/{id}',[ProductController::class,'show'])->name('product.show');
    Route::get('edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::put('update/{id}',[ProductController::class,'edit'])->name('product.update');
});

Route::prefix('order-detail')->group(function () {
    Route::get('show/{id}',[ProductDetailController::class,'show'])->name('product_detail.show');
    Route::post('add-cart/{id}',[ProductDetailController::class,'addCart'])->name('product_detail.add_cart');
});

Route::prefix('order')->group(function () {
    Route::get('/',[OrderController::class,'index'])->name('order.list');
    Route::post('checkout',[OrderController::class,'checkout'])->name('order.checkout');
    Route::get('removed',[OrderController::class,'removed'])->name('order.removed');
});