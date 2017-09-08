<?php

defined('MOODLE_INTERNAL') || die();


$functions = array(

    'tool_quizpasschange_get_quiz_password' => array(//web service function name

        'classname' => 'quizpasschange\external\ajax', //class containing the external function

        'methodname' => 'get_quiz_password', //external function name

        'description' => 'return the current password for the quizzes in a specified course', //human readable description of the web service function

        'type' => 'read', //database rights of the web service function (read, write)

        'ajax' => true

    ),

);



?>