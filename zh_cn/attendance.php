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
 * Strings for component 'attendance', language 'zh_cn', version '4.1'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'A';
$string['Afull'] = '旷课';
$string['Eacronym'] = 'E';
$string['Efull'] = '请假';
$string['Lacronym'] = 'L';
$string['Lfull'] = '迟到';
$string['Pacronym'] = 'P';
$string['Pfull'] = '准时';
$string['absenteereport'] = '考勤报告';
$string['acronym'] = '首字母缩写';
$string['add'] = '增加';
$string['addedrecip'] = '添加了 {$a} 个新收件人';
$string['addedrecips'] = '添加了 {$a} 个新收件人';
$string['addmultiplesessions'] = '多个上课时间';
$string['addsession'] = '增加上课时间';
$string['adduser'] = '增加用户';
$string['addwarning'] = '增加警告';
$string['all'] = '全部';
$string['allcourses'] = '所有课程';
$string['allpast'] = '过去全部';
$string['allsessions'] = '所有上课时间';
$string['allsessionstotals'] = '选定的上课时间的总计';
$string['attendance:addinstance'] = '新增一项考勤活动';
$string['attendance:canbelisted'] = '出现在花名册中';
$string['attendance:changeattendances'] = '修改考勤';
$string['attendance:changepreferences'] = '更改偏好设置';
$string['attendance:export'] = '导出报告';
$string['attendance:manageattendances'] = '管理考勤';
$string['attendance:managetemporaryusers'] = '管理临时学生';
$string['attendance:takeattendances'] = '记录考勤';
$string['attendance:view'] = '查看考勤';
$string['attendance:viewreports'] = '查看报告';
$string['attendance:viewsummaryreports'] = '查看课程摘要报告';
$string['attendance:warningemails'] = '可以订阅旷课用户的电子邮件';
$string['attendance_already_submitted'] = '你的考勤已被设置好了。';
$string['attendance_no_status'] = '没有可用的有效状态-您可能太晚了，无法记录出勤情况。';
$string['attendancedata'] = '考勤数据';
$string['attendancefile'] = '考勤文件（csv格式）';
$string['attendancefile_help'] = '该文件必须是一个CSV文件，带有标题行和用于识别用户的字段，以及记录的出勤时间，例如（电子邮件，扫描时间）或（用户名，时间）';
$string['attendancegrade'] = '考勤成绩';
$string['attendancenotset'] = '你必须设置你的考勤';
$string['attendancenotstarted'] = '课程还未开始考勤';
$string['attendancepercent'] = '考勤比率';
$string['attendancereport'] = '出席';
$string['attendanceslogged'] = '考勤人数记录';
$string['attendancestaken'] = '考勤人数';
$string['attendancesuccess'] = '已成功记录考勤状况';
$string['attendanceupdated'] = '考勤状况已更新';
$string['attforblockdirstillexists'] = '旧的mod/attforblock目录 － 仍然出现 －您必须在服务器中删除此目录后才可以进行更新操作。';
$string['attrecords'] = '考勤记录';
$string['autoassignstatus'] = '自动选择现有的最高状态';
$string['autoassignstatus_help'] = '如果选中此选项，学生将自动获得最高可用分数。';
$string['automark'] = '自动记分';
$string['automark_help'] = '允许自动完成打分。
如果选择“是”，系统将会自动根据学生第一次访问该课程的情况进行打分。
如果选择“在课时结束时设为未打分”，所有未签到的学生将被设置为未打分的状态。';
$string['automarkall'] = '是的';
$string['automarkclose'] = '在课时快结束时设为未记分。';
$string['below'] = '低于 {$a}%';
$string['calclose'] = '关闭';
$string['calendarevent'] = '为上课时间创建日历事件';
$string['caleventcreated'] = '成功创建课程的日程表事件';
$string['caleventdeleted'] = '成功删除';
$string['calmonths'] = '一月，二月，三月，四月，五月，六月，七月，八月，九月，十月，十一月，十二月';
$string['calshow'] = '选择日期';
$string['calweekdays'] = '日，一，二，三，四，五，六';
$string['cannottakeforgroup'] = '你不能参加"{$a}"组课程';
$string['categoryreport'] = '课程分类报表';
$string['changeattendance'] = '修改考勤';
$string['changeduration'] = '修改持续时间';
$string['changesession'] = '更改上课时间';
$string['checkweekdays'] = '在选定的上课日期范围内选择工作日。';
$string['column'] = '列';
$string['columns'] = '列';
$string['commonsession'] = '所有学生';
$string['commonsessions'] = '所有学生';
$string['confirmdeletehiddensessions'] = '你确定要删除安排在此课程开始日期({$a->date})之前的 {$a->count}个课时吗？';
$string['confirmdeleteuser'] = '你确定要删除用户 \'{$a->fullname}\' ({$a->email}) 吗？<br/>他的全部考勤记录将被永久删除掉。';
$string['copyfrom'] = '复制考勤数据';
$string['countofselected'] = '选择的个数';
$string['createmultiplesessions'] = '建立多个上课时间';
$string['createmultiplesessions_help'] = '您可使用此项功能来一步建立多个上课时间。
该多个上课时间开始日期依据基础课时的日期，并且持续到“上课结束日期”。

* <strong>上课日</strong>: 选择上课日(例如星期二/星期三/星期五等等)；
* <strong>频率</strong>: 在此设定频率。如每周上课则选1，隔周上课则选2，每三周一次课则选3，等等；
* <strong>上课结束日期</strong>: 选择上课结束日期 (您想点名的最后一天)。';
$string['createonesession'] = '为此课程新建一个上课时间';
$string['days'] = '日';
$string['defaultdisplaymode'] = '默认显示模式';
$string['defaults'] = '默认';
$string['defaultwarnings'] = '默认警告设置';
$string['defaultwarningsettings'] = '默认警告设置';
$string['delete'] = '删除';
$string['deletedgroup'] = '有关此时间段的组已被删除';
$string['deletehiddensessions'] = '删除所有隐藏课时';
$string['deletelogs'] = '删除出席数据';
$string['deleteselected'] = '删除所选';
$string['deletesession'] = '删除上课时间';
$string['deletesessions'] = '删除所有上课时间';
$string['deleteuser'] = '删除用户';
$string['deletingsession'] = '删除此课程的上课时间';
$string['deletingstatus'] = '删除此课程的状况';
$string['description'] = '描述';
$string['display'] = '显示';
$string['displaymode'] = '显示模式';
$string['donotusepaging'] = '不使用分页';
$string['downloadexcel'] = 'Excel表格格式下载';
$string['downloadooo'] = 'OpenOffice格式下载';
$string['downloadtext'] = '文本格式下载';
$string['duration'] = '持续时间';
$string['editsession'] = '编辑上课时间';
$string['edituser'] = '编辑用户';
$string['emptyacronym'] = '缩写不允许留空，状况记录未更新';
$string['emptydescription'] = '描述不允许留空，状况记录未更新';
$string['endofperiod'] = '时段的结束点';
$string['endtime'] = '下课时间';
$string['enrolmentend'] = '用户注册结束{$a}';
$string['enrolmentstart'] = '用户注册开始{$a}';
$string['enrolmentsuspended'] = '注册暂停';
$string['errorgroupsnotselected'] = '选择出一个或多个组';
$string['errorinaddingsession'] = '增加上课时间有误';
$string['erroringeneratingsessions'] = '产生上课时间有误';
$string['eventdurationupdated'] = '上课时间的持续时间已更新';
$string['eventreportviewed'] = '考勤报告已查看';
$string['eventsessionadded'] = '上课时间已添加';
$string['eventsessiondeleted'] = '上课时间已删除';
$string['eventsessionupdated'] = '上课时间已更新';
$string['eventstatusadded'] = '已新增状况';
$string['eventstatusupdated'] = '已更新状况';
$string['eventtaken'] = '已点名';
$string['eventtakenbystudent'] = '由学生点名';
$string['export'] = '导出';
$string['extrarestrictions'] = '额外的约束';
$string['from'] = '从：';
$string['gradebookexplanation'] = '成绩单上的分数';
$string['gradebookexplanation_help'] = '考勤模块表示您至今日的考勤成绩，依您所获得的点数及您理当获得的点数决定。此成绩不含以后的上课时间。成绩单上您的出席成绩则是依您考勤（包含以后上课时间）及整个课程您可能获得的点数的百分比计算。因此，出现在考勤模块及成绩单上的考勤成绩可能点数不同，但百分比是相同的。

例如，您已由10点中获得8点（80%出席率）而整个课程的考勤值是50点，则考勤模块会显示8/10而成绩单则显示40/50。您虽未取得40点但是40等于您目前考勤率即80%。您在考勤模块取得的点数绝不会变少，因为它只算到目前的考勤日期。但是您成绩单上的点数基于您未来的考勤有可能增减，因为它是计算整个课程的。';
$string['gridcolumns'] = '网格列';
$string['groupsession'] = '学生所在的组';
$string['hiddensessions'] = '隐藏课时';
$string['hiddensessions_help'] = '如果课时早于课程开始日期，课时则会看不见。

您可以利用此功能来隐藏早先的课时，而不是删除它们。请记住只有看得见的课时才会出现在成绩册中。';
$string['hiddensessionsdeleted'] = '所有隐藏课时已删除';
$string['hidensessiondetails'] = '隐藏上课时间细节';
$string['identifyby'] = '识别学生用';
$string['includeabsentee'] = '在计算旷课报告的时候包含本课时';
$string['includeabsentee_help'] = '如果勾选，此上课时间将被包含在旷课报告进行计算。';
$string['includeall'] = '选择全部上课时间';
$string['includedescription'] = '包括上课时间的描述';
$string['includenottaken'] = '包含未点名的上课时间';
$string['includeqrcode'] = '包括二维码';
$string['includeremarks'] = '包含备注';
$string['indetail'] = '详细……';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = '你必须选择一个动作';
$string['invalidsessionenddate'] = '上课结束日期不能早于开始日期';
$string['invalidsessionendtime'] = '结束时间必须大于开始时间';
$string['jumpto'] = '跳到';
$string['maxpossible'] = '最大可能性';
$string['maxpossiblepercentage'] = '最大可能百分比';
$string['maxpossiblepoints'] = '最大可能点数';
$string['mergeuser'] = '合并用户';
$string['modulename'] = '考勤';
$string['modulename_help'] = '签到活动用于教师上课点名，并让学生查看自己的签到记录。

教师可建立多重课时，并标记"准时"，"旷课"，"迟到"，"请假"，或修改以符合自己的需求。

您也可以导出个别学生或全班学生的报告。';
$string['modulenameplural'] = '考勤';
$string['months'] = '月';
$string['moreattendance'] = '此页点名已完成';
$string['moveleft'] = '向左移动';
$string['moveright'] = '向右移动';
$string['mustselectusers'] = '必须选择要导出的用户';
$string['newdate'] = '新日期';
$string['newduration'] = '新的持续时间';
$string['newstatusset'] = '新的状态集';
$string['noattendanceusers'] = '无法导出任何数据，因为该课程尚未有学生选学。';
$string['noattforuser'] = '此用户没有考勤记录';
$string['noautomark'] = '禁用';
$string['nodescription'] = '正常班级课时';
$string['nogroups'] = '此活动已设置为使用小组，但课程中不存在任何小组。';
$string['noguest'] = '访客不能看考勤状况';
$string['noofdaysabsent'] = '旷课天数';
$string['noofdaysexcused'] = '请假天数';
$string['noofdayslate'] = '迟到天数';
$string['noofdayspresent'] = '准时天数';
$string['nosessiondayselected'] = '未选出上课日';
$string['nosessionexists'] = '此课程没有课时';
$string['nosessionsselected'] = '尚未选取课时';
$string['notfound'] = '此课程找不到考勤记录！';
$string['notmember'] = 'not&nbsp;成员';
$string['noupgradefromthisversion'] = '考勤模块不能在您attforblock的版本上升级。安装新的考勤模块前请删除attforblock或更新到最新版本。';
$string['olddate'] = '旧日期';
$string['onactivitycompletion'] = '在活动完成时';
$string['onlyselectedusers'] = '导出特定用户';
$string['overallsessions'] = '遍及所有课程';
$string['oversessionstaken'] = '已完成上课时间';
$string['pageof'] = '页码： {$a->page} / {$a->numpages}';
$string['participant'] = '参加';
$string['passwordgrp'] = '学生密码';
$string['passwordgrp_help'] = '如果设置此项， 学生在设置他们自己在该课时的签到状态之前，将被要求输入密码 。如果为空，则不需要密码。';
$string['percentage'] = '百分比';
$string['percentageallsessions'] = '占所有课时的百分比';
$string['percentagesessionscompleted'] = '已点名课时的百分比';
$string['pluginadministration'] = '考勤管理';
$string['pluginname'] = '考勤';
$string['points'] = '分值';
$string['pointsallsessions'] = '所有课时的分值';
$string['pointssessionscompleted'] = '已点名课时的百分比';
$string['preferences_desc'] = '对状态设置的更改会影响现有签到课时，并影响打分。';
$string['preventsharedip'] = '防止学生共享IP地址';
$string['priorto'] = '由于课时早于课程开始日期({$a}) ，所以在此日期前的新课时将会隐藏（不能存取）。您可以随时更改课程的开始日期（查看课程设置）以存取较早的课时段。<br><br>请变更课时日期或点击「新增课时」按钮确认？';
$string['randompassword'] = '随机密码';
$string['remark'] = '{$a}的备注';
$string['remarks'] = '备注';
$string['repeatasfollows'] = '重复以上课时';
$string['repeatevery'] = '重复在每个';
$string['repeaton'] = '重复在';
$string['repeatuntil'] = '重复直到';
$string['report'] = '报告';
$string['required'] = '必须*';
$string['requiredentries'] = '临时记录覆盖参加者的出席记录';
$string['requiredentry'] = '临时用户合并帮助指南';
$string['requiredentry_help'] = '<p align="center"><b>考勤记录</b></p>
<p align="left"><strong>合并用户</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Moodle 用户</th>
<th>临时用户</th>
<th>动作</th>
</tr>
<tr>
<td>考勤数据</td>
<td>考勤数据</td>
<td>临时用户将覆盖Moodle用户</td>
</tr>
<tr>
<td>没有考勤数据</td>
<td>考勤数据</td>
<td>临时用户的考勤记录将传送到Moodle用户</td>
</tr>
<tr>
<td>考勤数据</td>
<td>没有考勤数据</td>
<td>临时用户将会被删除</td>
</tr>
<tr>
<td>没有考勤数据</td>
<td>没有考勤数据</td>
<td>临时用户将会被删除</td>
</tr>
</table>

</p>
<p align="left"><strong>临时用户将会在合并后删除</strong></p>';
$string['requiresubnet'] = '需要网络地址';
$string['resetdescription'] = '请记住，删除出席数据将会从数据库中清除掉所有信息。你可以利用更改该课程的开始日期来隐藏先前的上课时间的数据。';
$string['resetstatuses'] = '重置状态到默认';
$string['restoredefaults'] = '恢复为默认';
$string['resultsperpage'] = '每页结果';
$string['resultsperpage_desc'] = '单一页面可以显示的学生数';
$string['rotateqrcode'] = '旋转二维码';
$string['save'] = '保存考勤记录';
$string['session'] = '上课时间';
$string['session_help'] = '上课时间';
$string['sessionadded'] = '成功添加上课时间';
$string['sessionalreadyexists'] = '此日期已存在课时';
$string['sessiondate'] = '日期';
$string['sessiondays'] = '上课天数';
$string['sessiondeleted'] = '成功删除课时';
$string['sessionexist'] = '未添加课时（已经存在）';
$string['sessiongenerated'] = '一个课时被成功创建';
$string['sessions'] = '上课时间';
$string['sessionscompleted'] = '已签到课时';
$string['sessionsgenerated'] = '已成功创建{$a}个上课时间';
$string['sessionsids'] = '课时的ID：';
$string['sessionsnotfound'] = '在互选定期间内没有上课时段';
$string['sessionstartdate'] = '课时开始时间';
$string['sessionstotal'] = '课时总数';
$string['sessiontype'] = '类型';
$string['sessiontype_help'] = '有两种课时添加方式：一般课时（所有学生）、小组课时。是否能添加不同形式取决于活动小组模式。

* 小组模式之无小组，您只能增加一般课时（所有学生）；
* 小组模式之分隔小组，您只可增加小组课时；
* 小组模式之可视小组，您可增加一般及小组课时。';
$string['sessiontypeshort'] = '类型';
$string['sessionupdated'] = '成功更新课时';
$string['set_by_student'] = '自行登记';
$string['setallstatuses'] = '设置状态';
$string['setallstatusesto'] = '设置状态为«{$a}»';
$string['setperiod'] = '释放IP的指定时间（分钟）';
$string['settings'] = '设置';
$string['setunmarked'] = '未签到将自动设置为';
$string['showdefaults'] = '显示默认值';
$string['showduration'] = '显示期间';
$string['showsessiondetails'] = '展示课程详细信息';
$string['sortedgrid'] = '分类网格';
$string['sortedlist'] = '分类列表';
$string['startofperiod'] = '时段的开始点';
$string['status'] = '状态';
$string['statusdeleted'] = '状态已删除';
$string['statuses'] = '状态';
$string['statusset'] = '状态{$a}';
$string['statussetsettings'] = '状态设置';
$string['strftimedm'] = '%b %d';
$string['strftimedmy'] = '%d %b %Y';
$string['strftimedmyhm'] = '%d %b %Y %I.%M%p';
$string['strftimedmyw'] = '<nobr>%Y-%m-%d %a</nobr>';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = '学生ID';
$string['studentmarking'] = '学生登记';
$string['studentpassword'] = '学生密码';
$string['studentscanmark'] = '允许学生登记自己的考勤情况';
$string['studentscanmark_help'] = '如果勾选，学生将可以自己更改他们在该课时内的考勤状态。';
$string['submitattendance'] = '提交考勤';
$string['submitpassword'] = '提交密码';
$string['subnet'] = '子网';
$string['subnetactivitylevel'] = '允许在活动级别配置子网';
$string['summary'] = '摘要';
$string['tablerenamefailed'] = '将旧的attforblock表重命名为考勤失败';
$string['tactions'] = '动作';
$string['takeattendance'] = '点名';
$string['takensessions'] = '已签到课时';
$string['tcreated'] = '建立';
$string['tempaddform'] = '新增临时用户';
$string['tempexists'] = '这儿已经有一个临时用户登记这个电子邮件地址';
$string['temptable'] = '临时用户清单';
$string['tempuser'] = '临时用户';
$string['tempusermerge'] = '合并临时用户';
$string['tempusers'] = '临时用户';
$string['tempusersedit'] = '编辑临时用户';
$string['tempuserslist'] = '临时用户';
$string['thiscourse'] = '此课程';
$string['time'] = '时间';
$string['timeahead'] = '无法建立超过一年的多个上课时间，请调整开始及结束日期。';
$string['to'] = '至：';
$string['tuseremail'] = '电子邮件';
$string['tusername'] = '全名';
$string['ungraded'] = '没有分等级的上课时间';
$string['unknowngroup'] = '未知小组';
$string['update'] = '更新';
$string['usedefaultsubnet'] = '使用默认值';
$string['userexists'] = '这儿已经有一真实用户使用这个电子邮件地址。';
$string['users'] = '要导出的用户';
$string['usestatusset'] = '状态设置';
$string['variable'] = '变量';
$string['variablesupdated'] = '成功更新变量组';
$string['versionforprinting'] = '打印版本';
$string['viewmode'] = '查看模式';
$string['warningdesc'] = '该警告将被自动添加到所有新的签到活动中。如果在完全相同的时间内触发多个警告，则只发送具有较低警告阈值的警告。';
$string['warningdesc_course'] = '这里设置的警告阈值会影响到考勤报告，并允许学生和第三方得到通知。如果在完全相同的时间内触发多个警告，则只发送具有较低警告阈值的警告。';
$string['warnings'] = '警告设置';
$string['warningthreshold'] = '警告阈值';
$string['week'] = '周';
$string['weeks'] = '周';
$string['youcantdo'] = '什么都不能做';
