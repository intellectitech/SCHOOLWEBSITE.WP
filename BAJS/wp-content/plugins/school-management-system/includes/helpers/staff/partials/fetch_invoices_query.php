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
		if ( 'invoice_number' == $search_field ) {
			$where .= $wpdb->prepare( ' AND i.invoice_number LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		} else if ( 'invoice_title' == $search_field ) {
			$where .= $wpdb->prepare( ' AND i.label LIKE %s', '%' . $wpdb->esc_like( $search_keyword ) . '%' );
		} else if ( 'status' == $search_field ) {
			$search_keyword = strtolower( $search_keyword );
			if ( preg_match( '/^paid$/', $search_keyword ) ) {
				$status = WLSM_M_Invoice::get_paid_key();
			} else if ( preg_match( '/^unpa(|i|id)$/', $search_keyword ) ) {
				$status = WLSM_M_Invoice::get_unpaid_key();
			} else if ( preg_match( '/^partially(| p| pa| pai| paid)$/', $search_keyword ) ) {
				$status = WLSM_M_Invoice::get_partially_paid_key();
			}

			if ( isset( $status ) ) {
				$where .= $wpdb->prepare( ' AND (i.status = %s)', $status );
			}
		} else if ( 'admission_number' == $search_field ) {
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
		} else if ( 'date_issued' == $search_field ) {
			require_once WLSM_PLUGIN_DIR_PATH . 'includes/helpers/WLSM_Config.php';
			$date_issued = DateTime::createFromFormat( WLSM_Config::date_format(), sanitize_text_field( $search_keyword ) );
			if ( ! empty( $date_issued ) ) {
				$date_issued = $date_issued->format( 'Y-m-d' );
			} else {
				$date_issued = $search_keyword;
			}
			$where .= $wpdb->prepare( ' AND i.date_issued LIKE %s', '%' . $wpdb->esc_like( $date_issued ) . '%' );
		} else if ( 'due_date' == $search_field ) {
			require_once WLSM_PLUGIN_DIR_PATH . 'includes/helpers/WLSM_Config.php';
			$due_date = DateTime::createFromFormat( WLSM_Config::date_format(), sanitize_text_field( $search_keyword ) );
			if ( ! empty( $due_date ) ) {
				$due_date = $due_date->format( 'Y-m-d' );
			} else {
				$due_date = $search_keyword;
			}
			$where .= $wpdb->prepare( ' AND i.due_date LIKE %s', '%' . $wpdb->esc_like( $due_date ) . '%' );
		}
	}
}
