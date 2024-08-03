@php
    $about_content = getContent('about.content', true);
@endphp

<!-- About Section -->
<section class="about-section pt-120 pb-120 bg--section position-relative overflow-hidden">
    <div class="shape">{{ __(@$about_content->data_values->stylish_text) }}</div>
    <div class="container position-relative">
        <div class="row gy-5 justify-content-between flex-wrap-reverse align-items-center">
            <div class="col-lg-6">
                <div class="section__header">
                    <h2 class="section__title">{{ __(@$about_content->data_values->heading) }}</h2>
                </div>
                <div class="about__txt pt-4">
                    <p>{{ __(@$about_content->data_values->content) }}</p>
                    <div class="btn__grp mt-4 mt-md-5">
                        <a href="{{ @$about_content->data_values->button_1_url }}" class="cmn--btn active">{{ __(@$about_content->data_values->button_1_name) }}</a>
                        <a href="{{ @$about_content->data_values->button_2_url }}" class="cmn--btn">{{ __(@$about_content->data_values->button_2_name) }}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="choose-thumb">
                    <img src="{{ getImage('assets/images/frontend/about/' . @$about_content->data_values->image, '837x554') }}" alt="about">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
