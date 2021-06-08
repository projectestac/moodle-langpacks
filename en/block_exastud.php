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
 * Strings for component 'block_exastud', language 'en', version '3.11'.
 *
 * @package     block_exastud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Niveau'] = 'Level';
$string['Note'] = 'Grade';
$string['UMan'] = 'Male';
$string['UWoman'] = 'Female';
$string['acronym'] = 'Acronym';
$string['add'] = 'Add';
$string['add_class'] = 'Add Class';
$string['addallbasic'] = 'Add basic categories';
$string['addallbasicalways'] = 'Add all new basic categories automatically';
$string['additional_head_teacher'] = 'Additional class teacher';
$string['additional_head_teachers'] = 'Additional class teachers';
$string['additional_info'] = 'Additional info';
$string['ags'] = 'Working groups';
$string['allow_review'] = 'unlock editing';
$string['allow_review_admin_approved'] = 'approved';
$string['allow_review_admin_approved_for_all'] = 'for all';
$string['allow_review_admin_notapproved_yet'] = 'not approved yet';
$string['allow_review_make_request'] = 'make a request to admin for unlock editing';
$string['allow_review_make_request_already'] = 'already requested for unlock editing';
$string['allow_review_until'] = 'until';
$string['already_marked'] = 'This class is already marked';
$string['attention_admin_cannot_be_classteacher'] = 'Classes can only be defined in a class teacher role. Please log in as a class teacher to define a class.';
$string['attention_owner_will_change'] = 'Please note: if you will change the teacher of own class - you will not have access to edit this class!';
$string['attention_plan_will_change'] = 'Please note: if the education plan is changed, all ratings must be re-entered';
$string['attention_send_message_to_classteacher'] = 'Do not forget to <a id="exastud_link_to_class_teacher" href="{$a->messagehref}" target="_blank">send a message</a> to the new class teacher about his new class';
$string['attention_template_will_change'] = 'Please note: changing the standard certificate form will change the certificate form for all students.';
$string['auditleader_fieldtitle'] = 'Chairman of the Audit Committee';
$string['availablecategories'] = 'Available assessment categories';
$string['availableusers'] = 'Available Users';
$string['average'] = 'Average';
$string['average_calculate_button'] = 'Calculate';
$string['average_calculate_table_average'] = 'Average';
$string['average_calculate_table_average_project_title'] = 'Projektarbeit / Projektprüfung';
$string['average_calculate_table_factor'] = 'Factor';
$string['average_calculate_table_grading'] = 'Grading';
$string['average_calculate_table_student'] = 'Student';
$string['average_calculate_table_subjecttype'] = 'type';
$string['average_calculate_table_summ'] = 'Summe';
$string['average_export_button'] = 'Export';
$string['average_needs_calculate'] = 'Please make calculation of average grading for student';
$string['average_needs_calculate_for_student'] = 'Please make calculation of average grading for student {$a->studentname}.';
$string['back'] = 'Back';
$string['backup_description'] = 'Create a backup of assessment data as an sql file. As an admin you can import this backup using a database tool like phphMyAdmin. Backups on teacher level are possible for their individual data.';
$string['backup_go'] = 'Backup Database now';
$string['badclass'] = 'You cannot edit this class';
$string['badstudent'] = 'The student is not member of this class';
$string['basiccategories'] = 'Basic categories';
$string['block_settings'] = 'Settings';
$string['blocktitle'] = 'Student Review';
$string['button_interdisciplinary_skills'] = 'Interdisciplinary skills';
$string['can_not_delete_subject_teacher_because_has_grading'] = 'This subjectteachers have done grading in this class in this subject. It is not possible to delete him as subject teacher. Please change subject teacher in this case.';
$string['categories'] = 'Assessment categories';
$string['certificate_issue_date'] = 'Certificate Issue Date';
$string['certificate_issue_date_class'] = 'Certificate Issue Date';
$string['certificate_issue_date_missed_message'] = 'No certificate issue date has yet been specified. The administrator should input the Certificate Issue Date for generating the certificate correctly.';
$string['class'] = 'Class';
$string['class_default_template'] = 'Default template';
$string['class_delete'] = 'Delete class';
$string['class_educationplan'] = 'Educational plan';
$string['class_info'] = 'Edit Class';
$string['class_logo'] = 'Class logo';
$string['class_marked_as_todelete'] = 'This class marked to delete by site-admin';
$string['class_marked_as_todelete_hover'] = 'This class marked to delete by site admin. Click to redo deleting request.';
$string['class_owner'] = 'Current class teacher';
$string['class_settings_can_edit_crosscompetencies'] = 'can edit interdisciplinary competences';
$string['class_settings_can_edit_learnsocial'] = 'can edit learning and social competences';
$string['class_settings_class_teacher'] = 'Class teacher';
$string['class_settings_subject_teacher'] = 'Subject teacher';
$string['class_title_for_report'] = 'Class name in Report';
$string['class_title_for_report_description'] = 'This class title is used in reports. If this field is empty, in reports the title of class above is used';
$string['class_title_limit_message'] = 'Max. {$a} chars.';
$string['classleader_fieldtitle'] = 'Head of class';
$string['classowner_changed_message'] = 'You changed the class teacher "{$a->classtitle}" to {$a->owner}. So, you do not have access to edit this class from now!';
$string['classteacher_grade_interdisciplinary_competences'] = 'Class teacher can edit interdisciplinary competences';
$string['classteacher_grade_learn_and_social_behaviour'] = 'Class teacher can edit learning and social behaviour';
$string['clear_filter'] = 'Clear filters';
$string['commentshouldnotbeempty'] = 'You have to enter a comment.';
$string['competencies'] = 'Interdisciplinary competences';
$string['configcategories'] = 'Assessment categories in {$a}';
$string['configmember'] = 'Students of {$a}';
$string['configteacher'] = 'Teachers in {$a}';
$string['configuration_classes'] = 'Classes';
$string['configuration_classes_onlyadmin'] = 'Admin access';
$string['copy_class_from_last_period'] = 'Copy class from last period';
$string['cross_competences_for_head'] = 'Interdisciplinary competences';
$string['cross_competences_maintable_title_for_grade'] = 'Gradingscheme: Grade';
$string['cross_competences_maintable_title_for_points'] = 'Gradingscheme: Points';
$string['cross_competences_maintable_title_for_texts'] = 'Gradingscheme: Text entry';
$string['de:Bildungsstandards'] = 'Fulfillable educational standards';
$string['de:Fachbezeichnungen'] = 'Subjects';
$string['delete'] = 'Delete';
$string['delete_class_only_without_users'] = 'Only classes without students can be deleted';
$string['delete_class_refused'] = 'Refused';
$string['delete_confirmation'] = 'Do you really want to delete "{$a}"?';
$string['delete_parameter'] = 'Delete parameter';
$string['delete_refuse_button'] = 'Refuse deletion';
$string['delete_subjectteacher_confirmation'] = 'Do you really want to delete this subject teacher?';
$string['detailedreview'] = 'Detailed review';
$string['donotleave_page_message'] = 'You have unsaved changes on this page. Do you want to leave this page and discard your changes or stay on this page?';
$string['download'] = 'Download';
$string['editclasscategories'] = 'Edit assessment categories';
$string['editclassmemberlist'] = 'Edit student list';
$string['editclassname'] = 'Edit class';
$string['editclassteacherlist'] = 'Edit teacher list';
$string['education_plans'] = 'Educational Plans';
$string['endtime'] = 'End time';
$string['errorinsertingcategories'] = 'Error occured when adding categorie to a course';
$string['errorinsertingclass'] = 'Error when inserting class';
$string['errorinsertingstudent'] = 'Error occured when inserting student';
$string['errorinsertingstudents'] = 'Error occured when adding student to a course';
$string['errorremovingcategories'] = 'Error occured when removing categories from a course';
$string['errorremovingstudents'] = 'Error occured when removing student from a course';
$string['errorstarttimebeforeendtime'] = 'Period {$a->description} has a start time before an end time!';
$string['errorupdatingclass'] = 'Error when updating class';
$string['errorupdatingstudent'] = 'Error occured when updating student';
$string['evaluation'] = 'Evaluation';
$string['evaluation1'] = '1 - insufficient';
$string['evaluation10'] = '10 - very good';
$string['evaluation2'] = '2';
$string['evaluation3'] = '3';
$string['evaluation4'] = '4';
$string['evaluation5'] = '5';
$string['evaluation6'] = '6';
$string['evaluation7'] = '7';
$string['evaluation8'] = '8';
$string['evaluation9'] = '9';
$string['event_classassessmentcategory_added_name'] = 'Assessment category was added to class';
$string['event_classassessmentcategory_deleted_name'] = 'Assessment category was deleted from class';
$string['event_classcreated_name'] = 'Class created';
$string['event_classdatachanged_name'] = 'Data of the class was changed';
$string['event_classdeleted_name'] = 'Class deleted';
$string['event_classmemberassigned_name'] = 'User assigned to class';
$string['event_classmemberunassigned_name'] = 'User unassigned from class';
$string['event_classownerupdated_name'] = 'Class teacher updated';
$string['event_classteacherassigned_name'] = 'Teacher assigned to class';
$string['event_classteacherchanged_name'] = 'Teacher changed';
$string['event_classteacherunassigned_name'] = 'Teacher unassigned from class';
$string['event_classupdated_name'] = 'Class updated';
$string['event_competencecreated_name'] = 'Competence created';
$string['event_competencedeleted_name'] = 'Competence deleted';
$string['event_competenceupdated_name'] = 'Competence updated';
$string['event_educationplancreated_name'] = 'Educational plan created';
$string['event_educationplandeleted_name'] = 'Educational plan deleted';
$string['event_educationplanupdated_name'] = 'Educational plan updated';
$string['event_gradingoptioncreated_name'] = 'Grading option created';
$string['event_gradingoptiondeleted_name'] = 'Grading option deleted';
$string['event_gradingoptionupdated_name'] = 'Grading option updated';
$string['event_periodcreated_name'] = 'Period created';
$string['event_perioddeleted_name'] = 'Period deleted';
$string['event_periodupdated_name'] = 'Period updated';
$string['event_studentdatachanged_name'] = 'Data of the student was changed';
$string['event_studenthidden_name'] = 'Student hidden';
$string['event_studentreviewcategorychanged_name'] = 'Student category assessment changed';
$string['event_studentreviewchanged_name'] = 'Student assessment changed';
$string['event_studentshown_name'] = 'Student shown';
$string['event_subjectcreated_name'] = 'Subject created';
$string['event_subjectdeleted_name'] = 'Subject deleted';
$string['event_subjectstudentdatachanged_name'] = 'Data of the student was changed for subject';
$string['event_subjectupdated_name'] = 'Subject updated';
$string['exastud:addinstance'] = 'Add Exabis Student Review to the course';
$string['exastud:admin'] = 'Administrator';
$string['exastud:editperiods'] = 'Edit periods';
$string['exastud:myaddinstance'] = 'Add Exabis Student Review on My home';
$string['exastud:uploadpicture'] = 'Upload logo';
$string['exastud:use'] = 'Use of Exabis Student Review';
$string['explainclassname'] = 'Edit class name here';
$string['export_class'] = 'Backup assessment data of class';
$string['export_class_password_message'] = 'Please remember the password "<strong>{$a}</strong>" before proceeding';
$string['export_password_message'] = 'Please remember the password "<strong>{$a}</strong>" before proceeding';
$string['filter_bp'] = 'Curriculum';
$string['filter_button'] = 'Filter';
$string['filter_category'] = 'Category';
$string['filter_empty'] = 'Empty';
$string['filter_fieldset'] = 'Filter';
$string['filter_search'] = 'Title search';
$string['filter_show_fulltable'] = 'Show full table';
$string['force_class_to_delete'] = 'Only classes without students can be deleted. But you can mark this class to deleting by site admin';
$string['form_subject_teacher_form_description'] = 'You can transfer the subject {$a->subjecttitle} to another teacher. The current teacher is {$a->currentteacher_name}. All gradings from {$a->currentteacher_name} are transferred to new teacher.';
$string['form_subject_teacher_form_header'] = 'Transfer subject to other teacher';
$string['form_subject_teacher_form_no_head_class_teacher'] = 'Also remove from head class teacher';
$string['form_subject_teacher_form_save'] = 'Transfer subject now.';
$string['form_subject_teacher_form_select_new_teacher'] = 'New teacher for {$a->subjecttitle}';
$string['form_subject_teacher_form_select_new_teacher_docu'] = 'In this Dropdown Users are listed, who have a teacher role in some context (classteacher, teacher in this course, classowner, teacher in a subject, additional class teacher, teacher for project, bilingual teacher)';
$string['gender'] = 'Gender';
$string['grade_and_difflevel'] = 'Grade and difficulty level';
$string['grading'] = 'Grading';
$string['groupleader_fieldtitle'] = 'Learning group tutor';
$string['head_teacher'] = 'Head teacher';
$string['head_teachers'] = 'Class teachers';
$string['hide_all'] = 'Hide all';
$string['hide_uploadform'] = 'Hide upload form';
$string['html_report'] = 'Overview';
$string['import_class_from_backup'] = 'Import class from backup';
$string['info_category_without_cross_competences'] = 'if category is {$a->categorytitles} - this report does not have &#8221;interdisciplinary competences&#8220;';
$string['interdisciplinary_competences'] = 'Interdisciplinary competences';
$string['invalidperiodid'] = 'Invalid period-ID';
$string['it_is_my_class'] = 'My class';
$string['last_period'] = 'Last period:';
$string['leaders'] = 'Signatures';
$string['learn_and_sociale'] = 'Learning and social behavior';
$string['learn_and_sociale_for_head'] = 'Learning and social behavior';
$string['learn_and_sociale_for_head2'] = 'Learning and social behavior';
$string['legend'] = 'Key';
$string['load_last_period'] = 'Load last period';
$string['load_last_period_done'] = 'Last period is adapted';
$string['logging'] = 'Activate logging';
$string['logosize'] = 'For efficient use the logo banner must be 840x100px. Please avoid using transparency in PNG files as they may cause an error while creating a PDF report.';
$string['man'] = 'male';
$string['mark_to_delete_go'] = 'Mark to delete by admin';
$string['message_interdisciplinary_competences_notes_limit'] = 'Please enter grades 1-{$a->limit}.';
$string['message_interdisciplinary_competences_points_limit'] = 'Please enter Point 0-{$a->limit}.';
$string['messageprovider:approve_allow_review'] = 'Approve of review of class from old period';
$string['messageprovider:prolong_allow_review'] = 'Prolong of review of class from old period';
$string['mixed_bw_nonbw_class_error_2'] = 'Template for class not found. Please check the option of interdenominational schools - "exastud | bw_active"';
$string['more_student_data'] = 'Show more data';
$string['more_student_data_all'] = 'Show more data for all students';
$string['more_student_data_all_hide'] = 'Hide detail data for all students';
$string['move_here'] = 'Move here';
$string['name'] = 'Name';
$string['new_head_teacher'] = 'New class teachers';
$string['newperiod'] = 'New period';
$string['no_entries_found'] = 'No Entries found';
$string['no_possible_inputs_in_report'] = 'No fields defined in Report Configurator. No data input possible';
$string['noclassestoreview'] = 'No classes to review';
$string['noclassfound'] = 'No class found!';
$string['noperiods'] = 'There is no assessment-period defined yet. Please contact the administrator.';
$string['nostudentsfound'] = 'No students found';
$string['nostudentstoreport'] = 'No students to report';
$string['nostudentstoreview'] = 'No students to review';
$string['not_assigned'] = 'Not assigned';
$string['not_enough_data_for_report'] = 'Not enough data for generating reports for selected students';
$string['not_found_report'] = 'No any report found';
$string['not_selected'] = 'Empty';
$string['notification_allow_review_old_class_approve_body'] = 'Dear {$a->receiver}, </br></br>Review of class "{$a->classtitle}" was approved until {$a->datetime}.</br></br> This message has been generated automatically from moodle site {$a->site}.';
$string['notification_allow_review_old_class_approve_context'] = 'Allow review class from old period';
$string['notification_allow_review_old_class_approve_subject'] = '{$a->site}: Review of class "{$a->classtitle}" was approved';
$string['notification_allow_review_old_class_prolong_body'] = 'Dear {$a->receiver}, </br></br>Review of class "{$a->classtitle}" was prolonged to {$a->datetime}.</br></br> This message has been generated automatically from moodle site {$a->site}.';
$string['notification_allow_review_old_class_prolong_context'] = 'Allow review class from old period';
$string['notification_allow_review_old_class_prolong_subject'] = '{$a->site}: Review of class "{$a->classtitle}" was prolonged';
$string['only_profilesubject_teacher'] = 'Only profile subject\'s teacher can edit';
$string['parent'] = 'Parent';
$string['perioddesc'] = 'Description of the period:';
$string['perioddescription'] = 'Description';
$string['periodinput'] = 'Periods input';
$string['periodoverlaps'] = 'Period {$a->period1} overlaps with {$a->period2}';
$string['periodreview'] = 'Review for period';
$string['periods'] = 'Periods';
$string['periods_incorrect'] = 'Period defined is not correct';
$string['periodserror'] = 'Error with the configuration of periods';
$string['pictureupload'] = 'Logo Upload';
$string['please_enter_group_name'] = 'Please enter the class/group name!';
$string['pluginname'] = 'Exabis Student Review';
$string['print'] = 'Print';
$string['printall'] = 'Print all';
$string['printversion'] = 'Print version';
$string['profilesubject'] = 'Profile subject';
$string['project_based_badclass'] = 'You cannot edit this project';
$string['project_based_badstudent'] = 'The student is not member of this project';
$string['project_based_class'] = 'Project';
$string['project_based_configmember'] = 'Students of {$a}';
$string['project_based_configteacher'] = 'Teachers in {$a}';
$string['project_based_configuration'] = 'Edit project';
$string['project_based_editclassmemberlist'] = 'Edit project list';
$string['project_based_editclassname'] = 'Edit project';
$string['project_based_editclassteacherlist'] = 'Edit teacher list';
$string['project_based_errorinsertingclass'] = 'Error occured while inserting project';
$string['project_based_errorupdatingclass'] = 'Error when updating project';
$string['project_based_explainclassname'] = 'Click here to edit the project name';
$string['project_based_noclassestoreview'] = 'No projects to review';
$string['project_based_noclassfound'] = 'No project found!';
$string['project_based_redirectingtoclassinput'] = 'No project information found, redirecting to project input.';
$string['project_based_reviewclass'] = 'Project review';
$string['project_based_studentreview'] = 'PROJECT REVIEW';
$string['project_based_students'] = 'Projects';
$string['project_based_teachers'] = 'Project-Teachers';
$string['project_based_total'] = 'Total score';
$string['project_based_upload_picture'] = 'You can upload a logo for a project specific report';
$string['project_teacher_also_was_changed'] = '{$a->newteachername} also got Project Teacher instead of {$a->oldteachername}';
$string['redirectingtoclassinput'] = 'No class information found, redirecting to class input.';
$string['redirectingtoperiodsinput'] = 'No period information found, redirecting to periods input';
$string['reinstall_report_templates'] = 'Reinstall all default templates';
$string['report'] = 'Report';
$string['report_averages_header_average'] = 'Average';
$string['report_averages_header_factor'] = 'Factor';
$string['report_averages_header_grading'] = 'Grading';
$string['report_averages_header_student'] = 'Student';
$string['report_averages_header_subjects'] = 'Subjects';
$string['report_averages_header_sum'] = 'Sum';
$string['report_averages_header_type'] = 'Type';
$string['report_averages_title'] = 'Averages';
$string['report_bilinguales'] = 'Bilingual instruction';
$string['report_button_export'] = 'Export reports';
$string['report_button_import'] = 'Import reports';
$string['report_cross_competences'] = 'Interdisciplinary competences';
$string['report_delete'] = 'Delete report: {$a}';
$string['report_delete_confirm_message'] = 'Are you sure that you want to delete report "{$a}"';
$string['report_edit_userprofile'] = 'Edit user profile';
$string['report_edit_userprofile_noaccess'] = 'You do not have the rights to edit user\'s profile';
$string['report_export_selected_templates'] = 'Export selected';
$string['report_export_update_files'] = 'Update files if existant';
$string['report_export_update_reports'] = 'Update reports if existant';
$string['report_export_with_files'] = 'Add sources (files) of templates';
$string['report_for_additional'] = 'Additional fields';
$string['report_for_bilingual'] = 'Report for bilingual assessment';
$string['report_for_subjects'] = 'Certificate for profile subject';
$string['report_import_file_shouldnotbeempty'] = 'File should not be empty.';
$string['report_import_ignored_list'] = 'These reports were ignored';
$string['report_import_inserted_list'] = 'These reports were inserted';
$string['report_import_templates'] = 'Import';
$string['report_import_updated_list'] = 'These reports were updated';
$string['report_learn_and_sociale'] = 'Learning and social behavior';
$string['report_other_report_fields'] = 'Other report fields';
$string['report_preview'] = 'Preview';
$string['report_report_eval'] = 'Project evaluations';
$string['report_report_fields'] = 'Report fields';
$string['report_select_all'] = 'Select all';
$string['report_selectdeselect_all'] = 'Select/Deselect all';
$string['report_setting_current_file'] = 'Current template';
$string['report_setting_current_title'] = 'Current title';
$string['report_setting_type_header'] = 'Header';
$string['report_setting_type_image'] = 'Picture';
$string['report_setting_type_image_height'] = 'Height';
$string['report_setting_type_image_maxbytes'] = 'Max size (bytes)';
$string['report_setting_type_image_width'] = 'Width';
$string['report_setting_type_matrix'] = 'Matrix';
$string['report_setting_type_matrix_column_titles'] = 'Column titles';
$string['report_setting_type_matrix_row_titles'] = 'Row titles';
$string['report_setting_type_matrix_type'] = 'Matrix type';
$string['report_setting_type_matrix_type_checkbox'] = 'Checkbox';
$string['report_setting_type_matrix_type_radio'] = 'Radio button';
$string['report_setting_type_matrix_type_text'] = 'Text';
$string['report_setting_type_select'] = 'Select';
$string['report_setting_type_text'] = 'Text';
$string['report_setting_type_textarea'] = 'Textarea';
$string['report_setting_type_userdata'] = 'Profile field';
$string['report_setting_type_userdata_datakey'] = 'Choose user\'s field';
$string['report_setting_willbe_added'] = 'Does not exist now. Will be added.';
$string['report_settings'] = 'Report settings';
$string['report_settings_button_add_additional_param'] = 'Add a new parameter';
$string['report_settings_copy'] = 'Copy report';
$string['report_settings_copy_done'] = 'Created a new report "{$a->newtitle}" (id: {$a->newid}) from "{$a->sourcetitle}" (id: {$a->sourceid})';
$string['report_settings_copy_newtitle'] = '{$a->title} - COPY !!!';
$string['report_settings_countinrow'] = 'with {$a} characters per row';
$string['report_settings_countinrow_fieldtitle'] = 'Characters per row';
$string['report_settings_countinrow_short'] = '{$a} chars';
$string['report_settings_countrows'] = '{$a} rows';
$string['report_settings_countrows_fieldtitle'] = 'Count of rows';
$string['report_settings_edit'] = 'Report configurations';
$string['report_settings_group_description_classTeacher'] = 'Fields to be filled in by the class teacher';
$string['report_settings_group_description_default'] = 'These markers are fixed and will be filled with own values if they are in the report';
$string['report_settings_group_description_other'] = '';
$string['report_settings_group_title_classTeacher'] = 'For class teacher';
$string['report_settings_group_title_default'] = 'Default';
$string['report_settings_group_title_other'] = 'Additional fields';
$string['report_settings_maxchars'] = 'with a maximum of {$a} characters';
$string['report_settings_maxchars_fieldtitle'] = 'Maximum of characters';
$string['report_settings_maxchars_short'] = 'max {$a} chars';
$string['report_settings_new'] = 'New report configuration';
$string['report_settings_no'] = 'no';
$string['report_settings_no_template_file'] = 'No template file: {$a->filename}';
$string['report_settings_selectboxkey_fieldtitle'] = 'Key';
$string['report_settings_selectboxvalue_fieldtitle'] = 'Value';
$string['report_settings_setting_additional_params'] = 'Additional parameters';
$string['report_settings_setting_ags'] = 'Team';
$string['report_settings_setting_bp'] = 'Curriculum';
$string['report_settings_setting_category'] = 'Category';
$string['report_settings_setting_class'] = 'Class';
$string['report_settings_setting_comments'] = 'Comments';
$string['report_settings_setting_dateofbirth'] = 'Date of birth';
$string['report_settings_setting_focus'] = 'Focus';
$string['report_settings_setting_grades'] = 'Grades';
$string['report_settings_setting_hidden'] = 'Hidden';
$string['report_settings_setting_id'] = '';
$string['report_settings_setting_learninggroup'] = 'Learning group';
$string['report_settings_setting_learnsocialbehavior'] = 'Learning and social behavior';
$string['report_settings_setting_placeofbirth'] = 'Place of birth';
$string['report_settings_setting_projektthema'] = 'Project assessment';
$string['report_settings_setting_reportdate'] = 'Date for report card';
$string['report_settings_setting_rs_hs'] = 'RS/HS category';
$string['report_settings_setting_studentname'] = 'First and second name';
$string['report_settings_setting_subjectelective'] = 'Elective subject';
$string['report_settings_setting_subjectprofile'] = 'Profile subject';
$string['report_settings_setting_subjects'] = 'Subjects';
$string['report_settings_setting_template'] = 'Template';
$string['report_settings_setting_title'] = 'Title';
$string['report_settings_setting_year'] = 'School year';
$string['report_settings_upload_new_filetemplate'] = 'Upload new template file';
$string['report_settings_upload_new_filetemplate_overwrite'] = 'Overwrite file if existant';
$string['report_settings_userdata_wrong_user_parameter'] = 'User profile field \'{$a->fieldname}\' does not exist. Create it or change value to existing field.';
$string['report_settings_userdata_wrong_user_parameter_editurl_title'] = 'Edit user profile fields';
$string['report_settings_userdata_wrong_user_parameter_in_reports_list'] = 'This report has wrong userdata markers. Please edit this report to resolve this error.';
$string['report_settings_yes'] = 'yes';
$string['report_student_template'] = 'Template';
$string['report_template'] = 'Template';
$string['report_userprofile_field_info'] = 'User\'s property.';
$string['reports'] = 'Reports';
$string['reports_certs_and_attachments'] = 'Certificates and attachments';
$string['reports_overviews'] = 'Overviews';
$string['reports_server_notification'] = 'If the report is not generated correctly, it could indicate an excessive amount of data or a server setting that is too low. Please contact the administrator of the server in this case.';
$string['requests'] = 'System requests';
$string['requests_class_delete'] = 'Delete';
$string['requests_class_delete_list'] = 'Classes delete';
$string['requests_class_teacher'] = 'Class teacher';
$string['requests_class_title'] = 'Class';
$string['requests_for_you'] = 'There are System Requests for you';
$string['requests_no_any'] = 'No any requests';
$string['requests_unlock_approve_button'] = 'Approve';
$string['requests_unlock_delete_button'] = 'Refuse';
$string['requests_unlock_prolong_button'] = 'Prolong';
$string['requests_unlock_request_created'] = 'Request created';
$string['requests_unlock_request_until'] = 'until';
$string['requests_unlock_requested_teacher'] = 'request for teacher';
$string['requests_unlock_review_list'] = 'Unlock to review';
$string['reset_report_selected_templates'] = 'Reset selected templates to default state';
$string['reset_report_templates'] = 'Reset default templates to default state';
$string['reset_report_templates_description'] = 'Are you sure? Default templates will be reset to default state. Custom templates will not be changed';
$string['responsibility'] = 'Responsibility';
$string['review'] = 'Review';
$string['review_button'] = 'Review';
$string['review_class_average_not_calculated'] = 'no average grading calculated';
$string['review_class_average_value'] = 'Average value';
$string['review_class_averages'] = 'Averages calculation';
$string['review_project_evalueations'] = 'Project evaluations';
$string['review_student_other_data_body'] = 'Body';
$string['review_student_other_data_footer'] = 'Footer';
$string['review_student_other_data_header'] = 'Header';
$string['review_table_part_additional'] = 'General';
$string['review_table_part_subjects'] = 'Subjects';
$string['review_table_part_subjectsfromother'] = 'From other subject teachers';
$string['reviewclass'] = 'Class review';
$string['reviewcount'] = 'review(s) yet';
$string['reviewstudent'] = 'Student review';
$string['school_logo'] = 'School logo';
$string['school_logo_description'] = 'Maximum size of image: {$a->width}x{$a->height} pixels';
$string['schoollieder_fieldtitle'] = 'School principal';
$string['select_all'] = 'Select all';
$string['select_another_class'] = 'Select another class';
$string['select_student'] = 'Please select at least one student';
$string['selfreliance'] = 'Self-reliance';
$string['settings_bw_reports'] = 'Use interdenominational schools reports';
$string['settings_city'] = 'Learning Development Report: City';
$string['settings_competence_evalpoints_limit'] = 'Maximum points for assessment type "points"';
$string['settings_competence_evalpoints_limit_description'] = 'If value of exastud/competence_evaltype is based upon points';
$string['settings_competence_evaltype'] = 'Assessment of competences is based on';
$string['settings_competence_evaltype_grade'] = 'Grades';
$string['settings_competence_evaltype_point'] = 'Points';
$string['settings_competence_evaltype_text'] = 'Text entry';
$string['settings_detailed_review'] = 'Detailed review';
$string['settings_detailed_review_body'] = 'This setting allows you to see all the assessments from teachers in detail';
$string['settings_edustandarts'] = 'Fulfillable educational standards';
$string['settings_edustandarts_description'] = 'Comma seperated list';
$string['settings_eval_setup'] = 'Assessment grading values';
$string['settings_eval_setup_link'] = 'Edit';
$string['settings_exacomp_assessment_categories'] = 'Use competence grids for assessment categories';
$string['settings_exacomp_verbeval'] = 'Verbalized assessment from exabis competences';
$string['settings_export_class_password'] = 'Passwort protection (AES-256 encryption) for class backups';
$string['settings_export_class_report_password'] = 'Passwort protection (AES-256 encryption) for class reports';
$string['settings_export_class_report_password_description'] = '(only available from php version 7.2 on)';
$string['settings_grade_interdisciplinary_competences'] = 'Show interdisciplinary competences to class teachers';
$string['settings_heading_security'] = 'Security';
$string['settings_heading_security_description'] = '';
$string['settings_only_learnsoziale'] = 'Assessment of learning and social behavior only';
$string['settings_project_based_assessment'] = 'Project based assessment';
$string['settings_project_based_assessment_body'] = 'This setting allows you to use project based assessment instead of class assessment';
$string['settings_shoolname'] = 'Learning Development Report: School Name';
$string['settings_shooltype'] = 'Learning Development Report: School Type';
$string['settings_sourceId'] = 'Source ID';
$string['settings_sourceId_description'] = 'Automatically generated ID of this Exastud installation. This ID can not be changed';
$string['show_all'] = 'Show all';
$string['showall'] = 'Show all';
$string['sort_parameter'] = 'Sort parameters (move)';
$string['starttime'] = 'Start time';
$string['studentgradereports'] = 'Grade Reports';
$string['studentreview'] = 'STUDENT REVIEW';
$string['students'] = 'Students';
$string['subject'] = 'Subject';
$string['subject_category'] = 'Category';
$string['subject_category_b'] = 'Best grade';
$string['subject_category_m'] = 'Relevant Subject';
$string['subjectteacher_change_button'] = 'Match a new teacher and transmit his grading';
$string['subjectteacher_delete_button'] = 'Delete relation of this teacher and subject';
$string['subjectteacher_grade_interdisciplinary_competences'] = 'Subject teacher can edit interdisciplinary competences';
$string['subjectteacher_grade_learn_and_social_behaviour'] = 'Subject teacher can edit learning and social behavior';
$string['suggestions_from_exacomp'] = 'Grade suggestions from competence grid (exacomp)';
$string['teacher'] = 'Teacher';
$string['teacher_for_bilingual'] = 'Teacher for bilingual assessment';
$string['teacher_for_project'] = 'Teacher for project assessment';
$string['teacher_subject_role'] = 'Description of subject/role of teacher';
$string['teachers'] = 'Teachers';
$string['teachers_options'] = 'Teacher Options';
$string['teamplayer'] = 'Team player';
$string['template_textarea_limits_error'] = 'Please use defined limits for textarea fields';
$string['temporary_hidden'] = 'Temporarily unavailable';
$string['textarea_chars'] = 'Characters';
$string['textarea_charsleft'] = 'Characters left';
$string['textarea_charstomuch'] = 'Characters too much';
$string['textarea_limit_notation'] = 'To show full text in the Report, please do not type in more then {$a->chars_per_row} signs in the last row.';
$string['textarea_linestomuch'] = 'Lines too much';
$string['textarea_max'] = 'Maximum';
$string['textarea_maxchars'] = 'All characters';
$string['textarea_rows'] = 'Rows';
$string['textblock'] = 'Text block';
$string['this_category_related_to_classes'] = 'This category is related to class';
$string['this_category_reviewed_for_student'] = 'This category has been reviewed for some students';
$string['total'] = 'Total score';
$string['unmark_to_delete_button'] = 'Unmark to delete';
$string['unmark_to_delete_go'] = 'Unmark to delete by admin';
$string['upload_new_templatefile'] = 'Upload new template';
$string['upload_picture'] = 'You can upload a logo for a school-specific report';
$string['upload_success'] = 'The new logo was uploaded successfully!';
$string['woman'] = 'female';
