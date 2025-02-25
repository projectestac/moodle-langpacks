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
 * Strings for component 'qtype_multianswer', language 'sv', version '4.4'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Jag bekräftar att jag vill att frågan ska sparas såsom den är redigerad';
$string['confirmsave'] = 'Bekräfta och spara sedan {$a}';
$string['correctanswer'] = 'Det rätta svaret är';
$string['correctanswerandfeedback'] = 'Rätt svar och återkoppling';
$string['corruptedquestion'] = 'Den här frågan är skadad och innehåller underfrågor som inte finns i systemet.';
$string['decodeverifyquestiontext'] = 'Avkoda och verifiera frågetexten';
$string['invalidmultianswerquestion'] = 'Ogiltig inbäddat-svar fråga ({$a}).';
$string['layout'] = 'Utseende';
$string['layouthorizontal'] = 'Horisontell rad med radioknappar';
$string['layoutmultiple_horizontal'] = 'Horisontell rad med kryssrutor';
$string['layoutmultiple_vertical'] = 'Vertikal kolumn med kryssrutor';
$string['layoutselectinline'] = 'Listruta inbäddad i texten';
$string['layoutundefined'] = 'Odefinierat utseende';
$string['layoutvertical'] = 'Vertikal kolumn med radioknappar';
$string['missingsubquestion'] = 'Denna underfråga saknas i systemet och kan inte visas.';
$string['nooptionsforsubquestion'] = 'Kan inte hämta alternativ för frågedel # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'The Cloze(multianswer) question "<strong>{$a}</strong>" does not contain any question';
$string['pleaseananswerallparts'] = 'Vänligen besvara alla delar av frågan.';
$string['pluginname'] = 'Inbäddade svar (Cloze)';
$string['pluginname_help'] = 'Inbäddade svar (Cloze) frågor består av en löpande text med frågor såsom flervalsfrågor och korta svar inbäddad i texten.';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'Lägga till en Inbäddat svar (Cloze) fråga';
$string['pluginnameediting'] = 'Redigera en inbäddat svar (Cloze) fråga';
$string['pluginnamesummary'] = 'Frågor av detta slag är mycket flexibla, men kan endast skapas genom att lägga till text som innehåller speciella koder som skapar inbäddade flervalsfrågor, korta svar och numeriska frågor.';
$string['privacy:metadata'] = 'Pluginmodulen för Inbäddat-svar frågetypen lagrar ingen personinformation.';
$string['qtypenotrecognized'] = 'Frågetypen {$a} känns inte igen';
$string['questiondefinition'] = 'Frågedefinition';
$string['questiondeleted'] = 'Fråga raderad';
$string['questioninquiz'] = '<ul>
 <li>lägg till eller ta bort frågor, </li>
 <li>ändra frågornas ordning i texten,</li>
 <li>ändra deras frågetyp (numerisk, kort svar, flerval). </li></ul>';
$string['questionnotfound'] = 'Kan inte hitta fråga av frågedel #{$a}';
$string['questionsadded'] = 'Fråga tillagd';
$string['questionsaveasedited'] = 'Frågan sparas som den är redigerad';
$string['questionsless'] = '{$a} fråga(or) mindre än i flervalsfrågan lagrat i databasen';
$string['questionsmissing'] = 'Frågetexten måste innehålla minst ett inbäddat svar.';
$string['questionsmore'] = '{$a} fråga(or) mer än i flervalsfrågan lagrat i databasen';
$string['questiontypechanged'] = 'Frågetyp ändrad';
$string['questiontypechangedcomment'] = 'Minst en frågetyp har ändrats.<br >Har du lagt till, tagit bort eller flyttat en fråga?<br >Se vidare framåt.';
$string['questionusedinquiz'] = 'Denna fråga används i {$a->nb_of_quiz} test(er), totalt antal försök : {$a->nb_of_attempts}';
$string['regradeissuenumsubquestionschanged'] = 'Antalet inbäddade underfrågor i den här frågan har ändrats.';
$string['storedqtype'] = 'Lagrad frågetyp {$a}';
$string['subqresponse'] = 'del {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Okänd frågetyp: {$a->type} av frågedel # {$a->sub}';
$string['warningquestionmodified'] = '<b>VARNING</b>';
$string['youshouldnot'] = '<b>DU BÖR INTE</b>';
