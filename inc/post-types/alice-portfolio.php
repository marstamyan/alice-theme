<?php

function mk_register_portfolio_post_type() {
	register_post_type( 'portfolio', [ 
		'labels' => [ 
			'name' => 'Portfolio',
			'singular_name' => 'Portfolio Item',
		],
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => [ 'title' ],
		'show_in_rest' => true,
	] );
}
add_action( 'init', 'mk_register_portfolio_post_type' );

