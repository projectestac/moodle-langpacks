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
 * Strings for component 'course', language 'zh_cn', version '4.4'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = '活动选择器底部的页脚';
$string['activitychooseractivefooter_desc'] = '活动选择器可以支持向页脚添加项目的插件。';
$string['activitychoosercategory'] = '活动选择器';
$string['activitychooserhidefooter'] = '无页脚';
$string['activitychooserrecommendations'] = '推荐的活动';
$string['activitychoosersettings'] = '活动选择器设置';
$string['activitychoosertabmode'] = '活动选择器标签';
$string['activitychoosertabmode_desc'] = '活动选择器列出了教师要添加到其课程中的活动和资源。要将项目添加到“推荐”选项卡，请转到 <a href=\'../course/recommendations.php\'>推荐的活动</a>。';
$string['activitychoosertabmodefive'] = '已加星标、推荐、全部';
$string['activitychoosertabmodefour'] = '已加星标、推荐、全部、活动、资源';
$string['activitychoosertabmodeone'] = '标星的，全部，活动，资源，推荐的';
$string['activitychoosertabmodesix'] = '已加星标、推荐、活动、资源';
$string['activitychoosertabmodethree'] = '标星的，活动，资源，推荐的';
$string['activitychoosertabmodetwo'] = '标星的，全部，推荐的';
$string['activitydate:closed'] = '已关闭:';
$string['activitydate:closes'] = '关闭:';
$string['activitydate:opened'] = '已打开:';
$string['activitydate:opens'] = '打开:';
$string['aria:coursecategory'] = '课程类别';
$string['aria:courseimage'] = '课程图片';
$string['aria:coursename'] = '课程名称';
$string['aria:courseshortname'] = '课程简称';
$string['aria:defaulttab'] = '默认活动';
$string['aria:favourite'] = '课程已标星';
$string['aria:favouritestab'] = '标星的活动';
$string['aria:modulefavourite'] = '标星{$a}活动';
$string['aria:recommendedtab'] = '推荐的活动';
$string['browsecourseadminindex'] = '使用此索引浏览课程管理。';
$string['browsesettingindex'] = '使用此索引浏览课程管理。';
$string['communicationroomlink'] = '与课程参与者聊天';
$string['completion_automatic:done'] = '完成:';
$string['completion_automatic:failed'] = '失败:';
$string['completion_automatic:todo'] = '要做:';
$string['completion_manual:aria:done'] = '{$a} 被标记为完成. 点击撤销.';
$string['completion_manual:aria:markdone'] = '将 {$a} 标记为完成';
$string['completion_manual:done'] = '完成';
$string['completion_manual:markdone'] = '标记完成';
$string['completion_setby:auto:done'] = '完成: {$a->condition} (set by {$a->setby})';
$string['completion_setby:auto:todo'] = '要做: {$a->condition} (set by {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname}被 {$a->setby} 标记为完成。点击撤销。';
$string['completion_setby:manual:markdone'] = '{$a->activityname}被{$a->setby}标记为未完成。点击以标记为完成。';
$string['completionrequirements'] = '{$a}的完成要求';
$string['courseaccess'] = '课程访问权限';
$string['coursealreadyfinished'] = '课程已经结束';
$string['coursecommunication_desc'] = '新课程的默认通信服务。默认情况下，现有课程不会选择任何提供商。';
$string['coursecontentnotification'] = '发送内容更改通知';
$string['coursecontentnotification_help'] = '勾选此框以通知课程参与者新的或更改的活动或资源。 只有可以访问活动或资源的用户才会收到通知。';
$string['coursecontentnotifnew'] = '{$a->coursename}新内容';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href=""{$a->link}"">{$a->modulename}</a>
是课程中的新内容 <a href=""{$a->courselink}"">{$a->coursename}</a>.
</p><p><a href=""{$a->notificationpreferenceslink}"">更改您的通知偏好</a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} 内容更改';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href=""{$a->link}"">{$a->modulename}</a>
在课程中已更改 <a href=""{$a->courselink}"">{$a->coursename}</a>.</p><p><a href=""{$a->notificationpreferenceslink}"">更改您的通知偏好</a></p>';
$string['coursecount'] = '课程数';
$string['coursenotyetfinished'] = '课程还没有结束';
$string['coursenotyetstarted'] = '课程还没有开始';
$string['courseparticipants'] = '课程参与者';
$string['coursetoolong'] = '课程太长了';
$string['customfield_islocked'] = '锁定的';
$string['customfield_islocked_help'] = '如果字段被锁定，则只有具有更改锁定的自定义字段权限的用户(默认情况下，只有具有管理员角色的用户)才能在课程设置中更改该字段。';
$string['customfield_notvisible'] = '没有人';
$string['customfield_visibility'] = '可见到';
$string['customfield_visibility_help'] = '此设置确定谁可以在课程列表或个人主页的可用自定义字段过滤器中查看自定义字段名称和值。';
$string['customfield_visibletoall'] = '每个人';
$string['customfield_visibletoteachers'] = '教师';
$string['customfieldsettings'] = '普通课程自定义字段设置';
$string['daystakingcourse'] = '上课天数';
$string['defaultsettingscategory'] = '默认设置';
$string['downloadcontent'] = '包含在课程内容下载中';
$string['downloadcontent_help'] = '此活动或资源是否应包含在可供下载的课程内容的zip文件中？ 文件、文件夹、页面和标签可以完全下载。对于其他所有活动和资源，仅名称和描述可以下载。此选项需要在课程设置中启用下载课程内容。

该设置对离线使用的移动应用内容下载没有影响。';
$string['downloadcourseconfirmation'] = '您将要下载课程内容的zip文件（不包括无法下载的项目和任何大于{$a}的文件）。';
$string['downloadcoursecontent'] = '下载课程内容';
$string['downloadcoursecontent_help'] = '此设置确定具有下载课程内容权限的用户，是否可以下载课程内容（默认情况下，具有学生或教师角色的用户）';
$string['enabledownloadcoursecontent'] = '启用课程内容下载';
$string['errorendbeforestart'] = '结束日期({$a})在课程开始日期之前。';
$string['favourite'] = '标星的课程';
$string['gotosection'] = '转到{$a}节';
$string['gradetopassnotset'] = '本课程没有设置及格成绩，可以在课程的成绩项目中设置(成绩册设置)。';
$string['hideendedcoursestask'] = '在结束日期隐藏课程';
$string['informationformodule'] = '关于{$a}活动的信息';
$string['module'] = '活动';
$string['namewithlink'] = '带链接的类别';
$string['noaccesssincestartinfomessage'] = '{$a->userfirstname}您好！<p>{$a-> coursename}中的许多学生从未访问过该课程。</p>';
$string['nocourseactivity'] = '在课程开始和结束之间没有足够的课程活动';
$string['nocourseendtime'] = '课程没有结束时间';
$string['nocoursesections'] = '没有课程小节';
$string['nocoursestudents'] = '没有学生';
$string['norecentaccessesinfomessage'] = '{$a->userfirstname}，您好！<p>  {$a->coursename} 中的许多学生最近没有访问过该课程。</p>';
$string['noteachinginfomessage'] = '{$a->userfirstname}，您好！<p>开始日期在下周的课程被确定为没有老师或学生加入。</p>';
$string['participants:perpage'] = '每页的参与者数量';
$string['participants:perpage_help'] = '在每门课程的参与人页面上显示的用户数量。';
$string['participantsnavigation'] = '参加者三级导航。';
$string['pdfexportfont'] = 'PDF 字体';
$string['pdfexportfont_help'] = '用于生成的 PDF 文件（例如作业提交）的字体';
$string['privacy:completionpath'] = '课程完成情况';
$string['privacy:favouritespath'] = '课程标星的信息';
$string['privacy:metadata:activityfavouritessummary'] = '此课程系统包含用户已为活动选择器中的哪些项目标星的信息。';
$string['privacy:metadata:completionsummary'] = '此课程包含用户的课程进度信息。';
$string['privacy:metadata:favouritessummary'] = '该课程包含与用户标星的课程相关的信息。';
$string['privacy:perpage'] = '每页显示的课程数。';
$string['recommend'] = '推荐';
$string['recommendcheckbox'] = '推荐活动：{$a}';
$string['relativedatessubmissionduedateafter'] = '课程开始后的{$a->datediffstr}';
$string['relativedatessubmissionduedatebefore'] = '课程开始前的{$a->datediffstr}';
$string['searchactivitiesbyname'] = '按名称搜索活动';
$string['searchresults'] = '搜索结果：{$a}';
$string['sectionlink'] = '永久链接';
$string['showstartedcoursestask'] = '在开始日期显示课程';
$string['studentsatriskincourse'] = '{$a}课程中处于风险之中的学生';
$string['studentsatriskinfomessage'] = '{$a->userfirstname}, 您好！<p>已确认{$a->coursename} 课程中的学生处于风险之中。</ p>';
$string['submitsearch'] = '提交搜索';
$string['target:coursecompetencies'] = '学生有可能不能完成分配给课程的能力';
$string['target:coursecompetencies_help'] = '这个目标描述了一个学生是否有不能完成分配给课程的能力的风险。这一目标认为，分配给本课程的所有能力必须在课程结束前完成。';
$string['target:coursecompletion'] = '学生有可能不符合课程完成条件';
$string['target:coursecompletion_help'] = '该目标描述学生是否被认为存在不符合课程完成条件的风险。';
$string['target:coursedropout'] = '学生有辍学的风险';
$string['target:coursedropout_help'] = '这个目标描述了学生是否被认为有辍学的风险。';
$string['target:coursegradetopass'] = '学生有可能不能获得通过该课程的最低成绩';
$string['target:coursegradetopass_help'] = '这个目标描述了学生是否有不能获得通过课程的最低成绩的风险。';
$string['target:noaccesssincecoursestart'] = '还没有访问过此课程的学生';
$string['target:noaccesssincecoursestart_help'] = '这个目标描述了从未访问过他们所加入的课程的学生。';
$string['target:noaccesssincecoursestartinfo'] = '以下学生加入了一门已经开始的课程，但是他们从来没有访问过此课程。';
$string['target:norecentaccesses'] = '最近没有访问过此课程的学生';
$string['target:norecentaccesses_help'] = '此目标标识在设置的分析间隔内(默认为过去一个月)没有访问过所加入课程的学生。';
$string['target:norecentaccessesinfo'] = '以下学生未在设定的分析间隔内(默认为过去一个月)访问过他们所加入的课程。';
$string['target:noteachingactivity'] = '‎课程有无法开始的风险‎';
$string['target:noteachingactivity_help'] = '该目标描述了将在下周开始的课程是否将进行教学活动。';
$string['target:noteachingactivityinfo'] = '‎即将在未来几天开始的以下课程有无法开始的风险，因为它们没有教师或学生加入。';
$string['targetlabelstudentcompetenciesno'] = '有可能完成分配给课程的能力的学生';
$string['targetlabelstudentcompetenciesyes'] = '‎学生有无法完成分配给课程的能力的风险 ‎';
$string['targetlabelstudentcompletionno'] = '‎有可能满足课程完成条件的学生‎';
$string['targetlabelstudentcompletionyes'] = '‎学生有不能满足课程完成条件的风险‎';
$string['targetlabelstudentdropoutno'] = '没有风险';
$string['targetlabelstudentdropoutyes'] = '‎有辍学风险的学生‎';
$string['targetlabelstudentgradetopassno'] = '有可能获得通过此课程的最低成绩的学生。';
$string['targetlabelstudentgradetopassyes'] = '学生有不能获得通过该课程的最低成绩的风险。';
$string['targetlabelteachingno'] = '‎课程有无法开始的风险‎';
$string['targetlabelteachingyes'] = '具有教学权限的用户可以访问该课程';
$string['totalactivities'] = '活动：{$a}';
