
        <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
            <div class="container">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">                         
                            <a href="tel:+01234567890" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i> (+255)655 633 302</a>
                            <a href="mailto:mailto:info@rhonds.co.tz" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>info@rhonds.co.tz</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end float-right">
                       
                @forelse($social_icons as $item)
                                <a href="{{ $item->data_values->url }}" class="btn btn-light btn-sm-square rounded-circle me-3">
                                    @php echo @$item->data_values->social_icon @endphp
                                </a>
                        @empty
                        @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>