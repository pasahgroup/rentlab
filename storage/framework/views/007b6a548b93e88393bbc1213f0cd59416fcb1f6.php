<?php $__env->startSection('content'); ?>
<style type="text/css">
    
    .booking-btn {
  border: 0px solid #647545;
  padding: 8px 30px;
  color:#fff;
  display: block;  
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}

 .header-btn {
  border: 0px solid #647545;
  padding: 1px 2px;
  color:#fff;
  display: block;  
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}
</style>



    <?php
        $banners = getContent('banner.element');

        $brands = \App\Models\Brand::active()->orderBy('name')->get();
        $seats = \App\Models\Seater::active()->orderBy('number')->get();
    ?>

    <!-- Book Section -->
    <?php if($sections->secs != null): ?>
        <?php $__currentLoopData = json_decode($sections->secs); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make($activeTemplate.'sections.'.$sec, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/home.blade.php ENDPATH**/ ?>