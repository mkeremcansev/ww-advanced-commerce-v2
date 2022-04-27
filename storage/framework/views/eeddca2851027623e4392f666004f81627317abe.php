<section class="section ec-category-section section-space-p">
    <div class="container">
        <div class="row margin-minus-b-15 margin-minus-t-15">
            <div id="ec-cat-slider" class="ec-cat-slider owl-carousel">
                <?php $__currentLoopData = Cache::get('r_categories'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="ec_cat_content ec_cat_content">
                        <div class="ec_cat_inner ec_cat_inner">
                            <div class="ec-category-image">
                                <img src="<?php echo e(asset($rc->image)); ?>" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <a href="<?php echo e(route('web.category.products.show', $rc->slug)); ?>"><h3><?php echo e($rc->title); ?></h3></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/homepage/layouts/category.blade.php ENDPATH**/ ?>