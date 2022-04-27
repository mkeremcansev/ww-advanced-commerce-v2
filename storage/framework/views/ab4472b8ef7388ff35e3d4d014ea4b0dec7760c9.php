<div class="ec-main-slider section mt-3">
    <div class="container">
        <div class="row">
            <div class="ec-slider swiper-container main-slider-nav main-slider-dot slide-item-img">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = Cache::get('sliders'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="ec-slide-item swiper-slide d-flex slide-item">
                            <div class="container align-self-center">
                                <div class="row">
                                    <div class="col-sm-12 justify-content-center">
                                        <img class="slide-item-img w-100" src="<?php echo e(asset($s->image)); ?>" alt="<?php echo e(setting('title')); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="swiper-pagination swiper-pagination-white"></div>
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div> <?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/homepage/layouts/slider.blade.php ENDPATH**/ ?>