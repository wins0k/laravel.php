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
}
