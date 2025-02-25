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
 * Strings for component 'tool_replace', language 'zh_cn', version '4.4'.
 *
 * @package     tool_replace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalskiptables'] = '附加的跳表';
$string['additionalskiptables_desc'] = '运行数据库搜索和替换时应跳过的表的列表（用逗号分隔）。';
$string['cannotfit'] = '这个替换比原始的长，且不允许缩短，无法继续。';
$string['disclaimer'] = '我明白这个操作的风险';
$string['doit'] = '是的，执行！';
$string['excludedtables'] = '部分数据库表没有在替换中以字符替换方式更新，这些表包括 configuration, log, events 和 session 表。';
$string['invalidcharacter'] = '在搜索或替换字符时，发现无效字符。';
$string['notifyfinished'] = '……完成';
$string['notifyrebuilding'] = '重建课程缓存……';
$string['notimplemented'] = '对不起，这个功能无法在你的数据库系统中使用。';
$string['notsupported'] = '此脚本应被视为实验脚本。所做的更改无法还原，因此应在运行脚本之前进行完整备份！';
$string['pageheader'] = '在整个数据库中的搜索和替换文本';
$string['pluginname'] = 'DB 搜索和替换';
$string['privacy:metadata'] = 'DB搜索和替换插件不存储任何个人数据。';
$string['replacewith'] = '替换为此字符串';
$string['replacewithhelp'] = '通常是新服务器的 URL 地址';
$string['searchwholedb'] = '在整个数据库中搜索：';
$string['searchwholedbhelp'] = '通常是以前的服务器的 URL 地址';
$string['shortenoversized'] = '必要时缩短结果';
