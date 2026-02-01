<?php

use App\Http\Controllers\BrandController;


use App\Http\Controllers\MyCommerceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MyCommerceController::class, 'index'])->name('home');
Route::get('/product-category', [MyCommerceController::class, 'category'])->name('product-category');
Route::get('/product-detail', [MyCommerceController::class, 'detail'])->name('product-detail');

Route::get('/show-cart', [CartController::class, 'index'])->name('show-cart');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');


//For Admin Dashboard

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('category')->name('category.')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('index');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('store', [CategoryController::class, 'store'])->name('store');

        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('update', [CategoryController::class, 'update'])->name('update');

        Route::get('status/{id}', [CategoryController::class, 'status'])->name('status');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete');
    });

    //add Sub Category module
    Route::prefix('sub-category')->name('sub-category.')->group(function () {
        Route::get('', [SubCategoryController::class, 'index'])->name('index');
        Route::get('create', [SubCategoryController::class, 'create'])->name('create');
        Route::post('store', [SubCategoryController::class, 'store'])->name('store');

        Route::get('edit/{id}', [SubCategoryController::class, 'edit'])->name('edit');
        Route::post('update', [SubCategoryController::class, 'update'])->name('update');

        Route::get('status/{id}', [SubCategoryController::class, 'status'])->name('status');
        Route::get('delete/{id}', [SubCategoryController::class, 'delete'])->name('delete');
    });


    //add brand module
    Route::prefix('brand')->name('brand.')->group(function () {
        Route::get('', [BrandController::class, 'index'])->name('index');
        Route::get('create', [BrandController::class, 'create'])->name('create');
        Route::post('store', [BrandController::class, 'store'])->name('store');


        Route::get('edit/{id}', [BrandController::class, 'edit'])->name('edit');
        Route::post('update', [BrandController::class, 'update'])->name('update');
        Route::get('status/{id}', [BrandController::class, 'status'])->name('status');
        Route::get('delete/{id}', [BrandController::class, 'delete'])->name('delete');
    });
});
