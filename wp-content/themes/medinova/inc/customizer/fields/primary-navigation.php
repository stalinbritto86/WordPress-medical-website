<?php
/**
 * This file handles the customizer fields for the primary navigation.
 *
 * @package medinova
 *
 * @var array $color_defaults
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access, please.
}

$menu_hover_selectors = '.navigation-search input[type="search"], .navigation-search input[type="search"]:active, .navigation-search input[type="search"]:focus, .main-navigation .main-nav ul li:not([class*="current-menu-"]):hover > a, .main-navigation .main-nav ul li:not([class*="current-menu-"]):focus > a, .main-navigation .main-nav ul li.sfHover:not([class*="current-menu-"]) > a, .main-navigation .menu-bar-item:hover > a, .main-navigation .menu-bar-item.sfHover > a';
$menu_current_selectors = '.main-navigation .main-nav ul li[class*="current-menu-"] > a';
$submenu_hover_selectors = '.main-navigation .main-nav ul ul li:not([class*="current-menu-"]):hover > a,.main-navigation .main-nav ul ul li:not([class*="current-menu-"]):focus > a,.main-navigation .main-nav ul ul li.sfHover:not([class*="current-menu-"]) > a';
$submenu_current_selectors = '.main-navigation .main-nav ul ul li[class*="current-menu-"] > a';

medinova_Customize_Field::add_title(
	'generate_primary_navigation_colors_title',
	array(
		'section' => 'generate_colors_section',
		'title' => __( 'Primary Navigation', 'medinova' ),
		'choices' => array(
			'toggleId' => 'primary-navigation-colors',
		),
	)
);

// Navigation background group.
medinova_Customize_Field::add_color_field_group(
	'primary_navigation_background',
	'generate_colors_section',
	'primary-navigation-colors',
	array(
		'generate_settings[navigation_background_color]' => array(
			'default_value' => $color_defaults['navigation_background_color'],
			'label' => __( 'Navigation Background', 'medinova' ),
			'tooltip' => __( 'Choose Initial Color', 'medinova' ),
			'element' => '.main-navigation',
			'property' => 'background-color',
			'hide_label' => false,
		),
		'generate_settings[navigation_background_hover_color]' => array(
			'default_value' => $color_defaults['navigation_background_hover_color'],
			'label' => __( 'Navigation Background Hover', 'medinova' ),
			'tooltip' => __( 'Choose Hover Color', 'medinova' ),
			'element' => $menu_hover_selectors,
			'property' => 'background-color',
			'hide_label' => true,
		),
		'generate_settings[navigation_background_current_color]' => array(
			'default_value' => $color_defaults['navigation_background_current_color'],
			'label' => __( 'Navigation Background Current', 'medinova' ),
			'tooltip' => __( 'Choose Current Color', 'medinova' ),
			'element' => $menu_current_selectors,
			'property' => 'background-color',
			'hide_label' => true,
		),
	)
);

// Navigation text group.
medinova_Customize_Field::add_color_field_group(
	'primary_navigation_text',
	'generate_colors_section',
	'primary-navigation-colors',
	array(
		'generate_settings[navigation_text_color]' => array(
			'default_value' => $color_defaults['navigation_text_color'],
			'label' => __( 'Navigation Text', 'medinova' ),
			'tooltip' => __( 'Choose Initial Color', 'medinova' ),
			'element' => '.main-navigation .main-nav ul li a, .main-navigation .menu-toggle, .main-navigation button.menu-toggle:hover, .main-navigation button.menu-toggle:focus, .main-navigation .mobile-bar-items a, .main-navigation .mobile-bar-items a:hover, .main-navigation .mobile-bar-items a:focus, .main-navigation .menu-bar-items',
			'property' => 'color',
			'hide_label' => false,
		),
		'generate_settings[navigation_text_hover_color]' => array(
			'default_value' => $color_defaults['navigation_text_hover_color'],
			'label' => __( 'Navigation Text Hover', 'medinova' ),
			'tooltip' => __( 'Choose Hover Color', 'medinova' ),
			'element' => $menu_hover_selectors,
			'property' => 'color',
			'hide_label' => true,
		),
		'generate_settings[navigation_text_current_color]' => array(
			'default_value' => $color_defaults['navigation_text_current_color'],
			'label' => __( 'Navigation Text Current', 'medinova' ),
			'tooltip' => __( 'Choose Current Color', 'medinova' ),
			'element' => $menu_current_selectors,
			'property' => 'color',
			'hide_label' => true,
		),
	)
);

// Sub-Menu background group.
medinova_Customize_Field::add_color_field_group(
	'primary_navigation_submenu_background',
	'generate_colors_section',
	'primary-navigation-colors',
	array(
		'generate_settings[subnavigation_background_color]' => array(
			'default_value' => $color_defaults['subnavigation_background_color'],
			'label' => __( 'Sub-Menu Background', 'medinova' ),
			'tooltip' => __( 'Choose Initial Color', 'medinova' ),
			'element' => '.main-navigation ul ul',
			'property' => 'background-color',
			'hide_label' => false,
		),
		'generate_settings[subnavigation_background_hover_color]' => array(
			'default_value' => $color_defaults['subnavigation_background_hover_color'],
			'label' => __( 'Sub-Menu Background Hover', 'medinova' ),
			'tooltip' => __( 'Choose Hover Color', 'medinova' ),
			'element' => $submenu_hover_selectors,
			'property' => 'background-color',
			'hide_label' => true,
		),
		'generate_settings[subnavigation_background_current_color]' => array(
			'default_value' => $color_defaults['subnavigation_background_current_color'],
			'label' => __( 'Sub-Menu Background Current', 'medinova' ),
			'tooltip' => __( 'Choose Current Color', 'medinova' ),
			'element' => $submenu_current_selectors,
			'property' => 'background-color',
			'hide_label' => true,
		),
	)
);

// Sub-Menu text group.
medinova_Customize_Field::add_color_field_group(
	'primary_navigation_submenu_text',
	'generate_colors_section',
	'primary-navigation-colors',
	array(
		'generate_settings[subnavigation_text_color]' => array(
			'default_value' => $color_defaults['subnavigation_text_color'],
			'label' => __( 'Sub-Menu Text', 'medinova' ),
			'tooltip' => __( 'Choose Initial Color', 'medinova' ),
			'element' => '.main-navigation .main-nav ul ul li a',
			'property' => 'color',
			'hide_label' => false,
		),
		'generate_settings[subnavigation_text_hover_color]' => array(
			'default_value' => $color_defaults['subnavigation_text_hover_color'],
			'label' => __( 'Sub-Menu Text Hover', 'medinova' ),
			'tooltip' => __( 'Choose Hover Color', 'medinova' ),
			'element' => $submenu_hover_selectors,
			'property' => 'color',
			'hide_label' => true,
		),
		'generate_settings[subnavigation_text_current_color]' => array(
			'default_value' => $color_defaults['subnavigation_text_current_color'],
			'label' => __( 'Sub-Menu Text Current', 'medinova' ),
			'tooltip' => __( 'Choose Current Color', 'medinova' ),
			'element' => $submenu_current_selectors,
			'property' => 'color',
			'hide_label' => true,
		),
	)
);

medinova_Customize_Field::add_title(
	'generate_navigation_search_colors_title',
	array(
		'section' => 'generate_colors_section',
		'title' => __( 'Navigation Search', 'medinova' ),
		'choices' => array(
			'toggleId' => 'primary-navigation-search-colors',
		),
		'active_callback' => function() {
			if ( 'enable' === generate_get_option( 'nav_search' ) ) {
				return true;
			}

			return false;
		},
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[navigation_search_background_color]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['navigation_search_background_color'],
		'transport' => 'refresh',
		'sanitize_callback' => 'generate_sanitize_rgba_color',
	),
	array(
		'label' => __( 'Background', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'alpha' => true,
			'toggleId' => 'primary-navigation-search-colors',
		),
	)
);

medinova_Customize_Field::add_field(
	'generate_settings[navigation_search_text_color]',
	'medinova_Customize_Color_Control',
	array(
		'default' => $color_defaults['navigation_search_text_color'],
		'transport' => 'refresh',
		'sanitize_callback' => 'generate_sanitize_rgba_color',
	),
	array(
		'label' => __( 'Text', 'medinova' ),
		'section' => 'generate_colors_section',
		'choices' => array(
			'alpha' => true,
			'toggleId' => 'primary-navigation-search-colors',
		),
	)
);
