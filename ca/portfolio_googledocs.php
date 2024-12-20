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
 * Strings for component 'portfolio_googledocs', language 'ca', version '4.4'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID del client';
$string['noauthtoken'] = 'No s\'ha rebut el testimoni d\'autenticació de Google. Assegureu-vos que esteu permetent que Moodle accedeixi al vostre compte de Google.';
$string['nooauthcredentials'] = 'Es requereixen credencials OAuth';
$string['nooauthcredentials_help'] = 'Per a utilitzar el connector de dossier de Google Docs heu de configurar les credencials OAuth en la configuració del dossier.';
$string['nosessiontoken'] = 'No és possible l\'exportació a Google perquè no existieix el testimoni de sessió.';
$string['oauthinfo'] = '<p>Per utilitzar aquest connector, heu de registrar el vostre lloc a Google, tal com es descriu a la documentació <a href="{$a->docsurl}">Configuració de Google OAuth 2.0</a>.</p><p>Com a part del procés de registre, haureu d\'introduir l\'URL següent com a «URI de redirecció autoritzats»:</p><p>{$a->callbackurl}</p><p>Un cop registrat, se us proporcionarà un identificador de client i un secret que es poden utilitzar per configurar tots els connectors de Google Drive.</p>';
$string['pluginname'] = 'Documents de Google';
$string['secret'] = 'Secret';
$string['sendfailed'] = 'La transferència del fitxer {$a} a Google ha fallat';
