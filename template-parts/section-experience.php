<?php
$experience_alice_title = carbon_get_the_post_meta( 'experience_alice_title' );
$experience_alice_description = carbon_get_the_post_meta( 'experience_alice_description' );
$experience_alice_items = carbon_get_the_post_meta( 'experience_alice_items' );

?>
<div class="experience" id="experience">
	<div class="container">
		<header class="section-header">
			<h3><?php echo esc_html( $experience_alice_title ); ?></h3>
			<p><?php echo esc_html( $experience_alice_description ); ?></p>
		</header>
		<div class="row">
			<?php
			$experience_alice_items = carbon_get_the_post_meta( 'experience_alice_items' );

			if ( ! empty( $experience_alice_items ) ) :
				foreach ( $experience_alice_items as $item ) :
					$start_date = $item['experience_alice_start_date'];
					$end_date = $item['experience_alice_end_date'];
					$company = $item['experience_alice_company'];
					$position = $item['experience_alice_position'];
					$description = $item['experience_alice_description'];
					?>
					<div class="col-md-6">
						<div class="exp-column">
							<p class="exp-date"><?php echo esc_html( $start_date ); ?> <span>to</span>
								<?php echo esc_html( $end_date ); ?></p>
							<h4 class="exp-company"><?php echo esc_html( $company ); ?></h4>
							<h4 class="exp-designation"><?php echo esc_html( $position ); ?></h4>
							<p class="exp-detail"><?php echo esc_html( $description ); ?></p>
						</div>
					</div>
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</div>