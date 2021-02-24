@extends('layouts.index')

@section('title', 'Корзина')

@section('content')
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>@yield('title')</h3>
                    <div class="cart-table-warp">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-th">Товар</th>
                                <th class="quy-th">Количество</th>
                                <th class="size-th">Размер</th>
                                <th class="total-th">Цена</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="product-col">
                                    <img src="/img/cart/1.jpg" alt="">
                                    <div class="pc-title">
                                        <h4>Animal Print Dress</h4>
                                        <p>1990 руб.</p>
                                    </div>
                                </td>
                                <td class="quy-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="size-col"><h4>M</h4></td>
                                <td class="total-col"><h4>1990 руб.</h4></td>
                            </tr>
                            <tr>
                                <td class="product-col">
                                    <img src="/img/cart/2.jpg" alt="">
                                    <div class="pc-title">
                                        <h4>Ruffle Pink Top</h4>
                                        <p>1990 руб.</p>
                                    </div>
                                </td>
                                <td class="quy-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="size-col"><h4>M</h4></td>
                                <td class="total-col"><h4>1990 руб.</h4></td>
                            </tr>
                            <tr>
                                <td class="product-col">
                                    <img src="/img/cart/3.jpg" alt="">
                                    <div class="pc-title">
                                        <h4>Skinny Jeans</h4>
                                        <p>1990 руб.</p>
                                    </div>
                                </td>
                                <td class="quy-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="size-col"><h4>M</h4></td>
                                <td class="total-col"><h4>1990 руб.</h4></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="total-cost">
                        <h6>Всего <span>5970 руб.</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-right">
                <form class="promo-code-form">
                    <input type="text" placeholder="Введите промокод">
                    <button>Применить</button>
                </form>
                <a href="#" class="site-btn">Перейти к оформлению</a>
                <a href="#" class="site-btn sb-dark">Продолжить покупки</a>
            </div>
        </div>
    </div>
</section>
<section class="related-product-section">
    <div class="container">
        <div class="section-title text-uppercase">
            <h2>Продолжить покупки</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">Новинка</div>
                        <img src="/img/product/2.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>1990 руб.</h6>
                        <p>Black and White Stripes Dress</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="/img/product/5.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>1990 руб.</h6>
                        <p>Flamboyant Pink Top</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="/img/product/9.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>1990 руб.</h6>
                        <p>Flamboyant Pink Top</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="/img/product/1.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>1990 руб.</h6>
                        <p>Flamboyant Pink Top</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
