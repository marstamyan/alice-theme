<?php

get_header();
?>

<main class="site-main">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/section-intro', get_post_type() );
		}
	}
	?>
</main>

<?php

get_footer();