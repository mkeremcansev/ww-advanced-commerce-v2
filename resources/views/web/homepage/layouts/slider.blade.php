<div class="ec-main-slider section mt-3">
    <div class="container">
        <div class="row">
            <div class="ec-slider swiper-container main-slider-nav main-slider-dot slide-item-img">
                <div class="swiper-wrapper">
                    @foreach (Cache::get('sliders') as $s)
                        <div class="ec-slide-item swiper-slide d-flex slide-item">
                            <div class="container align-self-center">
                                <div class="row">
                                    <div class="col-sm-12 justify-content-center">
                                        <img class="slide-item-img w-100" src="{{ asset($s->image) }}" alt="{{ setting('title') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination swiper-pagination-white"></div>
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div> 