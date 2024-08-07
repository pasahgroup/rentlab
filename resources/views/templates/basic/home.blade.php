@extends($activeTemplate.'layouts.frontend')
@section('content')
    @php
        $banners = getContent('banner.element');

        $brands = \App\Models\Brand::active()->orderBy('name')->get();
        $seats = \App\Models\Seater::active()->orderBy('number')->get();
    @endphp
    <!-- Banner Section -->
    <div class="banner-slider owl-carousel owl-theme">

        @forelse($banners as $banner)
            <div class="banner-section">
                <div class="container">
                    <div class="banner__wrapper">
                        <div class="banner__content">
                            <span class="banner__category">{{ __(@$banner->data_values->subtitle) }}</span>
                            <h1 class="banner__title">
                                <span>{{ __(@$banner->data_values->title) }}</span>
                            </h1>
                            <p class="banner__txt">{{ __(@$banner->data_values->content) }}</p>
                            <div class="btn__grp">
                                <a href="{{ @$banner->data_values->button_1_url }}"
                                   class="cmn--btn active">{{ __(@$banner->data_values->button_1_name) }}</a>
                                <a href="{{ @$banner->data_values->button_2_url }}"
                                   class="cmn--btn">{{ __(@$banner->data_values->button_2_name) }}</a>
                            </div>
                        </div>
                        <div class="banner__thumb">
                            <img
                                src="{{ getImage('assets/images/frontend/banner/' . @$banner->data_values->background_image, '1000x586') }}"
                                alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>


<section class="clients-section pt-120 pb-120 bg--section position-relative overflow-hidden">
    <div class="shape right-side">{{ __(@$testimonial_content->data_values->stylish_text_right) }}</div>
    <div class="shape">{{ __(@$testimonial_content->data_values->stylish_text_left) }}</div>
    <div class="container">
        <div class="section__header section__header__center">
            <span class="section__category">{{ __(@$testimonial_content->data_values->sub_heading) }}</span>
            <h2 class="section__title">{{ __(@$testimonial_content->data_values->heading) }}</h2>
        </div>
        <div class="client-slider owl-theme owl-carousel">


            @forelse($banners as $item)
                           <div class="col-md-12 col-sm-12">
                <div class="client__item">
                    <div class="client__header">
                        <div class="thumb">
                            <img
                                src="{{ getImage('assets/images/frontend/testimonial/' . @$item->data_values->image, '120x120') }}"
                                alt="client">
                        </div>
                        <div class="name__area">
                            <h6 class="name text--base">{{ __(@$item->data_values->subtitle) }}</h6>
                            <span class="designation">{{ __(@$item->data_values->designation) }}</span>
                        </div>
                    </div>
                    <div class="client__content">
                        <p>{{ __(@$item->data_values->review) }}</p>
                        <div class="ratings">
                            @for($i = 1; $i <= 5; $i++)
                                                           
                                    <span><i class="lar la-star"></i></span>
                             
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse

        </div>
    </div>
</section>





    <!-- Banner Section -->

    <!-- Book Section -->
    <section class="book-section pb-120 bg--section">
        <div class="container">
            <div class="book__wrapper mt--120 bg--section">
                <h4 class="book__title">@lang('Book a Car')</h4>
                <form class="book--form row gx-3 gy-4 g-md-4" action="{{ route('vehicle.search') }}" method="get">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="car-type" class="form--label">
                                <i class="las la-car-side"></i> @lang('Select Brand')
                            </label>
                            <select name="brand" id="car-type" class="form-control form--control">
                                <option value="">@lang('Select Option')</option>
                                @forelse($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ __(@$brand->name) }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="pick-point" class="form--label">
                                <i class="las la-chair"></i> @lang('Number Of Seats')
                            </label>
                            <select name="seats" id="pick-point" class="form-control form--control">
                                <option value="">@lang('Select Option')</option>
                                @forelse($seats as $seat)
                                    <option value="{{ $seat->id }}">{{ __(@$seat->number) }} {{ __('Seater') }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="drop-point" class="form--label">
                                <i class="las la-street-view"></i> @lang('Model')
                            </label>
                            <input type="text" name="model" class="form-control form--control"
                                   placeholder="@lang('Sedan, SUV ...')">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="start-datse" class="form--label">
                                <i class="las la-dollar-sign"></i> @lang('Min Price')
                            </label>
                            <input type="text" placeholder="@lang('Min Price')" name="min_price" id="start-datse"
                                   autocomplete="off" class="form-control form--control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="end-date" class="form--label">
                                <i class="las la-dollar-sign"></i> @lang('Max Price')
                            </label>
                            <input type="text" placeholder="@lang('Max Price')" name="max_price" autocomplete="off"
                                   class="form-control form--control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form--label d-none d-sm-block">&nbsp;</label>
                            <button class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit">@lang('Search')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>




 <!-- Car Section Begin -->
    <section class="book-section pb-120 bg--section">
        <div class="container">
            <div class="row">                            
                <div class="col-lg-12">
                    <div class="car__filter__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="car__filter__option__item">
                                    <span>Car body type</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

   @foreach($vehicles as $vehicle)
                        <div class="col-lg-2 col-md-2">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size']) }}" alt="">
                                </div>
                                <div class="car__item__text">
                                    <!-- <div class="car__item__text__inner">
                                        <div class="label-date">2016</div>
                                        <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div> -->
                                    <div class="car__item__price">
                                        <a href="#" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit">@lang('Explore More')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="pagination__option">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><span class="arrow_carrot-2right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Car Section Begin -->
    <section class="book-section pb-120 bg--section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="car__sidebar">
                        <div class="car__search">
                            <h5>Car Search</h5>
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="car__filter">
                            <h5>Car Filter</h5>
                            <form action="#">
                                <select>
                                    <option data-display="Brand">Select Brand</option>
                                    <option value="">Acura</option>
                                    <option value="">Audi</option>
                                    <option value="">Bentley</option>
                                    <<option value="">BMW</option>
                                    <option value="">Bugatti</option>
                                </select>
                                <select>
                                    <option data-display="Model">Select Model</option>
                                    <option value="">Q3</option>
                                    <option value="">A4 </option>
                                    <option value="">AVENTADOR</option>
                                </select>
                                <select>
                                    <option value="">Body Style</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <select>
                                    <option value="">Condition</option>
                                    <option value="">First Hand</option>
                                    <option value="">Second Hand</option>
                                </select>
                                <select>
                                    <option value="">Transmisson</option>
                                    <option value="">Bluetooth</option>
                                    <option value="">WiFi</option>
                                </select>
                                <select>
                                    <option value="">Mileage</option>
                                    <option value="">27</option>
                                    <option value="">20</option>
                                    <option value="">15</option>
                                    <option value="">10</option>
                                </select>
                                <select>
                                    <option value="">Engine</option>
                                    <option value="">BS3</option>
                                    <option value="">BS4</option>
                                    <option value="">BS5</option>
                                    <option value="">BS6</option>
                                </select>
                                <select>
                                    <option value="">Colors</option>
                                    <option value="">Red</option>
                                    <option value="">Blue</option>
                                    <option value="">Black</option>
                                    <option value="">Yellow</option>
                                </select>
                                <div class="filter-price">
                                    <p>Price:</p>
                                    <div class="price-range-wrap">
                                        <div class="filter-price-range"></div>
                                        <div class="range-slider">
                                            <div class="price-input">
                                                <input type="text" id="filterAmount">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__filter__btn">
                                    <button type="submit" class="site-btn">Reset FIlter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9">
                    <div class="car__filter__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="car__filter__option__item">
                                    <h6>Show On Page</h6>
                                    <select>
                                        <option value="">9 Car</option>
                                        <option value="">15 Car</option>
                                        <option value="">20 Car</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="car__filter__option__item car__filter__option__item--right">
                                    <h6>Sort By</h6>
                                    <select>
                                        <option value="">Price: Highest Fist</option>
                                        <option value="">Price: Lowest Fist</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

   @foreach($vehicles as $vehicle)
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size']) }}" alt="">

                                    <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[1], imagePath()['vehicles']['size']) }}" alt="">
                                   <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[2], imagePath()['vehicles']['size']) }}" alt="">
                                   <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[3], imagePath()['vehicles']['size']) }}" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2016</div>
                                        <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
<div class="row">
       <div class="col-lg-6 col-md-6">
                                          <div class="car__item__price">
                                        <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit">@lang('More Details')</a>
                                    </div>
                                </div>
                                   <div class="col-lg-6 col-md-6">
                                      <div class="car__item__price">
                                        <a href="{{ route('vehicle.booking', [$vehicle->id, slug($vehicle->name)]) }}" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit">@lang('Book Now')</a>
                                    </div>
                                </div>

                               </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="img/cars/car-2.jpg" alt="">
                                    <img src="img/cars/car-8.jpg" alt="">
                                    <img src="img/cars/car-6.jpg" alt="">
                                    <img src="img/cars/car-4.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2020</div>
                                        <h5><a href="#">Toyota camry asv50l-jeteku</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For Sale</span>
                                        <h6>$73,900</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="img/cars/car-3.jpg" alt="">
                                    <img src="img/cars/car-8.jpg" alt="">
                                    <img src="img/cars/car-6.jpg" alt="">
                                    <img src="img/cars/car-5.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2017</div>
                                        <h5><a href="#">Bmw s1000rr 2019 m</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$299<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="img/cars/car-5.jpg" alt="">
                                    <img src="img/cars/car-8.jpg" alt="">
                                    <img src="img/cars/car-7.jpg" alt="">
                                    <img src="img/cars/car-2.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2018</div>
                                        <h5><a href="#">Audi q8 2020</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$319<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="img/cars/car-6.jpg" alt="">
                                    <img src="img/cars/car-8.jpg" alt="">
                                    <img src="img/cars/car-3.jpg" alt="">
                                    <img src="img/cars/car-1.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2016</div>
                                        <h5><a href="#">Mustang shelby gt500</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For Sale</span>
                                        <h6>$730,900</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="img/cars/car-4.jpg" alt="">
                                    <img src="img/cars/car-8.jpg" alt="">
                                    <img src="img/cars/car-2.jpg" alt="">
                                    <img src="img/cars/car-1.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2019</div>
                                        <h5><a href="#">Lamborghini huracan evo</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$319<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="img/cars/car-7.jpg" alt="">
                                    <img src="img/cars/car-2.jpg" alt="">
                                    <img src="img/cars/car-4.jpg" alt="">
                                    <img src="img/cars/car-1.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2020</div>
                                        <h5><a href="#">Lamborghini huracan evo</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For Sale</span>
                                        <h6>$120,000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="img/cars/car-8.jpg" alt="">
                                    <img src="img/cars/car-3.jpg" alt="">
                                    <img src="img/cars/car-5.jpg" alt="">
                                    <img src="img/cars/car-2.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2017</div>
                                        <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$319<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="img/cars/car-8.jpg" alt="">
                                    <img src="img/cars/car-3.jpg" alt="">
                                    <img src="img/cars/car-5.jpg" alt="">
                                    <img src="img/cars/car-2.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2020</div>
                                        <h5><a href="#">Toyota camry asv50l-jeteku</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For sale</span>
                                        <h6>$73,900</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination__option">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><span class="arrow_carrot-2right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Book Section -->
    @if($sections->secs != null)
        @foreach(json_decode($sections->secs) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif
@endsection
