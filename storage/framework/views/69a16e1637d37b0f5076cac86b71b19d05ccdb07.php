<?php $__env->startSection('content'); ?>
    <?php
        $banners = getContent('banner.element');

        $brands = \App\Models\Brand::active()->orderBy('name')->get();
        $seats = \App\Models\Seater::active()->orderBy('number')->get();
    ?>
    <!-- Banner Section -->

  <!-- Car Section Begin -->
    <section class="book-section pb-120 bg--section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="car__sidebar">                      
                        <div class="car__filter">
                           
                        
                                      <?php $__currentLoopData = $cartypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <a href="/cartype-page/<?php echo e($cartype->car_body_type); ?>" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit"><?php echo e($cartype->car_body_type); ?>:(<?php echo e($cartypes->where('car_body_type',$cartype)->count()); ?>)</a>

                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                        </div>
                    </div>
                </div>


                <div class="col-lg-9">
                    <div class="car__filter__option">
                        <div class="row">
                            <div><?php echo e($pageTitle); ?> List</div>
                                           </div>
                    </div>
                    <div class="row">

   <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size'])); ?>" alt="">

                                    <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[1], imagePath()['vehicles']['size'])); ?>" alt="">
                                   <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[2], imagePath()['vehicles']['size'])); ?>" alt="">
                                   <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[3], imagePath()['vehicles']['size'])); ?>" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($vehicle->price)); ?><sub>/<?php echo app('translator')->get('day'); ?></sub></div>
                                        <h5><a href="#"><span>Model:</span> <?php echo e(__(@$vehicle->model)); ?></a></h5>
                                      
                                          <ul class="d-flex car-info">
                                            <li class="pr-3"><i class="las la-tachometer-alt"></i><span class="font-mini"><?php echo e(__(@$vehicle->transmission)); ?></span></li>
                                            <li class="pr-3"><i class="las la-gas-pump"></i><span class="font-mini"><?php echo e(__(@$vehicle->fuel_type)); ?></span></li>
                                        </ul>
                                    </div>

<hr style="margin-top:1px;margin-bottom:1px;">




                                    <div class="car__item__price">
<div class="row">
       <div class="col-lg-6 col-md-6">
                                          <div class="car__item__price">
                                        <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit"><?php echo app('translator')->get('More Details'); ?></a>
                                    </div>
                                </div>
                                   <div class="col-lg-6 col-md-6">
                                      <div class="car__item__price">
                                        <a href="<?php echo e(route('vehicle.booking', [$vehicle->id, slug($vehicle->name)])); ?>" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit"><?php echo app('translator')->get('Book Now'); ?></a>
                                    </div>
                                </div>

                               </div>     
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                    </div>
                    <div class="pagination__option">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><span class="arrow_carrot-2right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/carbodytypes/carbodytype.blade.php ENDPATH**/ ?>