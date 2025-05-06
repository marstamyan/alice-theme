<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'mk_add_portfolio_section_fields' );
function mk_add_portfolio_section_fields() {
	Container::make( 'post_meta', 'Portfolio Section' )
		->where( 'post_id', '=', 8 )
		->add_fields( [ 
			Field::make( 'text', 'portfolio_section_title', 'Section Title' )
				->set_default_value( 'My Portfolio' ),
			Field::make( 'textarea', 'portfolio_section_description', 'Section Description' ),
			Field::make( 'association', 'portfolio_items', 'Selected Portfolio Items' )
				->set_types( [ 
					[ 
						'type' => 'post',
						'post_type' => 'portfolio',
					]
				] )
		] );
}
