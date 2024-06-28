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
 * Strings for component 'offlinequiz', language 'ca', version '4.1'.
 *
 * @package     offlinequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Afegeix';
$string['addarandomquestion'] = 'preguntes de manera aleatòria';
$string['addarandomquestion_help'] = 'Moodle afegeix una selecció aleatòria de preguntes d’elecció múltiple (o preguntes d\'elecció múltiple de tot o res) al grup del qüestionari fora de línia actual. Podeu configurar el nombre de preguntes que s’han d’afegir. Les preguntes es trien entre la categoria de pregunta actual (i les seves subcategories, en cas que les seleccioneu).';
$string['addarandomselectedquestion'] = 'Afegeix una pregunta seleccionada de manera aleatòria...';
$string['addlist'] = 'Afegeix una llista d’assistència';
$string['addnewpagesafterselected'] = 'Afegeix salts de pàgina després de les preguntes seleccionades';
$string['addnewquestion'] = 'una pregunta nova';
$string['addnewquestionsqbank'] = 'Afegeix preguntes a la categoria {$a->catname}: {$a->link}';
$string['addnewuseroverride'] = 'Afegeix una excepció d’usuari';
$string['addpagebreak'] = 'Afegeix un salt de pàgina';
$string['addpagehere'] = 'Afegeix una pàgina aquí';
$string['addparts'] = 'Afegeix participants';
$string['addquestionfrombankatend'] = 'Afegeix al final des del banc de preguntes';
$string['addquestionfrombanktopage'] = 'Afegeix a la pàgina {$a} des del banc de preguntes';
$string['addrandom'] = 'Afegeix de manera aleatòria {$a} pregunta/es d’opció múltiple';
$string['addrandomfromcategory'] = 'preguntes de manera aleatòria';
$string['addrandomquestion'] = 'preguntes de manera aleatòria';
$string['addrandomquestiontoofflinequiz'] = 'S\'estan afegint preguntes al qüestionari fora de línia {$a->name} (group {$a->group})';
$string['addrandomquestiontopage'] = 'Afegeix una pregunta aleatòria a la pàgina {$a}';
$string['addtoofflinequiz'] = 'Afegeix al qüestionari fora de línia';
$string['addtoqueue'] = 'Afegeix a la cua';
$string['allinone'] = 'Il·limitat';
$string['alllists'] = 'Totes les llistes';
$string['allornothing'] = 'Tot o res';
$string['allresults'] = 'Mostra tots els resultats';
$string['allstudents'] = 'Mostra tots els estudiants';
$string['alwaysavailable'] = 'Sempre disponible';
$string['analysis'] = 'Anàlisi d’elements';
$string['answerform'] = 'Formulari de respostes';
$string['answerformforgroup'] = 'Formulari de resposta per al grup {$a}';
$string['answerforms'] = 'Formularis de respostes';
$string['answerpdfxy'] = 'Formulari de respostes ({$a}->maxquestions questions / {$a}->maxanswers options)';
$string['areyousureremoveselected'] = 'Confirmeu que voleu eliminar totes les preguntes seleccionades?';
$string['attemptexists'] = 'Hi ha un intent';
$string['attemptsexist'] = 'Ja no podeu afegir ni suprimir preguntes.';
$string['attemptsnum'] = 'Resultats: {$a}';
$string['attemptsonly'] = 'Mostra només els estudiants amb resultats';
$string['attendanceoverview'] = 'Assistències';
$string['attendances'] = 'Assistències';
$string['attendancesheadline'] = 'Assistències';
$string['backtopreview'] = 'Mostra la vista prèvia';
$string['basicideasofofflinequiz'] = 'Les idees bàsiques per fer qüestionaris fora de línia';
$string['blackwhitethreshold'] = 'Llindar blanc/negre.';
$string['bulksavegrades'] = 'Desa les qualificacions';
$string['calibratescanner'] = 'Calibra l’escàner';
$string['cannoteditafterattempts'] = 'No podeu afegir ni suprimir preguntes, perquè ja hi ha resultats complets. ({$a})';
$string['category'] = 'Categoria';
$string['changed'] = 'S’ha canviat el resultat.';
$string['changeevaluationmode'] = 'Canvia el mode d\'avaluació. Només es pot fer si l\'administrador ho autoritza.';
$string['checkparts'] = 'Marca els participants seleccionats com a presents';
$string['checkuserid'] = 'Comprova l’identificador (ID) del grup o de l\'usuari';
$string['chooseagroup'] = 'Tria un grup...';
$string['closebeforeopen'] = 'No s’ha pogut actualitzar el qüestionari fora de línia. Heu especificat una data de tancament anterior a la data d’obertura.';
$string['closestudentview'] = 'Tanca la visualització de l’estudiant';
$string['closewindow'] = 'Tanca la finestra';
$string['cmmissing'] = 'No s’ha trobat el mòdul del curs del qüestionari fora de línia amb l\'identificador (ID) següent: {$a}';
$string['configblackwhitethreshold'] = 'Estableix el llindar de la conversió blanc/negre entre 1 i 99. Com més alt sigui el valor, més blanc haurà de ser el píxel importat perquè es reconegui com a blanc. Qualsevol altre valor no comporta cap conversió blanc/negre.';
$string['configdecimalplaces'] = 'Nombre de dígits que s\'han de mostrar després del punt decimal quan es mostrin les qualificacions del qüestionari fora de línia.';
$string['configdisableimgnewlines'] = 'Aquesta opció inhabilita les línies noves abans i després de les imatges dels fulls de preguntes en PDF. Atenció: això pot generar problemes de format.';
$string['configexperimentalevaluation'] = 'Avaluació experimental dels fulls de respostes';
$string['configexperimentalevaluationdesc'] = 'NO HO UTILITZEU EN PRODUCCIÓ! Aquesta opció s’empra per fer les proves alfa del nou algorisme d’avaluació. Si seleccioneu l’opció «sí», podreu activar-la a les opcions de la instància dels qüestionaris fora de línia. No és gens recomanable fer servir aquesta opció. Teniu en compte que, si activeu aquesta opció i perdeu dades, no rebreu assistència de cap tipus.';
$string['configintro'] = 'Els valors que establiu aquí s\'empraran com a valors per defecte a la configuració dels qüestionaris fora de línia nous.';
$string['configkeepfilesfordays'] = 'Estableix el nombre de dies que els fitxers d\'imatge pujats es mantenen a l\'emmagatzematge temporal. Durant aquest període els fitxers d’imatge estaran disponibles a l’informe de l’administrador dels qüestionaris fora de línia.';
$string['configonlylocalcategories'] = 'No es permeten categories de preguntes compartides.';
$string['configpapergray'] = 'valor blanc del paper emprat per avaluar els fulls de respostes';
$string['configshuffleanswers'] = 'Mescla les respostes';
$string['configshufflequestions'] = 'Si habiliteu aquesta opció, l’ordre de les preguntes dels grups de qüestionaris fora de línia es mesclarà de manera aleatòria cada vegada que torneu a crear una vista prèvia a la pestanya «Crea formularis».';
$string['configshufflewithin'] = 'Si habiliteu aquesta opció, les parts que formen les preguntes individuals es mesclaran de manera aleatòria en crear els formularis de preguntes i respostes.';
$string['configuseridentification'] = 'Una fórmula que defineix la identificació de l’usuari. Aquesta fórmula s’empra per assignar formularis de respostes als usuaris del sistema.';
$string['confirmremovequestion'] = 'Confirmeu que voleu suprimir aquesta pregunta {$a}?';
$string['copy'] = 'Copia';
$string['copyright'] = '<strong>Atenció: els textos d’aquesta pàgina són només per al vostre ús personal. Com qualsevol altre text, aquestes preguntes estan subjectes a restriccions de drets d’autor. No teniu permís per fer-ne còpies ni per mostrar-les a altres persones.</strong>';
$string['copyselectedtogroup'] = 'Afegeix les preguntes seleccionades al grup: {$a}';
$string['copytogroup'] = 'Afegeix totes les preguntes al grup: {$a}';
$string['correct'] = 'corregeix';
$string['correcterror'] = 'resol';
$string['correctforgroup'] = 'Respostes correctes per al grup {$a}';
$string['correctheader'] = 'S\'han de corregir:';
$string['correctionerrors'] = 'Formularis amb errors de correcció:';
$string['correctionform'] = 'Correcció';
$string['correctionforms'] = 'Formularis de correcció';
$string['correctionoptionsheading'] = 'Opcions de correcció';
$string['correctupdated'] = 'Formulari de correcció actualitzat per al grup {$a}.';
$string['couldnotgrab'] = 'No s’ha pogut capturar la imatge {$a}';
$string['couldnotregister'] = 'No s’ha pogut registrar l’usuari {$a}';
$string['createcategoryandaddrandomquestion'] = 'Crea una categoria i afegeix-hi una pregunta aleatòria';
$string['createlistfirst'] = 'Afegeix participants';
$string['createofflinequiz'] = 'Crea formularis';
$string['createpartpdferror'] = 'El formulari PDF de la llista de participants {$a} no s’ha pogut crear. Potser que la llista estigui buida.';
$string['createpdf'] = 'Formulari';
$string['createpdferror'] = 'El formulari del grup {$a} no s’ha pogut crear. Potser que no hi hagi cap pregunta al grup.';
$string['createpdffirst'] = 'Crea una llista PDF en primer lloc';
$string['createpdfforms'] = 'Crea formularis';
$string['createpdfs'] = 'Formularis';
$string['createpdfsparticipants'] = 'Formularis';
$string['createquestionandadd'] = 'Crea una pregunta nova i afegeix-la al qüestionari.';
$string['createquiz'] = 'Crea formularis';
$string['csvfile'] = 'Fitxer CSV';
$string['csvformat'] = 'Fitxer de text de valors separats per comes (CSV)';
$string['csvplus1format'] = 'Fitxer de text amb dades en brut (CSV)';
$string['csvpluspointsformat'] = 'Fitxer de text amb punts (CSV)';
$string['darkgray'] = 'Gris fosc';
$string['datanotsaved'] = 'No s’ha pogut desar la configuració';
$string['decimalplaces'] = 'Nombre de decimals';
$string['decimalplaces_help'] = 'Nombre de dígits que s\'han de mostrar després del punt decimal quan es mostrin les qualificacions del qüestionari fora de línia.';
$string['defaultparticipantsusage'] = 'Registra l’assistència';
$string['defaultparticipantsusagedesc'] = 'Determina si les assistències s’han de registrar per defecte amb llistes d’assistència.';
$string['deletelistcheck'] = 'Confirmeu que voleu suprimir les pàgines seleccionades?';
$string['deletepagecheck'] = 'Confirmeu que voleu suprimir les pàgines seleccionades?';
$string['deletepagesafterselected'] = 'Suprimeix els salts de pàgina després de les preguntes seleccionades';
$string['deletepartcheck'] = 'Confirmeu que voleu suprimir els participants seleccionats?';
$string['deleteparticipantslist'] = 'Suprimeix la llista de participants';
$string['deletepdfs'] = 'Suprimeix els documents';
$string['deleteresultcheck'] = 'Confirmeu que voleu suprimir els resultats seleccionats?';
$string['deleteselectedpart'] = 'Suprimeix els participants seleccionats';
$string['deleteselectedresults'] = 'Suprimeix els resultats seleccionats';
$string['deletethislist'] = 'Suprimeix aquesta llista';
$string['deleteupdatepdf'] = 'Suprimeix i actualitza els formularis PDF';
$string['difficultytitle'] = 'Dificultat';
$string['difficultytitlea'] = 'Dificultat A';
$string['difficultytitleb'] = 'Dificultat B';
$string['difficultytitlediff'] = 'Diferència';
$string['disableimgnewlines'] = 'Inhabilita les línies noves abans i després de les imatges';
$string['displayoptions'] = 'Opcions de visualització';
$string['documentschanged'] = 'S’han modificat una o més preguntes del qüestionari fora de línia d’ençà que es van crear els documents.<br>Els resultats futurs es tornaran a qualificar de manera automàtica durant l’avaluació d’acord amb la versió actual de la/les pregunta/es seleccionada/es aquí. La versió original de la/les pregunta/es encara es mostrarà als documents.';
$string['documentschangedwithresults'] = 'S’han modificat una o més preguntes del qüestionari fora de línia d’ençà que es van crear els documents.<br>Els resultats actuals s’han tornat a qualificar de manera automàtica d’acord amb la versió actual de la/les pregunta/es seleccionada/es aquí. La versió original de la/les pregunta/es encara es mostrarà als documents.';
$string['done'] = 'fet';
$string['downloadallzip'] = 'Descarrega tots els fitxers com a ZIP';
$string['downloadpartpdf'] = 'Descarrega el fitxer PDF de la llista «{$a}»';
$string['downloadpdfs'] = 'Formularis';
$string['downloadresultsas'] = 'Descarrega els resultats com a:';
$string['dragtoafter'] = 'Després de {$a}';
$string['dragtostart'] = 'Al començament';
$string['editgroupquestions'] = 'Edita les preguntes del grup';
$string['editgroups'] = 'Edita els grups fora de línia';
$string['editingofflinequiz'] = 'S\'estan editant les preguntes del grup';
$string['editingofflinequiz_help'] = 'En crear un qüestionari fora de línia, els conceptes principals són els següents:
<ul><li> El qüestionari fora de línia, que conté les preguntes en una pàgina o més</li>
<li> El banc de preguntes, que emmagatzema còpies de totes les preguntes organitzades dins categories </li></ul>';
$string['editingofflinequizx'] = 'Preguntes';
$string['editlist'] = 'Edita la llista';
$string['editlists'] = 'Llistes d’assistència';
$string['editmaxmark'] = 'Edita la puntuació màxima';
$string['editofflinequiz'] = 'Edita un qüestionari fora de línia';
$string['editofflinesettings'] = 'Edita la configuració sense connexió';
$string['editorder'] = 'Edita l’ordre';
$string['editparticipants'] = 'Edita els participants';
$string['editquestion'] = 'Edita la pregunta';
$string['editquestionlistitem'] = '{$a}';
$string['editquestions'] = 'Preguntes';
$string['editscannedform'] = 'Edita el formulari escanejat';
$string['editthislist'] = 'Edita aquesta llista';
$string['emptygroups'] = 'Alguns grups del qüestionari fora de línia són buits. Afegiu-hi preguntes.';
$string['enroluser'] = 'Inscriu l’usuari';
$string['erroraccessingreport'] = 'No teniu permís per veure aquest informe.';
$string['errormultiuserinlist'] = 'L’usuari apareix més d’una vegada a les llistes d’assistència';
$string['errorreport'] = 'Informe d’errors d’importació';
$string['evaluated'] = 'S\'han avaluat:';
$string['evaluation'] = '2. Avaluació';
$string['eventattemptdeleted'] = 'S’ha suprimit l’intent del qüestionari fora de línia';
$string['eventattemptpreviewstarted'] = 'S\'ha iniciat la previsualització de l\'intent del qüestionari fora de línia';
$string['eventattemptreviewed'] = 'S\'ha revisat l\'intent del qüestionari fora de línia';
$string['eventattemptsummaryviewed'] = 'S\'ha mostrat el resum de l\'intent del qüestionari fora de línia';
$string['eventattemptviewed'] = 'S\'ha mostrat l\'intent del qüestionari fora de línia';
$string['eventdocscreated'] = 'S’han creat els formularis de preguntes i respostes del qüestionari fora de línia';
$string['eventdocsdeleted'] = 'S’han suprimit els formularis de preguntes i respostes del qüestionari fora de línia';
$string['eventeditpageviewed'] = 'S\'ha visualitzat la pàgina d\'edició del qüestionari fora de línia';
$string['eventofflinequizattemptsubmitted'] = 'S\'ha tramès l\'intent del qüestionari fora de línia';
$string['eventoverridecreated'] = 'S\'ha creat l\'excepció per al qüestionari fora de línia';
$string['eventoverridedeleted'] = 'S\'ha suprimit l\'excepció del qüestionari fora de línia';
$string['eventoverrideupdated'] = 'S\'ha actualitzat l\'excepció del qüestionari fora de línia';
$string['eventparticipantmarked'] = 'S\'ha puntuat manualment el participant del qüestionari fora de línia';
$string['eventquestionmanuallygraded'] = 'S\'ha qualificat la pregunta de manera manual';
$string['eventreportviewed'] = 'S\'ha visualitzat l\'informe del qüestionari fora de lína';
$string['eventresultsregraded'] = 'S\'han tornat a qualificar els resultats del qüestionari fora de línia';
$string['everythingon'] = 'habilitat';
$string['excelformat'] = 'Full de càlcul d’Excel (XLSX)';
$string['experimentalevaluation'] = 'Avaluació experimental dels fulls de respostes';
$string['experimentalevaluation_help'] = 'Avaluació experimental dels fulls de respostes';
$string['fileformat'] = 'Format dels fulls de preguntes';
$string['fileformat_help'] = 'Trieu el format dels fulls de preguntes (PDF, DOCX o TEX). Els formularis de respostes i els fulls de correcció sempre es generen en format PDF.';
$string['fileprefixanswer'] = 'formulari_resposta';
$string['fileprefixcorrection'] = 'formulari_correccio';
$string['fileprefixform'] = 'formulari_pregunta';
$string['fileprefixparticipants'] = 'llista_participants';
$string['filesizetolarge'] = 'Alguns dels vostres fitxers d’imatges són massa grans. Es redimensionaran durant el procés d’interpretació. Intenteu escanejar-los amb una resolució entre 200 i 300 dpi, i en blanc i negre. D’aquesta manera, la pròxima vegada la interpretació serà més àgil.';
$string['filterbytags'] = 'Filtra per etiquetes...';
$string['fontsize'] = 'Mida de la lletra';
$string['forautoanalysis'] = 'Per a l\'anàlisi automàtica';
$string['formforcorrection'] = 'Formulari de correcció del grup {$a}';
$string['formforgroup'] = 'Formulari de preguntes per al grup {$a}';
$string['formforgroupdocx'] = 'Formulari de preguntes per al grup {$a} (DOCX)';
$string['formforgrouplatex'] = 'Formulari de preguntes per al grup {$a} (LATEX)';
$string['forms'] = 'Formularis';
$string['formsexist'] = 'Ja s’han creat els formularis.';
$string['formsexistx'] = 'Ja s’han creat els formularis (<a href="{$a}">Descarrega els formularis</a>)';
$string['formsheetsettings'] = 'Configuració del formulari';
$string['formspreview'] = 'Previsualització';
$string['formwarning'] = 'No s’ha definit un formulari de respostes. Contacteu amb l’administrador.';
$string['fromquestionbank'] = 'del banc de preguntes';
$string['functiondisabledbysecuremode'] = 'Aquesta funcionalitat està inhabilitada actualment';
$string['generalfeedback'] = 'Retroacció general';
$string['generalfeedback_help'] = 'La retroacció general és el text que es mostra després d’un intent de respondre una pregunta. Sempre es mostra la mateixa retroacció general, a diferència de la retroacció d’una pregunta específica, la qual depèn de la resposta donada.';
$string['generatepdfform'] = 'Genera el formulari en PDF';
$string['grade'] = 'Qualificació';
$string['gradedon'] = 'Qualificat el';
$string['gradedscannedform'] = 'Formulari escanejat amb qualificacions';
$string['gradeiszero'] = 'Nota: la qualificació màxima d’aquest qüestionari fora de línia és 0 punts';
$string['gradeswarning'] = 'Les preguntes s’han de puntuar amb números';
$string['gradewarning'] = 'La pregunta s’ha de puntuar amb un número';
$string['gradingofflinequiz'] = 'Qualificacions';
$string['gradingofflinequizx'] = 'Qualificacions';
$string['gradingoptionsheading'] = 'Opcions de qualificació';
$string['greeniscross'] = 'comptat com una creu';
$string['group'] = 'Grup';
$string['groupoutofrange'] = 'El grup estava fora de rang i s’ha substituït amb el grup A.';
$string['hasresult'] = 'El resultat existeix';
$string['hotspotdeletiontask'] = 'Supressió de zones sensibles';
$string['idnumber'] = 'Número ID';
$string['imagefile'] = 'Fitxer d’imatge';
$string['imagenotfound'] = 'No s\'ha trobat el fitxer d’imatge: {$a}';
$string['imagenotjpg'] = 'La imatge no està en format JPG o PNG: {$a}';
$string['imagickwarning'] = 'No s’ha trobat ImageMagick: sol·liciteu a l’administrador del vostre sistema que instal·li la llibreria ImageMagick i que comprovi la ruta per convertir binaris a la configuració del filtre de notació TeX. No podeu importar fitxers TIF sense ImageMagick.';
$string['import'] = 'Avalua';
$string['importedon'] = 'Es va avaluar el';
$string['importerror11'] = 'Hi ha altres resultats';
$string['importerror12'] = 'L’usuari no està registrat';
$string['importerror13'] = 'No hi ha cap dada d’aquest grup';
$string['importerror14'] = 'No s’ha pogut seleccionar';
$string['importerror15'] = 'Marques poc clares';
$string['importerror16'] = 'Error de pàgina';
$string['importerror17'] = 'Pàgines incompletes';
$string['importerror21'] = 'No s’ha pogut marcar';
$string['importerror22'] = 'Marques poc clares';
$string['importerror23'] = 'L’usuari no és a la llista';
$string['importerror24'] = 'No s\'ha detectat la llista';
$string['importforms'] = 'Penja els formularis de respostes';
$string['importfromto'] = 'S\'estan avaluant {$a->from} a {$a->to} de {$a->total}.';
$string['importisfinished'] = 'S’ha completat l’avaluació del qüestionari fora de línia {$a}.';
$string['importlinkresults'] = 'Enllaç als resultats: {$a}';
$string['importlinkverify'] = 'Enllaç a la verificació: {$a}';
$string['importmailsubject'] = 'Notificació de la importació del qüestionari fora de línia';
$string['importnew'] = 'Avalua';
$string['importnew_help'] = '<p>Es poden importar un o més fitxers d’imatge escanejats en format ZIP. El mòdul de qüestionari fora de línia processarà els fitxers d’imatge en segon pla.
Els noms dels fitxers no es tenen en compte, però no poden contenir caràcters especials (p. ex.: dièresi). Les imatges han d’estar en format GIF, PNG o TIF. És recomanable fer servir una resolució d’entre 200 i 300 dpi.</p>';
$string['importnumberexisting'] = 'Nombre de formularis dobles: {$a}';
$string['importnumberpages'] = 'Nombre de pàgines importades amb èxit: {$a}';
$string['importnumberresults'] = 'Nombre d\'importacions: {$a}';
$string['importnumberverify'] = 'Nombre de formularis que requereixen verificació: {$a}';
$string['importtimefinish'] = 'El procés ha finalitzat: {$a}';
$string['importtimestart'] = 'El procés s\'ha iniciat: {$a}';
$string['inconsistentdata'] = 'Dades inconsistents: {$a}';
$string['info'] = 'Informació';
$string['infoshort'] = 'i';
$string['insecuremarkings'] = 'Cal corregir manualment les marques poc clares';
$string['insecuremarkingsforquestion'] = 'Cal corregir manualment les marques poc clares de la pregunta';
$string['insertnumber'] = 'Inseriu el número d\'identificació correcte marcat amb el quadre blau.';
$string['instruction1'] = 'Aquest formulari de respostes s’escanejarà de manera automàtica. No el doblegueu ni el taqueu. Utilitzeu un bolígraf de color negre o blau per marcar els camps:';
$string['instruction2'] = 'Les marques han de ser clares perquè es puguin interpretar de manera correcta. Si voleu rectificar una marca, empleneu completament la casella amb color. Així, el camp s’interpretarà com una casella buida:';
$string['instruction3'] = 'Les caselles modificades no es poden tornar a marcar. No escriviu res defora de les caselles.';
$string['introduction'] = 'Introducció';
$string['invalidformula'] = 'La fórmula d’identificació d’usuari no és vàlida. La fórmula ha de tenir el format següent <prefix>[<#digits>]<suffix>=<db-field&>.';
$string['invalidnumberofdigits'] = 'El nombre de dígits no és vàlid. Només es permeten d’1 a 9 dígits.';
$string['invaliduserfield'] = 'Camp no vàlid de la taula d\'usuari utilitzada.';
$string['invigilator'] = 'Vigilant';
$string['ischecked'] = 'La participació està marcada';
$string['isnotchecked'] = 'La participació no està marcada';
$string['itemdata'] = 'Dades de l’element';
$string['keepfilesfordays'] = 'Conserva els fitxers durant dies';
$string['legend'] = 'Llegenda';
$string['legenddone'] = 'S’ha completat la passa amb èxit (no es requereix cap altra acció).';
$string['legendnextitem'] = 'Es requereix una acció en el flux de treball posterior (això pot dependre de passes prèvies).';
$string['legendnoaction'] = 'No es requereix cap acció.';
$string['legendwarning'] = 'Es requereix una acció immediata.';
$string['letter'] = 'Lletra';
$string['lightgray'] = 'Gris clar';
$string['linktoscannedform'] = 'Mostra el formulari escanejat';
$string['listnotdetected'] = 'No s’ha detectat el codi de barres de la llista';
$string['logdeleted'] = 'S’ha suprimit l’entrada del registre {$a}.';
$string['logourl'] = 'URL del logo';
$string['logourldesc'] = 'URL d’un fitxer d’imatge que apareixerà a la part superior dreta dels formularis de respostes, p. ex. <b>http://www.yoursite.tld/mylogo.png</b> o <b>../path/to/your/logo.png</b>. La mida màxima permesa és 520x140 píxels. No es poden avaluar els formularis de respostes que contenen imatges més grosses.';
$string['lowertrigger'] = 'Segon límit inferior';
$string['lowertriggerzero'] = 'El segon límit inferior és zero';
$string['lowerwarning'] = 'Primer límit inferior';
$string['lowerwarningzero'] = 'El primer límit inferior és zero';
$string['marginwarning'] = 'Imprimiu els fitxers PDF següents sense marges addicionals.<br /> Eviteu lliurar fotocòpies als estudiants.';
$string['marks'] = 'Qualificacions';
$string['matrikel'] = 'número de l’estudiant';
$string['maxgradewarning'] = 'La qualificació màxima ha de ser un número!';
$string['missingimagefile'] = 'Falta el fitxer d’imatge';
$string['missingitemdata'] = 'Falten respostes de l’usuari {$a}';
$string['missinglogdata'] = 'Falten dades del registre del resultat actual.';
$string['missingquestion'] = 'Sembla que aquesta pregunta ja no existeix';
$string['missinguserid'] = 'Falta el número d’identificació de l’usuari! No s’ha pogut llegir el codi de barres!';
$string['modulename'] = 'Qüestionari fora de línia';
$string['modulename_help'] = 'El professor pot dissenyar qüestionaris sense connexió de preguntes d’elecció múltiple amb aquest mòdul.
Aquestes preguntes s’emmagatzemen al banc de preguntes de Moodle i podran tornar a emprar-se en el mateix curs o en cursos varis. Els qüestionaris sense connexió es poden descarregar en format PDF, DOCX o LaTeX. Els estudiants marquen les respostes als fulls de respostes. Aquests fulls s’escanegen i les respostes s’importen al sistema.';
$string['modulenameplural'] = 'Qüestionaris fora de línia';
$string['moodleprocessing'] = 'Permet que Moodle processi les dades';
$string['movecorners'] = 'Modifica la posició de les marques dels cantons en primer lloc. Fes servir la funció d’arrossegar i deixar anar.';
$string['moveselectedonpage'] = 'Desplaça les preguntes seleccionades a la pàgina: {$a}';
$string['multianswersforsingle'] = 'Múltiples respostes per a una pregunta amb una sola opció';
$string['multichoice'] = 'Elecció múltiple';
$string['multipleanswers'] = 'Tria com a mínim una pregunta.';
$string['name'] = 'Nom del qüestionari fora de línia';
$string['neededcorrection'] = '<strong>Atenció: algunes de les marques que heu fet s’han corregit manualment. Reviseu els quadres vermells a la imatge següent.<br />Això ha provocat un retard en la publicació dels resultats del qüestionari fora de línia, ja que el professor hi ha hagut d’intervenir manualment.</strong>';
$string['newgrade'] = 'Qualificat';
$string['newpage'] = 'Pàgina nova';
$string['noattemptexists'] = 'No hi ha resultats';
$string['noattempts'] = 'No s’ha importat cap resultat!';
$string['noattemptsonly'] = 'Mostra només els estudiants sense resultats';
$string['nocourse'] = 'No s’ha trobat el curs amb l\'ID {$a->course} al qual pertany el qüestionari fora de línia amb l\'ID {$a->offlinequiz}.';
$string['nogradesseelater'] = 'Aquest qüestionari no s’ha qualificat encara per a {$a}. Els resultats es publicaran aquí.';
$string['nogroupdata'] = 'No hi ha dades del grup de l’usuari {$a}';
$string['nomcquestions'] = 'No hi ha preguntes d\'opció múltiple a {$a}!';
$string['noofflinequiz'] = 'No hi ha cap qüestionari fora de línia amb l’ID {$a}';
$string['nopages'] = 'No s’ha importat cap pàgina';
$string['noparticipantsfound'] = 'No s’ha trobat cap participant';
$string['nopdfscreated'] = 'No s’ha creat cap document';
$string['noquestions'] = 'Hi ha grups de qüestionari fora de línia que són buits. Afegiu-hi preguntes.';
$string['noquestionselected'] = 'No s’ha triat cap pregunta!';
$string['noquestionsfound'] = 'No hi ha cap pregunta al grup {$a}!';
$string['noquestionsonpage'] = 'Pàgina buida';
$string['noresults'] = 'No hi ha cap resultat.';
$string['noreview'] = 'No teniu permís per revisar aquest qüestionari fora de línia';
$string['noscannedpage'] = 'No hi ha cap pàgina escanejada amb l’ID {$a}!';
$string['notxtfile'] = 'No hi ha cap fitxer TXT';
$string['notyetgraded'] = 'Pendent de qualificar';
$string['nozipfile'] = 'No hi ha cap fitxer ZIP';
$string['numattempts'] = 'Nombre de resultats importats: {$a}';
$string['numattemptsqueue'] = 'S’han afegit {$a} formularis de respostes a la cua. Rebreu un correu electrònic a la vostra adreça quan s’hagin processat les dades.';
$string['numattemptsverify'] = 'Formularis escanejats pendents de corregir: {$a}';
$string['numberformat'] = 'El valor ha de ser un número amb {$a} dígits!';
$string['numbergroups'] = 'Nombre de grups';
$string['numpages'] = '{$a} pàgines importades';
$string['numquestionsx'] = 'Preguntes: {$a}';
$string['numusersadded'] = '{$a} participants afegits';
$string['offlineimplementationfor'] = 'Implementació sense connexió per a';
$string['offlinequiz:addinstance'] = 'Afegeix un qüestionari fora de línia';
$string['offlinequiz:attempt'] = 'Intentau qüestionaris';
$string['offlinequiz:createofflinequiz'] = 'Crea formularis de qüestionari fora de línia';
$string['offlinequiz:deleteattempts'] = 'Suprimeix els resultats del qüestionari fora de línia';
$string['offlinequiz:grade'] = 'Puntua manualment els qüestionaris sense connexió';
$string['offlinequiz:manage'] = 'Gestiona els qüestionaris sense connexió';
$string['offlinequiz:preview'] = 'Previsualitza els qüestionaris sense connexió';
$string['offlinequiz:view'] = 'Mostra la informació del qüestionari fora de línia';
$string['offlinequiz:viewreports'] = 'Mostra els informes del qüestionari fora de línia';
$string['offlinequizcloses'] = 'El qüestionari fora de línia es tanca';
$string['offlinequizcloseson'] = 'La revisió d’aquest qüestionari fora de línia es tancarà {$a}';
$string['offlinequizisclosed'] = 'El qüestionari fora de línia està tancat';
$string['offlinequizisclosedwillopen'] = 'El qüestionari fora de línia està tancat (s’obrirà el {$a})';
$string['offlinequizisopen'] = 'El qüestionari fora de línia està obert';
$string['offlinequizisopenwillclose'] = 'El qüestionari fora de línia està obert (es tancarà el {$a})';
$string['offlinequizopenedon'] = 'Aquest qüestionari fora de línia es va obrir el {$a}';
$string['offlinequizopens'] = 'El qüestionari fora de línia s’obre';
$string['offlinequizsettings'] = 'Configuració sense connexió';
$string['offlinequizwillopen'] = 'El qüestionari fora de línia s’obre el {$a}';
$string['oneclickenrol'] = 'Registra clicant aquí';
$string['oneclickenroldesc'] = 'Si aquesta opció està activada, els professors poden registrar usuaris solament clicant mentre corregeixen els formularis de respostes (error "L\'usuari no està registrat al curs").';
$string['oneclickrole'] = 'El rol per registrar solament clicant aquí.';
$string['oneclickroledesc'] = 'Selecciona el rol triat per registrar solament clicant aquí. Només es poden seleccionar els rols amb l’arquetip "estudiant".';
$string['onlylocalcategories'] = 'Només categories locals de preguntes';
$string['orderandpaging'] = 'Ordre i paginació';
$string['orderandpaging_help'] = 'Els números 10, 20, 30... davant cada pregunta n’indiquen l\'ordre. Els números augmenten en intervals de 10 per deixar espais per inserir-hi preguntes addicionals. Per reordenar les preguntes, canviau els números i pitjau el botó "Reordena les preguntes".

Per afegir salts de pàgina després d’algunes preguntes, marcau les caselles devora les preguntes i pitjau el botó "Afegeix salts de pàgina després de les preguntes seleccionades".

Per repartir les preguntes en un nombre de pàgines, pitjau el botó de repaginació i marcau el nombre de preguntes per pàgina que vulgueu.';
$string['orderingofflinequiz'] = 'Ordre i paginació';
$string['otherresultexists'] = 'Ja hi ha un resultat diferent per a {$a}. No s’ha pogut completar la importació! Primer heu d’eliminar el resultat.';
$string['outof'] = '{$a->grade} sobre un màxim de {$a->maxgrade}';
$string['outofshort'] = '{$a->grade}/{$a->maxgrade}';
$string['overallfeedback'] = 'Retroacció general';
$string['overview'] = 'Informació del qüestionari';
$string['overviewdownload_help'] = 'Descarrega el resum';
$string['page-mod-offlinequiz-edit'] = 'Edita la pàgina del qüestionari fora de lína';
$string['page-mod-offlinequiz-x'] = 'Qualsevol pàgina del qüestionari fora de línia';
$string['pagecorrected'] = 'S’ha importat la llista de participants corregida';
$string['pageimported'] = 'S’ha importat la llista de participants';
$string['pagenotdetected'] = 'No s’ha pogut detectar el codi de barres de la pàgina!';
$string['pagenumberimported'] = 'S’ha importat la llista de participants {$a}';
$string['pagesizeparts'] = 'Participants que es mostren per pàgina:';
$string['papergray'] = 'Valor de blanc del paper';
$string['papergray_help'] = 'Si les parts blanques del formulari de respostes escanejat han quedat molt fosques, podeu corregir-ho ajustant aquest valor a gris fosc.';
$string['participants'] = 'Participants';
$string['participants_help'] = '<p> Les llistes de participants es fan servir en qüestionaris sense connexió llargs i amb molts de participants. Es poden fer servir per marcar quins estudiants han participat en el qüestionari i si s’han importat correctament tots els resultats.
Podeu afegir usuaris a llistes diverses; per exemple, cada llista pot incloure els participants d’una sala determinada. Els participants poden ser membres d\'un grup especial. Es pot emprar una eina de registre per crear aquests grups.
Les llistes de participants es poden descarregar (en PDF), imprimir i marcar amb creus, de la mateixa manera que els formularis de respostes dels qüestionaris sense connexió. Després, es poden carregar i, d’aquesta manera, l’assistència dels estudiants marcats quedarà desada a la base de dades.
Els codis de barres són necessaris per identificar els estudiants. Evitau tacar-los.</p>';
$string['participantsinlists'] = 'Participants';
$string['participantslist'] = 'Llista de participants';
$string['participantslists'] = 'Participants';
$string['participantsusage'] = 'Registra l\'assistència';
$string['pdfdeletedforgroup'] = 'S’ha suprimit el formulari del grup {$a}';
$string['pdfintro'] = 'Informació addicional';
$string['pdfintro_help'] = 'Aquesta informació apareixerà a la primera pàgina del full de preguntes i ha d’incloure informació general sobre com s’ha d’emplenar el formulari de respostes.';
$string['pdfintrotext'] = '<b>Com s’ha de puntuar de manera correcta?</b><br /> Aquest formulari de respostes s’escanejarà de manera automàtica. No el doblegueu ni el taqueu. Feu servir un bolígraf de color negre o blau per marcar els camps. Si voleu modificar una marca, empleneu completament la casella amb color. Així, el camp s’interpretarà com una casella buida.<br />';
$string['pdfintrotoolarge'] = 'La introducció és massa llarga (màx. 2.000 caràcters).';
$string['pdfscreated'] = 'S’han creat els formularis PDF';
$string['pdfsdeletedforgroup'] = 'S’han suprimit els formularis del grup {$a}';
$string['pearlywhite'] = 'Blanc perlat';
$string['pluginadministration'] = 'Administració del qüestionari fora de línia';
$string['pluginname'] = 'Qüestionari fora de línia';
$string['point'] = 'punt';
$string['present'] = 'presenta';
$string['preview'] = 'Vista prèvia';
$string['previewforgroup'] = 'Grup {$a}';
$string['previewquestion'] = 'Vista prèvia de la pregunta';
$string['questionanalysis'] = 'Anàlisi de preguntes';
$string['questionanalysistitle'] = 'Taula d’anàlisi de preguntes';
$string['questionbankcontents'] = 'Contingut del banc de preguntes';
$string['questionname'] = 'Nom de pregunta';
$string['questionsheet'] = 'Full de preguntes';
$string['questionsin'] = 'Preguntes a';
$string['questionsingroup'] = 'Grup';
$string['questionsinthisofflinequiz'] = 'Preguntes en aquest qüestionari fora de línia';
$string['questiontextisempty'] = '[Text de pregunta buit]';
$string['quizdate'] = 'Data del qüestionari fora de línia';
$string['quizopenclose'] = 'Dates d’obertura i de tancament';
$string['quizopenclose_help'] = 'La revisió en línia es pot restringir a un període de temps específic. Cliqueu a «Mostra» per modificar la configuració del dia i l’hora.

**Atenció:** Si no activeu un període de temps per a la revisió en línia, no es restringeix la revisió mentre els participants puguin visualitzar el qüestionari fora de línia.

En qualsevol cas, només es mostren les opcions marcades sota «La revisió inclou».';
$string['readjust'] = 'Reajusta';
$string['recreatepdfs'] = 'Torna a crear els PDF';
$string['rediswrong'] = 'creu errònia o absent';
$string['refreshpreview'] = 'Actualitza la vista prèvia';
$string['regrade'] = 'Torna a qualificar';
$string['regradedisplayexplanation'] = '<b>Atenció:</b> Tornar a qualificar no canviarà les puntuacions que s’han sobreescrit manualment!';
$string['regradinginfo'] = 'Si modifiqueu la puntuació d’una pregunta, heu de tornar a qualificar el qüestionari fora de línia per actualitzar els resultats dels participants.';
$string['regradingquiz'] = 'S\'està tornant a qualificar';
$string['regradingresult'] = 'Resultat de l’usuari {$a} després de tornar a qualificar...';
$string['reloadpreview'] = 'Torna a carregar la vista prèvia';
$string['reloadquestionlist'] = 'Torna a carregar la llista de preguntes';
$string['remove'] = 'Suprimeix';
$string['removeemptypage'] = 'Suprimeix la pàgina buida';
$string['removeselected'] = 'Suprimeix la tria';
$string['reordergroupquestions'] = 'Reordena les preguntes de grup';
$string['reorderquestions'] = 'Reordena les preguntes';
$string['reordertool'] = 'Mostra l’eina de reordenació';
$string['repaginate'] = 'Torna a paginar amb {$a} preguntes per pàgina';
$string['repaginatecommand'] = 'Torna a paginar';
$string['repaginatenow'] = 'Torna a paginar ara';
$string['reportstarts'] = 'Comença a revisar els resultats';
$string['resetofflinequizzes'] = 'Reinicia les dades del qüestionari fora de línia';
$string['resultexists'] = 'Ja existeix el mateix resultat per a {$a}. No s’ha pogut completar la importació';
$string['resultimport'] = 'Penja';
$string['results'] = 'Resultats';
$string['review'] = 'Revisa';
$string['reviewbefore'] = 'Permet fer la revisió mentre el qüestionari fora de línia estigui obert';
$string['reviewclosed'] = 'Després que el qüestionari fora de línia s’hagi tancat';
$string['reviewcloses'] = 'Tancament de la revisió';
$string['reviewimmediately'] = 'Immediatament després de l’intent';
$string['reviewincludes'] = 'La revisió inclou';
$string['reviewofresult'] = 'Revisió del resultat';
$string['reviewopens'] = 'Obertura de la revisió';
$string['reviewoptions'] = 'Els estudiants poden veure';
$string['reviewoptions_help'] = 'Podeu controlar el que veuen els estudiants després d’importar els resultats amb aquestes opcions. Així mateix, podeu definir l’hora de començament i finalització de l’informe dels resultats.

Els quadres volen dir:

**L’intent** - Es mostrarà el text de preguntes i de respostes als estudiants. Podran veure les respostes que han triat, però no quines són les correctes.

**Correcte o incorrecte** - Aquesta opció només es pot activar si es tria l’opció "L’intent". En aquest cas, els estudiants podran veure quines de les respostes marcades són correctes (fons verd) o incorrectes (fons vermell).

**Qualificacions** - Es mostren el grup (p. ex., B), les puntuacions (qualificació obtinguda, qualificació total de les preguntes, percentatge assolit, p. ex., 40/80 (50)) i la puntuació (p. ex., 50 sobre un màxim de 100). Així mateix, si es marca "L’intent", es mostren la qualificació obtinguda i la puntuació màxima de cada pregunta.

**Retroacció específica** - Retroacció que depèn de la resposta de l’estudiant.

**Retroacció general** - Es mostra la retroacció general a l’estudiant després d’importar els resultats. A diferència de la retroacció específica, que depèn del tipus de pregunta i de la resposta de l’estudiant, es mostra el mateix text de la retroacció general a tots els estudiants. Podeu fer servir la retroacció general per donar als estudiants una resposta més completa i, opcionalment, un enllaç amb informació addicional de consulta en cas que no hagin entès les preguntes.

**Respostes correctes** - Es mostren les respostes correctes i incorrectes. Aquesta opció només està disponible si s’activa "L’intent".

**Formulari escanejat** - Es mostren els formularis de respostes escanejats. Els quadres triats apareixen marcats en verd.

**Formulari escanejat amb qualificacions** - Es mostren els formularis de respostes escanejats. Els quadres triats apareixen marcats en verd. Es destaquen les marques incorrectes o absents. Així mateix, una taula mostra la puntuació màxima i la qualificació obtinguda per a cada pregunta.';
$string['reviewoptionsheading'] = 'Opcions de revisió';
$string['rimport'] = 'Puja';
$string['rotate'] = 'Gira';
$string['rotatingsheet'] = 'El full es gira...';
$string['save'] = 'Desa';
$string['saveandshow'] = 'Desa i mostra els canvis a l’estudiant';
$string['savescannersettings'] = 'Desa la configuració de l’escàner';
$string['scannedform'] = 'Formulari escanejat';
$string['scannerformfortype'] = 'Formulari per al tipus {$a}';
$string['scanneroptions'] = 'Configuració de l’escàner';
$string['scannerpdfs'] = 'Formularis buits';
$string['scannerpdfstext'] = 'Descarregau els formularis buits següents si voleu fer servir programari d’escàner propi.';
$string['scanningoptionsheading'] = 'Opcions d’escaneig';
$string['score'] = 'Puntua';
$string['select'] = 'Tria';
$string['selectagroup'] = 'Tria un grup';
$string['selectall'] = 'Tria’ls tots';
$string['selectcategory'] = 'Tria una categoria';
$string['selectdifferentgroup'] = 'Triau un grup diferent!';
$string['selectedattempts'] = 'Intents triats...';
$string['selectformat'] = 'Tria el format...';
$string['selectgroup'] = 'Tria el grup';
$string['selectlist'] = 'Triau una llista o intentau reajustar el full:';
$string['selectnone'] = 'Desmarca’ls tots';
$string['selectpage'] = 'Triau el número de pàgina o intentau reajustar el full:';
$string['selectquestiontype'] = '—Tria un tipus de pregunta --';
$string['showallparts'] = 'Mostra tots els participants {$a}';
$string['showcopyright'] = 'Mostra l’avís de drets d’autor';
$string['showcopyrightdesc'] = 'Si activau aquesta opció, es mostrarà un avís de drets d’autor a la pàgina de revisió dels resultats de l’estudiant.';
$string['showgrades'] = 'Imprimeix les qualificacions de les preguntes';
$string['showgrades_help'] = 'Aquesta opció determina si les puntuacions màximes de les preguntes del qüestionari fora de línia s’han d’imprimir al full de preguntes.';
$string['showmissingattemptonly'] = 'Mostra tots els participants marcats sense resultat';
$string['showmissingcheckonly'] = 'Mostra tots els participants no marcats amb resultat';
$string['shownumpartsperpage'] = 'Mostra {$a} participants per pàgina';
$string['showstudentview'] = 'Mostra la visualització de l’estudiant';
$string['showtutorial'] = 'Mostra un tutorial dels qüestionaris sense connexió als estudiants.';
$string['showtutorial_help'] = 'Aquesta opció determina si els estudiants poden veure un tutorial bàsic dels qüestionaris fora de línia.
El tutorial proporciona informació sobre com gestionar els diferents tipus de documents als qüestionaris fora de línia, i conté una secció interactiva on els estudiants aprenen a marcar el seu ID d’estudiant correctament.<br />
<b>Nota:</b><br />
Si marqueu aquesta opció amb «Sí», però amagueu el qüestionari fora de línia, l’enllaç al tutorial no serà visible. En aquest cas, podeu afegir un enllaç al tutorial a la pàgina del curs.';
$string['showtutorialdescription'] = 'Podeu afegir un enllaç al tutorial a la pàgina del curs amb l’URL següent:';
$string['shuffleanswers'] = 'Mescla les respostes';
$string['shufflequestions'] = 'Mescla les preguntes';
$string['shufflequestionsanswers'] = 'Mescla les preguntes i les respostes';
$string['shufflequestionsselected'] = 'S’ha activat l’opció de mesclar preguntes. Per tant, algunes accions relatives a les pàgines no estan disponibles. Per modificar l’opció de mesclar, {$a}.';
$string['shufflewithin'] = 'Mescla dins les preguntes';
$string['shufflewithin_help'] = 'Si habilitau aquesta opció, es mesclaran aleatòriament les parts que componen les preguntes cada vegada que pitge el botó "Torna a carregar" a la vista prèvia del formulari. NOTA: Aquesta opció de configuració només s’aplica a les preguntes que tenen l’opció de mesclar activada.';
$string['signature'] = 'Signatura';
$string['standard'] = 'Estàndard';
$string['starttutorial'] = 'Comença el tutorial de l’examen';
$string['statistics'] = 'Estadístiques';
$string['statisticsplural'] = 'Estadístiques';
$string['statsoverview'] = 'Resum de les estadístiques';
$string['studycode'] = 'Codi de l’estudi';
$string['tabstatsoverview'] = 'Informació del qüestionari';
$string['theattempt'] = 'L’intent';
$string['timesup'] = 'S’ha exhaurit el temps!';
$string['totalpointsx'] = 'Total de qualificacions: {$a}';
$string['totalquestionsinrandomqcategory'] = 'Total de {$a} preguntes a la categoria.';
$string['trigger'] = 'límit inferior/superior';
$string['tutorial'] = 'Tutorial dels qüestionaris sense connexió';
$string['type'] = 'Tipus';
$string['uncheckparts'] = 'Marca els participants marcats com a absents';
$string['updatedsumgrades'] = 'La suma de totes les qualificacions del grup {$a->letter} s’ha recalculat a {$a->grade}.';
$string['upgradingilogs'] = 'S\'estan actualitzant les pàgines escanejades: pàgina escanejada {$a->done}/{$a->outof} <br/>(ID del qüestionari fora de línia {$a->info})';
$string['upgradingofflinequizattempts'] = 'S\'estan actualitzant els intents del qüestionari fora de línia: qüestionari fora de línia {$a->done}/{$a->outof} <br/>(Offline Quiz ID {$a->info})';
$string['upload'] = 'Penja';
$string['uploadpart'] = 'Penja';
$string['uppertrigger'] = 'Segon límit superior';
$string['uppertriggerzero'] = 'El segon límit superior és 0';
$string['upperwarning'] = 'Primer límit superior';
$string['upperwarningzero'] = 'El primer límit superior és 0';
$string['useradded'] = 'S’ha afegit l’usuari {$a}';
$string['userdoesnotexist'] = 'L’usuari {$a} no existeix al sistema';
$string['useridentification'] = 'Identificació de l’usuari';
$string['userimported'] = 'S’ha importat i qualificat l’usuari {$a}';
$string['usernotincourse'] = 'L’usuari {$a} no forma part del curs.';
$string['usernotinlist'] = 'L’usuari no apareix a la llista!';
$string['usernotregistered'] = 'L’usuari {$a} no està registrat al curs';
$string['userpageimported'] = 'S’ha importat una sola pàgina per a l’usuari {$a}';
$string['valuezero'] = 'El valor no pot ser zero';
$string['viewresults'] = 'Mostra els resultats';
$string['white'] = 'Blanc';
$string['withselected'] = 'Amb el que s\'ha seleccionat...';
$string['zerogradewarning'] = 'Atenció: la qualificació del vostre qüestionari fora de línia és 0,0';
$string['zipfile'] = 'Fitxer ZIP';
$string['zipok'] = 'S’ha importat el fitxer ZIP';
