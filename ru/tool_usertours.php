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
 * Strings for component 'tool_usertours', language 'ru', version '3.11'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Вверху';
$string['actions'] = 'Действия';
$string['appliesto'] = 'Применяется к';
$string['backdrop'] = 'Показывать на темном фоне';
$string['backdrop_help'] = 'Вы можете использовать фон для выделения части страницы, на которую указываете.

Примечание: Фоны не работают с некоторыми частями страницы, например, с панелью навигации.';
$string['below'] = 'Внизу';
$string['block'] = 'Блок';
$string['block_named'] = 'Блок с названием «{$a}»';
$string['cachedef_stepdata'] = 'Список шагов';
$string['cachedef_tourdata'] = 'Список разрешенных туров для пользователей, отображаемый на каждой странице';
$string['confirmstepremovalquestion'] = 'Вы действительно хотите удалить этот шаг?';
$string['confirmstepremovaltitle'] = 'Подтвердите удаление шага';
$string['confirmtourremovalquestion'] = 'Вы действительно хотите удалить этот тур?';
$string['confirmtourremovaltitle'] = 'Подтвердите удаление тура';
$string['content'] = 'Содержимое';
$string['content_heading'] = 'Содержимое';
$string['content_help'] = 'Содержимое, описывающее шаг, может быть добавлено в виде обычного текста, при необходимости заключенного в многоязычные теги (для использования с многоязычным фильтром).

Также может быть указан идентификатор строки языкового пакета в формате «идентификатор,компонент» (без кавычек и пробела после запятой).';
$string['cssselector'] = 'Селектор CSS';
$string['defaultvalue'] = 'Значение по умолчанию ({$a})';
$string['delay'] = 'Задержка перед отображением шага';
$string['delay_help'] = 'При желании можно добавить задержку (в миллисекундах) перед отображением шага.';
$string['description'] = 'Описание';
$string['done'] = 'Готово';
$string['duplicatetour'] = 'Дублировать тур';
$string['duplicatetour_name'] = '{$a} (копия)';
$string['editstep'] = 'Редактирование «{$a}»';
$string['enabled'] = 'Включено';
$string['endtour'] = 'Закончить тур';
$string['event_step_shown'] = 'Шаг тура отображен';
$string['event_tour_ended'] = 'Тур закончен';
$string['event_tour_reset'] = 'Тур сброшен';
$string['event_tour_started'] = 'Тур начат';
$string['exporttour'] = 'Экспорт тура';
$string['filter_accessdate'] = 'Дата доступа';
$string['filter_accessdate_enabled'] = 'Включить фильтр даты доступа';
$string['filter_accessdate_enabled_help'] = 'Показывать тур только новым пользователям или пользователям, которые недавно зарегистрированы на сайте.';
$string['filter_category'] = 'Категория';
$string['filter_category_help'] = 'Показывать тур на странице, связанной с курсом в выбранной категории.';
$string['filter_course'] = 'Курсы';
$string['filter_course_help'] = 'Показывать тур на странице, связанной с выбранным курсом.';
$string['filter_courseformat'] = 'Формат курса';
$string['filter_courseformat_help'] = 'Показывать тур на странице, связанной с курсом, использующим выбранный формат курса.';
$string['filter_cssselector'] = 'Селектор CSS';
$string['filter_cssselector_help'] = 'Показывать тур только тогда, когда на странице найден указанный селектор CSS.';
$string['filter_date_account_creation'] = 'Дата создания учетной записи пользователя в течение';
$string['filter_date_first_login'] = 'Дата первого доступа пользователя в течение';
$string['filter_date_last_login'] = 'Дата последнего доступа пользователя в течение';
$string['filter_header'] = 'Фильтры тура';
$string['filter_help'] = 'Выберите условия, при которых будет отображаться тур. Тур будет показан пользователю при выполнении всех условий.';
$string['filter_role'] = 'Роль';
$string['filter_role_help'] = 'Можно ограничить отображение тура только для пользователей с определенными ролями в контексте, где отображается тур. Например, разрешение на просмотр тура «Личный кабинет» для пользователей с ролью студента не будет работать, если пользователю назначена роль студента в курсе (как это обычно бывает). Тур «Личный кабинет» может быть доступен только пользователями с глобальной ролью на уровне системы.';
$string['filter_theme'] = 'Тема';
$string['filter_theme_help'] = 'Показывать тур, если пользователь использует одну из выбранных тем.';
$string['importtour'] = 'Импорт тура';
$string['left'] = 'Слева';
$string['modifyshippedtourwarning'] = 'Это тур для пользователя, который поставляется с Moodle. Любые сделанные Вами изменения могут быть переопределены во время следующего обновления сайта.';
$string['movestepdown'] = 'Переместить шаг вниз';
$string['movestepup'] = 'Переместить шаг вверх';
$string['movetourdown'] = 'Переместить тур вниз';
$string['movetourup'] = 'Переместить тур вверх';
$string['name'] = 'Название';
$string['newstep'] = 'Новый шаг';
$string['newtour'] = 'Создать новый тур';
$string['next'] = 'Далее';
$string['nextstep'] = 'Далее';
$string['options_heading'] = 'Параметры';
$string['orphan'] = 'Отображать, если цель не найдена';
$string['orphan_help'] = 'Выводить этот шаг, если цель отсутствует на странице.';
$string['pathmatch'] = 'Применять к URL, соответствующим шаблону';
$string['pathmatch_help'] = 'Туры будут отображаться на любой странице, URL которой соответствует указанному значению.

Вы можете использовать символ % в качестве подстановочного знака для обозначения любого текста.
Вот несколько примеров:

* /my/% - соответствует Личному кабинету
* /course/view.php?id=2 - соответствует определенному курсу
* /mod/forum/view.php% - соответствует списку обсуждений форума
* /user/profile.php% - соответствует странице профиля пользователя

Для того, чтобы отобразить тур на домашней странице сайта, используйте значение «FRONTPAGE».';
$string['pausetour'] = 'Пауза';
$string['placement'] = 'Расположение';
$string['placement_help'] = 'Шаг может быть расположен сверху, снизу, слева или справа от цели. Рекомендуется располагать сверху или снизу, такие положения лучше настраиваются для мобильного дисплея.

Если этот шаг не подходит для указанного места на конкретной странице, он будет автоматически помещен в другое место.';
$string['pluginname'] = 'Туры для пользователей';
$string['previousstep'] = 'Назад';
$string['privacy:metadata:preference:completed'] = 'Время, когда пользователь в последний раз завершил пользовательский тур.';
$string['privacy:metadata:preference:requested'] = 'Время, когда пользователь последний раз вручную запрашивал пользовательский тур.';
$string['privacy:request:preference:completed'] = 'Последний раз вы отметили тур пользователя «{$a->name}» как завершенный в {$a->time}';
$string['privacy:request:preference:requested'] = 'Последний раз вы запрашивали тур пользователя «{$a->name}» в {$a->time}';
$string['reflex'] = 'Продолжать движение по щелчку';
$string['reflex_help'] = 'Перейти к следующему шагу при нажатии на цель.';
$string['resettouronpage'] = 'Сбросить тур для пользователя на этой странице';
$string['resumetour'] = 'Продолжить';
$string['right'] = 'Справа';
$string['select_block'] = 'Выберите блок';
$string['selector_defaulttitle'] = 'Введите информативный заголовок';
$string['selectordisplayname'] = 'Селектор CSS, соответствующий шаблону «{$a}»';
$string['selecttype'] = 'Выберите тип шага';
$string['sharedtourslink'] = 'Репозиторий туров';
$string['skip'] = 'Пропустить';
$string['target'] = 'Цель';
$string['target_block'] = 'Блок';
$string['target_heading'] = 'Цель шага';
$string['target_selector'] = 'Селектор';
$string['target_selector_targetvalue'] = 'Селекторы CSS';
$string['target_selector_targetvalue_help'] = 'Селектор CSS может использоваться для указания цели практически на любой элемент на странице. Соответствующий селектор можно легко найти, используя инструменты разработчика для вашего веб-браузера.';
$string['target_unattached'] = 'Отображать в центре страницы';
$string['targettype'] = 'Тип цели';
$string['targettype_help'] = 'Каждый шаг связан с частью страницы - целью. Типы цели:

* Блок - для отображения шага рядом с указанным блоком
* Селектор CSS - для точного определения области цели с помощью CSS
* Отображение в центре страницы - для шага, который не обязательно должен быть связан с определенной частью страницы';
$string['title'] = 'Заголовок';
$string['title_help'] = 'Заголовок шага может может быть добавлен в виде обычного текста, при необходимости заключенного в многоязычные теги (для использования с многоязычным фильтром).

Также может быть указан идентификатор строки языкового пакета в формате «идентификатор,компонент» (без кавычек и пробела после запятой).';
$string['tour1_content_addingblocks'] = 'На самом деле, тщательно продумайте все блоки на своих страницах. Блоки не отображаются в приложении Moodle, поэтому желательно убедиться, что что с Вашим сайтом удобно работать и без каких-либо блоков.';
$string['tour1_content_blockregion'] = 'Область для блоков по-прежнему присутствует. Но рекомендуется полностью удалить блоки навигации и администрирования, так как в теме Boost их функции находятся в другом месте.';
$string['tour1_content_customisation'] = 'Чтобы настроить внешний вид своего сайта и его главной страницы, используйте меню настроек в углу этого заголовка. Попробуйте включить редактирование прямо сейчас.';
$string['tour1_content_end'] = 'Это конец тура пользователя. Он не будет отображаться снова, если вы не сбросите его, используя ссылку в нижнем колонтитуле. Как администратор вы также можете создавать свои собственные туры, подобные этому!';
$string['tour1_content_navigation'] = 'Теперь большая часть навигации осуществляется с помощью этой боковой выдвижной области. Ее содержимое обновляется в зависимости от того, в каком месте сайта Вы находитесь. Используйте кнопку вверху, чтобы отобразить или скрыть область навигации.';
$string['tour1_content_welcome'] = 'Добро пожаловать в тему Boost. После обновления предыдущей версии вы можете обнаружить, что некоторые вещи немного отличаются в этой теме.';
$string['tour1_title_addingblocks'] = 'Добавление блоков';
$string['tour1_title_blockregion'] = 'Область для блоков';
$string['tour1_title_customisation'] = 'Настройка';
$string['tour1_title_end'] = 'Конец тура';
$string['tour1_title_navigation'] = 'Навигация';
$string['tour1_title_welcome'] = 'Добро пожаловать!';
$string['tour2_content_addblock'] = 'При включенном режиме редактирования Вы можете добавить новые блоки с помощью боковой выдвижной области навигации. Тем не менее, хорошо подумайте перед тем как добавлять любые блоки на свои страницы. Блоки не отображаются в мобильном приложении Moodle, поэтому для максимального удобства пользователей желательно убедиться, что с Вашим курсом можно работать без каких-либо блоков.';
$string['tour2_content_addingblocks'] = 'Вы можете добавить блоки на эту странице используя эту кнопку. Но хорошенько подумайте перед добавлением любых блоков на страницы Вашего курса. Блоки не отображаются в мобильном приложении Moodle, поэтому для удобства пользователей желательно убедиться, что с Вашим курсом можно работать и без каких-либо блоков.';
$string['tour2_content_customisation'] = 'Чтобы изменить настройки курса, используйте меню настроек в углу этого заголовка. Вы также найдете аналогичное меню настроек на главной странице каждого элемента курса. Попробуйте прямо сейчас включить редактирование.';
$string['tour2_content_end'] = 'Это конец вашего пользовательского тура. Он не будет отображаться снова, если вы не сбросите его, используя ссылку в нижнем колонтитуле. При необходимости администратор сайта может создавать дальнейшие туры для этого сайта.';
$string['tour2_content_navigation'] = 'Навигация теперь осуществляется посредством этой боковой выдвижной области. Используйте кнопку вверху, чтобы отобразить или скрыть ее. В области навигации Вы увидите ссылки на секции Вашего курса.';
$string['tour2_content_opendrawer'] = 'Попробуйте сейчас открыть выдвижную область навигации.';
$string['tour2_content_participants'] = 'Посмотреть участников курса можно здесь. Здесь же Вы сможете добавить и удалить студентов.';
$string['tour2_content_welcome'] = 'Добро пожаловать в тему Boost. После обновления сайта с более ранней версии вы можете обнаружить, что на странице курса все выглядит немного иначе.';
$string['tour2_title_addblock'] = 'Добавить блок';
$string['tour2_title_addingblocks'] = 'Добавление блоков';
$string['tour2_title_customisation'] = 'Настройка';
$string['tour2_title_end'] = 'Конец тура';
$string['tour2_title_navigation'] = 'Навигация';
$string['tour2_title_opendrawer'] = 'Открыть выдвижную область навигации';
$string['tour2_title_participants'] = 'Участники курса';
$string['tour2_title_welcome'] = 'Добро пожаловать!';
$string['tour3_content_dashboard'] = 'Ваш новый Личный кабинет имеет множество функций, которые помогут легко получить доступ к наиболее важной для вас информации.';
$string['tour3_content_displayoptions'] = 'Курсы могут быть отсортированы по названию курса или по дате последнего доступа.

Вы также можете выбрать отображение курсов в виде списка со сводной информацией или по умолчанию в виде карточки.';
$string['tour3_content_overview'] = 'Блок «Обзор курсов» отображает все курсы, на которые вы зачислены.
Вы можете выбрать показ текущих курсов или бывших курсов, или которые начнутся, или курсов, которые вы пометили.';
$string['tour3_content_recentcourses'] = 'В блоке «Недавно посещенные курсы» отображаются курсы, которые вы посетили в последнее время, и вы можете сразу же вернуться к ним.';
$string['tour3_content_starring'] = 'Вы можете выбрать курс, чтобы пометить его, или скрыть курс, который больше не важен для вас.
Эти действия повлияют только на отображение вам.
Вы также можете выбрать отображение курсов в виде списка, с краткой информацией или представлением по умолчанию - «карточка».';
$string['tour3_content_timeline'] = 'Блок «Шкала времени» показывает ваши важные предстоящие события.
Вы можете выбрать показ событий следующей недели, месяца или предстоящие в будущем.
Вы также можете увидеть элементы, которые просрочены.';
$string['tour3_title_dashboard'] = 'Личный кабинет';
$string['tour3_title_displayoptions'] = 'Показать варианты';
$string['tour3_title_overview'] = 'Обзор курсов';
$string['tour3_title_recentcourses'] = 'Недавно посещенные курсы';
$string['tour3_title_starring'] = 'Помеченные и скрытые курсы';
$string['tour3_title_timeline'] = 'Блок «Шкала времени»';
$string['tour4_content_groupconvo'] = 'Если вы являетесь участником группы с разрешенным групповым обменом сообщениями, то увидите здесь беседы группы.

Групповые беседы курса позволяют вам общаться с другими членами вашей группы в уединенном и удобном месте.';
$string['tour4_content_icon'] = 'Вы можете получить доступ к своим сообщениям с любой страницы, используя этот значок.

Если у вас есть непрочитанные сообщения, здесь будет показано их количество.

Нажмите на значок, чтобы открыть сообщения и продолжить тур.';
$string['tour4_content_messaging'] = 'Новые возможности обмена сообщениями включают групповые сообщения внутри курса и лучший контроль над теми, кто может отправлять вам сообщения.';
$string['tour4_content_settings'] = 'Вы можете настроить обмен сообщениями, нажав значок Шестеренки. Новый параметр конфиденциальности позволяет вам ограничить круг лиц, которые могут отправлять вам сообщения.';
$string['tour4_content_starred'] = 'Вы можете помечать отдельные беседы, чтобы их было легче найти.';
$string['tour4_title_groupconvo'] = 'Групповые сообщения';
$string['tour4_title_icon'] = 'Обмен сообщениями';
$string['tour4_title_messaging'] = 'Новый интерфейс обмена сообщениями';
$string['tour4_title_settings'] = 'Настройки обмена сообщениями';
$string['tour4_title_starred'] = 'Помеченные';
$string['tour_activityinfo_activity_student_content'] = 'Даты действия и то, что нужно сделать для выполнения активного элемента, отображаются на странице этого элемента.';
$string['tour_activityinfo_activity_student_title'] = 'Новое: информация об активном элементе';
$string['tour_activityinfo_activity_teacher_content'] = 'Даты действия и условия выполнения теперь отображаются студентам на каждой странице активного элемента (и, при желании, на странице курса).

Для элементов, требующих, чтобы студенты вручную отметили задание как выполненное, на странице элемента отображается кнопка «Отметить как выполненный».';
$string['tour_activityinfo_activity_teacher_title'] = 'Новое: информация об активном элементе';
$string['tour_activityinfo_course_student_content'] = 'Даты действия и (или) то, что нужно сделать для выполнения активного элемента, отображаются на странице курса.';
$string['tour_activityinfo_course_student_title'] = 'Новое: информация об активном элементе';
$string['tour_activityinfo_course_teacher_content'] = 'Новые настройки курса «Показать условия выполнения» и «Показать даты действия» позволяют выбрать, будут ли студентам отображаться на странице курса условия выполнения активного элемента (если они заданы) и (или) даты его действия.';
$string['tour_activityinfo_course_teacher_title'] = 'Новое: информация об активном элементе';
$string['tour_final_step_content'] = 'Это конец вашего пользовательского тура. Он не будет отображаться снова, если только вы не сбросите его, пользуясь ссылкой в нижнем колонтитуле.';
$string['tour_final_step_title'] = 'Конец тура';
$string['tour_resetforall'] = 'Состояние тура было сброшено. Он снова будет отображаться всем пользователям.';
$string['tourconfig'] = 'Файл конфигурации тура для импорта';
$string['tourisenabled'] = 'Тур включен';
$string['tourlist_explanation'] = 'Вы можете создать столько туров, сколько хотите, и включить их для разных частей Moodle. Для каждой страницы можно создать только один тур.';
$string['tours'] = 'Туры';
$string['usertours'] = 'Туры для пользователей';
$string['usertours:managetours'] = 'Создавать, редактировать и удалять туры для пользователей';
$string['viewtour_edit'] = 'Вы можете <a href="{$a->editlink}">отредактировать настройки по умолчанию</a> и <a href="{$a->resetlink}">заставить тур снова отображаться</a> всем пользователям.';
$string['viewtour_info'] = 'Это тур «{$a->tourname}». Он относится к пути «{$a->path}».';
