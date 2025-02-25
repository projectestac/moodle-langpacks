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
 * Strings for component 'qtype_multichoice', language 'ar', version '4.4'.
 *
 * @package     qtype_multichoice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerhowmany'] = 'جواب واحد أم عدة إجابات؟';
$string['answerhowmany_desc'] = 'ما إذا كان ينبغي جعل الافتراضي إجابة واحدة (أي أزرار المذياع) أو إجابات متعددة (أي خانات تأشير).';
$string['answernumbering'] = 'أتريد ترقيم الخيارات؟';
$string['answernumbering123'] = '1.، 2.، 3.، ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumbering_desc'] = 'نمط الترقيم الافتراضي.';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = 'من دون ترقيم';
$string['answersingleno'] = 'يُسمح بإجابات متعددة';
$string['answersingleyes'] = 'إجابة واحدة فقط';
$string['choiceno'] = 'خيار {$a}';
$string['choices'] = 'الخيارات المتوفر';
$string['clearchoice'] = 'أخلِ اختياري';
$string['clozeaid'] = 'أدخل الكلمة المفقودة';
$string['correctansweris'] = 'الإجابة الصحيحة هي: {$a}';
$string['correctanswersare'] = 'الإجابات الصحيحة هي: {$a}';
$string['correctfeedback'] = 'لأي إجابة صحيحة';
$string['deletedchoice'] = 'تم حذف هذا الخيار بعد بدء المحاولة.';
$string['errfractionsaddwrong'] = 'مجموع الدرجات الموجبة المختارة لم يصل إلى 100%<br/> بل مجموعها هو {$a}%';
$string['errfractionsnomax'] = 'يجب أن يكون أحد الخيارات 100%، لكي<br />يمكن أخذ العلامة الكاملة لهذا السؤال';
$string['errgradesetanswerblank'] = 'تم وضع الدرجة، ولكن الإجابة خالية';
$string['feedback'] = 'الإفادة';
$string['fillouttwochoices'] = 'يجب أن تملأ خيارين على الأقل. الخيارات الفارغة لن تستخدم.';
$string['fractionsaddwrong'] = 'مجموع الدرجات الموجبة المختارة لم يصل إلى 100%<br/> بل مجموعها هو {$a}%<br />هل ترغب في العودة لتعديل هذا السؤال؟';
$string['fractionsnomax'] = 'يجب أن تكون احد الخيارات 100%، ليتسنى لحصول على درجة كاملة لهذا السؤال. هل ترغب في العودة لتعديل هذا السؤال';
$string['incorrectfeedback'] = 'لأي إجابة غير صحيحة';
$string['notenoughanswers'] = 'هذا النوع من الأسئلة يتطلب {$a} من الإجابات على الأقل';
$string['overallcorrectfeedback'] = 'الإفادة لأي إجابة صحيحة';
$string['overallfeedback'] = 'الإفادة الشاملة';
$string['overallincorrectfeedback'] = 'الإفادة لأي إجابة خاطئة';
$string['overallpartiallycorrectfeedback'] = 'الإفادة لأي إجابة صحيحة جزئياً';
$string['partiallycorrectfeedback'] = 'لأي إجابة صحيحة جزئياً';
$string['pleaseselectananswer'] = 'لطفاً، إختر جواباً.';
$string['pleaseselectatleastoneanswer'] = 'لطفاً، إختر جواباً واحداً على الأقل.';
$string['pluginname'] = 'متعدد الخيارات';
$string['pluginname_help'] = 'استجابة لسؤال (قد يحتوي على صورة)، يقوم المستخدم بالتخير ما بين إجابات متعددة. سؤال الإجابات المتعددة قد يكون له خيار واحد صحيح أو عدة خيارات صحيحة.';
$string['pluginname_link'] = 'question/type/multichoice';
$string['pluginnameadding'] = 'إضافة سؤال متعدد الخيارات';
$string['pluginnameediting'] = 'تحرير سؤال متعدد الخيارات';
$string['pluginnamesummary'] = 'السماح لإختيار إجابة واحدة أو إجابات متعددة من القائمة المعدة مسبقاً';
$string['privacy:metadata'] = 'إن ملحق نوع السؤال، متعدد الخيارات يسمح لمنشئي السؤال بتعيين الخيارات الافتراضية بشكل تفضيلات للمستخدم.';
$string['privacy:preference:answernumbering'] = 'ما هو نمط الترقيم الذي ينبغي استعماله (\'1، 2، 3، ...\'، \'a، b، c، ...\' إلخ.)';
$string['privacy:preference:defaultmark'] = 'الدرجة الافتراضية المعدة لسؤال معين';
$string['privacy:preference:penalty'] = 'الغرامة المفروضة على كل محاولة خاطئة عند تشغيل الأسئلة باستعمال السلوك \'تفاعلي مع محاولات متعددة\' أو \'النمط المتكيف\'';
$string['privacy:preference:showstandardinstruction'] = 'فيما إذا كان ينبغي إظهار التعليمات القياسية';
$string['privacy:preference:shuffleanswers'] = 'فيما إذا كان ينبغي خلط الإجابات تلقائيًا';
$string['privacy:preference:single'] = 'فيما إذا كان الجواب منفردًا ذي أزرار مذياع أم متعددًا ذي خانات تأشير';
$string['regradeissuenumchoiceschanged'] = 'عدد الخيارات في السؤال قد تغير.';
$string['selectmulti'] = 'إختر واحدة أو أكثر:';
$string['selectone'] = 'إختر أحد الخيارات:';
$string['showstandardinstruction'] = 'أظهر التعليمات القياسية';
$string['showstandardinstruction_desc'] = 'فيما إذا كان ينبغي إظهار التعليمات "إختر واحدًا:" أو "إختر واحدًا أو أكثر:" قبل إجابات متعدد الخيارات.';
$string['showstandardinstruction_help'] = 'فيما إذا كان ينبغي إظهار التعليمات "إختر واحدًا:" أو "إختر واحدًا أو أكثر:" قبل إجابات متعدد الخيارات. أو بدلاً من ذلك، يمكنك تضمين تعليمات أخرى في نص السؤال.';
$string['shuffleanswers'] = 'أتريد خلط الخيارات؟';
$string['shuffleanswers_desc'] = 'فيما إذا كان ينبغي خلط الخيارات عشواياً لكل محاولة بشكل إفتراضي.';
$string['shuffleanswers_help'] = 'في حالة التفعيل، سيتم خلط الأسئلة عشوائيا لكل محاولة، بشرط أن يتم تفعيل خلط الاجابات في كل سؤال في إعدادات الاختبار';
$string['singleanswer'] = 'إختر إجابة واحدة.';
$string['toomanyselected'] = 'لقد حددتَ خيارات كثيرة جداً.';
