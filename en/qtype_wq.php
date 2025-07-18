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
 * Strings for component 'qtype_wq', language 'en', version '4.4'.
 *
 * @package     qtype_wq
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_provider_enabled'] = 'Access control';
$string['access_provider_enabled_help'] = 'If enabled, only authenticated users can access Wiris services.';
$string['addingwq'] = 'Adding a generic Wiris Quizzes question';
$string['auxiliar_text'] = 'Write an optional reasoning for your answer:';
$string['cachedef_images'] = 'Wiris Quizzes images.';
$string['cachedir'] = 'CACHE_DIR:';
$string['compatibility_settings'] = 'Compatibility settings';
$string['compatibility_settings_text'] = '';
$string['connectionsettings'] = 'Connection settings';
$string['connectionsettings_text'] = '';
$string['corruptquestion_attempt'] = 'The question {$a->questionname} was corrupted and could not be loaded. Please contact with your teacher so they can fix it.';
$string['corruptquestion_edit'] = 'WARNING: This question was corrupted and its mathematical data was lost from the database. We have tried to restore everything we could, but you need to rebuild the CalcMe algorithm if your question had one, and any custom input options and validation options. Contact with your administrator for further information.';
$string['debug_mode_enabled'] = 'Debug mode';
$string['debug_mode_enabled_help'] = 'Enables debug mode, which prints additional information that may help the WIRIS team resolve issues. Do not enable it unless requested by the WIRIS team.';
$string['editingwq'] = 'Editing a generic Wiris Quizzes question';
$string['error'] = 'ERROR';
$string['failedtoloadwirisquizzesfromxml'] = 'Failed to load Wiris Quizzes XML definition for question id';
$string['filtercodes_compatibility_enabled'] = 'FilterCodes compatibility';
$string['filtercodes_compatibility_enabled_help'] = 'The Filter Codes filter is not compatible with certain WirisQuizzes features if the option "Escape tags" is selected. Enabling this option solves the compatibility problem. Do not enable it in any other situation.';
$string['info_disabled'] = 'DISABLED';
$string['info_enabled'] = 'ENABLED';
$string['info_information'] = 'For more information or if you have any doubt contact Wiris Support:';
$string['info_maintitle'] = 'Wiris Quizzes test page';
$string['info_tableheader_report'] = 'Report';
$string['info_tableheader_status'] = 'Status';
$string['info_tableheader_test'] = 'Test';
$string['info_test10_name'] = 'Checking Wiris Quizzes functionality (variable)';
$string['info_test11_name'] = 'Checking Wiris Quizzes functionality (plot)';
$string['info_test12_name'] = 'Max server connections';
$string['info_test12_rt1'] = 'There are currently %s active concurrent connections out of a maximum of %s. Greatest number of concurrent connections is %s.';
$string['info_test12_rt2'] = 'Error with the maximum connections security system. See details: <br/><pre>%s<br/>%s</pre>';
$string['info_test1_name'] = 'Wiris Quizzes version';
$string['info_test1_rt1'] = 'Wiris Quizzes version is';
$string['info_test1_rt2'] = 'Impossible to find Wiris Quizzes version.';
$string['info_test2_info'] = 'Check MathType filter';
$string['info_test2_infopage'] = 'info page';
$string['info_test2_name'] = 'MathType filter version';
$string['info_test2_rt1'] = 'MathType filter is properly installed.';
$string['info_test2_rt2'] = 'Wiris Quizzes requires MathType filter 3.17.20 or greater. Your version is';
$string['info_test2_rt3'] = 'Impossible to find MathType filter version file.';
$string['info_test3_name'] = 'Moodle version';
$string['info_test3_rt1'] = 'Your Moodle version is sufficiently new.';
$string['info_test3_rt2'] = 'Your Moodle version is %s. Wiris Quizzes could not work correctly with Moodle version prior to 2011060313';
$string['info_test3_rt3'] = 'Impossible to find Moodle version file.';
$string['info_test4_name'] = 'Plugins';
$string['info_test4_pluginname1'] = 'True/False question type';
$string['info_test4_pluginname2'] = 'Short-Answer question type';
$string['info_test4_pluginname3'] = 'Embedded answer (Cloze) question type';
$string['info_test4_pluginname4'] = 'Multi Choice question type';
$string['info_test4_pluginname5'] = 'Matching question type';
$string['info_test4_pluginname6'] = 'Essay question type';
$string['info_test4_pluginname7'] = 'Commons question type';
$string['info_test4_rt1'] = 'The following Wiris Quizzes question types are installed:';
$string['info_test4_rt2'] = 'The following Wiris Quizzes question types are missing:';
$string['info_test4_rt3'] = 'Install';
$string['info_test5_name'] = 'Database';
$string['info_test5_rt1'] = 'All tables are present.';
$string['info_test5_rt2'] = 'One or more of tables are missing.';
$string['info_test6_name'] = 'Wiris Quizzes';
$string['info_test7_name'] = 'Checking configuration';
$string['info_test8_name'] = 'Checking if server is reachable';
$string['info_test8_rt1'] = 'Connecting to %s at port %s';
$string['info_test9_name'] = 'Wiris Quizzes service';
$string['log_server_errors'] = 'Log server errors';
$string['log_server_errors_help'] = 'Extensively log errors coming from the WirisQuizzes service and other errors occurred when processing WirisQuizzes questions to your server logs. This might cause an increase in the size of your log files but might help the Wiris team troubleshoot issues.';
$string['mathjax_compatibity'] = 'MathJax compatibility';
$string['mathjax_compatibity_help'] = '(Experimental) Enables compatibility with MathJax. This option is only needed if you want to use MathJax instead of MathType to render LaTeX formulas in WirisQuizzes questions. Formulas created with MathType or WirisQuizzes will still be rendered by MathType. For the best performance, we recommend using MathType to render all formulas.';
$string['maxconnections_disabled'] = 'Disable max connections protection';
$string['maxconnections_disabled_help'] = 'Disables the protection mechanism that limits the number of concurrent connections to the WirisQuizzes server. Only enable this setting if your usage of WirisQuizzes reaches the concurrency limit and be mindful that your infrastructure will need to handle the increased number of concurrent connections to our server.';
$string['ok'] = 'OK';
$string['pluginname'] = 'Wiris Quizzes';
$string['pluginnamesummary'] = '';
$string['privacy:metadata:qtype_wq'] = 'Information about user\'s correct answer for a given WirisQuizzes question type';
$string['privacy:metadata:qtype_wq:question'] = 'Wiris Quizzes question type id';
$string['privacy:metadata:qtype_wq:xml'] = 'Wiris Quizzes Question XML';
$string['proxyurl'] = 'PROXY_URL:';
$string['quizzescalcurl'] = 'CalcMe URL';
$string['quizzescalcurl_help'] = 'URL where to load the CalcMe web app.';
$string['quizzeseditorurl'] = 'MathType service URL';
$string['quizzeseditorurl_help'] = 'URL where to load MathType.';
$string['quizzesgraphurl'] = 'Graph tool URL';
$string['quizzesgraphurl_help'] = 'URL where to load the tool used for graph rendering and graphical answer questions.';
$string['quizzeshandurl'] = 'MathType Hand service URL';
$string['quizzeshandurl_help'] = 'URL where to load the Wiris HAND.';
$string['quizzesserviceurl'] = 'Wiris Quizzes service URL';
$string['quizzesserviceurl_help'] = 'URL to connect to Wiris Quizzes service.';
$string['quizzeswirislauncherurl'] = 'Wiris CAS JNLP URL';
$string['quizzeswirislauncherurl_help'] = 'URL where to get the JNLP file for Wiris CAS app.';
$string['quizzeswirisurl'] = 'Wiris CAS applet service URL';
$string['quizzeswirisurl_help'] = 'URL where to load the Wiris CAS applet.';
$string['serviceurl'] = 'SERVICE_URL:';
$string['troubleshooting_settings'] = 'Troubleshooting';
$string['troubleshooting_settings_text'] = '';
$string['wirisquestionincorrect'] = 'Sorry! The system can not generate one of the questions of the quiz. Maybe there is a temporary connection problem right now, or there is a problem with how the question is set up. You can retry the quiz, without penalty, just clicking Continue. If this error persists, you can tell your teachers that there is an issue with the question {$a->questionname}.';
$string['wirisquizzeserror'] = 'Sorry! There was an error in Wiris Quizzes.';
$string['wq'] = 'Wiris Quizzes';
$string['wq_help'] = 'Generic Wiris Quizzes Help';
$string['wqsummary'] = 'This adds a generic Wiris Quizzes question. Only for test purpose. It will be hide from here.';
