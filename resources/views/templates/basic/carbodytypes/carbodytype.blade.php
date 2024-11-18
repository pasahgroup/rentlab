@extends($activeTemplate.'layoutm.frontendm')
@section('content')
    @php
        $banners = getContent('banner.element');

        $brands = \App\Models\Brand::active()->orderBy('name')->get();
        $seats = \App\Models\Seater::active()->orderBy('number')->get();
    @endphp
    <!-- Banner Section -->

  <div class="search-section pt-120 pb-120 bg--section position-relative overflow-hidden">
        <div class="shape right-side">@lang('Rent')</div>
        <div class="shape">@lang('Vehicles')</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <aside class="category-sidebar">
                        <div class="widget d-lg-none border--dashed">
                            <div class="d-flex justify-content-between">
                                <h5 class="title border-0 pb-0 mb-0">@lang('Filter Vehicles')</h5>
                                <div class="close-sidebar"><i class="las la-times"></i></div>
                            </div>
                        </div>
                       
                        <div class="widget border--dashed">
                            <h5 class="title">@lang('Filter by Car Body Type')</h5>
                            <div class="widget-body">
                                <ul class="category-link">

                                    @forelse($cartypes as $cartype)
                                        <li>
                                            <a href="/cartype-page/{{$cartype->car_body_type}}"><span>{{$cartype->car_body_type}}</span><span>({{$metaVehicles->where('car_body_type',$cartype->car_body_type)->count()}})</span></a>
                                        </li>
                                   
                                    @empty
                                    @endforelse

                                </ul>
                            </div>
                        </div>                    
                    </aside>
                </div>
                <div class="col-lg-10">
                    <div class="filter-in d-lg-none">
                        <i class="las la-filter"></i>
                    </div>
                    <div class="book__wrapper bg--body border--dashed mb-4">
                        <form class="book--form row gx-3 gy-4 g-md-4" action="{{ route('cartype-page.show',$id) }}" method="get">
                            <div class="col-md-3 col-sm-4">

                                 <!-- <input type="text" name="carTag" id="carTag" value="{{$id}}"> -->
                                <div class="form-group">
                                    <label for="car-type" class="form--label">
                                        <i class="las la-car-side"></i> @lang('Select Model')
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
                            <div class="col-md-2 col-sm-4">
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
                            <div class="col-md-1 col-sm-3">
                                <div class="form-group">
                                    <label class="form--label d-none d-sm-block">&nbsp;</label>
                                    <button class="cmn--btn form--control bg--base w-100 justify-content-center" id="carType" value="carType" name="carType" type="submit">@lang('Search')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row g-4">

                        @forelse($vehicles as $vehicle) 
                            <div class="col-md-3">
                                <div class="rent__item">
                                    <div class="rent__thumb">
                                        <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}">
                                            <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size']) }}" class="first-look" alt="rent-vehicle">
                                            <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[1], imagePath()['vehicles']['size']) }}" class="hover-look" alt="rent-vehicle">
                                        </a>
                                    </div>
                                    <div class="rent__content">
                                       <h6 class="rent__title">
                                            <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}" class="las la-car"> {{ __(@$vehicle->model) }} ({{ __(@$vehicle->car_model_no?? 1) }})</a>
                                        </h6>
                                        <div class="rent__content">
                                            <h5 class="item">  {{ showAmount($vehicle->price) }}({{ $general->cur_sym }}) <sub>/@lang('day')</sub></h5>
                                        </div>

                                        <ul class="d-flex car-info">
                                            <li class="pr-3"><i class="las la-tachometer-alt"></i><span class="font-mini">{{ __(@$vehicle->transmission) }}</span></li>
                                            <li class="pr-3"><i class="las la-gas-pump"></i><span class="font-mini">{{ __(@$vehicle->fuel_type) }}</span></li>
                                        </ul>
        



                     <div class="row" style="margin-top:10px">

  <div class="col-lg-3 col-md-3 col-sm-3">
                                         
                                </div>
                                   <div class="col-lg-6 col-md-6 col-sm-6">
                                      <div class="car__item__price">

                                           <div class="btn__grp">

                                             <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}" class="cmn--btn form--control bg--base w-100 justify-content-center" style="background-color:brwon !important">@lang('Bookd')</a>
                        </div>


                                    </div>
                                </div>

                                   <div class="col-lg-3 col-md-3 col-sm-3"> 
                                </div>
                               </div> 

                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
{!! $vehicles->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


      <div class="container-fluid categories py-5">
            <div class="container-fluid py-5">
                      <div class="row">        
@forelse($vehicles as $vehicle)
                     <div class="col-md-3">
                    <div class="categories-item">
                        <div class="rent__item">
                            <div class="rent__thumb">
                                        <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}">
                                            <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[0], imagePath()['vehicles']['size']) }}" class="first-look" alt="rent-vehicle">
                                            <img src="{{ getImage(imagePath()['vehicles']['path']. '/'. @$vehicle->images[1], imagePath()['vehicles']['size']) }}" class="hover-look" alt="rent-vehicle">
                                        </a>
                                    </div>                            
                            <div class="categories-content rounded-bottom p-4">
                                <h4>{{ __(@$vehicle->model) }} ({{ __(@$vehicle->car_model_no?? 1) }})</h4>
                                   <div class="rent__content">
                                        <ul class="d-flex car-info">
                                            <li class="pr-3"><i class="las la-tachometer-alt"></i><span class="font-mini">{{ showAmount($vehicle->price) }}({{ $general->cur_sym }}) <sub>/@lang('day')</span></li>
                                        </ul>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">{{ __(@$vehicle->seat) }} Seat</span>
                                    </div>
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">{{ __(@$vehicle->transmission) }}</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1">{{ __(@$vehicle->fuel_type) }}</span>
                                    </div>
                                </div>
                 <!-- <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-3" style="background-color:brwon !important">@lang('Book')</a> -->
                 <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-2 px-4">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>


                        @empty
                        @endforelse
                    </div>
{!! $vehicles->links() !!}

            </div>
        </div>
@endsection
