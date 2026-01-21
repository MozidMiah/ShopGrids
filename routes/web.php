<?php

use App\Http\Controllers\MyCommerceController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MyCommerceController::class, 'index'])->name('home');
Route::get('/product-category',[MyCommerceController::class, 'category'])->name('product-category');
Route::get('/product-detail',[MyCommerceController::class, 'detail'])->name('product-detail');
