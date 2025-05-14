<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="<?php echo e(route('admin.plans.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name"><?php echo app('translator')->get('Name'); ?></label>
                                    <input type="text" id="name" name="name" class="form-control"
                                           value="<?php echo e(old('name')); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="price"><?php echo app('translator')->get('Price Per Ride'); ?></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="price" name="price"
                                               value="<?php echo e(old('price')); ?>" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><?php echo e($general->cur_text); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="days"><?php echo app('translator')->get('Number Of Days'); ?></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="days" name="days"
                                               value="<?php echo e(old('days')); ?>" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><?php echo app('translator')->get('Days'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card border--dark">
                                    <h5 class="card-header bg--dark"><?php echo app('translator')->get('Included'); ?>
                                        <button type="button"
                                                class="btn btn-sm btn-outline-light float-right addNewIncluded">
                                            <i class="la la-fw la-plus"></i><?php echo app('translator')->get('Add New'); ?>
                                        </button>
                                    </h5>

                                    <div class="card-body">
                                        <div class="row addedField">


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-3">
                                <div class="card border--dark">
                                    <h5 class="card-header bg--dark"><?php echo app('translator')->get('Excluded'); ?>
                                        <button type="button"
                                                class="btn btn-sm btn-outline-light float-right addNewExcluded">
                                            <i class="la la-fw la-plus"></i><?php echo app('translator')->get('Add New'); ?>
                                        </button>
                                    </h5>

                                    <div class="card-body">
                                        <div class="row addedFieldExcluded">


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn--primary w-100"><?php echo app('translator')->get('Create'); ?></button>
                    </div>
                </form>
            </div><!-- card end -->
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('breadcrumb-plugins'); ?>
    <a href="<?php echo e(route('admin.plans.index')); ?>" class="btn btn-sm btn--primary box--shadow1 text-white text--small"><i
            class="fa fa-fw fa-backward"></i><?php echo app('translator')->get('Go Back'); ?></a>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function ($) {
            "use strict";

            function scrol() {
                var bottom = $(document).height() - $(window).height();
                $('html, body').animate({
                    scrollTop: bottom
                }, 200);
            }

            //----- Add Included fields-------//
            $('.addNewIncluded').on('click', function () {
                var html = `
                <div class="col-md-12 other-info-data">
                    <div class="form-group">
                        <div class="input-group mb-md-0 mb-4">
                            <div class="col-md-11">
                                <input name="included[]" class="form-control" type="text" required placeholder="<?php echo app('translator')->get('Included'); ?>">
                            </div>
                            <div class="col-md-1 mt-md-0 mt-2 text-right">
                                <span class="input-group-btn">
                                    <button class="btn btn--danger btn-lg removeInfoBtn w-100" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>`;

                $('.addedField').append(html);
            });

            //----- Add Excluded fields-------//
            $('.addNewExcluded').on('click', function () {
                var html = `
                <div class="col-md-12 other-info-data">
                    <div class="form-group">
                        <div class="input-group mb-md-0 mb-4">
                            <div class="col-md-11">
                                <input name="excluded[]" class="form-control" type="text" required placeholder="<?php echo app('translator')->get('Excluded'); ?>">
                            </div>
                            <div class="col-md-1 mt-md-0 mt-2 text-right">
                                <span class="input-group-btn">
                                    <button class="btn btn--danger btn-lg removeInfoBtn w-100" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>`;

                $('.addedFieldExcluded').append(html);
            });

            $(document).on('click', '.removeInfoBtn', function () {
                $(this).closest('.other-info-data').remove();
            });

        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/admin/plan/add.blade.php ENDPATH**/ ?>