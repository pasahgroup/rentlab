<div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0" >          
        
        <nav class="navbar navbar-expand-lg navbar-light float-left">  
          <a href="" class="navbar-brand p-0">
                                     <div class="logo gl">
                <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(getImage(imagePath()['logoIcon']['path'].'/logo.png')); ?>" alt="logo" style="width:120px;"></a>
            </div> 
                      
                    </a>
                
        </nav>   

       <nav class="navbar navbar-expand-lg navbar-light float-right">             
 <div class="classy-nav-container breakpoint-off">

                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav"> 


 <div class="classy-menu">                        <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>

<li><a href="/">Home</a>
                            </li>



                                                        <li><a href="#">Vehicles</a>
<ul class="dropdown">
  <?php $__currentLoopData = $view_brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <li><a href="#"><?php echo e($brand->name); ?></a>

                                            <ul class="dropdown" style="padding:0px">

                                              <?php $__currentLoopData = $view_vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <li style="padding:0px">
    <?php if($vehicle->brand_id==$brand->id): ?>
      <form action="<?php echo e(route('vehicle.search')); ?>" method="get" class="priceForm">
<input type="hidden" name="model" id="model" value="<?php echo e($vehicle->model); ?>" class="form-control form--control" required>
  <button  class="dropdown-item"><?php echo e($vehicle->model); ?></button>
                                          </form>
  <?php endif; ?>

  </li>


                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </ul>
                                            </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>


</li>




                            <li><a href="#">Services</a>

                                <ul class="dropdown">
              <?php $__currentLoopData = $view_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              

              <form action="<?php echo e(route('web-service',$view_service->service_name)); ?>" method="get" class="priceForm">
            <button  class="dropdown-item"><?php echo e($view_service->title); ?></button>
                                                  </form>
            </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </ul>
                            </li>



                                                                                <li><a href="#">Booking</a>
                                                                                  <ul class="dropdown">
                                                                                       <li><a href="<?php echo e(route('user.multibooking.index')); ?>">Multi-booking</a></li>
                                                                                        <li><a href="<?php echo e(route('plans')); ?>">Plan-booking</a></li>

                                                                                  </ul>
                                                                              </li>



                            <li><a href="#">Miscellaneous</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo e(route('blogs')); ?>">Blog</a></li>
                                    <li><a href="#">Galleries (Comming soon---)</a></li>
                                    <li><a href="#">Opportunities (Comming soon---)</a></li>
                                </ul>
                            </li>

                                <li><a href="/about">About Us</a>
                               </li>

                              <li><a href="<?php echo e(route('contact')); ?>">Contact</a>
                            </li>

<li>||</li>




<li><a href="#" class="las la-user float-right">Account:  <b class="text-white"><?php if(auth()->guard()->check()): ?> Logged in  <?php else: ?> Login <?php endif; ?></b></a>
    <ul class="dropdown">
      <?php if(auth()->guard()->check()): ?>

                      <li class="header-top-item meta-list">
                    <a href="Mailto:<?php echo e(getContent('contact.content', true)->data_values->email); ?>"><i class="lar la-envelope"></i><?php echo e(getContent('contact.content', true)->data_values->email); ?></a>
                </li>
                         <li class="header-top-item ml-sm-auto">
                            <a href="<?php echo e(route('user.home')); ?>"><i class="las la-tachometer-alt"></i><?php echo app('translator')->get('Dashboard'); ?></a>
                        </li>

                        <li class="header-top-item">
                            <a href="<?php echo e(route('user.logout')); ?>"><i class="las la-sign-out-alt"></i><?php echo app('translator')->get('Logout'); ?></a>
                        </li>
                    <?php else: ?>
                        <li class="header-top-item ml-sm-auto">
                            <a href="<?php echo e(route('user.login')); ?>"><i class="las la-user"></i><?php echo app('translator')->get('Login'); ?></a>
                        </li>
                        <li class="header-top-item">
                            <a href="<?php echo e(route('user.register')); ?>"><i class="las la-user-plus"></i><?php echo app('translator')->get('Register'); ?></a>
                        </li>
                    <?php endif; ?>


    </ul>
</li>
</ul>

  </div>
 </div>


       <div class="classy-navbar-toggler" style="">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

 </nav>        

                    

                        
                    </div>
                </nav>

           <!--  <div class="classy-navbar-toggler" style="float-right">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div> -->

            </div>
    <?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/layouts/topmenu.blade.php ENDPATH**/ ?>