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
 * Strings for component 'block', language 'zh_cn', version '4.4'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = '添加 {$a} 版块';
$string['anypagematchingtheabove'] = '任何符合上面条件的页面';
$string['appearsinsubcontexts'] = '出现在子上下文';
$string['assignrolesinblock'] = '在 {$a} 版块中分配角色';
$string['blocksdrawertoggle'] = '隐藏/显示版块抽屉';
$string['blocksettings'] = '版块设置';
$string['bracketfirst'] = '{$a}（最高）';
$string['bracketlast'] = '{$a}（最低）';
$string['configureblock'] = '配置 {$a} 版块';
$string['contexts'] = '页面工作场景';
$string['contexts_help'] = '场景是在原始版块位置之下，可以显示此版块的各种特殊类型的页面。因原始版块位置和您当前位置的不同，您会看到不同的选项。例如，您可以限制一个版块只在讨论区页面出现，只需在课程页面添加这个版块（让它在所有子页面可见），然后进入一个讨论区并再次编辑版块设置，限制它只在讨论区页面显示。';
$string['createdat'] = '版块原位置';
$string['createdat_help'] = '创建块的原始位置。阻止设置可能会导致它显示在原始位置内的其他位置（上下文）中。例如，在课程页面上创建的块可以显示在该课程内的活动中。在站点主页上创建的块可以在整个站点中显示。';
$string['defaultregion'] = '缺省区域';
$string['defaultregion_help'] = '主题风格可能会定义若干个版块区域，版块可以显示在其中。此设置定义缺省情况下您希望此版块出现在哪个区域。如果需要，此设置可以在某些特殊页面覆盖。';
$string['defaultweight'] = '缺省重量';
$string['defaultweight_help'] = '缺省重量使得您可以严格设置此版块在选定区域的上面还是下面显示。最终位置要根据该区域的所有版块计算得出（例如，只有一个版块可以在最顶端）。如果需要，此设置可以在某些特殊页面覆盖。';
$string['deleteblock'] = '删除 {$a} 版块';
$string['deleteblockcheck'] = '将要删除版块 {$a}';
$string['deleteblockinprogress'] = '正在删除模块 {$a}...';
$string['deleteblockwarning'] = '<p>你要删除一个别的地方使用的模块。</p><p>原始模块位置： {$a->location}<br />在页面显示的类型： {$a->pagetype}</p><p>你确认要删除么？</p>';
$string['deletecheck'] = '删除版块 {$a}？';
$string['deletecheck_modal'] = '删除模块？';
$string['hideblock'] = '隐藏 {$a} 版块';
$string['hidepanel'] = '隐藏栏位';
$string['moveblock'] = '移动 {$a} 版块';
$string['moveblockafter'] = '移动版块到 {$a} 版块之后';
$string['moveblockbefore'] = '移动版块到 {$a} 版块之前';
$string['moveblockinregion'] = '移动版块到 {$a} 区域';
$string['movingthisblockcancel'] = '正在移动版块（{$a}）';
$string['myblocks'] = '我的版块';
$string['onthispage'] = '在本页';
$string['pagetypes'] = '网页类型';
$string['pagetypewarning'] = '之前指定的页面类型不再可以选择。请在下面选择最恰当的页面类型。';
$string['privacy:metadata:userpref:dockedinstance'] = '当用户将版块停靠时进行记录';
$string['privacy:metadata:userpref:hiddenblock'] = '当用户将版块收起/隐藏时进行记录';
$string['privacy:request:blockisdocked'] = '显示版块是否已停靠';
$string['privacy:request:blockishidden'] = '显示版块是否已隐藏/收起';
$string['region'] = '区域';
$string['restrictpagetypes'] = '在哪种类型页面显示';
$string['showblock'] = '显示 {$a} 版块';
$string['showoncontextandsubs'] = '显示在“{$a}”及其子页面';
$string['showoncontextonly'] = '只在“{$a}”里显示';
$string['showonentiresite'] = '在全站都可以使用';
$string['showonfrontpageandsubs'] = '在网站主页和添加到网站主页的任何页面上显示';
$string['showonfrontpageonly'] = '只在首页显示';
$string['subpages'] = '选择页面';
$string['thisspecificpage'] = '指定的页面';
$string['visible'] = '可见';
$string['weight'] = '重量';
$string['wherethisblockappears'] = '此版块显示在哪里';
