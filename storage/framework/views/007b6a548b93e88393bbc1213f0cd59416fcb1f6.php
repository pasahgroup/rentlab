<?php $__env->startSection('content'); ?>
    <?php
        $banners = getContent('banner.element');

        $brands = \App\Models\Brand::active()->orderBy('name')->get();
        $seats = \App\Models\Seater::active()->orderBy('number')->get();
    ?>
 


        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-9">
                    <div class="car__filter__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
            <span class="section__category">Select Car by Car Body Type</span>
                     </div>
                            <div class="col-lg-6 col-md-6">                                
                            </div>
                        </div>
                    </div>
                    <div class="row">

    <?php $__currentLoopData = $carbodytypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carbodytype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       

                        <div class="col-lg-3 col-md-3" style="background-color:#305129">

  <div class="row">
              <div class="car__item__text">
      <div class="car__item__text__inner">


                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="<?php echo e(URL::asset('/storage/cartypes/'.$carbodytype->images)); ?>" alt="No Image" style="width:280px;height:120px;">
                                </div>
                                
                                    </div>
                                    <div class="car__item__price">
                                        <a href="/cartype-page/<?php echo e($carbodytype->car_body_type); ?>" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit"><?php echo e($carbodytype->car_body_type); ?></a>
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


                <div class="col-lg-3">
                    <div class="car__filter__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
            <span class="section__category">Select Car by Tags</span>
                 </div>
                            <div class="col-lg-6 col-md-6">                                
                            </div>
                        </div>
                    </div>
                   
                       
       
            
    <?php $__currentLoopData = $carTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
         <div class="col-lg-6 col-md-3" style="background-color:#918a67">
        <div class="row">
              <div class="car__item__text">
      <div class="car__item__text__inner">
                       
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="<?php echo e(URL::asset('/storage/cartypes/'.$carTag->images)); ?>" alt="No Image" style="width:250px;height:100px;">
                                </div>
                                <div class="car__item__text">
                                    <!-- <div class="car__item__text__inner">
                                        <div class="label-date">2016</div>
                                        <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div> -->
                                    <div class="car__item__price">
                                        <a href="/cartag-page/<?php echo e($carTag->tag); ?>" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit"><?php echo e($carTag->tag); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                       
                             
                

                    
                    <div class="">
                        <a href="#"><span class="">See More</span></a>
                    </div>
                </div>
            </div>
        </div>
   


<!-- Rental Fleet Section -->
  <!-- Car Section Begin -->
    <section class="book-section pb-120 bg--section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="car__sidebar">
                       
                        <div class="car__filter">                         

                            <h5> <?php echo app('translator')->get('Book a Car'); ?></h5>
                           <form class="book--form row gx-3 gy-4 g-md-4" action="<?php echo e(route('vehicle.search')); ?>" method="get">                    
                          <div class="form-group">
                            <label for="car-type" class="form--label">
                                <i class="las la-car-side"></i> <?php echo app('translator')->get('Brand'); ?>
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
                            <label for="model" class="form--label">
                                <i class="las la-car-side"></i> <?php echo app('translator')->get('Model'); ?>
                            </label>
                            <select name="model" id="model" class="form-control form--control">
                                <option value=""><?php echo app('translator')->get('Select model'); ?></option>
                                <?php $__empty_1 = true; $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <option value="<?php echo e($model->model); ?>"><?php echo e(__(@$model->model)); ?></option>
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


                <div class="col-lg-3">
                    <div class="car__filter__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                                              <div class="section__header section__header__center">
            <span class="section__category">Select Car by Tag</span>
            <!-- <h6 class="section__title">Car List</h6> -->
        </div>
                            </div>
                            <div class="col-lg-6 col-md-6">                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">

    <?php $__currentLoopData = $carTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
         <div class="col-lg-6 col-md-3" style="background-color:#918a67">
        <div class="row">
              <div class="car__item__text">
      <div class="car__item__text__inner">
                       
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="<?php echo e(URL::asset('/storage/cartypes/'.$carTag->images)); ?>" alt="No Image" style="width:250px;height:100px;">
                                </div>
                                <div class="car__item__text">
                                    <!-- <div class="car__item__text__inner">
                                        <div class="label-date">2016</div>
                                        <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div> -->
                                    <div class="car__item__price">
                                        <a href="/cartag-page/<?php echo e($carTag->tag); ?>" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit"><?php echo e($carTag->tag); ?></a>
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

    <!-- Book Section -->
    <?php if($sections->secs != null): ?>
        <?php $__currentLoopData = json_decode($sections->secs); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make($activeTemplate.'sections.'.$sec, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/home.blade.php ENDPATH**/ ?>