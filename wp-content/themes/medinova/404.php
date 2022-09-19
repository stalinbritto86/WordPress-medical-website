<?php

/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package medinova
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

include $theme_dir . '/templates/header.php'; // include header 
?>

			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action('generate_before_main_content');

			generate_do_template_part('404');

			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action('generate_after_main_content');


			include $theme_dir . '/templates/footer.php'; // include header
