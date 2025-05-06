<?php
$alice_services_title = carbon_get_the_post_meta( 'alice_services_title' );
$alice_services_description = carbon_get_the_post_meta( 'alice_services_description' );
$CF = carbon_get_the_post_meta( 'alice_services_image' );
$alice_services_items = carbon_get_the_post_meta( 'alice_services_items' );
?>

<div class="services" id="services">
	<div class="container">
		<header class="section-header">
			<?php if ( $alice_services_title ) : ?>
				<h3><?php echo esc_html( $alice_services_title ); ?></h3>
			<?php endif; ?>

			<?php if ( $alice_services_description ) : ?>
				<p><?php echo esc_html( $alice_services_description ); ?></p>
			<?php endif; ?>
		</header>

		<div class="row">
			<?php if ( ! empty( $alice_services_items ) ) : ?>
				<?php foreach ( $alice_services_items as $service ) : ?>
					<div class="col-sm-6 col-md-4">
						<div class="single-service">
							<span></span>
							<div class="service-icon">
								<i class="<?php echo esc_attr( $service['alice_service_icon'] ); ?>"></i>
							</div>
							<h4><a href="#"><?php echo esc_html( $service['alice_service_title'] ); ?></a></h4>
							<p><?php echo esc_html( $service['alice_service_description'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>