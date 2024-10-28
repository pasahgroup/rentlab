<?php $__env->startSection('content'); ?>
<?php include(app_path().'/pesapal/pesapal-iframe.php');?> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/user/pesapal/pesapal_payment.blade.php ENDPATH**/ ?>