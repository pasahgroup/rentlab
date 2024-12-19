
<?php $__env->startSection('content'); ?>
<style type="text/css">
    pp {
    color:#fff; /* Sets the text color of paragraphs to blue */
}
</style>
<br>
<!-- Carousel Start -->
  <div class="container-fluid">
          <div class="row">
              <div class="col-md-8">
              <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#header-carousel" data-slide-to="1"></li>
                      <li data-target="#header-carousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                      <div class="carousel-item position-relative active" style="height: 430px;">
                          <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                              <div class="p-3" style="max-width: 700px;">
                                  <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                                  <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                  <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                              </div>
                          </div>
                      </div>
                      <div class="carousel-item position-relative" style="height: 430px;">
                          <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                              <div class="p-3" style="max-width: 700px;">
                                  <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women Fashion</h1>
                                  <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                  <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                              </div>
                          </div>
                      </div>
                      <div class="carousel-item position-relative" style="height: 430px;">
                          <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
                          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                              <div class="p-3" style="max-width: 700px;">
                                  <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Kids Fashion</h1>
                                  <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                  <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now2</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

              <div class="col-md-4">
              <div class="product-offer mb-30" style="height: 200px;">
                  <img class="img-fluid" src="img/offer-1.jpg" alt="">
                  <div class="offer-text">
                      <h6 class="text-white text-uppercase">Save 20%</h6>
                      <h3 class="text-white mb-3">Special Offer</h3>
                      <a href="" class="btn btn-primary">Shop Now</a>
                  </div>
              </div>

              <div class="product-offer mb-30" style="height: 200px;">
                  <img class="img-fluid" src="img/offer-2.jpg" alt="">
                  <div class="offer-text">
                      <h6 class="text-white text-uppercase">Save 20%</h6>
                      <h3 class="text-white mb-3">Special Offer</h3>
                      <a href="" class="btn btn-primary">Shop Now</a>
                  </div>
              </div>
            </div>

                  </div>
                </div>
  <!-- Carousel End -->


<div class="container-fluid overflow-hidden about">
          <div class="container py-5">
              <div class="row">
                <div class="col-xl-8 wow fadeInRight" data-wow-delay="0.2s">
                  <div class="header-carousel" id="section1">
                         <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                      <?php for($i=0;$i<10;$i++): ?>
                  <li data-bs-target="#myCarousel" data-bs-slide-to="<?php echo e($i); ?>"></li>
                  <?php endfor; ?>
                  </ol>

                  <!-- Wrapper for carousel items -->
                  <div class="carousel-inner">
                       <div class="carousel-item active">
                          <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$metaFirstVehicle->images[0], imagePath()['vehicles']['size'])); ?>" class="img-fluid w-100" alt="First slide"/>
                                      <div class="carousel-caption">
                                          <div class="container py-4">
                                              <div class="row g-5">
                                                  <div class="col-lg-2 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
</div>
    <div class="col-lg-5 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                                    <div class="text-start">
                                                    <div class="rounded">
                                                          <strong class="text-white"><?php echo e($metaFirstVehicle->model); ?>(<?php echo e($metaFirstVehicle->car_body_type); ?>)</strong>
                                                          <hr>
                                                          <ul class="#">
                                                              <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Transmission:   <strong><?php echo e($metaFirstVehicle->transmission); ?></strong></li>
                                                              <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Number of Doors:  <strong><?php echo e($metaFirstVehicle->doors); ?></strong></li>
                                                              <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Fuel:  <strong><?php echo e($metaFirstVehicle->fuel_type); ?></strong></li>
                                                              <li class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i>Details:  <strong><?php echo e($metaFirstVehicle->details); ?></strong></li>
                                                          </ul>
                                                          </div>
                                                          <div class="mb-2">
                                                          </div>
                                                             <a href="<?php echo e(route('vehicle.details', [$metaFirstVehicle->id, slug($metaFirstVehicle->name)])); ?>" class="btn btn-primary rounded-pill d-flex justify-content-center py-2 px-4" style="margin-bottom:0px;">Book bn</a>
                                                              </div>

                                                  </div>
                                                  <div class="col-lg-5 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                      </div>


                       <?php $__currentLoopData = $metaVehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indexKey => $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="carousel-item">
                          <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size'])); ?>" class="img-fluid w-100" alt="First slide"/>
                                      <div class="carousel-caption">
                                          <div class="container py-4">
                                              <div class="row g-5">

                                                <div class="col-lg-2 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                            </div>
                                            <div class="col-lg-5 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                                  <div class="text-start">
                                                  <div class="rounded">
                                                        <strong class="text-white"><?php echo e($metaFirstVehicle->model); ?>(<?php echo e($metaFirstVehicle->car_body_type); ?>)</strong>
                                                        <hr>
                                                        <ul class="#">
                                                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Transmission:   <strong><?php echo e($metaFirstVehicle->transmission); ?></strong></li>
                                                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Number of Doors:  <strong><?php echo e($metaFirstVehicle->doors); ?></strong></li>
                                                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Fuel:  <strong><?php echo e($metaFirstVehicle->fuel_type); ?></strong></li>
                                                            <li class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i>Details:  <strong><?php echo e($metaFirstVehicle->details); ?></strong></li>
                                                        </ul>
                                                        </div>
                                                        <div class="mb-2">
                                                        </div>
                                                           <a href="<?php echo e(route('vehicle.details', [$metaFirstVehicle->id, slug($metaFirstVehicle->name)])); ?>" class="btn btn-primary rounded-pill d-flex justify-content-center py-2 px-4" style="margin-bottom:0px;">Book</a>
                                                            </div>

                                                </div>
                                                <div class="col-lg-5 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                      </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>

                  <!-- Carousel controls -->
                  <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
                </div>
                </div>

                  <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                      <div class="about-item">
                            <div class="pb-5">
                              <div class="col-lg-12">
                                  <div class="about-item-inner border p-4">
                                      <div class="about-icon mb-4">
                                          <img src="img/about-icon-1.png" class="img-fluid w-50 h-50" alt="Icon">
                                      </div>
                                      <h5 class="mb-3">Our Vision</h5>
                                      <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                  </div>

                              </div>
                          </div>

                          <div class="rounded">
                              <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Morbi tristique senectus</p>
                              <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> A scelerisque purus</p>
                              <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Dictumst vestibulum</p>
                              <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> dio aenean sed adipiscing</p>
                          </div>
                          <p class="text-item my-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, aliquam ipsum. Sed suscipit dolorem libero sequi aut natus debitis reprehenderit facilis quaerat similique, est at in eum. Quo, obcaecati in!
                          </p>
                          <div class="row">
                                <div class="col-lg-12 d-flex align-items-center">
                                  <a href="#" class="btn btn-primary rounded py-3 px-5">See More</a>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>


        <!-- Features Start -->
        <div class="container-fluid feature py-5" id="section2">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Rhonds <span class="text-primary">Services</span></h1>

                    <strong class="mb-0">
                    </strong>
                    <div class="ms-4">
                        <h5 class="mb-3"><?php echo e($main_service->title); ?></h5>
                        <p class="mb-0"><?php echo e($main_service->content); ?></p>
                    </div>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-xl-4">
                        <div class="row gy-4 gx-0">
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <span class="fa fa-trophy fa-2x"></span>
                                    </div>
                                    <div class="ms-4">
                                      <h5 class="mb-3"><?php echo e($wedding->title); ?></h5>
                                      <p class="mb-0"><?php echo e($wedding->content); ?></p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <span class="fa fa-road fa-2x"></span>
                                    </div>
                                    <div class="ms-4">
                                      <h5 class="mb-3"><?php echo e($escort->title); ?></h5>
                                      <p class="mb-0"><?php echo e($escort->content); ?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?php echo e(URL::asset('/storage/services/'.$main_service->images)); ?>" class="img-fluid w-100" style="object-fit: cover;" alt="Img">
                    </div>
                    <div class="col-xl-4">
                        <div class="row gy-4 gx-0">
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="feature-item justify-content-end">
                                    <div class="text-end me-4">
                                      <h5 class="mb-3"><?php echo e($car_hiring->title); ?></h5>
                                      <p class="mb-0"><?php echo e($car_hiring->content); ?></p>
                                    </div>
                                    <div class="feature-icon">
                                        <span class="fa fa-tag fa-2x"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item justify-content-end">
                                    <div class="text-end me-4">
                                        <h5 class="mb-3">Free Pick-Up & Drop-Off</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, in illum aperiam ullam magni eligendi?</p>
                                    </div>
                                    <div class="feature-icon">
                                        <span class="fa fa-map-pin fa-2x"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


 <!-- Car categories Start -->
        <div class="container-fluid categories pb-5" id="section3">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Car <span class="text-primary">List</span></h1>
                    <p class="mb-0">Book your appropriate Car Type
                    </p>
                </div>
      <div class="row">
<?php $__empty_1 = true; $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                     <div class="col-md-3">
                    <div class="categories-item">
                        <div class="rent__item">
                            <div class="rent__thumb" style="background-color:#9ca494">
                                        <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>">
                                            <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size'])); ?>" class="first-look" alt="rent-vehicle">
                                            <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[1], imagePath()['vehicles']['size'])); ?>" class="hover-look" alt="rent-vehicle">
                                        </a>
                                    </div>
                            <div class="categories-content rounded-bottom p-4 text-center" style="margin:-22px">
                                <strong><?php echo e(__(@$vehicle->model)); ?> (<?php echo e(__(@$vehicle->car_model_no?? 1)); ?>)</strong>
                                   <div class="rent__content text-center mt-n1">
                                        <ul class="d-flex car-info text-center">
                                            <li class="pr-3 text-center"><i class="fas fa-money-check"></i>
                                                <span class=""><?php echo e(showAmount($vehicle->price)); ?>(<?php echo e($general->cur_sym); ?>) <sub>/<?php echo app('translator')->get('day'); ?></span>
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
                                        <i class="las la-gas-pump"></i> <span class="text-body ms-1"><?php echo e(__(@$vehicle->fuel_type)); ?></span>
                                    </div>
                                </div>
                            </div>
                 <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="btn btn-primary rounded-pill d-flex justify-content-center py-2 px-4" style="margin-bottom:0px;">Bookg</a>

                        </div>
                    </div>
                </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                        
                        <marquee style="color:#03153e;float: right">Book car with Rhond's Company Ltd</marquee>
                    </div>
                    <div>
                    <h3 class="position-relative mx-xl-5"><span class="bg-secondary pr-3 section-heading wow fadeInUp float-right">

   <a class="btn-transparent" href="/vehicle-search" target="_blank"  style="color:#b76b0b;float: right">View More vehicles <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                         </a>
  </span></h3>
</div>

        </div>

        <!-- Fact Counter -->
        <div class="container-fluid counter bg-secondary py-5" id="section6">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-thumbs-up fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">829</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Happy Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-car-alt fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">56</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Number of Cars</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-building fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">127</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Car Center</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-clock fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">589</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Total kilometers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Counter -->

        <!-- Services Start -->
        <div class="container-fluid service py-5" id="section6">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Cental <span class="text-primary">Services</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-phone-alt fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Phone Reservation</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-money-bill-alt fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Special Rates</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-road fa-2x"></i>
                            </div>
                            <h5 class="mb-3">One Way Rental</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-umbrella fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Life Insurance</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-building fa-2x"></i>
                            </div>
                            <h5 class="mb-3">City to City</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-car-alt fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Free Rides</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->



        <!-- Car Steps Start -->
        <div class="container-fluid steps py-5" id="section7">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize text-white mb-3">Cental<span class="text-primary"> Process</span></h1>
                    <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="steps-item p-4 mb-4">
                            <h4>Come In Contact</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                            <div class="setps-number">01.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="steps-item p-4 mb-4">
                            <h4>Choose A Car</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                            <div class="setps-number">02.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="steps-item p-4 mb-4">
                            <h4>Enjoy Driving</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                            <div class="setps-number">03.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Car Steps End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5" id="section8">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Cental<span class="text-primary"> Blog & News</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="../../frontendp/img/blog-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">30 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">Rental Cars how to check driving fines?</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="">Read More  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="../../frontendp/img/blog-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">25 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">Rental cost of sport and other cars</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="">Read More  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="../../frontendp/img/blog-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">27 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">Document required for car rental</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="">Read More  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Banner Start -->
        <div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s" id="section8">
            <div class="container pb-5">
                <div class="banner-item rounded">
                    <img src="../../frontendp/img/banner-1.jpg" class="img-fluid rounded w-100" alt="">
                    <div class="banner-content">
                        <h2 class="text-primary">Rent Your Car</h2>
                        <h1 class="text-white">Interested in Renting?</h1>
                        <p class="text-white">Don't hesitate and send us a message.</p>
                        <div class="banner-btn">
                            <a href="#" class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">WhatchApp</a>
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Team Start -->
        <div class="container-fluid team pb-5" id="section9">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Customer<span class="text-primary"> Suport</span> Center</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="../../frontendp/img/team-1.jpg" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                                <h4>MARTIN DOE</h4>
                                <p>Profession</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="../../frontendp/img/team-2.jpg" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                                <h4>MARTIN DOE</h4>
                                <p>Profession</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="../../frontendp/img/team-3.jpg" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                                <h4>MARTIN DOE</h4>
                                <p>Profession</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="../../frontendp/img/team-4.jpg" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                                <h4>MARTIN DOE</h4>
                                <p>Profession</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->





        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5" id="section10">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Our Clients<span class="text-primary"> Riviews</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="../../frontendp/img/testimonial-1.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="../../frontendp/img/testimonial-2.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="../../frontendp/img/testimonial-3.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    <script type="text/javascript">
function scrollToNextSection() {
  const currentSection = document.activeElement.closest('section');
  const nextSection = currentSection.nextElementSibling;

  if (nextSection) {
    nextSection.scrollIntoView();
  }
}

    </script>
             </body>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/datepicker.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset($activeTemplateTrue.'js/datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue.'js/datepicker.en.js')); ?>"></script>
    <script>
        // date and time picker
        $('#dateAndTimePicker').datepicker({
            timepicker: true,
            language: 'en',
            onSelect: function (fd, d, picker) {
                var pick_time = fd;
                var price = parseFloat("<?php echo e($vehicle->price); ?>");
                 $('.total_days').text(1);
                 var no_car = $('#no_car').val();


                if (pick_time){
                    $('#dateAndTimePicker2').removeAttr('disabled');
                }else{
                    $('#dateAndTimePicker2').attr('disabled', 'disabled');

                    $('.total_amount').text(price);
                    $('.total_days').text(1);
                }


                $('#dateAndTimePicker2').datepicker({
                    timepicker: true,
                    language: 'en',
                    onSelect: function (fd, d, picker) {
                        var drop_time = fd;

                        const date1 = new Date(pick_time);
                        const date2 = new Date(drop_time);
                        const diffTime = Math.abs(date2 - date1);
                        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) +1;


                           $("#no_car").on('change keydown paste input', function(){
                     no_car = $('#no_car').val();
 $('.total_amount').text(price*diffDays*no_car);

                    //alert(no_car);
});


if(no_car>0)
{
   $('.total_amount').text(price*diffDays*no_car);
   $('.total_days').text(diffDays);

}else{
     alert('Car number is Empty');
}



                    }
                })
            }
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/homem.blade.php ENDPATH**/ ?>