
        <div class="topbar bg-secondary d-nonex d-xl-block">
            <div class="container">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    
                <div class="col-lg-4 col-md-7">
                 <div class="email-address_no">
                    <a href="mailto:info@rhonds.co.tz">
                      <i class="fa fa-envelope" style="color:#f90678;"></i><b style="color:#6C5603;"> info@rhonds.co.tz</b></a>
                       <a href="https://wa.me/+255655633302" style="padding-left:10px">
                               <i class="las la-phone-volume" style="width:20px; height:20px;"></i><b style="color:#6C5603;">(+255)655 633 302</b>
                            </a>
                </div>
            </div>
                

<div class="col-lg-4 col-md-8 text-left">
                      <form  method="post"  action="#" enctype="multipart/form-data">
                                  <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input type="text" class="form-control form--control" name="search" placeholder="search any keyword" required="">
                        <div class="input-group-append">
                            <button class="input-group-text bg-transparent" style="color:#048023 !important">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

                      <div class="col-lg-4 col-6 text-left">
              <div class="d-flex align-items-center justify-content-end float-right">
          <?php $__empty_1 = true; $__currentLoopData = $social_icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <a href="<?php echo e($item->data_values->url); ?>" class="btn btn-primary btn-square mr-2">
                          <?php echo @$item->data_values->social_icon ?>
                      </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <?php endif; ?>
            </div></div>
                </div>
            </div>
        </div><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/layouts/header2.blade.php ENDPATH**/ ?>