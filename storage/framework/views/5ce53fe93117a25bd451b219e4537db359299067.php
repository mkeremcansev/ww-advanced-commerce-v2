<div class="ec-side-cart-overlay"></div>
   <div id="ec-side-cart" class="ec-side-cart">
    <form action="<?php echo e(route('web.shopping.cart.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
       <div class="ec-cart-inner">
           <div class="ec-cart-top">
               <div class="ec-cart-title">
                   <span class="cart_title"><?php echo app('translator')->get('words.shopping_cart', ['count'=>Cart::instance('cart')->content()->count()]); ?></span>
                   <button class="ec-close">×</button>
               </div>
               <ul class="eccart-pro-items">
                <?php if(Cart::instance('cart')->content()->count()): ?>
                    <?php $__currentLoopData = Cart::instance('cart')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ($product = $c->model); ?>
                    <?php ($attribute = $product->getOneProductAttributes); ?>
                        <li>
                            <a href="<?php echo e(route('web.product.show', $attribute->slug)); ?>" class="sidecart_pro_img">
                                <img class="img-responsive-rounded" src="<?php echo e(asset($product->getOneProductImages->image)); ?>" alt="<?php echo e($attribute->title); ?>">
                            </a>
                            <div class="ec-pro-content">
                                <a href="<?php echo e(route('web.product.show', $attribute->slug)); ?>" class="cart_pro_title"><?php echo e($attribute->title); ?></a>
                                <div>
                                    <?php $__currentLoopData = $c->options['variants']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="mb-0 mt-1">
                                        <span><?php echo app('translator')->get('words.get_variant_main', ['variant'=>$o->getOneVariantMain->title]); ?></span><?php echo e($o->title); ?>

                                    </p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <input type="hidden" name="rowId[]" value="<?php echo e($c->rowId); ?>">
                                <span class="cart-price"><span><?php echo e(getMoneyOrder($c->price * $c->qty)); ?></span></span>
                                <div class="qty-plus-minus">
                                    <input class="qty-input" type="text" name="quantity[]" value="<?php echo e($c->qty); ?>" />
                                    
                                </div>
                                <a href="<?php echo e(route('web.shopping.cart.delete', $c->rowId)); ?>" class="remove">×</a>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="mt-5 mb-5">
                            <p class="text-center"><?php echo app('translator')->get('words.shopping_cart_empty'); ?></p>
                        </div>
                    <?php endif; ?>
               </ul>
           </div>
           <div class="ec-cart-bottom">
               <?php if(Cart::instance('cart')->content()->count()): ?>
                <div class="cart_btn mt-5">
                    <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('words.update'); ?></button>
                    <a href="<?php echo e(route('web.shopping.cart.destroy')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('words.shopping_cart_clear'); ?></a>
                </div>
                    <?php if(Session::get('coupon')): ?>
                        <div class="cart_btn">
                            <a href="<?php echo e(route('web.payment.method')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('words.go_to_pay_coupon', ['price'=>getMoneyOrder(getCheckoutMoneyOrder(Cart::instance('cart')->subtotal()) - Session::get('coupon')['price']), 'code'=>Session::get('coupon')['code']]); ?></a>
                        </div>
                    <?php else: ?>
                    <div class="cart_btn">
                        <a href="<?php echo e(route('web.payment.method')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('words.go_to_pay', ['price'=>getMoneyOrderShoppingCart(Cart::instance('cart')->subtotal())]); ?></a>
                    </div>
                    <?php endif; ?>
               <?php else: ?>
                    <div class="cart_btn">
                        <a href="<?php echo e(route('web.index')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('words.go_to_shopping'); ?></a>
                    </div>
                <?php endif; ?>
           </div>
       </div>
    </form>
   </div><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/layouts/menu/cart.blade.php ENDPATH**/ ?>