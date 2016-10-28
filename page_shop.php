<?php
/**
 * This file adds the Landing template to the Aspire Theme.
 *
 * @author Appfinite
 * @package App
 * @subpackage Customizations
 */

/*
Template Name: Shop Page
*/

//* Add custom body class to the head
add_filter( 'body_class', 'aspire_add_body_class' );
function aspire_add_body_class( $classes ) {

   $classes[] = 'shop-page';

   return $classes;

}

//* Remove the entry title (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

//* Add shop widget area
add_action( 'genesis_after_header', 'mil_shop_page_widgets', 14 );
function mil_shop_page_widgets(){
	if ( is_active_sidebar('shop-page') || is_active_sidebar( 'newsletter' ) ) { 
		genesis_widget_area( 'shop-page', array(
			'before' => '<div id="shop-page-area" class="shop-page-area">',
			'after'  => '</div>',
		) );
		genesis_widget_area( 'newsletter', array(
			'before' => '<div id="shop-page-area" class="shop-page-area optin">',
			'after'  => '</div>',
		) );

		//* Remove the default Genesis loop
		remove_action( 'genesis_loop', 'genesis_do_loop' );
	}
}

//* Run the Genesis loop
genesis();
