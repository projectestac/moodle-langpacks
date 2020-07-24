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
 * Strings for component 'tool_analytics', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'دقة';
$string['allpredictions'] = 'كل التوقعات';
$string['analysingsitedata'] = 'تحليل الموقع';
$string['analyticmodels'] = 'نماذج التحليلات';
$string['bettercli'] = 'قد يتضمن تقييم النماذج و توليد التنبؤات معالجة ثقيلة.
يوصى بتشغيل هذه الإجراءات من سطر الأوامر.';
$string['cantguessenddate'] = 'لا يمكن تخمين تاريخ الانتهاء';
$string['cantguessstartdate'] = 'لا يمكن تخمين تاريخ البدء';
$string['classdoesnotexist'] = 'الفئة {$a} غير موجودة';
$string['clearmodelpredictions'] = 'هل تريد بالتأكيد محو جميع تنبؤات "{$ a}"؟';
$string['clearpredictions'] = 'توقعات واضحة';
$string['clievaluationandpredictions'] = 'تكرر المهمة المجدولة من خلال النموذج الممكن و تحصل على التنبؤات. تم تعطيل تقييم النماذج عبر واجهة الويب. يمكنك السماح بتنفيذ هذه العمليات يدويًا عبر واجهة الويب عن طريق تعطيل إعداد التحليلات "onlycli" .';
$string['clievaluationandpredictionsnoadmin'] = 'تكرر المهمة المجدولة من خلال النماذج الممكّنة وتحصل على التنبؤات. تم تعطيل تقييم النماذج عبر واجهة الويب. قد يتم تمكينه من قبل مسؤول الموقع.';
$string['component'] = 'مكوِّن';
$string['componentcore'] = 'النواة';
$string['componentselect'] = 'حدد جميع النماذج المقدمة من المكوِّن \'{$a}\\';
$string['componentselectnone'] = 'إلغاء تحديد الكل';
$string['createmodel'] = 'إنشاء نموذج';
$string['delete'] = 'احذف';
$string['deletemodelconfirmation'] = 'هل أنت متأكد أنك تريد حذف "{$a}"؟
لا يمكن التراجع عن هذه التغييرات.';
$string['disabled'] = 'معطّل';
$string['editmodel'] = 'تحرير "{$a}" نموذج';
$string['enabled'] = 'تمكين';
$string['errornoenabledandtrainedmodels'] = 'لا توجد نماذج ممكنة و مدربة للتنبؤ.';
$string['errornoenabledmodels'] = 'لا توجد نماذج ممكنة للتدريب.';
$string['errornoexport'] = 'يمكن تصدير النماذج المدرّبة فقط';
$string['errornostaticevaluated'] = 'لا يمكن تقييم النماذج القائمة على الافتراضات. هي دائما صحيحة 100 ٪ وفقا للطريقة التي تم تعريفها.';
$string['errornostaticlog'] = 'لا يمكن تقييم النماذج القائمة على الافتراضات لعدم وجود سجل أداء.';
$string['erroronlycli'] = 'لا يُسمح بالتنفيذ إلا عبر سطر الأوامر';
$string['errortrainingdataexport'] = 'لا يمكن تصدير بيانات التدريب النموذجية';
$string['evaluate'] = 'تقييم';
$string['evaluatemodel'] = 'تقييم النموذج';
$string['evaluationinbatches'] = 'يتم حساب محتويات الموقع و تخزينها على دفعات. قد تتوقف عملية التقييم في أيّ وقت.
في المرة التالية التي يتم فيها تشغيله ، سيستمر من النقطة التي تم إيقافه فيها.';
$string['evaluationmode'] = 'وضع التقييم';
$string['evaluationmodecolconfiguration'] = 'إعداد';
$string['evaluationmodecoltrainedmodel'] = 'نموذج المدربين';
$string['evaluationmodeconfiguration'] = 'تقييم تكوين النموذج';
$string['evaluationmode_help'] = 'هناك طريقتان للتقييم:
* نموذج تدريب - يتم استخدام بيانات الموقع كبيانات اختبار لتقييم دقة النموذج المدرب.
* التكوين - يتم تقسيم بيانات الموقع إلى بيانات التدريب و الاختبار ، و ذلك لتدريب واختبار دقة تكوين النموذج. يتوفر النموذج المدرب فقط إذا تم استيراد نموذج مدرب إلى الموقع ، و لم تتم إعادة تدريبه بعد باستخدام بيانات الموقع.';
$string['evaluationmodeinfo'] = 'تم استيراد هذا النموذج إلى الموقع. يمكنك إما تقييم أداء النموذج ، أو يمكنك تقييم أداء تكوين النموذج باستخدام بيانات الموقع.';
$string['evaluationmodetrainedmodel'] = 'تقييم نموذج المدربين';
$string['export'] = 'تصدير';
$string['exportincludeweights'] = 'تشمل أوزان النموذج المدربين';
$string['exportmodel'] = 'تصدير التكوين';
$string['exporttrainingdata'] = 'تصدير بيانات التدريب';
$string['extrainfo'] = 'معلومات';
$string['generalerror'] = 'خطأ في التقييم. شفرة الحالة {$a}';
$string['getpredictions'] = 'الحصول على التوقعات';
$string['goodmodel'] = 'هذا نموذج جيد لاستخدامه للحصول على تنبؤات. تمكنه من البدء في الحصول على التنبؤات.';
$string['ignoreversionmismatches'] = 'تجاهل عدم تطابق الإصدار';
$string['ignoreversionmismatchescheckbox'] = 'تجاهل الاختلافات بين إصدار الموقع هذا وإصدار الموقع الأصلي.';
$string['importedsuccessfully'] = 'تم استيراد النموذج بنجاح.';
$string['importmodel'] = 'نموذج الاستيراد';
$string['indicators'] = 'المؤشرات';
$string['indicators_help'] = 'المؤشرات هي ما تعتقد أنها ستؤدي إلى تنبؤ دقيق للهدف.';
$string['indicatorsnum'] = 'عدد المؤشرات: {$a}';
$string['info'] = 'معلومات';
$string['insights'] = 'أفكارا';
$string['invalidanalysables'] = 'عناصر الموقع غير صالحة';
$string['invalidanalysablesinfo'] = 'تسرد هذه الصفحة العناصر القابلة للتحليل و التي لا يمكن استخدامها بواسطة نموذج التنبؤ هذا. لا يمكن استخدام العناصر المدرجة إما لتدريب نموذج التنبؤ ولا يمكن لنموذج التنبؤ الحصول على تنبؤات لهم.';
$string['invalidanalysablestable'] = 'جدول العناصر غير القابلة للتحليل في الموقع';
$string['invalidprediction'] = 'غير صالح للحصول على توقعات';
$string['invalidtraining'] = 'غير صالح لتدريب النموذج';
$string['loginfo'] = 'تسجيل معلومات اضافية';
$string['missingmoodleversion'] = 'الملف المستورد لا يحدد رقم الإصدار';
$string['modelid'] = 'معرف النموذج';
$string['modelinvalidanalysables'] = 'عناصر غير صالحة للتحليل لنموذج "{$a}"';
$string['modelname'] = 'اسم النموذج';
$string['modelresults'] = '{$a} النتائج';
$string['newmodel'] = 'نموذج جديد';
$string['nextpage'] = 'الصفحة التالية';
$string['nodatatoevaluate'] = 'لا توجد بيانات لتقييم النموذج';
$string['noinvalidanalysables'] = 'لا يحتوي هذا الموقع على أي عنصر غير صالح للتحليل.';
$string['notdefined'] = 'لم يحدد بعد';
$string['pluginname'] = 'نماذج تحليلية';
$string['predictionprocessfinished'] = 'الانتهاء من عملية التنبؤ';
$string['predictionresults'] = 'نتائج التنبؤ';
$string['predictmodels'] = 'توقع النماذج';
$string['predictorresultsin'] = 'سجل توقع المعلومات في الدليل {$a}';
$string['previouspage'] = 'الصفحة السابقة';
$string['privacy:metadata'] = 'لا يخزن البرنامج المساعد Analytic models  أيّ بيانات شخصية.';
$string['restoredefault'] = 'استعادة النماذج الافتراضية';
$string['restoredefaultempty'] = 'يرجى اختيار النماذج لاستعادتها.';
$string['restoredefaultinfo'] = 'هذه النماذج الافتراضية مفقودة أو تغيرت منذ تثبيتها. يمكنك استعادة النماذج الافتراضية المحددة.';
$string['restoredefaultnone'] = 'تم إنشاء جميع الطرز الافتراضية التي توفرها الإضافات الأساسية و المثبتة. لم يتم العثور على نماذج جديدة ؛ لا يوجد شيء للاستعادة.';
$string['restoredefaultsome'] = 'نجحت في إعادة إنشاء {$a->count} نموذج (نماذج) جديدة.';
$string['restoredefaultsubmit'] = 'استعادة المحددة';
$string['sameenddate'] = 'تاريخ الانتهاء الحالي جيد';
$string['samestartdate'] = 'تاريخ البدء الحالي جيد';
$string['target'] = 'الهدف';
$string['target_help'] = 'الهدف هو ما سيتنبأ به النموذج.';
$string['target_link'] = 'الأهداف';
$string['trainandpredictmodel'] = 'نموذج التدريب و حساب التوقعات';
$string['trainingprocessfinished'] = 'الانتهاء من عملية التدريب';
$string['trainingresults'] = 'نتائج التدريب';
$string['trainmodels'] = 'نماذج القطار';
$string['versionnotsame'] = 'الملف المستورد كان من إصدار مختلف ({$a->importedversion}) من الإصدار الحالي ({$a->version})';
$string['viewlog'] = 'سجل التقييم';
$string['weeksenddateautomaticallyset'] = 'يتم تحديد تاريخ الانتهاء تلقائيًا بناءً على تاريخ البدء و عدد الأقسام';
$string['weeksenddatedefault'] = 'تاريخ الانتهاء محسوب تلقائيًا من تاريخ بدء المادة.';
