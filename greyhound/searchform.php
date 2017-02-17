<form action="<?php echo home_url("/"); ?>" method="get">
    <input id="search-input" type="text" placeholder="Search.." name="s" value="<?php the_search_query(); ?>">
</form>