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
 * Strings for component 'via', language 'en', branch 'MOODLE_27_STABLE'
 *
 * @package   via
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absent'] = 'Absent';
$string['accessactivity'] = 'Access your activity:';
$string['activity_deleted'] = 'The Via activity was deleted directly in the Via environment by a user. It is therefore impossible to access. We recommend that you delete this activity in Moodle and create a new one.';
$string['activitydeletion'] = 'Limit activity deletion';
$string['activitydeletiondesc'] = 'If checked, activities will be deleted in Moodle but not in Via.';
$string['activitydone'] = 'This activity is finished.';
$string['activitytitle'] = 'Activity title';
$string['activitywaserased'] = 'Could not find this activity on SVI server. It seems to have been erased.';
$string['adminid_nosuccess'] = 'The mooodle key provided is not valid.';
$string['adminid_success'] = 'The moodle key is valid';
$string['adminid_toolow'] = 'The user\'s rights do not permit the creation of activities. Please contact the administrator to increase the rights.';
$string['adminnotrenrolled'] = 'As administrator you may access the activity although you are not enrolled.';
$string['animator'] = 'Animator';
$string['animators'] = 'Animators';
$string['apiconfig'] = 'API configuration - Step 1';
$string['apiid'] = 'Via API ID (ApiID)';
$string['apiidsetting'] = 'Via API unique ID';
$string['apiurl'] = 'API\'s URL';
$string['apiurlsetting'] = 'API\'s base URL';
$string['attending'] = 'I will be attending';
$string['audiomodelabel'] = 'Audio type for the conference';
$string['audiorecord'] = 'Audio (MP3)';
$string['audiorecordinfo'] = 'Audio only';
$string['automatic'] = 'Automatic';
$string['automaticenrol'] = 'Automatic enrolment';
$string['availabledate'] = 'Available from';
$string['awaitingauthorization'] = 'Awaiting authorization (manual)';
$string['backup'] = 'Incude whiteboard and survey information in course backups';
$string['backupdesc'] = 'If checked whiteboard and survey information from an activity will be included in the new activty produced durning the course backup and restoration process. Documents are always included in this process. Including user ifomation is optional.';
$string['backup_options'] = 'Activity backup and duplication options';
$string['basedon'] = 'The presence status is based on {$a} minutes.';
$string['by'] = 'by';
$string['cancel'] = 'Cancel';
$string['cat_check'] = 'Add';
$string['cat_default'] = 'Set as default';
$string['categoriesheader'] = 'Categories';
$string['category'] = 'Choose a category';
$string['cat_intro'] = 'Choose the Via categories that you wish to make available in Moodle.';
$string['cat_name'] = 'Category names';
$string['cats_modified'] = 'The categories were successfully modified!';
$string['choosecategories'] = 'Configure the categories';
$string['choosepresentor'] = 'To chose a new presenter, simply add a new user to replace the existing presenter. The can only be one presenter.';
$string['cieid'] = 'Via ID (CieID)';
$string['cieidsetting'] = 'Company ID for VIA';
$string['config'] = 'Configuration';
$string['configassist'] = 'Setup wizard';
$string['confirmation'] = 'Participants confirmations';
$string['confirmationstatus'] = 'Confirmation status';
$string['confirmdelete'] = 'Are you sure you want to delete this recording permanently?';
$string['confirmed'] = 'Attendance confirmed';
$string['confirmneeded'] = 'Attendence confirmation is needed';
$string['connectsuccess'] = 'Success with the connection to the API';
$string['conntest'] = 'Connection test';
$string['copied'] = '- Copy';
$string['createdby'] = 'Report created by:';
$string['creationdate'] = 'Report created on:';
$string['date'] = 'Activity date';
$string['delete'] = 'Delete';
$string['description'] = 'Description';
$string['donousewaitingroom'] = 'Do not use (deactivated)';
$string['downloadplaybacks'] = 'Download Recordings';
$string['downloadplaybacksdesc'] = 'If checked, users with editing roles will be permitted to download Via recordings. Before checking this option, please contact SVIesolutions to validate that your server permits it.';
$string['duplication'] = 'Incude whiteboard and survey information in activity duplication';
$string['duplicationdesc'] = 'If checked whiteboard and survey information from an activity will be included in the new activty produced durning the duplication process. User infomation and documents are always included in this process.';
$string['duration'] = 'Duration (minutes)';
$string['edit'] = 'Modify';
$string['editrecord'] = 'Recording edit';
$string['emails_alert_address'] = 'Emails to send alerts';
$string['emails_alert_addressdesc'] = 'Email addresses for overflow alerts. If more than one, use coma as a separtor.';
$string['enddate'] = 'Ends on';
$string['enroledanimators'] = 'Actual animators for activity " {$a->name} "';
$string['enroledparticipants'] = 'Actual participants for activity " {$a->name} "';
$string['enrolmentheader'] = 'Participant enrolments';
$string['enrolmenttype'] = 'Participants enrolment management';
$string['enrolmenttype_help'] = 'Automatic enrollment: all users enrolled in the course will be added to the Via activity. If a student is added after the creation of the Via activity, the student will be added during the next Cron synchronization. If the student accesses the activity before the cron has enrolled him/her, the student will be added and be displayed in the details page of the activity. Users with editing rights in the moodle course will be automatically synchronized as animators, but the list can still be edited.
Manual Registration: Participants must be added from the list of participants choosing the participant from the list of "Potential participants" (right ) and added using the arrow into &quot;Existing participants&quot; (left) . Note: In both modes of entry, the user who creates the activity is automatically added as presenter, but remains editable. It is not possible to have more than one presenter.';
$string['error:ACTIVITY_ACCESS_FAILED'] = 'ACTIVITY_ACCESS_FAILED - When the user is not associated to the activity or the activity is no longer available.';
$string['error:ACTIVITY_DOES_NOT_EXIST'] = 'ACTIVITY_DOES_NOT_EXIST - Must represent a valid activity.';
$string['error:ACTIVITYID_EMPTY'] = 'ACTIVITYID_EMPTY - The ActivityID value is empty.';
$string['error:ACTIVITYID_INVALID'] = 'ACTIVITYID_INVALID - The value passed in the ActivityID is invalid.';
$string['error:allseatstaken'] = 'Sorry, all  available seats are taken on SVI server. You cannot conncet to this activity right now. A notice has already been sent to the administrators about this overflow. You can also send an email to <a href="mailto:$a->email?subject=Avis de debordement sur VIA">$a->email</a> to notify them.<br><br> Please try to reconnect later.';
$string['error:APIID_NOT_FOUND'] = 'APIID_NOT_FOUND - ApiID doesn\'t exists. Please verify your settings.';
$string['error:APPLY_PERIODICITY_INVALID'] = 'APPLY_PERIODICITY_INVALID - The value passed must be 0 or 1.';
$string['error:AUTH_FAILED_BAD_APIID'] = 'AUTH_FAILED_BAD_APIID - The APIID value is not authorised.';
$string['error:AUTH_FAILED_BAD_CIEID'] = 'AUTH_FAILED_BAD_CIEID - The CieID value is not authorised.';
$string['error:CANNOT_CHANGE_STATE'] = 'CANNOT_CHANGE_STATE - The activity has changed state.';
$string['error:CIEID_NOT_FOUND'] = 'CIEID_NOT_FOUND - CIEID doesn\'t exists. Please verify your settings.';
$string['error:COMPANYNAME_TOO_LONG'] = 'COMPANYNAME_TOO_LONG - Le CompanyName value is longer than the maximum of 50 characters.';
$string['error:deletefailed'] = 'The removal of all activities has failed.';
$string['error:disablereviews'] = 'Disabling review mode has failed.';
$string['error:EMAIL_TOO_LONG'] = 'EMAIL_TOO_LONG - The Email value is longer than the maximum of 100 characters.';
$string['error:ERROR_AUTH_BAD_CIEID'] = 'ERROR_AUTH_BAD_CIEID - The IP of the caller is invalid.';
$string['error:ERROR_FAILED_EDIT_USER'] = 'ERROR_FAILED_EDIT_USER - Error during edition, the user was not modified.';
$string['error:ERROR_LOGIN_NO_SPACE_ALLOWED'] = 'ERROR_LOGIN_NO_SPACE_ALLOWED - the login name contains spaces.';
$string['error:FIRSTNAME_TOO_LONG'] = 'FIRSTNAME_TOO_LONG - The Firstname value exceeds the maximum of 50 characters.';
$string['error:FONCTIONTILE_TOO_LONG'] = 'FONCTIONTILE_TOO_LONG - The Fonction value exceeds the maximum of 50 characters.';
$string['error:INVALID_ACTIVITYID'] = 'INVALID_ACTIVITYID - The ID value of the activity is not valid, synchronisation was not possible.';
$string['error:INVALID_ACTIVITYSTATE'] = 'INVALID_ACTIVITYSTATE - The value passed in ActivityState is invalid.';
$string['error:INVALID_ACTIVITYTYPE'] = 'INVALID_ACTIVITYTYPE - The value passed in ActivityType is invalid.';
$string['error:INVALID_AUDIOTYPE'] = 'INVALID_AUDIOTYPE - The value passed in AudioType isinvalid.';
$string['error:INVALID_CIEID'] = 'INVALID_CIEID - The CIEID value must be numeric.';
$string['error:INVALID_CONFIRMATION_STATUS'] = 'INVALID_CONFIRMATION_STATUS - The value passed in ConfirmationStatus is invalid.';
$string['error:INVALID_DATE'] = 'INVALID_DATE - Date format AAAA-MM-JJ HH:MM:SS.';
$string['error:INVALID_DURATION'] = 'INVALID_DURATION - The DURATION value must be numeric.';
$string['error:INVALID_FRIDAY_VALUE'] = 'INVALID_FRIDAY_VALUE - The value of the property; Friday is invalid.';
$string['error:INVALID_GENDER'] = 'INVALID_GENDER - The value passed in Genre is invalid.';
$string['error:INVALID_ISNUMBEREDTITLE'] = 'INVALID_ISNUMBEREDTITLE - The value passed in IsNumberedTitle is invalid.';
$string['error:INVALID_ISPUBLIC'] = 'INVALID_ISPUBLIC - The value passed in ISPUBLIC must be 0 or 1.';
$string['error:INVALID_ISRECORDED'] = 'INVALID_ISRECORDED - The value passed in IsRecorded is invalid.';
$string['error:INVALID_ISREPLAYALLOWED'] = 'INVALID_ISREPLAYALLOWED - The value passed in IsReplayAllowed is invalid.';
$string['error:INVALID_LANGUAGE'] = 'INVALID_LANGUAGE -The value passed in LANGAGE is invalid.';
$string['error:INVALID_MAIL_FORMAT'] = 'INVALID_MAIL_FORMAT - The email format is invalid.';
$string['error:INVALID_MONDAY_VALUE'] = 'INVALID_MONDAY_VALUE - The value of the property; Monday is invalid.';
$string['error:INVALID_MONTHLYDAY'] = 'INVALID_MONTHLYDAY - The value MONTHLYDAY is invalid.';
$string['error:INVALID_NEEDCONFIRMATION'] = 'INVALID_NEEDCONFIRMATION - The value passed in NeedConfirmation is invalid.';
$string['error:INVALID_OBJECT_FORMAT'] = 'INVALID_OBJECT_FORMAT - The INNERXML of the soap:body is invalid.';
$string['error:INVALID_PARTICIPANT_TYPE'] = 'INVALID_PARTICIPANT_TYPE - The value passed in ParticipantType is invalid.';
$string['error:INVALID_PERIODICITY_ENDDATE'] = 'INVALID_PERIODICITY_ENDDATE - Date format AAAA-MM-JJ.';
$string['error:INVALID_PERIODICITY_STARTDATE'] = 'INVALID_PERIODICITY_STARTDATE - Date format AAAA-MM-JJ HH:MM:SS.';
$string['error:INVALID_PHONERIGHT'] = 'INVALID_PHONERIGHT - The conference brige is not valid for this company.';
$string['error:INVALID_PLAYBACK_ID'] = 'INVALID_PLAYBACK_ID - The playback ID is invalid.';
$string['error:INVALID_PROFILID'] = 'INVALID_PROFILID - The profil of this user is either not valid or does not exist for this client.';
$string['error:INVALID_RECNOTIFICATION'] = 'INVALID_RECNOTIFICATION - The value passed in LANGAGE is invalid.';
$string['error:INVALID_RECORDMODEBEHAVIOR'] = 'INVALID_RECORDMODEBEHAVIOR - The value passed in RecordModeBehaviour is invalid.';
$string['error:INVALID_RECORD_TYPE'] = 'INVALID_RECORD_TYPE - The recording type requested is invalide.';
$string['error:INVALID_REDIRECT_TYPE'] = 'INVALID_REDIRECT_TYPE - The value passed in RedirectType is invalid.';
$string['error:INVALID_REMINDERTIME'] = 'INVALID_REMINDERTIME - The value passed in ReminderTime is invalid.';
$string['error:INVALID_ROOMTYPE'] = 'INVALID_ROOMTYPE - The value passed in RoomType is invalid.';
$string['error:INVALID_SATURDAY_VALUE'] = 'INVALID_SATURDAY_VALUE - The value of the property; Saturday is invalid.';
$string['error:INVALID_SOAP_FORMAT'] = 'INVALID_SOAP_FORMAT - Le SOAP request was not properly instanced.';
$string['error:INVALID_STATUS'] = 'INVALID_STATUS - The value passed in Status is invalid.';
$string['error:INVALID_SUNDAY_VALUE'] = 'INVALID_SUNDAY_VALUE - The value of the property; Sunday is invalid.';
$string['error:INVALID_THURSDAY_VALUE'] = 'INVALID_THURSDAY_VALUE -The value of the property; Thursday is invalid.';
$string['error:INVALID_TIMEZONE'] = 'INVALID_TIMEZONE - The value passed in TIMEZONE is invalid.';
$string['error:INVALID_TITLE_TOO_LONG'] = 'INVALID_TITLE_TOO_LONG - The title exceeds the maximum of 100 characters.';
$string['error:INVALID_TUESDAY_VALUE'] = 'INVALID_TUESDAY_VALUE - The value of the property;  Tuesday is invalid.';
$string['error:INVALID_USERID'] = 'INVALID_USERID - The user ID is invalid.';
$string['error:INVALID_USER_RIGHT'] = 'INVALID_USER_RIGHT - The user does not have edition or creation rights for this activity.';
$string['error:INVALID_USERTYPE'] = 'INVALID_USERTYPE - The value passed in LANGAGE is invalid.';
$string['error:INVALID_WAITINGROOMACCESSMODE'] = 'INVALID_WAITINGROOMACCESSMODE - The value passed in WaitingRoomAccesMode is invalid.';
$string['error:INVALID_WEDNESDAY_VALUE'] = 'INVALID_WEDNESDAY_VALUE - The value of the property;  Wednesday is invalid.';
$string['error:LASTNAME_TOO_LONG'] = 'LASTNAME_TOO_LONG - The Lastname value exceeds the maximum of 50 characters.';
$string['error:LOGIN_EMPTY'] = 'LOGIN_EMPTY - The Login value is empty.';
$string['error:LOGIN_TOO_LONG'] = 'LOGIN_TOO_LONG - The Login value exceeds the maximum of 15 characters.';
$string['error:LOGIN_USED'] = 'LOGIN_USED - The Login value is already used.';
$string['error:PASSWORD_EMPTY'] = 'PASSWORD_EMPTY - The Password value is empty.';
$string['error:PASSWORD_TOO_LONG'] = 'PASSWORD_TOO_LONG - The Password value exceeds the maximum of 15 characters.';
$string['error:PERIODICITY_NODE_MISSING'] = 'PERIODICITY_NODE_MISSING - The periodicity value could not be passed.';
$string['error:PHONEBUS_TOO_LONG'] = 'PHONEBUS_TOO_LONG - The PHONEBUS value exceeds the maximum of 20 characters.';
$string['error:PHONECEL_TOO_LONG'] = 'PHONECEL_TOO_LONG - The PHONECEL value exceeds the maximum of 20 characters.';
$string['error:PHONEHOME_TOO_LONG'] = 'PHONEHOME_TOO_LONG - The PHONEHOME value exceeds the maximum of 20 characters.';
$string['error:PLAYBACK_NOT_PUBLIC'] = 'PLAYBACK_NOT_PUBLIC - This playback is not public.';
$string['error:RECORD_NOT_DOWNLOADABLE'] = 'RECORD_NOT_DOWNLOADABLE - The recording is not downloadable.';
$string['error:resetparticipants'] = 'The removal of all participants has failed.';
$string['error:STATUS_INVALID'] = 'The connection to the web conference room was not possible as your user is either deleted or inactive.<br/>Please contact the Via administrator od your institution in order to reactivate your Via user.';
$string['error:TITLE_IS_REQUIRED'] = 'TITLE_IS_REQUIRED - A titile is required.';
$string['error:TITLE_TOO_LONG'] = 'TITLE_TOO_LONG - The Title value exceeds the maximum of 100 characters.';
$string['error:UNABLE_TO_CREATEDATE'] = 'UNABLE_TO_CREATEDATE - The was an error in the creation of the perioditcity dates.';
$string['error:URL_ERROR'] = 'URL_ERROR - The API\'s URL doesn\'t exist. Please verify your settings. Without an the API\'s URL you can not create activities!';
$string['error_user'] = 'User {$a} could not be added to the activity.';
$string['error:USER_DOES_NOT_EXIST'] = 'USER_DOES_NOT_EXIST - The user is invalid.';
$string['error:USER_DOWNLOAD_NOT_ALLOWED'] = 'USER_DOWNLOAD_NOT_ALLOWED - The user is not allowed to download this recording.';
$string['error:USERID_EMPTY'] = 'USERID_EMPTY - The value UserID is invalid.';
$string['existinganimators'] = 'Existing animators';
$string['existingparticipants'] = 'Existing participants';
$string['existingpresentator'] = 'Existing presenter';
$string['export'] = 'View/Export';
$string['finish'] = 'Done';
$string['fullvideo'] = 'Full video (MP4)';
$string['fullvideoinfo'] = 'As viewed in the recording. Resolution : 1024x768';
$string['gotoactivity'] = 'Click here to access the activity';
$string['groupusers'] = 'Users of the accosiated grouping: {$a} cannot be removed from the activity, but others may be added.';
$string['hasconfirmed'] = 'You have confirm that you will attend this activity.';
$string['hasconfirmednot'] = 'You have confirm that you won\'t attend this activity.';
$string['headerduration'] = 'Duration';
$string['highquality'] = 'High quality';
$string['incomplete'] = 'Incomplete';
$string['inpresentatorabsence'] = 'In presentator absence (automatic)';
$string['inviteclicktoaccesshtml'] = 'To go to the activity, click this link below:';
$string['inviteemail'] = '{$a->coursename} -> {$a->modulename} -> {$a->title}
---------------------------------------------------------------------
{$a->datesend}
---------------------------------------------------------------------

Hello {$a->username},

Moodle invites you to participate in the activity &quot; {$a->title} &quot; that will take place on {$a->datebegin} between {$a->hourbegin} and {$a->hourend}

{$a->invitemsg}

---------------------------------------------------------------------
Activity preparation

Click here for the setup wizard : {$a->config}
Clcik here to get technical support : {$a->assist}

---------------------------------------------------------------------
Web access

To go to the activity, follow this link : {$a->activitylink}

---------------------------------------------------------------------

Attention : This activity can be recorded. Please do not access this activity if you do not want to be recorded. This email contains personnal connection informations. Those informations must not be shared';
$string['inviteemailhtml'] = '<p>Hello {$a->username},</p>
<p>Moodle invites you to participate in the activity &laquo; {$a->title} &raquo; that will take place on <b>{$a->datebegin}</b> between <b>{$a->hourbegin}</b> and <b>{$a->hourend}</b>.</p><p>{$a->invitemsg}</p>';
$string['inviteemailhtmlpermanent'] = '<p>Hello {$a->username},</p>
<p>{$a->invitemsg}</p>';
$string['inviteemailpermanent'] = '{$a->coursename} -> {$a->modulename} -> {$a->title}
---------------------------------------------------------------------
{$a->datesend}
---------------------------------------------------------------------

Hello {$a->username},

{$a->invitemsg}

---------------------------------------------------------------------
Activity preparation

Click here for the setup wizard : {$a->config}
Clcik here to get technical support : {$a->assist}

---------------------------------------------------------------------
Web access

To go to the activity, follow this link : {$a->activitylink}

---------------------------------------------------------------------

Attention : This activity can be recorded. Please do not access this activity if you do not want to be recorded. This email contains personnal connection informations. Those informations must not be shared';
$string['inviteemailsubject'] = 'INVITATION: {$a->title}';
$string['invitepreparationhtml'] = 'Activity preparation';
$string['invitessend'] = 'Invitations will be sent in less than 15 minutes.';
$string['invitewarninghtml'] = 'Attention : This activity can be recorded. Please do not access this activity if you do not want to be recorded. This email contains personnal connection informations. Those informations must not be shared.';
$string['invitewebaccesshtml'] = 'Web access';
$string['list_activities'] = 'List of all Via activities in this course';
$string['lowquality'] = 'Low quality';
$string['manageparticipants'] = 'Manage users';
$string['manual'] = 'Manual';
$string['manualenrol'] = 'Manual enrolment';
$string['mask'] = 'Hidden';
$string['mediumquality'] = 'Medium quality';
$string['mobilevideo'] = 'Mobile (MP4)';
$string['mobilevideoinfo'] = 'Optimised for mobile. Resolution : 480x320';
$string['mode'] = 'Audio mode';
$string['modephone'] = 'Phone conference only';
$string['modevoiceweb'] = 'Voice over the Web';
$string['modewebphone'] = 'Web and voice over the phone';
$string['modulename'] = 'Via';
$string['modulename_help'] = 'The Via module allows you to create synchronous meetings in a virtual classroom to share live using voice and video for: remote classes in real time, meetings, work-team meetings, tutoring, seminars, etc.

This tool allows you to manage sub-work-groups, annotations, screen sharing, import or present documents and to share by voice and/or video.

The \'Participant enrolments\' options allow you to manually enroll participants or automatically synchronize them according to their Moodle rights by selecting the option \'Automatic enrolment\'.

The \'Session parameters\' allow you to set the recording mode you wish and select the availability of these to your learners.

Note: Editing and modifying recordings must be made in the Via environment.';
$string['modulenameplural'] = 'Via';
$string['moodle_adminid'] = 'Moodle Admin unique ID';
$string['moodle_config'] = 'API configuration - Step 2';
$string['moodleidsetting'] = 'Unique admin user for this moodle';
$string['multimediaquality'] = 'Multimedia profiles';
$string['multimediaquality_help'] = 'Select the media profile to use in the activity for media exchange (webcam, microphone and multimedia documents). This option can have a significant impact on the fluidity of the exchanges and the bandwidth required for each participant. In general, for a better experience or if you are unsure, it is best to use a lower quality to ensure the smooth fluidity. It is possible to configure other multimedia profiles according to your specific needs (eg large video thumbnails excellent for use in local mode). Contact one of our experts Via for more on this.';
$string['multiple'] = 'Multiple';
$string['mustaccept'] = 'Check the box in order to acces the activity.';
$string['name'] = 'Name';
$string['needconfirmation'] = 'Request confirmation of availability';
$string['needconfirmation_help'] = 'Request confirmation of availability';
$string['neverbegin'] = 'Not done';
$string['noanimators'] = 'There are no animators yet for this activity.';
$string['nocategories'] = 'No categories';
$string['no_categories'] = 'There are no categories, these must be created in the Via portal by and administrator';
$string['no_default'] = 'No default category.';
$string['noparticipants'] = 'There are no participants yet for this activity.';
$string['noparticipantscheckbox'] = 'Add students as animators';
$string['noparticipants_help'] = 'This option is available only with automatic enrollment and ensures that users with the student status are all added as animators in Via.';
$string['norecall'] = 'No recall';
$string['notactivated'] = 'Do not record';
$string['notactivatedfeminin'] = 'Not activated';
$string['notattending'] = 'I won\'t be attending';
$string['notenrolled'] = 'You are not enrolled in this activity. Please contact your teacher if you think you should have access.';
$string['notstarted'] = 'This activity hasn\'t started yet.';
$string['nounifiedrecordpermanent'] = 'Unified record mode is not possible for a permanent activity. Please choose an other option.';
$string['nousers'] = 'Warning - There are no users associated to this activity!';
$string['oldapiversion'] = 'You are using an API version that is older than $a';
$string['options'] = 'Activity options';
$string['overview'] = 'Starts on {$a->start} and ends {$a->end}';
$string['participant'] = 'Participant';
$string['participantmustconfirm'] = 'Participants must confirm participation';
$string['participantmustconfirmdesc'] = 'If checked, participants must confirm if they will be part of the activity.';
$string['participants'] = 'Participants';
$string['participantsynchronization'] = 'Synchronize participants\' information';
$string['participantsynchronizationdesc'] = 'If checked, the participants\' information will by synchronized with those saved in Moodle. The only information that will not be updated are : the login, the password and the user type in Via.';
$string['passdate'] = 'The selected date is passed';
$string['permanent'] = 'Permanent activity';
$string['permanentactivities'] = 'Permanent activities';
$string['permanentactivitiesdesc'] = 'If checked, it will be possible to create permanent activities.';
$string['permanent_help'] = 'Check "Permanent" to make your activity accessible at all times. You will then be obliged to use the waiting room to restrict access to registered users with the "participant" status.';
$string['personalinvitemsg'] = 'Personalized message (optional):';
$string['playbackheader'] = 'Playback viewed (h:m:s)';
$string['pluginadministration'] = 'Via administration';
$string['pluginname'] = 'Via';
$string['pluginversion'] = 'Version :';
$string['portalaccess'] = 'Via portal access.';
$string['portalaccessdesc'] = 'Permits users to access the Via portal without loging in.';
$string['potentialanimators'] = 'Potential animators';
$string['potentialparticipants'] = 'Potential participants';
$string['potentialpresentator'] = 'Potential presenter';
$string['preparation'] = 'Prepare your activity:';
$string['prepareactivity'] = 'Click here prepare your activity';
$string['presence'] = 'Minimum attendance required';
$string['presenceheader'] = 'Online presence (h:m:s)';
$string['presenceheaderreport'] = 'Online presence';
$string['presence_help'] = 'Text must be changed!!!! Value corresponding to the time in minutes from which the user gets the presence status for the activity.';
$string['presencestatus'] = 'Display presence status';
$string['presencestatusdesc'] = 'If checked, a new option will apear in the activitie\'s parameters to set a minimum amount of time that users need to be present to be concidered present for an activity. A printable version will also be available.';
$string['presencetable'] = 'Presence status:';
$string['presencewarning'] = 'Important: The online presence status is determined by the minimum time required to be considered present for thE activity. The status influences the participant\'s progress bar. It is possible to adjust the status by changing the &laquo; Minimum attendance required &raquo; value in the activity\'s parameters.';
$string['present'] = 'Present';
$string['presentator'] = 'Presenter';
$string['recalloneday'] = 'One day before';
$string['recallonehour'] = 'One hour before';
$string['recalloneweek'] = 'One week before';
$string['recalltwodays'] = 'Two days before';
$string['recalltwohours'] = 'Two hours before';
$string['recentrecordings'] = 'Recent recordings';
$string['recordaccept'] = 'I accept';
$string['recording'] = 'Recording';
$string['recordingisdownloadable'] = 'Recording is downloadable';
$string['recordingisdownloadableinfo'] = 'Note : you must first export the video in order for it to be avaiable for downlaod.';
$string['recordingmode'] = 'Recording mode';
$string['recordingmode_help'] = 'If you want to enable the recording option for your activities, two modes are available: "Unified" and "Multiple". The "unified"-type will produce a single unified recording regardless of the number of recordings made during the meeting; the "multiple"-type will produce recordings that are separated and segmented.';
$string['recordings'] = 'Available recording(s):';
$string['recordingtitle'] = 'Recording title';
$string['recordmodebehavior'] = 'Recording';
$string['recordmodebehavior_help'] = 'You can also choose to automatically start recording at access using the "Automatic" option. Choose "Manual" if you do not want the recording to starts automatically, you will then start the recording yourself by clicking on the record icon in the synchronous interface.';
$string['recordwarning'] = 'This activity may be recorded. When checking the box, you are accepting to be recorded.';
$string['refused'] = 'Won\'t attend';
$string['reminderemail'] = '{$a->coursename} -> {$a->modulename} -> {$a->title}
---------------------------------------------------------------------
{$a->datesend}
---------------------------------------------------------------------

Hello {$a->username},reminderemail

Moodle invites you to participate in the activity &quot; {$a->title} &quot; that will take place on {$a->datebegin} between {$a->hourbegin} and {$a->hourend}

---------------------------------------------------------------------
Activity preparation

Click here for the setup wizard : {$a->config}
Clcik here to get technical support : {$a->assist}

---------------------------------------------------------------------
Web access

To go to the activity, follow this link : {$a->activitylink}

---------------------------------------------------------------------

Attention : This activity can be recorded. Please do not access this activity if you do not want to be recorded. This email contains personnal connection informations. Those informations must not be shared';
$string['reminderemailhtml'] = '<p>Hello {$a->username}reminderemailhtml,</p>
<p>This is a reminder for an activity coming soon:</p>
<p><b>Title:</b> {$a->title} <br/>
<b>Date and time</b>{$a->activitydate}<br/>
<b>Duration:</b> {$a->duration minutes}</p>';
$string['reminderemailsubject'] = 'REMINDER: {$a->title}';
$string['report'] = 'Presence report';
$string['resetdeletemodules'] = 'Delete all activities';
$string['resetdisablereviews'] = 'Disable reviews for all activities';
$string['resetparticipants'] = 'Delete all participants and animators (works only for activities with manuel enrollment)';
$string['return'] = 'Back';
$string['reviewacitvity'] = 'Autorize playback';
$string['reviewacitvity_help'] = 'In case you want to make all records available for viewing, select "Autorize playback" option. Otherwise, no participant will be allowed to view the recordings. Note that this option can be changed at any time, even when the activity is completed.';
$string['reviewactivity'] = 'Click here to review this activity';
$string['role'] = 'Role';
$string['roomtype'] = 'Activity type';
$string['roomtype_help'] = 'The "Standard" type is an activity in which all participants are listed and can interact normally, depending on the role assigned. If instead you choose an activity type "Webinar",
 only the presenter and animators will see the names of the participants. In addition, they will only be able to interact through chatting. The latter type is ideal for activities including large audiences
 (over 100 participants) or confidential activities. When the "Permanent" option is selected, the activity will no longer have a fixed date and time.
 All participants associated with this activity can then access at any time. Please note that only the multiple recordings option is available for this type of activity';
$string['save'] = 'Save';
$string['seminar'] = 'Seminar';
$string['sendinvitation'] = 'Send email invitation';
$string['sendinvitationdesc'] = 'If checked, it will be possible to send email invitations to all participants.';
$string['sendinvite'] = 'Send email invitation';
$string['sendrecall'] = 'Send email recall';
$string['sendrecall_help'] = 'Allows you to set an automatic reminder. You can choose to automatically send a reminder to all participants 1 or 2 hours before, 1 or 2 days before, even one week prior to the activity. They will then receive a reminder by email.';
$string['sessionparameters'] = 'Session parameters';
$string['show'] = 'Displayed';
$string['standard'] = 'Standard';
$string['startdate'] = 'Starts on';
$string['STATUS_INVALID'] = 'The connection was impossible, the status is invalid.';
$string['submitinvite'] = 'Send invitations';
$string['subscribeparticipants'] = 'Participants subscription';
$string['technicalassist'] = 'Technical support';
$string['technicalassist_url'] = 'Use a personalised technical support page.';
$string['technicalassist_urldesc'] = 'By default the technical support page will display the information provided in Via. You may add a personalised support page by calling the URL directly. This may be a page created in moodle or another site all together.';
$string['testadminid'] = 'Test the moodle key';
$string['testconnection'] = 'Test API connection';
$string['timeduration'] = 'Duration :';
$string['title_exists'] = 'The title already exists, please try again.';
$string['unified'] = 'Unified';
$string['userispresentor'] = 'This user is the presenter, chose a new one in order to give this user a new role.';
$string['versionscompatible'] = 'The plugin and Via versions are compatible.';
$string['versions_not_compatible'] = 'The plugin and Via versions are not compatible. The plugin requires a minimum of';
$string['via:addinstance'] = 'Add a new via activity';
$string['viaaudiotypes'] = 'Select audio mode that you want to keep.';
$string['via_categoriesdesc'] = 'If checked, categories created in Via may be added to the activity.';
$string['via:manage'] = 'Manage Via Activities';
$string['viausers'] = 'Users:';
$string['via:view'] = 'View Via Activities';
$string['via:viewpresence'] = 'View Presence Reports for Via Activities';
$string['view'] = 'View';
$string['waitingconfirm'] = 'Waiting for confirmation';
$string['waitingroomaccessmode'] = 'Waiting room';
$string['waitingroomaccessmode_help'] = 'The option "Pending Authorization" allows the presenter to allow individual participants\' access while the option "In the absence of the presenter" ensures that no user can access the activity until the speaker is not connected. This last option is particularly useful when using permanent activities.';
