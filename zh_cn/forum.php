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
 * Strings for component 'forum', language 'zh_cn', version '4.4'.
 *
 * @package     forum
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionsforgraderinterface'] = '评分人界面的操作';
$string['actionsforpost'] = '帖子操作';
$string['activitydate:due'] = '到期日：';
$string['activityoverview'] = '有新帖';
$string['addanewdiscussion'] = '添加话题';
$string['addanewquestion'] = '添加一个新问题';
$string['addanewtopic'] = '添加一个新话题';
$string['addreply'] = '添加回复';
$string['addtofavourites'] = '标星此话题';
$string['advancedsearch'] = '高级搜索';
$string['alldiscussions'] = '所有话题';
$string['allforums'] = '所有讨论区';
$string['allowdiscussions'] = '允许 {$a} 在此讨论区发帖吗?';
$string['allowsallsubscribe'] = '此讨论区允许每个人选择是否订阅';
$string['allowsdiscussions'] = '此讨论区允许每个人发起 1个新话题。';
$string['allsubscribe'] = '订阅所有讨论区';
$string['allunsubscribe'] = '退订所有讨论区';
$string['allusers'] = '所有用户';
$string['alreadyfirstpost'] = '这已经是本话题的第一帖';
$string['announcementsettings'] = '默认公告论坛设置';
$string['announcementsettings_help'] = '这些设置定义了所有公告论坛的默认值。';
$string['anyfile'] = '任何文件';
$string['areaattachment'] = '附件';
$string['areapost'] = '消息';
$string['attachment'] = '附件';
$string['attachment_help'] = '您可以选择将一个或多个文件附加到帖子中。如果附加图片，则将在正文后显示此图片。';
$string['attachmentname'] = '附件 {$a}';
$string['attachmentnameandfilesize'] = '{$a->name} ({$a->size})';
$string['attachmentnopost'] = '您不能导出没有帖子 ID 的附件';
$string['attachments'] = '附件';
$string['attachmentswordcount'] = '附件数和字数';
$string['authorreplyingprivatelytoauthor'] = '{$a->respondant}私下回复 {$a->author}';
$string['authorreplyingtoauthor'] = '{$a->respondant} 回复 {$a->author}';
$string['availability'] = '可用性';
$string['blockafter'] = '发帖阻止阈值';
$string['blockafter_help'] = '此设置指定用户在给定周期内可以发布的最大帖子数。具有mod/forum:postwithththrottling权限的用户不受此限制。';
$string['blockperiod'] = '阻止周期';
$string['blockperiod_help'] = '在给定的周期内，学生被阻止发布超过给定数量的帖子。具有mod /forum:postwithththrottling权限的用户不受此限制。';
$string['blockperioddisabled'] = '不阻止';
$string['blogforum'] = '博客形式的标准讨论区';
$string['bynameondate'] = '{$a->name} - {$a->date}';
$string['cachedef_forum_count_discussions'] = '论坛讨论数';
$string['cachedef_forum_is_tracked'] = '用户讨论区跟踪状态‎‎';
$string['calendardue'] = '{$a} 已到期';
$string['cancelreply'] = '取消回复';
$string['cannotadd'] = '不能向此讨论区添加话题';
$string['cannotadddiscussion'] = '向此讨论区添加话题需要组成员身份。';
$string['cannotadddiscussionall'] = '您没有权限为所有参与人添加新话题。';
$string['cannotadddiscussiongroup'] = '您不能开启话题，因为您不是任何组的成员。';
$string['cannotaddsubscriber'] = '无法将 ID 为{$a}的订阅人添加到此讨论区！';
$string['cannotaddteacherforumto'] = '不能将转换后的教师讨论区实例添加到此课程的0小节';
$string['cannotcreatediscussion'] = '不能开启新话题';
$string['cannotcreateinstanceforteacher'] = '不能为教师讨论区建立新的课程模块实例';
$string['cannotdeletepost'] = '您不能删除此帖！';
$string['cannoteditposts'] = '您不能编辑别人的帖子！';
$string['cannotexportforum'] = '您不能导出此讨论区';
$string['cannotfavourite'] = '对不起，您没有标星话题的权限。';
$string['cannotfinddiscussion'] = '在该讨论区中找不到此话题';
$string['cannotfindfirstpost'] = '找不到此讨论区的第一帖';
$string['cannotfindorcreateforum'] = '不能找到或创建此站点的主新闻通告讨论区';
$string['cannotfindparentpost'] = '不能找到帖子{$a}的顶级父贴';
$string['cannotmovefromsingleforum'] = '不能从单个简单话题讨论区移动话题';
$string['cannotmovenotvisible'] = '讨论区不可见';
$string['cannotmovetonotexist'] = '您不能移动到那个讨论区 - 它不存在！';
$string['cannotmovetonotfound'] = '此课程中找不到目标讨论区。';
$string['cannotmovetosingleforum'] = '不能将话题移动到单个简单话题讨论区';
$string['cannotpindiscussions'] = '对不起，您没有权限置顶话题。';
$string['cannotpurgecachedrss'] = '无法清除源和/或目标讨论区的缓存 RSS feeds-请检查您的文件permissionsforums';
$string['cannotremovesubscriber'] = '不能从此讨论区中移除 ID 为{$a}的订阅人！';
$string['cannotreply'] = '您不能回复此帖';
$string['cannotsplit'] = '此讨论区的话题不能分割';
$string['cannotsubscribe'] = '抱歉，您必须是小组成员才能订阅。';
$string['cannottrack'] = '不能停止跟踪此讨论区';
$string['cannotunsubscribe'] = '不能退订此讨论区';
$string['cannotupdatepost'] = '您不能更新此帖';
$string['cannotuseseperategroupsandsingletopic'] = '独立小组不能用于单独简单讨论。';
$string['cannotusesingletopicandseperategroups'] = '单独简单讨论不能用于独立小组。';
$string['cannotviewpostyet'] = '您还不能在此话题中阅读其他同学的帖子，因为您还没有发帖';
$string['cannotviewusersposts'] = '您不能查看此用户发表的帖子。';
$string['cleanreadtime'] = '几点将旧帖标记为已读';
$string['clicktofavourite'] = '您还没有标星此话题。点击标星。';
$string['clicktolockdiscussion'] = '点击锁定此话题。';
$string['clicktosubscribe'] = '您没有订阅此话题。点击订阅。';
$string['clicktounfavourite'] = '您标星了此话题。点击取消标星。';
$string['clicktounlockdiscussion'] = '点击解锁此话题。';
$string['clicktounsubscribe'] = '您已订阅此话题。点击退订';
$string['close'] = '关闭';
$string['closegrader'] = '关闭评分人';
$string['completiondetail:discussions'] = 'due date:';
$string['completiondetail:posts'] = '发表论坛帖子：{$a}';
$string['completiondetail:replies'] = '发布回复：{$a}';
$string['completiondiscussions'] = '开启话题';
$string['completiondiscussionsdesc'] = '学生必须至少开启{$a}个话题';
$string['completiondiscussionsgroup'] = '需要开启话题';
$string['completiondiscussionshelp'] = '需要开启话题才能完成';
$string['completionposts'] = '开启话题或回帖';
$string['completionpostsdesc'] = '学生必须至少开启话题或回帖{$a}个/条';
$string['completionpostsgroup'] = '需要发帖';
$string['completionpostshelp'] = '需要开启话题或回帖才能完成';
$string['completionpostsinforums'] = '在论坛发帖';
$string['completionreplies'] = '回帖';
$string['completionrepliesdesc'] = '学生必须至少回帖{$a}条';
$string['completionrepliesgroup'] = '需要回帖';
$string['completionreplieshelp'] = '需要回帖才能完成';
$string['configcleanreadtime'] = '几点从“已读”表中清除旧帖子。';
$string['configdigestmailtime'] = '系统每天会给那些希望以摘要形式接受邮件的人发送摘要。这个选项控制着每天发送摘要邮件的时间(下一个在此时间后运行的cron程序将会发出这些邮件)。';
$string['configdisplaymode'] = '如果未设置，话题的默认显示模式。';
$string['configenablerssfeeds'] = '此开关将使所有讨论区都可以使用 RSS feeds 。您仍然需要在每个讨论区的设置中手动打开 feeds 。';
$string['configenabletimedposts'] = '如果要允许在发布新话题时设置显示周期，请设置为“是”。';
$string['configlongpost'] = '任何超过此长度的帖子（不包括 HTML 的字符）都被视为长。在网站主页、社交格式、课程页面或用户个人资料上显示的帖子被缩短为forum_shortpost值和forum_longpost值之间的自然中断。';
$string['configmanydiscussions'] = '讨论区中每页显示的最大话题数';
$string['configmaxattachments'] = '每个帖子默认允许的最大附件数。';
$string['configmaxbytes'] = '站点上所有讨论区附件的默认最大大小（受课程限制和其他本地设置的限制）';
$string['configoldpostdays'] = '帖子发布几天后视为已读。';
$string['configreplytouser'] = '当通过 email 发送讨论区中的帖子时，是否可以包含用户的 email 地址，以便收信人可以直接通过 email 而不是通过讨论区回复发帖人？即使设置为“是”，用户仍可以在他们的个人档案里设置 email 地址为保密。';
$string['configrssarticlesdefault'] = '如果启用了 RSS feed，请设置文章（话题或帖文）的默认数量。';
$string['configrsstypedefault'] = '如果启用了 RSS feed，请设置默认活动类型。';
$string['configshortpost'] = '少于此长度的任何帖子（不包括HTML的字符）均视为简短（请参见下文）。';
$string['configsubscriptiontype'] = '订阅模式的默认设置。';
$string['configtrackingtype'] = '阅读跟踪的默认设置。';
$string['configtrackreadposts'] = '如果要为每个用户跟踪已读/未读信息，请设置为“是”。';
$string['configusermarksread'] = '如果为“是”，则用户必须手动将帖子标记为已读。如果为“否”，则在查看帖子时将其标记为已读。';
$string['confirmsubscribe'] = '您确定要订阅讨论区“{$a}”吗？';
$string['confirmsubscribediscussion'] = '您确定要订阅“{$a->forum}”讨论区的“{$a->discussion}”话题吗？';
$string['confirmunsubscribe'] = '您确定要退订讨论区“{$a}”吗？';
$string['confirmunsubscribediscussion'] = '您确定要退订“{$a->forum}”讨论区的“{$a->discussion}”话题吗？';
$string['couldnotadd'] = '由于未知的错误，无法添加您的帖子';
$string['couldnotdeletereplies'] = '很抱歉，已经有跟帖的帖子不能删除';
$string['couldnotupdate'] = '由于未知错误，无法更新您的帖子';
$string['created'] = '开启';
$string['crontask'] = '讨论区的邮寄和维护工作';
$string['cutoffdate'] = '截止日期';
$string['cutoffdate_help'] = '如果设置，讨论区将在此日期之后不接受帖子。';
$string['cutoffdatereached'] = '已到此讨论区发帖截止日期，您不能再在这儿发帖。';
$string['cutoffdatevalidation'] = '截止日期不能早于到期日期。';
$string['delete'] = '删除';
$string['deleteddiscussion'] = '此话题已删除';
$string['deletedpost'] = '此帖已删除';
$string['deletedposts'] = '那些帖子已删除';
$string['deleteduser'] = '删除的用户';
$string['deletesure'] = '您确定要删除此帖吗?';
$string['deletesureplural'] = '您确定要删除这个帖子及其所有回帖吗？({$a}条帖子)';
$string['digestmailheader'] = '这是来自 {$a->sitename} 站点讨论区的每日新帖摘要。要更改默认的讨论区电子邮件偏好，请转到{$a->userprefs}。';
$string['digestmailpost'] = '更改您的讨论区摘要偏好';
$string['digestmailpostlink'] = '更改您的讨论区摘要偏好：{$a}';
$string['digestmailprefs'] = '您的用户个人档案';
$string['digestmailsubject'] = '{$a}: 讨论区摘要';
$string['digestmailtime'] = '几点发送摘要邮件';
$string['digestsentusers'] = '电子邮件摘要已成功发送给{$a}位用户。';
$string['disallowsubscribe'] = '不允许订阅';
$string['disallowsubscribeteacher'] = '不允许订阅(教师除外)';
$string['disallowsubscription'] = '订阅';
$string['disallowsubscription_help'] = '此讨论区已被设置为您不能订阅话题。';
$string['discussion'] = '话题';
$string['discussionlistsortbycreatedasc'] = '按开启日期升序排序';
$string['discussionlistsortbycreateddesc'] = '按开启日期降序排序';
$string['discussionlistsortbydiscussionasc'] = '按话题名称升序排序';
$string['discussionlistsortbydiscussiondesc'] = '按话题名称降序排序';
$string['discussionlistsortbygroupasc'] = '按小组升序排序';
$string['discussionlistsortbygroupdesc'] = '按小组降序排序';
$string['discussionlistsortbylastpostasc'] = '按最近帖子创建日期升序排序';
$string['discussionlistsortbylastpostdesc'] = '按最近帖子创建日期降序排序';
$string['discussionlistsortbyrepliesasc'] = '按回帖数升序排序';
$string['discussionlistsortbyrepliesdesc'] = '按回帖数降序排序';
$string['discussionlistsortbystarterasc'] = '按话题发起者姓名升序排序';
$string['discussionlistsortbystarterdesc'] = '按话题发起者姓名降序排序';
$string['discussionlocked'] = '此话题已锁定，因此您不能再回复。';
$string['discussionlockingdisabled'] = '不锁定话题';
$string['discussionlockingheader'] = '话题锁定';
$string['discussionmoved'] = '此话题已移至“{$a}”。';
$string['discussionmovedpost'] = '此话题已移至讨论区<a href="{$a->forumhref}">{$a->forumname}</a> <a href="{$a->discusshref}">此处</a>';
$string['discussionname'] = '话题名称';
$string['discussionnownotsubscribed'] = '{$a->name}将不再收到“{$a->forum}”的“ {$a->discussion}”的新帖通知';
$string['discussionnowsubscribed'] = '您将在论坛“{$a->forum}”的“{$a->discussion}”中收到新帖子的通知';
$string['discussionpin'] = '置顶';
$string['discussionpinned'] = '置顶';
$string['discussionpinned_help'] = '置顶的话题将显示在讨论区的最上面。';
$string['discussions'] = '话题';
$string['discussionsplit'] = '话题已分割';
$string['discussionsstartedby'] = '由 {$a} 发起的话题';
$string['discussionsstartedbyrecent'] = '最近由 {$a} 发起的话题';
$string['discussionsstartedbyuserincourse'] = '{$a->fullname}在{$a->coursename}发起的话题';
$string['discussionsstartedincourse'] = '讨论开始于 {$a}';
$string['discussionstartedby'] = '{$a} 发起的话题';
$string['discussionsubscribed'] = '‎您现在已订阅了此话题。 ‎';
$string['discussionsubscribestart'] = '此话题有新贴文时，请通知我。';
$string['discussionsubscribestop'] = '此话题有新贴文时，不要通知我。';
$string['discussionsubscription'] = '订阅话题';
$string['discussionsubscription_help'] = '订阅一个话题，意味着在这个话题上有新贴文时，您将会收到通知。';
$string['discussionunpin'] = '取消置顶';
$string['discussionunsubscribed'] = '‎您现在已退订了此话题。 ‎';
$string['discussthistopic'] = '讨论此话题';
$string['discusstopicname'] = '讨论话题：{$a}';
$string['displayend'] = '显示结束';
$string['displayend_help'] = '此设置指定是否应在特定日期后隐藏讨论区帖子。请注意，管理员始终可以查看讨论区帖子。';
$string['displayenddate'] = '显示结束：{$a}。';
$string['displaymode'] = '显示模式';
$string['displayperiod'] = '显示周期';
$string['displaystart'] = '显示开始';
$string['displaystart_help'] = '此设置指定是否应从某个日期开始显示讨论区帖子。请注意，管理员始终可以查看讨论区帖子。';
$string['displaystartdate'] = '显示开始：{$a}。';
$string['displaywordcount'] = '显示字数';
$string['displaywordcount_help'] = '此设置指定是否显示每个帖子的字数。';
$string['duedate'] = '到期日期';
$string['duedate_help'] = '这是讨论区发帖什么时候到期。虽然这个日期显示在日历作为讨论区的到期日期，但是在这个日期之后仍然允许发帖。可以设置讨论区截止日期，以防止在指定日期后再发贴到讨论区。';
$string['duedatetodisplayincalendar'] = '在日历中显示的到期日期';
$string['eachuserforum'] = '每个人发表 1 个话题';
$string['edit'] = '编辑';
$string['editdiscussion'] = '编辑讨论';
$string['editdiscussiontopic'] = '编辑讨论主题';
$string['editedby'] = '由 {$a->name} 编辑 - 原提交时间 {$a->date}';
$string['editedpostupdated'] = '{$a}的帖子已更新';
$string['editing'] = '正在编辑';
$string['emaildigestcompleteshort'] = '完整帖子';
$string['emaildigestdefault'] = '默认({$a})';
$string['emaildigestoffshort'] = '没有摘要';
$string['emaildigestsubjectsshort'] = '只有主题';
$string['emaildigesttype'] = '电子邮件摘要选项';
$string['emaildigesttype_help'] = '您将收到的每个讨论区的通知类型。

* 默认 - 遵循用户个人档案中的摘要设置。如果您更新个人档案，那么更改也会在此处反映出来；
* 无摘要 - 每个新帖子您都将收到一封电子邮件；
* 摘要 - 完整的帖子 - 您每天都将收到一封摘要电子邮件，其中包含每个新帖子的完整内容；
* 摘要 - 仅主题 - 您每天都将收到一封摘要电子邮件，其中仅包含每个新帖子的主题。';
$string['emptymessage'] = '您的帖子出了点问题。也许您将其留空了，或者附件太大。您的更改<strong>还没有</strong>保存。';
$string['errorcannotlock'] = '您没有锁定话题的权限。';
$string['errordiscussionnotfound'] = '没有找到讨论';
$string['erroremptymessage'] = '帖子正文不能为空';
$string['erroremptysubject'] = '帖子主题不能为空。';
$string['errorenrolmentrequired'] = '您必须先加入该课程才能访问此内容';
$string['errorforumnotfound'] = '该讨论所属论坛未找到';
$string['errorwhiledelete'] = '删除记录时发生错误。';
$string['eventassessableuploaded'] = '某些内容已经发布。';
$string['eventcoursesearched'] = '已搜索课程';
$string['eventdiscussioncreated'] = '话题已开启';
$string['eventdiscussiondeleted'] = '话题已删除';
$string['eventdiscussionlockupdated'] = '讨论锁定更新';
$string['eventdiscussionmoved'] = '话题已移动';
$string['eventdiscussionpinned'] = '话题已置顶';
$string['eventdiscussionsubscriptioncreated'] = '话题订阅已建立';
$string['eventdiscussionsubscriptiondeleted'] = '话题订阅已删除';
$string['eventdiscussionunpinned'] = '话题已取消置顶';
$string['eventdiscussionupdated'] = '话题已更新';
$string['eventdiscussionviewed'] = '话题已查看';
$string['eventforumsubscriptionupdated'] = '订阅模式更新';
$string['eventpostcreated'] = '帖文已建立';
$string['eventpostdeleted'] = '贴文已删除';
$string['eventpostupdated'] = '贴文已更新';
$string['eventreadtrackingdisabled'] = '阅读跟踪已禁用';
$string['eventreadtrackingenabled'] = '阅读跟踪已启用';
$string['eventsubscribersviewed'] = '订阅者已查看';
$string['eventsubscriptioncreated'] = '订阅已建立';
$string['eventsubscriptiondeleted'] = '订阅已删除';
$string['eventuserreportviewed'] = '用户报表已查看';
$string['everyonecanchoose'] = '每个人都可以选择订阅';
$string['everyonecannowchoose'] = '现在每个人都可以选择订阅';
$string['everyoneisnowsubscribed'] = '现在每个人都订阅了此讨论区';
$string['everyoneissubscribed'] = '每个人都订阅了此讨论区';
$string['existingsubscribers'] = '现有的订阅';
$string['export'] = '导出';
$string['exportattachmentname'] = '导出附件{$a}到云存储';
$string['exportdiscussion'] = '导出整个话题到云存储';
$string['exporthumandates'] = '人类可读的日期';
$string['exporthumandates_help'] = '日期应该用人类可读的格式导出，还是以时间戳(数字序列)导出。';
$string['exportoptions'] = '导出选项';
$string['exportstriphtml'] = '移除HTML';
$string['exportstriphtml_help'] = '是否应该将诸如p和br之类的HTML标记从讨论区帖子正文中移除。';
$string['favourites'] = '标星的';
$string['favouriteupdated'] = '您的标星选项已更新。';
$string['firstpost'] = '第一帖';
$string['forcedreadtracking'] = '允许强制阅读跟踪';
$string['forcedreadtracking_desc'] = '允许将讨论区设置为强制阅读跟踪。这将导致某些用户的性能下降，尤其是在包含许多讨论区和帖子的课程上。禁用此选项后，以前设置为“强制”的任何讨论区均更改为可选。';
$string['forcesubscribed'] = '此讨论区强制每个人都订阅';
$string['forcesubscribed_help'] = '此讨论区已被设置为不能退订话题';
$string['forum'] = '讨论区';
$string['forum:addinstance'] = '添加新讨论区';
$string['forum:addnews'] = '添加新闻通告';
$string['forum:addquestion'] = '添加问题';
$string['forum:allowforcesubscribe'] = '允许强制订阅';
$string['forum:canmailnow'] = '可以发布到 Q and A 论坛，没有编辑时间延迟';
$string['forum:canoverridecutoff'] = '截止日期后发帖到讨论区';
$string['forum:canoverridediscussionlock'] = '回复锁定的话题';
$string['forum:canposttomygroups'] = '发布到您有权访问的所有组';
$string['forum:cantogglefavourite'] = '标星话题';
$string['forum:createattachment'] = '上传附件';
$string['forum:deleteanypost'] = '删除任何帖子（任何时间）';
$string['forum:deleteownpost'] = '删除自己的帖子（在截止时间内）';
$string['forum:editanypost'] = '编辑任何帖子';
$string['forum:exportdiscussion'] = '导出整个话题';
$string['forum:exportforum'] = '导出讨论区';
$string['forum:exportownpost'] = '导出自己的帖子';
$string['forum:exportpost'] = '导出帖子';
$string['forum:grade'] = '评分讨论区';
$string['forum:managesubscriptions'] = '管理订阅者';
$string['forum:movediscussions'] = '移动话题';
$string['forum:pindiscussions'] = '置顶话题';
$string['forum:postprivatereply'] = '私下回复帖子';
$string['forum:postwithoutthrottling'] = '不受发帖阈值限制';
$string['forum:rate'] = '评价帖子';
$string['forum:readprivatereplies'] = '查看私人回复';
$string['forum:replynews'] = '回复新闻通告';
$string['forum:replypost'] = '回复帖子';
$string['forum:splitdiscussions'] = '分割话题';
$string['forum:startdiscussion'] = '发起新话题';
$string['forum:viewallratings'] = '查看个人提供的所有原始评价';
$string['forum:viewanyrating'] = '查看任何人收到的总评价';
$string['forum:viewdiscussion'] = '查看话题';
$string['forum:viewhiddentimedposts'] = '阅读隐藏的定时帖';
$string['forum:viewqandawithoutposting'] = '始终可看提问帖与解答帖';
$string['forum:viewrating'] = '查看您收到的总评价';
$string['forum:viewsubscribers'] = '查看订阅';
$string['forumauthorhidden'] = '作者(隐藏)';
$string['forumblockingalmosttoomanyposts'] = '您即将达到发帖阈值。您在最近的{$a->blockperiod}发了{$a-> numposts}帖，限制为{$a->blockafter}帖。';
$string['forumbodydeleted'] = '本讨论区帖子的内容已移除，无法再访问。';
$string['forumbodyhidden'] = '此帖子目前处于隐藏状态，很可能是因为您需要先在讨论中发帖，并且必须发送论坛帖子通知。另一种可能性是当前时间不在为帖子设置的显示周期内。';
$string['forumgrader'] = '讨论区评分人';
$string['forumgradingnavigation'] = '讨论区评分导航';
$string['forumgradingpanel'] = '讨论区评分面板';
$string['forumintro'] = '描述';
$string['forumname'] = '讨论区名称';
$string['forumposts'] = '讨论区帖子';
$string['forums'] = '讨论区';
$string['forumsubjectdeleted'] = '本讨论区帖子已移除';
$string['forumsubjecthidden'] = '主题(隐藏)';
$string['forumtracked'] = '跟踪未读帖子';
$string['forumtrackednot'] = '不跟踪未读帖子';
$string['forumtype'] = '讨论区类型';
$string['forumtype_help'] = '有 5 种讨论类型：

* 单个简单讨论 - 每个人都可以回复的单一讨论主题（不能与独立小组一起使用）
* 每人发布一个讨论 - 每个学生可以发布一个新的讨论主题，然后每个人都可以回复该主题
* 问答论坛 - 学生必须先发布对老师发布的问题的回复，然后才能查看其他学生的帖子
* 以类似博客的格式显示的标准论坛 - 一个开放的论坛，任何人都可以在任何时候开始新的讨论，其中讨论主题显示在一个带有“讨论此主题”链接的页面上
* 通用标准论坛 - 一个开放的论坛，任何人都可以随时开始新的讨论';
$string['generalforum'] = '一般用途的标准讨论区';
$string['generalforums'] = '普通讨论区';
$string['grade_forum_header'] = '整个讨论区评分';
$string['grade_forum_name'] = '整个讨论区';
$string['grade_forum_title'] = '成绩';
$string['grade_rating_name'] = '评价';
$string['graded'] = '已评分';
$string['gradedby'] = '评分人';
$string['gradeforrating'] = '评价成绩：{$a->str_long_grade}';
$string['gradeforratinghidden'] = '隐藏的评价成绩';
$string['gradeforwholeforum'] = '讨论区成绩：{$a->str_long_grade}';
$string['gradeforwholeforumhidden'] = '隐藏的讨论区成绩';
$string['gradeitem:forum'] = '讨论区';
$string['gradeitemnameforrating'] = '{$a->name}评分';
$string['gradeitemnameforwholeforum'] = '{$a->name}整个讨论区';
$string['grades:gradesavedfor'] = '{$a->fullname}保存的成绩';
$string['grades:gradesavefailed'] = '不能保存{$a->fullname}的成绩：{$a->error}';
$string['gradeusers'] = '给用户评分';
$string['grading'] = '评分';
$string['gradingstatus'] = '评分状态：';
$string['hiddenforumpost'] = '隐藏讨论区帖子';
$string['hidegraderpanel'] = '隐藏评分人面板';
$string['hidepreviousrepliescount'] = '隐藏先前的回复({$a})';
$string['hideusersearch'] = '隐藏用户搜索';
$string['indexoutoftotal'] = '{$a->index}/{$a->total}';
$string['indicator:cognitivedepth'] = '讨论区认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在讨论区活动中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = '讨论区认知深度';
$string['indicator:cognitivedepthdef_help'] = '在此分析间隔内，参与人已达到讨论区活动所提供的认知参与度(级别=未查看、查看、提交、查看反馈、评论反馈、查看反馈后重新提交)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = '讨论区社会广度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在讨论区活动中所达到的社会广度。';
$string['indicator:socialbreadthdef'] = '讨论区社会广度';
$string['indicator:socialbreadthdef_help'] = '在此分析间隔内，参与人已达到讨论区活动所提供的社会参与度(级别=没有参与，单独参与，和他人一起参与)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inforum'] = '在 {$a} 里';
$string['inreplyto'] = '回复{$a}';
$string['introblog'] = '本讨论区的帖子自动拷贝自课程的博客用户。因为那些博客条目不再可用。';
$string['intronews'] = '普通新闻与新闻通告';
$string['introsocial'] = '开放的讨论区，可以随便聊聊';
$string['introteacher'] = '教师专用讨论区';
$string['invalidaccess'] = '此页面未正确访问';
$string['invaliddigestsetting'] = '邮件摘要设置无效';
$string['invaliddiscussionid'] = '话题 ID 不正确或不再存在';
$string['invalidforcesubscribe'] = '无效的强制订阅模式';
$string['invalidforumid'] = '讨论区 ID 错误';
$string['invalidparentpostid'] = '父帖 ID 错误';
$string['invalidpostid'] = '无效的帖子 ID - {$a}';
$string['lastpost'] = '最新帖子';
$string['learningforums'] = '学习讨论区';
$string['lockdiscussion'] = '锁定此话题';
$string['lockdiscussionafter'] = '闲置一段时间后锁定话题';
$string['lockdiscussionafter_help'] = '自最新回复经过指定时间后，话题自动锁定。

有权限回复锁定话题的用户可以通过回复话题来解锁话题。';
$string['locked'] = '锁定';
$string['lockupdated'] = '锁定选项已更新。';
$string['longpost'] = '长帖';
$string['mailnow'] = '发送新帖通知（没有编辑时间延迟）';
$string['managesubscriptionsoff'] = '结束管理订阅';
$string['managesubscriptionson'] = '管理订阅';
$string['manydiscussions'] = '每页的话题数';
$string['markalldread'] = '将此话题中的所有帖子标记为已读。';
$string['markallread'] = '将此讨论区中的所有帖子标记为已读。';
$string['markasread'] = '标记为已读';
$string['markasreadonnotification'] = '发送新帖通知时';
$string['markasreadonnotification_help'] = '当您收到新帖通知时，您可以选择是否应将此帖子标记为已读，以进行讨论区跟踪。';
$string['markasreadonnotificationno'] = '不要标记此贴为已读';
$string['markasreadonnotificationyes'] = '标记此贴为已读';
$string['markread'] = '标记已读';
$string['markreadbutton'] = '标记<br />已读';
$string['markunread'] = '标记未读';
$string['markunreadbutton'] = '标记<br />未读';
$string['maxattachments'] = '最大附件数';
$string['maxattachments_help'] = '此设置指定可以附加到讨论区帖子的最大文件数。';
$string['maxattachmentsize'] = '附件的最大大小';
$string['maxattachmentsize_help'] = '此设置指定可以附加到讨论区帖子的最大文件大小。';
$string['maxtimehaspassed'] = '抱歉，可编辑此帖子的最大时限({$a})已过！';
$string['message'] = '正文';
$string['messageinboundattachmentdisallowed'] = '不能发表您的回复。因为它包含了附件，此讨论区不允许附件。';
$string['messageinboundfilecountexceeded'] = '不能发表您的回复。因为它包含的附件数量超过了讨论区允许的最大附件数量({$a->forum->maxattachments})。';
$string['messageinboundfilesizeexceeded'] = '不能发表您的回复。因为全部附件的大小({$a->filesize})超过了讨论区允许的最大大小({$a->maxbytes})。';
$string['messageinboundforumhidden'] = '不能发表您的回复。此讨论区当前不可用。';
$string['messageinboundnopostforum'] = '不能发表您的回复。您没有在{$a->forum->name}讨论区发帖的权限。';
$string['messageinboundthresholdhit'] = '不能发表您的回复。您已超出此讨论区的发帖阈值';
$string['messageprovider:digests'] = '订阅的讨论区摘要';
$string['messageprovider:posts'] = '订阅的讨论区帖子';
$string['missingsearchterms'] = '以下搜索词只出现在此消息的HTML标记中：';
$string['modeflatnewestfirst'] = '列表显示回帖，新帖在前';
$string['modeflatoldestfirst'] = '列表显示回帖，旧帖在前';
$string['modenested'] = '嵌套显示回帖';
$string['modenestedv2'] = '以试验性嵌套形式显示回帖';
$string['modethreaded'] = '以树状形式显示回帖';
$string['modulename'] = '讨论区';
$string['modulename_help'] = '在讨论区模块用户可以进行异步的讨论，也就是说讨论是发生在一段很长的时间中。

讨论区可以按照多种不同的方式加以组织，比如，强制订阅的新闻讨论区，要先回答才能看到别人贴文的讨论区，每人只能开启一个话题的讨论区。 帖文可以用多种不同的格式浏览，也可以包含附件。附件附加的图像会显示在帖子上。

教师也可以为某课程的所有学生订阅讨论区且不允许取消(強制)，或允许取消(自动)，或者一开始就由学生自行决定(可选)，或者完全关闭订阅功能(关闭)。 订阅一个讨论区后，订阅者可以通过电子邮件接受到每一个新的帖子。

教师和学生(同伴互评)可以对讨论区的帖文进行评价。评价的结果可以汇总成一个个人在讨论区的最终分数，然后记录到成绩册中。

讨论区有许多的用途，比如：

* 当作社交空间，让学生互相认识。
* 当作课程公告栏(使用新闻讨论区并强制订阅)。
* 用来讨论课程内容和阅读材料。
* 用来继续课堂上没有讨论完的话题。
* 用作只有教师之间的讨论(使用隐藏的讨论区)
* 当作意见簿，收集助教及学生对于教材或教学方式的建议。
* 作为一对一的个别辅导区，让师生间私密地沟通 (在讨论区中使用独立小组，且让每人一组)。
* 作为"脑筋急转弯"的场所，让学生提出难题和各种解决方案。';
$string['modulename_link'] = 'mod/forum/view';
$string['modulenameplural'] = '讨论区';
$string['more'] = '更多';
$string['movedmarker'] = '（移动）';
$string['movethisdiscussionlabel'] = '移动当前话题到指定讨论区';
$string['movethisdiscussionto'] = '移动此话题到...';
$string['mustprovidediscussionorpost'] = '您必须提供要导出的话题 ID 或帖子 ID 。';
$string['myprofileotherdis'] = '讨论区话题';
$string['myprofileowndis'] = '我的讨论区话题';
$string['myprofileownpost'] = '我的讨论区帖子';
$string['namenews'] = '新闻通告';
$string['namenews_help'] = '课程新闻通告讨论区是一个特殊的新闻通告讨论区，在创建课程时自动创建。一门课程只能有一个新闻通告讨论区。只有教师和管理员才能发布新闻通告。 “最新通告”版块将显示最近的新闻通告。';
$string['namesocial'] = '公众讨论区';
$string['nameteacher'] = '教师讨论区';
$string['newforumposts'] = '新帖子';
$string['nextdiscussiona'] = '下一个话题：{$a}';
$string['nextuser'] = '保存更改并继续下一个用户';
$string['noattachments'] = '此帖没有附件';
$string['nodiscussions'] = '此讨论区还没有话题';
$string['nodiscussionsstartedby'] = '{$a}未发起任何话题';
$string['nodiscussionsstartedbyyou'] = '您还没有发起任何话题';
$string['noguestpost'] = '只有登录用户才能在此论坛上发帖';
$string['noguestpost:title'] = '登录以继续';
$string['noguestsubscribe'] = '抱歉，访客不能订阅。';
$string['noguesttracking'] = '很抱歉，访客不能设定跟踪选项。';
$string['nomorepostscontaining'] = '找不到包含“{$a}”的帖子';
$string['nonews'] = '还没有发布任何新闻通告。';
$string['noonecansubscribenow'] = '现在不允许订阅';
$string['nopermissiontosubscribe'] = '您没有查看讨论区订阅者的权限';
$string['nopermissiontoview'] = '您没有查看此帖子的权限';
$string['nopostforum'] = '很抱歉，您不能在此讨论区发帖';
$string['noposts'] = '没有帖子';
$string['nopostsmadebyuser'] = '{$a}没有发过帖子';
$string['nopostsmadebyyou'] = '您还没有发过任何帖子';
$string['noquestions'] = '此讨论区尚无人提问';
$string['nosubscribers'] = '还没有人订阅此讨论区';
$string['notexists'] = '话题已不存在';
$string['notgraded'] = '没有评分的';
$string['nothingnew'] = '{$a}没有新东西';
$string['notingroup'] = '抱歉，您需要加入小组才能看到此讨论区。';
$string['notinstalled'] = '讨论区模块没有安装';
$string['notlocked'] = '锁定';
$string['notpartofdiscussion'] = '此帖不是话题的一部分！';
$string['notrackforum'] = '不跟踪未读帖子';
$string['notsubscribed'] = '订阅';
$string['nousersmatch'] = '找不到给定条件的用户';
$string['noviewdiscussionspermission'] = '您没有查看此讨论区话题的权限';
$string['nowallsubscribed'] = '现在，您已订阅{$a}中的所有讨论区。';
$string['nowallunsubscribed'] = '现在，您已退订{$a}中的所有讨论区。';
$string['nowgradinguser'] = '现在评分 {$a}';
$string['nownotsubscribed'] = '{$a->name}将不再收到“{$a->forum}”的新帖通知';
$string['nownottracking'] = '{$a->name} 不再跟踪“{$a->forum}”。';
$string['nowsubscribed'] = '您将在论坛“{$a->forum}”中收到新帖子的通知';
$string['nowtracking'] = '{$a->name} 现在跟踪“{$a->forum}”。';
$string['numberofreplies'] = '回帖数：{$a}';
$string['numposts'] = '{$a} 条帖子';
$string['olderdiscussions'] = '旧话题';
$string['oldertopics'] = '旧话题';
$string['oldpostdays'] = '几天后视为已读';
$string['page-mod-forum-discuss'] = '讨论区模块话题树状页';
$string['page-mod-forum-view'] = '讨论区模块主页';
$string['page-mod-forum-x'] = '任意讨论区模块页面';
$string['parent'] = '显示父帖';
$string['parentofthispost'] = '此帖的父帖';
$string['permalink'] = '永久链接';
$string['permanentlinktoparentpost'] = '永久链接到此贴的父贴';
$string['permanentlinktopost'] = '永久链接到此贴';
$string['pindiscussion'] = '置顶此话题';
$string['pinupdated'] = '置顶选项已更新';
$string['pluginadministration'] = '讨论区管理';
$string['pluginname'] = '讨论区';
$string['postadded'] = '<p>您的帖子已成功添加。</p>
<p>如果需要，您可以在 {$a} 内修改它。</p>';
$string['postaddedsuccess'] = '您的帖子已成功添加。';
$string['postaddedtimeleft'] = '如果您想修改的话，您可以在{$a}内继续编辑。';
$string['postbymailsuccess'] = '您的回复“{$a->subject}”已成功发表：{$a->discussionurl}';
$string['postbymailsuccess_html'] = '您的回复 <a href="{$a->discussionurl}">{$a->subject}</a> 已成功发表。';
$string['postbyuser'] = '{$a->user}的{$a->post}';
$string['postincontext'] = '在场景中看此帖';
$string['postisprivatereply'] = '这是一个私人回复（具有查看私人回复功能的教师和其他用户也可以查看）';
$string['postmailinfo'] = '这是在 {$a} 中发布的消息的副本';
$string['postmailnow'] = '<p>此帖子将立即邮寄给所有讨论区订阅者。</ p>';
$string['postmailreply'] = '要回复，请单击此链接：{$a}';
$string['postmailsubject'] = '{$a->courseshortname}:  {$a->subject}';
$string['postrating1'] = '极端独立型';
$string['postrating2'] = '独立型与情景型兼备';
$string['postrating3'] = '极端情景型';
$string['posts'] = '帖子';
$string['postsfrom'] = '帖子从';
$string['postsmadebyuser'] = '{$a}的帖子';
$string['postsmadebyuserincourse'] = '{$a->fullname}在{$a->coursename}中的帖子';
$string['postsmadeincourse'] = '在 {$a} 发表的帖子';
$string['poststo'] = '帖子到';
$string['posttoforum'] = '发到讨论区';
$string['posttomygroups'] = '发布副本到所有组';
$string['posttomygroups_help'] = '发布此消息的副本到您有权访问的所有组。您无权访问的组的成员不会看到此帖子';
$string['postupdated'] = '您的帖子已更新';
$string['potentialsubscribers'] = '潜在订阅者';
$string['prevdiscussiona'] = '上一个话题：{$a}';
$string['previoususer'] = '保存更改并继续上一个用户';
$string['privacy:digesttypenone'] = '我们不保留与此讨论区的讨论区摘要类型偏好有关的任何数据。';
$string['privacy:digesttypepreference'] = '您已选择接收下列讨论区摘要类型：“ {$a->type}”。';
$string['privacy:discussionsubscriptionpreference'] = '您已经为此讨论区选择了下列话题订阅偏好：“{$a->preference}”';
$string['privacy:metadata:core_rating'] = '此讨论区用评价子系统来支持帖子的评价。';
$string['privacy:metadata:core_tag'] = '此论讨论区用标签子系统来支持帖子的标签。';
$string['privacy:metadata:forum_digests'] = '关于每个讨论区的摘要偏好的信息。';
$string['privacy:metadata:forum_digests:forum'] = '此论讨论区已订阅。';
$string['privacy:metadata:forum_digests:maildigest'] = '摘要偏好。';
$string['privacy:metadata:forum_digests:userid'] = '具有此摘要偏好的用户的 ID。';
$string['privacy:metadata:forum_discussion_subs'] = '有关订阅各个讨论区话题的信息';
$string['privacy:metadata:forum_discussion_subs:discussionid'] = '订阅的话题的 ID。';
$string['privacy:metadata:forum_discussion_subs:preference'] = '此订阅的开始时间。';
$string['privacy:metadata:forum_discussion_subs:userid'] = '具有话题订阅的用户的 ID。';
$string['privacy:metadata:forum_discussions'] = '有关用户创建的各个讨论区话题的信息';
$string['privacy:metadata:forum_discussions:assessed'] = 'TODOD—这个字段存储什么';
$string['privacy:metadata:forum_discussions:name'] = '话题的名称，由作者选择。';
$string['privacy:metadata:forum_discussions:timemodified'] = '话题的最后修改时间。';
$string['privacy:metadata:forum_discussions:userid'] = '开启此话题的用户的 ID';
$string['privacy:metadata:forum_discussions:usermodified'] = '以某种方式最后修改话题的用户的 ID。';
$string['privacy:metadata:forum_grades'] = '讨论区成绩数据';
$string['privacy:metadata:forum_grades:forum'] = '已评分的讨论区';
$string['privacy:metadata:forum_grades:grade'] = '已取得的成绩';
$string['privacy:metadata:forum_grades:userid'] = '已评分的用户';
$string['privacy:metadata:forum_posts'] = '关于每个讨论区的摘要偏好的信息。';
$string['privacy:metadata:forum_posts:created'] = '此帖子发表的时间。';
$string['privacy:metadata:forum_posts:discussion'] = '此帖子所在的话题。';
$string['privacy:metadata:forum_posts:message'] = '此帖子的正文。';
$string['privacy:metadata:forum_posts:modified'] = '此帖子最后修改的时间。';
$string['privacy:metadata:forum_posts:parent'] = '已回复的父帖。';
$string['privacy:metadata:forum_posts:privatereplyto'] = '发送此回复的用户的ID。';
$string['privacy:metadata:forum_posts:subject'] = '此帖子的主题。';
$string['privacy:metadata:forum_posts:totalscore'] = '此帖子的正文。';
$string['privacy:metadata:forum_posts:userid'] = '撰写此帖子的用户的 ID。';
$string['privacy:metadata:forum_queue'] = '将以摘要形式邮寄的帖子的临时日志';
$string['privacy:metadata:forum_queue:discussionid'] = '讨论区话题 ID';
$string['privacy:metadata:forum_queue:postid'] = '讨论区帖子 ID';
$string['privacy:metadata:forum_queue:timemodified'] = '原帖子的修改时间';
$string['privacy:metadata:forum_queue:userid'] = '此帖子需要通知的用户';
$string['privacy:metadata:forum_read'] = '有关用户已阅读哪些帖子的信息。';
$string['privacy:metadata:forum_read:discussionid'] = '帖子所在的话题。';
$string['privacy:metadata:forum_read:firstread'] = '‎第一次阅读此帖。';
$string['privacy:metadata:forum_read:lastread'] = '‎最近一次阅读此帖。 ‎‎';
$string['privacy:metadata:forum_read:postid'] = '读过的帖子。';
$string['privacy:metadata:forum_read:userid'] = '此记录所关联的用户的 ID。';
$string['privacy:metadata:forum_subscriptions'] = '有关用户已订阅哪些讨论区的信息。';
$string['privacy:metadata:forum_subscriptions:forum'] = '已订阅的讨论区。';
$string['privacy:metadata:forum_subscriptions:userid'] = '此讨论区订阅所关联的用户的 ID。';
$string['privacy:metadata:forum_track_prefs'] = '有关用户选择要跟踪帖子阅读的讨论区的信息。';
$string['privacy:metadata:forum_track_prefs:forumid'] = '‎已启用阅读跟踪的讨论区。 ‎‎';
$string['privacy:metadata:forum_track_prefs:userid'] = '与此讨论区跟踪偏好相关的用户 ID。';
$string['privacy:metadata:preference:autosubscribe'] = '回复其中的帖子时是否订阅话题。';
$string['privacy:metadata:preference:forum_discussionlistsortorder'] = '话题列表的排序顺序偏好';
$string['privacy:metadata:preference:maildigest'] = '站点范围的邮件摘要偏好';
$string['privacy:metadata:preference:markasreadonnotification'] = '当收到讨论区帖子消息时，是否将其标记为已读。';
$string['privacy:metadata:preference:trackforums'] = '是否启用阅读跟踪。';
$string['privacy:postwasread'] = '此帖首次阅读是{$a->first stread}，最近阅读是{$a->lastread}。';
$string['privacy:readtrackingdisabled'] = '您选择不跟踪您在此讨论区中阅读的帖子。';
$string['privacy:request:delete:discussion:name'] = '应作者的要求删除';
$string['privacy:request:delete:post:message'] = '此贴的内容在作者的要求下删除了。';
$string['privacy:request:delete:post:subject'] = '应作者的要求删除';
$string['privacy:subscribedtoforum'] = '您已订阅此讨论区。';
$string['privatereply'] = '私下回复';
$string['privatereply_help'] = '当您私下回复时，您的帖子也会对能够查看私密回复的用户（例如教师）可见。';
$string['processingdigest'] = '正在处理用户 {$a} 的邮件摘要';
$string['processingpost'] = '正在处理帖子 {$a}';
$string['prune'] = '分割';
$string['prunediscussion'] = '拆分讨论';
$string['prunedpost'] = '此贴开启了一个新话题';
$string['pruneheading'] = '分割此话题并将此帖移至一个新话题';
$string['qandaforum'] = '提问与解答讨论区';
$string['qandanotify'] = '这是一个问答讨论区。要查看其他回复，您必须先发布您的回复。';
$string['re'] = '回复：';
$string['readtherest'] = '阅读剩余部分';
$string['removeallforumtags'] = '移除所有讨论区标签';
$string['removefromfavourites'] = '取消标星此话题';
$string['replies'] = '回帖';
$string['repliesmany'] = '迄今有 {$a} 个回帖';
$string['repliesone'] = '迄今有 {$a} 个回帖';
$string['reply'] = '回复';
$string['reply_handler'] = '通过电子邮件回复帖子';
$string['reply_handler_name'] = '回复帖子';
$string['replyauthorself'] = '{$a} (您)';
$string['replyforum'] = '回复讨论区';
$string['replyingtoauthor'] = '回复{$a}...';
$string['replyplaceholder'] = '写您的回复...';
$string['replypostdiscussion'] = '回帖';
$string['replytopostbyemail'] = '您可以通过电子邮件回复。';
$string['replytouser'] = '在回复中使用电子邮件地址';
$string['resetdigests'] = '删除所有用户讨论区摘要偏好';
$string['resetforums'] = '删除帖子从';
$string['resetforumsall'] = '删除所有帖子';
$string['resetsubscriptions'] = '删除所有讨论区订阅';
$string['resettrackprefs'] = '删除所有讨论区跟踪偏好';
$string['rssarticles'] = 'RSS最近文章数';
$string['rssarticles_help'] = '此设置指定要包含在 RSS feed 中的文章（话题或帖子）数。一般在5到20之间。';
$string['rsssubscriberssdiscussions'] = '话题的 RSS feed';
$string['rsssubscriberssposts'] = '帖子的 RSS feed';
$string['rsstype'] = '此活动的 RSS feed';
$string['rsstype_help'] = '若要为此活动启用RSS feed，请选择要包含在 feed 中的话题或帖子。';
$string['rsstypedefault'] = 'RSS feed 类型';
$string['search'] = '搜索';
$string['search:activity'] = '讨论区 - 活动信息';
$string['search:post'] = '讨论区 - 帖子';
$string['searchdatefrom'] = '帖子必须在此时间之后发布';
$string['searchdateto'] = '帖子必须在此时间之前发布';
$string['searchforumintro'] = '请在以下一个或多个字段中输入搜索词：';
$string['searchforums'] = '搜索讨论区';
$string['searchfullwords'] = '这些词应当作为整词出现';
$string['searchnotwords'] = '不应包含这些字';
$string['searcholderposts'] = '搜索旧帖子...';
$string['searchphrase'] = '这个词组必须出现在帖子中';
$string['searchresults'] = '搜索结果';
$string['searchsubject'] = '这些字应该在主题中';
$string['searchtags'] = '被标以';
$string['searchuser'] = '此名字要和作者匹配';
$string['searchuserid'] = '作者的 Moodle ID';
$string['searchusers'] = '搜索用户';
$string['searchwhichforums'] = '选择搜索哪个讨论区';
$string['searchwords'] = '这些字可以出现在帖子的任何位置';
$string['seeallposts'] = '查看此用户发表的所有帖子';
$string['sendstudentnotificationsdefault'] = '“通知学生”的默认设置';
$string['sendstudentnotificationsdefault_help'] = '为评分表单上的“通知学生”复选框设置默认值。';
$string['sendstudentnotificationsno'] = '否';
$string['sendstudentnotificationsyes'] = '是，发送通知给学生';
$string['settings'] = '设置';
$string['shortpost'] = '短帖';
$string['showgraderpanel'] = '显示评分人面板';
$string['showingcountoftotaldiscussions'] = '话题列表。显示 {$a->count} /{$a->total}个话题';
$string['showmoreusers'] = '显示更多用户';
$string['showpreviousrepliescount'] = '显示先前的回帖({$a})';
$string['showsubscribers'] = '显示/编辑当前订阅者';
$string['showusersearch'] = '显示用户搜索';
$string['singleforum'] = '单个简单话题';
$string['smallmessage'] = '{$a->user}发布在{$a->forumname}';
$string['smallmessagedigest'] = '讨论区摘要包含{$a}条消息';
$string['starredonly'] = '只搜索标星话题';
$string['startedby'] = '发起人';
$string['subject'] = '主题';
$string['subplugintype_forumreport'] = '论坛报告';
$string['subplugintype_forumreport_plural'] = '论坛报告';
$string['subscribe'] = '订阅讨论区';
$string['subscribeall'] = '将每个人订阅此讨论区';
$string['subscribed'] = '订阅';
$string['subscribediscussion'] = '订阅此话题';
$string['subscribeenrolledonly'] = '抱歉，只有已选课用户才能订阅新帖通知。';
$string['subscribenone'] = '将每个人退订此讨论区';
$string['subscribers'] = '订阅者';
$string['subscriberstowithcount'] = '订阅者“{$a->name}”（共{$a->count}人）';
$string['subscribestart'] = '此讨论区有新帖时，通知我';
$string['subscribestop'] = '此讨论区有新帖时，不要通知我';
$string['subscription'] = '订阅';
$string['subscription_help'] = '如果您订阅了一个讨论区，则意味着您将收到有关新讨论区帖子的通知。通常，您可以选择是否订阅，不过有时会强制订阅，以便每个人都可以收到通知。';
$string['subscriptionandtracking'] = '订阅和跟踪';
$string['subscriptionauto'] = '自动订阅';
$string['subscriptiondisabled'] = '禁止订阅';
$string['subscriptionforced'] = '强制订阅';
$string['subscriptionmode'] = '订阅模式';
$string['subscriptionmode_help'] = '当用户订阅了讨论区时，他们将会收到讨论区帖子通知。 有四种订阅模式选项：

* 可选订阅 - 用户可以选择是否订阅
* 强制订阅 - 每个人都被订阅，而且不能退订
* 自动订阅 - 每个人最初都被订阅，但是随时可以选择是否退订
* 禁止订阅 - 不允许订阅';
$string['subscriptionmodeconfirm'] = '您确定要将订阅模式更改为 {$a} 吗？';
$string['subscriptionoptional'] = '可选订阅';
$string['subscriptions'] = '订阅';
$string['tagarea_forum_posts'] = '讨论区帖子';
$string['tagsdeleted'] = '讨论区标签已删除';
$string['thisforumhasduedate'] = '此讨论区发帖的到期日期为{$a}。';
$string['thisforumisdue'] = '此讨论区发帖的到期日期为{$a}。';
$string['thisforumisthrottled'] = '此讨论区有规定周期内发帖数量的限制，它被设置为 {$a->blockperiod} 内最多发帖 {$a->blockafter} 条。';
$string['timed'] = '定时';
$string['timeddiscussion'] = '定时话题';
$string['timedhidden'] = '定时状态：对学生隐藏';
$string['timedposts'] = '定时帖';
$string['timedvisible'] = '定时状态：对所有用户可见';
$string['timestartenderror'] = '显示结束日期不能早于开始日期';
$string['togglediscussionmenu'] = '切换话题菜单';
$string['togglefullscreen'] = '切换全屏';
$string['togglesettingsdrawer'] = '切换设置抽屉';
$string['trackforum'] = '跟踪未读帖子';
$string['tracking'] = '跟踪';
$string['trackingoff'] = '关闭';
$string['trackingon'] = '强制';
$string['trackingoptional'] = '可选';
$string['trackingtype'] = '阅读跟踪';
$string['trackingtype_help'] = '阅读跟踪使参与者能够通过突出显示任何新帖子来检查他们尚未看到的帖子。

如果设置为可选，参与者可以选择是打开还是关闭论坛的跟踪。（用户还必须在其论坛首选项中启用论坛跟踪。

如果站点管理员启用了“允许强制读取跟踪”，则还有另一个选项可用 - 强制。这意味着无论用户的论坛偏好如何，跟踪始终处于开启状态。';
$string['trackreadposts_header'] = '讨论区跟踪';
$string['unlockdiscussion'] = '解锁此话题';
$string['unpindiscussion'] = '取消置顶此话题';
$string['unread'] = '未读';
$string['unreadpost'] = '未读帖子';
$string['unreadposts'] = '未读帖子';
$string['unreadpostsnumber'] = '{$a}条未读帖子';
$string['unreadpostsone'] = '1 条未读帖子';
$string['unsubscribe'] = '退订讨论区';
$string['unsubscribeall'] = '退订所有讨论区';
$string['unsubscribeallconfirm'] = '您目前订阅了{$a->forums}个讨论区和{$a->discussions}个话题。您真的要退订所有讨论区和话题，并禁用话题自动订阅吗?';
$string['unsubscribeallconfirmdiscussions'] = '您目前订阅了{$a->discussion}个话题。您真的要退订所有话题并禁用话题自动订阅吗?';
$string['unsubscribeallconfirmforums'] = '您目前订阅了{$a->forums}个讨论区。您真的要退订所有讨论区并禁用话题自动订阅吗?';
$string['unsubscribealldone'] = '所有可选的讨论区订阅均已移除。您仍将收到来自强制订阅的讨论区的通知。要管理讨论区通知，请转到“我的个人档案“设置中的“消息发送”。';
$string['unsubscribeallempty'] = '您没有订阅任何讨论区。要禁用此服务器的所有通知，请转到“我的个人档案”设置中的“消息发送”。';
$string['unsubscribed'] = '退订的';
$string['unsubscribediscussion'] = '退订此话题';
$string['unsubscribediscussionlink'] = '退订话题： {$a}';
$string['unsubscribelink'] = '退订讨论区：{$a}';
$string['unsubscribeshort'] = '退订';
$string['useexperimentalui'] = '使用试验性嵌套话题视图';
$string['usermarksread'] = '手动消息阅读标记';
$string['usernavigation'] = '用户导航';
$string['usersforumposts'] = '用户的讨论区帖子';
$string['viewalldiscussions'] = '查看所有话题';
$string['viewconversation'] = '查看话题';
$string['viewgrades'] = '查看成绩';
$string['viewparentpost'] = '查看父贴';
$string['viewthediscussion'] = '查看话题';
$string['warnafter'] = '发帖警告阈值';
$string['warnafter_help'] = '当学生将达到给定周期内允许的最大发帖数时，会被警告。此项设置指定发多少帖子后会被警告。有mod/forum:postwithoutthrottling权限的用户不受此限制。';
$string['warnformorepost'] = '警告！这个讨论区中有多个话题-使用最新的';
$string['yournewquestion'] = '您的新问题';
$string['yournewtopic'] = '您的新话题';
$string['yourreply'] = '您的回复';
