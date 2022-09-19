<?php
/**
 * This file handles the customizer fields for the Body.
 *
 * @package medinova
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access, please.
}

medinova_Customize_Field::add_title(
	'generate_body_colors_title',
	array(
		'section' => 'generate_colors_section',
		'title' => __( 'Body', 'medinova' ),
		'choices' => array(
			'toggleId' => 'base-colors',
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[background_color]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $defaults['background_color'],
		'sanitize_callback' => 'generate_sanitize_hex_color',
		'transport' => 'postMessage',
	),
	array(
		'label' => __( 'Background', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'toggleId' => 'base-colors',
		),
		'output' => array(
			array(
				'element'  => 'body',
				'property' => 'background-color',
			),
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[text_color]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $defaults['text_color'],
		'sanitize_callback' => 'generate_sanitize_hex_color',
		'transport' => 'postMessage',
	),
	array(
		'label' => __( 'Text', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'toggleId' => 'base-colors',
		),
		'output' => array(
			array(
				'element'  => 'body',
				'property' => 'color',
			),
		),
	)
);

medinova_Customize_Field::add_wrapper(
	'generate_body_link_wrapper',
	array(
		'section' => 'generate_colors_section',
		'choices' => array(
			'type' => 'color',
			'toggleId' => 'base-colors',
			'items' => array(
				'link_color',
				'link_color_hover',
				'link_color_visited',
			),
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[link_color]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $defaults['link_color'],
		'sanitize_callback' => 'generate_sanitize_hex_color',
		'transport' => 'postMessage',
	),
	array(
		'label' => __( 'Link', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'wrapper' => 'link_color',
			'tooltip' => __( 'Choose Initial Color', 'medinova' ),
			'toggleId' => 'base-colors',
		),
		'output' => array(
			array(
				'element'  => 'a, a:visited',
				'property' => 'color',
			),
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[link_color_hover]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $defaults['link_color_hover'],
		'sanitize_callback' => 'generate_sanitize_hex_color',
		'transport' => 'postMessage',
	),
	array(
		'label' => __( 'Link Hover', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'wrapper' => 'link_color_hover',
			'tooltip' => __( 'Choose Hover Color', 'medinova' ),
			'toggleId' => 'base-colors',
			'hideLabel' => true,
		),
		'output' => array(
			array(
				'element'  => 'a:hover',
				'property' => 'color',
			),
		),
	)
);

if ( '' !== generate_get_option( 'link_color_visited' ) ) {
	medinova_Customize_Field::add_field(
		'generate_settings[link_color_visited]',
		'medinova_Customize_Color_Control',
		array(
			'default' => $defaults['link_color_visited'],
			'sanitize_callback' => 'generate_sanitize_hex_color',
			'transport' => 'refresh',
		),
		array(
			'label' => __( 'Link Color Visited', 'medinova' ),
			'section' => 'generate_colors_section',
			'choices' => array(
				'wrapper' => 'link_color_visited',
				'tooltip' => __( 'Choose Visited Color', 'medinova' ),
				'toggleId' => 'base-colors',
				'hideLabel' => true,
			),
		)
	);
}
