@php
    $rent_content = getContent('vehicle_rent.content', true);
    $vehicles = \App\Models\Vehicle::active()->latest()->take(8)->with('seater')->get();
@endphp
<!-- Rental Fleet Section -->
<section class="rental-section pb-120 pt-120 bg--section position-relative overflow-hidden">
    <div class="shape right-side">{{ __(@$rent_content->data_values->stylish_text) }}</div>
    <div class="container position-relative">
        <div class="section__header section__header__center">
            <span class="section__category">{{ __(@$rent_content->data_values->sub_heading) }}</span>
            <h2 class="section__title">{{ __(@$rent_content->data_values->heading) }}</h2>
        </div>
        <div class="sync1 owl-theme owl-carousel">
            @forelse($vehicles as $vehicle)
                <div class="car__rental">
                    <div class="car__rental-thumb">
                        <img src="{{ getImage(imagePath()['vehicles']['path'].'/'.$vehicle->images[0], imagePath()['vehicles']['size']) }}" alt="rental">
                    </div>
                    <div class="car__rental-content">
                        <div class="car__rental-content-header">
                            <h2 class="price">{{ $general->cur_sym }}{{ showAmount($vehicle->price) }} <span class="sub">/ @lang('Day')</span></h2>
                        </div>
                        <div class="car__rental-content-body">
                            <ul class="specification">
                                <li>
                                    <i class="las la-car"></i>@lang('Model'): {{ __(@$vehicle->model) }}
                                </li>
                                <li>
                                    <i class="las la-truck-pickup"></i>@lang('Doors'): {{ __(@$vehicle->doors) }}
                                </li>
                                <li>
                                    <i class="las la-car-alt"></i>@lang('Seats'): {{ __(@$vehicle->seater->number) }}
                                </li>
                                <li>
                                    <i class="las la-gas-pump"></i>@lang('Transmission'): {{ __(@$vehicle->transmission) }}
                                </li>
                            </ul>
                            <div class="btn__grp">
                                <a href="{{ route('vehicle.details', [$vehicle->id, slug($vehicle->name)]) }}" class="cmn--btn">@lang('Book Now')</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <div class="sync2 owl-theme owl-carousel mt-5">
            @forelse($vehicles as $item)
                <div class="rental__thumbnails">
                    <img src="{{ getImage(imagePath()['vehicles']['path'].'/'. @$item->images[0], imagePath()['vehicles']['size']) }}" alt="rental">
                </div>
            @empty
            @endforelse
        </div>
    </div>
</section>
<!-- Rental Fleet Section -->
