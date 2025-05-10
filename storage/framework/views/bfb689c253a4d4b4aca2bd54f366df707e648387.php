<?php $__env->startSection('content'); ?>

    <div class="container">
      <div class="border-box">
           <div class="col-md-12">
             <p><strong></strong></p>
           </div>
<div class="col-md-12">
    <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Well!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>

 <?php if($message = Session::get('info')): ?>
  <div class="alert alert-warning">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Ops!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>

 <?php if($message = Session::get('error')): ?>
  <div class="alert alert-danger">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Sorry!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>
</div>

    <!-- partial:../../partials/_navbar.html -->
        <!-- partial -->    
      <!-- partial:../../partials/_sidebar.html -->
         <div class="content-wrapper">
          <div class="row">
          
                  <h4 class="card-title">Booked Car List</h4>                 
  <div class="container row" style="background-color:aliceblue;">
         <div class="col-md-10">
        <em>Booking Costs Summary</em>
          <em><b>(Please finish Payment to complete you are booking)</b></em>

             <p><em>(From date <?php echo e(date("d-M-Y", strtotime($times->pick_time))); ?> to <?php echo e(date("d-M-Y", strtotime($times->drop_time))); ?>)</em></p>
</div>
<div class="col-md-2">
        <form  method="get"  action="<?php echo e(route('user.pc',1)); ?>" enctype="multipart/form-data">
                             <?php echo csrf_field(); ?>
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <input type="hidden" name="bookingID" value="<?php echo e($times->booking_id); ?>">
             <button type="submit" class="btn btn-primary pull-right hvr-sweep-to-right">Add Car</button>
</form>

         </div>
     </div>

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>                        
                          <th>Car model</th>
                     <th>Price</th>
                     <th>Discount</th>
                <th>No of Car</th>
                 <th>No of Day</th>
                <th class="price">Total Costs</th>
                <th>&nbsp;</th>
                        
                        </tr>
                      </thead>

                      <tbody>
                       

<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
                <td>
              <?php echo e($data->model_name); ?>

                </td>
                <td>
               <?php echo e(number_format($data->unit_price,2)); ?>

                </td>
                <td>
 <?php echo e(number_format($data->discount,2)); ?>

                </td>
                <td>
                    <?php echo e($data->no_car); ?>

                </td>
                <td>
                    <?php echo e($data->no_day); ?>

                </td>
                <td class="price"><?php echo e(number_format($data->price,2)); ?> </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                      </tbody>
                    </table>
                  </div>





 <div class="table-responsive">
                    <table class="table">
                    
                      <tbody>
                       


  <tr>
                <td>            
                </td>
                  <td>            
                </td>
                <td>              
                </td>
                <td>

                </td>
                <td>
                    
                </td>
                <td class="price">
                    Sub total
                </td>
                <td> <?php echo e(number_format($totals->total_cost,2)); ?> </td>
                </tr>

  <tr>
      <td>            
                </td>
                <td>            
                </td>
                <td>
              
                </td>
                <td>

                </td>
                <td>
                    
                </td>
                <td>
                   Discount
                </td>
                <td>
                 <?php echo e(number_format($totals->discount,2)); ?></td>
                </tr>

                  <tr>
      <td>            
                </td>
                <td>            
                </td>
                <td>
              
                </td>
                <td>

                </td>
                <td>
                    
                </td>
                <td>
                   VAT Total
                </td>
                 <td>
                   <?php echo e(number_format($totals->VAT,2)); ?> </td>
                </tr>

                      <tr>
      <td>            
                </td>
                <td>            
                </td>
                <td>
              
                </td>
                <td>

                </td>
                <td>
                    
                </td>
                <td>
                   Grand Total
                </td>
                 <td class="price">
                  <?php echo e(number_format($totals->Grant_total,2)); ?> </td>
                </tr>           


                      </tbody>
                    </table>



                     <form  method="post"  action="<?php echo e(route('user.payConfirm',$times->booking_id)); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
              <tr class="total">
                <td class="price"> <input type="text" name="amount" value=" <?php echo e(number_format($totals->Grant_total,2)); ?>"></td>
                <td>Down Payment must not below 30% of total booking costs. <?php echo e($data->total_cost); ?>

                </td>
              </tr>
               <tr>
                  <td> 
                    <br>
                  </td>
               </tr>
              <tr class="total">

                                      <td> 
                                         <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                         <label class="fieldlabels">Payment Gateway:*</label>
                                       
                                          <select id="gateway" name="gateway" required>
<?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                         <option value="<?php echo e($gateway->id); ?>"><?php echo e($gateway->name); ?></option>
                                                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </select>
                                </div>



   <div class="col-md-6 col-sm-12 col-xs-12">
                                         <label class="fieldlabels">Select Currency: *</label>

                                       
                                        <select id="currency" name="currency" required>
                                               <option value="" selected></option>
                                                              <option value="KES">KES</option>
                                                                <option value="USD">USD</option>
                                                                  <option value="EUR">EUR</option>
                                                                    <option value="GBP">GBP</option>
                                                                      <option value="UGX">UGX</option>

                                                                       <option value="TZS" selected>TZS</option>
                                                                        <option value="ZMW">ZMW</option>
                                                                         <option value="RWF">RWF</option>
                                          </select>
                                                            

                                                              </div>
                                                              </div>
                                                            </td>
              </tr>


            </table>
           


        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> <input type="hidden" name="first_name" value="" />
                        </div>
                                   <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="last_name" value="" />
                        </div>


                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="reference" value="" />
                        </div>
                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="type" value="MERCHANT" />
                        </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">   <input type="hidden" name="email" value="" />
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       <input type="hidden" name="desc" value="" />
                        </div>
                         <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       <input type="hidden" name="percent_downpayment" value="" id="percent_downpayment" />
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <input type="hidden" name="desc" value="" />
                        </div>

        <div class="clearfix">
         <button class="btn btn-success pull-right hvr-sweep-to-right" type="submit">Proceed</button>
        </div>
      </form>
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
     <script src="../../assetff/js/jquery/jquery-2.2.4.min.js"></script>

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

<?php echo $__env->make($activeTemplate.'layouts.admin_master_panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/user/pesapal/pesapal.blade.php ENDPATH**/ ?>