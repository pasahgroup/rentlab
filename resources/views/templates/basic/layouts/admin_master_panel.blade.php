<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ $general->sitename(__($pageTitle)) }}</title>


    @include('partials.seo')
           <link href="../../../frontendp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

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

    <link rel="stylesheet"href="{{asset($activeTemplateTrue.'css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color)}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap-fileinput.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/custom.css')}}">


<!-- Custom style Libray -->

 <link rel="stylesheet" href="../../../admin_panel/assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../../admin_panel/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../../admin_panel/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../admin_panel/assets/images/favicon.ico" />

  <link rel="stylesheet" href="../../../admin_panel/assets/vendors/typicons/typicons.css" media="all">
  <link rel="stylesheet" href="../../../admin_panel/assets/vendors/css/vendor.bundle.base.css" media="all">
<!--End of Custom style Libray -->



    @stack('style-lib')
    @stack('style')
</head>
<body>


  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="#"><img src="{{getImage(imagePath()['logoIcon']['path'].'/logo.png')}}" alt="logo" style="width:100px;"></a>
          <a class="navbar-brand brand-logo-mini" href="#"><img src="../../../assets/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav me-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="../../../assets/images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Eugenia Mullins</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="typcn typcn-cog-outline text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="typcn typcn-eject text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-user-status dropdown">
              <p class="mb-0">Last login was 23 hours ago.</p>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-date dropdown">
            <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
              <h6 class="date mb-0">Today : Mar 23</h6>
              <i class="typcn typcn-calendar"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="typcn typcn-mail mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
             
<ul class="submenu">
                            <li>

                             </i>Name: {{$userff->firstname}} {{$userff->lastname}}
                              Email: <a href="Mailto:{{ getContent('contact.content', true)->data_values->email }}"></i>{{$userff->email}}</a>
                            </li>

                            <li>
                                <a href="{{route('user.deposit.history')}}">@lang('Payment History')</a>
                            </li>
                            <li>
                                <a href="{{ route('user.change.password') }}">@lang('Change Password')</a>
                            </li>
                            <li>
                                <a href="{{ route('user.profile.setting') }}">@lang('Profile Setting')</a>
                            </li>
                            <li>
                                <a href="{{ route('user.twofactor') }}">@lang('2FA Security')</a>
                            </li>
                            <li>
                                <a href="{{ route('user.logout') }}">@lang('Logout')</a>
                            </li>
                        </ul>

                      </div>
 
          </li>

          <li class="nav-item dropdown me-0">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="typcn typcn-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 fw-normal float-start dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="typcn typcn-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal">Application Error</h6>
                  <p class="fw-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="typcn typcn-cog-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal">Settings</h6>
                  <p class="fw-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="typcn typcn-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal">New user registration</h6>
                  <p class="fw-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
      <div class="navbar-links-wrapper d-flex align-items-stretch">
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-calendar-outline"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-mail"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-folder"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-document-text"></i></a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav me-lg-2">
          <li class="nav-item ms-0">
            <h4 class="mb-0"> <a class="nav-link" href="/">Website</a></h4>
          </li>
           <li class="nav-item ms-0">
            <h4 class="mb-0"> <a class="nav-link" href="/">New Booking</a></h4>
          </li>
          <li class="nav-item">
            <div class="d-flex align-items-baseline">
              <p class="mb-0">Home</p>
              <i class="typcn typcn-chevron-right"></i>
              <p class="mb-0">Main Dahboard</p>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-search d-none d-md-block me-0">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="search">
              <div class="input-group-prepend d-flex">
                <span class="input-group-text" id="search">
                  <i class="typcn typcn-zoom"></i>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    
    <div class="container-fluid page-body-wrapper">      
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
           @auth
                     <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-dashboard" aria-expanded="false" aria-controls="ui-dashboard">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-dashboard">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('user.home') }}">Dashboard</a></li>
              </ul>
            </div>
          </li> 


  <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#vehicles" aria-expanded="false" aria-controls="vehicles">
           <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">@lang('All Vehicles')</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="vehicles">
              <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('vehicles') }}">@lang('Vehicles')</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('user.vehicle.booking.log') }}">@lang('Vehicle Booking Logs')</a></li>
              </ul>
            </div>
          </li>  


            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#plans" aria-expanded="false" aria-controls="plans">
           <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">Plan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="plans">
              <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('plans') }}">@lang('All Plans')</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('user.vehicle.booking.log') }}">@lang('Plan Booking Logs')</a></li>
              </ul>
            </div>
          </li>  

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="typcn typcn-th-small-outline menu-icon"></i>
              <span class="menu-title">Support</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('ticket.open')}}">@lang('Create New')</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('ticket')}}">@lang('My Ticket')</a></li>
              </ul>
            </div>
          </li>  

         
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="typcn typcn-user-add-outline menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>                                
              </ul>
            </div>
          </li>    
                @endauth
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
   @yield('content')
   </div>
<!-- footer section start -->

@stack('script-lib')
@stack('script')
@include('partials.plugins')
@include('partials.notify')


        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>




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
</div> --}}
<!-- Preloader -->


<!-- footer section start -->
@include($activeTemplate.'partials.footer')
<!-- footer section end -->

<script src="{{asset($activeTemplateTrue.'js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset($activeTemplateTrue.'js/jquery-ui.js')}}"></script>
<!-- <script src="{{asset($activeTemplateTrue.'js/bootstrap.min.js')}}"></script> -->

<script src="{{asset($activeTemplateTrue.'js/rafcounter.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/magnific-popup.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/owl.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/main.js')}}"></script>

<script src="{{asset($activeTemplateTrue.'js/bootstrap-fileinput.js')}}"></script>
<script src="{{ asset($activeTemplateTrue.'js/jquery.validate.js') }}"></script>



<!-- Custom js library -->
 <script src="../../../admin_panel/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../../admin_panel/assets/vendors/chart.js/chart.umd.js"></script>
  <script src="../../../admin_panel/assets/js/jquery.cookie.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../../admin_panel/assets/js/off-canvas.js"></script>
  <script src="../../../admin_panel/assets/js/hoverable-collapse.js"></script>
  <script src="../../../admin_panel/assets/js/template.js"></script>
  <script src="../../../admin_panel/assets/js/settings.js"></script>
  <script src="../../../admin_panel/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../../admin_panel/assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->


@stack('script-lib')
@include('partials.notify')
@include('partials.plugins')

@stack('script')

<script>

    (function ($) {
        "use strict";
        $(".langSel").on("change", function () {
            window.location.href = "{{route('home')}}/change/" + $(this).val();
        });

    })(jQuery);

</script>


<script>
    (function ($) {
        "use strict";

        $("form").validate();
        $('form').on('submit', function () {
            if ($(this).valid()) {
                $(':submit', this).attr('disabled', 'disabled');
            }
        });

    })(jQuery);

</script>

</body>
</html>
