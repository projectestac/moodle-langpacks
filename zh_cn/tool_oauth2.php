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
 * Strings for component 'tool_oauth2', language 'zh_cn', version '4.4'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = '我明白，禁用电子邮件验证可能是一个安全问题。';
$string['acceptrisk_help'] = '禁用电子邮件验证有可能会允许用户以其他用户的身份进行认证。';
$string['authconfirm'] = '这将允许 Moodle 通过 API 操作即将绑定的账户。通常这是一个给 Moodle 系统使用的账户，以便管理其中的文件。';
$string['authconnected'] = '已取得系统账户的无人值守授权';
$string['authnotconnected'] = '未取得系统账户的无人值守授权';
$string['clever_service'] = '熟练的';
$string['configured'] = '已配置';
$string['configuredstatus'] = '已配置';
$string['connectsystemaccount'] = '绑定系统账户';
$string['createfromtemplate'] = '使用模板创建一个OAuth 2服务';
$string['createfromtemplatedesc'] = '从以下模板中选择一项，这将使用针对选择的服务的一系列已知有效参数创建一个新服务。除了客户端ID和密钥外，所有认证所需的参数都会预先填好，补齐应用ID和密钥即可使用。';
$string['createnewendpoint'] = '创建 {$a} 服务的终端';
$string['createnewservice'] = '创建新服务：';
$string['createnewuserfieldmapping'] = '为 {$a} 服务创建用户字段映射';
$string['custom_service'] = '自定义';
$string['deleteconfirm'] = '确定要删除 {$a} 服务吗？所有依赖该服务的插件都将失效';
$string['deleteendpointconfirm'] = '确定要删除 {$a->issuer} 服务的 {$a->endpoint} 终端吗？所有依赖该终端的插件都将失效';
$string['deleteuserfieldmappingconfirm'] = '确定要删除 {$a} 服务的用户字段映射吗？';
$string['discovered'] = '服务发现成功';
$string['discovered_help'] = '服务发现指的是通过OAuth服务的基地址自动确定相应的OAuth 2终端。OAuth服务可能会不支持这一功能，此时需要手动配置终端和用户字段映射。';
$string['discoverystatus'] = '服务发现';
$string['editendpoint'] = '编辑 {$a->issuer} 服务的 {$a->endpoint} 终端';
$string['editendpoints'] = '配置终端';
$string['editissuer'] = '编辑 {$a->issuer} 服务';
$string['edituserfieldmapping'] = '编辑 {$a} 服务的用户字段映射';
$string['edituserfieldmappings'] = '配置用户字段映射';
$string['endpointdeleted'] = '终端已删除';
$string['endpointname'] = '名称';
$string['endpointname_help'] = '用于识别该终端的名字。必须以 _endpoint 结尾';
$string['endpointsforissuer'] = '{$a} 服务的终端';
$string['endpointurl'] = '地址';
$string['endpointurl_help'] = '终端的地址。必须使用 https:// 协议';
$string['facebook_service'] = '脸书';
$string['google_service'] = '谷歌';
$string['imsobv2p1_service'] = '公开徽章';
$string['issueralloweddomains'] = '域名限制';
$string['issueralloweddomains_help'] = '指定允许使用该服务登陆的账户域名，以英文半角逗号分隔。留空不限制。';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = '基地址';
$string['issuerbaseurl_help'] = '用于访问服务的基地址';
$string['issuerclientid'] = '应用ID';
$string['issuerclientid_help'] = '服务指定的OAuth应用ID或客户端ID';
$string['issuerclientsecret'] = '密钥';
$string['issuerclientsecret_help'] = '服务提供的OAuth共享密钥或密码';
$string['issuerdeleted'] = '服务已删除';
$string['issuerdisabled'] = '服务已禁用';
$string['issuerenabled'] = '服务已启用';
$string['issuerimage'] = '图标地址';
$string['issuerimage_help'] = '服务的图标，用于在登陆页上展示';
$string['issuerloginpagename'] = '登录页面上显示的名称';
$string['issuerloginpagename_help'] = '如果指定，将在登录页面上使用此名称，而不是服务名称。';
$string['issuerloginparams'] = '登录请求的额外参数';
$string['issuerloginparams_help'] = '有些服务可能需要在登录请求中添加额外的参数才会允许读取用户的基本资料';
$string['issuerloginparamsoffline'] = '无人值守授权的额外参数';
$string['issuerloginparamsoffline_help'] = '有些服务请求无人值守授权的方式可能会不同。比如 Google 需要额外添加 access_type=offline&prompt=consent 的参数。请使用 URL 查询参数的格式指定这些参数。';
$string['issuerloginscopes'] = '登录请求的授权范围';
$string['issuerloginscopes_help'] = '有些服务可能需要在登录请求中添加额外的授权范围才会允许读取用户的基本资料。对于遵循 OpenID Connect 规范的服务，标准的授权范围是“openid profile email”。';
$string['issuerloginscopesoffline'] = '无人值守授权的范围';
$string['issuerloginscopesoffline_help'] = '每个OAuth服务获取无人值守授权的方式不同。比如微软平台需要添加 offline_access 的范围。';
$string['issuername'] = '名称';
$string['issuername_help'] = '服务的名字，将展示在登陆页上';
$string['issuerrequireconfirmation'] = '需要电子邮件验证';
$string['issuerrequireconfirmation_help'] = '要求所有用户在使用OAuth登录之前验证其电子邮件地址。此步骤适用于新创建帐户作为登录过程的一部分，或者当现有Moodle帐户通过匹配的电子邮件地址连接到OAuth登录时。';
$string['issuers'] = '服务';
$string['issuersetup'] = '常见OAuth 2服务的配置指南';
$string['issuersetuptype'] = '{$a} 服务的配置指南';
$string['issuershowonloginpage'] = '在登陆页上展示';
$string['issuershowonloginpage_help'] = '启用OAuth 2认证插件后，用户可以在登陆页面上选择此服务进行登陆';
$string['issuersservicesallow'] = '允许服务';
$string['issuersservicesnotallow'] = '不允许使用服务';
$string['issuerusedforinternal'] = '内部服务';
$string['issuerusedforlogin'] = '登录';
$string['issuerusein'] = '将使用此服务';
$string['issuerusein_help'] = '如果需要，OAuth 2服务可以用于内部服务，也可以在登录页面上使用，或者同时使用。';
$string['issueruseineverywhere'] = '登录页面和内部服务';
$string['issueruseininternalonly'] = '仅限内部服务';
$string['issueruseinloginonly'] = '仅登录页面';
$string['linkedin_service'] = '领英';
$string['logindisplay'] = '在登录页面上显示为';
$string['loginissuer'] = '允许登陆';
$string['microsoft_service'] = '微软';
$string['moodlenet_service'] = 'MoodleNet';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = '未配置';
$string['notdiscovered'] = '服务发现失败';
$string['notloginissuer'] = '不允许登陆';
$string['pluginname'] = 'OAuth 2服务';
$string['privacy:metadata'] = 'OAuth 2服务插件不存储任何个人数据';
$string['savechanges'] = '保存更改';
$string['serviceshelp'] = '服务配置指南';
$string['systemaccountconnected'] = '系统账户已绑定';
$string['systemaccountconnected_help'] = '系统账户可以为插件提供高级特性。第三方登陆不需要绑定系统账号。有些插件可能会依赖OAuth服务，若没有绑定系统账户，插件功能可能会受限。比如容器插件如果没有系统账户可能会无法使用权限控制。';
$string['systemaccountnotconnected'] = '系统账户未绑定';
$string['systemauthstatus'] = '已绑定系统账户';
$string['usebasicauth'] = '通过HTTP标头验证令牌请求';
$string['usebasicauth_help'] = '使用刷新令牌请求发送客户端ID和密码时，使用HTTP基本身份验证方案。这是由OAuth 2标准推荐的，但某些发行人可能不提供。';
$string['userfieldexternalfield'] = '服务字段名';
$string['userfieldexternalfield_error'] = '此字段不能包含HTML。';
$string['userfieldexternalfield_help'] = 'OAuth服务提供的字段名';
$string['userfieldinternalfield'] = '内部字段名';
$string['userfieldinternalfield_help'] = '服务字段应该映射到的 Moodle 用户字段';
$string['userfieldmappingdeleted'] = '字段映射已删除';
$string['userfieldmappingsforissuer'] = '{$a} 服务的用户字段映射';
