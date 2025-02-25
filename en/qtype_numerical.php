<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_numerical', language 'en', version '4.4'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Accepted error';
$string['addmoreanswerblanks'] = 'Blanks for {no} more answers';
$string['addmoreunitblanks'] = 'Blanks for {no} more units';
$string['answercolon'] = 'Answer:';
$string['answererror'] = 'Error';
$string['answermustbenumberorstar'] = 'The answer must be a number, for example -1.234 or 3e8, or \'*\'.';
$string['answerno'] = 'Answer {$a}';
$string['decfractionofquestiongrade'] = 'as a fraction (0-1) of the question grade';
$string['decfractionofresponsegrade'] = 'as a fraction (0-1) of the response grade';
$string['decimalformat'] = 'decimals';
$string['editableunittext'] = 'the text input element';
$string['errornomultiplier'] = 'You must specify a multiplier for this unit.';
$string['errorrepeatedunit'] = 'You cannot have two units with the same name.';
$string['geometric'] = 'Geometric';
$string['invalidnumber'] = 'You must enter a valid number.';
$string['invalidnumbernounit'] = 'You must enter a valid number. Do not include a unit in your response.';
$string['invalidnumericanswer'] = 'One of the answers you entered was not a valid number.';
$string['invalidnumerictolerance'] = 'One of the tolerances you entered was not a valid number.';
$string['leftexample'] = 'on the left, for example $1.00 or £1.00';
$string['manynumerical'] = 'Units are optional. If a unit is entered, it is used to convert the response to Unit 1 before grading.';
$string['multiplier'] = 'Multiplier';
$string['nominal'] = 'Nominal';
$string['noneditableunittext'] = 'NON editable text of Unit No1';
$string['nonvalidcharactersinnumber'] = 'NON valid characters in number';
$string['notenoughanswers'] = 'You must enter at least one answer.';
$string['nounitdisplay'] = 'No unit grading';
$string['numericalmultiplier'] = 'Multiplier';
$string['numericalmultiplier_help'] = 'The multiplier is the factor by which the correct numerical response will be multiplied.

The first unit (Unit 1) has a default multiplier of 1. Thus if the correct numerical response is 5500 and you set W as unit at Unit 1 which has 1 as default multiplier, the correct response is 5500 W.

If you add the unit kW with a multiplier of 0.001, this will add a correct response of 5.5 kW. This means that the answers 5500W or 5.5kW would be marked correct.

Note that the accepted error is also multiplied, so an allowed error of 100W would become an error of 0.1kW.';
$string['oneunitshown'] = 'Unit 1 is automatically displayed beside the answer box.';
$string['onlynumerical'] = 'Units are not used at all. Only the numerical value is graded.';
$string['pleaseenterananswer'] = 'Please enter an answer.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Please enter your answer without using the thousand separator ({$a}).';
$string['pluginname'] = 'Numerical';
$string['pluginname_help'] = 'From the student perspective, a numerical question looks just like a short-answer question. The difference is that numerical answers are allowed to have an accepted error. This allows a fixed range of answers to be evaluated as one answer. For example, if the answer is 10 with an accepted error of 2, then any number between 8 and 12 will be accepted as correct.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Adding a Numerical question';
$string['pluginnameediting'] = 'Editing a Numerical question';
$string['pluginnamesummary'] = 'Allows a numerical response, possibly with units, that is graded by comparing against various model answers, possibly with tolerances.';
$string['privacy:metadata'] = 'Numerical question type plugin allows question authors to set default options as user preferences.';
$string['privacy:preference:defaultmark'] = 'The default mark set for a given question.';
$string['privacy:preference:multichoicedisplay'] = 'Whether units are displayed as the text input element, multiple choice selection or a drop-down menu.';
$string['privacy:preference:penalty'] = 'The penalty for each incorrect try when questions are run using the \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:unitgradingtypes'] = 'Whether unit penalty applies as a fraction (0-1) of the response grade or the question grade.';
$string['privacy:preference:unitpenalty'] = 'What fraction (0-1) of the response grade or the question grade should apply?';
$string['privacy:preference:unitrole'] = 'Whether the unit is essential, optional or not expected.';
$string['privacy:preference:unitsleft'] = 'Whether unit displays on the left (eg. $, £) or on the right (eg. kg, km, cm).';
$string['relative'] = 'Relative';
$string['rightexample'] = 'on the right, for example 1.00cm or 1.00km';
$string['selectunit'] = 'Select one unit';
$string['selectunits'] = 'Select units';
$string['studentunitanswer'] = 'Units are input using';
$string['tolerancetype'] = 'Tolerance type';
$string['unit'] = 'Unit';
$string['unitappliedpenalty'] = 'These marks include a penalty of {$a} for bad unit.';
$string['unitchoice'] = 'a multiple choice selection';
$string['unitedit'] = 'Edit unit';
$string['unitgraded'] = 'The unit must be given, and will be graded.';
$string['unithandling'] = 'Unit handling';
$string['unitincorrect'] = 'You did not give the correct unit.';
$string['unitmandatory'] = 'Mandatory';
$string['unitmandatory_help'] = '* The response will be graded using the unit written.

* The unit penalty will be applied if the unit field is empty';
$string['unitnotselected'] = 'You must select a unit.';
$string['unitonerequired'] = 'You must enter at least one unit';
$string['unitoptional'] = 'Optional unit';
$string['unitoptional_help'] = '* If the unit field is not empty, the response will be graded using this unit.

* If the unit is badly written or unknown, the response will be considered as non valid.';
$string['unitpenalty'] = 'Unit penalty';
$string['unitpenalty_help'] = 'The penalty is applied if

* the wrong unit name is entered into the unit input, or
* a unit is entered into the value input box';
$string['unitposition'] = 'Units go';
$string['units'] = 'Units';
$string['unitselect'] = 'a drop-down menu';
$string['unitx'] = 'Unit {no}';
$string['xmustbenumeric'] = '{$a} must be a number.';
$string['xmustnotbenumeric'] = '{$a} cannot be a number.';
$string['youmustenteramultiplierhere'] = 'You must enter a multiplier here.';
