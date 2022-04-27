{{-- <section class="section niche-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                        <li>
                            <a href="#top-new" class="tab-link active" data-bs-toggle="tab">
                                <i class="icofont-loop"></i>
                                <span>@lang('words.new_products')</span>
                            </a>
                        </li>
                        <li>
                            <a href="#top-rate" class="tab-link" data-bs-toggle="tab">
                                <i class="icofont-star"></i>
                                <span>@lang('words.popular_products')</span>
                            </a>
                        </li>
                        <li>
                            <a href="#top-disc" class="tab-link" data-bs-toggle="tab">
                                <i class="icofont-sale-discount"></i>
                                <span>@lang('words.discounted_products')</span>
                            </a>
                        </li>
                </ul>
            </div>
        </div>
            @include('web.homepage.layouts.new')
            @include('web.homepage.layouts.popular')
            @include('web.homepage.layouts.discount')
    </div>
</section> --}}
<section class="section ec-product-tab section-space-p mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2 class="ec-title">@lang('words.new_products')</h2>
                            </div>
                        </div>
                        <div class="ec-new-slider">
                            @include('web.homepage.layouts.new')
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2 class="ec-title">@lang('words.popular_products')</h2>
                            </div>
                        </div>
                        <div class="ec-new-slider">
                            @include('web.homepage.layouts.popular')
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2 class="ec-title">@lang('words.discounted_products')</h2>
                            </div>
                        </div>
                        <div class="ec-new-slider">
                            @include('web.homepage.layouts.discount')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>