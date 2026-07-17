<?php
defined( 'ABSPATH' ) || die();

class WLSM_M_User {
	public static function user_is_student( $user_id ) {
		global $wpdb;
		$student = $wpdb->get_row(
			$wpdb->prepare( 'SELECT sr.ID, sr.session_id, s.ID as school_id, cs.ID as class_school_id FROM %i as sr 
				JOIN %i as ss ON ss.ID = sr.session_id 
				JOIN %i as se ON se.ID = sr.section_id 
				JOIN %i as cs ON cs.ID = se.class_school_id 
				JOIN %i as c ON c.ID = cs.class_id 
				JOIN %i as s ON s.ID = cs.school_id 
				JOIN %i as u ON u.ID = sr.user_id 
				WHERE sr.is_active = 1 AND sr.user_id = %d',
				WLSM_STUDENT_RECORDS,
				WLSM_SESSIONS,
				WLSM_SECTIONS,
				WLSM_CLASS_SCHOOL,
				WLSM_CLASSES,
				WLSM_SCHOOLS,
				WLSM_USERS,
				$user_id
			)
		);
		return $student;
	}

	public static function get_username_text( $username ) {
		if ( $username ) {
			return stripcslashes( $username );
		}
		return '';
	}

	public static function get_email_text( $email ) {
		if ( $email ) {
			return $email;
		}
		return '';
	}
}
