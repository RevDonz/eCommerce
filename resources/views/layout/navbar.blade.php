<section class="hero {{ (request()->segment(1) == '') ? '' : 'hero-normal' }}">
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
                    @if(request()->segment(1) == '')
                        <div class="hero__item set-bg" data-setbg="{{ asset('ogani/img/hero/banner.jpg') }}">
                            <div class="hero__text">
                                <span>FRUIT FRESH</span>
                                <h2>Vegetable <br />100% Organic</h2>
                                <p>Free Pickup and Delivery Available</p>
                                <a href="#" class="primary-btn">SHOP NOW</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>