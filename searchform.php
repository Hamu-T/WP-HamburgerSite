<form action="<?php echo home_url('/'); ?>" class="p-search u-search" method="get">
    <div class="p-search__container">
        <input type="text" class="p-search__input c-input c-input--header inputValue" placeholder="検索..."
            name="s" id="s" value="<?php the_search_query(); ?>">
        <div class="p-search__grass c-grass c-grass--header"></div>
    </div>
    <button type="submit" class="p-search__button c-button c-button--header" id="searchsubmit">検索
    </button>
</form><!-- .p-search -->
