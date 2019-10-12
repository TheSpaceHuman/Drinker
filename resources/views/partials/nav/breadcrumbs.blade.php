@if (count($breadcrumbs))

    <div class="wrap-breadcrumb">
        <div class="container">
            <nav class="woocommerce-breadcrumb">
                @foreach ($breadcrumbs as $breadcrumb)

                    @if ($breadcrumb->url && !$loop->last)
                        <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                        <span class="cs-font clever-icon-arrow-right-1"></span>
                    @else
                        {{ $breadcrumb->title }}
                    @endif

                @endforeach
            </nav>
        </div>
    </div>

@endif


