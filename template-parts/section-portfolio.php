<?php
$portfolio_section_title = carbon_get_the_post_meta( 'portfolio_section_title' );
$portfolio_section_description = carbon_get_the_post_meta( 'portfolio_section_description' );
$portfolio_items = carbon_get_the_post_meta( 'portfolio_items' );
?>

<div class="portfolio" id="portfolio">
	<div class="container">
		<header class="section-header">
			<h3 class="section-title"><?php echo esc_html( $portfolio_section_title ); ?></h3>
			<p><?php echo esc_html( $portfolio_section_description ); ?></p>
		</header>

		<div class="row">
			<div class="col-lg-12">
				<ul id="portfolio-flters">
					<li data-filter="*" class="filter-active">All</li>
					<?php
					$terms = get_terms( [ 
						'taxonomy' => 'portfolio_category',
						'hide_empty' => true,
					] );
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
						foreach ( $terms as $term ) {
							echo '<li data-filter=".' . esc_attr( $term->slug ) . '">' . esc_html( $term->name ) . '</li>';
						}
					}
					?>
				</ul>
			</div>
		</div>

		<div class="row portfolio-container">
			<?php if ( ! empty( $portfolio_items ) ) : ?>
				<?php foreach ( $portfolio_items as $item ) :
					$post_id = $item['id'];

					$title = get_the_title( $post_id );

					$project_link = carbon_get_post_meta( $post_id, 'portfolio_link' );
					$link = $project_link ? esc_url( $project_link ) : get_permalink( $post_id );

					$card_image_id = carbon_get_post_meta( $post_id, 'portfolio_card_image' );
					$thumb = $card_image_id ? wp_get_attachment_image_url( $card_image_id, 'large' ) : get_the_post_thumbnail_url( $post_id, 'large' );

					$terms = get_the_terms( $post_id, 'portfolio_category' );
					$term_names = [];
					$filter_classes = '';
					if ( $terms && ! is_wp_error( $terms ) ) {
						foreach ( $terms as $term ) {
							$filter_classes .= ' ' . esc_attr( $term->slug );
							$term_names[] = esc_html( $term->name );
						}
					}
					?>
					<div class="col-lg-4 col-md-6 portfolio-item<?php echo $filter_classes; ?>">
						<div class="portfolio-wrap">
							<figure>
								<?php if ( $thumb ) : ?>
									<img src="<?php echo esc_url( $thumb ); ?>" class="img-fluid" alt="">
									<a href="<?php echo esc_url( $thumb ); ?>" data-lightbox="portfolio"
										data-title="<?php echo esc_attr( $title ); ?>" class="link-preview" title="Preview"><i
											class="fa fa-eye"></i></a>
								<?php endif; ?>
								<a href="<?php echo esc_url( $link ); ?>" class="link-details" target="_blank"
									title="More Details"><i class="fa fa-link"></i></a>
								<h4 class="portfolio-title"><?php echo esc_html( $title ); ?>
									<span><?php echo implode( ', ', $term_names ); ?></span>
								</h4>
							</figure>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>