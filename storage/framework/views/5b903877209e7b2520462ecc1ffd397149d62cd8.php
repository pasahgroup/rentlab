
<?php $__env->startSection('content'); ?>
    <div class="page-wrapper default-version">
        <div class="form-area bg_img" data-background="<?php echo e(asset('assets/admin/images/1.jpg')); ?>">
            <div class="form-wrapper">
                <h4 class="logo-text mb-15"><strong><?php echo app('translator')->get('Recover Account'); ?></strong></h4>
                <form action="<?php echo e(route('admin.password.verify.code')); ?>" method="POST" class="cmn-form mt-30">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label><?php echo app('translator')->get('Verification Code'); ?></label>
                        <input type="text" name="code" id="code" class="form-control">
                    </div>
                    <div class="form-group d-flex justify-content-between align-items-center">
                        <a href="<?php echo e(route('admin.password.reset')); ?>" class="text-muted text--small"><?php echo app('translator')->get('Try to send again'); ?></a>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="submit-btn mt-25 b-radius--capsule"><?php echo app('translator')->get('Verify Code'); ?> <i class="las la-sign-in-alt"></i></button>
                    </div>
                </form>
            </div>
        </div><!-- login-area end -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
    (function($){
        "use strict";
        $('#code').on('input change', function () {
          var xx = document.getElementById('code').value;
          $(this).val(function (index, value) {
             value = value.substr(0,7);
              return value.replace(/\W/gi, '').replace(/(.{3})/g, '$1 ');
          });
      });
    })(jQuery)
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/auth/passwords/code_verify.blade.php ENDPATH**/ ?>