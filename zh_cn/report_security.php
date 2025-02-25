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
 * Strings for component 'report_security', language 'zh_cn', version '4.4'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_details'] = '该状态会根据主防病毒设置中设定的阈值，检查是否有最近检测到的错误。';
$string['check_antivirus_error'] = '在上一次 {$a->lookback} 中检测到 {$a->errors} 错误';
$string['check_antivirus_info'] = '当前未启用任何防病毒扫描程序';
$string['check_antivirus_logstore_not_supported'] = '由于选择的日志存储类型，无法验证防病毒扫描程序的状态';
$string['check_antivirus_name'] = '杀毒软件';
$string['check_antivirus_ok'] = '{$a->scanners} 防病毒扫描程序已启用，上次 {$a->lookback} 未检测到问题';
$string['check_configrw_details'] = '<p>建议在安装后更改 <code>config.php</code> 的文件权限，以便 Web 服务器无法修改该文件。
请注意，此措施不会显著提高服务器的安全性，但可能会减慢或限制一般漏洞利用。</p>';
$string['check_configrw_name'] = 'config.php文件可改写';
$string['check_configrw_ok'] = 'config.php 无法通过 PHP 脚本编辑。';
$string['check_configrw_warning'] = 'PHP 脚本可以修改 config.php 文件。';
$string['check_cookiesecure_details'] = '<p>如果启用了 https 通信，建议启用安全 Cookie 的发送。您应该具有从 http 到 https 的永久重定向，理想情况下还应提供 HSTS 标头。</p>';
$string['check_cookiesecure_error'] = '请启用安全的 cookie';
$string['check_cookiesecure_http'] = '你必须打开https才能使用安全的cookies';
$string['check_cookiesecure_name'] = '安全的 cookie';
$string['check_cookiesecure_ok'] = '已启用安全的 cookie。';
$string['check_crawlers_details'] = '<p>向Google开放后，搜索引擎就可以以访客身份进入课程。如果不允许访客访问的话，那么打开这个设置也没有意义。</p>';
$string['check_crawlers_error'] = '搜索引擎可以访问，但访客不能访问。';
$string['check_crawlers_info'] = '搜索引擎可以作为访客进入。';
$string['check_crawlers_name'] = '对谷歌开放';
$string['check_crawlers_ok'] = '不允许搜索引擎访问';
$string['check_defaultuserrole_details'] = '<p>所有登录用户都被授予默认用户角色的功能。请确保此角色不允许任何有风险的功能。</p>
<p>默认用户角色唯一支持的旧类型是 <em>Authenticated user （经过身份验证的用户</em>）。不得启用课程视图功能。</p>
<p>请检查是否启用了 自动数据删除请求批准（tool_dataprivacy | automaticdatadeletionapproval） 选项。用户可以请求删除可能会删除大量数据。</p>';
$string['check_defaultuserrole_error'] = '默认角色“{$a}”未正确定义！';
$string['check_defaultuserrole_name'] = '所有用户的缺省角色';
$string['check_defaultuserrole_notset'] = '缺省角色未设置。';
$string['check_defaultuserrole_ok'] = '为所有用户定义的缺省角色是正确的。';
$string['check_dirindex_info'] = '不应启用目录索引';
$string['check_displayerrors_details'] = '<p>不建议在正式网站打开PHP设置<code>display_errors</code>，因为错误信息可能会暴露服务器上的一些敏感信息。</p>';
$string['check_displayerrors_error'] = '显示错误信息的PHP设置被打开。建议关闭它。';
$string['check_displayerrors_name'] = '显示 PHP 错误信息';
$string['check_displayerrors_ok'] = '显示 PHP 错误信息已禁用。';
$string['check_dotfiles_info'] = '除了/.well-known/*以外的所有点阵文件都不应该是公开的。';
$string['check_emailchangeconfirmation_details'] = '<p>建议用户在个人资料中修改email地址后，必须做email确认。如果禁用，可能会有人通过发送垃圾信息来攻击服务器。</p>
<p>认证插件中可能已经锁定了email域，这一步在这里没有考虑。</p>';
$string['check_emailchangeconfirmation_error'] = '用户可以使用任意 Email 地址。';
$string['check_emailchangeconfirmation_info'] = '用户仅能使用特定域名的 Email 地址。';
$string['check_emailchangeconfirmation_name'] = 'Email 修改确认';
$string['check_emailchangeconfirmation_ok'] = '修改用户信息中的 Email 时需确认。';
$string['check_embed_details'] = '<p>毫无限制的对象嵌入是非常危险的——任何注册用户都可以发起针对其它用户的XSS攻击。此设置在正式网站上应该禁用。</p>';
$string['check_embed_error'] = '允许无限制地嵌入对象——对于大多数服务器而言，这非常危险。';
$string['check_embed_name'] = '允许 EMBED 和 OBJECT';
$string['check_embed_ok'] = '不允许无限制地嵌入对象。';
$string['check_frontpagerole_details'] = '<p>默认站点主角色将分配给站点主活动的所有经过身份验证的用户。请确保此角色不允许任何有风险的功能。</p>
<p>建议为此目的创建一个特殊角色，并且不要使用旧类型角色。</p>';
$string['check_frontpagerole_error'] = '检测到未正确定义的首页角色“{$a}”！';
$string['check_frontpagerole_name'] = '首页角色';
$string['check_frontpagerole_notset'] = '未设置首页角色。';
$string['check_frontpagerole_ok'] = '首页角色定义正确。';
$string['check_guestrole_details'] = '<p>访客角色由访客、未登录用户和临时访问课程的访客使用。请确认此角色没有危险的权限。</p>
<p>访客用户对应的旧角色只能是<em>访客</em>。</p>';
$string['check_guestrole_error'] = '访客角色“{$a}”定义错误！';
$string['check_guestrole_name'] = '访客角色';
$string['check_guestrole_notset'] = '未设定访客角色。';
$string['check_guestrole_ok'] = '访客角色定义正确。';
$string['check_nodemodules_details'] = '<p>目录<code>{$a->path}</code>包含Node.js模块及其附属项，通常由NPM工具安装。这些模块可能是本地Moodle开发所需要的，比如使用grunt框架。在生产环境中运行Moodle站点不需要这些模块，而且它们可能含有使您的站点受到远程攻击的潜在危险代码。</p><p>如果网站可以通过公共URL访问，强烈建议删除该目录，或者至少在您的web服务器配置中禁止对其进行web访问。</p>';
$string['check_nodemodules_info'] = 'node_modules目录不应出现在公共站点上。';
$string['check_nodemodules_name'] = 'Node.js模块目录';
$string['check_openprofiles_details'] = '开放用户个人信息可能会被不良用户滥用。建议启用<code>强制用户登录后才能访问个人资料</code>或者<code>强制用户登录</code>。';
$string['check_openprofiles_error'] = '任何人无须登录就可以查看用户的个人信息。';
$string['check_openprofiles_name'] = '开放用户个人信息';
$string['check_openprofiles_ok'] = '在查看用户个人信息前需登录。';
$string['check_passwordpolicy_details'] = '<p>建议您设定一个密码策略，因为猜测密码是最常见的非法入侵方法。同时您也不要把密码策略设定的太苛刻，这会导致用户无法记住他们的密码以至于忘记密码或把密码写下来。</p>';
$string['check_passwordpolicy_error'] = '密码策略未设置。';
$string['check_passwordpolicy_name'] = '密码策略';
$string['check_passwordpolicy_ok'] = '密码策略已激活。';
$string['check_preventexecpath_details'] = '<p>允许通过Admin GUI设置可执行路径是权限升级的一个媒介。这必须在config.php:</p><p><code>$CFG->preventexecpath = true;<code>中强制执行</p>';
$string['check_preventexecpath_name'] = '可执行路径';
$string['check_preventexecpath_ok'] = '可执行路径只能在config.php中设置。';
$string['check_preventexecpath_warning'] = '可执行路径可以在Admin GUI中设置。';
$string['check_publicpaths_403'] = '（返回的是403，理想情况下应为404）';
$string['check_publicpaths_generic'] = '{$a}文件不应该是公开的';
$string['check_publicpaths_name'] = '检查所有公共/私有路径';
$string['check_publicpaths_ok'] = '所有内部路径都不可公开访问';
$string['check_publicpaths_warning'] = '一些内部路径可公开访问';
$string['check_riskadmin_detailsok'] = '<p>请确认下列人员为系统管理员：</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>请确认下列系统管理员：</p>{$a->admins}
<p>建议只在系统场景下分配管理员角色。下列用户在其它场景中被分配了管理员角色（不支持）：</p>{$a->unsupported}';
$string['check_riskadmin_name'] = '管理员';
$string['check_riskadmin_ok'] = '找到了 {$a} 个服务器管理员。';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} （{$a->email}）评估角色分配</a>';
$string['check_riskadmin_warning'] = '找到 {$a->admincount} 个服务器管理员和 {$a->unsupcount} 个不支持的管理员角色分配。';
$string['check_riskbackup_details_overriddenroles'] = '<p>这些有效的角色覆盖使用户获得在备份中包含其它用户数据的权限。请确认此权限是必须的。</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>下列系统角色有在备份中包含用户数据的权限。请确认此权限是必须的。</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>因为上面的角色或局部覆盖，下列用户现在可以在备份中包含选修他们课程的所有用户的隐私数据。请确认他们是可信任的，且他们的密码足够强壮：</p> {$a}';
$string['check_riskbackup_detailsok'] = '没有被明确允许备份用户数据的角色。但是，请注意，有“doanything”权限的管理员仍然可以这么做。';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name}在{$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = '备份用户数据';
$string['check_riskbackup_ok'] = '没有被明确允许备份用户数据的角色';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email})在{$a->contextname}</a>';
$string['check_riskbackup_warning'] = '找到 {$a->rolecount} 个角色、{$a->overridecount}个覆盖和 {$a->usercount} 个用户有备份用户数据的权限。';
$string['check_riskxss_details'] = '<p>有 RISK_XSS 标记的权限是危险的权限，只能允许可信任的用户使用。</p>
<p>请确认下面的用户列表，确认此服务器完全信任他们：</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS 信任用户';
$string['check_riskxss_warning'] = 'RISK_XSS——发现 {$a} 个必须被信任的用户。';
$string['check_unsecuredataroot_details'] = '<p>dataroot 目录必须不能通过 web 访问。使此目录不可访问的最好方法是使用在公开 web 目录之外的目录。</p>
<p>如果您移动此目录，您需要相应地更新 <code>config.php</code> 中的 <code>$CFG->dataroot</code> 设置。</p>';
$string['check_unsecuredataroot_error'] = '您的数据目录 <code>{$a}</code> 位置错误，它可以直接通过 Web 访问！';
$string['check_unsecuredataroot_name'] = '不安全的数据目录';
$string['check_unsecuredataroot_ok'] = '数据目录不能通过 Web 直接访问。';
$string['check_unsecuredataroot_warning'] = '您的数据目录 <code>{$a}</code> 位置错误，可以从 Web 直接访问。';
$string['check_vendordir_details'] = '<p>目录<code>{$a->path}</code>包含各种第三方库及其附属项，通常由PHP 编译器安装。这些库可能是本地Moodle开发所需要的，比如安装PHPUnit框架。在生产环境中运行Moodle站点不需要这些模块，而且它们可能含有使您的站点受到远程攻击的潜在危险代码。</p><p>如果网站可以通过公共URL访问，强烈建议删除该目录，或者至少在web服务器配置中禁止对其进行web访问。</p>';
$string['check_vendordir_info'] = '供应商目录不应出现在公共站点上。';
$string['check_vendordir_name'] = '供应商目录';
$string['check_webcron_details'] = '<p>从 Web 浏览器运行 cron 可能会将保密信息暴露给匿名用户。建议只从命令行运行cron，或为远程访问设置一个cron密码。</p>';
$string['check_webcron_name'] = 'Web cron';
$string['check_webcron_ok'] = '匿名用户无法访问cron。';
$string['check_webcron_warning'] = '匿名用户可以访问cron。';
$string['configuration'] = '配置';
$string['description'] = '描述';
$string['details'] = '详情';
$string['eventreportviewed'] = '查看了安全检查报告';
$string['issue'] = '问题';
$string['pluginname'] = '安全检查';
$string['privacy:metadata'] = '安全概览插件不存储任何个人数据。';
$string['security:view'] = '查看安全报表';
$string['timewarning'] = '处理数据可能会需要很长时间，请耐心等待...';
