@php
    $subscribe_content = getContent('subscribe.content', true);
    $footer_content = getContent('footer.content', true);
    $contact = getContent('contact.content', true);
    $social_icons = getContent('social_icon.element', false, null, true);
    $policy_pages = getContent('policy_pages.element', false, null, true);
@endphp
 <script type="text/javascript" src="../js/jquery360.min.js"></script>
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap.min.css')}}">

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <title>{{ $general->sitename(__($pageTitle)) }}</title>
           @include('partials.seo')


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



    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/line-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/owl.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/main.css')}}">

           <!-- end of Custom library -->

    @stack('style-lib')
    @stack('style')
    </head>
    <body>

        <!-- Spinner Start -->
      <!--   <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->

        <div class="container-fluid">
              <div class="row bg-secondary py-1 px-xl-5">
                  <div class="col-lg-6 d-none d-lg-block">
                      <div class="d-inline-flex align-items-center h-100">
                          <a class="text-body mr-3" href="">About</a>
                          <a class="text-body mr-3" href="">Contact</a>
                          <a class="text-body mr-3" href="">Help</a>
                          <a class="text-body mr-3" href="">FAQs</a>
                      </div>
                  </div>
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
              <div class="row align-items-center bg-light py-1 px-xl-5 d-none d-lg-flex">
              <!-- <div class="row bg-secondary py-1 px-xl-5"> -->
                  <div class="col-lg-4">

                      <a href="" class="navbar-brand p-0">
                                       <div class="logo gl">
                  <a href="{{ route('home') }}"><img src="{{getImage(imagePath()['logoIcon']['path'].'/logo.png')}}" alt="logo" style="width:120px;"></a>
              </div>

                      </a>
                  </div>
                  <div class="col-lg-3 col-6 text-left">
                      <form action="">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search for products">
                              <div class="input-group-append">
                                  <span class="input-group-text bg-transparent text-primary">
                                      <i class="fa fa-search"></i>
                                  </span>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="col-lg-2 col-6 text-right">
                    <div class="d-flex align-items-center justify-content-end float-right">
            @forelse($social_icons as $item)
                            <a href="{{ $item->data_values->url }}" class="btn btn-primary btn-square mr-2">
                                @php echo @$item->data_values->social_icon @endphp
                            </a>
                    @empty
                    @endforelse
                  </div></div>

                          <div class="col-lg-3 col-6 text-right">
                      <div class="d-flex flex-wrap">
                          <a href="tel:+01234567890" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i> (+255)655 633 302</a>
                          <a href="mailto:mailto:info@rhonds.co.tz" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>info@rhonds.co.tz</a>
                      </div>

                  </div>
              </div>
          </div>
          <!-- Topbar End -->


          <!-- Navbar Start -->
          <div class="container-fluid bg-dark mb-30">
              <div class="row px-xl-5">
                  <div class="col-md-2 d-none d-lg-block">
                      <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical">
                          <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Vehicles</h6>

                                        <i class="fa fa-angle-down text-dark"></i>
                      </a>
                      <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                          <div class="navbar-nav w-100">
                              @foreach($brands as $brand)



                              <div class="nav-item dropdown dropright">


                                        <form action="{{ route('vehicle.search') }}" method="get" class="priceForm">
                                            <input type="text" name="brand" id="brand" value="{{$brand->id}}" class="form-control form--control" required>
                                  <button  class="dropdown-item"> <a class="nav-link dropdown-toggle" data-toggle="dropdown">{{$brand->name}} <i class="fa fa-angle-right float-right mt-1"></i></a>

</button>
</form>

                                                                       <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">

                                        @foreach($vehicles as $vehicle)
                                        @if($vehicle->brand_id==$brand->id)

                                          <form action="{{ route('vehicle.search') }}" method="get" class="priceForm">
                                    <input type="hidden" name="model" id="model" value="{{$vehicle->model}}" class="form-control form--control" required>
                                      <button  class="dropdown-item">{{$vehicle->model}}</button>
                                                                              </form>
                                      @endif
                                          @endforeach
                                  </div>
                              </div>

                              @endforeach
                              <!-- <a href="" class="nav-item nav-link">Shoes</a> -->
                          </div>
                      </nav>
                  </div>
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
                   <li class="active"><a href="{{ route('home') }}">Home</a>
                                  </li>




                                                                                  <li><a href="{{ route('vehicles') }}">Vehicles <i class="las la-angle"></i></a>

                                                                                      <ul class="dropdown">
                                                                                          <li class="title">Car Models</li>
                                                                                          @foreach($cartypes as $cartype)
                                                               <li><a href="/cartype-page/{{$cartype->car_body_type}}">{{$cartype->car_body_type}}</a></li>
                                                              @endforeach
                                                                                      </ul>
                                                                                  </li>


                                                    <li><a href="#">Booking</a>
                                                      <ul class="dropdown">
                                                           <li><a href="{{ route('user.multibooking.index') }}">Multi-booking</a></li>
                                                            <li><a href="{{ route('plans') }}">Plan-booking</a></li>

                                                      </ul>
                                                  </li>


                                                  <li><a href="#">Services</a>
                                                      <ul class="dropdown">
                                                            <li><a href="#">Rhonds Services (Comming soon---)</a></li>

                                                      </ul>
                                                  </li>

                                                  <li><a href="#">Miscellaneous</a>
                                                      <ul class="dropdown">
                                                          <li><a href="{{ route('blogs') }}">Blog</a></li>
                                                          <li><a href="#">Galleries (Comming soon---)</a></li>
                                                          <li><a href="#">Opportunities (Comming soon---)</a></li>
                                                      </ul>
                                                  </li>


                    @foreach($pages as $k => $data)
                                      <li><a href="{{route('pages',[$data->slug])}}">{{__($data->name)}}</a></li>
                                  @endforeach
                                    <li><a href="{{ route('contact') }}">Contact</a>
                                  </li>



                    <li><a href="#" class="las la-user float-right">Account3</a>
                                                      <ul class="dropdown">
                   @auth

                                      <li class="header-top-item meta-list">
                                  <a href="Mailto:{{ getContent('contact.content', true)->data_values->email }}"><i class="lar la-envelope"></i>{{ getContent('contact.content', true)->data_values->email }}</a>
                              </li>
                                       <li class="header-top-item ml-sm-auto">
                                          <a href="{{ route('user.home') }}"><i class="las la-tachometer-alt"></i>@lang('Dashboard')</a>
                                      </li>

                                      <li class="header-top-item">
                                          <a href="{{ route('user.logout') }}"><i class="las la-sign-out-alt"></i>@lang('Logout')</a>
                                      </li>
                                  @else
                                      <li class="header-top-item ml-sm-auto">
                                          <a href="{{ route('user.login') }}"><i class="las la-user"></i>@lang('Login')</a>
                                      </li>
                                      <li class="header-top-item">
                                          <a href="{{ route('user.register') }}"><i class="las la-user-plus"></i>@lang('Register')</a>
                                      </li>
                                  @endauth



                                                      </ul>
                                                  </li>


                                              <li><a href="#" class="las Plan-booking float-right"><strong style="color:yellow;">Language</strong></a>
                                                      <ul class="dropdown">

                                          <select class="langSel language-select ms-3">
                                          @foreach($language as $item)
                                              <option value="{{$item->code}}"
                                                      @if(session('lang') == $item->code) selected @endif>{{ __($item->name) }}</option>
                                          @endforeach
                                      </select>



                                                      </ul>
                                                  </li>
                                                  {{--
                  <a href="#" class="btn btn-primary rounded-pill py-2 px-4">View</a>
                  --}}
                      </ul>
                  </div>

                       </div>


                                                     <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                                                         <a href="" class="btn px-0">
                                                             <i class="fas fa-heart text-primary"></i>
                                                             <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                                                         </a>
                                                         <a href="" class="btn px-0 ml-3">
                                                             <i class="fas fa-shopping-cart text-primary"></i>
                                                             <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                                                         </a>
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






{{--
<div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
            <div class="container">
       <nav class="navbar navbar-expand-lg navbar-light float-left">
 <div class="classy-nav-container breakpoint-off">

                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="#">

                    <div class="classy-menu" style="color:#fff">
                        <div class="classynav" style="color:#fff">
                            <ul>
 <li class="active"><a href="{{ route('home') }}">Home</a>
                </li>


                                                                <li><a href="{{ route('vehicles') }}">Vehicles <i class="las la-angle"></i></a>

                                                                    <ul class="dropdown">
                                                                        <li class="title">Car Models</li>
                                                                        @foreach($cartypes as $cartype)
                                             <li><a href="/cartype-page/{{$cartype->car_body_type}}">{{$cartype->car_body_type}}</a></li>
                                            @endforeach
                                                                    </ul>
                                                                </li>


                                  <li><a href="#">Booking</a>
                                    <ul class="dropdown">
                                         <li><a href="{{ route('user.multibooking.index') }}">Multi-booking</a></li>
                                          <li><a href="{{ route('plans') }}">Plan-booking</a></li>

                                    </ul>
                                </li>


                                <li><a href="#">Services</a>
                                    <ul class="dropdown">
                                          <li><a href="#">Rhonds Services (Comming soon---)</a></li>

                                    </ul>
                                </li>

                                <li><a href="#">Miscellaneous</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('blogs') }}">Blog</a></li>
                                        <li><a href="#">Galleries (Comming soon---)</a></li>
                                        <li><a href="#">Opportunities (Comming soon---)</a></li>
                                    </ul>
                                </li>


  @foreach($pages as $k => $data)
                    <li><a href="{{route('pages',[$data->slug])}}">{{__($data->name)}}</a></li>
                @endforeach
                  <li><a href="{{ route('contact') }}">Contact</a>
                </li>



  <li><a href="#" class="las la-user float-right">Account4</a>
                                    <ul class="dropdown">
 @auth

                    <li class="header-top-item meta-list">
                <a href="Mailto:{{ getContent('contact.content', true)->data_values->email }}"><i class="lar la-envelope"></i>{{ getContent('contact.content', true)->data_values->email }}</a>
            </li>
                     <li class="header-top-item ml-sm-auto">
                        <a href="{{ route('user.home') }}"><i class="las la-tachometer-alt"></i>@lang('Dashboard')</a>
                    </li>

                    <li class="header-top-item">
                        <a href="{{ route('user.logout') }}"><i class="las la-sign-out-alt"></i>@lang('Logout')</a>
                    </li>
                @else
                    <li class="header-top-item ml-sm-auto">
                        <a href="{{ route('user.login') }}"><i class="las la-user"></i>@lang('Login')</a>
                    </li>
                    <li class="header-top-item">
                        <a href="{{ route('user.register') }}"><i class="las la-user-plus"></i>@lang('Register')</a>
                    </li>
                @endauth



                                    </ul>
                                </li>


                            <li><a href="#" class="las Plan-booking float-right"><strong style="color:yellow;">Language</strong></a>
                                    <ul class="dropdown">

                        <select class="langSel language-select ms-3">
                        @foreach($language as $item)
                            <option value="{{$item->code}}"
                                    @if(session('lang') == $item->code) selected @endif>{{ __($item->name) }}</option>
                        @endforeach
                    </select>



                                    </ul>
                                </li>
                                {{--
<a href="#" class="btn btn-primary rounded-pill py-2 px-4">View</a>
--}}
    </ul>
</div>

     </div>

 </nav>




                    </div>
                </nav>

            </div>
        </div>

        @stack('fbComment')
   @if(!request()->routeIs('home'))
    @include($activeTemplate.'partials.breadcrumb')
@endif
   @yield('content')

<!-- footer section start -->
@include($activeTemplate.'partials.footer')

@stack('script-lib')
@stack('script')
@include('partials.plugins')
@include('partials.notify')

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
            window.location.href = "{{route('home')}}/change/"+$(this).val() ;
        });

        //Cookie
        $(document).on('click', '.acceptPolicy', function () {
            $.ajax({
                url: "{{ route('cookie.accept') }}",
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
                url:'{{ route('subscribe') }}',
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
<script src="{{asset($activeTemplateTrue.'js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/jquery-ui.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/bootstrap.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/rafcounter.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/magnific-popup.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/owl.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/main.js')}}"></script>


<!-- custo jss -->
  <script src="{{asset($activeTemplateTrue.'custom/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset($activeTemplateTrue.'custom/js/bootstrap.min.js')}}"></script>

    <script src="{{asset($activeTemplateTrue.'custom/js/jquery.nice-select.min.js')}}"></script>


    <script src="{{asset($activeTemplateTrue.'custom/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset($activeTemplateTrue.'custom/js/mixitup.min.js')}}"></script>

    <script src="{{asset($activeTemplateTrue.'custom/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset($activeTemplateTrue.'custom/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset($activeTemplateTrue.'custom/js/main.js')}}"></script>

<!-- custom2 -->
  <!-- JavaScript Libraries -->
  <script src="{{asset($activeTemplateTrue.'custom/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset($activeTemplateTrue.'custom/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset($activeTemplateTrue.'custom/lib/jetmenu/jetmenu.js')}}"></script>
  <script src="{{asset($activeTemplateTrue.'custom/cjs/main.js')}}"></script>

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
            window.location.href = "{{route('home')}}/change/"+$(this).val() ;
        });

        //Cookie
        $(document).on('click', '.acceptPolicy', function () {
            $.ajax({
                url: "{{ route('cookie.accept') }}",
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
                url:'{{ route('subscribe') }}',
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
