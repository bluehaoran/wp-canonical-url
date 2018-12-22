<?php
/*
 * Plugin Name: Canonical URL for WP
 * Plugin URI: https://github.com/bluehaoran/wp-canonical-url
 * Description: A super-simple plugin to edit and display canonical URLs.
 * Author: Haoran Un <haoran@untoyou.net>
 */

// 1) if Admin, Add canonical URL metabox.
//
// 2) if non-admin, add canonical to wp_head().
add_action('wp_head', function () {
		$post_id = get_the_ID();
		$canonical_url = get_post_meta($post_id, 'canonical_url', true);
		if ($canonical_url) {
				echo '<link rel="canonical" href="'.$canonical_url.'">";
		}
});
