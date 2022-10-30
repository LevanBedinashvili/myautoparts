@extends('layout.app')
@section('content')

<section class="breadcrumbs-section bg_cover" style="background-image: url({{ asset('assets/guest/images//bg/breadcrumbs-bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                @if(app()->getLocale() == 'ka')
                    <div class="breadcrumbs-content text-center">
                        <h1>კონტაქტი</h1>
                        <ul class="link">
                            <li><a href="{{ route('index') }}">მთავარი</a></li>
                            <li class="active">კონტაქტი</li>
                        </ul>
                    </div>

                @endif
                @if(app()->getLocale() == 'en')
                <div class="breadcrumbs-content text-center">
                    <h1>Contact</h1>
                    <ul class="link">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>

                @endif
                @if(app()->getLocale() == 'ru')
                <div class="breadcrumbs-content text-center">
                    <h1>Контакт</h1>
                    <ul class="link">
                        <li><a href="{{ route('index') }}">Главная</a></li>
                        <li class="active">Контакт</li>
                    </ul>
                </div>

                @endif
            </div>
        </div>
    </div>
</section>



@if(app()->getLocale() == 'ka')
<section class="contact-area contact-area-v1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info-list">
                    <div class="list-item mb-30">
                        <i class="fal fa-map-marker-alt"></i>
                        <h5>მისამართი</h5>
                        <p>{{ $providerContactInfo->contact_address_geo }}</p>
                    </div>
                    <div class="list-item mb-30">
                        <i class="fal fa-envelope-open-text"></i>
                        <h5>ელ.ფოსტა</h5>
                        <p><a href="mailto:{{ $providerContactInfo->contact_email_one }}">{{ $providerContactInfo->contact_email_one }}</a></p>
                        <p><a href="mailto:{{ $providerContactInfo->contact_email_two }}">{{ $providerContactInfo->contact_email_two }}</a></p>
                    </div>
                    <div class="list-item mb-30">
                        <i class="fal fa-phone"></i>
                        <h5>ტელეფონი</h5>
                        <p><a href="tel:+{{ $providerContactInfo->contact_phone_one }}">{{ $providerContactInfo->contact_phone_one }}</a></p>
                        <p><a href="tel:+{{ $providerContactInfo->contact_phone_two }}">{{ $providerContactInfo->contact_phone_two }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-wrapper">
                    <form action="sendmail" method="post" class="contact-form">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" class="form_control" placeholder="Your Name" name="name" style="font-family: 'BPG Banner Caps', sans-serif;" required="">
                                    <i class="fal fa-user"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="email" class="form_control"  style="font-family: 'BPG Banner Caps', sans-serif;" placeholder="Email Address" name="email" required="">
                                    <i class="fal fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <textarea class="form_control" placeholder="Message..." style="font-family: 'BPG Banner Caps', sans-serif;" name="text"></textarea>
                                    <i class="fal fa-pencil"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <button class="main-btn">გაგზავნა</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


@if(app()->getLocale() == 'en')
<section class="contact-area contact-area-v1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info-list">
                    <div class="list-item mb-30">
                        <i class="fal fa-map-marker-alt"></i>
                        <h5>Address</h5>
                        <p>{{ $providerContactInfo->contact_address_eng }}</p>
                    </div>
                    <div class="list-item mb-30">
                        <i class="fal fa-envelope-open-text"></i>
                        <h5>Email Address</h5>
                        <p><a href="mailto:{{ $providerContactInfo->contact_email_one }}">{{ $providerContactInfo->contact_email_one }}</a></p>
                        <p><a href="mailto:{{ $providerContactInfo->contact_email_two }}">{{ $providerContactInfo->contact_email_two }}</a></p>
                    </div>
                    <div class="list-item mb-30">
                        <i class="fal fa-phone"></i>
                        <h5>Phone Number</h5>
                        <p><a href="tel:+{{ $providerContactInfo->contact_phone_one }}">{{ $providerContactInfo->contact_phone_one }}</a></p>
                        <p><a href="tel:+{{ $providerContactInfo->contact_phone_two }}">{{ $providerContactInfo->contact_phone_two }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-wrapper">
                    <form action="sendmail" method="post" class="contact-form">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" class="form_control" placeholder="Your Name" name="name" style="font-family: 'BPG Banner Caps', sans-serif;" required="">
                                    <i class="fal fa-user"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="email" class="form_control"  style="font-family: 'BPG Banner Caps', sans-serif;" placeholder="Email Address" name="email" required="">
                                    <i class="fal fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <textarea class="form_control" placeholder="Message..." style="font-family: 'BPG Banner Caps', sans-serif;" name="text"></textarea>
                                    <i class="fal fa-pencil"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <button class="main-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if(app()->getLocale() == 'ru')
<section class="contact-area contact-area-v1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info-list">
                    <div class="list-item mb-30">
                        <i class="fal fa-map-marker-alt"></i>
                        <h5>Адрес</h5>
                        <p>{{ $providerContactInfo->contact_address_rus }}</p>
                    </div>
                    <div class="list-item mb-30">
                        <i class="fal fa-envelope-open-text"></i>
                        <h5>Эл. адрес</h5>
                        <p><a href="mailto:{{ $providerContactInfo->contact_email_one }}">{{ $providerContactInfo->contact_email_one }}</a></p>
                        <p><a href="mailto:{{ $providerContactInfo->contact_email_two }}">{{ $providerContactInfo->contact_email_two }}</a></p>
                    </div>
                    <div class="list-item mb-30">
                        <i class="fal fa-phone"></i>
                        <h5>номер телефона</h5>
                        <p><a href="tel:+{{ $providerContactInfo->contact_phone_one }}">{{ $providerContactInfo->contact_phone_one }}</a></p>
                        <p><a href="tel:+{{ $providerContactInfo->contact_phone_two }}">{{ $providerContactInfo->contact_phone_two }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-wrapper">
                    <form action="sendmail" method="post" class="contact-form">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" class="form_control" placeholder="Ваше имя" name="name" style="font-family: 'BPG Banner Caps', sans-serif;" required="">
                                    <i class="fal fa-user"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="email" class="form_control"  style="font-family: 'BPG Banner Caps', sans-serif;" placeholder="Эл. адрес" name="email" required="">
                                    <i class="fal fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <textarea class="form_control" placeholder="Сообщение..." style="font-family: 'BPG Banner Caps', sans-serif;" name="text"></textarea>
                                    <i class="fal fa-pencil"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <button class="main-btn">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
