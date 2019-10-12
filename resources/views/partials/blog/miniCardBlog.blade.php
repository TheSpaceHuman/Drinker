<article class="post-loop-item list-layout-item col-12 post-3407 post type-post status-publish format-standard has-post-thumbnail hentry category-winnes tag-winnes">
    <div class="zoo-post-inner">
        <h3 class="entry-title title-post">
            <a href="{{ route('page.post', ['slug' => $post->slug]) }}" rel="bookmark">{{ $post->title }}</a></h3>
        <ul class="post-info">
            <li class="post-date">{{ $post->created_at->format('d-m-Y') }}</li>
        </ul>

        <div class="wrap-media">
            <a href="{{ route('page.post', ['slug' => $post->slug]) }}"
               title="London Fashion Week 2016" class="">
                <img src="{{Voyager::image($post->thumbnail('medium'))}}"
                     class="attachment-full size-full lazy-img wp-post-image loaded" alt="{{ $post->title }}"
                     data-lazied="IMG" width="1000" height="665"
                >
            </a>
        </div>
        <div class="entry-content excerpt">
            <p>{{ $post->excerpt }}</p>
        </div>
    </div>
</article>