

<?php $__env->startSection('panel'); ?>
    <div class="row">

        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">

                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th><?php echo app('translator')->get('User'); ?></th>
                                <th><?php echo app('translator')->get('Login at'); ?></th>
                                <th><?php echo app('translator')->get('IP'); ?></th>
                                <th><?php echo app('translator')->get('Location'); ?></th>
                                <th><?php echo app('translator')->get('Browser | OS'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $login_logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>

                                <td data-label="<?php echo app('translator')->get('User'); ?>">
                                    <span class="font-weight-bold"><?php echo e(@$log->user->fullname); ?></span>
                                    <br>
                                    <span class="small"> <a href="<?php echo e(route('admin.users.detail', $log->user_id)); ?>"><span>@</span><?php echo e(@$log->user->username); ?></a> </span>
                                </td>


                                    <td data-label="<?php echo app('translator')->get('Login at'); ?>">
                                        <?php echo e(showDateTime($log->created_at)); ?> <br> <?php echo e(diffForHumans($log->created_at)); ?>

                                    </td>

                            

                                    <td data-label="<?php echo app('translator')->get('IP'); ?>">
                                        <span class="font-weight-bold">
                                        <a href="<?php echo e(route('admin.report.login.ipHistory',[$log->user_ip])); ?>"><?php echo e($log->user_ip); ?></a>
                                        </span>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Location'); ?>"><?php echo e(__($log->city)); ?> <br> <?php echo e(__($log->country)); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Browser | OS'); ?>">
                                        <?php echo e(__($log->browser)); ?> <br> <?php echo e(__($log->os)); ?>

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
                    <?php echo e(paginateLinks($login_logs)); ?>

                </div>
            </div><!-- card end -->
        </div>


    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startPush('breadcrumb-plugins'); ?>
    <?php if(request()->routeIs('admin.report.login.history')): ?>
    <form action="<?php echo e(route('admin.report.login.history')); ?>" method="GET" class="form-inline float-sm-right bg--white">
        <div class="input-group has_append">
            <input type="text" name="search" class="form-control" placeholder="<?php echo app('translator')->get('Search Username'); ?>" value="<?php echo e($search ?? ''); ?>">
            <div class="input-group-append">
                <button class="btn btn--primary" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
    <?php endif; ?>
<?php $__env->stopPush(); ?>
<?php if(request()->routeIs('admin.report.login.ipHistory')): ?>
    <?php $__env->startPush('breadcrumb-plugins'); ?>
    <a href="https://www.ip2location.com/<?php echo e($ip); ?>" target="_blank" class="btn btn--primary"><?php echo app('translator')->get('Lookup IP'); ?> <?php echo e($ip); ?></a>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/reports/logins.blade.php ENDPATH**/ ?>