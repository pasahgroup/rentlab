<?php
    $rent_content = getContent('vehicle_rent.content', true);
    $vehicles = \App\Models\Vehicle::active()->latest()->take(10)->with('seater')->get();
?>
<!-- Rental Fleet Section -->
<section class="rental-section pb-120 pt-120 bg--section position-relative overflow-hidden">
    <div class="shape right-side"><?php echo e(__(@$rent_content->data_values->stylish_text)); ?></div>
    <div class="container position-relative">
        <div class="section__header section__header__center">
            <span class="section__category"><?php echo e(__(@$rent_content->data_values->sub_heading)); ?></span>
            <h2 class="section__title"><?php echo e(__(@$rent_content->data_values->heading)); ?></h2>
        </div>
        <div class="sync1 owl-theme owl-carousel">
           
            <?php $__empty_1 = true; $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="car__rental">
                    <div class="car__rental-thumb">
                        <img src="<?php echo e(getImage(imagePath()['vehicles']['path'].'/'.$vehicle->images[0], imagePath()['vehicles']['size'])); ?>" alt="rental">
                    </div>
                    <div class="car__rental-content">
                        <div class="car__rental-content-header">
                            <h2 class="price"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($vehicle->price)); ?> <span class="sub">/ <?php echo app('translator')->get('Day'); ?></span></h2>
                        </div>
                        <div class="car__rental-content-body">
                            <ul class="specification">
                                <li>
                                    <i class="las la-car"></i><?php echo app('translator')->get('Model'); ?>: <?php echo e(__(@$vehicle->model)); ?>

                                </li>
                                <li>
                                    <i class="las la-truck-pickup"></i><?php echo app('translator')->get('Doors'); ?>: <?php echo e(__(@$vehicle->doors)); ?>

                                </li>
                                <li>
                                    <i class="las la-car-alt"></i><?php echo app('translator')->get('Seats'); ?>: <?php echo e(__(@$vehicle->seater->number)); ?>

                                </li>
                                <li>
                                    <i class="las la-gas-pump"></i><?php echo app('translator')->get('Transmission'); ?>: <?php echo e(__(@$vehicle->transmission)); ?>

                                </li>
                            </ul>
                            <div class="btn__grp">
                                <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="cmn--btn"><?php echo app('translator')->get('More Details'); ?></a>
                                 <a href="<?php echo e(route('vehicle.booking', [$vehicle->id, slug($vehicle->name)])); ?>" class="cmn--btn"><?php echo app('translator')->get('Book Now'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
        </div>
        <div class="sync2 owl-theme owl-carousel mt-5">
            <?php $__empty_1 = true; $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="rental__thumbnails">
                    <img src="<?php echo e(getImage(imagePath()['vehicles']['path'].'/'. @$item->images[0], imagePath()['vehicles']['size'])); ?>" alt="rental">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Rental Fleet Section -->
<?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/sections/vehicle_rent.blade.php ENDPATH**/ ?>