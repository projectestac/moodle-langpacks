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
 * Strings for component 'format_topcoll', language 'en', branch 'MOODLE_28_STABLE'
 *
 * @package   format_topcoll
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['arrow'] = 'Arrow';
$string['bulb'] = 'Bulb';
$string['center'] = 'Centre';
$string['cloud'] = 'Cloud';
$string['colourrule'] = 'Please enter a valid RGB colour, six hexadecimal digits.';
$string['columnhorizontal'] = 'Horizontal';
$string['columnvertical'] = 'Vertical';
$string['configurationheadingsub'] = 'Configuration';
$string['configurationheadingsubdesc'] = 'Configuration settings';
$string['ctreset'] = 'Collapsed Topics reset options';
$string['ctreset_help'] = 'Reset to Collapsed Topics defaults.';
$string['currentsection'] = 'This section';
$string['defaultcoursedisplay'] = 'Course display';
$string['defaultcoursedisplay_desc'] = 'Either show all the sections on a single page or section zero and the chosen section on page.';
$string['defaultdisplayinstructions'] = 'Display instructions to users';
$string['defaultdisplayinstructions_desc'] = 'Display instructions to users informing them how to use the toggles.  Can be yes or no.';
$string['defaultheadingsub'] = 'Defaults';
$string['defaultheadingsubdesc'] = 'Default settings';
$string['defaultlayoutcolumnorientation'] = 'Column orientation';
$string['defaultlayoutcolumnorientation_desc'] = 'The default column orientation: Vertical or Horizontal.';
$string['defaultlayoutcolumns'] = 'Number of columns';
$string['defaultlayoutcolumns_desc'] = 'Number of columns between one and four.';
$string['defaultlayoutelement'] = 'Layout';
$string['defaultlayoutelement_desc'] = 'The layout setting can be one of:

\'Default\' with everything displayed.

No \'Topic x\' / \'Week x\' / \'Day x\'.

No section number.

No \'Topic x\' / \'Week x\' / \'Day x\' and no section number.

No \'Toggle\' word.

No \'Toggle\' word and no \'Topic x\' / \'Week x\' / \'Day x\'.

No \'Toggle\' word, no \'Topic x\' / \'Week x\' / \'Day x\' and no section number.';
$string['defaultlayoutelement_descpositive'] = 'The layout setting can be one of:

Toggle word, \'Topic x\' / \'Week x\' / \'Day x\' and section number.

Toggle word and \'Topic x\' / \'Week x\' / \'Day x\'.

Toggle word and section number.

\'Topic x\' / \'Week x\' / \'Day x\' and section number.

Toggle word.

\'Topic x\' / \'Week x\' / \'Day x\'.

Section number.

No additions.';
$string['defaultlayoutstructure'] = 'Structure configuration';
$string['defaultlayoutstructure_desc'] = 'The structure setting can be one of:

Topic

Week

Latest Week First

Current Topic First

Day';
$string['defaultshowsectionsummary'] = 'Show the section summary when collapsed';
$string['defaultshowsectionsummary_desc'] = 'States if the section summary will always be shown regardless of toggle state.';
$string['defaulttgbgcolour'] = 'Toggle background colour';
$string['defaulttgbgcolour_desc'] = 'Toggle background colour in hexidecimal RGB.';
$string['defaulttgbghvrcolour'] = 'Toggle background hover colour';
$string['defaulttgbghvrcolour_desc'] = 'Toggle background hover colour in hexidecimal RGB.';
$string['defaulttgfgcolour'] = 'Toggle foreground colour';
$string['defaulttgfgcolour_desc'] = 'Toggle foreground colour in hexidecimal RGB.';
$string['defaulttgfghvrcolour'] = 'Toggle foreground hover colour';
$string['defaulttgfghvrcolour_desc'] = 'Toggle foreground hover colour in hexidecimal RGB.';
$string['defaulttogglealignment'] = 'Toggle text alignment';
$string['defaulttogglealignment_desc'] = '\'Left\', \'Centre\' or \'Right\'.';
$string['defaulttoggleallhover'] = 'Toggle all icon hovers';
$string['defaulttoggleallhover_desc'] = '\'No\' or \'Yes\'.';
$string['defaulttoggleborderradiusbl'] = 'Toggle bottom left border radius';
$string['defaulttoggleborderradiusbl_desc'] = 'Border bottom left radius of the toggle.';
$string['defaulttoggleborderradiusbr'] = 'Toggle bottom right border radius';
$string['defaulttoggleborderradiusbr_desc'] = 'Border bottom right radius of the toggle.';
$string['defaulttoggleborderradiustl'] = 'Toggle top left border radius';
$string['defaulttoggleborderradiustl_desc'] = 'Border top left radius of the toggle.';
$string['defaulttoggleborderradiustr'] = 'Toggle top right border radius';
$string['defaulttoggleborderradiustr_desc'] = 'Border top right radius of the toggle.';
$string['defaulttoggleiconposition'] = 'Icon position';
$string['defaulttoggleiconposition_desc'] = 'States if the icon should be on the left or the right of the toggle text.';
$string['defaulttoggleiconset'] = 'Toggle icon set';
$string['defaulttoggleiconset_desc'] = '\'Arrow\'                => Arrow icon set.

\'Bulb\'                 => Bulb icon set.

\'Cloud\'                => Cloud icon set.

\'Eye\'                  => Eye icon set.

\'Light Emitting Diode\' => LED icon set.

\'Point\'                => Point icon set.

\'Power\'                => Power icon set.

\'Radio\'                => Radio icon set.

\'Smiley\'               => Smiley icon set.

\'Square\'               => Square icon set.

\'Sun / Moon\'           => Sun / Moon icon set.

\'Switch\'               => Switch icon set.';
$string['defaulttoggleiconsize'] = 'Toggle icon size';
$string['defaulttoggleiconsize_desc'] = 'Icon size: Small = 16px, Medium = 24px and Large = 32px.';
$string['defaulttogglepersistence'] = 'Toggle persistence';
$string['defaulttogglepersistence_desc'] = '\'On\' or \'Off\'.  Turn off for an AJAX performance increase but user toggle selections will not be remembered on page refresh or revisit.

Note: When turning persistence off, please remove any rows containing \'topcoll_toggle_x\' in the \'name\' field
      of the \'user_preferences\' table in the database.  Where the \'x\' in \'topcoll_toggle_x\' will be
      a course id.  This is to save space if you do not intend to turn it back on.';
$string['defaultuserpreference'] = 'What to do with the toggles when the user first accesses the course, adds more sections or toggle peristence is off';
$string['defaultuserpreference_desc'] = 'States what to do with the toggles when the user first accesses the course, the state of additional sections when they are added or toggle persistence id off.';
$string['displayinstructions'] = 'Display instructions';
$string['displayinstructions_help'] = 'States that the instructions should be displayed to the user or not.';
$string['donotshowdate'] = 'Do not show the date';
$string['donotshowdate_help'] = 'Do not show the date when using a weekly based structure and \'Use default section name\' has been un-ticked.';
$string['em0_0'] = '0.0em';
$string['em0_1'] = '0.1em';
$string['em0_2'] = '0.2em';
$string['em0_3'] = '0.3em';
$string['em0_4'] = '0.4em';
$string['em0_5'] = '0.5em';
$string['em0_6'] = '0.6em';
$string['em0_7'] = '0.7em';
$string['em0_8'] = '0.8em';
$string['em0_9'] = '0.9em';
$string['em1_0'] = '1.0em';
$string['em1_1'] = '1.1em';
$string['em1_2'] = '1.2em';
$string['em1_3'] = '1.3em';
$string['em1_4'] = '1.4em';
$string['em1_5'] = '1.5em';
$string['em1_6'] = '1.6em';
$string['em1_7'] = '1.7em';
$string['em1_8'] = '1.8em';
$string['em1_9'] = '1.9em';
$string['em2_0'] = '2.0em';
$string['em2_1'] = '2.1em';
$string['em2_2'] = '2.2em';
$string['em2_3'] = '2.3em';
$string['em2_4'] = '2.4em';
$string['em2_5'] = '2.5em';
$string['em2_6'] = '2.6em';
$string['em2_7'] = '2.7em';
$string['em2_8'] = '2.8em';
$string['em2_9'] = '2.9em';
$string['em3_0'] = '3.0em';
$string['em3_1'] = '3.1em';
$string['em3_2'] = '3.2em';
$string['em3_3'] = '3.3em';
$string['em3_4'] = '3.4em';
$string['em3_5'] = '3.5em';
$string['em3_6'] = '3.6em';
$string['em3_7'] = '3.7em';
$string['em3_8'] = '3.8em';
$string['em3_9'] = '3.9em';
$string['em4_0'] = '4.0em';
$string['eye'] = 'Eye';
$string['formatsettings'] = 'Format reset settings';
$string['formatsettingsinformation'] = '<br />To reset the settings of the course format to the defaults, click on the icon to the right.';
$string['formattopcoll'] = 'Collapsed Topics';
$string['four'] = 'Four';
$string['groundsignal'] = 'Ground signal';
$string['hidefromothers'] = 'Hide section';
$string['instructions'] = 'Instructions: Clicking on the section name will show / hide the section.';
$string['large'] = 'Large';
$string['led'] = 'Light emitting diode';
$string['left'] = 'Left';
$string['maincoursepage'] = 'Main course page';
$string['markedthissection'] = 'This topic is highlighted as the current topic';
$string['markthissection'] = 'Highlight this topic as the current topic';
$string['medium'] = 'Medium';
$string['nametopcoll'] = 'Collapsed Topics';
$string['numbersections'] = 'Number of sections';
$string['off'] = 'Off';
$string['on'] = 'On';
$string['one'] = 'One';
$string['page-course-view-topcoll'] = 'Any course main page in the collapsed topics format';
$string['page-course-view-topcoll-x'] = 'Any course page in the collapsed topics format';
$string['pluginname'] = 'Collapsed Topics';
$string['point'] = 'Point';
$string['power'] = 'Power';
$string['radio'] = 'Radio';
$string['readme_desc'] = 'Please click on \'{$a->url}\' for lots more information about Collapsed Topics.';
$string['readme_title'] = 'Collapsed Topics read-me';
$string['resetallcolour'] = 'Colours';
$string['resetallcolour_help'] = 'Resets the colours to the default values for all courses so it will be the same as a course the first time it is in the \'Collapsed Topics\' format.';
$string['resetalldisplayinstructions'] = 'Display instructions';
$string['resetalldisplayinstructions_help'] = 'Resets the display instructions to the default value for all courses so it will be the same as a course the first time it is in the Collapsed Topics format.';
$string['resetallgrp'] = 'Reset all:';
$string['resetalllayout'] = 'Layouts';
$string['resetalllayout_help'] = 'Resets the layout to the default values for all courses so it will be the same as a course the first time it is in the \'Collapsed Topics \'format.';
$string['resetalltogglealignment'] = 'Toggle alignments';
$string['resetalltogglealignment_help'] = 'Resets the toggle alignment to the default values for all courses so it will be the same as a course the first time it is in the \'Collapsed Topics\' format.';
$string['resetalltoggleiconset'] = 'Toggle icon sets';
$string['resetalltoggleiconset_help'] = 'Resets the toggle icon set and toggle all hover to the default values for all courses so it will be the same as a course the first time it is in the \'Collapsed Topics\' format.';
$string['resetcolour'] = 'Colour';
$string['resetcolour_help'] = 'Resets the colours to the default values so it will be the same as a course the first time it is in the \'Collapsed Topics\' format.';
$string['resetdisplayinstructions'] = 'Display instructions';
$string['resetdisplayinstructions_help'] = 'Resets the display instructions to the default value so it will be the same as a course the first time it is in the Collapsed Topics format.';
$string['resetgrp'] = 'Reset:';
$string['resetlayout'] = 'Layout';
$string['resetlayout_help'] = 'Resets the layout element, structure, coloumns, icon position and shown section summary to the default values so it will be the same as a course the first time it is in the \'Collapsed Topics\' format.';
$string['resettogglealignment'] = 'Toggle alignment';
$string['resettogglealignment_help'] = 'Resets the toggle alignment to the default values so it will be the same as a course the first time it is in the \'Collapsed Topics\' format.';
$string['resettoggleiconset'] = 'Toggle icon set';
$string['resettoggleiconset_help'] = 'Resets the toggle icon set and toggle all hover to the default values so it will be the same as a course the first time it is in the \'Collapsed Topics\' format.';
$string['right'] = 'Right';
$string['section0name'] = 'General';
$string['sectionname'] = 'Section';
$string['setcolour'] = 'Set colour';
$string['setcolour_help'] = 'Contains the settings to do with the colour of the format within the course.';
$string['setlayout'] = 'Set layout';
$string['setlayout_all'] = 'Toggle word, \'Topic x\' / \'Week x\' / \'Day x\' and section number';
$string['setlayoutcolumnorientation'] = 'Set column orientation';
$string['setlayoutcolumnorientation_help'] = 'Vertical - Sections go top to bottom.

Horizontal - Sections go left to right.';
$string['setlayoutcolumns'] = 'Set columns';
$string['setlayoutcolumns_help'] = 'How many columns to use.';
$string['setlayout_default'] = 'Default';
$string['setlayoutelements'] = 'Set elements';
$string['setlayoutelements_help'] = 'How much information about the toggles / sections you wish to be displayed.';
$string['setlayout_help'] = 'Contains the settings to do with the layout of the format within the course.';
$string['setlayout_no_additions'] = 'No additions';
$string['setlayout_no_section_no'] = 'No section number';
$string['setlayout_no_toggle_section_x'] = 'No toggle section x';
$string['setlayout_no_toggle_section_x_section_no'] = 'No toggle section x and section number';
$string['setlayout_no_toggle_word'] = 'No toggle word';
$string['setlayout_no_toggle_word_toggle_section_x'] = 'No toggle word and toggle section x';
$string['setlayout_no_toggle_word_toggle_section_x_section_no'] = 'No toggle word, toggle section x and section number';
$string['setlayout_section_number'] = 'Section number';
$string['setlayoutstructure'] = 'Set structure';
$string['setlayoutstructurecurrenttopicfirst'] = 'Current Topic First';
$string['setlayoutstructureday'] = 'Day';
$string['setlayoutstructure_help'] = 'The layout structure of the course.  You can choose between:

\'Topics\' - where each section is presented as a topic in section number order.

\'Weeks\' - where each section is presented as a week in ascending week order from the start date of the course.

\'Current Week First\' - which is the same as weeks but the current week is shown at the top and preceding weeks in descending order are displayed below except in editing mode where the structure is the same as \'Weeks\'.

\'Current Topic First\' - which is the same as \'Topics\' except that the current topic is shown at the top if it has been set.

\'Day\' - where each section is presented as a day in ascending day order from the start date of the course.';
$string['setlayoutstructurelatweekfirst'] = 'Current Week First';
$string['setlayoutstructuretopic'] = 'Topic';
$string['setlayoutstructureweek'] = 'Week';
$string['setlayout_toggle_section_x'] = '\'Topic x\' / \'Week x\' / \'Day x\'';
$string['setlayout_toggle_section_x_section_number'] = '\'Topic x\' / \'Week x\' / \'Day x\' and section number';
$string['setlayout_toggle_word'] = 'Toggle word';
$string['setlayout_toggle_word_section_number'] = 'Toggle word and section number';
$string['setlayout_toggle_word_section_x'] = 'Toggle word and \'Topic x\' / \'Week x\' / \'Day x\'';
$string['setshowsectionsummary'] = 'Show the section summary when collapsed';
$string['setshowsectionsummary_help'] = 'States if the section summary will always be shown regardless of toggle state.';
$string['settogglealignment'] = 'Set the toggle text alignment';
$string['settogglealignment_help'] = 'Sets the alignment of the text in the toggle.';
$string['settoggleallhover'] = 'Set toggle all icon hover';
$string['settoggleallhover_help'] = 'Sets if the toggle all icons will change when the mouse moves over them.';
$string['settogglebackgroundcolour'] = 'Toggle background';
$string['settogglebackgroundcolour_help'] = 'Sets the background colour of the toggle.';
$string['settogglebackgroundhovercolour'] = 'Toggle background hover';
$string['settogglebackgroundhovercolour_help'] = 'Sets the background colour of the toggle when the mouse moves over it.';
$string['settoggleforegroundcolour'] = 'Toggle foreground';
$string['settoggleforegroundcolour_help'] = 'Sets the colour of the text on the toggle.';
$string['settoggleforegroundhovercolour'] = 'Toggle foreground hover';
$string['settoggleforegroundhovercolour_help'] = 'Sets the colour of the text on the toggle when the mouse moves over it.';
$string['settoggleiconposition'] = 'Set icon position';
$string['settoggleiconposition_help'] = 'States that the icon should be on the left or the right of the toggle text.';
$string['settoggleiconset'] = 'Set icon set';
$string['settoggleiconset_help'] = 'Sets the icon set of the toggle.';
$string['showfromothers'] = 'Show section';
$string['small'] = 'Small';
$string['smiley'] = 'Smiley';
$string['square'] = 'Square';
$string['sunmoon'] = 'Sun / Moon';
$string['switch'] = 'Switch';
$string['three'] = 'Three';
$string['topcollall'] = 'sections.';
$string['topcoll:changecolour'] = 'Change or reset the colour';
$string['topcoll:changelayout'] = 'Change or reset the layout';
$string['topcoll:changetogglealignment'] = 'Change or reset the toggle alignment';
$string['topcoll:changetoggleiconset'] = 'Change or reset the toggle icon set';
$string['topcollclosed'] = 'Close all';
$string['topcollopened'] = 'Open all';
$string['topcollsidewidth'] = '28px';
$string['topcolltoggle'] = 'Toggle';
$string['two'] = 'Two';
