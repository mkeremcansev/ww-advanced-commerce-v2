@section('script')
    <script>
        $(document).ready(function(){
            $('.list-filter a').on('click', function(){
                let count = $(this).attr('variant-stock');
                $('.custom-stock').text('@lang("words.product_stock_count_detail", ["count"=>"'+count+'"])')
            })
            let add_to_cart_btn = $('#add-to-cart')    
            add_to_cart_btn.on('click', function(){
                let product_hash =  '{{ $product->hash }}'
                 let variants = [];
                $('ul .active').each(function() { 
                    variants.push($(this).attr('variant-hash')); 
                });
                let quantity = $('#quantity').val()
                $.ajax({
                    method: 'POST',
                    url: '{{ route("web.shopping.cart.store") }}',
                    data: {product_hash:product_hash, variants:variants, quantity:quantity},
                    dataType:'json',
                    success: function (response) {
                        if(response.status == 'error'){
                            Swal.fire({
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: '@lang("words.okey")'
                            })
                        } else if(response.status == 'success'){
                            add_to_cart_btn.addClass('custom-disabled')
                            Swal.fire({
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: '@lang("words.okey")',
                            }).then((result) => {
                                result.isConfirmed ? location.reload() : location.reload()
                            })
                        }
                    },
                    error: function (response) {
                        Swal.fire({
                            text: getValidateMessage(response),
                            icon: 'error',
                            confirmButtonText: '@lang("words.okey")'
                        })
                    }
                })
            })
            let add_to_wishlist_btn = $('#add-to-wishlist')    
            add_to_wishlist_btn.on('click', function(){
                let product_hash =  '{{ $product->hash }}'
                $.ajax({
                    method: 'POST',
                    url: '{{ route("web.wishlist.store") }}',
                    data: {product_hash:product_hash},
                    dataType:'json',
                    success: function (response) {
                        add_to_wishlist_btn.addClass('custom-disabled')
                        Swal.fire({
                            text: response.success,
                            icon: 'success',
                            confirmButtonText: '@lang("words.okey")',
                        }).then((result) => {
                            result.isConfirmed ? location.reload() : location.reload()
                        })
                    },
                    error: function (response) {
                        Swal.fire({
                            text: getValidateMessage(response),
                            icon: 'error',
                            confirmButtonText: '@lang("words.okey")'
                        })
                    }
                })
            })
            let add_to_review_btn = $('#add-to-review')
            let review_content = $('#review_content')
            add_to_review_btn.on('click', function(){
                let rating = $('.rating-input:checked').val();
                let content = $('#review_content').val();
                let product = '{{ $product->hash }}'
                $.ajax({
                    method: 'POST',
                    url: '{{ route("web.product.review.store") }}',
                    data: {rating:rating, content:content, product:product},
                    dataType:'json',
                    success: function (response) {
                        if(response.status == 'error'){
                            Swal.fire({
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: '@lang("words.okey")',
                            })
                        } else if(response.status == 'success'){
                            review_content.val('')
                            add_to_review_btn.addClass('custom-disabled')
                            Swal.fire({
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: '@lang("words.okey")',
                            }).then((result) => {
                                result.isConfirmed ? location.reload() : location.reload()
                            })
                        }
                            
                    },
                    error: function (response) {
                        Swal.fire({
                            text: getValidateMessage(response),
                            icon: 'error',
                            confirmButtonText: '@lang("words.okey")'
                        })
                    }
                })
            })
        })
    </script>
@endsection