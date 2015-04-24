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
 * Strings for component 'groupselect', language 'es', branch 'MOODLE_28_STABLE'
 *
 * @package   groupselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['assignedteacher'] = 'Asignado profesor sin permiso de edición';
$string['assigngroup'] = 'Asignar profesor sin permiso de edición a grupos';
$string['assigngroup_confirm'] = 'Esto asignará a los grupos profesores sin permiso de edición, sobreescribiendo la asignación anterior. ¿Está seguro?';
$string['assigngroup_help'] = 'Si se establece, habilita un botón para asignar profesores sin permiso de edición a los grupos (si el curso tiene profesores sin permiso de edición). Los profesores sin permiso de edición asignados no son miembros del grupo, pero aparecen en el archivo de exportación y en la vista principal (si está configurada). Puede ser útil si el curso utiliza asistentes para manejar grupos.';
$string['cannotselectclosed'] = 'No podrá ser miembro de un grupo nunca más.';
$string['cannotselectmaxed'] = 'No puede unirse al grupo {$a} - número máximo de miembros alcanzado.';
$string['cannotselectnocap'] = 'No está autorizado para seleccionar un grupo.';
$string['cannotselectnoenrol'] = 'Es necesario estar matriculado en el curso para poder convertirse en un miembro del grupo.';
$string['cannotunselectclosed'] = 'No podrá abandonar el grupo nunca más';
$string['creategroup'] = 'Crear un nuevo grupo';
$string['deleteemptygroups'] = 'Eliminar grupo cuando el último estudiante lo abandone';
$string['deleteemptygroups_help'] = 'Si se establece, elimina automáticamente el grupo cuando el último estudiante lo abandone';
$string['description'] = 'Descripción del grupo';
$string['edittooltip'] = 'Haga clic para editar';
$string['export'] = 'Crear un enlace para descargar el archivo de datos del grupo (CSV)';
$string['export_download'] = 'Descargar archivo CSV';
$string['fromallgroups'] = 'Todos los grupos';
$string['globalpassword_help'] = 'Establecer una contraseña global para apuntarse a un grupo. Sobreescribe la contraseña de los estudiantes.';
$string['groupid'] = 'ID Grupo';
$string['groupselect:addinstance'] = 'Añadir un nuevo grupo auto-seleccionado';
$string['groupselect:assign'] = 'Permitir asignar profesores a los grupos';
$string['groupselect:create'] = 'Permitir creación de grupos';
$string['groupselect:select'] = 'Permitir apuntarse a un grupo';
$string['groupselect:unselect'] = 'Permitir abandonar un grupo';
$string['hidefullgroups'] = 'Ocultar grupos completos de la vista principal';
$string['hidefullgroups_help'] = 'Si se establece, se ocultan todos los grupos que han alcanzado el número máximo de miembros, de la vista principal (excluyendo el grupo al que pertenece el usuario). Puede ser útil si la actividad tiene muchos grupos.';
$string['incorrectpassword'] = 'Contraseña incorrecta';
$string['managegroups'] = 'Administrar grupos';
$string['maxcharlenreached'] = 'Número máximo de carácteres alcanzado';
$string['maxlimitreached'] = 'Número máximo alcanzado';
$string['maxmembers'] = 'Número máximo de miembros por grupo';
$string['maxmembers_help'] = 'Número máximo de miembros por grupo, 0 para ilimitados';
$string['member'] = 'Miembro';
$string['membercount'] = 'Contador';
$string['membershidden'] = 'Lista de miembros no disponible';
$string['memberslist'] = 'Miembros';
$string['minmembers'] = 'Número mínimo de miembros por grupo';
$string['minmembers_help'] = 'Número mínimo de miembros por grupo. Añade notificaciones para los miembros de los grupos que se encuentran por debajo de este límite. El valor predeterminado es 0 (desactivado).';
$string['minmembers_icon'] = 'El grupo tiene menos miembros de los requeridos';
$string['minmembers_notification'] = 'Su grupo tiene menos miembros del requerido! El mínimo es {$a}.';
$string['modulename'] = 'Auto-selección de grupo';
$string['modulename_help'] = '<p> Permite a los estudiantes crear y seleccionar grupos. Características: </p><ul><li> Los estudiantes pueden crear grupos, darles una descripción y establecerlos con protección por contraseña, si quieren </li><li> Los estudiantes pueden seleccionar y unirse a grupos </li><li> Los profesores sin permiso de edición pueden ser asignados a grupos </li><li> El profesor puede exportar la lista de grupos a un archivo csv </li><li> Total compatibilidad con los grupos básicos de Moodle: los grupos pueden ser creados por otros medios si es necesario, soporta el envío de tareas de grupales, etc. </li></ul><p> Actualmente en fase beta, cualquier comentario es bienvenido! (pirkka.pyykkonen@tut.fi) </p>';
$string['modulenameplural'] = 'Auto-selección de grupos';
$string['nogroups'] = 'No hay grupos disponibles para seleccionar, lo lamentamos.';
$string['notavailableanymore'] = 'La selección de grupos no está disponible, lo lamentos (desde el {$a}).';
$string['notavailableyet'] = 'La selección de grupos estará disponible el {$a}.';
$string['ok'] = 'OK';
$string['password'] = 'Requiere contraseña';
$string['pluginadministration'] = 'Administración del módulo';
$string['pluginname'] = 'Auto-selección de grupo';
$string['saving'] = 'Guardando...';
$string['select'] = 'Apuntarse al grupo {$a}';
$string['selectconfirm'] = '¿Realmente quiere apuntarse al grupo <em>{$a}</em>?';
$string['showassignedteacher'] = 'Mostrar profesores asignados';
$string['showassignedteacher_help'] = 'Si se establece, los profesores asignados se mostrarán en la lista de miembros del grupo. Útil si los estudiantes necesitan conocer a sus profesores.';
$string['studentcancreate'] = 'Los estudiantes pueden crear grupos';
$string['studentcancreate_help'] = 'Si se establece, los estudiantes sin grupo (en el agrupamiento seleccionado) pueden crear grupos';
$string['studentcansetdesc'] = 'Los estudiantes pueden establecer y editar la descripción del grupo';
$string['studentcansetdesc_help'] = 'Si se establece, los estudiantes pueden fijar y editar la descripción del grupo al crearlo, y sus miembros podrán editarla';
$string['targetgrouping'] = 'Selecionar grupo desde el agrupamiento';
$string['timeavailable'] = 'Permitir apuntarse desde';
$string['timedue'] = 'Permitir apuntarse hasta';
$string['unselect'] = 'Abandonar el grupo {$a}';
$string['unselectconfirm'] = '¿Realmente quiere abandonar el grupo <em>{$a}</em>?';
