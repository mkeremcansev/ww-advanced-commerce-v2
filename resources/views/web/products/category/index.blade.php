@extends('web.layouts.extends')
@section('title', __('words.category'))
@section('description', setting('description'))
@section('keywords', setting('keywords'))
@section('content')
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            @if ($products->count())
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row margin-minus-b-15">
                        <div class="col">
                            <div class="tab-content">
                                <div class="tab-pane fade show active">
                                    <div class="row">
                                        @foreach ($products as $r)
                                            @php($product = $r->getOneProductAttributes)
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                                <div class="ec-product-inner">
                                                    <div class="ec-pro-image-outer">
                                                        <div class="ec-pro-image">
                                                            <a href="{{ route('web.product.show', $product->slug) }}" class="image">
                                                                <img class="main-image" src="{{ asset($r->getOneProductImages->image) }}" alt="{{ $product->title }}" />
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
                                                                    <span class="new-price">{{ getMoneyOrder($product->discount) }}</span>
                                                                    <span class="old-price">{{ getMoneyOrder($product->price) }}</span>
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
            @else
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ec-product-content">
                        <div class="ec-product-inner">
                            <h5 class="text-center p-5 custom-color-text">@lang('words.category_not_have_product')</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="row mt-5">
                {{ $products->links('vendor.pagination.pagination') }}
            </div>
        </div>
    </section>
@endsection