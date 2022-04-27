<script>
    $(document).ready(function(){
        fetch('https://finans.truncgil.com/v3/today.json').then(function(response){
            response.json().then((data)=>{
                $('.usd').text('<?php echo app('translator')->get("words.usd", ["price"=>"'+data.USD.Selling+'", "currency_unit"=>__("words.currency_unit")]); ?>')
                $('.eur').text('<?php echo app('translator')->get("words.eur", ["price"=>"'+data.EUR.Selling+'", "currency_unit"=>__("words.currency_unit")]); ?>')
            })
        }).catch(function(){
            $('.usd').text('<?php echo app('translator')->get("words.not_have_data"); ?>')
            $('.eur').text('<?php echo app('translator')->get("words.not_have_data"); ?>')
        })
    })
    $('.simple-marquee-container').SimpleMarquee();
    // $('#shopping_modal_button').on('click', function(){
    //     localStorage.setItem('shopping_modal', true)
    // })
    // $(window).on('load', function() {
    //     if(localStorage.getItem('shopping_modal')){
    //         $('#shopping_modal').modal('hide');
    //     } else {
    //         $('#shopping_modal').modal('show');
    //     }
    // });

        const field = document.getElementById('search_input_typing');
        const ac = new Autocomplete(field, {
            data: [{"label":"<?php echo app('translator')->get('words.typing_your_word'); ?>", "value":""}],
            maximumItems: 8,
            threshold: 0,
            onSelectItem: ({label, value}) => {
                console.log($('#search_input_typing').val())
                $('#search_form').submit()
            }
        });
       $('#search_input_typing').on('keyup', function(){
        $.get( "<?php echo e(route('web.search.auto')); ?>", function( data ) {
            let products = []
            for(var i = 0; i < data.length; i++){
                products.push({"label":data[i].get_one_product_attributes.title, "value":data[i].get_one_product_attributes.title})
            }
            ac.setData(products)
        });
       });

        const field_m = document.getElementById('search_input_typing_mobile');
        const ac_m = new Autocomplete(field_m, {
            data: [{"label":"<?php echo app('translator')->get('words.typing_your_word'); ?>", "value":""}],
            maximumItems: 8,
            threshold: 0,
            onSelectItem: ({label, value}) => {
                console.log($('#search_input_typing_mobile').val())
                $('#search_form_mobile').submit()
            }
        });
       $('#search_input_typing_mobile').on('keyup', function(){
            $.get( "<?php echo e(route('web.search.auto')); ?>", function( data ) {
                let products = []
                for(var i = 0; i < data.length; i++){
                    products.push({"label":data[i].get_one_product_attributes.title, "value":data[i].get_one_product_attributes.title})
                }
                ac_m.setData(products)
            });
        });
        let words = [
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                "<?php echo e($r->title); ?>".replace(/&amp;/g, '&'),
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ];
        let i = 0;
        let timer;

        function typingEffect() {
        let word = words[i].split("");
        const loopTyping = function() {
            if (word.length > 0) {
            let text = document.getElementById('search_input_typing');
            text.setAttribute('placeholder', text.getAttribute('placeholder') + word.shift());
            } else {
                setTimeout(function(){
                    deletingEffect();
                }, 1500)
            
            return false;
            };
            timer = setTimeout(loopTyping, 50);
        };
        loopTyping();
        };

        function deletingEffect() {
        let word = words[i].split("");
        var loopDeleting = function() {
            if (word.length > 0) {
            word.pop();
            document.getElementById('search_input_typing').setAttribute('placeholder', word.join(""));
            } else {
            if (words.length > (i + 1)) {
                i++;
            } else {
                i = 0;
            };
            typingEffect();
                return false;
            };
            timer = setTimeout(loopDeleting, 50);
        };
        loopDeleting();
        };
        typingEffect();


        function typingEffect_m() {
        let word = words[i].split("");
        const loopTyping_m = function() {
            if (word.length > 0) {
            let text = document.getElementById('search_input_typing_mobile');
            text.setAttribute('placeholder', text.getAttribute('placeholder') + word.shift());
            } else {
                setTimeout(function(){
                    deletingEffect_m();
                }, 1500)
            
            return false;
            };
            timer = setTimeout(loopTyping_m, 50);
        };
        loopTyping_m();
        };

        function deletingEffect_m() {
        let word = words[i].split("");
        var loopDeleting_m = function() {
            if (word.length > 0) {
            word.pop();
            document.getElementById('search_input_typing_mobile').setAttribute('placeholder', word.join(""));
            } else {
            if (words.length > (i + 1)) {
                i++;
            } else {
                i = 0;
            };
            typingEffect_m();
                return false;
            };
            timer = setTimeout(loopDeleting_m, 50);
        };
        loopDeleting_m();
        };
        typingEffect_m();
</script><?php /**PATH C:\laragon\www\eticaretiniz\resources\views/web/layouts/script/script.blade.php ENDPATH**/ ?>