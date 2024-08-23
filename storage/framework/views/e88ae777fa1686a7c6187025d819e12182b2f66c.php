

<?php $__env->startSection('panel'); ?>

    <div class="row mb-none-30">


        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two custom-data-table">
                            <thead>
                            <tr>
                                <th><?php echo app('translator')->get('Name'); ?></th>
                                <th><?php echo app('translator')->get('Status'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $sms_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td data-label="<?php echo app('translator')->get('Name'); ?>">
                                        <?php echo e(__($template->name)); ?>

                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Status'); ?>">
                                        <?php if($template->sms_status == 1): ?>
                                            <span class="badge  badge--success"><?php echo app('translator')->get('Active'); ?></span>
                                        <?php else: ?>
                                            <span class="badge  badge--warning"><?php echo app('translator')->get('Disabled'); ?></span>
                                        <?php endif; ?>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Action'); ?>">
                                        <a href="<?php echo e(route('admin.sms.template.edit', $template->id)); ?>"
                                           class="icon-btn ml-1 editGatewayBtn" data-toggle="tooltip"
                                           data-original-title="<?php echo app('translator')->get('Edit'); ?>">
                                            <i class="la la-pencil"></i>
                                        </a>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td class="text-muted text-center" colspan="100%"><?php echo e(__($emptyMessage)); ?></td>
                                </tr>
                            <?php endif; ?>

                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/sms_template/index.blade.php ENDPATH**/ ?>