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
 * Strings for component 'auth_db', language 'ca', version '4.4'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'No es pot connectar a la base de dades externa.';
$string['auth_dbcannotreadtable'] = 'No es pot llegir la taula externa.';
$string['auth_dbcantconnect'] = 'No s\'ha pogut establir una connexió amb la base de dades d\'autenticació...';
$string['auth_dbchangepasswordurl_key'] = 'URL de canvi de contrasenya';
$string['auth_dbcolumnlist'] = 'La taula externa conté les següents columnes:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'Depura ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Depuració de la connexió ADOdb amb una base de dades externa: utilitzeu aquesta opció si apareix una pàgina en blanc durant l\'inici de sessió. Opció no apta per a llocs en producció.';
$string['auth_dbdeleteuser'] = 'S\'ha suprimit l\'usuari {$a->name} amb ID {$a->id}';
$string['auth_dbdeleteusererror'] = 'S\'ha produït un error en suprimir l\'usuari {$a}';
$string['auth_dbdescription'] = 'Aquest mètode utilitza una taula d\'una base de dades externa per comprovar si un nom d\'usuari i una contrasenya són vàlids. Si el compte és nou, aleshores també es pot copiar a Moodle informació d\'altres camps.';
$string['auth_dbextencoding'] = 'Codificació de la base de dades externa';
$string['auth_dbextencodinghelp'] = 'Codificació utilitzada per la base de dades externa';
$string['auth_dbextrafields'] = 'Aquests camps són opcionals. Podeu triar d\'emplenar alguns camps d\'usuari del Moodle amb informació dels <b>camps de la base de dades externa</b> especificats aquí. <p>Si els deixeu en blanc, s\'utilitzaran els valors per defecte.</p><p>En tot cas, l\'usuari podrà editar tots aquests camps quan es connecti.</p>';
$string['auth_dbfieldpass'] = 'Nom del camp que conté la contrasenya';
$string['auth_dbfieldpass_key'] = 'Camp de la contrasenya';
$string['auth_dbfielduser'] = 'Nom del camp que conté el nom d\'usuari';
$string['auth_dbfielduser_key'] = 'Camp del nom d\'usuari';
$string['auth_dbhost'] = 'L\'ordinador que allotja el servidor de la base de dades. Useu una entrada NFD (DSN) del sistema si esteu utilitzant ODBC. Useu una entrada PDO DSN si utilitzeu PDO.';
$string['auth_dbhost_key'] = 'Servidor';
$string['auth_dbinsertuser'] = 'S\'ha inserit l\'usuari {$a->name} ID {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Error en inserir l\'usuari {$a->username}: un usuari amb aquest nom d\'usuari ja s\'havia creat mitjançant el connector \'{$a->auth}\'.';
$string['auth_dbinsertusererror'] = 'S\'ha produït un error en inserir l\'usuari {$a}';
$string['auth_dbname'] = 'El nom de la base de dades. Deixeu-lo buit si esteu utilitzant un NFD (DSN) ODBC.';
$string['auth_dbname_key'] = 'Nom de la base de dades';
$string['auth_dbnoexttable'] = 'No s\'ha especificat la taula externa.';
$string['auth_dbnouserfield'] = 'No s\'ha especificat el camp d\'usuari extern.';
$string['auth_dbpass'] = 'Contrasenya corresponent al nom d\'usuari anterior';
$string['auth_dbpass_key'] = 'Contrasenya';
$string['auth_dbpasstype'] = '<p>Especifiqueu el format que fa servir el camp de contrasenya.</p> <p>Utilitzeu «intern» si voleu que la base de dades externa gestioni els noms d\'usuari i les adreces de correu electrònic, però Moodle gestioni les contrasenyes. Si utilitzeu «intern», heu de proporcionar un camp d\'adreça de correu electrònic emplenat a la base de dades externa i heu d\'habilitar la tasca programada \\auth_db\\task\\sync_users. Moodle enviarà un missatge de correu electrònic als usuaris nous amb una contrasenya temporal.</p>';
$string['auth_dbpasstype_key'] = 'Format de la contrasenya';
$string['auth_dbreviveduser'] = 'S\'ha restaurat l\'usuari {$a->name} amb ID  {$a->id}';
$string['auth_dbrevivedusererror'] = 'S\'ha produït un error en restaurar l\'usuari {$a}';
$string['auth_dbsaltedcrypt'] = 'Resum criptogràfic unidireccional de les cadenes';
$string['auth_dbsetupsql'] = 'Ordre de configuració de SQL';
$string['auth_dbsetupsqlhelp'] = 'Ordre SQL per a configuració especial de la base de dades, generalment utilitzada per configurar la codificació de la comunicació. Exemple per a MySQL i PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'L\'usuari {$a->name} amb ID {$a->id} té la inscripció suspesa';
$string['auth_dbsuspendusererror'] = 'S\'ha produït un error en suspendre l\'usuari {$a}';
$string['auth_dbsybasequoting'] = 'Utilitza cometes sybase';
$string['auth_dbsybasequotinghelp'] = 'Alteració de cometes estil Sybase: necessària per a Oracle, MS SQL i algunes altres bases de dades. No utilitzeu aquesta opció amb MySQL.';
$string['auth_dbsyncuserstask'] = 'Tasca de sincronització dels usuaris';
$string['auth_dbtable'] = 'Nom de la taula en la base de dades';
$string['auth_dbtable_key'] = 'Taula';
$string['auth_dbtableempty'] = 'La taula externa és buida.';
$string['auth_dbtype'] = 'El tipus de base de dades (per a més informació, vegeu la <a href="http://phplens.com/adodb/supported.databases.html" target="_blank">documentació sobre ADOdb</a>)';
$string['auth_dbtype_key'] = 'Base de dades';
$string['auth_dbupdateerror'] = 'S\'ha produït un error en actualitzar la base de dades externa.';
$string['auth_dbupdateusers'] = 'Actualitza els usuaris';
$string['auth_dbupdateusers_description'] = 'A més d\'afegir usuaris nous, actualitza els ja existents.';
$string['auth_dbupdatinguser'] = 'S\'està actualitzant l\'usuari {$a->name} amb ID {$a->id}';
$string['auth_dbuser'] = 'Nom d\'usuari amb accés de lectura a la base de dades';
$string['auth_dbuser_key'] = 'Usuari de la base de dades';
$string['auth_dbuserstoadd'] = 'Registres d\'usuari per afegir: {$a}';
$string['auth_dbuserstoremove'] = 'Registres d\'usuari per suprimir: {$a}';
$string['pluginname'] = 'Base de dades externa';
$string['privacy:metadata'] = 'El complement d\'autenticació de base de dades externa no emmagatzema cap dada personal.';
