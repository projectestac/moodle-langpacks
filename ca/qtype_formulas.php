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
 * Strings for component 'qtype_formulas', language 'ca', version '3.11'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Error absolut';
$string['addmorepartsblanks'] = 'Espais en blanc per {no} parts més';
$string['algebraic_formula'] = 'Fórmula algebraica';
$string['answer'] = 'Resposta*';
$string['answer_help'] = '**Necessari**.
cal que sigui una llista de nombres, o una llista de cadenes en funció del tipus de resposta escollida. Quan només hi ha una resposta, un nombre o una cadena de nombres es poden afegir directament. Cal tenir en compte que el nombre d\'elements de la llista defineix la quantitat de possibles respostes en aquesta part.


<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answercombinedunitmulti'] = 'Resposta i unitat per a la part {$a->part}';
$string['answercombinedunitsingle'] = 'Resposta i unitat';
$string['answercoordinatemulti'] = 'Resposta per a la part {$a->part} i coordenada {$a->numanswer}';
$string['answercoordinatesingle'] = 'Resposta per a la coordenada {$a->numanswer}';
$string['answermark'] = 'puntuació de la part*';
$string['answermark_help'] = '**Necessari**.
La puntuació per a la resposta d\'aquesta part, que hauria de ser superior a zero. La puntuació per defecte de la pregunta sencera és la suma de totes les puntuacions de les seves parts.

Nota: Si el camp de la puntuació d\'aquesta part es deixa en blanc, la part s\'eliminarà en desar la pregunta.';
$string['answersingle'] = 'Resposta';
$string['answertype'] = 'Tipus de resposta';
$string['answertype_help'] = 'Hi ha quatre tipus de resposta.

Les respostes de tipus nombre, numèric i fórmula numèrica demanen un nombre o una llista de nombres com a resposta.

La fórmula algebraica necessita una cadena o una llista de cadenes com a resposta.

Els diferents tipus de respostes imposaran diferents restriccions quan s\'introdueixin les respostes, per tant cal que els alumnes sàpiguen com ho han d\'escriure. La comprovació de format en el codi de la pregunta també els dirà mentre escriuen si alguna cosa és errònia. Llegiu la documentació per a saber-ne més.';
$string['answerunitmulti'] = 'Unitat per a la part {$a->part}';
$string['answerunitsingle'] = 'Unitat';
$string['checkvarshdr'] = 'Comprova la instanciació de variables';
$string['choiceno'] = 'No';
$string['choiceyes'] = 'Sí';
$string['commonsiunit'] = 'Unitat corrent del SI';
$string['correctansweris'] = 'Una resposta correcta possible és: {$a}';
$string['correctfeedback'] = 'Per a qualsevol resposta correcta';
$string['correctfeedback_help'] = 'Aquesta retroacció es mostrarà als estudiants que no obtenen la nota màxima en aquesta opció. Podeu incloure variables globals i locals que seran substituïdes pels seus valors';
$string['correctness'] = 'Criteris de puntuació*';
$string['correctness_help'] = '**Necessari**. Podeu escollir tant error relatiu com error absolut amb la corresponent escala. L\'error relatiu no es pot emprar si la resposta és algebraica.

Per a una  definició més precisa sobre l’error relatiu i l’error absolut quan hi ha més d’un camp de resposta, consulteu la documentació.';
$string['correctnessexpert'] = 'Expert';
$string['correctnesssimple'] = 'Simple';
$string['defaultanswermark'] = 'Puntuació per defecte de les parts';
$string['defaultanswermark_desc'] = 'Puntuació per defecte per a les parts de les preguntes noves';
$string['defaultanswertype'] = 'Tipus de resposta per defecte';
$string['defaultanswertype_desc'] = 'Tipus de resposta per defecte per a les parts de les preguntes noves';
$string['defaultcorrectness'] = 'Criteris de puntuació per defecte';
$string['defaultcorrectness_desc'] = 'Criteris de puntuació per defecte per a les parts de les preguntes noves';
$string['defaultunitpenalty'] = 'Penalització per defecte per unitat';
$string['defaultunitpenalty_desc'] = 'Penalització per defecte per cada unitat incorrecte (0-1)';
$string['error_algebraic_var'] = 'Error de sintaxi en definir la variable algebraica.';
$string['error_answer_missing'] = 'No s\'ha definit cap resposta.';
$string['error_answerbox_duplicate'] = 'Cada camp de resposta només es pot fer servir una vegada en cada part.';
$string['error_answertype_mistmatch'] = 'Discordança en el tipus de resposta: el tipus de resposta numèrica demana un nombre i el tipus de resposta algebraica demana una cadena';
$string['error_criterion'] = 'El criteri de qualificació ha de donar un sol nombre en avaluar-se.';
$string['error_eval_numerical'] = 'Algunes expressions no es poden avaluar numèricament.';
$string['error_fixed_range'] = 'Error de sintaxi d\'un interval fix.';
$string['error_forbid_char'] = 'La fórmula o l\'expressió té algun caràcter o operador no permès.';
