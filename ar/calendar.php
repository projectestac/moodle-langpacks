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
 * Strings for component 'calendar', language 'ar', version '3.8'.
 *
 * @package     calendar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = 'حدث النشاط';
$string['addevent'] = 'إضافة أحداث';
$string['advancedoptions'] = 'خيارات متقدمة';
$string['allday'] = 'كل اليوم';
$string['annually'] = 'سنوياً';
$string['calendar'] = 'التقويم';
$string['calendarheading'] = '{$a} التقويم';
$string['calendarpreferences'] = 'تفضيلات التقويم';
$string['calendartypes'] = 'أنواع التقويم';
$string['calendarurl'] = 'رابط التقويم : {$a}';
$string['category'] = 'التصنيف';
$string['categoryevent'] = 'صنف الحدث';
$string['categoryevents'] = 'أحداث الفئة';
$string['clickhide'] = 'انقر للإخفاء';
$string['clickshow'] = 'انقر للعرض';
$string['colactions'] = 'الإجراءات';
$string['colcalendar'] = 'التقويم';
$string['collastupdated'] = 'آخر تحديث';
$string['colpoll'] = 'التحديث';
$string['commontasks'] = 'الخيارات';
$string['confirmeventdelete'] = 'هل أنت متأكد أنك تريد حذف هذا الحدث "{$a}" ؟';
$string['confirmeventseriesdelete'] = 'يعتبر الحدث "{$a->name}" جزءًا من سلسلة. هل تريد حذف هذا الحدث فقط ، أو كل الأحداث {$a->count} في السلسلة؟';
$string['course'] = 'المقرر';
$string['coursecalendar'] = 'تقويم {$a}';
$string['courseevent'] = 'حدث المقرر';
$string['courseevents'] = 'أحداث المقرر';
$string['courses'] = 'المقررات';
$string['customexport'] = 'نطاق مخصص ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'يومياً';
$string['day'] = 'اليوم';
$string['dayeventsmany'] = '{$a->num} من الأحداث، {$a->day}';
$string['dayeventsnone'] = 'لا أحداث، {$a}';
$string['dayeventsone'] = 'حدث واحد، {$a}';
$string['daynext'] = 'اليوم التالي';
$string['dayprev'] = 'اليوم السابق';
$string['dayviewfor'] = 'عرض اليوم عن :';
$string['dayviewtitle'] = 'عرض باليومية : {$a}';
$string['daywithnoevents'] = 'لا توجد أحداث لهذا اليوم .';
$string['default'] = 'الافتراضي';
$string['deleteallevents'] = 'حذف كل الأحداث';
$string['deleteevent'] = 'حذف الحدث';
$string['deleteevents'] = 'احذف الأحداث';
$string['deleteoneevent'] = 'حذف هذا الحدث';
$string['detailedmonthviewfor'] = 'معاينة شهرية مفصلة عن :';
$string['detailedmonthviewtitle'] = 'معاينة شهرية مفصلة : {$a}';
$string['durationminutes'] = 'المدة بالدقائق';
$string['durationnone'] = 'بدون مدة زمنية';
$string['durationuntil'] = 'حتى';
$string['editevent'] = 'تحرير الحدث';
$string['erroraddingevent'] = 'فشل في إضافة الحدث';
$string['errorbadsubscription'] = 'اشتراك التقويم غير موجود .';
$string['errorbeforecoursestart'] = 'لا يمكن تعيين حدث قبل تاريخ بدء المقرر';
$string['errorcannotimport'] = 'لا يمكنك إنشاء اشتراك في التقويم في هذا الوقت .';
$string['errorhasuntilandcount'] = 'قد يظهر إما UNTIL أو COUNT في قاعدة التكرار ، ولكن يجب ألا يحدث UNTIL و COUNT في نفس قاعدة التكرار.';
$string['errorinvalidbydayprefix'] = 'يمكن أن تكون قيم الأعداد الصحيحة التي تسبق قواعد BYDAY موجودة فقط لقاعدة التكرار MONTHLY أو YEARLY.';
$string['errorinvalidbydaysuffix'] = 'القيم الصالحة ليوم الأسبوع أجزاء من قاعدة BYDAY هي MO و TU و WE و TH و FR و SA و SU';
$string['errorinvalidbyhour'] = 'القيم الصحيحة لقاعدة (بالساعات) من 0 إلى 23';
$string['errorinvalidbyminute'] = 'القيم الصحيحة لقاعدة (بالدقائق) من 0 إلى 59';
$string['errorinvalidbymonth'] = 'القيم الصحيحة لقاعدة (بالشهور) من 1 إلى 12';
$string['errorinvalidbymonthday'] = 'القيم الصحيحة لقاعدة (بأيام الشهر) من 1 إلى 31';
$string['errorinvalidbysecond'] = 'القيم الصحيحة لقاعدة (بالثواني) من0 إلى 59';
$string['errorinvalidbysetpos'] = 'القيم الصالحة لقاعدة BYSETPOS هي من 1 إلى 366 أو -366 إلى -1.';
$string['errorinvalidbyweekno'] = 'القيم الصالحة لقاعدة BYWEEKNO هي من 1 إلى 53 أو -53 إلى -1.';
$string['errorinvalidbyyearday'] = 'القيم الصالحة للقاعدة BYYEARDAY هي 1 إلى 366 أو -366 إلى -1.';
$string['errorinvaliddate'] = 'تاريخ غير صالح';
$string['errorinvalidicalurl'] = 'عنوان iCal المعطى غير صالح .';
$string['errorinvalidinterval'] = 'يجب أن تكون قيمة قاعدة INTERVAL عددًا صحيحًا موجبًا.';
$string['errorinvalidminutes'] = 'حدد المدة بالدقائق و ذلك بوضع رقم ما بين 1-999 .';
$string['errorinvalidrepeats'] = 'حدد عدد الأحداث و ذلك بوضع رقم ما بين  1- 99 .';
$string['errormustbeusedwithotherbyrule'] = 'يجب استخدام قاعدة BYSETPOS فقط مع جزء قاعدة BYxxx آخر.';
$string['errornodescription'] = 'الوصف مطلوب';
$string['errornoeventname'] = 'الاسم مطلوب';
$string['errornonyearlyfreqwithbyweekno'] = 'قاعدة BYWEEKNO صالحة فقط لقواعد YEARLY.';
$string['errorrequiredurlorfile'] = 'إما الرابط  أو الملف مطلوب لاستيراد التقويم .';
$string['errorrrule'] = 'يبدو أن قاعدة التكرار التي تم تمريرها غير صحيحة.';
$string['errorrruleday'] = 'تحتوي قاعدة التكرار على معلمة يوم غير صالحة.';
$string['errorrrulefreq'] = 'تحتوي قاعدة التكرار على معلمة تردد غير صالحة.';
$string['eventcalendareventcreated'] = 'تم إنشاء حدث التقويم';
$string['eventcalendareventdeleted'] = 'تم حذف حدث التقويم';
$string['eventcalendareventupdated'] = 'حدث التقويم المحدث';
$string['eventdate'] = 'التاريخ';
$string['eventdescription'] = 'الوصف';
$string['eventduration'] = 'المدة';
$string['eventendtime'] = 'وقت الانتهاء';
$string['eventendtimewrapped'] = '{$ a} (وقت الانتهاء)';
$string['eventinstanttime'] = 'الوقت';
$string['eventkind'] = 'نوع الحدث';
$string['eventname'] = 'عنوان الحدث';
$string['eventnameandcategory'] = '{$a->category}: {$a->name}';
$string['eventnameandcourse'] = '{$a->course}: {$a->name}';
$string['eventnone'] = 'لا توجد أحداث';
$string['eventrepeat'] = 'التكرار';
$string['events'] = 'أحداث';
$string['eventsall'] = 'كل الأحداث';
$string['eventsdeleted'] = 'الأحداث المحذوفة';
$string['eventsfor'] = '{$a} أحداث';
$string['eventsimported'] = 'الأحداث المستوردة : {$a}';
$string['eventskey'] = 'مفتاح الأحداث';
$string['eventsource'] = 'مصدر الحدث';
$string['eventspersonal'] = 'أحداثي الشخصية';
$string['eventsrelatedtocategories'] = 'الأحداث المتعلقة بالفئات';
$string['eventsrelatedtocourses'] = 'الأحداث المتعلقة بالمقررات';
$string['eventsrelatedtogroups'] = 'الأحداث المتعلقة بالمجموعات';
$string['eventsskipped'] = 'الحدث تم تخطيه: "{$a}"';
$string['eventstarttime'] = 'وقت البدء';
$string['eventstoexport'] = 'أحداث للتصدير';
$string['eventsubscriptioncreated'] = 'تم إنشاء اشتراك التقويم';
$string['eventsubscriptiondeleted'] = 'تم حذف اشتراك التقويم';
$string['eventsubscriptioneditwarning'] = 'هذا التقويم هو جزء من الاشتراك. سيتم فقد أية تغييرات تجريها على هذا الحدث في حالة حذف الاشتراك.';
$string['eventsubscriptionupdated'] = 'تم تحديث اشتراك التقويم';
$string['eventsupdated'] = 'تحديث الأحداث : {$a}';
$string['eventtime'] = 'الوقت';
$string['eventtype'] = 'نوع الحدث';
$string['eventtypecategory'] = 'فئة';
$string['eventtypecourse'] = 'مقرر';
$string['eventtypeglobal'] = 'عام';
$string['eventtypegroup'] = 'مجموعة';
$string['eventtypemodule'] = 'وحدة';
$string['eventtypesite'] = 'عام';
$string['eventtypeuser'] = 'مستخدم';
$string['eventview'] = 'تفاصيل الأحداث';
$string['expired'] = 'انتهى';
$string['explain_site_timeformat'] = 'يمكنك اختيار إما تنسيق 12 أو 24 ساعة للموقع ككل . لو قمت باختيار الافتراضي سيتم الاختيار الآلي حسب اللغة التي تستخدمها . هذا الإعداد يمكن تجاوزه بتفضيلات المستخدم .';
$string['export'] = 'صدّر';
$string['exportbutton'] = 'صدّر';
$string['exportcalendar'] = 'صدّر التقويم';
$string['exporthelp'] = 'كيف أشترك في هذا التقويم من أحد تطبيقات التقويم (Google/Outlook/غيرها)؟';
$string['forcecalendartype'] = 'فرض التقويم';
$string['fri'] = 'ج';
$string['friday'] = 'الجمعة';
$string['generateurlbutton'] = 'احصل على رابط التقويم';
$string['global'] = 'العالمي';
$string['globalevent'] = 'حدث عالمي';
$string['globalevents'] = 'أحداث عالمية';
$string['gotoactivity'] = 'إذهب إلى النشاط';
$string['gotocalendar'] = 'اذهب إلى التقويم';
$string['group'] = 'المجموعة';
$string['groupevent'] = 'حدث المجموعة';
$string['groupevents'] = 'أحداث المجموعة';
$string['hideeventtype'] = 'إخفاء  {$a} حدث';
$string['hourly'] = 'كل ساعة';
$string['importcalendar'] = 'استيراد التقويم';
$string['importcalendarfrom'] = 'استيراد من';
$string['importcalendarheading'] = 'استيراد التقويم ...';
$string['importfromfile'] = 'ملف التقويم (.ics)';
$string['importfrominstructions'] = 'يرجى تقديم إما رابط التقويم عن بعد ، أو تحميل ملف .';
$string['importfromurl'] = 'رابط التقويم';
$string['invalideventtype'] = 'نوع الحدث الذي حددته غير صالح.';
$string['invalidtimedurationminutes'] = 'المدة بالدقائق التي أدخلتها غير صالحة . الرجاء أدخل المدة بالدقائق أكبر من الصفر أو اختر لا مدة .';
$string['invalidtimedurationuntil'] = 'الوقت و التاريخ اللذان اخترتهما للمدة "حتى" هي قبل وقت "بدء الحدث". رجاءً صحح هذا قبل الإكمال .';
$string['iwanttoexport'] = 'صدّر';
$string['less'] = 'أقل';
$string['managesubscriptions'] = 'إدارة الاشتراكات';
$string['manyevents'] = '{$a} أحداث';
$string['mon'] = 'ن';
$string['monday'] = 'الاثنين';
$string['monthly'] = 'شهرياً';
$string['monthlyview'] = 'معاينة شهرية';
$string['monthnext'] = 'الشهر القادم';
$string['monthprev'] = 'الشهر السابق';
$string['monththis'] = 'هذا الشهر';
$string['more'] = 'المزيد';
$string['namewithsource'] = '{$a->name} ({$a->source})';
$string['never'] = 'مطلقاً';
$string['newevent'] = 'حدث جديد';
$string['nocalendarsubscriptions'] = 'لا يوجد لديك اشتراكات تقويم.';
$string['notitle'] = 'بلا عنوان';
$string['noupcomingevents'] = 'لا توجد أحداث قادمة';
$string['oneevent'] = 'حدث 1';
$string['pollinterval'] = 'فترة التحديث';
$string['pollinterval_help'] = 'كم مرة ترغب أن يقوم التقويم بتحديث الأحداث الجديدة .';
$string['pref_lookahead'] = 'معاينة الأحداث القادمة';
$string['pref_lookahead_help'] = 'يحدد هذا العدد (الأقصى) من الأيام التي يجب أن يبدأ الحدث فيها لكي يظهر كحدث قادم. الأحداث التي تبدأ خارج هذا النطاق لن يتم عرضها في الأحداث القادمة. رجاءً لاحظ أنه <strong> لا يوجد ضمانة </strong> بعرض كل الأحداث التي تبدأ ضمن هذا النطاق ؛ إن كان هناك الكثير منها (أكثر من الحد الأقصى للأحداث القادمة" المفضل ) فعندها لن يتم عرض الأحداث الأبعد.';
$string['pref_maxevents'] = 'الحد الأقصى للأحداث القادمة';
$string['pref_maxevents_help'] = 'هذا الإعداد لضبط الحد الأقصى الذي يمكن عرضه من الأحداث القادمة. إذا اخترت رقماً كبيراً هنا من الممكن أن يأخذ عرض الأحداث القادمة مساحة كبيرة من شاشتك.';
$string['pref_persistflt'] = 'تذكر مرشح الإعدادات';
$string['pref_persistflt_help'] = 'عن تفعيل هذا الخيار، سيتذكر مودل إعدادات مرشح الأحداث الأخيرة ويستعيدها تلقائياً عند كل تسجيل دخول.';
$string['pref_startwday'] = 'أول أيام الأسبوع';
$string['pref_startwday_help'] = 'ستظهر الأسابيع في التقويم على أنها تبدأ باليوم الذي تختاره هنا.';
$string['pref_timeformat'] = 'تنسيق عرض الوقت';
$string['pref_timeformat_help'] = 'يمكن الاختيار بين تنسيق الساعة على شكل 12 أو 24 ساعة. إذا اخترت "الافتراضي" ، فسيتم الاختيار بشكل آلي وفقاً للغة التي تستخدمها للموقع.';
$string['preferences'] = 'المفضلة';
$string['preferences_available'] = 'تفضيلاتك الشخصية';
$string['preferredcalendar'] = 'التقويم المفضل';
$string['privacy:metadata:calendar:event'] = 'يمكن لمكون التقويم تخزين تفاصيل حدث تقويم المستخدم داخل النظام الفرعي الأساسي.';
$string['privacy:metadata:calendar:event:description'] = 'وصف حدث التقويم.';
$string['privacy:metadata:calendar:event:eventtype'] = 'نوع الحدث لحدث التقويم.';
$string['privacy:metadata:calendar:event:name'] = 'اسم حدث التقويم.';
$string['privacy:metadata:calendar:event:timeduration'] = 'مدة الحدث التقويم.';
$string['privacy:metadata:calendar:event:timestart'] = 'وقت بدء حدث التقويم.';
$string['privacy:metadata:calendar:event_subscriptions'] = 'يمكن لمكون التقويم تخزين تفاصيل اشتراكات تقويم المستخدم داخل النظام الفرعي الأساسي.';
$string['privacy:metadata:calendar:event_subscriptions:eventtype'] = 'نوع الحدث لاشتراك التقويم.';
$string['privacy:metadata:calendar:event_subscriptions:name'] = 'اسم اشتراك التقويم.';
$string['privacy:metadata:calendar:event_subscriptions:url'] = 'عنوان url الخاص باشتراك التقويم.';
$string['privacy:metadata:calendar:preferences:calendar_savedflt'] = 'نوع الحدث التقويم تكوين عرض تفضيل المستخدم.';
$string['recentupcoming'] = 'الأحدث و الـ 60 يوم المقبلة';
$string['repeatedevents'] = 'الأحداث المتكررة';
$string['repeateditall'] = 'أيضاً نفذ التغيرات على كل {$a} الأحداث في هذه السلسة المتكررة.';
$string['repeateditthis'] = 'طبق هذه التغييرات على هذا الحدث فقط';
$string['repeatevent'] = 'تكرار هذا الحدث';
$string['repeatnone'] = 'لا تكرار';
$string['repeatweeksl'] = 'كرر أسبوعياً، أنشئ الجميع';
$string['repeatweeksr'] = 'أحداث';
$string['sat'] = 'س';
$string['saturday'] = 'السبت';
$string['showeventtype'] = 'عرض {$a} حدث';
$string['shown'] = 'تم عرضه';
$string['site'] = 'الموقع';
$string['siteevent'] = 'حدث على مستوى الموقع';
$string['siteevents'] = 'موقع الأحداث';
$string['spanningevents'] = 'الأحداث القادمة';
$string['subscriptionname'] = 'اسم التقويم';
$string['subscriptionremoved'] = 'اشتراك التقويم {$a} حذف';
$string['subscriptions'] = 'الاشتراكات';
$string['subscriptionsource'] = 'مصدر الحدث: {$a}';
$string['subscriptionupdated'] = 'اشتراك التقويم {$a} محدثة';
$string['sun'] = 'ح';
$string['sunday'] = 'الأحد';
$string['thu'] = 'خ';
$string['thursday'] = 'الخميس';
$string['timeformat_12'] = '12 ساعة (ص/م)';
$string['timeformat_24'] = '24 ساعة';
$string['timeperiod'] = 'فترة زمنية';
$string['today'] = 'اليوم';
$string['todayplustitle'] = 'اليوم {$a}';
$string['tomorrow'] = 'غداً';
$string['tt_deleteevent'] = 'احذف الحدث';
$string['tt_editevent'] = 'تحرير الحدث';
$string['tue'] = 'ث';
$string['tuesday'] = 'الثلاثاء';
$string['typecategory'] = 'حدث الفئة';
$string['typeclose'] = 'اغلاق حدث';
$string['typecourse'] = 'حدث في مقرر';
$string['typedue'] = 'الحدث حتى';
$string['typegradingdue'] = 'تقييم الحدث حتى';
$string['typegroup'] = 'حدث في مجموعة';
$string['typeopen'] = 'فتح حدث';
$string['typesite'] = 'حدث على مستوى الموقع';
$string['typeuser'] = 'حدث للمستخدم';
$string['upcomingevents'] = 'الأحداث القادمة';
$string['upcomingeventsfor'] = 'الأحداث القادمة لـ:';
$string['urlforical'] = 'عنوان التقويم الإلكتروني ليتم تصديره للاشتراك في التقويم .';
$string['user'] = 'المستخدم';
$string['userevent'] = 'حدث للمستخدم';
$string['userevents'] = 'أحداث للمستخدم';
$string['viewupcomingactivitiesdue'] = 'معاينة استيجاب النشاطات القادمة';
$string['wed'] = 'ع';
$string['wednesday'] = 'الأربعاء';
$string['weekly'] = 'أسبوعياً';
$string['weeknext'] = 'الأسبوع القادم';
$string['weekthis'] = 'هذا الأسبوع';
$string['when'] = 'عند';
$string['whendate'] = 'متى: {$a}';
$string['yesterday'] = 'أمس';
$string['youcandeleteallrepeats'] = 'هذا الحدث هو جزء من سلسلة أحداث متكررة. تستطيع حذف هذا الحدث فقط، أو كل {$a} الأحداث في هذه السلسة مرة واحدة .';
