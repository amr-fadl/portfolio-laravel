<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('pageTitle', 'no title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/frontend/logo_mini.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->

        @yield('page_style')

    </head>
    {{-- <body dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}"> --}}
    <body>
        @include('sweetalert::alert')

        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu__area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="menu__wrap" style="flex: 1 1">
                                <nav class="menu__nav">
                                    <div class="logo">
                                        <a href="index.html" class="logo__black"><img src="{{ asset('uploads/frontend/'.Settings::all()->logo) }}" alt=""></a>
                                        {{-- <a href="index.html" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a> --}}
                                    </div>
                                    <div class="navbar__wrap main__menu d-none d-xl-flex">
                                        <ul class="navigation">
                                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                            <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">{{ __('About') }}</a></li>
                                            <li class="{{ request()->is('services') ? 'active' : '' }}"><a href="{{ url('/services') }}">{{ __('Services') }}</a></li>
                                            <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">{{ __('Contact Me') }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="header__btn d-none d-md-block">
                                        @if (Auth::user())
                                            <form id="" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn">{{ __('Logout') }}</button>
                                            </form>
                                        @else
                                            <a href="{{route('login')}}" class="btn">login</a>
                                        @endif
                                        {{-- <a href="{{ LaravelLocalization::getLocalizedURL(App::getLocale() == 'ar' ? 'en' : 'ar', null, [], true) }}" class="btn">{{ App::getLocale() == 'ar' ? 'english' : 'arabic'}}</a> --}}
                                        {{-- <div class="dropdown-menu p-0 dropdown-menu-lg dropdown-menu-right" style="min-width: 100px">
                                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <a rel="alternate"
                                                    class="dropdown-item {{ $localeCode == App::getLocale() ? 'active bg-secondary' : '' }}"
                                                    hreflang="{{ $localeCode }}"
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    <!-- Message Start -->
                                                    <div class="media align-items-center p-1">
                                                        <img src="{{ asset('backend/' . $properties['name'] . '.jpg') }}" alt="User Avatar"
                                                            class="img-size-50 mr-3 img-circle"
                                                            style="width: 30px; height:30px; object-fit: cover;">
                                                        <div class="media-body">
                                                            <h3 class="dropdown-item-title">
                                                                {{ $properties['native'] }}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <!-- Message End -->
                                                </a>
                                                <div class="dropdown-divider"></div>
                                            @endforeach
                                        </div> --}}
                                    </div>
                                </nav>
                            </div>
                            <div class="mobile__nav__toggler d-flex d-xl-none align-items-center border-0"><i class="fas fa-bars"></i></div>
                            <!-- Mobile Menu  -->
                            <div class="mobile__menu">
                                <nav class="menu__box">
                                    <div class="close__btn"><i class="fal fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="index.html" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                        <a href="index.html" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                                    </div>
                                    <div class="menu__outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu__backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->
