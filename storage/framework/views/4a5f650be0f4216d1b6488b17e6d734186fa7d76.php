
<?php $__env->startSection('content'); ?>
<style type="text/css">
    pp {
    color:#fff; /* Sets the text color of paragraphs to blue */
}
</style>

<style>
.center{
  text-align: center;
}
.pp{
  color:#fff;
}
</style>
<br>
<!-- Carousel Start -->


<div class="container categories blog pb-5" id="section3">
<div class="row">
  <div class="col-md-8">
  <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
          <?php for($i=1;$i<10;$i++): ?>
        <li data-target="#header-carousel" data-slide-to="<?php echo e($i); ?>"></li>
      <?php endfor; ?>
      </ol>
      <div class="carousel-inner">
          <div class="carousel-item position-relative active" style="height: 430px;">
            <img class="position-absolute w-100 h-100" src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$metaFirstVehicle->images[0], imagePath()['vehicles']['size'])); ?>" style="object-fit: cover;">
              <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                  <div class="p-3" style="max-width: 700px;">
                      <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($metaFirstVehicle->model); ?>(<?php echo e($metaFirstVehicle->car_body_type); ?>)</h1>
                      <div class="mx-md-5 px-5 content demo-3 pp" style="color:#fff !important">
          <?php echo @$metaFirstVehicle->details ?>
      </div>
                      <a class="btn btn-outline-light py-1 px-4 mt-3 animate__animated animate__fadeInUp" href="<?php echo e(route('vehicle.details', [$metaFirstVehicle->id, slug($metaFirstVehicle->name)])); ?>">View More</a>
                  </div>
              </div>
          </div>
<?php $__currentLoopData = $metaVehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indexKey => $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="carousel-item position-relative" style="height: 430px;">
              <img class="position-absolute w-100 h-100" src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size'])); ?>" style="object-fit: cover;">
              <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                  <div class="p-3" style="max-width: 700px;">
                      <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($vehicle->model); ?>(<?php echo e($vehicle->car_body_type); ?>)</h1>
                                      <div class="mx-md-5 px-5 content demo-3 pp" style="color:#fff !important">
                          <?php echo @$vehicle->details ?>
                      </div>
                      <a class="btn btn-outline-light py-1 px-4 mt-3 animate__animated animate__fadeInUp" href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>">View More</a>
                                              </div>
              </div>
          </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
  </div>
</div>

  <div class="col-md-4">
  <div class="product-offer mb-30" style="height: 200px;">
      <img class="img-fluid" src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$metaFirstVehicle->images[0], imagePath()['vehicles']['size'])); ?>" alt="">
      <div class="offer-text">
        <div class="text-start">
        <div class="rounded">
              <strong class="text-white"><?php echo e($metaFirstVehicle->model); ?>(<?php echo e($metaFirstVehicle->car_body_type); ?>)</strong>
              <ul class="#">
                  <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Transmission:   <strong><?php echo e($metaFirstVehicle->transmission); ?></strong></li>
                  <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Number of Doors:  <strong><?php echo e($metaFirstVehicle->doors); ?></strong></li>
                  <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Fuel:  <strong><?php echo e($metaFirstVehicle->fuel_type); ?></strong></li>
              </ul>
              </div>
              <div class="mb-2">
              </div>
                <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="">Read More  <i class="fa fa-arrow-right"></i></a>
                
                </div>
      </div>
  </div>

  <div class="product-offer mb-30" style="height: 215px;">
      <img class="img-fluid" src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$metaFirstVehicle->images[0], imagePath()['vehicles']['size'])); ?>" alt="">
      <div class="offer-text">
        <div class="text-start">
        <div class="rounded">
              <strong class="text-white"><?php echo e($metaFirstVehicle->model); ?>(<?php echo e($metaFirstVehicle->car_body_type); ?>)</strong>
              <ul class="#">
                  <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Transmission:   <strong><?php echo e($metaFirstVehicle->transmission); ?></strong></li>
                  <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Number of Doors:  <strong><?php echo e($metaFirstVehicle->doors); ?></strong></li>
                  <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Fuel:  <strong><?php echo e($metaFirstVehicle->fuel_type); ?></strong></li>
              </ul>
              </div>
              <div class="mb-2">
              </div>
                <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="">Read More  <i class="fa fa-arrow-right"></i></a>
               
                  </div>
      </div>
  </div>
</div>

            </div>
</div>



        <!-- Features Start -->
        <div class="container categories blog pb-5" id="section2">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Rhonds <span class="text-primary">Services</span></h1>

                    <strong class="mb-0">
                    </strong>
                    <div class="ms-4">
                        <h5 class="mb-3"><?php echo e($main_service->title?? 'No Title'); ?></h5>
                        <p class="mb-0 demo-1"><?php echo e($main_service->content?? 'No Content'); ?></p>
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
                                      <h5 class="mb-3"><?php echo e($wedding->title ?? 'No Title'); ?></h5>
                                      <p class="mb-0 demo-1"><?php echo e($wedding->content ?? 'No Content'); ?></p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <span class="fa fa-road fa-2x"></span>
                                    </div>
                                    <div class="ms-4">
                                      <h5 class="mb-3"><?php echo e($escourt->title?? 'No Title'); ?></h5>
                                      <p class="mb-0 demo-1"><?php echo e($escourt->content?? 'No Content'); ?></p>

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
                                  <div class="feature-icon">
                                      <span class="fa fa-road fa-2x"></span>
                                  </div>
                                    <div class="text-end me-4">
                                      <h5 class="mb-3"><?php echo e($car_hiring->title?? 'No Title'); ?></h5>
                                      <p class="mb-0 demo-1"><?php echo e($car_hiring->content?? 'No Content'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item justify-content-end">
                                  <div class="feature-icon">
                                      <span class="fa fa-road fa-2x"></span>
                                  </div>
                                    <div class="text-end me-4">
                                      <h5 class="mb-3"><?php echo e($transportation->title?? 'No Title'); ?></h5>
                                      <p class="mb-0 demo-1"><?php echo e($transportation->content?? 'No Content'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features End -->

<hr>
 <!-- Car categories Start -->
        <div class="container categories blog pb-5" id="section3">
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
                            <div class="blog-item">
                            <div class="rent__thumb" style="background-color:#9ca494">
                                        <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>">
                                            <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size'])); ?>" class="first-look" alt="rent-vehicle">
                                            <img src="<?php echo e(getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[1], imagePath()['vehicles']['size'])); ?>" class="hover-look" alt="rent-vehicle">
                                        </a>
                                    </div>
                            <div class="categories-content rounded-bottom p-4 text-center" style="margin:-22px">
                                    <!-- <div class="blog-img">
                                        <img src="../../frontendp/img/blog-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                    </div> -->

                                    <div class="blog-content rounded-bottom p-3">
                                        <div class="blog-date"><span class=""><?php echo e(showAmount($vehicle->price)); ?>(<?php echo e($general->cur_sym); ?>) <sub>/<?php echo app('translator')->get('day'); ?></span></div>


                                          <div class="rent__content text-center mt-n1">
                                               <ul class="d-flex car-info text-center">
                                               </ul>
                                       </div>

                                        <strong><?php echo e($vehicle->name); ?></strong>
                                           <div class="rent__content mt-n1">
                                                <ul class="d-flex car-info center">
                                                     <!-- <li class="pr-3 text-center"> -->
                                                      <li class="text-center center">
                                                        <span class=""><?php echo e(__(@$vehicle->model)); ?> (<?php echo e(__(@$vehicle->car_model_no?? 1)); ?>)</span>
                                                    </li>
                                                </ul>
                                        </div>

                                        <div class="rent__content text-center mt-n1">
                                             <ul class="d-flex_org car-info text-center">
                                                  <li class="pr-1 text-center">
                                                      <div class="row gy-2 gx-0 text-center mb-2">
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

                                                 </li>
                                             </ul>
                                       </div>
                                    </div>
                                      <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="">Read More  <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                 <!-- <a href="<?php echo e(route('vehicle.details', [$vehicle->id, slug($vehicle->name)])); ?>" class="btn btn-primary rounded-pill d-flex justify-content-center py-1 px-4" style="margin-bottom:0px;">Book</a> -->
                          </div>
                    </div>
                </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                        
                        <marquee style="color:#03153e;float: right">Book car with Rhond's Company Ltd</marquee>
                    </div>
                    <div>
                     <a class="btn-transparent" href="/vehicle-search" target="_blank"  style="float: right">View More vehicles <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                         </a>
  </span>
</div>
        </div>



              <section class="showcase" style="background: url('assets/img/worldmap.png') no-repeat center; background-size: cover;padding-top: 30px;padding-bottom: 20px;">
            <?php
                $banners = getContent('banner.element');

                $brands = \App\Models\Brand::active()->orderBy('name')->get();
                $seats = \App\Models\Seater::active()->orderBy('number')->get();
            ?>

            <!-- Book Section -->



            <?php if($sections->secs != null): ?>
                <?php $__currentLoopData = json_decode($sections->secs); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($sec =="faq"): ?>
  <?php echo $__env->make($activeTemplate.'sections.'.$sec, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </section>


<hr>
  <section class="showcase" style="background: url('assets/img/worldmap.png') no-repeat center; background-size: cover;padding-top: 30px;padding-bottom: 20px;">
        <!-- Testimonial Start -->
        <div class="container testimonial pb-5" id="section10">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">customers<span class="text-primary"> happines reviews</span></h1>
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
        </section>

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