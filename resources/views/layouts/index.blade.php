<!DOCTYPE html>
<html lang="ru">
<head>
    <title>@yield('title') | Divisima</title>
    <meta charset="UTF-8">
    <meta name="description" content="Divisima">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/favicon.ico" rel="shortcut icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/flaticon.css"/>
    <link rel="stylesheet" href="/css/slicknav.min.css"/>
    <link rel="stylesheet" href="/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/css/animate.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloder">
    <div class="loader"></div>
</div>
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <a href="{{ route('index') }}" class="site-logo">
                        <img src="/img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form">
                        <input type="text" placeholder="Поиск в Divisima...">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a href="{{ route('account') }}">Войти / Создать аккаунт</a>
                        </div>
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                <span>0</span>
                            </div>
                            <a href="{{ route('cart') }}">Корзина</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <ul class="main-menu">
                <li><a href="{{ route('index') }}/">Главная</a></li>
                <li><a href="{{ route('catalog', ['category'=>'woman']) }}">Женское</a></li>
                <li><a href="{{ route('catalog', ['category'=>'man']) }}">Мужское</a></li>
                <li><a href="{{ route('catalog', ['category'=>'jewerly']) }}">Украшения
                        <span class="new">Новинка</span>
                    </a></li>
                <li><a href="{{ route('catalog', ['category'=>'shoes']) }}">Обувь</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('catalog', ['category'=>'shoes']) }}/sneakers">Кроссовки</a></li>
                        <li><a href="{{ route('catalog', ['category'=>'shoes']) }}/sandals">Сандали</a></li>
                        <li><a href="{{ route('catalog', ['category'=>'shoes']) }}/formals">Официальная обувь</a></li>
                        <li><a href="{{ route('catalog', ['category'=>'shoes']) }}/boots">Ботинки</a></li>
                        <li><a href="{{ route('catalog', ['category'=>'shoes']) }}/flipflops">Шлепанцы</a></li>
                    </ul>
                </li>
                <li><a href="#">Блог</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
    </nav>
</header>
@yield('content')
<section class="footer-section">
    <div class="container">
        <div class="footer-logo text-center">
            <a href="{{ route('index') }}"><img src="/img/logo-light.png" alt=""></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>О нас</h2>
                    <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                    <img src="/img/cards.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Ссылки</h2>
                    <ul>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Статус заказа</a></li>
                        <li><a href="#">Возврат</a></li>
                        <li><a href="#">Вакансии</a></li>
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Блог</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Партнеры</a></li>
                        <li><a href="#">Блоггеры</a></li>
                        <li><a href="#">Поддержка</a></li>
                        <li><a href="#">Условия</a></li>
                        <li><a href="#">Пресса</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Блог</h2>
                    <div class="fw-latest-post-widget">
                        <div class="lp-item">
                            <div class="lp-thumb set-bg" data-setbg="/img/blog-thumbs/1.jpg"></div>
                            <div class="lp-content">
                                <h6>Что одеть?</h6>
                                <span>21 февраля 2021</span>
                                <a href="#" class="readmore">Подробнее</a>
                            </div>
                        </div>
                        <div class="lp-item">
                            <div class="lp-thumb set-bg" data-setbg="/img/blog-thumbs/2.jpg"></div>
                            <div class="lp-content">
                                <h6>Тренды этого года</h6>
                                <span>20 февраля 2021</span>
                                <a href="#" class="readmore">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h2>Контакты</h2>
                    <div class="con-info">
                        <span>C.</span>
                        <p>Your Company Ltd </p>
                    </div>
                    <div class="con-info">
                        <span>B.</span>
                        <p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
                    </div>
                    <div class="con-info">
                        <span>T.</span>
                        <p>+53 345 7953 32453</p>
                    </div>
                    <div class="con-info">
                        <span>E.</span>
                        <p>office@youremail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">
            <div class="social-links">
                <a href="#" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
                <a href="#" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="#" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                <a href="#" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                <a href="#" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
            </div>
            <p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
        </div>
    </div>
</section>
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.slicknav.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.nicescroll.min.js"></script>
<script src="/js/jquery.zoom.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/main.js"></script>

</body>
</html>
