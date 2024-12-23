<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This is a club that organically accommodates fitness zones for training in classical standards.">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?php echo home_url(); ?>">
				<img src="<?php the_field('website_logo', 'options'); ?>" alt="Fitnes Club Logo">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-fitness-menu" aria-controls="navbar-fitness-menu" aria-expanded="true" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php wp_nav_menu([
				'theme_location'  => 'header',
				// 'menu'            => '',
				'container'       => 'div',
				//'container' => false,
				'container_class' => 'collapse navbar-collapse justify-content-lg-end ps-3',
				'container_id'    => 'navbar-fitness-menu',
				// 'menu_class'      => 'menu',
				'menu_class'      => 'nav navbar-nav mb-2 mb-lg-0 align-items-lg-center',
				//'menu_id'         => '',
				// 'echo'            => true,
				// 'fallback_cb'     => 'wp_page_menu',
				// 'before'          => '',
				// 'after'           => '',
				// 'link_before'     => '',
				// 'link_after'      => '',
				// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				// 'depth'           => 0,
				// 'walker'          => '',
			]); ?>
			<div class="phone">
				<a class="phone_link" href="tel:<?php the_field('phone_number', 'options'); ?>"><i class="fa-solid fa-phone"></i></a>
			</div>
		</div>
	</nav>