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
 * Strings for component 'enrol_ldap', language 'zh_cn', version '4.4'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = '用户“{$a->user_username}”在课程“{$a->course_shortname}” (id {$a->course_id})中被分配角色“{$a->role_shortname}”。';
$string['assignrolefailed'] = '无法在课程 \'{$a->course_shortname}\' (id {$a->course_id})中给用户 \'{$a->user_username}\' 分配\'{$a->role_shortname}\' 角色';
$string['autocreate'] = '<p>如果一门课被选修，但是在Moodle中还未创建，那么可以自动创建它</p><p>如果您使用自动课程创建，那么建议您去掉相关角色的如下权限：moodle/course:changeidnumber，moodle/course:changeshortname，moodle/course:changefullname和moodle/course:changesummary。这样可以阻止对上面指定的四个课程属性（课程编号，简称，全名和简介）的修改。</p>';
$string['autocreate_key'] = '自动创建';
$string['autocreation_settings'] = '自动创建课程设置';
$string['autoupdate_settings'] = '自动课程更新设定';
$string['autoupdate_settings_desc'] = '<p>选择要在“同步 LDAP 注册”计划任务运行时更新的字段。</p><p>当至少选择一个字段时，将进行更新。</p>';
$string['bind_dn'] = '如果想使用一个绑定用户来搜索用户，请在此指定。其形式类似“cn=ldapuser,ou=public,o=org”。';
$string['bind_dn_key'] = '绑定用户名';
$string['bind_pw'] = '绑定用户密码';
$string['bind_pw_key'] = '密码';
$string['bind_settings'] = '绑定设置';
$string['cannotcreatecourse'] = '无法创建课程：LDAP记录中缺少必需的数据！';
$string['cannotupdatecourse'] = '无法更新课程：LDAP记录里沒有必要的资料！课程id数目:{$a->idnumber}';
$string['cannotupdatecourse_duplicateshortname'] = '无法更新课程：重复的简称。正在跳过idnumber为“{$a->idnumber}”的课程';
$string['category'] = '自动创建课程归入的类别';
$string['category_key'] = '类别';
$string['contexts'] = 'LDAP场景';
$string['couldnotfinduser'] = '找不到用户“{$a}”，跳过';
$string['course_fullname'] = '可选：从哪个LDAP属性获取全名';
$string['course_fullname_key'] = '全名';
$string['course_fullname_updateonsync'] = '在同步脚本期间更新全名';
$string['course_fullname_updateonsync_key'] = '更新全名';
$string['course_idnumber'] = 'LDAP属性中的课程编号。常是“cn”或“uid”。';
$string['course_idnumber_key'] = 'ID号';
$string['course_search_sub'] = '在子场景中搜索组成员';
$string['course_search_sub_key'] = '搜索子场景';
$string['course_settings'] = '选课设置';
$string['course_shortname'] = '可选：从哪个LDAP选项中获取简称';
$string['course_shortname_key'] = '简称';
$string['course_shortname_updateonsync'] = '在同步脚本期间更新简称';
$string['course_shortname_updateonsync_key'] = '更新简称';
$string['course_summary'] = '可选：从哪个LDAP属性中获取简介';
$string['course_summary_key'] = '简介';
$string['course_summary_updateonsync'] = '同步脚本期间的更新摘要';
$string['course_summary_updateonsync_key'] = '更新摘要';
$string['coursenotexistskip'] = '课程 \'{$a}\' 不存在并且自动创建被禁止，正在跳过中';
$string['courseupdated'] = 'idnumber为“{$a->idnumber}”的课程已成功更新。';
$string['courseupdateskipped'] = 'idnumber为“{$a->idnumber}”的课程不需要更新。跳过……';
$string['createcourseextid'] = '创建用户选择的一个不存在的课程“{$a->courseextid}”';
$string['createnotcourseextid'] = '用户选择了一个不存在的课程“{$a->courseextid}”';
$string['creatingcourse'] = '正在创建课程 \'{$a}\'...';
$string['duplicateshortname'] = '课程创建失败。课程简称已存在。正在跳过idnumber为“{$a->idnumber}”的课程…';
$string['editlock'] = '锁定';
$string['emptyenrolment'] = '课程“{$a->course_shortname}”中没有与角色“{$a->role_shortname}”有关的选课';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = '将用户“{$a->user_username}”加入课程“{$a->course_shortname}”（id {$a->course_id}）';
$string['enroluserenable'] = '已激活用户“{$a->user_username}”在课程“{$a->course_shortname}”（id {$a->course_id}）中的选课';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group()不支持选择的用户类型：{$a}';
$string['extcourseidinvalid'] = '课程的外部id无效！';
$string['extremovedsuspend'] = '已禁用用户“{$a->user_username}”在课程“{$a->course_shortname}”（id {$a->course_id}）中的选课';
$string['extremovedsuspendnoroles'] = '已禁用用户“{$a->user_username}”在课程“{$a->course_shortname}”（id {$a->course_id}）中的选课，并取消其角色';
$string['extremovedunenrol'] = '将用户“{$a->user_username}”从课程“{$a->course_shortname}”（id {$a->course_id}）删除';
$string['failed'] = '失败！';
$string['general_options'] = '常规选项';
$string['group_memberofattribute'] = '说明给定用户或组属于哪个组的属性名（例如：memberOf、groupMembership等）';
$string['group_memberofattribute_key'] = '“成员”属性';
$string['host_url'] = '以URL的形式指定LDAP主机，如“ldap://ldap.myorg.com/”或“ldaps://ldap.myorg.com/”。';
$string['host_url_key'] = '主机网页地址';
$string['idnumber_attribute'] = '如果组成员包含可识别的名称，请指定你在LDAP认证设置中用于用户 "ID号码 "映射的相同属性。';
$string['idnumber_attribute_key'] = '学号属性';
$string['ldap:manage'] = '管理LDAP选课实例';
$string['ldap_encoding'] = '指定LDAP服务器使用的编码。大多都是utf-8，但MS AD v2使用平台缺省编码，如cp1252、p1250等。';
$string['ldap_encoding_key'] = 'LDAP编码';
$string['memberattribute'] = 'LDAP用户属性';
$string['memberattribute_isdn'] = '如果该组成员包含可识别名称，需要在这里指定它们。如果是这样，你还需要配置本节中的其余设置。';
$string['memberattribute_isdn_key'] = '成员属性使用dn';
$string['nested_groups'] = '您要用嵌套组（组中组）选课吗？';
$string['nested_groups_key'] = '嵌套组';
$string['nested_groups_settings'] = '嵌套组设置';
$string['nosuchrole'] = '没有这个的角色: \'{$a}\'';
$string['objectclass'] = '用来搜索课程的objectClass，通常是“group”或“posixGroup”';
$string['objectclass_key'] = '对象类';
$string['ok'] = '好！';
$string['opt_deref'] = '如果组成员身份包含可分辨名称，请指定在搜索过程中如何处理别名。选择以下值之一：“否”（LDAP_DEREF_NEVER） 或“是”（LDAP_DEREF_ALWAYS）。';
$string['opt_deref_key'] = '解析别名';
$string['phpldap_noextension'] = 'PHP LDAP 模块似乎不存在。如果您想使用此注册插件，请确保已安装并启用它。';
$string['pluginname'] = 'LDAP选课';
$string['pluginname_desc'] = '<p>您可以使用LDAP服务器控制选课。这里假定您的LDAP树包含与课程映射的组，并且每个组/课程会有映射到学生的成员项。</p><p>这里假定在LDAP中课程被定义为组，每个组有多个成员字段（<em>member</em>或<em>memberUid</em>），包含用户的唯一标识。</p><p>要使用LDAP选课，您的用户<strong>必须</strong>都有一个有效的id字段。LDAP组中的成员字段必须有选修此课的学生的id。如果您已经使用LDAP认证，这通常会工作地很好。</p><p>当用户登录时会更新选课信息。您也可以运行一个的脚本来保持选课的同步。请参考 <em>enrol/ldap/enrol_ldap_sync.php</em>。</p><p>这个插件也可以在LDAP中有新组出现时自动创建课程。</p>';
$string['pluginnotenabled'] = '插件未激活！';
$string['privacy:metadata'] = 'LDAP招生插件不会存储任何个人数据。';
$string['role_mapping'] = '<p>对于每个角色，您需要指定代表课程的组所在的所有 LDAP 上下文。用分号 （;)） 分隔不同的上下文。</p><p>您还需要指定 LDAP 服务器用于保存组成员的属性。这通常是“member”或“memberUid”。</p>';
$string['role_mapping_attribute'] = '{$a}的 LDAP 成员属性';
$string['role_mapping_context'] = '{$a} 的 LDAP 上下文';
$string['role_mapping_key'] = '从LDAP映射角色';
$string['roles'] = '角色映射';
$string['server_settings'] = 'LDAP 服务器设置';
$string['synccourserole'] = '== 正在同步课程“{$a->idnumber}”中的“{$a->role_shortname}”角色';
$string['syncenrolmentstask'] = '同步LDAP招生任务';
$string['template'] = '可选：自动创建的课程可以从一个模板课程复制各种设置';
$string['template_key'] = '模板';
$string['unassignrole'] = '取消用户“{$a->user_username}”在课程“{$a->course_shortname}”（id {$a->course_id}）的“{$a->role_shortname}”角色';
$string['unassignrolefailed'] = '取消用户“{$a->user_username}”在课程“{$a->course_shortname}”（id {$a->course_id}）的“{$a->role_shortname}”角色失败';
$string['unassignroleid'] = '取消 id 为“{$a->user_id}”的用户的 id 为“{$a->role_id}”的角色';
$string['updatelocal'] = '更新本地数据';
$string['user_attribute'] = '如果组成员身份包含可分辨名称，请指定用于命名/搜索用户的属性。如果您使用 LDAP 身份验证，则此值应与 LDAP 身份验证插件中的“ID 号”映射中指定的属性匹配。';
$string['user_attribute_key'] = '身份证号码属性';
$string['user_contexts'] = '如果组成员身份包含可分辨名称，请指定用户所在的上下文列表。用分号（;) 分隔不同的上下文。例如：\'ou=users，o=org;ou=其他，o=org\'。';
$string['user_contexts_key'] = '场景';
$string['user_search_sub'] = '如果组成员身份包含可分辨名称，请指定是否也在子上下文中执行用户搜索。';
$string['user_search_sub_key'] = '搜索子场景';
$string['user_settings'] = '用户查找设置';
$string['user_type'] = '如果组成员包含识别名，指定用户在LDAP中是如何保存的';
$string['user_type_key'] = '用户类型';
$string['version'] = '您的服务器使用的LDAP协议版本';
$string['version_key'] = '版本';
