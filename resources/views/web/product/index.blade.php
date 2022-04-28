@extends('web.layouts.extends')
@section('title', $product->getOneProductAttributes->title)
@section('description', $product->getOneProductSeoAttributes->description)
@section('keywords', $product->getOneProductSeoAttributes->keywords)
@include('web.product.script.script')
@section('css')
<link rel="stylesheet" href="{{ asset('web/assets/css/style.css') }}" />
@endsection
@section('content')
@php($p = $product->getOneProductAttributes)
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-pro-rightside ec-common-rightside col-lg-12 col-md-12">
                <div class="single-pro-block">
                    <div class="single-pro-inner">
                        <div class="row">
                            <div class="single-pro-img single-pro-img-no-sidebar">
                                <div class="single-product-scroll">
                                    <div class="single-product-cover img-responsive-rounded">
                                        @foreach ($product->getAllProductImages as $i)
                                            <div class="single-slide">
                                                <img class="img-responsive" src="{{ asset($i->image) }}" alt="{{ $p->title }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    @if($product->getAllProductImages->count() > 1)
                                        <div class="single-nav-thumb">
                                            @foreach ($product->getAllProductImages as $i)
                                                <div class="single-slide">
                                                    <img class="img-responsive img-responsive-rounded" src="{{ asset($i->image) }}" alt="{{ $p->title }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="single-pro-desc single-pro-desc-no-sidebar">
                                <div class="single-pro-content">
                                    <h5 class="ec-single-title">{{ $p->title }}</h5>
                                    <div class="ec-single-price-stoke">
                                        @if ($p->discount)
                                            <div class="ec-single-price">
                                                <span class="off">{{ getDiscountCalc($p->price, $p->discount) }}</span>
                                                <span class="new-price">{{ getMoneyOrder($p->discount) }}</span>
                                                <span class="old-price">{{ getMoneyOrder($p->price) }}</span>
                                            </div>
                                        @else
                                        <div class="ec-single-price">
                                            <span class="new-price">{{ getMoneyOrder($p->price) }}</span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="ec-single-price">
                                        <p>
                                            <span class="ec-single-pro-cat-span">
                                                <a class="ec-single-pro-a-hover" href="{{ route('web.category.products.show', $product->getOneProductCategory->slug) }}">@lang('words.product_category_name', ['name'=>$product->getOneProductCategory->title])</a>
                                            </span>
                                            
                                            <span class="ml-2 ec-single-pro-brand-span">@lang('words.product_brand_name', ['name'=>$product->getOneProductBrand->title])</span>
                                        </p>
                                    </div>
                                    <div class="ec-single-rating-wrap">
                                        <div class="ec-single-rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="ecicon eci-star @if(round((float)$product->getAllProductReviews->avg('rating')) >= $i) fill @endif"></i>
                                            @endfor
                                        </div>
                                        <span class="ec-read-review">
                                            <a href="#ec-spt-nav-review">@lang('words.review_count', ['count'=>$product->getAllProductReviews->count()])</a>
                                        </span>
                                    </div>
                                    <div class="ec-single-desc">
                                        {{ str_replace('&nbsp;',' ',strip_tags(getShowMore($p->description).'...')) }}
                                        <a class="main-text-color" href="#ec-spt-nav-details">@lang('words.show_more')</a>
                                    </div>
                                    <div class="ec-pro-variation">
                                        @foreach ($product->getAllProductVariants as $v)
                                        <div class="ec-pro-variation-inner ec-pro-variation-size">
                                            <span>{{ $v->title }}</span>
                                            <div class="ec-pro-variation-content">
                                                <ul>
                                                    @foreach ($v->getAllVariantAttributes as $a)
                                                        @if ($a->stock)
                                                            @if ($a->price)
                                                                <li class="custom-variant-attribute variant-attr custom-data-tooltip" variant-hash="{{ $a->hash }}" variant-stock="{{ $a->stock }}" data-tooltip="@lang('words.plus_price', ['price'=>getMoneyOrder($a->price)])">
                                                                    <span>{{ $a->title }}</span>
                                                                </li>
                                                            @else
                                                                <li class="custom-variant-attribute variant-attr" variant-hash="{{ $a->hash }}" variant-stock="{{ $a->stock }}">
                                                                    <span>{{ $a->title }}</span>
                                                                </li>
                                                            @endif
                                                        @else
                                                            <li class="custom-disabled-alert"><span>{{ $a->title }}</span></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                        <p class="custom-stock"></p>
                                    </div>
                                    
                                    <div class="ec-single-qty">
                                        <div class="qty-plus-minus">
                                            <input class="qty-input" type="text" name="quantity" id="quantity" value="1" />
                                        </div>
                                        @if (setting('whatsapp_info'))
                                            <div class="ec-single-cart ml-2">
                                                <button class="btn btn-primary" id="add-to-cart">@lang('words.add_to_cart')</button>
                                            </div>
                                            <div class="ec-single-cart mr-2">
                                                <a class="btn btn-primary" href="@lang('words.whatsapp_url', ['url'=>'https://wa.me', 'phone'=>setting('phone'), 'product'=>$p->title, 'current_url'=>url()->current()])">@lang('words.information_from_whatsapp')</a>
                                            </div>
                                        @else
                                            <div class="ec-single-cart">
                                                <button class="btn btn-primary" id="add-to-cart">@lang('words.add_to_cart')</button>
                                            </div>
                                        @endif
                                        
                                        <div class="ec-single-wishlist">
                                            <a id="add-to-wishlist" class="ec-btn-group wishlist" title="{{ setting('title') }}"><img src="{{ asset('web/assets/images/icons/wishlistwhite.png') }}" class="svg_img pro_svg" alt="{{ setting('title') }}" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-single-pro-tab">
                    <div class="ec-single-pro-tab-wrapper">
                        <div class="ec-single-pro-tab-nav">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#ec-spt-nav-details" role="tablist">@lang('words.description')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-info"
                                        role="tablist">@lang('words.information')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review"
                                        role="tablist">@lang('words.reviews', ['count'=>$product->getAllProductReviews->count()])</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content  ec-single-pro-tab-content">
                            <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                <div class="ec-single-pro-tab-desc">
                                    {!! $p->description !!}
                                </div>
                            </div>
                            <div id="ec-spt-nav-info" class="tab-pane fade">
                                <div class="ec-single-pro-tab-moreinfo">
                                    <ul>
                                        @foreach ($product->getAllProductInformations as $i)
                                            <li><span>{{ $i->title }}</span>{{ $i->description }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div id="ec-spt-nav-review" class="tab-pane fade">
                                <div class="row">
                                    <div class="ec-t-review-wrapper">
                                        @if ($product->getAllProductReviews->count())
                                            @foreach ($product->getAllProductReviews as $r)
                                                <div class="ec-t-review-item">
                                                    <div class="ec-t-review-content">
                                                        <div class="ec-t-review-top">
                                                            <div class="ec-t-review-name">{{ $r->getOneReviewUser->name }}</div>
                                                            <div class="ec-t-review-rating">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                <i class="ecicon eci-star @if($r->rating >= $i) fill @endif"></i>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <div class="ec-t-review-bottom">
                                                            <p>{{ $r->content }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @else
                                                <p class="text-center">@lang('words.not_have_product_review')</p>
                                            @endif
                                    </div>
                                    @auth
                                        @if(!$product->getAllProductAuthReviews->contains('user_id',Auth::user()->id) AND Auth::user()->email_verified_at)
                                            <div class="ec-ratting-content">
                                                <div class="ec-ratting-form">
                                                    <form action="#">
                                                        <div class="ec-ratting-star justify-content-center">
                                                            <div class="star-rating">
                                                                <input type="radio" class="rating-input" name="rating" id="star-1" value="5">
                                                                <label for="star-1"></label>
                                                                <input type="radio" class="rating-input" name="rating" id="star-2" value="4">
                                                                <label for="star-2"></label>
                                                                <input type="radio" class="rating-input" name="rating" id="star-3" value="3">
                                                                <label for="star-3"></label>
                                                                <input type="radio" class="rating-input" name="rating" id="star-4" value="2">
                                                                <label for="star-4"></label>
                                                                <input type="radio" class="rating-input" name="rating" id="star-5" value="1">
                                                                <label for="star-5"></label>
                                                            </div>
                                                        </div>
                                                        <div class="ec-ratting-input form-submit">
                                                            <textarea id="review_content" placeholder="@lang('words.content')"></textarea>
                                                            <button class="btn btn-primary" type="button" id="add-to-review">@lang('words.add_review')</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            @endif
                                        @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details description area end -->
            </div>

        </div>
    </div>
</section>
    {{-- <section class="inner-section">
        <div class="container">
            <div class="row">
                @if ($product->getAllProductHits->count())
                    <div class="col-lg-12">
                        <div class="alert-info">
                            <h4>@lang('words.product_show_count', ['count'=>$product->getAllProductHits->count()])</h4>
                        </div>
                    </div>
                @endif
                <div class="col-lg-6">
                    <div class="details-gallery">
                        <div class="details-label-group">
                            @foreach (getProductLabel($p->discount, $p->price, $product->created_at, $product->getAllProductReviews->avg('rating')) as $l)
                                @if ($l['status'])
                                    <label class="details-label {{ $l['code'] }}">{{ $l['title'].$l['value'] }}</label>
                                @endif
                            @endforeach
                        </div>
                        <ul class="details-preview">
                            @foreach ($product->getAllProductImages as $i)
                                <li><img src="{{ asset($i->image) }}" alt="{{ $p->title }}"></li>
                            @endforeach
                        </ul>
                        <ul class="details-thumb">
                            @foreach ($product->getAllProductImages as $i)
                                <li><img src="{{ asset($i->image) }}" alt="{{ $p->title }}"></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="product-navigation">
                        <h3>{{ $p->title }}</h3>
                    </ul>
                    <div class="details-content">
                        <div class="details-meta">
                            <p>@lang('words.category')<span>{{ $product->getOneProductCategory->title }}</span></p>
                            <p>@lang('words.brand')<span>{{ $product->getOneProductBrand->title }}</span></p>
                        </div>
                        <div class="details-rating">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="@if( round((float)$product->getAllProductReviews->avg('rating')) >= $i) active @endif  icofont-star"></i>
                            @endfor
                            <a href="#product-review-section">@lang('words.review_count', ['count'=>$product->getAllProductReviews->count()])</a>
                        </div>
                        <h3 class="details-price">
                            @if ($p->discount)
                                <del>{{ getMoneyOrder($p->price) }}</del>
                                <span>{{ getMoneyOrder($p->discount) }}</span>
                            @else
                                <span>{{ getMoneyOrder($p->price) }}</span>
                            @endif
                        </h3>
                        <p class="details-desc">
                            <div class="mb-4">
                                {!! getShowMore($p->description).'...' !!}
                                <a class="main-text-color" href="#informations">@lang('words.show_more')</a>
                            </div>
                        </p>
                            @foreach ($product->getAllProductVariants as $v)
                            <div class="attr-detail attr-size">
                                <strong>{{ $v->title }}</strong>
                                <ul class="list-filter size-filter font-small">
                                    @foreach ($v->getAllVariantAttributes as $a)
                                        @if ($a->stock)
                                            @if ($a->price)
                                                <li class="custom-data-tooltip" data-tooltip="@lang('words.plus_price', ['price'=>getMoneyOrder($a->price)])" variant-hash="{{ $a->hash }}">
                                                    <a class="variant-attr" variant-stock="{{ $a->stock }}">
                                                        {{ $a->title }}
                                                    </a>
                                                </li>
                                            @else
                                                <li class="variant-price" variant-hash="{{ $a->hash }}" variant-price="{{ $a->price }}">
                                                    <a class="variant-attr" variant-stock="{{ $a->stock }}">{{ $a->title }}</a>
                                                </li>
                                            @endif
                                        @else
                                                <li><a class="custom-disabled-alert" variant-stock="{{ $a->stock }}">{{ $a->title }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                            <p class="custom-stock"></p>
                            <div class="details-action-group mt-4">
                                <a class="details-wish wish w-100 custom-cursor-pointer" id="add-to-wishlist">
                                    <i class="icofont-heart"></i>
                                    <span>@lang('words.add_to_wishlist')</span>
                                </a>
                            </div>
                            @if (setting('whatsapp_info'))
                                <div class="details-action-group mt-4">
                                    <a class="details-wish wish w-100 custom-cursor-pointer" target="_blank" href="@lang('words.whatsapp_url', ['url'=>'https://wa.me', 'phone'=>setting('phone'), 'product'=>$p->title, 'current_url'=>url()->current()])">
                                        <i class="fab fa-whatsapp"></i>
                                        <span>@lang('words.information_from_whatsapp')</span>
                                    </a>
                                </div>
                            @endif
                            <div class="detail-action-group mt-4">
                                <div class="product-action">
                                    <button class="action-minus">
                                        <i class="icofont-minus"></i>
                                    </button>
                                    <input class="action-input" type="text" value="1" min="1" id="quantity">
                                    <button class="action-plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                                <button class="detail-add-btn w-100" id="add-to-cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    @lang('words.add_to_cart')
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-section" id="informations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-frame">
                        <h3 class="frame-title">@lang('words.description')</h3>
                        <div class="tab-descrip">
                            {!! $p->description !!}
                        </div>
                    </div>
                    <div class="product-details-frame">
                        <h3 class="frame-title">@lang('words.information')</h3>
                        <table class="table table-bordered">
                            <tbody>
                                @foreach ($product->getAllProductInformations as $i)
                                    <tr>
                                        <th scope="row">{{ $i->title }}</th>
                                        <td>{{ $i->description }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="product-details-frame" id="product-review-section">
                        @if ($product->getAllProductReviews->count())
                            <h3 class="frame-title">@lang('words.reviews', ['count'=>$product->getAllProductReviews->count()])</h3>
                            <ul class="review-list">
                                    @foreach ($product->getAllProductReviews as $r)
                                        <li class="review-item">
                                            <div class="review-media">
                                                <h5 class="review-meta">
                                                    <a>{{ $r->getOneReviewUser->name }}</a>
                                                    <span>{{ $r->created_at->diffForHumans() }}</span>
                                                </h5>
                                            </div>
                                            <ul class="review-rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <li class="@if($r->rating >= $i) icofont-ui-rating @else icofont-ui-rate-blank @endif "></li>
                                                @endfor
                                            </ul>
                                            <p class="review-desc">{{ $r->content }}</p>
                                        </li>
                                    @endforeach
                            </ul>
                        @else
                                <p class="text-center">@lang('words.not_have_product_review')</p>
                        @endif
                    </div>
                    @auth
                        @if(!$product->getAllProductAuthReviews->contains('user_id',Auth::user()->id) AND Auth::user()->email_verified_at)
                            <div class="product-details-frame">
                                <div class="review-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="star-rating">
                                                <input type="radio" class="rating-input" name="rating" id="star-1" value="5">
                                                <label for="star-1"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-2" value="4">
                                                <label for="star-2"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-3" value="3">
                                                <label for="star-3"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-4" value="2">
                                                <label for="star-4"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-5" value="1">
                                                <label for="star-5"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control" id="review_content" placeholder="@lang('words.content')"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="button" id="add-to-review" class="btn btn-inline">
                                                <span>@lang('words.add_review')</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </section> --}}
@endsection