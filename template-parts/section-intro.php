<?php
$intro_alice_image_id = carbon_get_the_post_meta( 'alice_intro_image' );
$intro_alice_bg_id = carbon_get_the_post_meta( 'alice_intro_bg' );

$intro_alice_image_url = $intro_alice_image_id ? wp_get_attachment_image_url( $intro_alice_image_id, 'full' ) : '';
$intro_alice_bg_url = $intro_alice_bg_id ? wp_get_attachment_image_url( $intro_alice_bg_id, 'full' ) : '';
?>

<div class="top-header" id="top-header"
	style="background-image: url('<?php echo esc_url( $intro_alice_bg_url ?: get_template_directory_uri() . '/assets/img/top-header.jpg' ); ?>');">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo esc_url( $intro_alice_image_url ?: get_template_directory_uri() . '/assets/img/profile-pic.jpg' ); ?>"
					alt="<?php echo esc_attr( $intro_alice_name ); ?>" />
			</div>

			<div class="col-md-12">
				<h1><?php echo esc_html( $alice_name ); ?></h1>
			</div>

			<div class="col-md-12">
				<p><?php echo esc_html( $alice_position ); ?></p>
				<h2></h2>
			</div>
		</div>
	</div>
</div>