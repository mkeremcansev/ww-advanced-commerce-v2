
<?php $__env->startSection('title', __('words.register')); ?>
<?php $__env->startSection('description', setting('description')); ?>
<?php $__env->startSection('keywords', setting('keywords')); ?>
<?php echo $__env->make('web.register.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-login-wrapper">
                <div class="ec-login-container">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2 class="ec-bg-title custom-color-primary"><?php echo app('translator')->get('words.join_now'); ?></h2>
                            <p class="sub-title mb-3"><?php echo app('translator')->get('words.join_now_text'); ?></p>
                        </div>
                    </div>
                    <div class="ec-login-form">
                        <form>
                            <span class="ec-login-wrap">
                                <input type="text"  placeholder="<?php echo app('translator')->get('words.name'); ?>" id="name" required/>
                            </span>
                            <span class="ec-login-wrap">
                                <input type="text"  placeholder="<?php echo app('translator')->get('words.surname'); ?>" id="surname" required/>
                            </span>
                            <span class="ec-login-wrap">
                                <input type="email"  placeholder="<?php echo app('translator')->get('words.email_adress'); ?>" id="email" required/>
                            </span>
                            <span class="ec-login-wrap">
                                <input type="password" placeholder="<?php echo app('translator')->get('words.password'); ?>" id="password" required />
                            </span>
                            <span class="ec-login-wrap">
                                <input type="password" placeholder="<?php echo app('translator')->get('words.repeat_password'); ?>" id="repeat" required />
                            </span>
                            <span class="ec-login-wrap mt-4">
                                <div class="form-check mb-3 d-flex ec-login-wrap-new">
                                    <input type="checkbox" id="check" class="mr-2">
                                    <label class="form-check-label text-center" for="check">
                                        <?php echo app('translator')->get('words.accept_all_contracts'); ?>
                                    </label>
                                </div>
                            </span>
                            <span class="ec-login-wrap ec-login-btn">
                                <a id="add-to-register" class="btn btn-secondary"><?php echo app('translator')->get('words.register'); ?></a>
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
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/register/index.blade.php ENDPATH**/ ?>