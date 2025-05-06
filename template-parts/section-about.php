<?php
$about_alice_image_id = carbon_get_the_post_meta( 'alice_about_image' );
$about_alice_image_url = wp_get_attachment_image_url( $about_alice_image_id, 'full' );
$about_alice_title = carbon_get_the_post_meta( 'alice_about_title' );
$about_alice_text = carbon_get_the_post_meta( 'alice_about_text' );

$about_alice_skills_title_1 = carbon_get_the_post_meta( 'alice_about_skills_title_1' );
$about_alice_skills_list_1 = carbon_get_the_post_meta( 'alice_about_skills_1' );

$about_alice_skills_title_2 = carbon_get_the_post_meta( 'alice_about_skills_title_2' );
$about_alice_skills_list_2 = carbon_get_the_post_meta( 'alice_about_skills_2' );
?>

<div class="about" id="about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-lg-4">
				<?php if ( $about_alice_image_url ) : ?>
					<img class="img-fluid" src="<?php echo esc_url( $about_alice_image_url ); ?>" alt="">
				<?php endif; ?>
			</div>

			<div class="col-md-6 col-lg-8">
				<header class="section-header">
					<h2><?php echo esc_html( $about_alice_title ); ?></h2>
				</header>
				<h3><strong><?php esc_html_e( "Name:", "alice" ); ?> </strong><?php echo esc_html( $alice_name ); ?>
				</h3>
				<h4><strong><?php esc_html_e( "Profession:", "alice" ); ?>
					</strong><?php echo esc_html( $alice_position ); ?></h4>
				<?php echo wp_kses_post( $about_alice_text ); ?>
				<a href="#contact"><?php esc_html_e( "Hire Me", "alice" ); ?></a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="skills">
					<h3><?php echo esc_html( $about_alice_skills_title_1 ); ?></h3>

					<?php if ( $about_alice_skills_list_1 ) : ?>
						<?php foreach ( $about_alice_skills_list_1 as $skill ) : ?>
							<?php
							$name = $skill['name'];
							$percent = $skill['percent'];
							?>
							<div class="skill-name">
								<p><?php echo esc_html( $name ); ?></p>
								<p><?php echo esc_html( $percent ); ?>%</p>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $percent ); ?>"
									aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_attr( $percent ); ?>%;">
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="skills">
					<h3><?php echo esc_html( $about_alice_skills_title_2 ); ?></h3>

					<?php if ( $about_alice_skills_list_2 ) : ?>
						<?php foreach ( $about_alice_skills_list_2 as $skill ) : ?>
							<?php
							$name = $skill['name'];
							$percent = $skill['percent'];
							?>
							<div class="skill-name">
								<p><?php echo esc_html( $name ); ?></p>
								<p><?php echo esc_html( $percent ); ?>%</p>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $percent ); ?>"
									aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_attr( $percent ); ?>%;">
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>