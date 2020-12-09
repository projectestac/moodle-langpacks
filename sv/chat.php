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
 * Strings for component 'chat', language 'sv', version '3.8'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Du har kommande chatt/direktsamtal';
$string['ajax'] = 'Version som använder Ajax';
$string['autoscroll'] = 'Automatisk skrollning';
$string['beep'] = 'Pipsignal';
$string['bubble'] = 'Språkbubbla';
$string['cantlogin'] = 'Det gick inte att logga in till detta chatrum!';
$string['chat:addinstance'] = 'Lägg till nytt direktsamtal';
$string['chat:chat'] = 'Åtkomst till ett chatrum';
$string['chat:deletelog'] = 'Ta bort loggar för chattar';
$string['chat:exportparticipatedsession'] = 'Exportera den session för direktsamtal som du deltog i.';
$string['chat:exportsession'] = 'Exportera vilken chat-session  som helst';
$string['chat:readlog'] = 'Visa chattloggar';
$string['chat:talk'] = 'Delta i en chat';
$string['chat:view'] = 'Visa direktsamtal';
$string['chatintro'] = 'Introduktion';
$string['chatname'] = 'Namnet på det här chat-rummet';
$string['chatreport'] = 'Sessioner för chattar';
$string['chattime'] = 'Tid för nästa chat';
$string['compact'] = 'Kompakt';
$string['composemessage'] = 'Skriv ett meddelande';
$string['configmethod'] = 'Den metod för chat som erbjuder ett ajax-baserat gränssnitt kontaktar regelbundet servern för uppdateringar. Den normala metoden för chat innebär att klienterna regelbundet måste kontakta servern för uppdateringar. Det kräver ingen konfiguration och fungerar överallt men en mängd chattare samtidigt kan skapa en stor arbetsbelastning för servern. Att använda en server demon kräver "shell"-tillgång till UNIX men det resulterar i en snabb, skalbar miljö för chat.';
$string['confignormalupdatemode'] = 'Uppdateringar av rum för direktsamtal servas effektivt genom användning av egenskapen <em>Håll liv i</em> i HTTP 1.1 men detta leder fortfarande till ganska stor belastning på servern. En mer avancerad metod är att använda strategin med att <em>Strömma</em> för att mata på med uppdateringar åt användarna. Det är mycket bättre att använda <em>Strömma</em> skalor (metoden liknar chatd) men det kanske inte stödjs av din server.';
$string['configoldping'] = 'Hur länge ska en användare få vara inaktiv innan du anser att han/hon har avbrutit sin medverkan?';
$string['configrefreshroom'] = 'Hur ofta ska direktsamtalet uppdateras? (I sekunder räknat) Om du ställer in en kort tid så kommer direktsamtalet att verka snabbare, men då blir det också mer jobb för servern när det är många som samtalar direkt.';
$string['configrefreshuserlist'] = 'Hur ofta ska användarlistan uppdateras? (i sekunder)';
$string['configserverhost'] = 'Värdnamnet på datorn där serverdemonen finns.';
$string['configserverip'] = 'Den numeriska IP-adressen stämmer överens med värdnamnet ovan';
$string['configservermax'] = 'Det maximala antalet tillåtna klienter';
$string['configserverport'] = 'Port att använda för demonen på servern';
$string['coursetheme'] = 'Kursens tema';
$string['currentchats'] = 'Aktiva sessioner för chattar';
$string['currentusers'] = 'Aktuella användare';
$string['deletesession'] = 'Ta bort denna session';
$string['deletesessionsure'] = 'Är du säker på att du vill ta bort denna session?';
$string['donotusechattime'] = 'Visa inte några tider för chattar';
$string['enterchat'] = 'Klicka här för att gå in i chatten';
$string['entermessage'] = 'Skriv ditt meddelande';
$string['errornousers'] = 'Systemet hittade inga användare';
$string['eventmessagesent'] = 'Meddelande skickat';
$string['explaingeneralconfig'] = 'De här inställningarna gäller <strong>alltid</strong>';
$string['explainmethoddaemon'] = 'De här inställningarna har betydelse <strong>endast</strong> om du har valt "Chat Server daemon" som chat_method';
$string['explainmethodnormal'] = 'De här inställningarna har betydelse <strong>endast</strong> om du har valt "Normal metod" som chat_method';
$string['generalconfig'] = 'Allmän konfiguration';
$string['idle'] = 'F n inte aktiv';
$string['inputarea'] = 'Område för att mata in';
$string['invalidid'] = 'Det gick inte att hitta det chat-rummet!';
$string['list_all_sessions'] = 'Lista alla sessioner';
$string['list_complete_sessions'] = 'Lista bara fullföljda sessioner';
$string['listing_all_sessions'] = 'Listar alla sessioner';
$string['messagebeepseveryone'] = '{$a} skickar en pipsignal till alla!';
$string['messagebeepsyou'] = '{$a} har just skickat en pipsignal till dig';
$string['messageenter'] = '$a har precis kommit in i chatten';
$string['messageexit'] = '$a har lämnat chatten';
$string['messages'] = 'Meddelanden';
$string['messageyoubeep'] = 'Du signalerade till {$a}';
$string['method'] = 'Metod för chat';
$string['methodajax'] = 'Ajax-metoden';
$string['methoddaemon'] = 'Serverdemon för  chat';
$string['methodnormal'] = 'Normal metod';
$string['modulename'] = 'Chat';
$string['modulename_help'] = 'Aktivitetsmodulen direktsamtal tillåter deltagare att ha textbaserade synkrona diskussioner i realtid.

Direktsamtal kan vara en engångsaktivitet eller så kan den repeteras samma tid varje dag eller vecka. Direktsamtalen sparas och kan göras tillgängliga för alla att se eller begränsade till användare med förmågan att se loggar för direktsamtal.

Direktsamtal är speciellt användbart när gruppen som samtalar inte har möjlighet att ses fysiskt, som t.ex.

* Regelbundna möten med elever som deltar i nätbaserade kurser för att möjliggöra dem att dela erfarenheter med andra inom samma kurs men på en annan plats
* En elev som är tillfälligt förhindrad att närvara personligen kan direktsamtala med sin lärare för att komma ifatt med sitt arbete
* Elever som är ute på yrkespraktik samlas för att diskutera sina erfarenheter med varandra och sin lärare
* Yngre barn som använder direktsamtal i hemmet under kvällarna som en kontrollerad introduktion till socialt nätverkande
* En frågor-och-svar-session med en inbjuden talare på en annan plats
* Sessioner för att hjälpa eleverna att förbereda sig på prov där läraren, eller andra elever, kan ställa exempelfrågor';
$string['modulenameplural'] = 'Chat';
$string['neverdeletemessages'] = 'Ta aldrig bort meddelanden';
$string['nextsession'] = 'Nästa schemalagda session';
$string['no_complete_sessions_found'] = 'Det gick inte att hitta några fullföljda sessioner.';
$string['nochat'] = 'Det gick inte att hitta någon chat';
$string['noguests'] = 'Chatten är inte öppen för gäster';
$string['nomessages'] = 'Inga meddelanden än';
$string['nopermissiontoseethechatlog'] = 'Du har inte tillstånd att se loggarna för chattar.';
$string['normalkeepalive'] = 'Håll_Liv_I';
$string['normalstream'] = 'Strömma';
$string['noscheduledsession'] = 'Ingen schemalagd session';
$string['notallowenter'] = 'Du har inte tillstånd att gå in i chat-rummet';
$string['notlogged'] = 'Du är inte inloggad!';
$string['oldping'] = 'Koppla bort timeout';
$string['page-mod-chat-x'] = 'Valfri sida i direktsamtalsmodulen';
$string['pastchats'] = 'Tidigare sessioner för chattar';
$string['pluginadministration'] = 'Administration av chat';
$string['pluginname'] = 'Chat';
$string['refreshroom'] = 'Utrymme för uppdatering';
$string['refreshuserlist'] = 'Uppdatera användarlista';
$string['removemessages'] = 'Ta bort alla meddelanden';
$string['repeatdaily'] = 'Vid samma tid varje dag';
$string['repeatnone'] = 'Inga upprepade visningar - visa bara den specificerade tiden';
$string['repeattimes'] = 'Upprepade sessioner';
$string['repeatweekly'] = 'Vid samma tid varje vecka';
$string['saidto'] = 'sade till';
$string['savemessages'] = 'Spara tidigare sessioner';
$string['seesession'] = 'Se den här sessionen';
$string['send'] = 'Skicka';
$string['sending'] = 'Skickar';
$string['serverhost'] = 'Namn på servern';
$string['serverip'] = 'IP för server';
$string['servermax'] = 'Max antal användare';
$string['serverport'] = 'Serverport';
$string['sessions'] = 'Sessioner för direktsamtal';
$string['sessionstart'] = 'Nästa chattsession startar {$a->date} (om {$a->fromnow})';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Alla kan se de sessioner som har varit';
$string['studentseereports_help'] = 'Om detta är inställt till Nej så kommer bara användare som har kapaciteten mod/chat:readlog att kunna se loggarna för chatten.';
$string['talk'] = 'Tala';
$string['updatemethod'] = 'Metod för uppdatering';
$string['updaterate'] = 'Så snabbt uppdateras chatten:';
$string['userlist'] = 'Användarlista';
$string['usingchat'] = 'Använder chat';
$string['usingchat_help'] = '<p>Modulen för chat innehåller några funktioner som ska göra det trevligare
att chatta.</p>
<dl>
	<dt><b>Smilies</b></dt>
		<dd>Alla "smilies (emoticons) som du kan skriva in på andra ställen
		i Moodle kan du även skriva in här och de kommer att visas på
		ett korrekt sätt. T ex  :-) = <img src="pix/s/smiley.gif" alt="smiley" /></dd>
	<dt><b>Länkar</b></dt>
		<dd>Internetadresser omvandlas automatiskt till länkar.</dd>
	<dt><b>Att uttrycka känslor</b></dt>
		<dd>Du kan inleda en rad med "/me" eller ":" för att uttrycka känslor.
		Om du, till exempel, heter Lasse och skriver in ":skrattar"
		eller "/me skrattar!"  så kommer alla att se "Lasse skrattar!"</dd>
	<dt><b>Pipsignaler</b></dt>
		<dd>Du kan skicka ett ljud till andra genom att klicka på "pip"-länken bredvid deras namn.
		Du kan också skicka en signal till alla samtidigt genom att skriva "beep all".</dd>
	<dt><b>HTML</b></dt>
		<dd>Om du kan lite HTML-kod så kan du använda det i din text för att lägga in bilder,
		spela upp ljud eller skapa text med olika färger och storlekar.</dd>
</dl>';
$string['viewreport'] = 'Visa de senaste chat-sessionerna';
