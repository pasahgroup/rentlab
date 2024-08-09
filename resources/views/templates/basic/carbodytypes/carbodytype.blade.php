@extends($activeTemplate.'layouts.frontend')
@section('content')
    @php
        $banners = getContent('banner.element');

        $brands = \App\Models\Brand::active()->orderBy('name')->get();
        $seats = \App\Models\Seater::active()->orderBy('number')->get();
    @endphp
    <!-- Banner Section -->

  <!-- Car Section Begin -->
    <section class="book-section pb-120 bg--section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="car__sidebar">                      
                        <div class="car__filter">
                           
                        
                                      @foreach($cartypes as $cartype)
                                      <a href="/cartype-page/{{$cartype->car_body_type}}" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit">{{$cartype->car_body_type}}:({{$cartypes->where('car_body_type',$cartype)->count()}})</a>

                                      @endforeach
                              
                        </div>
                    </div>
                </div>


                <div class="col-lg-9">
                    <div class="car__filter__option">
                        <div class="row">
                            <div>{{$pageTitle}} List</div>
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
                                        <div class="label-date">{{ $general->cur_sym }}{{ showAmount($vehicle->price) }}<sub>/@lang('day')</sub></div>
                                        <h5><a href="#"><span>Model:</span> {{ __(@$vehicle->model) }}</a></h5>
                                      
                                          <ul class="d-flex car-info">
                                            <li class="pr-3"><i class="las la-tachometer-alt"></i><span class="font-mini">{{ __(@$vehicle->transmission) }}</span></li>
                                            <li class="pr-3"><i class="las la-gas-pump"></i><span class="font-mini">{{ __(@$vehicle->fuel_type) }}</span></li>
                                        </ul>
                                    </div>

<hr style="margin-top:1px;margin-bottom:1px;">




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

@endsection
