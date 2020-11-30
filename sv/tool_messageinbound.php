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
 * Strings for component 'tool_messageinbound', language 'sv', version '3.8'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['incomingmailconfiguration'] = 'Inställningar för inkommande mejl';
$string['message_handlers'] = 'Meddelandehanterare';
$string['messageinbound'] = 'Inkommande meddelande';
$string['messageinboundenabled'] = 'Aktivera bearbetning av inkommande E-post';
$string['messageinboundenabled_desc'] = 'Bearbetning av inkommande e-post måste aktiveras för att meddelanden ska kunna skickas med korrekt information.';
$string['messageinboundgeneralconfiguration'] = 'Allmänna inställningar';
$string['messageinboundgeneralconfiguration_desc'] = 'Bearbetning av Inkommande meddelande gör att kan du ta emot och bearbeta e-post i Moodle. Detta används t.ex. för att skicka e-postsvar till foruminlägg eller lägga till filer i en användares privata filer.';
$string['messageinboundhost'] = 'Server för inkommande E-post';
$string['messageinboundhostpass'] = 'Lösenord';
$string['messageinboundhostpass_desc'] = 'Detta är det lösenord din tjänsteleverantör gett dig för att du ska kunna logga in på ditt E-postkonto.';
$string['messageinboundhostssl'] = 'Använd SSL';
$string['messageinboundhostssl_desc'] = 'Vissa e-postservrar stöder ytterligare en säkerhetsnivå genom att kryptera kommunikationen mellan Moodle och din server. Vi rekommenderar att du använder SSL-krypteringen om din server stöder det.';
$string['messageinboundhosttype'] = 'Typ av server';
$string['messageinboundhostuser'] = 'Användarnamn';
$string['messageinboundhostuser_desc'] = 'Detta är det användarnamn din tjänsteleverantör gett dig för att du ska kunna logga in på ditt E-postkonto.';
$string['messageinboundmailboxconfiguration_desc'] = 'När meddelanden skickas matchar de formatet address+data@example.com. För att på ett tillförlitligt sätt generera adresser från Moodle, ange den adress som du normalt skulle använda före @-tecknet, och domänen efter @-tecknet separat. Exempelvis skulle e-postlådans namn i exemplet vara "adress", och domänen E-post skulle vara "example.com". Du bör använda ett dedikerat e-postkonto för detta ändamål.';
$string['messageprocessingerror'] = 'Du skickade nyligen ett e-postmeddelande "{$a->subject}", men tyvärr gick det inte att bearbeta.

Felinformation visas nedan.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Du skickade nyligen ett e-postmeddelande "{$a->subject}" men tyvärr gick det inte att bearbeta.</p>
<p>Felinformation visas nedan.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'E-postmeddelandet "{$a->subject}" kunde inte bearbetas. Felet är: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'E-postmeddelandet "{$a->subject}" kunde inte bearbetas. Kontakta administratören för ytterligare information.';
$string['messageprocessingsuccess'] = '{$a->plain}

Om du inte vill fortsätta få dessa notiser kan du ändra dina personliga meddelandeinställningar genom att gå till  {$a->messagepreferencesurl} i din webbläsare.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Om du inte vill fortsätta få dessa notiser kan du <a href="{$a->messagepreferencesurl}">ändra dina personliga meddelandeinställningar</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Meddelande för att bekräfta att ett inkommande meddelande kom från dig';
$string['messageprovider:messageprocessingerror'] = 'Varning när ett inkommande meddelande inte kunnat bearbetas.';
$string['messageprovider:messageprocessingsuccess'] = 'Bekräftelse att ett meddelande har bearbetats framgångsrikt.';
$string['name'] = 'Namn';
$string['noencryption'] = 'Av - ingen kryptering';
$string['oldmessagenotfound'] = 'Du försökte att manuellt autentisera ett meddelande, men det gick inte att hitta meddelandet. Det kan bero på att det redan har bearbetats, eller att meddelandet har upphört att gälla.';
$string['privacy:metadata:messagelist'] = 'En lista över meddelandeidentifierare som inte kunde valideras och kräver ytterligare kontroll';
$string['privacy:metadata:messagelist:address'] = 'Adressen dit meddelandet skickades';
$string['privacy:metadata:messagelist:messageid'] = 'Meddelande-ID';
$string['privacy:metadata:messagelist:timecreated'] = 'Tidpunkten då posten skapades';
$string['privacy:metadata:messagelist:userid'] = 'ID för användaren som behöver godkänna meddelandet';
