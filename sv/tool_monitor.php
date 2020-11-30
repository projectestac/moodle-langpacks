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
 * Strings for component 'tool_monitor', language 'sv', version '3.8'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['defaultmessagetemplate'] = 'Regel: {rulename}<br />Beskrivning: {description}<br />Händelse: {eventname}';
$string['managesubscriptions'] = 'Hantera händelseövervakning';
$string['messageprovider:notification'] = 'Notiser om regelprenumerationer';
$string['messagetemplate'] = 'Meddelande om avisering';
$string['messagetemplate_help'] = 'Ett meddelande om avisering skickas till prenumeranter när tröskelvärdet för antal notiser har uppnåtts.
Det kan omfatta någon eller alla av följande platshållare:

* Länk till platsen för händelsen {link}
* Länk till området som bevakas {modulelink}
* Regelnamn {rulename}
* Beskrivning {description}
* Händelse {eventname}';
$string['privacy:metadata:messagesummary'] = 'Notiser skickas till meddelandesystemet.';
$string['unsubscribe'] = 'Avbeställ prenumerationen';
