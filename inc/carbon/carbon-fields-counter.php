<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_fields_counter' );
function crb_fields_counter() {
	Container::make( 'post_meta', 'Counters Section' )
		->where( 'post_id', '=', 8 )
		->add_fields( array(
			Field::make( 'complex', 'alice_counter_items', 'Counter Items' )
				->set_layout( 'tabbed-horizontal' )
				->add_fields( array(
					Field::make( 'text', 'alice_counter_icon', 'Font Awesome Icon Class' )
						->set_help_text( 'For example: fa fa-users' ),
					Field::make( 'text', 'alice_counter_number', 'Number (only digits)' )
						->set_help_text( 'Displayed number, e.g., 395' ),
					Field::make( 'text', 'alice_counter_label', 'Counter Label' )
						->set_help_text( 'For example: Completed Projects' ),
				) ),
		) );
}
