<?php $__env->startSection('content'); ?>
    <div class="pb-60 pt-60">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="deposit-preview bg--body">
                    <div class="deposit-thumb">
                        <img src="<?php echo e($data->gatewayCurrency()->methodImage()); ?>" alt="payment">
                    </div>
                    <div class="deposit-content">
                        <ul>
                            <li>
                                <?php echo app('translator')->get('Amount'); ?>:
                                <span class="text--success"><?php echo e(showAmount($data->amount)); ?> <?php echo e(__($general->cur_text)); ?></span>
                            </li>
                            <li>
                                <?php echo app('translator')->get('Charge'); ?>:
                                <span class="text--danger"><?php echo e(showAmount($data->charge)); ?> <?php echo e(__($general->cur_text)); ?></span>
                            </li>
                            <li>
                                <?php echo app('translator')->get('Payable'); ?>: <span class="text--warning"> <?php echo e(showAmount($data->amount + $data->charge)); ?> <?php echo e(__($general->cur_text)); ?></span>
                            </li>
                            <li>
                                <?php echo app('translator')->get('In'); ?> <?php echo e($data->baseCurrency()); ?>:
                                <span class="text--primary"><?php echo e(showAmount($data->final_amo)); ?></span>
                            </li>

                            <?php if($data->gateway->crypto==1): ?>
                                <li>
                                    <?php echo app('translator')->get('Conversion with'); ?>
                                    <b> <?php echo e(__($data->method_currency)); ?></b> <?php echo app('translator')->get('and final value will Show on next step'); ?>
                                </li>
                            <?php endif; ?>
                        </ul>

                        <div class="text-center w-100">
                            <?php if( 1000 >$data->method_code): ?>
                                <a href="<?php echo e(route('user.deposit.confirm')); ?>" class="cmn--btn"><?php echo app('translator')->get('Pay Now not'); ?></a>
                            <?php else: ?>
                                <a href="<?php echo e(route('user.deposit.manual.confirm')); ?>" class="cmn--btn"><?php echo app('translator')->get('Pay Now-Manual'); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/user/payment/preview.blade.php ENDPATH**/ ?>