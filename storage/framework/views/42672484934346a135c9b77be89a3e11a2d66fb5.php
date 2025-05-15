
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
                               
                                   <div class="col-md-3 col-sm-12">
                                                        <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                    <span class="las fa-calendar"></span><span class="ms-1"><?php echo app('translator')->get('Model'); ?></span>
                                                                        </div>
                                    <select class="form-control" id="model" name="model" required="">
                                      <option value="">-- <?php echo app('translator')->get('Select car model'); ?> --</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $modelbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($modelb->car_model); ?>"><?php echo e(__(@$modelb->car_model)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>


                                                                    </div>
                                                                </div> 



                        
   <div class="col-md-3 col-sm-12">
                             <div class="input-group">
                                     <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                 <span class="las fa-pe"></span><span class="ms-1"><?php echo app('translator')->get('Percent'); ?></span>
                                                             </div>
                                    <input class="form-control" type="number" name="percent" id='percent'  min=0 max=100 required>

                                </div>
                            </div>


                        </div>

  <div class="row">

                             <div class="col-md-3 col-sm-12">
                             <div class="input-group">
                                     <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                 <span class="las fa-calendar"></span><span class="ms-1">From Date</span>
                                                             </div>
                                    <input class="form-control" type="text" name="start_date" id='dateAndTimePicker' class="form-control form--control start_date" required>

                                </div>
                            </div>

                                                               <div class="col-md-3 col-sm-12">
                                                        <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                    <span class="las fa-calendar"></span><span class="ms-1">To Date</span>
                                                                        </div>
                                                   <input type="text" name="end_date" id='dateAndTimePicker2' autocomplete="off" data-position='top left' class="form-control" required>

                                                                    </div>
                                                                </div>  


                                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                    <span class="las fa-calendar"></span><span class="ms-1">Status</span>
                                                                        </div>
                                                       <select name="status" id="pick-status" class="form-select" aria-label="Default select example" required>

                                                                    <option value=""><?php echo app('translator')->get('-- select status--'); ?></option>
                                                                                      <option value="0">0</option>
                                                                                      <option value="1">1</option>
                                                                               
                                                                                                </select>


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
                var start_date = fd;
                var price = parseFloat(8900);
                 $('.total_days').text(1);
                 var no_car = $('#no_car').val();


                if (start_date){
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
                        var end_date = fd;

                        const date1 = new Date(start_date);
                        const date2 = new Date(end_date);
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