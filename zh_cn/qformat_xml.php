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
 * Strings for component 'qformat_xml', language 'zh_cn', version '4.4'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = '无效的 XML 文件：应为字符串（您用 CDATA 了吗？）';
$string['pluginname'] = 'Moodle XML格式';
$string['pluginname_help'] = '这是一个Moodle专用格式，用来导入和导出题目。';
$string['pluginname_link'] = 'qformat/xml';
$string['privacy:metadata'] = 'XML问题格式插件不存储任何个人数据。';
$string['truefalseimporterror'] = '<b>警告</b>：不能正确导入判断题“{$a->questiontext}”。正确答案是真是假不明确。导入后的此题假定答案是“{$a->answer}”。如果这是错的，您需要编辑此题。';
$string['unsupportedexport'] = '题目类型“{$a}”不支持 XML 导出';
$string['xmlimportnoname'] = 'XML 文件中没有题目名';
$string['xmlimportnoquestion'] = 'XML 文件中没有题干';
$string['xmltypeunsupported'] = 'XML 导入不支持题目类型{$a}';
