<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'IndexPage'])->name('index');

Route::get('/account', function () {
    return true;
})->name('account');

Route::get('/cart', function () {
    return view('site.cart.index');
})->name('cart');

Route::get('/catalog/{cat?}/{subcat?}', function($cat = false, $subcat = false) {

    $catName = 'Каталог';

    switch ($cat) {
        case 'woman':
            $catName = 'Женская одежда';
            break;
        case 'man':
            $catName = 'Мужская одежда';
            break;
        case 'jewerly':
            $catName = 'Украшения';
            break;
        case 'shoes':
            $catName = 'Обувьhm h gh';
            break;
    }

    echo $subcat;
    return view('site.category.index', compact('catName'));
})->name('catalog');
