<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;

class MainController extends Controller
{
    public function IndexPage()
    {
        $data['slider'] = Slider::View();
        $data['latest'] = Product::LatestProducts();

        return view('site.index.index', compact('data'));
    }
}
