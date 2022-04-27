<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title><?php echo e(setting('title')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>" />
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="author" content="<?php echo e(setting('title')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
   <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
   <link rel="icon" href="<?php echo e(asset(setting('favicon'))); ?>" sizes="32x32" />
   <link rel="apple-touch-icon" href="<?php echo e(asset(setting('favicon'))); ?>" />
   <meta name="msapplication-TileImage" content="<?php echo e(asset(setting('favicon'))); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/css/vendor/ecicons.min.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/css/plugins/animate.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/css/plugins/swiper-bundle.min.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/css/plugins/jquery-ui.min.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/css/plugins/nouislider.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/css/plugins/slick.min.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/css/plugins/owl.carousel.min.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/css/plugins/owl.theme.default.min.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/css/plugins/bootstrap.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/css/main.css')); ?>" />
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/css/marquee.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('web/assets/story/demo/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/assets/story/dist/zuck.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/assets/story/dist/skins/snapgram.css')); ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php echo $__env->make('web.layouts.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                   <div class="col header-top-right d-lg-block text-center">
                       <div class="header-top-lan-curr d-flex justify-content-end">
                           <div class="header-top-curr dropdown">
                               <span class="usd"></span>
                           </div>
                           <div class="header-top-lan dropdown">
                               <span class="eur"></span>
                           </div>
                       </div>
                   </div>
                   <div class="col d-lg-none ">
                       <div class="ec-header-bottons">
                           <a href="" class="ec-header-btn ec-header-wishlist">
                               <div class="header-icon"><img src="<?php echo e(asset('web')); ?>/assets/images/icons/user.png" class="svg_img header_svg" alt="" /></div>
                           </a>
                           <a href="#ec-side-wishlist" class="ec-header-btn ec-header-wishlist ec-side-toggle">
                               <div class="header-icon"><img src="<?php echo e(asset('web')); ?>/assets/images/icons/wishlist.png"
                                       class="svg_img header_svg" alt="" /></div>
                               <span class="ec-header-count"><?php echo e(Cart::instance('wishlist')->content()->count()); ?></span>
                           </a>
                           <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                               <div class="header-icon"><img src="<?php echo e(asset('web')); ?>/assets/images/icons/cart.png"
                                       class="svg_img header_svg" alt="" /></div>
                               <span class="ec-header-count ec-cart-count cart-count-lable"><?php echo e(Cart::instance('cart')->content()->count()); ?></span>
                           </a>
                           <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-none d-lg-none">
                               <img src="<?php echo e(asset('web/assets/images/icons/menu.svg')); ?>" class="svg_img header_svg" alt="<?php echo e(setting('title')); ?>" />
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
                               <a href="<?php echo e(route('web.index')); ?>"><img src="<?php echo e(asset(setting('logo'))); ?>" alt="<?php echo e(setting('title')); ?>" /></a>
                           </div>
                       </div>
                       <div class="align-self-center">
                           <div class="header-search">
                               <form class="ec-btn-group-form" id="search_form" action="<?php echo e(route('web.search.products.store')); ?>" method="GET">
                                   <input class="form-control" placeholder="" type="text" name="search" id="search_input_typing" autocomplete="off">
                                   <button class="submit" type="submit">
                                       <img src="<?php echo e(asset('web/assets/images/icons/search.svg')); ?>" class="svg_img header_svg" alt="<?php echo e(setting('title')); ?>" />
                                    </button>
                               </form>
                           </div>
                       </div>
                       <div class="align-self-center">
                           <div class="ec-header-bottons">
                               <a href="" class="ec-header-btn ec-header-wishlist">
                                   <div class="header-icon">
                                       <img src="<?php echo e(asset('web/assets/images/icons/user.png')); ?>" class="svg_img header_svg" alt="<?php echo e(setting('title')); ?>" />
                                    </div>
                               </a>
                               <a href="#ec-side-wishlist" class="ec-header-btn ec-header-wishlist ec-side-toggle">
                                   <div class="header-icon">
                                       <img src="<?php echo e(asset('web/assets/images/icons/wishlist.png')); ?>" class="svg_img header_svg" alt="<?php echo e(setting('title')); ?>" />
                                    </div>
                                   <span class="ec-header-count"><?php echo e(Cart::instance('wishlist')->content()->count()); ?></span>
                               </a>
                               <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                   <div class="header-icon">
                                       <img src="<?php echo e(asset('web/assets/images/icons/cart.png')); ?>" class="svg_img header_svg" alt="<?php echo e(setting('title')); ?>" />
                                   </div>
                                   <span class="ec-header-count ec-cart-count cart-count-lable"><?php echo e(Cart::instance('cart')->content()->count()); ?></span>
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
                           <a href="<?php echo e(route('web.index')); ?>">
                                <img src="<?php echo e(asset(setting('logo'))); ?>" alt="<?php echo e(setting('title')); ?>" />
                            </a>
                       </div>
                   </div>
                   <div class="col">
                       <div class="header-search">
                           <form class="ec-btn-group-form" action="<?php echo e(route('web.search.products.store')); ?>" method="GET" id="search_form_mobile">
                               <input id="search_input_typing_mobile" class="form-control" type="text" placeholder="" name="search" autocomplete="off">
                               <button class="submit" type="submit">
                                   <img src="<?php echo e(asset('web/assets/images/icons/search.svg')); ?>" class="svg_img header_svg" alt="<?php echo e(setting('title')); ?>" />
                                </button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <?php echo $__env->make('web.layouts.menu.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php echo $__env->make('web.layouts.menu.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </header>
   <?php echo $__env->make('web.layouts.menu.cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('web.layouts.menu.wish', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/layouts/header.blade.php ENDPATH**/ ?>