<div class="cafe-slider-wrapper elementor-slick-slider" dir="ltr">
    <div class="cafe-slider-slides slick-arrows-inside cafe-hide-arrows-on-mobile slick-dots-inside cafe-hide-dots-on-tablet cafe-hide-dots-on-mobile"
         data-slider_options="{&quot;slidesToShow&quot;:1,&quot;autoplaySpeed&quot;:5000,&quot;autoplay&quot;:true,&quot;infinite&quot;:true,&quot;pauseOnHover&quot;:true,&quot;speed&quot;:500,&quot;arrows&quot;:true,&quot;dots&quot;:true,&quot;dotsClass&quot;:&quot;slick-dots&quot;,&quot;rtl&quot;:false}"
         data-animation="fadeInUp">
        @foreach($slider as $slide)
            <div class="elementor-repeater-item-cf3acb6 slick-slide">
                <div class="slick-slide-bg" data-animation="inherit" style="background-image: url({{Voyager::image($slide->image)}});"></div>
                <div class="slick-slide-inner">
                    <div class="cafe-slide-content" data-animation="inherit">
                        <div class="cafe-slide-heading">{{ $slide->title }}</div>
                        <div class="cafe-slide-desc">
                            {{ $slide->description }}
                        </div>
                        <a href="{{ $slide->link }}" class="cafe-button cafe-slide-btn elementor-size-sm normal">Подробно</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

