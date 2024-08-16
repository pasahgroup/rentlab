<style type="text/css">
    

    css .basic-button { 
background-color: #4CAF50; /* Green */ 
border: none;
color: white; 
padding: 15px 32px; 
text-align: center; 
text-decoration: none; 
display: inline-block; 
font-size: 16px; 
margin: 4px 2px; 
cursor: pointer; 
}
</style>

<?php $__env->startSection('content'); ?>
    <div class="pb-60 pt-60">
        <div class="row g-4">

            <?php $__currentLoopData = $gatewayCurrency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card custom--card deposit--card">
                        <div class="card-header">
                            <h6 class="card-title"><?php echo e(__($data->name)); ?></h6>
                        </div>
                        <div class="card-body">
                            <div class="deposit__thumb">
                                <img src="<?php echo e($data->methodImage()); ?>" alt="<?php echo e(__($data->name)); ?>">
                            </div>
                        </div>

                        <div class="card-footer">
                              <div class="col-xl-12 col-lg-12 col-sm-12">
                         <!--    <button href="javascript:void(0)" data-id="<?php echo e($data->id); ?>"
                               data-name="<?php echo e($data->name); ?>"
                               data-currency="<?php echo e($data->currency); ?>"
                               data-method_code="<?php echo e($data->method_code); ?>"
                               data-min_amount="<?php echo e(showAmount($data->min_amount)); ?>"
                               data-max_amount="<?php echo e(showAmount($data->max_amount)); ?>"
                               data-base_symbol="<?php echo e($data->baseSymbol()); ?>"
                                
                               data-fix_charge="<?php echo e(showAmount($data->fixed_charge)); ?>"
                               data-percent_charge="<?php echo e(showAmount($data->percent_charge)); ?>" class="btn--sm d-block cmn--btn text-center custom-success deposit" data-bs-toggle="modal" data-bs-target="#depositModal" name="full_payment" id="full_payment" value="full_payment">
                                <?php echo app('translator')->get('Full Payment'); ?></button> -->


                              <a href="javascript:void(0)" data-id="<?php echo e($data->id); ?>"
                               data-name="<?php echo e($data->name); ?>"
                               data-currency="<?php echo e($data->currency); ?>"
                               data-method_code="<?php echo e($data->method_code); ?>"
                               data-min_amount="<?php echo e(showAmount($data->min_amount)); ?>"
                               data-max_amount="<?php echo e(showAmount($data->max_amount)); ?>"
                               data-base_symbol="<?php echo e($data->baseSymbol()); ?>"
                               data-fix_charge="<?php echo e(showAmount($data->fixed_charge)); ?>"
                               data-percent_charge="<?php echo e(showAmount($data->percent_charge)); ?>" class="btn--sm d-block cmn--btn text-center custom-success deposit basic-button" data-bs-toggle="modal" data-bs-target="#depositModal"  name="down_payment" id="down_payment" value="down_payment">
                                <?php echo app('translator')->get('Pay Now'); ?></a>                         
                                   </div>

                        </div>                     
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>


    <div class="modal fade custom--modal" id="depositModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title method-name" id="depositModalLabel"></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <form action="<?php echo e(route('user.deposit.insert')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <p class="text-danger depositLimit"></p>
                        <p class="text-danger depositCharge"></p>
                        <div class="form-group">
                            <input type="hidden" name="currency" class="edit-currency">
                            <input type="hidden" name="method_code" class="edit-method-code">
                        </div>
                         <div class="form-group">
                      <label> Down payment Amount: </label>
                            <input type="text" name="down_payment" class="down_payment" id="down_payment" value="<?php echo e($total_cost); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <div class="prevent-double-click">
                            <button type="submit" class="btn btn--primary confirm-btn"><?php echo app('translator')->get('Confirm'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startPush('script'); ?>
    <script>
        (function ($) {
            "use strict";
            $('.deposit').on('click', function () {
                var name = $(this).data('name');
                var currency = $(this).data('currency');
                var method_code = $(this).data('method_code');
                var minAmount = $(this).data('min_amount');
                var maxAmount = $(this).data('max_amount');
                var baseSymbol = "<?php echo e($general->cur_text); ?>";
                var fixCharge = $(this).data('fix_charge');
                var percentCharge = $(this).data('percent_charge');



                var depositLimit = `<?php echo app('translator')->get('Payment Limit'); ?>: ${minAmount} - ${maxAmount}  ${baseSymbol}`;
                $('.depositLimit').text(depositLimit);
                var depositCharge = `<?php echo app('translator')->get('Charge'); ?>: ${fixCharge} ${baseSymbol}  ${(0 < percentCharge) ? ' + ' +percentCharge + ' % ' : ''}`;
                $('.depositCharge').text(depositCharge);
                $('.method-name').text(`<?php echo app('translator')->get('Payment By '); ?> ${name}`);
                $('.currency-addon').text(baseSymbol);
                $('.edit-currency').val(currency);
                $('.edit-method-code').val(method_code);
                // $('.down_payment').val(method_code);

                 //document.getElementById('down_payment').value =333;
                // if(radios[i].value === 'Maintenance '){
                //   $('.down_payment').val('');
                // }
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('style'); ?>
<style type="text/css">

</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/user/payment/deposit.blade.php ENDPATH**/ ?>