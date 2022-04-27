<div class="ec-side-wishlist-overlay"></div>
   <div id="ec-side-wishlist" class="ec-side-cart">
       <div class="ec-cart-inner">
           <div class="ec-cart-top">
               <div class="ec-cart-title">
                   <span class="cart_title">@lang('words.wishlist_count', ['count'=>Cart::instance('wishlist')->content()->count()])</span>
                   <button class="ec-close">×</button>
               </div>
               <ul class="eccart-pro-items">
                @if (Cart::instance('wishlist')->content()->count())
                    @foreach (Cart::instance('wishlist')->content() as $w)
                        @php($product = $w->model)
                        @php($attribute = $product->getOneProductAttributes)
                        <li>
                            <a href="{{ route('web.product.show', $attribute->slug) }}" class="sidecart_pro_img">
                                <img class="img-responsive-rounded" src="{{ asset($product->getOneProductImages->image) }}" alt="{{ $attribute->title }}">
                            </a>
                            <div class="ec-pro-content">
                                <a href="{{ route('web.product.show', $attribute->slug) }}" class="cart_pro_title">{{ $attribute->title }}</a>
                                <span class="cart-price"><span>{{ getMoneyOrder($w->price) }}</span></span>
                                <a href="{{ route('web.wishlist.delete', $w->rowId) }}" class="remove">×</a>
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
            @if (Cart::instance('wishlist')->content()->count())
             <div class="cart_btn mt-5">
                 <a href="{{ route('web.index') }}" class="btn btn-primary">@lang('words.resume_to_shopping')</a>
             </div>
            @else
                 <div class="cart_btn">
                     <a href="{{ route('web.index') }}" class="btn btn-secondary">@lang('words.go_to_shopping')</a>
                 </div>
             @endif
        </div>
       </div>
   </div>