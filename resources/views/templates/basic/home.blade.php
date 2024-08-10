@extends($activeTemplate.'layouts.frontend')
@section('content')
    @php
        $banners = getContent('banner.element');

        $brands = \App\Models\Brand::active()->orderBy('name')->get();
        $seats = \App\Models\Seater::active()->orderBy('number')->get();
    @endphp
 

 <!-- Car Section Begin -->
    <section class="book-section pb-120 bg--section">
        <div class="container-fluid">
            <div class="row">                            
                <div class="col-lg-12">
                    <div class="car__filter__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="car__filter__option__item">
                                    <span>Car type</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

   @foreach($carbodytypes as $carbodytype)
                        <div class="col-lg-2 col-md-3">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="{{ URL::asset('/storage/cartypes/'.$carbodytype->images) }}" alt="No Image" style="width:250px;height:100px;">
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
                                        <a href="/cartype-page/{{$carbodytype->car_body_type}}" class="cmn--btn form--control bg--base w-100 justify-content-center"
                                    type="submit">{{$carbodytype->car_body_type}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
