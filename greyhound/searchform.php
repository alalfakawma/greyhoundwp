<form action="<?php echo home_url("/"); ?>" method="get">
   <!--  <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" /> -->

    <input id="search-input" type="text" placeholder="Search.." name="s" value="<?php the_search_query(); ?>">
	<!-- <div id="search-button" src="<?php bloginfo("template_url"); ?>"><i class="fa fa-search"></i></div> -->
	<!-- <input type="submit" alt="Search" src="<?php bloginfo("template_url"); ?>" id="search-button"> -->
</form>