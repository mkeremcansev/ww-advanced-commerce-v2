<div class="ec-side-wishlist-overlay"></div>
   <div id="ec-side-wishlist" class="ec-side-cart">
       <div class="ec-cart-inner">
           <div class="ec-cart-top">
               <div class="ec-cart-title">
                   <span class="cart_title"><?php echo app('translator')->get('words.wishlist_count', ['count'=>Cart::instance('wishlist')->content()->count()]); ?></span>
                   <button class="ec-close">×</button>
               </div>
               <ul class="eccart-pro-items">
                <?php if(Cart::instance('wishlist')->content()->count()): ?>
                    <?php $__currentLoopData = Cart::instance('wishlist')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php ($product = $w->model); ?>
                        <?php ($attribute = $product->getOneProductAttributes); ?>
                        <li>
                            <a href="<?php echo e(route('web.product.show', $attribute->slug)); ?>" class="sidecart_pro_img">
                                <img class="img-responsive-rounded" src="<?php echo e(asset($product->getOneProductImages->image)); ?>" alt="<?php echo e($attribute->title); ?>">
                            </a>
                            <div class="ec-pro-content">
                                <a href="<?php echo e(route('web.product.show', $attribute->slug)); ?>" class="cart_pro_title"><?php echo e($attribute->title); ?></a>
                                <span class="cart-price"><span><?php echo e(getMoneyOrder($w->price)); ?></span></span>
                                <a href="<?php echo e(route('web.wishlist.delete', $w->rowId)); ?>" class="remove">×</a>
                            </div>
                        </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="mt-5">
                        <p class="text-center"><?php echo app('translator')->get('words.shopping_cart_empty'); ?></p>
                    </div>
                <?php endif; ?>
               </ul>
           </div>
           <div class="ec-cart-bottom">
            <?php if(Cart::instance('wishlist')->content()->count()): ?>
             <div class="cart_btn mt-5">
                 <a href="<?php echo e(route('web.index')); ?>" class="btn btn-primary"><?php echo app('translator')->get('words.resume_to_shopping'); ?></a>
             </div>
            <?php else: ?>
                 <div class="cart_btn">
                     <a href="<?php echo e(route('web.index')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('words.go_to_shopping'); ?></a>
                 </div>
             <?php endif; ?>
        </div>
       </div>
   </div><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/layouts/menu/wish.blade.php ENDPATH**/ ?>