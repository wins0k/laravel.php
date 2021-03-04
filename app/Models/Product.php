<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Product
{
    const COUNT = 6;

    public static function LatestProducts($count = self::COUNT)
    {
        $res = DB::table('products')->where('status', 1)->orderBy('id', 'desc')->limit($count)->get();
        return $res;
    }

    public static function BestSellingProducts($count = self::COUNT)
    {
        $res = DB::table('products')->where('status', 1)->orderBy('sales', 'desc')->limit($count)->get();
        return $res;
    }


    public static function GetProductsByIds($productsIds)
    {

        $res = DB::table('products')->where('status', 1)->whereIn('id', $productsIds)->get();

        $i = 0;
        $quantity = session('products');
        foreach ($res as $res) {
            $products[$i]['id'] = $res->id;
            $products[$i]['title'] = $res->title;
            $products[$i]['price'] = $res->price;
            $products[$i]['preview'] = $res->preview;
            $products[$i]['quantity'] = $quantity[$res->id];
            $products[$i]['total'] = $res->price * $quantity[$res->id];
            $i++;
        }

        return $products;
    }
}
