<?php

namespace App\Models;

class Wish
{
    public static function AddProductToWish($id)
    {
        $id = intval($id);

        $productsInWish = [];

        if (session('productsW')) {
            $productsInWish = session('productsW');
        }

        if (!in_array($id, $productsInWish)) {
            array_push($productsInWish, $id);
        }

        session(['productsW' => $productsInWish]);

        return true;
    }

    public static function GetProductsWish()
    {
        if (session('productsW')) {
            return session('productsW');
        }

        return false;
    }

    public static function GetTotalWishPrice($products)
    {
        $productsInCart = self::GetProductsWish();
        if ($productsInCart) {
            $total = 0;
            foreach ($products as $item) {
                $total += $item['price'];
            }
        }

        return $total;
    }

    public static function GetRemoveProductFromWish($id)
    {
        $productsInWish = session('productsW');
        $key = array_search($id, $productsInWish);

        if ($key !== false) {
            session(['productsW' => false]);
            unset($productsInWish[$key]);
            session(['productsW' => $productsInWish]);
        }

        return back();
    }

    public static function GetWishClear()
    {
        return session(['productsW' => false]);
    }

    public static function GetWishToCart()
    {
        $wish = session('productsW');
        $cart = session('products') ?? [];

        session(['products' => false]);
        session(['productsW' => false]);

        foreach ($wish as $key => $val) {
            if (!array_key_exists($val, $cart)) {
                $cart[$val] = 1;
            } else {
                $cart[$val]++;
            }

        }

        session(['products' => $cart]);

        return redirect(route('cart'));
    }
}
