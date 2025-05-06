<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_fields_contact' );
function crb_fields_contact() {
	Container::make( 'post_meta', __( 'Contact info', 'alice' ) )
		->where( 'post_id', '=', 8 )
		->add_fields( array(
			Field::make( 'text', 'alice_contact_title', __( 'Contact Title', 'alice' ) ),
			Field::make( 'rich_text', 'alice_contact_text', __( 'Contact Description', 'alice' ) ),
		) );
}
