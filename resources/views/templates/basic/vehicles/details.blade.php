@extends($activeTemplate.'layouts.frontend')

@section('content')
    <div class="single-section pt-120 pb-120 bg--section position-relative overflow-hidden">
        <div class="shape">@lang('Book Now')</div>
        <div class="container">
             <div class="widget border--dashed" style="background-color:#f0f0f">
            <div class="row gy-5">
                <!-- 6d846c -->
                <div class="col-lg-5" style="background-color:#">
                    <div class="slider-top owl-theme owl-carousel border--dashed">
                        @forelse($vehicle->images as $image)
                            <div class="car__rental-thumb w-100 bg--body p-0" style="border-radius: 2px 4px 2px;">
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
                <!-- <div class="col-lg-7 align-self-center border--dashed " style="background-color:#fff">  -->
                      <div class="col-lg-6">

                    <br>
                    <div class="rent__single border--dashed">
                            <h4><span class="text--body">Vehicle details</span></h4>
<div class="row">
                     <div class="col-lg-9">
                        <h3 class="title">{{ __(@$vehicle->name) }}
</h3>
</div>
<div class="col-lg-3">
<div class="btn__grp">
                            @auth
                                 <a href="{{ route('vehicle.booking', [$vehicle->id, slug($vehicle->name)]) }}" class="cmn--btn">@lang('Book Now')</a>
                            @else
                               {{--
                                <a href="{{ route('user.login') }}" class="cmn--btn">@lang('Login to Book')</a>
                               --}}

                    <form  method="GET"  action="{{ route('user.login') }}" enctype="multipart/form-data">
                             @csrf
    <input type="hidden" name="_method" value="GET">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="fullurl" value="{{$fullUrl}}"/>

                <button type="submit" class="cmn--btn">@lang('Login to Book')</button>
                                </form>
                            @endauth
                        </div>
                         </div>
                     </div>

                        <div class="ratings mb-4">
                            <span><i class="las la-star"></i></span>
                            <span>({{ @$vehicle->ratings_avg_rating+0 }})</span>
                            <span class="text--body">{{ @$vehicle->ratings_count }} @lang('Customer Review')</span>
                        </div>
                        <div class="price-area mb-4">
                            <h5 class="item">{{ $general->cur_sym }}{{ showAmount($vehicle->price) }} <sub>/@lang('day')</sub></h5>
                        </div>
                        <div class="content">
                            @php echo @$vehicle->details @endphp
                        </div>
                      <!--   <div class="btn__grp">
                            @auth
                                 <a href="{{ route('vehicle.booking', [$vehicle->id, slug($vehicle->name)]) }}" class="cmn--btn">@lang('Book Now')</a>
                            @else
                                <a href="{{ route('user.login') }}" class="cmn--btn">@lang('Book Now')</a>
                            @endauth
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="single__details mt-2" style="background-color:#6d846c">
                <ul class="nav nav-tabs nav--tabs">
                    <li class="nav-item">
                        <a href="#specifications" data-bs-toggle="tab" class="nav-link active">@lang('All Specifications')</a>
                    </li>
                    <li class="nav-item">
                        <a href="#image-gallery" data-bs-toggle="tab" class="nav-link">@lang('Image Gallery')</a>
                    </li>
                    <li class="nav-item">
                        <a href="#terms" data-bs-toggle="tab" class="nav-link">@lang('Rental Terms')</a>
                    </li>
                    <li class="nav-item">
                        <a href="#review" data-bs-toggle="tab" class="nav-link">@lang('Review')({{ $vehicle->ratings_count }})</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="specifications">
                        <h5 class="single__title">@lang('All Specifications')</h5>
                        <div class="single__details-content">

                            @forelse($vehicle->specifications as $spec)
                                <div class="specification-item">
                                    @php echo @$spec[0] @endphp
                                    <div class="specification-item-cont">
                                        <h6 class="specification-item-title">{{ @$spec[1] }}: </h6>
                                        <span>{{ @$spec[2] }}</span>
                                    </div>
                                </div>
                            @empty
                            @endforelse

                        </div>
                    </div>
                    <div class="tab-pane" id="image-gallery">
                        <h5 class="single__title">@lang('Our Gallery')</h5>
                        <div class="single__details-content p-4">
                            <div class="row g-4">

                                @forelse($vehicle->images as $image)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="gallery__item">
                                            <a href="{{ getImage(imagePath()['vehicles']['path'].'/'. @$image, imagePath()['vehicles']['size']) }}" class="img-pop">
                                                <i class="las la-plus"></i>
                                            </a>
                                            <img src="{{ getImage(imagePath()['vehicles']['path'].'/'. @$image, imagePath()['vehicles']['size']) }}" alt="rent-vehicle">
                                        </div>
                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="terms">
                        <h5 class="single__title">{{ __(@$rental_terms->data_values->title) }}</h5>
                        <div class="single__details-content p-4 py-5">
                            @php echo @$rental_terms->data_values->content @endphp
                        </div>
                    </div>
                    <div class="tab-pane" id="review">
                        <h5 class="single__title mt-4">@lang('Leave a Review')</h5>
                        <div class="single__details-content p-4 mb-4">
                            @if(auth()->check())
                                <form class="review-form rating row" action="{{ route('user.rating', $vehicle->id) }}" method="post">
                                    @csrf

                                    <div class="review-form-group mb-3 mt-3 col-md-6 d-flex flex-wrap">
                                        <label class="review-label mb-0 mr-3">@lang('Your Ratings') :</label>
                                        <div class="rating-form-group">
                                            <label class="star-label">
                                                <input type="radio" name="rating" value="1"/>
                                                <span class="icon"><i class="las la-star"></i></span>
                                            </label>
                                            <label class="star-label">
                                                <input type="radio" name="rating" value="2"/>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                            </label>
                                            <label class="star-label">
                                                <input type="radio" name="rating" value="3"/>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                            </label>
                                            <label class="star-label">
                                                <input type="radio" name="rating" value="4"/>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                            </label>
                                            <label class="star-label">
                                                <input type="radio" name="rating" value="5"/>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="review-form-group mb-3 col-12 d-flex flex-wrap">
                                        <label class="form--label" for="review-comments">@lang('Say Something')</label>
                                        <textarea name="comment" class="form-control form--control" id="review-comments"></textarea>
                                    </div>
                                    <div class="review-form-group col-12 d-flex flex-wrap">
                                        <button type="submit" class="cmn--btn">@lang('Submit Review')</button>
                                    </div>
                                </form>
                            @else
                                <h4>@lang('Please login to add your review!')</h4>
                            @endif
                        </div>

                        <h5 class="single__title">@lang('Review')</h5>
                        <div class="single__details-content px-sm-4">
                            <ul class="content">

                                @forelse($vehicle->ratings as $rating)
                                    <li class="review-item">
                                        <div class="review-thumb">
                                            <img src="{{ getImage(imagePath()['profile']['user']['path'].'/'. $rating->user->image, '100x100') }}" alt="client">
                                        </div>
                                        <div class="review-content">
                                            <div class="entry-meta">
                                                <div class="posted-on">
                                                    {{ $rating->user->fullname }} &nbsp;
                                                    <p>@lang('Posted on') {{ showDateTime($rating->created_at) }}</p>
                                                </div>
                                                <div class="rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($rating->rating >= $i)
                                                            <i class="las la-star"></i>
                                                        @else
                                                            <i class="lar la-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>{{ __(@$rating->comment) }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                @endforelse

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
