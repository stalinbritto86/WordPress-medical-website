<?php
/**
 * This file handles the customizer fields for the top bar.
 *
 * @package medinova
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access, please.
}

medinova_Customize_Field::add_title(
	'generate_top_bar_colors_title',
	array(
		'section' => 'generate_colors_section',
		'title' => __( 'Top Bar', 'medinova' ),
		'choices' => array(
			'toggleId' => 'top-bar-colors',
		),
		'active_callback' => 'generate_is_top_bar_active',
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[top_bar_background_color]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['top_bar_background_color'],
		'transport' => 'postMessage',
		'sanitize_callback' => 'generate_sanitize_rgba_color',
	),
	array(
		'label' => __( 'Background', 'medinova' ),
		'section' => 'generate_colors_section',
		'settings' => 'generate_settings[top_bar_background_color]',
		'active_callback' => 'generate_is_top_bar_active',
		'choices' => array(
			'alpha' => true,
			'toggleId' => 'top-bar-colors',
		),
		'output' => array(
			array(
				'element'  => '.top-bar',
				'property' => 'background-color',
			),
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[top_bar_text_color]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['top_bar_text_color'],
		'transport' => 'postMessage',
		'sanitize_callback' => 'generate_sanitize_rgba_color',
	),
	array(
		'label' => __( 'Text', 'medinova' ),
		'section' => 'generate_colors_section',
		'active_callback' => 'generate_is_top_bar_active',
		'choices' => array(
			'toggleId' => 'top-bar-colors',
		),
		'output' => array(
			array(
				'element'  => '.top-bar',
				'property' => 'color',
			),
		),
	)
);

medinova_Customize_Field::add_wrapper(
	'generate_top_bar_link_wrapper',
	array(
		'section' => 'generate_colors_section',
		'choices' => array(
			'type' => 'color',
			'toggleId' => 'top-bar-colors',
			'items' => array(
				'top_bar_link_color',
				'top_bar_link_color_hover',
			),
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[top_bar_link_color]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['top_bar_link_color'],
		'transport' => 'postMessage',
		'sanitize_callback' => 'generate_sanitize_rgba_color',
	),
	array(
		'label' => __( 'Link', 'medinova' ),
		'section' => 'generate_colors_section',
		'active_callback' => 'generate_is_top_bar_active',
		'choices' => array(
			'wrapper' => 'top_bar_link_color',
			'tooltip' => __( 'Choose Initial Color', 'medinova' ),
			'toggleId' => 'top-bar-colors',
		),
		'output' => array(
			array(
				'element'  => '.top-bar a',
				'property' => 'color',
			),
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[top_bar_link_color_hover]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['top_bar_link_color_hover'],
		'transport' => 'postMessage',
		'sanitize_callback' => 'generate_sanitize_rgba_color',
	),
	array(
		'label' => __( 'Link Hover', 'medinova' ),
		'section' => 'generate_colors_section',
		'active_callback' => 'generate_is_top_bar_active',
		'choices' => array(
			'wrapper' => 'top_bar_link_color_hover',
			'tooltip' => __( 'Choose Hover Color', 'medinova' ),
			'toggleId' => 'top-bar-colors',
			'hideLabel' => true,
		),
		'output' => array(
			array(
				'element'  => '.top-bar a:hover',
				'property' => 'color',
			),
		),
	)
);
