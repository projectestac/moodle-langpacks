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
 * Strings for component 'completion', language 'zh_cn', version '4.4'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = '完成的成绩';
$string['achievingpassinggrade'] = '达到及格分数';
$string['activities'] = '活动';
$string['activitiescompleted'] = '活动完成情况';
$string['activitiescompletednote'] = '提醒：只有启用进度跟踪的活动才会出现在上面的列表之中。';
$string['activitieslabel'] = '活动/资源';
$string['activityaggregation'] = '条件满足情形';
$string['activityaggregation_all'] = '所有选中的活动都必须完成。';
$string['activityaggregation_any'] = '至少完成一个选中的活动。';
$string['activitycompletion'] = '完成进度';
$string['activitycompletionupdated'] = '修改已经保存';
$string['activitygradenotrequired'] = '不需要成绩';
$string['activitygradetopassnotset'] = '此活动没有有效的及格分数。它可以在活动设置的成绩部分中设置。';
$string['addconditions'] = '添加条件';
$string['affectedactivities'] = '这些修改将影响以下<b>{$a}</b>活动或资源:';
$string['aggregationmethod'] = '汇总方法';
$string['all'] = '全部';
$string['allconditions'] = '当学生完成以下所有操作时，活动完成：';
$string['any'] = '任意';
$string['approval'] = '认可';
$string['areyousureoverridecompletion'] = '您确定要覆盖此用户的此活动的当前完成状态并将其标记为“{$a}”吗？';
$string['badautocompletion'] = '您必须选择至少一个条件';
$string['badcompletiongradeitemnumber'] = '无法为 <b>{$a}</b> 启用要求成绩，因为未启用 {$a} 评分。';
$string['bulkactivitycompletion'] = '批量编辑活动完成设置';
$string['bulkactivitydetail'] = '选择您希望批量编辑的活动。';
$string['bulkcompletiontracking'] = '完成跟踪';
$string['bulkcompletiontracking_help'] = '<strong>没有:</strong>不标示活动完成状态<br><strong>手工标记:</strong>学生可以手工标记此活动为完成状态<br><strong>有条件:</strong>当条件都满足时标记活动为完成状态';
$string['checkactivity'] = '活动/资源复选框：{$a}';
$string['checkall'] = '勾选或取消勾选所有活动和资源';
$string['checkallsection'] = '勾选或取消勾选所有活动和资源在以下区域: {$a}';
$string['completeactivity'] = '完成活动';
$string['completed'] = '已完成';
$string['completedunlocked'] = '完成选项已解锁';
$string['completedunlockedtext'] = '当您保存此表单时，完成数据将被删除，然后在可能的情况下重新计算。为避免这种情况，您可以在不保存的情况下离开。';
$string['completedwarning'] = '完成选项已锁定';
$string['completedwarningtext'] = '此活动标记为已针对一名或多名学生完成。如果您进行更改，则将删除完成数据，然后在重新计算。手动完成无法重新计算，因此在这种情况下，学生需要再次将其标记为已完成。';
$string['completion'] = '进度跟踪';
$string['completion-alt-auto-enabled'] = '系统根据条件“{$a}”标记此项为完成';
$string['completion-alt-auto-fail'] = '已完成：{$a}（未及格）';
$string['completion-alt-auto-n'] = '未完成：{$a}';
$string['completion-alt-auto-n-override'] = '未完成: {$a->modname} (由 {$a->overrideuser}设置)';
$string['completion-alt-auto-pass'] = '已完成：{$a}（及格）';
$string['completion-alt-auto-y'] = '已完成：{$a}';
$string['completion-alt-auto-y-override'] = '已完成: {$a->modname} (由{$a->overrideuser}设置)';
$string['completion-alt-manual-enabled'] = '学生可以手工标记此项为完成：{$a}';
$string['completion-alt-manual-n'] = '未完成：{$a}。选择以标记为完成。';
$string['completion-alt-manual-n-override'] = '未完成：{$a->modname} (由 {$a->overrideuser}设置)。选择以标记为完成。';
$string['completion-alt-manual-y'] = '已完成：{$a}。选择以标记为未完成。';
$string['completion-alt-manual-y-override'] = '已完成: {$a->modname} (由{$a->overrideuser}设置)。选择以标记为未完成。';
$string['completion-fail'] = '已完成（未及格）';
$string['completion-n'] = '未完成';
$string['completion-n-override'] = '未完成（由 {$a} 设置）';
$string['completion-pass'] = '已完成（及格）';
$string['completion-y'] = '已完成';
$string['completion-y-override'] = '已完成（由 {$a} 设置）';
$string['completion_automatic'] = '添加要求';
$string['completion_help'] = '如果启用，则会根据特定条件手动或自动跟踪活动完成情况。如果需要，可以设置多个条件。如果是这样，只有当所有条件都满足时，活动才会被视为完成。';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = '学生必须手工标记此活动完成';
$string['completion_none'] = '无';
$string['completionactivitydefault'] = '用户活动默认设置';
$string['completionanygrade_desc'] = '任何分数';
$string['completiondefault'] = '完成进度跟踪默认设置';
$string['completiondisabled'] = '禁用，不在活动设置页面显示';
$string['completionduration'] = '环境';
$string['completionenabled'] = '启用，通过进度和活动设置来控制';
$string['completionexpected'] = '在时间线中设置提醒';
$string['completionexpected_help'] = '这使您可以为学生设置提醒，让他们完成此活动。它将在其仪表板的时间线显示为“{$a} 需要操作”。';
$string['completionexpecteddesc'] = '预计在 {$a} 完成';
$string['completionexpectedfor'] = '{$a->instancename} 应该完成';
$string['completionicons'] = '完成状态标记框';
$string['completionicons_help'] = '活动名称旁边的勾号可用于指示活动何时完成。

如果显示一个带有虚线边框的框，当您根据教师设置的条件完成活动时，将自动出现一个勾号。

如果显示一个带有实线边框的框，当您认为已完成活动时，可以单击该框以勾选该框。（如果您改变主意，再次单击它可删除勾号。';
$string['completionmenuitem'] = '进度';
$string['completionnotenabled'] = '进度跟踪功能未启用';
$string['completionnotenabledforcourse'] = '本课程未开启进度跟踪功能';
$string['completionnotenabledforsite'] = '本站未开启进度跟踪功能';
$string['completionondate'] = '日期';
$string['completionondatevalue'] = '课程将被标记为完成的日期';
$string['completionpassgrade'] = '要求通过分数';
$string['completionpassgrade_desc'] = '及格分数';
$string['completionpassgrade_help'] = '如果启用，当学生获得及格分数时，该活动被视为完成。';
$string['completionsettingslocked'] = '完成设置已锁定';
$string['completionupdated'] = '活动 <b>{$a}</b> 的更新完成';
$string['completionusegrade'] = '必须有成绩';
$string['completionusegrade_desc'] = '获得分数';
$string['completionusegrade_help'] = '如果启用，当学生获得成绩时，该活动将被视为已完成。如果设置了活动的通过分数，则通过和未通过图标将显示在活动完成报告中。';
$string['completionview'] = '必须浏览';
$string['completionview_desc'] = '浏览活动';
$string['configcompletiondefault'] = '当建立活动时，完成进度跟踪的默认设置';
$string['configenablecompletion'] = '如果启用，可以设置课程和活动的完成条件。建议设置活动完成条件，以便在报表的课程概览中为用户显示有意义的数据。';
$string['confirmselfcompletion'] = '确认自设完成';
$string['courseaggregation'] = '条件满足情形';
$string['courseaggregation_all'] = '所有选中的课程都必须完成。';
$string['courseaggregation_any'] = '至少完成一个选中的课程。';
$string['coursealreadycompleted'] = '你已经完成了这门课程';
$string['coursecomplete'] = '课程进度';
$string['coursecompleted'] = '已完成课程';
$string['coursecompletedmessage'] = '<p>恭喜！</p><p>您已完成课程<a href="{$a->courselink}">{$a->coursename}</a>。</p>';
$string['coursecompletion'] = '课程进度';
$string['coursecompletioncondition'] = '满足条件: {$a}';
$string['coursecompletionnavigation'] = '课程完成三级导航';
$string['coursecompletionsettings'] = '课程完成设置';
$string['coursegrade'] = '课程成绩';
$string['coursesavailable'] = '可用的课程';
$string['coursesavailableexplaination'] = '注意：课程必须先启用进度跟踪，才能出现在上面列表中。';
$string['criteria'] = '条件';
$string['criteriagroup'] = '条件组';
$string['criteriarequiredall'] = '必须满足以下所有条件';
$string['criteriarequiredany'] = '必须满足以下任一条件';
$string['criteriasummary'] = '{$a->type}: {$a->summary}';
$string['csvdownload'] = '以电子表格格式（UTF-8.csv）下载';
$string['datepassed'] = '通过日期';
$string['days'] = '天数';
$string['daysoftotal'] = '{$a->days}天，总共有 {$a->total}天';
$string['daysuntilcompletion'] = '完成时间';
$string['defaultactivitycompletioncourse'] = '这些是本课程中活动的默认完成条件';
$string['defaultactivitycompletionsite'] = '这些是所有课程中活动的默认完成条件';
$string['defaultcompletion'] = '默认的活动完成设置';
$string['defaultcompletionupdated'] = '修改已经保存';
$string['deletecompletiondata'] = '删除已完成数据';
$string['dependencies'] = '依赖条件';
$string['dependenciescompleted'] = '完成其它课程';
$string['detail_desc:receivegrade'] = '获得等级';
$string['detail_desc:receivepassgrade'] = '获得及格分数';
$string['detail_desc:view'] = '查看';
$string['done'] = '完毕';
$string['editconditions'] = '编辑条件';
$string['editcoursecompletionsettings'] = '编辑课程进度跟踪设置';
$string['emptyconditionsinfo'] = '没有为此活动设置完成条件';
$string['emptyconditionswarning'] = '您必须至少添加一个完成条件';
$string['enablecompletion'] = '启用进度跟踪';
$string['enablecompletion_help'] = '如果启用，可以在活动设置中设置活动完成条件和/或课程完成条件';
$string['enrolmentduration'] = '选课持续时间';
$string['enrolmentdurationlength'] = '用户必须持续选课至少';
$string['err_noactivities'] = '没有任何活动启用了完成信息，所以什么都不能显示。您可以通过修改活动设置来启用完成信息。';
$string['err_nocourses'] = '没有其它课程启用课程进度跟踪功能，所以没有可显示的。您可以在课程设置中启用课程进度跟踪功能。';
$string['err_nograde'] = '此课程还未设置及格分数线。要想启用这种策略，您必须先为此课程创建及格数线。';
$string['err_noroles'] = '课程中没有任何角色有“moodle/course:markcomplete”权限。';
$string['err_nousers'] = '这个课程或组中没有显示完成情况的学生。（只有具有“在完成情况报告中显示”功能的用户才会显示完成情况信息。该功能只允许用于默认角色的学生，因此如果没有学生，你会看到这个信息。）';
$string['err_settingslocked'] = '一个或多个学生已经完成了某条件，所以此设置被锁定。解锁完成条件设置将删除全部已有的用户数据，有可能造成混淆';
$string['err_system'] = '进度跟踪系统内部发生错误。（系统管理员可以激活调试信息来查看更多细节。）';
$string['eventcoursecompleted'] = '课程已完成';
$string['eventcoursecompletionupdated'] = '课程完成已更新';
$string['eventcoursemodulecompletionupdated'] = '课程活动完成情况已更新';
$string['eventdefaultcompletionupdated'] = '课程活动完成的默认值已更新';
$string['excelcsvdownload'] = '用Excel兼容格式（.csv）下载';
$string['failed'] = '失败的';
$string['fraction'] = '分数';
$string['graderequired'] = '需要课程分数';
$string['gradexrequired'] = '至少得 {$a}';
$string['hiddenrules'] = '一些特定于 <b>{$a}</b>的设置被隐藏。查看未选择的其他活动';
$string['incompatibleplugin'] = '此活动不支持默认完成设置。必须为每次使用手动设置完成条件。';
$string['inprogress'] = '处理中';
$string['manual'] = '手工标记';
$string['manualcompletionby'] = '由他人手动完成';
$string['manualcompletionbynote'] = '提醒：只有具备 moodle/course:markcomplete 权限的角色才会出现在此列表中。';
$string['manualselfcompletion'] = '手动自设进度';
$string['manualselfcompletionnote'] = '提醒：如果启用手动自设完成，则应当在课程版块中将“自设完成”版块添加上。';
$string['markcomplete'] = '标为完成';
$string['markedcompleteby'] = '由{$a}标记为完成';
$string['markingyourselfcomplete'] = '标记您自己为完成';
$string['modifybulkactions'] = '修改您希望批量编辑的活动';
$string['moredetails'] = '更多细节';
$string['nocriteriaset'] = '本课程未设置完成条件';
$string['nogradeitem'] = '无法为 <b>{$a}</b> 启用要求评分，因为该活动未评分。';
$string['notcompleted'] = '未完成';
$string['notenroled'] = '您没有加入此课程';
$string['nottracked'] = '在此课程中目前没有您的进度跟踪信息';
$string['notyetstarted'] = '还未开始';
$string['overallaggregation'] = '完成条件';
$string['overallaggregation_all'] = '当所有的条件全都满足视为课程已经完成';
$string['overallaggregation_any'] = '任意条件满足视为课程已完成';
$string['pending'] = '等待中';
$string['periodpostenrolment'] = '选课后';
$string['privacy:metadata:completionstate'] = '如果活动已经完成';
$string['privacy:metadata:course'] = '课程标识符';
$string['privacy:metadata:coursecompletedsummary'] = '存储有关已完成课程标准的用户的信息';
$string['privacy:metadata:coursemoduleid'] = '活动标识';
$string['privacy:metadata:coursemodulesummary'] = '存储用户的活动完成数据';
$string['privacy:metadata:coursesummary'] = '存储用户的课程完成数据。';
$string['privacy:metadata:gradefinal'] = '完成课程获得的最终成绩';
$string['privacy:metadata:overrideby'] = '覆盖活动完成人的用户ID';
$string['privacy:metadata:reaggregate'] = '如果课程完成情况重新汇总。';
$string['privacy:metadata:timecompleted'] = '课程完成的时间。';
$string['privacy:metadata:timecreated'] = '创建活动完成的时间';
$string['privacy:metadata:timeenrolled'] = '用户注册课程的时间';
$string['privacy:metadata:timemodified'] = '修改活动完成的时间';
$string['privacy:metadata:timestarted'] = '课程开始的时间。';
$string['privacy:metadata:unenroled'] = '如果用户已从课程中取消注册';
$string['privacy:metadata:userid'] = '拥有课程和活动完成数据的人的用户 ID';
$string['privacy:metadata:viewed'] = '如果活动被查看';
$string['progress'] = '学生进度';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = '进度：{$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = '确认先修课程';
$string['remainingenroledfortime'] = '保持选课达到规定时间长度';
$string['remainingenroleduntildate'] = '在指定日期前保持选课';
$string['reportpage'] = '显示从{$a->from}到{$a->to}的用户（共{$a->total}人）。';
$string['requiredcriteria'] = '必要条件';
$string['resetactivities'] = '清除所有勾选的活动和资源';
$string['restoringcompletiondata'] = '写入进度数据';
$string['roleaggregation'] = '条件满足情形';
$string['roleaggregation_all'] = '所有选中的角色标记才算条件符合';
$string['roleaggregation_any'] = '任一选中的角色标记就算条件符合';
$string['roleidnotfound'] = '角色ID{$a}未发现';
$string['saved'] = '保存';
$string['seedetails'] = '查看细节';
$string['select'] = '选择';
$string['self'] = '自己';
$string['selfcompletion'] = '自设完成';
$string['showcompletionconditions'] = '显示活动完成条件';
$string['showcompletionconditions_help'] = '在课程页面上显示活动完成条件';
$string['showinguser'] = '显示用户';
$string['studentsmust'] = '学生必须';
$string['timecompleted'] = '完成时间';
$string['todo'] = '待办事项';
$string['unenrolingfromcourse'] = '退出该选课';
$string['unenrolment'] = '注销选课';
$string['unit'] = '单元';
$string['unlockcompletion'] = '解锁完成设置';
$string['unlockcompletiondelete'] = '解锁完成设置并删除用户完成数据';
$string['updateactivities'] = '更新已检查活动的完成状态';
$string['usealternateselector'] = '使用替代的课程选择器';
$string['usernotenroled'] = '用户没有加入此课程';
$string['viewcoursereport'] = '查看课程报表';
$string['viewingactivity'] = '查看 {$a}';
$string['withconditions'] = '有条件';
$string['writingcompletiondata'] = '写入进度数据';
$string['xdays'] = '{$a}天';
$string['youmust'] = '你必须';
