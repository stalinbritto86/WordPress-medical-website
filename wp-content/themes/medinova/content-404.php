<?php

/**
 * The template for displaying 404 pages.
 *
 * @package medinova
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>

	<?php
	/**
	 * generate_before_content hook.
	 *
	 * @since 0.1
	 *
	 * @hooked generate_featured_page_header_inside_single - 10
	 */
	do_action('generate_before_content');
	?>

	<?php
	/**
	 * generate_after_entry_header hook.
	 *
	 * @since 0.1
	 *
	 * @hooked generate_post_image - 10
	 */
	do_action('generate_after_entry_header');

	$itemprop = '';

	if ('microdata' === generate_get_schema_type()) {
		$itemprop = ' itemprop="text"';
	}

	$theme_dir = get_template_directory();
	include $theme_dir . '/pages/404.php'; // include header

	/**
	 * generate_after_content hook.
	 *
	 * @since 0.1
	 */
	do_action('generate_after_content');
	?>