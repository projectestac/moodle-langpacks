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
 * Strings for component 'repository_flickr', language 'zh_cn', version '4.4'.
 *
 * @package     repository_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API密钥';
$string['callbackurl'] = '回调URL';
$string['callbackurltext'] = '<ol>
<li>请再访问<a href="http://www.flickr.com/services/api/keys/">Flickr API密钥</a>。</li>
<li>确认您为此Flickr密钥设置的回调URL是<strong>{$a}</strong></li></ol>';
$string['callbackwarning'] = '<ol>
<li>从Flickr为您的Moodle网站申请一个<a href="http://www.flickr.com/services/api/keys/">Flickr API 密钥和密文</a></li>
<li>在此输入这些信息，然后点击“保存”，再点击“设置”回到此页。您会看到Moodle为您生成了一个回调URL。</li>
<li>再次编辑您的<a href="http://www.flickr.com/services/api/keys/">Flickr</a>密钥细节，设置此回调URL。</li></ol>';
$string['configplugin'] = 'Flickr配置';
$string['emailaddress'] = 'Email地址';
$string['flickr:view'] = '查看Flickr容器';
$string['invalidemail'] = 'flickr的email地址无效';
$string['notitle'] = '无标题';
$string['nullphotolist'] = '此账号没有照片';
$string['pluginname'] = 'Flickr';
$string['pluginname_help'] = 'flickr.com上的容器';
$string['privacy:metadata:repository_flickr'] = 'Flickr存储库插件会存储用户首选项，并将用户数据从Moodle传输到远程系统。';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token'] = 'Flickr存储库OAuth令牌首选项。';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token_secret'] = 'Flickr存储库OAuth秘密首选项；这被排除在隐私数据导出之外。';
$string['privacy:metadata:repository_flickr:text'] = 'Flickr存储库用户搜索文本查询。';
$string['remember'] = '记住我';
$string['secret'] = '密文';
$string['username'] = 'Flickr账号email';
