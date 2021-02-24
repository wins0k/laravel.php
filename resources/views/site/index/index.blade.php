@extends('layouts.index')

@section('title', 'Главная страница')

@section('content')
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            @foreach($data['slider'] as $slide)
            <div class="hs-item set-bg" data-setbg="{{ $slide->img }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            @if ($slide->is_new)<span>Новое поступление!</span>@endif
                            <h2>{{ $slide->title }}</h2>
                            <p>{{ $slide->description }}</p>
                            <a href="#" class="site-btn sb-line">Посмотреть</a>
                            <a href="#" class="site-btn sb-white">В корзину</a>
                        </div>
                    </div>
                    <div class="offer-card text-white">
                        <span>цена</span>
                        <h2>1990</h2>
                        <p>руб.</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <section class="features-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="/img/icons/1.png" alt="#">
                        </div>
                        <h2>Быстрая оплата</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="/img/icons/2.png" alt="#">
                        </div>
                        <h2>Премиальные товары</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="/img/icons/3.png" alt="#">
                        </div>
                        <h2>Быстрая доставка</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>Последние товары</h2>
            </div>
            <div class="product-slider owl-carousel">
                @foreach($data['latest'] as $item)
                <div class="product-item">
                    <div class="pi-pic">
                        @if ($item->is_new)<div class="tag-new">Новинка</div>@endif
                        <img src="{{ $item->preview }}" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>{{ $item->price }} руб.</h6>
                        <p>{{ $item->title }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>Самые продаваемые товары</h2>
            </div>
            <ul class="product-filter-menu">
                <li><a href="#">TOPS</a></li>
                <li><a href="#">JUMPSUITS</a></li>
                <li><a href="#">LINGERIE</a></li>
                <li><a href="#">JEANS</a></li>
                <li><a href="#">DRESSES</a></li>
                <li><a href="#">COATS</a></li>
                <li><a href="#">JUMPERS</a></li>
                <li><a href="#">LEGGINGS</a></li>
            </ul>
            <div class="row">
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
                            <div class="tag-sale">Распродажа</div>
                            <img src="/img/product/6.jpg" alt="">
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
                            <img src="/img/product/7.jpg" alt="">
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
                            <img src="/img/product/8.jpg" alt="">
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
                            <img src="/img/product/10.jpg" alt="">
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
                            <img src="/img/product/11.jpg" alt="">
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
                            <img src="/img/product/12.jpg" alt="">
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
            <div class="text-center pt-5">
                <button class="site-btn sb-line sb-dark">Показать еще</button>
            </div>
        </div>
    </section>
    <section class="banner-section">
        <div class="container">
            <div class="banner set-bg" data-setbg="/img/banner-bg.jpg">
                <div class="tag-new">Новинка</div>
                <span>Новые поступления!</span>
                <h2>Полосатые рубашки</h2>
                <a href="#" class="site-btn">Посмотреть</a>
            </div>
        </div>
    </section>
@endsection
