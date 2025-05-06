<?php

function alice_scripts() {
	wp_enqueue_style( 'alice-main-style', get_stylesheet_uri(), [], THEME_VERSION );
	wp_enqueue_style( 'alice-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CSolway:400,700&display=swap', [], null );

	wp_enqueue_style( 'alice-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', [], null );
	wp_enqueue_style( 'alice-fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', [], null );

	wp_enqueue_style( 'alice-owlcarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', [], THEME_VERSION );
	wp_enqueue_style( 'alice-lightbox', get_template_directory_uri() . '/assets/lib/lightbox/css/lightbox.min.css', [], THEME_VERSION );
	wp_enqueue_style( 'alice-style', get_template_directory_uri() . '/assets/css/style.css', [], THEME_VERSION );

	wp_enqueue_script( 'alice-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', [ 'jquery' ], THEME_VERSION, true );

	wp_enqueue_script( 'alice-typed-script', get_template_directory_uri() . '/assets/lib/typed/typed.min.js', [ 'jquery' ], THEME_VERSION, true );
	wp_enqueue_script( 'alice-theme-easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', [ 'jquery' ], THEME_VERSION, true );
	wp_enqueue_script( 'alice-theme-sticky', get_template_directory_uri() . '/assets/lib/stickyjs/sticky.js', [ 'jquery' ], THEME_VERSION, true );
	wp_enqueue_script( 'alice-theme-hoverintent', get_template_directory_uri() . '/assets/lib/superfish/hoverIntent.js', [ 'jquery' ], THEME_VERSION, true );
	wp_enqueue_script( 'alice-theme-superfish', get_template_directory_uri() . '/assets/lib/superfish/superfish.min.js', [ 'jquery' ], THEME_VERSION, true );
	wp_enqueue_script( 'alice-theme-waypoints', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', [ 'jquery' ], THEME_VERSION, true );
	wp_enqueue_script( 'alice-theme-counterup', get_template_directory_uri() . '/assets/lib/counterup/counterup.min.js', [ 'jquery' ], THEME_VERSION, true );
	wp_enqueue_script( 'alice-theme-owlcarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', [ 'jquery' ], THEME_VERSION, true );
	wp_enqueue_script( 'alice-theme-isotope', get_template_directory_uri() . '/assets/lib/isotope/isotope.pkgd.min.js', [ 'jquery' ], THEME_VERSION, true );
	wp_enqueue_script( 'alice-theme-lightbox', get_template_directory_uri() . '/assets/lib/lightbox/js/lightbox.min.js', [ 'jquery' ], THEME_VERSION, true );
	wp_enqueue_script( 'alice-script', get_template_directory_uri() . '/assets/js/script.js', [ 'jquery' ], THEME_VERSION, true );
	wp_enqueue_script( 'alice-contact', get_template_directory_uri() . '/assets/js/contact-form.js', [], THEME_VERSION, true );

	wp_localize_script( 'alice-contact', 'ajax_forms_data', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce( 'submit_form_nonce' ),
		'success_message' => __( 'Application submitted', 'alice' ),
		'error_message' => __( 'Some error occurred', 'alice' )
	) );

	if ( ! is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', false, '3.4.1' );
		wp_enqueue_script( 'jquery' );
	}
}
add_action( 'wp_enqueue_scripts', 'alice_scripts' );