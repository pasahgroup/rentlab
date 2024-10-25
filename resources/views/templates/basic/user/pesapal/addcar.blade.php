@extends($activeTemplate.'layouts.frontend')
@section('content')


<div class="search-section pt-120 pb-120 bg--section position-relative overflow-hidden">
        <div class="shape right-side">@lang('Rent')</div>
        <div class="shape">@lang('Vehicles')</div>
           

        <div class="container">
    <div class="widget border--dashed">       

    <div class="single-section pt-120 pb-120 bg--section">
        <div class="container">            
            <div class="row gy-5">
 <form method="post" action="{{ route('user.addCar',1) }}">
                            @csrf
                <div class="col-md-4">
                  <h4 class="mb-4">@lang('You are booking'): {{ $vehicle->model }}</h4>
                </div>
               
                <div class="col-md-2">
                    <label for="drop-point" class="form--label">
                                        <i class="las la-street-view"></i> @lang('Search car Model')
                                    </label>
                                </div>

                                 <div class="col-lg-3 col-md-8 col-sm-8 col-xs-8"> 
    <input class="form-control" type="hidden" name="bookID" id="bookID" value="{{$bookedID}}">                          
    <input class="form-control" list="carModels" name="carModel" id="carModel">
    <datalist id="carModels">
         <option value="0">--Select car Model--</option>

          @forelse($vehicles as $veh)
                                            <option value="{{ $veh->id }}">{{ @$veh->model }}</option>
                                        @empty
                                        @endforelse
    </datalist> 
</div>

                                 <div class="col-md-2">
                                 <div class="form-group float-right">
                                    <button class="cmn--btn justify-content-center float-right" type="submit">@lang('Search')</button>
                                </div>
                            </div>
</form>
               
        </div>

            <div class="row gy-5">
               
                <div class="col-lg-4">
                    <hr>
                    <div class="slider-top owl-theme owl-carousel border--dashed">
                        @forelse($vehicle->images as $image)
                            <div class="car__rental-thumb w-100 bg--body p-0">
                                <img src="{{ getImage(imagePath()['vehicles']['path'].'/'. $image, imagePath()['vehicles']['size']) }}" alt="rent-vehicle">
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <div class="slider-bottom owl-theme owl-carousel mt-4">
                        @forelse($vehicle->images as $image)
                            <div class="rental__thumbnails bg--body">
                                <img src="{{ getImage(imagePath()['vehicles']['path'].'/'. $image, imagePath()['vehicles']['size']) }}" alt="rent-vehicle">
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="col-lg-7">
                    <hr>
                    <div class="widget border--dashed">
                    <div class="book__wrapper bg--body border--dashed mb-4">
                        <form class="book--form row gx-3 gy-4 g-md-4" method="post" action="{{ route('vehicle.booking.confirm',$vehicle->id) }}">
                            @csrf

                            <div class="col-md-6 col-sm-6">                             
                                    <label for="pick-point" class="form--label">
                                        <i class="las la-street-view"></i> @lang('Pick Up Point')
                                    </label>
                                    <div class="form-group">

   <input type="hidden" class="form-control" name="car_id" id="car_id" value="{{$vehicle->id}}">
    <input type="hidden" class="form-control" name="bookingID" id="bookingID" value="{{$bookedID}}">

<!-- <input class="form-control" list="pick_locations" name="pick_location" id="pick_location"> -->
    <select class="form-control" id="pick_locations" name="pick_location">
      <option value="">@lang('--Pick up point--')</option>
                                        @forelse($locations as $location)
                                            <option value="{{ $location->id }}">{{ @$location->name }}</option>
                                        @empty
                                        @endforelse
    </select>


                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">                              
                                    <label for="drop-point" class="form--label">
                                        <i class="las la-street-view"></i> @lang('Drop of Point')
                                    </label>
                                    <div class="form-group">

<!-- <input class="form-control" list="drop_locations" name="drop_location" id="drop_location"> -->
    <select id="drop_location" name="drop_location">
      <option value="">@lang('--Pick up point--')</option>
                                        @forelse($locations as $location)
                                            <option value="{{ $location->id }}">{{ @$location->name }}</option>
                                        @empty
                                        @endforelse
    </select>

                                </div>
                            </div>

                               <div class="col-md-12 col-sm-12">                                
                                    <label for="drop-point" class="">
                                        <i class="las la-street-view"></i> @lang('No Car')
                                    </label>
                                    <div class="form-group">
                                   <input type="number" name="no_car" id="no_car" value="1" min="1" required>
                                </div>
                            </div>    


                             
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="start-date" class="form--label">
                                        <i class="las la-calendar-alt"></i> @lang('From Date')
                                    </label>
                                    <input type="text" name="pick_time" placeholder="@lang('Pick Up Date & Time')" id='dateAndTimePicker' autocomplete="off" data-position='top left' class="form-control form--control pick_time" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="end-date" class="form--label">
                                        <i class="las la-calendar-alt"></i> @lang('To Date')
                                    </label>
                                    <input type="text" name="drop_time" placeholder="@lang('Drop of Date & Time')" id="dateAndTimePicker2" autocomplete="off" data-position='top left' class="form-control form--control" disabled required>
                                </div>
                            </div>

            

 <div class="col-1">
 </div>
                            <div class="col-8">
                                <div class="booking-costs mb-4"><strong>
                                    @lang('  Price Total:') </strong><span class="text--danger"><span class="total_amount">{{ showAmount($vehicle->price) }}</span> {{ $general->cur_text }} </span>
                                    @lang('for') <span class="total_days text--danger">1</span> @lang('days.')
                                </div>                                
                            </div>
   <div class="col-3">
                            <div class="form-group float-right">
                                    <button class="cmn--btn justify-content-center float-right" type="submit">@lang('Book Now')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
                     
                    </div>
                </div>


            </div>
        </div>
    </div>


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
