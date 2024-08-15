@php
    $rent_content = getContent('vehicle_rent.content', true);
    $vehicles = \App\Models\Vehicle::active()->latest()->take(10)->with('seater')->get();
@endphp
<!-- Rental Fleet Section -->
  <!-- Car Section Begin -->
    <section class="book-section pb-120 bg--section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="car__sidebar">
                       
                        <div class="car__filter">
                           

                            <h5> @lang('Book a Car')</h5>
                           <form class="book--form row gx-3 gy-4 g-md-4" action="{{ route('vehicle.search') }}" method="get">                    
 <div class="form-group">
                            <label for="car-type" class="form--label">
                                <i class="las la-car-side"></i> @lang('Brand')
                            </label>
                            <select name="brand" id="car-type" class="form-control form--control">
                                <option value="">@lang('Select Option')</option>
                                @forelse($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ __(@$brand->name) }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>

                       <div class="form-group">
                            <label for="model" class="form--label">
                                <i class="las la-car-side"></i> @lang('Model')
                            </label>
                            <select name="model" id="model" class="form-control form--control">
                                <option value="">@lang('Select model')</option>
                                @forelse($models as $model)
                                    <option value="{{ $model->model}}">{{ __(@$model->model) }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>


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
                                <div class="form-group">
                            <label for="drop-point" class="form--label">
                                <i class="las la-street-view"></i> @lang('Model')
                            </label>
                            <input type="text" name="model" class="form-control form--control"
                                   placeholder="@lang('Sedan, SUV ...')">
                        </div>
                             <div class="form-group">
                            <label for="start-datse" class="form--label">
                                <i class="las la-dollar-sign"></i> @lang('Min Price')
                            </label>
                            <input type="text" placeholder="@lang('Min Price')" name="min_price" id="start-datse"
                                   autocomplete="off" class="form-control form--control">
                        </div>
                       
                        <div class="form-group">
                            <label for="end-date" class="form--label">
                                <i class="las la-dollar-sign"></i> @lang('Max Price')
                            </label>
                            <input type="text" placeholder="@lang('Max Price')" name="max_price" autocomplete="off"
                                   class="form-control form--control">
                        </div>
                 
                               
                                <div class="car__filter__btn">
                                   <button class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit">@lang('Search')</button>
                                </div>
                            </form>
                       
                        </div>
                    </div>
                </div>


                <div class="col-lg-10">
                    <div class="car__filter__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                                              <div class="section__header section__header__center">
            <span class="section__category">Car List</span>
            <!-- <h6 class="section__title">Car List</h6> -->
        </div>
                            </div>
                            <div class="col-lg-6 col-md-6">                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
   @foreach($vehicles as $vehicle)
                        <div class="col-lg-3 col-md-3">
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
       <div class="col-lg-6 col-md-4">
                                          <div class="car__item__price">
                                        <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit">@lang('More Details')</a>
                                    </div>
                                </div>
                                   <div class="col-lg-6 col-md-4">
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
<!-- Rental Fleet Section -->
