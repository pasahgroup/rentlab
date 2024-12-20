<?php
    $subscribe_content = getContent('subscribe.content', true);
    $footer_content = getContent('footer.content', true);
    $contact = getContent('contact.content', true);
    $social_icons = getContent('social_icon.element', false, null, true);
    $policy_pages = getContent('policy_pages.element', false, null, true);
?>
 <script type="text/javascript" src="../js/jquery360.min.js"></script>
<link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/bootstrap.min.css')); ?>">

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <title><?php echo e($general->sitename(__($pageTitle))); ?></title>
           <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

        <!-- Libraries Stylesheet -->
  <link href="../../../frontendp/lib/animate/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../frontendp/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />

        <!-- Template Stylesheet -->
        <link href="../../../frontendp/css/style.css" rel="stylesheet" type="text/css" />
           <link href="../../../frontendp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

           <!-- Custom library  -->
   <link rel="icon" type="image/png" href="../../../mold/assets/img/favicon.png" />
 <!-- <link rel="stylesheet" href="../../../mold/assets/css/min/bootstrap.min.css" media="all"> -->
  <link rel="stylesheet" href="../../../mold/assets/css/jqueryui.css" media="all">
  <link rel="stylesheet" href="../../../mold/vendor/animate-css/animate.css" media="all">
  <link rel="stylesheet" href="../../../mold/assets/font/iconfont/iconstyle.css" media="all">
  <link rel="stylesheet" href="../../../mold/assets/font/font-awesome/css/font-awesome.css" media="all">
<link rel="stylesheet" href="../../../assetf/style.css">
<!-- Original custom css -->
<!-- //New Added style -->
<link rel="stylesheet" href="../../../styleMain.css">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/line-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/magnific-popup.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/owl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/main.css')); ?>">

           <!-- end of Custom library -->

    <?php echo $__env->yieldPushContent('style-lib'); ?>
    <?php echo $__env->yieldPushContent('style'); ?>
    </head>
    <body>

        <!-- Spinner Start -->
 <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->

        <header class="header-area" style="padding-left:3%;padding-right:3%;">
      <?php echo $__env->make($activeTemplate.'layouts.header3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader" style="background:#;margin-top:0px;">
        <div class="classy-nav-container breakpoint-off"  style="border:1px solid rgba(193, 184, 46, 0.9)">
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="/"><img src="<?php echo e(getImage(imagePath()['logoIcon']['path'].'/logo.png')); ?>" alt="" style="height:40px; width:120px;padding:1px;"></a>
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>





                    <div class="col-md-2 d-none d-lg-block">
                        <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical">
                            <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Vehicles</h6>

                                          <i class="fa fa-angle-down text-dark"></i>
                        </a>
                        <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                            <div class="navbar-nav w-100">
                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="nav-item dropdown dropright">
                                          <form action="<?php echo e(route('vehicle.search')); ?>" method="get" class="priceForm">
                                              <input type="hidden" name="brand" id="brand" value="<?php echo e($brand->id); ?>" class="form-control form--control" required>
                                    <button  class="dropdown-item"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo e($brand->name); ?> <i class="fa fa-angle-right float-right mt-1"></i></a>

                  </button>
                  </form>

                                                                         <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">

                                          <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <?php if($vehicle->brand_id==$brand->id): ?>

                                            <form action="<?php echo e(route('vehicle.search')); ?>" method="get" class="priceForm">
                                      <input type="hidden" name="model" id="model" value="<?php echo e($vehicle->model); ?>" class="form-control form--control" required>
                                        <button  class="dropdown-item"><?php echo e($vehicle->model); ?></button>
                                                                                </form>
                                        <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </nav>
                    </div>



                <!-- Menu -->
                <div class="classy-menu">                        <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>

<li><a href="/">Home</a>
                            </li>

                                <li><a href="#">Tour Packages</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Packages</li>
                                        <li><a href="/safaris">Wildlife Safaris</a></li>
                                        <li><a href="/trekking">Hiking & Trekking</a></li>
                                        <li><a href="/holiday">Beach Holidays</a></li>
                                        <li><a href="/dayTours">Day Tours</a></li>
                                        <li><a href="/historical-sites">Historical Sites</a></li>
                                    </ul>

                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Special Packages</li>
                                         <li><a href="/group">All Group Tours</a></li>
                      <li><a href="/Group-scheduled">Scheduled Group Tours</a></li>
            <li><a href="/offers">Special Offers</a></li>
            <li><a href="/special-occasions">Special Occasions</a></li>
               <li><a href="/cultural">Cultural Tours</a></li>
                <li><a href="/addons">Addons</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li><a href="#">Services</a>
                                <ul class="dropdown">
                                     <li><a href="/whatWeOfferClient">Palatial Tour Services</a></li>
            <li><a href="/drongo-attractions">Palatial Tour Attractios</a></li>
            <li><a href="#">Palatial Crafts and Designing</a></li>

                                </ul>
                            </li>



                             <li><a href="/safaris-gallery">Galleries</a>
                                <!-- <ul class="dropdown">
                                     <li><a href="/safaris-gallery">Gallery</a></li>
                                </ul> -->
                            </li>

                            <li><a href="#">Opportunities</a>
                                <ul class="dropdown">
                                    <li><a href="/New-Agent">Agent-Register</a></li>
                    <li><a href="/New-tourGuide">Tour Guide -Register</a></li>
                    <li><a href="/New-Partner">Partner-Register</a></li>

                                </ul>
                            </li>


                                <li><a href="/aboutus">About Us</a>
                               <!--  <ul class="dropdown">
                                     <li><a href="/safaris-gallery">About Us</a></li>
                                </ul> -->
                               </li>

                              <li><a href="<?php echo e(route('contact')); ?>">Contact</a>
                            </li>

<li>||</li>


<li><a href="#" class="las Plan-booking float-right"><strong style="color:yellow;">Language</strong></a>
          <ul class="dropdown">

<select class="langSel language-select ms-3">
<?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($item->code); ?>"
          <?php if(session('lang') == $item->code): ?> selected <?php endif; ?>><?php echo e(__($item->name)); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>


          </ul>
      </li>

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
</nav>
       </div>
    </div>
</header>


        <div class="container-fluid">
              <div class="row bg-secondary py-1 px-xl-5">

                  <div class="col-lg-6 text-center text-lg-right">
                      <div class="d-inline-flex align-items-center">
                              <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account2</button>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <button class="dropdown-item" type="button">Sign in</button>
                                  <button class="dropdown-item" type="button">Sign up</button>
                              </div>


                          </div>
                            <div class="btn-group mx-2">
                          <select class="langSel language-select ms-3">
                          <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($item->code); ?>"
                                      <?php if(session('lang') == $item->code): ?> selected <?php endif; ?>><?php echo e(__($item->name)); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                          <div class="btn-group mx-2">
                              <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <button class="dropdown-item" type="button">EUR</button>
                                  <button class="dropdown-item" type="button">GBP</button>
                                  <button class="dropdown-item" type="button">CAD</button>
                              </div>
                          </div>
                          <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <button class="dropdown-item" type="button">FR</button>
                                  <button class="dropdown-item" type="button">AR</button>
                                  <button class="dropdown-item" type="button">RU</button>
                              </div>
                          </div>
                      </div>
                      <div class="d-inline-flex align-items-center d-block d-lg-none">
                          <a href="" class="btn px-0 ml-2">
                              <i class="fas fa-heart text-dark"></i>
                              <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                          </a>
                          <a href="" class="btn px-0 ml-2">
                              <i class="fas fa-shopping-cart text-dark"></i>
                              <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Navbar Start -->
          <div class="container-fluid bg-dark mb-30">
              <div class="row px-xl-5">
                  <div class="col-md-10">
                      <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                          <a href="" class="text-decoration-none d-block d-lg-none">
                              <span class="h1 text-uppercase text-dark bg-light px-2">Multi2</span>
                              <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>


                          </a>
                           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                                      <div class="classy-navbar-toggler" style="">
                                           <span class="navbarToggler"><span></span><span></span><span></span></span>
                                       </div>
                                      </button>

                          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">

                  <div class="container sticky-top px-0 px-lg-4 py-2 py-lg-0">
                              <div class="container">
                         <nav class="navbar navbar-expand-lg navbar-light float-left">
                   <div class="classy-nav-container breakpoint-off">

                                  <!-- Classy Menu -->
                                  <nav class="classy-navbar justify-content-between" id="southNav">
                                      <div class="classy-menu">
                                          <div class="classynav">
                                              <ul>
                   <li class="active"><a href="<?php echo e(route('home')); ?>">Home</a>
                                  </li>

                                                                                  <li><a href="<?php echo e(route('vehicles')); ?>">Vehicles <i class="las la-angle"></i></a>

                                                                                      <ul class="dropdown">
                                                                                          <li class="title">Car Models</li>
                                                                                          <?php $__currentLoopData = $cartypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                               <li><a href="/cartype-page/<?php echo e($cartype->car_body_type); ?>"><?php echo e($cartype->car_body_type); ?></a></li>
                                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                      </ul>
                                                                                  </li>


                                                    <li><a href="#">Booking</a>
                                                      <ul class="dropdown">
                                                           <li><a href="<?php echo e(route('user.multibooking.index')); ?>">Multi-booking</a></li>
                                                            <li><a href="<?php echo e(route('plans')); ?>">Plan-booking</a></li>

                                                      </ul>
                                                  </li>


                                                  <li><a href="#">Services</a>
                                                      <ul class="dropdown">
                                                            <li><a href="#">Rhonds Services (Comming soon---)</a></li>

                                                      </ul>
                                                  </li>

                                                  <li><a href="#">Miscellaneous</a>
                                                      <ul class="dropdown">
                                                          <li><a href="<?php echo e(route('blogs')); ?>">Blog</a></li>
                                                          <li><a href="#">Galleries (Comming soon---)</a></li>
                                                          <li><a href="#">Opportunities (Comming soon---)</a></li>
                                                      </ul>
                                                  </li>


                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <li><a href="<?php echo e(route('pages',[$data->slug])); ?>"><?php echo e(__($data->name)); ?></a></li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                      </ul>
                  </div>

                       </div>

                   </nav>




                                      </div>
                                  </nav>

                              </div>
                          </div>

                              </nav>
  </div>



              </div>
                  </div>
          </div>
          <!-- Navbar End -->







    </ul>
</div>

     </div>

 </nav>




                    </div>
                </nav>

            </div>
        </div>

        <?php echo $__env->yieldPushContent('fbComment'); ?>
   <?php if(!request()->routeIs('home')): ?>
    <?php echo $__env->make($activeTemplate.'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
   <?php echo $__env->yieldContent('content'); ?>

<!-- footer section start -->
<?php echo $__env->make($activeTemplate.'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldPushContent('script-lib'); ?>
<?php echo $__env->yieldPushContent('script'); ?>
<?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../../frontendp/lib/wow/wow.min.js" type="text/javascript"></script>
<script src="../../frontendp/lib/easing/easing.min.js" type="text/javascript"></script>
<script src="../../frontendp/lib/waypoints/waypoints.min.js" type="text/javascript"></script>
<script src="../../frontendp/lib/counterup/counterup.min.js" type="text/javascript"></script>
          <script src="../../frontendp/lib/owlcarousel/owl.carousel.min.js" type="text/javascript"></script>

    <!-- Template Javascript -->
    <!-- <script src="../../frontendp/js/main.js" type="text/javascript"></script> -->
    <script src="../../frontendp/js/main.js" type="text/javascript"></script>

    <script>
    (function ($) {
        "use strict";
        $(".langSel").on("change", function() {
            window.location.href = "<?php echo e(route('home')); ?>/change/"+$(this).val() ;
        });

        //Cookie
        $(document).on('click', '.acceptPolicy', function () {
            $.ajax({
                url: "<?php echo e(route('cookie.accept')); ?>",
                method:'GET',
                success:function(data){
                    if (data.success){
                        $('.cookie__wrapper').addClass('d-none');
                        notify('success', data.success)
                    }
                },
            });
        });

        //Subscribe
        $(document).on("submit", "#subscribeForm", function(e) {
            e.preventDefault();

            var data = $('#subscribeForm').serialize();

            $.ajax({
                url:'<?php echo e(route('subscribe')); ?>',
                method:'post',
                data:data,
                success:function(response){
                    if(response.success){
                        $('.subscribe_email').val('');
                        notify('success', response.message);
                    }else{
                        $.each(response.error, function( key, value ) {
                            notify('error', value);
                        });
                    }
                },
                error:function(error){
                    console.log(error)
                }
            });
        });
    })(jQuery);
</script>

<!-- ?Custom Javascript -->
<script src="<?php echo e(asset($activeTemplateTrue.'js/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/rafcounter.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/owl.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/main.js')); ?>"></script>


<!-- custo jss -->
  <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/bootstrap.min.js')); ?>"></script>

    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/jquery.nice-select.min.js')); ?>"></script>


    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/mixitup.min.js')); ?>"></script>

    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/jquery.slicknav.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/main.js')); ?>"></script>

<!-- custom2 -->
  <!-- JavaScript Libraries -->
  <script src="<?php echo e(asset($activeTemplateTrue.'custom/lib/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset($activeTemplateTrue.'custom/lib/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/lib/jetmenu/jetmenu.js')); ?>"></script>
  <script src="<?php echo e(asset($activeTemplateTrue.'custom/cjs/main.js')); ?>"></script>

<script>
    $( function() {
        $( "#start-date" ).datepicker();
        $( "#end-date" ).datepicker();
    });
</script>
<script>
    (function ($) {
        "use strict";
        $(".langSel").on("change", function() {
            window.location.href = "<?php echo e(route('home')); ?>/change/"+$(this).val() ;
        });

        //Cookie
        $(document).on('click', '.acceptPolicy', function () {
            $.ajax({
                url: "<?php echo e(route('cookie.accept')); ?>",
                method:'GET',
                success:function(data){
                    if (data.success){
                        $('.cookie__wrapper').addClass('d-none');
                        notify('success', data.success)
                    }
                },
            });
        });

        //Subscribe
        $(document).on("submit", "#subscribeForm", function(e) {
            e.preventDefault();

            var data = $('#subscribeForm').serialize();

            $.ajax({
                url:'<?php echo e(route('subscribe')); ?>',
                method:'post',
                data:data,
                success:function(response){
                    if(response.success){
                        $('.subscribe_email').val('');
                        notify('success', response.message);
                    }else{
                        $.each(response.error, function( key, value ) {
                            notify('error', value);
                        });
                    }
                },
                error:function(error){
                    console.log(error)
                }
            });
        });
    })(jQuery);
</script>


<!-- Custom library -->
 <!--  <script src="../../../mold/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../../mold/vendor/jqueryui/jquery-ui-1.10.3.custom.min.js"></script> -->


  <script src="../../../mold/vendor/jquery.ui.touch-punch.min.js"></script>
  <script src="../../../mold/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="../../../mold/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="../../../mold/vendor/owlcarousel/owl.carousel.min.js"></script>

  <script src="../../../../mold/vendor/retina.min.js"></script>

  <script src="../../../mold/vendor/jquery.imageScroll.min.js"></script>
  <script src="../../../mold/assets/js/min/responsivetable.min.js"></script>
  <script src="../../../mold/assets/js/bootstrap-tabcollapse.js"></script>

  <script src="../../../mold/assets/js/min/countnumbers.min.js"></script>
  <script src="../../../mold/assets/js/main.js"></script>

  <!-- Current Page JS -->
  <script src="../../../mold/assets/js/min/home.min.js"></script>
  <script>
    $(document).ready(function(){
            $('.equal-height > div').deasil_equalHeight();
            $('#carousel').carousel({
              interval: 10000
            })
          });
          $(window).resize(function(){
            $('.equal-height > div').deasil_equalHeight();
          });
  </script>


    <script src="../../../assetf/js/plugins.js"></script>
    <script src="../../../assetf/js/classy-nav.min.js"></script>
    <script src="../../../assetf/js/jquery-ui.min.js"></script>

    <script src="../../../assetf/js/active.js"></script>
     <script src="../../../assets2/js/main.js"></script>

<!-- Custom Javascript -->
 <script src="../../../img_library/scripts.js" type="text/javascript"></script>
 <!-- End of custom Javascript -->
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/layouts/frontend.blade.php ENDPATH**/ ?>