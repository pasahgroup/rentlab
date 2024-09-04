


<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">

                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light tabstyle--two">
                            <thead>                                
                            <tr>
                                <th scope="col"><?php echo app('translator')->get('Name'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Brand'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Model'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Price'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('No of Days'); ?></th>
                                 <th scope="col"><?php echo app('translator')->get('No of Car'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Total Costs'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Pick Location'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Drop Location'); ?></th>
                                 <th scope="col"><?php echo app('translator')->get('Pick Date'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Drop Date'); ?></th>
                                 <th scope="col"><?php echo app('translator')->get('Booked By'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Actions'); ?></th>
                            </tr>
                            </thead>

                            <tbody>
                             
                            <?php $__empty_1 = true; $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td data-label="<?php echo app('translator')->get('Name'); ?>"><strong><?php echo e(__($item->name)); ?></strong></td>
                                    <td data-label="<?php echo app('translator')->get('Brand'); ?>"><?php echo e(__($item->brand->name)); ?></td>
                                    <td data-label="<?php echo app('translator')->get('modelb'); ?>"><?php echo e(__($item->car_model)); ?></td>
                                      <td data-label="<?php echo app('translator')->get('Price'); ?>"><strong><?php echo e($general->cur_sym); ?> <?php echo e(__(showAmount($item->price))); ?></strong></td>
                                    <td data-label="<?php echo app('translator')->get('Car Body Type'); ?>"><?php echo e(__($item->no_days)); ?></td>

                                  
                                    <td data-label="<?php echo app('translator')->get('Model'); ?>"><?php echo e(__($item->no_car)); ?></td>
                                      <td data-label="<?php echo app('translator')->get('Price'); ?>"><strong><?php echo e($general->cur_sym); ?> <?php echo e(__(showAmount($item->total_costs))); ?></strong></td>

                                     <td data-label="<?php echo app('translator')->get('pick_location'); ?>">
                                    
                                             <?php $__empty_2 = true; $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                             <?php if($location->id== $item->pick_location): ?>
                                             <?php echo e(__(@$location->name)); ?>

                                             <?php endif; ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                        <?php endif; ?>
                                                
                              


                                     </td>
                                      <td data-label="<?php echo app('translator')->get('drop_location'); ?>">
                                             <?php $__empty_2 = true; $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                             <?php if($location->id== $item->drop_location): ?>
                                             <?php echo e(__(@$location->name)); ?>

                                             <?php endif; ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                        <?php endif; ?>
                                                
                              
                                      </td>
                                       <td data-label="<?php echo app('translator')->get('pick_time'); ?>"><?php echo e(__($item->pick_time)); ?></td>
                                        <td data-label="<?php echo app('translator')->get('drop_time'); ?>"><?php echo e(__($item->drop_time)); ?></td>
                                         <td data-label="<?php echo app('translator')->get('Booked by'); ?>"><?php echo e(__($user->firstname)); ?> <?php echo e(__($user->lastname)); ?></td>                                       
                                  
                                    <td data-label="<?php echo app('translator')->get('Action'); ?>">
                                        <a href="<?php echo e(route('admin.vehicles.edit', $item->id)); ?>" class="icon-btn ml-1" data-original-title="<?php echo app('translator')->get('Edit'); ?>">
                                            <i class="la la-edit"></i>
                                        </a>



                                        <a href="javascript:void(0)" class="icon-btn <?php echo e($item->status ? 'btn--danger' : 'btn--success'); ?> ml-1 statusBtn"  data-toggle="modal" data-target="#deleteModal_<?php echo e(__($item->id)); ?>">
  <i class="la la-eye<?php echo e($item->status ? '-slash' : null); ?>"></i>
</a>


                                    </td>



<!-- Modal -->
<div class="modal fade" id="deleteModal_<?php echo e(__($item->id)); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="<?php echo e(route('user.multibooking.remove',$item->id)); ?>" method="post"
                      enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title_<?php echo e($item->id); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn--danger">Delete</button>
      </div>
    </div>
  </div>
</form>
</div>





                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td class="text-muted text-center" colspan="100%"><?php echo e(__($empty_message)); ?></td>
                                </tr>
                            <?php endif; ?>


                                                        </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
                     
  <div class="row">                          
                            <div class="col-md-1"></div>
<div class="col-md-11">
 <form class="book--form row gx-3 gy-4 g-md-4" method="post" action="<?php echo e(route('vehicle.booking.confirm',5)); ?>">
                            <?php echo csrf_field(); ?>


<div class="col-md-3 col-sm-6">

                                <div class="form-group">
                                    <label for="end-date" class="form--label">
                                        <i class="las la-calendar-alt"></i> <?php echo app('translator')->get('Total costs'); ?>
                                    </label>
                                    <input type="text" name="total_costs" placeholder="<?php echo app('translator')->get('Drop of Date & Time'); ?>" id="total_costs" autocomplete="off" data-position='top left' value="<?php echo e($vehicles->sum('total_costs')); ?>" class="form-control form--control" required>
                                </div>
                            </div>

  <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="start-date" class="form--label">
                                        <i class="las la-calendar-alt"></i> <?php echo app('translator')->get('Pick Up Date & Time'); ?>
                                    </label>
                                    <input type="text" name="pick_time" placeholder="<?php echo app('translator')->get('Pick Up Date & Time'); ?>" id='dateAndTimePicker' autocomplete="off" data-position='top left' class="form-control form--control" value="<?php echo e($vehicles->min('pick_time')); ?>"  required>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="end-date" class="form--label">
                                        <i class="las la-calendar-alt"></i> <?php echo app('translator')->get('Drop of Date & Time2'); ?>
                                    </label>
                                    <input type="text" name="drop_time" placeholder="<?php echo app('translator')->get('Drop of Date & Time'); ?>" id="dateAndTimePicker2" autocomplete="off" data-position='top left' value="<?php echo e($vehicles->max('drop_time')); ?>" class="form-control form--control" required>
                                </div>
                            </div>



                                <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="end-date" class="form--label">
                                        <i class="las la-calendar-alt"></i> <?php echo app('translator')->get('Location1'); ?>
                                    </label>
                                     <select name="pick_location" id="drop-point" class="form-control form--control" required>
                                        <option value=""><?php echo app('translator')->get('--Pick Point--'); ?></option>
                                        <?php $__empty_1 = true; $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
             <option value="<?php echo e($location->id); ?>" selected><?php echo e(@$location->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>


                                <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="end-date" class="form--label">
                                        <i class="las la-calendar-alt"></i> <?php echo app('translator')->get('Location2'); ?>
                                    </label>                                
                                      <select name="drop_location" id="drop-point" class="form-control form--control" required>
                                        <option value=""><?php echo app('translator')->get('--Drop of Point--'); ?></option>
                                        <?php $__empty_1 = true; $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
             <option value="<?php echo e($location->id); ?>" selected><?php echo e(@$location->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
    <button class="btn btn--primary w-100" style="padding:.8rem 1.75rem;" name="multi-booking" value="multi-booking"><?php echo app('translator')->get('Submit booking request'); ?></button> 

</form>
</div>

                        </div>

                <div class="card-footer">
                    <?php echo e($vehicles->links('admin.partials.paginate')); ?>                    
                </div>
            </div><!-- card end -->
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('breadcrumb-plugins'); ?>
    <a href="<?php echo e(route('user.multibooking.add')); ?>" class="btn btn-sm btn--primary box--shadow1 text-white text--small"><i class="fa fa-fw fa-plus"></i><?php echo app('translator')->get('Add New'); ?></a>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function($){
            "use strict";

            //Status
            $('.statusBtn').on('click', function () {
                var modal = $('#statusModal');
                var url = $(this).data('url');

                modal.find('form').attr('action', url);
                modal.modal('show');
            });

        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>


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
                var price = parseFloat("<?php echo e($vehicles->max('price')); ?>");

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


                        $('.total_amount').text(price*diffDays);
                        $('.total_days').text(diffDays);
                    }
                })
            }
        })
    </script>

    <script type="text/javascript">
        $('#test').click(function(){
            alert('pop');
   // $('#your_form').attr('action', 'http://uri-for-button1.com');
});
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.appm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make($activeTemplate.'layouts.frontendmult', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/multibookings/index.blade.php ENDPATH**/ ?>