<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: vlad-->
<!-- * Date: 2016-10-10-->
<!-- * Time: 02:18-->
<!-- */-->

<!DOCTYPE html>
	<html <?php language_attributes() ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name');?></title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class();?>>
	<div class="container">
	<!--site-header-->
	<header class="site-header">
		<h1><?php bloginfo('name')?></h1>
		<h5><?php bloginfo('description'); ?></h5>
		<nav class="site-nav">
			<?php
			wp_reset_query();
			$args = array(
				'theme_location' => 'primary'
			);

			?>
			<?php wp_nav_menu( $args );?>
		</nav>
	</header>
