<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'IndexPage'])->name('index');

Route::get('/account', function () {
    return true;
})->name('account');

Route::get('/cart', [CartController::class, 'ProductsInCart'])->name('cart');

Route::get('/cart/add/{id}', [CartController::class, 'AddProductToCart'])->name('cart.add');

Route::get('/wish/add/{id}', function () {
    return view('site.wish.index');
})->name('wish.add');

Route::get('/catalog/{cat?}/{subcat?}', function($cat = false, $subcat = false) {

    return view('site.category.index', compact('catName'));
})->name('catalog');
