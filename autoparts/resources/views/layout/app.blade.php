    <!DOCTYPE html>
        <html lang="en">

        <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>AutoParts</title>
        <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-banner-caps/css/bpg-banner-caps.min.css">
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('assets/guest/images/favicon.ico') }}" type="image/png">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset('assets/guest/css/bootstrap.min.css') }}">
        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="{{ asset('assets/guest/fonts/fontawesome/css/all.css') }}">
        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="{{ asset('assets/guest/fonts/flaticon/flaticon.css') }}">
        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="{{ asset('assets/guest/css/magnific-popup.css') }}">
        <!--====== Slick css ======-->
        <link rel="stylesheet" href="{{ asset('assets/guest/css/slick.css') }}">
        <!--====== nice-select css ======-->
        <link rel="stylesheet" href="{{ asset('assets/guest/css/nice-select.css') }}">
        <!-- jquery.nice-number css-->
        <link rel="stylesheet" href="{{ asset('assets/guest/css/jquery.nice-number.css') }}">
        <!-- jquery-ui css-->
        <link rel="stylesheet" href="{{ asset('assets/guest/css/jquery-ui.min.css') }}">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('assets/guest/css/default.css') }}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset('assets/guest/css/style.css') }}">
    </head>
    <body>
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div><!--====== End Preloader ======-->
    <!--====== Start Header ======-->
    <header class="header-area header-area-v2">
        <div class="header-top">
            <div class="custom-container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="top-left">
                            {{-- <a href="index-2.html" class="logo"><img src="{{ asset('assets/guest/images/logo-1.png') }}" alt="logo"></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top-middle">
                            <div class="row">
                                @if(app()->getLocale() == "ka")
                                <div class="col-lg-6">
                                    <div class="info-box">
                                        <i class="fal fa-map-marker-alt"></i>
                                        <span>ფილიალის მისამართი</span>
                                        <h5>{{ $providerContactInfo->contact_address_geo }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="info-box">
                                        <i class="fal fa-phone"></i>
                                        <span>ტელეფონის ნომერი</span>
                                        <h5>{{ $providerContactInfo->contact_phone_one }}</h5>
                                    </div>
                                </div>
                                @endif
                                @if(app()->getLocale() == "en")
                                <div class="col-lg-6">
                                    <div class="info-box">
                                        <i class="fal fa-map-marker-alt"></i>
                                        <span>Office Address</span>
                                        <h5>{{ $providerContactInfo->contact_address_eng }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="info-box">
                                        <i class="fal fa-clock"></i>
                                        <span>Phone Number</span>
                                        <h5>{{ $providerContactInfo->contact_phone_one }}</h5>
                                    </div>
                                </div>
                                @endif
                                @if(app()->getLocale() == "ru")
                                <div class="col-lg-6">
                                    <div class="info-box">
                                        <i class="fal fa-map-marker-alt"></i>
                                        <span>Адрес офиса</span>
                                        <h5>{{ $providerContactInfo->contact_address_rus }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="info-box">
                                        <i class="fal fa-clock"></i>
                                        <span>номер телефона</span>
                                        <h5>{{ $providerContactInfo->contact_phone_one }}</h5>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-navigation red-bg">
            <div class="custom-container">
                <div class="nav-container d-flex align-items-center justify-content-between">
                    <!-- site logo -->
                    <div class="brand-logo">
                        {{-- <a href="{{ route('index') }}"><img src="{{ asset('assets/guest/images/logo-1.png') }}" class="img-fluid" alt=""></a> --}}
                    </div>
                    <div class="nav-menu">
                        <!-- Navbar Close Icon -->
                        <div class="navbar-close">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- nav-menu -->
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item active"><a href="{{ route('index') }}">{{ __('main.MENU_HOME') }}</a></li>
                                <li class="menu-item"><a href="{{ route('about') }}">{{ __('main.MENU_ABOUT') }}</a></li>
                                <li class="menu-item menu-item-has-children"><a href="#">{{ __('main.MENU_CATEGORY') }}</a>
                                    <ul class="sub-menu">
                                        @if(app()->getLocale() == 'ka')
                                        @foreach ($providerCategories as $catitem)
                                            <li><a href="{{ route('subcategory', $catitem->id) }}">{{ $catitem->name_geo }}</a></li>
                                        @endforeach
                                        @endif
                                        @if(app()->getLocale() == 'en')
                                            @foreach ($providerCategories as $catitem)
                                                <li><a href="{{ route('subcategory', $catitem->id) }}">{{ $catitem->name_eng }}</a></li>
                                            @endforeach
                                        @endif
                                        @if(app()->getLocale() == 'ru')
                                            @foreach ($providerCategories as $catitem)
                                                <li><a href="{{ route('subcategory', $catitem->id) }}">{{ $catitem->name_rus }}</a></li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="{{ route('blog') }}">{{ __('main.MENU_NEWS') }}</a></li>
                                <li class="menu-item"><a href="{{ route('contact') }}">{{ __('main.MENU_CONTACT') }}</a></li>
                                @if(app()->getLocale() == 'ka')
                                <li class="menu-item menu-item-has-children"><a href="#">ენა</a>
                                @endif
                                @if(app()->getLocale() == 'en')
                                <li class="menu-item menu-item-has-children"><a href="#">Language</a>
                                @endif
                                @if(app()->getLocale() == 'ru')
                                <li class="menu-item menu-item-has-children"><a href="#">Язык</a>
                                @endif
                                <ul class="sub-menu">
                                        <li><a href="{{Request::root()}}/locale/ka">ქართული</a>
                                        </li>
                                        <li><a href="{{Request::root()}}/locale/en">English</a>
                                        </li>
                                        <li><a href="{{Request::root()}}/locale/ru">русский</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- nav pushed item -->
                        <div class="nav-pushed-item">
                            <div class="navbar-btn">
                                <a href="contact.html" class="main-btn">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                    <!-- nav push item -->
                    <div class="nav-push-item">
                        <div class="nav-tools">
                            <ul>
                                <li><a href="#" class="menu-icon"><img src="assets/guest/images/bar-2.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Navbar Toggler -->
                    <div class="navbar-toggler">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-sidemenu">
            <div class="sidemenu-nav">
                <a href="#" class="cross-icon"><i class="far fa-times"></i></a>
                <ul class="sidebar-menu">
                    <li class="menu-item"><a href="{{ route('index') }}">{{ __('main.MENU_HOME') }}</i></a>
                    </li>
                    <li class="menu-item"><a href="{{ route('about') }}">{{ __('main.MENU_ABOUT') }}</a></li>
                    <li class="menu-item "><a href="#">{{ __('main.MENU_CATEGORY') }}<i class="far fa-angle-down float-right"></i></a>
                        <ul class="sub-menu">
                            @if(app()->getLocale() == 'ka')
                            @foreach ($providerCategories as $catitem)
                                <li><a href="{{ route('subcategory', $catitem->id) }}">{{ $catitem->name_geo }}</a></li>
                            @endforeach
                            @endif
                            @if(app()->getLocale() == 'en')
                                @foreach ($providerCategories as $catitem)
                                    <li><a href="{{ route('subcategory', $catitem->id) }}">{{ $catitem->name_eng }}</a></li>
                                @endforeach
                            @endif
                            @if(app()->getLocale() == 'ru')
                                @foreach ($providerCategories as $catitem)
                                    <li><a href="{{ route('subcategory', $catitem->id) }}">{{ $catitem->name_rus }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                    <li class="menu-item "><a href="{{ route('blog') }}">{{ __('main.MENU_NEWS') }}</a></li>
                    <li class="menu-item"><a href="{{ route('contact') }}">{{ __('main.MENU_CONTACT') }}</a></li>
                    @if(app()->getLocale() == 'ka')
                    <li class="menu-item menu-item-has-children"><a href="#">ენა<i class="far fa-angle-down float-right"></i></a>
                    @endif
                    @if(app()->getLocale() == 'en')
                    <li class="menu-item menu-item-has-children"><a href="#">Language<i class="far fa-angle-down float-right"></i></a>
                    @endif
                    @if(app()->getLocale() == 'ru')
                    <li class="menu-item menu-item-has-children"><a href="#">Язык<i class="far fa-angle-down float-right"></i></a>
                    @endif
                    <ul class="sub-menu">
                            <li><a href="{{Request::root()}}/locale/ka">ქართული</a>
                            </li>
                            <li><a href="{{Request::root()}}/locale/en">English</a>
                            </li>
                            <li><a href="{{Request::root()}}/locale/ru">русский</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header><!--====== End Header ======-->

        @yield('content')

        <!--====== Start Footer ======-->
        <footer class="footer-area black-bg">
            <div class="container">
                <div class="footer_widget pt-80 pb-65">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget about-widget">
                                {{-- <img src="{{ asset('assets/guest/images/logo-2.png') }}" class="img-fluid" alt=""> --}}
                                @if(app()->getLocale() == 'ka')
                                <p>ჩვენი კომპანია წარმოადგენს ახალ სიტყვას ქართულ ბაზარზე, რომელიც საქონლის ხარისხითა და მომსახურების მაღალი დონით გამოირჩევა.
                                </p>
                                @endif
                                @if(app()->getLocale() == 'en')
                                <p>Our company is a new word in the Georgian market, which is distinguished by the quality of goods and high level of service.
                                </p>
                                @endif
                                @if(app()->getLocale() == 'ru')
                                <p>Наша компания – новое слово на грузинском рынке, которое отличает качество товаров и высокий уровень обслуживания.
                                </p>
                                @endif
                                <div class="social-box">
                                    <ul class="social-link">
                                        <li><a href="{{ $providerContactInfo->contact_facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $providerContactInfo->contact_instagram }}"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="{{ $providerContactInfo->contact_youtube }}"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget quick-links-widget">
                                @if(app()->getLocale() == 'ka')
                                <h4 class="widget-title">სწრაფი ლინკები</h4>
                                @endif
                                @if(app()->getLocale() == 'en')
                                <h4 class="widget-title">Quick Links</h4>
                                @endif
                                @if(app()->getLocale() == 'ru')
                                <h4 class="widget-title">Быстрые Ссылки</h4>
                                @endif
                                <ul class="link">
                                    <li><a href="{{ route('index') }}">{{ __('main.MENU_HOME') }}</a></li>
                                    <li><a href="{{ route('about') }}">{{ __('main.MENU_ABOUT') }}</a></li>
                                    <li><a href="{{ route('blog') }}">{{ __('main.MENU_NEWS') }}</a></li>
                                    <li><a href="{{ route('contact') }}">{{ __('main.MENU_CONTACT') }}</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget contact-widget">
                                    @if(app()->getLocale() == 'ka')
                                    <h4 class="widget-title">კონტაქტი</h4>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <h4 class="widget-title">Contact</h4>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <h4 class="widget-title">Контакт</h4>
                                    @endif
                                    <ul class="contact-info">
                                    <li>
                                        <i class="fal fa-map-marker-alt"></i>
                                        @if(app()->getLocale() == 'ka')
                                        <p class="widget-title">{{ $providerContactInfo->contact_address_geo }}</p>
                                        @endif
                                        @if(app()->getLocale() == 'en')
                                        <p class="widget-title">{{ $providerContactInfo->contact_address_eng }}</p>
                                        @endif
                                        @if(app()->getLocale() == 'ru')
                                        <p class="widget-title">{{ $providerContactInfo->contact_address_rus }}</p>
                                        @endif
                                    </li>
                                    <li>
                                        <i class="fal fa-envelope"></i>
                                        <p><a href="mailto:supportinfo@gmail.com">{{ $providerContactInfo->contact_email_one }}</a></p>
                                    </li>
                                    <li>
                                        <i class="fal fa-envelope"></i>
                                        <p><a href="mailto:supportinfo@gmail.com">{{ $providerContactInfo->contact_email_two }}</a></p>
                                    </li>
                                    <li>
                                        <i class="fal fa-phone"></i>
                                        <p><a href="tel:+{{ $providerContactInfo->contact_phone_one }}">{{ $providerContactInfo->contact_phone_one }}</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text text-center">
                                <P>&copy; Copyright {{ Date('Y') }}.</span> All rights reserved.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="fas fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{ asset('assets/guest/js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/guest/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('assets/guest/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/guest/js/popper.min.js') }}"></script>
        <!--====== Slick js ======-->
        <script src="{{ asset('assets/guest/js/slick.min.js') }}"></script>
        <!--====== Magnific Popup js ======-->
        <script src="{{ asset('assets/guest/js/jquery.magnific-popup.min.js') }}"></script>
        <!--====== Isotope js ======-->
        <script src="{{ asset('assets/guest/js/isotope.pkgd.min.js') }}"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{ asset('assets/guest/js/imagesloaded.pkgd.min.js') }}"></script>
        <!--====== nice-select js ======-->
        <script src="{{ asset('assets/guest/js/jquery.nice-select.min.js') }}"></script>
        <!--====== select number ======-->
        <script src="{{ asset('assets/guest/js/jquery.nice-number.min.js') }}"></script>
        <!--====== jquery-ui js  ======-->
        <script src="{{ asset('assets/guest/js/jquery-ui.min.js') }}"></script>
        <!--====== Syotimer js  ======-->
        <script src="{{ asset('assets/guest/js/jquery.syotimer.min.js') }}"></script>
        <!--====== Main js ======-->
        <script src="{{ asset('assets/guest/js/main.js') }}"></script>
    </body>

</html>
