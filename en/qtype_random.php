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
 * Strings for component 'qtype_random', language 'en', version '4.4'.
 *
 * @package     qtype_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = 'Can the random question type select a manually graded question when it is making its random choice of a question from a category?';
$string['includingsubcategories'] = 'Including subcategories';
$string['pluginname'] = 'Random';
$string['pluginname_help'] = 'A random question is not a question type as such, but is a way of inserting a randomly-chosen question from a specified category into an activity.';
$string['pluginnameediting'] = 'Editing a random question';
$string['privacy:metadata'] = 'The Random question type plugin does not store any personal data.';
$string['randomqname'] = 'Random ({$a})';
$string['randomqnamefromtop'] = 'Faulty random question! Please delete this question.';
$string['randomqnamefromtoptags'] = 'Faulty random question! Please delete this question.';
$string['randomqnametags'] = 'Random ({$a->category}, tags: {$a->tags})';
$string['randomqplusname'] = 'Random ({$a} and subcategories)';
$string['randomqplusnamecourse'] = 'Random (Any category in this course)';
$string['randomqplusnamecoursecat'] = 'Random (Any category inside course category {$a})';
$string['randomqplusnamecoursecattags'] = 'Random (Any category inside course category {$a->category}, tags: {$a->tags})';
$string['randomqplusnamecoursetags'] = 'Random (Any category in this course, tags: {$a->tags})';
$string['randomqplusnamemodule'] = 'Random (Any category of this quiz)';
$string['randomqplusnamemoduletags'] = 'Random (Any category of this quiz, tags: {$a->tags})';
$string['randomqplusnamesystem'] = 'Random (Any system-level category)';
$string['randomqplusnamesystemtags'] = 'Random (Any system-level category, tags: {$a->tags})';
$string['randomqplusnametags'] = 'Random ({$a->category} and subcategories, tags: {$a->tags})';
$string['selectedby'] = '{$a->questionname} selected by {$a->randomname}';
$string['selectmanualquestions'] = 'Random questions can use manually graded questions';
$string['taskunusedrandomscleanup'] = 'Remove unused random questions';
