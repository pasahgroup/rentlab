<?php $__env->startSection('content'); ?>
    <div class="pb-60 pt-60">
        <div class="table-responsive">
            <table class="table cmn--table">
                <thead>
                <tr>
                    <th><?php echo app('translator')->get('Transaction ID'); ?></th>
                    <th><?php echo app('translator')->get('Gateway'); ?></th>
                    <th><?php echo app('translator')->get('Vehicle'); ?></th>
                    <th><?php echo app('translator')->get('Plan'); ?></th>
                    <th><?php echo app('translator')->get('Amount'); ?></th>
                    <th><?php echo app('translator')->get('Status'); ?></th>
                    <th><?php echo app('translator')->get('Time'); ?></th>
                    <th> <?php echo app('translator')->get('MORE'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php if(count($logs) >0): ?>
               
                    <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td data-label="#<?php echo app('translator')->get('Trx'); ?>">
                                <div><?php echo e($data->trx); ?></div>
                            </td>
                            <td data-label="<?php echo app('translator')->get('Gateway'); ?>">
                                <div><?php echo e(__(@$data->gateway->name)); ?></div>
                            </td>
                            <td data-label="<?php echo app('translator')->get('Vehicle'); ?>">
                                <div><?php echo e(__(@$data->rent->vehicle->name) ?? '-'); ?></div>
                            </td>
                            <td data-label="<?php echo app('translator')->get('Plan'); ?>">
                                <div><?php echo e(__(@$data->planlog->plan->name) ?? '-'); ?></div>
                            </td>
                            <td data-label="<?php echo app('translator')->get('Amount'); ?>">
                                <div><strong><?php echo e(showAmount($data->amount)); ?> <?php echo e(__($general->cur_text)); ?></strong></div>
                            </td>
                            <td>
                                <div>
                                        
                                    <?php if($data->status == 1): ?>
                                        <span class="badge badge--success"><?php echo app('translator')->get('Complete'); ?></span>
                                    <?php elseif($data->status == 2): ?>
                                        <span class="badge badge--warning"><?php echo app('translator')->get('Pending'); ?></span>
                                    <?php elseif($data->status == 3): ?>
                                        <span class="badge badge--danger"><?php echo app('translator')->get('Cancel'); ?></span>
                                    <?php endif; ?>

                                    <?php if($data->admin_feedback != null): ?>
                                        <button class="btn--info btn-rounded badge detailBtn" data-admin_feedback="<?php echo e($data->admin_feedback); ?>"><i class="la la-info"></i></button>
                                    <?php endif; ?>

                                </div>
                            </td>
                            <td data-label="<?php echo app('translator')->get('Time'); ?>">
                                <div>
                                    <i class="la la-calendar"></i> <?php echo e(showDateTime($data->created_at)); ?>

                                </div>
                            </td>

                            <?php
                                $details = ($data->detail != null) ? json_encode($data->detail) : null;
                            ?>

                            <td data-label="<?php echo app('translator')->get('Details'); ?>">
                                <a href="javascript:void(0)" class="btn btn--primary btn--sm approveBtn"
                                   data-info="<?php echo e($details); ?>"
                                   data-id="<?php echo e($data->id); ?>"
                                   data-amount="<?php echo e(showAmount($data->amount)); ?> <?php echo e(__($general->cur_text)); ?>"
                                   data-charge="<?php echo e(showAmount($data->charge)); ?> <?php echo e(__($general->cur_text)); ?>"
                                   data-after_charge="<?php echo e(showAmount($data->amount + $data->charge)); ?> <?php echo e(__($general->cur_text)); ?>"
                                   data-rate="<?php echo e(showAmount($data->rate)); ?> <?php echo e(__($data->method_currency)); ?>"
                                   data-payable="<?php echo e(showAmount($data->final_amo)); ?> <?php echo e(__($data->method_currency)); ?>">
                                    <i class="la la-desktop"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="100%"><?php echo e(__($emptyMessage)); ?></td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php echo e($logs->links()); ?>

    </div>

    
    <div id="approveModal" class="modal fade custom--modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('Details'); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent"><?php echo app('translator')->get('Amount'); ?> : <span class="withdraw-amount "></span></li>
                        <li class="list-group-item bg-transparent"><?php echo app('translator')->get('Charge'); ?> : <span class="withdraw-charge "></span></li>
                        <li class="list-group-item bg-transparent"><?php echo app('translator')->get('After Charge'); ?> : <span class="withdraw-after_charge"></span></li>
                        <li class="list-group-item bg-transparent"><?php echo app('translator')->get('Conversion Rate'); ?> : <span class="withdraw-rate"></span></li>
                        <li class="list-group-item bg-transparent"><?php echo app('translator')->get('Payable Amount'); ?> : <span class="withdraw-payable"></span></li>
                    </ul>
                    <ul class="list-group withdraw-detail mt-1">
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                </div>
            </div>
        </div>
    </div>

    
    <div id="detailModal" class="modal fade custom--modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('Details'); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <div class="withdraw-detail"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
    <script>
        (function ($) {
            "use strict";
            $('.approveBtn').on('click', function() {
                var modal = $('#approveModal');
                modal.find('.withdraw-amount').text($(this).data('amount'));
                modal.find('.withdraw-charge').text($(this).data('charge'));
                modal.find('.withdraw-after_charge').text($(this).data('after_charge'));
                modal.find('.withdraw-rate').text($(this).data('rate'));
                modal.find('.withdraw-payable').text($(this).data('payable'));
                var list = [];
                var details =  Object.entries($(this).data('info'));

                var ImgPath = "<?php echo e(asset(imagePath()['verify']['deposit']['path'])); ?>/";
                var singleInfo = '';
                for (var i = 0; i < details.length; i++) {
                    if (details[i][1].type == 'file') {
                        singleInfo += `<li class="list-group-item">
                                            <span class="font-weight-bold "> ${details[i][0].replaceAll('_', " ")} </span> : <img src="${ImgPath}/${details[i][1].field_name}" alt="<?php echo app('translator')->get('Image'); ?>" class="w-100">
                                        </li>`;
                    }else{
                        singleInfo += `<li class="list-group-item">
                                            <span class="font-weight-bold "> ${details[i][0].replaceAll('_', " ")} </span> : <span class="font-weight-bold ml-3">${details[i][1].field_name}</span>
                                        </li>`;
                    }
                }

                if (singleInfo)
                {
                    modal.find('.withdraw-detail').html(`<br><strong class="my-3"><?php echo app('translator')->get('Payment Information'); ?></strong>  ${singleInfo}`);
                }else{
                    modal.find('.withdraw-detail').html(`${singleInfo}`);
                }
                modal.modal('show');
            });

            $('.detailBtn').on('click', function() {
                var modal = $('#detailModal');
                var feedback = $(this).data('admin_feedback');
                modal.find('.withdraw-detail').html(`<p> ${feedback} </p>`);
                modal.modal('show');
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make($activeTemplate.'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/user/deposit_history.blade.php ENDPATH**/ ?>