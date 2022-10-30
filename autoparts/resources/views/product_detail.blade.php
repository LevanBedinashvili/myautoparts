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

<section class="shop-details-section light-bg pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="shop_big_slide slick-initialized slick-slider">
                    <img src="{{ asset('autoparts/storage/app/public/'. $mainproduct->image) }}" alt="" style="height: 490px;">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="details-content-box">
                    <h3 class="title">{{ $mainproduct->products_title_geo }}</h3>
                    <ul class="rating">
                        <li class="price"><span>₾{{ $mainproduct->price }}</span></li>
                        <li class="rib"><span>{{ $mainproduct->subcategory->name_geo }}</span></li>
                    </ul>
                    <p>{!! $mainproduct->products_text_geo !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-map-section">
    <div class="map_box">
        <img src="assets/images/marker.png" alt="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d623.3569247708672!2d44.09366598165959!3d41.99594103064186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40449ec7960dca43%3A0xaab0a4c0fc28b382!2zMTcg4YOo4YOY4YOc4YOT4YOY4YOh4YOY4YOhIOGDkuGDluGDkOGDouGDmeGDlOGDquGDmOGDmuGDmCwg4YOS4YOd4YOg4YOY!5e0!3m2!1ska!2sge!4v1655906390557!5m2!1ska!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</section>

@endsection
