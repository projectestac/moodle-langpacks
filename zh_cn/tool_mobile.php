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
 * Strings for component 'tool_mobile', language 'zh_cn', version '4.4'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = '启用ADOdb调试。它应该在外部数据库认证或外部数据库注册插件设置中禁用。';
$string['androidappid'] = 'Android应用的惟一标识符';
$string['androidappid_desc'] = '除非您有自定义 Android 应用，否则此设置可以留为默认值。';
$string['apppolicy'] = '应用政策网址';
$string['apppolicy_help'] = '应用用户政策网址，列在应用的“关于”页面上。如果字段为空，则使用站点政策网址。';
$string['apprequired'] = '该功能只有通过Moodle移动或桌面应用访问时才能使用。';
$string['autologinkeygenerationlockout'] = '自动登录密钥生成被阻止。您需要在两次请求之间等待 {$a} 分钟。';
$string['autologinmintimebetweenreq'] = '自动登录请求之间的最短间隔时间';
$string['autologinmintimebetweenreq_desc'] = '来自移动应用程序的自动登录请求之间的最短时间间隔。如果经常要求用户在查看网站的内容时登陆账号，请设置较低的值。';
$string['autologinnotallowedtoadmins'] = '站点管理员不允许自动登录。';
$string['autologout'] = '强制用户自动注销';
$string['autologout_desc'] = '出于安全原因，您可以强制用户在离开或关闭应用程序时自动退出，或者进入后台。当用户返回应用程序时，他们必须再次登录。';
$string['autologoutcustom'] = '自定义用户离开或关闭应用程序后的时间';
$string['autologoutinmediate'] = '在用户离开后立即关闭应用程序';
$string['autologouttime'] = '自动注销定时器';
$string['cachedef_plugininfo'] = '它存储包含移动插件的插件列表';
$string['cachedef_subscriptiondata'] = '它存储Moodle应用的订阅信息。';
$string['clickheretolaunchtheapp'] = '如果应用没有自动打开，请点击这里。';
$string['configmobilecssurl'] = '定制您的移动应用界面的CSS文件。';
$string['customlangstrings'] = '自定义语言字符串';
$string['customlangstrings_desc'] = '应用程序中显示的单词和短语可以在此处自定义。在新行中输入每个自定义语言字符串，格式为：字符串标识符、自定义语言字符串和语言代码，用管道字符分隔。例如：
<pre>
mm.user.student |Learner | en
mm.user.student|Aprendiz|es
</pre>
有关字符串标识符的完整列表，请参阅文档。';
$string['custommenuitems'] = '自定义菜单项';
$string['custommenuitems_desc'] = '通过在此处指定，可以将其他项目添加到应用程序的主菜单中。在新的行中输入每个自定义菜单项目，格式为：项目文本、链接URL、链接打开方式和语言代码（可选，仅对指定语言的用户显示该项目），用管道字符（ “|” ）分隔。

链接打开方式有：应用程序（用于链接到应用程序支持的活动）、应用浏览器（用于在浏览器中打开链接而不离开应用程序）、浏览器（用于在应用程序之外的设备默认浏览器中打开链接）和嵌入式（用于在应用程序的新页面中的iframe中显示链接）。

当项目缺少指定语言的翻译时，它们将使用其他语言作为后备，除非在语言代码中附加"_only "。

例如：
<pre>
应用程序帮助|https://someurl.xyz/help|应用浏览器
我的成绩|https://someurl.xyz/local/mygrades/index.php|嵌入式|en
在我的资格中|https://someurl.xyz/local/mygrades/index.php|嵌入式|es
你只能在英语中看到这个|https://someurl.xyz/english|浏览器|en_only
</pre>';
$string['darkmode'] = '深色模式';
$string['disabledfeatures'] = '禁用功能';
$string['disabledfeatures_desc'] = '在这里为您的站点选择您想要在移动应用中禁用的功能。请注意，这里列出的一些功能可能已经通过其他站点设置被禁用。您必须退出并再次登录应用才能看到变化。';
$string['displayerrorswarning'] = '已启用显示调试消息(debugdisplay)。它应该被禁用。';
$string['downloadcourse'] = '下载课程';
$string['downloadcourses'] = '下载课程';
$string['enablesmartappbanners'] = '启用应用头图';
$string['enablesmartappbanners_desc'] = '如果启用，在使用移动设备浏览器访问站点时，将显示一个推广移动应用的头图。';
$string['filetypeexclusionlist'] = '文件类型排除列表';
$string['filetypeexclusionlist_desc'] = '选择所有不适合在移动设备上使用的文件类型。这类文件将在课程中列出，如果用户试图打开它们，将显示一条警告提示该文件类型不适合在移动设备上使用。如果用户坚持打开该文件，可以取消或无视该警告。';
$string['filetypeexclusionlistplaceholder'] = '移动文件类型排除列表';
$string['forcedurlscheme'] = '如果您只允许您的自定义品牌应用通过浏览器窗口打开，那么在这里指定它的URL方案。如果您只允许官方应用，那么设置为默认值。如果您想允许任何应用，请将字段留空。';
$string['forcedurlscheme_key'] = 'URL方案';
$string['forcelogout'] = '强制退出';
$string['forcelogout_desc'] = '如果启用，即使切换账户，用户也将始终完全注销。然后，他们必须在下次访问该网站时重新输入密码。';
$string['getmoodleonyourmobile'] = '获取移动应用';
$string['h5poffline'] = '离线查看H5P内容';
$string['httpsrequired'] = '‎需要 HTTPS‎';
$string['insecurealgorithmwarning'] = '似乎HTTPS证书使用了一种不安全的签名算法(SHA-1)。请更新证书。';
$string['invalidcertificatechainwarning'] = '证书链似乎无效。此证书可能适用于浏览器，但不适用于移动应用程序。';
$string['invalidcertificateexpiredatewarning'] = '似乎该站点的HTTPS证书已经过期。';
$string['invalidcertificatestartdatewarning'] = '似乎该站点的HTTPS证书还未生效(生效日期还未到)。';
$string['invalidprivatetoken'] = '无效的私人令牌。令牌不应为空或通过GET参数传递。';
$string['invaliduserquotawarning'] = '用户配额(userquota)设置的数字无效。在站点安全设置中，应该将其设置为一个有效的数字(一个整数值)。';
$string['iosappid'] = 'iOS应用的唯一标识符';
$string['iosappid_desc'] = '除非您有一个定制的iOS应用，否则这个设置可以保留为默认值。';
$string['launchviasiteinbrowser'] = '通过系统浏览器中的站点启动';
$string['loginintheapp'] = '通过应用（APP）';
$string['logininthebrowser'] = '通过浏览器窗口(用于SSO插件)';
$string['loginintheembeddedbrowser'] = '通过嵌入式浏览器(用于SSO插件)';
$string['logoutconfirmation'] = '确定要从您的移动设备上的移动应用程序内注销吗？注销后，您将需要在所有安装了该应用程序的设备上重新输入用户名和密码。';
$string['mainmenu'] = '主菜单';
$string['managefiletypes'] = '管理文件类型';
$string['minimumversion'] = '如果指定了应用版本(3.8.0或更高版本)，任何使用较老版本应用的用户将被提示升级他们的应用，然后才能访问站点。';
$string['minimumversion_key'] = '最低应用版本要求';
$string['mobileapp'] = '移动应用';
$string['mobileappearance'] = '移动设备外观';
$string['mobileappenabled'] = '此站点已启用移动应用访问。<br /> <a href="{$a}">下载移动应用</a>。';
$string['mobileappsubscription'] = 'Moodle应用订阅';
$string['mobileauthentication'] = '移动设备身份验证';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = '移动设备功能';
$string['mobilenotificationsdisabledwarning'] = '未启用移动设备通知。应在通知设置中启用它们。';
$string['mobilesettings'] = '移动设备设置';
$string['moodleappsportalfeatureswarning'] = '请注意，某些功能可能会受到限制，具体取决于您的Moodle应用订阅。有关详细信息，请访问<a href="{$a}" target="_blank">Moodle应用门户网站</a>。';
$string['notifications'] = '通知';
$string['notificationsactivedevices'] = '活跃设备';
$string['notificationscurrentactivedevices'] = '本月接收通知的设备';
$string['notificationsignorednotifications'] = '通知未发送';
$string['notificationslimitreached'] = '超出了每月活跃用户设备的限制。不会发送某些用户的通知。建议您在<a href="{$a}" target="_blank"> Moodle 应用门户网站</a>中升级您的应用计划。';
$string['notificationsmissingwarning'] = '无法检索Moodle应用通知统计信息。这很可能是因为站点上还未启用移动设备通知。您可以在“站点管理/消息/移动设备”中启用它们。';
$string['notificationsnewdevices'] = '新设备';
$string['notificationsseemore'] = '注意：Moodle应用使用情况统计信息并非实时计算。要访问更详细的统计信息，包括前几个月的数据，请登录<a href="{$a}" target="_blank"> Moodle 应用门户网站 </a>。';
$string['notificationssentnotifications'] = '已发送通知';
$string['oauth2identityproviders'] = 'OAuth 2身份验证提供程序';
$string['offlineuse'] = '离线使用';
$string['pluginname'] = 'Moodle 应用工具';
$string['pluginnotenabledorconfigured'] = '未启用或配置插件。';
$string['privacy:metadata:core_userkey'] = '用户密钥，用于为当前用户创建自动登录密钥。';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = '上次自动登录密钥请求的日期。每次请求之间需要 6 分钟。';
$string['qrcodedisabled'] = '禁用二维码访问';
$string['qrcodeformobileappaccess'] = '用于移动应用访问的二维码';
$string['qrcodeformobileapploginabout'] = '使用移动应用扫描二维码可自动登录。二维码将在{$a}分钟后过期。';
$string['qrcodeformobileappurlabout'] = '使用您的移动应用扫描二维码，以在应用中填写站点网址。';
$string['qrcodetype'] = '二维码访问';
$string['qrcodetype_desc'] = '可以提供二维码供移动应用程序用户扫描。这可用于填写站点 URL，或者在使用 HTTPS 保护站点的情况下，自动登录用户，而无需输入其用户名和密码。';
$string['qrcodetypelogin'] = '带自动登录的二维码';
$string['qrcodetypeurl'] = '带站点网址的二维码';
$string['qrkeyttl'] = 'QR身份验证密钥持续时间';
$string['qrkeyttl_desc'] = '用于自动登录的二维码有效的时间长度。';
$string['qrsameipcheck'] = 'QR认证相同的IP检查';
$string['qrsameipcheck_desc'] = '用户是否必须使用同一网络生成和扫描二维码进行登录。只有当用户报告QR登录问题时才禁用它。';
$string['qrsiteadminsnotallowed'] = '出于安全原因，站点管理员或者以其他用户身份登录不允许通过二维码登录。';
$string['readingthisemailgettheapp'] = '您是否在电子邮件中阅读此内容？<a href="{$a}">下载App</a>，以在您的移动设备上接收通知。';
$string['remoteaddons'] = '远程附件';
$string['responsivemainmenuitems'] = '响应式菜单项';
$string['scanqrcode'] = '扫描二维码';
$string['selfsignedoruntrustedcertificatewarning'] = 'HTTPS 证书似乎是自签名证书或不受信任的证书。移动应用程序仅适用于受信任的站点。请使用任意在线 SSL 检查器来诊断问题。如果它指示您的证书正常，则可以忽略此警告。';
$string['setuplink'] = '应用下载页面';
$string['setuplink_desc'] = '页面网址，其中包含从app Store和Google Play下载移动应用的选项。应用下载页面链接显示在页面页脚和用户个人档案中。留空则不显示链接。';
$string['smartappbanners'] = '应用头图';
$string['subscription'] = '订阅';
$string['subscriptioncreated'] = '开始日期';
$string['subscriptionerrorrequest'] = '检索Moodle应用订阅信息时出现意外错误。';
$string['subscriptionexpiration'] = '有效日期';
$string['subscriptionfeaturenotapplied'] = '您的站点上配置了此功能，但它不包括在您的 Moodle 应用计划中。因此，该设置将不起作用。';
$string['subscriptionfeatures'] = '订阅功能';
$string['subscriptionlimitsurpassed'] = '超出订阅限制';
$string['subscriptionregister'] = '有关各种应用计划的详细信息，以及访问Moodle应用使用情况的统计信息，请访问<a href="{$a}" target="_blank"> Moodle应用门户网站</a>。';
$string['subscriptionsseemore'] = '注意：显示的信息不会实时更新。您可能需要退出并再次登录才能查看更新信息。有关升级应用计划的信息，请登录<a href="{$a}" target="_blank"> Moodle应用门户网站</a>。';
$string['switchaccount'] = '切换帐户';
$string['typeoflogin'] = '登陆类型';
$string['typeoflogin_desc'] = '如果站点使用SSO身份验证方法，则通过浏览器窗口或嵌入式浏览器进行选择。嵌入式浏览器虽然不能与所有SSO插件一起使用，但可以提供更好的用户体验。';
$string['viewqrcode'] = '查看二维码';
