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
 * Strings for component 'report_myfeedback', language 'en', version '4.4'.
 *
 * @package     report_myfeedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['academicyear'] = 'Academic year';
$string['academicyearinfo'] = 'The academic year this instance of Moodle relates to.';
$string['academicyeartextinfo'] = 'A text describing the academic year this instance of Moodle relates to.';
$string['accumulativetitle'] = 'Accumulative:';
$string['addeditfeedback'] = 'Add/Edit feedback';
$string['addeditnotes'] = 'Add/Edit notes';
$string['addfeedback'] = 'It is not possible to display Turnitin feedback automatically.';
$string['addfeedbacktitle'] = 'Click here to add feedback from Turnitin';
$string['addnonfeedback'] = 'Add Turnitin feedback';
$string['addnotes'] = 'Add notes';
$string['addnotestitle'] = 'Click here to add self-reflective notes';
$string['allparts'] = '(all parts)';
$string['alltutees'] = 'Seach for students';
$string['analyse'] = 'Analyse';
$string['apostrophe_s'] = '\'s';
$string['archivedbhost'] = 'Archived DB Host';
$string['archivedbhostinfo'] = 'Archived Database host name (on which the SQL queries will be executed)';
$string['archivedbnotexist'] = 'This database does not exist or access details incorrect. Admin must configure My feedback report settings page correctly!';
$string['archivedbpass'] = 'Archived DB Password';
$string['archivedbpassinfo'] = 'Archive database password (for above username).';
$string['archivedbsettings'] = 'Archived Database Settings (not recommended for production installations)';
$string['archivedbuser'] = 'Archived DB Username';
$string['archivedbuserinfo'] = 'Archive Database username (should have SELECT privileges on above DB).';
$string['archivedinstance'] = 'Archived instance';
$string['archivedinstanceinfo'] = 'Whether this instance of Moodle is an archived instance.';
$string['archivedomain'] = 'Archived FQDN';
$string['archivedomaindefault'] = 'https://';
$string['archivedomaininfo'] = 'The Fully Qualified Domain Name (FQDN) with http/https';
$string['archivelink'] = 'Archive URL';
$string['archivelinksettings1'] = 'URL for Archive last year';
$string['archivelinksettings2'] = 'URL for Archive 2 years ago';
$string['archivelinksettings3'] = 'URL for Archive 3 years ago';
$string['archivelinksettings4'] = 'URL for Archive 4 years ago';
$string['archivelinksettings5'] = 'URL for Archive 5 years ago';
$string['archivelinksheading'] = 'Archive Links';
$string['archivelinktext'] = 'Description for archived year {$a}';
$string['archivelinktextinfo'] = 'Description for archive URL {$a} to be used in report.';
$string['archivenamingconvention'] = 'Archived DB naming convention';
$string['archivenamingconventiondefault'] = 'moodle_archive_';
$string['archivenamingconventioninfo'] = 'What naming convention do you use before your academic year e.g."moodle_archive_xxxx" where xxxx is the two digit value for the academic years e.g."1415". <br>The current release only uses the default convention.';
$string['archiveyears'] = 'Archived years';
$string['archiveyearsinfo'] = 'How many years of archive do you want to make available?<br /> Years with <i>no</i> URL or <i>no</i> description will not be shown.';
$string['assessmentbreakdown'] = 'Assessment breakdown';
$string['attempt'] = 'attempt';
$string['attempts'] = 'attempts';
$string['bargraphdesc'] = 'The lowest grade is {$a->minimum}%, the median grade is {$a->mean}% and the highest grade is {$a->maximum}%. The number of students who scored within each grade range is displayed within the graph itself.';
$string['blockstring'] = 'My feedback string';
$string['blocktitle'] = 'My feedback';
$string['browsersupport'] = 'Your browser does not support the HTML5 canvas tag.';
$string['category'] = 'Category';
$string['categorystaff'] = 'Category staff';
$string['categorystudents'] = 'Category students';
$string['close'] = 'Close';
$string['comment'] = 'Comment:';
$string['comments'] = 'Comments strategy:';
$string['copyfeedback'] = 'Paste general feedback from Turnitin';
$string['coursebreakdown'] = 'Course breakdown';
$string['coursecolon'] = 'Course:';
$string['courselimit'] = 'Course limit';
$string['courselimitheading'] = 'Dept Admin Second Level Category Course Limit';
$string['courselimitinfo'] = '<p style="color: #990000;">Too many courses to show statistics for this category. Please choose a course in the drop-down list above to show statistics for that course.</p>';
$string['courselimitsettings'] = 'Set the limit for the number of courses to show statistics for second level category';
$string['coursestaff'] = 'Course staff';
$string['coursestudents'] = 'Course students';
$string['current_academic_year'] = 'Current';
$string['dashboard'] = 'My feedback report';
$string['dashboard_assessments'] = 'Assessments';
$string['dashboard_students'] = 'Students';
$string['dbhost'] = 'DB Host';
$string['dbhostinfo'] = 'Remote Database host name (on which the SQL queries will be executed - must be a duplicate of this Moodle database instance - used for avoiding load issues on primary Moodle database).<br />Leave blank to use the default Moodle database.';
$string['dbname'] = 'DB Name';
$string['dbnameinfo'] = 'Remote Database name (on which the SQL queries will be executed - must be a duplicate of this Moodle database instance - used for avoiding load issues on primary Moodle database).<br />Leave blank to use the default Moodle database.';
$string['dbpass'] = 'DB Password';
$string['dbpassinfo'] = 'Remote database password (for above username).<br />Leave blank to use the default Moodle database.';
$string['dbsettings'] = 'Current Academic Year Database Settings';
$string['dbuser'] = 'DB Username';
$string['dbuserinfo'] = 'Remote Database username (should have SELECT privileges on above DB).<br />Leave blank to use the default Moodle database.';
$string['department'] = 'Department';
$string['dept_admin_exportheader'] = 'Course Name/User Firstname,Lastname,Assessments,Non-submissions,Late submissions,Graded assessments,Low grades';
$string['dept_admin_filename'] = 'MyFeedback_dept_admin_report_';
$string['dept_admin_report'] = 'Departmental admin dashboard report - stats at selected second level category only';
$string['draft'] = 'draft';
$string['draft_submission'] = 'draft submission';
$string['draft_submission_msg'] = 'The assignment is still in draft status. It has not yet been submitted';
$string['editfeedback'] = 'Edit feedback';
$string['editfeedbacktitle'] = 'Click here to edit';
$string['editnotes'] = 'Edit notes';
$string['editnotestitle'] = 'Click here to edit';
$string['email_address'] = 'Email address:';
$string['email_dept_subject'] = 'Your%20Departmental%20Admin';
$string['email_tutee_subject'] = 'Your%20Personal%20Tutor';
$string['email_tutor'] = 'Email your tutor';
$string['email_tutor_subject'] = 'Your%20Personal%20Tutee';
$string['enrolledmodules'] = 'Moodle Courses currently enrolled on:';
$string['enrolledstudents'] = 'Enrolled students:';
$string['eventmtutordownload'] = 'Module tutor dashboard analytics downloaded';
$string['eventptutordownload'] = 'Personal tutor dashboard analytics downloaded';
$string['eventreportaddfeedback'] = 'My feedback Turnitin feedback added';
$string['eventreportaddnotes'] = 'My feedback notes added';
$string['eventreportdownload'] = 'My feedback report table downloaded';
$string['eventreportupdatefeedback'] = 'My feedback Turnitin feedback updated';
$string['eventreportupdatenotes'] = 'My feedback notes updated';
$string['eventreportviewed'] = 'My feedback report viewed';
$string['eventreportviewed_dept'] = 'My feedback Departmental admin dashboard viewed';
$string['eventreportviewed_mtutor'] = 'My feedback Module tutor dashboard viewed';
$string['eventreportviewed_mystudents'] = 'My feedback My students tab viewed';
$string['eventreportviewed_ptutor'] = 'My feedback Personal tutor dashboard viewed';
$string['eventreportviewed_usage'] = 'My feedback Usage dashboard viewed';
$string['export_to_excel'] = 'Export to Excel';
$string['exportheader'] = 'Course,Assessment,Type,Due date,Submission date,Grade,Grade range,General feedback,Viewed';
$string['faculty'] = 'Top level:';
$string['feedback'] = 'view feedback';
$string['filename'] = 'MyFeedback_report_';
$string['for'] = 'for';
$string['fullfeedback'] = 'view full feedback';
$string['grade'] = 'Grade -';
$string['grademark'] = 'GradeMark';
$string['gradetblheader_assessment'] = 'Assessment (part name)';
$string['gradetblheader_assessment_info'] = 'The name and link to the assessment. Turnitin Assignments can contain multiple parts, so the part name for the assessment appears in brackets afterwards. Workshops provide a grade/feedback for the submitted work, as well as a grade/feedback for how well the students assess others\' work, so whether it is the original \'submission\' or the \'assessment\' of peers\' work appears in brackets afterwards.';
$string['gradetblheader_availablegrade'] = 'Available grade';
$string['gradetblheader_bar'] = 'Bar graph';
$string['gradetblheader_bar_info'] = 'A visual representation of the grade achieved as a percentage (for numeric grades only).';
$string['gradetblheader_course'] = 'Course';
$string['gradetblheader_course_info'] = 'The name and link to the course that contains the assessment.';
$string['gradetblheader_duedate'] = 'Due date';
$string['gradetblheader_duedate_info'] = 'The date the assessment was due (if applicable).';
$string['gradetblheader_feedback'] = 'Full feedback';
$string['gradetblheader_feedback_info'] = 'A link to the full feedback, showing any grades, written comments, in-text comments, rubrics or marking guide feedback against particular criteria. Any in-text comments will be displayed within the feedback file for Moodle Assignments. If a feedback file is available, a file icon will display.';
$string['gradetblheader_generalfeedback'] = 'General feedback';
$string['gradetblheader_generalfeedback_info'] = 'Feedback comments provided by the tutor (or by peers or the students themselves where indicated for workshops). Marking guide feedback for each criteria and selected rubric feedback will also be displayed for Moodle Assignments. Turnitin Assignment feedback must be copied and pasted into the report by a student or their tutor.';
$string['gradetblheader_grade'] = 'Grade';
$string['gradetblheader_grade_info'] = 'The grade the student received for the assessment.';
$string['gradetblheader_module'] = 'Module';
$string['gradetblheader_range'] = 'Range';
$string['gradetblheader_range_info'] = 'The range of grades possible for the assessment.';
$string['gradetblheader_relativegrade'] = 'Relative grade';
$string['gradetblheader_selfreflectivenotes'] = 'Self-reflective notes';
$string['gradetblheader_selfreflectivenotes_info'] = 'Self-reflective notes added by the student. All self-reflective notes are visible to a students\' personal tutor and departmental administrators.';
$string['gradetblheader_submission_feedback'] = 'Submission / Feedback';
$string['gradetblheader_submissiondate'] = 'Submission date';
$string['gradetblheader_submissiondate_info'] = 'The date the assessment was submitted. If submitted late, a warning icon will appear that shows how late it was when you hover over it. Quizzes with multiple attempts will show the last date. Moodle Assignments that have been uploaded, but not yet submitted (still in draft status) will show \'draft\' instead of a date. Assessments not submitted (but with grades or feedback) will show \'no submission\'.';
$string['gradetblheader_type'] = 'Type';
$string['gradetblheader_type_info'] = 'The type of assessment, whether it be a Moodle Assignment, Turnitin Assignment, Quiz, Workshop (for peer assessment), or a manual grade item entered directly into the Moodle gradebook.';
$string['gradetblheader_viewed'] = 'Viewed';
$string['gradetblheader_viewed_info'] = 'The date the feedback was first viewed by the student after being released.';
$string['gradetblheader_weighting'] = 'Weighting';
$string['grading_form'] = 'view grading form';
$string['groupname'] = 'Group name';
$string['groupwork'] = 'group';
$string['hasfeedbackfile'] = 'Has feedback file.';
$string['insertsuccessful'] = 'Data successfully inserted';
$string['lastmoodlelogin'] = 'Last Moodle login:';
$string['late_submission_msg'] = 'The assessment was submitted';
$string['latefeedback'] = 'Late feedback days';
$string['latefeedbackheading'] = 'Late Feedback';
$string['latefeedbacksettings'] = 'The number of days for feedback to be late';
$string['livedomain'] = 'Live FQDN';
$string['livedomaindefault'] = 'https://';
$string['livedomaininfo'] = 'The Fully Qualified Domain Name (FQDN) with http/https';
$string['manual_gradeitem'] = 'Manual item';
$string['markingguide'] = 'Marking guide';
$string['meet_tutor'] = 'Meet your tutor';
$string['mod_tutor_exportheader'] = 'Course Name/User Firstname,Lastname,Assessments,Non-submissions,Late submissions,Graded assessments,Low grades';
$string['mod_tutor_filename'] = 'MyFeedback_mod_tutor_report_';
$string['mod_tutor_report'] = 'Module tutor dashboard report';
$string['moddescription'] = 'Use the Ctrl/Shift to select multiple courses if applicable.';
$string['modtutorstats'] = 'Module tutor stats';
$string['moduleleaderview'] = '- tutor view';
$string['modulesteach'] = 'Moodle Courses currently teaching:';
$string['moduletutors'] = 'Module tutors';
$string['moodle_assignment'] = 'Assignment';
$string['more'] = ', ...more';
$string['moreinfo'] = 'Click to view full list of courses';
$string['my_feedback'] = 'My feedback';
$string['myfeedback:addnonfeedback'] = 'Add/edit Turnitin feedback';
$string['myfeedback:modtutor'] = 'My feedback module tutor';
$string['myfeedback:personaltutor'] = 'My feedback personal tutor';
$string['myfeedback:progadmin'] = 'My feedback departmental admin';
$string['myfeedback:student'] = 'My feedback student';
$string['myfeedback:usage'] = 'My feedback usage statistics';
$string['myfeedback:view'] = 'View My feedback';
$string['mymodules'] = 'My courses';
$string['mystudentssrch_relationship_info'] = 'Either your \'Personal tutee\' or the short name of the courses you teach or administer where that student is enrolled.';
$string['mystudentssrch_username_info'] = 'The full name of the student who is your personal tutee, or whom you teach or support.';
$string['new_window_msg'] = 'Opens in a new window';
$string['no_submission'] = 'no submission';
$string['no_submission_msg'] = 'There is no submission and it is past the due date. Disregard if you have been granted an individual extension.';
$string['noarchivesupporth1'] = '<h1>No support for that version of Moodle!</h1>';
$string['noarchivesupporth2'] = '<h2>Too many database changes were made for the report to support this!</h2><h2>Select a different tab or refresh your screen to continue...</h2>';
$string['nodata'] = 'No data';
$string['nodataforyear'] = 'No data for this academic year';
$string['nodatatodisplay'] = 'No data to display';
$string['noenrolments'] = 'This user has not yet been enrolled in any courses';
$string['nographtodisplay'] = 'No graph to display';
$string['nomodule'] = 'No course for this academic year';
$string['nopermission'] = 'You do not have permission to view this page';
$string['notutor'] = 'You have no personal tutor details';
$string['numerrortitle'] = 'Number of errors:';
$string['offline_assignment'] = 'offline';
$string['or'] = 'or';
$string['originality'] = 'Originality';
$string['othertutee'] = 'Other tutee';
$string['overallfeedback'] = 'Overall feedback';
$string['overallmodule'] = 'Overall Course (to-date):';
$string['overallstudentusage'] = 'Overall student usage';
$string['overview'] = 'overview';
$string['overview_text_dept'] = 'This dashboard shows an overview of assessments and students for all the Moodle courses within categories where you have been assigned \'My feedback Departmental Administrator\' access in Moodle. Choose the top level (faculty) and then the second level (department) from the drop-down lists. If you choose \'uncategorised\' for the second level list you will see courses from the top level category (assuming you have access at this level). You can also view assessments for a particular course within a category by clicking on a course name, or choosing it from the Course drop-down list. When you select a particular Moodle course you can also view module tutor and group information for that course. You can also send an email to the module tutors (blind copied, so they can\'t see each other\'s names) by selecting the checkbox in the Send Mail column and clicking the [Send mail] button.';
$string['overview_text_mtutor'] = 'This dashboard shows an overview of assessments for the modules you teach. You can select the modules you wish to analyse in the My courses list and then click the [analyse] button. Hold down the shift key to select a range of courses, or the ctrl key to select multiple courses individually. For each Moodle course you will see a breakdown of information for each assessment. You can also view a student breakdown for each assessment by clicking on the toggle under the assessment name, or by clicking the [student breakdown] button.';
$string['overview_text_ptutor'] = 'This dashboard shows an overview of assessments for each of your personal tutees. You can see a course breakdown for each student by clicking on the toggle under their name. You can also send an email (blind copied, so students don\'t see each other\'s names) by selecting the checkbox in the Send Mail column and clicking the [Send mail] button.';
$string['overview_text_ptutor_tab'] = 'If you are a student studying a taught programme, your Personal Tutor\'s details will appear below. You can contact them to ask for guidance on your overall academic progress and personal and professional development.';
$string['overview_text_usage'] = 'This dashboard shows statistics for My feedback report usage. Please only use one window or tab at a time, as opening more than one could produce unusual results.';
$string['overviewlimit'] = 'Overview tab course limit';
$string['overviewlimitheading'] = 'Overview Tab Course Limit';
$string['overviewlimitsettings'] = 'Set the limit for the number of courses to show in the overview tab';
$string['ownreport'] = 'View own dashboard';
$string['p_tut_programme'] = 'Programme';
$string['p_tutor_exportheader'] = 'Tutee Firstname/Course Shortname,Lastname,Assessments,Non-submissions,Late submissions,Graded assessments,Low grades';
$string['p_tutor_filename'] = 'MyFeedback_p_tutor_report_';
$string['p_tutor_report'] = 'Personal tutor dashboard report';
$string['parent'] = 'Parent';
$string['parentdepartment'] = 'Parent department:';
$string['peerfeedback'] = 'Peer feedback:';
$string['personaltutee'] = 'Personal tutee';
$string['personaltutees'] = 'Personal Tutees';
$string['personaltutors'] = 'Personal tutors';
$string['personaltutorstudents'] = 'Personal tutor\'s students';
$string['personaltutorview'] = '- tutor view';
$string['pluginname'] = 'My feedback';
$string['print_msg'] = 'Use ESC to exit print screen';
$string['print_report'] = 'Print';
$string['privacy:metadata:report_myfeedback'] = 'Self-reflective notes and Turnitin feedback manually entered by users.';
$string['privacy:metadata:report_myfeedback:coursefullname'] = 'Course that stored notes/feedback relate to';
$string['privacy:metadata:report_myfeedback:feedback'] = 'Turnitin feedback manually entered by user';
$string['privacy:metadata:report_myfeedback:gradeitemname'] = 'Grade item that stored notes/feedback relate to';
$string['privacy:metadata:report_myfeedback:notes'] = 'Self-reflective notes entered by user';
$string['privacy:metadata:report_myfeedback:timemodified'] = 'Last modified timestamp of notes/feedback';
$string['privacy:metadata:report_myfeedback:userid'] = 'The Moodle databse ID of the user for whom notes and feedback is stored.';
$string['progadmin_dashboard'] = 'Departmental admin dashboard';
$string['progadminview'] = '- departmental admin view';
$string['programme'] = 'Second level:';
$string['provisional_grades'] = 'The marks shown here are provisional and may include marks for assessments that do not count towards your final grade. Please refer to the
    <a href="" title="Student Record System login" rel="tooltip">student record system</a> to see a formal record of your grade.';
$string['quiz'] = 'Quiz';
$string['relationship'] = 'Relationship';
$string['relativegradedescription'] = 'This shows your grade position relative to the class for all numeric grades.';
$string['reportfor'] = 'Report for';
$string['reporttype'] = 'Report Type';
$string['reset_table'] = 'Reset table';
$string['return-2-dash'] = 'Return to my dashboard';
$string['review'] = 'review';
$string['reviewaattempt'] = 'review {$a} attempt';
$string['reviewlastof'] = 'review last of {$a} attempts';
$string['rubric'] = 'view rubric';
$string['rubrictext'] = 'Rubric';
$string['savefeedback'] = 'Save feedback and close';
$string['savenotes'] = 'Save notes and close';
$string['search'] = 'Search';
$string['searchcategory'] = 'Enter category name';
$string['searchcourses'] = 'Enter course code or name';
$string['searchusers'] = 'Enter email address';
$string['secondlevelcat'] = 'Second level category:';
$string['selectall'] = 'Select all';
$string['selectallforemail'] = 'Select all for emailing';
$string['selfaddedfeedback'] = 'Self-added feedback';
$string['selfassessment'] = 'Self-assessment:';
$string['sendmail'] = 'Send mail';
$string['settingsacademicyear'] = 'Academic year';
$string['settingsacademicyeartext'] = 'Academic year description';
$string['staff'] = 'staff';
$string['staffmember'] = 'Staff member';
$string['statsperassessment'] = 'Stats per assessment';
$string['statspercourse'] = 'Stats per course';
$string['statsperstudent'] = 'Stats per student';
$string['student'] = 'Student';
$string['student_due_info'] = 'The number of students who are expected to complete this assessment.';
$string['student_feed_info'] = 'The number of students where feedback was returned to them more than {$a->lte} days after the due date, or submission date, whichever is later.';
$string['student_graded_info'] = 'The number of students graded to date with feedback visible for this assessment.';
$string['student_late_info'] = 'The number of students with late submissions for this assessment.';
$string['student_low_info'] = 'The number of students who scored below 50% for this assessment.';
$string['student_nonsub_info'] = 'The number of students who missed submissions for this assessment.';
$string['student_overall_info'] = 'The number of students who score in each percentile and the lowest grade, median grade (in red) and highest grade (numbered and marked above the graph)';
$string['studentaddedfeedback'] = 'Student-added feedback';
$string['studentbreakdown'] = 'Student breakdown';
$string['studentgraphdesc'] = 'The lowest grade is {$a->minimum}%, the median grade is {$a->mean}% and the highest grade is {$a->maximum}%. The student\'s score is {$a->studentscore}%.';
$string['studentnotincourse'] = 'This student is not enrolled in this course.';
$string['studentrecordsystem'] = 'Launch Student Record System';
$string['studentrecordsystemlink'] = 'https://';
$string['studentrecordsystemlinkheading'] = 'Student Record System Link';
$string['studentrecordsystemlinksettings'] = 'Set the link for the Student Record System';
$string['studentrecordsystemlinktext'] = 'Student Record System Link';
$string['studentrecordsystemsettings'] = 'Text on Button to launch the Student Record System';
$string['studentrecordsystemtext'] = 'Student Record System Button Text';
$string['studentsaccessto'] = 'Any personal tutees you are allocated (in Portico) will show by default in the list below. To find a student in any of the Moodle courses you teach or administer, please search for their <b>email address</b>.';
$string['submission'] = 'view submission';
$string['suborassessed'] = 'Assessed';
$string['tabs_academicyear'] = 'Academic year';
$string['tabs_feedback'] = 'Feedback comments';
$string['tabs_feedback_text'] = 'Here you can view the general feedback from your assessments. This is taken from the General feedback section on assessments including Moodle Assignments, Peer Assessed Workshops and Quizzes. The feedback from Turnitin Assignments needs to be manually copied and pasted in to the report, since this can\'t be imported automatically. Click \'view feedback\' to view your assessment feedback in full. If you are on a small screen you may need to click the plus icon to see this link.';
$string['tabs_mtutor'] = 'Module tutor dashboard';
$string['tabs_mymodules'] = 'My courses';
$string['tabs_mytutees'] = 'My students';
$string['tabs_overview'] = 'Overview';
$string['tabs_progadmin'] = 'Departmental admin overview';
$string['tabs_ptutor'] = 'Personal tutor';
$string['tabs_tutor'] = 'Personal tutor dashboard';
$string['teachernopermission'] = 'You do not have permission to add feedback for this student.';
$string['togglegrade'] = 'Toggle grade';
$string['togglegradedescription'] = 'You can toggle between the relative grade and the absolute grade graphs.';
$string['turnitin_assignment'] = 'Turnitin';
$string['tutee'] = 'Tutee';
$string['tutees_plus_minus'] = 'Tutees (+/-)';
$string['tutor_messages'] = 'Messages';
$string['tutorfeedback'] = 'Tutor feedback:';
$string['tutorgroups'] = 'Tutor groups (+/-)';
$string['tutortblheader_assessment'] = 'Assessments';
$string['tutortblheader_assessment_info'] = 'A count of all assessments with a due date in the past, or that have been  submitted to, plus any manual grade items.';
$string['tutortblheader_graded'] = 'Graded <br> assessments';
$string['tutortblheader_graded_info'] = 'The number of assessments graded to date with feedback visible to students.';
$string['tutortblheader_latefeedback'] = 'Late feedback';
$string['tutortblheader_latefeedback_info'] = 'The number of assessments where feedback was returned to students more than {$a->lte} days after the due date, or submission date, whichever is later.';
$string['tutortblheader_latesubmissions'] = 'Late <br> submissions';
$string['tutortblheader_latesubmissions_info'] = 'The number of late submissions for all due assessments.';
$string['tutortblheader_lowgrades'] = 'Low graded <br> (<50%)';
$string['tutortblheader_lowgrades_info'] = 'The number of assessments graded to date that scored below 50%.';
$string['tutortblheader_name'] = 'Name';
$string['tutortblheader_nonsubmissions'] = 'Non-submissions';
$string['tutortblheader_nonsubmissions_info'] = 'The number of missed submissions for all due assessments.';
$string['tutortblheader_overallgrade'] = 'Overall grade';
$string['tutortblheader_overallgrade_info'] = 'The graph shows the lowest grade, median grade (in red)  and highest grade (numbered and marked above the graph). Each student\'s grade is shown out of 100 (under the graph to the right) and is shown in red (<40%), amber (41-50%) or green (>50%).';
$string['tutortblheader_personaltutees'] = 'Personal tutees / Course names';
$string['uncategorized'] = 'Uncategorized';
$string['updatesuccessful'] = 'Data successfully updated';
$string['usage'] = 'Usage';
$string['usage_categorystaff_info'] = 'This report shows a list of staff and their individual usage within a category.';
$string['usage_categorystaffoverview_info'] = 'This report shows an overview of staff usage within a category.';
$string['usage_categorystudents_info'] = 'This report shows a list of students and their individual usage within a category.';
$string['usage_categorystudentsoverview_info'] = 'This report shows an overview of student usage within a category.';
$string['usage_coursestaff_info'] = 'This report shows a list of staff and their individual usage within a course.';
$string['usage_coursestaffoverview_info'] = 'This report shows an overview of staff usage within each course within a particular category.';
$string['usage_coursestudents_info'] = 'This report shows a list of students and their individual usage within a course.';
$string['usage_coursestudentsoverview_info'] = 'This report shows an overview of student usage within each course within a particular category.';
$string['usage_dashboard'] = 'Usage dashboard';
$string['usage_personaltutorstudents_info'] = 'This report shows an overview of a tutor\'s personal tutees and their My Feedback activity.';
$string['usage_staff_exportheader'] = 'Name,Total views,Own report views,My Students tab views,Students viewed,Student report views,Personal tutor dashboard views,Module tutor dashboard views,Departmental admin dashboard views,Downloads,Last accessed,Personal Tutees';
$string['usage_staffmember_info'] = 'This report shows the usage of an individual staff member across all their courses.';
$string['usage_staffoverview_exportheader'] = 'Name,Staff,Total views,Own report views,My Students tab views,Students viewed,Student report views,Personal tutor dashboard views,Module tutor dashboard views,Departmental admin dashboard views,Downloads,Last accessed,Personal Tutees';
$string['usage_student_exportheader'] = 'Name,Viewed by,Total views,Self-reflective notes,Turnitin feedback,Downloads,Personal tutor,Last accessed';
$string['usage_student_info'] = 'This report shows the usage of an individual student across all their courses.';
$string['usage_studentoverview_exportheader'] = 'Name,Students,Viewed by,Total views,Self-reflective notes,Turnitin feedback,Downloads,Personal tutor,Last accessed';
$string['usagereport'] = 'usage report';
$string['usagesrchheader_catname_info'] = 'The name of the category and the link to its usage report.';
$string['usagesrchheader_coursecatname_info'] = 'The name of the category this course sits within and the link to its usage report.';
$string['usagesrchheader_coursename_info'] = 'The full name of the course (and shortname in brackets) and the link to its usage report.';
$string['usagesrchheader_pcatname_info'] = 'The name of the parent category this category sits within and the link to its usage report.';
$string['usagesrchheader_userdept_info'] = 'The name of the user\'s department, to help find people with similar names.';
$string['usagesrchheader_username_info'] = 'The full name of the user and the link to their usage report. Shows their email address on hover.';
$string['usagetblheader_courses'] = '# courses';
$string['usagetblheader_courses_info'] = 'The number of courses within this category.';
$string['usagetblheader_downloads'] = 'Downloads';
$string['usagetblheader_downloads_info'] = 'The number of times MyFeedback reports have been downloaded.';
$string['usagetblheader_enrolled'] = '# enrolled';
$string['usagetblheader_lastaccessed'] = 'Last accessed';
$string['usagetblheader_lastaccessed_info'] = 'The time the report was last accessed.';
$string['usagetblheader_modtutorviews_info'] = 'The number of times the user has viewed the module tutor dashboard.';
$string['usagetblheader_mystudenttabviews'] = 'My Students tab views';
$string['usagetblheader_mystudenttabviews_info'] = 'The number of times the My Students tab was viewed.';
$string['usagetblheader_name_info'] = 'The name of the course or user.';
$string['usagetblheader_notes'] = 'Self-reflective notes';
$string['usagetblheader_notes_info'] = 'The number of self-reflective notes added.';
$string['usagetblheader_ownreportviews'] = 'Own report views';
$string['usagetblheader_ownreportviews_info'] = 'The number of times the user viewed their own report views (the default view).';
$string['usagetblheader_personaltutees_info'] = 'The number of personal tutees / link to the personal tutees report for this user.';
$string['usagetblheader_personaltutor_info'] = 'The number of personal tutors / name of the student\'s personal tutor and link to their usage report.';
$string['usagetblheader_personaltutorviews_info'] = 'The number of times the user has viewed the personal tutor dashboard.';
$string['usagetblheader_progadminviews_info'] = 'The number of times the user has viewed the departmental administrator dashboard.';
$string['usagetblheader_staff_info'] = 'The number of staff enrolled in this course/category.';
$string['usagetblheader_studentreportviews'] = 'Student report views';
$string['usagetblheader_studentreportviews_info'] = 'The number of times student reports have been viewed in total.';
$string['usagetblheader_students_info'] = 'The number of students enrolled in this course/category.';
$string['usagetblheader_studentsviewed'] = 'Students viewed';
$string['usagetblheader_studentsviewed_info'] = 'The number of students\' MyFeedback reports viewed by this user.';
$string['usagetblheader_tiifeedback'] = 'Turnitin feedback';
$string['usagetblheader_tiifeedback_info'] = 'The number of Turnitin feedback notes added.';
$string['usagetblheader_totalviews'] = 'Total views';
$string['usagetblheader_totalviews_info'] = 'The total number of views of any MyFeedback report.';
$string['usagetblheader_viewed'] = 'Viewed';
$string['usagetblheader_viewed_info'] = 'How many users (or whether one user has) viewed the report at least once.';
$string['usagetblheader_viewedby'] = 'Viewed by';
$string['usagetblheader_viewedby_info'] = 'How many staff have viewed the report for this student.';
$string['usernotavailable'] = 'The details of this user are not available to you.';
$string['userprogramme'] = 'Programme:';
$string['view'] = 'view';
$string['viewadminreports'] = 'View admin reports';
$string['viewfeedback'] = 'view the feedback directly in Turnitin';
$string['viewfeedbacktitle'] = 'Click here to view feedback in Turnitin';
$string['views'] = 'views';
$string['viewstudentreports'] = 'View student reports';
$string['viewtutorreports'] = 'View tutor reports';
$string['waslate'] = '{$a->late} late.';
$string['wordcloud_text'] = 'This word cloud shows the frequency of words and phrases that have appeared in your feedback - the larger the word, the more frequently it is used in feedback. Hover over a word to see how many times and where it has been used.';
$string['wordcloud_title'] = 'Words used commonly in feedback';
$string['workshop'] = 'Workshop';
$string['year'] = 'Year';
$string['yearlevel'] = 'Yr level';
