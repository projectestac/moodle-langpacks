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
 * Strings for component 'auth_mnet', language 'sv', version '3.8'.
 *
 * @package     auth_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnet_auto_add_remote_users'] = 'När detta är inställt till \'Ja\' så kommer en post för lokal användare att skapas automatiskt när en fjärranvändare loggar in för första gången.';
$string['auth_mnet_roamin'] = 'Den här värdens användare kan navigera vidare till din webbplats.';
$string['auth_mnet_roamout'] = 'Dina användare kan navigera vidare till de här värdarna.';
$string['auth_mnet_rpc_negotiation_timeout'] = 'Timeout räknat i sekunder för autentisering via XMLRPC-transporten.';
$string['auth_mnetdescription'] = 'Användare autenticeras i enlighet med det nät av tillförlitlighet som har definierats i dina inställningar för nätverk för Moodle.';
$string['auto_add_remote_users'] = 'Lägg till fjärranvändare automatiskt';
$string['crontask'] = 'Bakgrundsbearbetning av MNET-autentisering';
$string['pluginname'] = 'MNet-autentisering';
$string['privacy:metadata:external:mahara'] = 'Denna pluginmodul kan skicka data externt till en länkad Mahara-applikation.';
$string['privacy:metadata:mnet_external:lastaccess'] = 'Tidpunkten för senaste inloggningen';
$string['rpc_negotiation_timeout'] = 'Tiden för RPC-förhandling har gått ut';
$string['sso_idp_description'] = 'Offentliggör den här tjänsten för att tillåta att Dina användare navigerar vidare till {$a} webbplatsen för Moodle utan att behöva logga in där igen. <ul><li><em>Beroende</em>: Du måste också  <strong>prenumerera</strong> på SSO-tjänsten hos {$a}.</li></ul>Prenumerera på den tjänsten för att tillåta att autenticerade användare från {$a} får tillgång till Din webbplats utan att behöva logga in igen. <ul><li><em>Beroende</em>: Du måste också  <strong>offentliggöra</strong> SSO-tjänsten hos {$a}.</li></ul><br />';
$string['sso_idp_name'] = 'SSO (Tillhandahållare av identiteter)';
$string['sso_mnet_login_refused'] = 'Användarnamn {$a->user} har inte tillstånd att logga in från {$a->host}.';
$string['sso_sp_description'] = 'Offentliggör den här tjänsten för att tillåta att autenticerade användare från {$a} får tillgång till Din webbplats utan att behöva logga in igen. <ul><li><em>Beroende</em>: Du måste också  <strong>prenumerera</strong> på SSO-tjänsten (tillhandahållare av identiteter) hos {$a}.</li></ul>Prenumerera på den tjänsten för att tillåta att Dina användare navigerar vidare till {$a} webbplatsen för Moodle utan att behöva logga in där igen.<ul><li><em>Beroende</em>: Du måste också  <strong>offentliggöra</strong> SSO-tjänsten (tillhandahållare av identiteter) hos {$a}.</li></ul><br />';
$string['sso_sp_name'] = 'SSO (tillhandahållare av tjänster)';
