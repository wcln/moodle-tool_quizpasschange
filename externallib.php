<?php

require_once("$CFG->libdir/externallib.php");

class tool_quizpasschange_external extends external_api {

	/**
	 * Returns description of method parameters
	 * @return external_function_parameters
	 */
	public static function get_quiz_password_parameters() {
		return new external_function_parameters(
			array(
				'course_id' => new external_value(PARAM_INT, 'id of course')
			)
		);
	}

	public static function get_quiz_password_returns() {
		return new external_value(PARAM_RAW, 'quiz password for a course');
	}

	public static function get_quiz_password($course_id) {
		return "testpassword"; // temp
	}
}