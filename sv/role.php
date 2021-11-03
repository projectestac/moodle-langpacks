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
 * Strings for component 'role', language 'sv', version '3.11'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Lägger till ny roll';
$string['addrole'] = 'Lägg till ny roll';
$string['advancedoverride'] = 'Avancerat rollåsidosättande';
$string['allow'] = 'Tillåt';
$string['allowassign'] = 'Tillåt rolltilldelningar';
$string['allowed'] = 'Tillåten';
$string['allowoverride'] = 'Tillåt rollåsidosättanden';
$string['allowroletoassign'] = 'Tillåt användare med rollen {$a->fromrole} att tilldela rollen {$a->targetrole}';
$string['allowroletooverride'] = 'Tillåt användare med rollen {$a->fromrole} att åsidosätta rollen {$a->targetrole}';
$string['allowroletoswitch'] = 'Tillåt användare med rollen {$a->fromrole} att byta till rollen {$a->targetrole}';
$string['allowroletoview'] = 'Tillåt användare med rollen {$a->fromrole} att se rollen {$a->targetrole}';
$string['allowswitch'] = 'Tillåt rollbyten';
$string['allowview'] = 'Tillåt roll att se';
$string['allsiteusers'] = 'Alla webbplatsanvändare';
$string['analytics:listinsights'] = 'Lista insikter';
$string['analytics:listowninsights'] = 'Lista egna insikter';
$string['analytics:managemodels'] = 'Hantera modeller';
$string['archetype'] = 'Rollarketyp';
$string['archetype_help'] = 'Rollarketypen bestämmer behörigheterna när en roll återställs till standard. Den bestämmer också eventuella nya behörigheter för rollen när webbplatsen uppgraderas.';
$string['archetypecoursecreator'] = 'ARKETYP: Kursskapare';
$string['archetypeeditingteacher'] = 'ARKETYP: Lärare (redigerande)';
$string['archetypefrontpage'] = 'ARKETYP: Inloggad användare på förstasidan';
$string['archetypeguest'] = 'ARKETYP: Gäst';
$string['archetypemanager'] = 'ARKETYP: Chef';
$string['archetypestudent'] = 'ARKETYP: Student';
$string['archetypeteacher'] = 'ARKETYP: Lärare (icke-redigerande)';
$string['archetypeuser'] = 'ARKETYP: Inloggad användare';
$string['assignanotherrole'] = 'Tilldela en annan roll';
$string['assignedroles'] = 'Tilldelade roller';
$string['assignerror'] = 'Fel vid tilldelning av rollen {$a->role} till användaren {$a->user}.';
$string['assignglobalroles'] = 'Tilldela systemroller';
$string['assignmentcontext'] = 'Tilldelningskontext';
$string['assignmentoptions'] = 'Tilldelningsalternativ';
$string['assignrole'] = 'Tilldela roll';
$string['assignrolenameincontext'] = 'Tilldela rollen  \'{$a->role}\' i {$a->context}';
$string['assignroles'] = 'Tilldela roller';
$string['assignroles_help'] = 'Genom att tilldela en användare en roll i en kontext ger du dem de behörigheter som finns i den rollen, för den aktuella kontexten och alla lägre kontexter. Om en användare till exempel tilldelas rollen som student i en kurs kommer de också att ha rollen som student för alla aktiviteter och block inom kursen.';
$string['assignrolesin'] = 'Tilldela roller i {$a}';
$string['assignrolesrelativetothisuser'] = 'Tilldela roller relativt den här användaren';
$string['backtoallroles'] = 'Tillbaka till listan över alla roller';
$string['backup:anonymise'] = 'Anonymisera användardata vid säkerhetskopiering';
$string['backup:backupactivity'] = 'Aktiviteter för säkerhetskopiering';
$string['backup:backupcourse'] = 'Säkerhetskopiera kurser';
$string['backup:backupsection'] = 'Säkerhetskopiera sektioner';
$string['backup:backuptargetimport'] = 'Säkerhetskopia att importera';
$string['backup:configure'] = 'Konfigurera alternativ för säkerhetskopiering';
$string['backup:downloadfile'] = 'Hämta filer från säkerhetskopieringsområden';
$string['backup:userinfo'] = 'Säkerhetskopiera användardata';
$string['badges:awardbadge'] = 'Tilldela ett märke till en användare';
$string['badges:configurecriteria'] = 'Ställ in/redigera kriterier för att ta ett märke';
$string['badges:configuredetails'] = 'Ställ in/redigera detaljer för märken';
$string['badges:configuremessages'] = 'Konfigurera meddelanden för märken';
$string['badges:createbadge'] = 'Skapa/duplicera märken';
$string['badges:deletebadge'] = 'Ta bort märken';
$string['badges:earnbadge'] = 'Ta märke';
$string['badges:manageglobalsettings'] = 'Hantera globala märkesinställningar';
$string['badges:manageownbadges'] = 'Visa och hantera egna märken';
$string['badges:revokebadge'] = 'Återkalla ett märke från en användare';
$string['badges:viewawarded'] = 'Visa användare som tagit ett specifikt märke utan att kunna tilldela ett märke';
$string['badges:viewbadges'] = 'Visa tillgängliga märken utan att ha tagit dem';
$string['badges:viewotherbadges'] = 'Visa publika märken i andras profiler';
$string['block:edit'] = 'Redigera blockinställningar';
$string['block:view'] = 'Visa block';
$string['blog:create'] = 'Skapa nya blogginlägg';
$string['blog:manageentries'] = 'Redigera och hantera inlägg';
$string['blog:manageexternal'] = 'Redigera och hantera externa bloggar';
$string['blog:search'] = 'Sök blogginlägg';
$string['blog:view'] = 'Visa blogginlägg';
$string['blog:viewdrafts'] = 'Visa utkast till blogginlägg';
$string['calendar:manageentries'] = 'Hantera alla kalenderhändelser';
$string['calendar:managegroupentries'] = 'Hantera händelser i gruppkalendrar';
$string['calendar:manageownentries'] = 'Hantera egna kalenderhändelser';
$string['capabilities'] = 'Behörigheter';
$string['capability'] = 'Behörighet';
$string['category:create'] = 'Skapa kategorier';
$string['category:delete'] = 'Ta bort kategorier';
$string['category:manage'] = 'Hantera kategorier';
$string['category:update'] = 'Uppdatera kategorier';
$string['category:viewcourselist'] = 'Visa kurskategori och kurser inom den';
$string['category:viewhiddencategories'] = 'Se dolda kategorier';
$string['category:visibility'] = 'Se dolda kategorier';
$string['checkglobalpermissions'] = 'Kontrollera systembehörigheter';
$string['checkpermissions'] = 'Kontrollera behörigheter';
$string['checkpermissionsin'] = 'Kontrollera  {$a}behörigheter';
$string['checksystempermissionsfor'] = 'Kontrollera systembehörigheter för {$a->fullname}';
$string['checkuserspermissionshere'] = 'Kontrollera behörigheter för {$a->fullname} i det här sammanhanget:  {$a->contextlevel}';
$string['chooseroletoassign'] = 'Välj roll att tilldela';
$string['cohort:assign'] = 'Lägg till och ta bort kohortmedlemmar';
$string['cohort:manage'] = 'Skapa, ta bort och flytta kohorter';
$string['cohort:view'] = 'Visa webbplatsövergripande kohorter';
$string['comment:delete'] = 'Ta bort kommentarer';
$string['comment:post'] = 'Publicera kommentarer';
$string['comment:view'] = 'Visa kommentarer';
$string['competency:competencygrade'] = 'Ange bedömd kompetens';
$string['competency:competencymanage'] = 'Hantera kompetensramverk';
$string['competency:competencyview'] = 'Visa kompetensramverk';
$string['competency:coursecompetencyconfigure'] = 'Konfigurera inställningar för kurskompetenser';
$string['competency:coursecompetencygradable'] = 'Ta emot kompetensbedömningar';
$string['competency:coursecompetencymanage'] = 'Hantera kurskompetenser';
$string['competency:coursecompetencyview'] = 'Visa kurskompetenser';
$string['competency:evidencedelete'] = 'Ta bort bevis';
$string['competency:plancomment'] = 'Kommentar studieplan';
$string['competency:plancommentown'] = 'Kommentera egen studieplan';
$string['competency:planmanage'] = 'Hantera studieplaner';
$string['competency:planmanagedraft'] = 'Hantera utkast till studieplaner';
$string['competency:planmanageown'] = 'Hantera egna studieplaner';
$string['competency:planmanageowndraft'] = 'Hantera egna utkast till studieplaner';
$string['competency:planrequestreview'] = 'Begära granskning av studieplan';
$string['competency:planrequestreviewown'] = 'Begära granskning av egen studieplan';
$string['competency:planreview'] = 'Granska studieplan';
$string['competency:planview'] = 'Visa alla studieplaner';
$string['competency:planviewdraft'] = 'Visa utkast till studieplaner';
$string['competency:planviewown'] = 'Visa egna studieplaner';
$string['competency:planviewowndraft'] = 'Visa egna utkast till studieplaner';
$string['competency:templatemanage'] = 'Hantera studieplansmallar';
$string['competency:templateview'] = 'Visa studieplansmallar';
$string['competency:usercompetencycomment'] = 'Kommentera en användares kompetens';
$string['competency:usercompetencycommentown'] = 'Kommentera den egna användarkompetensen';
$string['competency:usercompetencyrequestreview'] = 'Begära granskning av en användares kompetens';
$string['competency:usercompetencyrequestreviewown'] = 'Begära granskning av den egna användarkompetensen';
$string['competency:usercompetencyreview'] = 'Granska en användares kompetens';
$string['competency:usercompetencyview'] = 'Visa användarkompetens';
$string['competency:userevidencemanage'] = 'Hantera verifieringar av tidigare lärande';
$string['competency:userevidencemanageown'] = 'Hantera verifieringar av eget tidigare lärande';
$string['competency:userevidenceview'] = 'Visa verifieringar av användares tidigare lärande';
$string['confirmaddadmin'] = 'Vill du verkligen lägga till <strong>{$a}</strong> som ny administratör på webbplatsen?';
$string['confirmdeladmin'] = 'Vill du verkligen ta bort <strong>{$a}</strong> från listan över webbplatsadministratörer?';
$string['confirmroleprevent'] = 'Vill du verkligen ta bort <strong>{$a->role}</strong> från listan över tillåtna roller för funktionsbehörigheten <code>{$a->cap}</code> i kontext {$a->context}?';
$string['confirmroleunprohibit'] = 'Vill du verkligen ta bort <strong>{$a->role}</strong> från listan av icke-tillåtna roller för funktionsbehörigheten <code>{$a->cap}</code> i kontextet {$a->context}?';
$string['confirmunassign'] = 'Är du säker på att du vill ta bort den här rollen för denna användare?';
$string['confirmunassignno'] = 'Avbryt';
$string['confirmunassigntitle'] = 'Bekräfta ändring av roll';
$string['confirmunassignyes'] = 'Ta bort';
$string['contentbank:access'] = 'Visa innehållsbanken';
$string['contentbank:deleteanycontent'] = 'Ta bort valfritt innehåll från innehållsbanken';
$string['contentbank:deleteowncontent'] = 'Ta bort innehåll från egna innehållsbanken';
$string['contentbank:downloadcontent'] = 'Ladda ned innehåll från innehållsbanken';
$string['contentbank:manageanycontent'] = 'Hantera allt innehåll i innehållsbanken';
$string['contentbank:manageowncontent'] = 'Hantera innehåll i egen innehållsbank';
$string['contentbank:upload'] = 'Ladda upp nytt innehåll till innehållsbank';
$string['contentbank:useeditor'] = 'Skapa eller redigera innehåll med en redigerare för innehållstyp';
$string['contentbank:viewunlistedcontent'] = 'Visa opublicerst innehåll från innehållsbanken';
$string['context'] = 'Sammanhang';
$string['course:activityvisibility'] = 'Dölj/visa aktiviteter';
$string['course:bulkmessaging'] = 'Skicka ett meddelande till många människor';
$string['course:changecategory'] = 'Ändra kurskategori';
$string['course:changefullname'] = 'Ändra kursens fullständiga namn';
$string['course:changeidnumber'] = 'Ändra kursens ID-nummer';
$string['course:changelockedcustomfields'] = 'Ändra låsta anpassade fält';
$string['course:changeshortname'] = 'Ändra kursens kortnamn';
$string['course:changesummary'] = 'Ändra kursbeskrivning';
$string['course:configurecustomfields'] = 'Konfigurera anpassade fält';
$string['course:configuredownloadcontent'] = 'Konfigurera nedladdning av kursinnehåll';
$string['course:create'] = 'Skapa kurser';
$string['course:creategroupconversations'] = 'Skapa gruppkonversationer';
$string['course:delete'] = 'Ta bort kurser';
$string['course:downloadcoursecontent'] = 'Ladda ned kursinnehåll';
$string['course:enrolconfig'] = 'Konfigurera instanser av registreringar i kurser';
$string['course:enrolreview'] = 'Granska kursregistreringar';
$string['course:ignoreavailabilityrestrictions'] = 'Ignorera tillgänglighetsrestriktioner';
$string['course:ignorefilesizelimits'] = 'Använda filer större än begränsningarna tillåter';
$string['course:isincompletionreports'] = 'Visas i slutföranderapporter';
$string['course:manageactivities'] = 'Hantera aktiviteter';
$string['course:managefiles'] = 'Hantera filer';
$string['course:managegrades'] = 'Hantera betyg';
$string['course:managegroups'] = 'Hantera grupper';
$string['course:managescales'] = 'Hantera skalor';
$string['course:markcomplete'] = 'Markera användare som klara i kursslutförandet';
$string['course:movesections'] = 'Flytta sektioner';
$string['course:overridecompletion'] = 'Åsidosätt status för slutförande av aktivitet';
$string['course:recommendactivity'] = 'Rekommendera aktiviteter i aktivitetsväljaren';
$string['course:renameroles'] = 'Byta namn på roller';
$string['course:request'] = 'Begära nya kurser';
$string['course:reset'] = 'Återställa kurs';
$string['course:reviewotherusers'] = 'Granska andra användare';
$string['course:sectionvisibility'] = 'Kontrollera sektionssynlighet';
$string['course:setcurrentsection'] = 'Ställa in aktuell sektion';
$string['course:setforcedlanguage'] = 'Tvinga kursspråk';
$string['course:tag'] = 'Ändra kursetiketter';
$string['course:togglecompletion'] = 'Manuellt markera aktiviteter som slutförda';
$string['course:update'] = 'Uppdatera kursinställningar';
$string['course:useremail'] = 'Aktivera/inaktivera e-postadress';
$string['course:view'] = 'Visa kurser utan deltagande';
$string['course:viewcoursegrades'] = 'Visa kursbetyg';
$string['course:viewhiddenactivities'] = 'Visa dolda aktiviteter';
$string['course:viewhiddencourses'] = 'Visa dolda kurser';
$string['course:viewhiddensections'] = 'Visa dolda sektioner';
$string['course:viewhiddenuserfields'] = 'Visa dolda användarfält';
$string['course:viewparticipants'] = 'Visa deltagare';
$string['course:viewscales'] = 'Visa skalor';
$string['course:viewsuspendedusers'] = 'Visa inaktiverade användare';
$string['course:visibility'] = 'Dölj/visa kurser';
$string['createrolebycopying'] = 'Skap ny roll genom att kopiera {$a}';
$string['createthisrole'] = 'Skapa den här rollen';
$string['currentcontext'] = 'Nuvarande sammanhang';
$string['currentrole'] = 'Nuvarande roll';
$string['customroledescription'] = 'Beskrivning';
$string['customroledescription_help'] = 'Beskrivningar av standardroller lokaliseras automatiskt om den anpassade beskrivningen är tom.';
$string['customrolename'] = 'Fullständigt namn';
$string['customrolename_help'] = 'Namn på standardroller lokaliseras automatiskt om det anpassade namnet är tomt. Du måste ange ett fullständigt namn för alla anpassade roller.';
$string['defaultrole'] = 'Standardroll';
$string['defaultx'] = 'Standard: {$a}';
$string['defineroles'] = 'Hantera roller';
$string['deletecourseoverrides'] = 'Ta bort alla åsidosättanden i kursen';
$string['deletelocalroles'] = 'Ta bort alla lokala rolltilldelningar';
$string['deleterolesure'] = '<p>Är du säker på att du vill ta bort rollen "{$a->name} ({$a->shortname})"?</p><p>Just nu är den rollen tilldelad till {$a->count} användare.</p>';
$string['deletexrole'] = 'Ta bort rollen {$a}';
$string['duplicaterole'] = 'Duplicera roll';
$string['duplicaterolesure'] = 'Är du säker på att du vill duplicera rollen
"{$a->name} ({$a->shortname})"?';
$string['editingrolex'] = 'Redigerar rollen \'{$a}\'';
$string['editrole'] = 'Redigera roll';
$string['editxrole'] = ' Redigera rollen {$a}';
$string['errorbadrolename'] = 'Felaktigt rollnamn';
$string['errorbadroleshortname'] = 'Felaktigt kortnamn på roll';
$string['errorexistsrolename'] = 'Rollnamnet finns redan';
$string['errorexistsroleshortname'] = 'Rollnamnet finns redan';
$string['errorroleshortnametoolong'] = 'Rollnamnet får inte vara längre än 100 tecken';
$string['eventcapabilityassigned'] = 'Behörighet tilldelad';
$string['eventcapabilityunassigned'] = 'Behörighet borttagen';
$string['eventroleallowassignupdated'] = 'Tillåt rolltilldelning';
$string['eventroleallowoverrideupdated'] = 'Tillåt åsidosättande av roll';
$string['eventroleallowswitchupdated'] = 'Tillåt rollbyte';
$string['eventroleallowviewupdated'] = 'Tillåt visning av roll';
$string['eventroleassigned'] = 'Roll tilldelad';
$string['eventrolecapabilitiesupdated'] = 'Funktionsbehörigheter uppdaterade';
$string['eventroledeleted'] = 'Roll borttagen';
$string['eventroleunassigned'] = 'Roll borttagen';
$string['eventroleupdated'] = 'Roll uppdaterad';
$string['existingadmins'] = 'Nuvarande webbplatsadministratörer';
$string['existingusers'] = '{$a} befintliga användare';
$string['explanation'] = 'Förklaring';
$string['export'] = 'Exportera';
$string['extusers'] = 'Befintliga användare';
$string['extusersmatching'] = 'Befintliga användare som matchar \'{$a}\'';
$string['filter:manage'] = 'Hantera lokala filterinställningar';
$string['frontpageuser'] = 'Autentiserad användare på förstasidan';
$string['frontpageuserdescription'] = 'Alla användare som är inloggade på förstasideskursen';
$string['globalrole'] = 'Systemroll';
$string['globalroleswarning'] = '<strong>VARNING!</strong> Roller du tilldelar från den här sidan kommer att gälla för de tilldelade användarna över hela webbplatsen, inklusive på förstasidan och i alla kurser.';
$string['gotoassignroles'] = 'Gå till \'Tilldela roller\' för det här {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Gå till \'Tilldela systemroller\'';
$string['grade:edit'] = 'Redigera betyg';
$string['grade:export'] = 'Exportera betyg';
$string['grade:hide'] = 'Dölj/visa betyg';
$string['grade:import'] = 'Importera betyg';
$string['grade:lock'] = 'Lås betyg eller komponenter';
$string['grade:manage'] = 'Hantera betygsobjekt';
$string['grade:managegradingforms'] = 'Hantera avancerade betygssättningsmetoder';
$string['grade:manageletters'] = 'Hantera bokstavsbetyg';
$string['grade:manageoutcomes'] = 'Hantera betygsresultat';
$string['grade:managesharedforms'] = 'Hantera mallar för avancerade betygssättningsmetoder';
$string['grade:override'] = 'Åsidosätta betyg';
$string['grade:sharegradingforms'] = 'Dela formulär för avancerade betygssättningsmetoder som en mall';
$string['grade:unlock'] = 'Låsa upp betyg eller komponenter';
$string['grade:view'] = 'Visa egna betyg';
$string['grade:viewall'] = 'Visa betyg för övriga användare';
$string['grade:viewhidden'] = 'Visa dolda betyg för ägaren';
$string['h5p:deploy'] = 'Ladda upp H5P-innehåll';
$string['h5p:setdisplayoptions'] = 'Visningsalternativ för H5P';
$string['h5p:updatelibraries'] = 'Hantera H5P-innehållstyper';
$string['highlightedcellsshowdefault'] = 'Behörigheterna som markeras i tabellen nedan är standardvärdena för rollarketypen som är markerad ovan.';
$string['highlightedcellsshowinherit'] = 'De markerade cellerna i tabellen nedan visar behörigheten (om någon) som kommer att ärvas. Bortsett från de funktioner vars tillstånd du faktiskt vill ändra, bör du lämna allt inställt på Ärv.';
$string['inactiveformorethan'] = 'Inaktiv i mer än {$a->timeperiod}';
$string['ingroup'] = 'i gruppen "{$a->group}"';
$string['inherit'] = 'Ärv';
$string['invalidpresetfile'] = 'Ogiltig definitionsfil för roll';
$string['legacy:admin'] = 'ÄLDRE ROLL: Administratör';
$string['legacy:coursecreator'] = 'ÄLDRE ROLL: Kursutvecklare';
$string['legacy:editingteacher'] = 'ÄLDRE ROLL: Lärare (redigerande)';
$string['legacy:guest'] = 'ÄLDRE ROLL: Gäst';
$string['legacy:student'] = 'ÄLDRE ROLL: Student';
$string['legacy:teacher'] = 'ÄLDRE ROLL: Lärare (icke-redigerande)';
$string['legacy:user'] = 'ÄLDRE ROLL: Autentiserad användare';
$string['legacytype'] = 'Äldre rolltyp';
$string['listallroles'] = 'Lista alla roller';
$string['localroles'] = 'Lokalt tilldelade roller';
$string['mainadmin'] = 'Huvudadministratör';
$string['mainadminset'] = 'Ställ in huvudadministratör';
$string['manageadmins'] = 'Hantera webbplatsadministratörer';
$string['manager'] = 'Chef';
$string['managerdescription'] = 'Chefer kan komma åt kurser och ändra dem, men deltar normalt inte i dem.';
$string['manageroles'] = 'Hantera roller';
$string['maybeassignedin'] = 'Kontexttyper där denna roll kan tilldelas';
$string['morethan'] = 'Mer än {$a}';
$string['multipleroles'] = 'Flera roller';
$string['my:configsyspages'] = 'Konfigurera systemmallar för översiktssidorna';
$string['my:manageblocks'] = 'Hantera block på översiktssidan';
$string['neededroles'] = 'Roller med behörighet';
$string['nocapabilitiesincontext'] = 'Det finns inte några tillgängliga behörigheter i det här sammanhanget';
$string['noneinthisx'] = 'Ingen i den här {$a}';
$string['noneinthisxmatching'] = 'Inga användare som matchar \'{$a->search}\' i den här {$a->contexttype}';
$string['norole'] = 'Ingen roll';
$string['noroleassignments'] = 'Den här användaren har inga roller någonstans på den här webbplatsen.';
$string['noroles'] = 'Inga roller';
$string['notabletoassignroleshere'] = 'Du har inte behörighet att tilldela några roller här.';
$string['notabletooverrideroleshere'] = 'Du kan inte att åsidosätta behörigheter på roller här';
$string['notes:manage'] = 'Hantera anteckningar';
$string['notes:view'] = 'Visa anteckningar';
$string['notset'] = 'Ej specificerad';
$string['novisibleroles'] = 'Inga roller';
$string['overrideanotherrole'] = 'Åsidosätt en annan roll';
$string['overridecontext'] = 'Åsidosätt sammanhang';
$string['overridepermissions'] = 'Åsidosätt behörigheter';
$string['overridepermissions_help'] = 'Behörighetsåsidosättande gör att valda funktioner kan tillåtas eller förhindras i en viss kontext.';
$string['overridepermissionsforrole'] = 'Åsidosätt behörigheter för rollen \'{$a->role}\' i {$a->context}';
$string['overridepermissionsin'] = 'Åsidosätt behörigheter i {$a}';
$string['overrideroles'] = 'Åsidosätt roller';
$string['overriderolesin'] = 'Åsidosätt roller i {$a}';
$string['overrides'] = 'Åsidosättningar';
$string['overridesbycontext'] = 'Åsidosättningar (per kontext)';
$string['payment:manageaccounts'] = 'Hantera konton';
$string['payment:viewpayments'] = 'Visa betalningar';
$string['permission'] = 'Behörighet';
$string['permission_help'] = 'Det finns fyra lägen för funktionsbehörigheter.

Dessa är:

* Ej specificerad
* Tillåt - Behörighet beviljas för funktionen
* Förhindra - Behörighet tas bort för funktionen, även om det är tillåtet i ett högre sammanhang
* Förbjud - Behörighet nekas helt och kan inte åsidosättas i någon lägre (mer specifik) kontext';
$string['permissions'] = 'Behörigheter';
$string['permissionsforuser'] = 'Behörigheter för \'{$a}\'';
$string['permissionsincontext'] = 'Behörigheter i {$a}';
$string['portfolio:export'] = 'Exportera till portföljer';
$string['potentialusers'] = '{$a} potentiella användare';
$string['potusers'] = 'Möjliga användare';
$string['potusersmatching'] = 'Möjliga användare som matchar \'{$a}\'';
$string['prevent'] = 'Förhindra';
$string['privacy:metadata:preference:showadvanced'] = 'Hantera knappen för avancerat läge';
$string['privacy:metadata:role_assignments'] = 'Rolltilldelningar';
$string['privacy:metadata:role_assignments:component'] = 'Pluginmodul ansvarig för rolltildelning. Tom om tilldelad manuellt.';
$string['privacy:metadata:role_assignments:itemid'] = 'ID för den registrerings-/autentiseringsinstans som är ansvarig för denna rolltilldelning';
$string['privacy:metadata:role_assignments:modifierid'] = 'ID för den användare som skapade eller ändrade denna rolltilldelning';
$string['privacy:metadata:role_assignments:roleid'] = 'Roll-ID';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'Denna tabell lagrar de tilldelade rollerna för varje kontext.';
$string['privacy:metadata:role_assignments:timemodified'] = 'Datum då rolltilldelningen skapades eller ändrades.';
$string['privacy:metadata:role_assignments:userid'] = 'Användar-ID';
$string['privacy:metadata:role_capabilities'] = 'Funktionsbehörigheter för roll';
$string['privacy:metadata:role_capabilities:capability'] = 'Funktionsbehörighetens namn';
$string['privacy:metadata:role_capabilities:modifierid'] = 'ID för användare som skapade eller ändrade funktionsbehörigheten';
$string['privacy:metadata:role_capabilities:permission'] = 'Rättigheterna för en funktionsbehörighet: ärv, tillåt, förhindra eller förbjud.';
$string['privacy:metadata:role_capabilities:roleid'] = 'Rollens ID';
$string['privacy:metadata:role_capabilities:tableexplanation'] = 'Funktionsbehörigheter och åsidosatta funktionsbehörigheter för en specifik roll i en specifik kontext.';
$string['privacy:metadata:role_capabilities:timemodified'] = 'Datum då funktionsbehörigheten skapades eller ändrades.';
$string['privacy:metadata:role_cohortroles'] = 'Roller-Kohortroller';
$string['prohibit'] = 'Förbjud';
$string['prohibitedroles'] = 'Förbjuden';
$string['question:add'] = 'Lägg till nya frågor';
$string['question:config'] = 'Konfigurera frågetyper';
$string['question:editall'] = 'Redigera alla frågor';
$string['question:editmine'] = 'Redigera dina egna frågor';
$string['question:flag'] = 'Flagga frågor då man försök besvara dem';
$string['question:managecategory'] = 'Redigera frågekategorier';
$string['question:moveall'] = 'Flytta alla frågor';
$string['question:movemine'] = 'Flytta egna frågor';
$string['question:tagall'] = 'Tagga alla frågor';
$string['question:tagmine'] = 'Tagga egna frågor';
$string['question:useall'] = 'Använd alla frågor';
$string['question:usemine'] = 'Använd dina egna frågor';
$string['question:viewall'] = 'Visa alla frågor';
$string['question:viewmine'] = 'Visa dina egna frågor';
$string['rating:rate'] = 'Lägg till betyg till objekt';
$string['rating:view'] = 'Visa ditt sammanlagda betyg';
$string['rating:viewall'] = 'Visa alla \'råa\' bedömningar som har givits av enskilda';
$string['rating:viewany'] = 'Visa de sammanlagda bedömningar som någon har fått';
$string['resetrole'] = 'Återställ';
$string['resettingrole'] = 'Återställer roll \'{$a}\'';
$string['restore:configure'] = 'Konfigurera återställningsslternativ';
$string['restore:createuser'] = 'Skapa användare vid återställning';
$string['restore:restoreactivity'] = 'Återställningsaktiviteter';
$string['restore:restorecourse'] = 'Återställa kurser';
$string['restore:restoresection'] = 'Återställa sektioner';
$string['restore:restoretargetimport'] = 'Återställa från filer som är markerade för import';
$string['restore:rolldates'] = 'Får förskjuta konfigureringsdatum för aktiviteter vid återställning';
$string['restore:uploadfile'] = 'Ladda upp filer till områden för säkerhetskopiering';
$string['restore:userinfo'] = 'Återställa användardata';
$string['restore:viewautomatedfilearea'] = 'Återställa kurser från automatiska säkerhetskopieringar';
$string['risks'] = 'Risker';
$string['role:assign'] = 'Tilldela roller till användare';
$string['role:manage'] = 'Skapa och hantera roller';
$string['role:override'] = 'Åsidosätta behörigheter för andra';
$string['role:review'] = 'Granska andras behörigheter';
$string['role:safeoverride'] = 'Åsidosätta säkra behörigheter för andra';
$string['role:switchroles'] = 'Byta till andra roller';
$string['roleallowheader'] = 'Tillåt roll:';
$string['roleallowinfo'] = 'Välj en roll att lägga till listan med tillåtna roller i kontexten {$a->context}, funktionsbehörighet <code>{$a->cap}</code>:';
$string['roleassignments'] = 'Rolltilldelningar';
$string['roledefinitions'] = 'Rolldefinitioner';
$string['rolefullname'] = 'Namn';
$string['roleincontext'] = '{$a->role} i {$a->context}';
$string['roleprohibitheader'] = 'Förbjud roll';
$string['roleprohibitinfo'] = 'Välj en roll att lägga till listan med förbjudna roller i kontexten {$a->context}, funktionsbehörighet <code>{$a->cap}</code>:';
$string['rolerepreset'] = 'Använd förinställningar för roll';
$string['roleresetdefaults'] = 'Standardvärden';
$string['roleresetrole'] = 'Använd roll eller arketyp';
$string['rolerisks'] = 'Rollrisker';
$string['roles'] = 'Roller';
$string['roles_help'] = 'En roll är en samling behörigheter som definierats för hela systemet och som du kan tilldela specifika användare i specifika sammanhang.';
$string['roleselect'] = 'Välj roll';
$string['rolesforuser'] = 'Roller för {$a}';
$string['roleshortname'] = 'Kortnamn';
$string['roleshortname_help'] = 'Kortnamnet för en roll är en lågnivåidentifierare där enbart alfanumeriska ASCII-tecken är tillåtna. Ändra inte kortnamnet på standardroller.';
$string['roletoassign'] = 'Roll att tilldela';
$string['roletooverride'] = 'Roll att åsidosätta';
$string['safeoverridenotice'] = 'OBS! Funktionsbehörigheter vilka medför högre risker är låsta eftersom du endast är behörig att åsidosätta säkra funktionsbehörigheter.';
$string['search:query'] = 'Utföra webbplatsövergripande sökningar';
$string['selectanotheruser'] = 'Välj annan användare';
$string['selectauser'] = 'Välj en användare';
$string['selectrole'] = 'Välj en roll';
$string['showallroles'] = 'Visa alla roller';
$string['showthisuserspermissions'] = 'Visa behörigheter';
$string['site:accessallgroups'] = 'Tillträde till alla grupper';
$string['site:approvecourse'] = 'Godkänna skapande av kurs';
$string['site:backup'] = 'Säkerhetskopiera kurser';
$string['site:config'] = 'Ändra webbplatskonfigurationen';
$string['site:configview'] = 'Visa hela trädet i webbplatsadministrationen (dock inte själva sidorna i det)';
$string['site:deleteanymessage'] = 'Ta bort valfria meddelanden på webbplatsen';
$string['site:deleteownmessage'] = 'Ta bort meddelanden skickade av och till användaren';
$string['site:doanything'] = 'Tillåten att göra allting';
$string['site:doclinks'] = 'Visa länkar till dokument utanför webbplatsen';
$string['site:forcelanguage'] = 'Åsidosätta kursspråk';
$string['site:import'] = 'Importera andra kurser i en kurs';
$string['site:maintenanceaccess'] = 'Nå webbplatsen då den är i underhållsläge';
$string['site:manageallmessaging'] = 'Lägga till, blockera eller tillåta kontakter för användare';
$string['site:manageblocks'] = 'Hantera block på en sida';
$string['site:managecontextlocks'] = 'Hantera frysning av context';
$string['site:messageanyuser'] = 'Förbigå användares egna inställningar rörande meddelanden till alla användare';
$string['site:mnetloginfromremote'] = 'Logga in från en annan applikation via MNet';
$string['site:mnetlogintoremote'] = 'Flytta till en annan applikation via MNet';
$string['site:readallmessages'] = 'Läsa alla meddelanden på webbplatsen';
$string['site:restore'] = 'Återställa kurser';
$string['site:senderrormessage'] = 'Skicka ett meddelande till supportansvarig användare från felmeddelande-sidan';
$string['site:sendmessage'] = 'Skicka meddelanden till vilken användare som helst';
$string['site:trustcontent'] = 'Lita på inskickat innehåll';
$string['site:uploadusers'] = 'Ladda upp nya användare från fil';
$string['site:viewanonymousevents'] = 'Visa anonyma händelser i rapporter';
$string['site:viewfullnames'] = 'Alltid se fullständiga användarnamn';
$string['site:viewparticipants'] = 'Visa deltagare';
$string['site:viewreports'] = 'Visa rapporter';
$string['site:viewuseridentity'] = 'Se den fullständiga användaridentiteten i listor';
$string['siteadministrators'] = 'Webbplatsadministratörer';
$string['tag:edit'] = 'Redigera befintliga etiketter';
$string['tag:editblocks'] = 'Redigera block på etikettsidor';
$string['tag:flag'] = 'Flagga etiketter som olämpliga';
$string['tag:manage'] = 'Hantera etiketter';
$string['thisnewrole'] = 'Den här nya rollen';
$string['thisusersroles'] = 'Den här användarens rolltilldelningar';
$string['unassignarole'] = 'Ta bort roll {$a}';
$string['unassignconfirm'] = 'Vill du verkligen ta bort rollen "{$a->role}" från "{$a->user}"?';
$string['unassignerror'] = 'Ett fel inträffade då rollen {$a->role} togs bort från användaren {$a->user}.';
$string['user:changeownpassword'] = 'Ändra eget lösenord';
$string['user:create'] = 'Skapa användare';
$string['user:delete'] = 'Ta bort användare';
$string['user:editmessageprofile'] = 'Redigera användarens meddelandeprofil';
$string['user:editownmessageprofile'] = 'Redigera egen meddelandeprofil';
$string['user:editownprofile'] = 'Redigera egen användarprofil';
$string['user:editprofile'] = 'Redigera användarprofil';
$string['user:ignoreuserquota'] = 'Ignorera gräns för användarkvot';
$string['user:loginas'] = 'Logga in som andra användare';
$string['user:manageblocks'] = 'Hantera block i andras användarprofil';
$string['user:manageownblocks'] = 'Hantera block i den egna publika användarprofilen';
$string['user:manageownfiles'] = 'Hantera filer i egna privata filareor';
$string['user:managesyspages'] = 'Konfigurera standardlayouten för publika användarprofilsidor';
$string['user:readuserblogs'] = 'Visa alla användarbloggar';
$string['user:readuserposts'] = 'Visa alla foruminlägg från användare';
$string['user:update'] = 'Uppdatera användarprofiler';
$string['user:viewalldetails'] = 'Visa fullständig användarinformation';
$string['user:viewdetails'] = 'Visa användarprofiler';
$string['user:viewhiddendetails'] = 'Visa dolda detaljer hos användare';
$string['user:viewlastip'] = 'Visa användarens senaste IP-adress';
$string['user:viewuseractivitiesreport'] = 'Visa användares aktivitetsrapporter';
$string['user:viewusergrades'] = 'Visa användares betyg';
$string['usersfrom'] = 'Användare från {$a}';
$string['usersfrommatching'] = 'Användare från {$a->contextname} som matchar \'{$a->search}\'';
$string['usersinthisx'] = 'Användare i {$a}';
$string['usersinthisxmatching'] = 'Användare i {$a->contextname} som matchar \'{$a->search}\'';
$string['userswithrole'] = 'Alla användare med en roll';
$string['userswiththisrole'] = 'Användare med rollen';
$string['useshowadvancedtochange'] = 'Använd \'Visa avancerat\' för att ändra';
$string['viewingdefinitionofrolex'] = 'Visar definitionen av rollen \'{$a}\'';
$string['viewrole'] = 'Visa rolldetaljer';
$string['webservice:createmobiletoken'] = 'Skapa webbtjänsttoken för mobil åtkomst';
$string['webservice:createtoken'] = 'Skapa webbtjänsttoken';
$string['webservice:managealltokens'] = 'Hantera alla användares webbtjänsttoken';
$string['whydoesuserhavecap'] = 'Varför har {$a->fullname} funktionsbehörigheten <code>{$a->capability}</code> i kontexten {$a->context}?';
$string['whydoesusernothavecap'] = 'Varför saknar {$a->fullname} funktionsbehörigheten <code>{$a->capability}</code> i kontexten {$a->context}?';
$string['xroleassignments'] = '{$a}’s roller';
$string['xuserswiththerole'] = 'Användare med rollen "{$a->role}"';
