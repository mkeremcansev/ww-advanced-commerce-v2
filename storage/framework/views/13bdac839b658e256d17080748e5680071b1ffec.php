
    <div class="ec-side-wishlist-overlay"></div>
   <div id="ec-side-wishlist" class="ec-side-cart">
       <div class="ec-cart-inner">
           <div class="ec-cart-top">
               <div class="ec-cart-title">
                   <span class="cart_title"><?php echo app('translator')->get('words.wishlist_count', ['count'=>Cart::instance('wishlist')->content()->count()]); ?></span>
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
   </div><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/layouts/menu/wish.blade.php ENDPATH**/ ?>