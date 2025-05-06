<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php

	set_query_var( 'alice_name', carbon_get_theme_option( 'alice_fullname' ) );
	set_query_var( 'alice_position', carbon_get_theme_option( 'alice_position' ) );
	set_query_var( 'alice_address', carbon_get_theme_option( 'alice_address' ) );
	set_query_var( 'alice_email', carbon_get_theme_option( 'alice_email' ) );
	set_query_var( 'alice_phone', carbon_get_theme_option( 'alice_phone' ) );
	set_query_var( 'alice_behance', carbon_get_theme_option( 'alice_behance' ) );
	set_query_var( 'alice_dribble', carbon_get_theme_option( 'alice_dribble' ) );
	set_query_var( 'alice_linkedin', carbon_get_theme_option( 'alice_linkedin' ) );
	set_query_var( 'alice_youtube', carbon_get_theme_option( 'alice_youtube' ) );

	$alice_name = get_query_var( 'alice_name' );
	$alice_position = get_query_var( 'alice_position' );
	$alice_address = get_query_var( 'alice_address' );
	$alice_email = get_query_var( 'alice_email' );
	$alice_phone = get_query_var( 'alice_phone' );
	$alice_behance = get_query_var( 'alice_behance' );
	$alice_dribble = get_query_var( 'alice_dribble' );
	$alice_linkedin = get_query_var( 'alice_linkedin' );
	$alice_youtube = get_query_var( 'alice_youtube' );
	$tel_href = preg_replace( '/[^+\d]/', '', $alice_phone );

	?>


	<!-- Nav Start -->
	<div class="header">
		<div class="container">

			<div class="logo pull-left">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?>
					</a></h1>
			</div>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'header_menu',
				'menu_class' => 'nav-menu',
				'container' => 'nav',
				'container_id' => 'nav-menu-container',
			) );
			?>

			<nav class="nav social-nav pull-right d-none d-lg-inline">
				<?php if ( $alice_behance ) : ?>
					<a href="<?php echo esc_url( $alice_behance ); ?>"><i class="fa fa-behance"></i></a>
				<?php endif; ?>

				<?php if ( $alice_dribble ) : ?>
					<a href="<?php echo esc_url( $alice_dribble ); ?>"><i class="fa fa-dribbble"></i></a>
				<?php endif; ?>

				<?php if ( $alice_linkedin ) : ?>
					<a href="<?php echo esc_url( $alice_linkedin ); ?>"><i class="fa fa-linkedin"></i></a>
				<?php endif; ?>

				<?php if ( $alice_youtube ) : ?>
					<a href="<?php echo esc_url( $alice_youtube ); ?>"><i class="fa fa-youtube"></i></a>
				<?php endif; ?>
			</nav>
		</div>
	</div>
	<!-- Nav End -->