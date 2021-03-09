@extends('layouts.index')

@section('title', 'Список желаний')

@section('content')
    <section class="cart-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table">
                        <h3>@yield('title')@if(!is_array($data['products'])) пуст@endif</h3>
                        @if(is_array($data['products']))
                            <div class="cart-table-warp">
                                <table>
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
                                            <td valign="top">
                                                <div class="wish-actions">
                                                    <a href="{{ route('cart.add', ['id' => $product['id']]) }}" data-id="{{ $product['id'] }}" class="add-product-to"><i class="flaticon-bag"></i></a>
                                                    <a href="{{ route('wish.del', ['id' => $product['id']]) }}" data-id="{{ $product['id'] }}"><i class="flaticon-cancel-1"></i></a>
                                                </div>
                                            </td>
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
                @if(is_array($data['products']))
                    <div class="col-lg-4 card-right">
                        <a href="{{ route('wish.clear') }}" class="site-btn clear-wish">Очистить все желания</a>
                        <a href="{{ route('wish.to.cart') }}" class="site-btn sb-dark wish-to-cart">Добавить все в корзину</a>
                    </div>
                @endif
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
