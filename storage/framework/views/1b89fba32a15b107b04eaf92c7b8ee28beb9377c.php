<?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(count($c->getAllCategoriesCollection)): ?>
        <li class="dropdown position-static">
            <a href="<?php echo e(route('web.category.products.show', $c->slug)); ?>"><?php echo e($c->title); ?>

                <i class="ecicon eci-angle-right"></i>
            </a>
            <ul class="sub-menu sub-menu-child">
                <?php echo $__env->make('web.layouts.menu.category', ['children'=>$c->getAllCategoriesCollection], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        </li>
    <?php else: ?>
        <li><a href="<?php echo e(route('web.category.products.show', $c->slug)); ?>"><?php echo e($c->title); ?></a></li>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/layouts/menu/category.blade.php ENDPATH**/ ?>