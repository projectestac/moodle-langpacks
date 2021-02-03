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
 * Strings for component 'plugin', language 'sv', version '3.8'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Åtgärder';
$string['availability'] = 'Tillgänglighet';
$string['cancelinstallall'] = 'Avbryt nya installationer ({$a})';
$string['cancelinstallhead'] = 'Avbryter installationen';
$string['cancelinstallone'] = 'Avbryt';
$string['cancelupgradeall'] = 'Avbryt uppgraderingar ({$a})';
$string['cancelupgradehead'] = 'Återställer tidigare versioner';
$string['cancelupgradeone'] = 'Avbryt';
$string['checkforupdates'] = 'Sök efter uppdateringar';
$string['checkforupdateslast'] = 'Senast kontroll utfört {$a}';
$string['dependencyavailable'] = 'Tillgängliga';
$string['dependencyfails'] = 'Fel';
$string['dependencyinstall'] = 'Installera';
$string['dependencyinstallhead'] = 'Installera saknade beroenden';
$string['dependencyinstallmissing'] = 'Installera saknade beroenden ({$a})';
$string['dependencymissing'] = 'Saknade';
$string['dependencyunavailable'] = 'Ej tillgängliga';
$string['dependencyupload'] = 'Ladda upp';
$string['dependencyuploadmissing'] = 'Ladda upp ZIP-filer';
$string['displayname'] = 'Pluginnamn';
$string['err_response_curl'] = 'Kunde inte hämta data om tillgängliga uppdateringa - oväntad cURL fel.';
$string['err_response_http_code'] = 'Kunde inte hämta data om tillgängliga uppdateringa - oväntad HTTP svarskod.';
$string['filterall'] = 'Visa alla';
$string['filtercontribonly'] = 'Visa övriga';
$string['isenabled'] = 'Aktiverad?';
$string['misdepinfoversion'] = 'Versionsinformation';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Inga plugin av denna typ finns installerade';
$string['notdownloadable'] = 'Det går inte att hämta paketet';
$string['notdownloadable_help'] = 'ZIP-paketet med uppdateringen kan inte laddas ned automatiskt. Se dokumentationen för mer hjälp.';
$string['notes'] = 'Anteckningar';
$string['notwritable'] = 'Saknar skrivbehörighet till pluginkatalogen';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Alla';
$string['overviewext'] = 'Övriga';
$string['overviewupdatable'] = 'Tillgängliga uppdateringar';
$string['packagesdownloading'] = 'Laddar ner {$a}';
$string['packagesextracting'] = 'Extraherar {$a}';
$string['packagesvalidating'] = 'Validerar {$a}';
$string['packagesvalidatingfailed'] = 'Installationen avbröts på grund av valideringsfel';
$string['packagesvalidatingok'] = 'Valideringen lyckades, installationen kan fortsätta';
$string['plugincheckall'] = 'Alla';
$string['plugincheckattention'] = 'Pluginmoduler som kräver åtgärd';
$string['pluginchecknone'] = 'Inga plugin kräver din uppmärksamhet';
$string['pluginchecknotice'] = 'Denna sida visar pluginmoduler som kan kräva åtgärder under uppgraderingen. Det kan t.ex. finnas nya pluginmoduler som behöver installeras, uppgraderas eller som saknas. Övriga pluginmoduler visas om det finns en tillgänglig uppdatering för dem. Det rekommenderas att du kontrollerar om det finns nyare versioner tillgängliga och uppdatera dem innan du fortsätter med denna uppgradering.';
$string['plugindisable'] = 'Inaktivera';
$string['plugindisabled'] = 'Inaktiverad';
$string['pluginenable'] = 'Aktivera';
$string['pluginenabled'] = 'Aktiverad';
$string['requiredby'] = 'Krävs av: {$a}';
$string['requires'] = 'Kräver';
$string['rootdir'] = 'Katalog';
$string['settings'] = 'Inställningar';
$string['source'] = 'Källa';
$string['sourceext'] = 'Övrig';
$string['sourcestd'] = 'Standard';
$string['status'] = 'Status';
$string['status_delete'] = 'Kommer att tas bort';
$string['status_downgrade'] = 'Nyare version redan installerad!';
$string['status_missing'] = 'Saknas från skivan';
$string['status_new'] = 'Kommer att installeras';
$string['status_nodb'] = 'Ingen databas';
$string['status_upgrade'] = 'Kommer att uppgraderas';
$string['status_uptodate'] = 'Installerad';
$string['supportedconversions'] = 'Dokumentkonverteringar som stöds';
$string['supportedmoodleversions'] = 'Moodle-versioner som stöds';
$string['systemname'] = 'Identifierare';
$string['type_auth'] = 'Autentiseringsmetod';
$string['type_auth_plural'] = 'Plugin-modul för autentisering';
$string['type_availability'] = 'Tillgänglighetsbegränsning';
$string['type_availability_plural'] = 'Tillgänglighetsbegränsningar';
$string['type_block'] = 'Block';
$string['type_block_plural'] = 'Block';
$string['type_cachestore'] = 'Cachearkiv';
$string['type_cachestore_plural'] = 'Cachearkiv';
$string['type_calendartype'] = 'Kalendertyp';
$string['type_calendartype_plural'] = 'Kalendertyper';
$string['type_coursereport'] = 'Kursrapport';
$string['type_coursereport_plural'] = 'Kursrapporter';
$string['type_customfield'] = 'Anpassat fält';
$string['type_customfield_plural'] = 'Anpassade fält';
$string['type_dataformat'] = 'Dataformat';
$string['type_dataformat_plural'] = 'Dataformat';
$string['type_editor'] = 'Redigerare';
$string['type_editor_plural'] = 'Redigerare';
$string['type_enrol'] = 'Registreringsmetod';
$string['type_enrol_plural'] = 'Registreringsmetoder';
$string['type_fileconverter'] = 'Dokumentkonverterare';
$string['type_fileconverter_plural'] = 'Dokumentkonverterare';
$string['type_fileconvertermanage'] = 'Hantera dokumentkonverterare';
$string['type_filter'] = 'Textfilter';
$string['type_filter_plural'] = 'Textfilter';
$string['type_format'] = 'Kursformat';
$string['type_format_plural'] = 'Kursformat';
$string['type_gradeexport'] = 'Metod för betygsexport';
$string['type_gradeexport_plural'] = 'Metoder för betygsexport';
$string['type_gradeimport'] = 'Metod för betygsimport';
$string['type_gradeimport_plural'] = 'Metoder för betygsimport';
$string['type_gradereport'] = 'Betygsboksrapport';
$string['type_gradereport_plural'] = 'Betygsboksrapporter';
$string['type_gradingform'] = 'Avancerad betygssättningsmetod';
$string['type_gradingform_plural'] = 'Avancerade betygssättningsmetoder';
$string['type_local'] = 'Lokal plugin';
$string['type_local_plural'] = 'Lokal plugins';
$string['type_media'] = 'Mediaspelare';
$string['type_media_plural'] = 'Mediaspelare';
$string['type_mnetservice'] = 'MNET tjänst';
$string['type_mnetservice_plural'] = 'MNET tjänster';
$string['type_mod'] = 'Aktivitetsmodul';
$string['type_mod_plural'] = 'Aktivitetsmoduler';
$string['type_plagiarism'] = 'Plugin-modul för plagiatkontroll';
$string['type_plagiarism_plural'] = 'Plugin-moduler för plagiatkontroll';
$string['type_portfolio'] = 'Portfolio';
$string['type_portfolio_plural'] = 'Portfolio';
$string['type_profilefield'] = 'Profilfälttyp';
$string['type_profilefield_plural'] = 'Profilfälttyper';
$string['type_qbehaviour'] = 'Frågebeteende';
$string['type_qbehaviour_plural'] = 'Frågebeteenden';
$string['type_qtype'] = 'Frågetyp';
$string['type_qtype_plural'] = 'Frågetyper';
$string['type_report'] = 'Site rapport';
$string['type_report_plural'] = 'Rapporter';
$string['type_repository'] = 'Lagringsplats';
$string['type_repository_plural'] = 'Lagringsplatser';
$string['type_search'] = 'Sökmotor';
$string['type_search_plural'] = 'Sökmotorer';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Teman';
$string['type_tool'] = 'Administrationsverktyg';
$string['type_tool_plural'] = 'Administrationsverktyg';
$string['type_webservice'] = 'Webbtjänst protokoll';
$string['type_webservice_plural'] = 'Webbtjänst protokoll';
$string['uninstall'] = 'Avinstallera';
$string['uninstallconfirm'] = 'Du är på väg att avinstallera insticksmodulen <em>{$a->name}</em>. Detta kommer att resultera i att all information i databasen, inklusive insticksmodulens inställningar och loggposter samt eventuella användarfiler som hanteras av insticksmodulen tas bort. Detta går inte att ångra och Moodle kommer inte att skapa en återställningsbackup. Är du SÄKER PÅ att du vill fortsätta?';
$string['uninstalldelete'] = 'All data associerad med pluginmodulen <em>{$a->name}</em> har tagits bort från databasen. För att förhindra att den installeras på nytt måste foldern <em>{$a->rootdir}</em> tas bort manuellt. Folderns skrivinställningar gör att Moodle inte själv kan ta bort foldern.';
$string['uninstalldeleteconfirm'] = 'All data associerad med pluginmodulen <em>{$a->name}</em> har tagits bort från databasen. För att förhindra att den installeras på nytt måste foldern <em>{$a->rootdir}</em> tas bort. Vill du ta bort foldern nu?';
$string['uninstallextraconfirmenrol'] = 'Det finns {$a->enrolments} användarregistreringar.';
$string['uninstalling'] = 'Avinstallerar {$a->name}';
$string['updateavailable'] = 'Det finns en ny version {$a} tillgänglig!';
$string['updateavailable_moreinfo'] = 'Mer info...';
$string['updateavailable_release'] = 'Version {$a}';
$string['validationmsg_componentmatch'] = 'Fullständigt komponentnamn';
$string['validationmsg_foundlangfile'] = 'Hittade språkfil';
$string['validationmsg_missingversionphp'] = 'Hittar inte filen version.php';
$string['validationmsg_pathwritable'] = 'Kontrollerar skrivbehörighet';
$string['validationmsg_pluginversion'] = 'Insticksmodulens version';
$string['validationmsg_pluginversiontoolow'] = 'En nyare version av denna plugin är redan installerad';
$string['validationmsg_requiresmoodle'] = 'Moodle version som krävs';
$string['validationmsg_rootdir'] = 'Namn på den plugin som kommer installeras';
$string['validationmsg_rootdirinvalid'] = 'Ogiltigt pluginnamn';
$string['validationmsg_unknowntype'] = 'Okänd plugintyp';
$string['validationmsglevel_debug'] = 'Debug';
$string['validationmsglevel_error'] = 'Fel';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Varning';
$string['version'] = 'Version';
$string['versiondb'] = 'Nuvarande version';
$string['versiondisk'] = 'Ny version';
