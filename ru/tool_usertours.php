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
 * Strings for component 'tool_usertours', language 'ru', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
$string['cachedef_tourdata'] = 'Список разрешенных туров пользователей, отображаемый на каждой странице';
$string['confirmstepremovalquestion'] = 'Вы действительно хотите удалить этот шаг?';
$string['confirmstepremovaltitle'] = 'Подтвердите удаление шага';
$string['confirmtourremovalquestion'] = 'Вы действительно хотите удалить этот тур?';
$string['confirmtourremovaltitle'] = 'Подтвердите удаление тура';
$string['content'] = 'Содержимое';
$string['content_heading'] = 'Содержимое';
$string['content_help'] = 'Содержимое, описывающее шаг, может быть добавлено в виде обычного текста, при необходимости заключенного в многоязычные теги (для использования с многоязычным фильтром).

В качестве альтернативы, идентификатор строки языка может быть введен в идентификатор формата как компонент (без скобок или пробела после запятой).';
$string['cssselector'] = 'Селектор CSS';
$string['defaultvalue'] = 'Значение по умолчанию ({$a})';
$string['delay'] = 'Задержка перед отображением шага';
$string['delay_help'] = 'При желании можно добавить задержку (в миллисекундах) перед отображением шага.';
$string['description'] = 'Описание';
$string['done'] = 'Готово';
$string['editstep'] = 'Редактирование «{$a}»';
$string['enabled'] = 'Включено';
$string['endtour'] = 'Закончить тур';
$string['event_step_shown'] = 'Шаг тура отображен';
$string['event_tour_ended'] = 'Тур закончен';
$string['event_tour_reset'] = 'Тур сброшен';
$string['event_tour_started'] = 'Тур начат';
$string['exporttour'] = 'Экспорт тура';
$string['filter_header'] = 'Фильтры тура';
$string['filter_help'] = 'Выберите условия, при которых будет отображаться тур. Тур будет показан пользователю при соответствии всех условий.';
$string['filter_role'] = 'Роль';
$string['filter_role_help'] = 'Тур может быть показан только пользователям с выбранными ролями в контексте, где отображается тур. Например, разрешение посещения тура «Личный кабинет» для пользователей с ролью студента не будет работать, если у пользователей есть роль студента в курсе (как это обычно бывает). Тур «Личный кабинет» может быть доступен только пользователями с глобальной ролью на уровне системы.';
$string['filter_theme'] = 'Тема';
$string['filter_theme_help'] = 'Показывать тур, если пользователь использует одну из выбранных тем.';
$string['importtour'] = 'Импорт тура';
$string['left'] = 'Слева';
$string['modifyshippedtourwarning'] = 'Это тур пользователя, который поставляется с Moodle. Любые сделанные вами изменения могут быть переопределены во время следующего обновления сайта.';
$string['movestepdown'] = 'Переместить шаг вниз';
$string['movestepup'] = 'Переместить шаг вверх';
$string['movetourdown'] = 'Переместить тур вниз';
$string['movetourup'] = 'Переместить тур вверх';
$string['name'] = 'Название';
$string['newstep'] = 'Новый шаг';
$string['newtour'] = 'Создать новый тур';
$string['next'] = 'Далее';
$string['options_heading'] = 'Параметры';
$string['orphan'] = 'Отображать, если цель не найдена';
$string['orphan_help'] = 'Выводить этот шаг, если цель отсутствует на странице.';
$string['pathmatch'] = 'Применять к URL, соответствующим шаблону';
$string['pathmatch_help'] = 'Туры будут отображаться на любой странице, URL которой соответствует этому значению.

Вы можете использовать символ % в качестве подстановочного знака для обозначения чего-либо.
Некоторые примерные значения включают:

* /my/% - для соответствия Личному кабинету
* /course/view.php?id=2 - для соответствия определенному курсу
* /mod/forum/view.php% - для соответствия списку дискуссий форума
* /user/profile.php% - для соответствия странице профиля пользователя

При желании отобразить тур на домашней странице сайта вы можете использовать значение: «Главная страница».';
$string['pausetour'] = 'Пауза';
$string['placement'] = 'Расположение';
$string['placement_help'] = 'Шаг может быть расположен сверху, снизу, слева или справа от цели. Рекомендуется располагать сверху или снизу, такие положения лучше настраиваются для мобильного дисплея.

Если этот шаг не подходит для указанного места на конкретной странице, он будет автоматически помещен в другое место.';
$string['pluginname'] = 'Туры пользователей';
$string['reflex'] = 'Продолжать движение по щелчку';
$string['reflex_help'] = 'Перейти к следующему шагу при нажатии на цель.';
$string['resettouronpage'] = 'Сбросить тур пользователей для этой страницы';
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
$string['targettype'] = 'Тип цели';
$string['targettype_help'] = 'Каждый шаг связан с частью страницы - целью. Типы цели:

* Блок - для отображения шага рядом с указанным блоком
* Селектор CSS - для точного определения области цели с помощью CSS
* Отображение в центре страницы - для шага, который не обязательно должен быть связан с определенной частью страницы';
$string['target_unattached'] = 'Отображать в центре страницы';
$string['title'] = 'Заголовок';
$string['title_help'] = 'Заголовок шага может может быть добавлен в виде обычного текста, при необходимости заключенного в многоязычные теги (для использования с многоязычным фильтром).

В качестве альтернативы, идентификатор строки языка может быть введен в идентификатор формата как компонент (без скобок или пробела после запятой).';
$string['tour1_content_addingblocks'] = 'Хорошенько подумайте о включении любых блоков на своих страницах. Блоки не отображаются в приложении Moodle Mobile, поэтому, как правило, желательно убедиться, что ваш сайт работает без каких-либо блоков.';
$string['tour1_content_blockregion'] = 'Здесь есть область блоков. Рекомендуется полностью удалить блоки навигации и администрирования, так как все функции находятся в другом месте темы Boost.';
$string['tour1_content_customisation'] = 'Чтобы настроить внешний вид своего сайта и его главной страницы, используйте меню настроек у края этого заголовка. Попробуйте включить редактирование прямо сейчас.';
$string['tour1_content_navigation'] = 'Теперь большая часть навигации осуществляется с помощью этой боковой выдвижной области. Ее содержимое обновляется в зависимости от того, в каком месте сайта Вы находитесь. Используйте кнопку вверху, чтобы отобразить или скрыть область навигации.';
$string['tour1_title_addingblocks'] = 'Добавление блоков';
$string['tour1_title_blockregion'] = 'Область блоков';
$string['tour1_title_customisation'] = 'Настройка';
$string['tour1_title_end'] = 'Конец тура';
$string['tour1_title_navigation'] = 'Навигация';
$string['tour1_title_welcome'] = 'Добро пожаловать!';
$string['tour2_content_addblock'] = 'При включенном режиме редактирования Вы можете добавить новые блоки с помощью боковой выдвижной области навигации. Тем не менее, хорошо подумайте перед тем как добавлять любые блоки на свои страницы. Блоки не отображаются в мобильном приложении Moodle, поэтому для максимального удобства пользователей желательно убедиться, что с Вашим курсом можно работать без каких-либо блоков.';
$string['tour2_content_addingblocks'] = 'Вы можете добавить блоки к этой странице, используя эту кнопку. Но хорошенько подумайте о включении любых блоков на своих страницах. Блоки не отображаются в приложении Moodle Mobile, поэтому для удобства пользователей желательно убедиться, что ваш сайт работает без каких-либо блоков.';
$string['tour2_content_customisation'] = 'Чтобы изменить настройки курса, используйте меню настроек у края этого заголовка. Вы также найдете аналогичное меню настроек на главной странице каждого активного элемента. Попробуйте включить редактирование прямо сейчас.';
$string['tour2_content_navigation'] = 'Навигация теперь осуществляется посредством этой боковой выдвижной области. Используйте кнопку вверху, чтобы отобразить или скрыть ее. В области навигации Вы увидите ссылки на секции Вашего курса.';
$string['tour2_content_opendrawer'] = 'Попробуйте сейчас открыть выдвижную область навигации.';
$string['tour2_content_participants'] = 'Посмотреть участников можно здесь. Здесь вы также добавляете или удаляете студентов.';
$string['tour2_title_addblock'] = 'Добавить блок';
$string['tour2_title_addingblocks'] = 'Добавление блоков';
$string['tour2_title_customisation'] = 'Настройка';
$string['tour2_title_end'] = 'Конец тура';
$string['tour2_title_navigation'] = 'Навигация';
$string['tour2_title_opendrawer'] = 'Открыть выдвижную область навигации';
$string['tour2_title_participants'] = 'Участники курса';
$string['tour2_title_welcome'] = 'Добро пожаловать!';
$string['tourconfig'] = 'Файл конфигурации тура для импорта';
$string['tourisenabled'] = 'Тур включен';
$string['tourlist_explanation'] = 'Вы можете создать столько туров, сколько хотите, и включить их для разных частей Moodle. Для каждой страницы можно создать только один тур.';
$string['tour_resetforall'] = 'Состояние тура было сброшено. Он снова будет отображаться всем пользователям.';
$string['tours'] = 'Туры';
$string['usertours'] = 'Туры пользователей';
$string['usertours:managetours'] = 'Создавать, редактировать и удалять туры пользователей';
$string['viewtour_edit'] = 'Вы можете <a href="{$a->editlink}">отредактировать настройки по умолчанию</a> и <a href="{$a->resetlink}">заставить тур отображаться снова</a> всем пользователям.';
$string['viewtour_info'] = 'Это тур «{$a->tourname}». Он относится к пути «{$a->path}».';
