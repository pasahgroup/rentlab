@extends($activeTemplate.'layouts.master')
@section('content')
    <div class="pb-60 pt-60">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="deposit-preview bg--body">
                    <div class="deposit-thumb">
                        <img src="{{$deposit->gatewayCurrency()->methodImage()}}" alt="payment">
                    </div>
                    <div class="deposit-content">
                        <ul>
                            <li>
                                <h4>@lang('Please Pay'):
                                    <span class="text--primary">{{showAmount($deposit->final_amo)}} {{__($deposit->method_currency)}}</span></h4>
                            </li>
                        </ul>

                        <form action="{{$data->url}}" method="{{$data->method}}">
                            <script src="{{$data->src}}"
                                    class="stripe-button"
                                    @foreach($data->val as $key=> $value)
                                    data-{{$key}}="{{$value}}"
                                @endforeach
                            >
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        (function ($) {
            "use strict";
            $('button[type="submit"]').addClass("cmn--btn");
        })(jQuery);
    </script>
@endpush
