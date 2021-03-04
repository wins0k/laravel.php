<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Product;

class MainController extends Controller
{
    public function IndexPage()
    {
        $data['main_menu'] = CategoryController::MainCatMenu();
        $data['slider'] = Slider::View();
        $data['latest'] = Product::LatestProducts(6);
        $data['best_salling'] = Product::BestSellingProducts();
        $data['cart_count'] = Cart::CountItems();

        return view('site.index.index', compact('data'));
    }

}
