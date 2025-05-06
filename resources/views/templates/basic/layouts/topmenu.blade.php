<div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0"  style="border:1px solid #dee2e6;background-color:#f5f5f5;">          
        
        <nav class="navbar navbar-expand-lg navbar-light float-left">  
          <a href="" class="navbar-brand p-0">
                                     <div class="logo gl">
                <a href="{{ route('home') }}"><img src="{{getImage(imagePath()['logoIcon']['path'].'/logo.png')}}" alt="logo" style="width:120px;"></a>
            </div> 
                      
                    </a>
            
        </nav>  

        <nav class="navbar navbar-expand-lg navbar-light float-left">  



                                 @auth

                     <a class="nav-link" href="{{ route('user.home') }}">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <div class="badge badge-primary"><span class="menu-title">Dashboard</span></div>
            </a>

                             @endauth
                
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
  @foreach($view_brands as $brand)

                                        <li><a href="#">{{$brand->name}}</a>

                                            <ul class="dropdown" style="padding:0px">

                                              @foreach($view_vehicles as $vehicle)

  <li style="padding:0px">
    @if($vehicle->brand_id==$brand->id)
      <form action="{{ route('vehicle.search') }}" method="get" class="priceForm">
<input type="hidden" name="model" id="model" value="{{$vehicle->model}}" class="form-control form--control" required>
  <button  class="dropdown-item">{{$vehicle->model}}</button>
                                          </form>
  @endif

  </li>


                                              @endforeach

                                            </ul>
                                            </li>
                                                    @endforeach
                                                    </ul>


</li>




                            <li><a href="#">Services</a>

                                <ul class="dropdown">
              @foreach($view_services as $view_service)
              {{--
            <li><a href="web-servise/{{$view_service->service_name}}">{{$view_service->title}}</a>
              --}}

              <form action="{{ route('web-service',$view_service->service_name) }}" method="get" class="priceForm">
            <button  class="dropdown-item">{{$view_service->title}}</button>
                                                  </form>
            </li>
  @endforeach


                                </ul>
                            </li>



                                                                                <li><a href="#">Booking</a>
                                                                                  <ul class="dropdown">
                                                                                       <li><a href="{{ route('user.multibooking.index') }}">Multi-booking</a></li>
                                                                                        <li><a href="{{ route('plans') }}">Plan-booking</a></li>

                                                                                  </ul>
                                                                              </li>

{{--
                            <li><a href="#">Opportunities</a>
                                <ul class="dropdown">
                                    <li><a href="/New-Agent">Agent-Register</a></li>
                    <li><a href="/New-tourGuide">Tour Guide -Register</a></li>
                    <li><a href="/New-Partner">Partner-Register</a></li>

                                </ul>
                            </li>
                            --}}

                            <li><a href="#">Miscellaneous</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('blogs') }}">Blog</a></li>
                                    <li><a href="#">Galleries (Comming soon---)</a></li>
                                    <li><a href="#">Opportunities (Comming soon---)</a></li>
                                </ul>
                            </li>

                                <li><a href="/about">About Us</a>
                               </li>

                              <li><a href="{{ route('contact') }}">Contact</a>
                            </li>

<li>||</li>

{{--
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
--}}


<li><a href="#" class="las la-user float-right">Account:  <b class="text-white">@auth Logged in  @else Login @endauth</b></a>
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
    