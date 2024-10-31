  <style type="text/css">
      
     .btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
 /* font-family: Arial;
  color: #ffffff;
  font-size: 15px;*/
/*  padding: 10px 10px 10px 10px;*/
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
} 
  </style>

  <style type="text/css">
      .myButton {
    background-color:#6F6761;
    border-radius:10px;
    border:0px solid #18ab29;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:17px;
    padding:3px 16px;
    text-decoration:none;
    text-shadow:0px 1px 0px #2B2E31;
}
.myButton:hover {
    background-color:#5cbf2a;
}
.myButton:active {
    position:relative;
    top:1px;
}
  </style>


  <div class="search-section pt-120 pb-120 bg--section position-relative overflow-hidden">
        <div class="shape right-side"><?php echo app('translator')->get('Rent'); ?></div>
        <div class="shape"><?php echo app('translator')->get('Vehicles'); ?></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <aside class="category-sidebar">
                        <div class="widget d-lg-none border--dashed">
                            <div class="d-flex justify-content-between">
                                <h5 class="title border-0 pb-0 mb-0"><?php echo app('translator')->get('Filter Vehicles'); ?></h5>
                                <div class="close-sidebar"><i class="las la-times"></i></div>
                            </div>
                        </div>
                        <div class="widget border--dashed">
                            <h5 class="title">
                                <label for="search"><?php echo app('translator')->get('Search By Name'); ?></label>
                            </h5>
                            
                            <div class="widget-body">
                                <form action="<?php echo e(route('vehicle.search')); ?>" method="get">
                                    <div class="input-group">
                                        <input type="text" name="name" value="<?php echo e(@request()->name); ?>" class="form-control form--control" placeholder="<?php echo app('translator')->get('Vehicle Name'); ?>" id="search">
                                        <button class="input-group-text cmn--btn" type="submit"><i class="las la-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        
                           <div class="widget-body">
                              <h5 class="title"></h5>
                              <h5 class="title"><?php echo app('translator')->get('Filter by Body Type'); ?></h5>
                                <ul class="category-link">
                                       <li>
                                            <a href="/cartype-page/Search By Body Type"><span>Car Body Type</span><span></span></a>
                                            <a href="/cartag-page/Search By Car Tag"><span>Car Tag</span><span></span></a>
                                                                    </ul>
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
                                     <div class="car__filter__btn" style="margin-top:20px">
                                   <button class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit"><?php echo app('translator')->get('Search'); ?></button>
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
                <div class="col-lg-10">
                    <div class="filter-in d-lg-none">
                        <i class="las la-filter"></i>
                    </div>
                    <div class="book__wrapper bg--body border--dashed mb-4" style="background-color:#345742">
                        <form class="book--form row gx-3 gy-4 g-md-4" action="<?php echo e(route('vehicle.search')); ?>" method="get">
                            <div class="col-md-3 col-sm-4">
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
                                    <button class="cmn--btn form--control bg--base w-100 justify-content-center" type="submit"><?php echo app('translator')->get('Search'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row g-4 border--dashed">


                        <?php $__empty_1 = true; $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-md-3">
                                <div class="rent__item">
                                    <div class="rent__thumb">
                                        <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>">
                                            <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size'])); ?>" class="first-look" alt="rent-vehicle">
                                            <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[1], imagePath()['vehicles']['size'])); ?>" class="hover-look" alt="rent-vehicle">
                                        </a>
                                    </div>
                                    <div class="rent__content">
                                        <h6 class="rent__title">
                                            <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="las la-car"> <?php echo e(__(@$vehicle->model)); ?> (<?php echo e(__(@$vehicle->car_model_no?? 1)); ?>)</a>
                                        </h6>
                                        <div class="rent__content">
                                            <h5 class="item">  <?php echo e(showAmount($vehicle->price)); ?>(<?php echo e($general->cur_sym); ?>) <sub>/<?php echo app('translator')->get('day'); ?></sub></h5>
                                        </div>
                                        <ul class="d-flex car-info">
                                            <li class="pr-3"><i class="las la-tachometer-alt"></i><span class="font-mini"><?php echo e(__(@$vehicle->transmission)); ?></span></li>
                                            <li class="pr-3"><i class="las la-gas-pump"></i><span class="font-mini"><?php echo e(__(@$vehicle->fuel_type)); ?></span></li>
                                        </ul>

                                         <div class="row" style="margin-top:10px">
  <div class="col-lg-1 col-md-1 col-sm-1">
                                         
                                </div>
                                   <div class="col-lg-10 col-md-10 col-sm-10">
                                      <div class="car__item__price">

                                           <div class="btn__grp">

                                             <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="cmn--btn form--control bg--base w-100 justify-content-center" style="background-color:#345742 !important"><?php echo app('translator')->get('Book'); ?></a>
                        </div>


                                    </div>
                                </div>

                                <div class="col-lg-1 col-md-1 col-sm-1">
                                         
                                </div>
                               </div> 






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
    </div><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/sections/vehicle_rent.blade.php ENDPATH**/ ?>