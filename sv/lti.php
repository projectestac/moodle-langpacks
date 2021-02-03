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

$string['accept'] = 'Acceptera';
$string['accept_grades'] = 'Acceptera betyg från verktyget';
$string['accept_grades_admin'] = 'Acceptera betyg från verktyget';
$string['accept_grades_admin_help'] = 'Ange om verktygsleverantören kan lägga till, uppdatera, läsa och ta bort resultat som är associerade med instanser av det här verktyget.

Vissa verktygsleverantörer stöder återrapportering av betyg till Moodle baserat på åtgärder som vidtas inom verktyget. Detta kan skapa en mer integrerad upplevelse.';
$string['accept_grades_help'] = 'Ange om verktygsleverantören kan lägga till, uppdatera, läsa och ta bort resultat som bara associeras med den här externa verktygsinstansen.

Vissa verktygsleverantörer stöder återrapportering av betyg tillbaka till Moodle baserat på åtgärder som vidtas inom verktyget. Detta kan skapa en mer integrerad upplevelse.

Observera att den här inställningen kan åsidosättas i verktygskonfigurationen.';
$string['accepted'] = 'Accepterad';
$string['action'] = 'Åtgärd';
$string['activate'] = 'Aktivera';
$string['activatetoadddescription'] = 'Du måste aktivera detta verktyg innan lägga till en beskrivning.';
$string['active'] = 'Aktiv';
$string['activity'] = 'Aktivitet';
$string['addnewapp'] = 'Aktivera extern applikation';
$string['addserver'] = 'Ny betrodd server';
$string['addtype'] = 'Lägg till förkonfigurerat verktyg';
$string['allow'] = 'Tillåt';
$string['allowsetting'] = 'Tillåt verktyg att lagra 8K med inställningar i Moodle';
$string['always'] = 'Alltid';
$string['autoaddtype'] = 'Lägg till verktyg';
$string['automatic'] = 'Automatiskt, baserat på verktygswebbadress';
$string['baseurl'] = 'Bas-URL/namn för verktygsregistrering';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'LTI OAuth bassträng';
$string['basiclti_endpoint'] = 'LTI startadress';
$string['basiclti_in_new_window'] = 'Aktiviteten har öppnats i ett nytt fönster';
$string['basiclti_in_new_window_open'] = 'Öppna i nytt fönster';
$string['basiclti_parameters'] = 'LTI startparametrar';
$string['basicltiactivities'] = 'LTI-aktiviteter';
$string['basicltifieldset'] = 'Anpassad exempelfältuppsättning';
$string['basicltiintro'] = 'Aktivitetsbeskrivning';
$string['basicltiname'] = 'Aktivitetsnamn';
$string['basicltisettings'] = 'Grundläggande Learning Tool Interoperability (LTI)-inställningar';
$string['cancel'] = 'Avbryt';
$string['cancelled'] = 'Avbruten';
$string['cannot_delete'] = 'Du kan inte ta bort denna verktygskonfiguration.';
$string['cannot_edit'] = 'Du kan inte redigera denna verktygskonfiguration';
$string['capabilities'] = 'Funktionsbehörigheter';
$string['capabilities_help'] = 'Välj de funktionsbehörigheter som du vill erbjuda verktygsleverantören. Mer än en funktionsbehörighet kan väljas.';
$string['capabilitiesrequired'] = 'Detta verktyg kräver tillgång till följande data för att kunna aktiveras:';
$string['cleanaccesstokens'] = 'Borttagning av förfallna åtkomsttoken med externt verktyg';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Klicka för att fortsätta</a>';
$string['clientidadmin'] = 'Klient-ID';
$string['clientidadmin_help'] = 'Klient-ID är ett unikt värde som används för att identifiera ett verktyg. Det skapas automatiskt för varje verktyg som använder JWT-säkerhetsprofilen (introducerades i LTI 1.3) och bör vara en del av uppgifterna som skickas till verktygsleverantören. Detta för att de ska kunna konfigurera anslutningen på deras sida.';
$string['comment'] = 'Kommentar';
$string['configpassword'] = 'Standardlösenord för externt verktyg';
$string['configpreferheight'] = 'Förinställd standardhöjd';
$string['configpreferwidget'] = 'Ange widget som standard';
$string['configpreferwidth'] = 'Förinställd standardbredd';
$string['configresourceurl'] = 'Standard-URL för resurs';
$string['configtoolurl'] = 'Standard-URL för externt verktyg';
$string['configtypes'] = 'Aktivera LTI-applikationer';
$string['configured'] = 'Konfigurerad';
$string['confirmtoolactivation'] = 'Är du säker på att du vill aktivera detta verktyg?';
$string['contentitem'] = 'Innehållsobjekt-meddelande';
$string['contentitem_help'] = 'Om markerad kommer alternativet \'Välj innehåll\' vara tillgängligt då man lägger till ett externt verktyg.';
$string['course_tool_types'] = 'Kursverktyg';
$string['courseactivitiesorresources'] = 'Kursaktiviteter eller resurser';
$string['courseid'] = 'Kurs-ID';
$string['courseinformation'] = 'Kursinformation';
$string['courselink'] = 'Gå till kurs';
$string['coursemisconf'] = 'Kursen är felkonfigurerad';
$string['createdon'] = 'Skapad';
$string['curllibrarymissing'] = 'PHP cURL-tillägget krävs för Externa verktyg.';
$string['custom'] = 'Anpassade parametrar';
$string['custom_config'] = 'Använder anpassad verktygskonfiguration.';
$string['custom_help'] = 'Anpassade parametrar är inställningar som används av verktygsleverantören. En anpassad parameter kan t.ex. användas för att visa en specifik resurs från tjänsteleverantören. Varje parameter ska anges på en separat rad i formatet "name=value"; till exempel "chapter=3".

Det är säkert att lämna det här fältet orört om inte verktygsleverantören meddelat något annat.';
$string['custominstr'] = 'Anpassade parametrar';
$string['debuglaunch'] = 'Debug-alternativ';
$string['debuglaunchoff'] = 'Normal start';
$string['debuglaunchon'] = 'Start i debugläge';
$string['default'] = 'Förvalt';
$string['default_launch_container'] = 'Förvald startbehållare';
$string['delegate'] = 'Delegera till lärare';
$string['delete'] = 'Ta bort';
$string['delete_confirmation'] = 'Är du säker på att du vill ta bort detta förkonfigurerade verktyg?';
$string['deletetype'] = 'Ta bort förkonfigurerat verktyg';
$string['display_description'] = 'Visa aktivitetsbeskrivning vid start';
$string['display_description_help'] = '';
$string['display_name'] = 'Visa aktivitetsnamn vid start';
$string['donot'] = 'Skicka inte';
$string['donotaccept'] = 'Acceptera inte';
$string['donotallow'] = 'Tillåt inte';
$string['edittype'] = 'Redigera förinställt verktyg';
$string['embed'] = 'Bädda in';
$string['embed_no_blocks'] = 'Bädda in utan block';
$string['enableemailnotification'] = 'Skicka e-postnotiser';
$string['enableemailnotification_help'] = 'Om aktiverat kommer elever motta notiser via e-post när deras verktygsinlämningar har betygsatts.';
$string['enterkeyandsecret'] = 'Ange konsumentnyckel och delad hemlighet';
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
$string['indicator:cognitivedepth'] = 'LTI kognitiv';
$string['indicator:cognitivedepth_help'] = 'Denna indikator baseras på det kognitiva djup som uppnåtts av studenten i en LTI-aktivitet.';
$string['indicator:socialbreadth'] = 'LTI social';
$string['indicator:socialbreadth_help'] = 'Denna indikator baseras på den sociala bredd som uppnåtts av studenten i en LTI-aktivitet.';
$string['indicator:socialbreadthdef_help'] = 'Deltagaren har nått denna procentandel av det sociala engagemanget som erbjuds av LTI-aktiviteterna under detta analysintervall (Nivåer = Inget deltagande, Deltagaren ensamt, Deltagaren tillsammans med andra)';
$string['manage_external_tools'] = 'Hantera verktyg';
$string['modulenameplural'] = 'Externa verktyg';
$string['modulenamepluralformatted'] = 'LTI-instanser';
$string['name'] = 'Namn';
$string['never'] = 'Aldrig';
$string['new_window'] = 'Nytt fönster';
$string['noprofileservice'] = 'Profiltjänst kunde inte hittas';
$string['noservers'] = 'Hittade inga servrar';
$string['optionalsettings'] = 'Valfria inställningar';
$string['organization'] = 'Organisationsdetaljer';
$string['organizationdescr'] = 'Organisationsbeskrivning';
$string['organizationid'] = 'Organisations-ID';
$string['parameter'] = 'Verktygsparametrar';
$string['password'] = 'Delad hemlighet';
$string['password_admin'] = 'Delad hemlighet';
$string['pending'] = 'Väntande';
$string['pluginname'] = 'Externt verktyg';
$string['preferheight'] = 'Föredragen höjd';
$string['preferwidth'] = 'Föredragen bredd';
$string['privacy'] = 'Integritet';
$string['privacy:metadata:lti_types'] = 'LTI-typer';
$string['publickey'] = 'Publik nyckel';
$string['quickgrade'] = 'Tillåt snabbedömning';
$string['redirectionuris'] = 'Omdirigerings-URI';
$string['register'] = 'Registrera';
$string['registration_options'] = 'Registreringsalternativ';
$string['reject'] = 'Avvisa';
$string['rejected'] = 'Avvisad';
$string['resource'] = 'Resurs';
$string['resourcekey'] = 'Konsumentnyckel';
$string['resourcekey_admin'] = 'Konsumentnyckel';
$string['return_to_course'] = 'Klicka <a href="{$a->link}" target="_top">här</a> för att återgå till kursen.';
$string['saveallfeedback'] = 'Spara all återkoppling';
$string['search:activity'] = 'Externt verktyg - aktivitetsinformation';
$string['selectcontent'] = 'Välj innehåll';
$string['send'] = 'Skicka';
$string['services'] = 'Tjänster';
$string['setupoptions'] = 'Setup-alternativ';
$string['submission'] = 'Inlämning';
$string['submissions'] = 'Inlämningar';
$string['submissionsfor'] = 'Inlämningar för {$a}';
$string['subplugintype_ltiservice'] = 'LTI-tjänst';
$string['subplugintype_ltiservice_plural'] = 'LTI-tjänster';
$string['subplugintype_ltisource'] = 'LTI-källa';
$string['subplugintype_ltisource_plural'] = 'LTI-källor';
$string['successfullycreatedtooltype'] = 'Skapade nytt verktyg!';
$string['tool_settings'] = 'Verktygsinställningar';
$string['tooldescription'] = 'Beskrivning';
$string['tooldetailsclientid'] = 'Klient-ID';
$string['tooldetailsmodalemail'] = 'E-post';
$string['tooldetailsmodallink'] = 'Visa detaljerad konfiguration';
$string['tooldetailsplatformid'] = 'Plattforms-ID';
$string['toolproxy_help'] = 'Externa verktygsregistreringar gör att Moodle-webbplatsadministratörer kan konfigurera externa verktyg från en verktygsproxy som erhållits från en verktygsleverantör som stöder LTI 2.0. En registrerings-URL som tillhandahålls av verktygsleverantören är allt som krävs för att initiera processen. De funktioner och tjänster som erbjuds verktygsleverantören väljs vid konfigurering av en ny registrering.

Verktygsregistreringar som anges på denna sida är uppdelade i fyra kategorier:

* **Konfigurerade** - Dessa verktygsregistreringar har ställts in men registreringsprocessen har ännu inte startats.
* **Väntande** - Registreringsprocessen för dessa verktygsregistreringar har startats men inte slutförts. Öppna och spara inställningarna för att flytta den tillbaka till kategorin \'Konfigurerad\'.
* **Accepterad** - Dessa verktygsregistreringar har godkänts; de resurser som anges i verktygsproxyn kommer att visas på sidan för förkonfigurerade verktyg med en initial status \'Väntande\'.
* **Avvisad** - Dessa verktygsregistreringar är sådana som avvisades under registreringsprocessen. Öppna och spara inställningarna för att flytta den tillbaka till kategorin \'Konfigurerad\' så att registreringsprocessen kan startas på nytt.';
$string['tooltypes'] = 'Verktyg';
$string['typename'] = 'Verktygsnamn';
$string['types'] = 'Typer';
$string['unabletocreatetooltype'] = 'Kan inte skapa verktyg';
$string['unknownstate'] = 'Okänt tillstånd';
$string['update'] = 'Uppdatera';
