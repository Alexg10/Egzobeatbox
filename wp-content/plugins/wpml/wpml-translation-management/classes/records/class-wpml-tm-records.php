<?php

class WPML_TM_Records extends WPML_WPDB_User {

	public function wpdb() {

		return $this->wpdb;
	}

	/**
	 * @param int $translation_id
	 *
	 * @return WPML_TM_ICL_Translation_Status
	 */
	public function icl_translation_status_by_translation_id( $translation_id ) {

		return new WPML_TM_ICL_Translation_Status( $this->wpdb, $this,$translation_id );
	}

	/**
	 * @param int $rid
	 *
	 * @return WPML_TM_ICL_Translation_Status
	 */
	public function icl_translation_status_by_rid( $rid ) {

		return new WPML_TM_ICL_Translation_Status( $this->wpdb,$this, $rid, 'rid' );
	}

	/**
	 * @param int $job_id
	 *
	 * @return WPML_TM_ICL_Translate_Job
	 */
	public function icl_translate_job_by_job_id( $job_id ) {

		return new WPML_TM_ICL_Translate_Job( $this, $job_id );
	}

	/**
	 * @param int $translation_id
	 *
	 * @return WPML_TM_ICL_Translations
	 */
	public function icl_translations_by_translation_id( $translation_id ) {

		return new WPML_TM_ICL_Translations( $this->wpdb, $this, $translation_id );
	}

	/**
	 * @param int    $element_id
	 * @param string $type_prefix
	 *
	 * @return WPML_TM_ICL_Translations
	 */
	public function icl_translations_by_element_id_and_type_prefix( $element_id, $type_prefix ) {

		return new WPML_TM_ICL_Translations( $this->wpdb, $this, array(
			'element_id'  => $element_id,
			'type_prefix' => $type_prefix
		), 'id_type_prefix' );
	}

	/**
	 * @param int    $trid
	 * @param string $lang
	 *
	 * @return WPML_TM_ICL_Translations
	 */
	public function icl_translations_by_trid_and_lang( $trid, $lang ) {

		return new WPML_TM_ICL_Translations( $this->wpdb, $this, array(
			'trid'          => $trid,
			'language_code' => $lang
		), 'trid_lang' );
	}
}