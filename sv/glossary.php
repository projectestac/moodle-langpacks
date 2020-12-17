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
 * Strings for component 'glossary', language 'sv', version '3.8'.
 *
 * @package     glossary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Lägg till en kategori';
$string['addcomment'] = 'Lägg till kommentarer';
$string['addentry'] = 'Lägg till ord';
$string['addingcomment'] = 'Lägg till en kommentar';
$string['alias'] = 'Nyckelord';
$string['aliases'] = 'Synonymer';
$string['aliases_help'] = '<p>Varje bidrag kan ha vara kopplat till en lista med synomymer (eller alias).</p>

<p><b>Skriv in varje synonym (alias) på en ny rad</b> (inte separerad med komman).</p>

<p>De ord som används synonymt (alias) kan användas som alternativa sätt att referera till
bidraget.
   Till exempel, om du använder filtret för automatisk länkning av bidrag så kommer synonymerna att användas (liksom bidragets egentliga ledord) när det görs ett val att ord ska länka till detta bidrag.</p>';
$string['allcategories'] = 'Alla kategorier';
$string['allentries'] = 'ALLA';
$string['allowcomments'] = 'Tillåt kommentarer till ord';
$string['allowcomments_help'] = '<p>Du kan ange om det ska vara tillåtet eller inte att kommentera
bidrag till ord- och begreppslistan.</p>
<p>Du kan välja om den egenskapen ska vara aktiverad eller inte.</p>
<p>Distanslärare kan alltid lägga till kommentarer till bidrag till ord- och begreppslistor.</p>';
$string['allowduplicatedentries'] = 'Det är tillåtet dubbletter';
$string['allowduplicatedentries_help'] = 'Om aktiverad kan flera ord ha samma konceptnamn.';
$string['allowprintview'] = 'Tillåt visning av utskrift';
$string['allowprintview_help'] = 'Om detta är aktiverat får deltagarna en länk till en utskriftsvänlig version av ordlistan. Länken är alltid tillgänglig för lärare.';
$string['andmorenewentries'] = 'och ytterligare {$a} nya ord.';
$string['answer'] = 'Svar';
$string['approvaldisplayformat'] = 'Visningsformat för godkännande';
$string['approvaldisplayformat_help'] = 'När du godkänner ordlisteord kanske vill använda ett annat visningsformat';
$string['approve'] = 'Godkänn';
$string['areaattachment'] = 'Bilagor';
$string['areaentry'] = 'Definitioner';
$string['areyousuredelete'] = 'Är du säker på att du vill ta bort det här ordet?';
$string['areyousuredeletecomment'] = 'Är du säker på att du vill ta bort den här kommentaren?';
$string['areyousureexport'] = 'Är du säker på att du vill exportera det här ordet till';
$string['ascending'] = 'stigande';
$string['attachment'] = 'Bifogad fil';
$string['attachment_help'] = '<p>Som alternativ kan du bifoga EN fil från din dator
till varje enskilt bidrag i en ord- och begreppslista.
Denna fil laddas upp till servern och lagras tillsammans
med ditt bidrag</p>
<p>Detta är användbart när du vill visa en bild eller ett Word-dokument t.ex.</p>
<p>Denna fil kan vara i valfritt format men rekommendationen är ändå
att filen har ett namn med ett filtillägg på 3 tecken enligt standarden
för Internet som t.ex. .doc, .jpg osv.
Detta underlättar för dem som vill ladda ner och se dina bilagor i sina
webbläsare.</p>
<p>Om du redigerar om ett bidrag och bifogar en ny fil så kommer de tidigare
bilagorna till bidraget att ersättas med de nya.</p>
<p>Om du redigerar om ett bidrag med en bilaga och lämnar detta utrymme
tomt så kommer den ursprungliga bilagan att bli kvar.</p>';
$string['author'] = 'författare';
$string['authorview'] = 'Sök på författare';
$string['back'] = 'Tillbaka';
$string['cachedef_concepts'] = 'Begreppslänkning';
$string['cantinsertcat'] = 'Det går inte att lägga in en kategori';
$string['cantinsertrec'] = 'Det går inte att lägga in en post i databasen';
$string['cantinsertrel'] = 'Det går inte att lägga in ett bidrag till kategorin som bygger på relation';
$string['casesensitive'] = 'Det här bidraget gör <br />gör skillnad på stor och liten bokstav';
$string['casesensitive_help'] = '<p>Den h&auml;r inst&auml;llningen anger om ett bidrag ska vara s&ouml;kbart
med exakt samma storlek p&aring; bokst&auml;verna som det har f&ouml;r att
det ska l&auml;nkas automatiskt.</p>
<p>L&auml;gg m&auml;rke till att detta alternativ inte begr&auml;nsar det faktum
att ett begrepp kan vara inb&auml;ddat i ett annat. Anv&auml;nd alternativet
\'Matcha hela ord\' ist&auml;llet.</p>';
$string['cat'] = 'kategori';
$string['categories'] = 'Kategorier';
$string['category'] = 'Kategori';
$string['categorydeleted'] = 'Borttagen kategori';
$string['categoryview'] = 'Efter kategori';
$string['changeto'] = 'ändra till {$a}';
$string['cnfallowcomments'] = 'Ange huruvida en ord- och begreppslista som standardval ska acceptera kommentarer på bidrag';
$string['cnfallowdupentries'] = 'Definiera om en ordlista kommer att tillåta dubbletter standard';
$string['cnfapprovalstatus'] = 'Ange huruvida ett bidrag av studenter som standardval ska accepteras eller ej.';
$string['cnfcasesensitive'] = 'Ange huruvida ett bidrag som standardval ska vara skiftlägeskänsligt när det länkas';
$string['cnfdefaulthook'] = 'Välj visning av standardurvalet när ord- och begreppslistan visas första gången';
$string['cnfdefaultmode'] = 'Välj visning av standardramen när ord- och begreppslistan visas första gången';
$string['cnffullmatch'] = 'Ange huruvida ett bidrag som standardval ska matcha stor/liten bokstav i måltexten när det länkas';
$string['cnflinkentry'] = 'Ange huruvida ett bidrag som standardval ska länkas automatiskt';
$string['cnflinkglossaries'] = 'Ange huruvida en ord- och begreppslista som standardval ska länkas automatiskt';
$string['cnfrelatedview'] = 'Välj visningsformat för automatisk länkning och bidrag';
$string['cnfshowgroup'] = 'Ange om grupp\'brytningen\' ska visas eller inte';
$string['cnfsortkey'] = 'Ange sorteringsnyckeln som standardval';
$string['cnfsortorder'] = 'Ange sorteringsordningen som standardval';
$string['cnfstudentcanpost'] = 'Ange huruvida studenterna/eleverna/deltagarna/de lärande som standardval ska kunna lägga in bidrag';
$string['cnftabs'] = 'Välj synliga flikar för detta ordlisteformat';
$string['comment'] = 'Kommentar';
$string['commentdeleted'] = 'Kommentaren har tagits bort';
$string['comments'] = 'Kommentarer';
$string['commentson'] = 'Kommentarer aktiverade';
$string['commentupdated'] = 'Kommentaren har uppdaterats';
$string['completionentries'] = 'Studenter måste bidra med ord:';
$string['completionentriesdesc'] = 'Deltagaren måste bidra med minst {$a} ord';
$string['completionentriesgroup'] = 'Kräv ord';
$string['concept'] = 'Begrepp';
$string['concepts'] = 'Begrepp';
$string['configenablerssfeeds'] = 'Den här omkopplaren kommer att aktivera RSS-flöde för alla ord- och begreppslistor. Du  måste fortfarande aktivera flödet manuellt i inställningarna för varje enskild ord- och begreppslista.';
$string['current'] = 'För närvarande sorterad {$a}';
$string['currentglossary'] = 'Aktuell ord- och begreppslista';
$string['date'] = 'datum';
$string['dateview'] = 'Bläddra enligt datum';
$string['defaultapproval'] = 'Standardval för godkännande';
$string['defaultapproval_help'] = '<p>Du kan ange om bidrag fr&aring;n studenter ska vara automatiskt tillg&auml;ngliga f&ouml;r alla eller om bidragen f&ouml;rst ska godk&auml;nnas av l&auml;raren.</p>';
$string['defaulthook'] = 'Förvald \'krok\'';
$string['defaultmode'] = 'Förvalt läge';
$string['defaultsortkey'] = 'Förvald nyckel för sortering';
$string['defaultsortorder'] = 'Förvald ordning för sortering';
$string['definition'] = 'Definition';
$string['definitions'] = 'Definitioner';
$string['deletecategory'] = 'Ta bort kategori';
$string['deleteentry'] = 'Ta bort bidrag';
$string['deleteentrya'] = 'Ta bort uppslagsord/inlägg: {$a}';
$string['deletenotenrolled'] = 'Ta bort bidrag gjorda av användare som inte är registrerade';
$string['deletingcomment'] = 'Tar bort kommentar';
$string['deletingnoneemptycategory'] = 'Om du tar bort den här kategorin så bidragen i den inte att tas bort - istället kommer de att markeras som inte-kategoriserade.';
$string['descending'] = '(fallande)';
$string['destination'] = 'Mål för importerade bidrag';
$string['destination_help'] = '<p>Du kan ange vart Du vill importera ett bidrag:</p>
<ul>
<li><strong>Den aktuella ord- och begreppslistan:</strong> Detta kommer att lägga till de importerade bidragen till
den för tillfället öppna ord- och begreppslistan.</li>
<li><strong>Ny ord- och begreppslista:</strong> Detta kommer att skapa en ord- och begreppslista
som baseras på den information som som finns i den markerade importfilen och de nya bidragen kommer att infogas i den.</li>
</ul>';
$string['disapprove'] = 'Återkalla godkännande';
$string['displayformat'] = 'Format för visning';
$string['displayformat_help'] = '<p>Systemet har tre inbyggda format för att visa bidrag.
Du kan skapa ditt eget format om du vill.</p>
<p>Standardinställningen innebär en ganska enkel
form av presentation. Det ser ut som en vanlig ordlista (ordboksartikel).</p>
<p>Det andra visningsformatet visar bidraget i ett forumliknande format,
utan data om författaren.</p>
<p>Och det tredje visar också bidraget i i ett forumliknande format,
men med data om författaren.</p>
<hr />
<p>Om du vill skapa ditt eget format så ska du skapa en .php-fil
och ge den ett nummer som namn. Titta efter i mod/glossary/format för att
få veta vilket det nästa numret bör vara.</p>
<p>Skapa sedan en funktion som du kallar
<b>glossary_print_entry_by_format($course, $cm, $glossary,
 $entry)</b> och fyll på med all din kreativitet.</p>
<p>Det sista steget är att lägga in ett bidrag till varje språkpaket
som du använder. Det kallar du <b>displayformat[number]</b>,
och ger det en meningsfull beskrivning.</p>';
$string['displayformatcontinuous'] = 'Fortlöpande men utan författare';
$string['displayformatdictionary'] = 'Enkel ordboksstil';
$string['displayformatencyclopedia'] = 'Encyklopedi';
$string['displayformatentrylist'] = 'Lista över bidrag';
$string['displayformatfaq'] = 'FAQ';
$string['displayformatfullwithauthor'] = 'Komplett med författare';
$string['displayformatfullwithoutauthor'] = 'Komplett utan författare';
$string['displayformats'] = 'Format för visning';
$string['displayformatssetup'] = 'Visa hur formaten har skapats';
$string['duplicatecategory'] = 'Dubblera kategori';
$string['duplicateentry'] = 'Dubblerat bidrag';
$string['editalways'] = 'Tillåt alltid redigering';
$string['editalways_help'] = '<p>Det här alternativet låter dig avgöra om studenterna/eleverna/deltagarna/de lärande
ska kunna redigera sina bidrag när som helst.</p>
<br />Du kan välja:
<ul>
<li><b>Ja:</b> Bidrag går alltid att redigera.</li>
<li><b>Nej:</b> Bidrag går bara att redigera inom den angivna tiden.</li>
</ul>';
$string['editcategories'] = 'Redigera kategorier';
$string['editcategory'] = 'Redigera kategori';
$string['editentry'] = 'Redigera bidrag';
$string['editentrya'] = 'Redigera uppslagsord/inlägg: {$a}';
$string['editingcomment'] = 'Redigerar kommentar';
$string['entbypage'] = 'Bidrag visade per sida';
$string['entries'] = 'Ord';
$string['entrieswithoutcategory'] = 'Ord utan kategori';
$string['entry'] = 'bidrag';
$string['entryalreadyexist'] = 'Bidraget finns redan';
$string['entryapproved'] = 'Det här bidraget har godkänts';
$string['entrydeleted'] = 'Bidraget är borttaget';
$string['entryexported'] = 'Bidraget har framgångsrikt exporterats';
$string['entryishidden'] = '(denna post är f.n. dold)';
$string['entryleveldefaultsettings'] = 'Standardval för inställningar på ingångsnivån ';
$string['entrylink'] = 'Länk till uppslagsord/inlägg: {$a}';
$string['entrynotapproved'] = 'Uppslagsordet/inlägget har inte godkänts.';
$string['entrysaved'] = 'Det här bidraget har sparats';
$string['entryupdated'] = 'Det här bidraget har uppdaterats';
$string['entryusedynalink'] = 'Det här bidraget bör<br /> vara automatiskt länkat';
$string['entryusedynalink_help'] = '<p>Genom att aktivera det h&auml;r alternativet s&aring; kommer bidraget automatiskt
att l&auml;nkas n&auml;rhelst begrepp, ord och fraser dyker n&aring;gon annanstans i samma kurs.
Detta g&auml;ller f&ouml;r inl&auml;gg i forum, interna resurser, veckovisa sammanfattningar osv. </p>
<p>Om Du inte vill att en viss text ska l&auml;nkas (i ett inl&auml;gg i ett forum t ex)
d&aring; b&ouml;r Du l&auml;gga till  &lt;nolink&gt; och &lt;/nolink&gt; taggar runt texten.</p>
<p>F&ouml;r att Du ska kunna aktivera detta alternativ s&aring; m&aring;ste automatisk l&auml;nkning vara aktiverad p&aring; niv&aring;n ord- och begreppslista.</p>';
$string['errcannoteditothers'] = 'Du kan inte redigera andra personers bidrag.';
$string['errconceptalreadyexists'] = 'Det här begreppet finns redan med. Det är inte tillåtet med dubbleringar i den här ord- och begreppslistan.';
$string['errdeltimeexpired'] = 'Du kan inte ta bort det här. Tiden har gått ut!';
$string['erredittimeexpired'] = 'Tiden för att redigera det här bidraget har gått ut.';
$string['errorparsingxml'] = 'Det uppstod fel när filen skulle parsas. Säkerställ att det är en giltig syntax för XML.';
$string['eventcategorycreated'] = 'Katagori skapad';
$string['eventcategorydeleted'] = 'Kategori borttagen';
$string['eventcategoryupdated'] = 'Kategori uppdaterad';
$string['evententryapproved'] = 'Uppslagsordet/inlägget har godkänts';
$string['evententrycreated'] = 'Uppslagsord/inlägg skapat';
$string['evententrydeleted'] = 'Uppslagsord/inlägg borttaget';
$string['evententrydisapproved'] = 'Uppslagsordet/inlägget godkänns inte.';
$string['evententryupdated'] = 'Uppslagsordet/inlägget har uppdaterats.';
$string['evententryviewed'] = 'Uppslagsordet/inlägget har visats.';
$string['explainaddentry'] = 'Lägg till ett nytt bidrag till den aktuella ord- och begreppslistan.<br />\'Begrepp\' och \'definition\' är obligatoriska fält.';
$string['explainall'] = '<b>ALLA</b> kommer att visa alla bidrag på en sida';
$string['explainalphabet'] = 'Välj den sida du vill söka efter<p>';
$string['explainexport'] = 'En fil har skapats.<br />Ladda ned den och spara den på ett säkert ställe. Du kan importera den när helst du vill, i den här kursen eller i någon annan.';
$string['explainimport'] = 'Du måste ange vilken fil som ska importeras och villkoren för processen.<p>Skicka in din förfrågan och titta på resultaten igen.</p>';
$string['explainspecial'] = 'Visa alla begrepp som inte börjar med en bokstav';
$string['exportedentry'] = 'Exporterat bidrag';
$string['exportentries'] = 'Exportera ord';
$string['exportentriestoxml'] = 'Exportera orden till en XML-fil';
$string['exportfile'] = 'Exportera bidrag till fil';
$string['exportglossary'] = 'Exportera ord- och begreppslista';
$string['exporttomainglossary'] = 'Exportera till den övergripande (förklarande) ord- och begreppslistan';
$string['filetoimport'] = 'Fil att importera';
$string['filetoimport_help'] = '<p>Markera den XML-fil på din dator som innehåller de bidrag som du vill importera.</p>';
$string['fillfields'] = '\'Begrepp\' och definition\' är obligatoriska fält';
$string['filtername'] = 'Länka ord- och begreppslista automatiskt';
$string['fullmatch'] = 'Matcha hela ord bara<br /><small>när de är automatiskt länkade</small>';
$string['fullmatch_help'] = '<p>Om du anger att ett bidrag kan länkas automatiskt
från andra resurser, så kommer bara de ord som
matchar detta bidrag fullständigt att länkas.
Om du ställer in det här alternativet alltså.</p>
<p>Lägg  märke till att det här alternativet inte
kräver att bokstäverna har samma storlek. Använd
istället alternativet \'Skiftlägeskänslig\' för det.</p>';
$string['glossary:addinstance'] = 'Lägg till en ny ordbok.';
$string['glossary:approve'] = 'Godkänn icke-godkända bidrag';
$string['glossary:comment'] = 'Skapa kommentarer';
$string['glossary:export'] = 'Exportera bidrag';
$string['glossary:exportentry'] = 'Exportera ett enskilt bidrag';
$string['glossary:exportownentry'] = 'Exportera ett enskilt eget bidrag';
$string['glossary:import'] = 'Importera bidrag';
$string['glossary:managecategories'] = 'Administrera kategorier';
$string['glossary:managecomments'] = 'Administrera kommentarer';
$string['glossary:manageentries'] = 'Hantera ordlisteord';
$string['glossary:rate'] = 'Bedöm/värdera inlägg';
$string['glossary:view'] = 'Visa ord-och begreppslista';
$string['glossary:viewallratings'] = 'Visa alla betyg/omdömen som har avgivits av individer';
$string['glossary:viewanyrating'] = 'Visa alla betyg/omdömen som någon har fått.';
$string['glossary:viewrating'] = 'Visa de sammanlagda bedömningar/värderingar som du har fått';
$string['glossary:write'] = 'Skapa nya bidrag';
$string['glossaryleveldefaultsettings'] = 'Standardval för inställningar på den globala nivån';
$string['glossarytype'] = 'Typ av ord- och begreppslista';
$string['glossarytype_help'] = '<p>Systemet tillåter att bidrag exporteras till den övergripande
ord- och begreppslistan för kursen
från vilken sekundär ord- och begreppslista som helst.</p>
<p>För att göra detta bör du ange vilken ord- och begreppslista det är
som är den övergripande.</p>
<p>OBS! Du kan bara ha en övergripande ord- och begreppslista per kurs.</p>

<p>Före Moodle 1.7, kunde bara (distans)lärare redigera den övergripande ord- och begreppslistan för kursen. I Moodle
1.7 och senare, kan du påverka detta med hjälp av att tilldela användare roller med utökade
rättigheter.</p>';
$string['guestnoedit'] = 'Gäster har inte tillstånd att redigera ord- coh begreppslistor';
$string['importcategories'] = 'Importera kategorier';
$string['importedcategories'] = 'Importerade kategorier';
$string['importedentries'] = 'Importerade ord';
$string['importentries'] = 'Importera ord';
$string['importentriesfromxml'] = 'Importera ord från XML-fil';
$string['includegroupbreaks'] = 'Ta med gruppbrytningar';
$string['isglobal'] = 'Är det här en global ord- och begreppslista?';
$string['isglobal_help'] = '<p>Systemet med ord- och begreppslistor låter dig definiera
begrepp som skulle kunna vara tillgängliga på hela
webbsajten. De beskrivs som globala.</p>
<p>Du behöver alltså ange vilken ord- och begreppslista som ska
vara global.</p>
<p>Du kan ha så många globala ord- och begreppslistor du vill, och
de kan höra till vilken kurs som helst. Alla övriga regler är
giltiga även för den här typen.</p>
<p>Lägg märke till att endast administratörer kan
skapa globala ord- och begreppslistor.</p>';
$string['letter'] = 'bokstav';
$string['linkcategory'] = 'Länka den här kategorin automatiskt';
$string['linkcategory_help'] = '<p>Du kan ange ifall du vill att kategorierna ska vara
automatiskt länkade eller inte.</p>
<p>OBS! Länkning av kategorier baseras på skiftlägeskänslig, komplett matchning.</p>';
$string['linking'] = 'Automatisk länkning';
$string['mainglossary'] = 'Den övergripande (förklarande) ord- och begreppslistan';
$string['maxtimehaspassed'] = 'Maxtiden för att redigera den här kommentaren har tyvärr gått ut ({$a})';
$string['modulename'] = 'Ord- och begreppslista';
$string['modulename_help'] = 'Modulen ord- och begreppslista gör det möjligt för deltagare att skapa och underhålla en lista över definitioner. Bidragen går att länka automatiskt varhelst de listade orden och fraserna uppträder i kursen.  ';
$string['modulenameplural'] = 'Ord- och begreppslistor';
$string['newentries'] = 'Nya ord i ordlistan';
$string['newglossary'] = 'Ny ord- och begreppslista';
$string['newglossarycreated'] = 'En ny ord- och begreppslista har skapats';
$string['newglossaryentries'] = 'Nya ord i ordlistan:';
$string['nocomment'] = 'Kunde inte hitta någon kommentar';
$string['nocomments'] = '(Det gick inte att hitta någon kommentar till det här bidraget)';
$string['noconceptfound'] = 'Det gick inte att hitta något begrepp eller definition';
$string['noentries'] = 'Hittade inga ord i det här avsnittet';
$string['noentry'] = 'Hittade inget bidrag';
$string['nopermissiontodelcomment'] = 'Du kan inte ta bort andra användares kommentarer!';
$string['nopermissiontodelinglossary'] = 'Du kan inte lämna kommentarer i den här ord- och bergreppslistan!';
$string['nopermissiontoviewresult'] = 'Du kan bara söka resultat i dina egna bidrag';
$string['notapproved'] = 'Det här bidraget till ord/begreppslistan har ännu inte godkänts.';
$string['notcategorised'] = 'Inte indelad i kategori';
$string['numberofentries'] = 'Antal ord';
$string['onebyline'] = '(en per rad)';
$string['pluginadministration'] = 'Administration av ord- och begreppslista';
$string['pluginname'] = 'Ord- och begreppslista';
$string['popupformat'] = 'Popup-format';
$string['print'] = 'Skriv ut';
$string['printerfriendly'] = 'Utskriftsvänlig version';
$string['printviewnotallowed'] = 'Visning av utskrift är inte tillåten.';
$string['privacy:metadata:glossary_entries'] = 'Information om användarens ord för en given ordliste-aktivitet';
$string['privacy:metadata:glossary_entries:attachment'] = 'Den bilaga till ordet som användaren lade till';
$string['privacy:metadata:glossary_entries:concept'] = 'Konceptet för ordet användare lade till';
$string['privacy:metadata:glossary_entries:definition'] = 'Definitionen av ordet användaren lade till';
$string['privacy:metadata:glossary_entries:glossaryid'] = 'ID:t för ordlisteaktiviteten';
$string['privacy:metadata:glossary_entries:timemodified'] = 'Tidsstämpel som anger när ordlistans post ändrades av användaren';
$string['privacy:metadata:glossary_entries:userid'] = 'Användar-ID:t för användaren som lägger till detta ord i ordlistan';
$string['question'] = 'Fråga';
$string['rejectedentries'] = 'Nekade ord';
$string['rejectionrpt'] = 'Rapport över icke antagna bidrag';
$string['resetglossaries'] = 'Ta bort bidrag från';
$string['resetglossariesall'] = 'Ta bort bidrag från alla ord- och begreppslistor';
$string['rssarticles'] = 'Antal aktuella RSS-artiklar';
$string['rssarticles_help'] = '<p>Det här alternativet gör det möjligt för dig att markera det antal
artiklar som du vill ta med i RSS-flödet.</p>
<p>Ett antal mellan 5 och 20 bör vara lagom för de flesta ord- och begreppslistor.
 Öka detta antal om ord- och begreppslistan används mycket flitigt.</p>';
$string['rsssubscriberss'] = 'Visa RSS-flöden för \'{$a}\' koncept';
$string['rsstype'] = 'RSS-flöde för den här aktiviteten';
$string['rsstype_help'] = '<p>Det här alternativet låter dig aktivera RSS-flödentill denna ord- och begreppslista.</p>
<p>Du kan välja mellan två sorters matningar:</p>
<ul>
<li><b>Med författare:</b>Om du använder detta, så kommer de genererade flödena att ta med
namnet på författaren i varje artikel.</li>
<li><b>Utan författare:</b>Om du använder detta, så kommer de genererade flödena INTE att ta med
namnet på författaren i varje artikel.</li>
</ul>';
$string['search:entry'] = 'Ordbok - uppslagsord/inlägg';
$string['searchindefinition'] = 'Sök i begrepp OCH definitioner?';
$string['secondaryglossary'] = 'sekundär ord- och begreppslista';
$string['showall'] = 'Visa länken \'ALLA\'';
$string['showall_help'] = '<p>Du kan ställa in de sätt man kan använda
för att söka sig igenom en ord- och begreppslista.
Att söka på kategorier och datum går alltid.
Du kan dock ange ytterligare tre alternativ:</p>
<p><b>VISA SPECIAL</b>
<br />
Aktivera eller inaktivera sökning med hjälp av
specialtecken som @, #, etc.</p>
<p><b>VISA ALFABETET</b>
<br />
Aktivera eller inaktivera sökning med hjälp av bokstäver.</p>
<p><b>VISA ALLA</b>
<br />
Aktivera eller inaktivera sökning med hjälp av att
visa alla bidrag på en gång.</p>';
$string['showalphabet'] = 'Visa alfabetet';
$string['showalphabet_help'] = '<p>Du kan ställa in de sätt man kan använda
för att söka sig igenom en ord- och begreppslista.
Att söka på kategorier och datum går alltid.
Du kan dock ange ytterligare tre alternativ:</p>
<p><b>VISA SPECIAL</b>
<br />
Aktivera eller inaktivera sökning med hjälp av
specialtecken som @, #, etc.</p>
<p><b>VISA ALFABETET</b>
<br />
Aktivera eller inaktivera sökning med hjälp av bokstäver.</p>
<p><b>VISA ALLA</b>
<br />
Aktivera eller inaktivera sökning med hjälp av att
visa alla bidrag på en gång.</p>';
$string['showspecial'] = 'Visa länken \'Special\'';
$string['showspecial_help'] = '<p>Du kan ställa in de sätt man kan använda
för att söka sig igenom en ord- och begreppslista.
Att söka på kategorier och datum går alltid.
Du kan dock ange ytterligare tre alternativ:</p>
<p><b>VISA SPECIAL</b>
<br />
Aktivera eller inaktivera sökning med hjälp av
specialtecken som @, #, etc.</p>
<p><b>VISA ALFABETET</b>
<br />
Aktivera eller inaktivera sökning med hjälp av bokstäver.</p>
<p><b>VISA ALLA</b>
<br />
Aktivera eller inaktivera sökning med hjälp av att
visa alla bidrag på en gång.</p>';
$string['sortby'] = 'Sortera efter';
$string['sortbycreation'] = 'Enligt datum för tillkomst';
$string['sortbylastupdate'] = 'Enligt senaste uppdateringen';
$string['sortchronogically'] = 'Sortera kronologiskt';
$string['special'] = 'Special';
$string['standardview'] = 'Standardvy';
$string['studentcanpost'] = 'Studenter kan lägga till bidrag';
$string['tagarea_glossary_entries'] = 'Ordboksinlägg';
$string['totalentries'] = 'Totalt antal ord';
$string['usedynalink'] = 'Länka bidrag automatiskt';
$string['usedynalink_help'] = '<p align="center"><b>
Att automatiskt l&auml;nka ord- och begreppslistor till andra moduler </b></p>
<p>Om Du anger att en ord- och begreppslista ska l&auml;nkas automatiskt s&aring;
kommer de ber&ouml;rda bidragen automatiskt att l&auml;nkas n&auml;rhelst de
dyker upp i andra resurser (forum, kommentarer osv)</p>
<p>Om Du inte vill att ett visst bidrag ska l&auml;nkas
s&aring; b&ouml;r Du b&auml;dda in det mellan taggarna
&lt;nolink> och &lt;/nolink> i HTML-(k&auml;ll)koden.</p>
<p>Om det &auml;r en kategori som har hittats s&aring; kommer den ocks&aring;
att l&auml;nkas. L&auml;gg m&auml;rke till att l&auml;nkning av kategorier
&auml;r skiftl&auml;gesk&auml;nsligt.</p>';
$string['waitingapproval'] = 'Väntar på att bli accepterad';
$string['warningstudentcapost'] = '(Gäller bara om det inte handlar om den övergripande ord- och  begreppslistan';
$string['withauthor'] = 'Begrepp med författare';
$string['withoutauthor'] = 'Begrepp utan författare';
$string['writtenby'] = 'Av';
$string['youarenottheauthor'] = 'Det är inte du som har författat den här kommentaren och därför får du inte redigera den.';
