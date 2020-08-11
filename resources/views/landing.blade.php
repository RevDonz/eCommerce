<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eCommerce | Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('ogani/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ogani/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ogani/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ogani/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ogani/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ogani/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ogani/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ogani/css/style.css') }}" type="text/css">
</head>

<body>

    <!-- Humberger Begin -->
    @include('templates.humberger')
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    @include('templates.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Semua Kategori</span>
                        </div>
                        <ul>
                            <li><a href="#">Kameja</a></li>
                            <li><a href="#">Celana</a></li>
                            <li><a href="#">Kaos</a></li>
                            <li><a href="#">Jaket</a></li>
                            <li><a href="#">Hoodie</a></li>
                            <li><a href="#">Sweater</a></li>
                            <li><a href="#">Tas</a></li>
                            <li><a href="#">Handbag</a></li>
                            <li><a href="#">Sepatu</a></li>
                            <li><a href="#">Sandal</a></li>
                            <li><a href="#">Topi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Semua Kategori
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Apa yang Anda butuhkan?">
                                <button type="submit" class="site-btn">CARI</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('ogani/img/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    {{-- content --}}
    @yield('content')

    <!-- Footer Section Begin -->
    @include('templates.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('ogani/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('ogani/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ogani/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('ogani/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('ogani/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('ogani/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('ogani/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('ogani/js/main.js') }}"></script>



</body>

</html>