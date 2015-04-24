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
 * Strings for component 'local_eledia_webservicesuite', language 'en', branch 'MOODLE_28_STABLE'
 *
 * @package   local_eledia_webservicesuite
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['back'] = 'back';
$string['eledia_desc'] = 'Fomular for testing the basic functions of the service.<br />
    Be aware of the fact that the services you call here are all executed on the System.<br />
<br />
To use this formular you need to aktivate and configure the soap service.<br />
You can find the generall webservice settinges here: <a href={$a}>{$a}</a><br />
The token generated for the webservice user must be given in the config of this plugin.<br />
<br />';
$string['eledia_desc_header'] = 'eledia webservicesuite';
$string['eledia_header'] = 'eledia webservicesuite';
$string['eledia_webservicesuite:access'] = 'Access right for all functions of this web service';
$string['idnumbercourse'] = 'Course ID number';
$string['idnumberuser'] = 'User ID number';
$string['missing_token'] = 'Webservice token in plugin config is missing.';
$string['pluginname'] = 'eledia webservicesuite';
$string['service_choose'] = 'chose the function';
$string['start'] = 'call function';
$string['test_form_desc'] = 'Find the form for tests <a href={$a}>here</a>.';
$string['test_header'] = 'eledia webservicesuite function tester';
$string['test_token'] = 'token for testscript';
$string['wscannotenrol'] = 'Plugin instance cannot manually enrol a user in the course id = {$a->courseid}';
$string['wscoursenotfound'] = 'Course with idnumber = {$a->idnumber} not found.';
$string['wsidnumbersnotfound'] = 'Idnumber {$a->idnumber} not found.';
$string['wsmultiplecoursesfound'] = 'Found multiple courses with idnumber = {$a->idnumber}. Idnumber must be unique';
$string['wsmultipleidnumbersfound'] = 'Idnumber {$a->idnumber} is not unique.';
$string['wsmultipleusersfound'] = 'Found multiple users with idnumber = {$a->idnumber}. Idnumber must be unique';
$string['wsnoinstance'] = 'Manual enrolment plugin instance doesn\'t exist or is disabled for the course (id = {$a->courseid})';
$string['wsusercannotassign'] = 'You don\'t have the permission to assign this role ({$a->roleid}) to this user ({$a->userid}) in this course({$a->courseid}).';
$string['wsusernotfound'] = 'User with idnumber = {$a->idnumber} not found.';
