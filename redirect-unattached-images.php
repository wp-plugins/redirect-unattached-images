<?php
/**
 * Plugin Name:  Redirect Unattached Images
 * Plugin URI:   http://robneu.com/redirect-unattached-images/
 * Description:  Redirect attachment pages for all unattached images to the current site's home page.
 * Version:      0.1.0
 * Author:       WP Site Care
 * Author URI:   http://www.wpsitecare.com
 * License:      GPL-2.0+
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Git URI:           https://github.com/wpsitecare/redirect-unattached-images
 * GitHub Plugin URI: https://github.com/wpsitecare/redirect-unattached-images
 * GitHub Branch:     master
 *
 * @package  RedirectUnattachedImages
 * @category Core
 * @author   Robert Neu
 * @version  0.1.0
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

add_action( 'template_redirect', 'sitecare_redirect_unattached_images' );
/**
 * Redirects the attachment page for any image which has not been attached to a
 * post, page, or custom post type to the current site's home URL.
 *
 * @since  0.1.0
 * @uses   is_attachment()
 * @uses   get_queried_object()
 * @return void
 */
function sitecare_redirect_unattached_images() {
	$parent = get_queried_object()->post_parent;
	if ( is_attachment() && empty( $parent ) ) {
		wp_safe_redirect(
			esc_url_raw( apply_filters( 'sitecare_redirect_unattached_images', get_home_url() ) ),
			301
		);
		exit;
	}
}
