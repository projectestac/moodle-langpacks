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
 * Strings for component 'mediasite', language 'ja', branch 'MOODLE_28_STABLE'
 *
 * @package   mediasite
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actiondelete'] = '既存のサイトを削除';
$string['actionedit'] = '既存のサイトを編集';
$string['actiontblhder'] = '操作';
$string['advancedfielddescription'] = '説明';
$string['advancedfieldname'] = '名前';
$string['advancedfieldpresenter'] = 'プレゼンター';
$string['advancedfieldtag'] = 'タグ';
$string['advancedheader'] = '詳細検索設定';
$string['advancedsearchafter'] = '開始日';
$string['advancedsearchnotice'] = 'Mediasite から検索したいフィールドを選択します。';
$string['advancedsearchuntil'] = '終了日';
$string['advancedskipped'] = '警告: ワイルドカード検索では詳細検索設定の選択が無視されます';
$string['afterdate'] = '収録日によるプレゼンテーション検索の絞込み';
$string['afterdate_help'] = '検索結果を指定された日付よりも収録日が後のプレゼンテーションに制限します。 日付指定の形式は yyyy-mm-dd です。';
$string['blankduration'] = 'チケット生存期間を入力してください';
$string['catalog'] = 'カタログ';
$string['certformat'] = '.crt 形式の証明書ファイル';
$string['certpath'] = '証明書のパス';
$string['certpath_help'] = 'CA 証明書のパス';
$string['datecombination'] = '{$a->after}以降かつ{$a->before}以前の日付は存在しません。';
$string['description'] = '説明';
$string['descriptionlabel'] = '説明:';
$string['duplicatesitename'] = '{$a} は既に使われています。別のサイト名を使用してください。';
$string['duration'] = 'チケット生存期間 (分)';
$string['duration_help'] = '生成される認証チケットの有効期限 (分)';
$string['expandresource'] = 'このリソースの詳細を表示';
$string['futuredate'] = '{$a} - 指定された日付は未来の日付を指しています。';
$string['impossibledatecombination'] = '指定した日付と一致するプレゼンテーションがありません。';
$string['incompleteconfiguration'] = '構成が不完全です。サイト管理者が構成を保存していない可能性があります。';
$string['invalidapikey'] = 'サイトに Moodle 用の API キーが設定されていません';
$string['invalidcert'] = '証明書が無効です';
$string['invalidcred'] = '無効なユーザー名/パスワードです';
$string['invaliddate'] = '{$a} - は有効な日付ではありません。';
$string['invaliddateformat'] = '{$a} の形式が YYYY-MM-DD ではありません';
$string['invalidformat'] = 'サイトからの応答データが正しい形式ではないようです。';
$string['invalidserviceroot'] = '有効なサービス ルート URL ではありません';
$string['invalidURL'] = '無効なURL形式です。';
$string['invalidversion'] = 'サイトから適切なバージョン情報の応答がありませんでした - {$a}';
$string['longduration'] = '長過ぎるチケット生存期間は推奨されません ({$a})';
$string['longsitename'] = 'サイト名が長過ぎます';
$string['longsitepassword'] = 'パスワードが長過ぎます';
$string['longsiteusername'] = 'ユーザー名が長過ぎます';
$string['mediasite'] = 'Mediasite';
$string['mediasite:addinstance'] = 'コースに Mediasiteコンテンツを追加';
$string['mediasite:managesite'] = 'Mediasite 設定管理';
$string['mediasite:overridedefaults'] = '既定の Mediasite の設定を上書き';
$string['mediasite:view'] = 'コースの Mediasiteコンテンツを視聴';
$string['modulename'] = 'Mediasite コンテンツ';
$string['modulenameplural'] = 'Mediasite コンテンツ';
$string['no70'] = 'この URL は Mediasite 7.0.4+ サイトのものではないようです';
$string['nocert'] = 'HTTPS サイトの証明書がありません';
$string['nonnumericduration'] = 'チケット生存期間に数字以外の文字が入力されています。 ({$a})';
$string['nosites'] = 'サイトが構成されていません。';
$string['notadate'] = '{$a} が日付ではありません';
$string['notauthorized'] = 'このリソースに対する権限がありません。';
$string['notfound'] = '選択された Mediasite コンテンツが見つかりませんでした。';
$string['noversion'] = 'サイトからバージョン情報の応答がありませんでした';
$string['nowritepermissions'] = '{$a} への書き込みパーミッションがありません';
$string['onefieldselect'] = '検索文字列が空白でない場合は少なくとも 1 つのフィールドを選択する必要 があります';
$string['openaspopup'] = 'Mediasite コンテンツを新しいウィンドウで開く';
$string['openaspopup_help'] = 'リソースを表示時にポップアップで表示するかインラインで表示するかを<br/>選択します。';
$string['opensearchwindow'] = '検索ウィンドウを開く';
$string['passthru'] = 'パススルー認証を有効にする';
$string['passthru_help'] = 'パススルー認証を有効にします。Moodle と Mediasite の認証サーバー(例: LDAP)のユーザー名が同一である必要があります。';
$string['passthrutblhder'] = 'パススルー認証';
$string['password'] = 'パスワード';
$string['password_help'] = '管理ユーザーまたはシステム ユーザーのパスワード';
$string['pluginadministration'] = 'Mediasiteコンテンツ管理';
$string['pluginname'] = 'Mediasite コンテンツ';
$string['plural'] = '';
$string['presentation'] = 'プレゼンテーション';
$string['requiredsitename'] = 'サイト名が必要です';
$string['requiredsitepassword'] = '3 文字よりも長いパスワードが必須です';
$string['requiredsiteusername'] = '3 文字よりも長いユーザー名が必須です';
$string['resource'] = 'リソースタイプ';
$string['resource_help'] = 'リソースの種類です。\'プレゼンテーション\' または \'カタログ\' で<br/>検索できます。';
$string['resourcetitle'] = 'タイトル';
$string['resourcetype'] = 'コンテンツ タイプ';
$string['restrictip'] = '再生をクライアント IP に制限';
$string['restrictip_help'] = 'リンクの共有を防ぐため、認証チケットをクライアントの IP アドレスにバインドします。CDN を利用している場合、または Moodle と Mediasite のサーバーが異なるネットワーク上にある場合は、無効にする必要があるかもしれません。';
$string['savechangebutton'] = '変更を保存';
$string['searchbutton'] = 'Mediasite コンテンツを検索';
$string['searchheader'] = 'Mediasite コンテンツを検索';
$string['searchnoresult'] = '検索条件に一致する結果が見つかりませんでした。';
$string['searchresultheader'] = '検索結果: {$a->count} 件の{$a->type}';
$string['searchsubmit'] = '検索';
$string['searchtext'] = '検索テキスト';
$string['searchtext_help'] = '詳細検索設定を指定しない場合、テキスト検索ではタグや<br/>プレゼンテーションまたはカタログのタイトルで検索します。<br/>空白のまま検索すると、すべてのプレゼンテーションまたはカタログが<br/>検索結果として表示されます。';
$string['searchtruncated'] = '検索結果が切り捨てられています';
$string['selectresource'] = 'このリソースを選択';
$string['serverurl'] = 'Mediasite ルート URL';
$string['siteaddbuttonlabel'] = 'サイトの追加';
$string['siteheader'] = 'Mediasite サーバー';
$string['sitename'] = 'タイトル';
$string['sitenames'] = '既定のサーバーを選択';
$string['sitenametblhder'] = 'サイト名';
$string['siteroottblhder'] = 'ルートURL';
$string['smallduration'] = 'チケット生存期間が短過ぎます ({$a})';
$string['titleresource'] = 'このリソースのタイトル';
$string['unauthorized'] = '権限がありません';
$string['unknownexception'] = '不明な例外 {$a}';
$string['unsupportedversion'] = 'サポートされていないバージョン - {$a}';
$string['untildate'] = '収録日によるプレゼンテーション検索の絞込み';
$string['untildate_help'] = '検索結果を指定された日付よりも収録日が前のプレゼンテーションに制限します。 日付指定の形式は yyyy-mm-dd です。';
$string['username'] = 'ユーザー名';
$string['username_help'] = 'Mediasite サーバーの管理ユーザーまたはシステム ユーザー';
$string['usernametblhder'] = 'ユーザー名';
$string['wrongversion'] = 'この URL は Mediasite のサイトを指しているようですが、バージョンが正しくないようです - {$a}';
