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
 * Strings for component 'quiz_grading', language 'ja', version '4.4'.
 *
 * @package     quiz_grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alldoneredirecting'] = '選択された問題すべてが評定されました。問題リストに戻ります。';
$string['alreadygraded'] = 'すでに評定済み';
$string['alsoshowautomaticallygraded'] = '自動評定された問題も表示する';
$string['attemptstograde'] = '評定する受験';
$string['automaticallygraded'] = '自動評定済み';
$string['backtothelistofquestions'] = '問題リストに戻る';
$string['cannotgradethisattempt'] = 'この受験を評定できません。';
$string['cannotloadquestioninfo'] = '問題タイプ固有の問題情報を読み込めませんでした。';
$string['changeoptions'] = 'オプションを変更する';
$string['essayonly'] = '以下の問題は手動評定する必要があります。';
$string['grade'] = '評定';
$string['gradeall'] = 'すべてを評定する';
$string['gradeattemptsall'] = 'すべて ({$a})';
$string['gradeattemptsautograded'] = '自動評定済み ({$a})';
$string['gradeattemptsmanuallygraded'] = '前に手動評定済み ({$a})';
$string['gradeattemptsneedsgrading'] = '要評定 ({$a})';
$string['graded'] = '(評定済み)';
$string['gradenextungraded'] = '次の {$a} 件の未評定の受験を評定する';
$string['gradeungraded'] = '{$a} 件すべての未評定の受験を評定する';
$string['grading'] = '手動評定';
$string['grading:viewidnumber'] = '評定中、学籍番号を表示する';
$string['grading:viewstudentnames'] = '評定中、学生名を表示する';
$string['gradingall'] = 'この問題すべての受験件数は {$a} 件です。';
$string['gradingattempt'] = '{$a->fullname} の受験可能回数: {$a->attempt}';
$string['gradingattemptsxtoyofz'] = '受験評定 {$a->from} -> {$a->to} / {$a->of}';
$string['gradingattemptwithcustomfields'] = '{$a->fullname} の受験番号 {$a->attempt} ({$a->customfields})';
$string['gradingnextungraded'] = '次の {$a} 件の未評定の受験';
$string['gradingnotallowed'] = 'あなたにはこの小テストの解答を手動評定するためのパーミッションがありません。';
$string['gradingquestionx'] = '問題評定 {$a->number}: {$a->questionname}';
$string['gradingreport'] = '手動評定レポート';
$string['gradingungraded'] = '未評定の受験 {$a}';
$string['gradinguser'] = '{$a} の受験';
$string['hideautomaticallygraded'] = '自動評定された問題を隠す';
$string['inprogress'] = '進行中';
$string['invalidattemptid'] = 'そのような受験IDはありません。';
$string['invalidquestionid'] = '評定できるID {$a} の問題が見つかりませんでした。';
$string['noquestionsfound'] = '手動評定問題が見つかりませんでした。';
$string['nothingfound'] = '表示するものはありません。';
$string['options'] = 'オプション';
$string['orderattemptsby'] = '受験の並べ替え順';
$string['pluginname'] = '手動評定';
$string['privacy:preference:order'] = '評定が必要な受験の表示順です。';
$string['privacy:preference:pagesize'] = '評定インタフェースのそれぞれのページで表示する受験数です。';
$string['qno'] = 'Q #';
$string['questionname'] = '問題名';
$string['questionsperpage'] = '1ページあたりの問題数';
$string['questionsthatneedgrading'] = '評定が必要な問題';
$string['questiontitle'] = '問題 {$a->number}: {$a->name} (評定済み受験結果 {$a->openspan}{$a->gradedattempts}{$a->closespan} / {$a->totalattempts} {$a->openspan}{$a->closespan})';
$string['random'] = 'ランダム';
$string['saveandnext'] = '保存して次を表示する';
$string['showstudentnames'] = '学生名を表示する';
$string['tograde'] = '要評定';
$string['total'] = '合計';
$string['unknownquestion'] = '不明な問題';
$string['updategrade'] = '評定を更新する';
