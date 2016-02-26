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
 * Strings for component 'scorm', language 'ja', branch 'MOODLE_28_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'アクティベーション';
$string['activityloading'] = 'あなたは次の時間経過後、自動的にリダイレクトされます:';
$string['activityoverview'] = 'あなたには注意が必要なSCORMパッケージがあります。';
$string['activitypleasewait'] = '活動読み込み中、お待ちください ...';
$string['adminsettings'] = '管理設定';
$string['advanced'] = 'パラメータ';
$string['aicchacpkeepsessiondata'] = 'AICC HACPセッションデータ';
$string['aicchacpkeepsessiondata_desc'] = '外部AICC HACPセッションデータを保持する日数です (設定値を高くすることで、テーブル内に古いデータが一杯になりますが、デバッグには有用です)。';
$string['aicchacptimeout'] = 'AICC HACPタイムアウト';
$string['aicchacptimeout_desc'] = '外部AICC HACPセッションをオープンしたままにできる最大時間 (分) です。';
$string['aiccuserid'] = 'AICC数字ユーザID渡し';
$string['aiccuserid_desc'] = 'Moodleに比べてAICCスタンダードのユーザ名には制限が多く、半角英数字、ダッシュ (-) およびアンダースコア (_) のみ許可されます。ピリオド (.)、スペースおよびアットマーク (@) は許可されません。この設定を有効にした場合、ユーザ名の代わりにユーザIDナンバーがAICCパッケージに渡されます。';
$string['aliasonly'] = 'リポジトリからimsmanifest.xml ファイルを選択する場合、あなたはこのファイルのエイリアス/ショートカットを使用する必要があります。';
$string['allowapidebug'] = 'アクティブAPIデバッグおよびトレース (apidebugmaskでキャプチャマスクを設定する)';
$string['allowtypeaicchacp'] = '外部AICC HACPを有効にする';
$string['allowtypeaicchacp_desc'] = 'この設定を有効にした場合、外部AICCパッケージからユーザログインのポストリクエストを必要とせずに、AICC HACP外部通信することができます。';
$string['allowtypeexternal'] = '外部パッケージタイプを有効にする';
$string['allowtypeexternalaicc'] = 'ダイレクトAICC URLを有効にする';
$string['allowtypeexternalaicc_desc'] = 'この設定を有効にした場合、シンプルAICCパッケージのダイレクトURLが許可されます。';
$string['allowtypelocalsync'] = 'ダウンロード済みパッケージタイプを有効にする';
$string['apidebugmask'] = 'APIデバッグキャプチャマスク - &lt;username&gt;:&lt;activityname&gt; でシンプルなregexを使用します。例) 「admin:.*」は管理ユーザ (admin) のみのデバッグとなります。';
$string['areacontent'] = 'コンテンツファイル';
$string['areapackage'] = 'パッケージファイル';
$string['asset'] = 'アセット';
$string['assetlaunched'] = 'アセット - 閲覧済み';
$string['attempt'] = '受験';
$string['attempt1'] = '受験 1';
$string['attempts'] = '受験';
$string['attemptsmanagement'] = '受験管理';
$string['attemptstatusall'] = 'マイホームおよびエントリページ';
$string['attemptstatusentry'] = 'エントリページのみ';
$string['attemptstatusmy'] = 'マイホームのみ';
$string['attemptsx'] = '受験 {$a}';
$string['attr_error'] = 'タグ {$a->tag} のアトリビュート ({$a->attr}) に不適切な値が設定されています。';
$string['autocommit'] = '自動コミット';
$string['autocommitdesc'] = 'SCORMパッケージがSCORMデータを保存しない場合、自動的にSCORMデータを保存します。';
$string['autocommit_help'] = 'この設定を有効にした場合、SCORMデータは自動的にデータベースに保存されます。定期的にデータを保存しないSCORMオブジェクトに有用です。';
$string['autocontinue'] = '自動継続';
$string['autocontinuedesc'] = 'この設定を有効にした場合、次に続く学習オブジェクトが自動できに開始動されます。そうでない場合、「続ける」ボタンが使用されます。';
$string['autocontinue_help'] = 'この設定を有効にした場合、自動的に次の利用可能な学習オブジェクトが起動されます。そうでない場合、「続ける」ボタンが使用されます。';
$string['averageattempt'] = '平均評点';
$string['badarchive'] = 'あなたは有効なZIPファイルを提供する必要があります。';
$string['badimsmanifestlocation'] = 'imsmanifest.xmlファイルが見つかりましたが、あなたのZIPファイルのルートにありません。あなたのSCORMを再パッケージしてください。';
$string['badmanifest'] = 'マニフェストエラー: エラーログをご覧ください。';
$string['browse'] = 'プレビュー';
$string['browsed'] = '閲覧済み';
$string['browsemode'] = 'プレビューモード';
$string['browserepository'] = 'リポジトリの閲覧';
$string['calculatedweight'] = '計算加重';
$string['cannotfindsco'] = 'SCOを見つけることができませんでした。';
$string['chooseapacket'] = 'パッケージの選択または更新';
$string['collapsetocwinsize'] = '次のサイズ以下の場合、TOCを折りたたむ';
$string['collapsetocwinsizedesc'] = 'ここではTOCを自動的に折りたたむウィンドウサイズを指定します。';
$string['compatibilitysettings'] = '互換性設定';
$string['completed'] = '完了';
$string['completionscorerequired'] = '必要最小点数';
$string['completionscorerequired_help'] = 'この設定を有効にすることで、ユーザがこのSCORM活動を完了するためには他の活動完了必要条件と同じく、少なくとも設定された最小点数に達する必要があります。';
$string['completionstatus_completed'] = '完了';
$string['completionstatus_passed'] = 'パス';
$string['completionstatusrequired'] = '必要ステータス';
$string['completionstatusrequired_help'] = '1つまたはそれ以上のステータスを選択することで、ユーザがこのSCORM活動を完了するためには他の活動完了必要条件と同じく、少なくとも選択されたステータスの1つに達する必要があります。';
$string['confirmloosetracks'] = '警告: パッケージが変更/修正されたようです。パッケージ構造が変更された場合、更新処理中にユーザのトラックが失われる可能性があります。';
$string['contents'] = 'コンテンツ';
$string['coursepacket'] = 'コースパッケージ';
$string['coursestruct'] = 'コース構造';
$string['currentwindow'] = '現在のウィンドウ';
$string['datadir'] = 'ファイルシステムエラー: コースデータディレクトリを作成できません。';
$string['defaultdisplaysettings'] = 'デフォルト表示設定';
$string['defaultgradesettings'] = 'デフォルト評定設定';
$string['defaultothersettings'] = 'デフォルト評定設定';
$string['deleteallattempts'] = 'すべてのSCORM受験を削除する';
$string['deleteattemptcheck'] = '本当にこれらの受験を完全に削除してもよろしいですか?';
$string['deleteselected'] = '選択した受験を削除する';
$string['deleteuserattemptcheck'] = '本当にあなたの受験すべてを完全に削除してもよろしいですか?';
$string['details'] = 'トラック詳細';
$string['directories'] = 'ディレクトリリンクを表示する';
$string['disabled'] = '無効';
$string['display'] = 'パッケージの表示';
$string['displayactivityname'] = '活動名を表示する';
$string['displayactivityname_help'] = 'SCORMプレイヤーの上に活動名を表示するかどうか指定します。';
$string['displayattemptstatus'] = '受験状況を表示する';
$string['displayattemptstatusdesc'] = 'ホームディレクトリのコース概要ブロックおよびSCORMエントリページにユーザの受験概要を表示するかどうか設定します。';
$string['displayattemptstatus_help'] = 'このプリファレンスでは、ユーザ受験の概要をマイホーム内のコース概要ブロックまたはSCORMエントリページに表示できるようにします。';
$string['displaycoursestructure'] = 'エントリページにコース構造を表示する';
$string['displaycoursestructuredesc'] = 'この設定を有効にした場合、SCORMアウトラインページに目次が表示されます。';
$string['displaycoursestructure_help'] = 'この設定を有効にした場合、コンテンツのSCORMテーブルをSCORMアウトラインページに表示します。';
$string['displaydesc'] = '新しいウィンドウにSCORMパッケージを表示するかどうか設定します。';
$string['displaysettings'] = '表示設定';
$string['dnduploadscorm'] = 'SCORMパッケージを追加する';
$string['domxml'] = 'DOMXML外部ライブラリ';
$string['duedate'] = '終了日時';
$string['element'] = 'エレメント';
$string['enter'] = '問題に入る';
$string['entercourse'] = 'コースに入る';
$string['errorlogs'] = 'エラーログ';
$string['eventattemptdeleted'] = '受験が削除されました。';
$string['eventinteractionsviewed'] = 'インタラクションが閲覧されました。';
$string['eventreportviewed'] = 'レポートが閲覧されました。';
$string['eventscolaunched'] = 'SCOが起動されました。';
$string['eventtracksviewed'] = 'トラックが閲覧されました。';
$string['eventuserreportviewed'] = 'ユーザレポートが閲覧されました。';
$string['everyday'] = '毎日';
$string['everytime'] = '毎回使用されるたびに';
$string['exceededmaxattempts'] = 'あなたは最大受験数に到達しました。';
$string['exit'] = 'コースから抜ける';
$string['exitactivity'] = '活動から抜ける';
$string['expired'] = '申し訳ございません、この活動は {$a} に終了しているため、これ以上利用することはできません。';
$string['external'] = '外部パッケージを更新するタイミング';
$string['failed'] = '不合格';
$string['finishscorm'] = 'あなたがこのリソースの閲覧を終了した場合、{$a}';
$string['finishscormlinkname'] = 'ここをクリックしてコースに戻ってください。';
$string['firstaccess'] = '最初のアクセス';
$string['firstattempt'] = '最初の受験';
$string['floating'] = 'フローティング';
$string['forcecompleted'] = '完了を強制する';
$string['forcecompleteddesc'] = 'このプリファレンスでは、完了の強制に関するデフォルト値を設定します。';
$string['forcecompleted_help'] = 'この設定を有効にした場合、現在の受験ステータスが強制的に「完了」とされます (SCORM 1.2のみに適用されます)。';
$string['forcejavascript'] = 'ユーザにJavaScriptの有効化を強制する';
$string['forcejavascript_desc'] = 'この設定を有効にした場合 (推奨)、ユーザのブラウザでJavaScriptをサポートしていない場合にSCORMオブジェクトへのアクセスを防ぎます。無効にした場合、ユーザはSCORMを閲覧することはできますが、API接続が失敗するため、評定情報が保存されることはありません。';
$string['forcejavascriptmessage'] = 'このオブジェクトを閲覧するにはJavaScriptが必要です。あなたのブラウザのJavaScriptを有効にして、再度お試しください。';
$string['forcenewattempt'] = '新しい受験を強制する';
$string['forcenewattemptdesc'] = 'この設定では「新しい受験を開始する」チェックボックスを隠して、レビューモードを禁止します。SCORMは学生がいつでも同じ受験に戻ることを許可しますが、前回の受験に「完了」「合格」または「不合格」 が設定されていない場合、新しく受験することはできません。SCORMパッケージがこのように動作しない場合、学生は常に同じ受験に入ることになります。';
$string['forcenewattempt_help'] = 'この設定では「新しい受験を開始する」チェックボックスを隠して、レビューモードを禁止します。

SCORMは学生がいつでも同じ受験に戻ることを許可しますが、前回の受験に「完了」「合格」または「不合格」 が設定されていない場合、新しく受験することはできません。SCORMパッケージがこのように動作しない場合、学生は常に同じ受験に入ることになります。';
$string['found'] = 'マニフェストファイルが見つかりました。';
$string['frameheight'] = 'ステージフレームまたはウィンドウのデフォルトの高さです。';
$string['framewidth'] = 'ステージフレームまたはウィンドウのデフォルトの幅です。';
$string['fromleft'] = '左から';
$string['fromtop'] = 'トップから';
$string['fullscreen'] = 'フルスクリーンモード';
$string['general'] = '一般データ';
$string['gradeaverage'] = '平均評点';
$string['gradeforattempt'] = '受験の評点';
$string['gradehighest'] = '最高評点';
$string['grademethod'] = '評定方法';
$string['grademethoddesc'] = '評定方法では、活動の単一の受験をどのように評定するか決定します。';
$string['grademethod_help'] = '評定方法では活動の受験がどのように評定されるか決定します。

以下4つの評定方法があります:

* 学習オブジェクト - 完了/パスした活動の学習オブジェクト数です。
* 最高評点 - すべてのパスした学習オブジェクトにおけるユーザの最高評点です。</li>
* 平均評点 - すべての評点の平均です。
* 評点の合計 - すべての評点の合計です。';
$string['gradereported'] = '記録済み評定';
$string['gradescoes'] = '学習オブジェクト';
$string['gradesettings'] = '評定設定';
$string['gradesum'] = '評点の合計';
$string['height'] = '高さ';
$string['hidden'] = '隠す';
$string['hidebrowse'] = 'プレビューモードを無効にする';
$string['hidebrowsedesc'] = 'プレビューモードでは、学生が受験の前に活動を閲覧することができます。';
$string['hidebrowse_help'] = 'プレビューモードでは受験の前に、学生が活動を閲覧することができます。このオプションを有効にした場合、SCORM/AICCパッケージ活動ページのプレビューボタンは非表示にされます。';
$string['hideexit'] = 'コースから抜けるボタンを隠す';
$string['hidereview'] = 'レビューボタンを隠す';
$string['hidetoc'] = 'プレイヤーでコース構造を表示する';
$string['hidetocdesc'] = 'ここではSCORMプレイヤーの目次表示方法を設定します。';
$string['hidetoc_help'] = 'SCORMプレイヤーの目次表示方法';
$string['highestattempt'] = '最高評点';
$string['identifier'] = '問題識別子';
$string['incomplete'] = '不完全';
$string['info'] = '情報';
$string['interactions'] = 'インタラクション';
$string['invalidactivity'] = 'SCORM活動が正しくありません。';
$string['invalidhacpsession'] = '無効なHACPセッションです。';
$string['invalidmanifestname'] = 'imsmanifest.xml または.zipファイルのみ選択することができます。';
$string['invalidmanifestresource'] = '警告: 次のリソースは、あなたのマニフェスト内で参照されていますが見つかりませんでした:';
$string['invalidurl'] = '無効なURLが指定されました。';
$string['invalidurlhttpcheck'] = '無効なURLが指定されました。デバッグメッセージ:<pre>{$a->cmsg}</pre>';
$string['last'] = '最新アクセス日時';
$string['lastaccess'] = '最新のアクセス';
$string['lastattempt'] = '最新の完了済み受験';
$string['lastattemptlock'] = '最終受験後、ロックする';
$string['lastattemptlockdesc'] = 'この設定を有効にした場合、割り当てられた受験すべての終了後、学生はSCORMプレイヤーを開始できないようになります。';
$string['lastattemptlock_help'] = 'この設定を有効にした場合、割り当てられた受験をすべて完了した後、学生はSCORMプレイヤーを起動できないようになります。';
$string['location'] = 'ロケーションバーを表示する';
$string['max'] = '最大評点';
$string['maximumattempts'] = '受験回数';
$string['maximumattemptsdesc'] = 'このプリファレンスでは、活動に対するデフォルトの最大受験回数を設定します。';
$string['maximumattempts_help'] = 'ここではユーザに許可される最大受験回数を設定します。この設定値はSCORM1.2およびAICCパッケージのみで動作します。';
$string['maximumgradedesc'] = 'このプリファレンスでは、活動に対するデフォルトの最大評点を設定します。';
$string['menubar'] = 'メニューバーを表示する';
$string['min'] = '最小評点';
$string['missing_attribute'] = 'タグ {$a->tag} に属性 {$a->attr} がありません。';
$string['missingparam'] = '必要パラーメタが設定されていないか、間違っています。';
$string['missing_tag'] = '{$a->tag} タグがありません。';
$string['mode'] = 'モード';
$string['modulename'] = 'SCORMパッケージ';
$string['modulename_help'] = 'SCORMパッケージは同意された標準に基づきパッケージされた一連のファイルです。SCORM活動モジュールでは、SCORMおよびAICCパッケージをZIPファイルとしてをアップロードした後、コースに追加することができます。

通常、コンテンツはページ間のナビゲーションと共にそれぞれのページに表示されます。コンテンツを目次およびナビゲーションボタン等と共にポップアップウィンドウ上に表示するための様々なオプションがあります。通常、SCORM活動には問題を含み、評点は評定表に記録されます。

SCORM活動は下記のように使用することができます:

* マルチメディアコンテンツおよびアニメーションの表示のため
* 評価ツールとして';
$string['modulenameplural'] = 'SCORMパッケージ';
$string['nav'] = 'ナビゲーションを表示する';
$string['navdesc'] = 'ここではナビゲーションボタンを表示/非表示およびポジションを設定します。';
$string['nav_help'] = 'この設定では、ナビゲーションボタンの表示または非表示、そのポジションを指定します。

以下3つのオプションがあります:

* なし - ナビゲーションボタンを表示しません。
* コンテンツの下 - SCORMパッケージコンテンツの下にナビゲーションボタンを表示します。
* フロート - ナビゲーションボタンはパッケージによって決定されたトップおよび左からのポジションにフロート表示されます。';
$string['navigation'] = 'ナビゲーション';
$string['navpositionleft'] = '左からのナビゲーションボタンのポジション (ピクセル) です。';
$string['navpositiontop'] = 'トップからのナビゲーションボタンのポジション (ピクセル) です。';
$string['networkdropped'] = 'SCORMプレイヤーはあなたのインターネット接続が信頼できない、または中断されていることを検出しました。このSCORM活動を続ける場合、あなたの進捗が保存されない場合があります。<br />今すぐこの活動を終了して、あなたが信頼できるインターネット接続を利用できるようになった後に戻ってください。';
$string['newattempt'] = '新しい受験を開始する';
$string['next'] = '次へ進む';
$string['noactivity'] = '報告内容はありません。';
$string['noattemptsallowed'] = '許可された受験数';
$string['noattemptsmade'] = 'あなたの受験数';
$string['no_attributes'] = 'タグ {$a->tag} にアトリビュートがありません。';
$string['no_children'] = 'タグ {$a->tag} に子タグがありません。';
$string['nolimit'] = '受験制限なし';
$string['nomanifest'] = 'ファイルパッケージが正しくありません - imsmanifest.xmlまたはAICC構造がありません。';
$string['noprerequisites'] = '申し訳ございません、あなたはこの活動にアクセスするための十分な必要条件に到達していません。';
$string['noreports'] = '表示するレポートはありません。';
$string['normal'] = 'ノーマル';
$string['noscriptnoscorm'] = 'あなたのブラウザがJavaScriptをサポートしていないか、JavaScriptサポートが無効にされています。このSCORMパッケージが実行されないか、データが正常に保存されません。';
$string['notattempted'] = '未受験';
$string['not_corr_type'] = 'タグ {$a->tag} のタイプが合致しません。';
$string['notopenyet'] = '申し訳ございません、この活動は {$a} まで利用することができません。';
$string['objectives'] = '学習目標';
$string['optallstudents'] = 'すべてのユーザ';
$string['optattemptsonly'] = '受験済みのユーザ';
$string['options'] = 'オプション (ブラウザにより動作しない場合もあります)';
$string['optionsadv'] = 'オプション (高度)';
$string['optionsadv_desc'] = 'このオプションを有効にした場合、高さおよび幅が高度なオプションに表示されます。';
$string['optnoattemptsonly'] = '未受験のユーザ';
$string['organization'] = '組織';
$string['organizations'] = '組織';
$string['othersettings'] = '追加設定';
$string['package'] = 'パッケージファイル';
$string['packagedir'] = 'ファイルシステムエラー: パッケージディレクトリを作成できません。';
$string['packagefile'] = 'パッケージファイルが指定されていません。';
$string['packagehdr'] = 'パッケージ';
$string['package_help'] = 'パッケージは有効なAICCまたはSCORMコース定義ファイルを含む、zip (または pif) 拡張子の付いたファイルです。';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'この設定ではファイルピッカよりファイルを選択するのではなく、SCORMパッケージを指定するためのURLを有効にします。';
$string['page-mod-scorm-x'] = 'すべてのSCORMモジュールページ';
$string['pagesize'] = 'ページサイズ';
$string['passed'] = 'パス';
$string['php5'] = 'PHP 5 (DOMXMLネイティブライブラリ)';
$string['pluginadministration'] = 'SCORMパッケージ管理';
$string['pluginname'] = 'SCORMパッケージ';
$string['popup'] = '新しいウィンドウ';
$string['popuplaunched'] = 'SCORMパッケージはポップアップウィンドウに起動します。あなたがこのリソースを終了した場合、ここをクリックしてコースページに戻ってください。';
$string['popupmenu'] = 'ドロップダウンメニュー';
$string['popupopen'] = 'パッケージを新しいウィンドウで開く';
$string['popupsblocked'] = 'ポップアップウィンドウがブロックされたため、SCORMモジュールの実行を停止します。再度開始する前、あなたのブラウザ設定を確認してください。';
$string['position_error'] = '{$a->tag} タグは {$a->parent} タグの子タグになりません';
$string['preferencespage'] = 'このページ限定のプリファレンス';
$string['preferencesuser'] = 'このレポートのプリファレンス';
$string['prev'] = '前に戻る';
$string['raw'] = '実評点';
$string['regular'] = '標準マニフェストファイル';
$string['report'] = 'レポート';
$string['reportcountallattempts'] = '受験回数: {$a->nbattempts} / ユーザ数: {$a->nbusers} (該当数: {$a->nbresults})';
$string['reportcountattempts'] = '受験回数: {$a->nbresults} ({$a->nbusers} ユーザ)';
$string['reports'] = 'レポート';
$string['repositorynotsupported'] = 'このリポジトリはimsmanifest.xmlファイルへの直リンクをサポートしていません。';
$string['response'] = 'レスポンス';
$string['result'] = '結果';
$string['results'] = '結果';
$string['review'] = 'レビュー';
$string['reviewmode'] = 'レビューモード';
$string['rightanswer'] = '正解';
$string['scoes'] = '学習オブジェクト';
$string['score'] = '評点';
$string['scorm12standard'] = 'SCORM 1.2標準モードを有効にする';
$string['scorm12standarddesc'] = 'この設定を無効にすることにより、MoodleはSCORM 1.2仕様で許可されている以上のデータを保存できるようになります。あなたのSCORMパッケージがユーザに大量のテキスト入力を許可している場合、または大量のデータをsuspend_dataフィールドに保存する場合、この設定を無効にしてください。';
$string['scorm:addinstance'] = '新しいSCORMパッケージを追加する';
$string['scormclose'] = '終了日時';
$string['scormcourse'] = '学習コース';
$string['scorm:deleteownresponses'] = '自分の受験を削除する';
$string['scorm:deleteresponses'] = 'SCORM受験を削除する';
$string['scormloggingoff'] = 'APIログイン: OFF';
$string['scormloggingon'] = 'APIログイン: ON';
$string['scormopen'] = '開始日時';
$string['scormresponsedeleted'] = 'ユーザ受験が削除されました。';
$string['scorm:savetrack'] = 'トラックを保存する';
$string['scorm:skipview'] = '概要をスキップする';
$string['scormtype'] = 'タイプ';
$string['scormtype_help'] = 'ここではパッケージがどのようにコースに含まれるか設定します。以下4つのオプションがあります:

* アップロード済みパッケージ - SCORMパッケージをファイルピッカで選択できるようにします。
* 外部SCORMマニフェスト - imsmanifest.xmlのURLを指定できるようにします。注意: URLがあなたのサイトと異なるドメインの場合、評定が保存されないため、「ダウンロード済みパッケージ」を選択することをお勧めします。
* ダウンロード済みパッケージ - パッケージのURLを指定できるようにします。パッケージは解凍され、ローカルに保存されます。また、外部SCORMパッケージが更新された場合、ローカルに保存されたパッケージも更新されます。
* 外部AICC URL - このURLは単一のAICC活動起動用URLです。この周りに擬似パッケージが構築されます。';
$string['scorm:viewreport'] = 'レポートを表示する';
$string['scorm:viewscores'] = '評点を表示する';
$string['scrollbars'] = 'ウィンドウのスクロールを許可する';
$string['selectall'] = 'すべてを選択する';
$string['selectnone'] = 'すべての選択を解除する';
$string['show'] = '表示';
$string['sided'] = 'サイド';
$string['skipview'] = '学生によるコンテンツ構造ページスキップ';
$string['skipviewdesc'] = 'このプリファレンスでは、ページに対するコンテンツ構造のスキップタイミングに関するデフォルトを設定します。';
$string['skipview_help'] = 'この設定ではコンテンツ構造ページをスキップ (非表示) するかどうか指定します。パッケージが学習オブジェクトのみ含む場合、コンテンツ構造ページは常にスキップされます。';
$string['slashargs'] = '警告: このサイトではスラッシュ引数が無効にされています。期待されたとおりにオブジェクトが動作しない場合があります!';
$string['stagesize'] = 'ステージサイズ';
$string['stagesize_help'] = 'これら2つの設定では、学習オブジェクトフレーム/ウィンドウの高さおよび幅を定義します。';
$string['started'] = '開始日時';
$string['status'] = 'ステータス';
$string['statusbar'] = 'ステータスバーを表示する';
$string['student_response'] = 'レスポンス';
$string['subplugintype_scormreport'] = 'レポート';
$string['subplugintype_scormreport_plural'] = 'レポート';
$string['suspended'] = '一時停止';
$string['syntax'] = '構文エラー';
$string['tag_error'] = 'コンテンツに不明なタグ ({$a->tag}) があります:  {$a->value}';
$string['time'] = '時間';
$string['title'] = 'タイトル';
$string['toc'] = 'TOC';
$string['toolbar'] = 'ツールバーを表示する';
$string['too_many_attributes'] = 'タグ {$a->tag} のアトリビュートが多すぎます。';
$string['too_many_children'] = 'タグ {$a->tag} の子タグが多すぎます。';
$string['totaltime'] = '時間';
$string['trackcorrectcount'] = '正解数';
$string['trackcorrectcount_help'] = '問題の正解数';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'この問題に関して、あなたのSCORMパッケージに設定されたIDです。SCORM仕様では、完全な問題テキストの提供は許可されていません。';
$string['trackingloose'] = '警告: このパッケージのトラッキングデータは消滅します!';
$string['tracklatency'] = '待ち時間';
$string['tracklatency_help'] = 'インタクラクション間の経過時間は学習者のレスポンスおよび初回レスポンス時間に利用できます。';
$string['trackpattern'] = 'パターン';
$string['trackpattern_help'] = 'この問題に対する正しい解答です。学習者のレスポンスは表示されません。';
$string['trackresponse'] = 'レスポンス';
$string['trackresponse_help'] = 'この問題に対する学習者のレスポンスです。';
$string['trackresult'] = '結果';
$string['trackresult_help'] = '学習者のレスポンスおよび正解をベースにした受験結果です。';
$string['trackscoremax'] = '最大評点';
$string['trackscoremax_help'] = '素点の範囲の最大値';
$string['trackscoremin'] = '最小評点';
$string['trackscoremin_help'] = '素点の範囲の最小値';
$string['trackscoreraw'] = '素点';
$string['trackscoreraw_help'] = '学習者のパフォーマンスを反映する値です。最大値および最小値の範囲に制限されます。';
$string['tracksuspenddata'] = '保留データ';
$string['tracksuspenddata_help'] = '学習者のセッション間において、データを保存および検索するためのスペースを提供します。';
$string['tracktime'] = '時間';
$string['tracktime_help'] = '受験開始時間';
$string['tracktype'] = 'タイプ';
$string['tracktype_help'] = '例えば、「投票」または「記述問題」のような問題タイプです。';
$string['trackweight'] = '加重';
$string['trackweight_help'] = 'エレメントに割り当てられた加重';
$string['type'] = 'タイプ';
$string['typeaiccurl'] = '外部AICC URL';
$string['typeexternal'] = '外部SCORMマニフェスト';
$string['typelocal'] = 'アップロード済みパッケージ';
$string['typelocalsync'] = 'ダウンロード済みパッケージ';
$string['undercontent'] = 'コンテンツの下';
$string['unziperror'] = 'パッケージの解凍処理中にエラーが発生しました。';
$string['updatefreq'] = '自動更新頻度';
$string['updatefreqdesc'] = 'このプリファレンスでは、活動に対するデフォルトの自動更新頻度を設定します。';
$string['updatefreq_error'] = 'パッケージファイルが外部に置かれている場合のみ、自動更新頻度を設定することができます。';
$string['updatefreq_help'] = 'これにより、外部パッケージが自動的にダウンロードおよび更新されることになります。';
$string['validateascorm'] = 'パッケージの確認';
$string['validation'] = '妥当性確認結果';
$string['validationtype'] = 'このプリファレンスでは、SCORMマニフェストファイルを確認するDOMXMLライブラリを設定します。分からない場合は、このままにしてください。';
$string['value'] = '値';
$string['versionwarning'] = 'マニフェストファイルのバージョンが1.3より古いため、{$a->tag} タグに警告があります。';
$string['viewallreports'] = '{$a} 件の受験レポートを表示する';
$string['viewalluserreports'] = '{$a} 件のユーザレポートを表示する';
$string['whatgrade'] = '複数回受験時の評点';
$string['whatgradedesc'] = '複数受験が許可された場合、最高、平均、最初または最後に完了した受験が評定表に記録されます。';
$string['whatgrade_help'] = '複数回の受験を許可した場合、ここでは最高、平均、最初または最後の受験のどれを評定表に記録するか設定します。最後の受験オプションには「不合格」ステータスの受験を含みません。

複数受験の処理に関するメモ:

* 新しい受験を開始するオプションはコース構造ページ内の「Enter」ボタンの上にチェックボックスとして提供されます。あなたが複数受験を許可したい場合、このページにユーザがアクセスできることを確認してください。
* 他とは異なり、SCORMパッケージは新しい受験に関して洗練されています。学習者が既存の受験に再度入った場合、SCORMコンテンツに上書きを禁止する内部ロジックがないとしても、また受験が「完了」または「合格」にされていたとしても、上書きすることができます。
* 「完了を強制する」「新しい受験を強制する」「最終受験後、ロックする」設定もさらに複数の受験の管理を提供します。';
$string['width'] = '幅';
$string['window'] = 'ウィンドウ設定';
