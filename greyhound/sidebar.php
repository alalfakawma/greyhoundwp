<div id="sidebar">
		<div id="about-me">
			<h2>About me</h2>
			<p>Learning web developer. CSS/HTML/JS/PHP beginner. Mostly at home. Kinda anti-social. </br></br> P.S This theme is free to use and is on my github, check the footer.</p>
		</div>

		<div id="post-recent">
			<h2>Recent posts</h2>
			<ul>
				<?php
				    $args = array( 'numberposts' => '5' );
				    $recent_posts = wp_get_recent_posts( $args );
				    foreach( $recent_posts as $recent ){
				        printf( '<li><a href="%1$s">%2$s</a></li>',
				             esc_url( get_permalink( $recent['ID'] ) ),
				             apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
				         );
				    }
				?>
			</ul>
		</div>
	</div>