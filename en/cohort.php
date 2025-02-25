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
 * Strings for component 'cohort', language 'en', version '4.4'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Add new cohort';
$string['allcohorts'] = 'All cohorts';
$string['anycohort'] = 'Any';
$string['assign'] = 'Assign';
$string['assigncohorts'] = 'Assign cohort members';
$string['assignto'] = 'Cohort \'{$a}\' members';
$string['backtocohorts'] = 'Back to cohorts';
$string['bulkadd'] = 'Add to cohort';
$string['bulknocohort'] = 'No available cohorts found';
$string['categorynotfound'] = 'Category <b>{$a}</b> not found or you don\'t have permission to create a cohort there. The default context will be used.';
$string['cohort'] = 'Cohort';
$string['cohortmember'] = 'Cohort member';
$string['cohorts'] = 'Cohorts';
$string['cohortsin'] = '{$a}: available cohorts';
$string['component'] = 'Source';
$string['contextcohortnotallowed'] = 'Cohort <b>{$a}</b> not allowed in this context.';
$string['contextnotfound'] = 'Context <b>{$a}</b> not found or you don\'t have permission to create a cohort there. The default context will be used.';
$string['csvcontainserrors'] = 'Errors were found in CSV data. See details below.';
$string['csvcontainswarnings'] = 'Warnings were found in CSV data. See details below.';
$string['csvextracolumns'] = 'Column(s) <b>{$a}</b> will be ignored.';
$string['currentusers'] = 'Current users';
$string['currentusersmatching'] = 'Current users matching';
$string['defaultcontext'] = 'Default context';
$string['delcohort'] = 'Delete cohort';
$string['delconfirm'] = 'This will delete cohort \'{$a}\' and all associated data.';
$string['description'] = 'Description';
$string['displayedrows'] = '{$a->displayed} rows displayed out of {$a->total}.';
$string['duplicateidnumber'] = 'Cohort with the same ID number already exists';
$string['editcohort'] = 'Edit cohort';
$string['editcohortidnumber'] = 'Edit cohort ID';
$string['editcohortname'] = 'Edit cohort name';
$string['eventcohortcreated'] = 'Cohort created';
$string['eventcohortdeleted'] = 'Cohort deleted';
$string['eventcohortmemberadded'] = 'User added to a cohort';
$string['eventcohortmemberremoved'] = 'User removed from a cohort';
$string['eventcohortupdated'] = 'Cohort updated';
$string['external'] = 'External cohort';
$string['idnumber'] = 'Cohort ID';
$string['invalidtheme'] = 'Cohort theme does not exist';
$string['memberofcohort'] = 'Member of cohort';
$string['memberscount'] = 'Cohort size';
$string['name'] = 'Name';
$string['namecolumnmissing'] = 'There is something wrong with the format of the CSV file. Please check that it includes the correct column names. To add users to a cohort, go to \'Upload users\' in the Site administration.';
$string['namefieldempty'] = 'Field name can not be empty';
$string['newidnumberfor'] = 'New ID number for cohort {$a}';
$string['newnamefor'] = 'New name for cohort {$a}';
$string['nocomponent'] = 'Created manually';
$string['potusers'] = 'Potential users';
$string['potusersmatching'] = 'Potential matching users';
$string['preview'] = 'Preview';
$string['privacy:metadata:cohort_members'] = 'Information about the user\'s cohort.';
$string['privacy:metadata:cohort_members:cohortid'] = 'The ID of the cohort';
$string['privacy:metadata:cohort_members:timeadded'] = 'The timestamp indicating when the user was added to the cohort';
$string['privacy:metadata:cohort_members:userid'] = 'The ID of the user which is associated to the cohort';
$string['removeuserwarning'] = 'Removing users from a cohort may result in unenrolling of users from multiple courses which includes deleting of user settings, grades, group membership and other user information from affected courses.';
$string['search'] = 'Search';
$string['searchcohort'] = 'Search cohort';
$string['selectcohort'] = 'Select cohort';
$string['selectfromcohort'] = 'Select members from cohort';
$string['systemcohorts'] = 'System cohorts';
$string['unknowncohort'] = 'Unknown cohort ({$a})!';
$string['uploadcohorts'] = 'Upload cohorts';
$string['uploadcohorts_help'] = 'Cohorts may be uploaded via text file. The format of the file should be as follows:

* Each line of the file contains one record
* Each record is a series of data separated by the selected separator
* The first record contains a list of fieldnames defining the format of the rest of the file
* Required fieldname is name
* Optional fieldnames are idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = 'Uploaded {$a} cohorts';
$string['useradded'] = 'User added to cohort "{$a}"';
$string['visible'] = 'Visible';
$string['visible_help'] = 'Any cohort can be viewed by users who have \'moodle/cohort:view\' capability in the cohort context.<br/>
Visible cohorts can also be viewed by users in the underlying courses.';
