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
 * Strings for component 'format_tiles', language 'sv', version '4.4'.
 *
 * @package     format_tiles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsections'] = 'Lägg till paneler';
$string['admintools'] = 'Administratörsverktyg';
$string['all'] = 'Alla';
$string['allcomplete'] = 'Alla slutförda';
$string['allcoursescomplypalette'] = 'Alla kurser har redan tillåtna panelfärger. Inget att återställa. Se till att du sparar eventuella ändringar i tillåtna färger innan du klickar på återställ.';
$string['allowphototiles'] = 'Tillåt fotopaneler';
$string['allowphototiles_desc'] = 'Om det här alternativet väljs kan lärare ladda upp ett foto som en panelbakgrund.  De kommer fortfarande att kunna använda standardpanelikoner i samma kurs. (Om inget annat är markerat tillåts endast panelikoner och övriga inställningar för fotopaneler nedan ignoreras.)';
$string['allowsubtilesview'] = 'Tillåt visning av underpaneler';
$string['allowsubtilesview_desc'] = 'Tillåt användning av en kursinställning som, om den är markerad, på en panel visar aktiviteter (utom etiketter) som underpaneler i stället för standardlistan';
$string['alternativelink'] = 'alternativ länk';
$string['areyousure'] = 'Är du säker?';
$string['asfraction'] = 'Visa som bråk';
$string['aspectratiotootallorwide'] = 'Den uppladdade bilden har sparats, men dubbelkontrollera detta eftersom den kan vara <strong>{$a->tallorwide}</strong>. Om det inte ser rätt ut, beskär den till standard liggande format och ladda upp den igen.  T.ex. passar 300 x 200 pixlar bra.';
$string['aspercentagedial'] = 'Visa som % i en cirkel';
$string['assumedatastoreconsent'] = 'Antag att samtycke givits till att lokal webbläsardata får lagras';
$string['assumedatastoreconsent_desc'] = 'Om det här alternativet väljs kommer användaren <b>inte</b> se en dialog som ber om samtycke till att lagra lokal webbläsardata';
$string['backupfailed'] = 'Säkerhetskopieringen misslyckades';
$string['basecolour'] = 'Panelfärger';
$string['basecolour_help'] = 'Den här färguppsättningen här kommer att appliceras på alla paneler i kursen.  (De tillgängliga färgerna bestäms av webbplatsadministratören via sidan Inställningar för Panelpluginmodulen).';
$string['brandcolour'] = 'Varumärkesfärg';
$string['canceltask'] = 'Avbryt åtgärd';
$string['changedcolour'] = 'Panelfärgerna återställdes till standard för <strong>{$a}</strong>';
$string['checkforproblemcourses'] = 'Kontrollera och åtgärda problemkurser';
$string['clickiffailstoload'] = 'Kontrollera om sidan inte kan laddas';
$string['close'] = 'Stäng';
$string['collapse'] = 'Fäll ihop sektion';
$string['collapsesections'] = 'Fäll ihop alla';
$string['colourblue'] = 'Blå';
$string['colourdarkgreen'] = 'Mörkgrön';
$string['colourgreen'] = 'Grön';
$string['colourlightblue'] = 'Ljusblå';
$string['colourname_descr'] = 'Visningsnamn för färgen (namnet syns normalt sett inte för användarna - de ser istället en färgpalett)';
$string['colournamegeneral'] = 'Visningsnamn för ovanstående färg';
$string['colourpurple'] = 'Lila';
$string['colourred'] = 'Röd';
$string['colours'] = 'Färger';
$string['complete'] = 'slutförd';
$string['complete-n-auto'] = 'Aktivitet ej slutförd. Den kommer markeras som slutförd när samtliga slutförandevillkor uppfyllts. Du kan inte ändra detta.';
$string['complete-y-auto'] = 'Aktivitet slutförd. Den markerades som slutförd då du uppfyllde samtliga slutförandevillkor. Du kan inte ändra detta.';
$string['completion_help'] = 'En bock till höger om en aktivitet kan användas för att ange när aktiviteten är klar (om ej klar visas en tom cirkel). <br><br>
Beroende på inställningen kan en bock visas automatiskt när du har slutfört aktiviteten enligt de villkor som läraren har angett. <br><br>
I andra fall kan du klicka på den tomma cirkeln när du tror att du har slutfört aktiviteten och det kommer att bli en fast grön bock. (Om du ändrar dig tas bocken bort om du klickar på den igen.)';
$string['completionswitchhelp'] = '<p>Du har valt att visa slutförandespårning på varje panel. Vi har därför ställt in <em>Slutförandespårning &#10132;  Aktivera</em> till "Ja" längre ned på den här sidan.</p>
<p>Dessutom måste du växla till slutförandespårning för <strong>varje objekt</strong> som du spårar. För en PDF-fil klickar du på "Redigera inställningar", tittar under "Slutför aktivitet" och väljer den inställning du behöver.</p>
<p>Du kan också <strong>massredigera</strong> detta som förklaras i <a href="https://docs.moodle.org/35/en/Activity_completion_settings" target="_blank">detaljerad förklaring av slutförandespårning på moodle.org</a></p>';
$string['completionwarning'] = 'Du har slutförandespårning påslagen på kursnivå, men på individuell aktivitetsnivå har inga objekt aktiverat spårning, så det finns inget att spåra.';
$string['completionwarning_changeinbulk'] = 'Massredigera';
$string['completionwarning_help'] = 'Du måste göra enskilda objekt spårbara genom att redigera dem (under <em>Slutförande av aktivitet > Spåra slutförande</em>) eller så kan du massredigera detta i under <em>Kursadministration > Kursavslut > Massredigera aktivitetsslutförande';
$string['contact'] = 'Håll kontakten';
$string['contactdeveloper'] = 'Kontakta utvecklaren';
$string['contents'] = 'Innehåll';
$string['courseshowtileprogress'] = 'Förlopp på varje panel';
$string['courseshowtileprogress_error'] = 'Inställningen <em>\'Slutförandespårning &#10132; Aktivera slutförandespårning\'</em> är satt till <em>\'Nej\'</em> (se längre ned på denna sida) vilket står i konflikt med denna inställning. Om du vill visa förlopp på panelerna ange istället den inställningen till <em>\'Ja\'</em>.  I annat fall behöver du sätta den här inställningen till <em>\'Nej\'</em>.';
$string['courseshowtileprogress_help'] = '<p>Om aktiverat visas användarens förlopp på varje panel, antingen som ett <em>bråk</em> (t.ex. "Förlopp 2/10" som betyder 2 av 10 aktiviteter slutförda) eller som en <em>procentsats</em> i en cirkel.</p> <p>Detta kan endast användas om <em>"Slutförandebevakning ➔ Slutförandebevakning"</em> är satt till "Ja".</p> <p>Om det inte finns några spårbara aktiviteter inom en viss panel visas ingen indikator för den panelen.</p>';
$string['courseshowtileprogress_link'] = 'Activity_completion_settings#Activity_settings';
$string['coursetoomanysections'] = 'Varning till redaktörer: den här kursen har fler paneler än vad som är tillåtet.  Högst {$a->max} visas för deltagarna (ned till "{$a->tilename}") (redaktörer kan se mer).';
$string['courseusebarforheadings'] = 'Förtydliga rubriker med färgad flik';
$string['courseusebarforheadings_help'] = 'Visa en färgad flik till vänster om rubriken i kursen när ett rubrikformat är markerat i textredigeraren';
$string['courseusesubtiles'] = 'Använd underpaneler för aktiviteter';
$string['courseusesubtiles_help'] = 'I varje panel - visa varje aktivitet som en underpanel i stället för som en lista med aktiviteter. Detta gäller inte etiketter som inte visas som underpaneler men som kan användas som rubriker mellan paneler.';
$string['currentsection'] = 'Denna panel';
$string['customcss'] = 'Anpassad CSS';
$string['customcssdesc'] = 'Anpassad CSS som ska tillämpas på avsnittet kursinnehåll om kursformat används. Detta kommer inte att valideras, så var noga med att ange giltig kod. Till exempel: <p>.section { color: red; }</p> <p>li.activity.subtile.resource.pdf { background-color: orange !important; }</p>';
$string['datapref'] = 'Sekretessinställningar';
$string['datapreferror'] = 'Datainställningsfunktionen är tillgänglig om du har JavaScript aktiverat i webbläsaren. Annars kan datalagring inte aktiveras.';
$string['dataprefquestion'] = '<p>För att göra den här webbplatsen enklare att använda lagrar vi funktionell information i din webbläsare, till exempel ID-numret för den senaste panelen du öppnade. Denna information finns kvar på din enhet en kort stund i det fall du skulle besöka sidan igen. <strong>Vi använder den inte för spårning</strong>.</p><p><strong>Är detta OK?</strong></p><p>Vi kommer att komma ihåg ditt val tills du rensar din surfhistorik. Om du vill avaktivera detta klickar du på "Avbryt".</p>';
$string['defaultthiscourse'] = 'Standard för denna kurs';
$string['defaulttilecolour'] = 'Standardpanelfärg';
$string['defaulttileicon'] = 'Panelikon';
$string['defaulttileicon_help'] = 'Ikonen som väljs här visas som standard på <em>alla</em>-paneler i den här kursen. Enskilda paneler kan ha en annan ikon markerad, eller ett bakgrundsfoto, med hjälp av de olika inställningen på panelnivå.';
$string['deleteemptytiles'] = 'Ta bort tomma paneler';
$string['deleteimage'] = 'Ta bort bild';
$string['deletesection'] = 'Ta bort panel';
$string['deletetile'] = 'Ta bort panel';
$string['developedby'] = '"Paneler" är utvecklat av {$a}';
$string['developer'] = 'Utvecklare';
$string['disabledbyadmin'] = 'Inaktiverad av webbplatsadministratören';
$string['displayfilterbar'] = 'Filterrad';
$string['displayfilterbar_error'] = 'Om du inte har ställt in resultat för den här kursen kan du bara visa ett filterfält baserat på panelnummer och inte baserat på resultat.  Skapa några resultat först och kom sedan tillbaka hit. Se';
$string['displayfilterbar_help'] = '<p>Om markerad visas automatiskt en rad knappar före panelskärmen i en kurs som användare kan klicka på för att filtrera ner paneler till vissa intervall</p><p>När "baserat på panelnummer" är valt kommer en serie knappar att visas t.ex. en knapp för paneler 1-4, en knapp för paneler 5-8 etc.</p> <p>När "baserat på kursresultat" väljs kommer det att finnas en knapp per kursresultat. Varje panel kan tilldelas ett givet resultat (och därmed till en viss knapp) från panelens inställningssida.</p>';
$string['displayfilterbar_link'] = 'Outcomes';
$string['displaytitle_mod_doc'] = 'Word-dokument';
$string['displaytitle_mod_html'] = 'Webbsida';
$string['displaytitle_mod_jpeg'] = 'Bild';
$string['displaytitle_mod_mp3'] = 'Ljud';
$string['displaytitle_mod_mp4'] = 'Video';
$string['displaytitle_mod_pdf'] = 'PDF';
$string['displaytitle_mod_ppt'] = 'PowerPoint-presentation';
$string['displaytitle_mod_txt'] = 'Text';
$string['displaytitle_mod_xls'] = 'Kalkylblad';
$string['displaytitle_mod_zip'] = 'ZIP-fil';
$string['documentation'] = 'Dokumentation';
$string['documentationurl'] = 'URL till dokumentation';
$string['documentationurl_descr'] = 'URL till platsen där dokumentationen för Paneler finns.';
$string['download'] = 'Hämta';
$string['editoradvicesubtiles'] = 'I den här versionen av pluginmodulen Panelformat visas aktiviteter som underpaneler endast om redigeringsläget är inaktiverat';
$string['editsection'] = 'Redigera titel';
$string['editsectionname'] = 'Redigera namn';
$string['embeddedurlerror'] = 'Om den externa webbplatsen inte kan ansluta i fönstret ovan, använd denna:';
$string['enablelinebreakfilter'] = 'Aktivera radbrytningsfilter';
$string['enablelinebreakfilter_desc'] = 'Filtrera panelrubriker efter det osynliga icke-radbrytande {$a}-tecknet och, om det finns och titelrubriken är lång, ersätt det med "-" så att raden kan brytas.  Annars ersätt det med ingenting (dvs. ingen radbrytning).';
$string['entersection'] = 'Ange sektion';
$string['existingimage'] = 'Befintlig panelbild';
$string['expand'] = 'Expandera';
$string['expandall'] = 'Expandera alla';
$string['expandsections'] = 'Visa alla aktiviteter (alla sektioner)';
$string['fileaddedtobottom'] = 'Filen lades till sist i sektionen';
$string['filenoshowtext'] = 'Om filen inte visas här, använd knapparna till höger för att ladda ned eller visa i nytt fönster';
$string['filterboth'] = 'Visa knappar baserat på panelnummer och kursresultat';
$string['filternumbers'] = 'Visa knappar baserat på panelnummer';
$string['filteroutcomes'] = 'Visa knappar baserat på kursresultat';
$string['filteroutcomesrestore'] = 'Den ursprungliga kursen använde resultat i filterfältet som ännu inte stöds under återställningsprocessen. Filterfältsinställningen har därför ändrats i den återställda kursen. Om du vill använda resultat för att filtrera paneler i den återställda kursen konfigurerar du resultaten igen.  Den ursprungliga kursen har inte ändrats.';
$string['fittilestowidth'] = 'Anpassa paneler efter skärmbredd';
$string['fittilestowidth_desc'] = 'Om markerad och kursen visas på en mobil enhet kommer laddningen av paneler att fördröjas i en halv sekund medan en beräkning görs för att räkna ut den bästa panellayouten. Undvik t.ex. en panel per rad, mittpaneler på skärmen. Fördröjningen inträffar bara första gången användaren besöker kursen i en viss session och kommer sedan att bli ihågkommen under sessionen eller tills användaren ändrar sin skärmstorlek.';
$string['fixproblems'] = 'Åtgärda problem';
$string['folderdisplayerror'] = 'Mappar som konfigurerats för att visa innehåll inbäddat är inte kompatibla med underpanel-formatet. Denna <a href="{$a}">mapp</a> har därför ändrats så att den visas på en egen sida.';
$string['followthemecolour'] = 'Tvinga användning av temafärg';
$string['followthemecolour_desc'] = 'Om inställt på ja kommer lärare inte erbjudas ett val av denna pluginmodul och alla panelfärger nedan ignoreras. Istället görs ett försök att använda temats huvudsakliga varumärkesfärg istället.';
$string['guidance'] = 'Vägledning';
$string['height'] = 'höjd';
$string['hidden'] = 'Dold';
$string['hide'] = 'Dölj';
$string['hidefromothers'] = '';
$string['highestsectionnum'] = 'Högsta sektionsnummer';
$string['home'] = 'Hem';
$string['icontitle-address-book-o'] = 'Adressbok';
$string['icontitle-assessment_graded'] = 'Mycket väl godkänt';
$string['icontitle-assessment_timer'] = 'Provtid';
$string['icontitle-asterisk'] = 'Asterisk';
$string['icontitle-award-solid'] = 'Vinstrosett';
$string['icontitle-balance-scale'] = 'Vågskålar';
$string['icontitle-bar-chart'] = 'Stapeldiagram';
$string['icontitle-bell-o'] = 'Klocka';
$string['icontitle-binoculars'] = 'Kikare';
$string['icontitle-bitcoin'] = 'Bitcoin';
$string['icontitle-book'] = 'Bok';
$string['icontitle-bookmark-o'] = 'Bokmärke';
$string['icontitle-briefcase'] = 'Attachéväska';
$string['icontitle-building'] = 'Byggnad';
$string['icontitle-bullhorn'] = 'Tuta';
$string['icontitle-bullseye'] = 'Bullseye';
$string['icontitle-calculator'] = 'Miniräknare';
$string['icontitle-calendar'] = 'Kalender';
$string['icontitle-calendar-check-o'] = 'Förbockad kalender';
$string['icontitle-check'] = 'Bock';
$string['icontitle-child'] = 'Barn';
$string['icontitle-clock-o'] = 'Klocka';
$string['icontitle-clone'] = 'Duplicera';
$string['icontitle-cloud-download'] = 'Moln (hämta)';
$string['icontitle-cloud-upload'] = 'Moln (ladda upp)';
$string['icontitle-comment-o'] = 'Kommentar';
$string['icontitle-comments-o'] = 'Kommentarer';
$string['icontitle-compass'] = 'Kompass';
$string['icontitle-diamond'] = 'Diamant';
$string['icontitle-dollar'] = 'Dollartecken';
$string['icontitle-euro'] = 'Eurosymbol';
$string['icontitle-exclamation-triangle'] = 'Utropstecken i triangel';
$string['icontitle-feed'] = 'RSS-flöde';
$string['icontitle-file-text-o'] = 'Textfil';
$string['icontitle-film'] = 'Film';
$string['icontitle-flag-checkered'] = 'Målgångsflagga';
$string['icontitle-flag-o'] = 'Flagga';
$string['icontitle-flash'] = 'Blixt';
$string['icontitle-flask'] = 'Kolv';
$string['icontitle-flipchart'] = 'Blädderblock';
$string['icontitle-frown-o'] = 'Surt ansikte';
$string['icontitle-gavel'] = 'Ordförandeklubba';
$string['icontitle-gbp'] = 'Pundtecken';
$string['icontitle-globe'] = 'Glob';
$string['icontitle-handshake-o'] = 'Handskakning';
$string['icontitle-headphones'] = 'Hörlurar';
$string['icontitle-heartbeat'] = 'Hjärtslag';
$string['icontitle-history'] = 'Historik';
$string['icontitle-home'] = 'Hem';
$string['icontitle-id-card-o'] = 'ID-kort';
$string['icontitle-info'] = 'Information';
$string['icontitle-jigsaw'] = 'Pussel';
$string['icontitle-key'] = 'Nyckel';
$string['icontitle-laptop'] = 'Laptop';
$string['icontitle-life-buoy'] = 'Livboj';
$string['icontitle-lightbulb-o'] = 'Glödlampa';
$string['icontitle-line-chart'] = 'Linjediagram';
$string['icontitle-list'] = 'Punktlista';
$string['icontitle-list-ol'] = 'Numrerad lista';
$string['icontitle-location-arrow'] = 'Riktningspil';
$string['icontitle-map-marker'] = 'Platsmarkör';
$string['icontitle-map-o'] = 'Karta';
$string['icontitle-map-signs'] = 'Vägvisare';
$string['icontitle-microphone'] = 'Mikrofon';
$string['icontitle-mobile-phone'] = 'Mobiltelefon';
$string['icontitle-mortar-board'] = 'Oxfordmössa';
$string['icontitle-music'] = 'Musik';
$string['icontitle-newspaper-o'] = 'Tidning';
$string['icontitle-number_1'] = 'Nummer 1';
$string['icontitle-number_10'] = 'Nummer 10';
$string['icontitle-number_2'] = 'Nummer 2';
$string['icontitle-number_3'] = 'Nummer 3';
$string['icontitle-number_4'] = 'Nummer 4';
$string['icontitle-number_5'] = 'Nummer 5';
$string['icontitle-number_6'] = 'Nummer 6';
$string['icontitle-number_7'] = 'Nummer 7';
$string['icontitle-number_8'] = 'Nummer 8';
$string['icontitle-number_9'] = 'Nummer 9';
$string['icontitle-pencil-square-o'] = 'Penna i ruta';
$string['icontitle-person'] = 'Person';
$string['icontitle-pie-chart'] = 'Tårtbitsdiagram';
$string['icontitle-podcast'] = 'Podcast';
$string['icontitle-puzzle-piece'] = 'Pusselbit';
$string['icontitle-question-circle'] = 'Frågetecken i cirkel';
$string['icontitle-random'] = 'Slumpmässig';
$string['icontitle-refresh'] = 'Uppdatera';
$string['icontitle-road'] = 'Väg';
$string['icontitle-search'] = 'Förstoringsglas';
$string['icontitle-sliders'] = 'Skjutreglage';
$string['icontitle-smile-o'] = 'Leende';
$string['icontitle-star'] = 'Stjärna (skuggad)';
$string['icontitle-star-half-o'] = 'Stjärna (halvskuggad)';
$string['icontitle-star-o'] = 'Stjärna';
$string['icontitle-survey'] = 'Undersökning';
$string['icontitle-tags'] = 'Etiketter';
$string['icontitle-tasks'] = 'Uppgifter';
$string['icontitle-television'] = 'TV';
$string['icontitle-thinking-person'] = 'Person och glödlampa';
$string['icontitle-thumbs-o-down'] = 'Tumme ned';
$string['icontitle-thumbs-o-up'] = 'Tumme upp';
$string['icontitle-trophy'] = 'Trofé';
$string['icontitle-umbrella'] = 'Paraply';
$string['icontitle-university'] = 'Universitet';
$string['icontitle-user-o'] = 'Person';
$string['icontitle-users'] = 'Personer';
$string['icontitle-volume-up'] = 'Högtalare';
$string['icontitle-wrench'] = 'Skiftnyckel';
$string['imagecannotbeused'] = 'Bilden går inte att använda';
$string['imagedeletedfrom'] = 'Bild borttagen från "{$a}"';
$string['imagesavedfor'] = 'Bild för "{$a}" sparad';
$string['imagesize'] = 'Bildstorlek';
$string['items'] = 'objekt';
$string['jsactivate'] = 'Slå på animerad navigering';
$string['jsdeactivate'] = 'Stäng av animerad navigering';
$string['jsdeactivated'] = 'Du har inaktiverat animerad navigering för ditt konto';
$string['jsnavsettings'] = 'JavaScript-navigering';
$string['jsreactivated'] = 'Du har aktiverat animerad navigering för ditt konto. Detta kan göra navigeringen snabbare. Detta kräver att JavaScript är aktiverat.';
$string['links'] = 'Länkar';
$string['loading'] = 'Laddar';
$string['maxcoursesectionsallowed'] = 'Det maximala antalet kurssektioner som tillåts i den här miljön är <strong>{$a}</strong>.';
$string['modalmodules'] = 'Modala moduler';
$string['modalmodules_desc'] = 'Öppna dessa kursmoduler i ett modalt fönster. (Andra moduler kan komma att läggas till i kommande versioner).';
$string['modalresources'] = 'Modala resurser';
$string['modalresources_desc'] = 'Starta dessa resurser i ett modalt fönster. Om det är tillåtet här öppnas URL-aktiviteter endast i ett modalt fönster om de är inställda på {$a->displayembed} på aktivitetsnivå (t.ex. YouTube- eller Vimeo-videor). Även då kan de blockeras av webbplatsägaren från att visas inbäddade - se {$a->link}';
$string['modalwindows'] = 'Modala fönster';
$string['newsectionname'] = 'Nytt namn för <strong>{$a}</strong>';
$string['nexttopic'] = 'Nästa ämne';
$string['noconnectionerror'] = 'Kunde inte ladda innehåll. Kontrollera internetanslutningen.';
$string['nojswarning'] = 'Din webbläsare verkar inte stödja JavaScript, eller så har det inaktiverats. Ett förbättrat gränssnitt är tillgängligt om du aktiverar JavaScript';
$string['none'] = 'Ingen';
$string['noproblemsfound'] = 'Inga problem funna';
$string['notcomplete'] = 'Ej slutförd';
$string['notrecommended'] = 'Ej rekommenderad';
$string['notregistered'] = 'Du har ännu inte registrerat denna pluginmodul hos utvecklaren.';
$string['novaliddefaultcolour'] = 'Ingen giltig färg har angivits för standardfärgen nedan';
$string['numberofsections'] = 'Antal sektioner i kursen';
$string['ok'] = 'OK';
$string['other'] = 'Övrigt';
$string['outcomes'] = 'resultat';
$string['outcomesunavailable'] = 'Resultat ej tillgängligt';
$string['overall'] = 'Övergripande';
$string['overallprogress'] = 'Aktivitetsslutförande - övergripande förlopp';
$string['overallprogressshort'] = 'Övergripande förlopp';
$string['photoguidance_desc'] = '<p>Ladda upp ett foto i <strong>liggande</strong> format. Bredden ska vara ca 1,35 gånger höjden.  T.ex. passar ett foto med måtten 270 x 200 (b x h) bra. Det behöver inte vara exakt.</p>
<p>Foton i stående format matchar inte panelens form. Stora bilder eller filer skalas ned och komprimeras om det behövs efter uppladdning.</p>';
$string['photolibrary'] = 'Bildbibliotek';
$string['photolibrary_desc'] = 'Det här är bilderna du har laddat upp eller använt nyligen. Om du vill använda någon av dem som bakgrund för den här panelen klickar du på den.  Om du vill ladda upp en ny använder du fliken ladda upp ovan.';
$string['phototilesaltstyle'] = 'Alternativt utseende för bildpaneler';
$string['phototilesaltstyle_desc'] = 'Om markerad visas titeln längst ned. I annat fall visas titeln högst upp på panelen (standard)';
$string['phototilesettings'] = 'Bildpaneler';
$string['phototiletitletransarency'] = 'Transparens för bildpanelsrubrik';
$string['phototiletitletransarency_desc'] = 'Rubriköverlägget på en fotopanel kan ha en något genomskinlig bakgrund eller en enfärgad bakgrund (0%)';
$string['phototitletitlelineheight'] = 'Radhöjd för rubrik';
$string['phototitletitlepadding'] = 'Radavstånd för rubrik';
$string['picknewicon'] = 'Välj ny ikon';
$string['picknewiconphoto'] = 'Välj ikon eller bakgrundsbild';
$string['pluginname'] = 'Panelformat';
$string['previoustopic'] = 'Föregående ämne';
$string['privacy:metadata:preference:format_tiles_stopjsnav'] = 'Om användaren har inaktiverat JavaScript-navigering med animationer.';
$string['privacypolicy'] = 'Sekretesspolicy';
$string['problemcourses'] = 'Problemkurser';
$string['problemcoursesintro'] = 'Följande kurser har sektionsnummer som är högre än förväntat. Använd knapparna nedan för att lösa problemet.';
$string['progress'] = 'Förlopp';
$string['reactivate'] = 'återaktivera';
$string['register'] = 'Registrera';
$string['registeragreeprivacy'] = 'Jag godkänner pluginutvecklarens {$a->privacypolicylink}';
$string['registerclicktocomplete'] = 'Klicka på OK för att slutföra processen';
$string['registeredthanks'] = 'Din pluginmodul har registrerats. Tack!';
$string['registeremailno'] = 'Nej, jag vill inte få E-post';
$string['registeremailyes'] = 'Ja, jag vill få information om uppdateringar och annat som rör Panelpluginmodulen';
$string['registerintro1'] = 'Vi vill gärna behålla kontakten! När du registrerar dig';
$string['registerintro2'] = 'stödjer du vidareutvecklingen av denna pluginmodul';
$string['registerintro3'] = 'du går information om viktiga uppdateringar och planerade utvecklingsaktiviteter';
$string['registerintro4'] = 'vi kan ta reda på mer om vad du vill att den här pluginmodulen ska kunna göra.';
$string['registerintro5'] = 'Dina uppgifter kommer att hållas privata av utvecklaren enligt integritetspolicyn som länkas till nedan. Tack för ditt stöd!';
$string['registermissingemail'] = 'Vänligen fyll i din e-postadress (du har valt "Ja" för e-post nedan)';
$string['registerpickemailpref'] = 'Välj E-postinställningar';
$string['registerpolicyagreedlinktext'] = 'Sekretess- och personuppgiftspolicy';
$string['registrationdeferred'] = 'Tack! Vi försöker registrera din pluginmodul (detta är ej slutfört ännu).';
$string['reopenlastsection'] = 'Återöppna senast besökta panel';
$string['reopenlastsection_desc'] = 'När det är markerat öppnas det senast besökta avsnittet om användaren besöker kursen på nytt';
$string['resetallcoursecolours'] = 'Återställ alla kursfärger';
$string['resetcolours'] = 'Återställ färger';
$string['resetcolours_desc'] = 'Klicka på den här knappen för att återställa panelfärgen för alla kurser som inte har någon av nedanstående färger. Kurserna ändras till standardfärgen nedan. Du kan använda detta när du har ändrat färgpaletten nedan, men se till att du har <strong>sparat eventuella ändringar</strong> av färgerna nedan innan du klickar på den här knappen. Var försiktig eftersom detta kan ändra färgen för många kurser!';
$string['restorefailed'] = 'Återställningen misslyckades';
$string['restoreincorrectsections'] = '<strong>Fel:</strong> Kan inte inte slutföra eftersom källkursen innehåller felaktigt numrerade avsnitt (t.ex. att avsnittsnumret ({$a->sectionnum}) är högre än det högsta tillåtna ({$a->maxallowed}). Försök att utesluta eller ta bort avsnitt med höga tal.';
$string['restoretoomanysections'] = '<strong>Fel:</strong> Det går inte att säkerhetskopiera eller återställa eftersom för många kursavsnitt ingår ({$a->numsections}) och detta är mer än tillåtet ({$a->maxallowed}). Försök att utesluta eller ta bort vissa avsnitt.';
$string['revealcontents'] = 'Visa panelinnehåll';
$string['scheduleddeleteemptysections'] = 'En aktivitet för att ta bort tomma avsnitt från kursen har schemalagts. Kom tillbaka senare.';
$string['section0name'] = 'Allmänt';
$string['sectionerrorstring'] = 'Din session har löpt ut. Uppdatera sidan.';
$string['sectionerrortitle'] = 'Kunde inte ladda innehåll';
$string['sectionname'] = 'Panel';
$string['sectionnumber'] = 'Sektion / panel nummer';
$string['selected'] = 'Vald';
$string['setavailabletilecolours'] = 'Tillåtna panelfärger (webbplatsövergripande)';
$string['settings'] = 'Inställningar för panelformat';
$string['show'] = 'Visa';
$string['showalltiles'] = 'Visa alla paneler';
$string['showfromothers'] = 'Visa panel';
$string['showoverallprogress'] = 'Visa övergripande förloppsindikator';
$string['showoverallprogress_desc'] = 'Visa "Totalförlopp %" längst upp till höger om kursen (värdet som visas representerar summan av % slutfört för varje panel. Värdet indikerar slutförda aktiviteter)';
$string['showprogresssphototiles_desc'] = 'Om markerad visas studentens förlopp (t.ex. Förlopp 2/5) på bildpaneler';
$string['showseczerocoursewide'] = 'Visa sektion 0 överst i alla sektioner';
$string['showseczerocoursewide_desc'] = 'Om markerad visas avsnitt noll (det allra översta avsnittet) på kursens startsida och högst upp på <strong>varje kursavsnittssida</strong> (dvs. över varje panels innehåll). Om du avmarkerar (rekommenderas) visas den endast på kursens startsida';
$string['showseparatewin'] = 'Visa fil i separat fönster';
$string['sitename'] = 'Webbplatsnamn';
$string['snapwarning'] = 'Det är möjligt att redigera kursen i formatet "Panel"  i ett annat tema och sedan växla tillbaka till Snap-temat när du har redigerat klart.';
$string['snapwarning_help'] = 'Theme_settings#Allow_user_themes';
$string['subtileszeczerotoggled'] = 'Det övre avsnittet växlat mellan list- och underpaneler-format';
$string['sureresetcolours'] = 'Är du säker på att du vill återställa kurspanelernas färger till standard?  Detta påverkar {$a} kurser';
$string['tilecolourgeneral'] = 'Färgpalett - alternativ färg';
$string['tilecolourgeneral_descr'] = 'Med de här inställningarna kan administratören ange vilka färger som ska vara tillgängliga för lärare att tillämpa på kurser. Ställ in färgen på svart (#000) för att inaktivera den färgen. Om du ändrar färgerna här kommer inga ändringar att göras i befintliga kurser förrän nästa gång läraren försöker ändra panelfärg. Då är det bara de färger du har ställt in här som är tillgängliga för läraren.';
$string['tilecolourschanged'] = 'Panelfärgerna har återställts. Alla paneler följer nu färgschemat enligt nedan.';
$string['tileicon'] = 'Ikon som enbart ska visas på denna panel';
$string['tileicon_help'] = 'Det objekt som väljs här åsidosätter, endast för den här panelen, vilken panelikon som har angetts på kursnivå.';
$string['tileicons'] = 'Panelikoner';
$string['tileoutcome'] = 'Resultat för denna panel';
$string['tileoutcome_help'] = 'Om du väljer ett resultat för den här panelen kan du under kursinställningarna visa en uppsättning <em>filterknappar</em>, en för varje resultat, som när du trycker på den filtrerar de visade panelerna efter vilket resultat de har tilldelats';
$string['tileselecttip'] = 'Här är ett enklare sätt att ändra en panelikon eller ett foto: klicka bara på ikonen eller fotot som du vill ändra i kursen, med redigeringsläge på. Fönstret ikonväljaren visas.';
$string['tilesformatregistration'] = 'Registrera Panelformat-modulen.';
$string['togglecompletion'] = 'Klicka för att växla slutförandestatus';
$string['togglecompletioncomplete'] = 'Klicka för att växla slutförandestatus (slutförd)';
$string['togglecompletionincomplete'] = 'Klicka för att växla slutförandestatus (ej slutförd)';
$string['tootall'] = 'för hög för panelen';
$string['toowide'] = 'för bred för panelen';
$string['transparenttitleadjustments'] = 'Justering av rubriktransparens';
$string['transparenttitleadjustments_desc'] = 'På fotopaneler med genomskinliga rubrikbakgrunder, beroende på ditt tema, kanske du vill justera dessa för att se till att de genomskinliga raderna i titeln inte överlappar varandra när de radbryts.
Observera att dessa varierar lite mellan webbläsare också. Föreslagna värden för Chrome: Boost och Clean-baserade teman: 30,5 och 4 | Anpassningsbar: 32 och 4 | Moove: 32 och 2 | Remui: 32 och 2,5';
$string['uploadnewphoto'] = 'Ladda upp ett nytt foto';
$string['uploadnewphoto_help'] = 'Ladda upp en bild för denna panel';
$string['usejavascriptnav'] = 'Använd JavaScript-navigering från Oaneler-huvudsidan';
$string['usejavascriptnav_desc'] = 'Om användaren klickar på en panel på huvudkursens startsida och har aktiverat JavaScript används JS för att övergå till panelinnehåll om användaren klickar på en panel på huvudrättsöversiktssidan. Panelinnehåll lagras lokalt i webbläsaren enligt inställningarna nedan.  Om det inte är avmarkerat kommer JS inte att användas och äldre navigering kommer att användas i stället.  De andra JS-inställningarna nedan ignoreras.';
$string['usejseditingexpandcollapse'] = 'Tedigeringsläge - använd JavaScript för att minimera/expandera paneler';
$string['usejseditingexpandcollapse_desc'] = 'Om det här alternativet är markerat kan en lärare i redigeringsläge expandera och komprimera redigeringspaneler med animerade övergångar.  Panelinnehåll läses in när du expanderar, utan omladdningar av sidor.';
$string['usejsnavforsinglesection'] = 'Använd JavaScript-navigering för en-sektions sida';
$string['usejsnavforsinglesection_desc'] = 'När detta är markerat kommer alla samtal för en enda avsnittssida (&section=xx) att hanteras med JavaScript, genom att starta animerad i kursens huvudsida, animerad för att öppna på det begärda avsnittet via JS, i stället för att ringa den gamla php-sidan med en sektion';
$string['usesubtilesseczero'] = 'Använd underpaneler i översta sektionen';
$string['usesubtilesseczero_help'] = 'Om det här alternativet är markerat kommer underpaneler naturligtvis att användas i det övre avsnittet och inom alla paneler. Endast tillgängligt om du använder underpaneler i kursen totalt sett.  Detta eftersom underplattorna tar upp mycket utrymme högst upp i kursen. Det kan vara bättre att lämna detta omarkerat, så att alla objekt i det övre avsnittet visas i standardlisteformat i stället.';
$string['usetooltips'] = 'Använd JavaScript-verktygstips';
$string['usetooltips_desc'] = 'Använda JavaScript-verktygstips när användaren hovrar över vissa objekt, t.ex. kompletteringsrutor, paneler för kakelinnehåll';
$string['version'] = 'Version {$a}';
$string['width'] = 'bredd';
