<?php
/**
 * Enqueue scripts and styles.
 *
 * @package fse-boilerplate
 * @since   1.0.0
 */

namespace FseBoilerplate\Enqueue;

/**
 * Enqueue global styles and scripts for the front-end.
 *
 * @return void
 */
function fse_boilerplate_front_assets() {
	$script_asset = include get_theme_file_path( 'build/js/scripts.asset.php' );
	$style_asset  = include get_theme_file_path( 'build/css/global.asset.php' );

	wp_enqueue_script(
		'fse-boilerplate-global-scripts',
		get_theme_file_uri( 'build/js/scripts.js' ),
		$script_asset['dependencies'],
		$script_asset['version'],
		true
	);

	wp_enqueue_style(
		'fse-boilerplate-global-style',
		get_theme_file_uri( 'build/css/global.css' ),
		$style_asset['dependencies'],
		$style_asset['version']
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\fse_boilerplate_front_assets' );

/**
 * Enqueue global styles for the block editor.
 *
 * @return void
 */
function fse_boilerplate_editor_styles() {
	add_editor_style(
		array(
			get_theme_file_uri( 'build/css/global.css' ),
		)
	);
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\fse_boilerplate_editor_styles' );

/**
 * Enqueue editor styles and scripts for the block editor.
 *
 * @return void
 */
function fse_boilerplate_editor_assets() {
	$script_asset = include get_theme_file_path( 'build/js/editor.asset.php' );
	$style_asset  = include get_theme_file_path( 'build/css/editor.asset.php' );

	wp_enqueue_script(
		'fse-boilerplate-editor-scripts',
		get_theme_file_uri( 'build/js/editor.js' ),
		$script_asset['dependencies'],
		$script_asset['version'],
		true
	);

	wp_enqueue_style(
		'fse-boilerplate-editor-style',
		get_theme_file_uri( 'build/css/editor.css' ),
		$style_asset['dependencies'],
		$style_asset['version']
	);
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\fse_boilerplate_editor_assets' );
