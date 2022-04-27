{{-- <form action="{{ route('web.shopping.cart.update') }}" method="POST">
    @csrf
    <aside class="cart-sidebar">
        <div class="cart-header">
            <div class="cart-total">
                <i class="fas fa-shopping-basket"></i>
                <span>@lang('words.shopping_cart', ['count'=>Cart::instance('cart')->content()->count()])</span>
            </div>
            <button type="button" class="cart-close">
                <i class="icofont-close"></i>
            </button>
        </div>
            <ul class="cart-list">
                @if (Cart::instance('cart')->content()->count())
                    @foreach (Cart::instance('cart')->content() as $c)
                    @php($product = $c->model)
                    @php($attribute = $product->getOneProductAttributes)
                    <li class="cart-item">
                        <div class="cart-media">
                            <a>
                                <img src="{{ asset($product->getOneProductImages->image) }}" alt="{{ $attribute->title }}">
                            </a>
                            <button type="button" class="cart-delete">
                                <a href="{{ route('web.shopping.cart.delete', $c->rowId) }}">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </button>
                        </div>
                        <div class="cart-info-group">
                            <div class="cart-info">
                                <h6><a href="{{ route('web.product.show', $attribute->slug) }}">{{ $attribute->title }}</a></h6>
                                @foreach ($c->options['variants'] as $o)
                                    <p>
                                        <strong>@lang('words.get_variant_main', ['variant'=>$o->getOneVariantMain->title])</strong>{{ $o->title }}
                                    </p>
                                @endforeach
                            </div>
                            <div class="cart-action-group">
                                <div class="product-action">
                                    <button type="button" class="action-minus">
                                        <i class="icofont-minus"></i>
                                    </button>
                                    <input type="hidden" name="rowId[]" value="{{ $c->rowId }}">
                                    <input class="action-input" type="text" name="quantity[]" value="{{ $c->qty }}">
                                    <button type="button" class="action-plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                                <h6>{{ getMoneyOrder($c->price * $c->qty) }}</h6>
                            </div>
                        </div>
                    </li>
                    @endforeach
                @else
                    <div class="mt-5">
                        <h5 class="text-center">@lang('words.shopping_cart_empty')</h5>
                    </div>
                @endif
            </ul>
        @if (Cart::instance('cart')->content()->count())
            <div class="cart-footer">
                <div class="mb-1">
                    <button class="clear-and-update-btn col-lg-3">@lang('words.shopping_cart_update')</button>
                    <a href="{{ route('web.shopping.cart.destroy') }}" class="clear-and-update-btn">@lang('words.shopping_cart_clear')</a>
                </div>
                @if (Session::get('coupon'))
                    <a class="checkout-and-go-btn" href="{{ route('web.payment.method') }}">
                        <span class="checkout-label">@lang('words.go_to_pay_coupon', ['price'=>getMoneyOrder(getCheckoutMoneyOrder(Cart::instance('cart')->subtotal()) - Session::get('coupon')['price']), 'code'=>Session::get('coupon')['code']])</span>
                    </a>
                @else
                    <a class="checkout-and-go-btn" href="{{ route('web.payment.method') }}">
                        <span class="checkout-label">@lang('words.go_to_pay', ['price'=>getMoneyOrderShoppingCart(Cart::instance('cart')->subtotal())])</span>
                    </a>
                @endif
                
            </div>
        @else
            <div class="cart-footer mt-5">
                <a class="checkout-and-go-btn" href="{{ route('web.index') }}">
                    <span class="checkout-label">@lang('words.go_to_shopping')</span>
                </a>
            </div>
        @endif
    </aside>
</form> --}}
<div class="ec-side-cart-overlay"></div>
   <div id="ec-side-cart" class="ec-side-cart">
       <div class="ec-cart-inner">
           <div class="ec-cart-top">
               <div class="ec-cart-title">
                   <span class="cart_title">@lang('words.shopping_cart', ['count'=>Cart::instance('cart')->content()->count()])</span>
                   <button class="ec-close">×</button>
               </div>
               <ul class="eccart-pro-items">
                   <li>
                       <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                               src="{{ asset('web') }}/assets/images/product-image/93_1.jpg" alt="product"></a>
                       <div class="ec-pro-content">
                           <a href="single-product-left-sidebar.html" class="cart_pro_title">Mens Winter Leathers Jackets</a>
                           <span class="cart-price"><span>$49.00</span> x 1</span>
                           <div class="qty-plus-minus">
                               <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                           </div>
                           <a href="#" class="remove">×</a>
                       </div>
                   </li>
                   <li>
                       <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                               src="{{ asset('web') }}/assets/images/product-image/96_1.jpg" alt="product"></a>
                       <div class="ec-pro-content">
                           <a href="product-left-sidebar.html" class="cart_pro_title">Running & Trekking Shoes - White</a>
                           <span class="cart-price"><span>$150.00</span> x 1</span>
                           <div class="qty-plus-minus">
                               <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                           </div>
                           <a href="#" class="remove">×</a>
                       </div>
                   </li>
                   <li>
                       <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                               src="{{ asset('web') }}/assets/images/product-image/111_1.jpg" alt="product"></a>
                       <div class="ec-pro-content">
                           <a href="product-left-sidebar.html" class="cart_pro_title">Rose Gold Peacock Earrings</a>
                           <span class="cart-price"><span>$950.00</span> x 1</span>
                           <div class="qty-plus-minus">
                               <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                           </div>
                           <a href="#" class="remove">×</a>
                       </div>
                   </li>
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