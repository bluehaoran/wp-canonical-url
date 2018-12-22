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
add_filter('get_canonical_url', function () {
		if (! is_singular()) {
			return;
		}
		$post_id = get_queried_object_id();
		$canonical_url = get_post_meta($post_id, 'canonical_url', true);
		return $canonical_url;
});
