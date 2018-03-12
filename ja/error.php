<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'error', language 'ja', branch 'MOODLE_32_STABLE'
 *
 * @package   error
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityisscheduledfordeletion'] = '活動削除中 ...';
$string['alreadyloggedin'] = 'あなたはすでに {$a} としてログインしています。異なるユーザとしてログインする前にログアウトする必要があります。';
$string['authnotexisting'] = '認証プラグインがありません。';
$string['backupcontainexternal'] = 'このバックアップファイルにはローカルに設定されていない外部Moodleネットワークホストが含まれています。';
$string['backuptablefail'] = 'バックアップテーブルを正常に設定できませんでした!';
$string['blockcannotconfig'] = 'このブロックはグローバル設定をサポートしません。';
$string['blockcannotinistantiate'] = 'ブロックオブジェクトのインストール中に問題が発生しました。';
$string['blockcannotread'] = 'blockid= {$a} のデータを読み込めませんでした。';
$string['blockdoesnotexist'] = 'このブロックはありません。';
$string['blockdoesnotexistonpage'] = 'このブロック (id={$a->instanceid}) はこのページ ({$a->url}) にはありません。';
$string['blocknameconflict'] = 'ネーミングコンフリクト: ブロック {$a->name} には既存のブロック {$a->conflict} と同じタイトルが設定されています!';
$string['callbackrejectcomment'] = 'このコメントの追加をコメントコールバックが拒否しました。';
$string['cannotaddcoursemodule'] = '新しいコースモジュールを追加できませんでした。';
$string['cannotaddcoursemoduletosection'] = '新しいコースモジュールをセクションに追加できませんでした。';
$string['cannotaddmodule'] = '{$a} モジュールをモジュールリストに追加できませんでした!';
$string['cannotaddnewmodule'] = '{$a} の新しいモジュールを追加できませんでした。';
$string['cannotaddrss'] = 'あなたにはRSSフィードを追加するパーミッションがありません。';
$string['cannotaddthisblocktype'] = 'あなたはこのページに {$a} ブロックを追加できません。';
$string['cannotassignrole'] = 'コース内でロールを割り当てることができません。';
$string['cannotassignrolehere'] = 'あなたはこのコンテクスト ({$a->context}) において、このロール (id = {$a->roleid}) の割り当てを許可されていません。';
$string['cannotassignselfasparent'] = '自分自身を親カテゴリに割り当てることはできません!';
$string['cannotcallscript'] = 'あなたはこのスクリプトをそのようにコールすることはできません。';
$string['cannotcallusgetselecteduser'] = '複数選択がtrueの場合、あなたはuser_selector::get_selected_userをコールできません。';
$string['cannotcreatebackupdir'] = 'backupdataフォルダを作成できませんでした。サイト管理者がファイルパーミッションを変更する必要があります。';
$string['cannotcreatecategory'] = 'カテゴリは追加されませんでした。';
$string['cannotcreatedboninstall'] = '<p>データベースを作成できません。</p>
<p>指定されたデータベースは存在しません。また、ユーザにはデータベースを作成するパーミッションがありません。</p>
<p>サイト管理者はデータベース設定を確認してください。</p>';
$string['cannotcreategroup'] = 'グループ作成中にエラーが発生しました。';
$string['cannotcreatelangbase'] = 'エラー: ベース言語ディレクトリを作成できませんでした。';
$string['cannotcreatelangdir'] = 'langディレクトリを作成できません。';
$string['cannotcreateorfindstructs'] = 'このコースのセクション構造の検出または作成中にエラーが発生しました。';
$string['cannotcreatepopupwin'] = '未定義エレメント - ポップアップウィンドウを作成できません。';
$string['cannotcreatesitedir'] = 'サイトフォルダを作成できません。サイト管理者はファイルパーミッションを修正する必要があります。';
$string['cannotcreatetempdir'] = 'tempディレクトリを作成できません。';
$string['cannotcreateuploaddir'] = 'アップロードフォルダを作成できません。サイト管理者はファイルパーミッションを修正する必要があります。';
$string['cannotcustomisefiltersblockuser'] = 'あなたはユーザまたはブロックコンテクストのフィルタ設定をカスタマイズできません。';
$string['cannotdeletebackupids'] = '前回のバックアップIDを削除できませんでした。';
$string['cannotdeletecategorycourse'] = 'コース「 {$a} 」の削除に失敗しました。';
$string['cannotdeletecategoryquestions'] = 'カテゴリ「 {$a} 」から問題を削除できませんでした。';
$string['cannotdeletecourse'] = 'あなたにはこのコースを削除するパーミッションがありません。';
$string['cannotdeletecustomfield'] = 'カスタムフィールドデータの削除中にエラーが発生しました。';
$string['cannotdeletedir'] = '{$a} を削除できません。';
$string['cannotdeletefile'] = 'このファイルを削除できません。';
$string['cannotdeleterole'] = '次の理由で削除できません: {$a}';
$string['cannotdeleterolewithid'] = 'ID {$a} のロールを削除できませんでした。';
$string['cannotdeletethisrole'] = 'システムで使用されている、または管理者ケイパビリティの最後のロールのため、あなたはこのロールを削除することができません。';
$string['cannotdisableformat'] = 'あなたはデフォルトフォーマットを無効にすることはできません。';
$string['cannotdownloadcomponents'] = 'コンポーネントをダウンロードできません。';
$string['cannotdownloadlanguageupdatelist'] = 'download.moodle.orgから言語更新リストをダウンロードできません。';
$string['cannotdownloadzipfile'] = 'ZIPファイルをダウンロードできません。';
$string['cannoteditcomment'] = 'あなたはこのコメントを編集できません!';
$string['cannoteditcommentexpired'] = 'あなたはこれを編集できません! 編集期限が終了しています!';
$string['cannoteditpostorblog'] = 'あなたはブログに投稿または編集できません。';
$string['cannoteditsiteform'] = 'あなたはこのフォームを使用してサイトコースを編集できません。';
$string['cannotedituserpreferences'] = 'このユーザのプリファレンスを編集できません。';
$string['cannotedityourprofile'] = '申し訳ございません、あなたは自分のプロファイルを編集できません。';
$string['cannotexecduringupgrade'] = 'アップグレード中に実行できません。';
$string['cannotfindcategory'] = 'データベースからID「 {$a} 」でカテゴリレコードを見つけることができません。';
$string['cannotfindcomponent'] = 'コンポーネントを見つけることができません。';
$string['cannotfindcontext'] = 'コンテクストを見つけることができませんでした。';
$string['cannotfindcourse'] = 'コースを見つけることができません。';
$string['cannotfinddocs'] = '「 {$a} 」言語docsファイルを見つけることができません。';
$string['cannotfindgradeitem'] = 'grade_itemが見つけることができません。';
$string['cannotfindgroup'] = 'グループを見つけることができません。';
$string['cannotfindhelp'] = '「 {$a} 」言語helpファイルを見つけることができません。';
$string['cannotfindinfo'] = '次の情報が見つかりません: 「 {$a} 」';
$string['cannotfindlang'] = '「 {$a} 」言語パックが見つかりません!';
$string['cannotfindteacher'] = '教師を見つけることができません。';
$string['cannotfinduser'] = 'ユーザ名「 {$a} 」のユーザが見つかりません。';
$string['cannotgeoplugin'] = 'http://www.geoplugin.com のgeoPluginサーバに接続できません。プロキシ設定を確認するか、MaxMind GeoLite Cityデータをインストールしてください。';
$string['cannotgetblock'] = 'データベースからブロックを検索できませんでした。';
$string['cannotgetcats'] = 'カテゴリレコードを取得できません。';
$string['cannotgetdata'] = 'データを取得できません。';
$string['cannotgradeuser'] = 'このユーザを評定できません。';
$string['cannothaveparentcate'] = 'コースカテゴリには親カテゴリを設定できません!';
$string['cannotimport'] = 'インポートエラー';
$string['cannotimportformat'] = '申し訳ございません、このフォーマットのインポートはまだ実装されていません!';
$string['cannotimportgrade'] = '評定インポートエラー';
$string['cannotinsertgrade'] = 'コースIDなしに評定項目を追加できません!';
$string['cannotinsertrate'] = '新しい評価 ({$a->id} = {$a->rating}) を追加できませんでした。';
$string['cannotinsertrecord'] = '新しいレコードID {$a} を追加できませんでした。';
$string['cannotmailconfirm'] = 'パスワード変更の確認メール送信中にエラーが発生しました。';
$string['cannotmanualctrack'] = '活動が手動完了トラッキングをサポートしていません。';
$string['cannotmapfield'] = 'マッピングの衝突が発生しました。2つのフィールドが同じ評定項目 {$a} にマップされています。';
$string['cannotmarktopic'] = 'このコースのトピックをマークできませんでした。';
$string['cannotmigratedatacomments'] = 'データモジュールコメントを移行できません。';
$string['cannotmodulename'] = 'ビルドナビゲーションでモジュール名を取得できません。';
$string['cannotmoduletype'] = 'ビルドナビゲーションでモジュールタイプを取得できません。';
$string['cannotmovecategory'] = 'カテゴリを移動できません。';
$string['cannotmovecourses'] = '現在のカテゴリから別のカテゴリへコースを移動することはできません。';
$string['cannotmoverolewithid'] = 'ID {$a} のロールを移動できません。';
$string['cannotopencsv'] = 'CSVファイルをオープンできません。';
$string['cannotopenfile'] = 'ファイル「 {$a} 」をオープンできません。';
$string['cannotopenforwrit'] = '書き込みのため「 {$a} 」をオープンできません。';
$string['cannotopentemplate'] = 'テンプレートファイル「 {$a} 」をオープンできません。';
$string['cannotopenzip'] = 'ZIPファイルを開くことができません。恐らく、64ビットOSのZIP拡張子に関するバグだと思われます。';
$string['cannotoverridebaserole'] = 'ベースロールのケイパビリティをオーバーライドできません。';
$string['cannotoverriderolehere'] = 'あなたはこのコンテクスト ({$a->context}) のロール (id = {$a->roleid}) をオーバーライドできません。';
$string['cannotreadfile'] = 'ファイル ({$a}) を読み込めません。';
$string['cannotreadtmpfile'] = '一時ファイルの読み込み中にエラーが発生しました。';
$string['cannotreaduploadfile'] = 'アップロードファイルを読み込めませんでした。';
$string['cannotremovefrommeta'] = 'このメタコースから選択したコースを削除できませんでした!';
$string['cannotreprocessgrades'] = 'この活動 {$a} の評点を再処理できませんでした。';
$string['cannotresetguestpwd'] = 'あなたはゲストパスワードをリセットできません。';
$string['cannotresetmail'] = 'パスワードのリセットおよびメール送信中にエラーが発生しました。';
$string['cannotresetthisrole'] = 'このロールをリセットできません。';
$string['cannotrestore'] = 'エラーが発生したため、リストアを完了できませんでした!';
$string['cannotrestoreadminorcreator'] = '新しいコースにリストアするにはあなたはコース作成者または管理者である必要があります!';
$string['cannotrestoreadminoredit'] = '選択されたコースにリストアするにはあなたは編集権限のある教師または管理者である必要があります!';
$string['cannotsaveagreement'] = 'あなたの同意を保存できませんでした。';
$string['cannotsaveblock'] = 'ブロック設定の保存中にエラーが発生しました。';
$string['cannotsavecomment'] = 'コメントを保存できません。';
$string['cannotsavedata'] = 'データを保存できません。';
$string['cannotsavefile'] = 'ファイル「 {$a} 」を保存できません。';
$string['cannotsavemd5file'] = 'mp5ファイルを保存できません。';
$string['cannotsavezipfile'] = 'ZIPファイルを保存できません。';
$string['cannotservefile'] = 'ファイルを保存できません - サーバ設定に問題があります。';
$string['cannotsetparentforcatoritem'] = 'カテゴリまたはコースアイテムに親カテゴリを設定できません!';
$string['cannotsetpassword'] = 'ユーザパスワードを設定できませんでした!';
$string['cannotsetprefgrade'] = 'この評定カテゴリの {$a} に総計表示プリファレンスを設定できませんでした。';
$string['cannotsettheme'] = 'テーマを設定できませんでした!';
$string['cannotsetupblock'] = 'ブロックテーブルが正常に設定されませんでした!';
$string['cannotsetupcapformod'] = '{$a} のケイパビリティを設定できませんでした。';
$string['cannotsetupcapforplugin'] = '{$a} のケイパビリティを設定できませんでした。';
$string['cannotshowhidecoursesincategory'] = 'カテゴリ {$a} 内のコースを表示/非表示できません。';
$string['cannotsignup'] = 'すでに {$a} としてログインしているため、あなたは新しいアカウントを作成することはできません。';
$string['cannotunassigncap'] = '廃止予定のケイパビリティ {$a->cap} をロール {$a->role} から割り当て解除できませんでした。';
$string['cannotunassignrolefrom'] = 'このユーザをロールID {$a} から割り当て解除できませんでした。';
$string['cannotunzipfile'] = 'ZIPファイルを展開できません。';
$string['cannotupdatemod'] = '{$a} を更新できませんでした。';
$string['cannotupdatepasswordonextauth'] = '外部認証「 {$a} 」のパスワードの更新に失敗しました。詳細はサーバログをご覧ください。';
$string['cannotupdateprofile'] = 'ユーザレコードの更新中にエラーが発生しました。';
$string['cannotupdaterecord'] = 'レコードID {$a} を更新できませんでした。';
$string['cannotupdaterss'] = 'RSSを更新できません。';
$string['cannotupdatesubcourse'] = '子コースを更新できませんでした!';
$string['cannotupdateusermsgpref'] = 'ユーザメッセージプリファレンスを更新できません。';
$string['cannotupdateuseronexauth'] = '外部認証「 {$a} 」のユーザデータ更新にエラーが発生しました。詳細はサーバログをご覧ください。';
$string['cannotuploadfile'] = 'ファイルのアップロード中にエラーが発生しました。';
$string['cannotuseadmin'] = 'このページを使用するにはあなたは管理者である必要があります。';
$string['cannotuseadminadminorteacher'] = 'このページを使用するにはあなたは教師または管理者である必要があります。';
$string['cannotusepage'] = '教師および管理者のみ、このページを使用できます。';
$string['cannotusepage2'] = '申し訳ございません、あなたはこのページを使用できません。';
$string['cannotviewprofile'] = 'あなたはこのユーザのプロファイルを閲覧できません。';
$string['cannotviewreport'] = 'あなたはこのレポートを閲覧できません。';
$string['cannotwritefile'] = 'ファイル「 {$a} 」に書き込めません。';
$string['categoryerror'] = 'カテゴリエラー';
$string['categoryidnumbertaken'] = 'すでに別のカテゴリでIDナンバーが使用されています。';
$string['categorynamerequired'] = 'カテゴリ名は必須入力です。';
$string['categorytoolong'] = 'カテゴリ名が長すぎます。';
$string['commentmisconf'] = 'コメントIDの設定が正しくありません。';
$string['componentisuptodate'] = 'コンポーネントは最新です。';
$string['confirmationnotenabled'] = 'このサイトではユーザ確認は有効にされていません。';
$string['confirmsesskeybad'] = '申し訳ございません、このアクションの実行に関して、あなたのセッションキーでは確認できませんでした。このセキュリティ機能はあなたのユーザ名により重要な機能が不測または悪意により実行されることを防いでいます。本当にこの機能を実行したいか確認してください。';
$string['couldnotassignrole'] = 'あなたへのロール割り当て中に、深刻ですが不明なエラーが発生しました。';
$string['couldnotupdatenoexistinguser'] = 'ユーザを更新できません - ユーザが存在しません。';
$string['countriesphpempty'] = 'エラー: 言語パック {$a} のファイル「countries.php」が空または存在しません。';
$string['coursedoesnotbelongtocategory'] = 'コースはこのカテゴリに属していません。';
$string['courseformatnotfound'] = 'コースフォーマット「 {$a} 」が存在しないか、認識されていません。';
$string['coursegroupunknown'] = 'グループ {$a} に関連するコースが指定されていません。';
$string['courseidnotfound'] = 'コースIDが存在しません。';
$string['courseidnumbertaken'] = 'すでに別のコース ({$a}) でIDナンバーが使用されています。';
$string['coursemisconf'] = 'コース設定が正しくありません。';
$string['courserequestdisabled'] = '申し訳ございません、コースリクエストは管理者によって無効にされています。';
$string['csvcolumnduplicates'] = '重複するカラムが検出されました。';
$string['csvemptyfile'] = 'CSVファイルが空です。';
$string['csvfewcolumns'] = 'カラムが不足しています、デリミタ設定を確認してください。';
$string['csvinvalidcols'] = '<b>無効なCSVファイル:</b> 最初の行には「ヘッダフィールド」を含み、ファイルタイプは<br />「カンマ区切りの拡張フィールド」<br />または<br />「CAVV結果コード (Cardholder Authentication Verification Value) を含むカンマ区切りの拡張フィールド」にする必要があります。';
$string['csvinvalidcolsnum'] = '無効なCSVファイル - それぞれの行には49または70フィールドを含む必要があります。';
$string['csvloaderror'] = 'CSVファイルの読み込み中にエラーが発生しました: {$a}';
$string['csvweirdcolumns'] = '無効なCSVファイルフォーマット - カラム数が一定ではありません!';
$string['dbconnectionfailed'] = '<p>エラー: データベースの接続に失敗しました。</p>
<p>データベースがオーバーロードしているか、正常に動作していない可能性があります。</p>
<p>サイト管理者はconfig.phpでデータベース詳細が正しく設定されているか確認してください。</p>';
$string['dbdriverproblem'] = '<p>エラー: データベースドライバに問題が見つかりました。</p>
<p>サイト管理者はサーバ設定を確認してください。</p><p>{$a}</p>';
$string['dbsessionbroken'] = '深刻なデータベースセッション問題が検出されました。<br /><br />サイト管理者にご連絡ください。';
$string['dbsessionhandlerproblem'] = 'データベースセッションのセットアップに失敗しました。サイト管理者にご連絡ください。';
$string['dbsessionmysqlpacketsize'] = '深刻なデータベースセッション問題が検出されました。サイト管理者にご連絡ください。多くの場合、この問題はMySQL設定「max_allowed_packet」の設定値が小さいことに起因しています。';
$string['dbupdatefailed'] = 'データベースの更新が失敗しました。';
$string['ddldependencyerror'] = '{$a->targettype} 「 {$a->targetname} 」を修正できません。{$a->offendingtype} 「 {$a->offendingname} 」に依存関係が見つかりました。';
$string['ddlexecuteerror'] = 'DDL sql実行エラーが発生しました。';
$string['ddlfieldalreadyexists'] = 'フィールド「 {$a} 」はすでに存在します。';
$string['ddlfieldnotexist'] = 'テーブル「 {$a->tablename} 」内にフィールド「 {$a->fieldname} 」がありません。';
$string['ddltablealreadyexists'] = 'テーブル「 {$a} 」はすでに存在します。';
$string['ddltablenotexist'] = 'テーブル「 {$a} 」がありません。';
$string['ddlunknownerror'] = '不明なDDLライブラリエラーが発生しました。';
$string['ddlxmlfileerror'] = 'XMLデータベースファイルにエラーが見つかりました。';
$string['ddsequenceerror'] = 'テーブル「 {$a} 」の定義が正しくありません。自動カラムは1つのみ定義することができます。また、そのカラムはキーとして定義する必要があります。';
$string['destinationcmnotexit'] = '目的のコースモジュールがありません。';
$string['detectedbrokenplugin'] = '申し訳ございません、プラグイン「 {$a} 」に問題がある、または古いため、継続できません。';
$string['dmlexceptiononinstall'] = '<p>データベースエラーが発生しました: [{$a->errorcode}]<br />{$a->debuginfo}</p>';
$string['dmlreadexception'] = 'データベースの読み込み中にエラーが発生しました。';
$string['dmltransactionexception'] = 'データベーストランザクションエラー';
$string['dmlwriteexception'] = 'データベースへの書き込み中にエラーが発生しました。';
$string['downgradedcore'] = 'エラー!!! あなたが使用しているコードはこれらのデータベースが作成されたものより古いコードです! ';
$string['downloadedfilecheckfailed'] = 'ダウンロードファイルのチェックに失敗しました。';
$string['duplicatefieldname'] = '重複フィールド名「 {$a} 」が検出されました。';
$string['duplicatenosupport'] = '{$a->modtype} モジュールがバックアップおよびリストアをサポートしないため、{$a->modname} 活動を重複することはできません。';
$string['duplicateparaminsql'] = 'エラー: クエリのパラメータ名が重複しています。';
$string['duplicaterolename'] = 'この名称のロールはすでに登録されています!';
$string['duplicateroleshortname'] = 'この省略名のロールはすでに登録されています!';
$string['duplicateusername'] = '重複ユーザ名 - レコードをスキップ';
$string['emailfail'] = 'メール送信に失敗しました。';
$string['enddatebeforestartdate'] = 'コース終了日はコース開始日の後にする必要があります。';
$string['error'] = 'エラーが発生しました。';
$string['errorcleaningdirectory'] = 'ディレクトリ「 {$a} 」のクリーニング中にエラーが発生しました。';
$string['errorcopyingfiles'] = 'ファイルのコピー中にエラーが発生しました。';
$string['errorcreatingdirectory'] = 'ディレクトリ「 {$a} 」の作成中にエラーが発生しました。';
$string['errorcreatingfile'] = 'ファイル「 {$a} 」の作成中にエラーが発生しました。';
$string['errorcreatingrole'] = 'ロール作成中にエラーが発生しました。';
$string['errorfetchingrssfeed'] = 'RSSフィード取得中にエラーが発生しました。';
$string['erroronline'] = '{$a} 行目にエラーがあります。';
$string['erroroutput'] = '出力エラーが発生したため、自動リダイレクトを無効にします。';
$string['errorparsingxml'] = 'XML構文解析エラー: {$a->errorstring} / エラー箇所: {$a->errorline} 行目 / エラー文字: {$a->errorchar}';
$string['errorprocessingarchive'] = 'アーカイブファイルの処理中にエラーが発生しました。';
$string['error_question_answers_missing_in_db'] = 'question_answers databaseテーブルから「 {$a->answer} 」に合致する答えを見つけることができませんでした。これはバックアップファイルからデータベース内の既存のID  {$a->dbquestionid} の問題に合致するID {$a->filequestionid} の問題のリストア中に発生しました。';
$string['errorreadingfile'] = 'ファイル「 {$a} 」の読み取り中にエラーが発生しました。';
$string['errorsavingrequest'] = 'あなたのリクエストを保存中にエラーが発生しました。';
$string['errorsettinguserpref'] = 'ユーザプリファレンス設定中にエラーが発生しました。';
$string['errorunzippingfiles'] = 'ファイルの展開処理中にエラーが発生しました。';
$string['expiredkey'] = 'キーの有効期限が切れています。';
$string['externalauthpassworderror'] = '外部認証のパスワードを入力してください。';
$string['externalfilenolocation'] = '外部ファイルのロケーションパスがありません。';
$string['failtoloadblocks'] = '1つまたはそれ以上のブロックがデータベースに登録されていますが、すべて読み込みに失敗しました!';
$string['fieldrequired'] = '「 {$a} 」 は必須フィールドです。';
$string['fileexists'] = 'ファイルが存在しています。';
$string['filemismatch'] = 'ノンコアのファイル名が一致しません。ファイル「 {$a->current} 」は「 {$a->file} 」であるべきです。';
$string['filenotfound'] = '申し訳ございません、リクエストされたファイルが見つかりませんでした。';
$string['filenotreadable'] = 'ファイルを読み込めません。';
$string['filterdoesnothavelocalconfig'] = 'フィルタ {$a} はローカル設定を許可していません。';
$string['filternotactive'] = '現在、フィルタ {$a} は有効ではありません。';
$string['filternotenabled'] = 'フィルタが有効にされていません!';
$string['filternotinstalled'] = '現在、フィルタ {$a} はインストールされていません。';
$string['forumblockingtoomanyposts'] = 'あなたはこのフォーラムに設定されている投稿期限を超えています。';
$string['generalexceptionmessage'] = '例外 - {$a}';
$string['gradecantregrade'] = '評定計算中にエラーが発生しました: {$a}';
$string['gradepubdisable'] = '評定の公開が無効にされています。';
$string['gradesneedregrading'] = 'コース評定を再計算する必要があります。';
$string['groupalready'] = 'ユーザはすでにグループ「 {$a} 」に属しています';
$string['groupexistforcourse'] = 'グループ「 {$a} 」はすでにこのコースに登録されています。';
$string['groupexistforcoursewithidnumber'] = '{$a->problemgroup}: IDナンバー「 {$a->idnumber} 」のグループ「 {$a->name} 」はすでにこのコースに存在します。';
$string['grouphasidnumber'] = 'グループ「 {$a} 」にはIDナンバーが設定され、外部システムによって自動的に作成されたようです。あなたにはこのグループを削除するパーミッションがありません。';
$string['groupinghasidnumber'] = 'グルーピング「 {$a} 」にはIDナンバーが設定され、外部システムによって自動的に作成されたようです。あなたにはこのグルーピングを削除するパーミッションがありません。';
$string['groupingnotaddederror'] = 'グルーピング「 {$a} 」は追加されませんでした。';
$string['groupnotaddederror'] = 'グループ「 {$a} 」は追加されませんでした。';
$string['groupnotaddedtogroupingerror'] = 'グループ「 {$a->groupname} 」はグルーピング「 {$a->groupingname} 」に追加されませんでした。';
$string['groupunknown'] = 'グループ「 {$a} 」は指定されたコースに関連していません。';
$string['groupusernotmember'] = 'ユーザはこのグループのメンバーではありません。';
$string['guestcantaccessprofiles'] = 'ゲストはユーザプロファイルにアクセスすることはできません。続けるには完全なユーザアカウントでログインしてください。';
$string['guestnocomment'] = 'ゲストはコメントを投稿できません!';
$string['guestnoeditprofile'] = 'ゲストユーザはプロファイルを編集できません。';
$string['guestnoeditprofileother'] = 'ゲストユーザのプロファイルを編集できません。';
$string['guestnorate'] = 'ゲストはエントリを評価できません。';
$string['guestsarenotallowed'] = 'ゲストユーザはこの処理を実行できません。';
$string['hackdetected'] = '不正侵入が検知されました!';
$string['hashpoolproblem'] = 'poolファイルコンテンツ {$a} が正しくありません。';
$string['headersent'] = 'すでにヘッダが送信されています。';
$string['idnumbertaken'] = 'IDナンバーがすでに使用されています。';
$string['idnumbertoolong'] = 'IDナンバーが長すぎます。';
$string['importformatnotimplement'] = '申し訳ございません、このフォーマットのインポートはまだ実装されていません!';
$string['incorrectext'] = 'ファイルの拡張子が正しくありません。';
$string['inplaceeditableerror'] = '更新プロセッサのコールにエラーが発生しました。';
$string['installproblem'] = '通常、インストール中にエラーが発生した場合、エラーから回復することはできません。あなたがインストールを再開するには新しいデータベースを作成するか、異なるデータベース接頭辞 (prefix) を使用する必要があります。';
$string['internalauthpassworderror'] = 'パスワードが入力されていないか、内部認証パスワードポリシーが正しくありません。';
$string['invalidaccess'] = 'このページは正しくアクセスされていません。';
$string['invalidaccessparameter'] = '無効なアクセスパラメータです。';
$string['invalidaction'] = '無効なアクションパラメータです。';
$string['invalidactivityid'] = '無効な活動IDです。';
$string['invalidadminsettingname'] = '無効な管理設定 ({$a}) です。';
$string['invalidargorconf'] = '有効な引数が提供されていないか、サーバ設定が正しくありません。';
$string['invalidarguments'] = '有効な引数が提供されていません。';
$string['invalidblockinstance'] = '無効なブロックインスタンス: {$a}';
$string['invalidbulkenrolop'] = '無効なバルク登録処理がリクエストされました。';
$string['invalidcategory'] = '正しくないカテゴリです!';
$string['invalidcategoryid'] = '正しくないカテゴリIDです!';
$string['invalidcomment'] = 'コメントが正しくありません。';
$string['invalidcommentarea'] = '無効なコメントエリアです。';
$string['invalidcommentid'] = '無効なコメントIDです。';
$string['invalidcommentitemid'] = '無効なコメントitemidです。';
$string['invalidcommentparam'] = '無効なコメントパラメータです。';
$string['invalidcomponent'] = '無効なコンポーネント名です。';
$string['invalidconfirmdata'] = '無効な確認データです。';
$string['invalidcontext'] = '無効なコンテクストです。';
$string['invalidcourse'] = '無効なコースです。';
$string['invalidcourseformat'] = '無効なコースフォーマットです。';
$string['invalidcourseid'] = 'あなたは無効なコースIDの使用を試みています。';
$string['invalidcourselevel'] = '無効なコンテクストレベルです。';
$string['invalidcoursemodule'] = '無効なコースモジュールIDです。';
$string['invalidcoursenameshort'] = '無効なコース省略名です。';
$string['invaliddata'] = '送信されたデータが無効です。';
$string['invaliddatarootpermissions'] = 'ディレクトリ作成時の無効なパーミッションが検出されました。詳細はデバッグを有効にしてください。';
$string['invaliddevicetype'] = '無効なデバイスタイプです。';
$string['invalidelementid'] = '無効なエレメントIDです。';
$string['invalidentry'] = '有効なエントリではありません!';
$string['invalidevent'] = '無効なイベントです。';
$string['invalidfieldname'] = '「 {$a} 」 は有効なフィールド名ではありません。';
$string['invalidfiletype'] = '「 {$a} 」は有効なファイルタイプではありません。';
$string['invalidformatpara'] = '選択パラメータのフォーマットが正しくありません。';
$string['invalidformdata'] = 'フォームデータが正しくありません。';
$string['invalidfunction'] = '関数が正しくありません。';
$string['invalidgradeitemid'] = '評定項目IDが正しくありません。';
$string['invalidgroupid'] = '不正なグループIDが指定されました。';
$string['invalidipformat'] = '無効なIPアドレスフォーマットです。';
$string['invaliditemid'] = 'アイテムIDが正しくありません。';
$string['invalidkey'] = 'キーが正しくありません。';
$string['invalidlegacy'] = '正しくないタイプのレガシーロール定義: {$a}';
$string['invalidmd5'] = 'チェック変数が正しくありません - 再度お試しください。';
$string['invalidmode'] = '無効なモード ({$a}) です。';
$string['invalidmodule'] = '無効なモジュールです。';
$string['invalidmoduleid'] = '無効なモジュールID ({$a}) です。';
$string['invalidmodulename'] = '無効なモジュール名 ({$a}) です。';
$string['invalidnum'] = '無効な数値です。';
$string['invalidnumkey'] = '$conditions配列には数字キーを含むことができません、コードを修正してください!';
$string['invalidoutcome'] = '正しくないアウトカムIDです。';
$string['invalidpagesize'] = '無効なページサイズです。';
$string['invalidpasswordpolicy'] = '無効なパスワードポリシーです。';
$string['invalidpaymentmethod'] = '無効な支払方法: {$a}';
$string['invalidqueryparam'] = 'エラー: クエリパラメータ数が正しくありません。期待されたパラメータ数 {$a->expected} 件に対して、{$a->actual} 件が渡されています。';
$string['invalidratingarea'] = '無効な評定エリアです。';
$string['invalidrecord'] = 'データベーステーブル「 {$a} 」内にデータレコードが見つかりません。';
$string['invalidrecordunknown'] = 'データベース内にデータレコードが見つかりません。';
$string['invalidrequest'] = '無効なリクエストです。';
$string['invalidrole'] = '無効なロールです。';
$string['invalidroleid'] = '無効なロールIDです。';
$string['invalidscaleid'] = '正しくないスケールIDです。';
$string['invalidsection'] = 'コースモジュールレコードに無効なセクションが含まれています。';
$string['invalidsesskey'] = '無効なsesskeyが送信されました。フォームは受信されませんでした!';
$string['invalidshortname'] = '無効なコース省略名です。';
$string['invalidsourcefield'] = '下書きファイルのソースフィールドが無効です。';
$string['invalidstatedetected'] = '不明なエラーが発生しました: {$a}。通常、このエラーは発生しません。';
$string['invalidurl'] = '無効なURLです。';
$string['invaliduser'] = '無効なユーザです。';
$string['invaliduserdata'] = '無効なユーザデータ: {$a}';
$string['invaliduserfield'] = '無効なユーザフィールド {$a}';
$string['invaliduserid'] = '無効なユーザIDです。';
$string['invalidusername'] = 'ユーザ名に無効な文字が含まれています。';
$string['invalidxmlfile'] = '「 {$a} 」は有効なXMLファイルではありません。';
$string['iplookupfailed'] = 'このIPアドレス {$a} に関するgeo情報を見つけることができません。';
$string['iplookupprivate'] = 'プライベートIPアドレスのルックアップを表示できません。';
$string['ipmismatch'] = 'クライアントIPアドレスが一致しません。';
$string['listcantmovedown'] = 'ピアの最後のため、アイテムの下への移動に失敗しました。';
$string['listcantmoveleft'] = 'アイテムの左への移動に失敗しました。親がありません。';
$string['listcantmoveright'] = '子にするピアがないため、アイテムの右への移動に失敗しました。あなたはアイテムを別のピアの下に移動して、右に移動することはできます。';
$string['listcantmoveup'] = '最初のピアのため、アイテムの上への移動に失敗しました。';
$string['listnochildren'] = '子アイテムが見つかりませんでした。';
$string['listnoitem'] = 'アイテムが見つかりませんでした。';
$string['listnopeers'] = 'ピアアイテムが見つかりませんでした。';
$string['listupdatefail'] = 'リスト階層の編集中にデータベース処理にエラーが発生しました。';
$string['logfilenotavailable'] = 'ログは利用できません。';
$string['loginasnoenrol'] = 'コースに「... としてログイン」している場合、あなたはユーザ登録および登録解除することはできません。';
$string['loginasonecourse'] = 'あなたはこのコースに入ることはできません。<br />他のコースに入る前に現在の「... としてログイン」セッションを終了する必要があります。';
$string['maxareabytes'] = 'ファイルがこのエリアの空き容量を超えています。';
$string['maxbytes'] = 'ファイルが最大許容サイズを超えています。';
$string['maxbytesfile'] = 'ファイル {$a->file} は大きすぎます。あなたがアップロードできる最大サイズは {$a->size} です。';
$string['messagingdisable'] = 'このサイトではメッセージングが無効にされています。';
$string['mimetexisnotexist'] = 'あなたのシステムはmimeTeXを実行できるよう設定されていません。あなたのPHPおよびOSプラットフォームに適した実行ファイルを<a href="http://moodle.org/download/mimetex/">http://moodle.org/download/mimetex/</a>からダウンロードするか、C言語のソースを<a href="http://www.forkosh.com/mimetex.zip"> http://www.forkosh.com/mimetex.zip</a>からダウンロードしてください。ダウンロードしたファイルをコンパイルした後、 あなたの「moodle/filter/tex/」ディレクトリに入れてください。';
$string['mimetexnotexecutable'] = 'カスタムmimetexを実行できません!';
$string['missingfield'] = 'フィールド「 {$a} 」 がありません。';
$string['missingkeyinsql'] = 'エラー: クエリにパラメータ「 {$a} 」がありません。';
$string['missing_moodle_backup_xml_file'] = 'バックアップにXMLファイルがありません: {$a}';
$string['missingparam'] = '必須パラメータ ({$a}) がありません。';
$string['missingparameter'] = 'パラメータがありません。';
$string['missingrequiredfield'] = 'いくつかの必須入力フィールドが入力されていません。';
$string['missinguseranditemid'] = 'useridおよびitemidがありません。';
$string['missingvarname'] = '必須の変数名がありません!';
$string['mixedtypesqlparam'] = 'エラー: SQLクエリパラメータのタイプが混合しています!!';
$string['mnetdisable'] = 'MNETは無効にされています。';
$string['mnetlocal'] = 'リモートMNETユーザはローカルにログインできません。';
$string['moduledisable'] = 'このコースに対して、モジュール ({$a}) が無効にされました。';
$string['moduledoesnotexist'] = 'このモジュールはありません。';
$string['moduleinstancedoesnotexist'] = 'このモジュールのインスタンスがありません。';
$string['modulemissingcode'] = 'この関数を実行するためのコードがモジュール {$a} にありません。';
$string['movecatcontentstoroot'] = 'カテゴリコンテンツをルートに移動することは許可されていません。あなたは既存のカテゴリにコンテンツを移動する必要があります!';
$string['movecategorynotpossible'] = 'あなたは選択したカテゴリにカテゴリ「 {$a} 」を移動することはできません。';
$string['movecategoryownparent'] = 'あなたは親カテゴリ自体にカテゴリ「 {$a} 」を作成することはできません。';
$string['movecategoryparentconflict'] = 'あなたはカテゴリ「 {$a} 」をサブカテゴリのサブカテゴリにすることはできません。';
$string['mssqlrcsmodemissing'] = 'データベースが期待されるREAD_COMMITTED_SNAPSHOTモードを使用していないため、 特に高い実効性の状況では間違った結果となる可能性があります。正しく動作させるため、有効にしてください。詳細情報はドキュメンテーション<a href="https://docs.moodle.org/en/Installing_MSSQL_for_PHP">Installing MSSQL for PHP</a>をご覧ください。';
$string['multiplerecordsfound'] = '複数のレコードが見つかりました。1レコードのみ必要です。';
$string['multiplerestorenotallow'] = '複数のリストア実行は許可されていません!';
$string['mustbeloggedin'] = 'この処理を実行するにはあなたはログインする必要があります。';
$string['mustbeteacher'] = 'このページを閲覧するにはあなたは教師である必要があります。';
$string['myisamproblem'] = 'データベーステーブルはMyISAMデータベースエンジンを使用しています。InnoDBのような、フルトランザクションをサポートするACID準拠のエンジンの使用を推奨します。';
$string['needcopy'] = 'あなたは最初に何かコピーする必要があります!';
$string['needcoursecategroyid'] = 'コースIDまたはカテゴリを入力してください。';
$string['needphpext'] = 'あなたのPHPインストレーションに {$a} サポートを追加する必要があります。';
$string['noadmins'] = '管理者がいません!';
$string['noblocks'] = 'ブロックが見つかりませんでした!';
$string['nocapabilitytousethisservice'] = 'このサービスを使用するための必要なケイパビリティがユーザにありません。';
$string['nocategorydelete'] = 'カテゴリ「 {$a} 」は削除できません!';
$string['nocontext'] = '申し訳ございません、そのコースは有効なコンテクストではありません。';
$string['nodata'] = 'データがありません。';
$string['noexistingcategory'] = '既存のカテゴリはありません。';
$string['nofile'] = 'ファイルが指定されていません。';
$string['nofiltersenabled'] = '有効にされているフィルタはありません。';
$string['nofolder'] = 'リクエストされたディレクトリはありません。';
$string['noformdesc'] = 'この活動にはformslibフォーム記述ファイルがありません。';
$string['noguest'] = 'ゲストはいません!';
$string['noinstances'] = 'このコースに {$a} のインスタンスがありません!';
$string['nologinas'] = 'あなたはそのユーザとしてのログインを許可されていません。';
$string['nonmeaningfulcontent'] = '意味のないコンテンツです。';
$string['noparticipants'] = 'このコースには参加者が登録されていません。';
$string['noparticipatorycms'] = '申し訳ございません、あなたにはレポートするために参加しているコースモジュールがありません。';
$string['nopermissions'] = '申し訳ございません、現在、あなたは 「 {$a} 」を実行するためのパーミッションがありません。';
$string['nopermissiontocomment'] = 'あなたはコメントを追加できません!';
$string['nopermissiontodelentry'] = 'あなたは他のユーザのエントリを削除できません!';
$string['nopermissiontoeditcomment'] = 'あなたは他のユーザのコメントを編集できません!';
$string['nopermissiontohide'] = '非表示にするパーミッションはありません!';
$string['nopermissiontoimportact'] = 'あなたにはこのコースに活動をインポートするために必要なパーミッションがありません。';
$string['nopermissiontolock'] = 'ロックするパーミッションはありません!';
$string['nopermissiontomanagegroup'] = 'あなたにはグループを管理するために必要なパーミッションがありません。';
$string['nopermissiontorate'] = 'アイテム評価は許可されていません!';
$string['nopermissiontoshow'] = 'これを閲覧するパーミッションがありません!';
$string['nopermissiontounlock'] = 'ロック解除するパーミッションはありません!';
$string['nopermissiontoupdatecalendar'] = '申し訳ございません、現在あなたにはカレンダーイベントを更新するためのパーミッションがありません。';
$string['nopermissiontoviewgrades'] = '評点を表示できません。';
$string['nopermissiontoviewletergrade'] = '評定文字を閲覧するパーミッションがありません。';
$string['nopermissiontoviewpage'] = 'あなたはこのページを閲覧できません。';
$string['nosite'] = 'トップレベルのコースが見つかりませんでした!';
$string['nositeid'] = 'サイトIDがありません。';
$string['nostartdatenoenddate'] = 'コース開始日も設定されている場合のみ、コース終了日を設定することができます。';
$string['nostatstodisplay'] = '申し訳ございません、表示するデータがありません。';
$string['notallowedtoupdateprefremotely'] = 'あなたはこのユーザのプリファレンスをリモートで更新することを許可されていません。';
$string['notavailable'] = '現在利用できません';
$string['notlocalisederrormessage'] = '{$a}';
$string['notmemberofgroup'] = 'あなたはこのコースグループのメンバーではありません。';
$string['notownerofkey'] = 'あなたはこのキーのオーナーではありません。';
$string['nousers'] = 'そのようなユーザは登録されていません!';
$string['oauth1accesstoken'] = 'OAuth 1.0エラー: 私たちはアクセストークンを取得できませんでした。';
$string['oauth1requesttoken'] = 'OAuth 1.0エラー: 私たちアクセストークンを取得できませんでした。サービスプロバイダが一時的に停止しているようです。';
$string['onlyadmins'] = '管理者のみ可能です。';
$string['onlyeditingteachers'] = '編集権限を持った教師のみ可能です。';
$string['onlyeditown'] = 'あなたはあなた自身の情報のみ編集できます。';
$string['orderidnotfound'] = '注文ID {$a} が見つかりませんでした。';
$string['pagenotexist'] = '異常なエラー (存在しないページへのアクセス) が発生しました。';
$string['pathdoesnotstartslash'] = '有効な引数が提供されていないか、パスがスラッシュで始まっていません!';
$string['pleasereport'] = 'あなたに時間がある場合、エラーが発生したとき、あなたが何を試みたのか私たちにお教えください:';
$string['pluginrequirementsnotmet'] = 'プラグイン 「 {$a->pluginname} 」 ({$a->pluginversion}) をインストールできませんでした。インストールするには新しいバージョンのMoodleが必要です (現在使用しているバージョン: {$a->currentmoodle}  インストールに必要なバージョン: {$a->requiremoodle})。';
$string['prefixcannotbeempty'] = '<p>エラー: データベーステーブル接頭辞に空白は指定できません ({$a})</p>
<p>サイト管理者はこの問題を修正する必要があります。</p>';
$string['prefixtoolong'] = '<p>エラー: データベーステーブル接頭辞が長すぎます ({$a->dbfamily})</p>
<p>サイト管理者はこの問題を修正する必要があります。{$a->dbfamily} のテーブル接頭辞の最大長は半角 {$a->maxlength} 文字です。</p>';
$string['privatefilesupload'] = 'プライベートファイルエリアへのファイル直接アップロードはサポートされないようになりました。下書きエリアにアップロードした後、ファイルをcore_user::add_user_private_filesに移動してください。';
$string['processingstops'] = '処理はここで停止します。残りのレコードは無視されました。';
$string['protected_cc_not_supported'] = '保護カートリッジはサポートされていません。';
$string['querystringcannotbeempty'] = 'クエリストリングは空白にできません。';
$string['redirecterrordetected'] = 'サポートされないリダイレクトが検出されました。スクリプトの実行が停止されました。';
$string['refoundto'] = '払戻し可能額: {$a}';
$string['refoundtoorigi'] = '注文金額の払戻し: {$a}';
$string['registrationdisabled'] = 'このサイトでは登録が無効にされています。';
$string['remotedownloaderror'] = '<p>あなたのサーバへのコンポーネントのダウンロードに失敗しました。プロキシ設定を確認してください。PHP cURL拡張モジュールの使用を強くお勧めします。</p>
<p><a href="{$a->url}">{$a->url}</a>ファイルを手動でダウンロードした後、あなたのサーバの「{$a->dest}」にコピーおよび展開してください。</p>';
$string['remotedownloadnotallowed'] = 'あなたのサーバにコンポーネントをダウンロードすることができません (allow_url_fopenが無効です)。<br /><br /><a href="{$a->url}">{$a->url}</a>ファイルを手動でダウンロードして、サーバの「 {$a->dest} 」にコピーした後、展開してください。';
$string['reportnotavailable'] = 'このタイプのレポートはサイトコースのみで利用できます。';
$string['requirecorrectaccess'] = '無効なURLまたはポートです。';
$string['requireloginerror'] = 'コースまたは活動にアクセスできません。';
$string['restorechecksumfailed'] = 'あなたのセッションに保存されているリストア情報に問題が生じました。あなたのPHPメモリ/DBパッケージサイズ制限を確認してください。リストアを停止しました。';
$string['restore_path_element_missingmethod'] = 'リストアメソッド {$a} がありません。開発者により定義される必要があります。';
$string['restore_path_element_noobject'] = 'リストアオブジェクト {$a} はオブジェクトではありません。';
$string['restrictedcontextexception'] = '申し訳ございません、外部関数の実行により、コンテクストの制限に違反します。';
$string['restricteduser'] = '申し訳ございません、あなたのアカウント「 {$a} 」ではこの処理を実行できません。';
$string['reverseproxyabused'] = '申し訳ございません、リバースプロキシが有効にされているため、サーバに直接アクセスできません。<br />サーバ管理者にご連絡ください。';
$string['rpcerror'] = 'あなたのMNET通信が失敗しました! 以下、あなたの管理者に報告するためのエラーメッセージです: {$a}';
$string['scheduledbackupsdisabled'] = 'スケジュールバックアップはサーバ管理者により無効にされています。';
$string['secretalreadyused'] = 'パスワード変更の確認リンクはすでに使用されています。パスワードは変更されませんでした。';
$string['sectionnotexist'] = 'このセクションはありません。';
$string['sendmessage'] = 'メッセージを送信する';
$string['serverconnection'] = 'サーバへの接続中にエラーが発生しました。';
$string['servicedonotexist'] = 'サービスが存在しません。';
$string['sessioncookiesdisable'] = 'require_key_login() の使用が正しくありません - セッションクッキーは無効にしてください!';
$string['sessiondiskfull'] = 'セッションパーティションがフルになっています。現在、ログインすることはできません。サーバ管理者にご連絡ください。';
$string['sessionerroruser'] = 'あなたのセッションはタイムアウトしました。再度ログインしてください。';
$string['sessionerroruser2'] = 'あなたのログインセッションに影響を与えるサーバエラーが検出されました。再度ログインするか、あなたのブラウザを再起動してください。';
$string['sessionhandlerproblem'] = 'セッションハンドラの設定が正しくありません。';
$string['sessionipnomatch'] = '申し訳ございません、あなたのIPアドレスは最初のログインから変更されているようです。このセキュリティ機能はあなたがサイトにログインしている間、クラッカーから個人情報を盗むことを防いでいます。通常のユーザはこのメッセージを見ることはありません - 詳細はシステム管理者にお問合せください。';
$string['sessionipnomatch2'] = '<p>申し訳ございません、あなたのIPアドレスは最初のログインから変更されているようです。このセキュリティ機能はあなたがサイトにログインしている間、クラッカーから個人情報を盗むことを防いでいます。あなたがワイヤレスネットワークまたは異なるネットワーク間のローミングを利用している場合、このエラーが表示されます。詳細はサイト管理者にお問合せください。<p>
<p>続ける場合、このページをリフレッシュするため、F5キーを押してください。</p>';
$string['sessionwaiterr'] = 'セッションロックを待っている間にタイムアウトしました。<br />あなたの現在のリクエスト終了を待って、後ほど再度お試しください。';
$string['shortnametaken'] = '省略名がすでに別のコース ({$a}) で使用されています。';
$string['sitepolicynotagreed'] = 'サイトポリシーに同意されていません: <a href="{$a}">サイトポリシーを開くにはここをクリックしてください。</a>';
$string['socksnotsupported'] = 'PHP4ではSOCKS5プロキシはサポートされていません。';
$string['spellcheckernotconf'] = 'スペルチェッカが設定されていません。';
$string['sslonlyaccess'] = '申し訳ございません、セキュリティ上の理由から、httpsアクセスのみ許可されています。';
$string['statscatchupmode'] = '現在、統計はキャッチアップモードです。今までのところ {$a->daysdone} 日分が処理され、{$a->dayspending} 日分が未処理です。すぐに確認してください!';
$string['statsdisable'] = '統計が有効にされていません。';
$string['statsnodata'] = 'このコースおよび期間の組み合わせデータはありません。';
$string['storedfilecannotcreatefile'] = 'ローカルプールファイルのファイルを作成できません。datarootディレクトリのパーミッションおよびディスクスペースを確認してください。';
$string['storedfilecannotcreatefiledirs'] = 'ローカルファイルの保存ディレクトリを作成できません。datarootのパーミッションを確認してください。';
$string['storedfilecannotread'] = 'ファイルを読み込めません。ファイルが存在しないか、パーミッションに問題があります。';
$string['storedfilecannotreadfile'] = 'ファイル「 {$a} 」を読むことができません。ファイルが存在しないかパーミッションに問題があります。';
$string['storedfilenotcreated'] = 'ファイル「 {$a->contextid}/{$a->filearea}/{$a->itemid}{$a->filepath}{$a->filename} 」を作成できません。';
$string['storedfileproblem'] = 'ローカルファイルに関して、不明な例外が発生しました ({$a})。';
$string['tagdisabled'] = 'タグが無効にされています!';
$string['tagnotfound'] = '指定されたタグはデータベースで見つかりませんでした。';
$string['targetdatabasenotempty'] = 'ターゲットデータベースが空ではありません。安全上の理由から、転送は中止されました。';
$string['textconditionsnotallowed'] = 'テキストカラムコンディションの比較は許可されていません。あなたのクエリにはsql_compare_text()を使用してください。';
$string['themenotinstall'] = 'このテーマはインストールされていません!';
$string['TODO'] = 'TODO';
$string['tokengenerationfailed'] = '新しいトークンを生成できません。';
$string['transactionvoid'] = 'すでに取り消されているため、トランザクションを取り消すことはできません。';
$string['unenrolerror'] = 'ユーザの登録解除中にエラーが発生しました。';
$string['unicodeupgradeerror'] = '申し訳ございません、あなたのデータベースはユニコードに対応していません。このバージョンのMoodleはデータベースをユニコードに移行できません。最初にMoodle 1.7.x にアップグレードして、管理画面でデータベースをユニコードに移行してください。ユニコード移行後、Moodle {$a} へのアップグレードが可能となります。';
$string['unknowaction'] = '不明な操作です!';
$string['unknowcategory'] = '不明なカテゴリです!';
$string['unknowcontext'] = 'get_child_contextsで不明なコンテクスト ({$a}) です!';
$string['unknowformat'] = '不明なフォーマット「 {$a} 」です。';
$string['unknownbackupexporterror'] = 'インポート情報準備中に不明なエラーが発生しました。';
$string['unknownblockregion'] = 'このページのブロック要素「 {$a} 」が認識されません。';
$string['unknowncontext'] = 'これは不明なコンテクストです。';
$string['unknowncourse'] = '不明なコース名「 {$a} 」です。';
$string['unknowncourseidnumber'] = '不明なコースID「 {$a} 」です。';
$string['unknowncourserequest'] = '不明なコースリクエストです。';
$string['unknowncoursesection'] = 'コース「 {$a} 」内の不明なコースセクションです。';
$string['unknownevent'] = '不明なイベントです。';
$string['unknownfiletype'] = '不明なファイルタイプです。';
$string['unknowngroup'] = '不明なグループ「 {$a} 」です。';
$string['unknownhelp'] = '不明なヘルプトピック「 {$a} 」です。';
$string['unknownjsinrequirejs'] = 'JSライブラリ「 {$a} 」が見つかりません。';
$string['unknownmodulename'] = 'フォームに対する不明なモジュール名です。';
$string['unknownrole'] = '不明なロール「 {$a} 」です。';
$string['unknownsortcolumn'] = '不明なソートカラム「 {$a} 」です。';
$string['unknownuseraction'] = '申し訳ございません、このユーザアクションが理解できません。';
$string['unknownuserselector'] = '不明なユーザセレクタです。';
$string['unknoworder'] = '不明な順序付けです。';
$string['unknowparamtype'] = '不明なパラメータタイプ「 {$a} 」です。';
$string['unknowquestiontype'] = 'サポートされていない問題タイプ「 {$a} 」です。';
$string['unknowuploadaction'] = 'エラー: 不明なアップロード操作「 {$a} 」です。';
$string['unspecifycourseid'] = 'コースID、省略名またはIDナンバーを指定してください。';
$string['unsupportedevent'] = 'サポートされていないイベントタイプです。';
$string['unsupportedstate'] = 'サポートされていない完了ステータスです。';
$string['unsupportedwebserver'] = '申し訳ございません、ウェブサーバソフトウェア ({$a}) はサポートされていません。';
$string['upgraderequires19'] = 'エラー: サーバに新しいMoodleバージョンがインストールされました。残念ですが、前のバージョンからのアップグレードはサポートされていません。<br />最初に、最新の1.9.xリリースにアップグレードしてください。オリジナルファイルを再インストールすることで、あなたは前のバージョンに戻ることができます。';
$string['upgraderunning'] = 'サイトはアップグレード中です。後ほどお試しください。';
$string['urlnotdefinerss'] = 'RSSフィードのURLが定義されていません。';
$string['useradmineditadmin'] = '管理者のみ、他の管理者アカウントの修正を許可されています。';
$string['useradminodelete'] = '管理者アカウントは削除することができません。';
$string['userautherror'] = '不明な認証プラグインです。';
$string['userauthunsupported'] = 'ここでは認証プラグインがサポートされていません。';
$string['useremailduplicate'] = '重複メールアドレス';
$string['usermustbemnet'] = 'MNETアクセスコントロールリストのユーザにはリモートMNETのユーザを使用してください。';
$string['usernotaddederror'] = 'ユーザは追加されませんでした - エラー。';
$string['usernotaddedregistered'] = 'ユーザは追加されませんでした - すでに登録されています。';
$string['usernotavailable'] = 'あなたはこのユーザの詳細を閲覧できません。';
$string['usernotdeletedadmin'] = 'ユーザは削除されませんでした - 管理者アカウントは削除できません。';
$string['usernotdeletederror'] = 'ユーザは削除されませんでした - エラー。';
$string['usernotdeletedmissing'] = 'ユーザは削除されませんでした - ユーザ名が見つかりませんでした。';
$string['usernotdeletedoff'] = 'ユーザは削除されませんでした - 削除が許可されていません。';
$string['usernotfullysetup'] = 'ユーザは完全には設定されていません。';
$string['usernotincourse'] = 'このユーザはこのコースに登録されていません!';
$string['usernotrenamedadmin'] = '管理者アカウントはリネームできません。';
$string['usernotrenamedexists'] = 'ユーザはリネームされませんでした - 新しいユーザ名がすでに使用されています。';
$string['usernotrenamedmissing'] = 'ユーザはリネームされませんでした - 古いユーザ名が見つかりませんでした。';
$string['usernotrenamedoff'] = 'ユーザはリネームされませんでした - リネームが許可されていません。';
$string['usernotupdatedadmin'] = '管理者アカウントは更新できません。';
$string['usernotupdatederror'] = 'ユーザは更新されませんでした - エラー。';
$string['usernotupdatednotexists'] = 'ユーザは更新されませんでした - 存在しません。';
$string['userquotalimit'] = 'あなたのファイルクオータ制限に達しました。';
$string['userselectortoomany'] = 'multiselectがfalseにもかかわらず、user_selectorが2名以上のユーザを選択しています。';
$string['wrongcall'] = 'このスクリプトは正常にコールされていません。';
$string['wrongcontextid'] = 'コンテクストIDが正しくありません (見つけることができません)。';
$string['wrongdestpath'] = '宛先パスが正しくありません。';
$string['wrongroleid'] = 'ロールIDが正しくありません!';
$string['wrongsourcebase'] = 'ソースURLベースが正しくありません。';
$string['wrongusernamepassword'] = 'ユーザID/パスワードが正しくありません。';
$string['wrongzipfilename'] = 'ZIPファイル名が正しくありません。';
$string['wscouldnotcreateecoursenopermission'] = 'WS - コースを作成できませんでした - パーミッションがありません。';
$string['wwwrootmismatch'] = '申し訳ございません、不正なアクセスが検知されたため、「 {$a} 」アドレスからのみサーバにアクセスできます。<br />サーバ管理者にご連絡くください。';
$string['wwwrootslash'] = 'config.phpに正しくない $CFG->wwwroot が検出されました。$CFG->wwwrootの末尾にスラッシュを付ける必要があります。<br />サーバ管理者にご連絡くください。';
$string['xmldberror'] = 'XMLDBエラー!';
$string['youcannotdeletecategory'] = 'コンテンツを削除または移動できないため、あなたはカテゴリ「 {$a} 」を削除することはできません。';
