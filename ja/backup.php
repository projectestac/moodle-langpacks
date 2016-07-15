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
 * Strings for component 'backup', language 'ja', branch 'MOODLE_31_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = '自動バックアップを実行するかどうか選択してください。「手動」が選択された場合、自動バックアップは自動バックアップCLIスクリプトでのみ実行することができます。これはコマンドラインを使った手動またはcronスクリプトを通して実行することができます。';
$string['autoactivedisabled'] = '無効';
$string['autoactiveenabled'] = '有効';
$string['autoactivemanual'] = '手動';
$string['automatedbackupschedule'] = 'スケジュール';
$string['automatedbackupschedulehelp'] = '自動バックアップを実行する週の曜日を選択してください。';
$string['automatedbackupsinactive'] = '自動バックアップはサイト管理者により有効にされていません。';
$string['automatedbackupstatus'] = '自動バックアップステータス';
$string['automateddeletedays'] = '次より古いバックアップを削除する';
$string['automatedmaxkept'] = 'バックアップ保持最大数';
$string['automatedmaxkepthelp'] = 'ここではそれぞれのコースのために保持する最近の自動バックアップ最大数を指定します。古いバックアップは自動的に削除されます。';
$string['automatedminkept'] = 'バックアップ保持最小数';
$string['automatedminkepthelp'] = '指定した日数よりも古いバックアップが削除された場合、休止中のコースにバックアップがない状況が生じることがあります。これを防ぐためにはバックアップを保持する最小数を指定してください。';
$string['automatedsettings'] = '自動バックアップ設定';
$string['automatedsetup'] = '自動バックアップ設定';
$string['automatedstorage'] = '自動バックアップストレージ';
$string['automatedstoragehelp'] = '自動バックアップが作成される場合、あなたがバックアップを保存したい場所を選択してください。';
$string['backupactivity'] = '活動をバックアップする: {$a}';
$string['backupcourse'] = 'コースをバックアップする: {$a}';
$string['backupcoursedetails'] = 'コース詳細';
$string['backupcoursesection'] = 'セクション: {$a}';
$string['backupcoursesections'] = 'コースセクション';
$string['backupdate'] = '取得日時';
$string['backupdetails'] = 'バックアップ詳細';
$string['backupdetailsnonstandardinfo'] = '選択されたファイルは標準的なMoodleバックアップファイルではありません。リストア処理はバックアップファイルの標準的なフォーマットへの変換およびリストアを試みます。';
$string['backupformat'] = 'フォーマット';
$string['backupformatimscc1'] = 'IMS共通カートリッジ 1.0';
$string['backupformatimscc11'] = 'IMS共通カートリッジ 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = '不明なフォーマット';
$string['backuplog'] = '技術情報および警告';
$string['backupmode'] = 'モード';
$string['backupmode10'] = '一般';
$string['backupmode20'] = 'インポート';
$string['backupmode30'] = 'ハブ';
$string['backupmode40'] = '同一サイト';
$string['backupmode50'] = '自動';
$string['backupmode60'] = 'コンバート';
$string['backupsection'] = 'コースセクションをバックアップする: {$a}';
$string['backupsettings'] = 'バックアップ設定';
$string['backupsitedetails'] = 'サイト詳細';
$string['backupstage16action'] = '続ける';
$string['backupstage1action'] = '次へ';
$string['backupstage2action'] = '次へ';
$string['backupstage4action'] = 'バックアップを実行する';
$string['backupstage8action'] = '続ける';
$string['backuptype'] = 'タイプ';
$string['backuptypeactivity'] = '活動';
$string['backuptypecourse'] = 'コース';
$string['backuptypesection'] = 'セクション';
$string['backupversion'] = 'バックアップバージョン';
$string['cannotfindassignablerole'] = 'あなたが割り当て許可されているロールにバックアップファイル内ロール ($a) をマップすることができません。';
$string['choosefilefromactivitybackup'] = '活動バックアップエリア';
$string['choosefilefromactivitybackup_help'] = 'デフォルト設定を使用した活動バックアップがここに保存されます。';
$string['choosefilefromautomatedbackup'] = '自動バックアップ';
$string['choosefilefromautomatedbackup_help'] = '自動生成バックアップを含みます。';
$string['choosefilefromcoursebackup'] = 'コースバックアップエリア';
$string['choosefilefromcoursebackup_help'] = 'デフォルト設定を使用したコースバックアップがここに保存されます。';
$string['choosefilefromuserbackup'] = 'ユーザプライベートバックアップエリア';
$string['choosefilefromuserbackup_help'] = 'ユーザ情報を匿名化したバックアップファイルがここに保存されます。';
$string['configgeneralactivities'] = '活動をバックアップに含むかどうか、デフォルトを設定します。';
$string['configgeneralanonymize'] = 'この設定を有効にした場合、ユーザに関する情報がデフォルトで匿名化されます。';
$string['configgeneralbadges'] = 'バックアップにバッジを含むようデフォルトに設定します。';
$string['configgeneralblocks'] = 'ブロックをバックアップに含むかどうか、デフォルトを設定します。';
$string['configgeneralcomments'] = 'コメントをバックアップに含むかどうか、デフォルトを設定します。';
$string['configgeneralfilters'] = 'フィルタをバックアップに含むかどうか、デフォルトを設定します。';
$string['configgeneralgroups'] = 'グループおよびグルーピングをバックアップに含むことに関するデフォルトを設定します。';
$string['configgeneralhistories'] = 'ユーザ履歴をバックアップに含むかどうか、デフォルトを設定します。';
$string['configgenerallogs'] = 'この設定を有効にした場合、デフォルトでログがバックアップに含まれます。';
$string['configgeneralquestionbank'] = 'この設定を有効にした場合、問題バンクがデフォルトでバックアップに含まれます。注意: この設定を無効にした場合、小テストのように問題バンクを使用する活動のバックアップも無効にされます。';
$string['configgeneralroleassignments'] = 'この設定を有効にした場合、デフォルトのロール割り当てもバックアップに含まれます。';
$string['configgeneralusers'] = 'バックアップにユーザを含むかどうか、デフォルトを設定します。';
$string['configgeneraluserscompletion'] = 'ユーザ完了情報をバックアップに含むかどうか、デフォルトを設定します。';
$string['configloglifetime'] = 'ここではあなたが希望するバックアップログ情報の保持期間を指定します。設定値より古いログは自動的に削除されます。バックアップログ情報は肥大化する可能性があるため、この値を小さく設定することをお勧めします。';
$string['confirmcancel'] = 'バックアップをキャンセルする';
$string['confirmcancelno'] = '継続';
$string['confirmcancelquestion'] = '本当にキャンセルしてもよろしいですか? あなたが入力したすべての情報は失われます。';
$string['confirmcancelyes'] = 'キャンセル';
$string['confirmnewcoursecontinue'] = '新しいコース警告';
$string['confirmnewcoursecontinuequestion'] = 'コースリストア処理中、一時 (非表示) コースが作成されます。リストアを中止するには「キャンセル」をクリックしてください。リストア処理中はブラウザを閉じないでください。';
$string['coursecategory'] = 'コースがリストアされるカテゴリ';
$string['courseid'] = 'オリジナルID';
$string['coursesettings'] = 'コース設定';
$string['coursetitle'] = 'タイトル';
$string['currentstage1'] = '初期設定';
$string['currentstage16'] = '完了';
$string['currentstage2'] = 'スキーマ設定';
$string['currentstage4'] = '確認およびレビュー';
$string['currentstage8'] = 'バックアップを実行する';
$string['enterasearch'] = 'キーワードを入力する';
$string['error_block_for_module_not_found'] = 'コースモジュール (id: {$a->mid}) において、迷子のブロックインスタンス (id: {$a->bid}) が見つかりました。このブロックはバックアップされません。';
$string['error_course_module_not_found'] = '迷子のコースモジュール (id: {$a}) が見つかりました。このモジュールはバックアップされません。';
$string['errorfilenamemustbezip'] = 'あなたが入力するファイル名は.mbz拡張子を持つZIPファイルである必要があります。';
$string['errorfilenamerequired'] = 'あなたはこのバックアップに関して、有効なファイル名を入力する必要があります。';
$string['errorinvalidformat'] = '不明なバックアップフォーマットです。';
$string['errorinvalidformatinfo'] = '選択されたファイルは有効なMoodleバックアップファイルではないため、リストアすることはできません。';
$string['errorminbackup20version'] = 'このバックアップファイルは開発バージョンのMoodleバックアップ ({$a->backup}) により作成されました。最小必要条件は {$a->min} です。リストアすることはできません。';
$string['errorrestorefrontpagebackup'] = 'フロントページにおいて、あなたはフロントページバックアップのみリストアすることができます。';
$string['executionsuccess'] = 'バックアップファイルが正常に作成されました。';
$string['filealiasesrestorefailures'] = 'エイリアスリストア失敗';
$string['filealiasesrestorefailures_help'] = 'エイリアスは外部リポジトリに保存されたファイルを含む、他のファイルへのシンボリックリンクです。一部の例ではMoodeがシンボリックリンクをリストアできない場合があります - 例えば、別のサイトでのバックアップをリストアする場合、または参照ファイルが存在しくなった場合です。

詳細情報および実際のリストア失敗理由に関して、リストアログファイルをご覧ください。';
$string['filealiasesrestorefailuresinfo'] = 'バックアップファイルに含まれるいくつかのエイリアスをリストアすることができませんでした。下記のリストではオリジナルサイトで参照されていた予測されるロケーションおよびソースファイルを含みます。';
$string['filename'] = 'ファイル名';
$string['filereferencesincluded'] = '外部コンテンツのファイル参照がバックアップファイルに含まれます。バックアップが異なるサイトでリストアされる場合、これらは動作しません。';
$string['filereferencesnotsamesite'] = 'バックアップは異なるサイトで作成されているため、ファイル参照をリストアすることはできません。';
$string['filereferencessamesite'] = 'バックアップはこのサイトで作成されているため、ファイル参照をリストアすることができます。';
$string['generalactivities'] = '活動およびリソースを含む';
$string['generalanonymize'] = '情報を匿名化する';
$string['generalbackdefaults'] = '一般バックアップデフォルト';
$string['generalbadges'] = 'バッジを含む';
$string['generalblocks'] = 'ブロックを含む';
$string['generalcomments'] = 'コメントを含む';
$string['generalfilters'] = 'フィルタを含む';
$string['generalgradehistories'] = '履歴を含む';
$string['generalgroups'] = 'グループおよびグルーピングを含む';
$string['generalhistories'] = '履歴を含む';
$string['generallogs'] = 'ログを含む';
$string['generalquestionbank'] = '問題バンクを含む';
$string['generalroleassignments'] = 'ロール割り当てを含む';
$string['generalsettings'] = '一般バックアップ設定';
$string['generalusers'] = 'ユーザを含む';
$string['generaluserscompletion'] = 'ユーザ完了情報を含む';
$string['hidetypes'] = 'タイプオプションを隠す';
$string['importbackupstage16action'] = '続ける';
$string['importbackupstage1action'] = '次へ';
$string['importbackupstage2action'] = '次へ';
$string['importbackupstage4action'] = 'インポートを実行する';
$string['importbackupstage8action'] = '続ける';
$string['importcurrentstage0'] = 'コース選択';
$string['importcurrentstage1'] = '初期設定';
$string['importcurrentstage16'] = '完了';
$string['importcurrentstage2'] = 'スキーマ設定';
$string['importcurrentstage4'] = '確認およびレビュー';
$string['importcurrentstage8'] = 'インポートを実行する';
$string['importfile'] = 'バックアップファイルをインポートする';
$string['importgeneralduplicateadminallowed'] = 'admin競合解決を許可する';
$string['importgeneralduplicateadminallowed_desc'] = 'サイトにユーザ名「admin」が存在する場合、ユーザ名「admin」のアカウントを含むバックアップファイルのリストアにより競合が発生することになります。この設定を有効にした場合、バックアップファイル内のユーザ名を「admin_xyz」に変更することにより競合を解決します。';
$string['importgeneralmaxresults'] = 'インポートの最大コース一覧表示数';
$string['importgeneralmaxresults_desc'] = 'ここではインポート処理の最初のステップに一覧表示されるコース数を設定します。';
$string['importgeneralsettings'] = '一般インポートデフォルト';
$string['importsuccess'] = 'インポートが完了しました。コースへ戻るには「続ける」をクリックしてください。';
$string['includeactivities'] = '次を含む:';
$string['includeditems'] = '含まれるアイテム:';
$string['includefilereferences'] = '外部コンテンツへのファイル参照';
$string['includesection'] = 'セクション {$a}';
$string['includeuserinfo'] = 'ユーザデータ';
$string['jumptofinalstep'] = '最終ステップにジャンプする';
$string['locked'] = 'ロック';
$string['lockedbyconfig'] = 'この設定はデフォルトバックアップ設定によりロックされています。';
$string['lockedbyhierarchy'] = 'この設定は依存関係によりロックされています。';
$string['lockedbypermission'] = 'あなたにはこの設定を変更するための十分なパーミッションがありません。';
$string['loglifetime'] = 'ログの保持期間';
$string['managefiles'] = 'バックアップファイルを管理する';
$string['missingfilesinpool'] = 'バックアップ中、いくつかのファイルを保存することができませんでした。保存できなかったファイルはリストアすることができません。';
$string['module'] = 'モジュール';
$string['moodleversion'] = 'Moodleバージョン';
$string['morecoursesearchresults'] = '{$a} 件以上のコースが見つかりました。最初の {$a} 件を表示しています。';
$string['moreresults'] = '検索結果が多すぎます。さらに具体的なキーワードを入力してください。';
$string['nomatchingcourses'] = '表示するコースがありません。';
$string['norestoreoptions'] = 'あなたがリストアできるカテゴリまたは既存のコースがありません。';
$string['originalwwwroot'] = 'バックアップのURL';
$string['preparingdata'] = 'データ準備中';
$string['preparingui'] = '表示ページ準備中';
$string['previousstage'] = '前へ';
$string['qcategory2coursefallback'] = '本来はバックアップファイルのシステム/コースカテゴリコンテクストにある問題カテゴリ「 {$a->name} 」はリストアによりコースコンテクストに作成されます。';
$string['qcategorycannotberestored'] = '問題カテゴリ「 {$a->name} 」をリストアで作成できません。';
$string['question2coursefallback'] = '本来バックアップファイルのシステム/コースカテゴリコンテクストにある問題カテゴリ「 {$a->name} 」はリストアによりコースコンテクストに作成されます。';
$string['questionegorycannotberestored'] = '問題カテゴリ「 {$a->name} 」をリストアで作成できません。';
$string['restoreactivity'] = '活動をリストアする';
$string['restorecourse'] = 'コースをリストアする';
$string['restorecoursesettings'] = 'コース設定';
$string['restoreexecutionsuccess'] = 'コースが正常にリストアされました。「続ける」ボタンをクリックすることにより、あなたがリストアしたコースを閲覧することができます。';
$string['restorefileweremissing'] = 'バックアップの中に存在しないため、いくつかのファイルをリストアすることができませんでした。';
$string['restorenewcoursefullname'] = '新しいコース名';
$string['restorenewcourseshortname'] = '新しいコース省略名';
$string['restorenewcoursestartdate'] = '新しい開講日';
$string['restorerolemappings'] = 'ロールマッピングをリストアする';
$string['restorerootsettings'] = 'リストア設定';
$string['restoresection'] = 'セクションをリストアする';
$string['restorestage1'] = '確認';
$string['restorestage16'] = 'レビュー';
$string['restorestage16action'] = 'リストアを実行する';
$string['restorestage1action'] = '次へ';
$string['restorestage2'] = '宛先';
$string['restorestage2action'] = '次へ';
$string['restorestage32'] = '処理';
$string['restorestage32action'] = '続ける';
$string['restorestage4'] = '設定';
$string['restorestage4action'] = '次へ';
$string['restorestage64'] = '完了';
$string['restorestage64action'] = '続ける';
$string['restorestage8'] = 'スキーマ';
$string['restorestage8action'] = '次へ';
$string['restoretarget'] = 'リストアターゲット';
$string['restoretocourse'] = 'コースにリストアする:';
$string['restoretocurrentcourse'] = 'このコースにリストアする';
$string['restoretocurrentcourseadding'] = 'バックアップコースをこのコースに結合する';
$string['restoretocurrentcoursedeleting'] = 'このコースのコンテンツを削除してリストアする';
$string['restoretoexistingcourse'] = '既存のコースにリストアする';
$string['restoretoexistingcourseadding'] = 'バックアップコースを既存のコースに結合する';
$string['restoretoexistingcoursedeleting'] = '既存のコースコンテンツを削除してリストアする';
$string['restoretonewcourse'] = '新しいコースとしてリストアする';
$string['restoringcourse'] = 'コースリストア処理中';
$string['restoringcourseshortname'] = 'リストア';
$string['rootenrolmanual'] = '手動登録としてリストアする';
$string['rootsettingactivities'] = '活動およびリソースを含む';
$string['rootsettinganonymize'] = 'ユーザ情報を匿名化する';
$string['rootsettingbadges'] = 'バッジを含む';
$string['rootsettingblocks'] = 'ブロックを含む';
$string['rootsettingcalendarevents'] = 'カレンダーイベントを含む';
$string['rootsettingcomments'] = 'コメントを含む';
$string['rootsettingcompetencies'] = 'コンピテンシーを含む';
$string['rootsettingfilters'] = 'フィルタを含む';
$string['rootsettinggradehistories'] = '評定履歴を含む';
$string['rootsettinggroups'] = 'グループおよびグルーピングを含む';
$string['rootsettingimscc1'] = 'IMS共通カートリッジ1.0にコンバートする';
$string['rootsettingimscc11'] = 'IMS共通カートリッジ1.1にコンバートする';
$string['rootsettinglogs'] = 'コースログを含む';
$string['rootsettingquestionbank'] = '問題バンクを含む';
$string['rootsettingroleassignments'] = 'ユーザロール割り当てを含む';
$string['rootsettings'] = 'バックアップ設定';
$string['rootsettingusers'] = '登録済みユーザを含む';
$string['rootsettinguserscompletion'] = 'ユーザ完了詳細を含む';
$string['sectionactivities'] = '活動';
$string['sectioninc'] = 'バックアップに含む (ユーザ情報なし)';
$string['sectionincanduser'] = 'バックアップに含む (ユーザ情報あり)';
$string['selectacategory'] = 'カテゴリを選択する';
$string['selectacourse'] = 'コースを選択する';
$string['setting_course_fullname'] = 'コース名';
$string['setting_course_shortname'] = 'コース省略名';
$string['setting_course_startdate'] = 'コース開講日';
$string['setting_keep_groups_and_groupings'] = '現在のグループおよびグルーピングを保持する';
$string['setting_keep_roles_and_enrolments'] = '現在のロールおよび登録を保持する';
$string['setting_overwriteconf'] = 'コース設定を上書きする';
$string['showtypes'] = 'タイプオプションを表示する';
$string['sitecourseformatwarning'] = 'これはフロントページバックアップです。フロントページのみにリストアできることに留意してください。';
$string['skiphidden'] = '非表示コースをスキップする';
$string['skiphiddenhelp'] = '非表示コースをスキップするかどうか選択します。';
$string['skipmodifdays'] = '次の期間更新されていないコースをスキップする';
$string['skipmodifdayshelp'] = '指定された日数の間に更新されていないコースをスキップするかどうか選択します。';
$string['skipmodifprev'] = '前回のバックアップから更新されていないコースをスキップする';
$string['skipmodifprevhelp'] = '前回のバックアップから更新されていないコースをスキップするかどうか選択してください。ロギングを有効にする必要があります。';
$string['storagecourseandexternal'] = 'コースバックアップファイルエリアおよび指定ディレクトリ';
$string['storagecourseonly'] = 'コースバックアップファイルエリア';
$string['storageexternalonly'] = '自動バックアップの指定ディレクトリ';
$string['timetaken'] = '所要時間';
$string['title'] = 'タイトル';
$string['totalcategorysearchresults'] = '合計カテゴリ数: {$a}';
$string['totalcoursesearchresults'] = '合計コース数: {$a}';
$string['unnamedsection'] = '無名セクション';
$string['userinfo'] = 'ユーザ情報';
