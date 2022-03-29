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
 * Strings for component 'role', language 'ja', version '3.11'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = '新しいロールの追加';
$string['addrole'] = '新しいロールを追加する';
$string['advancedoverride'] = '高度なロールオーバーライド';
$string['allow'] = '許可';
$string['allowassign'] = 'ロールの割り当てを許可する';
$string['allowed'] = '許可済み';
$string['allowoverride'] = 'ロールのオーバーライドを許可する';
$string['allowroletoassign'] = 'ロール {$a->fromrole} のユーザにロール {$a->targetrole} の割り当てを許可する';
$string['allowroletooverride'] = 'ロール {$a->fromrole} のユーザにロール {$a->targetrole} へのオーバーライドを許可する';
$string['allowroletoswitch'] = 'ロール {$a->fromrole} のユーザにロール {$a->targetrole} へのスイッチを許可する';
$string['allowroletoview'] = 'ロール {$a->fromrole} のユーザがロール {$a->targetrole} を表示できるようにする';
$string['allowswitch'] = 'ロールのスイッチを許可する';
$string['allowview'] = 'ロールの表示を許可する';
$string['allsiteusers'] = 'すべてのサイトユーザ';
$string['analytics:listinsights'] = '洞察を一覧表示する';
$string['analytics:listowninsights'] = '自分の洞察を一覧表示する';
$string['analytics:managemodels'] = 'モデルを管理する';
$string['archetype'] = 'ロールアーキタイプ';
$string['archetype_help'] = 'ロールアーキタイプではロールがデフォルトにリセットされる場合のパーミッションを決定します。同時にサイトがアップグレードされる場合のロールに対する新しいパーミッションすべてを決定します。';
$string['archetypecoursecreator'] = 'アーキタイプ: コース作成者';
$string['archetypeeditingteacher'] = 'アーキタイプ: 教師 (編集権限あり)';
$string['archetypefrontpage'] = 'アーキタイプ: フロントページの認証済みユーザ';
$string['archetypeguest'] = 'アーキタイプ: ゲスト';
$string['archetypemanager'] = 'アーキタイプ: マネージャ';
$string['archetypestudent'] = 'アーキタイプ: 学生';
$string['archetypeteacher'] = 'アーキタイプ: 教師 (編集権限なし)';
$string['archetypeuser'] = 'アーキタイプ: 認証ユーザ';
$string['assignanotherrole'] = '別のロールを割り当てる';
$string['assignedroles'] = '割り当て済みロール';
$string['assignerror'] = 'ユーザ {$a->user} へのロール {$a->role} 割り当て中にエラーが発生しました。';
$string['assignglobalroles'] = 'システムロールを割り当てる';
$string['assignmentcontext'] = '割り当てコンテクスト';
$string['assignmentoptions'] = '割り当てオプション';
$string['assignrole'] = 'ロールを割り当てる';
$string['assignrolenameincontext'] = '{$a->context} 内でロール「 {$a->role} 」を割り当てる';
$string['assignroles'] = 'ロールを割り当てる';
$string['assignroles_help'] = 'コンテクストでユーザにロールを割り当てることにより、そのロールに含まれるパーミッションをユーザの現在のコンテクストおよびすべての低いコンテクストに与えることができます。例えばコース内でユーザに学生ロールが割り当てられた場合、コース内すべてのブロックおよび活動に対しても学生としてのロールを持つことになります。';
$string['assignrolesin'] = '{$a} 内でロールを割り当てる';
$string['assignrolesrelativetothisuser'] = 'このユーザに対してロールを割り当てる';
$string['backtoallroles'] = 'すべてのロール一覧に戻る';
$string['backup:anonymise'] = 'バックアップのユーザデータを匿名化する';
$string['backup:backupactivity'] = '活動をバックアップする';
$string['backup:backupcourse'] = 'コースをバックアップする';
$string['backup:backupsection'] = 'セクションをバックアップする';
$string['backup:backuptargetimport'] = 'インポートをバックアップする';
$string['backup:configure'] = 'バックアップオプションを設定する';
$string['backup:downloadfile'] = 'バックアップエリアよりファイルをダウンロードする';
$string['backup:userinfo'] = 'ユーザデータをバックアップする';
$string['badges:awardbadge'] = 'ユーザにバッジを授与する';
$string['badges:configurecriteria'] = 'バッジ取得のクライテリアをセットアップ/編集する';
$string['badges:configuredetails'] = 'バッジ詳細をセットアップ/編集する';
$string['badges:configuremessages'] = 'バッジメッセージを設定する';
$string['badges:createbadge'] = 'バッジを作成/複製する';
$string['badges:deletebadge'] = 'バッジを削除する';
$string['badges:earnbadge'] = 'バッジを取得する';
$string['badges:manageglobalsettings'] = 'バッジグローバル設定を管理する';
$string['badges:manageownbadges'] = '取得済みバッジを表示および管理する';
$string['badges:revokebadge'] = 'ユーザからバッジを取り消す';
$string['badges:viewawarded'] = 'バッジを授与されずに特定のバッジを取得したユーザを表示する';
$string['badges:viewbadges'] = '利用可能なバッジを取得せずに表示する';
$string['badges:viewotherbadges'] = '他のユーザのプロファイル内のパブリックバッジを表示する';
$string['block:edit'] = 'ブロック設定を編集する';
$string['block:view'] = 'ブロックを表示する';
$string['blog:create'] = '新しいブログエントリを作成する';
$string['blog:manageentries'] = 'エントリを編集および管理する';
$string['blog:manageexternal'] = '外部ブログを編集および管理する';
$string['blog:search'] = 'ブログエントリを検索する';
$string['blog:view'] = 'ブログエントリを表示する';
$string['blog:viewdrafts'] = '下書きブログエントリを表示する';
$string['calendar:manageentries'] = 'すべてのカレンダーエントリを管理する';
$string['calendar:managegroupentries'] = 'グループのカレンダーエントリを管理する';
$string['calendar:manageownentries'] = '自分のカレンダーエントリを管理する';
$string['capabilities'] = 'ケイパビリティ';
$string['capability'] = 'ケイパビリティ';
$string['category:create'] = 'カテゴリを作成する';
$string['category:delete'] = 'カテゴリを削除する';
$string['category:manage'] = 'カテゴリを管理する';
$string['category:update'] = 'カテゴリを更新する';
$string['category:viewcourselist'] = 'コースカテゴリおよびその中のコースを表示する';
$string['category:viewhiddencategories'] = '非表示カテゴリを表示する';
$string['category:visibility'] = '非表示カテゴリを表示する';
$string['checkglobalpermissions'] = 'システムパーミッションをチェックする';
$string['checkpermissions'] = 'パーミッションをチェックする';
$string['checkpermissionsin'] = '{$a} のパーミッションをチェックする';
$string['checksystempermissionsfor'] = '{$a->fullname} のシステムパーミッションをチェックする';
$string['checkuserspermissionshere'] = 'この {$a->contextlevel} 内で {$a->fullname} に割り当てられているパーミッションをチェックする';
$string['chooseroletoassign'] = '割り当てるロールを選択してください。';
$string['cohort:assign'] = 'コーホートメンバーを追加および削除する';
$string['cohort:manage'] = 'コーホートを作成、削除および移動する';
$string['cohort:view'] = 'サイト全体のコーホートを表示する';
$string['comment:delete'] = 'コメントを削除する';
$string['comment:post'] = 'コメントを投稿する';
$string['comment:view'] = 'コメントを表示する';
$string['competency:competencygrade'] = 'コンピテンシー評定を設定する';
$string['competency:competencymanage'] = 'コンピテンシーフレームワークを管理する';
$string['competency:competencyview'] = 'コンピテンシーフレームワークを表示する';
$string['competency:coursecompetencyconfigure'] = 'コースコンピテンシーを設定する';
$string['competency:coursecompetencygradable'] = 'コンピテンシー評点を受ける';
$string['competency:coursecompetencymanage'] = 'コースコンピテンシーを管理する';
$string['competency:coursecompetencyview'] = 'コースコンピテンシーを表示する';
$string['competency:evidencedelete'] = 'エビデンスを削除する';
$string['competency:plancomment'] = '学習プランにコメントする';
$string['competency:plancommentown'] = '自分の学習プランにコメントする';
$string['competency:planmanage'] = '学習プランを管理する';
$string['competency:planmanagedraft'] = '学習プラン下書きを管理する';
$string['competency:planmanageown'] = '自分の学習プランを管理する';
$string['competency:planmanageowndraft'] = '自分の学習プラン下書きを管理する';
$string['competency:planrequestreview'] = '学習プランのレビューをリクエストする';
$string['competency:planrequestreviewown'] = '自分の学習プランのレビューをリクエストする';
$string['competency:planreview'] = '学習プランをレビューする';
$string['competency:planview'] = 'すべての学習プランを表示する';
$string['competency:planviewdraft'] = '学習プラン下書きを表示する';
$string['competency:planviewown'] = '自分の学習プランを表示する';
$string['competency:planviewowndraft'] = '自分の学習プラン下書きを表示する';
$string['competency:templatemanage'] = '学習プランテンプレートを管理する';
$string['competency:templateview'] = '学習プランテンプレートを表示する';
$string['competency:usercompetencycomment'] = 'ユーザコンピテンシーにコメントする';
$string['competency:usercompetencycommentown'] = '自分のユーザコンピテンシーにコメントする';
$string['competency:usercompetencyrequestreview'] = 'ユーザコンピテンシーのレビューをリクエストする';
$string['competency:usercompetencyrequestreviewown'] = '自分のユーザコンピテンシーのレビューをリクエストする';
$string['competency:usercompetencyreview'] = 'ユーザコンピテンシーをレビューする';
$string['competency:usercompetencyview'] = 'ユーザコンピテンシーを表示する';
$string['competency:userevidencemanage'] = '事前学習エビデンスを管理する';
$string['competency:userevidencemanageown'] = '自分の事前学習エビデンスを管理する';
$string['competency:userevidenceview'] = 'ユーザの事前学習エビデンスを閲覧する';
$string['confirmaddadmin'] = '本当にユーザ <strong>{$a}</strong> を新しいサイト管理者として追加してもよろしいですか?';
$string['confirmdeladmin'] = '本当にユーザ <strong>{$a}</strong> をサイト管理者一覧より削除してもよろしいですか?';
$string['confirmroleprevent'] = '本当にコンテクスト「 {$a->context} 」内ケイパビリティ「 {$a->cap} 」に許可されたロールから<strong>「 {$a->role} 」</strong>を削除してもよろしいですか?';
$string['confirmroleunprohibit'] = '本当にコンテクスト「 {$a->context} 」内ケイパビリティ「 {$a->cap} 」に禁止されたロールから<strong>「 {$a->role} 」</strong>を削除してもよろしいですか?';
$string['confirmunassign'] = '本当にこのユーザからこのロールを削除してもよろしいですか?';
$string['confirmunassignno'] = 'キャンセル';
$string['confirmunassigntitle'] = 'ロール変更を承認する';
$string['confirmunassignyes'] = '削除';
$string['contentbank:access'] = 'コンテンツバンクにアクセスする';
$string['contentbank:deleteanycontent'] = 'コンテンツバンクからすべてのコンテンツを削除する';
$string['contentbank:deleteowncontent'] = '自分のコンテンツバンクからコンテンツを削除する';
$string['contentbank:downloadcontent'] = 'コンテンツバンクからコンテンツをダウンロードする';
$string['contentbank:manageanycontent'] = 'コンテンツバンクからのすべてのコンテンツを管理する';
$string['contentbank:manageowncontent'] = '自分のコンテンツバンクからのコンテンツを管理する';
$string['contentbank:upload'] = 'コンテンツバンクに新しいコンテンツをアップロードする';
$string['contentbank:useeditor'] = 'コンテンツタイプエディタを使用してコンテンツを作成または編集する';
$string['contentbank:viewunlistedcontent'] = 'コンテンツバンクから非公開のコンテンツを表示する';
$string['context'] = 'コンテクスト';
$string['course:activityvisibility'] = '活動を表示/非表示にする';
$string['course:bulkmessaging'] = '多くの人にメッセージを送信する';
$string['course:changecategory'] = 'コースカテゴリを変更する';
$string['course:changefullname'] = '長いコース名を変更する';
$string['course:changeidnumber'] = 'コースIDナンバーを変更する';
$string['course:changelockedcustomfields'] = 'ロック済みカスタムフィールドを変更する';
$string['course:changeshortname'] = 'コース省略名を変更する';
$string['course:changesummary'] = 'コース概要を変更する';
$string['course:configurecustomfields'] = 'カスタムフィールドを設定する';
$string['course:configuredownloadcontent'] = 'コースコンテンツのダウンロードを設定する';
$string['course:create'] = 'コースを作成する';
$string['course:creategroupconversations'] = 'グループ会話を作成する';
$string['course:delete'] = 'コースを削除する';
$string['course:downloadcoursecontent'] = 'コースコンテンツのダウンロード';
$string['course:enrolconfig'] = 'コースの登録インスタンスを設定する';
$string['course:enrolreview'] = 'コース登録をレビューする';
$string['course:ignoreavailabilityrestrictions'] = '利用制限を無視する';
$string['course:ignorefilesizelimits'] = 'ファイル制限よりも大きなファイルを使用する';
$string['course:isincompletionreports'] = '完了レポートに表示する';
$string['course:manageactivities'] = '活動を管理する';
$string['course:managefiles'] = 'ファイルを管理する';
$string['course:managegrades'] = '評定を管理する';
$string['course:managegroups'] = 'グループを管理する';
$string['course:managescales'] = '評価尺度を管理する';
$string['course:markcomplete'] = 'コース完了に関してユーザに完了をマークする';
$string['course:movesections'] = 'セクションを移動する';
$string['course:overridecompletion'] = '活動完了ステータスをオーバーライドする';
$string['course:recommendactivity'] = '活動チューザの活動を推奨する';
$string['course:renameroles'] = 'ロールをリネームする';
$string['course:request'] = '新しいコースをリクエストする';
$string['course:reset'] = 'コースをリセットする';
$string['course:reviewotherusers'] = '他のユーザをレビューする';
$string['course:sectionvisibility'] = 'セクションの可視性をコントロールする';
$string['course:setcurrentsection'] = '現在のセクションを設定する';
$string['course:setforcedlanguage'] = 'コース言語を強制する';
$string['course:tag'] = 'コースタグを変更する';
$string['course:togglecompletion'] = '手動で活動を完了マークする';
$string['course:update'] = 'コース設定を更新する';
$string['course:useremail'] = 'メールアドレスを有効/無効にする';
$string['course:view'] = '参加せずにコースを表示する';
$string['course:viewcoursegrades'] = 'コース評定を表示する';
$string['course:viewhiddenactivities'] = '非表示の活動を表示する';
$string['course:viewhiddencourses'] = '非表示のコースを表示する';
$string['course:viewhiddensections'] = '非表示のセクションを表示する';
$string['course:viewhiddenuserfields'] = '非表示のユーザフィールドを表示する';
$string['course:viewparticipants'] = '参加者を表示する';
$string['course:viewscales'] = '評価尺度を表示する';
$string['course:viewsuspendedusers'] = '一時停止ユーザを表示する';
$string['course:visibility'] = 'コースを表示/非表示にする';
$string['createrolebycopying'] = '{$a} をコピーして新しいロールを作成する';
$string['createthisrole'] = 'このロールを作成する';
$string['currentcontext'] = '現在のコンテクスト';
$string['currentrole'] = '現在のロール';
$string['customroledescription'] = 'カスタム説明';
$string['customroledescription_help'] = 'カスタム説明が空白の場合、自動的に標準ロールの説明が表示されます。';
$string['customrolename'] = 'カスタムフルネーム';
$string['customrolename_help'] = 'カスタムフルネームが空白の場合、自動的に標準ロールのフルネームが表示されます。あなたはすべてのカスタムロールのフルネームを提供する必要があります。';
$string['defaultrole'] = 'デフォルトロール';
$string['defaultx'] = 'デフォルト {$a}';
$string['defineroles'] = 'ロールを定義する';
$string['deletecourseoverrides'] = 'コース内すべてのオーバーライドを削除する';
$string['deletelocalroles'] = 'すべてのローカルロール割り当てを削除する';
$string['deleterolesure'] = '<p>本当にロール「 {$a->name} ({$a->shortname}) 」を削除してもよろしいですか?</p><p>現在、このロールは {$a->count} 名のユーザに割り当てられています。</p>';
$string['deletexrole'] = '{$a} ロールを削除する';
$string['duplicaterole'] = 'ロールを複製する';
$string['duplicaterolesure'] = '<p>本当にロール「 {$a->name} ({$a->shortname}) 」を複製してもよろしいですか?</p>';
$string['editingrolex'] = 'ロール「 {$a} 」の編集';
$string['editrole'] = 'ロールを編集する';
$string['editxrole'] = '{$a} ロールを編集する';
$string['errorbadrolename'] = 'ロール名が正しくありません。';
$string['errorbadroleshortname'] = 'ロール省略名が正しくありません。';
$string['errorexistsrolename'] = 'ロール名がすでに存在します。';
$string['errorexistsroleshortname'] = 'ロール名がすでに存在します。';
$string['errorroleshortnametoolong'] = '省略名は半角100文字を超えないでください。';
$string['eventcapabilityassigned'] = 'ケイパビリティが割り当てられました。';
$string['eventcapabilityunassigned'] = 'ケイパビリティが割り当て解除されました。';
$string['eventroleallowassignupdated'] = 'ロール割り当てを許可する';
$string['eventroleallowoverrideupdated'] = 'ロールオーバーライドを許可する';
$string['eventroleallowswitchupdated'] = 'ロールスイッチを許可する';
$string['eventroleallowviewupdated'] = 'ロールの表示を許可する';
$string['eventroleassigned'] = 'ロールが割り当てられました。';
$string['eventrolecapabilitiesupdated'] = 'ロールケイパビリティが更新されました。';
$string['eventroledeleted'] = 'ロールが削除されました。';
$string['eventroleunassigned'] = 'ロール割り当てが解除されました。';
$string['eventroleupdated'] = 'ロールが更新されました。';
$string['existingadmins'] = '現在のサイト管理者';
$string['existingusers'] = '割り当て済みユーザ: {$a}';
$string['explanation'] = '説明';
$string['export'] = 'エクスポート';
$string['extusers'] = '既存のユーザ';
$string['extusersmatching'] = '「 {$a} 」に合致する既存のユーザ';
$string['filter:manage'] = 'ローカルフィルタ設定を管理する';
$string['frontpageuser'] = 'フロントページの認証済みユーザ';
$string['frontpageuserdescription'] = 'フロントページコース内すべてのログインユーザです。';
$string['globalrole'] = 'システムロール';
$string['globalroleswarning'] = '警告! あなたがこのページで割り当てたロールはサイトホームおよびすべてのコースを含むシステム全体の登録ユーザに適用されます。';
$string['gotoassignroles'] = 'この {$a->contextlevel} に対するロールの割り当てに移動する';
$string['gotoassignsystemroles'] = 'システムロールの割り当てに移動する';
$string['grade:edit'] = '評定を編集する';
$string['grade:export'] = '評定をエクスポートする';
$string['grade:hide'] = '評点または評定項目を非表示/非表示解除する';
$string['grade:import'] = '評定をインポートする';
$string['grade:lock'] = '評点または評定項目をロックする';
$string['grade:manage'] = '評定項目を管理する';
$string['grade:managegradingforms'] = '高度な評定方法を管理する';
$string['grade:manageletters'] = '評定文字を管理する';
$string['grade:manageoutcomes'] = '評定アウトカムを管理する';
$string['grade:managesharedforms'] = '高度な評定フォームテンプレートを管理する';
$string['grade:override'] = '評定をオーバーライドする';
$string['grade:sharegradingforms'] = '高度な評定フォームをテンプレートとして共有する';
$string['grade:unlock'] = '評定または評定項目をロック解除する';
$string['grade:view'] = '自分の評定を表示する';
$string['grade:viewall'] = '他のユーザの評定を表示する';
$string['grade:viewhidden'] = '自分の非表示の評定を表示する';
$string['h5p:deploy'] = 'H5Pコンテンツを配置する';
$string['h5p:setdisplayoptions'] = 'H5P表示オプションを設定する';
$string['h5p:updatelibraries'] = 'H5Pコンテンツタイプを管理する';
$string['highlightedcellsshowdefault'] = '以下のテーブルでハイライトされているパーミッションは上で現在選択されているロールアーキタイプのデフォルトです。';
$string['highlightedcellsshowinherit'] = '以下にハイライトされたセルは継承されるパーミッションを示してしています。あなたが実際に変更したいパーミッションとは別にしてすべてを継承のままにしてください。';
$string['inactiveformorethan'] = '{$a->timeperiod} 以上活動していない';
$string['ingroup'] = 'グループ「 {$a->group} 」に属している';
$string['inherit'] = '継承';
$string['invalidpresetfile'] = '無効なロール定義ファイル';
$string['legacy:admin'] = 'レガシーロール: 管理者';
$string['legacy:coursecreator'] = 'レガシーロール: コース作成者';
$string['legacy:editingteacher'] = 'レガシーロール: 教師 (編集権限あり)';
$string['legacy:guest'] = 'レガシーロール: ゲスト';
$string['legacy:student'] = 'レガシーロール: 学生';
$string['legacy:teacher'] = 'レガシーロール: 教師 (編集権限なし)';
$string['legacy:user'] = 'レガシーロール: 認証済みユーザ';
$string['legacytype'] = 'レガシーロールタイプ';
$string['listallroles'] = 'すべてのロールを一覧表示する';
$string['localroles'] = 'ローカルに割り当てられるロール';
$string['mainadmin'] = '主管理者';
$string['mainadminset'] = '主管理者に設定する';
$string['manageadmins'] = 'サイト管理者を管理する';
$string['manager'] = 'マネージャ';
$string['managerdescription'] = 'マネージャはコースにアクセスおよび編集できますが、通常、コースに参加しません。';
$string['manageroles'] = 'ロールを管理する';
$string['maybeassignedin'] = 'このロールが割り当てられるコンテクストタイプ';
$string['morethan'] = '{$a} 以上';
$string['multipleroles'] = 'マルチロール';
$string['my:configsyspages'] = 'ダッシュボードページのシステムテンプレートを設定する';
$string['my:manageblocks'] = 'ダッシュボードページブロックを管理する';
$string['neededroles'] = 'パーミッションのロール';
$string['nocapabilitiesincontext'] = 'このコンテクストで利用できるケイパビリティはありません。';
$string['noneinthisx'] = 'この {$a} にはありません。';
$string['noneinthisxmatching'] = 'この {$a->contexttype} 内には「 {$a->search} 」に合致するユーザはありません。';
$string['norole'] = 'ロールなし';
$string['noroleassignments'] = 'このユーザに関して、このサイト内でのロール割り当てはどこにもありません。';
$string['noroles'] = 'ロールなし';
$string['notabletoassignroleshere'] = 'このコンテクスト内でのロール割り当ては管理者によって有効にされていません。';
$string['notabletooverrideroleshere'] = 'あなたはここでロールのパーミッションをオーバーライドすることはできません。';
$string['notes:manage'] = 'ノートを管理する';
$string['notes:view'] = 'ノートを表示する';
$string['notset'] = '設定なし';
$string['novisibleroles'] = 'ロールなし';
$string['overrideanotherrole'] = '別のロールをオーバーライドする';
$string['overridecontext'] = 'コンテクストをオーバーライドする';
$string['overridepermissions'] = 'パーミッションをオーバーライドする';
$string['overridepermissions_help'] = 'パーミッションのオーバーライドは特定のコンテクスト内で選択されたケイパビリティを許可または禁止できるようにします。';
$string['overridepermissionsforrole'] = '{$a->context} のロール「 {$a->role} 」のパーミッションをオーバーライドする';
$string['overridepermissionsin'] = '{$a} のパーミッションをオーバーライドする';
$string['overrideroles'] = 'ロールをオーバーライドする';
$string['overriderolesin'] = '{$a} のロールをオーバーライドする';
$string['overrides'] = 'オーバーライド';
$string['overridesbycontext'] = 'オーバーライド (コンテクストによる)';
$string['payment:manageaccounts'] = 'アカウントを管理する';
$string['payment:viewpayments'] = '支払いを表示する';
$string['permission'] = 'パーミッション';
$string['permission_help'] = 'パーミッションはケイパビリティを付与するための設定です。設定には4つのオプションがあります:

* 設定なし
* 許可 - ケイパビリティにパーミッションが割り当てられます。
* 抑制 -  高いコンテクストで許可されていたとしてもケイパビリティからパーミッションが解除されます。
* 禁止 - パーミッションは完全に拒否され、どのような低いコンテクストにあったとしてもオーバーライドすることはできません。';
$string['permissions'] = 'パーミッション';
$string['permissionsforuser'] = 'ユーザ {$a} のパーミッション';
$string['permissionsincontext'] = '{$a} のパーミッション';
$string['portfolio:export'] = 'ポートフォリオにエクスポートする';
$string['potentialusers'] = '潜在的なユーザ: {$a}';
$string['potusers'] = '潜在的なユーザ';
$string['potusersmatching'] = '「 {$a} 」に合致する潜在的なユーザ';
$string['prevent'] = '抑制';
$string['privacy:metadata:preference:showadvanced'] = '高度なモードのボタン切り替えを処理します。';
$string['privacy:metadata:role_assignments'] = 'ロール割り当てです。';
$string['privacy:metadata:role_assignments:component'] = 'ロール割り当てに関するプラグインです。手動割り当ての場合、空白になります。';
$string['privacy:metadata:role_assignments:itemid'] = 'このロール割り当てに関する登録/認証インスタンスのIDです。';
$string['privacy:metadata:role_assignments:modifierid'] = 'ロール割り当てを作成または修正したユーザのIDです。';
$string['privacy:metadata:role_assignments:roleid'] = 'ロールIDです。';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'このテーブルはそれぞれのコンテクストにおける割り当て済みロールを保存します。';
$string['privacy:metadata:role_assignments:timemodified'] = 'ロール割り当てが作成または修正された日時です。';
$string['privacy:metadata:role_assignments:userid'] = 'ユーザのIDです。';
$string['privacy:metadata:role_capabilities'] = 'ロールケイパビリティです。';
$string['privacy:metadata:role_capabilities:capability'] = 'ケイパビリティ名です。';
$string['privacy:metadata:role_capabilities:modifierid'] = 'ケイパビリティを作成または修正したユーザのIDです。';
$string['privacy:metadata:role_capabilities:permission'] = 'ケイパビリティのパーミッションです: 継承、許可、抑制または禁止';
$string['privacy:metadata:role_capabilities:roleid'] = 'ロールIDです。';
$string['privacy:metadata:role_capabilities:tableexplanation'] = '特定のコンテクスにおける特定のロールのケイパビリティおよびオーバーライドケイパビリティ';
$string['privacy:metadata:role_capabilities:timemodified'] = 'ケイパビリティが作成または修正された日時です。';
$string['privacy:metadata:role_cohortroles'] = 'コーホートのロールです。';
$string['prohibit'] = '禁止';
$string['prohibitedroles'] = '禁止';
$string['question:add'] = '新しい問題を追加する';
$string['question:config'] = '問題タイプを設定する';
$string['question:editall'] = 'すべての問題を編集する';
$string['question:editmine'] = 'あなたの問題を編集する';
$string['question:flag'] = '受験中、問題にフラグを付ける';
$string['question:managecategory'] = '問題カテゴリを管理する';
$string['question:moveall'] = 'すべての問題を移動する';
$string['question:movemine'] = 'あなたの問題を移動する';
$string['question:tagall'] = 'すべての問題にタグ付けする';
$string['question:tagmine'] = 'あなたの問題にタグ付けする';
$string['question:useall'] = 'すべての問題を使用する';
$string['question:usemine'] = 'あなたの問題を使用する';
$string['question:viewall'] = 'すべての問題を表示する';
$string['question:viewmine'] = 'あなたの問題を表示する';
$string['rating:rate'] = 'アイテムに評価を追加する';
$string['rating:view'] = 'あなたが受けた評価合計を表示する';
$string['rating:viewall'] = '個別のユーザから与えられた実評価すべてを表示する';
$string['rating:viewany'] = 'すべてのユーザが受けた評価合計を表示する';
$string['resetrole'] = 'リセット';
$string['resettingrole'] = 'ロール「 {$a} 」のリセット';
$string['restore:configure'] = 'リストアオプションを設定する';
$string['restore:createuser'] = 'リストア時、ユーザを作成する';
$string['restore:restoreactivity'] = '活動をリストアする';
$string['restore:restorecourse'] = 'コースをリストアする';
$string['restore:restoresection'] = 'セクションをリストアする';
$string['restore:restoretargetimport'] = 'インポートファイルからリストアする';
$string['restore:rolldates'] = 'リストア時、活動設定の日付変更を許可する';
$string['restore:uploadfile'] = 'バックアップエリアにファイルをアップロードする';
$string['restore:userinfo'] = 'ユーザデータをリストアする';
$string['restore:viewautomatedfilearea'] = '自動バックアップからコースをリストアする';
$string['risks'] = 'リスク';
$string['role:assign'] = 'ユーザにロールを割り当てる';
$string['role:manage'] = 'ロールを作成および管理する';
$string['role:override'] = '他の人のパーミッションをオーバーライドする';
$string['role:review'] = '他のユーザのパーミッションをレビューする';
$string['role:safeoverride'] = '他のユーザのセーフパーミッションをオーバーライドする';
$string['role:switchroles'] = '別のロールに切り替える';
$string['roleallowheader'] = 'ロールを許可する:';
$string['roleallowinfo'] = 'コンテクスト「 {$a->context} 」およびケイパビリティ「 {$a->cap} 」において、許可されるロールのリストに追加されるロールを選択してください:';
$string['roleassignments'] = 'ロール割り当て';
$string['roledefinitions'] = 'ロール定義';
$string['rolefullname'] = 'ロール名';
$string['roleincontext'] = '{$a->role} - {$a->context}';
$string['roleprohibitheader'] = 'ロールを禁止する';
$string['roleprohibitinfo'] = 'コンテクスト「 {$a->context} 」およびケイパビリティ「 {$a->cap} 」において、拒否されるロールのリストに追加されるロールを選択してください:';
$string['rolerepreset'] = 'ロールプリセットを使用する';
$string['roleresetdefaults'] = 'デフォルト';
$string['roleresetrole'] = 'ロールまたはアーキタイプを使用する';
$string['rolerisks'] = 'ロールリスク';
$string['roles'] = 'ロール';
$string['roles_help'] = 'ロールはシステム全体に定義されたパーミッション群です。あなたは特定のコンテクスト内で特定のユーザにロールを割り当てることができます。';
$string['roleselect'] = 'ロールを選択する';
$string['rolesforuser'] = 'ユーザ {$a} のロール';
$string['roleshortname'] = '省略名';
$string['roleshortname_help'] = 'ロール省略名は低いレベルのロールIDです。半角英数字のみ許可されます。';
$string['roletoassign'] = '割り当てるロール';
$string['roletooverride'] = 'オーバーライドするロール';
$string['safeoverridenotice'] = '注意: あなたはセーフケイパビリティのオーバーライドのみ許可されているため、高いリスクのケイパビリティはロックされています。';
$string['search:query'] = 'サイト全体の検索を実行する';
$string['selectanotheruser'] = '別のユーザを選択する';
$string['selectauser'] = 'ユーザを選択する';
$string['selectrole'] = 'ロールを選択する';
$string['showallroles'] = 'すべてのロールを表示する';
$string['showthisuserspermissions'] = 'このユーザのパーミッションを表示する';
$string['site:accessallgroups'] = 'すべてのグループにアクセスする';
$string['site:approvecourse'] = 'コース作成を承認する';
$string['site:backup'] = 'コースをバックアップする';
$string['site:config'] = 'サイト設定を変更する';
$string['site:configview'] = 'サイト管理ツリーを表示する (すべてのページではなく)';
$string['site:deleteanymessage'] = 'サイトのメッセージすべてを削除する';
$string['site:deleteownmessage'] = 'ユーザに送受信されたメッセージを削除する';
$string['site:doanything'] = 'すべての動作を許可する';
$string['site:doclinks'] = 'サイト外ドキュメントへのリンクを表示する';
$string['site:forcelanguage'] = 'コース言語をオーバーライドする';
$string['site:import'] = '別のコースをコースにインポートする';
$string['site:maintenanceaccess'] = 'メンテナンスモード時にサイトにアクセスする';
$string['site:manageallmessaging'] = 'すべてのユーザの連絡先を追加、削除、ブロックおよびブロック解除する';
$string['site:manageblocks'] = 'ページのブロックを管理する';
$string['site:managecontextlocks'] = 'コンテクストの凍結を管理する';
$string['site:messageanyuser'] = 'すべてのユーザへのメッセージングのユーザプライバシープリファレンスを無視する';
$string['site:mnetloginfromremote'] = 'MNet経由でリモートアプリケーションからログインする';
$string['site:mnetlogintoremote'] = 'MNet経由でリモートアプリケーションを散策する';
$string['site:readallmessages'] = 'サイトのすべてのメッセージを読む';
$string['site:restore'] = 'コースをリストアする';
$string['site:senderrormessage'] = 'エラーページからサポートユーザにメッセージを送信する';
$string['site:sendmessage'] = 'すべてのユーザにメッセージを送信する';
$string['site:trustcontent'] = '送信されたコンテンツを信頼する';
$string['site:uploadusers'] = 'ファイルから新しいユーザをアップロードする';
$string['site:viewanonymousevents'] = 'レポートで匿名イベントを表示する';
$string['site:viewfullnames'] = 'ユーザのフルネームを常に表示する';
$string['site:viewparticipants'] = '参加者を表示する';
$string['site:viewreports'] = 'レポートを表示する';
$string['site:viewuseridentity'] = 'リスト内にユーザ固有情報すべてを表示する';
$string['siteadministrators'] = 'サイト管理者';
$string['tag:edit'] = '既存のタグを編集する';
$string['tag:editblocks'] = 'タグページのブロックを編集する';
$string['tag:flag'] = '不適切な内容としてタグ付けする';
$string['tag:manage'] = 'すべてのタグを管理する';
$string['thisnewrole'] = 'この新しいロール';
$string['thisusersroles'] = 'このユーザのロール割り当て';
$string['unassignarole'] = 'ロール {$a} の割り当てを解除する';
$string['unassignconfirm'] = '本当にユーザ「 {$a->user} 」のロール「 {$a->role} 」を割り当て解除してもよろしいですか?';
$string['unassignerror'] = 'ユーザ {$a->user} からのロール {$a->role} 割り当て解除中にエラーが発生しました。';
$string['user:changeownpassword'] = '自分のパスワードを変更する';
$string['user:create'] = 'ユーザを作成する';
$string['user:delete'] = 'ユーザを削除する';
$string['user:editmessageprofile'] = 'ユーザのメッセージングプロファイルを編集する';
$string['user:editownmessageprofile'] = '自分のメッセージングプロファイルを編集する';
$string['user:editownprofile'] = '自分のユーザプロファイルを編集する';
$string['user:editprofile'] = 'ユーザプロファイルを編集する';
$string['user:ignoreuserquota'] = 'ユーザクオータ制限を無視する';
$string['user:loginas'] = '別のユーザとしてログインする';
$string['user:manageblocks'] = '他のユーザのユーザプロファイルのブロックを管理する';
$string['user:manageownblocks'] = '自分のパブリックユーザプロファイルのブロックを管理する';
$string['user:manageownfiles'] = '自分のプライベートファイルエリアのファイルを管理する';
$string['user:managesyspages'] = 'パブリックユーザプロファイルのデフォルトページレイアウトを設定する';
$string['user:readuserblogs'] = 'すべてのユーザブログを表示する';
$string['user:readuserposts'] = 'すべてのユーザフォーラム投稿を表示する';
$string['user:update'] = 'ユーザプロファイルを更新する';
$string['user:viewalldetails'] = 'ユーザ情報すべてを表示する';
$string['user:viewdetails'] = 'ユーザプロファイルを表示する';
$string['user:viewhiddendetails'] = '非表示のユーザ詳細を表示する';
$string['user:viewlastip'] = 'ユーザの最新IPアドレスを表示する';
$string['user:viewuseractivitiesreport'] = 'ユーザの活動レポートを表示する';
$string['user:viewusergrades'] = 'ユーザの評定を表示する';
$string['usersfrom'] = '{$a} からのユーザ';
$string['usersfrommatching'] = '「 {$a->search} 」に合致する {$a->contextname} からのユーザ';
$string['usersinthisx'] = 'この {$a} 内のユーザ';
$string['usersinthisxmatching'] = '「 {$a->search} 」に合致するこの {$a->contexttype} 内のユーザ';
$string['userswithrole'] = 'ロールのすべてのユーザ';
$string['userswiththisrole'] = 'ロールのユーザ';
$string['useshowadvancedtochange'] = '変更するには「拡張要素を表示する」を使用してください。';
$string['viewingdefinitionofrolex'] = 'ロール「 {$a} 」定義の表示';
$string['viewrole'] = 'ロール詳細を表示する';
$string['webservice:createmobiletoken'] = 'モバイルアクセス用のウェブサービストークンを作成する';
$string['webservice:createtoken'] = 'ウェブサービストークンを作成する';
$string['webservice:managealltokens'] = 'すべてのユーザのウェブサービストークンを管理する';
$string['whydoesuserhavecap'] = 'なぜ {$a->fullname} はコンテクスト {$a->context} 内でケイパビリティ {$a->capability} を持っているのですか?';
$string['whydoesusernothavecap'] = 'なぜ {$a->fullname} はコンテクスト {$a->context} 内でケイパビリティ {$a->capability} を持っていないのですか?';
$string['xroleassignments'] = '{$a} のロール割り当て';
$string['xuserswiththerole'] = 'ロール「 {$a->role} 」のユーザ';
