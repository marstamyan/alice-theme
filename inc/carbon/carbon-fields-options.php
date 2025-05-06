<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	Container::make( 'theme_options', __( 'Alice Theme Options' ) )
		->add_fields( array(
			Field::make( 'text', 'alice_fullname', __( 'Full Name', 'alice' ) ),
			Field::make( 'text', 'alice_position', __( 'Position', 'alice' ) ),

			Field::make( 'text', 'alice_address', __( 'Address', 'alice' ) ),
			Field::make( 'text', 'alice_email', __( 'Email', 'alice' ) ),
			Field::make( 'text', 'alice_phone', __( 'Phone Number', 'alice' ) ),

			Field::make( 'text', 'alice_behance', __( 'Behance', 'alice' ) ),
			Field::make( 'text', 'alice_dribble', __( 'Dribble', 'alice' ) ),
			Field::make( 'text', 'alice_linkedin', __( 'LinkedIn', 'alice' ) ),
			Field::make( 'text', 'alice_youtube', __( 'YouTube', 'alice' ) ),
		) );
}