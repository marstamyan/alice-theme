<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_fields_experience' );
function crb_fields_experience() {
	Container::make( 'post_meta', 'Experience Section' )
		->where( 'post_id', '=', 8 )
		->add_fields( array(
			Field::make( 'text', 'experience_alice_title', 'Section Title' ),
			Field::make( 'textarea', 'experience_alice_description', 'Section Description' ),

			Field::make( 'complex', 'experience_alice_items', 'Job Experience Items' )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'date', 'experience_alice_start_date', 'Start Date' )
						->set_storage_format( 'Y-m-d' ),
					Field::make( 'date', 'experience_alice_end_date', 'End Date' )
						->set_storage_format( 'Y-m-d' ),
					Field::make( 'text', 'experience_alice_company', 'Company' ),
					Field::make( 'text', 'experience_alice_position', 'Position' ),
					Field::make( 'textarea', 'experience_alice_description', 'Description' ),
				) ),
		) );
}