<?php
    $subscribe_content = getContent('subscribe.content', true);
    $footer_content = getContent('footer.content', true);
    $contact = getContent('contact.content', true);
    $social_icons = getContent('social_icon.element', false, null, true);
    $policy_pages = getContent('policy_pages.element', false, null, true);
?>

<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> <?php echo e($general->sitename(__($pageTitle))); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Custom css -->
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'custom/css/nice-select.css')); ?>" type="text/css">
   
  

<!--CUSTOM 2 CUSTOM 2 -->
  <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

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

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/line-awesome.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/magnific-popup.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/owl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue.'css/main.css')); ?>">

    <?php echo $__env->yieldPushContent('style-lib'); ?>
    <?php echo $__env->yieldPushContent('style'); ?>
</head> 
 <body>
 <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
            <div class="container">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">                         
                            <a href="tel:+01234567890" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i> (+255)655 633 302</a>
                            <a href="mailto:mailto:info@rhonds.co.tz" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>info@rhonds.co.tz</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end float-right">
                       
                <?php $__empty_1 = true; $__currentLoopData = $social_icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <a href="<?php echo e($item->data_values->url); ?>" class="btn btn-light btn-sm-square rounded-circle me-3">
                                    <?php echo @$item->data_values->social_icon ?>
                                </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
            <div class="container">           
       <nav class="navbar navbar-expand-lg navbar-light float-left">
                    <a href="" class="navbar-brand p-0">
                                     <div class="logo gl">
                <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(getImage(imagePath()['logoIcon']['path'].'/logo.png')); ?>" alt="logo" style="width:120px;"></a>
            </div> 
                      
                    </a>

                       <!-- <div class="classy-navbar-toggler" style="float-right">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>  -->               
               
 <div class="classy-nav-container breakpoint-off">

                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">
                   

                    <div class="classy-menu" style="color:#fff">
                        <div class="classynav" style="color:#fff">
                            <ul>
 <li class="active"><a href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                                    <li><a href="<?php echo e(route('vehicles')); ?>">Vehicles</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Car Models</li>
                                            
                                               <?php $__currentLoopData = $cartypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="/cartype-page/<?php echo e($cartype->car_body_type); ?>"><?php echo e($cartype->car_body_type); ?></a></li>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                
                                        </ul>
                                                                         
                                    </div>
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
                  <li><a href="<?php echo e(route('contact')); ?>">Contact</a>
                </li>



  <!-- <li><a href="#">Account</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(route('blogs')); ?>">Blog</a></li>    
                                        <li><a href="#">Galleries (Comming soon---)</a></li>
                                        <li><a href="#">Opportunities (Comming soon---)</a></li>
                                    </ul>
                                </li> -->

  <li><a href="#" class="las la-user float-right">Account</a>
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
<a href="#" class="btn btn-primary rounded-pill py-2 px-4">Get Started</a>
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
        </div>

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
 


 <!-- Custom2 Javascript --> 
  <!-- Custom2 Javascript -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     
    <script src="../../frontendp/lib/wow/wow.min.js" type="text/javascript"></script>
<script src="../../frontendp/lib/easing/easing.min.js" type="text/javascript"></script>
<script src="../../frontendp/lib/waypoints/waypoints.min.js" type="text/javascript"></script>

<script src="../../frontendp/lib/counterup/counterup.min.js" type="text/javascript"></script>
          <script src="../../frontendp/lib/owlcarousel/owl.carousel.min.js" type="text/javascript"></script>



    <!-- Template Javascript -->
    <script src="../../frontendp/js/main.js" type="text/javascript"></script>

  
<!-- ?Custom Javascript -->

<script src="<?php echo e(asset($activeTemplateTrue.'js/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/rafcounter.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/owl.min.js')); ?>"></script>
<script src="<?php echo e(asset($activeTemplateTrue.'js/main.js')); ?>"></script>


<!-- custo jss -->

    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/bootstrap.min.js')); ?>"></script>
   
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/jquery.nice-select.min.js')); ?>"></script>
  
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/jquery-ui.min.js')); ?>"></script>
    
    
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/mixitup.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/jquery.slicknav.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue.'custom/js/owl.carousel.min.js')); ?>"></script>
  
</body>
</html><?php /**PATH C:\xampp\htdocs\rentlab\resources\views/templates/basic/layouts/frontend.blade.php ENDPATH**/ ?>