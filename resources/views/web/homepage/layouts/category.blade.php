<section class="section ec-category-section section-space-p">
    <div class="container">
        <div class="row margin-minus-b-15 margin-minus-t-15">
            <div id="ec-cat-slider" class="ec-cat-slider owl-carousel">
                @foreach (Cache::get('r_categories') as $rc)
                    <div class="ec_cat_content ec_cat_content">
                        <div class="ec_cat_inner ec_cat_inner">
                            <div class="ec-category-image">
                                <img src="{{ asset($rc->image) }}" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <a href="{{ route('web.category.products.show', $rc->slug) }}"><h3>{{ $rc->title }}</h3></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>