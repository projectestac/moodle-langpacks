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
 * Strings for component 'qtype_multichoice', language 'zh_cn', version '4.4'.
 *
 * @package     qtype_multichoice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerhowmany'] = '一个还是多个答案？';
$string['answerhowmany_desc'] = '确认默认一个答案（即单选按钮）或多个答案（即复选框）。';
$string['answernumbering'] = '对选项编号？';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumbering_desc'] = '默认的编号方式。';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = '不编号';
$string['answersingleno'] = '允许多个正确答案';
$string['answersingleyes'] = '只有一个正确答案';
$string['choiceno'] = '选项 {$a}';
$string['choices'] = '可选项';
$string['clearchoice'] = '清空我的选择';
$string['clozeaid'] = '键入缺少的词';
$string['correctansweris'] = '正确答案是：{$a}';
$string['correctanswersare'] = '正确答案是：{$a}';
$string['correctfeedback'] = '给任意正确答案';
$string['deletedchoice'] = '此选项在尝试开始后被删除。';
$string['errfractionsaddwrong'] = '您选择的正数成绩之和未达到100%<br />它们加起来是{$a}%';
$string['errfractionsnomax'] = '要有一个选项的分数是100%，这样才可能<br />在这道题中得到满分。';
$string['errgradesetanswerblank'] = '有成绩，但答案为空';
$string['feedback'] = '反馈';
$string['fillouttwochoices'] = '您必须至少填写两个选项。空选项不会被使用。';
$string['fractionsaddwrong'] = '您已选择的正分值不会合计达到 100%<br />而是达到{$a}%<br />您希望返回并且修正这个问题吗？';
$string['fractionsnomax'] = '答案之一必须是 100%，<br />这样才能从此题目得到满分。<br />您希望返回并且修正这个问题吗？';
$string['incorrectfeedback'] = '针对任何错误答案';
$string['notenoughanswers'] = '此类型的题目至少要有 {$a} 个选项';
$string['overallcorrectfeedback'] = '给任意正确答案的反馈';
$string['overallfeedback'] = '整体反馈';
$string['overallincorrectfeedback'] = '给任意错误答案的反馈';
$string['overallpartiallycorrectfeedback'] = '给任意部分正确答案的反馈';
$string['partiallycorrectfeedback'] = '针对部分正确答案';
$string['pleaseselectananswer'] = '请选择一个答案。';
$string['pleaseselectatleastoneanswer'] = '请选择至少一个答案。';
$string['pluginname'] = '选择题';
$string['pluginname_help'] = '从多个选项中做选择来回答问题，题目中可以包含图片。有两种选择题——单项选择和多项选择。';
$string['pluginname_link'] = 'question/type/multichoice';
$string['pluginnameadding'] = '添加一道选择题';
$string['pluginnameediting'] = '编辑一道选择题';
$string['pluginnamesummary'] = '从预先定义的选项中选择一个或多个做为答案。';
$string['privacy:metadata'] = '多选题类型插件允许出题者将默认选项设置为用户偏好';
$string['privacy:preference:answernumbering'] = '应使用哪种编号样式（“1、2、3、……”、“a、b、c、……”等）。';
$string['privacy:preference:defaultmark'] = '为给定问题设置的默认分数。';
$string['privacy:preference:penalty'] = '当使用“多次尝试交互”或“自适应模式”行为运行问题时，每次错误尝试的罚分。';
$string['privacy:preference:showstandardinstruction'] = '是否显示标准说明。';
$string['privacy:preference:shuffleanswers'] = '答案是否自动重新排序。';
$string['privacy:preference:single'] = '答案是带有单选按钮的单个答案还是带有复选框的多个答案。';
$string['regradeissuenumchoiceschanged'] = '问题中的选项数量发生了变化。';
$string['selectmulti'] = '选择一项或多项：';
$string['selectone'] = '选择一项：';
$string['showstandardinstruction'] = '显示标准说明';
$string['showstandardinstruction_desc'] = '选择题答案前是否显示“选择一个”或“选择一个或多个”的提示。';
$string['showstandardinstruction_help'] = '是否在多选题答案前显示 "选择一个："或 "选择一个或多个："的说明。';
$string['shuffleanswers'] = '随机排列答案？';
$string['shuffleanswers_desc'] = '默认情况下，是否每次尝试时选项都随机排序';
$string['shuffleanswers_help'] = '如果启用，且活动设置中的”随机排列题目选项“也被启用，那么每次答题时选项的顺序都会是随机的。';
$string['singleanswer'] = '选择一个答案。';
$string['toomanyselected'] = '您选择了太多的选项。';
