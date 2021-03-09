<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Wish;
use App\Models\Product;

class WishController extends Controller
{
    /**
     *
     * Контроллер добавления товара в желания
     *
     * @param $id
     * @return bool
     */
    public function AddProductToWish($id)
    {
        return Wish::AddProductToWish($id);
    }

    /**
     *
     * Отображение товаров в списке желаний и другие данные для страниц
     *
     * @return array $data
     */
    public function ProductsInWish()
    {
        $data['main_menu'] = CategoryController::MainCatMenu();
        $data['cart_count'] = Cart::CountItems();
        $data['best_salling'] = Product::BestSellingProducts(4);

        $productsInWish = false;
        $products = false;
        $productsInWish = Wish::GetProductsWish();

        if ($productsInWish) {
            $productsIds = array_values($productsInWish);
            $products = Product::GetProductsByIds($productsIds);
            $data['total_price'] = Wish::GetTotalWishPrice($products);
        }

        $data['products'] = $products;

        return view('site.wish.index', compact('data'));
    }

    /**
     *
     * Удаление из списка желаний по ID
     *
     * @param $id
     */
    public function RemoveProductFromWish($id)
    {
        return Wish::GetRemoveProductFromWish($id);
    }

    /**
     *
     * Очистка списка желаний
     *
     * @return bool
     */
    public function ClearWish()
    {
        return Wish::GetWishClear();
    }

    /**
     *
     * Перенос из списка желаний в корзину
     *
     * @return bool
     */
    public function WishToCart()
    {
        return Wish::GetWishToCart();
    }
}
