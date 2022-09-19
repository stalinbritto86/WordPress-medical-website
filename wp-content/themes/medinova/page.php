<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package medinova
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

include $theme_dir . '/templates/header.php'; // include header

if (generate_has_default_loop()) {
	while (have_posts()) :

		the_post();

		generate_do_template_part('page');

	endwhile;
}

/**
 * generate_after_main_content hook.
 *
 * @since 0.1
 */
do_action('generate_after_main_content');

/**
 * generate_after_primary_content_area hook.
 *
 * @since 2.0
 */
do_action('generate_after_primary_content_area');

include $theme_dir . '/templates/footer.php'; // include footer
