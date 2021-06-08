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
 * Strings for component 'glossary', language 'ru', version '3.11'.
 *
 * @package     glossary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Добавить категорию';
$string['addcomment'] = 'Добавить комментарий';
$string['addentry'] = 'Добавить новую запись';
$string['addingcomment'] = 'Добавить комментарий';
$string['alias'] = 'Ключевое слово';
$string['aliases'] = 'Ключевое(ые) слово(а)';
$string['aliases_help'] = '<h2>Ключевые слова</h2>

<p>С каждой записью в глоссарии может быть связан список ключевых слов (или псевдонимов).</p>

<p>Каждый псевдоним необходимо ввести в это поле с новой строки (<b>без разделительных знаков</b>).</p>

<p>Слова и фразы псевдонимы могут использоваться как альтернативные способы обращения к записи. Например, если вы будете использовать глоссарий с автосвязывающим фильтром, то псевдонимы будут использоваться (так же как главное название записи) для связывания с этой записью. </p>';
$string['allcategories'] = 'Все категории';
$string['allentries'] = 'Все';
$string['allowcomments'] = 'Разрешить комментарии к записям';
$string['allowcomments_help'] = '<h2>Добавление комментариев к статьям</h2>

<p>Если «Да», то ученики могут добавлять комментарии к статьям глоссария.
<p>Учителя всегда могут добавлять комментарии.</p>';
$string['allowduplicatedentries'] = 'Разрешить более одного определения на одно слово';
$string['allowduplicatedentries_help'] = '<h2>Дублирование статей</h2>

<p>Эта опция позволяет размещать в глоссарии несколько статей для одного термина (например, определения, данные несколькими учениками). Выберите «Да», если это разрешается.</p>';
$string['allowprintview'] = 'Разрешить вид для печати';
$string['allowprintview_help'] = 'Если включено, студентам предоставляется ссылка на версию для печати из глоссария. Данная ссылка всегда доступна учителям.';
$string['andmorenewentries'] = 'и больше новых записей - {$a}.';
$string['answer'] = 'Ответ';
$string['approvaldisplayformat'] = 'Утвержденный формат отображения';
$string['approvaldisplayformat_help'] = 'После утверждения глоссария вы можете использовать другой формат отображения.';
$string['approve'] = 'Одобрить';
$string['areaattachment'] = 'Вложения';
$string['areaentry'] = 'Определения';
$string['areyousuredelete'] = 'Вы уверены, что хотите удалить эту запись?';
$string['areyousuredeletecomment'] = 'Вы уверенны, что хотите удалить этот комментарий?';
$string['areyousureexport'] = 'Вы уверенны, что хотите экспортировать эту запись в';
$string['ascending'] = '(возрастание)';
$string['attachment'] = 'Вложение';
$string['attachment_help'] = '<h2>Вложения для записей</h2>

<p>Вы можете дополнительно приложить <b>один</b> файл с вашего компьютера в запись глоссария.
Файл загружается на сервер и хранится с вашей записью.</p>

<p>Это удобно, если вы хотите разместить изображение или документ Word.</p>

<p>Это может быть файл любого типа, однако расширение должно быть  .doc для документа Word, .jpg или .png для изображения. Это упростит загрузку и просмотр приложений другими пользователями.</p>

<p>Если вы измените запись и прикрепите новый файл, предыдущий файл будет замещен.</p>

<p>Если вы измените запись и оставите поле вложения пустым, то прикрепленным останется прежний файл.</p>';
$string['author'] = 'автор';
$string['authorview'] = 'Обзор по авторам';
$string['back'] = 'Назад';
$string['cachedef_concepts'] = 'Концепция связывания';
$string['cantinsertcat'] = 'Нельзя вставить категорию';
$string['cantinsertrec'] = 'Нельзя вставить запись';
$string['cantinsertrel'] = 'Нельзя вставить отношение категория-запись';
$string['casesensitive'] = 'Это слово чувствительно к регистру';
$string['casesensitive_help'] = 'Этот параметр определяет, необходимо ли точное совпадение с учетом регистра при выполнении автоматического связывания с записью.';
$string['cat'] = 'кат.';
$string['categories'] = 'Категории';
$string['category'] = 'Категория';
$string['categorydeleted'] = 'Категория удалена';
$string['categoryview'] = 'Обзор по категориям';
$string['changeto'] = 'изменить на {$a}';
$string['cnfallowcomments'] = 'По умолчанию разрешать комментирование записей';
$string['cnfallowdupentries'] = 'По умолчанию разрешать более одной статьи на одно слово';
$string['cnfapprovalstatus'] = 'По умолчанию одобрять записи, полученные от студентов';
$string['cnfcasesensitive'] = 'По умолчанию слова будут чувствительны к регистру';
$string['cnfdefaulthook'] = 'При первом показе глоссария выделить';
$string['cnfdefaultmode'] = 'При первом показе глоссария использовать фрейм';
$string['cnffullmatch'] = 'По умолчанию слова должны будут автосвязываться только целиком';
$string['cnflinkentry'] = 'По умолчанию слова должны будут автосвязываться';
$string['cnflinkglossaries'] = 'По умолчанию глосарии должны быть с включенным автосвязыванием';
$string['cnfrelatedview'] = 'Выберите формат показа записи, который будет использоваться при автосвязывании';
$string['cnfshowgroup'] = 'Разделять по группам?';
$string['cnfsortkey'] = 'По умолчанию сортировать по полю';
$string['cnfsortorder'] = 'По умолчанию сортировать';
$string['cnfstudentcanpost'] = 'По умолчанию студенты могут посылать записи?';
$string['cnftabs'] = 'Выбрать видимые вкладки для этого формата глоссария';
$string['comment'] = 'Комментарий';
$string['commentdeleted'] = 'Комментарий был удален.';
$string['comments'] = 'Комментарии';
$string['commentson'] = 'Комментарии о';
$string['commentupdated'] = 'Комментарий был изменен';
$string['completiondetail:entries'] = 'Внести записи: {$a}';
$string['completionentries'] = 'Студент должен создать записей:';
$string['completionentriesdesc'] = 'Студент должен создать не менее {$a} записи(ей)';
$string['completionentriesgroup'] = 'Требуется записей';
$string['concept'] = 'Слово';
$string['concepts'] = 'Слова';
$string['configenablerssfeeds'] = 'Эта настройка позволяет включить возможность отражения изменений в формате RSS для глоссариев. Для каждого глоссария включать RSS всё еще надо будет вручную.';
$string['current'] = 'Отсортированы {$a}';
$string['currentglossary'] = 'Текущий глоссарий';
$string['date'] = 'дата';
$string['dateview'] = 'Обзор по дате';
$string['defaultapproval'] = 'Статьи одобрены по умолчанию';
$string['defaultapproval_help'] = 'Если установлено значение Нет, то записи станут доступны всем только после одобрения преподавателем.';
$string['defaulthook'] = 'По умолчанию выделить';
$string['defaultmode'] = 'Режим по умолчанию';
$string['defaultsortkey'] = 'По умолчанию сортировать';
$string['defaultsortorder'] = 'Сортировка по умолчанию';
$string['definition'] = 'Определение';
$string['definitions'] = 'Определения';
$string['deletecategory'] = 'Удалить категорию';
$string['deleteentry'] = 'Удалить запись';
$string['deleteentrya'] = 'Удалить запись: {$a}';
$string['deletenotenrolled'] = 'Удалить записи незарегистрированных пользователей';
$string['deletingcomment'] = 'Удаление комментария';
$string['deletingnoneemptycategory'] = 'Удаление категории не удалит записи, которые к ней относились - они просто будут отмечены, как не относящиеся к категориям.';
$string['descending'] = '(убывание)';
$string['destination'] = 'Назначение импортируемых записей';
$string['destination_help'] = '<h2>Размещение импортированных записей</h2>

<p>Вы можете определить, куда будете импортировать записи:</p>
<ul>
<li><strong>Текущий глоссарий:</strong> Записи будут добавляться в открытый глоссарий.</li>
<li><strong>Новый глоссарий:</strong> Будет создан новый глоссарий, построенный на информации, найденной в файле импорта, и записи вставлены в него.</li>
</ul>';
$string['disapprove'] = 'Отменить одобрение';
$string['displayformat'] = 'Формат отображения';
$string['displayformat_help'] = 'Есть 7 форматов отображения:

* Простой словарь - авторы записей не показываются, а вложения отображаются как ссылки.
* Непрерывный без автора - записи отображаются одна после другой, без каких-либо разделений, но со значками редактирования.
* Полный с автором - формат, подобный форуму с отображением автора. Вложения показываются как ссылки.
* Полный без автора - формат, подобный форуму без отображения автора. Вложения показываются как ссылки.
* Энциклопедия - подобен формату «Полный с автором», но вложения показываются сразу.
* Список записей - понятия перечислены как ссылки
* ЧаВо - слова ВОПРОС и ОТВЕТ добавляются к понятию и определению соответственно.';
$string['displayformatcontinuous'] = 'Непрерывный, без автора';
$string['displayformatdefault'] = 'Соответствует формату отображения';
$string['displayformatdictionary'] = 'Простой, вроде словаря';
$string['displayformatencyclopedia'] = 'Энциклопедия';
$string['displayformatentrylist'] = 'Список записей';
$string['displayformatfaq'] = 'ЧаВо';
$string['displayformatfullwithauthor'] = 'Полный, с указанием автора';
$string['displayformatfullwithoutauthor'] = 'Полный, без указания автора';
$string['displayformats'] = 'Форматы отображения';
$string['displayformatssetup'] = 'Настройка форматов отображения';
$string['duplicatecategory'] = 'Дублировать категорию';
$string['duplicateentry'] = 'Дублировать запись';
$string['editalways'] = 'Всегда разрешать редактирование';
$string['editalways_help'] = '<h2>Разрешить всегда редактировать</h2>

<p>Эта опция позволяет вам разрешить ученикам редактировать их записи в любое время.</p>

<p>Вы можете выбрать:</p>

<ul>
<li><b>Да:</b> Записи всегда доступны для редактирования.</li>

<li><b>Нет:</b> Записи доступны для редактирования в определенное время.</li>
</ul>';
$string['editcategories'] = 'Редактировать категории';
$string['editcategory'] = 'Изменить категорию';
$string['editentry'] = 'Редактировать запись';
$string['editentrya'] = 'Изменить запись: {$a}';
$string['editingcomment'] = 'Редактирование комментария';
$string['entbypage'] = 'Записей на страницу';
$string['entries'] = 'Записи';
$string['entrieswithoutcategory'] = 'Записи без категории';
$string['entry'] = 'Запись';
$string['entryalreadyexist'] = 'Такая запись уже существует';
$string['entryapproved'] = 'Эта запись одобрена';
$string['entrydeleted'] = 'Запись удалена';
$string['entryexported'] = 'Запись успешно экспортирована';
$string['entryishidden'] = '(эта запись сейчас спрятана)';
$string['entryleveldefaultsettings'] = 'Настройки уровня записи по умолчанию';
$string['entrylink'] = 'Ссылка на запись: {$a}';
$string['entrynotapproved'] = 'Запись не одобрена';
$string['entrysaved'] = 'Запись сохранена';
$string['entryupdated'] = 'Запись обновлена';
$string['entryusedynalink'] = 'Эта запись должна автоматически связываться';
$string['entryusedynalink_help'] = '<h2>Автоматические ссылки на записи</h2>

<p>Включение этой возможности позволяет автоматически связывать гиперссылками слова и фразы, встречающиеся в курсе, с совпадающими записями глоссария.</p>

<p> Если вы хотите, чтобы некоторый текст не связывался, тогда вы можете заключить его в теги &lt;nolink&gt; и &lt;/nolink&gt;</p>

<p> Чтобы включить эту возможность, необходимо включить автоматическое связывание на уровне глоссария. </p>';
$string['errcannoteditothers'] = 'Вы не можете редактировать чужие записи.';
$string['errconceptalreadyexists'] = 'Это понятие уже существует. Повторения в этом глоссарии не допускаются.';
$string['errdeltimeexpired'] = 'Вы не можете это удалить. Время истекло!';
$string['erredittimeexpired'] = 'Время редактирования этой записи истекло.';
$string['errorparsingxml'] = 'Ошибки при анализе файла. Убедитесь, что там допустимый синтаксис XML.';
$string['eventcategorycreated'] = 'Категория создана';
$string['eventcategorydeleted'] = 'Категория удалена';
$string['eventcategoryupdated'] = 'Категория обновлена';
$string['evententryapproved'] = 'Запись одобрена';
$string['evententrycreated'] = 'Запись создана';
$string['evententrydeleted'] = 'Запись удалена';
$string['evententrydisapproved'] = 'Запись не одобрена';
$string['evententryupdated'] = 'Запись обновлена';
$string['evententryviewed'] = 'Запись просмотрена';
$string['explainaddentry'] = 'Добавить новую запись.<br/>
Слово и определение - поля обязательные.';
$string['explainall'] = 'Показать все записи на одной странице';
$string['explainalphabet'] = 'Обзор глоссария по алфавиту';
$string['explainexport'] = 'Файл был создан.<br/>
Загрузите и сохраните его.
Вы можете импортировать его когда угодно, в этом или другом курсе.';
$string['explainimport'] = 'Указажите файл для импорта и определите остальные параметры.<br/>
Затем нажмите Сохранить и любуйтесь результатом.';
$string['explainspecial'] = 'Покажите записи, которые не начинаются с буквы';
$string['exportedentry'] = 'Экспортирированная запись';
$string['exportentries'] = 'Экспорт записей';
$string['exportentriestoxml'] = 'Экспортировать записи в файл XML';
$string['exportfile'] = 'Экспорт записей в файл';
$string['exportglossary'] = 'Экспортировать глоссарий';
$string['exporttomainglossary'] = 'Экспортировать в главный глоссарий';
$string['filetoimport'] = 'Файл для импорта';
$string['filetoimport_help'] = 'Выберите на своем компьютере XML-файл, содержащий записи для импорта.';
$string['fillfields'] = 'Слово и определение - поля обязательные.';
$string['filtername'] = 'Автосвязывание глоссария';
$string['fullmatch'] = 'Определять соответствие только полным словам';
$string['fullmatch_help'] = '<h2>Полное совпадение слов</h2>

<p>Если автоматическое связывание включено, тогда включение этой опции приведет к связыванию только целых слов.</p>

<p>Например, запись «конструктив» не создаст ссылку со словом «конструктивизм».</p>';
$string['glossary:addinstance'] = 'Добавлять новый глоссарий';
$string['glossary:approve'] = 'Одобрять записи или отменять их одобрение';
$string['glossary:comment'] = 'Создавать комментарии';
$string['glossary:export'] = 'Экспортировать записи';
$string['glossary:exportentry'] = 'Экспортировать одиночную запись';
$string['glossary:exportownentry'] = 'Экспортировать свою одиночную запись';
$string['glossary:import'] = 'Импортировать записи';
$string['glossary:managecategories'] = 'Управлять категориями';
$string['glossary:managecomments'] = 'Управлять комментариями';
$string['glossary:manageentries'] = 'Управлять записями';
$string['glossary:rate'] = 'Оценивать записи';
$string['glossary:view'] = 'Просматривать глоссарий';
$string['glossary:viewallratings'] = 'Видеть все предварительные оценки';
$string['glossary:viewanyrating'] = 'Видеть итоговые оценки любого пользователя';
$string['glossary:viewrating'] = 'Видеть свои итоговые оценки';
$string['glossary:write'] = 'Создавать новые записи';
$string['glossaryleveldefaultsettings'] = 'Настройки уровня глоссария по умолчанию';
$string['glossarytype'] = 'Тип глоссария';
$string['glossarytype_help'] = 'В основной глоссарий можно импортировать записи из вторичных глоссариев. В курсе может быть только один основной глоссарий. Если импорт записей глоссария не требуется, все глоссарии в курсе могут быть вторичными.';
$string['guestnoedit'] = 'Гость не имеет права редактировать глоссарий';
$string['importcategories'] = 'Импортировать категории';
$string['importedcategories'] = 'Импортированные категории';
$string['importedentries'] = 'Импортированные записи';
$string['importentries'] = 'Импорт записей';
$string['importentriesfromxml'] = 'Импорт записей из XML-файла';
$string['includegroupbreaks'] = 'Включить разделение на группы';
$string['indicator:cognitivedepth'] = 'Глоссарий: познавательный аспект';
$string['indicator:cognitivedepth_help'] = 'Этот показатель основан на глубине познания, достигнутой студентом при работе с элементом курса «Глоссарий».';
$string['indicator:cognitivedepthdef'] = 'Глоссарий: познавательный аспект';
$string['indicator:cognitivedepthdef_help'] = 'Участник достиг этого процента познавательного взаимодействия, предлагаемого элементом курса «Глоссарий» в течение этого интервала анализа (Уровни = Нет просмотра, Просмотр, Отправка)';
$string['indicator:socialbreadth'] = 'Глоссарий: социальный аспект';
$string['indicator:socialbreadth_help'] = 'Этот показатель основан на широте общения, которая может быть достигнута студентом при работе с элементом Глоссарий.';
$string['indicator:socialbreadthdef'] = 'Глоссарий: социальный аспект';
$string['indicator:socialbreadthdef_help'] = 'Участник достиг этого процента социальной активности, предлагаемой элементами Глоссарий в течение этого интервала анализа (Уровни = нет участия, единственный участник)';
$string['isglobal'] = 'Этот глоссарий глобальный?';
$string['isglobal_help'] = '<h2>Определение глобального глоссария</h2>

<p>Администраторы могут определить глоссарий как глобальный.</p>

<p>Эти глоссарии могут быть частью любого курса (или главной страницы).</p>

<p>Отличие от обычного глоссария в том, что записи глобального могут быть использованы  по всему сайту, а не только в том курсе, в котором находится глоссарий.</p>';
$string['letter'] = 'буква';
$string['linkcategory'] = 'Автосвязывать имя этой категории';
$string['linkcategory_help'] = '<h2>Автоматическое связывание категорий</h2>

<p>Вы можете определить, будут ли автоматически связываться категории или нет.</p>

<p>Примечание: связанные категории при чувствительности к регистру должны совпадать полностью.</p>';
$string['linking'] = 'Автосвязывание';
$string['mainglossary'] = 'Главный глоссарий';
$string['maxtimehaspassed'] = 'Извините, но максимальное время для редактирования этого комментария ({$a}) истекло!';
$string['modulename'] = 'Глоссарий';
$string['modulename_help'] = 'Модуль «Глоссарий» позволяет участникам создавать и поддерживать список определений, подобный словарю или собирать и систематизировать ресурсы и информацию.

Преподаватель может разрешить прикреплять файлы к записям глоссария. Прикрепленные изображения отображаются в записи. Может проводиться поиск и просмотр записей по алфавиту, категории, дате или автору. Записи могут быть одобрены по умолчанию, либо они должны быть одобрены преподавателем, прежде чем станут доступны всем для просмотра.

Если в глоссарии включен автосвязывающий фильтр, то запись будет автоматически связана в курсе со словом и/или фразой, в которых встречается термин.

Преподаватель может разрешить комментарии для записей. Записи могут также быть оценены преподавателями или студентами (равноправная оценка). Баллы могут быть объединены, чтобы сформировать окончательную оценку, которая записывается в журнал оценок.

Глоссарии имеют множество применений, таких как

* совместный банк ключевых терминов.
* пространство для знакомства, где новые студенты добавляют свое имя и персональные данные.
* ресурс «Полезные советы» для обмена передовым практическим опытом.
* общая область для хранения полезного видео, изображений и звуковых файлов
* ресурс для проверки фактов, требующих запоминания.';
$string['modulenameplural'] = 'Глоссарии';
$string['newentries'] = 'Новые записи глоссария';
$string['newglossary'] = 'Новый глоссарий';
$string['newglossarycreated'] = 'Новый глоссарий создан';
$string['newglossaryentries'] = 'Новые записи глоссария:';
$string['nocomment'] = 'Комментариев не найдено';
$string['nocomments'] = '(Комментариев для этой записи не найдено)';
$string['noconceptfound'] = 'Не найдено слов или определений';
$string['noentries'] = 'В этом разделе не найдено ни одной записи';
$string['noentry'] = 'Записей не найдено.';
$string['nopermissiontodelcomment'] = 'Вы не можете удалять комментарии других людей!';
$string['nopermissiontodelinglossary'] = 'Вы не можете комментировать записи в этом глоссарии!';
$string['nopermissiontoviewresult'] = 'Вы можете только видеть результаты для своих записей';
$string['notapproved'] = 'запись глоссария пока не одобрена.';
$string['notcategorised'] = 'Вне категорий';
$string['numberofentries'] = 'Количество записей';
$string['onebyline'] = '(по одной на строку)';
$string['page-mod-glossary-edit'] = 'Страница добавления/редактирования записи глоссария';
$string['page-mod-glossary-view'] = 'Страница просмотра записей глоссария';
$string['page-mod-glossary-x'] = 'Любая страница модуля «Глоссарий»';
$string['pluginadministration'] = 'Управление глоссарием';
$string['pluginname'] = 'Глоссарий';
$string['popupformat'] = 'Формат всплывающего окна';
$string['print'] = 'Печать';
$string['printerfriendly'] = 'Версия для печати';
$string['printviewnotallowed'] = 'Версия для печати не предусмотрена';
$string['privacy'] = 'Конфиденциальность результатов';
$string['privacy:metadata:core_comments'] = 'Комментарии к определениям глоссария хранятся в системе core_comment';
$string['privacy:metadata:core_files'] = 'Файлы, связанные с определениями глоссария, хранятся в системе core_files.';
$string['privacy:metadata:core_rating'] = 'Оценки, добавленные к записям глоссария, хранятся в системе core_rating.';
$string['privacy:metadata:core_tag'] = 'Теги, добавленные к определениям глоссария, хранятся в системе core_tag.';
$string['privacy:metadata:glossary_entries'] = 'Информация о записях пользователя для данного глоссария';
$string['privacy:metadata:glossary_entries:attachment'] = 'Вложение к записи, добавленное пользователем';
$string['privacy:metadata:glossary_entries:concept'] = 'Концепция записи, которую добавил пользователь';
$string['privacy:metadata:glossary_entries:definition'] = 'Определение записи, добавленное пользователем';
$string['privacy:metadata:glossary_entries:glossaryid'] = 'ID Глоссария';
$string['privacy:metadata:glossary_entries:timemodified'] = 'Отметка времени, указывающая, когда запись глоссария была изменена пользователем';
$string['privacy:metadata:glossary_entries:userid'] = 'ID пользователя, который добавил запись в этот глоссарий';
$string['question'] = 'Вопрос';
$string['rejectedentries'] = 'Отклоненные записи';
$string['rejectionrpt'] = 'Отчет по отклоненным записям';
$string['removeallglossarytags'] = 'Удалить все теги глоссария';
$string['resetglossaries'] = 'Удаление записей из';
$string['resetglossariesall'] = 'Удалить записи из всех глоссариев';
$string['rssarticles'] = 'Количество статей в RSS-ленте';
$string['rssarticles_help'] = '<h2>Количество RSS статей в рассылке</h2>

<p>Эта опция позволяет вам выбрать количество статей, включаемых в  RSS рассылку.</p>

<p>Число от 5 до 20 подходит для большинства глоссариев. Увеличьте его, если глоссарий обновляется часто.</p>';
$string['rsssubscriberss'] = 'Показать изменения в RSS формате для \'{$a}\' концепций';
$string['rsstype'] = 'RSS-лента для этого глоссария';
$string['rsstype_help'] = '<h2>RSS рассылка из глоссария</h2>

<p>Эта опция позволяет вам включить RSS рассылку из этого глоссария.</p>

<p>Вы можете выбрать один из двух типов рассылки:</p>

<ul>
<li><b>С автором:</b> Рассылка будет включать имя автора каждой статьи.</li>

<li><b>Без автора:</b> Рассылка не будет включать имя автора каждой статьи.</li>
</ul>';
$string['search:activity'] = 'Глоссарий — информация об элементе курса';
$string['search:entry'] = 'Глоссарий — записи';
$string['searchindefinition'] = 'Полнотекстовый поиск';
$string['secondaryglossary'] = 'Вторичный глоссарий';
$string['showall'] = 'Показать ссылку «Все»';
$string['showall_help'] = '<h2>Варианты просмотра</h2>

<p> вы можете настроить способ, которым пользователь может просмотреть глоссарий. Просмотр и поиск доступны всегда, но вы можете определить три варианта: </p>

<p> <b>Показывать специальные символы</b> - включение или выключение просмотра записей со специальными символами, такими как @, #, и т.д. </p>

<p> <b>Показывать алфавит</b> - включение или выключение просмотра записей по буквам алфавита. </p>

<p> <b>Показывать ссылку «ВСЕ»</b> - включение или выключение просмотра всех записей сразу. </p>';
$string['showalphabet'] = 'Показывать алфавит';
$string['showalphabet_help'] = '<h2>Варианты просмотра</h2>

<p> вы можете настроить способ, которым пользователь может просмотреть глоссарий. Просмотр и поиск доступны всегда, но вы можете определить три варианта: </p>

<p> <b>Показывать специальные символы</b> - включение или выключение просмотра записей со специальными символами, такими как @, #, и т.д. </p>

<p> <b>Показывать алфавит</b> - включение или выключение просмотра записей по буквам алфавита. </p>

<p> <b>Показывать ссылку «ВСЕ»</b> - включение или выключение просмотра всех записей сразу. </p>';
$string['showspecial'] = 'Показывать ссылку «Специальные»';
$string['showspecial_help'] = '<h2>Варианты просмотра</h2>

<p> вы можете настроить способ, которым пользователь может просмотреть глоссарий. Просмотр и поиск доступны всегда, но вы можете определить три варианта: </p>

<p> <b>Показывать специальные символы</b> - включение или выключение просмотра записей со специальными символами, такими как @, #, и т.д. </p>

<p> <b>Показывать алфавит</b> - включение или выключение просмотра записей по буквам алфавита. </p>

<p> <b>Показывать ссылку «ВСЕ»</b> - включение или выключение просмотра всех записей сразу. </p>';
$string['sortby'] = 'Сортировать по';
$string['sortbycreation'] = 'По дате создания';
$string['sortbylastupdate'] = 'По дате последнего обновления';
$string['sortchronogically'] = 'Хронологическая сортировка';
$string['special'] = 'Специальные';
$string['standardview'] = 'Обзор по алфавиту';
$string['studentcanpost'] = 'Студенты могут добавлять записи';
$string['tagarea_glossary_entries'] = 'Записи глоссария';
$string['tagsdeleted'] = 'Теги глоссария были удалены';
$string['totalentries'] = 'Всего записей';
$string['usedynalink'] = 'Автоматическое связывание записей глоссария';
$string['usedynalink_help'] = '<h2> Автоматические ссылки на глоссарий </h2>

<p> Включение этой опции позволяет связывать гиперссылками слова и фразы, появляющиеся в этом же курсе (форум, внутренние ресурсы и т.д.), с совпадающими записями глоссария. </p>

<p> Заметьте, что предоставление возможности связывания для глоссария автоматически не включает связывание для каждой записи; связывание должно быть установлено для каждой записи. </p>

<p> Если вы хотите, чтобы некоторый текст в курсе не связывался с глоссарием, вы должны заключить его в теги &lt;nolink&gt; и &lt;/nolink&gt;. </p>

<p> Заметьте, что названия категорий также связываются. </p>';
$string['visibletabs'] = 'Видимые вкладки';
$string['waitingapproval'] = 'Ожидающие одобрения';
$string['warningstudentcapost'] = '(Доступно только, если глоссарий не главный)';
$string['withauthor'] = 'Слова с авторами';
$string['withoutauthor'] = 'Слова без автора';
$string['writtenby'] = 'по';
$string['youarenottheauthor'] = 'Вы - не автор этого комментария. Вы не можете его редактировать.';
