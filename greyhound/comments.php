
<!-- DONT LET PEOPLE LOAD DIRECTLY -->
<?php if(!empty($_SERVER["SCRIPT_FILENAME"]) && "comments.php" == basename($_SERVER["SCRIPT_FILENAME"])) : ?>
	<?php die("Please do not load this page"); ?>
<?php endif; ?>

<!-- Check if post is password protected -->
<?php if(!empty($post->post_password)) : ?>
	<?php if($_COOKIE["wp-postpass_" . COOKIEHASH] != $post->password) : ?>
		<p>PASS PROTECTED</p>
	<?php endif; ?>
<?php endif; ?>

<!-- START COMMENT LOOP -->

<?php if($comments) : ?>
	<div id="comments-section">
	<div id="comments-title">
		Comments
	</div>
		<ol>
			<?php foreach ($comments as $comment) : ?>
			<div id="main-comments">
				<li class="comments" id="comment-<?php comment_ID(); ?>">
					<?php if($comment->comment_approved = "0") : ?>
					<p>Your comment is awaiting moderation.</p>
					<?php endif; ?>
					<div id="comment-meta"><?php comment_author_link(); ?> on <?php comment_date(); ?></div>
					<div id="comment-text"><?php comment_text(); ?></div>			
				</li>
			</div>
			<?php endforeach; ?>
		</ol>
	</div>

<!-- DISPLAY THIS IF NO COMMENTS ARE THERE -->
<?php else : ?>
	<div id="no-comment-text"><h2>No Comments. Be the first to comment!</h2></div>
<?php endif; ?>


<!-- IF COMMENTS ARE OPEN DO THIS -->
<?php if(comments_open()) : ?>
											
		<form action="<?php echo get_option("siteurl"); ?>/wp-comments-post.php" method="post">

		<div class="input-labels">
			<!-- <label for="author" class="comment-label">Name <?php if($req) echo "*" ?></label> -->
			<input class="input-fields" type="text" name="author" placeholder="Name" /> <!-- value="<?php echo $comment_author; ?>" --> 
		</div>

		<div class="input-labels">
			<!-- <label for="email" class="comment-label">Email <?php if($req) echo "*" ?></label> -->
			<input class="input-fields" type="text" name="email" placeholder="E-mail" /> <!-- value="<?php echo $comment_author_email; ?>" --> 
		</div>

		<div class="input-labels">
			<!-- <label for="url" class="comment-label">Website</label> -->		
			<input class="input-fields" type="text" name="url" placeholder="Website" /> <!-- value="<?php echo $comment_author_url; ?>" --> 
		</div>

		<div>
		<textarea id="textarea" name="comment" rows="5"></textarea>
		</div>	

		<p>
			<input id="submit-button" type="submit" name="submit" value="Submit" />
		</p>

		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		<?php do_action("comment_form", $post->ID); ?>
		</form>

<?php else : ?>
	<p>Comments closed!</p>
<?php endif; ?>