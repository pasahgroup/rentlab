

<?php $__env->startSection('content'); ?>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version" style="padding-left:20px;padding-right:20;">
     
                <?php echo $__env->make('admin.partials.breadcrumbm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('panel'); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.masterm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/layouts/appm.blade.php ENDPATH**/ ?>