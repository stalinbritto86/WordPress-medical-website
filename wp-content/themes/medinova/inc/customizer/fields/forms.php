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
	'generate_forms_colors_title',
	array(
		'section' => 'generate_colors_section',
		'title' => __( 'Forms', 'medinova' ),
		'choices' => array(
			'toggleId' => 'form-colors',
		),
	)
);

medinova_Customize_Field::add_wrapper(
	'generate_forms_background_wrapper',
	array(
		'section' => 'generate_colors_section',
		'choices' => array(
			'type' => 'color',
			'toggleId' => 'form-colors',
			'items' => array(
				'form_background_color',
				'form_background_color_focus',
			),
		),
	)
);

$forms_selector = 'input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], textarea, select';
$forms_focus_selector = 'input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="number"]:focus, input[type="tel"]:focus, textarea:focus, select:focus';

medinova_Customize_Field::add_field(
	'generate_settings[form_background_color]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['form_background_color'],
		'sanitize_callback' => 'generate_sanitize_rgba_color',
		'transport' => 'postMessage',
	),
	array(
		'label' => __( 'Background', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'alpha' => true,
			'toggleId' => 'form-colors',
			'wrapper' => 'form_background_color',
			'tooltip' => __( 'Choose Initial Color', 'medinova' ),
		),
		'output' => array(
			array(
				'element'  => $forms_selector,
				'property' => 'background-color',
			),
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[form_background_color_focus]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['form_background_color_focus'],
		'sanitize_callback' => 'generate_sanitize_rgba_color',
		'transport' => 'postMessage',
	),
	array(
		'label' => __( 'Background Focus', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'alpha' => true,
			'toggleId' => 'form-colors',
			'wrapper' => 'form_background_color_focus',
			'tooltip' => __( 'Choose Focus Color', 'medinova' ),
			'hideLabel' => true,
		),
		'output' => array(
			array(
				'element'  => $forms_focus_selector,
				'property' => 'background-color',
			),
		),
	)
);

medinova_Customize_Field::add_wrapper(
	'generate_forms_text_wrapper',
	array(
		'section' => 'generate_colors_section',
		'choices' => array(
			'type' => 'color',
			'toggleId' => 'form-colors',
			'items' => array(
				'form_text_color',
				'form_text_color_focus',
			),
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[form_text_color]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['form_text_color'],
		'sanitize_callback' => 'generate_sanitize_hex_color',
		'transport' => 'postMessage',
	),
	array(
		'label' => __( 'Text', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'toggleId' => 'form-colors',
			'wrapper' => 'form_text_color',
			'tooltip' => __( 'Choose Initial Color', 'medinova' ),
		),
		'output' => array(
			array(
				'element'  => $forms_selector,
				'property' => 'color',
			),
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[form_text_color_focus]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['form_text_color_focus'],
		'sanitize_callback' => 'generate_sanitize_hex_color',
		'transport' => 'postMessage',
	),
	array(
		'label' => __( 'Text Focus', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'toggleId' => 'form-colors',
			'wrapper' => 'form_text_color_focus',
			'tooltip' => __( 'Choose Focus Color', 'medinova' ),
			'hideLabel' => true,
		),
		'output' => array(
			array(
				'element'  => $forms_focus_selector,
				'property' => 'color',
			),
		),
	)
);

medinova_Customize_Field::add_wrapper(
	'generate_forms_border_wrapper',
	array(
		'section' => 'generate_colors_section',
		'choices' => array(
			'type' => 'color',
			'toggleId' => 'form-colors',
			'items' => array(
				'form_border_color',
				'form_border_color_focus',
			),
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[form_border_color]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['form_border_color'],
		'sanitize_callback' => 'generate_sanitize_rgba_color',
		'transport' => 'postMessage',
	),
	array(
		'label' => __( 'Border', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'alpha' => true,
			'toggleId' => 'form-colors',
			'wrapper' => 'form_border_color',
			'tooltip' => __( 'Choose Initial Color', 'medinova' ),
		),
		'output' => array(
			array(
				'element'  => $forms_selector,
				'property' => 'border-color',
			),
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[form_border_color_focus]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['form_border_color_focus'],
		'sanitize_callback' => 'generate_sanitize_rgba_color',
		'transport' => 'postMessage',
	),
	array(
		'label' => __( 'Border Focus', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'alpha' => true,
			'toggleId' => 'form-colors',
			'wrapper' => 'form_border_color_focus',
			'tooltip' => __( 'Choose Focus Color', 'medinova' ),
			'hideLabel' => true,
		),
		'output' => array(
			array(
				'element'  => $forms_focus_selector,
				'property' => 'border-color',
			),
		),
	)
);
