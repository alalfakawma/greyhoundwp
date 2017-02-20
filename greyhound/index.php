<?php get_header(); ?>

	<?php
if (have_posts()) {

	 while(have_posts()) : the_post(); ?>
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
				<?php the_content("Read More"); ?>
			</div>
		</div>
	<?php endwhile; 

}
else
{

	?>

	<div id="no-result">

		<h2>No blogposts yet.</h2>

	</div>

<?php
}
?>

	<div id="post-links" class="container">
	
		<div id="previous"><?php previous_posts_link(); ?></div>
		<div id="next"><?php next_posts_link(); ?></div>

	</div>

<?php get_footer(); ?>