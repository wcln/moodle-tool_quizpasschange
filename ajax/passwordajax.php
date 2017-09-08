<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Change quiz passwords by course
 *
 * @package    tool_quizpasschange
 * @copyright  2017 Colin Bernard {@link http://bclearningnetwork.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

//defined('MOODLE_INTERNAL') || die;

require_once(__DIR__ . '/../../../../config.php');
require_once(__DIR__.'/../locallib.php');

// if (isset($_POST['course_id'])) {

// 	$course_id = $_POST['course_id'];
// 	$course = tool_quizpasschange_get_course_string($course_id);

// 	$params = array(1);
// 	$params[0] = $course;

// 	$result = $DB->get_record_sql('SELECT password FROM mdl_course, mdl_quiz WHERE mdl_course.id=mdl_quiz.course AND mdl_course.fullname=? AND password<>"" AND password IS NOT NULL LIMIT 1', $params);

// 	echo $result->password;

// 	exit();
// } 

// 


function quizpasschange_getpassword() {
	return 5;
}

?>