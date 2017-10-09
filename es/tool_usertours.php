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
 * Strings for component 'tool_usertours', language 'es', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Encima';
$string['actions'] = 'Acciones';
$string['appliesto'] = 'Se aplica a';
$string['below'] = 'Debajo';
$string['block'] = 'Bloque';
$string['block_named'] = 'Bloque llamado \'{$a}\'';
$string['cachedef_stepdata'] = 'Lista de pasos del tour para usuarios';
$string['cachedef_tourdata'] = 'Lista de información de tours para usuario habilitados que son buscados en cada página';
$string['confirmstepremovalquestion'] = '¿Seguro que desea eliminar este paso?';
$string['confirmstepremovaltitle'] = 'Confirmar eliminación del paso';
$string['confirmtourremovalquestion'] = '¿Está seguro de querer quitar este tour?';
$string['confirmtourremovaltitle'] = 'Confirmar eliminación de tour';
$string['content'] = 'Contenido';
$string['content_heading'] = 'Contenido';
$string['cssselector'] = 'Selector CSS';
$string['defaultvalue'] = 'Por defecto ({$a})';
$string['delay'] = 'Retardo antes de mostrar el paso';
$string['description'] = 'Descripción';
$string['done'] = 'Hecho';
$string['editstep'] = 'Editando "{$a}"';
$string['enabled'] = 'Habilitado';
$string['endtour'] = 'Terminar tour';
$string['event_step_shown'] = 'Paso mostrado';
$string['event_tour_ended'] = 'Tour terminado';
$string['event_tour_reset'] = 'Tour reiniciado';
$string['event_tour_started'] = 'Tour iniciado';
$string['exporttour'] = 'Exportar tour';
$string['filter_header'] = 'Filtros del tour';
$string['filter_help'] = 'Selecione las condiciones bajo las que se mostrará el tour. Todos los filtros deben de coincidir para que un tour se le muestre a un usuario.';
$string['filter_role'] = 'Rol';
$string['filter_role_help'] = 'Un tour puede estar restringido a usuarios con roles seleccionados en el contexto en donde se muestra el tour. Por ejemplo, el restringir un tour del Área personal a usuarios con el rol de estudiante no funcionará si los usuarios tienen el rol de estudiante en un curso (como generalmente sucede). Un tour del Área personal solamente puede restringirse a usuarios con un rol del sistema.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Mostrar el tour cuando el usuario esté usando uno de los temas seleccionados.';
$string['importtour'] = 'Importar tour';
$string['left'] = 'Izquierda';
$string['modifyshippedtourwarning'] = 'Este es un tour para usuario que se ha incluido con Moodle. Cualquier modificación que  haga puede ser anulada durante su siguiente actualización del sitio.';
$string['movestepdown'] = 'Mover un paso abajo';
$string['movestepup'] = 'Mover un paso arriba';
$string['movetourdown'] = 'Mover tour hacia abajo';
$string['movetourup'] = 'Mover tour hacia arriba';
$string['name'] = 'Nombre';
$string['newstep'] = 'Nuevo paso';
$string['newtour'] = 'Crear nuevo tour';
$string['next'] = 'Siguiente';
$string['options_heading'] = 'Opciones';
$string['orphan'] = 'Mostrar si el objetivo no se encuentra';
$string['pathmatch_help'] = 'Los tours serán mostrados en cualquier página cuya URL coincida con este valor.

Puede usar el caracter  % como un comodín para significar cualquier cosa. Algunos valores de ejemplo incluyen:

* /my/% - para coincidir con el Área Personal
* /course/view.php?id=2 - para coincidir con un curso específico
* /mod/forum/view.php% - para coincidir con la lista de discusión del foro
* /user/profile.php% - para coincidir con la página del perfil del usuario

Si quisiera mostrar un tour en la Página inicial del Sitio (hogar/portada), Usted puede usar el valor: "FRONTPAGE".';
$string['pausetour'] = 'Pausa';
$string['pluginname'] = 'Tours para usuarios';
$string['reflex'] = 'Proceder al hacer click';
$string['resettouronpage'] = 'Reiniciar tour para usuario en esta página';
$string['resumetour'] = 'Continuar';
$string['right'] = 'Derecha';
$string['select_block'] = 'Selecciona un bloque';
$string['selector_defaulttitle'] = 'Introduce un título descriptivo';
$string['selectordisplayname'] = 'Un selector CSS conteniendo \'{$a}\'';
$string['sharedtourslink'] = 'Repositorio de tours';
$string['skip'] = 'Omitir';
$string['target'] = 'Objetivo';
$string['target_block'] = 'Bloquear';
$string['target_selector'] = 'Selector';
$string['target_selector_targetvalue'] = 'Selectores CSS';
$string['target_unattached'] = 'Mostrar en medio de la página';
$string['title'] = 'Título';
$string['tour1_content_end'] = 'Este ha sido un tour para usuario, una característica nueva de Moodle 3.2. No volverá a mostrarse a menos de que lo reinicie usando el enlace en el pie de página. ¡Cómo administrador también puede crear sus propios tours como éste!';
$string['tour1_content_navigation'] = 'La navegación principal es ahora a través de este bloque de navegación. La actualización de los contenidos depende de dónde se encuentre en el sitio. Utilice el botón en la parte superior para ocultarlo o mostrarlo.';
$string['tour1_title_addingblocks'] = 'Añadiendo bloques';
$string['tour1_title_blockregion'] = 'Región del bloque';
$string['tour1_title_customisation'] = 'Personalización';
$string['tour1_title_end'] = 'Fin del tour';
$string['tour1_title_navigation'] = 'Navegación';
$string['tour1_title_welcome'] = 'Bienvenida';
$string['tour2_content_customisation'] = 'Para cambiar cualquier configuración de curso, utilice el menú de configuración de la esquina de este encabezado. También encontrará un menú de configuración similar en la página principal de todas las actividades. Prueba a cambiar la edición en este momento.';
$string['tour2_content_end'] = 'Este ha sido un tour para usuario, una característica nueva de Moodle 3.2. No volverá a mostrarse a menos de que lo reinicie usando el enlace en el pie de página. El administrador del sitio también puede crear otros tours.';
$string['tour2_content_navigation'] = 'La navegación es ahora a través de este bloque de navegación. Utilice el botón en la parte superior para ocultarlo o mostrarlo. Verá que hay enlaces para secciones de su curso.';
$string['tour2_content_participants'] = 'Ver los participantes aquí. Aquí además es donde podrás añadir o quitar estudiantes.';
$string['tour2_title_addblock'] = 'Añadir un bloque';
$string['tour2_title_addingblocks'] = 'Añadiendo bloques';
$string['tour2_title_customisation'] = 'Personalización';
$string['tour2_title_end'] = 'Fin del tour';
$string['tour2_title_navigation'] = 'Navegación';
$string['tour2_title_participants'] = 'Participantes del curso';
$string['tour2_title_welcome'] = 'Bienvenida';
$string['tourconfig'] = 'Archivo de configuración de tour a importar';
$string['tourisenabled'] = 'El Tour está habilitado';
$string['tourlist_explanation'] = 'Puede crear tantos tours como desee y habilitarlos para diferentes partes de Moodle. Solamente puede crearse un tour por página.';
$string['tour_resetforall'] = 'El estado del tour ha sido reiniciado. Se mostrará nuevamente a todos los usuarios.';
$string['tours'] = 'Tours';
$string['usertours'] = 'Tours para usuario';
$string['usertours:managetours'] = 'Crear, editar, y eliminar tours para usuarios';
$string['viewtour_edit'] = 'Puede <a href="{$a->editlink}">editar los valores por defecto del tour</a> y <a href="{$a->resetlink}">forzar a que se muestre el tourl</a> nuevamente a todos los usuarios.';
$string['viewtour_info'] = 'Este es el tour \'{$a->tourname}\'. Aplica a la ruta \'{$a->path}\'.';
