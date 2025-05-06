<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_fields_about_me' );
function crb_fields_about_me() {
	Container::make( 'post_meta', __( 'About Me Section', 'alice' ) )
		->where( 'post_id', '=', 8 )
		->add_tab( __( 'Content', 'alice' ), array(
			Field::make( 'image', 'alice_about_image', __( 'Image Left Side', 'alice' ) ),
			Field::make( 'text', 'alice_about_title', __( 'Section Title', 'alice' ) ),
			Field::make( 'rich_text', 'alice_about_text', __( 'Main Text Content', 'alice' ) ),
		) )
		->add_tab( __( 'Skills column 1', 'alice' ), array(
			Field::make( 'text', 'alice_about_skills_title_1', __( 'Skills column 1', 'alice' ) ),
			Field::make( 'complex', 'alice_about_skills_1', __( 'Skill title', 'alice' ) )
				->set_layout( 'tabbed-horizontal' )
				->add_fields( array(
					Field::make( 'text', 'name', __( 'Skill Name', 'alice' ) ),
					Field::make( 'text', 'percent', __( 'Percent', 'alice' ) ),
				) ),
		) )
		->add_tab( __( 'Skills column 2', 'alice' ), array(
			Field::make( 'text', 'alice_about_skills_title_2', __( 'Skills column 2', 'alice' ) ),
			Field::make( 'complex', 'alice_about_skills_2', __( 'Skill title', 'alice' ) )
				->set_layout( 'tabbed-horizontal' )
				->add_fields( array(
					Field::make( 'text', 'name', __( 'Skill Name', 'alice' ) ),
					Field::make( 'text', 'percent', __( 'Percent', 'alice' ) ),
				) ),
		) );
}
