@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">

                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light tabstyle--two">
                            <thead>                                
                            <tr>
                                <th scope="col">@lang('Name')</th>
                                <th scope="col">@lang('Brand')</th>
                                <th scope="col">@lang('Car body type')</th>
                                <th scope="col">@lang('Car tag')</th>
                                <th scope="col">@lang('Seat')</th>
                                <th scope="col">@lang('Price')({{ $general->cur_sym }})</th>
                                <th scope="col">@lang('Model')</th>
                                <th scope="col">@lang('Car Number')</th>
                                <th scope="col">@lang('Transmission')</th>
                                 <th scope="col">@lang('Fuel')</th>
                                <th scope="col">@lang('Status')</th>
                                <th scope="col">@lang('Actions')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @forelse ($vehicles as $item)
                                <tr>                                    
                                    <td data-label="@lang('Name')">{{ __($item->name) }}</td>
                                    <td data-label="@lang('Brand')">{{ __($item->brand->name) }}</td>
                                    <td data-label="@lang('Car Body Type')">{{ __($item->car_body_type) }}</td>
                                    <td data-label="@lang('Car Body Type')">{{ __($item->tag) }}</td>

                                    <td data-label="@lang('Seat Type')">{{ __($item->seater->number) }}</td>
                                    <td data-label="@lang('Price')">{{ __(showAmount($item->price)) }}</td>
                                    <td data-label="@lang('Model')">{{ __($item->model) }}</td>
                                     <td data-label="@lang('Model No')">{{ __($item->car_model_no) }}</td>
                                    <td data-label="@lang('Transmission')">{{ __($item->transmission) }}</td>
                                    <td data-label="@lang('Fuel')">{{ __($item->fuel_type) }}</td>
                                    <td data-label="@lang('Status')">
                                        @if($item->status === 1)
                                            <span class="text--small badge font-weight-normal badge--success">@lang('Active')</span>
                                        @else
                                            <span class="text--small badge font-weight-normal badge--warning">@lang('Deactive')</span>
                                        @endif
                                    </td>

                                    <td data-label="@lang('Action')">
                                        <a href="{{ route('admin.vehicles.edit', $item->id) }}" class="icon-btn ml-1" data-original-title="@lang('Edit')">
                                            <i class="la la-edit"></i>
                                        </a>

                                        <a href="javascript:void(0)" class="icon-btn {{ $item->status ? 'btn--danger' : 'btn--success' }} ml-1 statusBtn" data-original-title="@lang('Status')" data-toggle="tooltip" data-url="{{ route('admin.vehicles.status', $item->id) }}">
                                            <i class="la la-eye{{ $item->status ? '-slash' : null }}"></i>
                                        </a>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($empty_message) }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
                <div class="card-footer">
                    {{ $vehicles->links('admin.partials.paginate') }}
                </div>
            </div><!-- card end -->
        </div>
    </div>



    {{-- Status MODAL --}}
    <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">@lang('Update Status')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form method="post" action="">
                    @csrf

                    <div class="modal-body">
                        <p class="text-muted">@lang('Are you sure to change status?')</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--dark" data-dismiss="modal">@lang('No')</button>
                        <button type="submit" class="btn btn--danger deleteButton">@lang('Yes')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('breadcrumb-plugins')
    <a href="{{ route('admin.vehicles.add') }}" class="btn btn-sm btn--primary box--shadow1 text-white text--small"><i class="fa fa-fw fa-plus"></i>@lang('Add New')</a>
@endpush

@push('script')
    <script>
        (function($){
            "use strict";

            //Status
            $('.statusBtn').on('click', function () {
                var modal = $('#statusModal');
                var url = $(this).data('url');

                modal.find('form').attr('action', url);
                modal.modal('show');
            });

        })(jQuery);
    </script>
@endpush
