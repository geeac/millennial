<?php
/**
 * This file adds the Landing template to the Aspire Theme.
 *
 * @author Appfinite
 * @package App
 * @subpackage Customizations
 */

/*
Template Name: Fullwidth
*/

//* Add custom body class to the head
add_filter( 'body_class', 'aspire_add_body_class' );
function aspire_add_body_class( $classes ) {

   $classes[] = 'fullwidth-page';

   return $classes;

}

//* Remove the entry title (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

//* Run the Genesis loop
genesis();
