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
 * Strings for component 'qtype_gapselect', language 'ar', version '4.4'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'إضافة {no} خيارات أخرى';
$string['answer'] = 'الإجابة';
$string['blanknumber'] = 'الفراغ {$a}';
$string['choices'] = 'الخيارات';
$string['choicex'] = 'الاختيار [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'القائمة المنسدلة';
$string['combinedcontrolnamegapselectplural'] = 'القوائم المنسدلة';
$string['correctansweris'] = 'الإجابة الصحيحة هي: {$a}';
$string['errorblankchoice'] = 'يرجى التحقق من الخيارات: الاختيار {$a} فارغ.';
$string['errormissingchoice'] = 'يرجى التحقق من نص السؤال: {$a} لم يتم العثور عليه في الاختيارات! يُسمح فقط باستخدام الأرقام التي تحتوي على إجابات اختيار محددة كعناصر نائبة.';
$string['errornoslots'] = 'يجب أن يحتوي نص السؤال على عناصر نائبة مثل [[1]] لإظهار أين تذهب الكلمات المفقودة.';
$string['errorquestiontextblank'] = 'يجب عليك إدخال نص السؤال.';
$string['group'] = 'مجموعة';
$string['pleaseputananswerineachbox'] = 'يرجى وضع إجابة في كل مربع.';
$string['pluginname'] = 'إختيار الكلمات المفقودة';
$string['pluginname_help'] = 'تتطلب أسئلة تحديد الكلمات المفقودة من المجيب تحديد الإجابات الصحيحة من القوائم المنسدلة. يتم استخدام [[1]] ، [[2]] ، [[3]] ، ... كعناصر نائبة في نص السؤال ، مع تحديد الإجابات الصحيحة كأجوبة اختيار 1 ، 2 ، 3 ، ... على التوالي. يمكن إضافة إجابات اختيار إضافي لجعل السؤال أكثر صعوبة. قد يتم تجميع إجابات الاختيار لتقييد الإجابات المتوفرة في كل قائمة منسدلة.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'إضافة سؤال إختيار الكلمات المفقودة';
$string['pluginnameediting'] = 'تحرير سؤال تحديد الكلمات المفقودة';
$string['pluginnamesummary'] = 'يتم ملء الكلمات المفقودة في نص السؤال باستخدام القوائم المنسدلة.';
$string['privacy:metadata'] = 'إن ملحق نوع السؤال، إختيار الكلمات المفقودة يسمح لمنشئي السؤال بتعيين الخيارات الافتراضية بشكل تفضيلات للمستخدم.';
$string['privacy:preference:defaultmark'] = 'الدرجة الافتراضية المعدة لسؤال معين';
$string['privacy:preference:penalty'] = 'الغرامة المفروضة على كل محاولة خاطئة عند تشغيل الأسئلة باستعمال السلوك \'تفاعلي مع محاولات متعددة\' أو \'النمط المتكيف\'';
$string['privacy:preference:shuffleanswers'] = 'فيما إذا كان ينبغي خلط الإجابات تلقائيًا';
$string['regradeissuenumchoiceschanged'] = 'عدد الخيارات في المجموعة {$a} قد تغيرت.';
$string['regradeissuenumgroupsschanged'] = 'عدد مجموعات الخيارات قد تغير.';
$string['shuffle'] = 'الخلط';
$string['tagsnotallowed'] = '{$a->tag} غير مسموح به.
(فقط {$a->allowed}  مسموح به.)';
$string['tagsnotallowedatall'] = '{$a->tag} غير مسموح به.
(لا يوجد HTML مسموح به هنا.)';
