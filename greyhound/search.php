<?php get_header(); ?>
	<h3>Search results for <?php the_search_query(); ?> :</h3>
	<?php while(have_posts()) : the_post(); ?>
		
	<article id="excerpt">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<div id="post-meta-wrapper">
			<div id="post-meta">	
				<div id="post-time"><i class="fa fa-clock-o"></i><span class="meta-text"><?php the_time("F jS, Y"); ?></span></div>
				<!-- <div id="post-author"><i class="fa fa-user-o"></i><span class="meta-text">Posted by <?php the_author_posts_link(); ?></span></div> -->
				<div id="post-comments"><i class="fa fa-comment-o"></i><span class="meta-text"><a href="<?php comments_link(); ?>"><?php comments_number("0 Comments", "1 Comment", "% Comments"); ?></a></span></div>
			</div>
		</div>

		<a href="<?php the_permalink(); ?>"><div id="post-image"><?php
		 	if ( has_post_thumbnail() ) { 
			    the_post_thumbnail( 'custom' ); 
			}
		 ?></div></a>

	<div id="main-post">
		<div id="post-content">
			<?php the_excerpt(); ?>
		</div>
	</div>

	</article>
	<?php endwhile; ?>

<?php get_footer(); ?>