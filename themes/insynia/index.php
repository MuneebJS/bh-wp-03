<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Insynia
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main">
	<div class="container">
		<section class="hero">
			<h1 class="hero-greeting">hello world</h1>
			<p class="hero-tagline"><?php esc_html_e( 'A fresh, minimal WordPress theme.', 'insynia' ); ?></p>
		</section>
	</div>
</main>

<?php
get_footer();
