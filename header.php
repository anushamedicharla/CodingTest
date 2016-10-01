<?php
/**
 * The header file displays all of the head element and everything up until the "site-content" div.
 */ ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charst'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="container-80">
			<header>
				<a href="http://www.stitchlabs.com/">
					<img class="site-logo" src="http://localhost/wordpress/wp-content/uploads/2016/10/logo.png">
				</a>
				<nav class="main-nav">
					<?php wp_nav_menu(array('theme_locations' => 'main-menu')) ?>
				</nav>
			</header>
		</div> <!-- container -->
	</div> <!-- container-80 -->