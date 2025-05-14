
<?php $__env->startSection('panel'); ?>
<?php $__env->startPush('breadcrumb-plugins'); ?>
    <a href="<?php echo e(route('admin.offer.index')); ?>" class="btn btn-sm btn--primary box--shadow1 text-white text--small"><i
            class="fa fa-fw fa-backward"></i><?php echo app('translator')->get('Go Back'); ?></a>
<?php $__env->stopPush(); ?>




   <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="<?php echo e(route('admin.offer.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="card-body">
                        <div class="row">
                                                         
                               <div class="col-md-3">
                                <div class="form-group">
                                    <label for="category"><?php echo app('translator')->get('Model'); ?></label>
                                    <select class="form-control" id="model" name="model" required="">
                                      <option value="">-- <?php echo app('translator')->get('Select car model'); ?> --</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $modelbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($modelb->car_model); ?>"><?php echo e(__(@$modelb->car_model)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="percent"><?php echo app('translator')->get('Percent'); ?></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="percent" name="percent"
                                               value="<?php echo e(old('price')); ?>" min=0 max=100 required>
                                                                           </div>
                                </div>
                            </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="start_date"><?php echo app('translator')->get('Start Date'); ?></label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="start_date" name="start_date"
                                               value="<?php echo e(old('start_date')); ?>" required>
                                                                           </div>
                                </div>
                            </div>
                  
                              
                                <div class="col-md-3">
                                <div class="form-group">
                                    <label for="end_date"><?php echo app('translator')->get('End Date'); ?></label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="end_date" name="end_date"
                                               value="<?php echo e(old('end_date')); ?>" required>
                                                                           </div>
                                </div>
                            </div>  

                             <div class="col-md-6 col-sm-12">
                                                                    <div class="input-group">
                                     <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                 <span class="las fa-calendar"></span><span class="ms-1">From Date</span>
                                                             </div>
                                    <input class="form-control" type="text" name="pick_time" id='dateAndTimePicker' class="form-control form--control pick_time" required>

                                </div>
                                                                </div>
                                                               <div class="col-md-6 col-sm-12">
                                                        <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                    <span class="las fa-calendar"></span><span class="ms-1">To Date</span>
                                                                        </div>
                                                   <input type="text" name="drop_time" id='dateAndTimePicker2' autocomplete="off" data-position='top left' class="form-control" required>

                                                                    </div>
                                                                </div>                        

                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-9">
                      </div>

                       <div class="col-md-1">                                                    
                            <button class="btn btn--primary w-100"><?php echo app('translator')->get('Save'); ?></button>
                            </div>

                                                               <div class="col-md-2">  
                                                <button class="btn btn-primary rounded-pill d-flex justify-content-center btn-light py-1 float-right" type="submit" style="margin-bottom:0px;">Book Now</button>
                                                                </div>
                        </div>
                </form>
            </div><!-- card end -->
        </div>
    </div>



<div class="search-section pt-120 pb-120 bg--section position-relative overflow-hidden">
        <div class="shape right-side"><?php echo app('translator')->get('Rent'); ?></div>
        <div class="shape"><?php echo app('translator')->get('Vehicles'); ?></div>

        <div class="container">
    <div class="widget border--dashed">
        <h4 class="mb-4"><?php echo app('translator')->get('BOOKING FORM'); ?></h4>
    <div class="single-section pt-120 pb-120 bg--section" style="background-color:#6d846c">
        <div class="container">
            <h4 class="mb-4"><?php echo app('translator')->get('You are booking'); ?>:</h4>
            <div class="row gy-5">
                <div class="col-lg-3">
                  
                </div>
                <div class="col-lg-9">
                    <div class="widget border--dashed">

                      <div class="col-lg-11 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                        <div class="bg-secondary rounded p-2">
                                      <form class="book--form row gx-3 gy-4 g-md-4" method="post" action="">
                                        <?php echo csrf_field(); ?>
                                                            <div class="row g-3">

                                            <div class="col-md-6 col-sm-12">
                                        <div class="input-group">
                            <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="ms-1"><i class="las la-street-view"></i><?php echo app('translator')->get('Pick Up Point'); ?></span>
                                                            </div>
                                                            <select name="pick_location" id="pick-point" class="form-select" aria-label="Default select example" required>

                                                                                                </select>

                                                                    </div>
                                                                </div>

                                                                     <div class="col-md-6 col-sm-12">
                                        <div class="input-group">
                            <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="ms-1"><i class="las la-street-view"></i><?php echo app('translator')->get('Drop Of Point'); ?></span>
                                                            </div>
                                                            <select name="drop_location" id="pick-drop_location" class="form-select" aria-label="Default select example" required>

                                                              
                                                                                                </select>
                                                                    </div>
                                                                </div>

                                                                  <div class="col-12">
                                        <div class="input-group">
                            <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                            <span class="las la-car"></span>
                            <span class="ms-1"><?php echo app('translator')->get('Number of Car'); ?></span>
                                                            </div>
            <input class="form-control" type="number" aria-label="Enter a City or Airport" name="no_car" id="no_car" value="1" min="1" required>
                                                                    </div>
                                                                </div>

                                                          
                                                                <div class="col-4">
                                                <button class="btn btn-primary rounded-pill d-flex justify-content-center btn-light py-1 float-right" type="submit" style="margin-bottom:0px;">Book Now</button>
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
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/datepicker.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/datepicker.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style-lib'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/bootstrap-iconpicker.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script-lib'); ?>
    <script src="<?php echo e(asset('assets/admin/js/bootstrap-iconpicker.bundle.min.js')); ?>"></script>
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
                var price = parseFloat(8900);
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/offer/add.blade.php ENDPATH**/ ?>