
<?php $__env->startSection('panel'); ?>
    <div class="row mb-none-30">
        <div class="col-lg-12">
            <div class="card">
                <form action="" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label><?php echo app('translator')->get('Policy Link'); ?></label>
                              <input type="text" name="link" class="form-control" value="<?php echo e(@$cookie->data_values->link); ?>" placeholder="<?php echo app('translator')->get('Policy Link'); ?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label><?php echo app('translator')->get('Status'); ?></label>
                            <input type="checkbox" data-width="100%" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="<?php echo app('translator')->get('Enable'); ?>" data-off="<?php echo app('translator')->get('Disabled'); ?>" <?php if(@$cookie->data_values->status): ?> checked <?php endif; ?> name="status">
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                          <label><?php echo app('translator')->get('Description'); ?></label>
                            <textarea class="form-control nicEdit" rows="10" name="description" placeholder="<?php echo app('translator')->get('Description'); ?>"><?php echo @$cookie->data_values->description ?></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn--primary btn-block"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/setting/cookie.blade.php ENDPATH**/ ?>