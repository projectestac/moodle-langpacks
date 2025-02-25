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
 * Strings for component 'rating', language 'gl', version '4.4'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Media de puntuacións';
$string['aggregatecount'] = 'Número de puntuacións';
$string['aggregatemax'] = 'Puntuación máxima';
$string['aggregatemin'] = 'Puntuación mínima';
$string['aggregatenone'] = 'Sen puntuacións';
$string['aggregatesum'] = 'Suma de puntuacións';
$string['aggregatetype'] = 'Tipo agregado';
$string['aggregatetype_help'] = 'O tipo de agregación define como se combinan as puntuacións para formar a cualificación final no libro de cualificacións.

* Media de puntuacións - A media de todas as puntuacións.
* Número de puntuacións - O número de elementos puntuados convertese na cualificación final. Teña en conta que o total non pode exceder a cualificación máxima da actividade.
* Máxima - A puntuación máis alta convertese na cualificación final.
* Mínima - A puntuación máis baixa convertese na cualificación.
* Suma - Súmanse todas as puntuacións. Teña en conta que o total non pode exceder a cualificación máxima da actividade.

Se está seleccionado «Sen puntuacións», entón a actividade non aparece no libro de cualificacións.';
$string['allowratings'] = 'Permitir que os elementos sexan puntuados?';
$string['allratingsforitem'] = 'Todas as puntuacións entregadas';
$string['capabilitychecknotavailable'] = 'A comprobación da funcionalidade non está dispoñíbel ata que se garde a actividade';
$string['couldnotdeleteratings'] = 'Vaites, non pode eliminarse xa que alguén xa o puntuou';
$string['norate'] = 'Non está permitida a puntuación de elementos!';
$string['noratings'] = 'Non se entregaron puntuacións';
$string['noviewanyrate'] = 'Só pode ver os resultados dos elementos que fixo vostede';
$string['noviewrate'] = 'Non ten a funcionalidade para ver as puntuacións dos elementos';
$string['privacy:metadata:rating'] = 'A puntuación introducida polo usuario almacénase xunto cunha asignación do elemento que foi puntuado.';
$string['privacy:metadata:rating:rating'] = 'A puntuación numérica que introduciu o usuario.';
$string['privacy:metadata:rating:timecreated'] = 'O momento que se realizou a puntuación por primeira vez';
$string['privacy:metadata:rating:timemodified'] = 'O momento que se actualizou a puntuación por última vez';
$string['privacy:metadata:rating:userid'] = 'O usuario que fixo a puntuación..';
$string['rate'] = 'Cualificar';
$string['ratepermissiondenied'] = 'Non ten permiso para cualificar este elemento';
$string['rating'] = 'Puntuación';
$string['ratinginvalid'] = 'A puntuación é incorrecta';
$string['ratings'] = 'Puntuacións';
$string['ratingtime'] = 'Limitar as puntuacións aos elementos con datas neste intervalo:';
$string['rolewarning'] = 'Roles con permiso para cualificar';
$string['rolewarning_help'] = 'Os roles con permiso para cualificar son roles coa capacidade moodle/rating:rate máis calquera capacidade de cualificación específica da actividade. Pode dar permiso a máis roles para cualificar a  través da páxina Permisos.';
$string['scaleselectionrequired'] = 'Ao seleccionar un tipo de agregación de puntuacións Vostede debe  seleccionar tamén o uso dunha escala ou estabelecer unha puntuación máxima.';
