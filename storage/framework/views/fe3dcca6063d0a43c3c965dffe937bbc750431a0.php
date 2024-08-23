

<?php $__env->startSection('panel'); ?>

    <div class="row">

        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th><?php echo app('translator')->get('Email'); ?></th>
                                <th><?php echo app('translator')->get('Subscribe At'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $subscribers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td data-label="<?php echo app('translator')->get('Email'); ?>"><?php echo e($subscriber->email); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Subscribed At'); ?>"><?php echo e(showDateTime($subscriber->created_at)); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Action'); ?>">
                                        <a href="javascript:void(0)"
                                           data-id="<?php echo e($subscriber->id); ?>"
                                           data-email="<?php echo e($subscriber->email); ?>"
                                           class="icon-btn btn--danger ml-1 removeModalBtn" data-toggle="tooltip"
                                           data-original-title="<?php echo app('translator')->get('Remove'); ?>">
                                            <i class="las la-trash"></i>
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
                <div class="card-footer py-4">
                    <?php echo e(paginateLinks($subscribers)); ?>

                </div>
            </div><!-- card end -->
        </div>


    </div>





    
    <div id="removeModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('Are you sure to remove?'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.subscriber.remove')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="subscriber">
                        <p><span class="font-weight-bold subscriber-email"></span> <?php echo app('translator')->get('will be removed.'); ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--dark" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <button type="submit" class="btn btn--danger"><?php echo app('translator')->get('Remove'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
    <a href="<?php echo e(route('admin.subscriber.sendEmail')); ?>" class="btn btn-sm btn--primary box--shadow1 text--small" ><i class="fa fa-fw fa-paper-plane"></i><?php echo app('translator')->get('Send Email'); ?></a>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function($){
            "use strict";
            $('.removeModalBtn').on('click', function() {
                $('#removeModal').find('input[name=subscriber]').val($(this).data('id'));
                $('#removeModal').find('.subscriber-email').text($(this).data('email'));
                $('#removeModal').modal('show');
            });
        })(jQuery);

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/subscriber/index.blade.php ENDPATH**/ ?>