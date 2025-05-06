<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_fields_services' );
function crb_fields_services() {
	Container::make( 'post_meta', 'Services Section' )
		->where( 'post_id', '=', 8 )
		->add_fields( array(
			Field::make( 'text', 'alice_services_title', 'Section Title' ),
			Field::make( 'textarea', 'alice_services_description', 'Section Description' )
				->set_rows( 2 ),
			Field::make( 'complex', 'alice_services_items', 'Service Items' )
				->set_layout( 'tabbed-horizontal' )
				->add_fields( array(
					Field::make( 'text', 'alice_service_icon', 'Font Awesome Icon Class' )
						->set_help_text( 'For Example: fa fa-laptop' ),
					Field::make( 'text', 'alice_service_title', 'Service Title' ),
					Field::make( 'textarea', 'alice_service_description', 'Service Description' )
						->set_rows( 2 ),
				) ),
		) );
}
