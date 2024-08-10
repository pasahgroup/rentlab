<?php
    $rent_content = getContent('vehicle_rent.content', true);
    $vehicles = \App\Models\Vehicle::active()->latest()->take(10)->with('seater')->get();
?>
<!-- Rental Fleet Section -->
  <!-- Car Section Begin -->
    <section class="book-section pb-120 bg--section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="car__sidebar">
                       
                        <div class="car__filter">
                            <h5> <?php echo app('translator')->get('Book a Car'); ?></h5>
                           <form class="book--form row gx-3 gy-4 g-md-4" action="<?php echo e(route('vehicle.search')); ?>" method="get">                       



 <div class="form-group">
                            <label for="car-type" class="form--label">
                                <i class="las la-car-side"></i> <?php echo app('translator')->get('Select Brand'); ?>
                            </label>
                            <select name="brand" id="car-type" class="form-control form--control">
                                <option value=""><?php echo app('translator')->get('Select Option'); ?></option>
                                <?php $__empty_1 = true; $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <option value="<?php echo e($brand->id); ?>"><?php echo e(__(@$brand->name)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </select>
                        </div>


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
                                <div class="form-group">
                            <label for="drop-point" class="form--label">
                                <i class="las la-street-view"></i> <?php echo app('translator')->get('Model'); ?>
                            </label>
                            <input type="text" name="model" class="form-control form--control"
                                   placeholder="<?php echo app('translator')->get('Sedan, SUV ...'); ?>">
                        </div>
                             <div class="form-group">
                            <label for="start-datse" class="form--label">
                                <i class="las la-dollar-sign"></i> <?php echo app('translator')->get('Min Price'); ?>
                            </label>
                            <input type="text" placeholder="<?php echo app('translator')->get('Min Price'); ?>" name="min_price" id="start-datse"
                                   autocomplete="off" class="form-control form--control">
                        </div>
                       
                        <div class="form-group">
                            <label for="end-date" class="form--label">
                                <i class="las la-dollar-sign"></i> <?php echo app('translator')->get('Max Price'); ?>
                            </label>
                            <input type="text" placeholder="<?php echo app('translator')->get('Max Price'); ?>" name="max_price" autocomplete="off"
                                   class="form-control form--control">
                        </div>
                 
                               
                                <div class="car__filter__btn">
                                   <button class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit"><?php echo app('translator')->get('Search'); ?></button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-lg-10">
                    <div class="car__filter__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                                              <div class="section__header section__header__center">
            <span class="section__category">Car List</span>
            <!-- <h6 class="section__title">Car List</h6> -->
        </div>
                            </div>
                            <div class="col-lg-6 col-md-6">                                
                            </div>
                        </div>
                    </div>
                    <div class="row">

   <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-3">
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
       <div class="col-lg-6 col-md-4">
                                          <div class="car__item__price">
                                        <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit"><?php echo app('translator')->get('More Details'); ?></a>
                                    </div>
                                </div>
                                   <div class="col-lg-6 col-md-4">
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
<!-- Rental Fleet Section -->
<?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/sections/vehicle_rent.blade.php ENDPATH**/ ?>