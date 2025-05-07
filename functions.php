<?php

require_once get_template_directory() . '/inc/enqueue-scripts.php';
require_once get_template_directory() . '/inc/ajax-form.php';
require_once get_template_directory() . '/inc/carbon/carbon-fields-options.php';
require_once get_template_directory() . '/inc/carbon/carbon-fields-intro.php';
require_once get_template_directory() . '/inc/carbon/carbon-fields-about.php';
require_once get_template_directory() . '/inc/carbon/carbon-fields-experience.php';
require_once get_template_directory() . '/inc/carbon/carbon-fields-services.php';
require_once get_template_directory() . '/inc/carbon/carbon-fields-counter.php';
require_once get_template_directory() . '/inc/carbon/carbon-fields-portfolio.php';
require_once get_template_directory() . '/inc/carbon/carbon-fields-section-portfolio.php';
require_once get_template_directory() . '/inc/carbon/carbon-fields-testimonials.php';
require_once get_template_directory() . '/inc/carbon/carbon-fields-contact.php';


require_once get_template_directory() . '/inc/post-types/alice-portfolio.php';
require_once get_template_directory() . '/inc/post-types/alice-portfolio-taxonomy.php';


if ( ! defined( 'THEME_VERSION' ) ) {
	$theme_version = wp_get_theme()->get( 'Version' );
	define( 'THEME_VERSION', $theme_version );
}

if ( ! defined( 'THEME_NAME' ) ) {
	define( 'THEME_NAME', 'alice' );
}

function alice_setup() {
	load_theme_textdomain( THEME_NAME, get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'header_menu' => esc_html__( 'Header menu', THEME_NAME )
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
			'unlink-homepage-logo' => true,
		)
	);
}
add_action( 'after_setup_theme', 'alice_setup' );