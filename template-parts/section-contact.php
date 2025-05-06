<?php
$alice_contact_title = carbon_get_the_post_meta( 'alice_contact_title' );
$alice_contact_text = carbon_get_the_post_meta( 'alice_contact_text' );

?>
<div class="contact" id="contact">
	<div class="container">
		<div class="section-header">
			<h3><?php echo esc_html( $alice_contact_title ); ?></h3>
			<p><?php echo esc_html( $alice_contact_text ); ?></p>
		</div>

		<div class="row align-items-center">
			<div class="col-md-6 mb-5 mb-md-0">
				<div class="contact-info">
					<?php if ( $alice_name ) : ?>
						<p><i class="fa fa-user"></i><?php echo esc_html( $alice_name ); ?></p>
					<?php endif; ?>

					<?php if ( $alice_position ) : ?>
						<p><i class="fa fa-tag"></i><?php echo esc_html( $alice_position ); ?></p>
					<?php endif; ?>

					<?php if ( $alice_address ) : ?>
						<p><i class="fa fa-map-marker"></i><?php echo esc_html( $alice_address ); ?></p>
					<?php endif; ?>

					<?php if ( $alice_email ) : ?>
						<p><i class="fa fa-envelope"></i><a
								href="mailto:<?php echo antispambot( esc_attr( $alice_email ) ); ?>"><?php echo antispambot( esc_html( $alice_email ) ); ?></a>
						</p>
					<?php endif; ?>

					<?php if ( $alice_phone ) : ?>
						<p><i class="fa fa-phone"></i><a
								href="tel:<?php echo esc_attr( $alice_phone ); ?>"><?php echo esc_html( $alice_phone ); ?></a>
						</p>
					<?php endif; ?>

					<div class="social">
						<?php if ( $alice_behance ) : ?>
							<a href="<?php echo esc_url( $alice_behance ); ?>"><i class="fa fa-behance"></i></a>
						<?php endif; ?>
						<?php if ( $alice_dribble ) : ?>
							<a href="<?php echo esc_url( $alice_dribble ); ?>"><i class="fa fa-dribbble"></i></a>
						<?php endif; ?>
						<?php if ( $alice_linkedin ) : ?>
							<a href="<?php echo esc_url( $alice_linkedin ); ?>"><i class="fa fa-linkedin"></i></a>
						<?php endif; ?>
						<?php if ( $alice_youtube ) : ?>
							<a href="<?php echo esc_url( $alice_youtube ); ?>"><i class="fa fa-youtube"></i></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form">
					<form action="#" class="mk-contact-form">
						<div class="form-row">
							<div class="form-group col-md-6">
								<input class="form-control" type="text" name="name"
									placeholder="<?php echo esc_attr__( 'Your Name', 'alice' ); ?>" required>
							</div>
							<input type="hidden" name="action" value="submit_form">
							<div class="form-group col-md-6">
								<input class="form-control" type="email" name="email"
									placeholder="<?php echo esc_attr__( 'Your Email', 'alice' ); ?>" required>
							</div>
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="subject"
								placeholder="<?php echo esc_attr__( 'Subject', 'alice' ); ?>">
						</div>
						<div class="form-group">
							<textarea rows="5" class="form-control" name="textarea"
								placeholder="<?php _e( 'Message', 'alice' ); ?>" required></textarea>
						</div>
						<div><button type="submit"><?php _e( 'Send', 'textdomain' ); ?></button></div>
					</form>
					<div class="form-message" style="margin-top: 15px;"></div>
				</div>
			</div>
		</div>
	</div>
</div>