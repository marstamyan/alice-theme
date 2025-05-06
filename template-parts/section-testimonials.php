<?php
$alice_testimonial_bg = carbon_get_the_post_meta( 'alice_testimonial_bg_image' );
$alice_testimonials = carbon_get_the_post_meta( 'alice_testimonial_list' );
$alice_testimonial_bg_url = wp_get_attachment_image_url( $alice_testimonial_bg, 'full' );
?>

<?php if ( ! empty( $alice_testimonials ) ) : ?>
	<div class="testimonials" id="testimonials" <?php if ( $alice_testimonial_bg_url ) : ?>style="background-image: url('<?php echo esc_url( $alice_testimonial_bg_url ); ?>');" <?php endif; ?>>
		<div class="container">
			<i class="fa fa-4x fa-quote-left"></i>
			<div class="owl-carousel testimonials-carousel">
				<?php foreach ( $alice_testimonials as $testimonial ) :
					$name = esc_html( $testimonial['alice_testimonial_name'] );
					$position = esc_html( $testimonial['alice_testimonial_position'] );
					$text = esc_html( $testimonial['alice_testimonial_text'] );
					$photo = wp_get_attachment_image_url( $testimonial['alice_testimonial_photo'], 'thumbnail' );
					?>
					<div class="testimonial-item">
						<?php if ( $photo ) : ?>
							<img src="<?php echo esc_url( $photo ); ?>" class="testimonial-img" alt="<?php echo $name; ?>">
						<?php endif; ?>
						<h3><?php echo $name; ?></h3>
						<h4><?php echo $position; ?></h4>
						<p><?php echo $text; ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
<?php endif; ?>