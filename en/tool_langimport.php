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
 * Strings for component 'tool_langimport', language 'en', version '4.4'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Unable to connect to the download server. It is not possible to install or update the language packs automatically. Please download the appropriate ZIP file(s) from <a href="{$a->src}">{$a->src}</a> and unzip them manually to your data directory <code>{$a->dest}</code>';
$string['install'] = 'Install selected language pack(s)';
$string['installedlangs'] = 'Installed language packs';
$string['installfailed'] = 'Language packs installation failed!';
$string['installfinished'] = 'Language packs installation finished.';
$string['installpending'] = 'The following language packs will be installed soon: {$a}.';
$string['installscheduled'] = 'Language packs scheduled for installation.';
$string['langimport'] = 'Language import utility';
$string['langimportdisabled'] = 'Language import feature has been disabled. You have to update your language packs manually at the file-system level. Do not forget to purge string caches after you do so.';
$string['langpackinstalled'] = 'Language pack \'{$a}\' was successfully installed';
$string['langpackinstalledevent'] = 'Language pack installed';
$string['langpacknotremoved'] = 'An error has occurred; language pack \'{$a}\' is not completely uninstalled. Please check file permissions.';
$string['langpackremoved'] = 'Language pack \'{$a}\' was uninstalled';
$string['langpackremovedevent'] = 'Language pack uninstalled';
$string['langpackupdated'] = 'Language pack \'{$a}\' was successfully updated';
$string['langpackupdatedevent'] = 'Language pack updated';
$string['langpackupdateskipped'] = 'Update of \'{$a}\' language pack skipped';
$string['langpackuptodate'] = 'Language pack \'{$a}\' is up-to-date';
$string['langunsupported'] = '<p>Your server does not seem to fully support the following languages:</p><ul>{$a->missinglocales}</ul><p>Instead, the global locale ({$a->globallocale}) will be used to format certain strings such as dates or numbers.</p>';
$string['langupdatecomplete'] = 'Language pack update completed';
$string['missingcfglangotherroot'] = 'Missing configuration value $CFG->langotherroot';
$string['missinglangparent'] = 'Missing parent language <em>{$a->parent}</em> of <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'The English language pack cannot be uninstalled.';
$string['noenglishuninstalltitle'] = 'Unable to uninstall';
$string['nolangupdateneeded'] = 'All your language packs are up to date, no update is needed';
$string['pluginname'] = 'Language packs';
$string['privacy:metadata'] = 'The Language packs plugin does not store any personal data.';
$string['purgestringcaches'] = 'Purge string caches';
$string['search'] = 'Search available language packs';
$string['selectlangs'] = 'Select languages to uninstall';
$string['uninstall'] = 'Uninstall selected language pack(s)';
$string['uninstallconfirm'] = 'You are about to completely uninstall these language packs: <strong>{$a}</strong>. Are you sure?';
$string['updatelangs'] = 'Update all installed language packs';
$string['updatelangsnote'] = 'Updating all installed language packs by clicking the button can take a long time and lead to timeouts. It is recommended instead to make use of the scheduled task \'{$a->taskname}\' (which runs by default every day).';
