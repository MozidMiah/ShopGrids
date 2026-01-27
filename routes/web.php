<?php

use App\Http\Controllers\MyCommerceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MyCommerceController::class, 'index'])->name('home');
Route::get('/product-category',[MyCommerceController::class, 'category'])->name('product-category');
Route::get('/product-detail',[MyCommerceController::class, 'detail'])->name('product-detail');

Route::get('/show-cart',[CartController::class, 'index'])->name('show-cart');

Route::get('/checkout',[CheckoutController::class, 'index'])->name('checkout');


//For Admin Dashboard

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/add',[CategoryController::class, 'index'])->name('category.add');
    Route::post('/category/new',[CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/manage',[CategoryController::class, 'manage'])->name('category.manage');
});

