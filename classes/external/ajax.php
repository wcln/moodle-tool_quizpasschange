<?php

namespace tool_quizpasschange\external;

defined('MOODLE_INTERNAL') || die();

use external_api;
use external_function_parameters;
use external_single_structure;

class ajax extends external_api {

    public static function get_quiz_password_parameters() {
        return new external_function_parameters([
            'course_id' => new external_value(PARAM_RAW, 'Course ID')
        ]);
    }

    public static function get_quiz_password_returns() {
        //return new external_value(PARAM_RAW, 'Course Quiz Password');
        return new external_single_structure([]);

    }

	public static function get_quiz_password($course_id) {
		return 5;
	}

}


?>