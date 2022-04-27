{{-- <aside class="wishlist-sidebar">
        <div class="cart-header">
            <div class="cart-total">
                <i class="fas fa-heart"></i>
                <span>@lang('words.wishlist_count', ['count'=>Cart::instance('wishlist')->content()->count()])</span>
            </div>
            <button type="button" class="wishlist-close">
                <i class="icofont-close"></i>
            </button>
        </div>
            <ul class="cart-list">
                @if (Cart::instance('wishlist')->content()->count())
                    @foreach (Cart::instance('wishlist')->content() as $w)
                    @php($product = $w->model)
                    @php($attribute = $product->getOneProductAttributes)
                    <li class="cart-item">
                        <div class="cart-media">
                            <a>
                                <img src="{{ asset($product->getOneProductImages->image) }}" alt="{{ $attribute->title }}">
                            </a>
                            <button type="button" class="cart-delete">
                                <a href="{{ route('web.wishlist.delete', $w->rowId) }}">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </button>
                        </div>
                        <div class="cart-info-group mt-3 custom-mt-0-6">
                            <div class="cart-info">
                                <h6><a href="{{ route('web.product.show', $attribute->slug) }}">{{ $attribute->title }}</a></h6>
                                <h6 class="main-text-color">{{ getMoneyOrder($w->price) }}</h6>
                            </div>
                        </div>
                    </li>
                    @endforeach
                @else
                <div class="mt-5">
                    <h5 class="text-center">@lang('words.wishlist_cart_empty')</h5>
                </div>
                @endif
            </ul>
             @if (Cart::instance('wishlist')->content()->count())
                <div class="cart-footer mt-5">
                    <a class="checkout-and-go-btn" href="{{ route('web.index') }}">
                        <span class="checkout-label">@lang('words.resume_to_shopping')</span>
                    </a>
                </div>
            @else
                <div class="cart-footer mt-5">
                    <a class="checkout-and-go-btn" href="{{ route('web.index') }}">
                        <span class="checkout-label">@lang('words.go_to_shopping')</span>
                    </a>
                </div>
            @endif
    </aside> --}}
    <div class="ec-side-wishlist-overlay"></div>
   <div id="ec-side-wishlist" class="ec-side-cart">
       <div class="ec-cart-inner">
           <div class="ec-cart-top">
               <div class="ec-cart-title">
                   <span class="cart_title">@lang('words.wishlist_count', ['count'=>Cart::instance('wishlist')->content()->count()])</span>
                   <button class="ec-close">×</button>
               </div>
               <ul class="eccart-pro-items">
                   asd
               </ul>
           </div>
           <div class="ec-cart-bottom">
               <div class="cart-sub-total">
                   <table class="table cart-table">
                       <tbody>
                           <tr>
                               <td class="text-left">Sub-Total :</td>
                               <td class="text-right">$300.00</td>
                           </tr>
                           <tr>
                               <td class="text-left">VAT (20%) :</td>
                               <td class="text-right">$60.00</td>
                           </tr>
                           <tr>
                               <td class="text-left">Total :</td>
                               <td class="text-right primary-color">$360.00</td>
                           </tr>
                       </tbody>
                   </table>
               </div>
               <div class="cart_btn">
                   <a href="cart.html" class="btn btn-primary">View Cart</a>
                   <a href="checkout.html" class="btn btn-secondary">Checkout</a>
               </div>
           </div>
       </div>
   </div>