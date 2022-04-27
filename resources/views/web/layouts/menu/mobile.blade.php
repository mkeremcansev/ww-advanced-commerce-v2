{{-- <div class="mobile-menu">
        <a href="{{ route('web.index') }}" title="@lang('words.homepage')">
                <i class="fas fa-home"></i>
                <span>@lang('words.homepage')</span>
        </a>
        <button class="cate-btn" title="@lang('words.category_list')">
                <i class="fas fa-list"></i>
                <span>@lang('words.category')</span>
        </button>
        <button class="cart-btn" title="@lang('words.shopping_cart', ['count'=>Cart::instance('cart')->content()->count()])">
                <i class="fas fa-shopping-basket"></i>
                <span>@lang('words.shopping_cart_main')</span>
                <sup>
                        {{ Cart::instance('cart')->content()->count() }}
                </sup>
        </button>
        <button class="wishlist-btn" title="@lang('words.wishlist_count', ['count'=>Cart::instance('wishlist')->content()->count()])">
                <i class="fas fa-heart"></i>
                <span>@lang('words.wishlist')</span>
                <sup>
                        {{ Cart::instance('wishlist')->content()->count() }}
                </sup>
        </button>
        @auth
                <a href="{{ route('web.account.logout.store') }}">
                        <i class="fa fa-sign-out-alt"></i>
                        <span>@lang('words.logout')</span>
                </a>
        @else
                <a href="{{ route('web.user.login.index') }}">
                        <i class="fa fa-user"></i>
                        <span>@lang('words.login')</span>
                </a>
        @endauth
</div> --}}
<div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="{{ asset('web') }}/assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                        <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle">
                            <img src="{{ asset('web/assets/images/icons/cart.png') }}" class="svg_img header_svg" alt="icon" />
                            <span class="ec-cart-noti ec-header-count ec-cart-count cart-count-lable">{{ Cart::instance('cart')->content()->count() }}</span>
                        </a>
                </div>
                <div class="ec-nav-panel-icons">
                        <a href="{{ route('web.index') }}" class="ec-header-btn">
                                <img src="{{ asset('web') }}/assets/images/icons/home.svg" class="svg_img header_svg" alt="@lang('words.homepage')" />
                        </a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-wishlist" class="ec-header-btn ec-side-toggle">
                            <img src="{{ asset('web/assets/images/icons/wishlist.png') }}" class="svg_img header_svg" alt="icon" />
                            <span class="ec-cart-noti">{{ Cart::instance('wishlist')->content()->count() }}</span>
                        </a>
                </div>
                <div class="ec-nav-panel-icons">
                        @auth
                                <a href="{{ route('web.account.logout.store') }}" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                                        <img src="{{ asset('web/assets/images/icons/logout.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                </a>
                        @else
                                <a href="{{ route('web.user.login.index') }}" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                                        <img src="{{ asset('web/assets/images/icons/user.png') }}" class="svg_img header_svg" alt="{{ setting('title') }}" />
                                </a>
                        @endauth
                    
                </div>
    
            </div>
        </div>
    </div>