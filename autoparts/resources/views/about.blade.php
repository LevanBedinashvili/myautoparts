@extends('layout.app')
@section('content')

<section class="breadcrumbs-section bg_cover" style="background-image: url({{ asset('assets/guest/images//bg/breadcrumbs-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                @if(app()->getLocale() == 'ka')
                    <div class="breadcrumbs-content text-center">
                        <h1>ჩვენს შესახებ</h1>
                        <ul class="link">
                            <li><a href="{{ route('index') }}">მთავარი</a></li>
                            <li class="active">ჩვენს შესახებ</li>
                        </ul>
                    </div>

                @endif
                @if(app()->getLocale() == 'en')
                <div class="breadcrumbs-content text-center">
                    <h1>About Us</h1>
                    <ul class="link">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>

                @endif
                @if(app()->getLocale() == 'ru')
                <div class="breadcrumbs-content text-center">
                    <h1>о нас</h1>
                    <ul class="link">
                        <li><a href="{{ route('index') }}">Главная</a></li>
                        <li class="active">о нас</li>
                    </ul>
                </div>

                @endif
            </div>
        </div>
    </div>
</section>




<section class="about-area pt-80 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img-box mb-40">
                    <img src="{{ asset('assets/guest/images//about/shape-1.png') }}" class="shape" alt="">
                    <div class="about-img about-big-img text-center">
                        <img src="{{ asset('assets/guest/images//about/about-1.jpg') }}" alt="">
                    </div>
                    <div class="about-img about-small-img">
                        <img src="{{ asset('assets/guest/images//about/about-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            @if(app()->getLocale() == 'ka')
            <div class="col-lg-6">
                <div class="">
                    <div class="section-title">
                        <span class="span">ჩვენს შესახებ</span>
                        <h2>გაიგეთ მეტი ჩვენს შესახებ</h2>
                    </div>
                    <p>{!! $AboutUs->about_text_geo !!}</p>
                </div>
            </div>


            @endif
            @if(app()->getLocale() == 'en')
            <div class="col-lg-6">
                <div class="">
                    <div class="section-title">
                        <span class="span">About Us</span>
                        <h2>Get To Know Us</h2>
                    </div>
                    <p>{!! $AboutUs->about_text_eng !!}</p>
                </div>
            </div>
            @endif
            @if(app()->getLocale() == 'ru')
            <div class="col-lg-6">
                <div class="">
                    <div class="section-title">
                        <span class="span">о нас</span>
                        <h2>Узнайте больше о нас</h2>
                    </div>
                    <p>{!! $AboutUs->about_text_rus !!}</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection

