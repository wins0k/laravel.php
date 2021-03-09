@extends('layouts.index')

@section('title', 'Корзина')

@section('content')
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>@yield('title')@if(!is_array($data['products'])) пустая @endif</h3>
                    @if(is_array($data['products']))
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
                                @foreach($data['products'] as $product)
                                <tr>
                                    <td class="product-col" product-id="{{ $product['id'] }}">
                                        <a href="{{ route('product', ['id' => $product['id']]) }}">
                                            <img src="{{ $product['preview'] }}" alt="">
                                            <div class="pc-title">
                                                <h4>{{ $product['title'] }}</h4>
                                                <p><span>{{ $product['price'] }}</span> руб.</p>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty" product-id="{{ $product['id'] }}">
                                                <input type="text" value="{{ $product['quantity'] }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="size-col"><h4>M</h4></td>
                                    <td class="total-col" product-id="{{ $product['id'] }}"><h4><span>{{ $product['total'] }}</span> руб.</h4></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="total-cost">
                            <h6>Всего <span>{{ $data['total_price'] }}</span> руб.</h6>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 card-right">
                @if(is_array($data['products']))
                    <form class="promo-code-form">
                        <input type="text" placeholder="Введите промокод">
                        <button>Применить</button>
                    </form>
                    <a href="#" class="site-btn">Перейти к оформлению</a>
                    <a href="#" class="site-btn sb-dark">Продолжить покупки</a>
                @endif
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
            @foreach($data['best_salling'] as $item)
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <a href="{{ route('product', ['id' => $item->id]) }}">
                                @if ($item->is_new)<div class="tag-new">Новинка</div>@endif
                                <img src="{{ $item->preview }}" alt="{{ $item->title }}">
                            </a>
                            <div class="pi-links">
                                <a href="{{ route('cart.add', ['id' => $item->id]) }}" data-id="{{ $item->id }}" class="add-card add-product-to"><i class="flaticon-bag"></i><span>В корзину</span></a>
                                <a href="{{ route('wish.add', ['id' => $item->id]) }}" data-id="{{ $item->id }}" class="wishlist-btn add-product-to"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <a href="{{ route('product', ['id' => $item->id]) }}">
                                <h6>{{ $item->price }} руб.</h6>
                                <p>{{ $item->title }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
