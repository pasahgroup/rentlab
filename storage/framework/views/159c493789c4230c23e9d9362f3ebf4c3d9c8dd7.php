
<?php $__env->startSection('content'); ?>
    <div class="page-wrapper default-version">
        <div class="form-area bg_img" data-background="<?php echo e(asset('assets/admin/images/1.jpg')); ?>">
            <div class="form-wrapper">
                <h4 class="logo-text mb-15"><strong><?php echo app('translator')->get('Recover Account'); ?></strong></h4>
                <form action="<?php echo e(route('admin.password.reset')); ?>" method="POST" class="cmn-form mt-30">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="email"><?php echo app('translator')->get('Email'); ?></label>
                        <input type="email" name="email" class="form-control b-radius--capsule" id="username" value="<?php echo e(old('email')); ?>" placeholder="<?php echo app('translator')->get('Enter your email'); ?>">
                        <i class="las la-user input-icon"></i>
                    </div>
                    <div class="form-group d-flex justify-content-between align-items-center">
                        <a href="<?php echo e(route('admin.login')); ?>" class="text-muted text--small"><i class="las la-lock"></i><?php echo app('translator')->get('Login Here'); ?></a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="submit-btn mt-25 b-radius--capsule"><?php echo app('translator')->get('Send Reset Code'); ?> <i class="las la-sign-in-alt"></i></button>
                    </div>
                </form>
            </div>
        </div><!-- login-area end -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/auth/passwords/email.blade.php ENDPATH**/ ?>