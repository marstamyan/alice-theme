<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_fields_testimonials' );
function crb_fields_testimonials() {
	Container::make( 'post_meta', __( 'Testimonials', 'alice' ) )
		->where( 'post_id', '=', 8 )
		->add_fields( [ 
			Field::make( 'image', 'alice_testimonial_bg_image', 'Section BG image' ),
			Field::make( 'complex', 'alice_testimonial_list', __( 'Testimonials List', 'alice' ) )
				->set_layout( 'tabbed-horizontal' )
				->add_fields( 'alice_testimonial_item', [ 
					Field::make( 'text', 'alice_testimonial_name', __( 'Name', 'alice' ) ),
					Field::make( 'text', 'alice_testimonial_position', __( 'Position', 'alice' ) ),
					Field::make( 'textarea', 'alice_testimonial_text', __( 'Testimonial Text', 'alice' ) ),
					Field::make( 'image', 'alice_testimonial_photo', __( 'Photo', 'alice' ) ),
				] )
		] );
}
