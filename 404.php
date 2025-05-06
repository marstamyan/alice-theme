<?php
get_header();
?>

<style>
	.not-found-page {
		height: 80vh;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		min-height: 60vh;
		text-align: center;
		padding: 80px 20px;
	}

	.not-found-page h1 {
		font-size: 48px;
		margin-bottom: 20px;
		color: #333;
	}

	.not-found-page p {
		font-size: 18px;
		color: #242424;
		margin-bottom: 30px;
	}

	.not-found-page a.btn {
		display: inline-block;
		padding: 12px 24px;
		background-color: #AF9483;
		color: #fff;
		text-decoration: none;
		border-radius: 4px;
		font-weight: bold;
		transition: background-color 0.3s;
	}

	.not-found-page a.btn:hover {
		background-color: #005177;
	}
</style>

<main class="site-main not-found-page">
	<h1><?php esc_html_e( 'Oops! Page not found.', 'alice' ); ?></h1>
	<p>
		<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try going back to the homepage?', 'alice' ); ?>
	</p>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">
		<?php esc_html_e( 'Return to homepage', 'alice' ); ?>
	</a>
</main>

<?php
get_footer();
