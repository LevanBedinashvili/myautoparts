@extends('layout.app')
@section('content')
<!--====== Start Hero Section ======-->
<section class="hero-area-v2">
    <div class="hero-slide-two">
        <div class="single-hero bg_cover" style="background-image: url(assets/guest/images/bg/hero-2_1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero-content text-center">
                            @if(app()->getLocale() == 'ka')
                            <h1>ავტონაწილების მარკეტი</h1>
                            <h5>იპოვეთ თქვენი მანქანისთვის საჭირო ავტონაწილი ჩვენთან</h5>
                            @endif
                            @if(app()->getLocale() == 'en')
                            <h1>Auto parts market</h1>
                            <h5>Find the auto parts you need for your car with us</h5>
                            @endif
                            @if(app()->getLocale() == 'ru')
                            <h1>Рынок автозапчастей</h1>
                            <h5>Найдите у нас нужные автозапчасти для вашего автомобиля</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero bg_cover" style="background-image: url(assets/guest/images/bg/hero-2_2.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero-content text-center">
                            @if(app()->getLocale() == 'ka')
                            <h1>ავტონაწილების მარკეტი</h1>
                            <h5>იპოვეთ თქვენი მანქანისთვის საჭირო ავტონაწილი ჩვენთან</h5>
                            @endif
                            @if(app()->getLocale() == 'en')
                            <h1>Auto parts market</h1>
                            <h5>Find the auto parts you need for your car with us</h5>
                            @endif
                            @if(app()->getLocale() == 'ru')
                            <h1>Рынок автозапчастей</h1>
                            <h5>Найдите у нас нужные автозапчасти для вашего автомобиля</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero bg_cover" style="background-image: url(assets/guest/images/bg/hero-2_3.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero-content text-center">
                            @if(app()->getLocale() == 'ka')
                            <h1>ავტონაწილების მარკეტი</h1>
                            <h5>იპოვეთ თქვენი მანქანისთვის საჭირო ავტონაწილი ჩვენთან</h5>
                            @endif
                            @if(app()->getLocale() == 'en')
                            <h1>Auto parts market</h1>
                            <h5>Find the auto parts you need for your car with us</h5>
                            @endif
                            @if(app()->getLocale() == 'ru')
                            <h1>Рынок автозапчастей</h1>
                            <h5>Найдите у нас нужные автозапчасти для вашего автомобиля</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Emd Hero Section ======-->

<!--====== Start Shop Section ======-->
<section class="shop-grid-v2 pt-50 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title mb-40 text-center">
                    @if(app()->getLocale() == 'ka')
                    <h2>ავტომობილის ბრენდები</h2>
                    @endif
                    @if(app()->getLocale() == 'en')
                    <h2>Car Brands</h2>
                    @endif
                    @if(app()->getLocale() == 'ru')
                    <h2>Марки автомобилей</h2>
                    @endif
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="new" class="tab-pane active">
                <div class="row">
                    @foreach ($getCategories as $cat)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="shop-item mb-20">
                            <div class="shop-img">
                                <img src="{{ asset('autoparts/storage/app/public/'. $cat->image) }}"
                                    style="width: 384px; height: 160px;" alt="">
                                <div class="shop-overlay">
                                    <div class="overlay-content">
                                        <ul>
                                            <li><a href="{{ asset('autoparts/storage/app/public/'. $cat->image) }}"
                                                    class="icon img-popup"><i class="far fa-search-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-content text-center">
                                @if(app()->getLocale() == 'ka')
                                <h3 class="title"><a href="{{ route('subcategory', $cat->id) }}">{{ $cat->name_geo }}</a></h3>
                                @endif
                                @if(app()->getLocale() == 'en')
                                <h3 class="title"><a href="{{ route('subcategory', $cat->id) }}">{{ $cat->name_eng }}</a></h3>
                                @endif
                                @if(app()->getLocale() == 'ru')
                                <h3 class="title"><a href="{{ route('subcategory', $cat->id) }}">{{ $cat->name_rus }}</a></h3>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Shop Section ======-->


<!--====== Start Features Section ======-->
<section class="chakta-features pt-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title mb-40 text-center">
                    @if(app()->getLocale() == 'ka')
                    <h2>რას გთავაზობთ?</h2>
                    @endif
                    @if(app()->getLocale() == 'en')
                    <h2>What We Offer?</h2>
                    @endif
                    @if(app()->getLocale() == 'ru')
                    <h2>Что мы предлагаем?</h2>
                    @endif
                </div>
            </div>
        </div>
        <div class="row features-slide">
            <div class="col-lg-4">
                <div class="features-item">
                    <div class="features-icon">
                        <img src="assets/guest/images/icon-2.png" alt="">
                    </div>
                    <div class="features-content">
                        @if(app()->getLocale() == 'ka')
                        <h5>100% სანდო კომპანია</h5>
                        <p>ჩვენი კლიენტები სავსებით გვენდობიან</p>
                        @endif
                        @if(app()->getLocale() == 'en')
                        <h5>100% Trusted Partner</h5>
                        <p>We Are Trusted</p>
                        @endif
                        @if(app()->getLocale() == 'ru')
                        <h5>Надежная компания</h5>
                        <p>Нам доверяют</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-item">
                    <div class="features-icon">
                        <img src="assets/guest/images/icon-4.png" alt="">
                    </div>
                    <div class="features-content">
                        @if(app()->getLocale() == 'ka')
                        <h5>24/7 დახმარება</h5>
                        <p>ჩვენ მზად ვართ დაგეხმარებით</p>
                        @endif
                        @if(app()->getLocale() == 'en')
                        <h5>24/7 Support</h5>
                        <p>We are here to help you</p>
                        @endif
                        @if(app()->getLocale() == 'ru')
                        <h5>24/7 помощь</h5>
                        <p>Мы здесь чтобы помочь вам</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-item">
                    <div class="features-icon">
                        <img src="assets/guest/images/icon-3.png" alt="">
                    </div>
                    <div class="features-content">
                        @if(app()->getLocale() == 'ka')
                        <h5>შეღავათიანი ფასები</h5>
                        <p>ავტონაწილები შეღავათიან ფასად</p>
                        @endif
                        @if(app()->getLocale() == 'en')
                        <h5>Low Prices</h5>
                        <p>In our company prices are low</p>
                        @endif
                        @if(app()->getLocale() == 'ru')
                        <h5>Низкие цены</h5>
                        <p>У нас низкие цены</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Features Section ======-->


<section class="shop-list-section pt-80 pb-50 light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title mb-40 text-center">
                    @if(app()->getLocale() == 'ka')
                    <h2>ავტომობილის ნაწილები</h2>
                    @endif
                    @if(app()->getLocale() == 'en')
                    <h2>Auto Parts</h2>
                    @endif
                    @if(app()->getLocale() == 'ru')
                    <h2>Автомобильные запчасти</h2>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($lastAutoparts as $autopart)
            <div class="col-lg-6">
                <div class="shop-item mb-30">
                    <div class="shop-img">
                        <img src="{{ asset('autoparts/storage/app/public/'. $autopart->image) }}"
                            style="width: 345px; height: 286px;" alt="">
                        <div class="shop-overlay">
                            <div class="overlay-content">
                                <ul>
                                    <li><a href="{{ asset('autoparts/storage/app/public/'. $autopart->image) }}"
                                            class="icon img-popup"><i class="far fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="shop-content">
                        @if(app()->getLocale() == 'ka')
                        <h3 class="title"><a href="{{ route('product_detail', $autopart->products_id) }}">{{ Str::words($autopart->products_title_geo, '5'); }}</a></h3>
                        @endif
                        @if(app()->getLocale() == 'en')
                        <h3 class="title"><a href="{{ route('product_detail', $autopart->products_id) }}">{{ Str::words($autopart->products_title_eng, '5'); }}</a></h3>
                        @endif
                        @if(app()->getLocale() == 'ru')
                        <h3 class="title"><a href="{{ route('product_detail', $autopart->products_id) }}">{{ Str::words($autopart->products_title_rus, '5'); }}</a></h3>
                        @endif
                        @if(app()->getLocale() == 'ka')
                        <a href="{{ route('product_detail', $autopart->products_id) }}" class="main-btn">სრულად ნახვა</a>
                        @endif
                        @if(app()->getLocale() == 'en')
                        <a href="{{ route('product_detail', $autopart->products_id) }}" class="main-btn">View More</a>
                        @endif
                        @if(app()->getLocale() == 'ru')
                        <a href="{{ route('product_detail', $autopart->products_id) }}" class="main-btn">увидеть все</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
