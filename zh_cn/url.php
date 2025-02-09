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
 * Strings for component 'url', language 'zh_cn', version '4.4'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowvariables'] = '允许 URL 变量';
$string['allowvariables_desc'] = '允许将变量添加到 URL。通过变量，您可以将内部信息（例如用户名）作为 URL 的一部分进行传递。使用此功能时，请注意潜在的隐私风险。';
$string['chooseavariable'] = '选择一个变量...';
$string['clicktoopen'] = '点击{$a}链接打开资源。';
$string['configdisplayoptions'] = '选择所有可以使用的选项。已有的设置不会改变。按住CTRL键选择多个字段。';
$string['configframesize'] = '当在框架内显示web页面或上传的文件时，此值为顶层框架（包括导航栏）的高度（单位：像素）。';
$string['configrolesinparams'] = '自定义角色名称（来自课程设置）是否应作为 URL 参数的变量提供？';
$string['configsecretphrase'] = '此秘密短语被用来生成加密的代码。此代码可以当做参数发送给某些服务器。加密的代码是当前用户的IP地址和您的秘密短语的md5值。即，code = md5(IP.秘密短语)。请注意，因为IP地址会变化，且经常在不同计算机之间共享，所以并不可靠。';
$string['contentheader'] = '内容';
$string['createurl'] = '创建一个 URL';
$string['displayoptions'] = '可用的显示选项';
$string['displayselect'] = '显示';
$string['displayselect_help'] = '此设置与 URL 文件类型以及浏览器是否允许嵌入一起决定了 URL 的显示方式。选项可能包括：

* 自动 - 自动选择 URL 的最佳显示选项
* 嵌入 - URL 与 URL 描述和任何块一起显示在导航栏下方的页面中
* 打开 - 浏览器窗口中仅显示 URL
* 在弹出窗口中 - URL 显示在没有菜单或地址栏的新浏览器窗口中
* 在框架中 - URL 显示在导航栏和 URL 描述下方的框架中
* 新窗口 - URL 显示在带有菜单和地址栏的新浏览器窗口中';
$string['displayselectexplain'] = '选择显示类型，但并不是所有类型都适合所有URL。';
$string['externalurl'] = '外部URL';
$string['framesize'] = '框架高度';
$string['indicator:cognitivedepth'] = '网页地址资源认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在 网页地址资源中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = '网页地址资源认知深度';
$string['indicator:cognitivedepthdef_help'] = '在此分析间隔内，参与者已达到网页地址资源所提供的认知参与百分比(级别=未查看，查看)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = '网页地址资源社会广度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在网页地址资源中所达到的社会广度。';
$string['indicator:socialbreadthdef'] = '网页地址资源社会广度';
$string['indicator:socialbreadthdef_help'] = '在这个分析间隔内，参与者已经达到了网页地址资源所提供的社会参与百分比(级别=没有参与，单独参与)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = '不能显示此资源，URL 无效。';
$string['invalidurl'] = '输入的 URL 无效';
$string['modulename'] = '网页地址';
$string['modulename_help'] = '该 URL 模块可以让老师提供一个 web 链接作为课程资源。任何线上的可自由使用的东西，如文件或图片，可以作为链接；该 URL 不必是某个网站的主页。某个网页的 URL 可以被复制和粘贴，或者老师可以使用文件选择器，从容器中选择一个链接，如 Flickr，YouTube 或者 Wikimedia（视该站点可使用的容器的情况而定）。

该 URL 有一些显示选项，如嵌入显示或者在新的窗口打开该 URL 的选项，以及向该 URL 传递诸如学生姓名信息的高级选项，如果需要的话。';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = '网页地址';
$string['name'] = '名称';
$string['name_help'] = '这将用作 URL 的链接文本。

输入一个有意义的文本，简明扼要地描述 URL 的用途。

避免使用“链接”一词。这将帮助屏幕阅读器用户，因为屏幕阅读器会读出链接（例如“Moodle.org，链接”），因此无需在名称字段中包含“链接”一词。';
$string['page-mod-url-x'] = '任意URL模块页面';
$string['parameterinfo'] = '&amp;参数=变量';
$string['parametersheader'] = 'URL 变量';
$string['parametersheader_help'] = '此部分允许您将内部信息作为 URL 的一部分传递。例如，如果 URL 是一个采用参数的交互式网页，并且您想要传递当前用户的名称之类的内容，这将非常有用。在文本框中输入 URL 参数的名称，然后选择相应的站点变量。';
$string['pluginadministration'] = 'URL模块管理';
$string['pluginname'] = '网页地址';
$string['popupheight'] = '弹出窗口高度（单位：像素）';
$string['popupheightexplain'] = '指定弹出窗口的默认高度。';
$string['popupwidth'] = '弹出窗口宽度（单位：像素）';
$string['popupwidthexplain'] = '指定弹出窗口的默认宽度。';
$string['printintro'] = '显示URL描述';
$string['printintroexplain'] = '在内容下方显示 URL 描述？某些显示类型就算开启此选项也不会显示描述。';
$string['privacy:metadata'] = '网页地址资源插件不存储任何个人数据。';
$string['rolesinparams'] = '作为 URL 变量的角色名称';
$string['search:activity'] = '网页地址';
$string['serverurl'] = '服务器URL';
$string['url:addinstance'] = '添加一个新的 URL 资源';
$string['url:view'] = '查看URL';
