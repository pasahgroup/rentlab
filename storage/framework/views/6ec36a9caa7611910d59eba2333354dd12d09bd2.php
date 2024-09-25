<?php $__env->startSection('content'); ?>


<div class="search-section pt-120 pb-120 bg--section position-relative overflow-hidden">
        <div class="shape right-side"><?php echo app('translator')->get('Rent'); ?></div>
        <div class="shape"><?php echo app('translator')->get('Vehicles'); ?></div>
           

        <div class="container">
    <div class="widget border--dashed">
        <h4 class="mb-4"><?php echo app('translator')->get('BOOKING FORM'); ?></h4>
    <div class="single-section pt-120 pb-120 bg--section">
        <div class="container">
            <h4 class="mb-4"><?php echo app('translator')->get('You are booking'); ?>:<?php echo e($vehicle->name); ?></h4>
            <div class="row gy-5">
                <div class="col-lg-4">
                    <div class="slider-top owl-theme owl-carousel border--dashed">
                        <?php $__empty_1 = true; $__currentLoopData = $vehicle->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="car__rental-thumb w-100 bg--body p-0">
                                <img src="<?php echo e(getImage(imagePath()['vehicles']['path'].'/'. $image, imagePath()['vehicles']['size'])); ?>" alt="rent-vehicle">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </div>
                    <div class="slider-bottom owl-theme owl-carousel mt-4">
                        <?php $__empty_1 = true; $__currentLoopData = $vehicle->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="rental__thumbnails bg--body">
                                <img src="<?php echo e(getImage(imagePath()['vehicles']['path'].'/'. $image, imagePath()['vehicles']['size'])); ?>" alt="rent-vehicle">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="widget border--dashed">
                    <div class="book__wrapper bg--body border--dashed mb-4">
                        <form class="book--form row gx-3 gy-4 g-md-4" method="post" action="<?php echo e(route('vehicle.booking.confirm', $vehicle->id)); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="col-md-6 col-sm-6">                                
                                    <label for="pick-point" class="form--label">
                                        <i class="las la-street-view"></i> <?php echo app('translator')->get('Pick Up Point'); ?>
                                    </label>
                                    <div class="form-group">
                                    <select name="pick_location" id="pick-point" class="form-control form--control" required>
                                        <option value=""><?php echo app('translator')->get('Pick up point'); ?></option>
                                        <?php $__empty_1 = true; $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($location->id); ?>"><?php echo e(@$location->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">                              
                                    <label for="drop-point" class="form--label">
                                        <i class="las la-street-view"></i> <?php echo app('translator')->get('Drop of Point'); ?>
                                    </label>
                                    <div class="form-group">
                                    <select name="drop_location" id="drop-point" class="form-control form--control" required>
                                        <option value=""><?php echo app('translator')->get('Drop of Point'); ?></option>
                                        <?php $__empty_1 = true; $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
             <option value="<?php echo e($location->id); ?>" selected><?php echo e(@$location->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>

                               <div class="col-md-12 col-sm-12">                                
                                    <label for="drop-point" class="">
                                        <i class="las la-street-view"></i> <?php echo app('translator')->get('No Car'); ?>
                                    </label>
                                    <div class="form-group">
                                   <input type="number" name="no_car" id="no_car" required>
                                </div>
                            </div>    


                             
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="start-date" class="form--label">
                                        <i class="las la-calendar-alt"></i> <?php echo app('translator')->get('Pick Up Date & Time'); ?>
                                    </label>
                                    <input type="text" name="pick_time" placeholder="<?php echo app('translator')->get('Pick Up Date & Time'); ?>" id='dateAndTimePicker' autocomplete="off" data-position='top left' class="form-control form--control pick_time" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="end-date" class="form--label">
                                        <i class="las la-calendar-alt"></i> <?php echo app('translator')->get('Drop of Date & Time'); ?>
                                    </label>
                                    <input type="text" name="drop_time" placeholder="<?php echo app('translator')->get('Drop of Date & Time'); ?>" id="dateAndTimePicker2" autocomplete="off" data-position='top left' class="form-control form--control" disabled required>
                                </div>
                            </div>

            

 <div class="col-1">
 </div>
                            <div class="col-8">
                                <div class="booking-costs mb-4">
                                    <?php echo app('translator')->get('  Costs:'); ?> <span class="text--danger"><span class="total_amount"><?php echo e(showAmount($vehicle->price)); ?></span> <?php echo e($general->cur_text); ?> </span>
                                    <?php echo app('translator')->get('for'); ?> <span class="total_days text--danger">1</span> <?php echo app('translator')->get('days.'); ?>
                                </div>                                
                            </div>
   <div class="col-3">
                            <div class="form-group float-right">
                                    <button class="cmn--btn justify-content-center float-right" type="submit"><?php echo app('translator')->get('Book Now'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
                     
                    </div>
                </div>


            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/datepicker.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset($activeTemplateTrue.'js/datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue.'js/datepicker.en.js')); ?>"></script>
    <script>
        // date and time picker
        $('#dateAndTimePicker').datepicker({
            timepicker: true,
            language: 'en',
            onSelect: function (fd, d, picker) {
                var pick_time = fd;
                var price = parseFloat("<?php echo e($vehicle->price); ?>");
                 $('.total_days').text(1);
                 var no_car = $('#no_car').val();
                 

                if (pick_time){
                    $('#dateAndTimePicker2').removeAttr('disabled');
                }else{
                    $('#dateAndTimePicker2').attr('disabled', 'disabled');

                    $('.total_amount').text(price);
                    $('.total_days').text(1);
                }


                $('#dateAndTimePicker2').datepicker({
                    timepicker: true,
                    language: 'en',
                    onSelect: function (fd, d, picker) {
                        var drop_time = fd;

                        const date1 = new Date(pick_time);
                        const date2 = new Date(drop_time);
                        const diffTime = Math.abs(date2 - date1);
                        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) +1;


                           $("#no_car").on('change keydown paste input', function(){
                     no_car = $('#no_car').val();
 $('.total_amount').text(price*diffDays*no_car);

                    //alert(no_car);
});
                      

if(no_car>0)
{
   $('.total_amount').text(price*diffDays*no_car);
   $('.total_days').text(diffDays);

}else{
     alert('Car number is Empty');
}



                    }
                })
            }
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/vehicles/booking.blade.php ENDPATH**/ ?>