
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.forgot_password'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-login-wrapper">
                <div class="ec-login-container">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2 class="ec-bg-title custom-color-primary"><?php echo app('translator')->get('words.forgot_password'); ?></h2>
                            <p class="sub-title mb-3"><?php echo app('translator')->get('words.forgot_password_reset_p'); ?></p>
                        </div>
                    </div>
                    <div class="ec-login-form">
                        <form method="POST" action="<?php echo e(route('web.forgot.password.update', ['token'=>$token])); ?>">
                            <?php echo csrf_field(); ?>
                            <span class="ec-login-wrap">
                                <input type="email"  placeholder="<?php echo app('translator')->get('words.email_adress'); ?>" name="email" required/>
                            </span>
                            <span class="ec-login-wrap">
                                <input type="password"  placeholder="<?php echo app('translator')->get('words.password'); ?>" name="password" required/>
                            </span>
                            <span class="ec-login-wrap">
                                <input type="password"  placeholder="<?php echo app('translator')->get('words.repeat_password'); ?>" name="password_confirmation" required/>
                            </span>
                            <span class="ec-login-wrap ec-login-fp mt-4 text-center">
                                <button type="submit" class="btn btn-secondary"><?php echo app('translator')->get('words.save'); ?></button>
                            </span>
                            <span class="ec-login-wrap ec-login-fp mt-4 text-center">
                                <label><a href="<?php echo e(route('web.user.login.index')); ?>"><?php echo app('translator')->get('words.already_have_an_account'); ?></a></label>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/vendor/notifications/password/reset.blade.php ENDPATH**/ ?>