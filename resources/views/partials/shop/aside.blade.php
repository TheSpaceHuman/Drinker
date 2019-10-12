<div class="elementor-element elementor-element-5d50d3f elementor-column elementor-col-33 elementor-top-column"
     data-id="5d50d3f" data-element_type="column">
    <div class="elementor-column-wrap  elementor-element-populated">
        <div class="elementor-widget-wrap">
            <div class="elementor-element elementor-element-210ceb0 elementor-widget elementor-widget-clever-product-list-categories"
                 data-id="210ceb0" data-element_type="widget"
                 data-widget_type="clever-product-list-categories.default">

                <div class="elementor-widget-container">
                    <div class="woocommerce cafe-products-wrap  cafe-grid-lg-1-cols cafe-grid-md-1-cols cafe-grid-1-cols ">
                        <div class="cafe-head-product-filter heading-toggle-block">
                            <h3 class="cafe-title">Категории</h3>
                        </div>
                        <ul class="products list_cate content-toggle-block">
                            @foreach($productCategories as $category)
                                <li class="product category-item">
                                    <div class="wrap-product-loop-content">
                                        <div class="category-image"></div>
                                        <div class="category-content wrap-product-loop-detail">
                                            <h3 class="product-loop-title">
                                                <a href="{{ route('page.productCategory', ['slug' => $category->slug]) }}" title="{{ $category->title }}">{{ $category->title }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

