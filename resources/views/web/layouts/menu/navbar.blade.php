<div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <div class="ec-main-menu">
                    <ul>
                        @foreach ($categories as $c)
                            @if (count($c->getAllCategoriesCollection))
                                <li class="dropdown"><a href="{{ route('web.category.products.show', $c->slug) }}">{{ $c->title }}</a>
                                    <ul class="sub-menu">
                                        @include('web.layouts.menu.category',
                                        ['children'=>$c->getAllCategoriesCollection])
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{ route('web.category.products.show', $c->slug) }}">{{ $c->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
