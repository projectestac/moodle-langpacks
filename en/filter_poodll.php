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
 * Strings for component 'filter_poodll', language 'en', version '4.4'.
 *
 * @package     filter_poodll
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['REGION_AFS1'] = 'Africa (Capetown)';
$string['REGION_APN1'] = 'Asia Pacific (Tokyo)';
$string['REGION_APN2'] = 'Asia Pacific (Seoul)';
$string['REGION_APS1'] = 'Asia Pacific (Mumbai)';
$string['REGION_APSE1'] = 'Asia Pacific (Singapore)';
$string['REGION_APSE2'] = 'Asia Pacific (Sydney)';
$string['REGION_CAC1'] = 'Canada (Central)';
$string['REGION_CNNW1'] = 'China (Ningxia)';
$string['REGION_EUC1'] = 'EU (Frankfurt)';
$string['REGION_EUW1'] = 'EU (Ireland)';
$string['REGION_EUW2'] = 'EU (London)';
$string['REGION_MES1'] = 'Middle East (Bahrain)';
$string['REGION_SAE1'] = 'South America (São Paulo)';
$string['REGION_USE1'] = 'US East (N. Virginia)';
$string['REGION_USE2'] = 'US East (Ohio)';
$string['REGION_USW1'] = 'US West (N. California)';
$string['REGION_USW2'] = 'US West (Oregon)';
$string['accountdashboard'] = 'Account Dashboard';
$string['activate'] = 'Activate Poodll?';
$string['advancedsettings'] = 'Advanced Settings';
$string['alwayshtml5'] = 'Always use HTML5';
$string['appauthorised'] = 'Poodll filter is authorised for this site.';
$string['appitselfnotauthorised'] = 'No valid subscription contains access to the plugin: filter_poodll';
$string['appnotauthorised'] = 'Poodll filter is NOT authorised for this site.';
$string['audio'] = 'Audio';
$string['audiotranscode'] = 'Auto Conv. to MP3';
$string['audiotranscodedetails'] = 'Convert recorded/uploaded audio file to MP3 format before storing in Moodle. This works for recordings made on tokyo.poodll.com, or uploaded recordings if using FFMPEG';
$string['autotryports'] = 'Try diff. ports if cannot connect';
$string['awsregion'] = 'Cloud Region (AWS)';
$string['awsregion_desc'] = 'Some Poodll services including remote conversion and text to speech are assisted by cloud services. Choose the closest region to your Moodle server for best performance and to satisfy any data protection policies or regulations that apply to you.';
$string['awssdkauto'] = 'Auto select AWS SDK';
$string['awssdklocal'] = 'Use AWS SDK from plugin local_aws';
$string['awssdknone'] = 'Do not use AWS SDK';
$string['awssdkv2'] = 'Use AWS SDK V2';
$string['awssdkv3'] = 'Use AWS SDK V3';
$string['bandwidth'] = 'Student connection. bytes/second. Affects webcam qual.';
$string['bgtranscode_audio'] = 'Perform Conversions to MP3 Background';
$string['bgtranscode_video'] = 'Perform Conversions to MP4 Background';
$string['bgtranscodedetails_audio'] = 'This is more reliable than performing them while user waits. But the user will not get their audio till cron has run after saving. Only works if you are using FFMPEG and Moodle 2.7 or higher. For recordings in MP3 with the MP3 recorder, conversion takes place in the browser, not on the server. So server side conversion (FFMPEG) will not be used.';
$string['bgtranscodedetails_video'] = 'This is more reliable than performing them while user waits. But the user will not get their video till cron has run after saving. Only works if you are using FFMPEG and Moodle 2.7 or higher.';
$string['bmr_recorder'] = 'Burnt Rose';
$string['bundle'] = 'Bundle';
$string['burntrose_recorder'] = 'Burnt Rose';
$string['cameraback'] = 'back';
$string['camerafront'] = 'front';
$string['cancel'] = 'Cancel';
$string['capturefps'] = 'Video Recorder Capture FPS';
$string['captureheight'] = 'Video Recorder Capture Height';
$string['capturewidth'] = 'Video Recorder Capture Size';
$string['cleartemplate'] = 'Clear template';
$string['cloudpoodllserver'] = 'Cloud Poodll Server';
$string['cloudpoodllserver_details'] = 'The server to use for Cloud Poodll. Only change this if Poodll has provided a different one.';
$string['cpapi_heading'] = 'Poodll API Settings';
$string['cpapisecret'] = 'Poodll API Secret';
$string['cpapisecret_details'] = 'This can be obtained from the API creds tab on your members area at Poodll.com.';
$string['cpapiuser'] = 'Poodll API Username';
$string['cpapiuser_details'] = 'This is the same as your username at Poodll.com.';
$string['credentialsinvalid'] = 'The API username and secret entered could not be used to get access. Please check them.';
$string['dataset'] = 'Dataset';
$string['dataset_desc'] = 'Poodll allows you to pull a dataset from the database for use in your template. This is an advanced feature. Enter the sql portion of a $DB->get_records_sql call here.';
$string['datasetvars'] = 'Dataset Variables';
$string['datasetvars_desc'] = 'Put a comma separated list of variables that make up the vars for the SQL. You can and probably will want to use variables here.';
$string['debug_enable'] = 'Enable Debugging';
$string['debug_enable_details'] = 'If enabled, information about recordings will be stored in the Moodle logs. These are intended to assist in troubleshooting and support from the Poodll helpdesk. Turn off when not needed or you will have useless junk in your Moodle log.';
$string['debug_heading'] = 'Poodll Debugging';
$string['default_camera'] = 'Default camera';
$string['defaultwhiteboard'] = 'Default whiteboard';
$string['displaysubs'] = '{$a->subscriptionname} : expires {$a->displayexpiredate}';
$string['end'] = 'Expiration';
$string['event_adhoc_completed'] = 'Poodll Adhoc task completed';
$string['event_adhoc_convert_completed'] = 'Poodll Adhoc convert task completed';
$string['event_adhoc_convert_registered'] = 'Poodll Adhoc convert task registered';
$string['event_adhoc_move_completed'] = 'Poodll Adhoc move task completed';
$string['event_adhoc_move_registered'] = 'Poodll Adhoc move task registered';
$string['event_adhoc_registered'] = 'Poodll Adhoc task registered';
$string['event_debug_log'] = 'Poodll debug note';
$string['expired'] = 'Poodll not displayed because registration has expired. Ask your teacher/administrator to renew the registration at Poodll.com.';
$string['exportdiagnostics'] = 'Export';
$string['extensions'] = 'File Extensions';
$string['extensions_desc'] = 'A CSV (comma separated value) list of file extensions this filter can parse.';
$string['extensionsettings'] = 'File Extension Settings';
$string['fa-button-playrecording'] = 'Play Recording';
$string['fa-button-record'] = 'Record';
$string['fa-button-settings'] = 'Settings Dialog';
$string['fa-button-stop'] = 'Stop';
$string['fa-button-uploadrecording'] = 'Upload Recording';
$string['failedfetchsubreport'] = 'Failed to fetch subscription report';
$string['ffmpeg'] = 'Convert uploaded media with FFMPEG';
$string['ffmpeg_details'] = 'FFMPEG must be installed on your Moodle Server and on the system path. It will need to support converting to mp3, so try it out first on the command line, eg ffmpeg -i somefile.flv somefile.mp3 .';
$string['fillcredentials'] = 'Set API user and secret with existing credentials';
$string['filter_poodll_audioplayer_heading'] = 'Audio Player Settings';
$string['filter_poodll_camera_heading'] = 'Web Camera Settings (Flash only)';
$string['filter_poodll_flashcards_heading'] = 'Flashcards Settings';
$string['filter_poodll_html5recorder_heading'] = 'HTML5 Recorder Settings';
$string['filter_poodll_mic_heading'] = 'Microphone Settings (Flash only)';
$string['filter_poodll_mp3recorder_heading'] = 'MP3 Recorder Settings (Flash only)';
$string['filter_poodll_network_heading'] = 'Poodll Red5 Server Settings';
$string['filter_poodll_registration_explanation'] = 'To authorise Poodll enter your Poodll API username and secret. You can obtain these from <a href=\'https://poodll.com/member\'>https://poodll.com/member</a> after subscribing.  The old long registration key system is deprecated, but still available on the advanced menu. However you will need API credentials to use Poodll cloud assisted services.';
$string['filter_poodll_registration_heading'] = 'Register your Poodll';
$string['filter_poodll_videogallery_heading'] = 'Video Gallery Settings';
$string['filter_poodll_videoplayer_heading'] = 'Video Player Settings';
$string['filter_poodll_whiteboard_heading'] = 'Whiteboard Settings';
$string['filtername'] = 'Poodll Filter';
$string['finished'] = 'finished';
$string['flashcardstype'] = 'Flashcards Type';
$string['flashonandroid'] = 'Use Flash on Android';
$string['flashonandroid_desc'] = 'It is possible to use Flash on Android, though in many cases its not available and difficult to communicate to students what to do. So by default this is off.';
$string['fluencybuilder_recorder'] = 'Fluency Builder';
$string['freetrial'] = 'Get Cloud Poodll API Credentials and a Free Trial';
$string['freetrial_desc'] = 'A dialog should appear that allows you to register for a free trial with Poodll. After registering you should login to the members dashboard to get your API user and secret. And to register your site URL.';
$string['fresh_recorder'] = 'Fresh';
$string['generalsettings'] = 'General Settings';
$string['gold_recorder'] = 'Single Button';
$string['handle'] = 'Handle {$a}';
$string['have_recent_event'] = 'Found a recently fired move-completed event for: {$a}';
$string['have_task'] = 'Found a waiting move/convert task for: {$a}';
$string['highquality'] = 'high';
$string['html5ondsafari'] = 'Use on desktop Safari';
$string['html5ondsafaridetails'] = 'Desktop Safari may not select the correct audio device and there is no option to select a different one. In most cases its ok, but on Mac Mini it may not detect a working audio device at all.';
$string['html5recorder_skin_audio'] = 'HTML5 Recorder Skin(Audio)';
$string['html5recorder_skin_video'] = 'HTML5 Recorder Skin(Video)';
$string['insert'] = 'Insert';
$string['invalidresponse'] = 'Invalid response or connection failure';
$string['jumpcat_explanation'] = 'The full set of Poodll filter settings can be found <a href="{$a}">here</a>.';
$string['jumpcat_heading'] = 'Poodll filter settings';
$string['legacysettings'] = 'Legacy Settings';
$string['license_details'] = '<br> -------------- <br> License type: {$a->license_type} <br> Expires(JST): {$a->expire_date} <br> Registered URL: {$a->registered_url}';
$string['lowquality'] = 'low';
$string['maxmonth'] = 'Highest Month';
$string['mediumquality'] = 'medium';
$string['memberdashboard'] = 'Member Dashboard';
$string['memberdashboard_desc'] = '';
$string['miccanpause'] = 'Allow pause (MP3 recorder only)';
$string['micecho'] = 'Mic. Echo';
$string['micgain'] = 'Mic. Gain';
$string['micloopback'] = 'Mic. Loopback';
$string['micrate'] = 'Mic. Rate';
$string['micsilencelevel'] = 'Mic. Silence Level';
$string['mobile_audio_quality'] = 'Audio quality';
$string['mobile_os_version_warning'] = '<p>Your OS Version is too low</p>
		<p>Android requires version 4 or greater.</p>
		<p>iOS requires version 6 or greater.</p>';
$string['mobile_show'] = 'Show mobile';
$string['mobile_show_desc'] = 'When the user is on an iOS device, instead of a recorder they are shown an "upload/record" button and a "use Poodll app" button. Uncheck this to hide the Poodll app button.';
$string['mobile_video_quality'] = 'Video quality';
$string['mobileandwebkit'] = 'Mobile + Webkit browsers(Safari,Chrome etc)';
$string['mobileonly'] = 'Mobile devices only';
$string['mobilesettings'] = 'iOS App Settings';
$string['mp3_nocloud'] = 'No Cloud';
$string['mp3_nocloud_details'] = 'Do not submit Flash mp3 recordings to cloud for transcode and copyback.';
$string['mp3opts'] = 'FFMPEG MP3 Conversion options';
$string['mp3opts_details'] = 'Leave this empty if you wish to let FFMPEG make the decisions. Anything you put here will appear between [ffmpeg -i myfile.xx ] and [ myfile.mp3 ]';
$string['mp3skin'] = 'MP3 Skin';
$string['mp3skin_details'] = 'If you want to use a recorder skin, ala theme, enter its name here. Otherwise enter: none.';
$string['mp4opts'] = 'FFMPEG MP4 Conversion options';
$string['mp4opts_details'] = 'Leave this empty if you wish to let FFMPEG make the decisions. Anything you put here will appear between [ffmpeg -i myfile.xx ] and [ myfile.mp4 ]';
$string['neverhtml5'] = 'Never use HTML5';
$string['ninety_days'] = '90 Days';
$string['no_event_or_task'] = 'Found neither a waiting move task, nor move-completed event for: {$a}';
$string['no_subscriptions'] = 'No subscriptions.';
$string['noapisecret'] = 'No API secret entered.';
$string['noapiuser'] = 'No API username entered.';
$string['normal'] = 'Normal';
$string['nosubtitlesyet'] = 'Subtitles are not available (yet)';
$string['notokenincache'] = 'Refresh to see license information. Contact Poodll support if there is a problem.';
$string['novalidsubscription'] = 'No valid subscription.';
$string['once_recorder'] = 'Once';
$string['oneeighty_days'] = '180 Days';
$string['onetwothree_recorder'] = 'One Two Three';
$string['paused'] = 'paused';
$string['per_plugin'] = 'Per Plugin (Last Yr)';
$string['per_recording_type'] = 'Per recording type';
$string['picqual'] = 'Target webcam qual. 1 - 10';
$string['placeholder_heading'] = 'Custom Audio and Video Placeholder File Settings';
$string['placeholder_heading_desc'] = 'Audio and video placeholder files are used in Poodll while files are converted to MP3 or MP4. If the default ones don\'t appeal you can upload custom ones here. See <a href=\'https://support.poodll.com/support/solutions/articles/19000083252-custom-audio-and-video-placeholders\'>here</a> for more details on how to do this.';
$string['placeholderaudiofile'] = 'Audio placeholder file (.mp3)';
$string['placeholderaudiofile_desc'] = 'Upload an MP3 file here and Poodll will use it as a placeholder.';
$string['placeholderaudiosecs'] = 'Audio Duration(secs)';
$string['placeholderaudiosecs_details'] = 'Duration in seconds to at least one decimal place of placeholder audio';
$string['placeholdervideofile'] = 'Video placeholder file (.mp4)';
$string['placeholdervideofile_desc'] = 'Upload an MP4 file here and Poodll will use it as a placeholder.';
$string['placeholdervideosecs'] = 'Video Duration(secs)';
$string['placeholdervideosecs_details'] = 'Duration in seconds to at least one decimal place of placeholder video';
$string['plain_recorder'] = 'Plain';
$string['player'] = 'Player {$a}';
$string['playertype'] = 'player';
$string['playing'] = 'playing';
$string['pluginname'] = 'Poodll Filter';
$string['poodll:candownloadmedia'] = 'Can download media';
$string['poodll:comparetext'] = 'Allow text comparison via API.';
$string['poodll:use'] = 'Can use the Poodll filter';
$string['poodll_users'] = 'Poodll Users';
$string['poodllsupportinfo'] = 'Poodll Support Information';
$string['poodlltemplatesadmin'] = 'Poodll Filter Templates Admin';
$string['ppn_assignfeedback_onlinepoodll'] = 'Poodll Feedback';
$string['ppn_assignsubmission_onlinepoodll'] = 'Poodll Submission';
$string['ppn_atto_generico'] = 'Atto Generico';
$string['ppn_atto_poodll'] = 'Atto Poodll';
$string['ppn_atto_snippet'] = 'Atto Snippet';
$string['ppn_atto_subtitle'] = 'Atto Subtitle';
$string['ppn_data_field_poodll'] = 'Poodll DB Field';
$string['ppn_essentials_plus'] = 'Essentials (Plus)';
$string['ppn_filter_generico'] = 'Generico Filter';
$string['ppn_filter_poodll'] = 'Poodll Filter';
$string['ppn_filter_videoeasy'] = 'VideoEasy Filter';
$string['ppn_local_trigger'] = 'Trigger';
$string['ppn_mod_englishcentral'] = 'EnglishCentral';
$string['ppn_mod_pchat'] = 'PChat';
$string['ppn_mod_readaloud'] = 'ReadAloud';
$string['ppn_mod_voicestudio'] = 'Voice Studio';
$string['ppn_mod_wordcards'] = 'Wordcards';
$string['ppn_na'] = 'NA';
$string['ppn_p_chat_standard'] = 'P-Chat (standard)';
$string['ppn_portfolio_blogexport'] = 'BlogExport';
$string['ppn_qtype_poodllrecording'] = 'Poodll Question';
$string['ppn_repository_poodll'] = 'Poodll Repository';
$string['ppn_speak_auto_grade'] = 'Speak (auto-grade)';
$string['ppn_tinymce_poodll'] = 'TinyMCE Poodll';
$string['ppn_voice_studio'] = 'Voice Studio';
$string['ppn_word_cards_standard'] = 'Word Cards (Standard)';
$string['presets'] = 'Autofill template with a Preset';
$string['presets_desc'] = 'Poodll comes with some default presets you can use out of the box, or to help you get started with your own template. Choose one of those here, or just create your own template from scratch. You can export a template as a bundle by clicking on the green box above. You can import a bundle by dragging it onto the green box.';
$string['privacy:metadata'] = 'The Poodll filter plugin does not store any personal data.';
$string['readaloud_recorder'] = 'Read Aloud';
$string['ready'] = 'ready';
$string['recorderorder'] = 'Preferred Recorder Order';
$string['recorderorder_audio'] = 'Audio Recorder Order';
$string['recorderorder_audio_desc'] = '';
$string['recorderorder_desc'] = 'Poodll will choose the best recorder it can if the user browser and platform support it. You set the order here.';
$string['recorderorder_snapshot'] = 'Snapshot Recorder Order';
$string['recorderorder_snapshot_desc'] = '';
$string['recorderorder_video'] = 'Video Recorder Order';
$string['recorderorder_video_desc'] = '';
$string['recorderorder_whiteboard'] = 'Whiteboard Recorder Order';
$string['recorderorder_whiteboard_desc'] = '(This setting is currently not used and may be removed from Poodll soon)';
$string['recording_min'] = 'Recording minutes';
$string['recordings'] = 'Recordings';
$string['recui_audiodevice'] = 'Audio Device';
$string['recui_audiogain'] = 'Audio Gain';
$string['recui_audiorate'] = 'Audio Rate';
$string['recui_awaitingconfirmation'] = 'Awaiting confirmation';
$string['recui_awaitingconversion'] = 'Awaiting conversion';
$string['recui_btnupload'] = 'Record or Choose a File';
$string['recui_cancelsnapshot'] = 'Cancel';
$string['recui_choosefile'] = 'Choose File';
$string['recui_clicktofinish'] = 'Click to Stop';
$string['recui_close'] = 'Close';
$string['recui_continue'] = 'Continue';
$string['recui_converting'] = 'converting';
$string['recui_downloadfile'] = 'Download Recording';
$string['recui_echo'] = 'Echo Suppression';
$string['recui_finished'] = 'Finished';
$string['recui_inaudibleerror'] = 'We can not hear you. Please check flash and browser permissions.';
$string['recui_loopback'] = 'Loopback';
$string['recui_mediaaborterror'] = 'Something strange happened which prevented the webcam/microphone from being used';
$string['recui_medianotallowederror'] = 'The user must allow the browser access to the webcam/microphone';
$string['recui_medianotfounderror'] = 'There is no recording device connected or enabled';
$string['recui_medianotreadableerror'] = 'Something is preventing the browser from accessing the webcam/microphone';
$string['recui_medianotsupportederror'] = 'Your browser type does not support recording over an HTTP connection.';
$string['recui_mediaoverconstrainederror'] = 'The current webcam/microphone can not produce a stream with the current requirements';
$string['recui_mediasecurityerror'] = 'Your browser type does not support recording over an HTTP connection.';
$string['recui_mediatypeerror'] = 'Failed to get stream because no media type was specified.';
$string['recui_nothingtosaveerror'] = 'Nothing was captured. Sorry .. nothing to upload.';
$string['recui_off'] = 'Off';
$string['recui_ok'] = 'OK';
$string['recui_on'] = 'On';
$string['recui_openrecorderapp'] = 'Poodll App';
$string['recui_pause'] = 'Pause';
$string['recui_play'] = 'Play';
$string['recui_playing'] = 'Playing:';
$string['recui_pushtospeak'] = 'Push to Speak';
$string['recui_ready'] = 'Ready';
$string['recui_readytorecord'] = 'Ready to record';
$string['recui_record'] = 'Record';
$string['recui_recordagain'] = 'Record again';
$string['recui_recording'] = 'Recording:';
$string['recui_recordorchoose'] = 'Record or Choose';
$string['recui_restart'] = 'Restart';
$string['recui_resume'] = 'Resume';
$string['recui_save'] = 'Upload';
$string['recui_settings'] = 'Settings';
$string['recui_silencelevel'] = 'Silence Level';
$string['recui_soundtest'] = 'Sound Test';
$string['recui_soundtesting'] = 'Sound Testing';
$string['recui_stop'] = 'Stop';
$string['recui_takesnapshot'] = 'Take Picture';
$string['recui_testmic'] = 'Ready to record';
$string['recui_time'] = 'Time:';
$string['recui_timeouterror'] = 'The request timed out. Sorry.';
$string['recui_unsupportedbrowser'] = 'This browser can not record here. Sorry.<br>Please try Google Chrome on a Desktop PC.';
$string['recui_upload'] = 'Upload';
$string['recui_uploadafile'] = 'Upload File';
$string['recui_uploaderror'] = 'An error occurred and your file has NOT been uploaded.';
$string['recui_uploading'] = 'uploading';
$string['recui_uploadsuccess'] = 'Uploaded successfully';
$string['recui_videodevice'] = 'Video Device';
$string['recui_waitwaitstilluploading'] = 'Your file is still uploading. Do you really want to leave this page?';
$string['refreshtoken'] = 'Refresh license information';
$string['registrationkey'] = 'Registration Key';
$string['registrationkey_explanation'] = 'Enter your Poodll registration key here only if you have not entered an API key and secret above. You can obtain a key from <a href=\'https://poodll.com/pricing\'>https://poodll.com/pricing</a>';
$string['remainingplays'] = 'Remaining plays';
$string['screen_recorder'] = 'Screen Recorder';
$string['select-text-and-click-me'] = 'Select Text and Click Me';
$string['serverhttpport'] = 'Poodll Red5 Server Port (HTTP)';
$string['serverid'] = 'Poodll Red5 Server Id';
$string['servername'] = 'Poodll Red5 Server Address';
$string['serverport'] = 'Poodll Red5 Server Port (RTMP)';
$string['settings'] = 'Poodll Filter Settings';
$string['shadow_recorder'] = 'Shadow';
$string['showdownloadicon'] = 'Show download button under players';
$string['showdownloadicon_desc'] = 'This is implemented in some players. native players, mediaelement players, audiojs_shim, flowplayer first frame and Video JS';
$string['sitedefault'] = 'Site Default';
$string['sitenotvalid'] = 'Site URL does not match the registered site URL for this API user.';
$string['size'] = 'Size';
$string['skinstyleaudio'] = 'Skin style(audio)';
$string['skinstyleaudio_details'] = 'A CSS class name that will be added to the audio recorder to assist in customizing recorder appearance.';
$string['skinstylevideo'] = 'Skin style(video)';
$string['skinstylevideo_details'] = 'A CSS class name that will be added to the video recorder to assist in customizing recorder appearance.';
$string['split_recorder'] = 'Split';
$string['start'] = 'Start';
$string['studentcam'] = 'Preferred device name for camera';
$string['studentmic'] = 'Preferred  device name for microphone';
$string['subscription'] = 'Subscription';
$string['supportinfo'] = 'Support Info';
$string['template'] = 'The body of template {$a}';
$string['template_desc'] = 'Put the template here, define variables by surrounding them with @@ marks at either e. eg @@variable@@';
$string['template_showatto'] = 'Show in Atto (template {$a})';
$string['template_showatto_desc'] = 'Display a button and form for this widget in the Poodll Widgets dialog for Atto.';
$string['template_showplayers'] = 'Show in players list (template {$a})';
$string['template_showplayers_desc'] = 'Display in the dropdown list of players available to be associated with a file extension.';
$string['templatealternate'] = 'Alternate content (template {$a})';
$string['templatealternate_desc'] = 'Content that can be used when the custom CSS and javascript content is not available. Currently this is used when the template is processed by a webservice, probably for content on the mobile app';
$string['templatealternate_end'] = 'Alternate content end (template {$a})';
$string['templatealternate_end_desc'] = 'Closing alternate content tags for templates that enclose user content with start and end Poodll tags';
$string['templatecount'] = 'Template Count';
$string['templatecount_desc'] = 'The number of templates you can have. Default is 20.';
$string['templatedefaults'] = 'variable defaults (template {$a})';
$string['templatedefaults_desc'] = 'Define the defaults in comma delimited sets of name=value pairs. eg width=800,height=900,feeling=joy';
$string['templateend'] = 'End tags(template {$a})';
$string['templateend_desc'] = 'If your template encloses user content, eg an info box, put the closing tags here. The user will enter something like {POODLL:mytag_end} to close out the filter.';
$string['templateheading'] = 'Settings for Poodll Template {$a}';
$string['templateheadingcss'] = 'CSS/Style Settings.';
$string['templateheadingjs'] = 'Javascript Settings.';
$string['templateinstructions'] = 'Instructions (template {$a})';
$string['templateinstructions_desc'] = 'Any instructions entered here will be displayed on the Poodll atto form if this template is available to be shown there. Keep them short or it will look bad.';
$string['templatekey'] = 'The key that identifies template {$a}';
$string['templatekey_desc'] = 'The key should be one word and only contain numbers and letters, underscores, hyphens and dots .';
$string['templatename'] = 'The display name for the template {$a}';
$string['templatename_desc'] = 'The name can contain numbers and letters, underscores, hyphens and dots .';
$string['templatepageheading'] = '(T): {$a}';
$string['templatepageplayerheading'] = '(P): {$a}';
$string['templatepagewidgetheading'] = '(W): {$a}';
$string['templaterequire_amd'] = 'Load via AMD';
$string['templaterequire_amd_desc'] = 'AMD is a javascript loading mechanism. If you upload or link to javascript libraries in your template, you might have to uncheck this. It only applies if on Moodle 2.9 or greater';
$string['templaterequire_css'] = 'Requires CSS (template {$a})';
$string['templaterequire_css_desc'] = 'A link(1 only) to an external CSS file that this template requires. optional.';
$string['templaterequire_jquery'] = 'Requires JQuery (template {$a})';
$string['templaterequire_jquery_desc'] = 'Its best NOT to check this. Many non AMD templates require JQuery. Checking here will load JQuery, but not very well. Your theme may already load JQuery anyway. If not, add this string to Site Administration -> Appearance -> Additional HTML (within HEAD):<br/> &lt;script src="https://code.jquery.com/jquery-1.11.2.min.js"&gt;&lt;/script&gt;';
$string['templaterequire_js'] = 'Requires JS (template {$a})';
$string['templaterequire_js_desc'] = 'A link(1 only) to an external JS file that this template requires. optional.';
$string['templaterequire_js_shim'] = 'Shim Export(template {$a})';
$string['templaterequire_js_shim_desc'] = 'Enter the shim exports value if and ONLY if you need to shim.';
$string['templates'] = 'Templates';
$string['templatescript'] = 'Custom JS (template {$a})';
$string['templatescript_desc'] = 'If your template needs to run custom javascript, enter that here. It will be run once all the elements have loaded on the page.';
$string['templatestyle'] = 'Custom CSS (template {$a})';
$string['templatestyle_desc'] = 'Enter any custom CSS that your template uses here. Template variables will not work here. Just plain old css.';
$string['templateupdated'] = '{$a} Poodll Templates Updated.';
$string['templateversion'] = 'The version of this template {$a}';
$string['templateversion_desc'] = 'Use semantic versioning e.g 1.0.0. Poodll will show an update button when the preset version is greater than the template version.';
$string['thetokenisold'] = 'The authentication token is old. Please refresh. If refreshing fails, you have a connection problem. Contact Poodll Support.';
$string['thirty_days'] = '30 Days';
$string['threehundredsixtyfive_days'] = '365 Days';
$string['tiny'] = 'Tiny';
$string['tokenfetchfailed'] = 'Failed to refresh token. Are your API user and secret correct?';
$string['tokenfetchfailedwitherror'] = 'Failed to refresh token: {$a}';
$string['transcode_heading'] = 'Audio/Video File Conversion Settings (FFMPEG)';
$string['transcode_heading_desc'] = 'The settings in this section are for FFMPEG and Red5, and do not apply when using remote conversions';
$string['type'] = 'Type';
$string['unregistered'] = 'Poodll not displayed because it has not been registered. Ask your teacher/administrator to register Poodll at Poodll.com.';
$string['updateall'] = 'Update all.';
$string['updatetoversion'] = 'Update to {$a}';
$string['upload_recorder'] = 'Upload';
$string['usecloudnotifications'] = 'Remote conversion notification';
$string['usecloudnotifications_desc'] = 'If true, Poodll will send a message to your server that remote file conversion is complete so it can retrieve it as soon as possible.';
$string['usecloudrecording'] = 'Remote conversion';
$string['usecloudrecording_desc'] = 'Remote conversion. This enables transcoding and other services in the cloud. Submitted files are returned to Moodle and not hosted in the cloud.';
$string['useplayer'] = '{$a} Player';
$string['useplayerdesc'] = 'The player selected will use the information from the appropriate template.';
$string['usingoldtoken'] = '. Recycling old authentication token.';
$string['value'] = 'value';
$string['video'] = 'Video';
$string['videotranscode'] = 'Auto Conv. to MP4';
$string['videotranscodedetails'] = 'Convert recorded/uploaded video files to MP4 format before storing in Moodle. This works for recordings made on tokyo.poodll.com, or uploaded recordings if using FFMPEG';
$string['wboardautosave'] = 'Autosave(milliseconds)';
$string['wboardautosave_details'] = 'Saves the drawing when the user has paused drawing after X milliseconds. 0 = no autosave';
$string['wboardheight'] = 'Whiteboard Default Height';
$string['wboardnozoom'] = 'Disable Zoom';
$string['wboardnozoom_details'] = 'Only applies to LiterallyCanvas. If checked sets the max and min zoom to 1.0, effectively disabling the zoom feature.';
$string['wboardwidth'] = 'Whiteboard Default Width';
$string['whiteboardsave'] = 'Save Picture';
$string['widgetsettings'] = 'Widget Settings';
$string['widgettype'] = 'widget';
