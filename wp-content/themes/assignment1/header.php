<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= custom_title() ?></title>
	<!-- <title><?php bloginfo('name'); ?> ~ <?php bloginfo('description'); ?></title> -->
</head>
<body>

	<nav id="main-menu">
		<?php wp_nav_menu(['theme_location'=> 'main']); ?>		
	</nav>

