<div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <div class="ec-main-menu">
                    <ul>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(count($c->getAllCategoriesCollection)): ?>
                                <li class="dropdown"><a href="<?php echo e(route('web.category.products.show', $c->slug)); ?>"><?php echo e($c->title); ?></a>
                                    <ul class="sub-menu">
                                        <?php echo $__env->make('web.layouts.menu.category',
                                        ['children'=>$c->getAllCategoriesCollection], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li><a href="<?php echo e(route('web.category.products.show', $c->slug)); ?>"><?php echo e($c->title); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/layouts/menu/navbar.blade.php ENDPATH**/ ?>