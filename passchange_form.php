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
 * Quiz Password Change form
 *
 * @package    tool_quizpasschange
 * @copyright  2017 Colin Perepelken {@link https://wcln.ca}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once($CFG->libdir.'/formslib.php');
require_once(__DIR__.'/locallib.php');


/**
 * Definition of passchange form.
 *
 * @copyright  
 * @license    
 */
class passchange_form extends moodleform {

    /**
     * Define passchange form.
     */
    protected function definition() {
        global $CFG;

        $mform = $this->_form;

        $courses = tool_quizpasschange_get_courses(); // get from lib
        $courses = array_reverse($courses, true);
        $courses[''] = get_string('choosedots');
        $courses = array_reverse($courses, true);

        $mform->addElement('select', 'course', get_string('courseselect', 'tool_quizpasschange'), $courses);
        $mform->setType('course', PARAM_RAW);
        $mform->addRule('course', get_string('required'), 'required', null);

        $mform->addElement('text', 'password', get_string('passwordtext', 'tool_quizpasschange'));
        $mform->setType('password', PARAM_NOTAGS);

        $mform->addElement('checkbox', 'updateblank', get_string('updateblank', 'tool_quizpasschange'), get_string('enable', 'tool_quizpasschange'));
        $mform->setType('updateblank', PARAM_BOOL);
        $mform->addHelpButton('updateblank', 'updateblank', 'tool_quizpasschange');
        

        $this->add_action_buttons(false, get_string('submit', 'tool_quizpasschange'));
    }

    /**
     * Custom form validation
     * @param array $data
     * @param array $files
     * @return array
     */
    public function validation($data, $files) {
        return array();
    }
}
