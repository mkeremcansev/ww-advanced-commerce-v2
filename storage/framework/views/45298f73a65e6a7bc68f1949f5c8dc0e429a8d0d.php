<footer class="ec-footer">
    <div class="footer-container">
        <div class="footer-top section-space-footer-p">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-3 ec-footer-cat">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Popular Categories</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="#">Fashion</a></li>
                                    <li class="ec-footer-link"><a href="#">Electronic</a></li>
                                    <li class="ec-footer-link"><a href="#">Cosmetic</a></li>
                                    <li class="ec-footer-link"><a href="#">Health</a></li>
                                    <li class="ec-footer-link"><a href="#">Watches</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 ec-footer-info">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Products</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="#">Prices drop</a></li>
                                    <li class="ec-footer-link"><a href="#">New products</a></li>
                                    <li class="ec-footer-link"><a href="#">Best sales</a></li>
                                    <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                    <li class="ec-footer-link"><a href="#">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 ec-footer-account">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Our Company</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="track-order.html">Delivery</a></li>
                                    <li class="ec-footer-link"><a href="privacy-policy.html">Legal Notice</a></li>
                                    <li class="ec-footer-link"><a href="terms-condition.html">Terms and conditions</a></li>
                                    <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
                                    <li class="ec-footer-link"><a href="checkout.html">Secure payment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 ec-footer-service">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Services</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="#">Prices drop</a></li>
                                    <li class="ec-footer-link"><a href="#">New products</a></li>
                                    <li class="ec-footer-link"><a href="#">Best sales</a></li>
                                    <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                    <li class="ec-footer-link"><a href="#">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 ec-footer-cont-social">
                        <div class="ec-footer-contact">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Contact</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link ec-foo-location"><span><img
                                                    src="<?php echo e(asset('web')); ?>/assets/images/icons/foo-location.svg"
                                                    class="svg_img foo_svg" alt="" /></span>
                                            <p>2548 Broaddus Maple Court, Madisonville KY 4783, USA</p>
                                        </li>
                                        <li class="ec-footer-link ec-foo-call"><span><img
                                                    src="<?php echo e(asset('web')); ?>/assets/images/icons/foo-wp.svg" class="svg_img foo_svg"
                                                    alt="" /></span><a href="tel:+919999999999">+91 999 999 9999</a>
                                        </li>
                                        <li class="ec-footer-link ec-foo-mail"><span><img
                                                    src="<?php echo e(asset('web')); ?>/assets/images/icons/foo-mail.svg" class="svg_img foo_svg"
                                                    alt="" /></span><a
                                                href="mailto:support@demo.email">support@demo.email</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ec-footer-social">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading marg-b-0 s-head">Follow Us</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#"><i class="ecicon eci-instagram"
                                                    aria-hidden="true"></i></a></li>
                                        <li class="ec-footer-link"><a href="#"><i class="ecicon eci-twitter-square"
                                                    aria-hidden="true"></i></a></li>
                                        <li class="ec-footer-link"><a href="#"><i class="ecicon eci-facebook-square"
                                                    aria-hidden="true"></i></a></li>
                                        <li class="ec-footer-link"><a href="#"><i class="ecicon eci-linkedin-square"
                                                        aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <!-- Footer payment -->
                    <div class="footer-copy">
                        <div class="footer-bottom-copy ">
                            <div class="ec-copy">Copyright © Canseworks
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="ec-popnews-bg"></div>
<div id="ec-popnews-box">
    <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
    <div class="row">
        <div class="col-md-12">
            <img src="<?php echo e(asset(setting('popup'))); ?>" alt="newsletter">
        </div>
    </div>
</div>
<?php echo $__env->make('web.layouts.menu.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('web/assets/js/vendor/jquery-3.5.1.min.js')); ?>"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="<?php echo e(asset('web/assets/js/vendor/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/vendor/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/vendor/jquery-migrate-3.3.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/vendor/modernizr-3.11.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/plugins/jquery.sticky-sidebar.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/plugins/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/plugins/nouislider.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/plugins/scrollup.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/plugins/jquery.zoom.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/plugins/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/plugins/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/plugins/infiniteslidev2.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/plugins/click-to-call.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/vendor/index.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/index.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/marquee.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/story/dist/zuck.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/story/demo/script.js')); ?>"></script>
<script src="<?php echo e(asset('web/assets/js/autocomplete.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->make('web.layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('web.layouts.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/layouts/footer.blade.php ENDPATH**/ ?>