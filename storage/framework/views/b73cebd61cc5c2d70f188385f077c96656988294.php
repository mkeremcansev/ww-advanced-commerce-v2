
<?php $__env->startSection('title', __('words.category')); ?>
<?php $__env->startSection('description', setting('description')); ?>
<?php $__env->startSection('keywords', setting('keywords')); ?>
<?php $__env->startSection('content'); ?>
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <?php if($products->count()): ?>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row margin-minus-b-15">
                        <div class="col">
                            <div class="tab-content">
                                <div class="tab-pane fade show active">
                                    <div class="row">
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php ($product = $r->getOneProductAttributes); ?>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                                <div class="ec-product-inner">
                                                    <div class="ec-pro-image-outer">
                                                        <div class="ec-pro-image">
                                                            <a href="<?php echo e(route('web.product.show', $product->slug)); ?>" class="image">
                                                                <img class="main-image" src="<?php echo e(asset($r->getOneProductImages->image)); ?>" alt="<?php echo e($product->title); ?>" />
                                                            </a>
                                                            <div class="product-label p-2">
                                                                <?php $__currentLoopData = getProductLabel($product->discount, $product->price, $r->created_at, $r->getAllProductReviews->avg('rating')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($l['status']): ?>
                                                                        <label class="label-text <?php echo e($l['code']); ?>"><?php echo e($l['title'].$l['value']); ?></label>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ec-pro-content">
                                                        <a href="<?php echo e(route('web.category.products.show', $r->getOneProductCategory->slug)); ?>"><h6 class="ec-pro-stitle"><?php echo e($r->getOneProductCategory->title); ?></h6></a> 
                                                        <h5 class="ec-pro-title">
                                                            <a href="<?php echo e(route('web.product.show', $product->slug)); ?>"><?php echo e($product->title); ?></a>
                                                        </h5>
                                                        <div class="ec-pro-rat-price">
                                                            <span class="ec-pro-rating">
                                                                <?php for($i = 1; $i <= 5; $i++): ?>
                                                                    <i class="ecicon eci-star <?php if(round((float)$r->getAllProductReviews->avg('rating')) >= $i): ?> fill <?php endif; ?>"></i>
                                                                <?php endfor; ?>
                                                            </span>
                                                            <?php if($product->discount): ?>
                                                                <span class="ec-price">
                                                                    <span class="new-price"><?php echo e(getMoneyOrder($product->discount)); ?></span>
                                                                    <span class="old-price"><?php echo e(getMoneyOrder($product->price)); ?></span>
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
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ec-product-content">
                        <div class="ec-product-inner">
                            <h5 class="text-center p-5 custom-color-text"><?php echo app('translator')->get('words.category_not_have_product'); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="row mt-5">
                <?php echo e($products->links('vendor.pagination.pagination')); ?>

            </div>
            
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/products/category/index.blade.php ENDPATH**/ ?>