<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>{{ setting('title') }} - @yield('title')</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')">
    <meta name="author" content="{{ setting('title') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
   <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
   <link rel="icon" href="{{ asset(setting('favicon')) }}" sizes="32x32" />
   <link rel="apple-touch-icon" href="{{ asset(setting('favicon')) }}" />
   <meta name="msapplication-TileImage" content="{{ asset(setting('favicon')) }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/vendor/ecicons.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/plugins/animate.css') }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/plugins/swiper-bundle.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/plugins/jquery-ui.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/plugins/nouislider.css') }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/plugins/slick.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/plugins/owl.carousel.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/plugins/owl.theme.default.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/plugins/bootstrap.css') }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/main.css') }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/responsive.css') }}" />
   <link rel="stylesheet" href="{{ asset('web/assets/css/marquee.css') }}">
   <link rel="stylesheet" href="{{ asset('web/assets/story/demo/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/story/dist/zuck.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/story/dist/skins/snapgram.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   @include('web.layouts.style.style')
</head>
<body>
    @include('web.layouts.loader')
   <header class="ec-header">
       <div class="header-top">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col text-left header-top-left d-none d-lg-block">
                       <div class="header-top-social">
                           <ul class="mb-0">
                               <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                               <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                               <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                               <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col header-top-right d-none d-lg-block">
                       <div class="header-top-lan-curr d-flex justify-content-end">
                           <div class="header-top-curr dropdown">
                               <span class="usd"></span>
                           </div>
                           <div class="header-top-lan dropdown">
                               <span class="eur"></span>
                           </div>
                       </div>
                   </div>
                   <div class="col d-lg-none">
                       <div class="ec-header-bottons">
                            @auth
                                <a href="{{ route('web.account.logout.store') }}" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon">
                                        <img src="{{ asset('web/assets/images/icons/logout.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                    </div>
                                </a>
                                <a href="{{ route('web.account.index') }}" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon">
                                        <img src="{{ asset('web/assets/images/icons/user.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                    </div>
                                </a>
                            @else
                                <a href="{{ route('web.user.login.index') }}" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon">
                                        <img src="{{ asset('web/assets/images/icons/user.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                    </div>
                                </a>
                            @endauth
                           <a href="#ec-side-wishlist" class="ec-header-btn ec-header-wishlist ec-side-toggle">
                               <div class="header-icon">
                                   <img src="{{ asset('web/assets/images/icons/wishlist.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                </div>
                               <span class="ec-header-count">{{ Cart::instance('wishlist')->content()->count() }}</span>
                           </a>
                           <a href="#ec-side-cart" class="ec-header-btn ec-header-wishlist ec-side-toggle">
                                <div class="header-icon">
                                    <img src="{{ asset('web/assets/images/icons/cart.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                </div>
                                <span class="ec-header-count">{{ Cart::instance('cart')->content()->count() }}</span>
                            </a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="ec-header-bottom d-none d-lg-block">
           <div class="container position-relative">
               <div class="row">
                   <div class="ec-flex">
                       <div class="align-self-center">
                           <div class="header-logo">
                               <a href="{{ route('web.index') }}"><img src="{{ asset(setting('logo')) }}" alt="{{ setting('title') }}" /></a>
                           </div>
                       </div>
                       <div class="align-self-center">
                           <div class="header-search">
                               <form class="ec-btn-group-form" id="search_form" action="{{ route('web.search.products.store') }}" method="GET">
                                   <input class="form-control" placeholder="" type="text" name="search" id="search_input_typing" autocomplete="off">
                                   <button class="submit" type="submit">
                                       <img src="{{ asset('web/assets/images/icons/search.svg') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                    </button>
                               </form>
                           </div>
                       </div>
                       <div class="align-self-center">
                           <div class="ec-header-bottons">
                            @auth
                                <a href="{{ route('web.account.logout.store') }}" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon">
                                        <img src="{{ asset('web/assets/images/icons/logout.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                    </div>
                                </a>
                                <a href="{{ route('web.account.index') }}" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon">
                                        <img src="{{ asset('web/assets/images/icons/user.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                     </div>
                                </a>
                            @else
                                <a href="{{ route('web.user.login.index') }}" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon">
                                        <img src="{{ asset('web/assets/images/icons/user.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                     </div>
                                </a>
                            @endauth
                               <a href="#ec-side-wishlist" class="ec-header-btn ec-header-wishlist ec-side-toggle">
                                   <div class="header-icon">
                                       <img src="{{ asset('web/assets/images/icons/wishlist.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                    </div>
                                   <span class="ec-header-count">{{ Cart::instance('wishlist')->content()->count() }}</span>
                               </a>
                               <a href="#ec-side-cart" class="ec-header-btn ec-header-wishlist ec-side-toggle">
                                    <div class="header-icon">
                                        <img src="{{ asset('web/assets/images/icons/cart.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                    </div>
                                    <span class="ec-header-count">{{ Cart::instance('cart')->content()->count() }}</span>
                                </a>
                           </div>
                       </div>
                       
                   </div>
               </div>
           </div>
       </div>
       <div class="ec-header-bottom d-lg-none">
           <div class="container position-relative">
               <div class="row ">
                   <div class="col">
                       <div class="header-logo">
                           <a href="{{ route('web.index') }}">
                                <img src="{{ asset(setting('logo')) }}" alt="{{ setting('title') }}" />
                            </a>
                       </div>
                   </div>
                   <div class="col">
                       <div class="header-search">
                           <form class="ec-btn-group-form" action="{{ route('web.search.products.store') }}" method="GET" id="search_form_mobile">
                               <input id="search_input_typing_mobile" class="form-control" type="text" placeholder="" name="search" autocomplete="off">
                               <button class="submit" type="submit">
                                   <img src="{{ asset('web/assets/images/icons/search.svg') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                </button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       @include('web.layouts.menu.navbar')
       @include('web.layouts.menu.sidebar')
   </header>
   @include('web.layouts.menu.cart')
   @include('web.layouts.menu.wish')