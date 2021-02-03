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
 * Strings for component 'tool_generator', language 'sv', version '3.8'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Stor fil {$a}';
$string['courseexplanation'] = 'Det här verktyget skapar standardtestkurser som omfattar många
avsnitt, aktiviteter och filer.

Detta är avsett att erbjuda ett standardiserat sätt att kontrollera tillförlitligheten
och prestandan hos olika systemkomponenter (till exempel säkerhetskopiering och återställning).

Detta test är viktigt eftersom det tidigare har förekommit många fall där systemet inte fungerat vid praktisk användning (t.ex. för en kurs med 1, 000 aktiviteter).

Kurser som skapas med hjälp av den här funktionen kan uppta en stor mängd databas- och
filsystems-utrymme (tiotals gigabyte). Du kommer att behöva ta bort kurserna
(och vänta på olika rensningskörningar) för att frigöra det här utrymmet igen.

**Använd inte den här funktionen i ett produktionssystem**. Använd endast på en utvecklingsserver.
(För att undvika oavsiktlig användning inaktiveras denna funktion om du inte också har valt
felsökningsnivån <code>UTVECKLARE</code> under <em>Hantera webbplats -> Utveckling -> Felsökning -> Felsökningsmeddelanden</em>).';
$string['coursewithoutusers'] = 'Det finns inga användare i den valda kursen';
$string['createcourse'] = 'Skapa kurs';
$string['createtestplan'] = 'Skapa testplan';
$string['creating'] = 'Skapar kurs';
$string['done'] = 'klar ({$a} sek.)';
$string['downloadtestplan'] = 'Ladda ned testplan';
$string['downloadusersfile'] = 'Ladda ned användarfil';
$string['error_nocourses'] = 'Det finns ingen kurser att använda för att skapa testplan';
$string['error_noforumdiscussions'] = 'Det finns inga forumdiskussioner i de valda kurserna';
$string['error_noforuminstances'] = 'Det finns inga forum i de valda kurserna';
$string['error_noforumreplies'] = 'Det finns inga forumsvar i de valda kurserna';
$string['error_nonexistingcourse'] = 'Kursen finns inte';
$string['error_nopageinstances'] = 'Det finns inga sidor i kursen';
$string['error_notdebugging'] = 'Inte tillgängligt på denna server eftersom <em>Felsökningsmeddelanden</em> inte är inställt på <code>UTVECKLARE</code>';
$string['fullname'] = 'Testkurs: {$a->size}';
$string['maketestcourse'] = 'Skapa en testkurs';
$string['progress_checkaccounts'] = 'Kontrollerar användarkonton ({$a})';
$string['progress_coursecompleted'] = 'Kurs slutförd ({$a})';
$string['progress_createaccounts'] = 'Skapar användarkonton ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Skapar uppgifter ({$a})';
$string['progress_createbigfiles'] = 'Skapar stora filer ({$a})';
$string['progress_createcourse'] = 'Skapar kurs ({$a})';
$string['progress_createforum'] = 'Skapar forum ({$a} inlägg)';
$string['progress_createpages'] = 'Skapar sidor ({$a})';
$string['progress_createsmallfiles'] = 'Skapar små filer ({$a})';
$string['progress_enrol'] = 'Registrerar deltagare på kurs ({$a})';
$string['progress_sitecompleted'] = 'Webbplats klar ({$a}s)';
$string['size'] = 'Kursstorlek';
$string['smallfiles'] = 'Små filer';
$string['targetcourse'] = 'Testa målkurs';
$string['updateuserspassword'] = 'Uppdatera användarlösenord';
