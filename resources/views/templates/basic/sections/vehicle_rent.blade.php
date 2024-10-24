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
                            <h5 class="title">
                                <label for="search">@lang('Search By Name')</label>
                            </h5>
                            
                            <div class="widget-body">
                                <form action="{{ route('vehicle.search') }}" method="get">
                                    <div class="input-group">
                                        <input type="text" name="name" value="{{ @request()->name }}" class="form-control form--control" placeholder="@lang('Vehicle Name')" id="search">
                                        <button class="input-group-text cmn--btn" type="submit"><i class="las la-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        
                           <div class="widget-body">
                              <h5 class="title"></h5>
                              <h5 class="title">@lang('Filter by Body Type')</h5>
                                <ul class="category-link">
                                       <li>
                                            <a href="/cartype-page/Search By Body Type"><span>Car Body Type</span><span></span></a>
                                            <a href="/cartag-page/Search By Car Tag"><span>Car Tag</span><span></span></a>
                                                                    </ul>
                            </div>

                        </div>
                        <div class="widget border--dashed">
                            <h5 class="title">@lang('Filter by Price')</h5>
                            <div class="widget-body">
                                <form action="{{ route('vehicle.search') }}" method="get" class="priceForm">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <label for="srt-date" class="form--label">
                                                <i class="las la-dollar-sign"></i> @lang('Min Price')
                                            </label>
                                            <input type="text" value="{{ @request()->min_price }}" class="form-control form--control min_price" name="min_price" placeholder="@lang('Min Price')">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="stat-dae" class="form--label">
                                                <i class="las la-dollar-sign"></i> @lang('Max Price')
                                            </label>
                                            <input type="text" value="{{ @request()->max_price }}" class="form-control form--control max_price" name="max_price" placeholder="@lang('Max Price')">
                                        </div>
                                    </div>
                                     <div class="car__filter__btn" style="margin-top:20px">
                                   <button class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit">@lang('Search')</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget border--dashed">
                            <h5 class="title">@lang('Filter by Brand')</h5>
                            <div class="widget-body">
                                <ul class="category-link">

                                    @forelse($brands as $brand)
                                        <li>
                                            <a href="{{ route('vehicle.brand', [$brand->id, slug($brand->name)]) }}"><span>{{ __(@$brand->name) }}</span><span>({{ @$brand->vehicles_count }})</span></a>
                                        </li>
                                    @empty
                                    @endforelse

                                </ul>
                            </div>
                        </div>
                        <div class="widget border--dashed">
                            <h5 class="title">@lang('Filter by Vehicle Seating')</h5>
                            <div class="widget-body">
                                <ul class="category-link">

                                    @forelse($seats as $seat)
                                        <li>
                                            <a href="{{ route('vehicle.seater', $seat->id) }}"><span>{{ __(@$seat->number) }} @lang('Seater')</span><span>({{ @$seat->vehicles_count }})</span></a>
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
                        <form class="book--form row gx-3 gy-4 g-md-4" action="{{ route('vehicle.search') }}" method="get">
                            <div class="col-md-3 col-sm-4">
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
                                    <button class="cmn--btn form--control bg--base w-100 justify-content-center" type="submit">@lang('Search')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row g-4 border--dashed">

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
                                            <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}">{{ __(@$vehicle->model) }}</a>
                                        </h6>
                                        <div class="price-area">
                                            <h5 class="item">{{ $general->cur_sym }}{{ showAmount($vehicle->price) }} <sub>/@lang('day')</sub></h5>
                                        </div>
                                        <ul class="d-flex car-info">
                                            <li class="pr-3"><i class="las la-car"></i><span class="font-mini">{{ __(@$vehicle->name) }}</span></li>
                                            <li class="pr-3"><i class="las la-tachometer-alt"></i><span class="font-mini">{{ __(@$vehicle->transmission) }}</span></li>
                                            <li class="pr-3"><i class="las la-gas-pump"></i><span class="font-mini">{{ __(@$vehicle->fuel_type) }}</span></li>
                                        </ul>
                                        

<div class="row" style="margin-top:10px">

                                <div class="col-lg-6 col-md-4">
                                          <div class="car__item__price">
                                        <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit" style="background-color:brwon">@lang('More Details')</a>
                                    </div>
                                </div>

                                   <div class="col-lg-6 col-md-4">
                                      <div class="car__item__price">

                                           <div class="btn__grp">              
                                             @auth
                             {{--   @if($vehicle->booked())
                                    <a href="javascript:void(0)" class="cmn--btn">@lang('Booked')</a>
                                @else 
                                    
                                @endif --}}

                              

                                 <a href="{{ route('vehicle.booking', [$vehicle->id, slug($vehicle->name)]) }}" class="booking-btn">@lang('Book Now')</a>
                            @else
                                <a href="{{ route('user.login') }}" class="booking-btn">@lang('Book Now')</a>
                            @endauth
                        </div>


                                    </div>
                                </div>
                               </div> 



                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>