<?php
/**
 * Block patterns
 *
 * @package career-mentor-coach
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register block patterns.
 *
 * @since 1.0.0
 * @package career-mentor-coach
 */
function career_mentor_coach_register_block_patterns() {

	/**
	 * Block pattern categories.
	 *
	 * @since 1.0.0
	 * @package career-mentor-coach
	 */
	$block_pattern_categories = apply_filters(
		'career_mentor_coach_block_pattern_categories',
		array(
			'career-mentor-coach-hero'                    => array( 'label' => __( 'Career Mentor Coach - Hero', 'career-mentor-coach' ) ),
			'career-mentor-coach-header'                  => array( 'label' => __( 'Career Mentor Coach - Header', 'career-mentor-coach' ) ),
			'career-mentor-coach-footer'                  => array( 'label' => __( 'Career Mentor Coach - Footer', 'career-mentor-coach' ) ),
			'career-mentor-coach-about'                   => array( 'label' => __( 'Career Mentor Coach - About', 'career-mentor-coach' ) ),
			'career-mentor-coach-story'                   => array( 'label' => __( 'Career Mentor Coach - Story', 'career-mentor-coach' ) ),
			'career-mentor-coach-words-from-coach'        => array( 'label' => __( 'Career Mentor Coach - Philosophy', 'career-mentor-coach' ) ),
			'career-mentor-coach-achievements'            => array( 'label' => __( 'Career Mentor Coach - Achievements', 'career-mentor-coach' ) ),
			'career-mentor-coach-consultation'            => array( 'label' => __( 'Career Mentor Coach - Consultation', 'career-mentor-coach' ) ),
			'career-mentor-coach-consultation-hero'       => array( 'label' => __( 'Career Mentor Coach - Consultation Hero', 'career-mentor-coach' ) ),
			'career-mentor-coach-consultation-faq'        => array( 'label' => __( 'Career Mentor Coach - Consultation FAQ', 'career-mentor-coach' ) ),
			'career-mentor-coach-programs'                => array( 'label' => __( 'Career Mentor Coach - Programs', 'career-mentor-coach' ) ),
			'career-mentor-coach-programs-hero'           => array( 'label' => __( 'Career Mentor Coach - Programs Hero', 'career-mentor-coach' ) ),
			'career-mentor-coach-program-call-schedule'   => array( 'label' => __( 'Career Mentor Coach - Program Call Schedule', 'career-mentor-coach' ) ),
			'career-mentor-coach-program-detail-hero'     => array( 'label' => __( 'Career Mentor Coach - Program Detail Hero', 'career-mentor-coach' ) ),
			'career-mentor-coach-program-pricing-card'    => array( 'label' => __( 'Career Mentor Coach - Program Pricing Card', 'career-mentor-coach' ) ),
			'career-mentor-coach-program-week-breakdown'  => array( 'label' => __( 'Career Mentor Coach - Program Week Breakdown', 'career-mentor-coach' ) ),
			'career-mentor-coach-program-whats-included'  => array( 'label' => __( 'Career Mentor Coach - Program What\'s Included', 'career-mentor-coach' ) ),
			'career-mentor-coach-results'                 => array( 'label' => __( 'Career Mentor Coach - Results', 'career-mentor-coach' ) ),
			'career-mentor-coach-reviews'                 => array( 'label' => __( 'Career Mentor Coach - Reviews', 'career-mentor-coach' ) ),
			'career-mentor-coach-blog'                    => array( 'label' => __( 'Career Mentor Coach - Blog', 'career-mentor-coach' ) ),
			'career-mentor-coach-social-media'            => array( 'label' => __( 'Career Mentor Coach - Social Media', 'career-mentor-coach' ) ),
			'career-mentor-coach-get-started'             => array( 'label' => __( 'Career Mentor Coach - Get Started', 'career-mentor-coach' ) ),
			'career-mentor-coach-home'                    => array( 'label' => __( 'Career Mentor Coach - Home', 'career-mentor-coach' ) ),
			'career-mentor-coach-archive'                 => array( 'label' => __( 'Career Mentor Coach - Archive', 'career-mentor-coach' ) ),
			'career-mentor-coach-error-404'               => array( 'label' => __( 'Career Mentor Coach - 404', 'career-mentor-coach' ) ),
		)
	);

	// Register pattern categories.
	if ( ! empty( $block_pattern_categories ) ) {
		foreach ( $block_pattern_categories as $category_name => $category_properties ) {
			register_block_pattern_category(
				$category_name,
				$category_properties
			);
		}
	}

}

add_action( 'init', 'career_mentor_coach_register_block_patterns' );
