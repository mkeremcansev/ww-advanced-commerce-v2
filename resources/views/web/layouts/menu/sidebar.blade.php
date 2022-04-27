<div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
    <div class="ec-menu-title">
        <span class="menu_title">@lang('words.category_list')</span>
        <button class="ec-close">×</button>
    </div>
    <div class="ec-menu-inner">
        <div class="ec-menu-content">
            <ul>
                @foreach ($categories as $c)
                    <li><a href="{{ route('web.category.products.show', $c->slug) }}">{{ $c->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <p class="text-center mt-5">Canseworks</p>
</div>