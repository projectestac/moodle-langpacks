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
 * Strings for component 'quiz_statistics', language 'ar', version '4.4'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'الاستجابة الفعلية';
$string['allattempts'] = 'كل المحاولات';
$string['allattemptsavg'] = 'الدرجة المتوسطة لجميع المحاولات';
$string['allattemptscount'] = 'العدد الكلي للمحاولات المكتملة التي تم تقييمها';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = 'تباين ({$a->number}) "{$a->name}" {$a->variant}';
$string['analysisofresponses'] = 'تحليل الاستجابات';
$string['analysisofresponsesfor'] = 'تحليل الاستجابات لـ {$a}';
$string['analysisvariant'] = 'تباين "{$a->name}" {$a->variant}';
$string['attempts'] = 'المحاولات';
$string['attemptsall'] = 'كل المحاولات';
$string['attemptsfirst'] = 'المحاولة الأولى';
$string['backtoquizreport'] = 'عودة إلى صفحة تقرير الإحصائيات الرئيسية';
$string['calculatefrom'] = 'حساب الإحصائيات من';
$string['calculatingallstats'] = 'حساب الإحصائيات للاختبار، الأسئلة وتحليل بيانات الاستجابة';
$string['cic'] = 'معامل الاتساق الداخلي (لـ{$a})';
$string['completestatsfilename'] = 'حالات كاملة';
$string['count'] = 'العدد';
$string['counttryno'] = 'عدّ المحاولة {$a}';
$string['coursename'] = 'اسم المقرر';
$string['detailedanalysis'] = 'تحليل أكثر تفصيلاً لاستجابات هذا السؤال';
$string['detailedanalysisforvariant'] = 'تحليل أكثر تفصيلاً للاستجابات على التباين {$a} لهذا السؤال';
$string['discrimination_index'] = 'مؤشر التمييز';
$string['discriminative_efficiency'] = 'كفاءة التمييز';
$string['downloadeverything'] = 'تنزيل التقرير بالكامل بصيغة';
$string['duration'] = 'مفتوح لمدة';
$string['effective_weight'] = 'الوزن المؤثر';
$string['errordeleting'] = 'خطأ في حذف السجلات {$a} القديمة.';
$string['errormedian'] = 'خطأ في جلب الوسيط';
$string['errorpowerquestions'] = 'خطأ جلب البيانات لحساب التباين لدرجات السؤال';
$string['errorpowers'] = 'خطأ عند جلب البيانات لحساب التباين في درجات الاختبار';
$string['errorrandom'] = 'خطأ في الحصول على بيانات البند الفرعي';
$string['errorratio'] = 'معدل الأخطاء (ل{$a})';
$string['errorstatisticsquestions'] = 'خطأ جلب البيانات لحساب إحصاءات درجات السؤال';
$string['facility'] = 'مؤشر السهولة';
$string['firstattempts'] = 'أول المحاولات';
$string['firstattemptsavg'] = 'متوسط درجة المحاولات الأولى';
$string['firstattemptscount'] = 'عدد المحاولات الأولى المكتملة التقييم';
$string['frequency'] = 'التكرار';
$string['getstatslockprogress'] = 'بانتظار المهمة التي قيد التنفيذ. يرجى التريث أو المحاولة لاحقًا.';
$string['getstatslocktimeout'] = 'قت إغلاق حساب الإحصائيات';
$string['getstatslocktimeoutdesc'] = 'عدد الثواني المراد انتظارها بالنسبة إلى الإغلاق عند محاولة تنفيذ الحسابات الإحصائية للاختبار. هذا الإعداد موجود بالدرجة الأساس لأغراض تجريبية، لا تقم بتعديله إلا إذا كنت تدري ما أنت فاعل.';
$string['highestattempts'] = 'أعلى محاولة مقيّمة';
$string['highestattemptsavg'] = 'متوسط درجة أعلى محاولات مقيّمة';
$string['intended_weight'] = 'الوزن المقصود';
$string['kurtosis'] = 'نقاط توزيع التفرطح (ل{$a})';
$string['lastattempts'] = 'آخر محاولة';
$string['lastattemptsavg'] = 'متوسط درجة المحاولات الأخيرة';
$string['lastcalculated'] = 'آخر حساب {$a->lastcalculated} قبل هذا كانت هناك {$a->count}. محاولات منذ ذلك الحين.';
$string['maximumfacility'] = 'أقصى سهولة';
$string['median'] = 'وسيط الدرجة (ل{$a})';
$string['medianfacility'] = 'وسيط السهولة';
$string['minimumfacility'] = 'أدنى سهولة';
$string['modelresponse'] = 'استجابة النموذج';
$string['nameforvariant'] = 'التباين {$a->variant} من {$a->name}';
$string['negcovar'] = 'التباين السلبي للدرجة مع إجمالي درجة المحاولة';
$string['negcovar_help'] = 'إن درجة هذا السؤال لهذا العدد من المحاولات في هذا الاختبار تختلف عكسيًا عن الدرجة الإجمالية للمحاولة.. هذا معناه أن الدرجة الإجمالية للمحاولات تميل إلى أن تكون أقل من المتوسط عندما تكون درجة هذا السؤال فوق المتوسط والعكس بالعكس.

معادلتنا للوزن المؤثر للسؤال لا يمكن حسابها في تلك الحالة. حسابات الوزن المؤثر للأسئلة الأخرى في هذا الاختبار؛ هي الأوزان المؤثرة لتلك الأسئلة إذا أعطيت الأسئلة المبرزة ذات التباين السلبي درجة قصوى مقدارها الصفر.

إذا قمت بتحرير الاختبار وجعلت الدرجة القصوى لتلك الأسئلة ذات التباين السلبي صفرًا، فإن الأوزان المؤثرة لتلك الأسئلة ستكون صفرًا والوزن المؤثر الحقيقي للأسئلة الأخرى سيكون كما هو محسوب الآن.';
$string['nogradedattempts'] = 'لم يتم إجراء أي محاولات للإجابة على هذا الاختبار، أو أن كل المحاولات هي لأسئلة تحتاج إلى التصحيح اليدوي.';
$string['nostats'] = 'تعذر إكمال حساب الإحصائيات. قد يكون هناك حسابات طويلة الأمد قيد التنفيذ. ترجى المحاولة فر وقت آخر.';
$string['nostudentsingroup'] = 'لا يوجد طلاب في هذه المجموعة حتى الآن';
$string['optiongrade'] = 'الرصيد الجزئي';
$string['partofquestion'] = 'جزء من السؤال';
$string['pluginname'] = 'الإحصائيات';
$string['position'] = 'الموضع';
$string['positions'] = 'المواضع';
$string['privacy:metadata'] = 'على الرغم من أن ملحق إحصائيات الاختبار يحتوي على جداول قاعدة بيانات، فإن بياناته هي بيانات مجمّعة ولا تصف الأشخاص بشكل فردي.';
$string['questioninformation'] = 'معلومات السؤال';
$string['questionname'] = 'اسم السؤال';
$string['questionnumber'] = 'س #';
$string['questionstatistics'] = 'إحصائيات السؤال';
$string['questionstatsfilename'] = 'إحصاءات السؤال';
$string['questiontype'] = 'نوع السؤال';
$string['quizinformation'] = 'معلومات الاختبار';
$string['quizname'] = 'اسم الاختبار';
$string['quizoverallstatistics'] = 'إحصاءات الاختبار الكاملة';
$string['quizstructureanalysis'] = 'تحليل بنية الاختبار';
$string['random_guess_score'] = 'درجة التخمين العشوائي';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'نطاق إحصائيات هذه الأسئلة';
$string['recalculatenow'] = 'أعد حسابها الآن';
$string['recalculatetask'] = 'إعادة إحتساب إحصائيات السؤال';
$string['reportsettings'] = 'إعدادات حساب الإحصائيات';
$string['response'] = 'الاستجابة';
$string['skewness'] = 'انحراف توزيع الدرجة (ل{$a})';
$string['slotstructureanalysis'] = 'التحليل الهيكلي للسؤال المرقم {$a}';
$string['standarddeviation'] = 'الانحراف المعياري (ل{$a})';
$string['standarddeviationq'] = 'الانحراف المعياري';
$string['standarderror'] = 'الخطأ المعياري (ل{$a})';
$string['statistics'] = 'الإحصائيات';
$string['statistics:view'] = 'معاينة تقرير الإحصائيات';
$string['statisticsreport'] = 'تقرير الإحصاءات';
$string['statisticsreportgraph'] = 'إحصائيات عن مواضع الأسئلة';
$string['statsfor'] = 'إحصائيات الاختبار ( لـ {$a})';
$string['variant'] = 'التباين';
$string['viewanalysis'] = 'معاينة التفاصيل';
$string['whichtries'] = 'تحليل الاستجابات لـ';
