<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_fields_intro' );
function crb_fields_intro() {
	Container::make( 'post_meta', __( 'Intro Section', 'alice' ) )
		->where( 'post_id', '=', 8 )
		->add_tab( __( 'Intro content', 'alice' ), array(
			Field::make( 'text', 'alice_intro_name', __( 'Full Name', 'alice' ) ),
			Field::make( 'text', 'alice_intro_position', __( 'Position', 'alice' ) ),
			Field::make( 'image', 'alice_intro_image', __( 'Profile Image', 'alice' ) ),
			Field::make( 'image', 'alice_intro_bg', __( 'Background Image', 'alice' ) ),
		) );
}