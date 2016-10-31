<?php
/**
 * Handles display of 404 page.
 *
 * This file should be added in the directory of your child theme! 
 *
 * @category Genesis
 * @package  Templates
 * @author   StudioPress
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.studiopress.com/themes/genesis
 */
/** Remove default loop **/
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'genesis_404' );
/**
 * This function outputs a 404 "Not Found" error message
 *
 * @since 1.6
 */
function genesis_404() { ?>

  <div class="post hentry">

		<h1 class="entry-title"><?php _e( 'Uh-Oh! It looks like you are lost!', 'genesis' ); ?></h1>
		<div class="entry-content">
			<p><?php printf( __( 'The page you are looking for no longer exists. Perhaps you can return back to the site\'s <a href="%s">homepage</a> and see if you can find what you are looking for.', 'genesis' ), home_url() ); ?></p>
			<p><?php printf( __( 'Or you can try a link from the navigation.' ) ); ?></p>
		</div><!-- end .entry-content -->

	</div><!-- end .postclass -->

<?php
}
genesis();