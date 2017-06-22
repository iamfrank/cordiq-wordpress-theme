<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Cordiq
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<div class="wrap">

		<div class="site-branding-text">
            <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="Cordiq">
                <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cordiq-logo.svg" alt="Cordiq">
            </a>
		</div><!-- .site-branding-text -->

	</div><!-- .wrap -->
</div><!-- .site-branding -->
