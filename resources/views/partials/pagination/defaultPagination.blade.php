@if ($paginator->hasPages())
<nav class="woocommerce-pagination">
    <ul class="page-numbers" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())

        @else
            <li>
                <a class="prev page-numbers" rel="prev" href="{{ $paginator->previousPageUrl() }}">
                    <i class="zoo-icon-long-arrow-left"></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><span aria-current="page" class="page-numbers current">{{ $page }}</span></li>
                    @else
                        <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a class="next page-numbers" rel="next" href="{{ $paginator->nextPageUrl() }}">
                    <i class="zoo-icon-long-arrow-right"></i>
                </a>
            </li>
        @else

        @endif
    </ul>
</nav>
@endif
