@extends($activeTemplate.'layouts.frontend')
@section('content')
<style type="text/css">
    pp {
    color:#fff; /* Sets the text color of paragraphs to blue */
}
</style>
<div class="row" style="padding-left:2%;padding-left:2%">
    <div class="col-9">
    <div class="header-carousel" id="section1">
           <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        @for($i=0;$i<10;$i++)
    <li data-bs-target="#myCarousel" data-bs-slide-to="{{$i}}"></li>        @endfor
    </ol>

    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$metaFirstVehicle->images[0], imagePath()['vehicles']['size']) }}" class="img-fluid w-100" alt="First slide"/>
                        <div class="carousel-caption">
                            <div class="container py-4">
                                <div class="row g-5">
                                    <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
{{--
                                        <div class="bg-secondary rounded p-5">
                                            <h4 class="text-white">Book Your Ride2</h4>
                <form class="book--form row gx-3 gy-4 g-md-4" method="post" action="{{ route('vehicle.booking.confirm',1) }}">
                            @csrf
                                                <div class="row g-3">
                                                    <div class="col-12">
                    <select class="form-select" aria-label="Default select example">
                         <option selected>--select car model--</option>
                  <option value="1">VW Golf VII</option>
            <option value="2">Audi A1 S-Line</option>
            <option value="3">Toyota Camry</option>
            <option value="4">BMW 320 ModernLine</option>
                                                        </select>
                                                    </div>
                                <div class="col-6">
                            <div class="input-group">
                <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                <span class="fas fa-map-marker-alt"></span>
                <span class="ms-1">Pick Up Point</span>
                                                </div>
<input class="form-control" type="text" placeholder="Enter a City or Airport" aria-label="Enter a City or Airport">
                                                        </div>
                                                    </div>

                                                      <div class="col-6">
                            <div class="input-group">
                <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                <span class="fas fa-map-marker-alt"></span>
                <span class="ms-1">Drop of Point</span>
                                                </div>
<input class="form-control" type="text" placeholder="Enter a City or Airport" aria-label="Enter a City or Airport">
                                                        </div>
                                                    </div>

                                                      <div class="col-12">
                            <div class="input-group">
                <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                <span class="fas fa-map-marker-alt"></span>
                <span class="ms-1">@lang('Number of Car')</span>
                                                </div>
<input class="form-control" type="number" aria-label="Enter a City or Airport" name="no_car" id="no_car" value="1" min="1" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="input-group">
                         <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                     <span class="fas fa-calendar-alt"></span><span class="ms-1">From Date</span>
                                                 </div>
                        <input class="form-control" type="date" name="pick_time" id='dateAndTimePicker' class="form-control form--control pick_time" required>

                    </div>
                                                    </div>
                                                    <div class="col-6">
                                            <div class="input-group">
                                        <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                        <span class="fas fa-calendar-alt"></span><span class="ms-1">To Date</span>
                                                            </div>
                                        <input class="form-control" type="date">

                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                         <button href="" class="btn btn-primary rounded-pill d-flex justify-content-center btn-light w-100 py-2" style="margin-bottom:0px;">Book</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        --}}
                                    </div>
                                    <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">


                                        <div class="text-start">
                              <div class="rounded">
                                    <strong class="text-white">{{$metaFirstVehicle->model}}({{$metaFirstVehicle->car_body_type}})</strong>
                                    <hr>
                                    <ul class="#">
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Transmission:   <strong>{{$metaFirstVehicle->transmission}}</strong></li>
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Number of Doors:  <strong>{{$metaFirstVehicle->doors}}</strong></li>
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Fuel:  <strong>{{$metaFirstVehicle->fuel_type}}</strong></li>
                                        <li class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i>Details:  <strong>{{$metaFirstVehicle->details}}</strong></li>
                                    </ul>
                                    </div>
                                    <div class="mb-2">
                                    </div>
                                       <a href="{{ route('vehicle.details', [$metaFirstVehicle->id, slug($metaFirstVehicle->name)]) }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-2 px-4" style="margin-bottom:0px;">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>


         @foreach ($metaVehicles as $indexKey => $vehicle)
        <div class="carousel-item">
            <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size']) }}" class="img-fluid w-100" alt="First slide"/>
                        <div class="carousel-caption">
                            <div class="container py-4">
                                <div class="row g-5">

                                    <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
    {{--
                                        <div class="bg-secondary rounded p-5">
                                            <h4 class="text-white">Book Your Ride</h4>

    <form class="book--form row gx-3 gy-4 g-md-4" method="post" action="{{ route('vehicle.booking.confirm',1) }}">
                            @csrf
                                                <div class="row g-3">
                                                    <div class="col-12">
                    <select class="form-select" aria-label="Default select example">
                         <option selected>Select Your Car type</option>
                  <option value="1">VW Golf VII</option>
            <option value="2">Audi A1 S-Line</option>
            <option value="3">Toyota Camry</option>
            <option value="4">BMW 320 ModernLine</option>
                                                        </select>
                                                    </div>
                                <div class="col-6">
                            <div class="input-group">
                <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                <span class="fas fa-map-marker-alt"></span>
                <span class="ms-1">Pick Up Point</span>
                                                </div>
<input class="form-control" type="text" placeholder="Enter a City or Airport" aria-label="Enter a City or Airport">
                                                        </div>
                                                    </div>

                                                      <div class="col-6">
                            <div class="input-group">
                <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                <span class="fas fa-map-marker-alt"></span>
                <span class="ms-1">Drop of Point</span>
                                                </div>
<input class="form-control" type="text" placeholder="Enter a City or Airport" aria-label="Enter a City or Airport">
                                                        </div>
                                                    </div>

                                                      <div class="col-12">
                            <div class="input-group">
                <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                <span class="fas fa-map-marker-alt"></span>
                <span class="ms-1">@lang('Number of Car')</span>
                                                </div>
<input class="form-control" type="number" aria-label="Enter a City or Airport" name="no_car" id="no_car" value="1" min="1" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="input-group">
                         <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                     <span class="fas fa-calendar-alt"></span><span class="ms-1">From Date</span>
                                                 </div>
                        <input class="form-control" type="date" name="pick_time" id='dateAndTimePicker' class="form-control form--control pick_time" required>

                    </div>
                                                    </div>
                                                    <div class="col-6">
                                            <div class="input-group">
                                        <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                        <span class="fas fa-calendar-alt"></span><span class="ms-1">To Date</span>
                                                            </div>
                                        <input class="form-control" type="date">

                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                    <button href="" class="btn btn-primary rounded-pill d-flex justify-content-center btn-light w-100 py-2" style="margin-bottom:0px;">Book</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                            --}}
                                    </div>

                                    <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                    <div class="text-start">
                            <div class="rounded">
                                    <strong class="text-white">{{$vehicle->model}}({{$vehicle->car_body_type}})</strong>
                                    <hr>
                                    <ul class="#">
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Transmission:   <strong>{{$vehicle->transmission}}</strong></li>
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Number of Doors:  <strong>{{$vehicle->doors}}</strong></li>
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i>Fuel:  <strong>{{$vehicle->fuel_type}}</strong></li>
                                        <li class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i>Details:  <strong>{{$vehicle->details}}</strong></li>
                                    </ul>
                                  </div>
                                  <div class="mb-2">
                                  </div>
                                     <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-2 px-4" style="margin-bottom:0px;">Book</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
        </div>
         @endforeach
    </div>

    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
</div>
</div>
    <div class="col-6">
      TEsg
    </div>
  </div>

        <!-- Features Start -->
        <div class="container-fluid feature py-5" id="section2">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Cental <span class="text-primary">Features</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-xl-4">
                        <div class="row gy-4 gx-0">
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <span class="fa fa-trophy fa-2x"></span>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-3">First Class services</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, in illum aperiam ullam magni eligendi?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <span class="fa fa-road fa-2x"></span>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-3">24/7 road assistance</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, in illum aperiam ullam magni eligendi?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="../../frontendp/img/features-img.png" class="img-fluid w-100" style="object-fit: cover;" alt="Img">
                    </div>
                    <div class="col-xl-4">
                        <div class="row gy-4 gx-0">
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="feature-item justify-content-end">
                                    <div class="text-end me-4">
                                        <h5 class="mb-3">Quality at Minimum</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, in illum aperiam ullam magni eligendi?</p>
                                    </div>
                                    <div class="feature-icon">
                                        <span class="fa fa-tag fa-2x"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item justify-content-end">
                                    <div class="text-end me-4">
                                        <h5 class="mb-3">Free Pick-Up & Drop-Off</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, in illum aperiam ullam magni eligendi?</p>
                                    </div>
                                    <div class="feature-icon">
                                        <span class="fa fa-map-pin fa-2x"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


 <!-- Car categories Start -->
        <div class="container categories pb-5" id="section3">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Vehicle <span class="text-primary">Categories</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
      <div class="row">
@forelse($vehicles as $vehicle)
                     <div class="col-md-3">
                    <div class="categories-item">
                        <div class="rent__item">
                            <div class="rent__thumb" style="background-color:#9ca494">
                                        <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}">
                                            <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size']) }}" class="first-look" alt="rent-vehicle">
                                            <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[1], imagePath()['vehicles']['size']) }}" class="hover-look" alt="rent-vehicle">
                                        </a>
                                    </div>
                            <div class="categories-content rounded-bottom p-4 text-center" style="margin:-22px">
                                <strong>{{ __(@$vehicle->model) }} ({{ __(@$vehicle->car_model_no?? 1) }})</strong>
                                   <div class="rent__content text-center mt-n1">
                                        <ul class="d-flex car-info text-center">
                                            <li class="pr-3 text-center"><i class="fas fa-money-check"></i>
                                                <span class="">{{ showAmount($vehicle->price) }}({{ $general->cur_sym }}) <sub>/@lang('day')</span>
                                            </li>
                                        </ul>
                                </div>
                                <br>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">{{ __(@$vehicle->seat) }} Seat</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">{{ __(@$vehicle->transmission) }}</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="las la-gas-pump"></i> <span class="text-body ms-1">{{ __(@$vehicle->fuel_type) }}</span>
                                    </div>
                                </div>
                            </div>
                 <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-2 px-4" style="margin-bottom:0px;">Book</a>

                        </div>
                    </div>
                </div>

                        @empty
                        @endforelse
                        {{--
                        {!! $vehicles->links() !!}
                        --}}
                        <marquee style="color:#03153e;float: right">Book car with Rhond's Company Ltd</marquee>
                    </div>
                    <div>
                    <h3 class="position-relative mx-xl-5"><span class="bg-secondary pr-3 section-heading wow fadeInUp float-right">

   <a class="btn-transparent" href="/vehicle/search" target="_blank"  style="color:#b76b0b;float: right">View More vehicles <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                         </a>
  </span></h3>
</div>

        </div>

        <!-- Fact Counter -->
        <div class="container-fluid counter bg-secondary py-5" id="section6">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-thumbs-up fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">829</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Happy Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-car-alt fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">56</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Number of Cars</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-building fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">127</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Car Center</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-clock fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">589</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Total kilometers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Counter -->

        <!-- Services Start -->
        <div class="container-fluid service py-5" id="section6">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Cental <span class="text-primary">Services</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-phone-alt fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Phone Reservation</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-money-bill-alt fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Special Rates</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-road fa-2x"></i>
                            </div>
                            <h5 class="mb-3">One Way Rental</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-umbrella fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Life Insurance</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-building fa-2x"></i>
                            </div>
                            <h5 class="mb-3">City to City</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-car-alt fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Free Rides</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->



        <!-- Car Steps Start -->
        <div class="container-fluid steps py-5" id="section7">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize text-white mb-3">Cental<span class="text-primary"> Process</span></h1>
                    <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="steps-item p-4 mb-4">
                            <h4>Come In Contact</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                            <div class="setps-number">01.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="steps-item p-4 mb-4">
                            <h4>Choose A Car</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                            <div class="setps-number">02.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="steps-item p-4 mb-4">
                            <h4>Enjoy Driving</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                            <div class="setps-number">03.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Car Steps End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5" id="section8">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Cental<span class="text-primary"> Blog & News</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="../../frontendp/img/blog-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">30 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">Rental Cars how to check driving fines?</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="">Read More  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="../../frontendp/img/blog-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">25 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">Rental cost of sport and other cars</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="">Read More  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="../../frontendp/img/blog-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">27 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">Document required for car rental</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="">Read More  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Banner Start -->
        <div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s" id="section8">
            <div class="container pb-5">
                <div class="banner-item rounded">
                    <img src="../../frontendp/img/banner-1.jpg" class="img-fluid rounded w-100" alt="">
                    <div class="banner-content">
                        <h2 class="text-primary">Rent Your Car</h2>
                        <h1 class="text-white">Interested in Renting?</h1>
                        <p class="text-white">Don't hesitate and send us a message.</p>
                        <div class="banner-btn">
                            <a href="#" class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">WhatchApp</a>
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Team Start -->
        <div class="container-fluid team pb-5" id="section9">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Customer<span class="text-primary"> Suport</span> Center</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="../../frontendp/img/team-1.jpg" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                                <h4>MARTIN DOE</h4>
                                <p>Profession</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="../../frontendp/img/team-2.jpg" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                                <h4>MARTIN DOE</h4>
                                <p>Profession</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="../../frontendp/img/team-3.jpg" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                                <h4>MARTIN DOE</h4>
                                <p>Profession</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="../../frontendp/img/team-4.jpg" class="img-fluid rounded w-100" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                                <h4>MARTIN DOE</h4>
                                <p>Profession</p>
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->





        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5" id="section10">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Our Clients<span class="text-primary"> Riviews</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="../../frontendp/img/testimonial-1.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="../../frontendp/img/testimonial-2.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="../../frontendp/img/testimonial-3.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    <script type="text/javascript">
function scrollToNextSection() {
  const currentSection = document.activeElement.closest('section');
  const nextSection = currentSection.nextElementSibling;

  if (nextSection) {
    nextSection.scrollIntoView();
  }
}

    </script>
             </body>
@endsection
@push('style')
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/datepicker.min.css')}}">
@endpush

@push('script')
    <script src="{{asset($activeTemplateTrue.'js/datepicker.min.js')}}"></script>
    <script src="{{asset($activeTemplateTrue.'js/datepicker.en.js')}}"></script>
    <script>
        // date and time picker
        $('#dateAndTimePicker').datepicker({
            timepicker: true,
            language: 'en',
            onSelect: function (fd, d, picker) {
                var pick_time = fd;
                var price = parseFloat("{{ $vehicle->price }}");
                 $('.total_days').text(1);
                 var no_car = $('#no_car').val();


                if (pick_time){
                    $('#dateAndTimePicker2').removeAttr('disabled');
                }else{
                    $('#dateAndTimePicker2').attr('disabled', 'disabled');

                    $('.total_amount').text(price);
                    $('.total_days').text(1);
                }


                $('#dateAndTimePicker2').datepicker({
                    timepicker: true,
                    language: 'en',
                    onSelect: function (fd, d, picker) {
                        var drop_time = fd;

                        const date1 = new Date(pick_time);
                        const date2 = new Date(drop_time);
                        const diffTime = Math.abs(date2 - date1);
                        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) +1;


                           $("#no_car").on('change keydown paste input', function(){
                     no_car = $('#no_car').val();
 $('.total_amount').text(price*diffDays*no_car);

                    //alert(no_car);
});


if(no_car>0)
{
   $('.total_amount').text(price*diffDays*no_car);
   $('.total_days').text(diffDays);

}else{
     alert('Car number is Empty');
}



                    }
                })
            }
        })
    </script>
@endpush
