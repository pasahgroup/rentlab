<?php $__env->startSection('content'); ?>
    <div class="search-section pt-120 pb-120 bg--section position-relative overflow-hidden">
        <div class="shape right-side"><?php echo app('translator')->get('Rent'); ?></div>
        <div class="shape"><?php echo app('translator')->get('Vehicles'); ?></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="category-sidebar">
                        <div class="widget d-lg-none border--dashed">
                            <div class="d-flex justify-content-between">
                                <h5 class="title border-0 pb-0 mb-0"><?php echo app('translator')->get('Filter Vehicles'); ?></h5>
                                <div class="close-sidebar"><i class="las la-times"></i></div>
                            </div>
                        </div>
                        <div class="widget border--dashed">
                            <h5 class="title">
                                <label for="search"><?php echo app('translator')->get('Search Name'); ?></label>
                            </h5>
                            <div class="widget-body">
                                <form action="<?php echo e(route('vehicle.search')); ?>" method="get">
                                    <div class="input-group">
                                        <input type="text" name="name" value="<?php echo e(@request()->name); ?>" class="form-control form--control" placeholder="<?php echo app('translator')->get('Vehicle Name'); ?>" id="search">
                                        <button class="input-group-text cmn--btn" type="submit"><i class="las la-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget border--dashed">
                            <h5 class="title"><?php echo app('translator')->get('Filter by Price'); ?></h5>
                            <div class="widget-body">
                                <form action="<?php echo e(route('vehicle.search')); ?>" method="get" class="priceForm">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <label for="srt-date" class="form--label">
                                                <i class="las la-dollar-sign"></i> <?php echo app('translator')->get('Min Price'); ?>
                                            </label>
                                            <input type="text" value="<?php echo e(@request()->min_price); ?>" class="form-control form--control min_price" name="min_price" placeholder="<?php echo app('translator')->get('Min Price'); ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="stat-dae" class="form--label">
                                                <i class="las la-dollar-sign"></i> <?php echo app('translator')->get('Max Price'); ?>
                                            </label>
                                            <input type="text" value="<?php echo e(@request()->max_price); ?>" class="form-control form--control max_price" name="max_price" placeholder="<?php echo app('translator')->get('Max Price'); ?>">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget border--dashed">
                            <h5 class="title"><?php echo app('translator')->get('Filter by Brand'); ?></h5>
                            <div class="widget-body">
                                <ul class="category-link">

                                    <?php $__empty_1 = true; $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li>
                                            <a href="<?php echo e(route('vehicle.brand', [$brand->id, slug($brand->name)])); ?>"><span><?php echo e(__(@$brand->name)); ?></span><span>(<?php echo e(@$brand->vehicles_count); ?>)</span></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>

                                </ul>
                            </div>
                        </div>
                        <div class="widget border--dashed">
                            <h5 class="title"><?php echo app('translator')->get('Filter by Vehicle Seating'); ?></h5>
                            <div class="widget-body">
                                <ul class="category-link">

                                    <?php $__empty_1 = true; $__currentLoopData = $seats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li>
                                            <a href="<?php echo e(route('vehicle.seater', $seat->id)); ?>"><span><?php echo e(__(@$seat->number)); ?> <?php echo app('translator')->get('Seater'); ?></span><span>(<?php echo e(@$seat->vehicles_count); ?>)</span></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>

                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8">
                    <div class="filter-in d-lg-none">
                        <i class="las la-filter"></i>
                    </div>
                    <div class="book__wrapper bg--body border--dashed mb-4">
                        <form class="book--form row gx-3 gy-4 g-md-4" action="<?php echo e(route('vehicle.search')); ?>" method="get">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label for="car-type" class="form--label">
                                        <i class="las la-car-side"></i> <?php echo app('translator')->get('Select Model'); ?>
                                    </label>
                                    <select name="brand" id="car-type" class="form-control form--control">
                                        <option value=""><?php echo app('translator')->get('Select Option'); ?></option>
                                        <?php $__empty_1 = true; $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($brand->id); ?>"><?php echo e(__(@$brand->name)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label for="pick-point" class="form--label">
                                        <i class="las la-chair"></i> <?php echo app('translator')->get('Number Of Seats'); ?>
                                    </label>
                                    <select name="seats" id="pick-point" class="form-control form--control">
                                        <option value=""><?php echo app('translator')->get('Select Option'); ?></option>
                                        <?php $__empty_1 = true; $__currentLoopData = $seats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($seat->id); ?>"><?php echo e(__(@$seat->number)); ?> <?php echo e(__('Seater')); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form--label d-none d-sm-block">&nbsp;</label>
                                    <button class="cmn--btn form--control bg--base w-100 justify-content-center" type="submit"><?php echo app('translator')->get('Search'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row g-4">

                        <?php $__empty_1 = true; $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-md-6">
                                <div class="rent__item">
                                    <div class="rent__thumb">
                                        <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>">
                                            <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size'])); ?>" class="first-look" alt="rent-vehicle">
                                            <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[1], imagePath()['vehicles']['size'])); ?>" class="hover-look" alt="rent-vehicle">
                                        </a>
                                    </div>
                                    <div class="rent__content">
                                        <h6 class="rent__title">
                                            <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>"><?php echo e(__(@$vehicle->name)); ?></a>
                                        </h6>
                                        <div class="price-area">
                                            <h5 class="item"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($vehicle->price)); ?> <sub>/<?php echo app('translator')->get('day'); ?></sub></h5>
                                        </div>
                                        <ul class="d-flex car-info">
                                            <li class="pr-3"><i class="las la-car"></i><span class="font-mini"><?php echo e(__(@$vehicle->model)); ?></span></li>
                                            <li class="pr-3"><i class="las la-tachometer-alt"></i><span class="font-mini"><?php echo e(__(@$vehicle->transmission)); ?></span></li>
                                            <li class="pr-3"><i class="las la-gas-pump"></i><span class="font-mini"><?php echo e(__(@$vehicle->fuel_type)); ?></span></li>
                                        </ul>
                                        <div class="rent-btn mt-4 text-center">
                                            <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="cmn--btn w-100 justify-content-center">
                                                <?php if($vehicle->booked()): ?>
                                                    <?php echo app('translator')->get('Booked'); ?>
                                                <?php else: ?>
                                                    <?php echo app('translator')->get('Book Now'); ?>
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function ($) {
            "use strict";

            $('.min_price').keypress(function (e) {
                if (e.which == 13) {
                    $('.priceForm').submit();
                    return false;
                }
            });

            $('.max_price').keypress(function (e) {
                if (e.which == 13) {
                    $('.priceForm').submit();
                    return false;
                }
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/vehicles/index.blade.php ENDPATH**/ ?>