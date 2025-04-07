<?php
/**
 * Setup theme
 *
 * @package fse-boilerplate
 * @since   1.0.0
 */

namespace FseBoilerplate\Setup;

/**
 * Setup theme
 *
 * @return void
 */
function theme_setup() {
	/**
	 * Make theme available for translation.
	 * Translations are located in languages/ directory.
	 * If you want to build your own theme, perform a find and replace at the root level
	 * to change 'fse-boilerplate' to the name of your theme.
	 */
	load_theme_textdomain( 'fse-boilerplate', get_template_directory() . '/languages' );

	/**
	 * Remove support for the core block pattern library.
	 */
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_setup' );

/**
 * Allow SVG uploads for administrators users
 *
 * @param   array $upload_mimes The array of allowed mime types.
 * @return  array The array of allowed mime types.
 * @link    https://developer.wordpress.org/reference/hooks/upload_mimes/
 */
function add_svg_mime_types( $upload_mimes ) {
	// By default, only administrator users are allowed to add SVGs.
	// To enable more user types edit or comment the lines below but beware of
	// the security risks if you allow any user to upload SVG files.
	if ( ! current_user_can( 'manage_options' ) ) {
		return $upload_mimes;
	}

	$upload_mimes['svg']  = 'image/svg+xml';
	$upload_mimes['svgz'] = 'image/svg+xml';

	return $upload_mimes;
}
add_filter( 'upload_mimes', __NAMESPACE__ . '\add_svg_mime_types' );

/**
 * Add SVG files mime check.
 *
 * @param array    $wp_check_filetype_and_ext Values for the extension, mime type, and corrected filename.
 * @param string   $file Full path to the file.
 * @param string   $filename The name of the file (may differ from $file due to $file being in a tmp directory).
 * @param string[] $mimes Array of mime types keyed by their file extension regex.
 */
function svg_mime_check( $wp_check_filetype_and_ext, $file, $filename, $mimes ) {
	if ( ! $wp_check_filetype_and_ext['type'] ) {

		$check_filetype  = wp_check_filetype( $filename, $mimes );
		$ext             = $check_filetype['ext'];
		$type            = $check_filetype['type'];
		$proper_filename = $filename;

		if ( $type && 0 === strpos( $type, 'image/' ) && 'svg' !== $ext ) {
			$ext  = false;
			$type = false;
		}

		$wp_check_filetype_and_ext = compact( 'ext', 'type', 'proper_filename' );
	}

	return $wp_check_filetype_and_ext;
}
add_filter( 'wp_check_filetype_and_ext', __NAMESPACE__ . '\svg_mime_check', 10, 4 );
