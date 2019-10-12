<div class="zoo-search-box-container header-search-box header-search wrap-lb-search">
    <div class="wrap-form-lb-search">
        <a href="#" class="btn-close-lb-search btn"><i class="zoo-icon-close"></i></a>
        <form role="search" class="zoo-search-form header-search-form" action="{{ route('page.search') }}">
            <div class="wrap-input">
                <input type="search" class="input-text search-field"
                       placeholder="Поиск..."
                       value=""
                       name="search"
                       autocomplete="off"
                       title="Поиск..."
                />
            </div>
            <button type="submit" class="button search-submit">
                <i class="zoo-icon-search"></i>
            </button>
        </form>
    </div>
</div>