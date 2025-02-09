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
 * Strings for component 'search', language 'zh_cn', version '4.4'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = '高级查找';
$string['all'] = '所有';
$string['allareas'] = '所有区域';
$string['allcourses'] = '所有课程';
$string['allusers'] = '所有用户';
$string['author'] = '作者';
$string['authorname'] = '作者姓名';
$string['back'] = '返回';
$string['beadmin'] = '要使用该页面，必须是管理员。';
$string['checkdb'] = '检查数据库';
$string['checkdbadvice'] = '检查数据库中存在的问题';
$string['checkdir'] = '检查dir';
$string['checkdiradvice'] = '确保数据目录存在并可写';
$string['commenton'] = '评论';
$string['confirm_delete'] = '您确定要删除 {$a} 的索引吗？ 在搜索区域建立索引之前，用户将无法从该区域获得搜索结果。';
$string['confirm_deleteall'] = '您确定要立即删除所有索引内容吗？ 在该站点再次被编入索引之前，用户将不会获得搜索结果。';
$string['confirm_indexall'] = '您确定要立即更新索引内容吗？ 如果大量内容需要索引，这可能需要很长时间。 对于实时服务器，您通常应该将索引留给“全局搜索索引”计划任务。';
$string['confirm_reindexall'] = '您确定现在要重新索引所有网站内容吗？ 如果您的网站包含大量内容，这将需要很长时间，并且用户可能在完成之前无法获得完整的搜索结果。';
$string['content:courserole'] = '{$a->course}中的角色{$a->role}';
$string['core-all'] = '全部';
$string['core-course-content'] = '课程内容';
$string['core-courses'] = '培训班';
$string['core-other'] = '其它';
$string['core-users'] = '用户';
$string['createanindex'] = '创建一个索引';
$string['createdon'] = '创建于';
$string['database'] = '数据库';
$string['databasestate'] = '索引数据库声明';
$string['datadirectory'] = '数据目录';
$string['deleteindex'] = '删除索引 {$a}';
$string['deletionsinindex'] = '索引中的删除部分';
$string['docmodifiedon'] = '最近一次修改于{$a}';
$string['doctype'] = '文档类型';
$string['doctypenotsupported'] = '指定的文件类型还不支持';
$string['documents'] = '文档';
$string['documentsfor'] = '文档';
$string['documentsindatabase'] = '数据库中的文档';
$string['documentsinindex'] = '索引中的文档';
$string['duration'] = '周期';
$string['emptydatabaseerror'] = '数据表不存在，或不包含索引记录。';
$string['enginenotfound'] = '没有找到{$a}引擎';
$string['enginenotinstalled'] = '没有安装{$a}。';
$string['enginenotselected'] = '您还没有选择任何搜索引擎。';
$string['engineserverstatus'] = '搜索引擎无法使用，请联系你的管理员';
$string['enteryoursearchquery'] = '输入搜索条件';
$string['error_indexing'] = '编制索引时发生错误';
$string['errorareanotavailable'] = '{$a} 搜索范围无法使用';
$string['errors'] = '错误';
$string['everywhere'] = '您可以访问的任何地方';
$string['filesinindexdirectory'] = '文件在索引目录中';
$string['filterheader'] = '过滤器';
$string['fromtime'] = '修改时间晚于';
$string['globalsearch'] = '全站搜索';
$string['globalsearchdisabled'] = '全站搜索未启用';
$string['gradualreindex'] = '逐步重新索引{$a}';
$string['gradualreindex_confirm'] = '您确定要重新索引 {$a} 吗？ 这可能需要一些时间，尽管在重新编制索引期间现有数据仍然可用。';
$string['gradualreindex_queued'] = '已为 {$a->name}（{$a->count} 个上下文）请求重新索引。 此索引将由“全局搜索索引”计划任务执行。';
$string['incourse'] = '在课程{$a}';
$string['index'] = '索引';
$string['indexwhendisabledfullnotice'] = '当前禁用搜索时不允许索引。 要启用此功能，请参阅 <a href="{$a->url}">searchindexwhendisabled</a> 设置。';
$string['indexwhendisabledshortnotice'] = '索引不可用。';
$string['invalidindexerror'] = '索引目录或者包含无效索引，或者不存在。';
$string['ittook'] = '接受';
$string['matchingfile'] = '符合的文件 <span class="filename">{$a}</span>';
$string['matchingfiles'] = '符合的文件：';
$string['mycoursesonly'] = '仅我的课程';
$string['next'] = '下一步';
$string['noindexmessage'] = '管理员：似乎没有查询索引，请';
$string['noresults'] = '没有结果';
$string['normalsearch'] = '标准搜索';
$string['notitle'] = '无标题';
$string['openedon'] = '打开于';
$string['optimize'] = '最佳化';
$string['order'] = '结果顺序';
$string['order_location'] = '优先考虑与 {$a} 相关的结果';
$string['order_relevance'] = '最相关的结果优先';
$string['priority'] = '优先事项';
$string['priority_normal'] = '普通的';
$string['priority_reindexing'] = '重新索引';
$string['privacy:metadata'] = '搜索子系统不存储任何个人数据。';
$string['progress'] = '进展';
$string['queryerror'] = '您提供的查询无法由搜索引擎解析：{$a}';
$string['queueheading'] = '额外的索引队列（{$a} 项）';
$string['resultsreturnedfor'] = '返回结果';
$string['runindexer'] = '运行索引（真实）';
$string['runindexertest'] = '运行索引测试';
$string['schemanotupdated'] = '搜索模式已过期。';
$string['schemaversionunknown'] = '搜索引擎不知道当前的架构版本。';
$string['score'] = '得分';
$string['search'] = '搜索';
$string['search:course'] = '课程';
$string['search:course_teacher'] = '课程教师';
$string['search:customfield'] = '课程自定义字段';
$string['search:message_received'] = '消息 - 收到';
$string['search:message_sent'] = '消息 - 已发送';
$string['search:mycourse'] = '我的课程';
$string['search:section'] = '课程部分';
$string['search:user'] = '用户';
$string['searcharea'] = '搜索范围';
$string['searchareacategories'] = '搜索区域类别';
$string['searching'] = '搜索中……';
$string['searchnotpermitted'] = '你未被批准使用搜索';
$string['searchsetupdescription'] = '下列步骤可以帮助你设置Moodle全站搜索';
$string['searchwithin'] = '搜索范围内';
$string['seconds'] = '秒';
$string['solutions'] = '解决方案';
$string['statistics'] = '统计';
$string['step'] = '步骤';
$string['thesewordshelpimproverank'] = '这些关键字有助于提高排名';
$string['thesewordsmustappear'] = '这些关键字必须出现';
$string['thesewordsmustnotappear'] = '这些关键字不能出现';
$string['title'] = '标题';
$string['tofetchtheseresults'] = '获得这些结果';
$string['topresults'] = '最佳结果';
$string['totalsize'] = '总大小';
$string['totime'] = '修改时间早于';
$string['type'] = '类型';
$string['uncompleteindexingerror'] = '索引不成功！请重新启动';
$string['versiontoolow'] = '对不起！全站搜索需要PHP5.0.0或者更高版本支持';
$string['viewresultincontext'] = '查看这个环境下的结果';
$string['wordsintitle'] = '标题字数';
