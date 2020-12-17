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
 * Strings for component 'lti', language 'sv', version '3.8'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = '';
$string['action'] = 'Åtgärd';
$string['activate'] = 'Aktivera';
$string['active'] = 'Aktiv';
$string['activity'] = 'Aktivitet';
$string['addserver'] = 'Ny betrodd server';
$string['allow'] = 'Tillåt';
$string['always'] = 'Alltid';
$string['autoaddtype'] = 'Lägg till verktyg';
$string['basiclti'] = 'LTI';
$string['basiclti_in_new_window_open'] = 'Öppna i nytt fönster';
$string['basicltiactivities'] = 'LTI-aktiviteter';
$string['basicltiintro'] = 'Aktivitetsbeskrivning';
$string['basicltiname'] = 'Aktivitetsnamn';
$string['cancel'] = 'Avbryt';
$string['cancelled'] = 'Avbruten';
$string['cannot_delete'] = 'Du kan inte ta bort denna verktygskonfiguration.';
$string['capabilities'] = 'Funktionsbehörigheter';
$string['clientidadmin'] = 'Klient-ID';
$string['comment'] = 'Kommentar';
$string['configured'] = 'Konfigurerad';
$string['course_tool_types'] = 'Kursverktyg';
$string['courseinformation'] = 'Kursinformation';
$string['courselink'] = 'Gå till kurs';
$string['coursemisconf'] = 'Kursen är felkonfigurerad';
$string['createdon'] = 'Skapad';
$string['custom'] = 'Anpassade parametrar';
$string['custom_help'] = 'Anpassade parametrar är inställningar som används av den som levererar verktyg. Till exempel, en anpassad parameter kan användas till att visa en specifik resurs från leverantören.';
$string['custominstr'] = 'Anpassade parametrar';
$string['debuglaunch'] = 'Debug-alternativ';
$string['debuglaunchoff'] = 'Normal start';
$string['debuglaunchon'] = 'Start i debugläge';
$string['default'] = 'Förvalt';
$string['delegate'] = 'Delegera till lärare';
$string['delete'] = 'Ta bort';
$string['delete_confirmation'] = 'Är du säker på att du vill ta bort denna konfiguration för external tool?';
$string['deletetype'] = 'Ta bort konfiguration för external tool';
$string['display_description_help'] = '';
$string['donot'] = 'Skicka inte';
$string['donotaccept'] = 'Acceptera inte';
$string['donotallow'] = 'Tillåt inte';
$string['edittype'] = 'Redigera förinställt verktyg';
$string['embed'] = 'Bädda in';
$string['embed_no_blocks'] = 'Bädda in utan block';
$string['enableemailnotification'] = 'Skicka notiser med e-post';
$string['enableemailnotification_help'] = 'Om aktiverat kommer elever motta notiser via e-post när deras verktygsinlämningar har betygsatts.';
$string['errormisconfig'] = 'Felkonfigurerat verktyg. Be din Moodleadministratör att rätta till konfigurationen av verktyget.';
$string['failedtoconnect'] = 'Moodle kunde inte kommunicera med "{$a}" systemet';
$string['filter_basiclti_configlink'] = 'Konfigurera dina önskade webbplatser och deras lösenord';
$string['filter_basiclti_password'] = 'Lösenord krävs';
$string['fixexistingconf'] = 'Använd en existerande konfiguration för den felkonfigurerade instansen';
$string['fixnew'] = 'Ny konfiguration';
$string['fixnewconf'] = 'Definiera en ny konfiguration för den felkonfigurerade instansen';
$string['fixold'] = 'Använd existerande';
$string['force_ssl'] = 'Tvinga SSL';
$string['force_ssl_help'] = 'Om valt tvingas alla publicerare av detta verktyg att använda SSL.

Som tillägg, alla webservice förfrågningar från verktygsleverantören kommer använda SSL.

Om detta alternativ används kontrollera att denna Moodleplats och verktygsleverantören stödjer SSL.';
$string['forced_help'] = 'Denna inställning har tvingats i en kursnivå eller webbplatsnivå konfiguration för verktyg. Du kan inte ändra den från detta gränssnitt.';
$string['global_tool_types'] = 'Globala verktygstyper';
$string['modulenameplural'] = 'Externa verktyg';
$string['pluginname'] = 'Externa verktyg';
$string['return_to_course'] = 'Klicka <a href="{$a->link}" target="_top">here</a> för att återgå till kursen.';
$string['saveallfeedback'] = 'Spara all återkoppling';
$string['submissions'] = 'Inskickningar';
$string['successfullycreatedtooltype'] = 'Skapade nytt verktyg!';
$string['toolproxy_help'] = 'Externa verktygsregistreringar gör att Moodle-webbplatsadministratörer kan konfigurera externa verktyg från en verktygsproxy som erhållits från en verktygsleverantör som stöder LTI 2.0. En registrerings-URL som tillhandahålls av verktygsleverantören är allt som krävs för att initiera processen. De funktioner och tjänster som erbjuds verktygsleverantören väljs vid konfigurering av en ny registrering.

Verktygsregistreringar som anges på denna sida är uppdelade i fyra kategorier:

* **Konfigurerade** - Dessa verktygsregistreringar har ställts in men registreringsprocessen har ännu inte startats.
* **Väntande** - Registreringsprocessen för dessa verktygsregistreringar har startats men inte slutförts. Öppna och spara inställningarna för att flytta den tillbaka till kategorin \'Konfigurerad\'.
* **Accepterad** - Dessa verktygsregistreringar har godkänts; de resurser som anges i verktygsproxyn kommer att visas på sidan för förkonfigurerade verktyg med en initial status \'Väntande\'.
* **Avvisad** - Dessa verktygsregistreringar är sådana som avvisades under registreringsprocessen. Öppna och spara inställningarna för att flytta den tillbaka till kategorin \'Konfigurerad\' så att registreringsprocessen kan startas på nytt.';
