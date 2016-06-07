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
 * Strings for component 'choicegroup', language 'es', branch 'MOODLE_30_STABLE'
 *
 * @package   choicegroup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Añadir';
$string['add_group'] = 'Añadir grupo';
$string['add_grouping'] = 'Añadir agrupamiento';
$string['add_groupings'] = 'Añadir agrupamientos';
$string['add_groups'] = 'Añadir grupos';
$string['addmorechoices'] = 'Añadir más opciones';
$string['afterresultsviewable'] = 'Los resultados serán visibles después de que haya hecho su elección.';
$string['allowupdate'] = 'Permitir modificar la elección';
$string['and'] = 'y';
$string['answered'] = 'Respondido';
$string['applytoallgroups'] = 'Aplicar para todos los grupos';
$string['available_groups'] = 'Grupos disponibles';
$string['byparticipants'] = 'por {$a} participantes';
$string['char_bullet_collapsed'] = '►';
$string['char_bullet_expanded'] = '▼';
$string['char_limitui_parenthesis_end'] = '⦘';
$string['char_limitui_parenthesis_start'] = '⦗';
$string['choice'] = 'Elección';
$string['choicegroup:addinstance'] = 'Agregar una nueva actividad de elección de grupo.';
$string['choicegroup:choose'] = 'Grabar una elección.';
$string['choicegroupclose'] = 'Hasta';
$string['choicegroup:deleteresponses'] = 'Eliminar respuestas';
$string['choicegroup:downloadresponses'] = 'Descargar respuestas';
$string['choicegroupfull'] = 'Este grupo está completo y no es posible añadiir más usuarios al mismo.';
$string['choicegroupname'] = 'Título de la actividad';
$string['choicegroupopen'] = 'Abierto';
$string['choicegroupoptions'] = 'Opciones de elección.';
$string['choicegroupoptions_help'] = 'Aquí es donde se especifica las opciones entra las que los participantes podrán escoger.

Puede rellenar cualquier número de estas. Si deja en blanco algunas de las opciones disponibles, éstas no se mostrarán. Si necesita añadir más, haga clic en el botón "Añadir 3 campos al formulario".';
$string['choicegroup:readresponses'] = 'Leer las respuestas.';
$string['choicegroupsaved'] = 'Su selección se ha guardado.';
$string['choicetext'] = 'Texto de la selección';
$string['chooseaction'] = 'Elija una acción...';
$string['choosegroup'] = 'Elija un grupo';
$string['collapse_all_groupings'] = 'Colapsar todas las agrupaciones';
$string['completionsubmit'] = 'Mostrar como completo cuando un usuario realiza su elección.';
$string['del'] = 'Quitar';
$string['del_group'] = 'Quitar grupo';
$string['del_groups'] = 'Quitar grupos';
$string['displayhorizontal'] = 'Mostrar horizontalmente';
$string['displaymode'] = 'Modo de visualización.';
$string['displayvertical'] = 'Mostrar verticalmente';
$string['double_click_grouping_legend'] = 'Hacer doble click en un agrupamiento para expandir o colapsar individualmente.';
$string['double_click_group_legend'] = 'Hacer doble click en un grupo para añadirlo.';
$string['event:answered'] = 'Elección efectuada';
$string['event:answered_desc'] = 'El usuario con id \'{$a->userid}\' ha seleccionado un grupo en la selección de grupo con la id del módulo del curso \'{$a->contextinstanceid}\'.';
$string['event:removed'] = 'Elección quitada';
$string['event:removed_desc'] = 'El usuario con id \'{$a->userid}\' ha eliminado su elección en la elección de grupo con la id del módulo del curso \'{$a->contextinstanceid}\'.';
$string['event:reportviewed'] = 'Informe visto';
$string['event:reportviewed_desc'] = 'El usuario con id \'{$a->userid}\' ha visto el informe para la actividad de elección de grupo con la id de módulo del curso \'{$a->contextinstanceid}\'.';
$string['expand_all_groupings'] = 'Expandir todos los agrupamientos';
$string['expired'] = 'Lamentablemente esta actividad cerrada en {$a} y ya no está disponible.';
$string['fillinatleastoneoption'] = 'Es necesario proporcionar como mínimo una respuesta posible';
$string['fillinatleasttwooptions'] = 'Es necesario proporcionar como mínimo dos posibles respuestas';
$string['full'] = '(Completo)';
$string['generallimitation'] = 'Limitación general';
$string['groupdoesntexist'] = 'Alguno de los grupos especificados no existe en este curso. El profesor tendría que generar los grupos necesarios y/o modificar esta actividad.';
$string['groupmembers'] = 'Miembros del grupo';
$string['groupsheader'] = 'Grupos';
$string['havetologin'] = 'Es necesario iniciar sesión para poder elegir una opción.';
$string['hidedescription'] = 'Ocultar descripciones';
$string['limit'] = 'Límite';
$string['limitanswers'] = 'Limitar el número de respuestas permitidas.';
$string['limitanswers_help'] = 'Mediante esta opción se puede limitar el número de miembros que pueden formar parte de cada grupo. Cuando se alcanza el límite establecido, nadie más puede optar por formar parte del grupo correspondiente.

Si se elige la opción "deshabilitar" el número de miembros posibles para todos los grupos es ilimitado.';
$string['members/'] = 'Llenar';
$string['members/max'] = 'Reservado / Capacidad';
$string['modulename'] = 'Elección de grupo';
$string['modulename_help'] = 'El módulo de Elección de grupo permite que el profesor proponga dos o más grupos del curso para que los estudiantes se automatriculen en alguno de ellos.

El número de miembros para cada grupo puede limitarse a un número determinado de usuarios.

Los alumnos pueden o no cambiar libremente de grupo si el profesor así lo considera en la configuración de la actividad.';
$string['modulenameplural'] = 'Selección de grupos.';
$string['moveselectedusersto'] = 'Mover los usuarios seleccionados a ...';
$string['multipleenrollmentspossible'] = 'Permitir la inclusión en múltiples grupos';
$string['mustchooseone'] = 'Debe elegir una respuesta antes de guardar. No se ha realizado esta acción.';
$string['neverresultsviewable'] = 'Los resultados no son visibles.';
$string['noguestchoose'] = 'Disculpe, los invitados no están autorizados para hacer elecciones.';
$string['noresultsviewable'] = 'Los resultados no son visibles por el momento.';
$string['notanswered'] = 'Aún no hay respuesta.';
$string['notenrolledchoose'] = 'Sólo a usuarios inscritos se les permite elegir opciones.';
$string['notopenyet'] = 'Esta actividad no está disponible hasta {$a}';
$string['notyetresultsviewable'] = 'Los resultados serán visibles después de que esta actividad se haya cerrado';
$string['numberofuser'] = 'El número de usuarios';
$string['option'] = 'Grupo';
$string['page-mod-choice-x'] = 'Cualquier página del módulo Elección de grupo';
$string['pleasesetgroups'] = 'Por favor, genere al menos dos grupos en este curso.';
$string['pluginadministration'] = 'Administración de la elección';
$string['pluginname'] = 'Selección de grupo.';
$string['privacy'] = 'Privacidad de los resultados';
$string['publish'] = 'Publicar resultados';
$string['publishafteranswer'] = 'Mostrar los resultados a los estudiantes después de su respuesta.';
$string['publishafterclose'] = 'Mostrar los resultados a los estudiantes después de que la actividad de elección se ha cerrado.';
$string['publishalways'] = 'Mostrar siempre los resultados a los estudiantes.';
$string['publishanonymous'] = 'Publicar los resultados como anónimos. No se muestran los nombres de los estudiantes.';
$string['publishnames'] = 'Publicar los resultados completos. Se muestran los nombres de los estudiantes y sus elecciones.';
$string['publishnot'] = 'No publicar los resultados a los estudiantes';
$string['removemychoicegroup'] = 'Eliminar mi elección';
$string['removeresponses'] = 'Eliminar todas las respuestas';
$string['responses'] = 'Respuestas';
$string['responsesto'] = 'Respuestas a {$a}';
$string['samegroupused'] = 'No se puede utilizar el mismo grupo varias veces.';
$string['savemychoicegroup'] = 'Guardar mi elección';
$string['selected_groups'] = 'Grupos seleccionados';
$string['set_limit_for_group'] = 'Límite para';
$string['showunanswered'] = 'Mostrar una columna con los alumnos que no han respondido';
$string['skipresultgraph'] = 'Pasar por alto gráfico de resultados';
$string['spaceleft'] = 'Espacio disponible';
$string['spacesleft'] = 'Espacios disponibles';
$string['taken'] = 'Tomado';
$string['timerestrict'] = 'Restringir las respuestas en este periodo de tiempo.';
$string['viewallresponses'] = 'Ver {$a} respuestas';
$string['withselected'] = 'Con la selección';
$string['yourselection'] = 'Su elección';
