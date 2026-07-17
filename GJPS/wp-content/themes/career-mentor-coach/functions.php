<?php

/**
 * Career Mentor Coach Theme
 *
 * @package CareerMentorCoach
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_theme_file_path( 'inc/register_block_patterns.php' );

/**
 * Theme setup
 */
if ( ! function_exists( 'career_mentor_coach_setup' ) ) {
	function career_mentor_coach_setup() {
		add_theme_support( 'editor-styles' );
	}
}

add_action( 'after_setup_theme', 'career_mentor_coach_setup' );

/**
 * Enqueue theme stylesheet
 */
function career_mentor_coach_enqueue_styles() {
	wp_enqueue_style(
		'career-mentor-coach-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}

add_action( 'wp_enqueue_scripts', 'career_mentor_coach_enqueue_styles' );

/**
 * Enqueue navigation active-state script
 */
function career_mentor_coach_enqueue_scripts() {
	$file_path = get_template_directory() . '/assets/js/navigation.js';
	wp_enqueue_script(
		'career-mentor-coach-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		file_exists( $file_path ) ? filemtime( $file_path ) : null,
		true
	);
}

add_action( 'wp_enqueue_scripts', 'career_mentor_coach_enqueue_scripts' );
