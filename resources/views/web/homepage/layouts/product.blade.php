{{-- <section class="section recent-part">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            @foreach (Cache::get('r_products') as $r)
            @php($product = $r->getOneProductAttributes)
                <div class="col">
                    <div class="product-card {{ getStockControl($r->getAllProductVariants) }}">
                        <div class="product-media">
                            <div class="product-label p-2">
                                @foreach (getProductLabel($product->discount, $product->price, $r->created_at, $r->getAllProductReviews->avg('rating')) as $l)
                                    @if ($l['status'])
                                        <label class="label-text {{ $l['code'] }}">{{ $l['title'].$l['value'] }}</label>
                                    @endif
                                @endforeach
                            </div>
                            <a class="product-image" href="{{ route('web.product.show', $product->slug) }}">
                                <img src="{{ asset($r->getOneProductImages->image) }}" class="rounded-3" alt="{{ $product->title }}">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="@if(round((float)$r->getAllProductReviews->avg('rating')) >= $i) active @endif  icofont-star"></i>
                                @endfor
                            </div>
                            <h6 class="product-name">
                                <a href="{{ route('web.product.show', $product->slug) }}">{{ $product->title }}</a>
                            </h6>
                            <h6 class="product-price">
                            @if ($product->discount)
                                <del>{{ getMoneyOrder($product->price) }}</del>
                                <span>{{ getMoneyOrder($product->discount) }}</span>
                            @else
                                <span>{{ getMoneyOrder($product->price) }}</span>
                            @endif
                            </h6>
                            <a href="{{ route('web.product.show', $product->slug) }}" class="product-add" title="@lang('words.detail')">
                                <i class="fas fa-search"></i>
                                <span>@lang('words.detail')</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}
<section class="section ec-product-tab section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row margin-minus-b-15">
                    <div class="col">
                        <div class="tab-content">
                            <div class="tab-pane fade show active">
                                <div class="row">
                                    @foreach (Cache::get('r_products') as $r)
                                        @php($product = $r->getOneProductAttributes)
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ route('web.product.show', $product->slug) }}" class="image">
                                                            <img class="main-image" src="{{ asset($r->getOneProductImages->image) }}" alt="Product" />
                                                        </a>
                                                        <div class="product-label p-2">
                                                            @foreach (getProductLabel($product->discount, $product->price, $r->created_at, $r->getAllProductReviews->avg('rating')) as $l)
                                                                @if ($l['status'])
                                                                    <label class="label-text {{ $l['code'] }}">{{ $l['title'].$l['value'] }}</label>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ route('web.category.products.show', $r->getOneProductCategory->slug) }}"><h6 class="ec-pro-stitle">{{ $r->getOneProductCategory->title }}</h6></a> 
                                                    <h5 class="ec-pro-title">
                                                        <a href="{{ route('web.product.show', $product->slug) }}">{{ $product->title }}</a>
                                                    </h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <i class="ecicon eci-star @if(round((float)$r->getAllProductReviews->avg('rating')) >= $i) fill @endif"></i>
                                                            @endfor
                                                        </span>
                                                        @if ($product->discount)
                                                            <span class="ec-price">
                                                                <span class="new-price">{{ getMoneyOrder($product->price) }}</span>
                                                                <span class="old-price">{{ getMoneyOrder($product->discount) }}</span>
                                                            </span>
                                                        @else
                                                            <span class="ec-price">
                                                                <span class="new-price">{{ getMoneyOrder($product->price) }}</span>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>