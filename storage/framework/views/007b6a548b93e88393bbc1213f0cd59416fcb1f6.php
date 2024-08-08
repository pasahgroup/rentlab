<?php $__env->startSection('content'); ?>
    <?php
        $banners = getContent('banner.element');

        $brands = \App\Models\Brand::active()->orderBy('name')->get();
        $seats = \App\Models\Seater::active()->orderBy('number')->get();
    ?>
    <!-- Banner Section -->
    <div class="banner-slider owl-carousel owl-theme">

        <?php $__empty_1 = true; $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="banner-section">
                <div class="container">
                    <div class="banner__wrapper">
                        <div class="banner__content">
                            <span class="banner__category"><?php echo e(__(@$banner->data_values->subtitle)); ?></span>
                            <h1 class="banner__title">
                                <span><?php echo e(__(@$banner->data_values->title)); ?></span>
                            </h1>
                            <p class="banner__txt"><?php echo e(__(@$banner->data_values->content)); ?></p>
                            <div class="btn__grp">
                                <a href="<?php echo e(@$banner->data_values->button_1_url); ?>"
                                   class="cmn--btn active"><?php echo e(__(@$banner->data_values->button_1_name)); ?></a>
                                <a href="<?php echo e(@$banner->data_values->button_2_url); ?>"
                                   class="cmn--btn"><?php echo e(__(@$banner->data_values->button_2_name)); ?></a>
                            </div>
                        </div>
                        <div class="banner__thumb">
                            <img
                                src="<?php echo e(getImage('assets/images/frontend/banner/' . @$banner->data_values->background_image, '1000x586')); ?>"
                                alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </div>


<section class="clients-section pt-120 pb-120 bg--section position-relative overflow-hidden">
    <div class="shape right-side"><?php echo e(__(@$testimonial_content->data_values->stylish_text_right)); ?></div>
    <div class="shape"><?php echo e(__(@$testimonial_content->data_values->stylish_text_left)); ?></div>
    <div class="container">
        <div class="section__header section__header__center">
            <span class="section__category"><?php echo e(__(@$testimonial_content->data_values->sub_heading)); ?></span>
            <h2 class="section__title"><?php echo e(__(@$testimonial_content->data_values->heading)); ?></h2>
        </div>
        <div class="client-slider owl-theme owl-carousel">


            <?php $__empty_1 = true; $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                           <div class="col-md-12 col-sm-12">
                <div class="client__item">
                    <div class="client__header">
                        <div class="thumb">
                            <img
                                src="<?php echo e(getImage('assets/images/frontend/testimonial/' . @$item->data_values->image, '120x120')); ?>"
                                alt="client">
                        </div>
                        <div class="name__area">
                            <h6 class="name text--base"><?php echo e(__(@$item->data_values->subtitle)); ?></h6>
                            <span class="designation"><?php echo e(__(@$item->data_values->designation)); ?></span>
                        </div>
                    </div>
                    <div class="client__content">
                        <p><?php echo e(__(@$item->data_values->review)); ?></p>
                        <div class="ratings">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                                           
                                    <span><i class="lar la-star"></i></span>
                             
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>

        </div>
    </div>
</section>



    <!-- Banner Section -->
    <!-- Book Section -->
    <section class="book-section pb-120 bg--section">
        <div class="container">
            <div class="book__wrapper mt--120 bg--section">
                <h4 class="book__title"><?php echo app('translator')->get('Book a Car'); ?></h4>
                <form class="book--form row gx-3 gy-4 g-md-4" action="<?php echo e(route('vehicle.search')); ?>" method="get">
                    <div class="col-md-4 col-sm-6">
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
                            <label for="drop-point" class="form--label">
                                <i class="las la-street-view"></i> <?php echo app('translator')->get('Model'); ?>
                            </label>
                            <input type="text" name="model" class="form-control form--control"
                                   placeholder="<?php echo app('translator')->get('Sedan, SUV ...'); ?>">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="start-datse" class="form--label">
                                <i class="las la-dollar-sign"></i> <?php echo app('translator')->get('Min Price'); ?>
                            </label>
                            <input type="text" placeholder="<?php echo app('translator')->get('Min Price'); ?>" name="min_price" id="start-datse"
                                   autocomplete="off" class="form-control form--control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="end-date" class="form--label">
                                <i class="las la-dollar-sign"></i> <?php echo app('translator')->get('Max Price'); ?>
                            </label>
                            <input type="text" placeholder="<?php echo app('translator')->get('Max Price'); ?>" name="max_price" autocomplete="off"
                                   class="form-control form--control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form--label d-none d-sm-block">&nbsp;</label>
                            <button class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit"><?php echo app('translator')->get('Search'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>



 <!-- Car Section Begin -->
    <section class="book-section pb-120 bg--section">
        <div class="container">
            <div class="row">                            
                <div class="col-lg-12">
                    <div class="car__filter__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="car__filter__option__item">
                                    <span>Car type</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

   <?php $__currentLoopData = $carbodytypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carbodytype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-2 col-md-3">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="<?php echo e(URL::asset('/storage/cartypes/'.$carbodytype->images)); ?>" alt="No Image" style="width:400px;height:130px;">
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
                                        <a href="#" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit"><?php echo e($carbodytype->car_body_type); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Car Section Begin -->
    <section class="book-section pb-120 bg--section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="car__sidebar">
                        <div class="car__search">
                            <h5>Car Search</h5>
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="car__filter">
                            <h5>Car Filter</h5>
                            <form action="#">
                                <select>
                                    <option data-display="Brand">Select Brand</option>
                                    <option value="">Acura</option>
                                    <option value="">Audi</option>
                                    <option value="">Bentley</option>
                                    <<option value="">BMW</option>
                                    <option value="">Bugatti</option>
                                </select>
                                <select>
                                    <option data-display="Model">Select Model</option>
                                    <option value="">Q3</option>
                                    <option value="">A4 </option>
                                    <option value="">AVENTADOR</option>
                                </select>
                                <select>
                                    <option value="">Body Style</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <select>
                                    <option value="">Condition</option>
                                    <option value="">First Hand</option>
                                    <option value="">Second Hand</option>
                                </select>
                                <select>
                                    <option value="">Transmisson</option>
                                    <option value="">Bluetooth</option>
                                    <option value="">WiFi</option>
                                </select>
                                <select>
                                    <option value="">Mileage</option>
                                    <option value="">27</option>
                                    <option value="">20</option>
                                    <option value="">15</option>
                                    <option value="">10</option>
                                </select>
                                <select>
                                    <option value="">Engine</option>
                                    <option value="">BS3</option>
                                    <option value="">BS4</option>
                                    <option value="">BS5</option>
                                    <option value="">BS6</option>
                                </select>
                                <select>
                                    <option value="">Colors</option>
                                    <option value="">Red</option>
                                    <option value="">Blue</option>
                                    <option value="">Black</option>
                                    <option value="">Yellow</option>
                                </select>
                                <div class="filter-price">
                                    <p>Price:</p>
                                    <div class="price-range-wrap">
                                        <div class="filter-price-range"></div>
                                        <div class="range-slider">
                                            <div class="price-input">
                                                <input type="text" id="filterAmount">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__filter__btn">
                                    <button type="submit" class="site-btn">Reset FIlter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9">
                    <div class="car__filter__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="car__filter__option__item">
                                    <h6>Show On Page</h6>
                                    <select>
                                        <option value="">9 Car</option>
                                        <option value="">15 Car</option>
                                        <option value="">20 Car</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="car__filter__option__item car__filter__option__item--right">
                                    <h6>Sort By</h6>
                                    <select>
                                        <option value="">Price: Highest Fist</option>
                                        <option value="">Price: Lowest Fist</option>
                                    </select>
                                </div>
                            </div>
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
                                        <div class="label-date">2016</div>
                                        <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
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


    <!-- Book Section -->
    <?php if($sections->secs != null): ?>
        <?php $__currentLoopData = json_decode($sections->secs); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make($activeTemplate.'sections.'.$sec, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/home.blade.php ENDPATH**/ ?>