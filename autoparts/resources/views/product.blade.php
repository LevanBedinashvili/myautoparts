@extends('layout.app')
@section('content')



    <!-- End:  Slider Section
==================================================-->
<section class="breadcrumbs-section bg_cover" style="background-image: url({{ asset('assets/guest/images//bg/breadcrumbs-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                @if(app()->getLocale() == 'ka')
                    <div class="breadcrumbs-content text-center">
                        <h1>ავტონაწილები</h1>
                        <ul class="link">
                            <li><a href="{{ route('index') }}">მთავარი</a></li>
                            <li class="active">ავტონაწილები</li>
                        </ul>
                    </div>
                @endif
                @if(app()->getLocale() == 'en')
                <div class="breadcrumbs-content text-center">
                    <h1>Auto Parts</h1>
                    <ul class="link">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">Auto Parts</li>
                    </ul>
                </div>
                @endif
                @if(app()->getLocale() == 'ru')
                <div class="breadcrumbs-content text-center">
                    <h1>автомобильные запчасти</h1>
                    <ul class="link">
                        <li><a href="{{ route('index') }}">Главная</a></li>
                        <li class="active">автомобильные запчасти</li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="shop-grid-v2 shop-grid-sidebar pt-80 pb-80 light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sidebar-widget-area products-sidebar">
                    <div class="widget widget_categories mb-30">
                        @if(app()->getLocale() == 'ka')
                        <h4 class="widget-title">სწრაფი ლინკები</h4>
                        @endif
                        @if(app()->getLocale() == 'en')
                        <h4 class="widget-title">Quick Links</h4>
                        @endif
                        @if(app()->getLocale() == 'ru')
                        <h4 class="widget-title">Быстрые Ссылки</h4>
                        @endif
                        <ul>
                            <li class="cat-item"><a href="{{ route('index') }}">{{ __('main.MENU_HOME') }}</a></li>
                            <li class="cat-item"><a href="{{ route('about') }}">{{ __('main.MENU_ABOUT') }}</a></li>
                            <li class="cat-item"><a href="{{ route('blog') }}">{{ __('main.MENU_NEWS') }}</a></li>
                            <li class="cat-item"><a href="{{ route('contact') }}">{{ __('main.MENU_CONTACT') }}</a></li>
                        </ul>
                    </div>
                    <div class="widget popular-product-widget mb-30">
                        @if(app()->getLocale() == 'ka')
                        <h4 class="widget-title">მანქანის ბრენდები</h4>
                        @endif
                        @if(app()->getLocale() == 'en')
                        <h4 class="widget-title">Auto Brands</h4>
                        @endif
                        @if(app()->getLocale() == 'ru')
                        <h4 class="widget-title">Автомобильные бренды</h4>
                        @endif
                        @foreach ($providerCategories as $cat)
                        <div class="shop-item">
                            <div class="">
                                <img class="imageclass" src="{{ asset('autoparts/storage/app/public/'. $cat->image) }}" alt="">
                            </div>
                            <div class="shop-content">
                                <h3 class="title"><a href="{{ route('subcategory', $cat->id) }}">{{ $cat->name_geo }}</a></h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                @foreach ($product as $item)
                    @if(app()->getLocale() == 'ka')
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="shop-item mb-20">
                            <div class="shop-img">
                                <img src="{{ asset('autoparts/storage/app/public/'. $item->image) }}" style="width: 650px; height: 320px;" alt="">
                                <div class="shop-overlay">
                                    <div class="overlay-content">
                                        <ul>
                                            <li><a href="{{ asset('autoparts/storage/app/public/'. $item->image) }}" class="icon img-popup"><i class="far fa-search-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-content text-center">
                                <h3 class="title"><a href="{{ route('product_detail', $item->products_id) }}">{{ Str::words($item->products_title_geo, '5'); }}</a></h3>
                                <p class="price">₾{{ $item->price }}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(app()->getLocale() == 'en')
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="shop-item mb-20">
                            <div class="shop-img">
                                <img src="{{ asset('autoparts/storage/app/public/'. $item->image) }}" style="width: 650px; height: 320px;" alt="">
                                <div class="shop-overlay">
                                    <div class="overlay-content">
                                        <ul>
                                            <li><a href="{{ asset('autoparts/storage/app/public/'. $item->image) }}" class="icon img-popup"><i class="far fa-search-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-content text-center">
                                <h3 class="title"><a href="{{ route('product_detail', $item->products_id) }}">{{ Str::words($item->products_title_eng, '5'); }}</a></h3>
                                <p class="price">₾{{ $item->price }}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(app()->getLocale() == 'ru')
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="shop-item mb-20">
                            <div class="shop-img">
                                <img src="{{ asset('autoparts/storage/app/public/'. $item->image) }}" style="width: 650px; height: 320px;" alt="">
                                <div class="shop-overlay">
                                    <div class="overlay-content">
                                        <ul>
                                            <li><a href="{{ asset('autoparts/storage/app/public/'. $item->image) }}" class="icon img-popup"><i class="far fa-search-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-content text-center">
                                <h3 class="title"><a href="{{ route('product_detail', $item->products_id) }}">{{ Str::words($item->products_title_rus, '5'); }}</a></h3>
                                <p class="price">₾{{ $item->price }}</p>
                            </div>
                        </div>
                    </div>
                    @endif

                @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        {!! $product->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
