<?php if(Cache::get('n_products')->count()): ?>
    <?php $__currentLoopData = Cache::get('n_products'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php ($product = $n->getOneProductAttributes); ?>
        <div class="col-lg-12 col-sm-12 col-md-12 ec-all-product-block">
            <div class="ec-all-product-inner">
                <div class="ec-pro-image-outer">
                    <div class="ec-pro-image">
                        <a href="<?php echo e(route('web.product.show', $product->slug)); ?>" class="image">
                            <img class="main-image" src="<?php echo e(asset($n->getOneProductImages->image)); ?>" alt="<?php echo e($product->title); ?>" />
                        </a>
                    </div>
                </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title">
                            <a href="<?php echo e(route('web.product.show', $product->slug)); ?>"><?php echo e($product->title); ?></a>
                        </h5>
                        <h6 class="ec-pro-stitle">
                            <a href="<?php echo e(route('web.product.show', $product->slug)); ?>"><?php echo e($n->getOneProductCategory->title); ?></a>
                        </h6>
                        <div class="ec-pro-rat-price">
                            <div class="ec-pro-rat-pri-inner">
                                <?php if($product->discount): ?>
                                    <span class="ec-price">
                                        <span class="new-price"><?php echo e(getMoneyOrder($product->price)); ?></span>
                                        <span class="old-price"><?php echo e(getMoneyOrder($product->discount)); ?></span>
                                    </span>
                                <?php else: ?>
                                    <span class="ec-price">
                                        <span class="new-price"><?php echo e(getMoneyOrder($product->price)); ?></span>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <p class="text-center"><?php echo app('translator')->get('words.not_have_product'); ?></p>
<?php endif; ?>
<?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/homepage/layouts/new.blade.php ENDPATH**/ ?>