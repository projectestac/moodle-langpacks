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
 * Strings for component 'enrol', language 'ar', version '4.4'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'الإضافات المتاحة للانضمام إلى المساق';
$string['addinstance'] = 'إضافة طريقة';
$string['addinstanceanother'] = 'أضف الطريقة وأنشئ أخرى';
$string['ajaxnext25'] = 'الـ 25 التالية';
$string['ajaxoneuserfound'] = 'تم إيجاد مستخدم واحد';
$string['ajaxxmoreusersfound'] = 'تم العثور على أكثر من {$a} من المستخدمين';
$string['ajaxxusersfound'] = '{$a} تم العثور على المستخدمين ';
$string['assignnotpermitted'] = 'ليست لديك الصلاحية أو لا يمكنك تعيين الأدوار في هذا المساق.';
$string['bulkuseroperation'] = 'عملية بالجملة على المستخدمين';
$string['configenrolplugins'] = 'الرجاء إختيار الإضافات المطلوبة ثم القيام بترتيبها بشكل مناسب.';
$string['custominstancename'] = 'اسم العينة المخصص';
$string['customwelcomemessage'] = 'رسالة ترحيب مخصصة';
$string['customwelcomemessage_help'] = 'التنسيقات المقبولة: النص العادي أو تنسيق مودل التلقائي، وسوم HTML ووسوم متعدد اللغات مقبولة أيضًا، فضلاً عن العناصر النائبة الآتية:
<ul>
<li>اسم المساق {$a->coursename}</li>
<li>رابط إلى صفحة الملف الشخصي للمستخدم {$a->profileurl}</li>
<li>بريد المستخدم {$a->email}</li>
<li>اسم المستخدم الكامل {$a->fullname}</li>
<li>الاسم الأول للمستخدم {$a->firstname}</li>
<li>الاسم الأخير للمستخدم {$a->lastname}</li>
<li>دور المستخدم في المساق {$a->courserole}</li>
</ul>';
$string['customwelcomemessageplaceholder'] = 'عزيزي {$a->fullname}، لقد انضممت بنجاح إلى المساق {$a->coursename}';
$string['defaultenrol'] = 'إضافة العيِّنة إلى المساقات الجديدة';
$string['defaultenrol_desc'] = 'من الممكن إضافة هذا الملحق إلى كل المساقات الجديدة إفتراضياً.';
$string['deleteinstanceconfirm'] = 'هل تريد بالفعل حذف نسخة إضافة التسجيل "{$a->name} مع {$a->users} مستخدمين مسجلين؟';
$string['deleteinstanceconfirmself'] = 'هل أنت متأكد من رغبتك في حذف العينة "{$a->name}" التي تتيح لك الوصول إلى هذا المقر؟ من المحتمل أن لا تتمكن من الوصول إلى المساق بعد المتابعة.';
$string['deleteinstancenousersconfirm'] = 'أنت على وشك حذف طريقة الانضمام "{$a->name}". هل أنت متأكد من رغبتك في المتابعة؟';
$string['disableinstanceconfirmself'] = 'هل أنت متأكد حقاً من رغبتك في تعطيل نسخة "{$a->name}" التي تتيح لك الوصول إلى هذا المساق؟ من المحتمل أن لا تتمكن من الوصول إلى المساق بعد المتابعة.';
$string['durationdays'] = '{$a} أيام';
$string['editenrolment'] = 'تحرير الانضمام';
$string['edituserenrolment'] = 'تحرير انضمام {$a}';
$string['enrol'] = 'الانضمام';
$string['enrolcandidates'] = 'المستخدمون غير المنضمين';
$string['enrolcandidatesmatching'] = 'مطابقة المستخدمين غير المنضمين';
$string['enrolcohort'] = 'انضمام الدفعة';
$string['enrolcohortusers'] = 'انضمام المستخدمين';
$string['enroldetails'] = 'تفاصيل الانضمام';
$string['enrollednewusers'] = 'تم ضم {$a} من المستخدمين الجدد بنجاح';
$string['enrolledusers'] = 'المستخدمون المنضمون';
$string['enrolledusersmatching'] = 'مطابقة المستخدمين المنضمين';
$string['enrolme'] = 'سجلني في هذا المساق';
$string['enrolment'] = 'الانضمام';
$string['enrolmentinstances'] = 'طرق الانضمام';
$string['enrolmentmethod'] = 'طريقة الانضمام';
$string['enrolmentnew'] = 'تسجيل جديد في {$a}';
$string['enrolmentnewuser'] = '{$a->user}  قام بالتسجيل في "{$a->course}"';
$string['enrolmentoptions'] = 'خيارات التسجيل';
$string['enrolments'] = 'الانضمامات';
$string['enrolmentupdatedforuser'] = 'انضمام المستخدم "{$a->fullname}" قد تم تحديثه';
$string['enrolnotpermitted'] = 'ليس لديك الإذن أو من غير المسموح لك أن تسجل شخصاً ما في هذا المساق';
$string['enrolperiod'] = 'فترة التسجيل';
$string['enroltimecreated'] = 'تم إنشاء الانضمام';
$string['enroltimeend'] = 'نهاية التسجيل';
$string['enroltimeendinvalid'] = 'موعد انتهاء الانضمام ينبغي أن يكون بعد موعد بدئه';
$string['enroltimestart'] = 'بداية التسجيل';
$string['enrolusage'] = 'العيَِنات / الانضمامات';
$string['enrolusers'] = 'ضم المستخدمين';
$string['enrolxusers'] = 'ضم {$a} من المستخدمين';
$string['errajaxfailedenrol'] = 'فشل في تسجيل المستخدم';
$string['errajaxsearch'] = 'خطأ أثناء البحث عن المستخدمين';
$string['erroreditenrolment'] = 'وقع خطأ ما عند محاولة تحرير انضمام المستخدم';
$string['errorenrolcohort'] = 'وقع خطأ عند محاولة إنشاء عيِّنة من إضافة مزامنة الدفعات في هذا المساق.';
$string['errorenrolcohortusers'] = 'خطأ ما عند ضم أعضاء الدفعة إلى هذا المساق.';
$string['errorthresholdlow'] = 'عتبة الإشعار ينبغي أن تكون يوماً واحداً على الأقل.';
$string['errorwithbulkoperation'] = 'وقع خطأ عند معالجة التعديل الجماعي للانضمام.';
$string['eventenrolinstancecreated'] = 'عينة انضمام تم إنشاؤها';
$string['eventenrolinstancedeleted'] = 'عينة انضمام تم حذفها';
$string['eventenrolinstanceupdated'] = 'عينة انضمام تم تحديثها';
$string['eventuserenrolmentcreated'] = 'مستخدم انضم إلى مساق';
$string['eventuserenrolmentdeleted'] = 'مستخدم أُلغي انضمامه إلى مساق';
$string['eventuserenrolmentupdated'] = 'انضمام مستخدم تم تحديثه';
$string['expirynotify'] = 'أرسل إشعاراً قبل انتهاء فترة الانضمام';
$string['expirynotify_help'] = 'هذا الإعداد يحدد فيما إذا كان يتم إرسال الإشعارات بشأن انتهاء فترة الانضمام.';
$string['expirynotifyall'] = 'من قام بالضم والمستخدم المنضم';
$string['expirynotifyenroller'] = 'من قام بالضم فقط';
$string['expirynotifyhour'] = 'الساعة المزمع أن يتم فيها إرسال إشعارات انتهاء الانضمام';
$string['expirythreshold'] = 'عتبة الإشعار';
$string['expirythreshold_help'] = 'ما هي المدة التي تسبق انتهاء فترة الانضمام والتي ينبغي عندها إشعار المستخدمين؟';
$string['extremovedaction'] = 'إجراء إلغاء الانضمام الخارجي';
$string['extremovedaction_help'] = 'إختر الإجراء الذي تريد تنفيذه عند اختفاء انضمام المستخدم من مصدره الخارجي. لطفاً، لاحظ أن بعض بيانات المستخدم وإعداداته ستتم إزالتها من المساق عند إلغاء انضمامه إليه.';
$string['extremovedkeep'] = 'ابقاء المستخدم مسجلاً';
$string['extremovedsuspend'] = 'عطل التسجيل في مساق';
$string['extremovedsuspendnoroles'] = 'عطل التسجيل في المساق واستبعد الأدوار';
$string['extremovedunenrol'] = 'إلغاء ضم المستخدم إلى المساق';
$string['finishenrollingusers'] = 'الانتهاء من ضم المستخدمين';
$string['foundxcohorts'] = 'تم العثور على {$a} من الدفعات';
$string['instanceadded'] = 'الطريقة أُضيفت';
$string['instanceeditselfwarning'] = 'تحذير:';
$string['instanceeditselfwarningtext'] = 'أنت منضم إلى هذا المساق بواسطة طريقة الانضمام هذه. التغييرات قد تؤثر على وصولك إليه.';
$string['invalidenrolduration'] = 'فترة انضمام غير صحيحة';
$string['invalidenrolinstance'] = 'عينة انضمام غير صحيحة';
$string['invalidrequest'] = 'إلتماس غير صحيح';
$string['invalidrole'] = 'دور غير صحيح';
$string['manageenrols'] = 'إدارة إضافات الانضمام';
$string['manageinstance'] = 'إدارة';
$string['method'] = 'الطريقة';
$string['migratetomanual'] = 'إنتقل إلى الانضمام اليدوي';
$string['nochange'] = 'لا تغيير';
$string['noexistingparticipants'] = 'لا يوجد مشتركون';
$string['nogroup'] = 'لا مجموعة';
$string['noguestaccess'] = 'لا يمكن للضيوف الوصول إلى هذا المساق. يرجى تسجيل الدخول.';
$string['none'] = 'لا أحد';
$string['notenrollable'] = 'لا يمكنك ضم نفسك إلى هذا المساق.';
$string['notenrolledusers'] = 'مستخدمون آخرون';
$string['otheruserdesc'] = 'المستخدمون التالية أسماؤهم غير مسجلين في هذا المساق، ولكن لهم أدوار موروثة أو معينة ضمنه.';
$string['participationactive'] = 'نشط';
$string['participationnotcurrent'] = 'ليس جارياً';
$string['participationstatus'] = 'حالة';
$string['participationsuspended'] = 'مُعلَّق';
$string['periodend'] = 'حتى {$a}';
$string['periodnone'] = 'منضم {$a}';
$string['periodstart'] = 'من {$a}';
$string['periodstartend'] = 'من {$a->start} حتى {$a->end}';
$string['plugindisabled'] = 'ملحق الانضمام {$a} معطل';
$string['privacy:metadata:user_enrolments'] = 'الانضمامات';
$string['privacy:metadata:user_enrolments:enrolid'] = 'عينة إضافة الانضمام';
$string['privacy:metadata:user_enrolments:modifierid'] = 'مُعرَّف المستخدم الأخير الذي غيَّر انضمام المستخدم';
$string['privacy:metadata:user_enrolments:status'] = 'حالة انضمام المستخدم إلى مساق';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'إضافة الانضمام التي تخزن المستخدمين المنضمين إلى المساق';
$string['privacy:metadata:user_enrolments:timecreated'] = 'وقت إنشاء انضمام المستخدم';
$string['privacy:metadata:user_enrolments:timeend'] = 'وقت انتهاء انضمام المستخدم';
$string['privacy:metadata:user_enrolments:timemodified'] = 'وقت تعديل انضمام المستخدم';
$string['privacy:metadata:user_enrolments:timestart'] = 'وقت بدء انضمام المستخدم';
$string['privacy:metadata:user_enrolments:userid'] = 'مُعرَّف المستخدم';
$string['recovergrades'] = 'استعادة درجات المستخدم القديمة قدر المستطاع';
$string['rolefromcategory'] = '{$a->role} (موروث من تصنيف المساق)';
$string['rolefrommetacourse'] = '{$a->role} (موروث من المساق الأصل)';
$string['rolefromsystem'] = '{$a->role} (مسند على مستوى الموقع)';
$string['rolefromthiscourse'] = '{$a->role} (معيَّن في هذا المساق)';
$string['sendcoursewelcomemessage'] = 'إرسال رسالة ترحيب المساق';
$string['sendcoursewelcomemessage_help'] = 'عند ضم المستخدم أو الزمرة إلى المساق، قد تُرسل إليهم رسالة ترحيبية عبر البريد الالكتروني. إذا أُرسلت من جهة الاتصال الخاصة بالمساق (إفتراضيًا المعلم)، وهناك أكثر من مستخدم بهذا الدور، سيتم إرسال البريد الالكتروني من أول مستخدم يُسند له ذلك الدور.';
$string['sendfromcoursecontact'] = 'من عنوان اتصال المساق';
$string['sendfromkeyholder'] = 'من حامل المفتاح';
$string['sendfromnoreply'] = 'من عنوان المراسلة غير القابل للرد عليه';
$string['startdatetoday'] = 'هذا اليوم';
$string['synced'] = 'تزامن';
$string['testsettings'] = 'فحص الإعدادات';
$string['testsettingsheading'] = 'فحص إعدادات الانضمام - {$a}';
$string['timeended'] = 'وقت الانتهاء';
$string['timeenrolled'] = 'وقت الانضمام';
$string['timereaggregated'] = 'وقت إعادة التجميع';
$string['timestarted'] = 'وقت البدء';
$string['totalenrolledusers'] = '{$a} مستخدم مسجل';
$string['totalotherusers'] = 'مستخدمين أخرين {$a}';
$string['totalunenrolledusers'] = '{$a} مستخدمين أُلغي انضمامهم';
$string['unassignnotpermitted'] = 'ليست لديك صلاحية إلغاء الأدوار في هذا المساق';
$string['unenrol'] = 'إلغاء الانضمام';
$string['unenrolconfirm'] = 'هل تريد حقاً إلغاء انضمام "{$a->user}" (والذي سبق وأن تم ضمه بطريقة "{$a->enrolinstancename}") إلى المساق "{$a->course}"؟';
$string['unenrolleduser'] = 'تم إلغاء انضمام المستخدم "{$a->fullname}" إلى المساق';
$string['unenrolme'] = 'إلغاء انضمامي إلى هذا المساق';
$string['unenrolnotpermitted'] = 'ليس لديك صلاحية إلغاء انضمام هذا المستخدم إلى هذا المساق.';
$string['unenrolroleusers'] = 'إلغاء انضمام المستخدمين';
$string['uninstallmigrating'] = 'ترحيل "{$a}" من الانضمامات';
$string['unknowajaxaction'] = 'تم طلب إجراء غير معروف';
$string['unlimitedduration'] = 'غير محدد';
$string['userremovedfromselectiona'] = 'المستخدم "{$a}" تمت إزالته من التحديد.';
$string['usersearch'] = 'بحث';
$string['withselectedusers'] = 'مع المستخدمين الذين تم اختيارهم';
$string['youenrolledincourse'] = 'أنت منضم إلى المساق.';
$string['youunenrolledfromcourse'] = 'تم إلغاء انضمامك إلى المساق "{$a}".';
