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
                       

                        <div class="col-lg-3 col-md-3" style="background-color:#c4741f;">

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

    <!-- Book Section -->
    <?php if($sections->secs != null): ?>
        <?php $__currentLoopData = json_decode($sections->secs); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make($activeTemplate.'sections.'.$sec, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/home.blade.php ENDPATH**/ ?>