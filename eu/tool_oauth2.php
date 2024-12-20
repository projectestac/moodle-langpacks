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
 * Strings for component 'tool_oauth2', language 'eu', version '4.4'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'Ulertzen dut helbide elektronikoaren egiaztapena desgaitzea segurtasun-arazo bat izan daitekeela.';
$string['acceptrisk_help'] = 'Helbide elektronikoaren egiaztapena desgaitzeak potentzialki erabiltzaileei beste norbaiten izenean saioa hastea ahalbidetu dezake.';
$string['authconfirm'] = 'Ekintza honek Moodleri autentifikatutako kontuan API sarbide iraunkorra emango dio. Hau Moodlerenak diren fitxategiak kudeatzeko sistemako kontu gisa erabiltzeko pentsatuta dago.';
$string['authconnected'] = 'Sistemako kontua lineaz kanpoko sarbiderako konektatuta dago orain';
$string['authnotconnected'] = 'Sistemako kontua ez dago lineaz kanpoko sarbiderako konektatuta';
$string['clever_service'] = 'Clever';
$string['configured'] = 'Konfiguratuta';
$string['configuredstatus'] = 'Konfiguratuta';
$string['connectsystemaccount'] = 'Konektatu sistemako kontu batera';
$string['createfromtemplate'] = 'Sortu OAuth 2 zerbitzu bat txantiloitik';
$string['createfromtemplatedesc'] = 'Aukeratu beheko Oauth2 zerbitzuko txantiloietako bat zerbitzu mota ezagunetarako konfigurazio egoki bat duen OAuth zerbitzu bat sortzeko. Honek OAuth2 zerbitzu bat sortuko du, autentifikaziorako beharrezkoak diren amaiera-puntu eta parametro guztiekin, baina zerbitzua erabili ahal izateko aurretik zure bezero IDa eta sekretua sartu beharko dituzu.';
$string['createnewendpoint'] = 'Sortu amaiera-puntu berria "{$a}" emailearentzat';
$string['createnewservice'] = 'Sortu zerbitzu berria:';
$string['createnewuserfieldmapping'] = 'Sortu erabiltzaile-eremu lotura berria "{$a}" emailearentzat';
$string['custom_service'] = 'Pertsonalizatua';
$string['deleteconfirm'] = 'Ziur zaude "{$a}" identitate-emailea ezabatu nahi duzula? Emaile honetan oinarritzen den edozein pluginek funtzionatzeari utziko dio.';
$string['deleteendpointconfirm'] = 'Ziur zaude "{$a->issuer}" jaulkitzailearen "{$a->endpoint}" amaiera-puntua ezabatu nahi duzula? Amaiera-puntu honetan oinarritzen den edozein pluginek funtzionatzeari utziko dio.';
$string['deleteuserfieldmappingconfirm'] = 'Ziur zaude "{$a}" jaulkitzailearen erabiltzaile-eremu lotura ezabatu nahi duzula?';
$string['discovered'] = 'Zerbitzu aurkikuntza arrakastatsua izan da';
$string['discovered_help'] = 'Aurkikuntzak esan nahi du OAuth 2 amaiera-puntuak OAuth zerbitzuaren oinarrizko URLtik abiatuta automatikoki zehaz daitezkeela. Zerbitzu guztiak ez dira "aurkituak" izan behar, baina horrela ez bada, amaiera-puntuak eta erabiltzaile-loturen informazioa eskuz sartu beharko da.';
$string['discoverystatus'] = 'Aurkikuntza';
$string['editendpoint'] = 'Editatu amaiera-puntua: {$a->issuer} emailearen {$a->endpoint}';
$string['editendpoints'] = 'Konfiguratu amaiera-puntuak';
$string['editissuer'] = 'Editatu identitate-jaulkitzailea: {$a}';
$string['edituserfieldmapping'] = 'Editatu {$a->issuer} jaulkitzailearen erabiltzaile-eremu lotura';
$string['edituserfieldmappings'] = 'Konfiguratu erabiltzaile-eremuen loturak';
$string['endpointdeleted'] = 'Amaiera-puntua ezabatu da';
$string['endpointname'] = 'Izena';
$string['endpointname_help'] = 'Amaiera-puntu hau bilatzeko erabilitako gakoa. Amaieran "_endpoint" izan behar du.';
$string['endpointsforissuer'] = 'Emailearen amaiera-puntuak: {$a}';
$string['endpointurl'] = 'URLa';
$string['endpointurl_help'] = 'Amaiera-puntu honetarako URLa.  https:// protokoloa erabili behar du.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Sarbidea duten domeinuak';
$string['issueralloweddomains_help'] = 'Zehaztuz gero, ezarpen honetan hornitzaile hau erabili saioa hasi ahalko duten domeinuak mugatu daitezke komaz banatutako zerrendan zehaztuta.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'Zerbitzuaren oinarrizko URLa';
$string['issuerbaseurl_help'] = 'Zerbitzu honetarako sarbiderako oinarrizko URLa';
$string['issuerclientid'] = 'Bezeroaren IDa';
$string['issuerclientid_help'] = 'Emaile honentzako OAuth bezeroaren IDa';
$string['issuerclientsecret'] = 'Bezeroaren sekretua';
$string['issuerclientsecret_help'] = 'Emaile honentzako OAuth bezeroaren sekretua';
$string['issuerdeleted'] = 'Identitate-jaulkitzailea ezabatu da';
$string['issuerdisabled'] = 'Identitate-jaulkitzailea desgaitu da';
$string['issuerenabled'] = 'Identitate-jaulkitzailea gaitu da';
$string['issuerimage'] = 'Logoaren URLa';
$string['issuerimage_help'] = 'Emailearen logoa erakusteko erabiltzen den irudiaren URLa. Sarbide-orrian erakutsi daiteke.';
$string['issuerloginpagename'] = 'Sarrera-orrian erakusten den izena';
$string['issuerloginpagename_help'] = 'Zehaztuz gero, sarrera-orrian zerbitzuaren izenaren ordez izen hau erabiliko da';
$string['issuerloginparams'] = 'Saio-hasiera eskaeran sartutako parametro gehigarriak.';
$string['issuerloginparams_help'] = 'Sistema batzuk saio-hasiera eskaeran parametro gehigarriak behar dituzte erabiltzailearen oinarrizko profila irakurri ahal izateko.';
$string['issuerloginparamsoffline'] = 'Saio-hasiera eskaeran lineaz kanpoko sarbiderako sartutako parametro gehigarriak.';
$string['issuerloginparamsoffline_help'] = 'OAuth sistema bakoitzak modu ezberdin bat zehazten du lineaz kanpoko sarbiderako. Esaterako Google-k hurrengo parametro gehigarriak behar ditu: "access_type=offline&prompt=consent". Parametro hauek URLko query parametro formatuan egon behar dira.';
$string['issuerloginscopes'] = 'Saio-hasiera eskaeran sartu beharreko esparruak.';
$string['issuerloginscopes_help'] = 'Sistema batzuk saio-hasiera eskaeran esparru gehigarriak behar dituzte erabiltzailearen oinarrizko profila irakurri ahal izateko.OpenID Connect betetzen duten sistementzako esparru estandarrak "openid profile email" dira.';
$string['issuerloginscopesoffline'] = 'Saio-hasiera eskaeran lineaz kanpoko sarbiderako sartu beharreko esparruak.';
$string['issuerloginscopesoffline_help'] = 'OAuth sistema bakoitzak modu ezberdin bat zehazten du lineaz kanpoko sarbiderako. Esaterako Microsoft-ek "offline_access" esparru gehigarria behar du.';
$string['issuername'] = 'Izena';
$string['issuername_help'] = 'Identitate-emailearen izena. Sarbide-orrian erakutsi daiteke.';
$string['issuerrequireconfirmation'] = 'Behartu helbide elektronikoaren egiaztapena';
$string['issuerrequireconfirmation_help'] = 'Behartu erabiltzaile guztiek euren helbide elektronikoa egiaztatzea OAuth bidez saioa hasi aurretik. Honek eragina du saio-hastearekin batera sortutako kontuetan, baita existitzen zen Moodle kontu bat helbide elektronikoa lotuz OAuth bidezko saio-hasiera egiteko konektatzen denean ere.';
$string['issuers'] = 'Emaileak';
$string['issuersetup'] = 'OAuth 2 zerbitzu arruntak konfiguratzeko argibide xeheak.';
$string['issuersetuptype'] = '{$a} OAuth 2 hornitzailea konfiguratzeko argibide xeheak.';
$string['issuershowonloginpage'] = 'Erakutsi sarbide-orrian.';
$string['issuershowonloginpage_help'] = 'OAuth autentifikazio-plugina gaituta badago, saio-hasiera emaile hau sarbide-orrian zerrendatuko da erabiltzaileek emaile hau erabiliz saioa hasteko aukera izan dezaten.';
$string['issuersservicesallow'] = 'Baimendu zerbitzuak';
$string['issuersservicesnotallow'] = 'Ez baimendu zerbitzuak';
$string['issuerusedforinternal'] = 'Barne-zerbitzuak';
$string['issuerusedforlogin'] = 'Saio-hasiera';
$string['issuerusein'] = 'Zerbitzu hau erabiliko da';
$string['issuerusein_help'] = 'OAuth 2 zerbitzuak zenbait barne-zerbitzutan, saio-hasieran edo bietan erabili daitezke, behar izanez gero.';
$string['issueruseineverywhere'] = 'Saio-hasiera eta barne-zerbitzuak';
$string['issueruseininternalonly'] = 'Barne-zerbitzuak soilik';
$string['issueruseinloginonly'] = 'Saio-hasiera soilik';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Erakutsi saio-hasiera orrian honela:';
$string['loginissuer'] = 'Baimendu saioa hastea';
$string['microsoft_service'] = 'Microsoft';
$string['moodlenet_service'] = 'MoodleNet';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Konfiguratu gabe';
$string['notdiscovered'] = 'Zerbitzu-aurkikuntza ez da ondo egin';
$string['notloginissuer'] = 'Ez baimendu saioa hastea';
$string['pluginname'] = 'OAuth 2 zerbitzuak';
$string['privacy:metadata'] = 'OAuth 2 zerbitzuak pluginak ez du datu pertsonalik biltzen.';
$string['savechanges'] = 'Gorde aldaketak';
$string['serviceshelp'] = 'Zerbitzu-hornitzailearen konfigurazio argibideak.';
$string['systemaccountconnected'] = 'Sistemako kontua konektatuta';
$string['systemaccountconnected_help'] = 'Sistemako kontuak pluginentzako funtzionalitate aurreratuak eskaintzeko erabiltzen dira. Saio-hasiera funtzionalitatea baino ez eskaintzeko ez dira behar, baina OAuth zerbitzua erabiltzen duten beste plugin batzuk funtzioen multzo murriztu bat eskaintzen dute sistemako kontua konektatu ezean. Esaterako biltegiek ezin dute "controlled links" onartu fitxategietako eragiketak egiteko sistemako kontu bat izan gabe.';
$string['systemaccountnotconnected'] = 'Ez da sistemako konturik konektatu';
$string['systemauthstatus'] = 'Sistemako kontua konektatuta dago';
$string['usebasicauth'] = 'Token eskaerak HTTP goiburuen bidez autentifikatu';
$string['usebasicauth_help'] = 'Erabili HTTP Basic autentifikazio-eskema bezero ID eta pasahitza tokena freskatzeko eskaerarekin bidaltzerakoan. OAuth 2 estandarrak gomendatzen du, baina emaile batzuekin eskuragarri ez egotea gertatu daiteke.';
$string['userfieldexternalfield'] = 'Kanpoko eremuaren izena';
$string['userfieldexternalfield_error'] = 'Eremuak ezin du izan HTML koderik.';
$string['userfieldexternalfield_help'] = 'Kanpoko OAuth sistemak emandako eremuaren izena';
$string['userfieldinternalfield'] = 'Barruko eremuaren izena';
$string['userfieldinternalfield_help'] = 'Kanpoko eremuarekin lotu beharreko Moodleko erabiltzaile-eremuaren izena';
$string['userfieldmappingdeleted'] = 'Erabiltzaile-eremu lotura ezabatu da';
$string['userfieldmappingsforissuer'] = 'Emailearentzako erabiltzaile-eremu loturak: {$a}';
