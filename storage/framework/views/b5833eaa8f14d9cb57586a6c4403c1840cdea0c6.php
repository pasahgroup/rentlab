<?php $__env->startSection('content'); ?>
 
     <div class="pb-60 pt-60">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="deposit-preview bg--body">
                    <div class="deposit-thumb">
                        <img src="<?php echo e($data->gatewayCurrency()->methodImage()); ?>" alt="payment">
                    </div>
                    <div class="deposit-content">

                        
  <form action="<?php echo e(route('user.deposit.manual.update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                        <ul>
                            <li>
                                <?php echo app('translator')->get('Costs'); ?>:
                                <span class="text--success"><?php echo e(showAmount($data->amount)); ?> <?php echo e(__($general->cur_text)); ?></span>
                            </li>
                            <li>
                                <?php echo app('translator')->get('Charge'); ?>:
                                <span class="text--danger"><?php echo e(showAmount($data->charge)); ?> <?php echo e(__($general->cur_text)); ?></span>
                            </li>
                            <li>
                                <?php echo app('translator')->get('Total payable amount'); ?>: <span class="text--warning"> <?php echo e(showAmount($data->amount + $data->charge)); ?> <?php echo e(__($general->cur_text)); ?></span>
                            </li>
                            <li>
                                <?php echo app('translator')->get('Amount to paid:'); ?> <?php echo e($data->baseCurrency()); ?>:
                                <span class="text--primary"><?php echo e(showAmount($data->paid)); ?></span>
                            </li>

                            <?php if($data->gateway->crypto==1): ?>
                                <li>
                                    <?php echo app('translator')->get('Conversion with'); ?>
                                    <b> <?php echo e(__($data->method_currency)); ?></b> <?php echo app('translator')->get('and final value will Show on next step'); ?>
                                </li>
                            <?php endif; ?>
                        </ul>


                            <div class="row">
                              

                                <?php if($method->gateway_parameter): ?>
                                    <?php $__currentLoopData = json_decode($method->gateway_parameter); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php if($v->type == "text"): ?>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><strong><?php echo e(__(inputTitle($v->field_level))); ?> <?php if($v->validation == 'required'): ?> <span class="text-danger">*</span>  <?php endif; ?></strong></label>
                                                    <input type="text" class="form-control form--control" name="<?php echo e($k); ?>" value="<?php echo e(old($k)); ?>" placeholder="<?php echo e(__($v->field_level)); ?>">
                                                </div>
                                            </div>
                                        <?php elseif($v->type == "textarea"): ?>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><strong><?php echo e(__(inputTitle($v->field_level))); ?> <?php if($v->validation == 'required'): ?> <span class="text-danger">*</span>  <?php endif; ?></strong></label>
                                                        <textarea name="<?php echo e($k); ?>"  class="form-control form--control"  placeholder="<?php echo e(__($v->field_level)); ?>" rows="3"><?php echo e(old($k)); ?></textarea>
                                                    </div>
                                                </div>
                                        <?php elseif($v->type == "file"): ?>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><strong><?php echo e(__($v->field_level)); ?> <?php if($v->validation == 'required'): ?> <span class="text-danger">*</span>  <?php endif; ?></strong></label>
                                                    <input type="file" name="<?php echo e($k); ?>" class="form-control form--control" accept="image/*" >
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <div class="col-md-12">
                                    <div class="form-group mt-3">
                                        <button type="submit" class="cmn--btn"><?php echo app('translator')->get('Confirm payment'); ?></button>                               
                                    </div>
                                </div>

                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
<style>
    .withdraw-thumbnail{
        max-width: 220px;
        max-height: 220px
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script-lib'); ?>
<script src="<?php echo e(asset($activeTemplateTrue.'/js/bootstrap-fileinput.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('style-lib'); ?>
<link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'/css/bootstrap-fileinput.css')); ?>">
<?php $__env->stopPush(); ?>

<script>
function myFunction() {
  let amount_paid = prompt("Please enter your name", "Harry Potter");
  if (amount_paid != null) {
    // document.getElementById("demo").innerHTML =
    // "Hello " + person + "! How are you today?";

     document.getElementById('demo').value =amount_paid;
  }
}
</script>


<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/user/manual_payment/manual_confirm.blade.php ENDPATH**/ ?>