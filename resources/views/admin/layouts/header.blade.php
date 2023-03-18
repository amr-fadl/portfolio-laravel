<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('pageTitle', 'no title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

    @yield('page_style')

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
            integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('admin/dist/css/arabic_style.css') }}">
    @endif

    <link rel="stylesheet" href="{{ asset('admin/dist/css/slimselect.css') }}">
    <style>
        [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active,.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active {
            background-color: rgba(255,255,255,.1);
            box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
            color: #fff;
        }
        .form-group {
            max-width: 300px;
        }
        select
        .ss-multi-selected {
            height: 100%;
            width: 100%;
        }
        .ss-main  {
            border: none;
            border-radius: 0;
            border-bottom: 2px solid #f0f0f0 !important;
            padding: 0;
        }
        .ss-main .ss-multi-selected .ss-values {
            height: 100%;
            width: 100%;
            overflow: auto;
        }
        .ss-main {
            position: relative;
            display: block;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 11px;
            letter-spacing: .5px;
            color: #939393;
        }
        .ss-main .ss-single-selected{
            padding: 0;
        }
        .ss-main .ss-single-selected{
            /* height: 15px; */
        }
        .ss-main.form-control {
            height: auto;
            padding-bottom: 3px;
            /* padding-top: 10px;
            padding-bottom: 10px; */
        }
        .ss-main,.ss-main .ss-content.ss-open{
            /* position: absolute;
            right: 0;
            top: 4px; */
            width: 100% !important;
        }
        .ss-main .ss-multi-selected,.ss-main .ss-single-selected {
            border: none;
            background-color: transparent;
        }
        .ss-main .ss-multi-selected .ss-values {
            /* flex-wrap: nowrap; */
            justify-content: flex-start;
        }
        .ss-main .ss-content.ss-open {
            width: 150px;
            right: 0;
        }
        /* .ss-main .ss-multi-selected .ss-values .ss-value {
            background-color: #17a2b8;
        } */
        .ss-main .ss-content .ss-search{
            display: none;
        }
        .ss-main .ss-multi-selected .ss-values .ss-value {
            background: transparent;
            color: #939393;
            border: #93939333 1px solid;
            display: flex;
            /* width: 115px;
            overflow: hidden; */
            text-align: right;
            font-size: 8px
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
    <div class="wrapper">
        @include('sweetalert::alert')

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light pt-3 pb-3 justify-content-between">
            <!-- Left navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class=" breadcrumb-item nav-item d-none d-sm-inline-block"><a href="{{ url('/') }}"
                        class="nav-link pr-1 p-0  h-auto text-capitalize">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item nav-item d-none d-sm-inline-block active text-capitalize">
                    {{ __('Dashboard') }}</li>
            </ul>


            <!-- SEARCH FORM -->
            {{-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
                </form> --}}

            <!-- Right navbar links -->
            <ul class="navbar-nav">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link text-capitalize" data-toggle="dropdown" href="#">
                        <i class="fas fa-globe mr-1"></i>
                        {{ __('languages') }}
                    </a>
                    <div class="dropdown-menu p-0 dropdown-menu-lg dropdown-menu-right" style="min-width: 100px">
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
                    </div>
                </li>
                <li class="nav-item">
                    <form method="POST" class="mt-0" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="border: none !important;outline: none;"
                            class="nav-link border-0 bg-transparent">
                            <i class="fas fa-sign-out-alt mr-1"></i>{{ __('Logout') }}
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="brand-link pt-4 pb-3">
                <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Portfolio</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('uploads/users/' . Auth::user()->image) }}"
                            style="height: 40px; width: 40px; object-fit: cover" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link  {{ request()->is('dashboard/user') ? 'active' : '' }} ">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    {{ __('Users') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link  {{ request()->is('dashboard/about/*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    {{ __('Portfolio') }}
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right numOfChild">6</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ">
                                <li class="nav-item pl-3">
                                    <a href="{{ route('headerhome.index') }}" class="nav-link">
                                        <p>{{ __('Header') }}</p>
                                    </a>
                                </li>
                                <li class="nav-item pl-3  {{ request()->is('*dashboard/about/*') ? 'menu-open' : '' }}">
                                    <a href="#" class="nav-link  {{ request()->is('*dashboard/about/*') ? 'active' : '' }}">
                                        <p>
                                            {{ __('About') }}
                                            <i class="fas fa-angle-left right"></i>
                                            <span class="badge badge-info right numOfChild">6</span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview {{ request()->is('*dashboard/about/*') ? 'menu-open' : '' }}">
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('about.index') }}" class="nav-link {{ request()->is('*dashboard/about/about') ? 'active' : '' }}">
                                                <p>{{ __('About') }}</p>
                                            </a>
                                        </li>
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('skill.index') }}" class="nav-link {{ request()->is('*dashboard/about/skill*') ? 'active' : '' }}">
                                                <p>{{ __('Skills') }}</p>
                                            </a>
                                        </li>
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('education.index') }}" class="nav-link {{ request()->is('*dashboard/about/education*') ? 'active' : '' }}">
                                                <p>{{ __('Education') }}</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item pl-3">
                                    <a href="{{ route('service.index') }}" class="nav-link {{ request()->is('*dashboard/service*') ? 'active' : '' }}">
                                        <p>
                                            {{ __('Service') }}
                                            <i class="fas fa-angle-left right"></i>
                                            <span class="badge badge-info right numOfChild">6</span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview {{ request()->is('*dashboard/service/*') ? 'menu-open' : '' }}">
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('serviceconfig.index') }}" class="nav-link {{ request()->is('*dashboard/service/serviceconfig') ? 'active' : '' }}">
                                                <p>
                                                    {{ __('Service Config') }}
                                                </p>
                                            </a>
                                        </li>
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('service.index') }}" class="nav-link {{ request()->is('*dashboard/service/service') ? 'active' : '' }}">
                                                <p>
                                                    {{ __('All Service') }}
                                                </p>
                                            </a>
                                        </li>
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('servicelist.index') }}" class="nav-link {{ request()->is('*dashboard/') ? 'active' : '' }}">
                                                <p>{{ __('List Service') }}</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item pl-3">
                                    <a href="{{ route('workingProcess.index') }}" class="nav-link {{ request()->is('*dashboard/workingProcess*') ? 'active' : '' }}">
                                        <p>
                                            {{ __('Working Process') }}
                                            <i class="fas fa-angle-left right"></i>
                                            <span class="badge badge-info right numOfChild">6</span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview {{ request()->is('*dashboard/service/*') ? 'menu-open' : '' }}">
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('workingProcessconfig.index') }}" class="nav-link {{ request()->is('*dashboard/workingProcess/workingProcessconfig') ? 'active' : '' }}">
                                                <p>
                                                    {{ __('Working Process Config') }}
                                                </p>
                                            </a>
                                        </li>
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('workingProcess.index') }}" class="nav-link {{ request()->is('*dashboard/workingProcess/workingProcess') ? 'active' : '' }}">
                                                <p>
                                                    {{ __('All Working Process') }}
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- <li class="nav-item pl-3">
                                    <a href="{{ route('titleSection.index') }}" class="nav-link {{ request()->is('*dashboard/titleSection*') ? 'active' : '' }}">
                                        <p>
                                            {{ __('Title Section') }}
                                        </p>
                                    </a>
                                </li> --}}
                                <li class="nav-item pl-3">
                                    <a href="#" class="nav-link {{ request()->is('*dashboard/portfolio*') ? 'active' : '' }}">
                                        <p>
                                            {{ __('Portfolio') }}
                                            <i class="fas fa-angle-left right"></i>
                                            <span class="badge badge-info right numOfChild">6</span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview {{ request()->is('*dashboard/portfolio/*') ? 'menu-open' : '' }}">
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('portfolioconfig.index') }}" class="nav-link {{ request()->is('*dashboard/portfolio/portfolioconfig') ? 'active' : '' }}">
                                                <p>{{ __('Portfolio Config') }}</p>
                                            </a>
                                        </li>
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('portfolio.index') }}" class="nav-link {{ request()->is('*dashboard/portfolio/portfolio') ? 'active' : '' }}">
                                                <p>{{__('All')}} {{ __('Portfolio') }}</p>
                                            </a>
                                        </li>
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('filter.index') }}" class="nav-link {{ request()->is('*dashboard/portfolio/filter') ? 'active' : '' }}">
                                                <p>
                                                    {{ __('Filter') }}
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item pl-3">
                                    <a href="{{ route('partner.index') }}" class="nav-link {{ request()->is('*dashboard/partner*') ? 'active' : '' }}">
                                        <p>
                                            {{ __('Partner') }}
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item pl-3">
                                    <a href="#" class="nav-link {{ request()->is('*dashboard/contact*') ? 'active' : '' }}">
                                        <p>
                                            {{ __('Contact') }}
                                            <i class="fas fa-angle-left right"></i>
                                            <span class="badge badge-info right numOfChild">6</span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview {{ request()->is('*dashboard/contact/*') ? 'menu-open' : '' }}">
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('contact.index') }}" class="nav-link {{ request()->is('*dashboard/portfolio/contact') ? 'active' : '' }}">
                                                <p>{{ __('Contact Config') }}</p>
                                            </a>
                                        </li>
                                        <li class="ml-3 nav-item">
                                            <a href="{{ route('contactMessage.index') }}" class="nav-link {{ request()->is('*dashboard/portfolio/contactMessage') ? 'active' : '' }}">
                                                <p>{{ __('All message') }}</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link  {{ request()->is('dashboard/setting/*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    {{ __('Settings') }}
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right numOfChild">6</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ">
                                <li class="nav-item pl-3">
                                    <a href="{{ route('setting.index') }}" class="nav-link">
                                        <p>{{ __('Settings') }}</p>
                                    </a>
                                </li>
                                <li class="nav-item pl-3">
                                    <a href="{{ route('social.index') }}" class="nav-link">
                                        <p>{{ __('Social') }}</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper pt-3">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
