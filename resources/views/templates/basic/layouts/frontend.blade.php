@php
    $subscribe_content = getContent('subscribe.content', true);
    $footer_content = getContent('footer.content', true);
    $contact = getContent('contact.content', true);
    $social_icons = getContent('social_icon.element', false, null, true);
    $policy_pages = getContent('policy_pages.element', false, null, true);
@endphp

<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ $general->sitename(__($pageTitle)) }}</title>
    @include('partials.seo')


<style type="text/css">    
    .booking-btn {
  border: 0px solid #647545;
  padding: 5px 30px;
  color:#fff;
  display: block;  
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}

 .header-btn {
  border: 0px solid #647545;
  padding: 1px 2px;
  color:#fff;
  display: block;  
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}
.gr {
  float: right;
}
.gl {
  float: left;
}
</style>





    <!-- Custom css -->
   <link rel="icon" type="image/png" href="../../../mold/assets/img/favicon.png" />
 <link rel="stylesheet" href="../../../mold/assets/css/min/bootstrap.min.css" media="all">
  <link rel="stylesheet" href="../../../mold/assets/css/jqueryui.css" media="all">
  <link rel="stylesheet" href="../../../mold/vendor/animate-css/animate.css" media="all">
  <link rel="stylesheet" href="../../../mold/assets/font/iconfont/iconstyle.css" media="all">
  <link rel="stylesheet" href="../../../mold/assets/font/font-awesome/css/font-awesome.css" media="all">
  <link rel="stylesheet" href="../../../mold/assets/css/main.css" media="all" id="maincss">


<link rel="stylesheet" href="../../../assetf/style.css">
 <link href="../../../assets2/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
<link href="../../../assets2/corporate/css/style.css" rel="stylesheet">

  <!-- Custom -->
  <link href="../../../img_library/main.css" rel="stylesheet">
    <link href="../../../img_library/mform.css" rel="stylesheet">
    <link href="../../../css/mform.css" rel="stylesheet">
   
<!-- Custom css -->
 <link rel="stylesheet" href="../../../css/font621.min.css">

<link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
<link href="../../../assets2/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
<link href="../../../assets2/pages/css/animate.css" rel="stylesheet">

 <script src="../../../js/jquery361.min.js"></script>
 <script src="../../../custom/js/bootstrap.min.js"></script>


   <link rel="stylesheet" href="{{asset($activeTemplateTrue.'mold/assets/font/iconfont/iconstyle.css')}}">
     <link rel="stylesheet" href="{{asset($activeTemplateTrue.'mold/vendor/animate-css/animate.css')}}">
       <link rel="stylesheet" href="{{asset($activeTemplateTrue.'mold/assets/font/font-awesome/css/font-awesome.css')}}">
         <link rel="stylesheet" href="{{asset($activeTemplateTrue.'mold/assets/css/main.css')}}">

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/owl.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/main.css')}}">

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color)}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap-fileinput.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/custom.css')}}">


<!-- Custom2 header menu css -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'custom/ccss/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'custom/ccss/colors/blue.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'custom/ccss/bbpres.css')}}" type="text/css">

    <link href="{{asset($activeTemplateTrue.'custom/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset($activeTemplateTrue.'custom/lib/prettyphoto/css/prettyphoto.css')}}" rel="stylesheet">
  <link href="{{asset($activeTemplateTrue.'custom/lib/hover/hoverex-all.css')}}" rel="stylesheet">
  <link href="{{asset($activeTemplateTrue.'custom/lib/jetmenu/jetmenu.css')}}" rel="stylesheet">
  <link href=".{{asset($activeTemplateTrue.'custom/lib/owl-carousel/owl-carousel.css')}}" rel="stylesheet">

   <link href="{{asset($activeTemplateTrue.'custom/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

<!-- Custom css -->

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'custom/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'custom/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'custom/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'custom/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'custom/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'custom/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'custom/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'custom/css/style.css')}}" type="text/css">

<!--End of custom css -->

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script> -->

    @stack('style-lib')
    @stack('style')
</head>

<div class="container top-header-area" style="background:yellow;padding:1px">
         <div class="align-items-center px-xl-5 d-lg-flex" style="background-color:#5a715a;margin-top:0px;margin-bottom:0px;">
              <div class="col-lg-4 col-md-4">
                              <div class="logo gl">
                <a href="{{ route('home') }}"><img src="{{getImage(imagePath()['logoIcon']['path'].'/logo.png')}}" alt="logo" style="width:120px;"></a>
            </div>           

            </div>

              <div class="col-lg-5 col-md-7 float-right">
                 <div class="email-address_no float-right">
                    <a href="mailto:info@isol.com">
                      <i class="fa fa-envelope" style="color:pink;"></i><b style="color:#FDD43D;">info@rhonds.co.tz</b></a>
                       <a href="https://wa.link/z5mmcd" style="padding-left:10px">
                            <i class="fa fa-phone">
                               <b style="color:#FDD43D;">(+255)655 633 302</b> </i>
                            </a>
                </div>
            </div>

        <div class="col-lg-3 col-md-4 text-right">
             <ul class="social-icons gr" style="padding-top:5px">
                        @forelse($social_icons as $item)
                            <li class="float-right">
                                <a href="{{ $item->data_values->url }}">
                                    @php echo @$item->data_values->social_icon @endphp

                                </a>
                            </li>
                        @empty
                        @endforelse
                    </ul>
            </div>
        </div>
    </div>

           <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">
 <div class="logo">
                <!-- <a href="{{ route('home') }}"><img src="{{getImage(imagePath()['logoIcon']['path'].'/logo.png')}}" alt="logo" style="width:120px;"></a> -->
            </div>
                   

                    <div class="classy-menu" style="color:#fff">
                        <div class="classynav" style="color:#fff">
                            <ul>
 <li class="active"><a href="{{ route('home') }}">Home</a>
                </li>


                                    <li><a href="{{ route('vehicles') }}">Vehicles</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Car Models</li>
                                            
                                               @foreach($cartypes as $cartype)
                    <li><a href="/cartype-page/{{$cartype->car_body_type}}">{{$cartype->car_body_type}}</a></li>
                   @endforeach                                
                                        </ul>
                                                                         
                                    </div>
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



  <!-- <li><a href="#">Account</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('blogs') }}">Blog</a></li>    
                                        <li><a href="#">Galleries (Comming soon---)</a></li>
                                        <li><a href="#">Opportunities (Comming soon---)</a></li>
                                    </ul>
                                </li> -->



  <li><a href="#" class="las la-user float-right">Account</a>
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

    </ul>

      </div>
     </div>
       <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
 </nav>
           </div>   
 <body>

@stack('fbComment')

<div class="overlay"></div>
<a href="#" class="scrollToTop"><i class="las la-angle-up"></i></a>

<!-- Preloader -->
{{--
<div class="preloader">
    <figure class="loader">
        <div class="car">
            <span class="car-body"></span>
            <span class="wheels"></span>
        </div>
        <div class="strikes">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </figure>
</div>
--}}
<!-- Breadcrumb section start -->
@if(!request()->routeIs('home'))
    @include($activeTemplate.'partials.breadcrumb')
@endif
<!-- Breadcrumb section end -->

@yield('content')


<!-- footer section start -->
@include($activeTemplate.'partials.footer')
<!-- footer section end -->

{{--Cookie--}}
@php
    $cookie = App\Models\Frontend::where('data_keys','cookie.data')->first();
@endphp
@if(@$cookie->data_values->status && !session('cookie_accepted'))
    <div class="cookie__wrapper">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <p class="txt my-2">

                    @php echo @$cookie->data_values->description @endphp

                    <a href="{{ @$cookie->data_values->link }}" target="_blank" class="text--base">@lang('Read Policy')</a>
                </p>
                <button class="btn btn--base btn-md my-2 acceptPolicy">@lang('Accept')</button>
            </div>
        </div>
    </div>
@endif

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
    <script src="{{asset($activeTemplateTrue.'custom/js/jquery-ui.min.js')}}"></script>
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

@stack('script-lib')

@stack('script')

@include('partials.plugins')

@include('partials.notify')


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
  
</body>
</html>