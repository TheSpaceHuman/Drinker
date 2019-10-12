<div class="recommended">

    @if($action == 'edit')
        @php
            $currentProduct = \App\Product::find($dataTypeContent->id);
            $recommendedIds = $currentProduct->recommended;
            $recommendedIds = str_replace(['[', ']', '"'], '', $recommendedIds);
            $recommendedIds = explode(',', $recommendedIds);
        @endphp

        <select class="form-control select2 select2-hidden-accessible" name="recommended[]" multiple="" data-select2-id="1" tabindex="-1" aria-hidden="true">
            @foreach($products as $product)
                <option value="{{ $product->id }}" {{ in_array($product->id, $recommendedIds) ? 'selected' : '' }}>{{ $product->title }}</option>
            @endforeach
        </select>

    @else
        <select class="form-control select2 select2-hidden-accessible" name="recommended[]" multiple="" data-select2-id="1" tabindex="-1" aria-hidden="true">
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->title }}</option>
            @endforeach
        </select>
    @endif


</div>