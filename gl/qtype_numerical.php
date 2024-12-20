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
 * Strings for component 'qtype_numerical', language 'gl', version '4.4'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Erro aceptado';
$string['addmoreanswerblanks'] = 'En branco para {no} respostas máis';
$string['addmoreunitblanks'] = 'En branco para {no} unidades máis';
$string['answercolon'] = 'Resposta:';
$string['answererror'] = 'Erro';
$string['answermustbenumberorstar'] = 'A resposta debe ser un número, por exemplo -1.234 ou 3e8, ou «*».';
$string['answerno'] = 'Resposta {$a}';
$string['decfractionofquestiongrade'] = 'Coma unha fracción (0-1) da cualificación da pregunta';
$string['decfractionofresponsegrade'] = 'coma unha fracción (0-1) da cualificación da resposta';
$string['decimalformat'] = 'decimais';
$string['editableunittext'] = 'o elemento de entrada de texto';
$string['errornomultiplier'] = 'Debe especificar un multiplicador para esta unidade.';
$string['errorrepeatedunit'] = 'Non pode ter dúas unidades co mesmo nome.';
$string['geometric'] = 'Xeométrico';
$string['invalidnumber'] = 'Debe introducir un número correcto.';
$string['invalidnumbernounit'] = 'Debe introducir un número correcto. Non incluír unha unidade na súa resposta.';
$string['invalidnumericanswer'] = 'Unha das respostas que introduciu era un número incorrecto.';
$string['invalidnumerictolerance'] = 'Unha das tolerancias que introduciu era un número incorrecto.';
$string['leftexample'] = 'na esquerda, por exemplo $1.00 ou £1.00';
$string['manynumerical'] = 'As unidades son opcionais. De se introducir unha unidade, utilízase para converter a resposta á unidade 1 antes da cualificación.';
$string['multiplier'] = 'Multiplicador';
$string['nominal'] = 'Nominal';
$string['noneditableunittext'] = 'Texto NON editábel da unidade Num1';
$string['nonvalidcharactersinnumber'] = 'Caracteres NON correctos no número';
$string['notenoughanswers'] = 'Introduza polo menos unha resposta.';
$string['nounitdisplay'] = 'Non hai unidade de cualificación';
$string['numericalmultiplier'] = 'Multiplicador';
$string['numericalmultiplier_help'] = 'O multiplicador é o factor polo que se multiplicará a resposta numérica correcta.

A primeira unidade (Unidade 1) ten un multiplicador predeterminado de 1. Daquela, se a resposta numérica correcta é 5500 e estabelece W como unidade en Unidade 1 que ten 1 como multiplicador predeterminado, a resposta correcta é 5500 W.

Vexa que o erro aceptado tamén se multiplica, de modo que un erro permitido de 100W podería converterse nun erro de 0.1kW.';
$string['oneunitshown'] = 'A Unidade 1 preséntase automaticamente ao lado da caixa de resposta.';
$string['onlynumerical'] = 'As unidades non se utilizan de ningunha maneira. Soamente se cualifica o valor numérico.';
$string['pleaseenterananswer'] = 'Introduza unha resposta.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Introduza a súa resposta sen utilizar o separador de millares ({$a})';
$string['pluginname'] = 'Numérica';
$string['pluginname_help'] = 'Dende a perspectiva do alumno, unha pregunta numérica parece coma unha pregunta de resposta curta. A diferenza é que se permite que a resposta numérica teña un erro aceptado. Isto permite un intervalo fixe de respostas que avaliar como unha única resposta. Por exemplo, se a resposta é 10, cun erro aceptado de 2, entón calquera número entre 8 e 12 se aceptará como correcto.';
$string['pluginname_link'] = 'pregunta/tipo/numérica';
$string['pluginnameadding'] = 'Engadindo unha pregunta numérica';
$string['pluginnameediting'] = 'Engadir unha pregunta numérica';
$string['pluginnamesummary'] = 'Permite unha resposta numérica, posibelmente con unidades, que se cualifica comparando contra varios modelos de respostas, posibelmente con tolerancias.';
$string['privacy:metadata'] = 'O complemento de tipo de pregunta numérica permite aos autores de preguntas estabelecer opcións predeterminadas como preferencias do usuario.';
$string['privacy:preference:defaultmark'] = 'A marca predeterminada estabelecida para unha determinada pregunta.';
$string['privacy:preference:multichoicedisplay'] = 'Indica se as unidades se amosan como elemento de entrada de texto, selección de escolla múltiple ou menú despregábel.';
$string['privacy:preference:penalty'] = 'A penalización por cada intento incorrecto cando se executan preguntas mediante o comportamento «Interactivo con intentos múltiples» ou «Modo adaptativo».';
$string['privacy:preference:unitgradingtypes'] = 'Indica se a penalización unitaria se aplica como unha fracción (0-1) da cualificación da resposta ou da cualificación da pregunta.';
$string['privacy:preference:unitpenalty'] = 'Que fracción (0-1) da cualificación da resposta ou da nota da pregunta debería aplicarse?';
$string['privacy:preference:unitrole'] = 'Indica se a unidade é esencial, opcional ou non agardada.';
$string['privacy:preference:unitsleft'] = 'Indica se a unidade aparece á esquerda (p. ex., $, £) ou á dereita (por exemplo, kg, km, cm).';
$string['relative'] = 'Relativo';
$string['rightexample'] = 'na dereita, por exemplo 1.00cm ou 1.00km';
$string['selectunit'] = 'Seleccione unha unidade';
$string['selectunits'] = 'Seleccione as unidades';
$string['studentunitanswer'] = 'Introducir as unidade utilizando';
$string['tolerancetype'] = 'Tipo de tolerancia';
$string['unit'] = 'Unidade';
$string['unitappliedpenalty'] = 'Estas puntuacións inclúen unha penalización de {$a} por mala unidade.';
$string['unitchoice'] = 'unha selección de escolla múltipla';
$string['unitedit'] = 'Editar a unidade';
$string['unitgraded'] = 'A unidade debe ser dada e será cualificada.';
$string['unithandling'] = 'Manexo da unidade';
$string['unitincorrect'] = 'Non deu a unidade correcta.';
$string['unitmandatory'] = 'Obrigado';
$string['unitmandatory_help'] = '* A resposta cualificarase utilizando a unidade escrita.

* A penalización da unidade aplicaráselle se o campo da unidade está baleiro';
$string['unitnotselected'] = 'Debe seleccionar unha unidade.';
$string['unitonerequired'] = 'Debe introducir cando menos unha unidade';
$string['unitoptional'] = 'Unidade opcional';
$string['unitoptional_help'] = '* Se o campo da unidade non está baleiro, a resposta cualificarase utilizando esta unidade.

* Se a unidade está mal escrita ou é descoñecida, a resposta considerarase como incorrecta.';
$string['unitpenalty'] = 'Penalización da unidade';
$string['unitpenalty_help'] = 'A penalización aplicase se

* o nome incorrecto da unidade introduciuse dentro da entrada da unidade, ou
* a unidade introduciuse dentro da caixa de entrada do valor';
$string['unitposition'] = 'As unidades van';
$string['units'] = 'Unidades';
$string['unitselect'] = 'un menú despregábel';
$string['unitx'] = 'Unidade {no}';
$string['xmustbenumeric'] = '{$a} debe ser un número.';
$string['xmustnotbenumeric'] = '{$a} non pode ser un número.';
$string['youmustenteramultiplierhere'] = 'Introduza aquí un multiplicador.';
