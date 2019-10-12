<ul id="menu-main-menu" class="menu nav-menu">
    @foreach($items as $menu_item)
        @if($menu_item->children->isNotEmpty())
            <li class="menu-item menu-item-type-post_type menu-item-object-page {{url()->current() === url($menu_item->url) ? 'active' : '' }}">
                <a href="{{ $menu_item->link() }}" class="dropdown-toggle" title="{{ $menu_item->title }}" target="{{ $menu_item->target }}">{{ $menu_item->title }} <span class="zoo-icon-down"></span></a>
                <ul class="dropdown-submenu">
                    @foreach($menu_item->children as $subItem)
                        <li class="menu-item menu-item-type-post_type menu-item-object-page page_item">
                            <a href="{{ $subItem->link() }}" title="{{ $subItem->title }}">{{ $subItem->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @elseif($menu_item->url == 'shop')
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="{{ $menu_item->link() }}" class="dropdown-toggle" title="{{ $menu_item->title }}" target="{{ $menu_item->target }}">{{ $menu_item->title }} <span class="zoo-icon-down"></span></a>
                <ul class="dropdown-submenu">
                    @foreach($product_categories as $subItem)
                        <li class="menu-item menu-item-type-post_type menu-item-object-page page_item">
                            <a href="{{ route('page.productCategory', ['slug' => $subItem->slug]) }}" title="{{ $subItem->title }}">{{ $subItem->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @else
            <li class="menu-item menu-item-type-post_type menu-item-object-page {{url()->current() === url($menu_item->url) ? 'active' : '' }}">
                <a href="{{ $menu_item->link() }}" target="{{ $menu_item->target }}">{{ $menu_item->title }}</a>
            </li>
        @endif
    @endforeach
</ul>
