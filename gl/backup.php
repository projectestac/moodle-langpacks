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
 * Strings for component 'backup', language 'gl', version '4.1'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Completouse o proceso de copia de seguridade';
$string['asyncbackupcompletebutton'] = 'Continuar';
$string['asyncbackupcompletedetail'] = 'O proceso de copia de seguridade completouse correctamente. <br/> Pode acceder á copia de seguridade na <a href="{$a}">páxina de restauración.</a>';
$string['asyncbackuperror'] = 'Produciuse un fallo no proceso de copia de seguridade';
$string['asyncbackuperrordetail'] = 'Fallou o proceso de copia de seguridade. Póñase en contacto co administrador do sistema.';
$string['asyncbackuppending'] = 'O proceso de copia de seguridade está pendente';
$string['asyncbackupprocessing'] = 'A copia de seguridade está en proceso';
$string['asyncbadexecution'] = 'Execución do controlador de copia de seguridade incorrecta. É {$a} e debería ser 2.';
$string['asynccheckprogress'] = 'Pode comprobar o progreso en calquera momento na <a href="{$a}">páxina de restauración</a>.';
$string['asyncemailenable'] = 'Activar as notificacións de mensaxes';
$string['asyncemailenabledetail'] = 'Se está activado, os usuarios recibirán unha mensaxe cando se completa unha copia de seguridade ou restauración asíncrona.';
$string['asyncgeneralsettings'] = 'Copia de seguridade/restauración asíncrona';
$string['asyncmessagebody'] = 'Mensaxe';
$string['asyncmessagebodydefault'] = 'Ola {user_firstname}, <br/> A súa {operation} (ID: {backupid}) completouse correctamente. <br/><br/>Pode acceder a ela aquí: {link}.';
$string['asyncmessagebodydetail'] = 'Mensaxe para enviar cando se completa unha copia de seguridade ou restauración asíncrona.';
$string['asyncmessagesubject'] = 'Asunto';
$string['asyncmessagesubjectdefault'] = '{operación} do Moodle completouse correctamente';
$string['asyncmessagesubjectdetail'] = 'Asunto da mensaxe';
$string['asyncnowait'] = 'Non é preciso que agarde aquí, xa que o proceso continuará en segundo plano.';
$string['asyncprocesspending'] = 'Proceso pendente';
$string['asyncrestorecomplete'] = 'Completouse o proceso de restauración';
$string['asyncrestorecompletebutton'] = 'Continuar';
$string['asyncrestorecompletedetail'] = 'O proceso de restauración completouse correctamente. Premer en Continuar levarao ao <a href="{$a}">curso do elemento restaurado.</a>';
$string['asyncrestoreerror'] = 'Produciuse un fallo no proceso de restauración';
$string['asyncrestoreerrordetail'] = 'Produciuse un fallo no proceso de restauración. Póñase en contacto co administrador do sistema.';
$string['asyncrestoreinprogress'] = 'Restauracións en proceso';
$string['asyncrestoreinprogress_help'] = 'Aquí amósanse restauracións asíncronas de cursos que están en curso.';
$string['asyncrestorepending'] = 'O proceso de restauración está pendente';
$string['asyncrestoreprocessing'] = 'A restauración está en proceso';
$string['asyncreturn'] = 'Volver ao curso';
$string['autoactivedescription'] = 'Escolla se quere ou non facer copias de seguridade automáticas. Se selecciona o modo manual só será posíbel facer copias de seguridade automáticas mediante scripts en liña de ordes. Tamén se poderá facer manualmente mediante a liña de ordes ou empregando cron.';
$string['autoactivedisabled'] = 'Desactivado';
$string['autoactiveenabled'] = 'Activado';
$string['autoactivemanual'] = 'Manual';
$string['automatedbackupschedule'] = 'Planificación';
$string['automatedbackupschedulehelp'] = 'Escolla en que días da semana se farán as copias de seguridade automatizadas.';
$string['automatedbackupsinactive'] = 'Foron activadas as copias de seguridade automatizadas polo administrador do sitio';
$string['automatedbackupstatus'] = 'Estado da copia de seguridade automatizada';
$string['automateddeletedays'] = 'Eliminar as copias de seguridade de máis de';
$string['automatedmaxkept'] = 'Número máximo de copias de seguridade que conservar';
$string['automatedmaxkepthelp'] = 'Isto especifica o número máximo de copias de seguridade automatizadas recentes que conservar para cada curso. As copias de seguridade que sexan máis antigas eliminaranse automaticamente.';
$string['automatedminkept'] = 'Número mínimo de copias de seguridade a conservar';
$string['automatedminkepthelp'] = 'Se se eliminan as copias de seguridade máis antigas que o número de días especificado, pode suceder que un curso inactivo termine sen copias de seguridade. Para evitar isto, debe especificarse un número mínimo de copias de seguridade a conservar.';
$string['automatedsettings'] = 'Configuración da copia de seguranza automatizada';
$string['automatedsetup'] = 'Configuración da copia de seguridade automatizada';
$string['automatedstorage'] = 'Almacenamento da copia de seguridade automatizada';
$string['automatedstoragehelp'] = 'Escolla a localización onde quere almacenar as copias de seguridade creadas automaticamente.';
$string['backupactivity'] = 'Copia de seguridade da actividade: {$a}';
$string['backupcourse'] = 'Copia de seguridade do curso: {$a}';
$string['backupcoursedetails'] = 'Detalles do curso';
$string['backupcoursesection'] = 'Selección: {$a}';
$string['backupcoursesections'] = 'Seccións do curso';
$string['backupdate'] = 'Data de realización';
$string['backupdetails'] = 'Detalles da copia de seguridade';
$string['backupdetailsnonstandardinfo'] = 'O ficheiro seleccionado non é un ficheiro de copia de seguridade estándar de Moodle. O proceso de restauración tentará converter o ficheiro de copia de seguridade ao formato estándar e após restauralo';
$string['backupformat'] = 'Formato';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Formato descoñecido';
$string['backuplog'] = 'Información técnica e advertencias';
$string['backupmode'] = 'Modo';
$string['backupmode10'] = 'Xeral';
$string['backupmode20'] = 'Importar';
$string['backupmode30'] = 'Concentrador';
$string['backupmode40'] = 'Mesmo sitio';
$string['backupmode50'] = 'Automático';
$string['backupmode60'] = 'Convertido';
$string['backupmode70'] = 'Asíncrono';
$string['backupsection'] = 'Copia de seguridade da sección de curso: {$a}';
$string['backupsettings'] = 'Axustes da copia de seguridade';
$string['backupsitedetails'] = 'Detalles do sitio';
$string['backupstage16action'] = 'Continuar';
$string['backupstage1action'] = 'Seguinte';
$string['backupstage2action'] = 'Seguinte';
$string['backupstage4action'] = 'Facer a copia de seguridade';
$string['backupstage8action'] = 'Continuar';
$string['backuptype'] = 'Tipo';
$string['backuptypeactivity'] = 'Actividade';
$string['backuptypecourse'] = 'Curso';
$string['backuptypesection'] = 'Sección';
$string['backupversion'] = 'Versión da copia de seguridade';
$string['cannotfindassignablerole'] = 'Non é posíbel asignar o rol {$a} no ficheiro de copia de seguridade a ningún dos roles que vostede pode asignar.';
$string['choosefilefromactivitybackup'] = 'Área da copia de seguridade de actividade';
$string['choosefilefromactivitybackup_help'] = 'Cando se fai unha copia de seguridade das actividades empregando os valores predeterminados, os ficheiros da copia gárdanse aquí.';
$string['choosefilefromautomatedbackup'] = 'Copias de seguridade automatizadas';
$string['choosefilefromautomatedbackup_help'] = 'Contén as copias de seguridade xeradas automaticamente.';
$string['choosefilefromcoursebackup'] = 'Área da copia de seguridade de curso';
$string['choosefilefromcoursebackup_help'] = 'Aquí almacénanse as copias de seguridade dos cursos que empregan os axustes predeterminados.';
$string['choosefilefromuserbackup'] = 'Área da copia de seguridade privada de usuario';
$string['choosefilefromuserbackup_help'] = 'Aquí almacénanse as copias de seguridade coa información do usuario anonimizada.';
$string['config_keep_groups_and_groupings'] = 'De xeito predeterminado, manter os grupos e os agrupamentos actuais.';
$string['config_keep_roles_and_enrolments'] = 'De xeito predeterminado, manter os roles e matriculacións actuais.';
$string['config_overwrite_conf'] = 'Permitirlle ao usuario anular a configuración actual do curso';
$string['config_overwrite_course_fullname'] = 'De xeito predeterminado, sobrescribe o nome completo do curso co do ficheiro de copia de seguridade. Isto necesita que estea activado «Sobrescribir a configuración do curso» e que o usuario actual teña a funcionalidade para cambiarlle o nome completo ao curso (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'De xeito predeterminado, sobrescribe o nome abreviado do curso co do ficheiro de copia de seguridade. Isto necesita que estea activado «Sobrescribir a configuración do curso» e que o usuario actual teña a funcionalidade para cambiarlle o nome abreviado ao curso (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'De xeito predeterminado, sobrescribe a data de inicio do curso coa data do ficheiro de copia de seguridade. Isto necesita que estea activado «Sobrescribir a configuración do curso» e que o usuario actual teña a funcionalidade para cambiar as datas do curso ao restaurar (moodle/restore:rolldates)';
$string['configgeneralactivities'] = 'Estabelece os valores predeterminados para incluír actividades nunha copia de seguridade.';
$string['configgeneralanonymize'] = 'Se está activado, toda a información relativa aos usuarios será anónima de xeito predeterminado.';
$string['configgeneralbadges'] = 'Estabelece os valores predeterminados para incluír insignias nunha copia de seguridade.';
$string['configgeneralblocks'] = 'Estabelece os valores predeterminados para incluír bloques nunha copia de seguridade.';
$string['configgeneralcalendarevents'] = 'Estabelece os valores predeterminados para incluír eventos de calendario nunha copia de seguridade.';
$string['configgeneralcomments'] = 'Estabelece os valores predeterminados para incluír comentarios nunha copia de seguridade.';
$string['configgeneralcompetencies'] = 'Estabelece os valores predeterminados para incluír competencias nunha copia de seguridade.';
$string['configgeneralcontentbankcontent'] = 'Estabelece os valores predeterminados para incluír contido do banco de contido nunha copia de seguridade.';
$string['configgeneralfiles'] = 'Estabelece o valor predeterminado para incluír ficheiros nunha copia de seguridade. Teña en conta que: se desactiva este axuste producirase unha copia de seguridade que incluirá só referencias a ficheiros. Isto non supón ningún problema se a copia de seguridade está restaurada no mesmo sitio e os ficheiros non se eliminaron segundo a configuración «Limpar os ficheiros do agrupamento do lixo» (filescleanupperiod).';
$string['configgeneralfilters'] = 'Estabelece os valores predeterminados para incluír os filtro nunha copia de seguridade.';
$string['configgeneralgroups'] = 'Define o comportamento por defecto para incluír grupos e agrupamentos nunha copia de seguranza.';
$string['configgeneralhistories'] = 'Estabelece os valores predeterminados para incluír o historial do usuario nunha copia de seguridade.';
$string['configgenerallogs'] = 'Se está activado, de xeito predeterminado incluiranse os rexistros nas copias de seguridade.';
$string['configgeneralpermissions'] = 'Se está activado, importaranse os permisos de rol. Isto pode anular os permisos existentes para os usuarios matriculados.';
$string['configgeneralquestionbank'] = 'Se está activado, o banco de preguntas estará incluído de xeito predeterminado nas copias de seguridade. TOME NOTA de que ao desactivar este axuste desactivarase a copia de seguridade de actividades que usen o banco de preguntas, como por exemplo, as probas.';
$string['configgeneralroleassignments'] = 'Se está activado, os roles asignados de xeito predeterminado incluiranse tamén na copia de seguridade.';
$string['configgeneralusers'] = 'Estabelece os valores predeterminados para incluír aos usuarios nas copias de seguridade.';
$string['configgeneraluserscompletion'] = 'Se está activado, a información do grado de avance dos usuarios incluirase de xeito predeterminado nas copias de seguridade.';
$string['configlegacyfiles'] = 'Estabelece o valor predeterminado para incluír ficheiros de curso herdados nunha copia de seguridade. Os ficheiros de cursos antigos son de versións de Moodle anteriores á 2.0.';
$string['configloglifetime'] = 'Especifica o período de tempo durante o que quere manter a información dos rexistros de copia de seguridade. Os rexistros máis antigos do estabelecido eliminaranse automaticamente. Recomendase manter este valor o máis baixo posíbel, xa que o volume da información sobre as copias de seguridade pode chegar a ser grande de máis.';
$string['configrestoreactivities'] = 'Estabelecer o axuste predeterminado para restaurar actividades.';
$string['configrestorebadges'] = 'Estabelecer o axuste predeterminado para restaurar insignias.';
$string['configrestoreblocks'] = 'Estabelecer o axuste predeterminado para restaurar bloques.';
$string['configrestorecalendarevents'] = 'Estabelecer o axuste predeterminado para restaurar eventos do calendario.';
$string['configrestorecomments'] = 'Estabelecer o axuste predeterminado para restaurar comentarios.';
$string['configrestorecompetencies'] = 'Estabelecer o axuste predeterminado para restaurar competencias.';
$string['configrestorecontentbankcontent'] = 'Estabelecer os valores predeterminados para restaurar o contido do banco de contido.';
$string['configrestoreenrolments'] = 'Estabelecer o axuste predeterminado para restaurar métodos de matriculación';
$string['configrestorefilters'] = 'Estabelecer o axuste predeterminado para restaurar filtros.';
$string['configrestoregroups'] = 'Estabelecer o axuste predeterminado para restaurar grupos e agrupamentos se foron incluídos na copia de seguridade.';
$string['configrestorehistories'] = 'Estabelecer o axuste predeterminado para restaurar o historial do usuario se foi incluído na copia de seguridade.';
$string['configrestorelogs'] = 'Se o activa, restauraranse de xeito predeterminado os rexistros se foron incluídos na copia de seguranza.';
$string['configrestorepermissions'] = 'Se o activa, restauraranse os permisos de rol. Isto pode anular os permisos existentes para os usuarios matriculados.';
$string['configrestoreroleassignments'] = 'Se o activa, restauraranse de xeito predeterminado as asignacións de roles se foron incluídas na copia de seguranza.';
$string['configrestoreusers'] = 'Estabelecer o axuste predeterminado para restaurar ou non os usuarios se foron incluídos na copia de seguridade.';
$string['configrestoreuserscompletion'] = 'Se o activa, restaurarase a información de grado de avance do usuario se foi incluída na copia de seguranza.';
$string['confirmcancel'] = 'Cancelar a copia de seguridade';
$string['confirmcancelimport'] = 'Cancelar a importación';
$string['confirmcancelno'] = 'Proseguir';
$string['confirmcancelquestion'] = 'Confirma que quere cancelar?
Calquera información que teña introducido perderase.';
$string['confirmcancelrestore'] = 'Cancelar a restauración';
$string['confirmcancelyes'] = 'Cancelar a copia de seguridade';
$string['confirmnewcoursecontinue'] = 'Advertencia de curso novo';
$string['confirmnewcoursecontinuequestion'] = 'No proceso de restauración de cursos, crearase un curso temporal (agochado). Para cancelar a restauración prema en Cancelar. Non peche o navegador mentres se restaura.';
$string['copiesinprogress'] = 'Este curso ten copias en proceso. <a href="{$a}">Ver as copias en proceso.</a>';
$string['copycoursedesc'] = 'Este curso duplicarase e colocarase na categoría de cursos seleccionada.';
$string['copycourseheading'] = 'Copiar un curso';
$string['copycoursetitle'] = 'Copiar o curso: {$a}';
$string['copydest'] = 'Destino';
$string['copyfieldnotfound'] = 'Non se atopou un campo obrigatorio';
$string['copyformfail'] = 'Fallou o envío AJAX do formulario de copia do curso.';
$string['copyingcourse'] = 'Copia do curso en proceso';
$string['copyingcourseshortname'] = 'copiaando';
$string['copyop'] = 'Operación actual';
$string['copyprogressheading'] = 'Copias do curso en proceso';
$string['copyprogressheading_help'] = 'Esta táboa amosa o estado de todas as copias do curso sen rematar.';
$string['copyprogresstitle'] = 'Progreso da copia do curso';
$string['copyreturn'] = 'Copiar e volver ao curso';
$string['copysource'] = 'Orixe';
$string['copyview'] = 'Copiar e ver';
$string['coursecategory'] = 'Categoría na que se restaurará o curso';
$string['courseid'] = 'ID orixinal';
$string['coursesettings'] = 'Axustes do curso';
$string['coursetitle'] = 'Título';
$string['currentstage1'] = 'Axustes iniciais';
$string['currentstage16'] = 'Completa';
$string['currentstage2'] = 'Axustes do esquema';
$string['currentstage4'] = 'Confirmación e revisión';
$string['currentstage8'] = 'Facer a copia de seguridade';
$string['enableasyncbackup'] = 'Activar copias de seguridade asíncronas';
$string['enableasyncbackup_help'] = 'Se está activado, todas as operacións de copia de seguridade e restauración faranse de xeito asíncrono. Isto non afecta ás importacións e exportacións. As copias de seguridade e as restauracións asíncronas permiten aos usuarios facer outras operacións mentres se está a realizar unha copia de seguridade ou restauración.';
$string['enterasearch'] = 'Introduza unha busca:';
$string['error_block_for_module_not_found'] = 'Atopouse unha instancia de bloque orfo (id: {$a->bid}) para o módulo do curso (id: {$a->mid}) Este bloque non se copiará';
$string['error_course_module_not_found'] = 'Atopouse un módulo de curso orfo (id: {$a}). Este modulo non se copiará';
$string['errorcopyingbackupfile'] = 'Non foi posíbel copiar o ficheiro de copia de seguridade no cartafol temporal antes de restaurar.';
$string['errorfilenamemustbezip'] = 'O nome de ficheiro que introducir debe ser un ficheiro ZIP e coa extensión «.mbz»';
$string['errorfilenamerequired'] = 'Debe introducir un nome de ficheiro correcto para esta copia de seguridade';
$string['errorfilenametoolong'] = 'A lonxitude do nome de ficheiro debe ser menor de 255 caracteres.';
$string['errorinvalidformat'] = 'Formato de copia de seguridade descoñecido.';
$string['errorinvalidformatinfo'] = 'O ficheiro seleccionado non é un ficheiro de copia de seguridade correcto de Moodle e non é posíbel restauralo.';
$string['errorminbackup20version'] = 'Este ficheiro de copia de seguridade foi creado cunha versión de desenvolvemento de copia de seguridade de Moodle ({$a->backup}) e requírese, polo menos, da versión {$a->min}. Polo tanto, non pode ser restaurado.';
$string['errorrestorefrontpagebackup'] = 'Só é posíbel poden restaurar copias de seguridade da páxina de inicio';
$string['executionsuccess'] = 'Creouse correctamente o ficheiro de copia de seguridade.';
$string['extractingbackupfileto'] = 'Extraendo ficheiro de copia de seguridade a: {$a}';
$string['failed'] = 'Produciuse un fallo na copia de seguridade';
$string['filealiasesrestorefailures'] = 'Non foi posíbel restaurar os alias';
$string['filealiasesrestorefailures_help'] = 'Os alias son ligazóns simbólicas a outros ficheiros, incluídos os almacenados en repositorios externos. Nalgúns casos, Moodle non pode restauralos; por exemplo, ao restaurar a copia de seguridade noutro lugar ou cando o ficheiro ao que se fai referencia non existe.

Pode ver máis detalles e o motivo real da falla no ficheiro de rexistro da restauración.';
$string['filealiasesrestorefailures_link'] = 'restore/filealiases';
$string['filealiasesrestorefailuresinfo'] = 'Non foi posíbel restaurar algún(s) dos alias incluídos no ficheiro de copia de seguridade. A seguinte lista contén a localización prevista e o ficheiro orixe ao que se refire no sitio orixinal.';
$string['filename'] = 'Nome de ficheiro';
$string['filereferencesincluded'] = 'As referencias de ficheiro a contidos externos son incluídas no ficheiro de copia de seguridade. Estas non funcionarán se a copia de seguridade se restaura nun sitio diferente.';
$string['filereferencesnotsamesite'] = 'A copia de seguridade é doutro sitio, non é posíbel restaurar as referencias de ficheiro';
$string['filereferencessamesite'] = 'A copia de seguridade é deste sitio, pódese restaurar as referencias de ficheiro';
$string['generalactivities'] = 'Incluír as actividades e recursos';
$string['generalanonymize'] = 'Anonimizar a información';
$string['generalbackdefaults'] = 'Configuración predeterminada da copia de seguranza';
$string['generalbadges'] = 'Incluír as insignias';
$string['generalblocks'] = 'Incluír os bloques';
$string['generalcalendarevents'] = 'Incluír os eventos do calendario';
$string['generalcomments'] = 'Incluír os comentarios';
$string['generalcompetencies'] = 'Incluír competencias';
$string['generalcontentbankcontent'] = 'Incluír contido do banco de contido';
$string['generalenrolments'] = 'Incluír os métodos de matriculación';
$string['generalfiles'] = 'Incluír os ficheiros';
$string['generalfilters'] = 'Incluír os filtros';
$string['generalgradehistories'] = 'Incluír os historiais';
$string['generalgroups'] = 'Incluír os grupos e agrupamentos';
$string['generalhistories'] = 'Incluír os historiais';
$string['generallegacyfiles'] = 'Incluír os ficheiros de cursos antigos';
$string['generallogs'] = 'Incluír os rexistros';
$string['generalpermissions'] = 'Incluír as anulacións de permisos';
$string['generalquestionbank'] = 'Incluír o banco de preguntas';
$string['generalrestoredefaults'] = 'Valores xerais predeterminados para a restauración';
$string['generalrestoresettings'] = 'Axustes xerais para a restauración';
$string['generalroleassignments'] = 'Incluír as asignacións de roles';
$string['generalsettings'] = 'Configuración xeral da copia de seguranza';
$string['generalusers'] = 'Incluír os usuarios';
$string['generaluserscompletion'] = 'Incluír a información do grado de avance do usuario';
$string['hidetypes'] = 'Agochar as opcións de tipos';
$string['importbackupstage16action'] = 'Continuar';
$string['importbackupstage1action'] = 'Seguinte';
$string['importbackupstage2action'] = 'Seguinte';
$string['importbackupstage4action'] = 'Facer a importación';
$string['importbackupstage8action'] = 'Continuar';
$string['importcurrentstage0'] = 'Selección de cursos';
$string['importcurrentstage1'] = 'Axustes iniciais';
$string['importcurrentstage16'] = 'Completa';
$string['importcurrentstage2'] = 'Axustes do esquema';
$string['importcurrentstage4'] = 'Confirmación e revisión';
$string['importcurrentstage8'] = 'Facer a importación';
$string['importfile'] = 'Importar un ficheiro de copia de seguridade';
$string['importgeneralduplicateadminallowed'] = 'Permitir a resolución de conflito co usuario «admin»';
$string['importgeneralduplicateadminallowed_desc'] = 'Se o sitio ten unha conta co nome de usuario «admin», entón ao intentar restaurar un ficheiro de copia de seguridade que conteña un nome de usuario «admin» pode causar un conflito. Se activa este axuste, o conflito resolverase ao cambiar o nome de usuario no ficheiro de copia de seguridade a «admin_xyz».';
$string['importgeneralmaxresults'] = 'Número máximo de cursos listados para importar';
$string['importgeneralmaxresults_desc'] = 'Isto controla o número de cursos que son listados durante o primeiro paso do proceso de importación';
$string['importgeneralsettings'] = 'Configuración predeterminada da importación';
$string['importrootsettings'] = 'Axustes da importación';
$string['importsettings'] = 'Axustes xerais para a importación';
$string['importsuccess'] = 'Importación completada. Prema en «Continuar» para volver ao curso.';
$string['includeactivities'] = 'Incluír:';
$string['includeditems'] = 'Elementos incluídos:';
$string['includefilereferences'] = 'Referencias de ficheiro a contidos externos';
$string['includesection'] = 'Sección {$a}';
$string['includeuserinfo'] = 'Datos de usuario';
$string['inprogress'] = 'Copia de seguridade en proceso';
$string['jumptofinalstep'] = 'Saltar ao último paso';
$string['keep'] = 'Manter';
$string['keptroles'] = 'Incluír as matriculacións por roles';
$string['keptroles_help'] = 'Os usuarios cos roles seleccionados matricularanse no novo curso. Non se copiarán datos de usuario a menos que estea activado «Incluír datos de usuario».';
$string['locked'] = 'Bloqueado';
$string['lockedbyconfig'] = 'Este axuste foi bloqueado polos axustes predeterminados da copia de seguridade';
$string['lockedbyhierarchy'] = 'Bloqueado polas dependencias';
$string['lockedbypermission'] = 'Vostede non ten permisos abondo para cambiar este axuste';
$string['loglifetime'] = 'Manter os rexistros de';
$string['managefiles'] = 'Xestionar os ficheiros de copia de seguridade';
$string['mergerestoredefaults'] = 'Restaurar valores predeterminados ao combinar dentro doutro curso';
$string['missingfilesinpool'] = 'Non foi posíbel gardar algúns ficheiros durante a copia de seguridade. Non será posíbel restauralos.';
$string['module'] = 'Módulo';
$string['moodleversion'] = 'Versión do Moodle';
$string['morecoursesearchresults'] = 'Atopáronse máis de {$a} cursos, amósanse os primeiros {$a} resultados';
$string['moreresults'] = 'Hai demasiados resultados, introduza unha busca máis específica.';
$string['nomatchingcourses'] = 'Non hai cursos que presentar';
$string['norestoreoptions'] = 'Non hai categorías ou cursos que poida restaurar';
$string['originalwwwroot'] = 'URL da copia de seguridade';
$string['overwrite'] = 'Sobrescribir';
$string['pendingasyncdeletedetail'] = 'Este curso ten unha copia de seguridade asíncrona pendente.<br/> Non é posíbel eliminar os cursos ata que remate esta copia de seguridade.';
$string['pendingasyncdetail'] = 'As copias de seguridade asíncronas só permiten a un usuario ter unha copia de seguridade pendente dun recurso á vez. <br/> Non se poden poñer en cola varias copias de seguridade asíncronas do mesmo recurso, xa que isto probabelmente produciría varias copias de seguridade co mesmo contido.';
$string['pendingasyncedit'] = 'Hai unha copia de seguridade pendente ou unha copia solicitada para este curso. Non edite este curso ata que isto non se teña completado.';
$string['pendingasyncerror'] = 'Copias de seguridade pendentes deste recurso';
$string['preparingdata'] = 'Preparando os datos';
$string['preparingui'] = 'Preparándose para amosar a páxina';
$string['previousstage'] = 'Anterior';
$string['privacy:metadata:backup:detailsofarchive'] = 'Este ficheiro pode conter varios datos de usuario relacionados cun curso, como notas, matriculación de usuarios e datos de actividade.';
$string['privacy:metadata:backup:externalpurpose'] = 'O propósito deste ficheiro é almacenar información relacionada cun curso que pode ser restaurado no futuro.';
$string['privacy:metadata:backup_controllers'] = 'A lista de operacións de copia de seguridade';
$string['privacy:metadata:backup_controllers:itemid'] = 'O ID do curso';
$string['privacy:metadata:backup_controllers:operation'] = 'A operación que se realizou, por exemplo, restaurar.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'A data na que se creou a acción';
$string['privacy:metadata:backup_controllers:timemodified'] = 'A data na que se modificou a acción';
$string['privacy:metadata:backup_controllers:type'] = 'O tipo do elemento que se está a traballar, por exemplo, actividade.';
$string['qcategory2coursefallback'] = 'A categoría de preguntas «{$a->name}», orixinalmente no contexto de categoría sistema/curso dentro do ficheiro de copia de seguridade, crearase no contexto do curso ao ser restauradas.';
$string['qcategorycannotberestored'] = 'A categoría de preguntas «{$a->ame}» non pode crearse por restauración';
$string['question2coursefallback'] = 'A categoría de preguntas «{$a->name}», orixinalmente no contexto de categoría sistema/curso dentro do ficheiro de copia de seguridade, crearase no contexto do curso ao ser restauradas.';
$string['questioncannotberestored'] = 'As preguntas «{$a->name}» non pode crearse por restauración';
$string['recyclebin_desc'] = 'Teña en conta que estes axustes tamén se usarán para o cesto do lixo.';
$string['replacerestoredefaults'] = 'Restabelecer os valores predeterminados ao restaurar noutro curso eliminando os contidos';
$string['restoreactivity'] = 'Restaurar actividade';
$string['restorecourse'] = 'Restaurar curso';
$string['restorecoursesettings'] = 'Axustes do curso';
$string['restoredcourseid'] = 'ID do curso restaurado: {$a}';
$string['restoreexecutionsuccess'] = 'O curso foi restaurado correctamente . Se preme no botón «Continuar» poderá ver o curso que ven de restaurar.';
$string['restorefileweremissing'] = 'Non foi posíbel restaurar algúns ficheiros xa que faltaban na copia de seguridade.';
$string['restorenewcoursefullname'] = 'Nome do novo curso';
$string['restorenewcourseshortname'] = 'Nome abreviado do novo curso';
$string['restorenewcoursestartdate'] = 'Nova data de inicio';
$string['restorerolemappings'] = 'Restaurar as asignacións de roles';
$string['restorerootsettings'] = 'Restaurar os axustes';
$string['restoresection'] = 'Restaurar sección';
$string['restorestage1'] = 'Confirmar';
$string['restorestage16'] = 'Revisar';
$string['restorestage16action'] = 'Executar a restauración';
$string['restorestage1action'] = 'Seguinte';
$string['restorestage2'] = 'Destino';
$string['restorestage2action'] = 'Seguinte';
$string['restorestage32'] = 'Proceso';
$string['restorestage32action'] = 'Continuar';
$string['restorestage4'] = 'Axustes';
$string['restorestage4action'] = 'Seguinte';
$string['restorestage64'] = 'Completa';
$string['restorestage64action'] = 'Continuar';
$string['restorestage8'] = 'Esquema';
$string['restorestage8action'] = 'Seguinte';
$string['restoretarget'] = 'Destino da restauración';
$string['restoretocourse'] = 'Restaurar ao curso:';
$string['restoretocurrentcourse'] = 'Restaurar neste curso';
$string['restoretocurrentcourseadding'] = 'Fusionar a copia de seguridade do curso con este curso';
$string['restoretocurrentcoursedeleting'] = 'Eliminar o contido do curso actual e após restaurar';
$string['restoretoexistingcourse'] = 'Restaurar nun curso existente';
$string['restoretoexistingcourseadding'] = 'Fusionar a copia de seguridade do curso co curso existente';
$string['restoretoexistingcoursedeleting'] = 'Eliminar o contido do curso existente e após restaurar';
$string['restoretonewcourse'] = 'Restaurar como curso novo';
$string['restoringcourse'] = 'A restauración do curso está en proceso';
$string['restoringcourseshortname'] = 'restaurando';
$string['rootenrolmanual'] = 'Restaurar como matriculación manual';
$string['rootsettingactivities'] = 'Incluír as actividades e recursos';
$string['rootsettinganonymize'] = 'Anonimizar a información dos usuarios';
$string['rootsettingbadges'] = 'Incluír as insignias';
$string['rootsettingblocks'] = 'Incluír os bloques';
$string['rootsettingcalendarevents'] = 'Incluír os eventos do calendario';
$string['rootsettingcomments'] = 'Incluír os comentarios';
$string['rootsettingcompetencies'] = 'Incluír competencias';
$string['rootsettingcontentbankcontent'] = 'Incluír contido do banco de contido';
$string['rootsettingcustomfield'] = 'Incluír campos personalizados';
$string['rootsettingenrolments'] = 'Incluír os métodos de matriculación';
$string['rootsettingenrolments_always'] = 'Si, sempre';
$string['rootsettingenrolments_never'] = 'Non, restaurar como matriculación manual';
$string['rootsettingenrolments_withusers'] = 'Si, mais só se os usuarios están incluídos';
$string['rootsettingfiles'] = 'Incluír os ficheiros';
$string['rootsettingfilters'] = 'Incluír os filtros';
$string['rootsettinggradehistories'] = 'Incluír o historial de cualificacións';
$string['rootsettinggroups'] = 'Incluír os grupos e agrupamentos';
$string['rootsettingimscc1'] = 'Converter a IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Converter a IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = 'Incluír os ficheiros de cursos antigos';
$string['rootsettinglogs'] = 'Incluír os rexistros do curso';
$string['rootsettingpermissions'] = 'Incluír as anulacións de permisos';
$string['rootsettingquestionbank'] = 'Incluír o banco de preguntas';
$string['rootsettingroleassignments'] = 'Incluír as asignacións de rol de usuario';
$string['rootsettings'] = 'Axustes da copia de seguridade';
$string['rootsettingusers'] = 'Incluír os usuarios matriculados';
$string['rootsettinguserscompletion'] = 'Incluír detalles do grado de avance do usuario';
$string['samesitenotification'] = 'Esta copia de seguridade creouse só con referencias a ficheiros, non a ficheiros en si. A restauración só funcionará neste sitio.';
$string['sectionactivities'] = 'Actividades';
$string['sectioninc'] = 'Incluído na copia de seguridade (sen información de usuarios)';
$string['sectionincanduser'] = 'Incluído na copia de seguridade xunto coa información de usuarios';
$string['selectacategory'] = 'Seleccione unha categoría';
$string['selectacourse'] = 'Seleccione un curso';
$string['setting_course_fullname'] = 'Nome do curso';
$string['setting_course_shortname'] = 'Nome abreviado do curso';
$string['setting_course_startdate'] = 'Data de inicio do curso';
$string['setting_keep_groups_and_groupings'] = 'Manter os grupos e os agrupamentos actuais';
$string['setting_keep_roles_and_enrolments'] = 'Manter os roles e matriculacións actuais';
$string['setting_overwrite_conf'] = 'Sobrescribir a configuración do curso';
$string['setting_overwrite_course_fullname'] = 'Sobrescribe o nome completo do curso';
$string['setting_overwrite_course_shortname'] = 'Sobrescribe o nome abreviado do curso';
$string['setting_overwrite_course_startdate'] = 'Sobrescribe a data de inicio do curso';
$string['showtypes'] = 'Amosar as opcións de tipos';
$string['sitecourseformatwarning'] = 'Isto é unha copia de seguridade da páxina de inicio do sitio, só se pode restaurar na páxina de inicio do sitio';
$string['skiphidden'] = 'Omitir cursos agochados';
$string['skiphiddenhelp'] = 'Escolla se se omiten ou non os cursos agochados';
$string['skipmodifdays'] = 'Omitir os cursos sen modificar dende';
$string['skipmodifdayshelp'] = 'Escolla omitir os cursos que non se modificaron dende un número de días';
$string['skipmodifprev'] = 'Omitir os cursos sen modificar dende a copia de seguridade anterior';
$string['skipmodifprevhelp'] = 'Escolla se omitir ou non os cursos que non se modificaron dende a copia de seguridade anterior. Isto precisa ter activado o rexistro de cambios.';
$string['status'] = 'Estado';
$string['storagecourseandexternal'] = 'Área de ficheiros de copia de seguridade e directorio específico';
$string['storagecourseonly'] = 'Área de ficheiros de copia de seguridade';
$string['storageexternalonly'] = 'Especifique o directorio para as copias de seguridade automatizadas';
$string['successful'] = 'Copia de seguridade satisfactoria';
$string['successfulcopy'] = 'Copia realizada correctamente';
$string['successfulrestore'] = 'Restauración satisfactoria';
$string['timetaken'] = 'Tempo levado';
$string['title'] = 'Título';
$string['totalcategorysearchresults'] = 'Total de categorías: {$a}';
$string['totalcoursesearchresults'] = 'Total de cursos: {$a}';
$string['undefinedrolemapping'] = 'A asignación de roles non está definida para o arquetipo «{$a}».';
$string['unnamedsection'] = 'Sección sen nome';
$string['userdata'] = 'Incluír datos de usuario';
$string['userdata_help'] = 'Se está activado, os datos como publicacións no foro, as entregas de tarefas, etc. copiaranse no novo curso para calquera usuario que teña un rol seleccionado en «Incluír as matriculacións por roles».';
$string['userinfo'] = 'Información do usuario';
