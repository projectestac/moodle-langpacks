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
 * Strings for component 'enrol_self', language 'zh_cn', version '4.4'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = '选课已关闭或过期';
$string['canntenrolearly'] = '你还不能选课，选课要到{$a}才开始';
$string['canntenrollate'] = '你已经不能选课，因为选课已于{$a}结束';
$string['cohortnonmemberinfo'] = '只有群\'{$a}\'的成员可以自主选课';
$string['cohortonly'] = '只有群成员';
$string['cohortonly_help'] = '自助选课仅限于指定群中的成员。注意，修改这个设置不会影响已经存在的选课。';
$string['confirmbulkdeleteenrolment'] = '是否确认删除这些用户的选课？';
$string['customwelcomemessage'] = '自定义欢迎信息';
$string['customwelcomemessage_help'] = '接受的格式：纯文本或 Moodle-auto 格式。HTML 标签和多语言标签以及以下占位符也被接受：
<ul>
<li>课程名称 {$a->coursename}</li>
<li>链接到用户的个人资料页面 {$a->profileurl}</li>
<li>用户电子邮件 {$a->email}</li>
<li>用户全名 {$a->fullname}</li>
<li>用户名字 {$a->firstname}</li>
<li>用户姓氏 {$a->姓氏}</li>
<li>用户课程角色 {$a->courserole}</li>
</ul>';
$string['defaultrole'] = '缺省分配的角色';
$string['defaultrole_desc'] = '选择用户自助选课后被分配的角色';
$string['deleteselectedusers'] = '删除被选中用户的选课';
$string['editselectedusers'] = '编辑选中用户的选课';
$string['enrolenddate'] = '结束时间';
$string['enrolenddate_help'] = '如果启用，用户只能在此日期前自行加入此课程。';
$string['enrolenddaterror'] = '选课的结束时间不能早于开始时间';
$string['enrolme'] = '将我加入';
$string['enrolperiod'] = '选课期限';
$string['enrolperiod_desc'] = '选课有效的默认时间长度。如果设置为零，则默认情况下，选课持续时间将是无限制的。';
$string['enrolperiod_help'] = '用户身份有效期长度，从用户自行加入课程之日算起。禁止此选项意味着用户身份永久有效。';
$string['enrolstartdate'] = '开始时间';
$string['enrolstartdate_help'] = '如果启用，用户只能在此日期后自行加入此课程。';
$string['expiredaction'] = '选课到期操作';
$string['expiredaction_help'] = '选择当用户选课截止之后要执行的操作。注意，当课程结束之后，某些用户资料和设置会被清除。';
$string['expiryinactivemessageenrolledbody'] = '嗨{$a->user}，

您在课程{$a->course}的注册将于{$a->timeend}到期，因为您在过去{$a->inactivetime}天内未访问过该课程。

要使您的注册保持有效，请在 {$a->timeend} 之前登录并访问 <a href="{$a->url}">{$a->course}</a>。';
$string['expiryinactivemessageenrolledsubject'] = '您的注册即将到期：{$a->course}';
$string['expirymessageenrolledbody'] = '亲爱的 {$a->user}：

您在 \'{$a->course}\' 课程的选课，即将在{$a->timeend}过期，所以特别通知您。

若需要帮助，请联系 {$a->enroller}。';
$string['expirymessageenrolledsubject'] = '自助选课过期通知';
$string['expirymessageenrollerbody'] = '在\'{$a->course}\' 课程的自助选课将于下{$a->threshold} 过期，受影响的用户有：

{$a->users}

要延长他们的选课，请到{$a->extendurl}';
$string['expirymessageenrollersubject'] = '自助选课过期通知';
$string['expirynotifyall'] = '教师和已选课的用户';
$string['expirynotifyenroller'] = '仅教师';
$string['groupkey'] = '使用分组选课密码';
$string['groupkey_desc'] = '缺省使用分组选课密码。';
$string['groupkey_help'] = '除了将课程访问权限限制为只有知道密钥的人员才能访问之外，使用组注册密钥还意味着用户在注册课程时会自动添加到组中。

注意：必须在自助注册设置中指定课程的注册密钥，并在群组设置中指定群组注册密钥。';
$string['keyholder'] = '你可以从此人取得选课密码：';
$string['longtimenosee'] = '多久不活动就撤销选课';
$string['longtimenosee_help'] = '如果用户很长时间没有访问课程，那么可以自动撤销他们的选课。此参数决定这个时限。';
$string['maxenrolled'] = '最大选课用户数';
$string['maxenrolled_help'] = '指定可以自助选课的最大用户数。0表示无限制。';
$string['maxenrolledreached'] = '已经达到自助选课用户数上限。';
$string['messageprovider:expiry_notification'] = '自助选课过期通知';
$string['newenrols'] = '允许新的自行选课';
$string['newenrols_desc'] = '默认允许用户自助选修新课程';
$string['newenrols_help'] = '这个设置确定用户是否能选择这门课程。';
$string['nopassword'] = '无需选课密钥。';
$string['password'] = '选课密码';
$string['password_help'] = '只有知道选课密码的人才能访问课程。

如果此处留空，那么任何人都可以随意选课。

指定选课密码后，任何想选课的用户都必须输入这个密码。不过，他们只需要输入一次。';
$string['passwordinvalid'] = '选课密码错误，请重试';
$string['passwordinvalidhint'] = '这个选课密码不正确，请再试一次<br />
(提示: 以“{$a}”开头)';
$string['passwordmatchesgroupkey'] = '此注册密钥已用作组注册密钥';
$string['pluginname'] = '自助选课';
$string['pluginname_desc'] = '通过自助选课插件，用户可以自己选择想参加的课程。可以通过选课密码保护课程。选课过程是通过人工选课插件完成得，所以必须在课程中激活这个插件。';
$string['privacy:metadata'] = '自助注册插件不存储任何个人数据。';
$string['requirepassword'] = '必须设选课密码';
$string['requirepassword_desc'] = '新课程必须设选课密码，旧课程不能删除已有的选课密码。';
$string['role'] = '缺省分配的角色';
$string['self:config'] = '配置自助选课实例';
$string['self:enrolself'] = '自行报名参加课程';
$string['self:holdkey'] = '以自助选课密码持有者身份出现';
$string['self:manage'] = '管理已选课用户';
$string['self:unenrol'] = '撤销已选课用户';
$string['self:unenrolself'] = '撤销自己的选课';
$string['sendcoursewelcomemessage'] = '发送课程的欢迎信息';
$string['sendcoursewelcomemessage_help'] = '当用户自行选课时，可能会向他们发送一封欢迎消息电子邮件。如果从课程联系人（默认情况下为教师）发送，并且有多个用户具有此角色，则电子邮件将从要分配该角色的第一个用户发送。';
$string['sendexpirynotificationstask'] = '自主报名发送到期通知任务';
$string['showhint'] = '显示提示';
$string['showhint_desc'] = '显示访客密码的首字母。';
$string['status'] = '保持当前的自助选课';
$string['status_desc'] = '允许用户自己选课';
$string['status_help'] = '如果设置为否，则任何已自行注册课程的现有参与者将不再具有访问权限。';
$string['syncenrolmentstask'] = '同步自主报名任务';
$string['unenrol'] = '撤销选课';
$string['unenrolselfconfirm'] = '您确定要撤销您自己对“{$a}”课程的选课吗？';
$string['unenroluser'] = '您确定要撤销用户“{$a->user}”对“{$a->course}”课程的选课吗？';
$string['unenrolusers'] = '取消选课';
$string['usepasswordpolicy'] = '使用密码策略';
$string['usepasswordpolicy_desc'] = '对选课密码使用标准的密码策略。';
$string['welcometocourse'] = '欢迎加入{$a}课程';
$string['welcometocoursetext'] = '欢迎加入{$a->coursename}课程！

请先编辑您的个人信息页面（如果您还没编辑过的话），这样我们才可以进一步了解您：

{$a->profileurl}';
