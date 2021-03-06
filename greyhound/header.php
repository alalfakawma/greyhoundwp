<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="aseem lalfakawma, aseem, lalfakawma, wordpress, blog, instagram, twitter, personal blog, blog, theme, web, developer, development, google">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title><?php bloginfo("title"); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>">
	<link href="https://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<!-- START HEADER -->
	<header id="main-header">

		<div id="header-name"><h1><a href="<?php echo home_url(); ?>"><?php bloginfo("name"); ?></a></h1></div>
		<div id="header-description"><?php bloginfo("description"); ?></div>

		<nav id="main-nav" class="container">
			<?php wp_nav_menu(); ?>

			<div id="searchbar">
				<?php get_search_form(); ?>
			</div>
				
		</nav>
	</header>
	<!-- HEADER PART ALL DONE -->
	<!-- CLEARFIX -->
<div class="clearfix"></div>
	<!-- CLEARFIX -->
	<!-- BLOG CONTAINER -->
<div class="container container-wrapper clearfix">
	<!-- START THE BODY/BLOG PART -->
	<div id="post-section">