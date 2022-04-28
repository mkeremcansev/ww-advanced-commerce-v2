
<?php $__env->startSection('title', __('words.login')); ?>
<?php $__env->startSection('description', setting('description')); ?>
<?php $__env->startSection('keywords', setting('keywords')); ?>
<?php echo $__env->make('web.login.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-login-wrapper">
                <div class="ec-login-container">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2 class="ec-bg-title custom-color-primary"><?php echo app('translator')->get('words.welcome'); ?></h2>
                            <p class="sub-title mb-3"><?php echo app('translator')->get('words.welcome_text'); ?></p>
                        </div>
                    </div>
                    <div class="ec-login-form">
                        <form>
                            <span class="ec-login-wrap">
                                <input type="text"  placeholder="<?php echo app('translator')->get('words.email_adress'); ?>" id="email" required/>
                            </span>
                            <span class="ec-login-wrap">
                                <input type="password" name="password" placeholder="<?php echo app('translator')->get('words.password'); ?>" id="password" required />
                            </span>
                            <span class="ec-login-wrap ec-login-btn">
                                <a class="btn btn-primary" id="add-to-login"><?php echo app('translator')->get('words.login'); ?></a>
                                <a href="<?php echo e(route('web.user.register.index')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('words.register'); ?></a>
                            </span>
                            <span class="ec-login-wrap ec-login-fp mt-4 text-center">
                                <label><a href="<?php echo e(route('web.forgot.password.index')); ?>"><?php echo app('translator')->get('words.forgot_your_password'); ?></a></label>
                            </span>
                        </form>
                    </div>
                </div>
                <?php if(setting('oauth')): ?>
                    <div class="ec-login-container mt-3">
                        <div class="ec-login-form">
                                <span class="ec-login-wrap ec-login-btn mb-3">
                                    <a class="btn btn-primary" href="<?php echo e(route('web.user.oauth.facebook.index')); ?>"><?php echo app('translator')->get('words.login_with_facebook'); ?></a>
                                    <a href="<?php echo e(route('web.user.oauth.google.index')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('words.login_with_google'); ?></a>
                                </span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/login/index.blade.php ENDPATH**/ ?>