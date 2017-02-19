<div id="sidebar">
		<div id="about-me">
			<h2>About me</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum optio cumque incidunt maiores, fugiat cum temporibus, facilis exercitationem odio ad amet quia expedita dignissimos perferendis, rerum atque in laborum quibusdam.</p>
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