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
 * Strings for component 'portfolio_googledocs', language 'en', version '4.4'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Client ID';
$string['noauthtoken'] = 'An authentication token has not been received from Google. Please ensure you are allowing Moodle to access your Google account';
$string['nooauthcredentials'] = 'OAuth credentials required.';
$string['nooauthcredentials_help'] = 'To use the Google Drive portfolio plugin you must configure OAuth credentials in the portfolio settings.';
$string['nosessiontoken'] = 'A session token does not exist preventing export to google.';
$string['oauthinfo'] = '<p>To use this plugin, you must register your site with Google, as described in the documentation <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>As part of the registration process, you will need to enter the following URL as \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p><p>Once registered, you will be provided with a client ID and secret which can be used to configure all Google Drive plugins.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'This plugin sends data externally to a linked Google account. It does not store data locally.';
$string['privacy:metadata:data'] = 'Personal data passed through from the portfolio subsystem.';
$string['secret'] = 'Secret';
$string['sendfailed'] = 'The file {$a} failed to transfer to google';
