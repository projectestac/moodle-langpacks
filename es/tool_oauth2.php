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
 * Strings for component 'tool_oauth2', language 'es', version '3.11'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconnected'] = 'La cuenta del sistema está ahora conectada para acceso fuera de línea';
$string['authnotconnected'] = 'La cuenta del sistema no se conectó para el acceso fuera de línea';
$string['configured'] = 'Configurado';
$string['configuredstatus'] = 'Configurado';
$string['connectsystemaccount'] = 'Conectar a una cuenta del sistema';
$string['createfromtemplate'] = 'Crear un servicio OAuth 2 desde una plantilla';
$string['createnewendpoint'] = 'Crear nuevo endpoint para el emisor "{$a}"';
$string['createnewfacebookissuer'] = 'Crear nuevo servicio de Facebook';
$string['createnewgoogleissuer'] = 'Crear nuevo servicio de Google';
$string['createnewissuer'] = 'Crear nuevo servicio personalizado';
$string['createnewmicrosoftissuer'] = 'Crear nuevo servicio de Microsoft';
$string['createnewnextcloudissuer'] = 'Crear nuevo servicio de Nextcloud';
$string['createnewservice'] = 'Crear nuevo servicio:';
$string['createnewuserfieldmapping'] = 'Crear una nueva asignación de campo de usuario para el emisor "{$a}"';
$string['custom_service'] = 'Personalizado';
$string['discoverystatus'] = 'Descubrimiento';
$string['editendpoint'] = 'Editar endpoint: {$a->endpoint} para el emisor {$a->issuer}';
$string['editendpoints'] = 'Configurar endpoints';
$string['editissuer'] = 'Editar emisor de identidad: {$a}';
$string['edituserfieldmapping'] = 'Editar asignación de campos de usuario para el emisor {$a}';
$string['edituserfieldmappings'] = 'Configurar asignaciones de campos de usuario';
$string['endpointdeleted'] = 'Endpoint eliminado';
$string['endpointname'] = 'Nombre';
$string['endpointname_help'] = 'Clave utilizada para buscar este endpoint. Debe terminar con "_endpoint".';
$string['endpointsforissuer'] = 'Endpoints para el emisor: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL para este endpoint. Debe utilizar el protocolo https://.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Insignias abiertas';
$string['issueralloweddomains'] = 'Dominios de inicio de sesión';
$string['issueralloweddomains_help'] = 'Si se rellena, este ajuste es una lista de dominios separados por comas a los que se limitarán los inicios de sesión cuando se utilice este proveedor.';
$string['issuerbaseurl'] = 'URL base de servicio';
$string['issuerbaseurl_help'] = 'URL base utilizada para acceder al servicio.';
$string['issuerclientid'] = 'ID de cliente';
$string['issuerclientid_help'] = 'El ID de cliente OAuth para este emisor.';
$string['issuerclientsecret'] = 'Clave secreta de cliente';
$string['issuerclientsecret_help'] = 'La clave secreta de cliente OAuth para este emisor.';
$string['issuerdeleted'] = 'Emisor de identidad eliminado';
$string['issuerdisabled'] = 'Emisor de identidad deshabilitado';
$string['issuerenabled'] = 'Emisor de identidad habilitado';
$string['issuerimage'] = 'URL del logotipo';
$string['issuername'] = 'Nombre';
$string['issuername_help'] = 'Nombre del emisor de identidad. Puede mostrarse en la página de inicio de sesión.';
$string['issuerrequireconfirmation'] = 'Requerir verificación de correo electrónico';
$string['issuers'] = 'Emisores';
$string['issuersetup'] = 'Instrucciones detalladas sobre la configuración de los servicios comunes de OAuth 2';
$string['issuershowonloginpage'] = 'Mostrar en página de inicio de sesión';
$string['issuersservicesallow'] = 'Permitir servicios';
$string['issuersservicesnotallow'] = 'No permitir servicios';
$string['issuerusedforinternal'] = 'Servicios internos';
$string['issuerusedforlogin'] = 'Inicio de sesión';
$string['issuerusein'] = 'Se utilizará este servicio';
$string['issuerusein_help'] = 'Los servicios OAuth 2 pueden utilizarse para servicios internos, en la página de inicio de sesión o para ambos si es necesario.';
$string['issueruseineverywhere'] = 'Página de inicio de sesión y servicios internos';
$string['issueruseininternalonly'] = 'Sólo servicios internos.';
$string['issueruseinloginonly'] = 'Sólo página de inicio de sesión';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Mostrar en página de inicio de sesión como';
$string['loginissuer'] = 'Permitir inicio de sesión';
$string['microsoft_service'] = 'Microsoft';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Sin configurar';
$string['notloginissuer'] = 'No permitir inicio de sesión';
$string['pluginname'] = 'Servicios OAuth 2';
$string['privacy:metadata'] = 'El complemento de servicios de OAuth 2 no almacena ningún dato personal.';
$string['savechanges'] = 'Guardar cambios.';
$string['systemaccountconnected'] = 'Cuenta de sistema conectada';
$string['systemaccountnotconnected'] = 'Cuenta de sistema no conectada';
$string['systemauthstatus'] = 'Cuenta de sistema conectada';
$string['userfieldexternalfield'] = 'Nombre de campo externo';
$string['userfieldexternalfield_error'] = 'El campo no puede contener HTML.';
$string['userfieldexternalfield_help'] = 'Nombre del campo proporcionado por el sistema OAuth externo.';
$string['userfieldinternalfield'] = 'Nombre de campo interno';
$string['userfieldinternalfield_help'] = 'Nombre del campo de usuario de Moodle que debe mapearse desde el campo externo.';
$string['userfieldmappingdeleted'] = 'Se eliminó la asignación de campos de usuario';
$string['userfieldmappingsforissuer'] = 'Asignación de campos de usuario para el emisor: {$a}';
