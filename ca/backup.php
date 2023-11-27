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
 * Strings for component 'backup', language 'ca', version '4.1'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'El procés de còpia de seguretat s\'ha completat';
$string['asyncbackupcompletebutton'] = 'Continua';
$string['asyncbackupcompletedetail'] = 'El procés de còpia de seguretat s\'ha completat amb èxit. <br/>  Podeu accedir a la còpia de seguretat des de la pàgina de restauració <a href="{$a}">';
$string['asyncbackuperror'] = 'El procés de còpia de seguretat ha fallat';
$string['asyncbackuperrordetail'] = 'El procés de còpia de seguretat ha fallat. Contacteu amb qui administra el vostre sistema.';
$string['asyncbackuppending'] = 'El procés de còpia de seguretat s\'està preparant';
$string['asyncbackupprocessing'] = 'La còpia de seguretat està en procés';
$string['asyncbadexecution'] = 'El controlador de còpia de seguretat s\'ha executat incorrectament. És {$a} i hauria de ser 2.';
$string['asynccheckprogress'] = 'Podeu controlar el progrés en qualsevol moment des de la <a href="{$a}">pàgina de restauració</a>.';
$string['asyncemailenable'] = 'Activa els missatges de notificació';
$string['asyncemailenabledetail'] = 'Si s\'habilita, els usuaris rebran un missatge quan es completi o es restaure una còpia de seguretat asíncrona.';
$string['asyncgeneralsettings'] = 'Còpia de seguretat/restauració asíncrona';
$string['asyncmessagebody'] = 'Missatge';
$string['asyncmessagebodydefault'] = 'Hola, {user_firstname},<br/> La vostra {operation} (ID: {backupid}) s\'ha completat amb èxit. <br/><br/>Podeu accedir des d\'ací: {link}.';
$string['asyncmessagebodydetail'] = 'Missatge a enviar quan es completi o es restaure una còpia de seguretat asíncrona.';
$string['asyncmessagesubject'] = 'Assumpte';
$string['asyncmessagesubjectdefault'] = '{operation} de Moodle completada amb èxit.';
$string['asyncmessagesubjectdetail'] = 'Assumpte del missatge';
$string['asyncnowait'] = 'No cal que espereu ací, donat que el procés continuarà en segon pla.';
$string['asyncprocesspending'] = 'Procés en preparació';
$string['asyncrestorecomplete'] = 'El procés de restauració s\'ha completat';
$string['asyncrestorecompletebutton'] = 'Continua';
$string['asyncrestorecompletedetail'] = 'El procés de restauració s\'ha completat amb èxit. Si cliqueu en continua vos portarà  <a href="{$a}"> al curs per a l\'element restaurat.</a>';
$string['asyncrestoreerror'] = 'El procés de restauració ha fallat';
$string['asyncrestoreerrordetail'] = 'El procés de restauració ha fallat. Contacteu amb qui administra el vostre sistema.';
$string['asyncrestoreinprogress'] = 'Restauració en procés';
$string['asyncrestoreinprogress_help'] = 'Ací es mostren les restauracions de curs asíncrones que estan en progrés.';
$string['asyncrestorepending'] = 'El procés de restauració s\'està preparant';
$string['asyncrestoreprocessing'] = 'La restauració està en progrés';
$string['asyncreturn'] = 'Torna al curs';
$string['autoactivedescription'] = 'Escolliu si voleu fer o no còpies de seguretat automàtiques. Si escolliu \'manual\' aleshores les còpies de seguretat automàtiques només podran fer-se a través de l\'script CLI de còpies de seguretat automàtiques. aquest es pot executar bé manualment al terminal o bé a través del cron.';
$string['autoactivedisabled'] = 'Inhabilitat';
$string['autoactiveenabled'] = 'Habilitat';
$string['autoactivemanual'] = 'Manual';
$string['automatedbackupschedule'] = 'Planificació';
$string['automatedbackupschedulehelp'] = 'Trieu els dies de la setmana en què cal realitzar les còpies de seguretat automàtiques.';
$string['automatedbackupsinactive'] = 'Els administradors del lloc no han habilitat les còpies de seguretat programades';
$string['automatedbackupstatus'] = 'Estat de la còpia de seguretat programada';
$string['automateddeletedays'] = 'Suprimeix les còpies de seguretat més antigues de';
$string['automatedmaxkept'] = 'Nombre màxim de còpies de seguretat a conservar';
$string['automatedmaxkepthelp'] = 'Això especifica el nombre màxim de còpies de seguretat recents que s\'han de conservar en cada curs. Les còpies de seguretat més antigues s\'esborraran de manera automàtica.';
$string['automatedminkept'] = 'Nombre mínim de còpies de seguretat a conservar';
$string['automatedminkepthelp'] = 'Si les còpies de seguretat més antigues d\'un nombre específic de dies s\'esborren, pot succeir que un curs inactiu acabi sense cap còpia de seguretat. Per tal d\'evitar-ho, cal que especifiqueu el nombre mínim de còpies de seguretat que s\'han de conservar.';
$string['automatedsettings'] = 'Paràmetres de la còpia de seguretat programada';
$string['automatedsetup'] = 'Configuració de la còpia de seguretat programada';
$string['automatedstorage'] = 'Emmagatematge de la còpia de seguretat programada';
$string['automatedstoragehelp'] = 'Escolliu la ubicació on voleu que es desin les còpies de seguretat quan es creïn automàticament.';
$string['backupactivity'] = 'Activitat a copiar: {$a}';
$string['backupautoactivitiesdescription'] = 'Estableix els valors per defecte per incloure activitats en una còpia de seguretat. Perquè la paperera de reciclatge funcioni, aquest paràmetre ha d\'estar habilitat.';
$string['backupcourse'] = 'Curs a copiar: {$a}';
$string['backupcoursedetails'] = 'Detalls del curs';
$string['backupcoursesection'] = 'Secció: {$a}';
$string['backupcoursesections'] = 'Seccions del curs';
$string['backupdate'] = 'Data de realització';
$string['backupdetails'] = 'Detalls de la còpia';
$string['backupdetailsnonstandardinfo'] = 'El fitxer seleccionat no és un fitxer de còpia de seguretat estàndard de Moodle. El procés de restauració mirarà de convertir el vostre fitxer de còpia de seguretat al format estàndard i després restaurar-lo.';
$string['backupformat'] = 'Format';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Format desconegut';
$string['backuplog'] = 'Informació tècnica i avisos';
$string['backupmode'] = 'Mode';
$string['backupmode10'] = 'General';
$string['backupmode20'] = 'Importeu';
$string['backupmode30'] = 'Concentrador';
$string['backupmode40'] = 'Mateix lloc';
$string['backupmode50'] = 'Automatitzat';
$string['backupmode60'] = 'Convertit';
$string['backupmode70'] = 'Asíncron';
$string['backupsection'] = 'Secció de curs a copiar: {$a}';
$string['backupsettings'] = 'Paràmetres de la còpia de seguretat';
$string['backupsitedetails'] = 'Detalls del lloc';
$string['backupstage16action'] = 'Continua';
$string['backupstage1action'] = 'Següent';
$string['backupstage2action'] = 'Següent';
$string['backupstage4action'] = 'Fes la còpia';
$string['backupstage8action'] = 'Continua';
$string['backuptype'] = 'Tipus';
$string['backuptypeactivity'] = 'Activitat';
$string['backuptypecourse'] = 'Curs';
$string['backuptypesection'] = 'Secció';
$string['backupversion'] = 'Versió de la còpia de seguretat';
$string['cannotfindassignablerole'] = 'El rol {$a} del fitxer de còpia no es pot fer correspondre amb cap dels rols que us és permès d\'assignar.';
$string['choosefilefromactivitybackup'] = 'Àrea de còpies de seguretat d\'activitats';
$string['choosefilefromactivitybackup_help'] = 'Les còpies de seguretat d\'activitats fetes utilitzant els paràmetres per defecte es desaran aquí.';
$string['choosefilefromautomatedbackup'] = 'Còpies de seguretat automàtiques';
$string['choosefilefromautomatedbackup_help'] = 'Conté còpies de seguretat generades automàticament.';
$string['choosefilefromcoursebackup'] = 'Àrea de còpies de seguretat de cursos';
$string['choosefilefromcoursebackup_help'] = 'Les còpies de seguretat de cursos fetes utilitzant els paràmetres per defecte es desaran aquí.';
$string['choosefilefromuserbackup'] = 'Àrea privada de còpies de seguretat de l\'usuari';
$string['choosefilefromuserbackup_help'] = 'Els fitxers de còpies de seguretat amb informació d\'usuaris anonimitzada es desaran aquí.';
$string['config_keep_groups_and_groupings'] = 'Per defecte mantén els grups i agrupaments actuals.';
$string['config_keep_roles_and_enrolments'] = 'Per defecte mantén els rols i les inscripcions actuals.';
$string['config_overwrite_conf'] = 'Permet a l\'usuari sobreescriure la configuració del curs actual';
$string['config_overwrite_course_fullname'] = 'Per defecte sobreescriu el nom complet del curs amb el del fitxer de la còpia de seguretat. Això requereix que «Sobreescriu la configuració dels curs» estigui marcat i que l\'usuari actual tingui la capacitat de canviar el nom complet del curs (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'Per defecte sobreescriu el nom curt del curs amb el del fitxer de la còpia de seguretat. Això requereix que «Sobreescriu la configuració dels curs» estigui marcat i que l\'usuari actual tingui la capacitat de canviar el nom curt del curs (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'Per defecte sobreescriu la data d\'inici del curs amb la del fitxer de la còpia de seguretat. Això requereix que «Sobreescriu la configuració dels curs» estigui marcat i que l\'usuari actual tingui la capacitat de canviar la dates del curs en la restauració (moodle/restore:rolldates)';
$string['configgeneralactivities'] = 'Estableix el valor per defecte per incloure activitats en una còpia de seguretat.';
$string['configgeneralanonymize'] = 'Si està habilitat, tota la informació pertanyent als usuaris serà anonimitzada per defecte.';
$string['configgeneralbadges'] = 'Estableix el valor per defecte per incloure insígnies en una còpia de seguretat.';
$string['configgeneralblocks'] = 'Estableix el valor per defecte per incloure blocs en una còpia de seguretat.';
$string['configgeneralcalendarevents'] = 'Estableix el valor per defecte per a incloure esdeveniments d\'agenda en una còpia de seguretat.';
$string['configgeneralcomments'] = 'Estableix el valor per defecte per incloure comentaris en una còpia de seguretat.';
$string['configgeneralcompetencies'] = 'Estableix el valor per defecte per a incloure competències en una còpia de seguretat.';
$string['configgeneralcontentbankcontent'] = 'Estableix els valors per defecte per a incloure el contingut del banc de contingut en una còpia de seguretat.';
$string['configgeneralfiles'] = 'Estableix els valors per defecte per a incloure els fitxers en una còpia de seguretat. Avís: Deshabilitar aquest paràmetre farà que només es creen enllaços als fitxers. No és un problema si la còpia de seguretat es restaura en el mateix servidor i els fitxers no s\'han eliminat segons el paràmetre \'Neteja els fitxers de la paperera\' (filescleanupperiod).';
$string['configgeneralfilters'] = 'Estableix el valor per defecte per incloure filtres en una còpia de seguretat.';
$string['configgeneralgroups'] = 'Estableix el valor per defecte per a la inclusió de grups i agrupacions en una còpia de seguretat.';
$string['configgeneralhistories'] = 'Estableix el valor per defecte per incloure l\'historial de l\'usuari en una còpia de seguretat.';
$string['configgenerallogs'] = 'Si està habilitat, s\'inclouran per defecte els registres dins de la còpia de seguretat.';
$string['configgeneralpermissions'] = 'Si s\'habilita, s\'importaran els permisos de rol. Això pot sobreescriure els permisos existents per als usuaris inscrits.';
$string['configgeneralquestionbank'] = 'Si s\'habilita, el banc de preguntes s\'inclourà en les còpies de seguretat per defecte.
TINGUEU EN COMPTE que inhabilitar aquest paràmetre inhabilitarà la còpia de seguretat de les activitats que utilitzin el banc de preguntes, com ara el qüestionari.';
$string['configgeneralroleassignments'] = 'Si està habilitat, s\'inclouran per defecte les assignacions de rols dins de la còpia de seguretat.';
$string['configgeneralusers'] = 'Estableix el valor per defecte per incloure els usuaris en una còpia de seguretat.';
$string['configgeneraluserscompletion'] = 'Si està habilitat, s\'inclourà per defecte la informació de progrés de l\'usuari dins de la còpia de seguretat.';
$string['configlegacyfiles'] = 'Estableix els valors per defecte per incloure fitxers de cursos heretats en una còpia de seguretat. Els fitxers heretats són de versions del Moodle anteriors a la 2.0.';
$string['configloglifetime'] = 'Especifica el temps que es conservarà una còpia de seguretat de la informació del registre. La informació més antiga s\'esborrarà automàticament. Es recomana que aquest valor sigui petit, perquè la còpia de seguretat pot ser molt gran.';
$string['configrestoreactivities'] = 'Estableix els paràmetres per defecte de la restauració de les activitats.';
$string['configrestorebadges'] = 'Estableix els paràmetres per defecte de la restauració de les insígnies.';
$string['configrestoreblocks'] = 'Estableix els paràmetres per defecte de la restauració dels blocs.';
$string['configrestorecalendarevents'] = 'Estableix els paràmetres per defecte de la restauració dels esdeveniments del calendari.';
$string['configrestorecomments'] = 'Estableix els paràmetres per defecte de la restauració dels comentaris.';
$string['configrestorecompetencies'] = 'Estableix els paràmetres per defecte de la restauració des les competències.';
$string['configrestorecontentbankcontent'] = 'Estableix els valors per defecte per a la restauració dels continguts del banc de contingut.';
$string['configrestoreenrolments'] = 'Estableix els paràmetres per defecte de la restauració dels mètodes d\'inscripció.';
$string['configrestorefilters'] = 'Estableix els paràmetres per defecte de la restauració dels filtres.';
$string['configrestoregroups'] = 'Estableix els paràmetres per defecte de la restauració dels grups i agrupaments si estan inclosos a la còpia de seguretat.';
$string['configrestorehistories'] = 'Estableix els paràmetres per defecte de la restauració de l\'historial dels usuaris si està inclòs a la còpia de seguretat.';
$string['configrestorelogs'] = 'Si està habilitat, els registres es restauraran per defecte si estan inclosos a la còpia de seguretat.';
$string['configrestorepermissions'] = 'Si s\'habilita, es restauraran els permisos de rol. Això pot sobreescriure els permisos existents dels usuaris inscrits.';
$string['configrestoreroleassignments'] = 'Si està habilitat, l\'assignació de rols es restaurarà per defecte si està inclosa a la còpia de seguretat.';
$string['configrestoreusers'] = 'Estableix els paràmetres per defecte de la restauració dels usuaris si estan inclosos a la còpia de seguretat.';
$string['configrestoreuserscompletion'] = 'Si està habilitat, la informació de compleció dels usuaris es restaurarà per defecte si està inclosa a la còpia de seguretat.';
$string['confirmcancel'] = 'Cancel·la la còpia';
$string['confirmcancelimport'] = 'Cancel·la la importació';
$string['confirmcancelno'] = 'No la cancel·les';
$string['confirmcancelquestion'] = 'Segur que voleu cancel·lar?
Qualsevol informació que hàgiu introduït es perdrà.';
$string['confirmcancelrestore'] = 'Cancel·la la restauració';
$string['confirmcancelyes'] = 'Cancel·la la còpia de seguretat';
$string['confirmnewcoursecontinue'] = 'Nou advertiment de curs';
$string['confirmnewcoursecontinuequestion'] = 'Durant el procés de restauració del curs, es crearà un curs temporal (amagat). Per cancel·lar el procés de restauració, feu clic a «Cancel·la». No tanqueu el navegador mentre es fa la restauració.';
$string['copiesinprogress'] = 'Aquest curs té còpies en progrés. <a href="{$a}">Mostra les còpies en progrés.</a>';
$string['copycoursedesc'] = 'Es duplicarà el curs i es posarà en la categoria de curs seleccionada.';
$string['copycourseheading'] = 'Còpia un curs';
$string['copycoursetitle'] = 'Còpia el curs: {$a}';
$string['copydest'] = 'Destinació';
$string['copyfieldnotfound'] = 'No s\'ha trobat un camp requerit';
$string['copyformfail'] = 'La tramesa per AJAX del formulari de còpia del curs ha fallat.';
$string['copyingcourse'] = 'Còpia del curs en progrés';
$string['copyingcourseshortname'] = 's\'està copiant';
$string['copyop'] = 'Operació actual';
$string['copyprogressheading'] = 'Còpies del curs en progrés';
$string['copyprogressheading_help'] = 'Aquesta taula mostra l\'estat de totes les vostres còpies del curs sense completar.';
$string['copyprogresstitle'] = 'Progrés de la còpia del curs';
$string['copyreturn'] = 'Copia i retorna';
$string['copysource'] = 'Font';
$string['copyview'] = 'Copia i mostra';
$string['coursecategory'] = 'Categoria en què es restaurarà el curs';
$string['courseid'] = 'ID original';
$string['coursesettings'] = 'Paràmetres del curs';
$string['coursetitle'] = 'Títol';
$string['currentstage1'] = 'Paràmetres inicials';
$string['currentstage16'] = 'Completat';
$string['currentstage2'] = 'Paràmetres de l\'esquema';
$string['currentstage4'] = 'Confirmació i revisió';
$string['currentstage8'] = 'Fes la còpia';
$string['enableasyncbackup'] = 'Habilita les còpies de seguretat asíncrones';
$string['enableasyncbackup_help'] = 'Si s\'habilita, totes les operacions de còpia de seguretat i restauració es realitzaran asíncronament. Això no afecta les importacions ni les exportacions. Les còpies de seguretat i les restauracions asíncrones permeten als usuaris fer altres operacions mentre còpies de seguretat i restauracions estan en progrés.';
$string['enterasearch'] = 'Introduïu una cerca';
$string['error_block_for_module_not_found'] = 'S\'ha trobat una instància de bloc òrfena (id: {$a->bid}) per al curs (id: {$a->mid}). Aquest bloc no es copiarà a la còpia de seguretat.';
$string['error_course_module_not_found'] = 'S\'ha trobat un mòdul de curs orfe (id: {$a}). Aquest mòdul no es copiarà a la còpia de seguretat.';
$string['errorcopyingbackupfile'] = 'No s\'ha pogut copiar el fitxer de la còpia de seguretat a la carpeta temporal abans de restaurar.';
$string['errorfilenamemustbezip'] = 'El nom de fitxer que introduïu ha d\'ésser un fitxer ZIP i ha de tenir l\'extensió .mbz';
$string['errorfilenamerequired'] = 'Cal que introduïu un nom de fitxer vàlid per a aquesta còpia de seguretat';
$string['errorfilenametoolong'] = 'La longitud del nom del fitxer ha de ser inferior a 255 caràcters.';
$string['errorinvalidformat'] = 'Format de còpia de seguretat desconegut';
$string['errorinvalidformatinfo'] = 'El fitxer seleccionat no és un fitxer de còpia de seguretat vàlid per a Moodle i no pot ser restaurat.';
$string['errorminbackup20version'] = 'Aquest fitxer de còpia de seguretat s\'ha creat amb una versió de desenvolupament de Moodle ({$a->backup}). Com a mínim, cal la {$a->min}. No es pot restaurar.';
$string['errorrestorefrontpagebackup'] = 'A la primera plana només es poden restaurar còpies de seguretat de la primera plana.';
$string['executionsuccess'] = 'El fitxer de còpia de seguretat s\'ha creat amb èxit.';
$string['extractingbackupfileto'] = 'S\'està extraient el fitxer de còpia de seguretat a: {$a}';
$string['failed'] = 'La còpia de seguretat ha fallat';
$string['filealiasesrestorefailures'] = 'La restauració dels àlies ha fallat';
$string['filealiasesrestorefailures_help'] = 'Els àlies són enllaços simbòlics a altres fitxers, inclosos els emmagatzemats en repositoris externs. En alguns casos, Moodle no els pot restaurar —per exemple, en restaurar la còpia de seguretat en un altre lloc web o quan el fitxer a què es fa referència no existeix.

Podeu trobar més detalls sobre això i el motiu real de l\'errada al fitxer de registre de restauració.';
$string['filealiasesrestorefailures_link'] = 'restore/filealiases';
$string['filealiasesrestorefailuresinfo'] = 'Alguns àlies inclosos en el fitxer de còpia de seguretat no poden ser restaurats. La següent llista conté la seva ubicació prevista i el fitxer d\'origen on es referien en el lloc web original.';
$string['filename'] = 'Nom del fitxer';
$string['filereferencesincluded'] = 'Les referències de fitxer a continguts externs estan incloses al fitxer de còpia de seguretat. No funcionaran si la còpia es restaura en un lloc web diferent.';
$string['filereferencesnotsamesite'] = 'La còpia de seguretat és d\'un altre lloc web i per tant les referències de fitxers no es poden restaurar.';
$string['filereferencessamesite'] = 'La còpia de seguretat és d\'aquest mateix lloc web; les referències de fitxers es poden restaurar.';
$string['generalactivities'] = 'Inclou les activitats i els recursos';
$string['generalanonymize'] = 'Anonimitza la informació';
$string['generalbackdefaults'] = 'Opcions per defecte genèriques de les còpies de seguretat';
$string['generalbadges'] = 'Inclou insígnies';
$string['generalblocks'] = 'Inclou els blocs';
$string['generalcalendarevents'] = 'Inclou esdeveniments d\'agenda';
$string['generalcomments'] = 'Inclou els comentaris';
$string['generalcompetencies'] = 'Inclou competències';
$string['generalcontentbankcontent'] = 'Inclou el contingut del banc de contingut';
$string['generalenrolments'] = 'Inclou els mètodes d\'inscripció';
$string['generalfiles'] = 'Inclou els fitxers';
$string['generalfilters'] = 'Inclou els filtres';
$string['generalgradehistories'] = 'Inclou historial';
$string['generalgroups'] = 'Inclou grups i agrupaments';
$string['generalhistories'] = 'Inclou les històries';
$string['generallegacyfiles'] = 'Inclou els fitxers del curs heretats';
$string['generallogs'] = 'Inclou els registres';
$string['generalpermissions'] = 'Inclou les excepcions de permisos';
$string['generalquestionbank'] = 'Inclou el banc de preguntes';
$string['generalrestoredefaults'] = 'Paràmetres generals per defecte de la restauració';
$string['generalrestoresettings'] = 'Paràmetres generals de la restauració';
$string['generalroleassignments'] = 'Inclou els assignaments de rols';
$string['generalsettings'] = 'Paràmetres generals de còpia de seguretat';
$string['generalusers'] = 'Inclou els usuaris';
$string['generaluserscompletion'] = 'Inclou la informació de progrés de l\'usuari';
$string['hidetypes'] = 'Amaga opcions del tipus';
$string['importbackupstage16action'] = 'Continua';
$string['importbackupstage1action'] = 'Següent';
$string['importbackupstage2action'] = 'Següent';
$string['importbackupstage4action'] = 'Fes la importació';
$string['importbackupstage8action'] = 'Continua';
$string['importcurrentstage0'] = 'Selecció de curs';
$string['importcurrentstage1'] = 'Configuració inicial';
$string['importcurrentstage16'] = 'Completat';
$string['importcurrentstage2'] = 'Configuració de l\'esquema';
$string['importcurrentstage4'] = 'Confirmació i revisió';
$string['importcurrentstage8'] = 'Fes la importació';
$string['importfile'] = 'Importa un fitxer de còpia de seguretat';
$string['importgeneralduplicateadminallowed'] = 'Permet la resolució de conflictes d\'administració';
$string['importgeneralduplicateadminallowed_desc'] = 'Si el lloc té un compte amb nom d\'usuari "admin", si s\'intenta restaurar un fitxer de còpia de seguretat que conté un compte amb nom d\'usuari "admin" es pot provocar un conflicte. Si s\'habilita aquesta configuració, el conflicte es resol canviant el nom d\'usuari en el fitxer de còpia de seguretat per a «admin_xyz».';
$string['importgeneralmaxresults'] = 'Nombre màxim de cursos enumerats per importar';
$string['importgeneralmaxresults_desc'] = 'Això controla el nombre de cursos que es llisten durant el primer pas del procés d\'importació';
$string['importgeneralsettings'] = 'Paràmetres genèrics per defecte de la importació';
$string['importrootsettings'] = 'Importa els paràmetres';
$string['importsettings'] = 'Configuració d\'importació general';
$string['importsuccess'] = 'S\'ha completat la importació. Cliqueu a continua per tornar al curs.';
$string['includeactivities'] = 'Inclou:';
$string['includeditems'] = 'Elements inclosos:';
$string['includefilereferences'] = 'Referències de fitxer a continguts externs';
$string['includesection'] = 'Secció {$a}';
$string['includeuserinfo'] = 'Dades d\'usuari';
$string['inprogress'] = 'La còpia de seguretat està en progrés';
$string['jumptofinalstep'] = 'Salta al pas final';
$string['keep'] = 'Mantén';
$string['keptroles'] = 'Inclou les inscripcions dels rols';
$string['keptroles_help'] = 'Els usuaris amb els rols triats s\'inscriuran en el nou curs. No es copiarà cap dada d\'usuari llevat que s\'habilite «Inclou dades d\'usuari»';
$string['locked'] = 'Blocat';
$string['lockedbyconfig'] = 'Aquest paràmetre ha estat blocat en la configuració per defecte de les còpies de seguretat';
$string['lockedbyhierarchy'] = 'Blocat per dependències';
$string['lockedbypermission'] = 'No teniu permisos suficients per canviar aquest paràmetre';
$string['loglifetime'] = 'Mantingues els registres de';
$string['managefiles'] = 'Gestiona els fitxers de còpia de seguretat';
$string['mergerestoredefaults'] = 'Paràmetres per defecte de la restauració quan es fusioni dins d\'un altre curs';
$string['missingfilesinpool'] = 'Alguns fitxers no s\'han pogut desar mentre es feia la còpia de seguretat i per tant no serà possible restaurar-los.';
$string['module'] = 'Mòdul';
$string['moodleversion'] = 'Versió de Moodle';
$string['morecoursesearchresults'] = 'S\'han trobat més de {$a} cursos. Es mostraran els primers {$a} resultats.';
$string['moreresults'] = 'Hi ha massa resultats. Introduïu una cerca més específica.';
$string['nomatchingcourses'] = 'No hi ha cursos a mostrar';
$string['norestoreoptions'] = 'No hi ha categories o cursos existents on pugueu restaurar';
$string['originalwwwroot'] = 'URL de la còpia de seguretat';
$string['overwrite'] = 'Sobreescriu';
$string['pendingasyncdeletedetail'] = 'Aquest curs té una còpia de seguretat asíncrona en preparació. <br/> Els cursos no es poden suprimir fins que no acabe aquesta còpia de seguretat.';
$string['pendingasyncdetail'] = 'Les còpies de seguretat asíncrones permeten a un usuari tenir només una còpia de seguretat en preparació per a una font a la vegada. <br/> No es poden posar en cua múltiples còpies de seguretat asíncrones de la mateixa font, donat que això probablement donaria com a resultat múltiples còpies de seguretat amb el mateix contingut.';
$string['pendingasyncedit'] = 'Hi ha una còpia de seguretat asíncrona en preparació per a aquest curs. No editeu aquest curs fins que no s\'acabe la còpia de seguretat.';
$string['pendingasyncerror'] = 'Còpia de seguretat en preparació per a aquest recurs';
$string['preparingdata'] = 'S\'estan preparant les dades';
$string['preparingui'] = 'S\'està preparant per mostrar la pàgina';
$string['previousstage'] = 'Previ';
$string['privacy:metadata:backup:detailsofarchive'] = 'Aquest fitxer pot contenir diverses dades d\'usuari relacionades amb un curs, com ara qualificacions, inscripcions d\'usuari i dades d\'activitat.';
$string['privacy:metadata:backup:externalpurpose'] = 'L\'objectiu d\'aquest fitxer és emmagatzemar informació relacionada amb un curs, que podria ser restaurat en el futur.';
$string['privacy:metadata:backup_controllers'] = 'La llista d\'operacions de còpia de seguretat';
$string['privacy:metadata:backup_controllers:itemid'] = 'L\'id del curs';
$string['privacy:metadata:backup_controllers:operation'] = 'L\'operació que s\'ha realitzat, p. ex. una restauració.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'El moment en què es va crear l\'acció';
$string['privacy:metadata:backup_controllers:timemodified'] = 'El moment en què es va modificar l\'acció';
$string['privacy:metadata:backup_controllers:type'] = 'El tipus d\'element on s\'ha realitzat l\'operació, p. ex. una activitat';
$string['qcategory2coursefallback'] = 'La categoria de preguntes "{$a->name}", originàriament al context sistema/categoria de cursos en el fitxer de còpia de seguretat, es crearà en el context de curs per la restauració';
$string['qcategorycannotberestored'] = 'El procés de restauració no pot crear la categoria de preguntes "{$a->name}"';
$string['question2coursefallback'] = 'La categoria de preguntes "{$a->name}", originàriament al context sistema/categoria de cursos en el fitxer de còpia de seguretat, es crearà en el context de curs per la restauració';
$string['questioncannotberestored'] = 'Les qüestions "{$a->name}"  no es poden crear per a restaurar';
$string['recyclebin_desc'] = 'Fixeu-vos que aquests paràmetres els utilitzarà també la paperera de reciclatge.';
$string['replacerestoredefaults'] = 'Paràmetres per defecte de la restauració quan es restauri dins d\'un altre curs suprimint els continguts';
$string['restoreactivity'] = 'Restaura una activitat';
$string['restorecourse'] = 'Restaura un curs';
$string['restorecoursesettings'] = 'Configuració del curs';
$string['restoredcourseid'] = 'ID del curs restaurat: {$a}';
$string['restoreexecutionsuccess'] = 'El curs s\'ha restaurat satisfactòriament. Si cliqueu el botó Continua del dessota veureu el curs restaurat.';
$string['restorefileweremissing'] = 'Alguns fitxers no s\'han pogut restaurar perquè no es troben en la còpia de seguretat.';
$string['restorenewcoursefullname'] = 'Nom del nou curs';
$string['restorenewcourseshortname'] = 'Nom curt del nou curs';
$string['restorenewcoursestartdate'] = 'Data inicial nova';
$string['restorerolemappings'] = 'Restaura unes assignacions de rols';
$string['restorerootsettings'] = 'Paràmetres de la restauració';
$string['restoresection'] = 'Restaura una secció';
$string['restorestage1'] = 'Confirma';
$string['restorestage16'] = 'Revisa';
$string['restorestage16action'] = 'Inicia la restauració';
$string['restorestage1action'] = 'Següent';
$string['restorestage2'] = 'Destí';
$string['restorestage2action'] = 'Següent';
$string['restorestage32'] = 'Processa';
$string['restorestage32action'] = 'Continua';
$string['restorestage4'] = 'Configuració';
$string['restorestage4action'] = 'Següent';
$string['restorestage64'] = 'Completat';
$string['restorestage64action'] = 'Continua';
$string['restorestage8'] = 'Esquema';
$string['restorestage8action'] = 'Següent';
$string['restoretarget'] = 'Destí de la restauració';
$string['restoretocourse'] = 'Restaureu el curs:';
$string['restoretocurrentcourse'] = 'Restaura sobre aquest curs';
$string['restoretocurrentcourseadding'] = 'Combina la còpia de seguretat amb aquest curs';
$string['restoretocurrentcoursedeleting'] = 'Esborra els continguts d\'aquest curs i després restaura';
$string['restoretoexistingcourse'] = 'Restaura sobre un curs existent';
$string['restoretoexistingcourseadding'] = 'Combina la còpia de seguretat amb el curs existent';
$string['restoretoexistingcoursedeleting'] = 'Esborra els continguts del curs existent i després restaura';
$string['restoretonewcourse'] = 'Restaura com un nou curs';
$string['restoringcourse'] = 'S\'està restaurant el curs';
$string['restoringcourseshortname'] = 's\'està restaurant';
$string['rootenrolmanual'] = 'Restaura com a inscripcions manuals';
$string['rootsettingactivities'] = 'Inclou les activitats i els recursos';
$string['rootsettinganonymize'] = 'Anonimitza la informació de l\'usuari';
$string['rootsettingbadges'] = 'Inclou insígnies';
$string['rootsettingblocks'] = 'Inclou els blocs';
$string['rootsettingcalendarevents'] = 'Inclou els esdeveniments de calendari';
$string['rootsettingcomments'] = 'Inclou els comentaris';
$string['rootsettingcompetencies'] = 'Inclou les competències';
$string['rootsettingcontentbankcontent'] = 'Inclou el contingut del banc de contingut';
$string['rootsettingcustomfield'] = 'Inclou els camps personalitzats';
$string['rootsettingenrolments'] = 'Inclou mètodes d\'inscripció';
$string['rootsettingenrolments_always'] = 'Sí, sempre';
$string['rootsettingenrolments_never'] = 'No, restaura els usuaris com inscripcions manuals';
$string['rootsettingenrolments_withusers'] = 'Sí, però sols si els usuaris estan inclosos';
$string['rootsettingfiles'] = 'Inclou els fitxers';
$string['rootsettingfilters'] = 'Inclou els filtres';
$string['rootsettinggradehistories'] = 'Inclou l\'historial de qualificacions';
$string['rootsettinggroups'] = 'Inclou grups i agrupacions';
$string['rootsettingimscc1'] = 'Converteix a IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Converteix a IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = 'Inclou els fitxers del curs heretats';
$string['rootsettinglogs'] = 'Inclou els registres del curs';
$string['rootsettingpermissions'] = 'Inclou les excepcions de permisos';
$string['rootsettingquestionbank'] = 'Inclou el banc de preguntes';
$string['rootsettingroleassignments'] = 'Inclou les assignacions de rols de l\'usuari';
$string['rootsettings'] = 'Configuració de les còpies de seguretat';
$string['rootsettingusers'] = 'Inclou els usuaris registrats';
$string['rootsettinguserscompletion'] = 'Inclou els detalls de progrés de l\'usuari';
$string['samesitenotification'] = 'Aquesta còpia de seguretat es va crear només amb enllaços als fitxers, no amb els fitxers. La restauració funcionarà només en aquest servidor.';
$string['sectionactivities'] = 'Activitats';
$string['sectioninc'] = 'Inclòs a la còpia de seguretat (sense informació d\'usuari)';
$string['sectionincanduser'] = 'Inclòs a la còpia de seguretat juntament amb la informació d\'usuari';
$string['selectacategory'] = 'Escolliu una categoria';
$string['selectacourse'] = 'Escolliu un curs';
$string['setting_course_fullname'] = 'Nom del curs';
$string['setting_course_shortname'] = 'Nom curt del curs';
$string['setting_course_startdate'] = 'Data d\'inici del curs';
$string['setting_keep_groups_and_groupings'] = 'Desa el grups actuals i els agrupaments.';
$string['setting_keep_roles_and_enrolments'] = 'Desa els rols actuals i les inscripcions.';
$string['setting_overwrite_conf'] = 'Sobreescriu la configuració dels curs';
$string['setting_overwrite_course_fullname'] = 'Sobreescriu el nom complet del curs';
$string['setting_overwrite_course_shortname'] = 'Sobreescriu el nom curt del curs';
$string['setting_overwrite_course_startdate'] = 'Sobreescriu la data d\'inici del curs';
$string['showtypes'] = 'Mostra les opcions del tipus';
$string['sitecourseformatwarning'] = 'Aquesta és una copia de seguretat de la primera plana, fixeu-vos que sols es pot restaurar a la primera plana.';
$string['skiphidden'] = 'Omet els cursos ocults';
$string['skiphiddenhelp'] = 'Trieu si voleu o no voleu ometre els cursos ocults';
$string['skipmodifdays'] = 'Omet els cursos no modificats des de';
$string['skipmodifdayshelp'] = 'Trieu ometre els cursos que no s\'hagin modificat des d\'un nombre de dies';
$string['skipmodifprev'] = 'Omet cursos no modificats des de la còpia de seguretat anterior';
$string['skipmodifprevhelp'] = 'Trieu ometre o no els cursos que no s\'hagin modificat des de la còpia de seguretat anterior. Cal que els registres estiguin habilitats per tal que funcioni.';
$string['status'] = 'Estat';
$string['storagecourseandexternal'] = 'Àrea de còpies de seguretat del curs i del directori especificat';
$string['storagecourseonly'] = 'Àrea de còpies de seguretat del curs';
$string['storageexternalonly'] = 'Directori de còpies de seguretat automàtiques especificat';
$string['successful'] = 'S\'ha completat la còpia de seguretat correctament';
$string['successfulcopy'] = 'S\'ha completat la còpia correctament';
$string['successfulrestore'] = 'S\'ha completat la restauració correctament';
$string['timetaken'] = 'Temps emprat';
$string['title'] = 'Títol';
$string['totalcategorysearchresults'] = 'Total de categories: {$a}';
$string['totalcoursesearchresults'] = 'Total de cursos: {$a}';
$string['undefinedrolemapping'] = 'El mapatge de rols no està definit per l\'arquetip «{$a}».';
$string['unnamedsection'] = 'Secció sense nom';
$string['userdata'] = 'Inclou dades d\'usuari';
$string['userdata_help'] = 'Si s\'habilita, dades com ara missatges en els fòrums, trameses a tasques, etc. es copiaran al nou curs per a qualsevol usuari amb el rol triat en \'Inclou les inscripcions dels rols\'';
$string['userinfo'] = 'Informació d\'usuari';
