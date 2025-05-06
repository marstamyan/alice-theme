<?php
$alice_counter_items = carbon_get_the_post_meta( 'alice_counter_items' );

if ( $alice_counter_items ) : ?>
	<div class="counters">
		<div class="container">
			<div class="row">
				<?php foreach ( $alice_counter_items as $item ) :
					$icon = $item['alice_counter_icon'];
					$number = $item['alice_counter_number'];
					$label = $item['alice_counter_label'];
					?>
					<div class="col-md-3 col-sm-6">
						<div class="counter">
							<div class="counter-icon-box"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
							<div class="number animateNumber" data-toggle="counter-up">
								<span><?php echo esc_html( $number ); ?></span>
							</div>
							<h4 class="font-weight"><?php echo esc_html( $label ); ?></h4>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
<?php endif; ?>