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
 * Strings for component 'block_mrbs', language 'gl', version '4.4'.
 *
 * @package     block_mrbs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about_mrbs'] = 'Sobre MRBS';
$string['accessdenied'] = 'Acceso denegado';
$string['accessmrbs'] = 'Planificar un recurso (Sala de computadores)';
$string['addarea'] = 'Engadir un espazo';
$string['addentry'] = 'Engadir entrada';
$string['addroom'] = 'Engadir unha sala';
$string['adminview'] = 'Cal é o URL da instalación do MRBS?';
$string['advanced_search'] = 'Busca avanzada';
$string['all_day'] = 'Todos os días';
$string['area'] = 'Espazo';
$string['area_admin_email'] = 'Correo do administrador do espazo';
$string['areas'] = 'Espazos';
$string['backadmin'] = 'Volver a administración';
$string['bgcolor'] = 'cor de fondo';
$string['blockname'] = 'Planificación de recursos';
$string['booking_users'] = 'Usuarios que poden facer reservas';
$string['booking_users_help'] = 'Isto debe ser unha lista separada por comas dos enderezos de correo dos usuarios que están autorizados a reservar esta sala. Déixeo en branco para permitir que todos os usuarios poidan reservar esta sala.';
$string['bookingmoved'] = 'Unha das súas reservas trasladouse';
$string['bookingmovedmessage'] = 'A súa reserva {$a->name} trasladouse da sala {$a->oldroom} para a sala {$a->newroom} en {$a->area} para a lección o {$a->date}, as {$a->starttime}. A sala requiriuna {$a->newbookingname}. AVISO: este traslado fíxoo un computador facendo a mellor estimación calculábel, antes da lección comprobe que a sala é axeitada';
$string['bookingmovedshort'] = '{$a->name} trasladada a {$a->newroom}';
$string['bookingmoveerror'] = 'PRODUCIUSE UN ERRO NA RESERVA DA SALA';
$string['bookingmoveerrormessage'] = 'Produciuse un erro ao trasladar {$a->name} (id: {$a->id})';
$string['bookingmoveerrorshort'] = 'Produciuse un erro ao trasladar {$a->name}.  O administrador xa foi informado.';
$string['bookingsfor'] = 'Reservas para';
$string['bookingsforpost'] = '--cadea non usada--';
$string['both'] = 'Ambas';
$string['brief_description'] = 'Descrición breve.';
$string['browserlang'] = 'O seu navegador está configurado para utilizar';
$string['capacity'] = 'Aforo';
$string['charset'] = 'UTF-8';
$string['clash'] = 'Colisión: {$a->oldbooking} {$a->newbooking} {$a->time} na sala: {$a->room}';
$string['clashemailbody'] = 'Por mor dunha recente importación do horario, hai unha colisión que afecta a unha das súas reservas: En {$a->time}, {$a->oldbooking} e {$a->newbooking} coinciden ambas reservas da sala {$a->room}. Resolvan isto entre vostedes con antelación para evitar interrupcións innecesarias. ESTE SERÁ O ÚNICO AVISO DESTA COLISIÓN. IGNORAR ESTE AVISO PODE TER CONSECUENCIAS IMPORTANTES. Esta mensaxe foi enviada de forma automática polo sistema de reservas en liña de salas, se pensa que recibiu esta mensaxe por un erro, póñase en contacto con {$a->admin}';
$string['clashemailnotsent'] = 'NON FOI POSÍBEL ENVIAR O CORREO AO PROFESOR DE';
$string['clashemailsent'] = 'correo enviado a';
$string['clashemailsub'] = 'Alerta de colisión de sala';
$string['class'] = 'clase';
$string['click_to_reserve'] = 'Prema sobre a cela para facer unha reserva.';
$string['computerroom'] = 'Só salas de computadores';
$string['computerrooms'] = 'Salas de computadoras';
$string['config_admin'] = 'Administrador';
$string['config_admin2'] = 'Nome do administrador do MRBS';
$string['config_admin_email'] = 'Correo do administrador';
$string['config_admin_email2'] = 'Enderezo de correo do administrador do MRBS. Para recibir notificacións do MRBS, o enderezo de correo ten que estar asociado cunha conta de usuario de Moodle.';
$string['config_area_list_format'] = 'Amosar a lista de espazos';
$string['config_area_list_format2'] = 'Quere que os espazos se amosen como un listado ou como un despregábel de selección?';
$string['config_cookie_path_override'] = 'Sobrescribir a ruta da cookie';
$string['config_cookie_path_override2'] = 'Se activa este valor, será utilizado polo esquema da sesión «php» para anular o comportamento predeterminado para determinar automaticamente a ruta da cookie que usar.';
$string['config_date_ddmmyy'] = '10 de xullo';
$string['config_date_mmddyy'] = 'xullo 10';
$string['config_dateformat'] = 'Formato da data';
$string['config_dateformat2'] = 'Formato da data que usar por MRBS.';
$string['config_default_report_days'] = 'Informe duración (días)';
$string['config_default_report_days2'] = 'Informe da duración predeterminado en días';
$string['config_default_room'] = 'Sala predeterminada';
$string['config_default_room2'] = 'Defina que sala se amosará de xeito predeterminado no inicio (utilizado por index.php). O números de sala poden ser identificados ollando no URL de Editar ou Eliminar na páxina de administración.';
$string['config_default_view'] = 'Vista predeterminada';
$string['config_default_view2'] = 'Defina a vista predeterminada no inicio (mensual, semanal o diaria)';
$string['config_enable_periods'] = 'Usar períodos';
$string['config_enable_periods2'] = 'Utilice períodos personalizados para planificar un horario. Se o estabelece a «non», MRBS planificará utilizando bloques de tempo';
$string['config_entry_type'] = 'Tipo de entrada {$a}';
$string['config_entry_type2'] = 'Estes tipos de actividade aparecen na xanela «Engadir entrada». De xeito predeterminado, a cada tipo de entrada asignáselle unha cor diferente. Os tipos amósanse na seguinte orde: «Entrada A», «Entrada B», «Entrada C», etc.';
$string['config_eveningends'] = 'Hora final';
$string['config_eveningends2'] = 'Hora de finalización (hora) durante o día. Debe desactivar os períodos para utilizar esta opción.';
$string['config_eveningends_min'] = 'Minuto final';
$string['config_eveningends_min2'] = 'Hora de finalización (minutos) durante o día, debe desactivar os períodos para utilizar esta opción.';
$string['config_highlight_method'] = 'Método de resaltado';
$string['config_highlight_method2'] = 'Escolla un dos seguintes métodos de resaltado: cor de fondo, clase o híbrido.';
$string['config_javascript_cursor'] = 'Cursor JavaScript';
$string['config_javascript_cursor2'] = 'Cámbieo a «falso» se os clientes teñen versións antigas de navegadores web incompatíbeis con JavaScript.';
$string['config_mail_admin_all'] = 'Notificar todo ao administrador';
$string['config_mail_admin_all2'] = 'Enviar un correo ao administrador cando haxa calquera cambio';
$string['config_mail_admin_on_bookings'] = 'Mensaxe ao administrador de reservas';
$string['config_mail_admin_on_bookings2'] = 'Enviar un correo ao administrador notificando unha nova reserva';
$string['config_mail_admin_on_delete'] = 'Notificar eliminacións ao administrador';
$string['config_mail_admin_on_delete2'] = 'Enviar un correo ao administrador do espazo notificando as eliminacións';
$string['config_mail_area_admin_on_bookings'] = 'Notificar ao administrador do espazo';
$string['config_mail_area_admin_on_bookings2'] = 'Enviar un correo ao administrador do espazo notificando unha nova reserva';
$string['config_mail_booker'] = 'Notificar ao planificador';
$string['config_mail_booker2'] = 'Enviar un correo ao planificador dunha nova reserva';
$string['config_mail_cc'] = 'Correo con copia (cc)';
$string['config_mail_cc2'] = 'Estabelecer os enderezos de correo no campo CC (copia ao carbón). De xeito predeterminado está baleiro. De xeito semellante aos destinatarios de correo, pode definir máis dun destinatario. Non esqueza que os enderezos de correo teñen que estar asociados a unha conta do Moodle.';
$string['config_mail_details'] = 'Detalles do correo';
$string['config_mail_details2'] = 'Detalles do correo';
$string['config_mail_from'] = 'Correo de';
$string['config_mail_from2'] = 'Estabelecer o enderezo de correo do campo «De». De xeito predeterminado será o do administrador do sitio. Debe estar asociado a unha conta de usuario do Moodle.';
$string['config_mail_recipients'] = 'Destinatarios do correo';
$string['config_mail_recipients2'] = 'Estabeleza o correo do destinatario. Pode definir máis dun destinatario así «afonso@rodriguez.gal, lois@terra.com». O(s) destinatario(s) de correo debe(n) estar asociado(s) a unha conta de usuario de Moodle.';
$string['config_mail_room_admin_on_bookings'] = 'Notificar ao administrador da sala';
$string['config_mail_room_admin_on_bookings2'] = 'Enviar un correo ao administrador da sala notificando unha nova reserva';
$string['config_max_advance_days'] = 'Máximo de reservas con antelación';
$string['config_max_advance_days2'] = 'O número máximo de días de antelación cos que se pode facer unha reserva (-1) para desactivar';
$string['config_max_rep_entrys'] = 'Número máx.de repetición de entradas';
$string['config_max_rep_entrys2'] = 'Máximo de repetición de entradas (máximo necesario +1)';
$string['config_monthly_view_entries_details'] = 'Ver detalles mensuais';
$string['config_monthly_view_entries_details2'] = 'As entradas na vista mensual poden ser amosadas como intervalo inicio/fin, descrición breve ou de ambas maneiras. Seleccione «descrición» para descrición breve, «intervalo» para intervalo de tempo ou «ambas». O xeito predeterminado é «ambas», mais amosaranse 6 entradas por día no canto de 12.';
$string['config_morningstarts'] = 'Hora de inicio';
$string['config_morningstarts2'] = 'Hora de inicio (hora) durante o día. Debe desactivar os períodos para utilizar esta opción.';
$string['config_morningstarts_min'] = 'Minuto de inicio';
$string['config_morningstarts_min2'] = 'Hora de inicio (minutos) durante o día, debe desactivar os períodos para utilizar esta opción.';
$string['config_new_window'] = 'Xanela';
$string['config_new_window2'] = 'Cando se estabelece «Nova xanela», o bloque MRBS abrirase nunha nova xanela do navegador. Cando se estabelece «A mesma xanela», o bloque MRBS amosarase dentro do Moodle coas cabeceiras de Moodle.';
$string['config_periods'] = 'Períodos personalizados';
$string['config_periods2'] = 'Defina o nome ou descrición dos seus períodos en orde cronolóxica.  Poña unha entrada en cada liña.';
$string['config_refresh_rate'] = 'Tempo de actualización da páxina';
$string['config_refresh_rate2'] = 'Tempo de actualización da páxina (en segundos). Estabelézao a 0 para desactivalo';
$string['config_resolution'] = 'Intervalos de tempo';
$string['config_resolution2'] = 'Intervalos de tempo para planificar un horario. Debe desactivar os períodos para utilizar esta opción.';
$string['config_search_count'] = 'Resultados da busca por páxina';
$string['config_search_count2'] = 'Resultados por páxina das buscas';
$string['config_show_plus_link'] = 'Amosar a ligazón máis (+)';
$string['config_show_plus_link2'] = 'Cambie a «verdadeiro» (true) para amosar o signo (+) como unha ligazón';
$string['config_timeformat'] = 'Formato da hora';
$string['config_timeformat2'] = 'Formato da hora que usar por MRBS.';
$string['config_times_right_side'] = 'Hora na dereita';
$string['config_times_right_side2'] = 'Para amosar as horas no lado dereito no día e na vista semanal, estabelézao como «Yes» (Si)';
$string['config_view_week_number'] = 'Ver o número da semana';
$string['config_view_week_number2'] = 'Para ver as semanas na parte inferior (trailer.php) como un número (42) no canto de «primeiro día da semana» (13 Oct), estabelézao a TRUE (verdadeiro)';
$string['config_weeklength'] = 'Lonxitude da semana';
$string['config_weeklength2'] = 'Cantos días da semana deben amosarse?';
$string['config_weekstarts'] = 'Comezo da semana';
$string['config_weekstarts2'] = 'Seleccione o día de inicio da semana.';
$string['confirmdel'] = 'Confirma que quere eliminar esta entrada?';
$string['conflict'] = 'A nova reserva está en conflito coa(s) seguinte(s) entrada(s)';
$string['createdby'] = 'Creado por';
$string['cronfile'] = 'Localización do ficheiro de importación da sesión';
$string['cronfiledesc'] = 'Si quere utilizar a función de importación automática de sesión, escriba aquí a localización do ficheiro. O ficheiro debe ser quen de ser movido polo usuario do servidor web. Ao entrar na localización, activaranse os tipos especiais de reservas para as importadas';
$string['ctrl_click'] = 'Use Control-Clic para seleccionar máis dunha sala';
$string['ctrl_click_type'] = 'Use Control-Clic para seleccionar máis dun tipo';
$string['database'] = 'Base de datos';
$string['dayafter'] = 'Ir ao día seguinte';
$string['daybefore'] = 'Ir ao día anterior';
$string['days'] = 'días';
$string['delarea'] = 'Debe eliminar todas as salas neste espazo para poder eliminar o espazo<p>';
$string['delete_user'] = 'Eliminar este usuario';
$string['deleteentry'] = 'Eliminar entrada';
$string['deletefollowing'] = 'Eliminaranse as seguintes reservas';
$string['deleteseries'] = 'Eliminar serie';
$string['dontshowoccupied'] = 'Non amosar as salas ocupadas';
$string['doublebookebody'] = 'O usuario {$a->user} fixo unha dobre reserva da sala, {$a->room}, para as {$a->time} do {$a->date}. Isto colide coa súa reserva para {$a->oldbooking}. O usuario fixo a reserva da sala para {$a->newbooking}. Se isto non é un problema, non é preciso facer nada. Porén, se vostede non agardaba que sucedera isto, contacte co usuario para resolver o conflito. Esta mensaxe foi enviada de forma automática polo sistema de reservas en liña de salas, se pensa que recibiu esta mensaxe por erro, póñase en contacto con {$a->admin}';
$string['doublebookefailbody'] = 'Non foi posíbel enviar a seguinte mensaxe a {$a}:';
$string['doublebookefailsubject'] = 'Non foi posíbel notificar a dobre reserva';
$string['doublebookesubject'] = 'Notificación de dobre reserva';
$string['duration'] = 'Duración';
$string['edit_user'] = 'Editar usuario';
$string['editarea'] = 'Editar espazo';
$string['editentry'] = 'Editar entrada';
$string['editingserieswarning'] = 'Neste momento está editando unha soa entrada nunha serie, prema aquí para editar a serie no seu canto:';
$string['editroom'] = 'Editar sala';
$string['editroomarea'] = 'Editar a descrición do espazo ou sala';
$string['editseries'] = 'Editar series';
$string['email_failed'] = 'Produciuse un erro ao enviar o correo';
$string['end_date'] = 'Hora de finalización';
$string['entries_found'] = 'atopáronse entradas';
$string['entry'] = 'Entrada';
$string['entry_found'] = 'atopouse unha entrada';
$string['entryid'] = 'ID da entrada';
$string['error_area'] = 'Erro: espazo';
$string['error_room'] = 'Erro: sala';
$string['error_send_email'] = 'Erro: Xurdiu un problema ao enviar un correo a: {$a}';
$string['eventbookingcreated'] = 'Reserva creada';
$string['eventbookingupdated'] = 'Reserva actualizada';
$string['external'] = 'Sen clase';
$string['failed_connect_db'] = 'Erro grave: Non foi posíbel conectar coa base de datos';
$string['failed_to_acquire'] = 'Non foi posíbel ter acceso exclusivo á base de datos';
$string['findroom'] = 'Atopar unha sala';
$string['finishedimport'] = 'Procesado completo, tempo empregado: {$a} segundos';
$string['for_any_questions'] = 'para calquera dúbida que non estea respondida aquí.';
$string['forciblybook'] = 'Reservar a sala á forza';
$string['forciblybook2'] = 'Reservar á forza (trasladará automaticamente outras reservas)';
$string['fulldescription'] = 'Descrición completa:<br>&nbsp;&nbsp;(Número de persoas,<br>&nbsp;&nbsp;Interna/Externa, etc)';
$string['goroom'] = 'Ir';
$string['goto'] = 'ir a';
$string['gotoroom'] = 'Ir a';
$string['gotothismonth'] = 'ir ao mes actual';
$string['gotothisweek'] = 'ir á semana actual';
$string['gototoday'] = 'Ir ao día de hoxe';
$string['help_wildcard'] = 'Nota: Utilice o símbolo % como comodín en calquera das caixas de texto';
$string['highlight_line'] = 'Resaltar esta liña';
$string['hours'] = 'horas';
$string['hybrid'] = 'híbrido';
$string['idontcare'] = 'Non ten importancia, facer a dobre reserva de sala(s)';
$string['importedbooking'] = 'Reservas importadas';
$string['importedbookingmoved'] = 'Reservas importadas (editadas)';
$string['importlog'] = 'Rexistro de importación do MRBS';
$string['in'] = 'en';
$string['include'] = 'Incluír';
$string['internal'] = 'Clase';
$string['invalid_booking'] = 'Reserva incorrecta';
$string['invalid_entry_id'] = 'ID de entrada incorrecto.';
$string['invalid_search'] = 'Cadea de busca baleira ou incorrecta.';
$string['invalid_series_id'] = 'ID de serie incorrecto.';
$string['mail_body_changed_entry'] = 'Modificouse unha entrada; aquí ten os detalles';
$string['mail_body_del_entry'] = 'Eliminouse unha entrada; aquí ten os detalles';
$string['mail_body_new_entry'] = 'Fíxose unha nova reserva; aquí ten os detalles';
$string['mail_changed_entry'] = 'Modificouse unha entrada; aquí ten os detalles';
$string['mail_deleted_entry'] = 'Eliminouse unha entrada; aquí ten os detalles';
$string['mail_new_entry'] = 'Fíxose unha nova reserva; aquí ten os detalles';
$string['mail_subject'] = 'Asunto';
$string['mail_subject_delete'] = 'Eliminouse a entrada para {$a->date}, {$a->room} (reservada por {$a->user})';
$string['mail_subject_entry'] = 'Cambiouse a entrada para {$a->date}, {$a->room} (por {$a->user})';
$string['mail_subject_newentry'] = 'Engadiuse unha entrada para {$a->date}, {$a->room} (por {$a->user})';
$string['match_area'] = 'Coincidir co espazo';
$string['match_descr'] = 'Coincidir coa descrición completa';
$string['match_entry'] = 'Coincidir coa descrición breve';
$string['match_room'] = 'Coincidir coa sala';
$string['match_type'] = 'Coincidir co tipo';
$string['mincapacity'] = 'Aforo mínimo';
$string['minutes'] = 'minutos';
$string['month'] = 'Mes';
$string['monthafter'] = 'Ir ao mes seguinte';
$string['monthbefore'] = 'Ir ao mes anterior';
$string['movedto'] = 'trasladado a';
$string['mrbs'] = 'Sistema de reservas da sala de xuntas';
$string['mrbs:addinstance'] = 'Engadir o bloque MRBS á páxina «O meu Moodle»';
$string['mrbs:administermrbs'] = 'Acceso a MRBS (lectura / escritura / administración)';
$string['mrbs:doublebook'] = 'Dobre reserva de salas';
$string['mrbs:editmrbs'] = 'Acceso a MRBS (lectura / escritura)';
$string['mrbs:editmrbsunconfirmed'] = 'Crear só reservas «sen confirmar» (sobrescrito por «editmrbs»)';
$string['mrbs:forcebook'] = 'Forzar a reserva de salas (traslada automaticamente as reservas existentes)';
$string['mrbs:ignoremaxadvancedays'] = 'Ignorar o axuste «max_advance_days»';
$string['mrbs:myaddinstance'] = 'Engadir un novo bloque MRBS';
$string['mrbs:viewalltt'] = 'Ver os horarios de todos os usuarios';
$string['mrbs:viewmrbs'] = 'Acceso a MRBS (só lectura)';
$string['mrbsadmin'] = 'Administrador MRBS';
$string['mrbsadmin_desc'] = 'Os usuarios con este rol (a nivel do sistema) poden configurar completamente un horario MRBS: crear espazos e salas, editar as reservas doutras persoas, reservas á forza e dobres reservas de salas';
$string['mrbseditor'] = 'Editor do MRBS';
$string['mrbseditor_desc'] = 'Os usuarios con este rol (respecto do sistema) poden facer reservas empregando MRBS e editar outras reservas';
$string['mrbsviewer'] = 'Visor do MRBS';
$string['mrbsviewer_desc'] = 'Os usuarios con este rol (a nivel do sistema) poden ver os horarios do MRBS, mais non poden facer ningún cambio';
$string['must_set_description'] = 'Debe introducir unha descrición';
$string['must_set_name'] = 'Debe introducir un nome';
$string['mustlogin'] = 'Ten que autenticarse no Moodle antes de poder acceder ao calendario do MRBS';
$string['namebooker'] = 'Reservado por';
$string['newwindow'] = 'Nova xanela';
$string['no_rooms_for_area'] = 'Non foi definida ningunha sala para este espazo';
$string['no_user_with_email'] = 'Non se atopou ningún usuario de Moodle co correo: {$a}. Todos os correos relacionados co MRBS teñen que estar asociados a unha conta de usuario do Moodle.';
$string['no_users_create_first_admin'] = 'Crear un usuario co rol de administrador para que poida a súa vez crear máis usuarios.';
$string['no_users_initial'] = 'Non hai ningún usuario na base de datos, permitindo a creación dun usuario inicial';
$string['noarea'] = 'Non hai un espazo seleccionado';
$string['noareas'] = 'Sen espazos';
$string['norights'] = 'Non ten permisos abondo para modificar este elemento.';
$string['norooms'] = 'Sen salas.';
$string['noroomsfound'] = 'Non se atopou ningunha sala';
$string['not_found'] = 'non atopado';
$string['not_php3'] = '<H1>AVISO: É probábel que non funcione con PHP3</H1>';
$string['notallcreated'] = 'Algunhas reservas fixéronse con demasiada antelación - {$a->created} excede {$a->requested} reservas creadas';
$string['notallowedbook'] = 'Vostede non está na lista de usuarios que poden reservar esta sala';
$string['of'] = 'de';
$string['pagewindow'] = 'A mesma xanela';
$string['password_twice'] = 'Se quere cambiar o contrasinal, escriba o novo contrasinal dúas veces';
$string['period'] = 'Período';
$string['periods'] = 'periodos';
$string['please_contact'] = 'Póñase en contacto';
$string['pluginname'] = 'MRBS';
$string['postbrowserlang'] = 'idioma.';
$string['ppreview'] = 'Vista previa da impresión';
$string['records'] = 'Rexistros';
$string['rep_dsp'] = 'Presentar no informe';
$string['rep_dsp_dur'] = 'Duración';
$string['rep_dsp_end'] = 'Hora de finalización';
$string['rep_end_date'] = 'Data da fin da repetición';
$string['rep_for_nweekly'] = '(para n-semanas)';
$string['rep_for_weekly'] = '(para (n-)semanas)';
$string['rep_freq'] = 'Frecuencia';
$string['rep_num_weeks'] = 'Número de semanas';
$string['rep_rep_day'] = 'Día de repetición';
$string['rep_type'] = 'Tipo de repetición';
$string['rep_type_0'] = 'Ningún';
$string['rep_type_1'] = 'Diariamente';
$string['rep_type_2'] = 'Semanalmente';
$string['rep_type_3'] = 'Mensualmente';
$string['rep_type_4'] = 'Anualmente';
$string['rep_type_5'] = 'Mensual, no mesmo día';
$string['rep_type_6'] = 'n-semanas';
$string['repeat_id'] = 'Repetir ID';
$string['report_and_summary'] = 'Informe e resumo';
$string['report_end'] = 'Data da fin do informe';
$string['report_on'] = 'Informe de xuntanzas';
$string['report_only'] = 'Só o informe';
$string['report_start'] = 'Día de inicio do informe';
$string['requestvacate'] = 'Solicitar que esta reserva se traslade';
$string['requestvacatemessage'] = '{$a->user} solicita que {$a->description} sexa trasladada de sala {$a->room}, {$a->datetime}. Póñase en contacto con el para acordalo. [Expoña a súa razón]';
$string['requestvacatemessage_html'] = '{$a->user} solicita que <a href="{$a->href}">{$a->description}</a> sexa trasladada de sala {$a->room}, {$a->datetime}. Póñase en contacto con el para acordalo.<br /><br />[Expoña a súa razón]';
$string['resolution_units'] = 'Minutos';
$string['returncal'] = 'Volver á vista de calendario';
$string['returnprev'] = 'Volver á páxina anterior';
$string['rights'] = 'Dereitos';
$string['room'] = 'Sala';
$string['room_admin_email'] = 'Correo do administrador da sala';
$string['roomchange'] = 'Marcar como cambio de sala';
$string['rooms'] = 'Salas';
$string['roomsearch'] = 'Buscar salas';
$string['roomsfree'] = 'Salas libres...';
$string['sched_conflict'] = 'Conflito de planificación';
$string['search_for'] = 'Buscar por';
$string['search_results'] = 'Buscar resultados por';
$string['seconds'] = 'segundos';
$string['serverpath'] = 'Ruta de instalación do MRBS';
$string['show_my_entries'] = 'Prema para amosar todas as súas reservas enviadas';
$string['slot'] = 'Intervalo';
$string['sort_rep'] = 'Ordenar os informes por';
$string['sort_rep_time'] = 'Data/hora de inicio';
$string['specialroom'] = 'Excluír as salas especiais';
$string['start_date'] = 'Hora de inicio';
$string['startedimport'] = 'Ficheiro atopado, iniciando o proceso de importación...';
$string['submitquery'] = 'Executar informe';
$string['sum_by_creator'] = 'Creador';
$string['sum_by_descrip'] = 'Descrición breve';
$string['summarize_by'] = 'Resumir por';
$string['summary_header'] = 'Resumo de horas reservadas';
$string['summary_header_per'] = 'Resumo de períodos reservados';
$string['summary_only'] = 'Só o resumo';
$string['sure'] = 'Quere conformalo?';
$string['system'] = 'Sistema';
$string['teachingroom'] = 'Só aulas';
$string['through'] = 'a través';
$string['too_may_entrys'] = 'As opcións seleccionadas crearán demasiadas entradas.<BR>Revise as opcións!';
$string['toofaradvance'] = 'Non é posíbel reservar salas con máis de {$a} días de antelación';
$string['ttfor'] = 'Horario para:';
$string['type'] = 'Tipo';
$string['typea'] = '--cadea non usada--';
$string['unconfirmedbooking'] = 'Sen confirmar';
$string['unknown'] = 'Descoñecido';
$string['update_area_failed'] = 'Non foi posíbel actualizar o espazo';
$string['update_room_failed'] = 'Non foi posíbel actualizar a sala';
$string['useful_n-weekly_value'] = 'un intervalo de n-semanas correcto.';
$string['valid_room'] = 'sala.';
$string['valid_time_of_day'] = 'horario correcto do día.';
$string['viewday'] = 'Ver o día';
$string['viewmonth'] = 'Ver o mes';
$string['viewweek'] = 'Ver a semana';
$string['weekafter'] = 'Ir á semana seguinte';
$string['weekbefore'] = 'Ir á semana anterior';
$string['weeks'] = 'semanas';
$string['you_are'] = 'Está como';
$string['you_have_not_entered'] = 'non introduciu un';
$string['you_have_not_selected'] = 'non seleccionou un';
