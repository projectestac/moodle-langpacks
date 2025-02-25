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
 * Strings for component 'block_rss_client', language 'ru', version '4.4'.
 *
 * @package     block_rss_client
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfeed'] = 'Добавить URL-адрес RSS-канала';
$string['addheadlineblock'] = 'Добавить заголовок блока RSS-ленты';
$string['addnew'] = 'Добавить новую';
$string['addnewfeed'] = 'Добавить новую ленту';
$string['cannotmakemodification'] = 'Вы не можете сейчас вносить изменения в эту новостную ленту.';
$string['choosefeedlabel'] = 'Выберите ленты, которые будут доступны в этом блоке:';
$string['clientchannellink'] = 'Сайт-источник...';
$string['clientnumentries'] = 'Количество записей по умолчанию, отображаемых для каждой ленты.';
$string['clientshowchannellinklabel'] = 'Должна ли быть показана ссылка на оригинальный сайт (ссылка канала)? (Обратите внимание, что если канал не содержит этой ссылки, отображаться ничего не будет):';
$string['clientshowimagelabel'] = 'Показывать иконку канала, если она доступна:';
$string['configblock'] = 'Настроить этот блок';
$string['couldnotfindfeed'] = 'Не удалось найти канал с ID.';
$string['couldnotfindloadrssfeed'] = 'Не удалось найти или загрузить RSS-ленту.';
$string['customtitlelabel'] = 'Свое название (оставьте пустым для использования заголовка, указанного в канале):';
$string['deletefeedconfirm'] = 'Вы уверены, что хотите удалить эту ленту?';
$string['disabledrssfeeds'] = 'RSS-ленты отключены';
$string['displaydescriptionlabel'] = 'Отображать описание каждой ссылки?';
$string['editafeed'] = 'Редактировать ленту';
$string['editfeeds'] = 'Редактировать, подписываться или отменять подписку на RSS-каналы';
$string['editnewsfeeds'] = 'Редактировать новостные ленты';
$string['editrssblock'] = 'Редактировать заголовок блока RSS-ленты';
$string['enableautodiscovery'] = 'Включить автоматическое обнаружение лент?';
$string['enableautodiscovery_help'] = 'При включенном параметре ленты на веб-страницах будут найдены автоматически. Например, если вводится http://docs.moodle.org, то будет найдено http://docs.moodle.org/en/index.php?title=Special:RecentChanges&feed=rss';
$string['failedfeed'] = 'Загрузка не удалась - повторите попытку позже {$a}';
$string['failedfeeds'] = 'Один или несколько RSS-каналов не удалось загрузить';
$string['feed'] = 'Лента';
$string['feedadded'] = 'RSS-канал добавлен';
$string['feeddeleted'] = 'RSS-канал удален';
$string['feeds'] = 'RSS-каналы';
$string['feedsaddedit'] = 'Добавить/редактировать ленты';
$string['feedsconfigurenewinstance'] = 'Нажмите здесь для настройки блока, отображающего RSS ленты.';
$string['feedsconfigurenewinstance2'] = 'Щелкните выше значок редактирования для настройки блока, отображающего RSS ленты.';
$string['feedupdated'] = 'RSS-канал обновлен';
$string['feedurl'] = 'URL-адрес ленты';
$string['findmorefeeds'] = 'Искать еще RSS-ленты';
$string['managefeeds'] = 'Управление RSS-каналами';
$string['nofeeds'] = 'Для вашего сайта не определено ни одной RSS ленты.';
$string['numentries'] = 'Записей в ленте';
$string['pickfeed'] = 'Выберите RSS-канал';
$string['pluginname'] = 'Внешние RSS-каналы';
$string['privacy:metadata:block_rss_client:description'] = 'Описание RSS-ленты';
$string['privacy:metadata:block_rss_client:preferredtitle'] = 'Предпочитаемое (пользовательское) название RSS-ленты.';
$string['privacy:metadata:block_rss_client:shared'] = 'Доступна ли RSS-лента всем курсам.';
$string['privacy:metadata:block_rss_client:skiptime'] = 'Заданное время в секундах, в течение которого cron будет ждать между попытками получить данные с RSS-лент в случае неудачной загрузки.';
$string['privacy:metadata:block_rss_client:skipuntil'] = 'Максимальное заданное время, в течение которого cron будет пытаться открыть RSS-ленты в случае неудачной загрузки.';
$string['privacy:metadata:block_rss_client:tableexplanation'] = 'Здесь хранится информация блока «Внешние RSS-ленты».';
$string['privacy:metadata:block_rss_client:title'] = 'Заголовок RSS-ленты.';
$string['privacy:metadata:block_rss_client:url'] = 'URL RSS-ленты.';
$string['privacy:metadata:block_rss_client:userid'] = 'ID пользователя, добавившего RSS-ленту.';
$string['refreshfeedstask'] = 'Задача обновления RSS-каналов';
$string['remotenewsfeed'] = 'RSS-канал';
$string['rss_client:addinstance'] = 'Добавлять новый блок «Внешние RSS-каналы»';
$string['rss_client:createprivatefeeds'] = 'Создавать личные RSS-ленты';
$string['rss_client:createsharedfeeds'] = 'Создавать общие RSS-ленты';
$string['rss_client:manageanyfeeds'] = 'Управлять любыми RSS-лентами';
$string['rss_client:manageownfeeds'] = 'Управлять своими RSS-лентами';
$string['rss_client:myaddinstance'] = 'Добавлять новый блок «Внешние RSS-каналы» на страницу «Личный кабинет»';
$string['seeallfeeds'] = 'Смотреть все ленты';
$string['sharedfeed'] = 'Общая лента';
$string['shownumentrieslabel'] = 'Максимальное количество записей, отображаемых для блока.';
$string['submitters'] = 'Кому разрешено добавлять новые RSS ленты? Добавление лент возможно на любой странице вашего сайта.';
$string['submitters2'] = 'Отправители';
$string['timeout'] = 'Время хранения в кэше RSS-ленты (в минутах). Обратите внимание, что параметр определяет минимальное время; лента будет обновляться в кэше при следующем выполнении Cron после истечения срока. Рекомендуемые значения: 30 минут или больше.';
$string['timeout2'] = 'Перерыв';
$string['timeoutdesc'] = 'Время в минутах, на которое кэшируется RSS-лента.';
$string['updatefeed'] = 'Обновить URL-адрес RSS-канала';
$string['viewfeed'] = 'Посмотреть ленту';
