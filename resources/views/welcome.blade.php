
@extends('frontend.layouts.app')

@section('pageTitle' , __('Home'))

@section('page_style')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

    <style>
        footer{
            padding: 310px 0 95px !important;
        }
    </style>
@endsection

@section('content')

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section class="banner">
            <div class="container custom-container h-100">
                <div class="row align-items-center  h-100 justify-content-center justify-content-lg-between">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="banner__img text-center text-xxl-end">
                            <img src="{{ asset('uploads/frontend/'.$header->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="banner__content">
                            <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>{{ $header->title }}</span></h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">{{ $header->description }}</p>
                            <a href="about.html" class="btn banner__btn wow fadeInUp" data-wow-delay=".6s">{{__('More About Me')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll__down">
                <a href="#aboutSection" class="scroll__link">Scroll down</a>
            </div>
            <div class="banner__video">
                <a href="{{ $header->video }}" class="popup-video"><i class="fas fa-play"></i></a>

        </section>
        <!-- banner-area-end -->

        <!-- about-area -->
        <section id="aboutSection" class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="about__icons__wrap">
                            @foreach ($skills as $name => $image)
                                <li>
                                    <img class="light" src="{{ asset('uploads/frontend/skills/'.$image) }}" alt="{{ $name }}">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__title">
                                <span class="sub-title">{{ $about->title_section }}</span>
                                <h2 class="title">{{ $about->sub_title_section }}</h2>
                            </div>
                            <div class="about__exp">
                                <div class="about__exp__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                                </div>
                                <div class="about__exp__content">
                                    <p>{{ $about->experience }}</p>
                                </div>
                            </div>
                            <p class="desc">{{ $about->mini_description }}</p>
                            <a href="{{ asset('uploads/frontend/about/'.$about->resume) }}" download class="btn">{{__('Download My Resume')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- services-area -->
        <section class="services">
            <div class="container">
                <div class="services__title__wrap">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="section__title">
                                <span class="sub-title">{{ $Serviceconfig->title_section }}</span>
                                <h2 class="title">
                                    {{$Serviceconfig->sub_title_section}}
                                </h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-4">
                            <div class="services__arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 services__active">
                    @foreach ($services as $service)
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    {{-- <a href="services-details.html"><img src="{{ asset('uploads/frontend/services/'.json_decode($service->images)[0]) }}" alt=""></a> --}}
                                </div>
                                <div class="services__content">
                                    {{-- <div class="services__icon">
                                        <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon01.png') }}" alt="">
                                        <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon01.png') }}" alt="">
                                    </div> --}}
                                    <h3 class="title"><a href="services-details.html">{{ $service->title }}</a></h3>
                                    <p>{{$service->mini_description }}</p>
                                    <ul class="services__list">
                                        @foreach ($service->ServicesList as $list)
                                            <li>{{ $list->name }}</li>
                                        @endforeach
                                    </ul>
                                    <a href="{{route('services-details', ['id'=>$service->id])}}" class="btn border-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- work-process-area -->
        <section class="work__process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">{{$WorkingProcessconfig->title_section}}</span>
                            <h2 class="title">
                                {{$WorkingProcessconfig->sub_title_section}}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row work__process__wrap">
                    @foreach ($WorkingProcess as $Working)
                        <div class="col">
                            <div class="work__process__item">
                                <span class="work__process_step">{{ $Working->title }}</span>
                                <div class="work__process__icon">
                                    <img class="light" src="{{ asset('uploads/frontend/working_processes/'. $Working->icon ) }}" alt="">
                                </div>
                                <div class="work__process__content">
                                    <h4 class="title">{{ $Working->name }}</h4>
                                    <p>{!! $Working->description !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- work-process-area-end -->

        <!-- portfolio-area -->
        <section class="portfolio">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">04 - Portfolio</span>
                            <h2 class="title">
                                {{$titleSection->where('name', 'portfolio')->first()->title}}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-12">
                        <ul class="nav nav-tabs portfolio__nav" id="portfolioTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button"
                                    role="tab" aria-controls="all" aria-selected="true">All</button>
                            </li>
                            @foreach ($filter as $singl )
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="{{$singl->name}}-tab" data-bs-toggle="tab" data-bs-target="#{{$singl->name}}" type="button"
                                        role="tab" aria-controls="{{$singl->name}}" aria-selected="false">{{$singl->name}}</button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="portfolioTabContent">
                <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    @foreach ($portfolio as $singl)
                                        <div class="portfolio__item">
                                            <div class="portfolio__thumb">
                                                <img src="{{ asset('uploads/frontend/portfolio/'.$singl->image) }}" alt="">
                                            </div>
                                            <div class="portfolio__overlay__content">
                                                <span>{{$singl->name}}</span>
                                                <h4 class="title"><a href="portfolio-details.html">{{$singl->mini_description}}</a></h4>
                                                <a href="portfolio-details.html" class="link">Case Study</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($filter as $singl )
                    <div class="tab-pane" id="{{$singl->name}}" role="tabpanel" aria-labelledby="{{$singl->name}}-tab">
                        <div class="container">
                            <div class="row gx-0 justify-content-center">
                                <div class="col">
                                    <div class="portfolio__active">
                                        @foreach ($portfolio as $singlportfolio)
                                            @if ($singlportfolio->filters->first()->getOriginal()['pivot_filter_id'] == $singl->id)
                                                <div class="portfolio__item">
                                                    <div class="portfolio__thumb">
                                                        <img src="{{ asset('uploads/frontend/portfolio/'.$singlportfolio->image) }}" alt="">
                                                    </div>
                                                    <div class="portfolio__overlay__content">
                                                        <span>{{$singlportfolio->name}}</span>
                                                        <h4 class="title"><a href="portfolio-details.html">{{$singlportfolio->mini_description}}</a></h4>
                                                        <a href="portfolio-details.html" class="link">Case Study</a>
                                                    </div>
                                                </div>

                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        <!-- portfolio-area-end -->

        <!-- partner-area -->
        <section class="partner ps-0 pe-0 pt-5" style="padding: 400px">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-6">
                        <ul class="partner__logo__wrap">
                            @if (json_decode($partner->logo_partners))
                                @foreach (json_decode($partner->logo_partners) as $par)
                                    <li>
                                        <img class="light" src="{{ asset('uploads/frontend/partners/'.$par) }}" alt="">
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="partner__content">
                            <div class="section__title">
                                <span class="sub-title">{{ $partner->title_section }}</span>
                                <h2 class="title">{{ $partner->title }}</h2>
                            </div>
                            <p>{!! $partner->description !!}</p>
                            <a href="https://wa.me/{{$partner->link_conversation}}" target="_blank" class="btn">Start a conversation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- partner-area-end -->

        <!-- contact-area -->
        <section class="homeContact">
            <div class="container">
                <div class="homeContact__wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__title">
                                <span class="sub-title">07 - Say hello</span>
                                <h2 class="title">Any questions? Feel free <br> to contact</h2>
                            </div>
                            <div class="homeContact__content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="homeContact__form">
                                <form action="{{ route('contactMessage.store') }}" method="POST">
                                    @csrf
                                    <input type="text" name="name" placeholder="Enter your name*">
                                    <input type="email" name="email" placeholder="Enter your email*">
                                    <input type="number" name="phone_number" placeholder="Enter your phone number*">
                                    <textarea name="message" placeholder="Enter your message*"></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

@endsection

@section('page_script')
    <!-- JS here -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/element-in-view.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
@endsection
