<?php get_header(); ?>

	<?php while(have_posts()) : the_post(); ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<div id="main-post">
			<p id="post-content">
				<?php the_content("Read More"); ?>
			</p>
		</div>
		
	<?php endwhile; ?>

<?php get_footer(); ?>