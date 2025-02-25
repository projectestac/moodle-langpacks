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
 * Strings for component 'qformat_xml', language 'uk', version '4.4'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Неправильний формат XML-файлу - очікується рядок тексту (використовуєте CDATA?)';
$string['pluginname'] = 'Moodle XML - формат';
$string['pluginname_help'] = 'Це спеціальний Moodle формат для імпорту та експорту питань.';
$string['pluginname_link'] = 'qformat/xml';
$string['privacy:metadata'] = 'Плагін формату запитань XML не зберігає жодних особистих даних.';
$string['truefalseimporterror'] = '<b>Увага</b>: питання типу Так-Ні \'{$a->questiontext}\' не може бути правильно імпортоване. Не вдалося вияснити, правильною відповіддю буде ТАК чи НІ. Питання імпортоване з припущенням, що правильна відповідь \'{$a->answer}\'. Якщо це не так, вам потрібно відредагувати питання.';
$string['unsupportedexport'] = 'Тип питання {$a} не підтримується XML-експортом';
$string['xmlimportnoname'] = 'Відсутня назва питання в XML файлі';
$string['xmlimportnoquestion'] = 'Відсутній текст питання в XML файлі';
$string['xmltypeunsupported'] = 'Питання типу {$a} не підтримуються імпортом з XML';
