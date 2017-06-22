<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">

    <label class="site-navigation-toggle" for="toggleSiteNav">
        <span class="site-navigation-toggle-label">Toggle navigation</span>
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </label>
    
    <input type="checkbox" id="toggleSiteNav">

    <div id="siteNav">
        <button class="site-navigation-close" title="Close navigation" onclick="document.getElementById('toggleSiteNav').checked = false;">&#215;</button>
        <?php wp_nav_menu( array(
            'theme_location' => 'top',
            'menu_id'        => 'top-menu',
        ) ); ?>
    </div>

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
    
</nav><!-- #site-navigation -->
