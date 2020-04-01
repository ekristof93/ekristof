<div class="generic-content-container">
    <form class="searchform" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
        <label class="searchform__label">
            <input class="searchform__input" type="search" class="search-field" placeholder="Keresés" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            <button class="searchform__submit" type="submit"><?php echo ekristof_get_svg(array('icon' => 'magnifying-glass')); ?></button>
        </label>
    </form>
</div>