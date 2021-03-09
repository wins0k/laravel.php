<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'IndexPage'])->name('index');

// Аккаунт
Route::get('/account', function () {
    return true;
})->name('account');

// Корзина
Route::get('/cart', [CartController::class, 'ProductsInCart'])->name('cart');
Route::get('/cart/add/{id}', [CartController::class, 'AddProductToCart'])->name('cart.add');

// Желания
Route::get('/wish', [WishController::class, 'ProductsInWish'])->name('wish');
Route::get('/wish/add/{id}', [WishController::class, 'AddProductToWish'])->name('wish.add');
Route::get('/wish/del/{id}', [WishController::class, 'RemoveProductFromWish'])->name('wish.del');
Route::get('/wish/clear', [WishController::class, 'ClearWish'])->name('wish.clear');
Route::get('/wish/to/cart', [WishController::class, 'WishToCart'])->name('wish.to.cart');

// Каталог
Route::get('/catalog/{cat?}/{subcat?}', function($cat = false, $subcat = false) {
    return view('site.category.index', compact('catName'));
})->name('catalog');

// Товар
Route::get('/product/{id}', [ProductController::class, 'ProductPage'])->name('product');
