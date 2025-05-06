<?php

function mk_register_portfolio_taxonomy() {
	register_taxonomy( 'portfolio_category', 'portfolio', [ 
		'labels' => [ 
			'name' => 'Portfolio Categories',
			'singular_name' => 'Portfolio Category',
		],
		'hierarchical' => false,
		'public' => true,
		'show_in_rest' => true,
	] );
}
add_action( 'init', 'mk_register_portfolio_taxonomy' );
