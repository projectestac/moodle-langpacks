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
 * Strings for component 'qtype_ddwtos', language 'zh_cn', version '4.4'.
 *
 * @package     qtype_ddwtos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = '添加 {no} 个空白选项';
$string['answer'] = '答案';
$string['blank'] = '空白';
$string['correctansweris'] = '正确答案是： {$a}';
$string['errorlimitedchoice'] = '选项 [[{$a}]] 已多次使用，但未设置为“无限制”。 请重新检查这个问题。';
$string['infinite'] = '无限制';
$string['pleaseputananswerineachbox'] = '请在每个盒子里放一个答案。';
$string['pluginname'] = '拖放填空题';
$string['pluginname_help'] = '拖放填空题要求做题者拖放词语或短语到正确的空缺。 [[1]], [[2]], [[3]], ... 作为题干占位符，正确答案被分别指定为选项1, 2, 3, ... 可选答案可以被分组，特定组内的所有可选答案被着为与相关题干空缺相同的颜色。被标记为无限制的可选答案可以用在多个空缺。';
$string['pluginname_link'] = 'question/type/ddwtos';
$string['pluginnameadding'] = '添加一个拖放填空题';
$string['pluginnameediting'] = '编辑一个拖放填空题';
$string['pluginnamesummary'] = '用拖放的方式填充题目中缺失的词语。';
$string['privacy:metadata'] = '图片拖拽题类型插件允许出题者将默认选项设置为用户首选项。';
$string['privacy:preference:defaultmark'] = '为给定问题设置的默认分数。';
$string['privacy:preference:penalty'] = '在使用 "多次尝试交互 "或 "自适应模式 "运行问题时，对每次错误尝试的罚分。';
$string['privacy:preference:shuffleanswers'] = '答案是否自动重新排序';
