<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> <?php echo e($general->sitename(__($pageTitle))); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/line-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/magnific-popup.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/owl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/main.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color)); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/bootstrap-fileinput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/custom.css')); ?>">


<!-- Custom2 header menu css -->
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/ccss/style.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/ccss/colors/blue.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/ccss/bbpres.css')); ?>" type="text/css">

    <link href="<?php echo e(asset($activeTemplateTrue.'custom/lib/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset($activeTemplateTrue.'custom/lib/prettyphoto/css/prettyphoto.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset($activeTemplateTrue.'custom/lib/hover/hoverex-all.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset($activeTemplateTrue.'custom/lib/jetmenu/jetmenu.css')); ?>" rel="stylesheet">
  <link href=".<?php echo e(asset($activeTemplateTrue.'custom/lib/owl-carousel/owl-carousel.css')); ?>" rel="stylesheet">

   <link href="<?php echo e(asset($activeTemplateTrue.'custom/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

<!-- Custom css -->

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/css/font-awesome.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/css/elegant-icons.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/css/nice-select.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/css/magnific-popup.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/css/jquery-ui.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/css/slicknav.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/css/style.css')); ?>" type="text/css">

<!--End of custom css -->


<!-- POPUM bootstrap -->
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/vendor/bootstrap.min.css')); ?>">
    <!-- bootstrap toggle css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/vendor/bootstrap-toggle.min.css')); ?>">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/all.min.css')); ?>">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/line-awesome.min.css')); ?>">

    <?php echo $__env->yieldPushContent('style-lib'); ?>

    <!-- custom select box css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/vendor/nice-select.css')); ?>">
    <!-- code preview css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/vendor/prism.css')); ?>">
    <!-- select 2 css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/vendor/select2.min.css')); ?>">
    <!-- jvectormap css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/vendor/jquery-jvectormap-2.0.5.css')); ?>">
    <!-- datepicker css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/vendor/datepicker.min.css')); ?>">
    <!-- timepicky for time picker css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/vendor/jquery-timepicky.css')); ?>">
    <!-- bootstrap-clockpicker css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/vendor/bootstrap-clockpicker.min.css')); ?>">
    <!-- bootstrap-pincode css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/vendor/bootstrap-pincode-input.css')); ?>">
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/app.css')); ?>">


    <!-- <?php echo $__env->yieldPushContent('style'); ?> -->


<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script> -->

    <?php echo $__env->yieldPushContent('style-lib'); ?>
    <!-- <?php echo $__env->yieldPushContent('style'); ?> -->
</head>


<div class="header-top py-2" style="background-color:#698c68;">
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-between mx--10">
            <div class="header-top-item meta-list">
                <a href="Mailto:<?php echo e(getContent('contact.content', true)->data_values->email); ?>"><i class="lar la-envelope"></i><?php echo e(getContent('contact.content', true)->data_values->email); ?></a>
            </div>
            <div class="d-flex flex-wrap meta-list">
                <?php if(auth()->guard()->check()): ?>
                    <div class="header-top-item ml-sm-auto">
                        <a href="<?php echo e(route('user.home')); ?>"><i class="las la-tachometer-alt"></i><?php echo app('translator')->get('Dashboard'); ?></a>
                    </div>
                    <div class="header-top-item">
                        <a href="<?php echo e(route('user.logout')); ?>"><i class="las la-sign-out-alt"></i><?php echo app('translator')->get('Logout'); ?></a>
                    </div>
                <?php else: ?>
                    <div class="header-top-item ml-sm-auto">
                        <a href="<?php echo e(route('user.login')); ?>"><i class="las la-user"></i><?php echo app('translator')->get('Login'); ?></a>
                    </div>
                    <div class="header-top-item">
                        <a href="<?php echo e(route('user.register')); ?>"><i class="las la-user-plus"></i><?php echo app('translator')->get('Register'); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<header class="header">
    <div class="container">
        <div class="col-lg-3 col-md-2 col-sm-12 title-area">      
            <div class="logo">
                <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(getImage(imagePath()['logoIcon']['path'].'/logo.png')); ?>" alt="logo" style="width:140px;"></a>
            </div>
          </div>

                
        <!-- title area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
           
          <div id="nav" class="float-right">
            <div class="container clearfix">
              <ul id="jetmenu" class="jetmenu blue">
               
                <li class="active"><a href="<?php echo e(route('home')); ?>">Home</a>
                </li>

                <li><a href="<?php echo e(route('vehicles')); ?>">Vehicles</a>
                  <ul class="dropdown">
                   <?php $__currentLoopData = $cartypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="/cartype-page/<?php echo e($cartype->car_body_type); ?>"><?php echo e($cartype->car_body_type); ?></a></li>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                  </ul>
                </li>
                          <li><a href="<?php echo e(route('user.multibooking.index')); ?>">Multi-Booking</a>
                </li>
                
                         <li><a href="<?php echo e(route('plans')); ?>">Plan</a>
                </li>
                              
                  <li><a href="<?php echo e(route('blogs')); ?>">Blog</a>
                </li>
                
                  <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('pages',[$data->slug])); ?>"><?php echo e(__($data->name)); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <li><a href="<?php echo e(route('contact')); ?>">Contact</a>
                </li>


                  <li class="py-3">
                    <select class="langSel language-select ms-3">
                        <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->code); ?>"
                                    <?php if(session('lang') == $item->code): ?> selected <?php endif; ?>><?php echo e(__($item->name)); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </li>

              </ul>
            </div>
          </div>
          <!-- nav -->
        </div>
        <!-- title area -->

      <!-- site header -->
    </div>
    <!-- end container -->
  </header>
<body>

<?php echo $__env->yieldPushContent('fbComment'); ?>

<div class="overlay"></div>
<a href="#" class="scrollToTop"><i class="las la-angle-up"></i></a>

<!-- Preloader -->

<!-- Breadcrumb section start -->
<?php if(!request()->routeIs('home')): ?>
    <?php echo $__env->make($activeTemplate.'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<!-- Breadcrumb section end -->

<?php echo $__env->yieldContent('content'); ?>


<!-- footer section start -->
<?php echo $__env->make($activeTemplate.'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- footer section end -->


<?php
    $cookie = App\Models\Frontend::where('data_keys','cookie.data')->first();
?>
<?php if(@$cookie->data_values->status && !session('cookie_accepted')): ?>
    <div class="cookie__wrapper">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <p class="txt my-2">

                    <?php echo @$cookie->data_values->description ?>

                    <a href="<?php echo e(@$cookie->data_values->link); ?>" target="_blank" class="text--base"><?php echo app('translator')->get('Read Policy'); ?></a>
                </p>
                <button class="btn btn--base btn-md my-2 acceptPolicy"><?php echo app('translator')->get('Accept'); ?></button>
            </div>
        </div>
    </div>
<?php endif; ?>

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
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/jquery-ui.min.js')); ?>"></script>
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

//Jquery
   <script src="<?php echo e(asset($activeTemplateTrue.'custom/cjs/jquery360.min.js')); ?>"></script>

<script>
    $( function() {
        $( "#start-date" ).datepicker();
        $( "#end-date" ).datepicker();
    });
</script>

<?php echo $__env->yieldPushContent('script-lib'); ?>

<?php echo $__env->yieldPushContent('script'); ?>

<?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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

</body>
</html><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/layouts/frontendm.blade.php ENDPATH**/ ?>