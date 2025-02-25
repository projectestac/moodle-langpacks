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
 * Strings for component 'grading', language 'ca', version '4.4'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' s\'ha seleccionat com a mètode de qualificació actiu per a l\'àrea \'{$a->area}\'';
$string['activemethodinfonone'] = 'No s\'ha triat cap mètode de qualificació avançat per a l\'àrea \'{$a->area}\'. S\'utilitzarà el mètode de qualificació senzill.';
$string['changeactivemethod'] = 'Canvia el mètode de qualificació actiu a';
$string['clicktoclose'] = 'prem per tancar';
$string['error:gradingunavailable'] = 'El mètode de qualificació avançada no està definit correctament. Comproveu totes les opcions de qualificació del fòrum a la configuració del fòrum.';
$string['error:notinrange'] = 'S\'ha proporcionat una qualificació no vàlida «{$a->grade}». Les qualificacions han de ser entre 0 i {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'No es pot instanciar l\'element del formulari de qualificació';
$string['formnotavailable'] = 'S\'ha seleccionat el mètode de qualificació avançat però el formulari de qualificació no està disponible encara. Necessiteu definir-lo primer a través d\'un enllaç en el bloc Configuració.';
$string['gradingformunavailable'] = 'Avís: el formulari de qualificació avançada no està preparat en aquest moment. S\'utilitzarà el mètode de qualificació senzill fins que el formulari tingui un estat vàlid.';
$string['gradingmanagement'] = 'Qualificació avançada';
$string['gradingmanagementtitle'] = 'Qualificació avançada: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Mètode de qualificació';
$string['gradingmethod_help'] = 'Trieu el mètode de qualificació avançat que s\'hauria d\'emprar per calcular les qualificacions en el context donat.

Per tal d\'inhabilitar la qualificació avançada i tornar al mecanisme de qualificació per defecte, trieu «Qualificació senzilla».';
$string['gradingmethodnone'] = 'Qualificació senzilla';
$string['gradingmethods'] = 'Mètodes de qualificació';
$string['manageactionclone'] = 'Crea un formulari de qualificació nou a partir d\'una plantilla';
$string['manageactiondelete'] = 'Suprimeix el formulari actual';
$string['manageactiondeleteconfirm'] = 'Ara suprimireu el formulari de qualificació «{$a->formname}» i tota la informació relacionada de «{$a->component} ({$a->area})». Assegureu-vos que compreneu les conseqüències següents:
* No hi ha cap manera de desfer aquesta operació.
* Podeu canviar a un altre mètode de qualificació, inclosa la «Qualificació directa senzilla», sense suprimir aquest formulari.
* Es perdrà tota la informació sobre com s\'omplen els formularis de qualificació.
* Els resultats de qualificació calculats i emmagatzemats al butlletí de qualificacions no es veuran afectats. Tanmateix, l\'explicació de com foren calculats no estarà disponible.
* Aquesta operació no afecta les còpies eventuals del formulari en altres activitats.';
$string['manageactiondeletedone'] = 'El formulari ha estat suprimit amb èxit';
$string['manageactionedit'] = 'Edita el formulari actual';
$string['manageactionnew'] = 'Defineix el formulari de qualificació des de zero';
$string['manageactionshare'] = 'Pública el formulari com una plantilla nova';
$string['manageactionshareconfirm'] = 'Aneu a desar una còpia del formulari de qualificació \'{$a}\'  com una plantilla  pública nova. Els altres usuaris del vostre lloc podran crear nous formularis de qualificació a partir de la vostra plantilla.';
$string['manageactionsharedone'] = 'El formulari ha estat desat amb èxit com una plantilla';
$string['noitemid'] = 'La qualificació no és possible. L\'element de qualificació no existeix.';
$string['nosharedformfound'] = 'No s\'ha trobat cap plantilla.';
$string['privacy:metadata:grading_definitions'] = 'Informació bàsica sobre un formulari de qualificació avançada definit en una àrea avaluable.';
$string['privacy:metadata:grading_definitions:areaid'] = 'L\'identificador d\'àrea on es defineix el formulari de qualificació avançada.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'L\'identificador de la definició de la qualificació des d\'on s\'ha copiat.';
$string['privacy:metadata:grading_definitions:description'] = 'La descripció del mètode d\'avaluació avançada.';
$string['privacy:metadata:grading_definitions:method'] = 'El mètode de qualificació que és responsable de la definició.';
$string['privacy:metadata:grading_definitions:name'] = 'El nom de la definició de la qualificació avançada.';
$string['privacy:metadata:grading_definitions:options'] = 'Alguns paràmetres d\'aquesta definició de qualificació.';
$string['privacy:metadata:grading_definitions:status'] = 'L\'estat d\'aquesta definició de qualificació avançada.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'El moment en què es va copiar la definició de qualificació.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'El moment en què es va crear la definició de qualificació.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'L\'hora en què es va modificar per última vegada la definició de qualificació.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'L\'ID de l\'usuari que va crear la definició de qualificació.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'L\'ID de l\'usuari que va modificar per última vegada la definició de qualificació.';
$string['privacy:metadata:grading_instances'] = 'Registre d\'avaluació d\'un element avaluable avaluat per un avaluador.';
$string['privacy:metadata:grading_instances:feedback'] = 'Els comentaris donats per l\'usuari.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'El format de text de la retroacció donada per l\'usuari.';
$string['privacy:metadata:grading_instances:raterid'] = 'L\'ID de l\'usuari que ha valorat la instància de qualificació.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'La qualificació de la instància de qualificació.';
$string['privacy:metadata:grading_instances:status'] = 'L\'estat d\'aquesta instància de qualificació.';
$string['privacy:metadata:grading_instances:timemodified'] = 'L\'hora en què es va modificar per última vegada la instància de qualificació.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Dades per al mètode de qualificació.';
$string['searchownforms'] = 'inclou els meus formularis';
$string['searchtemplate'] = 'Cercador de formularis de qualificació';
$string['searchtemplate_help'] = 'Podeu cercar un formulari de qualificació i utilitzar-lo aquí com a plantilla per al nou formulari. Escriviu paraules que puguin aparèixer en algun lloc del nom del formulari, la seva descripció o el cos del formulari mateix. Per cercar una frase, poseu-la entre cometes dobles ("..").

Per defecte, només els formularis de qualificació que s\'hagin desat com a plantilles compartides s\'inclouran en els resultats de la cerca. Podeu també incloure tots els vostres formularis de qualificació en els resultats de la cerca. D\'aquesta forma reutilitzeu els vostres formularis de qualificació sense compartir-los. Només els formularis marcats com «A punt per utilitzar» poden ser reutilitzats d\'aquesta forma.';
$string['statusdraft'] = 'Esborrany';
$string['statusready'] = 'A punt per utilitzar';
$string['templatedelete'] = 'Suprimeix';
$string['templatedeleteconfirm'] = 'Aneu a suprimir la plantilla compartida \'{$a}\'. Suprimir la plantilla no afecta els formularis que hagin estat creats amb ella.';
$string['templateedit'] = 'Edita';
$string['templatepick'] = 'Utilitza aquesta plantilla';
$string['templatepickconfirm'] = 'Voleu utilitzar l\'examen  \'{$a->formname}\' com una plantilla per al nou examen en  \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Utilitza aquest formulari com una plantilla';
$string['templatesource'] = 'Ubicació: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Formulari propi';
$string['templatetypeshared'] = 'Plantilla compartida';
