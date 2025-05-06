<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'mk_register_portfolio_fields' );
function mk_register_portfolio_fields() {
	Container::make( 'post_meta', 'Portfolio Details' )
		->where( 'post_type', '=', 'portfolio' )
		->add_fields( [ 
			Field::make( 'image', 'portfolio_card_image', 'Card Image' ),
			Field::make( 'text', 'portfolio_link', 'Project Link' ),
		] );
}