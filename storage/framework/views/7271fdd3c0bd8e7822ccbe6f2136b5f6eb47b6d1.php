
<?php $__env->startSection('title', $product->getOneProductAttributes->title); ?>
<?php $__env->startSection('description', $product->getOneProductSeoAttributes->description); ?>
<?php $__env->startSection('keywords', $product->getOneProductSeoAttributes->keywords); ?>
<?php echo $__env->make('web.product.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('web/assets/css/style.css')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php ($p = $product->getOneProductAttributes); ?>
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-pro-rightside ec-common-rightside col-lg-12 col-md-12">
                <div class="single-pro-block">
                    <div class="single-pro-inner">
                        <div class="row">
                            <div class="single-pro-img single-pro-img-no-sidebar">
                                <div class="single-product-scroll">
                                    <div class="single-product-cover img-responsive-rounded">
                                        <?php $__currentLoopData = $product->getAllProductImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="single-slide">
                                                <div class="product-label p-2">
                                                    <?php $__currentLoopData = getProductLabel($p->discount, $p->price, $product->created_at, $product->getAllProductReviews->avg('rating')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($l['status']): ?>
                                                            <label class="label-text <?php echo e($l['code']); ?>"><?php echo e($l['title'].$l['value']); ?></label>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <img class="img-responsive" src="<?php echo e(asset($i->image)); ?>" alt="<?php echo e($p->title); ?>">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="single-nav-thumb">
                                        <?php $__currentLoopData = $product->getAllProductImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="single-slide">
                                                <img class="img-responsive img-responsive-rounded" src="<?php echo e(asset($i->image)); ?>" alt="<?php echo e($p->title); ?>">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="single-pro-desc single-pro-desc-no-sidebar">
                                <div class="single-pro-content">
                                    <h5 class="ec-single-title"><?php echo e($p->title); ?></h5>
                                    <div class="ec-single-price-stoke">
                                        <?php if($p->discount): ?>
                                            <div class="ec-single-price">
                                                <span class="new-price"><?php echo e(getMoneyOrder($p->discount)); ?></span>
                                                <span class="old-price"><?php echo e(getMoneyOrder($p->price)); ?></span>
                                            </div>
                                        <?php else: ?>
                                        <div class="ec-single-price">
                                            <span class="new-price"><?php echo e(getMoneyOrder($p->price)); ?></span>
                                        </div>
                                        <?php endif; ?>
                                        
                                    </div>
                                    <div class="ec-single-rating-wrap">
                                        <div class="ec-single-rating">
                                            <?php for($i = 1; $i <= 5; $i++): ?>
                                                <i class="ecicon eci-star <?php if(round((float)$product->getAllProductReviews->avg('rating')) >= $i): ?> fill <?php endif; ?>"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <span class="ec-read-review">
                                            <a href="#ec-spt-nav-review"><?php echo app('translator')->get('words.review_count', ['count'=>$product->getAllProductReviews->count()]); ?></a>
                                        </span>
                                    </div>
                                    <div class="ec-single-desc">
                                        <?php echo getShowMore($p->description).'...'; ?>

                                        <a class="main-text-color" href="#informations"><?php echo app('translator')->get('words.show_more'); ?></a>
                                    </div>

                                    
                                    <div class="ec-pro-variation">
                                        <?php $__currentLoopData = $product->getAllProductVariants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="ec-pro-variation-inner ec-pro-variation-size">
                                            <span><?php echo e($v->title); ?></span>
                                            <div class="ec-pro-variation-content">
                                                <ul>
                                                    <?php $__currentLoopData = $v->getAllVariantAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($a->stock): ?>
                                                            <?php if($a->price): ?>
                                                                <li class="custom-variant-attribute variant-attr custom-data-tooltip" variant-hash="<?php echo e($a->hash); ?>" variant-stock="<?php echo e($a->stock); ?>" data-tooltip="<?php echo app('translator')->get('words.plus_price', ['price'=>getMoneyOrder($a->price)]); ?>">
                                                                    <span><?php echo e($a->title); ?></span>
                                                                </li>
                                                            <?php else: ?>
                                                                <li class="custom-variant-attribute variant-attr" variant-hash="<?php echo e($a->hash); ?>" variant-stock="<?php echo e($a->stock); ?>">
                                                                    <span><?php echo e($a->title); ?></span>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <li class="custom-disabled-alert"><span><?php echo e($a->title); ?></span></li>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <p class="custom-stock"></p>
                                    </div>
                                    
                                    <div class="ec-single-qty">
                                        <div class="qty-plus-minus">
                                            <input class="qty-input" type="text" name="quantity" id="quantity" value="1" />
                                        </div>
                                        <div class="ec-single-cart ">
                                            <button class="btn btn-primary" id="add-to-cart"><?php echo app('translator')->get('words.add_to_cart'); ?></button>
                                        </div>
                                        <div class="ec-single-wishlist">
                                            <a id="add-to-wishlist" class="ec-btn-group wishlist" title="<?php echo e(setting('title')); ?>"><img src="<?php echo e(asset('web/assets/images/icons/wishlistwhite.png')); ?>" class="svg_img pro_svg" alt="<?php echo e(setting('title')); ?>" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-single-pro-tab">
                    <div class="ec-single-pro-tab-wrapper">
                        <div class="ec-single-pro-tab-nav">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#ec-spt-nav-details" role="tablist"><?php echo app('translator')->get('words.description'); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-info"
                                        role="tablist"><?php echo app('translator')->get('words.information'); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review"
                                        role="tablist"><?php echo app('translator')->get('words.reviews', ['count'=>$product->getAllProductReviews->count()]); ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content  ec-single-pro-tab-content">
                            <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                <div class="ec-single-pro-tab-desc">
                                    <?php echo $p->description; ?>

                                </div>
                            </div>
                            <div id="ec-spt-nav-info" class="tab-pane fade">
                                <div class="ec-single-pro-tab-moreinfo">
                                    <ul>
                                        <?php $__currentLoopData = $product->getAllProductInformations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><span><?php echo e($i->title); ?></span><?php echo e($i->description); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>

                            <div id="ec-spt-nav-review" class="tab-pane fade">
                                <div class="row">
                                    <div class="ec-t-review-wrapper">
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <div class="ec-t-review-name">Jeny Doe</div>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <div class="ec-t-review-name">Linda Morgus</div>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="ec-ratting-content">
                                        <h3>Add a Review</h3>
                                        <div class="ec-ratting-form">
                                            <form action="#">
                                                <div class="ec-ratting-star">
                                                    <span>Your rating:</span>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-ratting-input">
                                                    <input name="your-name" placeholder="Name" type="text" />
                                                </div>
                                                <div class="ec-ratting-input">
                                                    <input name="your-email" placeholder="Email*" type="email"
                                                        required />
                                                </div>
                                                <div class="ec-ratting-input form-submit">
                                                    <textarea name="your-commemt"
                                                        placeholder="Enter Your Comment"></textarea>
                                                    <button class="btn btn-primary" type="submit"
                                                        value="Submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details description area end -->
            </div>

        </div>
    </div>
</section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/product/index.blade.php ENDPATH**/ ?>