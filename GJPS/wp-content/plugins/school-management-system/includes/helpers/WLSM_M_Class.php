<?php
defined( 'ABSPATH' ) || die();

class WLSM_M_Class {
	public static function get_page_url() {
		return admin_url( 'admin.php?page=' . WLSM_MENU_CLASSES );
	}

	public static function fetch_query() {
		global $wpdb;
		$query = $wpdb->prepare( 'SELECT c.ID, c.label FROM %i as c', WLSM_CLASSES );
		return $query;
	}

	public static function fetch_query_group_by() {
		$group_by = 'GROUP BY c.ID';
		return $group_by;
	}

	public static function fetch_query_count() {
		global $wpdb;
		$query = $wpdb->prepare( 'SELECT COUNT(c.ID) FROM %i as c', WLSM_CLASSES );
		return $query;
	}

	public static function get_class( $id ) {
		global $wpdb;
		$class = $wpdb->get_row( $wpdb->prepare( 'SELECT c.ID FROM %i as c WHERE c.ID = %d', WLSM_CLASSES, $id ) );
		return $class;
	}

	public static function fetch_class( $id ) {
		global $wpdb;
		$class = $wpdb->get_row( $wpdb->prepare( 'SELECT c.ID, c.label FROM %i as c WHERE c.ID = %d', WLSM_CLASSES, $id ) );
		return $class;
	}

	public static function get_label_text( $label ) {
		if ( $label ) {
			return stripcslashes( $label );
		}
		return '';
	}
}
