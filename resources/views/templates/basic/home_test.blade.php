@extends('templates.basic.layouts.frontend_new')
@section('content')

<body>

  <!-- Add Class carousel-fade just to fade transition -->
  <div class="carousel slide carousel-fade full-heightx stick-top" id="carousel" style="min-height: 610px;">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item zooming with-overlay active" style="background-image: url('http://placehold.it/1680x1050');"></div>
          

    </div>

    <!-- Controls -->
    <!-- Available Variation Class for carousel-control => circle, bottom, bottom-left, bottom-right" -->
    <a class="left carousel-control bottom-right" href="#carousel" role="button" data-slide="prev">
      <span class="icon-arr-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control bottom-right" href="#carousel" role="button" data-slide="next">
      <span class="icon-arr-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>


    <!-- Indicators -->
    <!-- Available Variation Class for carousel-indicators => dashed, circle" -->
    <ol class="carousel-indicators dashed">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
    </ol>
  </div>


  <section class="showcase" style="background: url('assets/img/worldmap.png') no-repeat center; background-size: cover;padding-top: 30px;padding-bottom: 20px;">
    <div class="main-title">
      <h4>Special Offers</h4>
    </div>
    <div class="container">

      <div class="row item">
   {{--
<!--     @foreach ($offers_private as $special_private)
      <div class="col-sm-6 col-md-4">
 <h4><b style="background:">{{$special_private->sales_header}}-({{ $special_private->category }})</b></h4>

          <div class="single_blog listing-shot item-grid">
<div class="listing-shot-img">
                                      <div class="listing-badge now-open"><strong>{{round($special_private->save/$special_private->price * 100),0 }}% Off</strong></div>
                                   
                                </div>




            <div class="item-img" style="background-image: url({{URL::asset('/storage/uploads/'.$special_private->attachment)}});" style="background-size:cover; background-position:center">
              <div class="item-overlay">
                <a href="{{route('safaris.show',$special_private->tour_id,$offers) }}"><span class="icon-binocular"></span></a>
              </div>
            </div>
          
            <div class="item-desc" style="background-color:#345742;">

              <div class="">
                <h4 class="title"><a href="#">{{$special_private->tour_name}}</a></h4>
              </div>
                

 <hr>
              <div class="sub-title">
                <span class="location">Tour Duration</span>
                <span class="grade">{{ $special_private->days }} Days, {{ $special_private->days -1 }} Nights</span>
              </div>
              <div class="sub-title">
                <span class="location">Physical rating</span>
                <span class="grade">{{ $special_private->physical_rating }}</span>
              </div>

              <div class="sub-title">
                 <span class="location">Tour Category</span>
                <span class="grade">{{ $special_private->category }}</span>
              </div>

   <div class="sub-title">
                <span class="location">Tour Code</span>
                <span class="grade">{{ $special_private->tour_code }}</span>
              </div>

              <div class="item-detail">
                <div class="left">
                  <div class="day"><span class="icon-sun">Dead Line:</span></div>
                  <div class="night"><span class="icon-moonx"></span>{{ $special_private->offer_deadline }}</div>
                </div>
                <div class="right">
                  
                    <span class="text-danger" style="font-size:17px"><strong>${{ number_format($special_private->new_price),2 }} </strong> pp
                                           </span><sup style="text-decoration: line-through;">$ {{ number_format($special_private->price),2 }} </sup></s><br>
                                            <span style="font-size:12px;">Save ${{ number_format($special_private->save),2 }}</span>


                  <a href="{{route('safaris.show',$special_private->tour_id,$offers) }}" class="btn btn-primary hvr-sweep-to-right">Tour Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
@endforeach -->
--}}
      </div>
    </div>
      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
            <a class="btn-transparent" href="/offers" target="_blank"><i class="fas fa-gift"></i> Explore More Offers
            </a>
          </div>
        </div>
  </section>

@section('content')
<style type="text/css">
    
    .booking-btn {
  border: 0px solid #647545;
  padding: 8px 30px;
  color:#fff;
  display: block;  
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}

 .header-btn {
  border: 0px solid #647545;
  padding: 1px 2px;
  color:#fff;
  display: block;  
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}
</style>



    @php
        $banners = getContent('banner.element');

        $brands = \App\Models\Brand::active()->orderBy('name')->get();
        $seats = \App\Models\Seater::active()->orderBy('number')->get();
    @endphp

    <!-- Book Section -->
    @if($sections->secs != null)
        @foreach(json_decode($sections->secs) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif


  
@endsection