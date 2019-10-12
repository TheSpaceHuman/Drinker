<nav id="element-mobile-menu" class="element-item element-mobile-menu mobile-menu mobile-menu-sidebar nav-menu-mobile mobile-menu-mobile style-plain site-navigation">
    <ul id="menu-main-menu-1" class="mobile-menu-ul menu nav-menu">
        @foreach($items as $menu_item)
            @if($menu_item->children->isNotEmpty())
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1915 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-4491 {{url()->current() === url($menu_item->url) ? 'active' : '' }}">
                    <a href="{{ $menu_item->link() }}" aria-current="page">{{ $menu_item->title }}<span class="zoo-icon-down"></span></a>
                    <ul class="sub-menu">
                        @foreach($menu_item->children as $subItem)
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4510">
                                <a href="{{ $subItem->link() }}">{{ $subItem->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @elseif($menu_item->url == 'shop')
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1915 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-4491 {{url()->current() === url($menu_item->url) ? 'active' : '' }}">
                    <a href="{{ $menu_item->link() }}" aria-current="page">{{ $menu_item->title }}<span class="zoo-icon-down"></span></a>
                    <ul class="sub-menu">
                        @foreach($product_categories as $subItem)
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4510">
                                <a href="{{ route('page.productCategory', ['slug' => $subItem->slug]) }}">{{ $subItem->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4472">
                    <a href="{{ $menu_item->link() }}" target="{{ $menu_item->target }}">{{ $menu_item->title }}</a>
                </li>
            @endif
        @endforeach

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4472">
                <a href="{{ route('page.basket') }}">Корзина</a>
            </li>
    </ul>
</nav>
