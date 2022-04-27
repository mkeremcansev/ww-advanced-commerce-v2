
<div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="<?php echo e(asset('web')); ?>/assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                        <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle">
                            <img src="<?php echo e(asset('web/assets/images/icons/cart.png')); ?>" class="svg_img header_svg" alt="icon" />
                            <span class="ec-cart-noti ec-header-count ec-cart-count cart-count-lable"><?php echo e(Cart::instance('cart')->content()->count()); ?></span>
                        </a>
                </div>
                <div class="ec-nav-panel-icons">
                        <a href="<?php echo e(route('web.index')); ?>" class="ec-header-btn">
                                <img src="<?php echo e(asset('web')); ?>/assets/images/icons/home.svg" class="svg_img header_svg" alt="<?php echo app('translator')->get('words.homepage'); ?>" />
                        </a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-wishlist" class="ec-header-btn ec-side-toggle">
                            <img src="<?php echo e(asset('web/assets/images/icons/wishlist.png')); ?>" class="svg_img header_svg" alt="icon" />
                            <span class="ec-cart-noti"><?php echo e(Cart::instance('wishlist')->content()->count()); ?></span>
                        </a>
                </div>
                <div class="ec-nav-panel-icons">
                        <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(route('web.account.logout.store')); ?>" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                                        <img src="<?php echo e(asset('web/assets/images/icons/logout.png')); ?>" class="svg_img header_svg" alt="<?php echo e(setting('title')); ?>" />
                                </a>
                        <?php else: ?>
                                <a href="<?php echo e(route('web.user.login.index')); ?>" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                                        <img src="<?php echo e(asset('web/assets/images/icons/user.png')); ?>" class="svg_img header_svg" alt="<?php echo e(setting('title')); ?>" />
                                </a>
                        <?php endif; ?>
                    
                </div>
    
            </div>
        </div>
    </div><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/layouts/menu/mobile.blade.php ENDPATH**/ ?>