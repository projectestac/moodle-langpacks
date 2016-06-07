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
 * Strings for component 'gradingform_rubric', language 'ja', branch 'MOODLE_31_STABLE'
 *
 * @package   gradingform_rubric
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'クライテリアを追加する';
$string['alwaysshowdefinition'] = 'モジュールで使用されるルーブリックをユーザがプレビューできるようにします (そうでない場合、ルーブリックは評定後のみ閲覧できます)。';
$string['backtoediting'] = '編集に戻る';
$string['confirmdeletecriterion'] = '本当にこのクライテリアを削除してもよろしいですか?';
$string['confirmdeletelevel'] = '本当にこのレベルを削除してもよろしいですか?';
$string['criterion'] = 'クライテリア {$a}';
$string['criterionaddlevel'] = 'レベルを追加する';
$string['criteriondelete'] = 'クライテリアを削除する';
$string['criterionduplicate'] = '重複クライテリア';
$string['criterionempty'] = 'クライテリアを編集する';
$string['criterionmovedown'] = '下へ';
$string['criterionmoveup'] = '上へ';
$string['criterionremark'] = 'クライテリア {$a->description} のコメント: {$a->remark}';
$string['definerubric'] = 'ルーブリックを定義する';
$string['description'] = '説明';
$string['enableremarks'] = 'それぞれのクライテリアに対して評定者によるコメントの追加を許可する';
$string['err_mintwolevels'] = 'クライテリアには少なくとも2つのレベルを含む必要があります。';
$string['err_nocriteria'] = 'ルーブリックには少なくとも1つのクライテリアを含む必要があります。';
$string['err_nodefinition'] = 'レベル定義は空白にできません。';
$string['err_nodescription'] = 'クライテリア説明は空白にできません。';
$string['err_scoreformat'] = 'それぞれのレベルの点数は有効なプラスの数字である必要があります。';
$string['err_totalscore'] = 'ルーブリックにより評定する場合、最大評点はゼロ以上にする必要があります。';
$string['gradingof'] = '{$a} 評定';
$string['level'] = 'レベル {$a->definition} - {$a->score} 点';
$string['leveldefinition'] = 'レベル {$a} 定義';
$string['leveldelete'] = 'レベル {$a} を削除する';
$string['levelempty'] = 'レベルを編集する';
$string['levelsgroup'] = 'レベルグループ';
$string['name'] = '名称';
$string['needregrademessage'] = 'この学生が評定された後、ルーブリック定義が変更されました。あなたがルーブリックをチェックして評定を更新するまで学生はこのルーブリックを閲覧することができません。';
$string['pluginname'] = 'ルーブリック';
$string['previewrubric'] = 'ルーブリックをプレビューする';
$string['regrademessage1'] = 'あなたはすでに評定に使用されているルーブリックを変更しようとしています。既存の評定をレビューする必要がある場合、指定してください。あなたがこの設定を有効にした場合、再評定されるまでルーブリックは学生から隠されます。';
$string['regrademessage5'] = 'あなたはすでに評定に使用されているルーブリックに関する重大な変更を保存しようとしています。評定表の評点は変更されませんが、評定項目が再評定されるまでルーブリックは学生から隠されます。';
$string['regradeoption0'] = '再評定をマークしない';
$string['regradeoption1'] = '再評定をマークする';
$string['restoredfromdraft'] = '注意: このユーザの前回の受験に関する評点が適切に保存されなかったため、下書きの評点がリストアされました。これらの変更をキャンセルしたい場合、下の「キャンセル」ボタンを使用してください。';
$string['rubric'] = 'ルーブリック';
$string['rubricmapping'] = '評定マッピングルールの評点';
$string['rubricmappingexplained'] = 'このルーブリックの最小評点は <b>{$a->minscore} 点</b>です。また、この評点はモジュール内で利用可能な最小評点にコンバートされます。
最大評点 <b>{$a->maxscore} 点</b> は最大評点  (評価尺度が使用されていない限りゼロ) にコンバートされます。<br />中間評点はそれぞれコンバートされた後、利用可能な評点に近い値に四捨五入されます。<br />評点の代わりに評価尺度が使用されている場合、評点は連続する整数であるかのように尺度要素にコンバートされます。';
$string['rubricnotcompleted'] = 'それぞれのクライテリアに設定値を選択してください。';
$string['rubricoptions'] = 'ルーブリックオプション';
$string['rubricstatus'] = '現在のルーブリックステータス';
$string['save'] = '保存';
$string['saverubric'] = 'ルーブリックを保存して利用可能にする';
$string['saverubricdraft'] = '下書きとして保存する';
$string['scoreinputforlevel'] = 'レベル {$a} の評点入力';
$string['scorepostfix'] = '{$a} 点';
$string['showdescriptionstudent'] = '評定済みにルーブリック説明を表示する';
$string['showdescriptionteacher'] = '評定中にルーブリック説明を表示する';
$string['showremarksstudent'] = '評定済みにコメントを表示する';
$string['showscorestudent'] = '評定済みのレベルに点数を表示する';
$string['showscoreteacher'] = '評定中、レベルに点数を表示する';
$string['sortlevelsasc'] = 'レベルの並べ替え順:';
$string['sortlevelsasc0'] = '点数の降順';
$string['sortlevelsasc1'] = '点数の昇順';
