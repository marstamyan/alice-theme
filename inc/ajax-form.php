<?php

add_action( 'wp_ajax_submit_form', 'submit_contact_form_callback' );
add_action( 'wp_ajax_nopriv_submit_form', 'submit_contact_form_callback' );

function submit_contact_form_callback() {
	if ( ! wp_verify_nonce( $_POST['nonce'], 'submit_form_nonce' ) ) {
		echo 'invalid_nonce';
		wp_die();
	}

	$name = isset( $_POST['name'] ) ? sanitize_text_field( $_POST['name'] ) : '';
	$email = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';
	$subject = isset( $_POST['subject'] ) ? sanitize_text_field( $_POST['subject'] ) : '';
	$message = isset( $_POST['textarea'] ) ? sanitize_textarea_field( $_POST['textarea'] ) : '';

	if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
		echo 'error_missing_fields';
		wp_die();
	}

	if ( ! is_email( $email ) ) {
		echo 'invalid_email';
		wp_die();
	}

	if ( strlen( $message ) > 2000 ) {
		echo 'message_too_long';
		wp_die();
	}

	$to = 'mamikonars@gmail.com';
	$subject = __( 'New Contact Request', 'alice' );
	$body = "
        <html><body>
        <h2>New message:</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <p><strong>Message:</strong><br>" . nl2br( $message ) . "</p>
        </body></html>
    ";
	$headers = array( 'Content-Type: text/html; charset=UTF-8' );

	if ( wp_mail( $to, $subject, $body, $headers ) ) {
		echo 'success';
	} else {
		echo 'mail_failed';
	}

	wp_die();
}