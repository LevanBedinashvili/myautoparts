@extends('layout.app')
@section('content')

<section class="breadcrumbs-section bg_cover" style="background-image: url({{ asset('assets/guest/images//bg/breadcrumbs-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                @if(app()->getLocale() == 'ka')
                    <div class="breadcrumbs-content text-center">
                        <h1>სიახლეები</h1>
                        <ul class="link">
                            <li><a href="{{ route('index') }}">მთავარი</a></li>
                            <li class="active">სიახლეები</li>
                        </ul>
                    </div>
                @endif
                @if(app()->getLocale() == 'en')
                <div class="breadcrumbs-content text-center">
                    <h1>Blog</h1>
                    <ul class="link">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
                @endif
                @if(app()->getLocale() == 'ru')
                <div class="breadcrumbs-content text-center">
                    <h1>Новости</h1>
                    <ul class="link">
                        <li><a href="{{ route('index') }}">Главная</a></li>
                        <li class="active">Новости</li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="shop-list-section shop-list-sidebar shop-grid-sidebar pt-80 pb-80 light-bg">
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
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($news as $blog)
                        @if(app()->getLocale() == 'ka')
                        <div class="col-lg-10">
                            <div class="shop-item mb-20">
                                <div class="shop-img">
                                    <img src="{{ asset('autoparts/storage/app/public/'. $blog->image) }}" alt="">
                                    <div class="shop-overlay">
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="{{ route('blog_detail', $blog->news_id) }}" class="icon"><i class="far fa-cart-plus"></i></a></li>
                                                <li><a href="{{ asset('autoparts/storage/app/public/'. $blog->image) }}" class="icon img-popup"><i class="far fa-search-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-content">
                                    <h3 class="title"><a href="{{ route('blog_detail', $blog->news_id) }}">{{ Str::words( $blog->news_title_geo, '8'); }}</a></h3>
                                    <a href="{{ route('blog_detail', $blog->news_id) }}" class="main-btn">სრულად ნახვა</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(app()->getLocale() == 'en')
                    <div class="col-lg-10">
                        <div class="shop-item mb-20">
                            <div class="shop-img">
                                <img src="{{ asset('autoparts/storage/app/public/'. $blog->image) }}" alt="">
                                <div class="shop-overlay">
                                    <div class="overlay-content">
                                        <ul>
                                            <li><a href="{{ route('blog_detail', $blog->news_id) }}" class="icon"><i class="far fa-cart-plus"></i></a></li>
                                            <li><a href="{{ asset('autoparts/storage/app/public/'. $blog->image) }}" class="icon img-popup"><i class="far fa-search-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h3 class="title"><a href="{{ route('blog_detail', $blog->news_id) }}">{{ Str::words( $blog->news_title_eng , '8'); }}</a></h3>
                                <a href="{{ route('blog_detail', $blog->news_id) }}" class="main-btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
                    @if(app()->getLocale() == 'ru')
                    <div class="col-lg-10">
                        <div class="shop-item mb-20">
                            <div class="shop-img">
                                <img src="{{ asset('autoparts/storage/app/public/'. $blog->image) }}" alt="">
                                <div class="shop-overlay">
                                    <div class="overlay-content">
                                        <ul>
                                            <li><a href="{{ route('blog_detail', $blog->news_id) }}" class="icon"><i class="far fa-cart-plus"></i></a></li>
                                            <li><a href="{{ asset('autoparts/storage/app/public/'. $blog->image) }}" class="icon img-popup"><i class="far fa-search-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h3 class="title"><a href="{{ route('blog_detail', $blog->news_id) }}">{{ Str::words( $blog->news_title_rus, '8'); }}</a></h3>
                                <a href="{{ route('blog_detail', $blog->news_id) }}" class="main-btn">увидеть все</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif

                @endforeach
                <div class="row">
                    <div class="col-lg-12">
                        {!! $news->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
