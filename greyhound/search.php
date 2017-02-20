<?php get_header(); ?>
	<!-- DISPLAY SEARCH RESULTS TITLE -->
	<h3>Search results for <?php the_search_query(); ?> :</h3>
	<?php 

// Check if there are posts
if (have_posts()) {
	// Loop over posts
	while(have_posts()) : the_post(); ?>
			
		<article id="excerpt">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

			<div id="post-meta-wrapper">
				<div id="post-meta">	
					<div id="post-time"><i class="fa fa-clock-o"></i><span class="meta-text"><?php the_time("F jS, Y"); ?></span></div>
					<!-- <div id="post-author"><i class="fa fa-user-o"></i><span class="meta-text">Posted by <?php the_author_posts_link(); ?></span></div> -->
					<div id="post-comments"><i class="fa fa-comment-o"></i><span class="meta-text"><a href="<?php comments_link(); ?>"><?php comments_number("0 Comments", "1 Comment", "% Comments"); ?></a></span></div>
				</div>
			</div>

			<div id="post-image"><?php if (has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('custom'); ?></a><?php endif; ?></div>

		<div id="main-post">
			<div id="post-content">
				<?php the_excerpt(); ?>
			</div>
		</div>

		</article>

	<?php endwhile;

}
else
{

	?>

	<!-- DISPLAY IF NO RESULTS FOUND -->

	<div id="no-result">

		<h4>No results found!</h4>

	</div>

<?php
}
?>


<?php get_footer(); ?>