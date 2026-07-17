<?php
defined( 'ABSPATH' ) || die();

global $wpdb;

$searchBy = $filter['search_by'];
$where    = '';

if ( 'search_by_class' === $searchBy ) {
	$class_id   = isset( $filter['class_id'] ) ? absint( $filter['class_id'] ) : 0;
	$section_id = isset( $filter['section_id'] ) ? absint( $filter['section_id'] ) : 0;

	if ( $class_id ) {
		$where .= $wpdb->prepare( ' AND cs.class_id = %d', $class_id );
		if ( $section_id ) {
			$where .= $wpdb->prepare( ' AND se.ID = %d', $section_id );
		}
	}

} else {
	$search_field   = isset( $filter['search_field'] ) ? $filter['search_field'] : '';
	$search_keyword = isset( $filter['search_keyword'] ) ? $filter['search_keyword'] : '';

	if ( $search_field ) {
		if ( 'admission_number' == $search_field ) {
			$where .= $wpdb->prepare( ' AND sr.admission_number LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		} else if ( 'enrollment_number' == $search_field ) {
			$where .= $wpdb->prepare( ' AND sr.enrollment_number LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		} else if ( 'name' == $search_field ) {
			$where .= $wpdb->prepare( ' AND sr.name LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		} else if ( 'phone' == $search_field ) {
			$where .= $wpdb->prepare( ' AND sr.phone LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		} else if ( 'email' == $search_field ) {
			$where .= $wpdb->prepare( ' AND sr.email LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		} else if ( 'father_name' == $search_field ) {
			$where .= $wpdb->prepare( ' AND sr.father_name LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		} else if ( 'father_phone' == $search_field ) {
			$where .= $wpdb->prepare( ' AND sr.father_phone LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		} else if ( 'login_email' == $search_field ) {
			$where .= $wpdb->prepare( ' AND u.user_email LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		} else if ( 'username' == $search_field ) {
			$where .= $wpdb->prepare( ' AND u.user_login LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		} else if ( 'admission_date' == $search_field ) {
			require_once WLSM_PLUGIN_DIR_PATH . 'includes/helpers/WLSM_Config.php';
			$search_keyword = DateTime::createFromFormat( WLSM_Config::date_format(), sanitize_text_field( $search_keyword ) );
			if ( ! empty( $search_keyword ) ) {
				$search_keyword = $search_keyword->format( 'Y-m-d' );
			}
			$where .= $wpdb->prepare( ' AND sr.admission_date LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		}
	}
}
