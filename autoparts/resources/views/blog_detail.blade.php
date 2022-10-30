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






@if(app()->getLocale() == 'ka')
<section class="blog-details-section pt-80 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-details-wrapper">
                    <div class="entry-content">
                        <h3>{{ $mainnews->news_title_geo }}</h3>
                        <div class="block-img">
                            <img src="{{ asset('autoparts/storage/app/public/'. $mainnews->image) }}" style="width: 700px; height: 500px;" alt="">
                        </div>
                        <p>{!! $mainnews->news_text_geo!!}</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget-area">
                    <div class="widget widget_categories mb-30">
                        <h4 class="widget-title">სწრაფი ლინკები</h4>
                        <ul>
                            <li class="cat-item"><a href="{{ route('index') }}">{{ __('main.MENU_HOME') }}</a></li>
                            <li class="cat-item"><a href="{{ route('about') }}">{{ __('main.MENU_ABOUT') }}</a></li>
                            <li class="cat-item"><a href="{{ route('blog') }}">{{ __('main.MENU_NEWS') }}</a></li>
                            <li class="cat-item"><a href="{{ route('contact') }}">{{ __('main.MENU_CONTACT') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if(app()->getLocale() == 'en')
<section class="blog-details-section pt-80 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-details-wrapper">
                    <div class="entry-content">
                        <h3>{{ $mainnews->news_title_eng }}</h3>
                        <div class="block-img">
                            <img src="{{ asset('autoparts/storage/app/public/'. $mainnews->image) }}" style="width: 700px; height: 500px;" alt="">
                        </div>
                        <p>{!! $mainnews->news_text_eng!!}</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget-area">
                    <div class="widget widget_categories mb-30">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul>
                            <li class="cat-item"><a href="{{ route('index') }}">{{ __('main.MENU_HOME') }}</a></li>
                            <li class="cat-item"><a href="{{ route('about') }}">{{ __('main.MENU_ABOUT') }}</a></li>
                            <li class="cat-item"><a href="{{ route('blog') }}">{{ __('main.MENU_NEWS') }}</a></li>
                            <li class="cat-item"><a href="{{ route('contact') }}">{{ __('main.MENU_CONTACT') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if(app()->getLocale() == 'ru')
<section class="blog-details-section pt-80 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-details-wrapper">
                    <div class="entry-content">
                        <h3>{{ $mainnews->news_title_rus }}</h3>
                        <div class="block-img">
                            <img src="{{ asset('autoparts/storage/app/public/'. $mainnews->image) }}" style="width: 700px; height: 500px;" alt="">
                        </div>
                        <p>{!! $mainnews->news_text_rus!!}</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget-area">
                    <div class="widget widget_categories mb-30">
                        <h4 class="widget-title">Быстрые Ссылки</h4>
                        <ul>
                            <li class="cat-item"><a href="{{ route('index') }}">{{ __('main.MENU_HOME') }}</a></li>
                            <li class="cat-item"><a href="{{ route('about') }}">{{ __('main.MENU_ABOUT') }}</a></li>
                            <li class="cat-item"><a href="{{ route('blog') }}">{{ __('main.MENU_NEWS') }}</a></li>
                            <li class="cat-item"><a href="{{ route('contact') }}">{{ __('main.MENU_CONTACT') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


<section class="contact-map-section">
    <div class="map_box">
        <img src="assets/images/marker.png" alt="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d623.3569247708672!2d44.09366598165959!3d41.99594103064186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40449ec7960dca43%3A0xaab0a4c0fc28b382!2zMTcg4YOo4YOY4YOc4YOT4YOY4YOh4YOY4YOhIOGDkuGDluGDkOGDouGDmeGDlOGDquGDmOGDmuGDmCwg4YOS4YOd4YOg4YOY!5e0!3m2!1ska!2sge!4v1655906390557!5m2!1ska!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</section>
@endsection
