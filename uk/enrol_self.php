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
 * Strings for component 'enrol_self', language 'uk', version '4.4'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Зарахування відключене або неактивне';
$string['canntenrolearly'] = 'Ви ще не можете зареєструватися; реєстрація починається від  {$a}.';
$string['canntenrollate'] = 'Ви вже не можете зареєструватися; реєстрацію закінчено від  {$a}.';
$string['cohortnonmemberinfo'] = 'Тільки члени гурту \'{$a}\' можуть зараховуватися.';
$string['cohortonly'] = 'Тільки члени гурту';
$string['cohortonly_help'] = 'Самостійна реєстрація може бути обмежена тільки членами гурту. Зверніть увагу, що зміна цього параметра не впливає на вже зарахованих студентів.';
$string['confirmbulkdeleteenrolment'] = 'Ви впевнені, що хочете видалити ці реєстрації користувачів?';
$string['customwelcomemessage'] = 'Текст запрошення на курс';
$string['customwelcomemessage_help'] = 'Привітальне повідомлення може бути доданим як простий текст, або автоформатом, включаючи HTML-теги та теги багатомовності.

Наступні заповнювачі можуть бути включені в повідомлення:

* Назва курсу {$ -> coursename}
* Посилання на сторінку профілю користувача {$ -> profileurl}
* Ел.пошта користувача {$a->email}
* Повне ім’я користувача {$a->fullname}';
$string['defaultrole'] = 'Призначення типової ролі';
$string['defaultrole_desc'] = 'Вкажіть роль, на яку повинні зараховуватися користувачі в процесі самореєстрації';
$string['deleteselectedusers'] = 'Видалити вибрані реєстрації користувачів';
$string['editselectedusers'] = 'Редагувати зарахування виділених користувачів';
$string['enrolenddate'] = 'Дата завершення';
$string['enrolenddate_help'] = 'Якщо цей параметр включений, користувачі можуть самі зараховувати себе до цієї дати.';
$string['enrolenddaterror'] = 'Дата завершення реєстрації не може бути ранішою за дату початку';
$string['enrolme'] = 'Зареєструвати мене';
$string['enrolperiod'] = 'Термін навчання';
$string['enrolperiod_desc'] = 'Типовий період перебування зареєстрованим на курсі. Якщо встановлено в нуль, то термін не лімітується.';
$string['enrolperiod_help'] = 'Період часу, впродовж якого реєстрація є дійсною з моменту самореєстрації студента на курс. Якщо вимкнуто (заборонено), цей період буде необмеженим.';
$string['enrolstartdate'] = 'Дата початку';
$string['enrolstartdate_help'] = 'Якщо цей параметр включений, користувачі можуть самостійно зараховуватися тільки з цієї дати.';
$string['expiredaction'] = 'Дія закінчення реєстрації';
$string['expiredaction_help'] = 'Виберіть дію до виконання при закінченні реєстрації користувача. Будь ласка, зверніть увагу, що деякі дані користувача і налаштування будуть очищені в курсу під час процесу відрахування з курсу.';
$string['expiryinactivemessageenrolledbody'] = 'Привіт, {$a->user}!

Ваша реєстрація на курс {$a->course} закінчується {$a->timeend}, оскільки ви не відвідували його протягом останніх {$a->inactivetime} днів.

Щоб ваша реєстрація залишалася активною, увійдіть і отримайте доступ до <a href="{$a->url}">{$a->курсу}</a> до {$a->timeend}.';
$string['expiryinactivemessageenrolledsubject'] = 'Термін вашої реєстрації закінчується: {$a->course}';
$string['expirymessageenrolledbody'] = 'Шановний(а) {$a->user},

Цим повідомленням ставимо Вас до відома, що час Вашого перебування на  навчальному курсі \'{$a->course}\' добігає кінця через {$a->timeend}.

За допомогою можете звернутися до {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Повідомлення про закінчення самореєстрації';
$string['expirymessageenrollerbody'] = 'Через {$a->threshold} закінчується термін реєстрації на курсі  \'{$a->course}\'  для таких користувачів:

 {$a->users}

Для зміни термінів їхнього зарахування перейдіть до {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Повідомлення про закінчення самореєстрації';
$string['expirynotifyall'] = 'Викладача та студента';
$string['expirynotifyenroller'] = 'Тільки викладача';
$string['groupkey'] = 'Використовувати кодові слова для груп';
$string['groupkey_desc'] = 'Типово використовувати кодові слова для груп';
$string['groupkey_help'] = 'На додаток до обмеження доступу реєстрації на курсі тільки тих, хто знає паролі, використання ключів груп автоматично реєструє студентів у приготовлених для них групах.

Примітка: Для використання ключів груп при реєстрації, потрібно вказати відповідний параметр в налаштуваннях курсу та ключ в налаштуваннях групи.';
$string['keyholder'] = 'Ви повинні були отримати цей ключ реєстрації від:';
$string['longtimenosee'] = 'Відрахувати з курсу, якщо немає активності';
$string['longtimenosee_help'] = 'Якщо користувачі не мають доступу до курсу довгий період часу, вони будуть автоматично відраховані з нього. Цей параметр вказує часове обмеження';
$string['maxenrolled'] = 'Макс. кількість зареєстрованих користувачів';
$string['maxenrolled_help'] = 'Вкажіть максимальне число користувачів, яким дозволено самореєструватися на курсі. 0 не обмежує кількість реєстрації.';
$string['maxenrolledreached'] = 'Максимальна кількість користувачів, яким дозволено самореєструватися вже досягнута.';
$string['messageprovider:expiry_notification'] = 'Повідомляти про закінчення терміну самореєстрації';
$string['newenrols'] = 'Дозволити нову самостійну реєстрацію';
$string['newenrols_desc'] = 'Типово дозволити користувачам самостійну реєстрацію на нових курсах.';
$string['newenrols_help'] = 'Це налаштування визначає, як користувач буде зареєстрованим на цьому курсі.';
$string['nopassword'] = 'Кодове слово не потрібне';
$string['password'] = 'Кодове слово';
$string['password_help'] = 'Кодове слово дозволяє доступ до курсу тільки тим, хто його знає.

Якщо поле залишити порожнім, то будь-який користувач зможе записатися на курс.

Якщо кодове слово визначено, то в момент спроби реєстрації на курсі, система вимагатиме його. Зверніть увагу, що користувачам потрібно буде вводити це слово тільки один раз в момент запису на курс.';
$string['passwordinvalid'] = 'Неправильне кодове слово, повторіть, будь ласка, знову';
$string['passwordinvalidhint'] = 'Введене кодове слово неправильне, спробуйте ще раз <br />(Підказка - воно починається з \'{$a}\')';
$string['passwordmatchesgroupkey'] = 'Цей ключ реєстрації вже використовується як ключ реєстрації групи.';
$string['pluginname'] = 'Самореєстрація';
$string['pluginname_desc'] = 'Модуль самореєстрації дозволяє користувачам вибирати, учасниками яких курсів вони хочуть бути. Курси можуть бути захищеними ключем. Зазвичай зарахування здійснюється через модуль ручної реєстрації, який також повинен бути включеним у тому ж курсі.';
$string['privacy:metadata'] = 'Плагін для самостійної реєстрації не зберігає жодних персональних даних.';
$string['requirepassword'] = 'Вимагати кодове слово';
$string['requirepassword_desc'] = 'Буде вимагати кодове слово в нових курсах і запобігати видаленню кодового слова з існуючих курсів.';
$string['role'] = 'За замовчуванням призначати роль';
$string['self:config'] = 'Налаштовувати варіант самореєстрації';
$string['self:enrolself'] = 'Самостійно записатися на курс';
$string['self:holdkey'] = 'Показувати як власника ключа для самореєстрації';
$string['self:manage'] = 'Керування зареєстрованими користувачами';
$string['self:unenrol'] = 'Відраховувати користувачів з курсу';
$string['self:unenrolself'] = 'Відраховувати себе з курсу';
$string['sendcoursewelcomemessage'] = 'Відсилати повідомлення про запрошення на курс';
$string['sendcoursewelcomemessage_help'] = 'Коли користувач самостійно реєструється на курсі, йому може бути надіслано вітальне повідомлення електронною поштою. Якщо надіслано від контактної особи курсу (за замовчуванням викладач), і цю роль має кілька користувачів, електронний лист надсилається від першого користувача, якому буде призначена роль.';
$string['sendexpirynotificationstask'] = 'Завдання для надсилання сповіщень про закінчення терміну дії самостійної реєстрації';
$string['showhint'] = 'Показати підказку';
$string['showhint_desc'] = 'Показує першу літеру ключа доступу для гостя';
$string['status'] = 'Залишити активними поточні самореєстрації';
$string['status_desc'] = 'Типово дозволяє користувачам проходити самореєстрацію на курсах.';
$string['status_help'] = 'Якщо вибрано значення «Ні», усі наявні учасники, які зареєструвалися на курс, більше не матимуть доступу.';
$string['syncenrolmentstask'] = 'Синхронізувати завдання самостійної реєстрації';
$string['unenrol'] = 'Відрахувати користувача';
$string['unenrolselfconfirm'] = 'Ви дійсно бажаєте відрахуватися з курсу "{$a}"?';
$string['unenroluser'] = 'Ви дійсно бажаєте відрахувати "{$a->user}" з курсу "{$a->course}"?';
$string['unenrolusers'] = 'Скасувати реєстрацію користувачів';
$string['usepasswordpolicy'] = 'Використати політику паролів';
$string['usepasswordpolicy_desc'] = 'Використовувати стандартную політику паролів для кодових слів.';
$string['welcometocourse'] = 'Ласкаво просимо до {$a}';
$string['welcometocoursetext'] = 'Ласкаво просимо до {$a->coursename}!

Якщо ви ще не зробили цього, ви повинні відредагувати Вашу профільну сторінку, так щоб ми могли дізнатися більше про вас:

{$a->profileurl}';
