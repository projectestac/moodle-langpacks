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
 * Strings for component 'auth_mnet', language 'ca', version '4.1'.
 *
 * @package     auth_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnet_auto_add_remote_users'] = 'Si l\'habiliteu, es crearà automàticament un compte d\'usuari local quan un usuari remot entri per primera vegada.';
$string['auth_mnet_roamin'] = 'Els usuaris d\'aquests servidors seran admesos al vostre lloc';
$string['auth_mnet_roamout'] = 'Els vostres usuaris seran admesos en aquests servidors';
$string['auth_mnet_rpc_negotiation_timeout'] = 'Temps d\'espera en segons per a l\'autenticació sobre transport XMLRPC.';
$string['auth_mnetdescription'] = 'Els usuaris són autenticats d\'acord amb la xarxa de confiança definida en els paràmetres de Moodle en Xarxa.';
$string['auto_add_remote_users'] = 'Afegeix automàticament usuaris remots';
$string['crontask'] = 'Processament en segon pla de l\'autenticació MNET';
$string['pluginname'] = 'Autenticació Moodle en Xarxa';
$string['privacy:metadata:external:mahara'] = 'Aquest connector pot enviar informació externament cap a una aplicació Mahara enllaçada.';
$string['privacy:metadata:external:moodle'] = 'Aquest connector pot enviar informació externament cap a una aplicació Moodle enllaçada.';
$string['privacy:metadata:mnet_external:address'] = 'L\'adreça de l\'usuari.';
$string['privacy:metadata:mnet_external:alternatename'] = 'Un nom alternatiu per a l\'usuari.';
$string['privacy:metadata:mnet_external:autosubscribe'] = 'Preferència sobre si l\'usuari ha de ser subscrit automàticament als fòrums on publica.';
$string['privacy:metadata:mnet_external:calendartype'] = 'Preferència de l\'usuari pel tipus de calendari a utilitzar.';
$string['privacy:metadata:mnet_external:city'] = 'La ciutat de l\'usuari.';
$string['privacy:metadata:mnet_external:country'] = 'El país on es troba l\'usuari.';
$string['privacy:metadata:mnet_external:currentlogin'] = 'L\'inici de sessió actual d\'aquest usuari.';
$string['privacy:metadata:mnet_external:department'] = 'El departament on es pot trobar aquest usuari.';
$string['privacy:metadata:mnet_external:description'] = 'Detalls generals d\'aquest usuari.';
$string['privacy:metadata:mnet_external:email'] = 'Una adreça de correu electrònic per contactar.';
$string['privacy:metadata:mnet_external:emailstop'] = 'Preferència per deixar d\'enviar correu electrònic a l\'usuari.';
$string['privacy:metadata:mnet_external:firstaccess'] = 'Hora en què aquest usuari va accedir per primera vegada al lloc.';
$string['privacy:metadata:mnet_external:firstname'] = 'Nom de pila de l\'usuari.';
$string['privacy:metadata:mnet_external:firstnamephonetic'] = 'Els detalls fonètics sobre el nom de l\'usuari.';
$string['privacy:metadata:mnet_external:id'] = 'L\'ID de l\'usuari';
$string['privacy:metadata:mnet_external:idnumber'] = 'Un número d\'identificació donat per la institució';
$string['privacy:metadata:mnet_external:imagealt'] = 'Text alternatiu per a la imatge de l\'usuari.';
$string['privacy:metadata:mnet_external:institution'] = 'La institució de la qual és membre aquest usuari.';
$string['privacy:metadata:mnet_external:lang'] = 'Preferència de l\'usuari per a l\'idioma que es mostra.';
$string['privacy:metadata:mnet_external:lastaccess'] = 'L\'hora en què l\'usuari va accedir al lloc per darrera vegada.';
$string['privacy:metadata:mnet_external:lastlogin'] = 'L\'últim inici de sessió d\'aquest usuari.';
$string['privacy:metadata:mnet_external:lastname'] = 'Cognom de l’usuari.';
$string['privacy:metadata:mnet_external:lastnamephonetic'] = 'Els detalls fonètics del cognom de l\'usuari.';
$string['privacy:metadata:mnet_external:maildigest'] = 'Configuració per al resum de correu per a aquest usuari.';
$string['privacy:metadata:mnet_external:maildisplay'] = 'Preferència de l\'usuari per mostrar la seva adreça de correu electrònic a altres usuaris.';
$string['privacy:metadata:mnet_external:middlename'] = 'Segon nom de l\'usuari';
$string['privacy:metadata:mnet_external:phone1'] = 'Número de telèfon de l\'usuari.';
$string['privacy:metadata:mnet_external:phone2'] = 'Número de telèfon addicional per a l\'usuari.';
$string['privacy:metadata:mnet_external:picture'] = 'Detalls de la imatge associats amb aquest usuari.';
$string['privacy:metadata:mnet_external:policyagreed'] = 'Marca per determinar si l\'usuari ha acceptat la política del lloc.';
$string['rpc_negotiation_timeout'] = 'Temps màxim negociació RPC';
$string['sso_idp_description'] = 'Publiqueu aquest servei a fi de permetre que els vostres usuaris passin al lloc Moodle {$a} sense necessitat de tornar a iniciar-hi una sessió. <ul><li><em>Dependència</em>: també us haureu de <strong>subscriure</strong> al servei SSO (proveïdor de servei) del lloc {$a}.</li></ul><br />Subscriviu-vos a aquest servei a fi de permetre que usuaris autenticats del lloc {$a} entrin al vostre lloc sense iniciar-hi una sessió nova. <ul><li><em>Dependència</em>: també haureu de <strong>publicar</strong> el servei SSO (proveïdor de servei) per a {$a}.</li></ul><br />';
$string['sso_idp_name'] = 'SSO (proveïdor d\'identitat)';
$string['sso_mnet_login_refused'] = 'Al nom d\'usuari {$a->user} no li és permès d\'iniciar la sessió des del lloc {$a->host}.';
$string['sso_sp_description'] = 'Publiqueu aquest servei a fi de permetre que usuaris autenticats del lloc {$a} accedeixin al vostre lloc sense necessitat de tornar a iniciar-hi una sessió. <ul><li><em>Dependència</em>: també us haureu de <strong>subscriure</strong> al servei SSO (proveïdor d\'identitat) del lloc {$a}.</li></ul><br />Subscriviu-vos a aquest servei a fi de permetre que els vostres usuaris passin al lloc Moodle {$a} sense necessitat de tornar a iniciar-hi una sessió. <ul><li><em> Dependència </em>: també haureu de <strong>publicar</strong> el servei SSO (proveïdor d\'identitat) per a {$a}.</li></ul><br />';
$string['sso_sp_name'] = 'SSO (proveïdor de servei)';
