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
 * Strings for component 'tool_usertours', language 'gl', version '4.4'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Enriba';
$string['actions'] = 'Accións';
$string['appliesto'] = 'Aplícase a';
$string['backdrop'] = 'Amosar con pano de fondo';
$string['backdrop_help'] = 'Pode usar un pano de fondo para resaltar a parte da páxina á que está apuntando

Nota: Os panos de fondo non son compatíbeis con algunhas partes da páxina como a barra de navegación.';
$string['below'] = 'Embaixo';
$string['block'] = 'Bloque';
$string['block_named'] = 'Bloque chamado «{$a}»';
$string['cachedef_stepdata'] = 'Lista dos pasos da visita guiada do usuario';
$string['cachedef_tourdata'] = 'Lista de información de visitas guiadas de usuario activadas que se recolle en cada páxina';
$string['confirmstepremovalquestion'] = 'Confirma que quere retirar este paso?';
$string['confirmstepremovaltitle'] = 'Confirmar a retirada do paso';
$string['confirmtourremovalquestion'] = 'Confirma que quere retirar esta visita guiada?';
$string['confirmtourremovaltitle'] = 'Confirmar a retirada da visita guiada';
$string['content'] = 'Contido';
$string['content_heading'] = 'Contido';
$string['content_help'] = 'O contido que describe o paso pode engadirse como texto simple, incluído en etiquetas multilingües (para o seu uso co filtro de contido multilingüe) se é necesario.';
$string['content_type'] = 'Tipo de contido';
$string['content_type_help'] = '* Manual: o contido introdúcese mediante un editor de texto
* ID de cadea de idioma: no formato de cadea identificador, compoñente (sen espazo após a coma)';
$string['content_type_langstring'] = 'ID de cadea de idioma';
$string['content_type_manual'] = 'Manual';
$string['cssselector'] = 'Selector CSS';
$string['defaultvalue'] = 'Predeterminado ({$a})';
$string['delay'] = 'Demora antes de amosar o paso';
$string['delay_help'] = 'Opcionalmente pode optar por engadir un atraso antes de que se amose o paso.

Este atraso é de milisegundos.';
$string['description'] = 'Descrición';
$string['description_help'] = 'A descrición dun percorrido pódese engadir como texto simple, encerrado en etiquetas multilingües (para usar co filtro de contido multilingüe) se é necesario.

Como alternativa, pódese introducir un ID de cadea de idioma co formato identificador, compoñente (sen corchetes nin espazos após a coma).';
$string['displaystepnumbers'] = 'Amosar os números de pasos';
$string['displaystepnumbers_help'] = 'Indica se se debe amosar un reconto de número de pasos, por exemplo, 1/4, 2/4, etc. para indicar a duración da visita guiada do usuario.';
$string['done'] = 'Feito';
$string['duplicatetour'] = 'Visita guiada duplicada';
$string['duplicatetour_name'] = '{$a} (copia)';
$string['editstep'] = 'Editando «{$a}»';
$string['enabled'] = 'Activado';
$string['endonesteptour'] = 'Entendido';
$string['endtour'] = 'Fin da visita guiada';
$string['endtourlabel'] = 'Etiqueta do botón de Finalizar a visita guiada';
$string['endtourlabel_help'] = 'Opcionalmente, pode especificar unha etiqueta personalizada para o botón de finalización da visita guiada. A etiqueta predeterminada é «Entendido» para as visitas guiadas dun só paso e «Finalizar a visita guiada» para as visitas guidas de varios pasos.

 Como alternativa, pódese introducir un ID de cadea de idioma no identificador de formato,compoñente (sen corchetes nin espazos despois da coma).';
$string['event_step_shown'] = 'Paso amosado';
$string['event_tour_ended'] = 'Rematou a visita guiada';
$string['event_tour_reset'] = 'Reiniciada a visita guiada';
$string['event_tour_started'] = 'Comezou a visita guiada';
$string['exporttour'] = 'Exportar a visita guiada';
$string['filter_accessdate'] = 'Data de acceso';
$string['filter_accessdate_enabled'] = 'Activar o filtro de data de acceso';
$string['filter_accessdate_enabled_help'] = 'Amosa a visita guiada só aos usuarios novos ou aos usuarios que accederon ao sitio recentemente.';
$string['filter_category'] = 'Categoría';
$string['filter_category_help'] = 'Amosar a visita guiada nunha páxina que estea asociada a un curso da categoría seleccionada.';
$string['filter_course'] = 'Cursos';
$string['filter_course_help'] = 'Amosar a visita guiada nunha páxina que estea asociada ao curso seleccionado.';
$string['filter_courseformat'] = 'Formato do curso';
$string['filter_courseformat_help'] = 'Amosar a visita guiada nunha páxina que estea asociada a un curso usando o formato do curso seleccionado.';
$string['filter_cssselector'] = 'Selector CSS';
$string['filter_cssselector_help'] = 'Amosa a visita guiada só cando se atopa o selector CSS especificado na páxina.';
$string['filter_date_account_creation'] = 'Data de creación da conta de usuario dentro de';
$string['filter_date_first_login'] = 'A primeira data de acceso do usuario dentro de';
$string['filter_date_last_login'] = 'Última data de acceso do usuario dentro de';
$string['filter_header'] = 'Filtros das visitas guiadas';
$string['filter_help'] = 'Seleccione as condicións nas que se amosara a visita guiada. Todos os filtros deben coincidir para que unha visita guiada sexa amosada ao usuario.';
$string['filter_role'] = 'Rol';
$string['filter_role_help'] = 'Unha visita guiada pode estar restrinxida a usuarios con roles seleccionados no contexto onde se amosa a visita guiada. Por exemplo, restrinxir unha visita guiada polo Taboleiro aos usuarios co rol de alumno non funcionará se os usuarios teñen o rol de alumno nun curso (como adoita ser o caso). Unha visita guiada polo Taboleiro só pode restrinxirse a usuarios cun rol do sistema.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Amosar a visita guiada cando o usuario estea a usar un dos temas seleccionados.';
$string['importtour'] = 'Importar a visita guiada';
$string['invalid_lang_id'] = 'ID de cadea de idioma non válido';
$string['left'] = 'Esquerda';
$string['modifyshippedtourwarning'] = 'Esta é unha visita guiada do usuario que foi incluída co Moodle. Calquera modificación que faga pode ser anulada durante a próxima actualización do sitio.';
$string['moodle_language_identifier'] = 'ID de cadea de idioma';
$string['movestepdown'] = 'Mover paso cara abaixo';
$string['movestepup'] = 'Mover paso cara arriba';
$string['movetourdown'] = 'Mover a visita guiada cara abaixo';
$string['movetourup'] = 'Mover a visita guiada cara arriba';
$string['name'] = 'Nome';
$string['name_help'] = 'O nome dunha visita guiada pódese engadir como texto simple, encerrado en etiquetas multilingües (para usar co filtro de contido multilingüe) se é necesario.

Como alternativa, pódese introducir un ID de cadea de idioma co formato identificador, compoñente (sen corchetes nin espazos após a coma).';
$string['newstep'] = 'Novo paso';
$string['newtour'] = 'Crea unha nova visita guiada';
$string['next'] = 'Seguinte';
$string['nextstep'] = 'Seguinte';
$string['nextstep_sequence'] = 'Seguinte ({$a->position}/{$a->total})';
$string['options_heading'] = 'Opcións';
$string['orphan'] = 'Amosar se non se atopou o destino';
$string['orphan_help'] = 'Amosar o paso se non se atopou o destino na páxina.';
$string['pathmatch'] = 'Aplicar á coincidencia  do URL';
$string['pathmatch_help'] = 'As visitas guiadas amosaranse en calquera páxina cuxo URL coincida con este valor.

Pode usar o carácter % como comodín para significar calquera cousa.
Algúns valores de exemplo inclúen:

*/my/% - para coincidir co Taboleiro
*/course/view.php?id=2 - para coincidir cun curso específico
*/mod/forum/view.php% - para coincidir coa lista de debate do foros
*/user/profile.php% - para coincidir coa páxina do perfil de usuario

Se quere amosar unha visita guiada na páxina de inicio do sitio, pode usar o valor: «FRONTPAGE».';
$string['pausetour'] = 'Pausa';
$string['placement'] = 'Colocación';
$string['placement_help'] = 'Un paso pódese situar arriba, abaixo, á esquerda ou á dereita do destino. Recoméndase arriba ou abaixo, xa que se axustan mellor para a pantalla dun móbil.

Se o paso non colle nunha páxina determinada no lugar especificado, colocarase automaticamente noutro lugar.';
$string['pluginname'] = 'Visitas guiadas de usuario';
$string['privacy:metadata:preference:completed'] = 'Data e hora na que un usuario completou por última vez unha visita de usuario.';
$string['privacy:metadata:preference:requested'] = 'Data e hora na que un usuario solicitou manualmente unha visita de usuario manualmente.';
$string['privacy:request:preference:completed'] = 'Vostede marcou por última vez a visita guiada de «{$a->name}» como rematada o {$a->time}';
$string['privacy:request:preference:requested'] = 'Vostede solicitou por última vez a visita guiada de «{$a->name}» o {$a->time}';
$string['reflex'] = 'Proceder ao premer';
$string['reflex_help'] = 'Proceder co seguinte paso cando se prema no destino.';
$string['resettouronpage'] = 'Restabelecer a visita guiada do usuario nesta páxina';
$string['resumetour'] = 'Continuar';
$string['right'] = 'Dereita';
$string['select_block'] = 'Seleccionar un bloque';
$string['selector_defaulttitle'] = 'Introduza un título descritivo';
$string['selectordisplayname'] = 'Un selector CSS que coincida con «{$a}»';
$string['selecttype'] = 'Seleccionar o tipo de paso';
$string['sharedtourslink'] = 'Repositorio de visitas guiadas';
$string['skip'] = 'Omitir';
$string['skip_tour'] = 'Omitir a visita guiada';
$string['target'] = 'Destino';
$string['target_block'] = 'Bloque';
$string['target_heading'] = 'Destino do paso';
$string['target_selector'] = 'Selector';
$string['target_selector_targetvalue'] = 'Selectores CSS';
$string['target_selector_targetvalue_help'] = 'Pódese usar un selector CSS para apuntar a case calquera elemento da páxina. Pódese atopar facilmente o selector axeitado usando as ferramentas de desenvolvemento para o seu navegador web.';
$string['target_unattached'] = 'Amosar no medio da páxina';
$string['targettype'] = 'Tipo de destino';
$string['targettype_help'] = 'Cada paso está asociado a unha parte da páxina, o destino. Os tipos de destino son:

*Bloque - para amosar un paso xunto a un bloque especificado
*Selector CSS - para definir con precisión a área de destino usando CSS
*Amosar no medio da páxina - para un paso que non precisa estar asociado a unha parte específica da páxina';
$string['title'] = 'Título';
$string['title_help'] = 'O título dun paso pode engadirse como texto simple, incluído en etiquetas multilingües (para o seu uso co filtro de contido multilingüe) se é necesario.

Como alternativa, pode introducirse un ID de cadea de idioma no identificador de formato, compoñente (sen parénteses nin espazo após a coma).';
$string['tour1_content_addingblocks'] = 'De feito, pense detidamente en incluír calquera bloque nas súas páxinas. Os bloques non se amosan na apli Moodle, polo que por regra xeral é moito mellor asegurarse de que o seu sitio funcione ben sen bloques.';
$string['tour1_content_blockregion'] = 'Aquí aínda hai unha área de bloques. Recomendamos eliminar completamente os bloques de Navegación e Administración, xa que toda a funcionalidade está noutros lugares do tema Boost.';
$string['tour1_content_customisation'] = 'Para personalizar o aspecto do seu sitio e da páxina de inicio do sitio, utilice o menú de configuración no canto desta cabeceira. Probe a activar a edición agora mesmo.';
$string['tour1_content_end'] = 'Este é o final da súa visita guiada de usuario. Non se amosará de novo a non ser que o restabeleza usando a ligazón no rodapé da páxina. Como administrador tamén pode crear as súas propias visitas guiadas coma esta.';
$string['tour1_content_navigation'] = 'A navegación principal pasa agora por este caixón de navegación. Os contidos actualízanse dependendo de onde se atope no sitio. Use o botón na parte superior para agochalo ou amosalo.';
$string['tour1_content_welcome'] = 'Benvido ao tema Boost. Se actualizou dende unha versión anterior, pode que algunhas cousas parezan un pouco diferentes con este tema.';
$string['tour1_title_addingblocks'] = 'Engadindo bloques';
$string['tour1_title_blockregion'] = 'Área de bloque';
$string['tour1_title_customisation'] = 'Personalización';
$string['tour1_title_end'] = 'Fin da visita guiada';
$string['tour1_title_navigation'] = 'Navegación';
$string['tour1_title_welcome'] = 'Benvido/a';
$string['tour2_content_addblock'] = 'Se activa a edición pode engadir bloques no caixón de navegación. Non obstante, pense detidamente en incluír calquera bloque nas súas páxinas. Os bloques non se amosan na apli Moodle, polo que por regra xeral é moito mellor asegurarse de que o seu curso funcione ben sen bloques..';
$string['tour2_content_addingblocks'] = 'Pode engadir bloques a esta páxina mediante este botón. Non obstante, pense detidamente en incluír calquera bloque nas súas páxinas. Os bloques non se amosan na apli Moodle, polo que por regra xeral é moito mellor asegurarse de que o seu curso funcione ben sen bloques..';
$string['tour2_content_customisation'] = 'Para cambiar os axustes do curso, use o menú de axustes no canto desta cabeceira. Tamén atopará un menú de axustes semellante na páxina de inicio de cada actividade. Proba a activar a edición agora mesmo.';
$string['tour2_content_end'] = 'Este é o final da súa visita guiada de usuario. Non se amosará de novo a non ser que o restabeleza usando a ligazón no rodapé da páxina. O administrador do sitio tamén pode crear máis visitas guiadas para este sitio se for necesario.';
$string['tour2_content_navigation'] = 'A navegación pasa agora por este caixón de navegación. Use o botón na parte superior para agochalo ou amosalo. Verá que hai ligazóns para seccións do seu curso.';
$string['tour2_content_opendrawer'] = 'Probe a abrir agora o caixón de navegación.';
$string['tour2_content_participants'] = 'Vexa aquí os participantes. Aquí é tamén onde vai engadir ou retirar alumnos.';
$string['tour2_content_welcome'] = 'Benvido ao tema Boost. Se a súa páxina foi actualizada dende unha versión anterior, pode que as cousas parezan un pouco diferentes aquí na páxina do curso.';
$string['tour2_title_addblock'] = 'Engadir un bloque';
$string['tour2_title_addingblocks'] = 'Engadindo bloques';
$string['tour2_title_customisation'] = 'Personalización';
$string['tour2_title_end'] = 'Fin da visita guiada';
$string['tour2_title_navigation'] = 'Navegación';
$string['tour2_title_opendrawer'] = 'Abre o caixón de navegación';
$string['tour2_title_participants'] = 'Participantes no curso';
$string['tour2_title_welcome'] = 'Benvido/a';
$string['tour3_content_dashboard'] = 'O seu novo panel de traballo ten moitas funcións para axudarlle a acceder facilmente á información máis importante para vostede.';
$string['tour3_content_displayoptions'] = 'Os cursos pódense ordenar por nome do curso, nome abreviado do curso ou data do último acceso.

Tamén pode optar por amosar os cursos nunha lista, con información de resumo, ou a vista predeterminada da «tarxeta».';
$string['tour3_content_overview'] = 'O bloque de vista xeral do curso amosa todos os cursos nos que esta inscrito.

Pode escoller amosar os cursos que están actualmente en proceso, estiveron no pasado ou estarán no futuro, ou os cursos que destacou.';
$string['tour3_content_recentcourses'] = 'O bloque de cursos de recente acceso amosa os cursos que visitou por última vez, permítelle ir directamente a el de novo.';
$string['tour3_content_starring'] = 'Pode escoller entre marcar un curso para destacalo ou agochar un curso que xa non é importante para vostede.

Estas accións só afectan a túa vista.

Tamén pode optar por amosar os cursos nunha lista, ou con información resumida, ou a vista predeterminada da «tarxeta».';
$string['tour3_content_timeline'] = 'O bloque da liña temporal amosa os seus próximos eventos importantes.

Pode escoller amosar as actividades na próxima semana, mes ou máis adiante.

Tamén pode amosar os elementos que están atrasados.';
$string['tour3_title_dashboard'] = 'O seu Taboleiro';
$string['tour3_title_displayoptions'] = 'Opcións de presentación:';
$string['tour3_title_overview'] = 'Vista xeral do curso';
$string['tour3_title_recentcourses'] = 'Cursos de acceso recente';
$string['tour3_title_starring'] = 'Cursos destacados e agochados';
$string['tour3_title_timeline'] = 'Bloque de cronoloxía';
$string['tour4_content_groupconvo'] = 'Se é membro dun grupo coa mensaxería de grupo activada, verá as conversas de grupo aquí.

As conversas por grupos de cursos permítenlle interactuar cos demais do seu grupo nun lugar privado e cómodo.';
$string['tour4_content_icon'] = 'Pode acceder ás súas mensaxes dende calquera páxina usando esta icona.

Se ten mensaxes sen ler, tamén se amosará aquí o número de mensaxes sen ler.

Prema na icona para abrir o caixón de mensaxes e continuar a visita guiada.';
$string['tour4_content_messaging'] = 'Entre as novas funcións de mensaxería inclúese a mensaxería de grupo dentro dun curso e un mellor control sobre quen pode enviarlle unha mensaxe.';
$string['tour4_content_settings'] = 'Pode acceder aos seus axustes de mensaxería a través da icona da roda dentada/engrenaxe. Un novo axuste da privacidade permite restrinxir quen pode enviarlle mensaxes.';
$string['tour4_content_starred'] = 'Pode escoller destacar conversas específicas para que sexan máis doadas de atopar.';
$string['tour4_title_groupconvo'] = 'Grupo de mensaxes';
$string['tour4_title_icon'] = 'Mensaxería';
$string['tour4_title_messaging'] = 'Nova interface de mensaxería';
$string['tour4_title_settings'] = 'Axustes da mensaxería';
$string['tour4_title_starred'] = 'Destacado';
$string['tour_activityinfo_activity_student_content'] = 'As datas das actividades e o que hai que facer para completar a actividade amósanse na páxina da actividade.';
$string['tour_activityinfo_activity_student_title'] = 'Novo: información da actividade';
$string['tour_activityinfo_activity_teacher_content'] = 'As datas das actividades e as condicións de realización agora amósanse para os alumnos en cada páxina de actividade (e opcionalmente na páxina do curso).

Para as actividades que requiren que os alumnos marquen manualmente unha actividade como completada, amosase un botón «Marcar como feito» na páxina da actividade.';
$string['tour_activityinfo_activity_teacher_title'] = 'Novo: información da actividade';
$string['tour_activityinfo_course_student_content'] = 'As datas das actividades e/ou que facer para completar a actividade aparecen na páxina do curso.';
$string['tour_activityinfo_course_student_title'] = 'Novo: información da actividade';
$string['tour_activityinfo_course_teacher_content'] = 'As novas configuracións do curso «Amosar as condicións de completado» e «Amosar as datas de actividade» permítenlle escoller se as condicións de completado da actividade (se se estabelecen) e/ou as datas se amosan para os alumnos na páxina do curso.';
$string['tour_activityinfo_course_teacher_title'] = 'Novo: información da actividade';
$string['tour_final_step_content'] = 'Este é o final da súa visita guiada de usuario. Non se amosará de novo a non ser que o restabeleza usando a ligazón no rodapé da páxina.';
$string['tour_final_step_title'] = 'Fin da visita guiada';
$string['tour_gradebook_action_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_action_menu::tool_usertours@@</div>Ordenar as columnas e escoller cales amosar. No modo editar, use este atallo para acceder a tarefas frecuentes relacionadas coa vista e edición de elementos de cualificación.';
$string['tour_gradebook_action_title'] = 'Ligazóns rápidas a accións';
$string['tour_gradebook_filter_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_initials::tool_usertours@@</div>Filtrar o alumnado polas iniciais do seu nome ou apelido.';
$string['tour_gradebook_filter_title'] = 'Filtrar por nome';
$string['tour_gradebook_search_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_search::tool_usertours@@</div>Use a caixa de busca para atopar rapidamente alumnos específicos.';
$string['tour_gradebook_search_title'] = 'Atopar alumnos doadamente';
$string['tour_gradebook_tour_description'] = 'Características de busca e navegación no informe de cualificacións do Libro de cualificacións';
$string['tour_gradebook_tour_name'] = 'Informe de cualificacións do Libro de cualificacións';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Publique aquí as noticias importantes.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Algo que contarlle a todos?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Engada contido novo ou edite o contido existente.';
$string['tour_navigation_course_edit_teacher_title'] = 'Activar o modo de edición';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Navegue polas actividades e faga un seguimento do seu progreso.';
$string['tour_navigation_course_index_student_title'] = 'Atope o seu camiño';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Arrastre e solte as actividades para reordenar o contido do curso.';
$string['tour_navigation_course_index_teacher_title'] = 'Índice do curso';
$string['tour_navigation_course_student_tour_des'] = 'Onde navegar a través das actividades dun curso';
$string['tour_navigation_course_student_tour_name'] = 'Índice do curso';
$string['tour_navigation_course_teacher_tour_des'] = 'Modo de edición, arrastrar e soltar actividades e publicar anuncios nun curso';
$string['tour_navigation_course_teacher_tour_name'] = 'Edición do curso';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Este panel lateral pode conter máis funcións.';
$string['tour_navigation_dashboard_title'] = 'Expandir para explorar';
$string['tour_navigation_dashboard_tour_des'] = 'Onde se poden atopar os bloques';
$string['tour_navigation_dashboard_tour_name'] = 'Caixón de bloques';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Engadir, copiar, eliminar e agochar cursos deste menú.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Entendo';
$string['tour_navigation_mycourses_title'] = 'Cursos e categorías';
$string['tour_navigation_mycourses_tour_des'] = 'Opcións de xestión de cursos na páxina Os meus cursos';
$string['tour_navigation_mycourses_tour_name'] = 'Xestión do curso';
$string['tour_resetforall'] = 'Restabeleceuse o estado da visita guiada. Amosarase de novo a todos os usuarios.';
$string['tourconfig'] = 'Ficheiro de configuración da visita guiada para importar';
$string['tourisenabled'] = 'A visita guiada está activada';
$string['tourlist_explanation'] = 'Podes crear tantas visitas guiadas como queira e activalas para diferentes partes de Moodle. Só é posíbel pode crear unha visita guiada por páxina.';
$string['tours'] = 'Visitas guiadas';
$string['usertours'] = 'Visitas guiadas de usuario';
$string['usertours:managetours'] = 'Crear, editar e retirar visitas guiadas de usuario';
$string['viewtour_edit'] = 'Pode <a href="{$a->editlink}">editar os valores predeterminados da visita guiada</a> e <a href="{$a->resetlink}">forzar que a visita guiada se amose</a> de novo a todos os usuarios.';
$string['viewtour_info'] = 'Esta é a visita guiada «{$a->tourname}». Aplícase á ruta «{$a->path}».';
