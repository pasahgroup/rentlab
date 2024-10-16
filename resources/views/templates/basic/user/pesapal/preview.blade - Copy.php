@extends($activeTemplate.'layouts.master')
@section('content')
    <div class="pb-60 pt-60">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="deposit-preview bg--body">
                    <div class="deposit-thumb">
                       <ul>
                           
                            <li>
                                @lang('Amount'):
                                <span class="text--success">{{showAmount($data->pick_location)}} {{__($general->cur_text)}}</span>
                            </li>
                            <li>
                                @lang('Amount'):
                                <span class="text--success">{{showAmount($data->drop_location)}}</span>
                            </li>
                            <li>
                                @lang('Total Costs'):
                                <span class="text--success">{{showAmount($data->amount)}} {{__($general->cur_text)}}</span>
                            </li>

                        </ul>
                    </div>
                    <div class="deposit-content">
                        <ul>
                           
                            <li>
                                @lang('Amount'):
                                <span class="text--success">{{showAmount($data->pick_location)}} {{__($general->cur_text)}}</span>
                            </li>
                            <li>
                                @lang('Amount'):
                                <span class="text--success">{{showAmount($data->drop_location)}}</span>
                            </li>
                            <li>
                                @lang('Total Costs'):
                                <span class="text--success">{{showAmount($data->amount)}} {{__($general->cur_text)}}</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


