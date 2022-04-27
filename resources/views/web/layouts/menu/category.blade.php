@foreach ($children as $c)
    @if (count($c->getAllCategoriesCollection))
        <li class="dropdown position-static">
            <a href="{{ route('web.category.products.show', $c->slug) }}">{{ $c->title }}
                <i class="ecicon eci-angle-right"></i>
            </a>
            <ul class="sub-menu sub-menu-child">
                @include('web.layouts.menu.category', ['children'=>$c->getAllCategoriesCollection])
            </ul>
        </li>
    @else
        <li><a href="{{ route('web.category.products.show', $c->slug) }}">{{ $c->title }}</a></li>
    @endif
@endforeach
