<?php

namespace App\Models;

use Illuminate\Support\Facades\Request;

class Cart
{
    public static function AddProduct($id)
    {
        $id = intval($id);

        $productsInCart = [];

        if (session('products')) {
            $productsInCart = session('products');
        }

        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }

        session(['products' => $productsInCart]);

        return self::CountItems();
    }

    public static function CountItems()
    {
        if (session('products')) {
            $count = 0;
            foreach (session('products') as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function GetProducts()
    {
        if (session('products')) {
            return session('products');
        }

        return false;
    }

    public static function GetTotalPrice($products)
    {
        $productsInCart = self::GetProducts();
        if ($productsInCart) {
            $total = 0;
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }
}
