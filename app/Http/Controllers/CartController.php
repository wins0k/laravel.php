<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function AddProductToCart($id)
    {
        return Cart::AddProduct($id);
    }

    public function ProductsInCart()
    {

        $data['main_menu'] = CategoryController::MainCatMenu();
        $data['cart_count'] = Cart::CountItems();
        $data['best_salling'] = Product::BestSellingProducts(4);

        $productsInCart = false;
        $productsInCart = Cart::GetProducts();

        if ($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::GetProductsByIds($productsIds);
            $data['total_price'] = Cart::GetTotalPrice($products);
        }

        $data['products'] = $products;

        return view('site.cart.index', compact('data'));
    }
}
