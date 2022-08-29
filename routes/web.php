<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoryController;

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
    Route::get('/',[ProductCategoryController::class,'index'])->name('list');
    Route::get('create',[ProductCategoryController::class,'create'])->name('create');
    Route::post('store',[ProductCategoryController::class,'store'])->name('store');
    Route::get('show/{id}',[ProductCategoryController::class,'show'])->name('show');
    Route::get('edit/{id}',[ProductCategoryController::class,'edit'])->name('edit');
    Route::put('update/{id}',[ProductCategoryController::class,'edit'])->name('update');
});
