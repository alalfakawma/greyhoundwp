<?php get_header(); ?>

	<?php while(have_posts()) : the_post(); ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<div id="post-meta-wrapper">
			<div id="post-meta">	
				<div id="post-time"><i class="fa fa-clock-o"></i><span class="meta-text"><?php the_time("F jS, Y"); ?></span></div>
				<div id="post-author"><i class="fa fa-user-o"></i><span class="meta-text">Posted by <?php the_author_posts_link(); ?></span></div>
				<div id="post-comments"><i class="fa fa-comment-o"></i><span class="meta-text"><a href="<?php comments_link(); ?>"><?php comments_number("0 Comments", "1 Comment", "% Comments"); ?></a></span></div>
			</div>
		</div>

		<a href="<?php the_permalink(); ?>"><div id="post-image"><?php the_post_thumbnail("full"); ?></div></a>

		<div id="main-post">
			<p id="post-content">
				<?php the_content("Read More"); ?>
			</p>
		</div>
	<?php endwhile; ?>

<?php get_footer(); ?>