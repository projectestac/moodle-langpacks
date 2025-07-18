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
 * Strings for component 'feedback', language 'zh_cn', version '4.4'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = '添加问题';
$string['add_pagebreak'] = '添加一个分页符';
$string['adjustment'] = '调整';
$string['after_submit'] = '在提交后';
$string['allowfullanonymous'] = '允许全匿名';
$string['analysis'] = '分析';
$string['anonymous'] = '匿名';
$string['anonymous_edit'] = '记录用户姓名';
$string['anonymous_entries'] = '匿名条目 ({$a})';
$string['anonymous_user'] = '匿名用户';
$string['answerquestions'] = '回答问题';
$string['append_new_items'] = '追加新题';
$string['autonumbering'] = '自动编号问题';
$string['autonumbering_help'] = '允许或禁止对每个问题自动编号';
$string['average'] = '平均值';
$string['bold'] = '加粗';
$string['calendarend'] = '{$a}关闭';
$string['calendarstart'] = '{$a}打开';
$string['cannotaccess'] = '您只能从课程中访问此反馈';
$string['cannotcreatepagebreak'] = '不能在开头添加分页符，并且只能在末尾添加一个分页符。';
$string['cannotsavetempl'] = '不允许保存模板';
$string['captcha'] = '验证码';
$string['captchanotset'] = '验证码未设置。';
$string['check'] = '多选项 - 多选择';
$string['check_values'] = '可能的回答';
$string['checkbox'] = '多选项 - 允许多选（复选框）';
$string['choosefile'] = '选择一个文件';
$string['chosen_feedback_response'] = '选择反馈答复';
$string['closebeforeopen'] = '您在开始日期之前指定了结束日期。';
$string['complete_the_form'] = '回答此问题';
$string['completed'] = '已完成';
$string['completed_feedbacks'] = '提交的回答';
$string['completedon'] = '于{$a}完成';
$string['completiondetail:submit'] = '提交反馈';
$string['completionsubmit'] = '提交反馈';
$string['configallowfullanonymous'] = '如果设置为 \'yes\'，则用户可以在站点主页上完成反馈活动，而无需登录。';
$string['confirmdeleteentry'] = '您确定要删除此项吗？';
$string['confirmdeleteitem'] = '您确定要删除此问题吗？';
$string['confirmdeletetemplate'] = '您确定要删除此模板吗？';
$string['confirmusetemplate'] = '您确定要使用此模板吗？';
$string['continue_the_form'] = '继续回答问题';
$string['count_of_nums'] = '数字个数';
$string['courseid'] = '课程 ID';
$string['creating_templates'] = '将这些问题存为一个新模板';
$string['delete_entry'] = '删除条目';
$string['delete_item'] = '删除此题';
$string['delete_old_items'] = '删除旧题';
$string['delete_pagebreak'] = '删除分页符';
$string['delete_template'] = '删除模板';
$string['delete_templates'] = '删除模板...';
$string['depending'] = '依赖';
$string['depending_help'] = '依赖性使问题的显示取决于对其它问题的回答。<br />
<strong>这里有一个使用例子：</strong>
<br />
<ul>
<li>首先创建一条其它问题要依赖的题。</li>
<li>然后添加一个分页符。</li>
<li>接着添加一条依赖于该题的题。在“依赖的问题”列表中选择那道题，并将需要的值填入“依赖值”文本框中。</li>
</ul>
<strong>结构应该像下面这样：</strong>
<ol>
<li>问题：您有汽车吗？回答：有/没有</li>
<li>分页符</li>
<li>问题：您的车是什么颜色的？<br />
（此题当问题1选择“有”时才显示）</li>
<li>问题：您为什么没有车？<br />
（此题当问题1选择“没有”时才显示）</li>
<li> ……其它问题</li>
</ol>
就是这样。祝您使用愉快！';
$string['dependitem'] = '依赖问题';
$string['dependvalue'] = '依赖值';
$string['description'] = '描述';
$string['do_not_analyse_empty_submits'] = '在分析中省略空提交';
$string['downloadresponseas'] = '下载所有回复，如下所示：';
$string['drop_feedback'] = '从此课程移除';
$string['dropdown'] = '多项选择 - 允许单选（下拉菜单）';
$string['dropdown_values'] = '答卷';
$string['dropdownlist'] = '多项选择 - 单选（下拉菜单）';
$string['dropdownrated'] = '下拉菜单（可评分）';
$string['edit_item'] = '编辑问题';
$string['edit_items'] = '编辑问题';
$string['email_notification'] = '启用提交通知';
$string['email_notification_help'] = '如果启用，教师将收到反馈提交的通知。';
$string['emailteachermail'] = '{$a->username}已经填写反馈：“{$a->feedback}”

您可以到这里查看结果：

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} 已完成反馈 \'<i>{$a->feedback}\'</i>。</p>
<p>它在网站上<a href="{$a->url}">可用</a>。</p>';
$string['entries_saved'] = '您的回答已被保存。谢谢。';
$string['eventresponsedeleted'] = '删除响应';
$string['eventresponsesubmitted'] = '提交的答复';
$string['export_questions'] = '导出问题';
$string['export_to_excel'] = '导出到Excel';
$string['feedback:addinstance'] = '添加新反馈';
$string['feedback:complete'] = '填写反馈';
$string['feedback:createprivatetemplate'] = '建立私有模板';
$string['feedback:createpublictemplate'] = '建立公共模板';
$string['feedback:deletesubmissions'] = '删除已填完的问卷';
$string['feedback:deletetemplate'] = '删除模板';
$string['feedback:edititems'] = '编辑项目';
$string['feedback:mapcourse'] = '向全局反馈映射课程';
$string['feedback:receivemail'] = '接收email通知';
$string['feedback:view'] = '查看反馈活动';
$string['feedback:viewanalysepage'] = '提交后查看分析页面';
$string['feedback:viewreports'] = '查看报告';
$string['feedback_is_not_for_anonymous'] = '此反馈不能匿名';
$string['feedback_is_not_open'] = '此调查反馈未开启';
$string['feedbackclose'] = '允许回答到';
$string['feedbackcompleted'] = '{$a->username}已完成{$a->feedbackname}';
$string['feedbackopen'] = '允许回答从';
$string['feedbackupdated'] = '反馈已更新。';
$string['file'] = '文件';
$string['filter_by_course'] = '按课程筛选';
$string['handling_error'] = '反馈模块动作处理出错';
$string['hide_no_select_option'] = '不显示“未选择”选项';
$string['horizontal'] = '水平';
$string['import_questions'] = '导入问题';
$string['import_successfully'] = '导入成功';
$string['importfromthisfile'] = '从此文件导入';
$string['includeuserinrecipientslist'] = '在收件人列表中包括{$a}';
$string['indicator:cognitivedepth'] = '反馈活动认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在反馈活动中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = '反馈认知';
$string['indicator:cognitivedepthdef_help'] = '在此分析间隔期间，参与者已达到反馈活动提供的认知参与百分比（级别=无查看、查看、提交）';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = '反馈活动社会宽度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在反馈活动中所达到的社会宽度。';
$string['indicator:socialbreadthdef'] = '社会反馈';
$string['indicator:socialbreadthdef_help'] = '在此分析间隔期间，参与者已达到反馈活动提供的社会参与度的百分比（级别=不参与、参与者单独参与、参与者与其他人一起参与）';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = '信息';
$string['infotype'] = '信息类型';
$string['insufficient_responses'] = '问卷数不够';
$string['insufficient_responses_for_this_group'] = '此组给出的答复数量不足';
$string['insufficient_responses_help'] = '要使反馈是匿名的，必须至少有 2 个回复。';
$string['item_label'] = '标签';
$string['item_name'] = '问题';
$string['label'] = '文本和媒体区域';
$string['labelcontents'] = '目录';
$string['mapcourse'] = '映射反馈到课程';
$string['mapcourse_help'] = '默认情况下，在您的主页创建的反馈表全站可用，并且会在所有使用了反馈版块的课程中出现。你可以把反馈表设成粘性版块来强制它出现，或者通过将它映射到指定的课程来限制此反馈表出现的课程。';
$string['mapcourseinfo'] = '这是一个全站反馈，所有使用了反馈版块的课程都可以使用它。你也可以通过映射来限制此反馈出现在哪些课程中。搜索课程然后将它映射到此反馈即可。';
$string['mapcoursenone'] = '没有课程被映射。反馈对所有课程可用。';
$string['mapcourses'] = '映射调查反馈到课程';
$string['mappedcourses'] = '已映射课程';
$string['mappingchanged'] = '课程地图已更改';
$string['maximal'] = '最大值';
$string['messageprovider:message'] = '反馈提醒';
$string['messageprovider:submission'] = '反馈通知';
$string['minimal'] = '最小值';
$string['mode'] = '模式';
$string['modulename'] = '反馈';
$string['modulename_help'] = '反馈活动使教师能够创建自定义调查，以使用各种问题类型（包括多项选择、是/否或文本输入）收集参与者的反馈。

如果需要，回复可以是匿名的，结果可以向所有参与者展示或仅限于教师。网站首页上的反馈活动也可以由未登录的用户完成。

可以使用反馈活动：

* 用于课程评估，帮助改进内容，供以后的参与者使用
* 使参与者能够注册课程模块、活动等。
* 用于课程选择、学校政策等的客人调查。
* 对于学生可以匿名报告事件的反欺凌调查';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = '调查反馈';
$string['move_item'] = '移动此题';
$string['multichoice'] = '选择题';
$string['multichoice_values'] = '选项';
$string['multichoiceoption'] = '<span class=“weight”>（{$a->weight}）</span>{$a->name}';
$string['multichoicerated'] = '选择题（可评分）';
$string['multichoicetype'] = '选择题';
$string['multiplesubmit'] = '允许多次提交';
$string['multiplesubmit_help'] = '如果设置为“是”：

* 对于匿名调查：参与者可以多次提交回复，所有回复都将被记录下来。
* 对于非匿名调查：参与者可以多次提交回复，但只有他们的最新回复会被记录下来。';
$string['name'] = '名称';
$string['name_required'] = '必须输入名称';
$string['nameandlabelformat'] = '（{$a->label}）{$a->name}';
$string['next_page'] = '下一页';
$string['no_handler'] = '没有动作处理器给';
$string['no_itemlabel'] = '无标签';
$string['no_itemname'] = '无项目名';
$string['no_items_available_yet'] = '还没有已设置的问题';
$string['no_templates_available_yet'] = '还没有模板';
$string['non_anonymous'] = '用户名将被记录并与答案一起显示';
$string['non_anonymous_entries'] = '非匿名条目 ({$a})';
$string['non_respondents_students'] = '未反馈的学生 ({$a})';
$string['not_completed_yet'] = '还未完成';
$string['not_selected'] = '未选择的';
$string['not_started'] = '未开始的';
$string['numberoutofrange'] = '数量超出范围';
$string['numeric'] = '数字题';
$string['numeric_range_from'] = '范围从';
$string['numeric_range_to'] = '到';
$string['of'] = '/';
$string['oldvaluespreserved'] = '所有旧题和相关数据都会保留';
$string['oldvalueswillbedeleted'] = '当前的问题和所有用户的答复都会被删除';
$string['only_one_captcha_allowed'] = '反馈中只可以有一个验证码';
$string['openafterclose'] = '您已在关闭日期之后指定打开日期';
$string['overview'] = '概览';
$string['page'] = '页面';
$string['page-mod-feedback-x'] = '任意反馈模块页';
$string['page_after_submit'] = '完成消息';
$string['pagebreak'] = '分页符';
$string['pluginadministration'] = '反馈管理';
$string['pluginname'] = '调查反馈';
$string['position'] = '位置';
$string['previewquestions'] = '预览问题';
$string['previous_page'] = '上一页';
$string['privacy:metadata:completed'] = '反馈意见的提交记录';
$string['privacy:metadata:completed:anonymousresponse'] = '提交内容是否匿名使用。';
$string['privacy:metadata:completed:timemodified'] = '上次修改提交内容的时间。';
$string['privacy:metadata:completed:userid'] = '完成反馈活动的用户的ID。';
$string['privacy:metadata:completedtmp'] = '仍在进行中的意见书记录。';
$string['privacy:metadata:value'] = '一个问题答案的记录。';
$string['privacy:metadata:value:value'] = '选择的答案。';
$string['privacy:metadata:valuetmp'] = '提交过程中对问题的回答记录。';
$string['public'] = '公共的';
$string['question'] = '问题';
$string['questionandsubmission'] = '问题和提交设置';
$string['questions'] = '问题';
$string['questionslimited'] = '仅显示{$a}第一个问题，查看单个答案或下载表格数据以查看所有问题。';
$string['radio'] = '多选项 - 单选';
$string['radio_values'] = '回答';
$string['ready_feedbacks'] = '就绪反馈';
$string['required'] = '必须回答';
$string['resetting_data'] = '清空反馈的答复';
$string['resetting_feedbacks'] = '正在重置反馈';
$string['response_nr'] = '反馈编号';
$string['responses'] = '反馈';
$string['responsetime'] = '答复时间';
$string['save_as_new_item'] = '另存为新问题';
$string['save_as_new_template'] = '另存为新模板';
$string['save_entries'] = '提交您的回答';
$string['save_item'] = '保存问题';
$string['saving_failed'] = '保存失败';
$string['search:activity'] = '反馈-活动信息';
$string['search_course'] = '搜索课程';
$string['searchcourses'] = '搜索课程';
$string['searchcourses_help'] = '搜索您想和此反馈关联的课程名称或代码';
$string['selected_dump'] = '$SESSION 选择的索引变量显示如下：';
$string['send'] = '发送';
$string['send_message'] = '发送通知';
$string['show_all'] = '显示全部';
$string['show_analysepage_after_submit'] = '显示分析页';
$string['show_entries'] = '显示反馈';
$string['show_entry'] = '显示答复';
$string['show_nonrespondents'] = '显示未反馈的';
$string['site_after_submit'] = '提交后访问';
$string['sort_by_course'] = '按课程排序';
$string['started'] = '开始';
$string['startedon'] = '从{$a}开始';
$string['subject'] = '主题';
$string['switch_item_to_not_required'] = '设为非必答';
$string['switch_item_to_required'] = '设为必答';
$string['template'] = '模板';
$string['template_deleted'] = '删除模板';
$string['template_saved'] = '模板已保存';
$string['templates'] = '模板';
$string['textarea'] = '问答题';
$string['textarea_height'] = '行数';
$string['textarea_width'] = '宽度';
$string['textfield'] = '填空题';
$string['textfield_maxlength'] = '最多可接受字符数';
$string['textfield_size'] = '文本域宽度';
$string['there_are_no_settings_for_recaptcha'] = '没有captcha的设置';
$string['this_feedback_is_already_submitted'] = '您已经完成此活动。';
$string['typemissing'] = '缺少"type"';
$string['update_item'] = '保存对问题的修改';
$string['url_for_continue'] = '链接到下一个活动';
$string['url_for_continue_help'] = '提交反馈后，将显示一个“继续”按钮，该按钮链接到课程页面。如果在此处输入活动的 URL，则它可能会链接到下一个活动。';
$string['use_one_line_for_each_value'] = '每个答案只占一行！';
$string['use_this_template'] = '使用此模板';
$string['using_templates'] = '选择一个模板';
$string['vertical'] = '垂直';
$string['whatfor'] = '您想做什么？';
