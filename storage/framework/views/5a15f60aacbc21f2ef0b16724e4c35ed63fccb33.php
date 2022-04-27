<div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
    <div class="ec-menu-title">
        <span class="menu_title"><?php echo app('translator')->get('words.category_list'); ?></span>
        <button class="ec-close">×</button>
    </div>
    <div class="ec-menu-inner">
        <div class="ec-menu-content">
            <ul>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('web.category.products.show', $c->slug)); ?>"><?php echo e($c->title); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <p class="text-center mt-5">Canseworks</p>
</div><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/layouts/menu/sidebar.blade.php ENDPATH**/ ?>