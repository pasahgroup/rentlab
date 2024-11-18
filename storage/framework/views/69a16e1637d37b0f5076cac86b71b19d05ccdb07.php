
<?php $__env->startSection('content'); ?>
    <?php
        $banners = getContent('banner.element');

        $brands = \App\Models\Brand::active()->orderBy('name')->get();
        $seats = \App\Models\Seater::active()->orderBy('number')->get();
    ?>
    <!-- Banner Section -->

  <div class="search-section pt-120 pb-120 bg--section position-relative overflow-hidden">
        <div class="shape right-side"><?php echo app('translator')->get('Rent'); ?></div>
        <div class="shape"><?php echo app('translator')->get('Vehicles'); ?></div>
        <div class="container-fluid">
            <div class="row">
              
                <div class="col-lg-10">
                    <div class="filter-in d-lg-none">
                        <i class="las la-filter"></i>
                    </div>
                    <div class="book__wrapper bg--body border--dashed mb-4">
                        <form class="book--form row gx-3 gy-4 g-md-4" action="<?php echo e(route('cartype-page.show',$id)); ?>" method="get">
                            <div class="col-md-3 col-sm-4">

                                 <!-- <input type="text" name="carTag" id="carTag" value="<?php echo e($id); ?>"> -->
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
                            <div class="col-md-2 col-sm-4">
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
                            <div class="col-md-1 col-sm-3">
                                <div class="form-group">
                                    <label class="form--label d-none d-sm-block">&nbsp;</label>
                                    <button class="cmn--btn form--control bg--base w-100 justify-content-center" id="carType" value="carType" name="carType" type="submit"><?php echo app('translator')->get('Search'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


      <div class="container-fluid categories py-5">
            <div class="container-fluid py-5">
                      <div class="row">  

                      <div class="col-lg-2" style="margin-top:0px">
                    <aside class="category-sidebar">                       
                        <div class="widget border--dashed">
                             <div class="close-sidebar"><i class="las la-times"></i></div>
                            <h5 class="title"><?php echo app('translator')->get('Filter by Car Body Type'); ?></h5>
                            <div class="widget-body">
                                <ul class="category-link">

                                    <?php $__empty_1 = true; $__currentLoopData = $cartypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li>
                                            <a href="/cartype-page/<?php echo e($cartype->car_body_type); ?>"><span><?php echo e($cartype->car_body_type); ?></span><span>(<?php echo e($metaVehicles->where('car_body_type',$cartype->car_body_type)->count()); ?>)</span></a>
                                        </li>
                                   
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>

                                </ul>
                            </div>
                        </div>                    
                    </aside>
                </div>
   <div class="col-lg-10" style="margin-top:0px"> 
     <div class="filter-in d-lg-none">
                        <i class="las la-filter"></i>
                    </div>
      <div class="row">               
<?php $__empty_1 = true; $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                     <div class="col-md-3">
                    <div class="categories-item">
                        <div class="rent__item">
                            <div class="rent__thumb">
                                        <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>">
                                            <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size'])); ?>" class="first-look" alt="rent-vehicle">
                                            <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[1], imagePath()['vehicles']['size'])); ?>" class="hover-look" alt="rent-vehicle">
                                        </a>
                                    </div>                            
                            <div class="categories-content rounded-bottom p-4 text-center" style="margin:-25px;">
                                <strong><?php echo e(__(@$vehicle->model)); ?> (<?php echo e(__(@$vehicle->car_model_no?? 1)); ?>)</strong>
                                   <div class="rent__content text-center">
                                        <ul class="d-flex car-info text-center">
                                            <li class="pr-3 text-center"><i class="fas fa-money-check"></i>
                                                <span class="text-center"><?php echo e(showAmount($vehicle->price)); ?>(<?php echo e($general->cur_sym); ?>) <sub>/<?php echo app('translator')->get('day'); ?></span>
                                            </li>
                                        </ul>
                                </div>
                                <br>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-users text-dark"></i> <span class="text-body ms-1"><?php echo e(__(@$vehicle->seat)); ?> Seat</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-car text-dark"></i> <span class="text-body ms-1"><?php echo e(__(@$vehicle->transmission)); ?></span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1"><?php echo e(__(@$vehicle->fuel_type)); ?></span>
                                    </div>
                                </div>
                            </div>
                 <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="btn btn-primary rounded-pill d-flex justify-content-center py-2 px-4" style="margin-bottom:0px;">Book</a>
                          
                        </div>
                    </div>
                </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                        <?php echo $vehicles->links(); ?>

                    </div>
</div>

            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layoutm.frontendm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/carbodytypes/carbodytype.blade.php ENDPATH**/ ?>