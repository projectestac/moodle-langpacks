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
 * Strings for component 'checkmark', language 'en', version '4.4'.
 *
 * @package     checkmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absent'] = 'Absent';
$string['activateindividuals'] = 'Activate individual function';
$string['activitydate:due'] = 'Due:';
$string['activitydate:opened'] = 'Opened:';
$string['activitydate:opens'] = 'Opens:';
$string['addnewgroupoverride'] = 'Add group override';
$string['addnewuseroverride'] = 'Add user override';
$string['addsubmission'] = 'Add submission';
$string['all'] = 'All';
$string['all_absent'] = 'All absent participants';
$string['all_attendant'] = 'All attendant participants';
$string['all_unknown'] = 'All with unknown attendance status';
$string['all_with_presentationgrading'] = 'All participants with a presentation grade';
$string['all_without_presentationgrading'] = 'All participants without a presentation grade';
$string['allowresubmit'] = 'Allow resubmitting';
$string['allowresubmit_help'] = 'If enabled, students will be allowed to resubmit checkmarks after they have been graded (to be regraded).';
$string['allowsubmissionsfromdate'] = 'Allow submissions from';
$string['allowsubmissionsfromdate_help'] = 'If enabled, students will not be able to submit before this date. If disabled, students will be able to start submitting right away.';
$string['alreadygraded'] = 'Your submission has already been graded and resubmission is not allowed.';
$string['alwaysshowdescription'] = 'Always show description';
$string['alwaysshowdescription_help'] = 'If disabled, the Assignment Description above will only become visible to students at the "Allow submissions from" date.';
$string['attendance'] = 'Attendance';
$string['attendance_help'] = 'The colum status represents the students attendance:<br /><ul><li>? - unknown</li><li>✓ - present</li><li>✖ - absent</li></ul>';
$string['attendance_not_set_grade_locked'] = 'The attendance for {$a} couldn\'t be set, because the grade is locked or overridden in gradebook.';
$string['attendancegradebook'] = 'Record attendance in gradebook';
$string['attendancegradebook_help'] = 'If you activate this feature, attendances will be visible in gradebook as separate grade item: <ul><li>Empty grade - status unknown</li><li>Grade 0 - if absent</li><li>Grade 1 - if attendant</li></ul>';
$string['attendancegradelink'] = 'Link attendance to automatic calculation of submission-grades';
$string['attendancegradelink_help'] = 'Activate this setting in order to link the saved attendances with the automatically calculated grades of the checkmark. Points of the checkmark module are only aggregated, when the person\'s attendance was marked accordingly.';
$string['attendancegradelink_hint'] = 'Note: Automatically calculated grades are linked to the attendance.';
$string['attendancestatus'] = 'Current status of your attendance';
$string['attendant'] = 'Attendant';
$string['autograde_confirm'] = 'You are about to update grades and comments for <strong>{$a->total}</strong>. <strong>{$a->graded}</strong> former grades and comments will be overwritten.';
$string['autograde_confirm_continue'] = 'Are you shure you wan\'t to continue?';
$string['autograde_error'] = 'An error occurred during auto-grading.';
$string['autograde_failed'] = 'Auto-grading failed!';
$string['autograde_non_numeric_grades'] = 'Auto-grading requires a numeric maximum grade to be set. This can be configured in instance-settings.';
$string['autograde_notsupported'] = 'This scale is not supported by automatic grading.';
$string['autograde_one_success'] = 'Auto-grading successful! 1 submission updated.';
$string['autograde_strall'] = 'All submissions';
$string['autograde_strchanged'] = 'Due to the auto-grading the grades for <strong>{$a}</strong> student(s) will be changed.';
$string['autograde_strmultiplesubmissions'] = '{$a} submissions';
$string['autograde_stronesubmission'] = '1 submission';
$string['autograde_strreq'] = 'Submissions which require a grade-update';
$string['autograde_success'] = 'Auto-grading successful! {$a} submissions updated.';
$string['autograde_users_with_unknown_attendance'] = 'ATTENTION: {$a} submissions could NOT be graded automatically due to unknown attendance status!';
$string['autogradebuttonstitle'] = 'Calculate submission-grades for checkmark {$a}';
$string['availability'] = 'Availability';
$string['availabledate'] = 'Allow submissions from';
$string['availabledate_help'] = 'Begin of the submission period. After this date students are able to submit.';
$string['bulk'] = 'Bulk processing';
$string['bulk_help'] = 'Here you can perform actions like "setting attendance", "automatic grading" or combinations thereof on multiple entries.<br />
<ul>
<li><strong>mark as attendant:</strong> Mark selected users as attendant</li>
<li><strong>mark as absent:</strong> Mark selected users as absent</li>
<li><strong>grade automatically:</strong> Calculate automatic grade for selected users</li>
<li><strong>remove grade:</strong> Remove grade for selected users</li>
<li><strong>remove grade (presentation):</strong> Remove presentation grade for selected users</li>
<li><strong>mark as attendant and grade:</strong> Mark selected users as attendant and grade them automatically right afterwards</li>
<li><strong>mark as absent and grade:</strong> Mark selected users as absent and grade them automatically right afterwards</li>
</ul><br />
Note: if attendency is linked to the grades only attendant users will be awarded points for checked examples.
Absent users will be graded with 0 points and users with unknown attendancy will be skipped at all!';
$string['bulk_no_users_selected'] = 'You haven\'t selected any user. Select the required users via the checkboxes in the left column of the table below.';
$string['calendardue'] = '{$a} is due';
$string['calendargradingdue'] = '{$a} is due to be graded';
$string['calendarteachers'] = 'Show due date in calendar of teachers';
$string['calendarteachers_help'] = 'The due date of the checkmark can optionally be displayed in the calendar for teachers. For students, the due date is displayed in the calendar by default. Attention: If there are many checkmark exercises in the course, the calendar view can become cluttered for teachers.';
$string['cannotviewcheckmark'] = 'You can not view this checkmark';
$string['cantfixevent'] = 'Couldn\'t fix event with ID {$a->id}, named {$a->name} ({$a->matches} matches).';
$string['cfg_nowarning'] = 'No warning';
$string['cfg_pdfexampleswarning'] = 'Amount of examples to display a warning for PDF export';
$string['cfg_pdfexampleswarning_desc'] = 'Minimum amount of examples above which a warning is displayed, that no reasonable PDF export can be guaranteed. Usually you don\'t have to change this, except you don\'t want to have it shown at all or if you want to tweak it for your installation.';
$string['checkmark:addinstance'] = 'Add checkmark instance';
$string['checkmark:grade'] = 'Grade checkmark';
$string['checkmark:gradepresentation'] = 'Grade presentation';
$string['checkmark:manageoverrides'] = 'Manage checkmark overrides';
$string['checkmark:submit'] = 'Submit checkmark';
$string['checkmark:trackattendance'] = 'Track student\'s attendance';
$string['checkmark:view'] = 'View checkmark';
$string['checkmark:view_preview'] = 'Preview';
$string['checkmark_overviewsummary'] = 'You\'ve checked {$a->checked_examples} / {$a->total_examples} examples ({$a->checked_grade} / {$a->total_grade} points)<br />{$a->grade}<br />';
$string['checkmark_overviewsummary_nograde'] = 'You\'ve checked {$a->checked_examples} / {$a->total_examples} examples<br />{$a->grade}<br />';
$string['checkmark_summary'] = 'You\'ve checked <span id="examples">{$a->checked_examples}</span> out of {$a->total_examples} examples.<br />(<span id="grade">{$a->checked_grade}</span> out of a maximum of {$a->total_grade} points)';
$string['checkmarkdetails'] = 'Checkmark details';
$string['checkmarkisdue'] = 'Checkmark assignment is due';
$string['checkmarkmail'] = '{$a->grader} posted a comment on your
checkmark submission for \'{$a->checkmark}\'

You can see it appended to your checkmark submission:

    {$a->url}';
$string['checkmarkmailhtml'] = '{$a->grader} posted a comment on your
checkmark submission for \'<i>{$a->checkmark}</i>\'<br /><br />
You can see it appended to your <a href="{$a->url}">checkmark submission</a>.';
$string['checkmarkmailsmall'] = '{$a->grader} posted a comment on your
checkmark submission for \'{$a->checkmark}\' You can see it appended to your submission';
$string['checkmarkname'] = 'Checkmark name';
$string['checkmarks'] = 'Checkmarks';
$string['checkmarkstatstitle'] = 'Course overview checkmark';
$string['checkmarksubmission'] = 'Checkmark submissions';
$string['checksummary'] = 'Checkmark summary';
$string['choose'] = 'With Selection...';
$string['choosegradingaction'] = 'Grading action';
$string['comment'] = 'Comment';
$string['completiondetail:submit'] = 'Make a submission';
$string['completionsubmit'] = 'Student must submit to this activity to complete it';
$string['configshowrecentsubmissions'] = 'Everyone can see notifications of submissions in recent activity reports.';
$string['couldfixevent'] = 'Could successfully fix event with ID {$a->id}, named {$a->name}.';
$string['count_individuals_mismatch'] = 'The amount of individual names({$a->namecount}) doesn\'t match the amount of individual grades({$a->gradecount})!';
$string['coursefullname'] = 'Course full name';
$string['coursemisconf'] = 'Course is miss-configured';
$string['courseshortname'] = 'Course short name';
$string['coursetitle'] = 'Course title';
$string['coursetitle_help'] = 'Define here if you want to use the course full name (long name) or the course short name for the title of your export';
$string['currentgrade'] = 'Current grade in grade book';
$string['custom_settings'] = 'Custom settings';
$string['cutoffdate'] = 'Cut-off date';
$string['cutoffdate_help'] = 'If set, the assignment will not accept submissions after this date without an extension.';
$string['cutoffdatecolon'] = 'Cut-off date: {$a}';
$string['cutoffdatefromdatevalidation'] = 'Cut-off date cannot be earlier than the allow submissions from date.';
$string['cutoffdatevalidation'] = 'Cut-off date cannot be earlier than the due date.';
$string['data_preview'] = 'Data preview';
$string['data_preview_help'] = 'Click on [+] or [-] for showing or hiding columns in the print-preview.';
$string['data_settings'] = 'Print settings';
$string['datasettingstitle'] = 'Data settings';
$string['dates_overwritten'] = 'Dates have been overwritten!';
$string['defaultsettings'] = 'Default checkmark settings';
$string['defaultsettings_help'] = 'These settings define the defaults for all new checkmark exercises.';
$string['deletealloverrides'] = 'Delete all date overrides';
$string['deleteallsubmissions'] = 'Delete all submissions';
$string['description'] = 'Description';
$string['disabled'] = 'Disabled';
$string['downloadall'] = 'Download all checkmarks as .zip';
$string['due'] = 'Checkmark due';
$string['duedate'] = 'Due date';
$string['duedate_help'] = 'This is when the assignment is due. Submissions will still be allowed after this date, but any assignments submitted after this date will be marked as late. Set an assignment cut-off date to prevent submissions after a certain date.';
$string['duedatecolon'] = 'Due date: {$a}';
$string['duedateno'] = 'No due date';
$string['duedatevalidation'] = 'Due date cannot be earlier than the allow submissions from date.';
$string['duplicateoverride'] = 'Duplicate override';
$string['early'] = '{$a} early';
$string['editmysubmission'] = 'Edit my submission';
$string['editoverride'] = 'Edit override';
$string['element_disabled'] = 'The following element is disabled because of existing submissions.';
$string['elements_disabled'] = 'The following elements are disabled because of existing submissions.';
$string['emailstudents'] = 'Email alerts to students';
$string['emailteachermail'] = '{$a->username} has updated the checkmark submission
for \'{$a->checkmark}\' on {$a->dayupdated} at {$a->timeupdated}.

It is available here:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} has updated the checkmark submission
for <i>\'{$a->checkmark}\' on {$a->dayupdated} at {$a->timeupdated}</i><br /><br />
It is <a href="{$a->url}">available on the web site</a>.';
$string['emailteachers'] = 'Email alerts to teachers';
$string['emailteachers_help'] = 'If enabled, teachers receive email notification whenever students add or update a checkmark submission.

Only teachers who are able to grade the particular checkmark are notified. For example, if the course uses separate groups, teachers restricted to particular groups won\'t receive notification about students in other groups.';
$string['emptysubmission'] = 'You have not submitted anything yet';
$string['enablenotification'] = 'Send notifications';
$string['enablenotification_help'] = 'If enabled, students will be notified once their checkmark submissions (or corresponding presentations) are graded or their attendancy is marked.';
$string['end_of_submission_for'] = 'End of submission for {$a}';
$string['errornosubmissions'] = 'There are no submissions available to download';
$string['eventexamplecreated'] = 'Example created';
$string['eventexampledeleted'] = 'Example deleted';
$string['eventexampleupdated'] = 'Example updated';
$string['eventgradeupdated'] = 'Grade updated';
$string['eventoverridecreated'] = 'Checkmark override created';
$string['eventoverridedeleted'] = 'Checkmark override deleted';
$string['eventoverrideprioritychanged'] = 'Checkmark group override priority swapped';
$string['eventoverrideupdated'] = 'Checkmark override updated';
$string['eventsubmissionoverwritten'] = 'Submission overwritten';
$string['eventsubmissionsexported'] = 'Submission exported';
$string['eventsubmissionupdated'] = 'Submission updated';
$string['eventviewprintpreview'] = 'Viewed print preview';
$string['eventviewsubmissions'] = 'Viewed submissions';
$string['example_preview_title'] = 'Example preview';
$string['example_preview_title_help'] = 'The example preview shows an overview of the checkmark options.';
$string['examplecount_changed_after_submission'] = 'The amount of examples can\'t be changed, as soon as a submission is present.';
$string['examplegrades'] = 'Individual grades';
$string['examplegrades_help'] = 'Defines the weight of every example. These will be separated by the delimiter given in parentheses.';
$string['examplenames'] = 'Individual names';
$string['examplenames_help'] = 'Defines the example names. These will be separated by the delimiter given in parentheses.';
$string['exampleprefix'] = 'Individual prefix';
$string['exampleprefix_help'] = 'Optionally enter an individual prefix that will be automatically put in front of all individual names. This field may be left empty.';
$string['export'] = 'Export';
$string['exporttemplate_grades'] = 'Gradinglist simple';
$string['exporttemplate_grades_extended'] = 'Gradinglist extended';
$string['exporttemplate_signature'] = 'Signaturelist simple';
$string['exporttemplate_signature_extended'] = 'Signaturelist extended';
$string['exporttemplates'] = 'Template';
$string['exporttemplates_help'] = 'Quick export with predefined templates<br />
<ul>
    <li><strong>custom settings</strong><br />
        no template is used, all settings have to be made manually</li>
    <li><strong>Gradinglist simple:</strong><br />
        portrait, small font, with header/footer, names printed in one line<br />
        containing following columns: [fullname, examples, grade]</li>
    <li><strong>Gradinglist extended:</strong><br />
        landscape, small font, with header/footer, names printed in one line<br />
        containing following columns: [fullname, idnumber, examples, checked, grade]</li>
    <li><strong>Signaturelist simple:</strong><br />
        portrait, small font, with header/footer, names printed in one line<br />
        containing following columns: [fullname, examples, signature]</li>
    <li><strong>Signaturelist extended:</strong><br />
        landscape, small font, with header/footer, names printed in one line<br />
        containing following columns: [fullname, idnumber, examples, checked, grade, signature]</li>
</ul>';
$string['extended_until'] = 'Extended until {$a}';
$string['extensionduedate'] = 'Extension due date';
$string['extensionnotafterduedate'] = 'Extension date must be after the due date';
$string['extensionnotafterfromdate'] = 'Extension date must be after the allow submissions from date';
$string['failedupdatefeedback'] = 'Failed to update submission comment for user {$a}';
$string['feedback'] = 'Feedback';
$string['feedbackfromteacher'] = 'Comment from the {$a}';
$string['feedbackupdated'] = 'Submissions comment updated for {$a} people';
$string['filter'] = 'Filter';
$string['filtergrantedextension'] = 'Granted extension';
$string['filternotsubmitted'] = 'Not submitted';
$string['firstexamplenumber'] = 'Number of first example';
$string['firstexamplenumber_help'] = 'Number of the first example. The following examples get by 1 increased numbers of their predecessor.';
$string['flexiblenaming'] = 'Individual naming/grading';
$string['flexiblenaming_help'] = 'If activated individual names and grades are being used for each example.';
$string['forced'] = 'Overwritten by teacher';
$string['forcesinglelinenames'] = 'Force single-line names';
$string['forcesinglelinenames_help'] = '<p>Enforces the name to be written to the PDF in a single line.</p>
<p><i>Beware:</i> if there are too many columns or the name is too long it will be distorted and can become unreadable. Hide some unimportant columns to have more room for the name if this happens.</p>';
$string['format'] = 'Format';
$string['gotoactivity'] = 'Go to activity';
$string['grade'] = 'Grade';
$string['grade_attendence_name'] = 'Attendence grade';
$string['grade_automatically'] = 'Grade automatically';
$string['grade_checks_name'] = 'Checks grade';
$string['grade_help'] = 'When individual functions are activated the grade has to be the sum of all example grades (maximum 100).<br />When you\'re using standard examples the grade has to be a integral multiple of the example count. If so the points per example get automatically adjusted.<br />With activated JavaScript the grade gets selected automatically when using individual functions. In the case of usage of standard-examples with activated JavaScript only integral multiples of the example count will be accepted.';
$string['grade_mismatch'] = 'The grade has to be an integral multiple of the amount of examples!';
$string['grade_presentation_name'] = 'Presentation grade';
$string['gradebutton'] = 'Grade';
$string['graded'] = 'Graded';
$string['gradedon'] = 'Graded on';
$string['gradesum_mismatch'] = 'The sum of the individual grades won\'t match the chosen total grades ({$a->gradesum}/{$a->maxgrade})!';
$string['gradingdue'] = 'Remind me to grade by';
$string['gradingdue_help'] = 'The expected date that marking of the submissions should be completed by. This date is used to prioritise dashboard notifications for teachers.';
$string['gradingdueduedatevalidation'] = 'Remind me to grade by date cannot be earlier than the due date.';
$string['gradingduefromdatevalidation'] = 'Remind me to grade by date cannot be earlier than the allow submissions from date.';
$string['gradingstatus'] = 'Grading status';
$string['gradingsummary'] = 'Grading summary';
$string['grant_extension'] = 'Grant extension';
$string['group_dates_overridden'] = 'Dates for group {$a} have been overridden!';
$string['groupoverride_edit'] = 'Edit override of group {$a}';
$string['groupoverrides'] = 'Group overrides';
$string['groupsnone'] = 'No groups you can access.';
$string['guestnosubmit'] = 'Sorry, guests are not allowed to submit a checkmark. You have to log in/ register before you can submit your answer.';
$string['guestnoupload'] = 'Sorry, guests are not allowed to upload';
$string['hidealltoggle'] = 'Hide all examples';
$string['hideexamples'] = 'Hide examples in submissions table';
$string['hideintro'] = 'Hide description until "Available from" date';
$string['hideintro_help'] = 'If enabled, the checkmark description is hidden before the "Available from" date. Only the checkmark name is displayed.';
$string['inactiveoverridehelp'] = '* Student does not have the correct group or role to attempt the assignment';
$string['informstudents'] = 'Send notifications';
$string['informstudents_help'] = 'If activated, the participant receives a notification about his/her attendance status.';
$string['introattachments'] = 'Additional files';
$string['introattachments_help'] = 'Additional files for use in the checkmark, such as answer templates, may be added. Download links for the files will then be displayed on the checkmark page under the description.';
$string['invalidcheckmark'] = 'Incorrect checkmark';
$string['invalidid'] = 'Checkmark ID was incorrect';
$string['invalidoverrideid'] = 'Invalid override id';
$string['invaliduserid'] = 'Invalid user ID';
$string['itemstocount'] = 'Count';
$string['lastgrade'] = 'Last grade';
$string['late'] = '{$a} late';
$string['latesubmissions'] = 'Late submissions';
$string['latesubmissionsaccepted'] = 'Allowed until {$a}';
$string['latesubmissionwarning'] = 'Submission was rejected as it was made after the deadline';
$string['manycolumnsinpdfwarning'] = 'Attention: due to a high example-count and limited space a reasonable export to PDF cannot be ensured. Try to hide unnecessary columns or use XLSX or ODS export instead and adapt the layout in your spreadsheet application.';
$string['maximumgrade'] = 'Maximum grade';
$string['messageprovider:checkmark_updates'] = 'Checkmark notifications';
$string['modulename'] = 'Checkmark';
$string['modulename_help'] = 'Checkmarks enable the teacher to specify an assignment where students have to check marks which can then be graded.';
$string['modulenameplural'] = 'Checkmarks';
$string['needattendanceentrycount'] = 'Needs attendance record';
$string['newsubmissions'] = 'Checkmarks submitted';
$string['noattempts'] = 'No attempts have been made on this checkmark';
$string['nochangeviolation'] = 'You must override at least one of the checkmark settings.';
$string['nocheckmarks'] = 'There are no checkmarks yet';
$string['noclose'] = 'No close date';
$string['nogroupoverrridemessage'] = 'There are currently no group overrides';
$string['nolatesubmissions'] = 'No late submissions accepted.';
$string['nomoresubmissions'] = 'No further submissions are allowed.';
$string['nomoresubmissionsaccepted'] = 'Only allowed for participants who have been granted an extension';
$string['nonnegativeintrequired'] = 'Has to be greater than or equal 0 and integral!';
$string['noopen'] = 'No open date';
$string['nooverridedata'] = 'You must override at least one of the assignment settings.';
$string['norequiregrading'] = 'There are no checkmarks that require grading';
$string['nostudents'] = 'There are no users to be displayed!';
$string['nostudentsmatching'] = 'There are no users matching the current settings!';
$string['nosubmission'] = 'No checkmarks have been submitted';
$string['nosubmissionyet'] = 'No submissions have been made yet';
$string['nosubmisson'] = 'No checkmarks have been submitted';
$string['notactive'] = 'Not active';
$string['notavailableyet'] = 'Sorry, this checkmark is not yet available.<br />Checkmark instructions will be displayed here on the date given below.';
$string['notgraded'] = 'Not graded';
$string['notgradedyet'] = 'Not graded yet';
$string['notifystudent'] = 'Notify student';
$string['notsubmittedyet'] = 'Not submitted yet';
$string['nouseroverrridemessage'] = 'There are currently no user overrides';
$string['nousers'] = 'There are no users to be displayed!';
$string['numberofexamples'] = 'Number of examples';
$string['numberofexamples_help'] = 'Example count in this checkmark.';
$string['numberofparticipants'] = 'Participants';
$string['numberofsubmissionsneedgrading'] = 'Requires grading';
$string['numberofsubmittedassignments'] = 'Submitted';
$string['open'] = 'Open';
$string['operation'] = 'Operation';
$string['optimum'] = 'Optimum';
$string['optionalsettings'] = 'Optional settings';
$string['overridden'] = 'Overridden';
$string['override'] = 'Override';
$string['override_and_next'] = 'Override and create a new override';
$string['override_groups_dates'] = 'Override groups dates';
$string['override_users_dates'] = 'Override users dates';
$string['overridedeletegroupsure'] = 'Are you sure you want to delete the override for group {$a}?';
$string['overridedeleteusersure'] = 'Are you sure you want to delete the override for user {$a}?';
$string['overrideentrydeleted'] = 'Entry deleted';
$string['overrideentryswapped'] = 'Entry swapped';
$string['overridegroup'] = 'Override group';
$string['overridegroupeventname'] = '{$a->checkmark} - {$a->group}';
$string['overrides'] = 'Overrides';
$string['overridessummary'] = 'Settings overrides exist ({$a})';
$string['overridessummarygroup'] = 'Groups: {$a}';
$string['overridessummarythisgroup'] = 'Settings overrides exist ({$a}) for this group';
$string['overridessummaryuser'] = 'Users: {$a}';
$string['overridessummaryyourgroups'] = 'Settings overrides exist ({$a}) for your groups';
$string['overrideuser'] = 'Override user';
$string['overrideusereventname'] = '{$a->checkmark} - Override';
$string['page-mod-checkmark-submissions'] = 'Checkmark module submission page';
$string['page-mod-checkmark-view'] = 'Checkmark module main page';
$string['page-mod-checkmark-x'] = 'Every checkmark module page';
$string['pagesize'] = 'Submissions shown per page';
$string['pagesize_help'] = 'Choose "Optimum" to optimize the distribution of list entries according to the chosen text size and page orientation, if there are plenty of participants registered in your course.';
$string['paramtimeremaining'] = '{$a} remaining';
$string['pdfpageorientation'] = 'Page orientation';
$string['pdfpagesize'] = 'Submissions shown per page';
$string['pdfpagesize_help'] = 'Choose "Optimum" to optimize the distribution of list entries according to the chosen text size and page orientation, if there are plenty of participants registered in your course.';
$string['pdfprintheader'] = 'Print header/-footer';
$string['pdfprintheader_help'] = 'Print header/footer if checked';
$string['pdfprintheaderlong'] = 'Print header/footer if checked';
$string['pdfsettings'] = 'PDF Settings';
$string['pdftextsize'] = 'Text size';
$string['pluginadministration'] = 'Checkmark administration';
$string['pluginname'] = 'Checkmark';
$string['popupinnewwindow'] = 'Open in a pop-up window';
$string['posintrequired'] = 'Has to be greater than or equal 0 and integral!';
$string['posintst100required'] = 'Has to be an integral between 0 and 100!';
$string['presentationfeedback'] = 'Comment (Presentation)';
$string['presentationfeedback_table'] = 'Comment (presentation)';
$string['presentationgrade'] = 'Grade (Presentation)';
$string['presentationgrade_short'] = 'PT';
$string['presentationgrade_table'] = 'Grade (presentation)';
$string['presentationgradebook'] = 'Show presentation grade in gradebook';
$string['presentationgradebook_help'] = 'This option controls if the presentation grade will be displayed as extra grade item in gradebook.';
$string['presentationgrading'] = 'Track presentation grades';
$string['presentationgrading_grade'] = 'Grade presentation';
$string['presentationgrading_grade_help'] = 'This elements control how the presentation can be graded. For the grade you can select either <ul><li><strong>none</strong> no grade will be recorded, but you are able to use a comment (text as feedback).</li><li><strong>scale</strong> Use a scale to grade student\'s presentation</li><li><strong>point</strong> use a numerical value to grade student\'s presentation</li></ul>';
$string['presentationgrading_help'] = 'If activated presentation grades can be recorded as extra element of grading information.';
$string['presentationgradingcount'] = 'Graded presentations';
$string['presentationheader'] = 'Presentation grading';
$string['printsettingstitle'] = 'Export settings';
$string['privacy:metadata:attendance'] = 'User\'s attendance status.';
$string['privacy:metadata:checks'] = 'Table containing user\'s checked examples (bound to an entry in submissions table).';
$string['privacy:metadata:cutoffdate'] = 'Time and date until submissions are possible.';
$string['privacy:metadata:feedback'] = 'Comment/ textual feedback given to the user.';
$string['privacy:metadata:feedback:timecreated'] = 'The time and date the comment was created.';
$string['privacy:metadata:feedback:timemodified'] = 'The most recent time and date the comment got updated/modified.';
$string['privacy:metadata:feedbacks'] = 'Table containing user\'s feedback data.';
$string['privacy:metadata:format'] = 'Format for the comment (textual feedback) given to the user.';
$string['privacy:metadata:grade'] = 'User\'s grade.';
$string['privacy:metadata:graderid'] = 'The user who wrote a comment.';
$string['privacy:metadata:mailed'] = 'Indicates if the user\'s been informed about the comment.';
$string['privacy:metadata:override:timecreated'] = 'The time and date the dates have been overridden for this user.';
$string['privacy:metadata:override:timemodified'] = 'The most recent time and date the dates have been overridden for this user.';
$string['privacy:metadata:overrides'] = 'Table containing all overridden dates (available-from-, due-, cutoff-dates).';
$string['privacy:metadata:pref:filter'] = 'The default filter to use when displaying submission tables.';
$string['privacy:metadata:pref:forcesinglelinenames'] = 'The default setting whether or not to force single line names exporting submissions.';
$string['privacy:metadata:pref:format'] = 'The default format to use in the form when displaying submission tables.';
$string['privacy:metadata:pref:mailinfo'] = 'The default setting whether or not to send messages to users if they get feedback via comment.';
$string['privacy:metadata:pref:pageorientation'] = 'The default page orientation to use when displaying the submissions export form.';
$string['privacy:metadata:pref:pdfprintperpage'] = 'How many submissions should be exported by default.';
$string['privacy:metadata:pref:perpage'] = 'How many submission should be visible on one page per default.';
$string['privacy:metadata:pref:printheader'] = 'Should the headers be exported by default for this user?';
$string['privacy:metadata:pref:quickgrade'] = 'Should quickgrading be activated by default for this user?';
$string['privacy:metadata:pref:sumabs'] = 'Should absolute sums be shown by default for this user?';
$string['privacy:metadata:pref:sumrel'] = 'Should relative sums be shown by default for this user?';
$string['privacy:metadata:pref:textsize'] = 'Default text-size to use for this user\'s exports.';
$string['privacy:metadata:pref:zipped'] = 'Default setting if separate PDFs per group as ZIP-archive are prefered.';
$string['privacy:metadata:presentationfeedback'] = 'Comment/ Textual feedback given to the user\'s presentation.';
$string['privacy:metadata:presentationformat'] = 'Format for the comment (textual feedback) given to the user\'s presentation.';
$string['privacy:metadata:presentationgrade'] = 'Grade given for the user\'s presentation.';
$string['privacy:metadata:state'] = 'Flag if the example is checked/unchecked.';
$string['privacy:metadata:submission:timecreated'] = 'The time and date the submission was created.';
$string['privacy:metadata:submission:timemodified'] = 'The most recent time and date the submission got updated/modified.';
$string['privacy:metadata:submissions'] = 'Table containing data about user\'s submissions.';
$string['privacy:metadata:subsys:message'] = 'Checkmark sends messages to the users if they\'ve gotten feedback via comment and to teachers if someone submitted (and it\'s enabled).';
$string['privacy:metadata:timeavailable'] = 'Time since the begining of the submission period.';
$string['privacy:metadata:timedue'] = 'Due date for the submission.';
$string['privacy:path:feedback'] = 'Comment';
$string['privacy:path:submission'] = 'Submission';
$string['quickgrade'] = 'Quick grading';
$string['quickgrade_help'] = 'If enabled, multiple checkmarks can be graded on one page. Add grades and comments then click the "Save all grading changes" button to save all changes for that page.';
$string['remembertoupdategrades'] = 'You\'ve got automatically graded submissions in this checkmark. We highly recommend to update or regrade the submissions if you changed the examples\' grades!';
$string['remove_grade'] = 'Remove grade';
$string['remove_grade_error'] = 'Error while bulk removing grades';
$string['remove_grade_failed'] = 'Failed to remove grade for users';
$string['remove_grade_one_success'] = 'Successfully removed grade for {$a} user';
$string['remove_grade_success'] = 'Successfully removed grades for {$a} users';
$string['remove_presentation_grade'] = 'Remove grade (presentation)';
$string['remove_presentation_grade_error'] = 'Error while bulk removing grades (presentation)';
$string['remove_presentation_grade_failed'] = 'Failed to remove grade (presentation) for users';
$string['remove_presentation_grade_one_success'] = 'Successfully removed grade (presentation) for {$a} user';
$string['remove_presentation_grade_success'] = 'Successfully removed grades (presentation) for {$a} users';
$string['requiregrading'] = 'Requires grading';
$string['requiresubmit'] = 'Requires submission';
$string['reverttodefaults'] = 'Revert to assignment defaults';
$string['reviewed'] = 'Reviewed';
$string['save'] = 'Save';
$string['saveallfeedback'] = 'Save all grading changes';
$string['saveoverrideandstay'] = 'Save and enter another override';
$string['search:activity'] = 'Checkmark - activity information';
$string['select'] = 'Select';
$string['selection'] = 'Selection';
$string['sendnotifications'] = 'Send notifications';
$string['seperatenamecolumns'] = 'Split fullname into single columns';
$string['seperatenamecolumns_help'] = 'If enabled, all fragments of the displayed fullname (i.e. first name and surname) will be split into single columns.';
$string['sequentialnumbering'] = 'Sequential numbering of rows';
$string['sequentialnumbering_help'] = 'Prefix every row (student) with a sequential number starting at 1. Can, for instance, be used for randomly selecting students to present.';
$string['setabsent'] = 'Mark as absent';
$string['setabsentandgrade'] = 'Mark as absent and grade';
$string['setattendant'] = 'Mark as attendant';
$string['setattendantandgrade'] = 'Mark as attendant and grade';
$string['showalltoggle'] = 'Show all examples';
$string['showrecentsubmissions'] = 'Show recent submissions';
$string['signature'] = 'Signature';
$string['start'] = 'Start';
$string['str_userid'] = 'Student ID';
$string['strallononepage'] = 'Print all on one page';
$string['strassignment'] = 'Assignment';
$string['strautograded'] = '[Auto-graded]';
$string['strexample'] = 'Example';
$string['strexamples'] = 'Examples';
$string['strlandscape'] = 'Landscape';
$string['strlarge'] = 'Large';
$string['strmedium'] = 'Medium';
$string['strpapersizes'] = 'Paper size';
$string['strpoint'] = 'Point';
$string['strpoints'] = 'Points';
$string['strportrait'] = 'Portrait';
$string['strprint'] = 'Download file';
$string['strprintpreview'] = 'Export';
$string['strprintpreviewtabalt'] = 'Open export';
$string['strrefreshdata'] = 'Update data preview';
$string['strsmall'] = 'Small';
$string['strstdexamplecount'] = 'Example count';
$string['strstdexamplecountdesc'] = 'Is the amount of how many examples will be used by default';
$string['strstdexamplestart'] = 'First example number';
$string['strstdexamplestartdesc'] = 'Is the number of the first example';
$string['strstdgrades'] = 'Standard grades';
$string['strstdgradesdesc'] = 'Grades if "individual naming" is used';
$string['strstdnames'] = 'Standard names';
$string['strstdnamesdesc'] = 'Example names if "individual naming" is used';
$string['strsubmissions'] = 'Submissions';
$string['strsubmissionstabalt'] = 'Open submissions view';
$string['strsum'] = 'Sum';
$string['strvalidmsgtime'] = 'Duration of message validity';
$string['strvalidmsgtimedesc'] = 'Amount of days after which grading notifications to users won\'t be sent any more.';
$string['studentpreview'] = 'Student preview';
$string['submission'] = 'Submission';
$string['submissionattachments'] = 'Only show files during submission';
$string['submissionattachments_help'] = 'Tick the box to only show files on the submission page. Otherwise, files will be shown on both the assignment and submission pages.';
$string['submissionfeedback'] = 'Submission comment';
$string['submissions'] = 'Submissions';
$string['submissionsamount'] = '{$a->submitted} of {$a->total} students submitted already.';
$string['submissionsaved'] = 'Your changes have been saved';
$string['submissionsgraded'] = '{$a->graded} of {$a->all} submissions graded';
$string['submissionsnotgraded'] = '{$a->reqgrading} of {$a->all} submissions not graded';
$string['submissionstatus'] = 'Submission status';
$string['submissionstatus_'] = 'No submission';
$string['submissionstatus_checkmark_summary'] = '<span id="examples">{$a->checked_examples}</span> out of {$a->total_examples} examples checked.';
$string['submissionstatus_draft'] = 'Draft (not submitted)';
$string['submissionstatus_marked'] = 'Graded';
$string['submissionstatus_new'] = 'No submission';
$string['submissionstatus_reopened'] = 'Reopened';
$string['submissionstatus_submitted'] = 'Submitted for grading';
$string['submissionstatusheading'] = 'Submission status';
$string['submitcheckmark'] = 'Submit your checkmark using this form';
$string['submitted'] = 'Submitted';
$string['submitted_entries'] = 'Submitted';
$string['submittedlateshort'] = '{$a} late';
$string['summary_abs'] = 'x/y Examples checked';
$string['summary_rel'] = '% Examples checked';
$string['timelimit'] = 'Time limit';
$string['timelimit_help'] = 'If enabled, the time limit is stated on the assignment page and a countdown timer is displayed during the assignment.';
$string['timelimitnotenabled'] = 'Time limit is not enabled for assignment.';
$string['timelimitpassed'] = 'The time limit has expired';
$string['timemodified'] = 'Last modified';
$string['timeremaining'] = 'Time remaining';
$string['trackattendance'] = 'Track attendance';
$string['trackattendance_help'] = 'Activate this setting in order to enable tracking of participant\'s attendance.';
$string['ungraded'] = 'Ungraded';
$string['unknown'] = 'Unknown';
$string['upgradekeyerror'] = 'Upgrade failed due to multiple checkmark checks existing for a given example/submission pair. Check out the following github issue for further details: {$a}';
$string['user_dates_overridden'] = 'Dates of user have been overridden!';
$string['userassignmentdefaults'] = 'User assignment defaults';
$string['usermisconf'] = 'User is miss-configured';
$string['usernosubmit'] = 'Sorry, you are not allowed to submit a checkmark.';
$string['useroverride'] = 'User override';
$string['useroverride_edit'] = 'Edit user override';
$string['useroverrides'] = 'User overrides';
$string['usersnone'] = 'No students have access to this assignment.';
$string['viewallsubmissions'] = 'View all submissions';
$string['viewfeedback'] = 'View checkmark grades and comments';
$string['viewgradebook'] = 'View gradebook';
$string['viewmysubmission'] = 'View my submission';
$string['viewpreview'] = 'View preview';
$string['viewsubmissions'] = 'Submissions';
$string['yoursubmission'] = 'Your submission';
$string['zippedgrouppdfs'] = 'Groups as separate PDFs';
