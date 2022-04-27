
<section class="section ec-product-tab section-space-p mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2 class="ec-title"><?php echo app('translator')->get('words.new_products'); ?></h2>
                            </div>
                        </div>
                        <div class="ec-new-slider">
                            <?php echo $__env->make('web.homepage.layouts.new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2 class="ec-title"><?php echo app('translator')->get('words.popular_products'); ?></h2>
                            </div>
                        </div>
                        <div class="ec-new-slider">
                            <?php echo $__env->make('web.homepage.layouts.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2 class="ec-title"><?php echo app('translator')->get('words.discounted_products'); ?></h2>
                            </div>
                        </div>
                        <div class="ec-new-slider">
                            <?php echo $__env->make('web.homepage.layouts.discount', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/homepage/layouts/tab.blade.php ENDPATH**/ ?>