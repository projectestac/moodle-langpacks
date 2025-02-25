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
 * Strings for component 'block_mrbs', language 'ja', version '4.4'.
 *
 * @package     block_mrbs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about_mrbs'] = 'MRBSについて';
$string['accessdenied'] = 'アクセスが拒否されました';
$string['accessmrbs'] = 'Schedule a Resource';
$string['addarea'] = 'エリアを追加';
$string['addentry'] = '予約を追加';
$string['addroom'] = '部屋を追加';
$string['adminview'] = 'MRBSインストール先のURL？';
$string['advanced_search'] = '高度な検索';
$string['all_day'] = '終日';
$string['area'] = 'エリア';
$string['area_admin_email'] = 'エリア管理者Eメール';
$string['areas'] = '部署';
$string['backadmin'] = '管理画面に戻る';
$string['bgcolor'] = '背景色';
$string['blockname'] = '施設予約';
$string['booking_users'] = '予約できるユーザ';
$string['booking_users_help'] = 'この部屋を予約できるユーザのEmailアドレスをコンマ区切りで指定してください。誰でも予約できるようにするには空白のままにしてください。';
$string['bookingmoved'] = '予約が変更されました';
$string['bookingmovedmessage'] = '予約名「{$a->name}： {$a->oldroom}  [ {$a->date}, {$a->starttime}]が、同時間帯の予約「{$a->newroom} ({$a->area})」に変更されました。注意：コンピュータの最良推定に基づく変更なので、適切かどうか授業前に確認してください。';
$string['bookingmovedshort'] = '{$a->name} は {$a->newroom} に変更されました';
$string['bookingmoveerror'] = '部屋予約エラー';
$string['bookingmoveerrormessage'] = '{$a->name} (id: {$a->id})の変更ができませんでした';
$string['bookingmoveerrorshort'] = '{$a->name}の変更ができませんでした。管理者に通知します。';
$string['bookingsfor'] = 'の予約';
$string['bookingsforpost'] = 'の予約です';
$string['both'] = '両方';
$string['brief_description'] = '簡単な説明';
$string['browserlang'] = 'お使いのブラウザの言語設定は、次の順序で設定されています。';
$string['capacity'] = '収容人数';
$string['charset'] = 'UTF-8';
$string['clash'] = '競合: {$a->oldbooking} {$a->newbooking} {$a->time}  部屋名: {$a->room}';
$string['clashemailbody'] = '最近の時間割インポートにより、競合が生じました： {$a->time}, {$a->oldbooking} と {$a->newbooking} が同時に {$a->room} を予約しようとしています。直接連絡を取りあって問題解決して下さい。
このメールは予約システムによる自動送信の警告です。解決はご自身でお願いします。
もし、何かの間違いと思われる場合は {$a->admin}にご連絡下さい。';
$string['clashemailnotsent'] = 'Emailを送れませんでした：';
$string['clashemailsent'] = 'Emailを送りました：';
$string['clashemailsub'] = '部屋使用競合の警告';
$string['class'] = 'クラス';
$string['click_to_reserve'] = '予約を入れたいセルをクリックしてください。';
$string['computerroom'] = 'コンピュータルームのみ';
$string['computerrooms'] = 'コンピュータルーム';
$string['config_admin'] = 'MRBS管理者';
$string['config_admin2'] = 'MRBS管理者名';
$string['config_admin_email'] = 'MRBS管理者Email';
$string['config_admin_email2'] = 'MRBS管理者のEmailアドレス。MRBSのEmail通知を受信したい場合はMoodleユーザアカウントに属性を設定してください。';
$string['config_area_list_format'] = 'エリアリストを見る';
$string['config_area_list_format2'] = 'エリア一覧方法（リストまたはドロップダウンボックス）';
$string['config_cookie_path_override'] = 'クッキーPathの上書き';
$string['config_cookie_path_override2'] = 'この値を設定するとphpセッションのデフォルトの挙動（cookieパスの自動決定）が置き換えられます。';
$string['config_date_ddmmyy'] = '10日7月';
$string['config_date_mmddyy'] = '7月10日';
$string['config_dateformat'] = '日付書式';
$string['config_dateformat2'] = 'MRBS用の日付書式';
$string['config_default_report_days'] = '報告頻度（日数）';
$string['config_default_report_days2'] = '標準報告頻度（日数）';
$string['config_default_room'] = 'デフォルトの部屋';
$string['config_default_room2'] = 'デフォルトの部屋の初期設定を定義（index.phpで使用）。部屋番号は管理ページの編集か削除のURLを見るとわかります。';
$string['config_default_view'] = 'デフォルト表示画面';
$string['config_default_view2'] = 'デフォルト初期画面定義（月、週、日）';
$string['config_enable_periods'] = '使用期間';
$string['config_enable_periods2'] = '単位時間のカスタム設定。「いいえ」に設定すると、MRBSはタイムブロックを使って設定する。';
$string['config_entry_type'] = '項目タイプ {$a}';
$string['config_entry_type2'] = '以下のイベントタイプは「エントリ追加」に表示される。デフォルトで、各エントリタイプに異なる色が割り当てられる。エントリタイプは、エントリA, エントリB, エントリC...の順で表示される。';
$string['config_eveningends'] = '終了時';
$string['config_eveningends2'] = '最終時刻。このオプションを使うには使用時間をオフにする必要があります。';
$string['config_eveningends_min'] = '終了分';
$string['config_eveningends_min2'] = '最終分。このオプションを使うには使用時間をオフにする必要があります。';
$string['config_highlight_method'] = 'ハイライト方法';
$string['config_highlight_method2'] = 'ハイライト方法を選んで下さい：背景色、クラス、混合';
$string['config_javascript_cursor'] = 'Javascriptカーソル';
$string['config_javascript_cursor2'] = 'ユーザがJavascriptの使えない古いブラウザを使っている場合はfalseに設定。';
$string['config_mail_admin_all'] = '全管理者へメール';
$string['config_mail_admin_all2'] = '全ての変更を管理者にメール';
$string['config_mail_admin_on_bookings'] = '予約を管理者にメール';
$string['config_mail_admin_on_bookings2'] = '管理者に新しい予約の通知メールを送る';
$string['config_mail_admin_on_delete'] = '削除を管理者にメール';
$string['config_mail_admin_on_delete2'] = '管理者に削除の通知メールを送る';
$string['config_mail_area_admin_on_bookings'] = 'エリア管理者へメール';
$string['config_mail_area_admin_on_bookings2'] = 'エリア管理者に新しい予約の通知メールを送る';
$string['config_mail_booker'] = '予約者にメール';
$string['config_mail_booker2'] = '予約者に新しい予約のメールを送る';
$string['config_mail_cc'] = 'メールCC';
$string['config_mail_cc2'] = 'メールのCCフィールドにEmailアドレスを設定。デフォルトは空白。受信者と同様、複数指定可能。送り先はMoodleユーザアカウントと関連付けられたアドレスに限る。';
$string['config_mail_details'] = 'メール詳細';
$string['config_mail_details2'] = 'メール詳細';
$string['config_mail_from'] = '差出人';
$string['config_mail_from2'] = '差出人に設定するアドレス。デフォルトはサイト管理者。差出アドレスはMoodleユーザアカウントと関連付けられたアドレスに限る。';
$string['config_mail_recipients'] = '送信先';
$string['config_mail_recipients2'] = '送信先Emailを設定。コンマ区切りで複数指定可能。Moodleユーザアカウントと関連付けられたアドレスに限る。';
$string['config_mail_room_admin_on_bookings'] = '部屋管理者にメール';
$string['config_mail_room_admin_on_bookings2'] = '部屋管理者に新しい予約の通知メールを送る';
$string['config_max_advance_days'] = '事前予約最大日数';
$string['config_max_advance_days2'] = '予約の最大事前日数。-1 で無制限。mrbs:ignoremaxadvancedays が設定されたユーザ(デフォルトではサイト管理者とmrbs管理者)は設定によらず無制限。';
$string['config_max_rep_entrys'] = '最大の繰返し数';
$string['config_max_rep_entrys2'] = '最大の繰返しエントリ数（⁺1すること）';
$string['config_monthly_view_entries_details'] = '月の詳細';
$string['config_monthly_view_entries_details2'] = '月次表示は、枠の開始/終了、概要、あるいはその両方を表示可能。デフォルトは両方だが、6エントリしか表示できない。一方の場合は12エントリまで表示可。';
$string['config_morningstarts'] = '開始時間';
$string['config_morningstarts2'] = '一日の始まりの時刻。このオプションを使うときは「期間」をオフにすること。';
$string['config_morningstarts_min'] = '開始分';
$string['config_morningstarts_min2'] = '日の開始時刻（分）。使用する場合は「期間」をオフにすること。';
$string['config_new_window'] = 'ウィンドウ';
$string['config_new_window2'] = '「新しいウィンドウ」を選ぶと、MRBSブロック用に新しいウィンドウが開きます。「同じウィンドウ」を選ぶとMoodleのウィンドウ内にMoodleヘッダーつきで開きます。';
$string['config_periods'] = 'カスタム時間幅';
$string['config_periods2'] = '名前か概要を、1行に1つ、時系列順に定義します。';
$string['config_refresh_rate'] = 'ページリフレッシュ時間';
$string['config_refresh_rate2'] = 'ページの情報が最新になるよう表示を自動更新する時間（秒）。0にすると自動更新なし';
$string['config_resolution'] = '時間ブロック';
$string['config_resolution2'] = '予定に入れる時間ブロックです。使う場合は「期間」をオフにする必要があります。';
$string['config_search_count'] = 'ページ当りの検索結果';
$string['config_search_count2'] = '検索結果のページ当りの件数';
$string['config_show_plus_link2'] = '+リンクを常に表示するにはオンに設定します';
$string['config_timeformat'] = '時間表示形式';
$string['config_timeformat2'] = 'MRBSで使用する時間の表示形式';
$string['config_times_right_side'] = '時間右表示';
$string['config_times_right_side2'] = '週表示の時に時間を右側に表示するときオン';
$string['config_view_week_number'] = '週番号表示';
$string['config_view_week_number2'] = '画面下部に週番号（一年の初めから何週目か）を表示する場合、オン';
$string['config_weeklength'] = '週の日数';
$string['config_weeklength2'] = '一週間のうち何日を表示するか';
$string['config_weekstarts'] = '週の開始';
$string['config_weekstarts2'] = '週の開始日を選ぶ';
$string['confirmdel'] = 'このエントリを削除してもよろしいですか?';
$string['conflict'] = '新しい予約は、以下の登録と重複しています:';
$string['createdby'] = '予約者';
$string['cronfile'] = 'セッションインポートファイルの場所';
$string['cronfiledesc'] = 'セッションの自動インポート機能を使いたい場合、ファイルの場所を入力して下さい。ファイルはウェブサーバのユーザアカウントで移動可能であることが必要です。その後、専用の予約タイプをオンにしてください。';
$string['ctrl_click'] = '複数の部屋を選択するときは、<br>Controlキーを押しながらクリックしてください。';
$string['ctrl_click_type'] = '複数の形態を選択するときは、Controlキーを押しながらクリックしてください。';
$string['database'] = 'データベース';
$string['dayafter'] = '次の日移動';
$string['daybefore'] = '前の日に移動';
$string['days'] = '日';
$string['delarea'] = '削除する前に、この部署に属する全ての部屋を削除しなければなりません。<p>';
$string['delete_user'] = 'このユーザを削除';
$string['deleteentry'] = '予約を削除';
$string['deletefollowing'] = '以下の予約を削除します';
$string['deleteseries'] = '定例予約を削除';
$string['dontshowoccupied'] = '予約済の部屋を表示しない';
$string['doublebookebody'] = 'ユーザー {$a->user} が、あなたと競合する予約 {$a->room}, {$a->date} {$a->time} を入れました。あなたのもとの予約 {$a->oldbooking} は {$a->newbooking} に変更されます。問題なければ何もしないでかまいません。問題がある場合、問題解消のため、当該ユーザと協議して下さい。このメッセージはオンライン予約システムによる自動送信です。何かの間違いと思われる場合、 管理者 ( {$a->admin} ) に連絡して下さい。';
$string['doublebookefailbody'] = '以下のメールを{$a}に送れませんでした：';
$string['doublebookefailsubject'] = '重複予約通知失敗';
$string['doublebookesubject'] = '重複予約通知';
$string['duration'] = '所要時間';
$string['edit_user'] = 'ユーザを編集';
$string['editarea'] = '部署を編集';
$string['editentry'] = '予約を編集';
$string['editingserieswarning'] = '連続予約のうちの1回分を編集中です。全予約を編集したい場合はこちら：';
$string['editroom'] = '部屋を編集';
$string['editroomarea'] = '部署や部屋の説明';
$string['editseries'] = '定例予約を編集';
$string['email_failed'] = 'Email送信失敗';
$string['end_date'] = '終了時刻';
$string['entries_found'] = '個のエントリーが見つかりました';
$string['entry'] = 'エントリ';
$string['entry_found'] = '個のエントリーが見つかりました';
$string['entryid'] = '予約ID';
$string['error_area'] = 'エラー: 部署';
$string['error_room'] = 'エラー: 部屋';
$string['error_send_email'] = '次の宛先へのEmail送信に失敗しました： {$a}';
$string['eventbookingcreated'] = '予約されました';
$string['eventbookingupdated'] = '予約更新されました';
$string['external'] = '外部会議';
$string['failed_connect_db'] = '致命的なエラー: データベースに接続できません。';
$string['failed_to_acquire'] = 'データベースへの排他的なアクセスの確保に失敗しました';
$string['findroom'] = '部屋を探す';
$string['finishedimport'] = '処理完了。所要時間 {$a} 秒';
$string['for_any_questions'] = 'にお尋ねください。';
$string['forciblybook'] = '強制予約';
$string['forciblybook2'] = '強制予約（自動的に他の予約を移動）';
$string['fulldescription'] = '詳細な説明<br>(人数,<br>内部会議/外部会議 等)';
$string['goroom'] = '進む';
$string['goto'] = '移動';
$string['gotoroom'] = '移動';
$string['gotothismonth'] = '今月に移動';
$string['gotothisweek'] = '今週に移動';
$string['gototoday'] = '本日に移動';
$string['help_wildcard'] = '注）どのテキストボックスでも％記号をワイルドカードとして使えます。';
$string['highlight_line'] = 'この行を強調';
$string['hours'] = '時間';
$string['hybrid'] = 'ハイブリッド';
$string['idontcare'] = '重複予約になってもかまわない';
$string['importedbooking'] = 'インポートされた予約';
$string['importedbookingmoved'] = 'インポートされた予約（編集済）';
$string['importlog'] = 'MRBSインポートログ';
$string['in'] = '-';
$string['include'] = '報告内容';
$string['internal'] = '内部会議';
$string['invalid_booking'] = '不正な予約';
$string['invalid_entry_id'] = '不正な予約IDです。';
$string['invalid_search'] = '検索語が空または不正です。';
$string['invalid_series_id'] = '不正な定例予約IDです。';
$string['mail_body_changed_entry'] = 'エントリが変更されました。詳細は以下のとおりです:';
$string['mail_body_del_entry'] = 'エントリが削除されました。詳細は以下のとおりです:';
$string['mail_body_new_entry'] = '新規エントリが予約されました。詳細は以下のとおりです:';
$string['mail_changed_entry'] = 'エントリが変更されました。詳細は以下の通りです。';
$string['mail_deleted_entry'] = 'エントリが削除されました。詳細は以下の通りです。';
$string['mail_new_entry'] = '新しいエントリが予約されました。詳細は以下の通りです。';
$string['mail_subject'] = '件名';
$string['mail_subject_delete'] = 'MRBSエントリの削除： {$a->date}, {$a->room} (予約者 {$a->user})';
$string['mail_subject_entry'] = 'MRBSエントリの追加/変更： {$a->date}, {$a->room} (予約者 {$a->user})';
$string['mail_subject_newentry'] = 'エントリが追加されました： {$a->date}, {$a->room} (予約者 {$a->user})';
$string['match_area'] = '部署の一致';
$string['match_descr'] = '詳細な説明との一致';
$string['match_entry'] = '簡単な説明との一致';
$string['match_room'] = '部屋の一致';
$string['match_type'] = '形態の一致';
$string['mincapacity'] = '最小定員';
$string['minutes'] = '分';
$string['month'] = '月';
$string['monthafter'] = '次の月に移動';
$string['monthbefore'] = '前の月に移動';
$string['movedto'] = '移動：';
$string['mrbs'] = '会議室予約システム';
$string['mrbs:addinstance'] = 'MRBSブロックを個人ページに追加';
$string['mrbs:administermrbs'] = 'MRBS　部屋と設定の変更';
$string['mrbs:doublebook'] = '部屋の重複予約';
$string['mrbs:editmrbs'] = 'MRBS予約の編集';
$string['mrbs:editmrbsunconfirmed'] = '未確定予約のみ作成可能（editmrbsで上書き可）';
$string['mrbs:forcebook'] = '強制部屋予約（既存予約を強制移動）';
$string['mrbs:ignoremaxadvancedays'] = '\'max_advance_days\' 設定を無視';
$string['mrbs:myaddinstance'] = '新規MRBSブロック追加';
$string['mrbs:viewalltt'] = '前ユーザの時間割を見る';
$string['mrbs:viewmrbs'] = 'MRBS予約を見る';
$string['mrbsadmin'] = 'MRBS管理者';
$string['mrbsadmin_desc'] = 'このロール（システムレベル）のユーザは、エリアと部屋の作成、他ユーザの予約、強制予約、重複予約など、MRBS時間割の全設定ができます。';
$string['mrbseditor'] = 'MRBS編集者';
$string['mrbseditor_desc'] = 'このロール（システムレベル）のユーザは自身の予約編集ができます。';
$string['mrbsviewer'] = 'MRBS表示';
$string['mrbsviewer_desc'] = 'このロール（システムレベル）のユーザはMRBS時間割を見ることができるが変更はできない';
$string['must_set_description'] = '予約のための簡単な説明を設定する必要があります。戻って入力してください。';
$string['must_set_name'] = '名前を設定してください';
$string['mustlogin'] = 'MRBSカレンダーブックにアクセスするにはMoodleへのログインが必要';
$string['namebooker'] = '概要';
$string['newwindow'] = '新しいウィンドウ';
$string['no_rooms_for_area'] = 'この部署には部屋が設定されていません';
$string['no_user_with_email'] = '{$a} のアドレスのユーザは見つかりませんでした。Moodleアカウントに関連付けてください。';
$string['no_users_create_first_admin'] = '管理者権限を持つユーザを作成すると、管理者権限ユーザでログインして、他ユーザを作成することが可能になります。';
$string['no_users_initial'] = '初期のユーザを作成可能なユーザが、データベースに存在しません。';
$string['noarea'] = '部署が選択されていません';
$string['noareas'] = '部署がありません。';
$string['norights'] = 'この項目を変更するアクセス権がありません。';
$string['norooms'] = '部屋がありません。';
$string['noroomsfound'] = '部屋が見つかりませんでした';
$string['not_found'] = 'は見つかりませんでした';
$string['not_php3'] = '警告: 本ソフトウェアは、PHP3ではおそらく動作しません。';
$string['notallcreated'] = '{$a->requested} 個の予約のうち、いくつかは表示可能期間より先 ( - {$a->created} 日 ) です。';
$string['notallowedbook'] = 'この部屋の予約は許可されていません';
$string['of'] = ', 該当件数';
$string['pagewindow'] = '同じ範囲';
$string['password_twice'] = 'パスワードを変更したい場合は、新しいパスワードを2回入力してください';
$string['period'] = '期間';
$string['periods'] = '期間';
$string['please_contact'] = 'ここに答えがない質問は、';
$string['pluginname'] = 'MRBS';
$string['postbrowserlang'] = '言語';
$string['ppreview'] = '印刷プレビュー';
$string['records'] = '履歴';
$string['rep_dsp'] = '報告の表示';
$string['rep_dsp_dur'] = '使用期間';
$string['rep_dsp_end'] = '終了時刻';
$string['rep_end_date'] = '繰り返しの終了日';
$string['rep_for_nweekly'] = '(n週毎 選択時)';
$string['rep_for_weekly'] = '((毎週/n週毎 選択時)';
$string['rep_freq'] = '頻度';
$string['rep_num_weeks'] = '繰り返し周期';
$string['rep_rep_day'] = '繰り返しの曜日';
$string['rep_type'] = '繰り返しの様式';
$string['rep_type_0'] = 'なし';
$string['rep_type_1'] = '毎日';
$string['rep_type_2'] = '毎週';
$string['rep_type_3'] = '毎月';
$string['rep_type_4'] = '毎年';
$string['rep_type_5'] = '毎月同じ日';
$string['rep_type_6'] = 'n週毎';
$string['repeat_id'] = '定例予約ID';
$string['report_and_summary'] = '報告と要約';
$string['report_end'] = '報告終了日';
$string['report_on'] = '会合の報告';
$string['report_only'] = '報告のみ';
$string['report_start'] = '報告開始日';
$string['requestvacate'] = '予約の移動をリクエスト';
$string['requestvacatemessage'] = '{$a->user} が予約の移動をリクエストしました。
{$a->description}：{$a->room}, {$a->datetime}.
直接、協議してください。';
$string['requestvacatemessage_html'] = '{$a->user} が予約の移動をリクエストしました。
<a href="{$a->href}">{$a->description}</a>：{$a->room}, {$a->datetime}.
直接、協議してください。<br><br>';
$string['resolution_units'] = '分';
$string['returncal'] = 'カレンダー表示に戻る';
$string['returnprev'] = '前のページに戻る';
$string['rights'] = '権限';
$string['room'] = '部屋';
$string['room_admin_email'] = '部屋の管理者のEメール';
$string['roomchange'] = '部屋変更の印をつける';
$string['rooms'] = '部屋';
$string['roomsearch'] = '部屋を探す';
$string['roomsfree'] = '空き部屋';
$string['sched_conflict'] = '予定の重複';
$string['search_for'] = '検索語';
$string['search_results'] = '検索結果:';
$string['seconds'] = '秒';
$string['serverpath'] = 'MRBSインストールパス';
$string['show_my_entries'] = 'クリックして、今後のエントリを表示する';
$string['slot'] = '枠';
$string['sort_rep'] = '報告の並べ方';
$string['sort_rep_time'] = '開始日時';
$string['specialroom'] = '除外する特別室';
$string['start_date'] = '開始時刻';
$string['startedimport'] = 'ファイルをインポートしています。';
$string['submitquery'] = '報告の作成';
$string['sum_by_creator'] = '予約者';
$string['sum_by_descrip'] = '簡単な説明';
$string['summarize_by'] = '要約のまとめ方';
$string['summary_header'] = '予約時間数の要約 (括弧内はエントリー数)';
$string['summary_header_per'] = '予約時間帯数の要約 (括弧内はエントリー数)';
$string['summary_only'] = '要約のみ';
$string['sure'] = 'よろしいですか?';
$string['system'] = 'システム';
$string['teachingroom'] = '教室のみ';
$string['through'] = 'から';
$string['too_may_entrys'] = '選択されたオプションは大量のエントリーを作成します。<br>別のオプションを使用して下さい!';
$string['toofaradvance'] = '{$a} 日前から予約可能です。';
$string['ttfor'] = '時間割：';
$string['type'] = '種別';
$string['typea'] = '（タイプ）';
$string['unconfirmedbooking'] = '未確定';
$string['unknown'] = '不明';
$string['update_area_failed'] = '部署の更新に失敗しました:';
$string['update_room_failed'] = '部屋の更新に失敗しました:';
$string['useful_n-weekly_value'] = 'useful n-weekly value.';
$string['valid_room'] = '部屋';
$string['valid_time_of_day'] = 'valid time of day.';
$string['viewday'] = '日で表示';
$string['viewmonth'] = '月で表示';
$string['viewweek'] = '週で表示';
$string['weekafter'] = '次の週に移動';
$string['weekbefore'] = '前の週に移動';
$string['weeks'] = '週';
$string['you_are'] = 'あなたは';
$string['you_have_not_entered'] = '以下の項目が入力されていません:';
$string['you_have_not_selected'] = '以下の項目が選択されていません:';
