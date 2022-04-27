@if (Cache::get('n_products')->count())
    @foreach (Cache::get('p_products') as $p)
        @php($product = $p->getOneProductAttributes)
        <div class="col-lg-12 col-sm-12 col-md-12 ec-all-product-block">
            <div class="ec-all-product-inner">
                <div class="ec-pro-image-outer">
                    <div class="ec-pro-image">
                        <a href="{{ route('web.product.show', $product->slug) }}" class="image">
                            <img class="main-image" src="{{ asset($p->getOneProductImages->image) }}" alt="{{ $product->title }}" />
                        </a>
                    </div>
                </div>
                <div class="ec-pro-content">
                    <h5 class="ec-pro-title">
                        <a href="{{ route('web.product.show', $product->slug) }}">{{ $product->title }}</a>
                    </h5>
                    <h6 class="ec-pro-stitle">
                        <a href="{{ route('web.product.show', $product->slug) }}">{{ $p->getOneProductCategory->title }}</a>
                    </h6>
                    <div class="ec-pro-rat-price">
                        <div class="ec-pro-rat-pri-inner">
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
        </div>
    @endforeach
@else
    <p class="text-center">@lang('words.not_have_product')</p>
@endif