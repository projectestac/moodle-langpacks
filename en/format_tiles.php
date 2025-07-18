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
 * Strings for component 'format_tiles', language 'en', version '4.4'.
 *
 * @package     format_tiles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsections'] = 'Add tile';
$string['admintools'] = 'Administrator tools';
$string['all'] = 'All';
$string['allcomplete'] = 'All complete';
$string['allcoursescomplypalette'] = 'All courses already have permitted tile colours. Nothing to reset. Make sure you save any changes to permitted colours before pressing reset.';
$string['allowphototiles'] = 'Allow photo tiles';
$string['allowphototiles_desc'] = 'If selected, teachers will be able to upload a photo to serve as a tile background.  They will still be able to use standard tile icons as well, in the same course. (If not selected, only tile icons will be allowed and other photo tile settings below will be ignored.)';
$string['allowsubtilesview'] = 'Allow sub tiles view';
$string['allowsubtilesview_desc'] = 'Allow use of a course setting which, if selected, within a tile shows activities (except labels) as sub tiles, instead of standard list';
$string['alternativelink'] = 'alternative link';
$string['areyousure'] = 'Are you sure?';
$string['asfraction'] = 'Show as fraction';
$string['aspectratiotootallorwide'] = 'The uploaded image has been saved, but please check, as it may be <strong>{$a->tallorwide}</strong>. If it doesn\'t look right, please crop it to standard landscape dimensions and upload again.  E.g. 300 wide x 200 high would fit.';
$string['aspercentagedial'] = 'Show as %';
$string['assumedatastoreconsent'] = 'Assume consent to browser local storage';
$string['assumedatastoreconsent_desc'] = 'If selected, user will <b>not</b> be shown a dialogue asking for consent to store data in browser local storage';
$string['backupfailed'] = 'Backup failed';
$string['basecolour'] = 'Colour for tiles';
$string['basecolour_help'] = 'Colour set here will be applied to all tiles in the course.  (The available colours are determined by your site administrator through the Tiles plugin settings page).';
$string['brandcolour'] = 'Brand colour';
$string['cachedef_modalcmids'] = 'Course module IDs (by course) that need to be launched with a modal';
$string['cachedef_videocmids'] = 'Course module IDs (by course) that are videos (URL activities pointing to YouTube or Vimeo)';
$string['canceltask'] = 'Cancel task';
$string['changedcolour'] = 'Tile colour reset to default for course {$a}';
$string['checkforproblemcourses'] = 'Check for and fix problem courses';
$string['clearphoto'] = 'Reset this tile';
$string['clickiffailstoload'] = 'Click if page fails to load';
$string['close'] = 'Close';
$string['closetopsection'] = 'Close top section';
$string['collapse'] = 'Collapse section';
$string['collapsesections'] = 'Collapse all';
$string['colourblue'] = 'Blue';
$string['colourdarkgreen'] = 'Dark Green';
$string['colourgreen'] = 'Green';
$string['colourlightblue'] = 'Light Blue';
$string['colourname_descr'] = 'Display name for the colour (name is not usually seen by users- they see a coloured swatch instead)';
$string['colournamegeneral'] = 'Display name for colour above';
$string['colourpurple'] = 'Purple';
$string['colourred'] = 'Red';
$string['colours'] = 'Colours';
$string['complete'] = 'Complete';
$string['complete-n-auto'] = 'Item not complete.  It will be marked as complete when you meet all of the completion criteria. You cannot change this manually.';
$string['complete-y-auto'] = 'Item complete.  It was marked as complete when you met the completion criteria. You cannot change this manually.';
$string['completion_help'] = 'A tick to the right of an activity may be used to indicate when the activity is complete (an empty circle will be shown if not).<br><br>
Depending on the setting, a tick may appear automatically when you have completed the activity according to conditions set by the teacher.<br><br>
In other cases, you can click the empty circle when you think you have completed the activity and it will turn into a solid green tick. (Clicking it again removes the tick if you change your mind.)';
$string['completionswitchhelp'] = '<p>You have selected to show completion tracking on each tile.  We have therefore set "Completion Tracking > Enable" further down this page to "Yes".</p>
<p>In addition, you need to switch on completion tracking for <b>each item</b> that you are tracking.  e.g. for a PDF, click "Edit settings", look under Activity Completion, and pick the setting you need.</p>
<p>You can also do this in <b>bulk</b> as explained in the <a href="https://docs.moodle.org/35/en/Activity_completion_settings" target="_blank">detailed explanation of completion tracking on moodle.org</a></p>';
$string['completionwarning'] = 'You have completion tracking switched on at the course level, but at the individual activity level, no items have tracking enabled, so there is nothing to track.';
$string['completionwarning_changeinbulk'] = 'Change in bulk';
$string['completionwarning_help'] = 'You need to make individual items trackable by editing them (under Activity Completion > Completion tracking) or you can do this in bulk under Course Administration > Course Completion > Bulk edit activity completion';
$string['contact'] = 'Get in touch';
$string['contactdeveloper'] = 'Contact developer';
$string['contents'] = 'Contents';
$string['controls'] = 'Controls';
$string['coursephotomigrationincomplete'] = 'Tile icons and photos have not yet been migrated following a system upgrade.  Missing items should appear within a few hours of the upgrade.';
$string['courseshowtileprogress'] = 'Progress on each tile';
$string['courseshowtileprogress_error'] = 'You have \'Completion tracking > Enable completion tracking\' set to \'No\' (see further down this page) which conflicts with this setting.  If you wish to display progress on the tiles, please set \'Completion tracking > Enable completion tracking\' to \'Yes\'.  Otherwise, please set this setting to \'No\'.';
$string['courseshowtileprogress_help'] = '<p>When selected, the user\'s progress with activities will be shown in each tile, either as a <em>fraction</em> (e.g. \'Progress 2/10\' meaning 2 out of 10 activities complete), or as a <em>percentage</em> in a circle.</p><p>This can only be used if \'Completion > Enable completion tracking\' has been switched on.</p><p>If there are no trackable activities within a given tile, indicator will not be shown for that tile.</p>';
$string['courseshowtileprogress_link'] = 'Activity_completion_settings#Activity_settings';
$string['coursetoomanysections'] = 'Warning for editors: this course has more tiles than the maximum allowed.  A maximum of {$a->max} will be shown to students (down to "{$a->tilename}") (editors can see more).';
$string['courseusebarforheadings'] = 'Emphasise headings with coloured tab';
$string['courseusebarforheadings_help'] = 'Display a coloured tab to the left of the heading in the course whenever a heading style is selected in the text editor';
$string['courseusesubtiles'] = 'Use sub tiles for activities';
$string['courseusesubtiles_help'] = 'Within each tile, show every activity as a sub tile, instead of as a list of activities down the page.  This does not apply to labels which will not be shown as sub tiles so can be used as headings between tiles.';
$string['currentsection'] = 'This tile';
$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Custom CSS to apply to course content section while course format is used. This will not be validated, so take care to enter valid code. For example: <p>.section { color: red; }</p><p>li.activity.subtile.resource.pdf { background-color: orange !important; }</p>';
$string['datapref'] = 'Data preference';
$string['datapreferror'] = 'The data preference feature is ony available if you have JavaScript available in your browser. Otherwise, data storage cannot be enabled.';
$string['dataprefquestion'] = '<p>To make this site easier to use, we store functional information in your browser such as the id number of the last tile you opened.  This remains on your machine for a short while in case you visit that page again.  We do not use it for tracking.  Is that okay?</p><p>We will remember your choice until you clear your browsing history.  To opt out click "Cancel".</p>';
$string['defaultthiscourse'] = 'Default for this course';
$string['defaulttilecolour'] = 'Default tile colour';
$string['defaulttileicon'] = 'Tile icon';
$string['defaulttileicon_help'] = 'The icon selected here will appear on <em>all</em> tiles in this course by default.  Individual tiles can have a different icon selected, or a background photograph, using the different setting at the tile level.';
$string['deleteemptytiles'] = 'Delete empty tiles';
$string['deleteimage'] = 'Delete image';
$string['deletesection'] = 'Delete tile';
$string['deletetile'] = 'Delete tile';
$string['developedby'] = '"Tiles" developed by {$a}';
$string['developer'] = 'Developer';
$string['disabledbyadmin'] = 'Disabled by Site Administrator';
$string['displayfilterbar'] = 'Filter bar';
$string['displayfilterbar_error'] = 'Unless you have set up outcomes for this course, you can only display a filter bar based on tile numbers, and not based on outcomes.  Create some outcomes first then come back here. See';
$string['displayfilterbar_help'] = '<p>When selected, will automatically display an array of buttons before the tile screen in a course, which users can click to filter down tiles to certain ranges</p><p>When \'based on tile numbers\' is selected, a series of buttons will be displayed e.g. a button for tiles  1-4, a button for tiles 5-8 etc.</p><p>When \'based on course outcomes\' is selected, there will be one button per course outcome.  Each each tile can be assigned to a given outcome (and therefore to a given button) from that tile\'s settings page.</p>';
$string['displayfilterbar_link'] = 'Outcomes';
$string['displaytitle_mod_doc'] = 'Word document';
$string['displaytitle_mod_html'] = 'Web page';
$string['displaytitle_mod_jpeg'] = 'Image';
$string['displaytitle_mod_mp3'] = 'Audio';
$string['displaytitle_mod_mp4'] = 'Video';
$string['displaytitle_mod_pdf'] = 'PDF';
$string['displaytitle_mod_ppt'] = 'Powerpoint presentation';
$string['displaytitle_mod_txt'] = 'Text';
$string['displaytitle_mod_xls'] = 'Spreadsheet';
$string['displaytitle_mod_zip'] = 'Zip';
$string['documentation'] = 'Documentation';
$string['documentationurl'] = 'Documentation URL';
$string['documentationurl_descr'] = 'URL where Tiles documentation can be found.';
$string['download'] = 'Download';
$string['editoradvicesubtiles'] = 'In this version of the Tiles plugin, activities will only appear as sub-tiles if editing mode is switched off';
$string['editsection'] = 'Edit section';
$string['editsectionname'] = 'Edit section name';
$string['embeddedurlerror'] = 'If the external website refuses to connect in the window above, use this:';
$string['enablelinebreakfilter'] = 'Enable line break filter';
$string['enablelinebreakfilter_desc'] = 'Filter tile titles for the invisible word joiner character {$a} and, if present and the title title is long, replace it with "- " to allow line to break.  Otherwise replace it with nothing (i.e. no line break).';
$string['entersection'] = 'Enter section';
$string['existingimage'] = 'Existing image for this tile';
$string['expand'] = 'Expand';
$string['expandall'] = 'Expand all';
$string['expandsections'] = 'Reveal all activities (all sections)';
$string['expandtopsection'] = 'Expand top section';
$string['experimental'] = 'experimental';
$string['experimentalfeatures'] = 'Experimental features';
$string['fileaddedtobottom'] = 'File added to bottom of section';
$string['filterboth'] = 'Show buttons based on tile numbers and course outcomes';
$string['filternumbers'] = 'Show buttons based on tile numbers';
$string['filteroutcomes'] = 'Show buttons based on course outcomes';
$string['filteroutcomesrestore'] = 'The original course used outcomes in the filter bar, which are not yet supported during the restore process.  The filter bar setting has therefore been changed in the restored course.  If you wish to use outcomes to filter tiles in the restored course, please set up the outcomes again.  The original course has not been changed.';
$string['filters'] = 'Filters';
$string['fittilestowidth'] = 'Fit tiles to screen width';
$string['fittilestowidth_desc'] = 'If checked, when a user accesses a course on a non-mobile device, tiles will delay loading for half a second while a calculation is made as to the best layout.  E.g. avoid one tile per row, centre tiles on screen.  This will only happen the first time they enter the course in a given session and will then be remembered for the session or until the user adjusts their screen size.';
$string['fixproblems'] = 'Fix problems';
$string['folderdisplayerror'] = 'Folders set to display content inline are not compatible with sub-tiles format.  For example the folder "{$a}" should be changed to display contents on a separate page';
$string['followthemecolour'] = 'Force follow theme colour';
$string['followthemecolour_desc'] = 'If set to yes, teachers will not be given a choice by this plugin and all tile colours below will be ignored.  Instead an attempt will be made to get the theme\'s main brand colour and use that instead';
$string['guidance'] = 'Guidance';
$string['height'] = 'height';
$string['hidden'] = 'Hidden';
$string['hide'] = 'Hide';
$string['hidefromothers'] = 'Hide section';
$string['highcontrastmode'] = 'High contrast mode';
$string['highcontrastmodeallow'] = 'Allow high contrast mode';
$string['highcontrastmodeallow_desc'] = 'Allow users to set a user preference to show tiles courses with high contrast (teacher selected tile colours will be overridden with a dark colour)';
$string['highestsectionnum'] = 'Highest section number found';
$string['home'] = 'Course home';
$string['icontitle-address-book-o'] = 'Address book';
$string['icontitle-assessment_graded'] = 'Assessment A+';
$string['icontitle-assessment_timer'] = 'Assessment timer';
$string['icontitle-asterisk'] = 'Asterisk';
$string['icontitle-award-solid'] = 'Award rosette';
$string['icontitle-balance-scale'] = 'Balance scales';
$string['icontitle-bar-chart'] = 'Bar Chart';
$string['icontitle-bell-o'] = 'Bell';
$string['icontitle-binoculars'] = 'Binoculars';
$string['icontitle-bitcoin'] = 'Bitcoin';
$string['icontitle-book'] = 'Book';
$string['icontitle-bookmark-o'] = 'Bookmark';
$string['icontitle-briefcase'] = 'Briefcase';
$string['icontitle-building'] = 'Building';
$string['icontitle-bullhorn'] = 'Bullhorn';
$string['icontitle-bullseye'] = 'Bullseye';
$string['icontitle-calculator'] = 'Calculator';
$string['icontitle-calendar'] = 'Calendar';
$string['icontitle-calendar-check-o'] = 'Calendar with check mark';
$string['icontitle-check'] = 'Check';
$string['icontitle-child'] = 'Child';
$string['icontitle-clock-o'] = 'Clock';
$string['icontitle-clone'] = 'Clone';
$string['icontitle-cloud-download'] = 'Cloud (download)';
$string['icontitle-cloud-upload'] = 'Cloud (upload)';
$string['icontitle-comment-o'] = 'Comment';
$string['icontitle-comments-o'] = 'Comments';
$string['icontitle-compass'] = 'Compass';
$string['icontitle-diamond'] = 'Diamond';
$string['icontitle-dollar'] = 'Dollar';
$string['icontitle-euro'] = 'Euro';
$string['icontitle-exclamation-triangle'] = 'Exclamation in triangle';
$string['icontitle-feed'] = 'Feed';
$string['icontitle-file-text-o'] = 'Text file';
$string['icontitle-film'] = 'Film';
$string['icontitle-flag-checkered'] = 'Flag (checkered)';
$string['icontitle-flag-o'] = 'Flag';
$string['icontitle-flash'] = 'Flash';
$string['icontitle-flask'] = 'Flask';
$string['icontitle-flipchart'] = 'Flip chart';
$string['icontitle-frown-o'] = 'Frown';
$string['icontitle-gavel'] = 'Gavel';
$string['icontitle-gbp'] = 'British pound';
$string['icontitle-globe'] = 'Globe';
$string['icontitle-handshake-o'] = 'Handshake';
$string['icontitle-headphones'] = 'Headphones';
$string['icontitle-heartbeat'] = 'Heartbeat';
$string['icontitle-history'] = 'History clock';
$string['icontitle-home'] = 'Home';
$string['icontitle-id-card-o'] = 'ID card';
$string['icontitle-info'] = 'Info';
$string['icontitle-jigsaw'] = 'Jigsaw';
$string['icontitle-key'] = 'Key';
$string['icontitle-laptop'] = 'Laptop';
$string['icontitle-life-buoy'] = 'Life belt / life buoy';
$string['icontitle-lightbulb-o'] = 'Light bulb';
$string['icontitle-line-chart'] = 'Line chart';
$string['icontitle-list'] = 'List (bullet points)';
$string['icontitle-list-ol'] = 'List (numbered)';
$string['icontitle-location-arrow'] = 'Location arrow';
$string['icontitle-map-marker'] = 'Map marker';
$string['icontitle-map-o'] = 'Map';
$string['icontitle-map-signs'] = 'Map signs';
$string['icontitle-microphone'] = 'Microphone';
$string['icontitle-mobile-phone'] = 'Mobile phone';
$string['icontitle-mortar-board'] = 'Mortar board';
$string['icontitle-music'] = 'Music';
$string['icontitle-newspaper-o'] = 'Newspaper';
$string['icontitle-number'] = 'Number {$a}';
$string['icontitle-pencil-square-o'] = 'Pencil in square';
$string['icontitle-person'] = 'Person';
$string['icontitle-pie-chart'] = 'Pie chart';
$string['icontitle-podcast'] = 'Podcast';
$string['icontitle-puzzle-piece'] = 'Puzzle piece';
$string['icontitle-question-circle'] = 'Question mark in circle';
$string['icontitle-random'] = 'Random';
$string['icontitle-refresh'] = 'Refresh';
$string['icontitle-road'] = 'Road';
$string['icontitle-search'] = 'Magnifying glass';
$string['icontitle-sliders'] = 'Sliders';
$string['icontitle-smile-o'] = 'Smile';
$string['icontitle-star'] = 'Star (shaded)';
$string['icontitle-star-half-o'] = 'Star (half shaded)';
$string['icontitle-star-o'] = 'Star (unshaded)';
$string['icontitle-survey'] = 'Survey';
$string['icontitle-tags'] = 'Tags';
$string['icontitle-tasks'] = 'Tasks';
$string['icontitle-television'] = 'Television';
$string['icontitle-thinking-person'] = 'Person with light bulb';
$string['icontitle-thumbs-o-down'] = 'Thumbs down';
$string['icontitle-thumbs-o-up'] = 'Thumbs up';
$string['icontitle-trophy'] = 'Trophy';
$string['icontitle-umbrella'] = 'Umbrella';
$string['icontitle-university'] = 'University';
$string['icontitle-user-o'] = 'Person (unshaded)';
$string['icontitle-users'] = 'People';
$string['icontitle-volume-up'] = 'Speaker';
$string['icontitle-wrench'] = 'Wrench';
$string['imagecannotbeused'] = 'Image cannot be used';
$string['imagedeletedfrom'] = 'Image deleted from "{$a}"';
$string['imagesavedfor'] = 'Image saved for {$a}';
$string['imagesize'] = 'Image size';
$string['invalidsectionid'] = 'Invalid section ID "{$a}"';
$string['jsactivate'] = 'Animated navigation';
$string['jsdeactivated'] = 'You have deactivated animated navigation on your account';
$string['jsreactivated'] = 'You have activated animated navigation on your account.';
$string['legacytiledata'] = 'Legacy tile data count';
$string['links'] = 'Links';
$string['loading'] = 'Loading';
$string['maxcoursesectionsallowed'] = 'The maximum number of course sections allowed in this environment is {$a}.';
$string['migratecoursedata'] = 'Migrate course data';
$string['migratedcourseid'] = 'Migrated course ID {$a}';
$string['migratenow'] = 'Migrate now';
$string['modalmodules'] = 'Modal modules';
$string['modalmodules_desc'] = 'Launch these course modules in a modal window.  (Other modules may be added in a later release.)';
$string['modalresources'] = 'Modal resources';
$string['modalresources_desc'] = 'Launch these resources in modal window.  Note: if allowed here, URL activities will only open in a modal window if they are set to {$a->displayembed} at the activity level (e.g. YouTube or Vimeo videos).  Even then, they may be blocked by the website owner from showing embedded - see {$a->link}';
$string['modalwindows'] = 'Modal windows';
$string['newsectionname'] = 'New name for section {$a}';
$string['newtiledata'] = 'New tile data count';
$string['nexttopic'] = 'Next topic';
$string['noconnectionerror'] = 'Unable to load content.  Check your internet connection';
$string['nojswarning'] = 'Your browser does not seem to support JavaScript, or it is disabled.  An enhanced interface is available if you enable Javascript';
$string['none'] = 'None';
$string['noproblemsfound'] = 'No problems found';
$string['notcomplete'] = 'Not complete';
$string['notrecommended'] = 'Not recommended';
$string['notregistered'] = 'Your tiles plugin is not yet registered with the plugin developer.';
$string['novaliddefaultcolour'] = 'No valid colour set for the default tile colour below';
$string['numberofsections'] = 'Number of sections in course';
$string['numbers'] = 'Numbers';
$string['numbers_desc'] = 'Choose a number icon for this tile';
$string['off'] = 'Off';
$string['ok'] = 'OK';
$string['on'] = 'On';
$string['onlywhenediting'] = 'Only when editing';
$string['other'] = 'Other';
$string['outcomes'] = 'outcomes';
$string['outcomesunavailable'] = 'Outcomes unavailable';
$string['overall'] = 'Overall';
$string['overallprogress'] = 'Activity completion - progress overall';
$string['overallprogressshort'] = 'Overall progress';
$string['photoguidance_desc'] = '<p>Upload a photo in <strong>landscape</strong> format.  The width should be about 1.35 times the height.  E.g. 270 width x 200 height would fit well.  You need not be exact.</p>
<p>Photos in portrait format will not match the shape of the tile.  Large images or files will be scaled down and compressed if necessary, after upload.</p>';
$string['photolibrary'] = 'Photo library';
$string['photolibrary_desc'] = 'These are the photos you have uploaded or used recently. To use one as the background for this tile, click it.  To upload a new one, use the upload tab above.';
$string['phototilesaltstyle'] = 'Photo tiles alternative style';
$string['phototilesaltstyle_desc'] = 'If not selected (which is the default), photo tiles will show the title at the top of the tile.  The alternative style shows the title at the bottom';
$string['phototilesettings'] = 'Photo tiles';
$string['phototiletitletransarency'] = 'Photo tile title transparency';
$string['phototiletitletransarency_desc'] = 'The title overlay on a photo tile can have a slightly transparent background or a solid colour background (0%)';
$string['phototitletitlelineheight'] = 'Title line height';
$string['phototitletitlepadding'] = 'Title vertical line padding';
$string['picknewicon'] = 'Pick a new icon';
$string['picknewiconphoto'] = 'Pick a new icon or background photo';
$string['plugin_description'] = 'A visually rich format, where sections and activities are represented by tiles, with customisable photos, icons and colours.';
$string['pluginname'] = 'Tiles';
$string['previoustopic'] = 'Previous topic';
$string['privacy:metadata:preference:format_tiles_high_contrast_mode'] = 'Whether the user is using high contrast mode.';
$string['privacy:metadata:preference:format_tiles_stopjsnav'] = 'Whether the user has disabled animated JavaScript navigation.';
$string['privacypolicy'] = 'Privacy policy';
$string['problemcourses'] = 'Problem courses';
$string['problemcoursesintro'] = 'The following courses have section numbers higher than expected.  Please use the buttons below to resolve issues.';
$string['progress'] = 'Progress';
$string['progresstitle'] = '{$a->numComplete} / {$a->numOutOf} items complete ({$a->percent}%)';
$string['reactivate'] = 'Reactivate';
$string['reopenlastsection'] = 'Re-open last visited tile';
$string['reopenlastsection_desc'] = 'When checked, if a user revisits a course, the last section they had open will be re-opened on arrival';
$string['resetallcoursecolours'] = 'Reset all course colours';
$string['resetalltiles'] = 'Reset tile photos & icons';
$string['resetalltilessure'] = 'Are you sure you want to reset tiles for this course?  This will delete all tile photos, and reset all icons to default?  Content will not be deleted.  This is a destructive action and cannot be un-done.  Back up your course first if unsure.';
$string['resetcolours'] = 'Reset colours';
$string['resetcolours_desc'] = 'Press this button to reset the tile colour for all courses which do not have one of the colours below.  Courses will be changed to the default tile colour below.  You can use this after you have changed the colour palette below, but make sure you have <strong>saved any changes</strong> to colours below before pressing this button.  Be careful as this could change the colour of many courses!';
$string['resetincomplete'] = 'Reset incomplete';
$string['restorefailed'] = 'Restore failed';
$string['restoreincorrectsections'] = 'Error: Cannot complete as source course contains incorrectly numbered sections (e.g. section number ({$a->sectionnum}) is higher than the max allowed ({$a->maxallowed} as defined in admin setting \'moodlecourse | maxsections\').  Try excluding or deleting sections with high numbers.';
$string['restoretoomanysections'] = 'Error: Cannot backup or restore as too many course sections are included ({$a->numsections}) and this is more than permitted ({$a->maxallowed}).  Try excluding or deleting some sections.';
$string['revealcontents'] = 'Reveal tile contents';
$string['scheduleddeleteemptysections'] = 'Task to delete empty sections from course has been scheduled.  Please check back later.';
$string['section0name'] = 'General';
$string['sectionerrorstring'] = 'Your session may have expired.  Try refreshing this page.';
$string['sectionerrortitle'] = 'Error loading content';
$string['sectionname'] = 'Tile';
$string['sectionnumber'] = 'Section / tile number';
$string['seczerocollapsible'] = 'Section zero collapsible';
$string['seczerocollapsible_desc'] = 'Allow user to collapse section zero in course';
$string['selected'] = 'Selected';
$string['setavailabletilecolours'] = 'Permitted tile colours (site wide)';
$string['setbackgroundphoto'] = 'Set photo / icon';
$string['settings'] = 'Tiles format settings';
$string['show'] = 'Show';
$string['showalltiles'] = 'Show all tiles';
$string['showfromothers'] = 'Show section';
$string['showoverallprogress'] = 'Show overall progress indicator';
$string['showoverallprogress_desc'] = 'Show "Overall progress %" indicator at top right of course (value shown represents the aggregate of the % complete of each tile, based on activity completion not course completion';
$string['showprogresssphototiles_desc'] = 'If selected, student progress (e.g. Progress 2/5) will be shown on photo tiles';
$string['showseczerocoursewide'] = 'Show section zero at top of all sections';
$string['showseczerocoursewide_desc'] = 'If checked, section zero (the very top section) will be shown on the course landing page and at the top of <b>every course section page</b> (i.e. at the top of every tile\'s contents).  If unchecked (recommended), it will only be shown on the course landing page';
$string['showseparatewin'] = 'Show in separate window';
$string['sitename'] = 'Site name';
$string['snapwarning'] = 'It may be possible to edit your course in Tiles format using another theme, and then switch back to Snap theme once you have finished editing.';
$string['snapwarning_help'] = 'Theme_settings#Allow_user_themes';
$string['style'] = 'Style';
$string['subtileiconcolourbackground'] = 'Sub-tile icons - use solid colour background circle';
$string['subtileiconcolourbackground_desc'] = 'If checked, sub-tile icons are shown as white icons in a solid colour background circle. Otherwise, icons are (1) themselves coloured and (2) in a coloured, but not solid, circle';
$string['subtileszeczerotoggled'] = 'Top section toggled between list and sub tiles format';
$string['suremigratelegacyoptions'] = 'Are you sure you want to migrate {$a} tile photo or icon choices for this course?';
$string['sureresetcolours'] = 'Are you sure you wish to reset course tile colours to default?  This will affect {$a} courses';
$string['tilearialabel'] = '{$a}, opens detail in pop up, link';
$string['tilecolourgeneral'] = 'Colour palette - optional colour';
$string['tilecolourgeneral_descr'] = 'These settings allow the administrator to set which colours will be available for teachers to apply to courses.  Set the colour to black (#000) to disable that colour.  If you change the colours here, no changes will be made to existing courses, until the next time the teacher tries to change tile colour.  At that point, only the colours you have set here will be available to the teacher.';
$string['tilecolourschanged'] = 'Tiles colours have been reset.  All tiles now have colours conforming to the colours below.';
$string['tileicon'] = 'Icon / photo to display on this tile only';
$string['tileicon_help'] = 'Item selected here will override, for this tile only, whatever tile icon has been set at the course level.';
$string['tileicons'] = 'Tile icons';
$string['tileoutcome'] = 'Outcome for this tile';
$string['tileoutcome_help'] = 'If you select an outcome for this tile, you will then under course settings be able to display a set of <em>filter buttons</em>, one for each outcome,  which when pressed filter the displayed tiles according to which outcome they have been assigned';
$string['tileselecttip'] = 'In the course, with editing mode on, simply click the icon or photo you want to change.  The icon picker window will pop up.';
$string['tilesformatregistration'] = 'Tiles format registration';
$string['tilesreset'] = 'Tiles & icons have been reset for this course';
$string['tilestyle'] = 'Tile Style';
$string['tilestyle_desc'] = 'Style 1 = photo tiles will show the title at the top of the tile, style 2 = title at the bottom';
$string['togglecompletion'] = 'Click to toggle completion status';
$string['togglecompletioncomplete'] = 'Click to toggle completion status (complete)';
$string['togglecompletionincomplete'] = 'Click to toggle completion status (not complete)';
$string['tootall'] = 'too tall for the tile';
$string['toowide'] = 'too wide for the tile';
$string['transparenttitleadjustments'] = 'Transparent title adjustments';
$string['transparenttitleadjustments_desc'] = 'On photo tiles with transparent title backgrounds, depending on your theme, you may want to adjust these to ensure that the transparent lines of the title do not overlap when they wrap.
Note that these vary a little across browsers too.  Suggested values for Chrome: Boost and Clean based themes: 30.5 and 4 | Adaptable: 32 and 4 | Moove: 32 and 2 | Remui: 32 and 2.5';
$string['unmigratedcoursesintro'] = 'The following {$a} courses appear not to have had all their tile icons and photos migrated following a system upgrade.  Click the button to process a course now.  If you wait, the background "cron" process should process all of these, but if you wish to process a given course now, click the button';
$string['uploadnewphoto'] = 'Upload new photo';
$string['uploadnewphoto_help'] = 'Upload an image to be used on this tile';
$string['usecourseindex'] = 'Use course index';
$string['usecourseindex_desc'] = 'When in a tiles course, should the course index display on the left?';
$string['usejavascriptnav'] = 'Use animated navigation from Tiles main page';
$string['usejavascriptnav_desc'] = 'When checked, if user clicks a Tile on the main course overview page, and has JavaScript, JS will be used to transition to tile contents.  If unchecked, JS will not be used and legacy navigation (PHP page load) will be used instead.  The other JS settings below will be ignored.';
$string['usejseditingexpandcollapse'] = 'Editing mode - use JavaScript to expand/collapse tiles';
$string['usejseditingexpandcollapse_desc'] = 'If selected, in editing mode a teacher can expand and collapse editing tiles with animated transitions.  Tile content will be loaded on expand, without page reloads.';
$string['usejsnavforsinglesection'] = 'Use JS navigation for single section page';
$string['usejsnavforsinglesection_desc'] = 'When checked, any call for a single section page (&section=xx) will be handled using JavaScript, by launching the course main page, animated to open at the requested section via JS, rather than calling the old style PHP single section page';
$string['usesubtilesseczero'] = 'Use sub tiles in top section';
$string['usesubtilesseczero_help'] = 'If selected, sub tiles will be used in top section of course as well as within all tiles.  Only available if using sub tiles in the course overall.  This is as the sub tiles take up a lot of room at the very top of the course.  It may be better to leave this unselected, so that any items in the top section are shown in standard list format instead.';
$string['usetooltips'] = 'Use JavaScript tooltips';
$string['usetooltips_desc'] = 'Use JavaScript tooltips when user hovers over certain items e.g. completion boxes, tiles for tile contents';
$string['version'] = 'Version {$a}';
$string['width'] = 'width';
