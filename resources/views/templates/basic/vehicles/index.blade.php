@extends($activeTemplate.'layouts.frontend')
@section('content')
   <div class="search-section pt-120 pb-120 bg--section position-relative overflow-hidden">
        <div class="shape right-side">@lang('Rent')</div>
        <div class="shape">@lang('Vehicles')</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <aside class="category-sidebar">
                        <br>

                        <div class="widget border--dashed" style="margin-top:70px">

                              <div class="d-flex justify-content-between">
                                  <strong class="title border-0 pb-0 mb-0">@lang('---Filter Vehicles---')</strong>
                                  <div class="close-sidebar"><i class="las la-times"></i></div>
                              </div>

                          <label for="stat-dae" class="form--label">
                            <strong class="title">  <i class="las la-car-side"></i> @lang('Search by Name')</strong>
                          </label>
                            <div class="widget-body">
                                <form action="{{ route('vehicle.search') }}" method="get">
                                    <div class="input-group">
                                        <input type="text" name="name" value="{{ @request()->name }}" class="form-control form--control" placeholder="@lang('Vehicle Name')" id="search" required>
                                        <button class="input-group-text cmn--btn" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="widget border--dashed">
                          <label for="stat-dae" class="form--label">
                              <strong class="title">  <i class="las la-dollar-sign"></i> @lang('Filter by Price')</strong>
                          </label>
                            <div class="widget-body">
                              <form action="{{ route('vehicle.search') }}" method="get" class="priceForm">
                                  <input type="hidden" value="{{ @request()->min_price }}" class="min_price" name="min_price" required>
                                    <div class="input-group">
  <input type="text" value="{{ @request()->max_price }}" class="form-control max_price" name="max_price" placeholder="@lang('price')" required>
                                        <button class="input-group-text cmn--btn" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="widget border--dashed">
                          <label for="stat-dae" class="form--label">
                              <strong class="title">  <i class="las la-dollar-sign"></i> @lang('Filter by Car body')</strong>
                          </label>
                            <div class="widget-body">
                              <form action="{{ route('vehicle.search') }}" method="get" class="priceForm">
                                    <div class="input-group">
                                      <select name="brand" id="car-type" class="form-control form--control" required="" style="background-color:#809f75">
                                          <option value="">@lang('--Select Car Body--')</option>
                                          @forelse($carBodies as $carbody)
                                              <option value="{{ $carbody->car_body_type_id }}">{{ __(@$carbody->car_body_type) }}</option>
                                          @empty
                                          @endforelse
                                      </select>
                                        <button class="input-group-text cmn--btn" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="widget border--dashed">
                          <label for="stat-dae" class="form--label">
                              <strong class="title">  <i class="las la-dollar-sign"></i> @lang('Filter by Car Tag')</strong>
                          </label>
                            <div class="widget-body">
                              <form action="{{ route('vehicle.search') }}" method="get" class="priceForm">
                                    <div class="input-group">

                                      <select name="brand" id="car-type" class="form-control form--control" required="" style="background-color:#809f75">
                                          <option value="">@lang('--Select Car Tag--')</option>
                                          @forelse($carTags as $cartag)
                                              <option value="{{ $cartag->tag_id }}">{{ __(@$cartag->tag) }}</option>
                                          @empty
                                          @endforelse
                                      </select>
                                        <button class="input-group-text cmn--btn" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-10">
                    <div class="filter-in d-lg-none" style="margin-top:-80px">
                        <i class="las la-filter"></i>
                    </div>
                    <div class="book__wrapper bg--body border--dashed mb-4">
                        <form class="book--form row gx-3 gy-4 g-md-4" action="{{ route('vehicle.search') }}" method="get">
                            <div class="col-md-3 col-sm-4">
                                <div class="form-group">
                                    <label for="car-type" class="form--label">
                                        <i class="las la-car-side"></i> @lang('--Select Brand--')
                                    </label>
                                    <select name="brand" id="car-type" class="form-control form--control">
                                        <option value="">@lang('--Select Option--')</option>
                                        @forelse($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ __(@$brand->name) }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="form-group">
                                    <label for="car-type" class="form--label">
                                        <i class="las la-car-side"></i> @lang('--Select Model--')
                                    </label>
                                    <select name="brand" id="car-type" class="form-control form--control">
                                        <option value="">@lang('--Select Option--')</option>
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
                                        <i class="las la-chair"></i> @lang('--Number Of Seats--')
                                    </label>
                                    <select name="seats" id="pick-point" class="form-control form--control">
                                        <option value="">@lang('--Select Option--')</option>
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
                    <div class="row g-4">

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
{!! $vehicles->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        (function ($) {
            "use strict";

            $('.min_price').keypress(function (e) {
                if (e.which == 13) {
                    $('.priceForm').submit();
                    return false;
                }
            });

            $('.max_price').keypress(function (e) {
                if (e.which == 13) {
                    $('.priceForm').submit();
                    return false;
                }
            });
        })(jQuery);
    </script>
@endpush
