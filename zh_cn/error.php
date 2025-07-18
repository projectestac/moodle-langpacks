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
 * Strings for component 'error', language 'zh_cn', version '4.4'.
 *
 * @package     error
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['TODO'] = 'TODO';
$string['activityisscheduledfordeletion'] = '正在删除活动中...';
$string['agedigitalconsentmapinvalidage'] = '"{$a}" 不是有效的年龄值。';
$string['agedigitalconsentmapinvalidcomma'] = '"{$a}" 有多于或少于一个的逗号分隔符。';
$string['agedigitalconsentmapinvalidcountry'] = '"{$a}" 不是有效的国家值。';
$string['agedigitalconsentmapinvaliddefault'] = '找不到默认(*)值。';
$string['agelocationverificationdisabled'] = '年龄和地点验证已禁用';
$string['alreadyloggedin'] = '您已经以{$a}的身份登录。如果想登录为另一个用户，您必须先退出。';
$string['authnotexisting'] = '认证插件不存在';
$string['backupcontainexternal'] = '此备份文件保护未在本地配置的Moodle网络主机';
$string['backuptablefail'] = '设置备份表不成功！';
$string['blockcannotconfig'] = '此版块不支持全局配置';
$string['blockcannotinistantiate'] = '实例化版块对象时发现问题';
$string['blockcannotread'] = '无法读取blockid = {$a}的数据';
$string['blockdoesnotexist'] = '此版块不存在';
$string['blockdoesnotexistonpage'] = '页面（{$a->url}）中没有这个版块（id={$a->instanceid}）';
$string['blocknameconflict'] = '名字冲突：版块{$a->name}与已存在的版块{$a->conflict}重名！';
$string['callbackrejectcomment'] = '评论回调函数拒绝此评论。';
$string['cannotaddcoursemodule'] = '无法新建课程模块';
$string['cannotaddcoursemoduletosection'] = '无法将此新课程模块添加到该小节';
$string['cannotaddmodule'] = '{$a}模块无法被添加到模块列表！';
$string['cannotaddnewmodule'] = '无法添加新模块{$a}';
$string['cannotaddrss'] = '您没有添加rss种子的权限';
$string['cannotaddthisblocktype'] = '您不能为此页添加一个 {$a} 版块。';
$string['cannotassignrole'] = '无法在课程中分配角色';
$string['cannotassignrolehere'] = '您没有在此场景（{$a->context}）下分配分配角色（{$a->roleid}）的权限';
$string['cannotassignselfasparent'] = '不能指定自己为父亲！';
$string['cannotcallscript'] = '您不能这样调用这个脚本';
$string['cannotcallusgetselecteduser'] = '如果多重选择设为true，您就不能调用user_selector::get_selected_user';
$string['cannotcreatebackupdir'] = '不能创建backupdata文件夹。需要网站管理员修正文件访问权限';
$string['cannotcreatecategory'] = '此类别未被插入';
$string['cannotcreatedboninstall'] = '<p>无法建立数据库</p>
<p>指定数据库不存在。使用者没有权限建立数据库</p>
<p>网站管理员需查明数据库状态.</p>';
$string['cannotcreategroup'] = '创建小组出错';
$string['cannotcreatelangbase'] = '错误：不能创建基础lang目录';
$string['cannotcreatelangdir'] = '无法创建lang目录。';
$string['cannotcreateorfindstructs'] = '查找或建立课程小节结构时出错';
$string['cannotcreatepopupwin'] = '未定义元素，不能创建弹出窗口';
$string['cannotcreatesitedir'] = '不能创建网站文件夹。需要网站管理员修正文件访问权限';
$string['cannotcreatetempdir'] = '无法创建temp目录。';
$string['cannotcreateuploaddir'] = '无法创建上传文件夹。需要网站管理员修正文件权限。';
$string['cannotcustomisefiltersblockuser'] = '您不能在用户或版块场景中自定义过滤器设置。';
$string['cannotdeletebackupids'] = '无法删除以前备份的ID';
$string['cannotdeletecategorycourse'] = '课程“{$a}”删除失败。';
$string['cannotdeletecategoryquestions'] = '无法从类别\'{$a}\'删除题目';
$string['cannotdeletecourse'] = '您没有删除此课程的权限';
$string['cannotdeletecustomfield'] = '删除自定义字段数据出错';
$string['cannotdeletedir'] = '不能删除（{$a}）';
$string['cannotdeletefile'] = '无法删除此文件';
$string['cannotdeleterole'] = '它不能被删除，因为（$a）';
$string['cannotdeleterolewithid'] = '无法删除ID为{$a}的角色';
$string['cannotdeletethisrole'] = '您不能删除这个角色，可能因为它是系统使用的，或者它是最后一个拥有管理员权限的角色。';
$string['cannotdisableformat'] = '不能禁用默认格式';
$string['cannotdownloadcomponents'] = '无法下载组件';
$string['cannotdownloadlanguageupdatelist'] = '无法从 download.moodle.org 上下载语言列表的更新。';
$string['cannotdownloadzipfile'] = '无法下载 ZIP 文件。';
$string['cannoteditcomment'] = '这条评论不是您的，不能编辑';
$string['cannoteditcommentexpired'] = '你不能编辑它，时间截止了';
$string['cannoteditpostorblog'] = '你不能发表或编辑博客';
$string['cannoteditsiteform'] = '您不能用此表单编辑站点课程';
$string['cannotedituserpreferences'] = '不能编辑此用户的偏好选项';
$string['cannotedityourprofile'] = '对不起，您不能编辑自己的个人资料';
$string['cannotexecduringupgrade'] = '升级途中无法执行';
$string['cannotfindcategory'] = '无法从数据库中找到ID-{$a}的类别记录';
$string['cannotfindcomponent'] = '找不到组件';
$string['cannotfindcontext'] = '无法找到上下文';
$string['cannotfindcourse'] = '找不到课程';
$string['cannotfinddocs'] = '找不到“{$a}”语言的文档文件';
$string['cannotfindgradeitem'] = '找不到成绩项';
$string['cannotfindgroup'] = '无法找到群组';
$string['cannotfindhelp'] = '找不到“{$a}”语言的帮助文件';
$string['cannotfindinfo'] = '找不到“{$a}”的信息';
$string['cannotfindlang'] = '找不到“{$a}”语言包！';
$string['cannotfindteacher'] = '无法找到教师';
$string['cannotfinduser'] = '无法找到名为"{$a}"的用户';
$string['cannotgeoplugin'] = '不能连接到 http://www.geoplugin.com 的 geoPlugin 服务器，请检查代理设置或最好安装 MaxMind GeoLite City 数据文件';
$string['cannotgetblock'] = '无法从数据库中检索到块';
$string['cannotgetcats'] = '无法得到分类记录';
$string['cannotgetdata'] = '无法获取数据';
$string['cannotgradeuser'] = '无法为此用户评分';
$string['cannothaveparentcate'] = '课程分类不能有父分类！';
$string['cannotimport'] = '导入错误';
$string['cannotimportformat'] = '对不起，还未能实现导入此种格式！';
$string['cannotimportgrade'] = '成绩导入错误';
$string['cannotinsertgrade'] = '无法插入成绩项，因为未指定课程ID！';
$string['cannotinsertrate'] = '无法插入新评分（{$a->id} = {$a->rating}）';
$string['cannotinsertrecord'] = '不能插入新记录，ID：{$a}';
$string['cannotmailconfirm'] = '发送密码更改确认邮件时出现错误';
$string['cannotmanualctrack'] = '活动未提供人工跟踪学习进度功能';
$string['cannotmapfield'] = '发现映射冲突 - 两个字段映射到相同的成绩项 {$a}';
$string['cannotmarktopic'] = '不能标记此课程的此节';
$string['cannotmigratedatacomments'] = '不能迁移数据模块的评论';
$string['cannotmodulename'] = '无法在导航栏中获取模块名称';
$string['cannotmoduletype'] = '无法再导航栏中获取模块类型';
$string['cannotmovecategory'] = '无法移动分类';
$string['cannotmovecourses'] = '无法将课程从它们所在的分类移动到另一个分类。';
$string['cannotmoverolewithid'] = '不能移动ID为{$a}的角色';
$string['cannotopencsv'] = '不能打开CSV文件';
$string['cannotopenfile'] = '打开文件({$a})失败';
$string['cannotopenforwrit'] = '不能打开要写入的文件：{$a}';
$string['cannotopentemplate'] = '不能打开模板文件({$a})';
$string['cannotopenzip'] = '不能打开zip文件，可能由于zip扩展在64位操作系统的bug';
$string['cannotoverridebaserole'] = '不能修改基本角色的权限';
$string['cannotoverriderolehere'] = '您不可以在本场景（{$a->context}）中修改此角色（id = {$a->roleid}）';
$string['cannotreadfile'] = '读取文件({$a})失败';
$string['cannotreadtmpfile'] = '读取临时文件错误';
$string['cannotreaduploadfile'] = '无法读取上传的文件';
$string['cannotremovefrommeta'] = '无法从此元课程删除选择的课程';
$string['cannotreprocessgrades'] = '无法对活动{$a}处理成绩';
$string['cannotresetguestpwd'] = '你不能重置访客密码';
$string['cannotresetmail'] = '重置您的密码并发送邮件时出现错误';
$string['cannotresetthisrole'] = '不能重置此角色';
$string['cannotrestore'] = '发生错误，无法完成恢复操作';
$string['cannotrestoreadminorcreator'] = '要恢复为新课程，您必须是课程创建者或管理用户！';
$string['cannotrestoreadminoredit'] = '您需要是有编辑权的教师或者管理员用户才能恢复到所选的课程！';
$string['cannotsaveagreement'] = '无法保存您的协议';
$string['cannotsaveblock'] = '保存版块配置时发生错误';
$string['cannotsavecomment'] = '无法保存评论';
$string['cannotsavedata'] = '无法保存数据';
$string['cannotsavefile'] = '无法保存文件“{$a}”！';
$string['cannotsavemd5file'] = '无法保存 md5 文件';
$string['cannotsavezipfile'] = '无法保存 ZIP 文件';
$string['cannotservefile'] = '由于服务器配置问题，无法提供文件';
$string['cannotsetparentforcatoritem'] = '无法为类别或课程项设置父类别！';
$string['cannotsetpassword'] = '无法设置用户密码！';
$string['cannotsetprefgrade'] = '不能设置此成绩类别的参数';
$string['cannotsettheme'] = '无法设置主题！';
$string['cannotsetupblock'] = '建立版块表失败！';
$string['cannotsetupcapformod'] = '无法为{$a}设置权限';
$string['cannotsetupcapforplugin'] = '无法为{$a}设置权限';
$string['cannotshowhidecoursesincategory'] = '无法在类别{$a}中显示或隐藏课程。';
$string['cannotsignup'] = '您不能创建新账户因为您已经以{$a}的身份登录了。';
$string['cannotswitcheditmodeon'] = '无法打开编辑模式';
$string['cannotunassigncap'] = '无法从角色{$a->role}取消已废弃的权限{$a->cap}';
$string['cannotunassignrolefrom'] = '无法取消此用户id为{$a}的角色';
$string['cannotunzipfile'] = '无法解压文件';
$string['cannotupdatemod'] = '无法更新{$a}';
$string['cannotupdatepasswordonextauth'] = '更新外部认证（{$a}）的密码失败。详见服务器日志。';
$string['cannotupdateprofile'] = '更新用户记录发生错误';
$string['cannotupdaterecord'] = '不能更新记录，ID：{$a}';
$string['cannotupdaterss'] = '无法更新RSS';
$string['cannotupdatesubcourse'] = '无法更新子课程';
$string['cannotupdateusermsgpref'] = '无法更新用户消息偏好';
$string['cannotupdateuseronexauth'] = '更新外部认证（{$a}）的密码失败。详见服务器日志。';
$string['cannotuploadfile'] = '上传文件错误';
$string['cannotuseadmin'] = '您必须是管理员才能使用这个页面';
$string['cannotuseadminadminorteacher'] = '您必须是管理员或教师才能使用这个页面';
$string['cannotusepage'] = '只有管理员和教师才能使用这个页面';
$string['cannotusepage2'] = '对不起，您可能无法浏览此页';
$string['cannotviewcategory'] = '您无权查看此课程列表。';
$string['cannotviewprofile'] = '您不能查看该用户的个人资料';
$string['cannotviewreport'] = '您不能查看该报告';
$string['cannotwritefile'] = '不能向文件({$a})写入数据';
$string['categoryerror'] = '类别错误';
$string['categoryidnumbertaken'] = 'ID号码已被另一个分类使用了';
$string['categorynamerequired'] = '分类名称是必须的';
$string['categorytoolong'] = '类别名称太长';
$string['commentmisconf'] = '评论ID配置错误';
$string['componentisuptodate'] = '组件已经是最新的了';
$string['confirmationnotenabled'] = '本站未启用用户确认';
$string['confirmsesskeybad'] = '很抱歉，您的会话密钥不能确保您完成当前的动作。这个安全功能防止了人们无意或恶意的以您的身份运行重要功能。请确定您真的想要执行这个功能。';
$string['contenttypenotfound'] = '“{$a}”内容库类型不存在或不能识别。';
$string['contentvisibilitynotfound'] = '值为“{$a}”的内容可见性不存在或未被识别。';
$string['couldnotassignrole'] = '当试图给您分配角色时，发生了一个严重但未说明原因的错误';
$string['couldnotupdatenoexistinguser'] = '无法更新用户——该用户不存在';
$string['couldnotverifyagedigitalconsent'] = '验证数字年龄合规时发生错误。<br/>请联系管理员。';
$string['countriesphpempty'] = '错误：语言包 {$a} 中的 countries.php 文件缺失或内容为空。';
$string['coursedoesnotbelongtocategory'] = '这门课程不属于此类别';
$string['courseformatnotfound'] = '课程格式’{$a}‘不存在，或不可识别';
$string['coursegroupunknown'] = '未指定与组 {$a} 关联的课程';
$string['courseidnotfound'] = '此课程ID不存在';
$string['courseidnumbertaken'] = 'ID号已被另一个课程({$a})使用了。';
$string['coursemisconf'] = '课程配置错误';
$string['courserequestdisabled'] = '抱歉，请求课程功能已经被管理员禁用';
$string['csvcolumnduplicates'] = '检测到重复列';
$string['csvemptyfile'] = 'CSV 文件为空';
$string['csvfewcolumns'] = '没有足够的列，请检查分隔符设置';
$string['csvfileerror'] = 'CSV 文件的格式有问题。请检查标题和列的数量是否匹配，以及分隔符和文件编码是否正确。{$a}';
$string['csvinvalidcols'] = '<b>无效 CSV 文件：</b>第一行必须是"字段标题"并且该文件须符合<br />"扩展字段/逗号分隔"<br />或<br />"带CAVV结果代码的扩展字段/逗号分隔"的类型。';
$string['csvinvalidcolsnum'] = '无效的CSV文件 － 每一行必须包含49或70个字段';
$string['csvloaderror'] = '加载CSV文件时发生错误：{$a}';
$string['csvnodata'] = '无效的 CSV 文件 - CSV 文件有标题但不包含任何数据。';
$string['csvweirdcolumns'] = '无效的 CSV 文件格式-列数不连续';
$string['dbconnectionfailed'] = '<p>错误：数据库连接失败</p>
<p>可能是数据库过载或是没有正确运行</p>
<p>网站管理员还应该检查config.php文件里数据库详细配置是否正确</p>';
$string['dbdriverproblem'] = '<p>错误：检测出数据库驱动有问题</p><p>网站管理员应该验证服务器配置
</p><p>{$a}</p>';
$string['dbsessionbroken'] = '检测到严重的数据库会话错误。<br /><br />请通知服务器管理员。';
$string['dbsessionhandlerproblem'] = '建立数据库会话失败。请通知服务器管理员。';
$string['dbsessionmysqlpacketsize'] = '检测到严重的数据库会话错误。请通知服务器管理员。这个问题最可能是由MySQL设置里的max_allowed_packet值过小引起的.';
$string['dbupdatefailed'] = '数据库更新失败';
$string['ddldependencyerror'] = '取消';
$string['ddlexecuteerror'] = 'DDL sql执行错误';
$string['ddlfieldalreadyexists'] = '字段“{$a}”已经存在';
$string['ddlfieldnotexist'] = '表 "{$a->tablename}"中没有字段 "{$a->fieldname}" ';
$string['ddltablealreadyexists'] = '表“{$a}”已经存在';
$string['ddltablenotexist'] = '表 "{$a}" 不存在';
$string['ddlunknownerror'] = '未知DDL库错误';
$string['ddlxmlfileerror'] = 'XML数据库文件有错误';
$string['ddsequenceerror'] = '表"{$a}"定义不正确：只能有一个自动列，而且它必须定义为键。';
$string['destinationcmnotexit'] = '目标课程模块不存在';
$string['detectedbrokenplugin'] = '插件 {$a} 有缺陷或已过时;对不起，您无法继续。';
$string['dmlexceptiononinstall'] = '<p>发生了一个数据库错误[{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['dmlparseexception'] = '解析 SQL 查询时出错';
$string['dmlreadexception'] = '读取数据库时发生错误';
$string['dmltransactionexception'] = '数据库事务错误';
$string['dmlwriteexception'] = '写入数据库时发生错误';
$string['dndmaxbytes'] = '文件太大。允许的最大大小为 {$a->size}';
$string['dndread'] = '读取文件时出错';
$string['dndunkownfile'] = '不支持此文件类型';
$string['dndupload'] = '上传文件时出现未知错误';
$string['downgradedcore'] = '错误！！您使用的代码版本和创建现在数据库的版本比起来已经老掉牙了！';
$string['downloadedfilecheckfailed'] = '下载文件检查失败';
$string['duplicatefieldname'] = '发现重名文件"{$a}"';
$string['duplicatenosupport'] = '“{$a->modname}”活动无法复制，因为{$a->modtype}模块不支持备份和恢复。';
$string['duplicateparaminsql'] = '错误：查询中出现重复的参数名';
$string['duplicaterolename'] = '同名角色已经存在！';
$string['duplicateroleshortname'] = '使用这个简称的角色已经存在！';
$string['duplicateusername'] = '重复用户名 - 跳过记录';
$string['editedpagenotfound'] = '系统无法确定您所在的页面。请刷新页面，然后重试。';
$string['emailfail'] = '邮件发送失败';
$string['encryption_decryptfailed'] = '解密失败';
$string['encryption_encryptfailed'] = '加密失败';
$string['encryption_invalidkey'] = '无效的密钥';
$string['encryption_keyalreadyexists'] = '密钥已存在';
$string['encryption_nokey'] = '未找到密钥';
$string['encryption_wrongmethod'] = '数据与支持的加密方法不匹配';
$string['enddatebeforestartdate'] = '课程结束日期必须晚于开始日期';
$string['error'] = '发生了错误';
$string['error_question_answers_missing_in_db'] = '无法从question_answer数据表中找到"{$a->answer}"的答案。发生此现象的原因，是将备份文件中的试题以编号 {$a->filequestionid} 恢复，面它已经和数据库中编号{$a->dbquestionid}的试题相匹配。';
$string['errorcleaningdirectory'] = '在清空目录“{$a}”时发生错误';
$string['errorcopyingfiles'] = '在复制文件时发生错误';
$string['errorcreatingdirectory'] = '在创建目录“{$a}”时发生错误';
$string['errorcreatingfile'] = '在创建文件“{$a}”时发生错误';
$string['errorcreatingrole'] = '创建角色发生错误';
$string['errorfetchingrssfeed'] = '获取RSS种子时出错。';
$string['erroronline'] = '发生错误于第 {$a} 行';
$string['erroroutput'] = '输出出错，因此禁用自动重定向。';
$string['errorparsingxml'] = '解析XML出现错误：{$a->errorstring}，发生在行 {$a->errorline}，字符 {$a->errorchar} ';
$string['errorprocessingarchive'] = '处理存档文件时出错';
$string['errorreadingfile'] = '在读取文件“{$a}”时发生错误';
$string['errorsavingrequest'] = '在保存您的请求时发生了错误。';
$string['errorsettinguserpref'] = '设置用户参数时发生错误';
$string['errorunzippingfiles'] = '在解压文件时发生错误';
$string['expiredkey'] = '过期的密钥';
$string['externalauthpassworderror'] = '外部认证时密码非空';
$string['externalfilenolocation'] = '外部文件没有位置路径';
$string['failtoloadblocks'] = '数据库中注册了一个或多个版块，但是加载它们失败！';
$string['fieldrequired'] = '“{$a}”是必需的字段';
$string['fileexists'] = '文件存在';
$string['filemismatch'] = '非核心文件名不匹配。文件"{$a->current}"应为{$a->file}';
$string['filenotfound'] = '很抱歉，未能找到请求的文件';
$string['filenotreadable'] = '文件不可读';
$string['filterdoesnothavelocalconfig'] = '过滤器{$a}不允许本地配置。';
$string['filternotactive'] = '过滤器 {$a}目前处于非激活状态';
$string['filternotenabled'] = '过滤器未启用！';
$string['filternotinstalled'] = '目前尚未安装过滤器{$a}';
$string['forumblockingtoomanyposts'] = '您连续发贴数目过多，超过了此讨论区的限制。';
$string['functionalityremoved'] = '您正在尝试访问已删除的功能。';
$string['generalexceptionmessage'] = '异常 - {$a}';
$string['gradecantregrade'] = '成绩计算过程中出现错误：{$a}';
$string['gradepubdisable'] = '成绩发布已禁用';
$string['gradesneedregrading'] = '这些课程成绩需要重新计算';
$string['groupalready'] = '用户已经属于组 {$a}';
$string['groupexistforcourse'] = '课程中组“{$a}”已经存在';
$string['groupexistforcoursewithidnumber'] = '{$a->problemgroup}：该课程已经有编号为 “{$a->idnumber}” 的小组“{$a->name}”';
$string['grouphasidnumber'] = '已经有编号的小组“{$a}”可能已经由外部系统自动创建。您没有删除这个小组的权限。';
$string['groupinghasidnumber'] = '已经有编号的大组“{$a}”可能已经由外部系统自动创建。您没有删除这个大组的权限。';
$string['groupingnotaddederror'] = '{$a}组没有添加。';
$string['groupnotaddederror'] = '不能添加组“{$a}”';
$string['groupnotaddedtogroupingerror'] = '小组 "{$a->groupname}" 没有加到大组 "{$a->groupingname}"';
$string['groupunknown'] = '组“{$a}”未与任何课程建立关系';
$string['groupusernotmember'] = '用户不是这个组的成员。';
$string['guestcantaccessprofiles'] = '访客无法存取用户个人资料。以完整的用户帐号登录才能继续。';
$string['guestnocomment'] = '访客不可以发表评论！';
$string['guestnoeditprofile'] = '访客不能编辑个人资料';
$string['guestnoeditprofileother'] = '访客的个人资料不能被编辑';
$string['guestnorate'] = '不允许访客为条目评分';
$string['guestsarenotallowed'] = '访客用户无权做此操作';
$string['hackdetected'] = '检测到黑客攻击！';
$string['hashpoolproblem'] = '错误的池文件内容 {$a}。';
$string['headersent'] = '已发送协议头';
$string['idnumbertaken'] = 'ID号已经被使用';
$string['idnumbertoolong'] = 'ID 号太长';
$string['importformatnotimplement'] = '抱歉，目前不支持导入这种格式.';
$string['incorrectext'] = '文件扩展名不正确';
$string['inplaceeditableerror'] = '调用更新处理器失效';
$string['installproblem'] = '安装过程中出现的错误通常是无法恢复的，如果您要重新安装，可能需要建立一个新的数据库或者使用不同的数据库前缀。';
$string['internalauthpassworderror'] = '内部认证密码丢失或密码策略无效';
$string['invalidaccess'] = '页面加载不正确';
$string['invalidaccessparameter'] = '无效的访问参数';
$string['invalidaction'] = '无效的动作参数';
$string['invalidactivityid'] = '活动ID无效';
$string['invalidadminsettingname'] = '无效的管理设置({$a})';
$string['invalidargorconf'] = '没有提供有效的参数或服务器配置错误';
$string['invalidarguments'] = '没有提供有效的参数';
$string['invalidblockinstance'] = '无效的版块实例：{$a}';
$string['invalidbulkenrolop'] = '无效的批量选课操作请求。';
$string['invalidcategory'] = '错误的类别！';
$string['invalidcategoryid'] = '错误类别ID！';
$string['invalidcomment'] = '评论错误';
$string['invalidcommentarea'] = '无效评论区域';
$string['invalidcommentid'] = '无效评论ID';
$string['invalidcommentitemid'] = '无效评论项ID';
$string['invalidcommentparam'] = '无效的评论参数';
$string['invalidcomponent'] = '无效组件名称';
$string['invalidconfirmdata'] = '无效的确认数据';
$string['invalidcontentid'] = '无效的内容 ID';
$string['invalidcontext'] = '无效的关联';
$string['invalidcountrycode'] = '无效的国家/地区代码：{$a}';
$string['invalidcourse'] = '无效课程';
$string['invalidcourseformat'] = '无效的课程格式';
$string['invalidcourseid'] = '您正试图使用一个无效的课程 ID';
$string['invalidcourselevel'] = '场景级别不正确';
$string['invalidcoursemodule'] = '课程模块 ID 无效';
$string['invalidcoursemoduleid'] = '无效的课程模块 ID： {$a}';
$string['invalidcoursenameshort'] = '无效的课程简称';
$string['invaliddata'] = '提交的数据无效';
$string['invaliddatarootpermissions'] = '试图创建一个目录时检测到权限无效。启用调试以获得更多细节。';
$string['invaliddevicetype'] = '无效的设备类型';
$string['invalidelementid'] = '错误的元素ID！';
$string['invalidentry'] = '这不是有效的项！';
$string['invalidevent'] = '无效的事件';
$string['invalidfieldname'] = '“{$a}”不是合法的字段名';
$string['invalidfiletype'] = '“{$a}”不是合法的文件类型';
$string['invalidformatpara'] = '选择参数格式错误';
$string['invalidformdata'] = '错误的表单数据';
$string['invalidfunction'] = '不正确的函数';
$string['invalidgradeitemid'] = '错误的成绩项ID';
$string['invalidgroupid'] = '指定的组ID错误';
$string['invalidipformat'] = '无效的 IP 地址格式';
$string['invaliditemid'] = '项目ID错误';
$string['invalidkey'] = '密钥不正确';
$string['invalidlanguagecode'] = '无效的语言代码：{$a}';
$string['invalidlegacy'] = '不正确的旧版角色类型定义：{$a}';
$string['invalidmd5'] = '无效的 md5';
$string['invalidmode'] = '无效的模式({$a})';
$string['invalidmodule'] = '无效模块';
$string['invalidmoduleid'] = '无效模块ID：{$a}';
$string['invalidmodulename'] = '无效模块名称：{$a}';
$string['invalidnum'] = '无效的数值';
$string['invalidnumkey'] = '数组$conditions不能包含数字键。请修复代码！';
$string['invalidoutcome'] = '错误成果ID';
$string['invalidpagesize'] = '无效的页面大小';
$string['invalidpasswordpolicy'] = '无效的密码策略';
$string['invalidpaymentmethod'] = '无效的支付方式：{$a}';
$string['invalidpersistenterror'] = '错误：{$a}';
$string['invalidqueryparam'] = '错误：查询参数数目不正确。 应为{$a->expected}个，现为{$a->actual}个。';
$string['invalidratingarea'] = '无效的评价区';
$string['invalidrecord'] = '在数据表{$a}中找不到数据记录。';
$string['invalidrecordunknown'] = '在数据库中找不到数据记录';
$string['invalidrequest'] = '无效的请求';
$string['invalidrole'] = '无效的角色';
$string['invalidroleid'] = '无效的角色ID';
$string['invalidscaleid'] = '等级id错误';
$string['invalidsection'] = '课程模块记录包含无效的小节';
$string['invalidsesskey'] = '您的会话很可能已超时。请检查您是否已登录或返回上一个屏幕并重新加载页面。';
$string['invalidshortname'] = '无效的课程简称';
$string['invalidsourcefield'] = '草稿文件的源地址域无效';
$string['invalidstatedetected'] = '发生错误：{$a}。正常情况下这应该不会发生。';
$string['invalidurl'] = '无效的 网页地址';
$string['invaliduser'] = '无效的用户';
$string['invaliduserdata'] = '无效的用户资料：{$a}';
$string['invaliduserfield'] = '无效用户字段：{$a}';
$string['invaliduserid'] = '无效的用户ID';
$string['invalidusername'] = '用户名包含无效字符';
$string['invalidusernameblank'] = '用户名不能为空';
$string['invalidxmlfile'] = '“{$a}”不是合法的 XML 文件';
$string['iplookupfailed'] = '无法找到关于 IP 地址 {$a} 的 geo 信息。';
$string['iplookupprivate'] = '无法显示私有 IP 地址。';
$string['ipmismatch'] = '客户端IP地址不匹配';
$string['listcantmovedown'] = '向下移动项失败，已在最后位置。';
$string['listcantmoveleft'] = '向左移动项失败，没有找到父项。';
$string['listcantmoveright'] = '向右移动项失败，因为找不到可做父项的同类项。您必须先将它移动到一个同类项下方才能再向右移。';
$string['listcantmoveup'] = '向上项移动失败，已在最前位置';
$string['listnochildren'] = '找不到子项';
$string['listnoitem'] = '找不到项目';
$string['listnopeers'] = '未发现同类的项';
$string['listupdatefail'] = '编辑层级时数据库操作失败。';
$string['logfilenotavailable'] = '日志不可用';
$string['loginasnoenrol'] = '在课程中“登录为”其他用户时，不能选课或取消选课';
$string['loginasonecourse'] = '您不能进入该课程。<br />在进入课程之前，您必须停止“登录为”其他用户。';
$string['maxareabytes'] = '此文件的大小超过了剩余的空间。';
$string['maxbytesfile'] = '这个文件 {$a->file} 太大了。你可以上传的文件最大容量是 {$a->size}。';
$string['maxdraftitemids'] = '上传大量文件后，您的文件上传会暂时受到限制。 请稍候，然后重试。';
$string['messageundeliveredbynotificationsettings'] = '无法发送消息，因为站点管理员已禁用用户之间的个人消息（在通知设置中）。';
$string['messagingdisable'] = '本站的消息系统已禁用';
$string['mimetexisnotexist'] = '您的系统未配置为运行 mimeTeX。您需从 <a href="https://www.forkosh.com/mimetex.zip">https://www.forkosh.com/mimetex.zip </a>获取 C 语言源代码，编译后将可执行文件放入你的 moodle/filter/tex/ 目录下。';
$string['mimetexnotexecutable'] = '自定义mimetex不可执行！';
$string['missing_moodle_backup_xml_file'] = '找不到备份XML文件：{$a}';
$string['missingcategoryrole'] = '无法为用户分配角色：缺少类别角色。';
$string['missingfield'] = '字段“{$a}”不存在';
$string['missingkeyinsql'] = '错误：查询语句缺少参数"{$a}"';
$string['missingparam'] = '缺少必要的参数（{$a}）';
$string['missingparameter'] = '缺少参数';
$string['missingrequiredfield'] = '缺少了必需的字段';
$string['missinguseranditemid'] = '缺失userid和itemid';
$string['missingvarname'] = '缺少必要的变量名！';
$string['mixedtypesqlparam'] = '错误：sql查询参数使用混搭的类型！！';
$string['mnetdisable'] = 'NMET被禁用';
$string['mnetlocal'] = '远程MNET用户无法在本地登录';
$string['moduledisable'] = '模块({$a})对于该课程已经失效';
$string['moduledoesnotexist'] = '此模块不存在';
$string['moduleinstancedoesnotexist'] = '此模块的实例不存在';
$string['modulemissingcode'] = '模块 {$a} 缺少了执行此功能的代码';
$string['moodlenet:invalidshareformat'] = '不正确的 MoodleNet 共享格式';
$string['moodlenet:invalidsharestatus'] = '不正确的 MoodleNet 共享状态';
$string['moodlenet:invalidsharetype'] = '无效的 MoodleNet 共享类型';
$string['moodlenet:usernotconfigured'] = '您没有将内容共享到 MoodleNet 的权限，或者您的帐户配置不正确。';
$string['movecatcontentstoroot'] = '不允许将分类内容移动到根目录。您必须将内容移动到现有分类！';
$string['movecatcontentstoselected'] = '某些类别内容无法移动到所选类别中。';
$string['movecategorynotpossible'] = '不能将类别{$a}移到选定的类别';
$string['movecategoryownparent'] = '不能将类别{$a}又当作它的上层类别';
$string['movecategoryparentconflict'] = '不能将类别{$a}又当作它的下层类别';
$string['mssqlrcsmodemissing'] = '这个数据库不是使用预期的 READ_COMMITTED_SNAPSHOT 模式，它可能导致错误的结果。
请启用它，才能正确运行，你可以在<a href="https://docs.moodle.org/en/Installing_MSSQL_for_PHP">Installing MSSQL for PHP</a>找到更多信息。';
$string['multiplerecordsfound'] = '获得多条纪录，只有一条是想要的。';
$string['multiplerestorenotallow'] = '不允许执行多个恢复！';
$string['mustbeloggedin'] = '您必须登录后才能执行此项操作';
$string['mustbeteacher'] = '只有教师才能查看此页';
$string['myisamproblem'] = '数据库表正在使用MyISAM数据库引擎，建议使用符合ACID原则的全面支持事务的引擎，比如InnoDB。';
$string['needcopy'] = '您需要先复制些什么！';
$string['needcoursecategroyid'] = '必须指定课程ID或类别';
$string['needphpext'] = '您需要为您的PHP添加{$a}支持';
$string['noadmins'] = '无管理员！';
$string['noblocks'] = '没有找到版块！';
$string['nocapabilitytousethisservice'] = '该用户没有使用这项服务所需的权限';
$string['nocategorydelete'] = '课程类别“{$a}”不能删除!';
$string['nocontext'] = '很抱歉，但此课程不是一个有效的环境';
$string['nodata'] = '无数据';
$string['noexistingcategory'] = '类别不存在';
$string['nofile'] = '没有选定文件';
$string['nofiltersenabled'] = '未启用任何过滤器。';
$string['nofolder'] = '请求的目录不存在';
$string['noformdesc'] = '找不到此活动的formslib表单描述文件。';
$string['noguest'] = '没有访客！';
$string['noinstances'] = '在本课程中没有 {$a}！';
$string['nologinas'] = '您不允许登录为此用户';
$string['nonmeaningfulcontent'] = '无意义的内容';
$string['noparticipants'] = '找不到此课程的参与人';
$string['noparticipatorycms'] = '很抱歉，您没有可参与的课程模块来生成报表';
$string['nopermissions'] = '很抱歉，您目前没有执行此操作的权限（{$a}）';
$string['nopermissiontoaccesspage'] = '您没有访问此页面的权限。';
$string['nopermissiontocomment'] = '你不能添加评论';
$string['nopermissiontodelentry'] = '您不能删除这条评论！';
$string['nopermissiontoeditcomment'] = '您不能编辑其他人的评论！';
$string['nopermissiontohide'] = '不允许隐藏！';
$string['nopermissiontoimportact'] = '您没有请求为这项课程导入活动的权限';
$string['nopermissiontolock'] = '没有加锁的权限！';
$string['nopermissiontomanagegroup'] = '您没有权限管理组';
$string['nopermissiontorate'] = '项目不允许评分';
$string['nopermissiontoshow'] = '没有浏览权限！';
$string['nopermissiontounlock'] = '没有解锁的权限！';
$string['nopermissiontoupdatecalendar'] = '抱歉，您目前没有更新日历事件的权限。';
$string['nopermissiontoviewcalendar'] = '抱歉，您没有查看日历活动的权限。';
$string['nopermissiontoviewgrades'] = '不能查看成绩';
$string['nopermissiontoviewletergrade'] = '没有查看分数段的权限';
$string['nopermissiontoviewpage'] = '您不允许浏览这个页面';
$string['nosite'] = '找不到一个最高级别课程！';
$string['nositeid'] = '无站点ID';
$string['nostartdatenoenddate'] = '只有设置了课程开始日期，才能设置结束日期。';
$string['nostatstodisplay'] = '很抱歉，没有可显示的数据';
$string['notallowedtoupdateprefremotely'] = '你不可以远程更新用户的设置';
$string['notavailable'] = '现在它已经不存在了';
$string['notlocalisederrormessage'] = '{$a}';
$string['notmemberofgroup'] = '您不是此课程组中的一员';
$string['notownerofkey'] = '您不是该密钥的所有者';
$string['nousers'] = '没有此用户！';
$string['oauth1accesstoken'] = 'OAuth 1.0 错误: 我们未能获得访问码。';
$string['oauth1requesttoken'] = 'OAuth 1.0 错误: 我们未能获得访问码 - 服务提供商可能暂时不在线。';
$string['oauth2refreshtokenerror'] = '无法刷新 OAuth 2 令牌。 远程端点的 HTTP 状态：{$a}';
$string['oauth2refreshtokentaskerror'] = '无法为一个或多个颁发者刷新 OAuth 2 令牌。 查看任务输出以了解详细信息。';
$string['oauth2upgradetokenerror'] = '无法升级 OAuth 2 令牌。 远程端点的 HTTP 状态：{$a}';
$string['onlyadmins'] = '只有管理员才能使用此功能';
$string['onlyeditingteachers'] = '只有拥有修改权的教师才能使用此功能';
$string['onlyeditown'] = '您只能修改您自己的信息';
$string['opensslsealerror'] = 'OpenSSL 无法封装数据';
$string['opensslsignerror'] = 'OpenSSL 无法对数据进行签名';
$string['orderidnotfound'] = '订单ID {$a}未找到';
$string['pagenotexist'] = '<p>尝试查看不存在的页面时发生异常错误：</p>{$a}';
$string['pagenotexisttitle'] = '404 错误：找不到文件';
$string['passwordexceeded'] = '密码不能超过 {$a} 个字符';
$string['pathdoesnotstartslash'] = '未提供正确参数，路径不是以/开始！';
$string['pleasereport'] = '如果您有时间，请让我们知道在错误发生的时候您在试图做什么';
$string['pluginnotexist'] = '{$a} 插件不存在';
$string['pluginrequirementsnotmet'] = '插件“{$a->pluginname}”({$a->pluginversion}) 不能安装。它需要新版本的 Mooodle（现在您正使用 {$a->currentmoodle}，您需要 {$a->requiremoodle}）';
$string['pluginunsupported'] = '插件“{$a->pluginname}”{$a->pluginversion} 不支持此版本的 Moodle {$a->moodleversion}。 寻求插件信息以查找支持的版本。';
$string['prefixcannotbeempty'] = '<p>错误：数据库表前缀不能为空({$a})</p>
<p>网站管理员必须修复此问题。</p>';
$string['prefixtoolong'] = '<p>错误：数据库表前缀过长({$a->dbfamily})</p>
<p>网站管理员必须修复此问题。{$a->dbfamily}中表前缀的最大长度为{$a->maxlenght}个字符。</p>';
$string['privatefilesupload'] = '已经不再支持上传到用户私人文件区。请上传到草稿区，然后把这个文件移动到core_user::add_user_private_files';
$string['processingstops'] = '处理到此结束。剩余记录将被忽略。';
$string['protected_cc_not_supported'] = '不支持受保护的CC格式。';
$string['querystringcannotbeempty'] = '查询字符串不可空白';
$string['redirecterrordetected'] = '检测到不支持的重定向，脚本执行终止';
$string['redissessionhandlerproblem'] = '设置 redis 会话失败。请通知服务器管理员';
$string['refoundto'] = '不能退款给{$a}';
$string['refoundtoorigi'] = '向原账户退款：{$a}';
$string['registrationdisabled'] = '本站已禁用注册功能';
$string['remotedownloaderror'] = '<p>下载组件至服务器失败，请校验代理设置，推荐安装 PHP cURL 扩展。</p> <p>您必须手动下载下载<a href="{$a->url}">{$a->url}</a> ，拷贝至服务器上的“{$a->dest}”并解压至此。</p>';
$string['remotedownloadnotallowed'] = '不允许为您的服务器下载组件(allow_url_fopen 被禁用)。<br /><br />您应该 <a href="{$a->url}">{$a->url}</a> 先手动的把它复制到“{$a->dest}” 您的服务器上然后解压。';
$string['reportnotavailable'] = '该类型报告只对站点课程有效';
$string['requirecorrectaccess'] = '无效链接或端口。';
$string['requireloginerror'] = '不能访问课程或活动。';
$string['restore_path_element_missingmethod'] = '缺少恢复方法{$a}。它必须由开发者定义。';
$string['restore_path_element_noobject'] = '恢复对象{$a}不是一个对象。';
$string['restorechecksumfailed'] = '从您的会话恢复保存的信息时发生了一些错误。请检查你的PHP内存/数据库包大小限制。恢复停止。';
$string['restrictedcontextexception'] = '抱歉，执行外部函数违反了上下文限制。';
$string['restricteduser'] = '抱歉,您的当前帐号“{$a}”无权进行上述操作。';
$string['reverseproxyabused'] = '已启用反向代理，因此无法直接访问服务器。<br />请联系服务器管理员。';
$string['rpcerror'] = '哎呀！你的MNET通讯失败！把这条错误信息给管理员：{$a}';
$string['scheduledbackupsdisabled'] = '预定文件备份已经被管理员禁用。';
$string['secretalreadyused'] = '更改密码的确认链接已经被使用，密码没有改变';
$string['sectionnotexist'] = '小节不存在';
$string['sendmessage'] = '发消息';
$string['sendmessagesent'] = '感谢您对以下内容的反馈：<br>{$a}';
$string['serverconnection'] = '连接到服务器出错';
$string['servicedonotexist'] = '该服务不存在';
$string['sessioncannotobtainlock'] = '<p>无法在 {$a->acquiretimeout} 中获取会话 ID {$a->id} 的锁定。</p>
<p>另一个页面 （{$a->whohaslock}） 可能仍在另一个浏览器选项卡中运行，或者由于错误而未释放锁定。</p>
<p>您可以等到会话锁定超时 （{$a->lockexpire}），也可以重新启动浏览器会话。如果此错误仍然存在，请通知服务器管理员。</p>';
$string['sessioncookiesdisable'] = '错误使用 require_key_login() —— 一定是会话 cookies 被禁用了！';
$string['sessiondiskfull'] = '会话分区已满。现在不能登录。请通知服务器管理员。';
$string['sessionerroruser'] = '您长时间未活动已退出，请重新登录。';
$string['sessionerroruser2'] = '由于服务器错误，您当前的本次的登录已经受到影响。请重新登录，或重启您的浏览器。';
$string['sessionexpired'] = '会话已过期';
$string['sessionhandlerproblem'] = '会话处理器配置错误';
$string['sessionipnomatch'] = '很抱歉，但您的 IP 地址已经和您第一次登录时所使用的不同了。这个安全功能可以防止黑客在登录到网站后窃取您的身份信息。普通用户看不到这个消息――请找站点管理员来以获得更多帮助。';
$string['sessionipnomatch2'] = '<p>抱歉，您此次登录的IP与上次不同。此安全功能防止他人在您已登录时窃取您的个人信息。如果您使用无线网络或者您在不同的网络中漫游，您可能看见此错误。请咨询站点管理员寻求更多帮助。</p> <p>如果您想继续，请按F5刷新此页面。</p>';
$string['sessionwaiterr'] = '等待会话锁超时。<br />请在当前请求结束后再尝试。';
$string['shortnametaken'] = '课程简称已经被另一个课程({$a})使用';
$string['sitepolicynotagreed'] = '未同意网站条款:<a href="{$a}"> 点击此处打开网站条款</a>';
$string['socksnotsupported'] = 'PHP4 不支持 SOCKS5 代理';
$string['spellcheckernotconf'] = '拼写检查未配置';
$string['sslonlyaccess'] = '因为安全原因，只允许https连接，抱歉。';
$string['statscatchupmode'] = '统计表通常在查看模式，至今运行了 {$a->daysdone} 天，{$a->dayspending} 天要核对。稍后请再次检查。';
$string['statsdisable'] = '统计功能尚未启用。';
$string['statsnodata'] = '对于该课程和时间段的组合没有可用数据';
$string['storedfilecannotcreatefile'] = '无法创建本地文件池文件，请验证 dataroot 中的权限和可用磁盘空间。';
$string['storedfilecannotcreatefiledirs'] = '无法创建本地文件池目录。请验证 dataroot 权限。';
$string['storedfilecannotread'] = '无法读取文件，可能是文件不存在或是权限问题。';
$string['storedfilecannotreadfile'] = '无法读取文件 \'{$a}\'。文件不存在或权限问题。';
$string['storedfilenotcreated'] = '无法创建文件 {$a->contextid}/{$a->component}/{$a->filearea}/{$a->itemid}{$a->filepath}{$a->filename}';
$string['storedfileproblem'] = '本地文件({$a})发生未知异常';
$string['tagdisabled'] = '标签被禁用！';
$string['tagnotfound'] = '在数据库中未发现指定的标签。';
$string['targetdatabasenotempty'] = '目标数据库不是空的。因为安全原因取消传输。';
$string['textconditionsnotallowed'] = '不允许对文本列做条件比较。请在您的查询中使用sql_compare_text()。';
$string['themenotinstall'] = '该主题尚未安装！';
$string['tokengenerationfailed'] = '无法生成新的令牌。';
$string['transactionvoid'] = '事务不能被取消，因为它已经被取消了。';
$string['unenrolerror'] = '在试图取消此用户选课时发生错误';
$string['unicodeupgradeerror'] = '对不起，您的数据库还没有以 Unicode 方式编码，这个版本的 Moodle 不能移植您的数据库。请首先升级到 Moodle 1.7.x，然后从管理页面设定 Unicode。这样就可以将数据库移植到 Moodle {$a} 中了。';
$string['unknowaction'] = '未知操作！';
$string['unknowcategory'] = '未知的分类！';
$string['unknowcontext'] = '此场景({$a})在get_child_contexts中是未知场景！';
$string['unknowformat'] = '未知格式（{$a}）';
$string['unknownbackupexporterror'] = '准备导入信息时发生未知错误';
$string['unknownblockregion'] = '此页无法识别版块区\'{$a}\'。';
$string['unknowncategory'] = '类别 ID 编号为“{$a}”的未知类别';
$string['unknowncontext'] = '这是未知场景。';
$string['unknowncourse'] = '未知的课程命名为：“{$a}”';
$string['unknowncourseidnumber'] = '未知课程ID：“{$a}”';
$string['unknowncourserequest'] = '未知的课程请求';
$string['unknowncoursesection'] = '课程“{$a}”里出现未知的课程小节';
$string['unknownevent'] = '不明事件';
$string['unknownfiletype'] = '错误：未知的过滤器类型';
$string['unknowngroup'] = '未知组“{$a}”';
$string['unknownhelp'] = '未知帮助主题 {$a}';
$string['unknownjsinrequirejs'] = '无法找到 JS 库：{$a}';
$string['unknownmodulename'] = '给表单的模块名未知';
$string['unknownrole'] = '未知角色“{$a}”';
$string['unknownsortcolumn'] = '未知的排序列 {$a}';
$string['unknownuseraction'] = '很抱歉，我不能理解这项用户动作';
$string['unknownuserselector'] = '未知用户选择器';
$string['unknoworder'] = '未知顺序';
$string['unknowparamtype'] = '未知参数类型：{$a}';
$string['unknowquestiontype'] = '不支持的题目类型{$a}';
$string['unknowuploadaction'] = '错误：未知上传操作({$a})';
$string['unspecifycourseid'] = '必须指定课程ID，简称或是编号';
$string['unsupportedevent'] = '不支持的事件类型';
$string['unsupportedstate'] = '不支持的完成状态';
$string['unsupportedwebserver'] = '不支持Web服务器软件({$a})，抱歉。';
$string['upgraderequires19'] = '错误：已在服务器上安装了新版的Moodle，但是不支持从之前的版本升级。<br />请先升级至最新的1.9.x版。您也可以通过重新安装原始文件返回之前的版本。';
$string['upgraderunning'] = '站点正在升级，请稍后再试。';
$string['urlnotdefinerss'] = 'RSS 种子的网页地址未定义';
$string['useradmineditadmin'] = '只有管理员能修改其他管理员的账户';
$string['useradminodelete'] = '不能删除管理员账户';
$string['userautherror'] = '未知验证插件';
$string['userauthunsupported'] = '这里不支持验证插件';
$string['useremailduplicate'] = '地址重复';
$string['userisfilteredout'] = '此用户与筛选器和表单选项不匹配！';
$string['usermustbemnet'] = 'MNET访问控制列表中的用户必须是远程MNET用户';
$string['usernamelowercase'] = '用户名必须小写';
$string['usernotaddederror'] = '未添加用户-错误';
$string['usernotaddedregistered'] = '用户未添加――已经注册过了';
$string['usernotaddedusernameexists'] = '未添加用户 - 用户名已存在于不同的电子邮件下';
$string['usernotavailable'] = '此用户的详细信息对您不可见';
$string['usernotdeletedadmin'] = '无法删除作为管理员帐户的用户';
$string['usernotdeleteddeleted'] = '用户已被删除。';
$string['usernotdeletederror'] = '无法删除用户——错误';
$string['usernotdeletedmissing'] = '无法删除用户——未找到用户名。';
$string['usernotdeletedoff'] = '无法删除用户——不允许删除。';
$string['usernotfullysetup'] = '用户没有完全设置好';
$string['usernotincourse'] = '用户不在该课程中！';
$string['usernotrenamedadmin'] = '不能重命名管理员帐号';
$string['usernotrenamedexists'] = '未能修改用户名——新用户名已经被占用';
$string['usernotrenamedmissing'] = '未能修改用户名——旧用户名不存在';
$string['usernotrenamedoff'] = '无法重命名用户——不允许重命名。';
$string['usernotupdatedadmin'] = '无法更新管理员帐号';
$string['usernotupdatederror'] = '无法更新用户——错误。';
$string['usernotupdatednotexists'] = '无法更新用户——用户信息不存在。';
$string['userquotalimit'] = '你已经达到了你的文件配额上限。';
$string['userselectortoomany'] = '尽管多重选择为false，user_selector仍返回多个已选择的用户。';
$string['verifyagedigitalconsentnotpossible'] = '抱歉，上网年龄承诺验证暂时不可用。';
$string['wrongcall'] = '该脚本调用错误';
$string['wrongcontextid'] = '场景ID错误 (无法找到该ID)';
$string['wrongdestpath'] = '错误的目标路径';
$string['wrongroleid'] = '错误的角色ID！';
$string['wrongsourcebase'] = '错误的源 URL 基地址。';
$string['wrongusernamepassword'] = '用户名/密码不正确';
$string['wrongzipfilename'] = '错误的 ZIP 文件名。';
$string['wscouldnotcreateecoursenopermission'] = 'WS - 不能创建课程 - 没有权限';
$string['wwwrootmismatch'] = '检测到错误的访问，该服务器可能只能经由"{$a}"地址访问，抱歉。<br />请通知服务器管理员。';
$string['wwwrootslash'] = '在config.php中检测到不正确的$CFG->wwwroot，它不应该以斜线结尾。<br />请通知服务器管理员。';
$string['xmldberror'] = 'XMLDB错误';
$string['youcannotdeletecategory'] = '您不能删除分类“{$a}”，因您无权删除其内容或将它们移走。';
