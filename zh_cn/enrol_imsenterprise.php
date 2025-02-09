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
 * Strings for component 'enrol_imsenterprise', language 'zh_cn', version '4.4'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = '一旦您保存了您的设置，您可能会想';
$string['allowunenrol'] = '允许 IMS 数据取消注册学生和教师';
$string['allowunenrol_desc'] = '如果允许此项，企业数据里特别指定的选课会被删除。';
$string['basicsettings'] = '基本设置';
$string['categoryidnumber'] = '允许类别ID编号';
$string['categoryidnumber_desc'] = '如果启用，IMS Enterprise 将创建一个带有 ID 号的类别。';
$string['categoryseparator'] = '分类分隔字符';
$string['categoryseparator_desc'] = '启用“允许类别 ID 号”时是必需的。用于分隔类别名称和 ID 号的字符';
$string['coursesettings'] = '课程数据设置';
$string['createnewcategories'] = '如果在Moodle中没找到，就新建一个（隐藏的）课程类别';
$string['createnewcategories_desc'] = '如果 &lt;org&gt;&lt;orgunit&gt; 元素存在于课程的传入数据中，则如果要从头开始创建课程，则其内容将用于指定类别。该插件不会对现有课程重新分类。

如果不存在具有所需名称的类别，则将创建一个隐藏类别。';
$string['createnewcourses'] = '建立一个新的（隐藏的）课程如果没有在Moodle中找';
$string['createnewcourses_desc'] = '如果允许此项，IMS企业级注册插件能建立在IMS数据中而不在Moodle数据库中的所有课程。所有新建的课程初始都是隐藏的。';
$string['createnewusers'] = '为还没有在Moodle中注册的用户建立用户帐号';
$string['createnewusers_desc'] = 'IMS Enterprise 注册数据通常描述一组用户。如果启用，则可以为在 Moodle 数据库中找不到的任何用户创建帐户。

首先通过他们的 ID 号搜索用户，然后通过他们的 Moodle 用户名搜索用户。IMS Enterprise 插件不会导入密码。建议使用身份验证插件对用户进行身份验证。';
$string['cronfrequency'] = '处理频率';
$string['deleteusers'] = '删除IMS数据指定的用户';
$string['deleteusers_desc'] = '如果启用，IMS企业选课数据可以删除用户帐号（当" recstatus" 的值设为3时，表示删除这一帐号）。其实在Moodle中，用户记录并没有真的从 Moodle数据库删除，而是用一个标记来表示已删除。';
$string['disableenrolmentandremoveallroles'] = '暂停注册和删除角色';
$string['disableenrolonly'] = '仅暂停注册';
$string['doitnow'] = '马上进行一次IMS企业导入';
$string['emptyattribute'] = '此处必须留空';
$string['filelockedmail'] = '您在IMS文件基础上用的文本文件登陆({$a}) 不能被程序删除。这通常意味着它的许可发生错误了。请确定许可使Moodle可以删除文件，否则程序可能会重复';
$string['filelockedmailsubject'] = '重大错误：登陆文件';
$string['fixcasepersonalnames'] = '在标题上更改个人姓名';
$string['fixcaseusernames'] = '对低的情况更改个人姓名';
$string['ignore'] = '忽略';
$string['importimsfile'] = '导入IMS企业文件';
$string['imsenterprise:config'] = '配置企业选课实例';
$string['imsenterprisecrontask'] = '选课文件处理';
$string['imsrolesdescription'] = 'IMS计划规范包括8个截然不同的角色类型。请您选择在Moodle中如何分配这些角色，包括应该忽略那些角色。';
$string['location'] = '本地文件';
$string['logtolocation'] = '日志文件输出到本地（空白表示没有日志文件）';
$string['mailadmins'] = 'Email通知管理员';
$string['mailusers'] = 'Email通知用户';
$string['messageprovider:imsenterprise_enrolment'] = 'IMS 企业选课消息';
$string['miscsettings'] = '混杂的';
$string['nestedcategories'] = '允许嵌套类别';
$string['nestedcategories_desc'] = '如果启用，IMS企业版将创建嵌套类别';
$string['noaction'] = '无操作';
$string['pluginname'] = 'IMS企业文件';
$string['pluginname_desc'] = '此方法将会反复检查并且处理您指定路径的特殊格式的文本文件。该文件必须符合IMS企业接口规范，包含个人，组，成员等XML元素。';
$string['privacy:metadata'] = 'IMS 企业版文件注册插件不存储任何个人数据。';
$string['processphoto'] = '添加用户照片数据';
$string['processphotowarning'] = '警告：图象程序好象将要为服务器添加一个重大的任务。如果有大量的学生等待被处理推荐您不要激活这个选项。';
$string['removeenrolmentandallroles'] = '删除注册和角色';
$string['restricttarget'] = '如果后面的对象是列入清单只有程序数据';
$string['restricttarget_desc'] = 'IMS企业数据文件可以供多个目标使用，例如不同的LMSes，不同的学校系统。通过<target> 里的<properties>标签对目标系统命名，可以在企业管理系统文件中指定数据，这些数据供一个或者更多的已命名的目标系统使用。

在很多情况下，您不需要担心这些。您可以不更改默认配置，不论这个目标是否已经指定，MOODLE总是会处理文件，否则，您就在<target>中输入准确的名字。';
$string['roles'] = '角色';
$string['settingfullname'] = 'IMS描述标签。描述课程全名';
$string['settingfullnamedescription'] = '全称是必要的课程字段，你需要在你的IMS企业文件中定义选定的描述标签';
$string['settingshortname'] = 'IMS描述标签。描述课程简称';
$string['settingshortnamedescription'] = '简称是必须的课程字段，你需要在你的IMS企业文件中定义选定的描述标签';
$string['settingsummary'] = 'IMS描述标签，描述课程摘要';
$string['settingsummarydescription'] = '此字段可选。如果你不想填写课程摘要，就选Leave it empty(予以空白)';
$string['sourcedidfallback'] = '如果未找到“userid”字段，请使用“sourcedid”作为用户的 userid';
$string['sourcedidfallback_desc'] = '在IMS数据中，<sourcedid>域代表了源系统中用户的永久ID码。而<userid>域是一个单独的域，它包含用户登录时使用的ID码。虽然在许多情况下这两个码可能是相同的，但是它们并不是一直相同。

有时，一些学生信息系统不能输出<userid>域。在这种情况下，您应启用这一设定来允许将<sourcedid>用作Moodle用户ID。而如果可以输出<userid>域，则禁用该设定。';
$string['truncatecoursecodes'] = '对这个长度截去课程代码';
$string['truncatecoursecodes_desc'] = '在一些情境中，您可能想在处理程序前把课程代码截断到指定的长度，那么请在这个对话框中输入需要截断的字符数，如果不想截断，就不需要在对话框中输入数字。';
$string['unenrolaction'] = '取消注册操作';
$string['unenrolaction_desc'] = '当用户从课程中取消注册时要执行的操作（仅在启用上述取消注册设置时适用）。';
$string['updatecourses'] = '更新课程';
$string['updatecourses_desc'] = '如果启用，IMS企业注册插件可以更新课程的全名和简称（如果 "recstatus "标志被设置为2，表示更新）。';
$string['updateusers'] = '在IMS数据中指定时更新用户帐户';
$string['updateusers_desc'] = '如果启用，IMS企业注册数据可以指定对用户帐户的更改（如果“recstatus”标志设置为2，表示更新）。';
$string['usecapitafix'] = '如果使用 Capita，请勾选此框（因为它们的 XML 格式略有不同）';
$string['usecapitafix_desc'] = '我们发现在Capita编辑的学生数据系统中，XML文件输出有一些小问题。如果您使用此项功能，请激活这个选项；否则，不选择。';
$string['usersettings'] = '用户的数据选项';
$string['zeroisnotruncation'] = '0 预示没有切断';
