<?php

/**
 * The template used for displaying page content in page.php
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

		the_content();
