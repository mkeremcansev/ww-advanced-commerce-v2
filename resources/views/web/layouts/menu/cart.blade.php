<div class="ec-side-cart-overlay"></div>
   <div id="ec-side-cart" class="ec-side-cart">
    <form action="{{ route('web.shopping.cart.update') }}" method="POST">
        @csrf
       <div class="ec-cart-inner">
           <div class="ec-cart-top">
               <div class="ec-cart-title">
                   <span class="cart_title">@lang('words.shopping_cart', ['count'=>Cart::instance('cart')->content()->count()])</span>
                   <button class="ec-close">×</button>
               </div>
               <ul class="eccart-pro-items">
                @if (Cart::instance('cart')->content()->count())
                    @foreach (Cart::instance('cart')->content() as $c)
                    @php($product = $c->model)
                    @php($attribute = $product->getOneProductAttributes)
                        <li>
                            <a href="{{ route('web.product.show', $attribute->slug) }}" class="sidecart_pro_img">
                                <img class="img-responsive-rounded" src="{{ asset($product->getOneProductImages->image) }}" alt="{{ $attribute->title }}">
                            </a>
                            <div class="ec-pro-content">
                                <a href="{{ route('web.product.show', $attribute->slug) }}" class="cart_pro_title">{{ $attribute->title }}</a>
                                <div>
                                    @foreach ($c->options['variants'] as $o)
                                    <p class="mb-0 mt-1">
                                        <span>@lang('words.get_variant_main', ['variant'=>$o->getOneVariantMain->title])</span>{{ $o->title }}
                                    </p>
                                @endforeach
                                </div>
                                <input type="hidden" name="rowId[]" value="{{ $c->rowId }}">
                                <span class="cart-price"><span>{{ getMoneyOrder($c->price * $c->qty) }}</span></span>
                                <div class="qty-plus-minus">
                                    <input class="qty-input" type="text" name="quantity[]" value="{{ $c->qty }}" />
                                    
                                </div>
                                <a href="{{ route('web.shopping.cart.delete', $c->rowId) }}" class="remove">×</a>
                            </div>
                        </li>
                    @endforeach
                    @else
                        <div class="mt-5">
                            <p class="text-center">@lang('words.shopping_cart_empty')</p>
                        </div>
                    @endif
               </ul>
           </div>
           <div class="ec-cart-bottom">
               @if (Cart::instance('cart')->content()->count())
                <div class="cart_btn mt-5">
                    <button type="submit" class="btn btn-primary">@lang('words.update')</button>
                </div>
                    @if (Session::get('coupon'))
                        <div class="cart_btn">
                            <a href="{{ route('web.payment.method') }}" class="btn btn-secondary">@lang('words.go_to_pay_coupon', ['price'=>getMoneyOrder(getCheckoutMoneyOrder(Cart::instance('cart')->subtotal()) - Session::get('coupon')['price']), 'code'=>Session::get('coupon')['code']])</a>
                        </div>
                    @else
                    <div class="cart_btn">
                        <a href="{{ route('web.payment.method') }}" class="btn btn-secondary">@lang('words.go_to_pay', ['price'=>getMoneyOrderShoppingCart(Cart::instance('cart')->subtotal())])</a>
                    </div>
                    @endif
               @else
                    <div class="cart_btn">
                        <a href="{{ route('web.index') }}" class="btn btn-secondary">@lang('words.go_to_shopping')</a>
                    </div>
                @endif
           </div>
       </div>
    </form>
   </div>