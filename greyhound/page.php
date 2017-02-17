<?php get_header(); ?>

	<?php while(have_posts()) : the_post(); ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	<div id="page-section">
		<div id="main-post">
			<p id="post-content">
				<?php the_content("Read More"); ?>
			</p>
		</div>
	</div>
		
	<?php endwhile; ?>

<?php get_footer(); ?>