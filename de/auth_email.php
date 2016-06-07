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
 * Strings for component 'auth_email', language 'de', branch 'MOODLE_31_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p>Die Authentifizierung \'E-Mail basiert\' ist die Standardauthentifizierung. Nutzer/innen können sich selber neu anmelden, erhalten zur Bestätigung eine E-Mail. Diese E-Mail enthält eine URL, über die neue Nutzer/innen ihren Zugang bestätigen müssen. Alle späteren Anmeldungen prüfen nur noch Anmeldenamen und Kennwort anhand der in der Moodle-Datenbank gespeicherten Daten.</p><p>Hinweis: Zusätzlich zur Aktivierung des Plugins ist die Selbstregistrierung in den Grundeinstellungen (unten) zu aktivieren. </p>';
$string['auth_emailnoemail'] = 'Der Versuch ist gescheitert, Ihnen eine E-Mail zu senden!';
$string['auth_emailrecaptcha'] = 'Diese Option fügt in der Selbstregistierung ein Kontrollelement ein (Bild oder Audio), um die Website gegen Spambots zu schützen. Weitere Informationen finden Sie unter <a href="http://www.google.com/recaptcha" target="_blank">http://www.google.com/recaptcha</a>.';
$string['auth_emailrecaptcha_key'] = 'ReCaptcha einschalten';
$string['auth_emailsettings'] = 'Einstellungen';
$string['pluginname'] = 'E-Mail basiert';
