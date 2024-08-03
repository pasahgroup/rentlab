<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ $general->sitename(__($pageTitle)) }}</title>
    @include('partials.seo')

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/owl.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/main.css')}}">

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color)}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap-fileinput.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/custom.css')}}">

    @stack('style-lib')
    @stack('style')
</head>
<body>

@stack('fbComment')

<div class="overlay"></div>
<a href="#" class="scrollToTop"><i class="las la-angle-up"></i></a>

<!-- Preloader -->
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
<!-- Preloader -->

<!-- Header Section -->
<div class="header-top py-2">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between mx--10">
            <div class="header-top-item meta-list">
                <a href="Mailto:{{ getContent('contact.content', true)->data_values->email }}"><i class="lar la-envelope"></i>{{ getContent('contact.content', true)->data_values->email }}</a>
            </div>
            <div class="d-flex flex-wrap meta-list">
                @auth
                    <div class="header-top-item ml-sm-auto">
                        <a href="{{ route('user.home') }}"><i class="las la-tachometer-alt"></i>@lang('Dashboard')</a>
                    </div>
                    <div class="header-top-item">
                        <a href="{{ route('user.logout') }}"><i class="las la-sign-out-alt"></i>@lang('Logout')</a>
                    </div>
                @else
                    <div class="header-top-item ml-sm-auto">
                        <a href="{{ route('user.login') }}"><i class="las la-user"></i>@lang('Login')</a>
                    </div>
                    <div class="header-top-item">
                        <a href="{{ route('user.register') }}"><i class="las la-user-plus"></i>@lang('Register')</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
<div class="header-bottom">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="logo"></a>
            </div>
            <ul class="menu">
                <li>
                    <a href="{{ route('home') }}">@lang('Home')</a>
                </li>
                @foreach($pages as $k => $data)
                    <li><a href="{{route('pages',[$data->slug])}}">{{__($data->name)}}</a></li>
                @endforeach
                <li><a href="{{ route('vehicles') }}">@lang('Vehicles')</a></li>
                <li><a href="{{ route('plans') }}">@lang('Plan')</a></li>
                <li><a href="{{ route('blogs') }}">@lang('Blog')</a></li>
                <li><a href="{{ route('contact') }}">@lang('Contact')</a></li>
                <li class="py-3">
                    <select class="langSel language-select ms-3">
                        @foreach($language as $item)
                            <option value="{{$item->code}}"
                                    @if(session('lang') == $item->code) selected @endif>{{ __($item->name) }}</option>
                        @endforeach
                    </select>
                </li>
            </ul>
            <div class="header-bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
<!-- Header Section -->

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

</body>
</html>
