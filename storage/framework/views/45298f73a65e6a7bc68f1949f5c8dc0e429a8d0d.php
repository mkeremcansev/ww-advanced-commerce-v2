<footer class="ec-footer">
    <div class="footer-container">
        <div class="footer-top section-space-footer-p">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 ec-footer-cat">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading"><?php echo e(setting('title')); ?></h4>
                            <div class="ec-footer-links ec-footer-dropdown">
                                <li class="ec-footer-link">
                                    <a><?php echo e(setting('description')); ?></a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ec-footer-service">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading"><?php echo app('translator')->get('words.pages'); ?></h4>
                            <div class="ec-footer-links ec-footer-dropdown">
                                <ul class="align-items-center">
                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="ec-footer-link"><a href="<?php echo e(route('web.page.info.show', $p->slug)); ?>"><?php echo e($p->title); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ec-footer-cont-social">
                        <div class="ec-footer-contact">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading"><?php echo app('translator')->get('words.contact'); ?></h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link ec-foo-location">
                                            <a href="mailto:<?php echo e(setting('mail')); ?>"><?php echo e(setting('mail')); ?></a>
                                        </li>
                                        <li class="ec-footer-link ec-foo-call">
                                            <a href="tel:<?php echo e(setting('phone')); ?>"><?php echo e(setting('phone')); ?></a>
                                        </li>
                                        <li class="ec-footer-link ec-foo-mail">
                                            <a><?php echo e(setting('adress')); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ec-footer-social">
                            <div class="ec-footer-widget">
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">
                                            <a href="<?php echo e(setting('instagram')); ?>">
                                                <i class="ecicon eci-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="ec-footer-link">
                                            <a href="<?php echo e(setting('twitter')); ?>">
                                                <i class="ecicon eci-twitter-square" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="ec-footer-link">
                                            <a href="<?php echo e(setting('facebook')); ?>">
                                                <i class="ecicon eci-facebook-square" aria-hidden="true"></i>
                                            </a>
                                        </li>
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
<script src="<?php echo e(asset('web/assets/js/main.js')); ?>"></script>
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