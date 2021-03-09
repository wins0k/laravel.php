<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function ProductPage($id)
    {
        $data['main_menu'] = CategoryController::MainCatMenu();
        $data['best_salling'] = Product::BestSellingProducts(8);
        $data['cart_count'] = Cart::CountItems();

        $product = Product::GetProductById($id);
        if ($product) {
            $data['product'] = $product;
        }

        return view('site.product.index', compact('data'));
    }
}
