<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_dataprivacy', language 'nl', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Activiteiten en bronnen';
$string['addcategory'] = 'Categorie toevoegen';
$string['addpurpose'] = 'Voeg doel toe';
$string['approve'] = 'Goedkeuren';
$string['approverequest'] = 'Aanvraag goedkeuren';
$string['cachedef_contextlevel'] = 'Contextniveau, doel en categorie';
$string['cachedef_purpose'] = 'Gegevensdoelen';
$string['cancelrequest'] = 'Annuleer verzoek';
$string['cancelrequestconfirmation'] = 'Wil je dit gegevensverzoek echt annuleren?';
$string['categories'] = 'Categorieën';
$string['categorieslist'] = 'Lijst met gegevenscategorieën';
$string['category'] = 'Categorie';
$string['categorycreated'] = 'Categorie gemaakt';
$string['categoryupdated'] = 'Categorie bijgewerkt';
$string['close'] = 'Sluiten';
$string['compliant'] = 'Klacht';
$string['confirmapproval'] = 'Wil je dit gegevensverzoek echt goedkeuren?';
$string['confirmcontextdeletion'] = 'Wil je echt het verwijderen van de geselecteerde contexten bevestigen? Dit zal ook alle gebruikersgegevens voor de gerelateerde subcontexten verwijderen.';
$string['confirmdenial'] = 'Wil je echt dit gegevensverzoek weigeren?';
$string['contactdataprotectionofficer'] = 'Neem contact op met de functionaris voor gegevensbescherming.';
$string['contactdataprotectionofficer_desc'] = 'Door deze functie in te schakelen, kunnen gebruikers via deze website contact opnemen met de  functionaris voor gegevensbescherming van deze website. Deze link wordt ook weergegeven op hun profielpagina en op de pagina met privacybeleid van deze website. De link leidt naar een formulier waarin de gebruiker een gegevensverzoek kan richten aan de  functionaris voor gegevensbescherming.';
$string['contactdpoviaprivacypolicy'] = 'Neem contact op met de functionaris voor gegevensbescherming van deze website, zoals beschreven in het privacybeleid';
$string['contextlevelname10'] = 'Website';
$string['contextlevelname30'] = 'Gebruikers';
$string['contextlevelname40'] = 'Cursuscategorieën';
$string['contextlevelname50'] = 'Cursussen';
$string['contextlevelname70'] = 'Activiteiten modules';
$string['contextlevelname80'] = 'Blokken';
$string['contextpurposecategorysaved'] = 'Doel en categorie opgeslagen.';
$string['createcategory'] = 'Maak gegevenscategorie';
$string['createpurpose'] = 'Maak datadoel';
$string['datadeletion'] = 'Gegevensverwijdering';
$string['datadeletionpagehelp'] = 'Deze pagina lijst alle contexten op die al voorbij hun bewaarperiode zijn en wachten op bevestiging voor het verwijderen van gebruikersgegevens. Als deze geselecteerde contexten bevestigd zijn voor verwijderen, dan zulle alle gerelateerde gebruikersgegevens verwijderd worden tijdens de volgende uitvoering van de geplande taak "Verwijder vervallen contexten".';
$string['dataprivacy:makedatarequestsforchildren'] = 'Gegevensverzoeken voor kinderen maken';
$string['dataprivacy:managedataregistry'] = 'Beheer gegevensregister';
$string['dataprivacy:managedatarequests'] = 'Gegevensverzoeken beheren';
$string['dataregistry'] = 'Gegevensregister';
$string['datarequestemailsubject'] = 'Gegevensverzoek: {$a}';
$string['datarequests'] = 'Gegevens verzoeken';
$string['daterequested'] = 'Gegevens aangevraagd';
$string['daterequesteddetail'] = 'Gevraagde gegevens:';
$string['defaultsinfo'] = 'Standaardcategorieën en -doelen worden toegepast op alle nieuw gemaakte exemplaren.';
$string['defaultssaved'] = 'Standaardinstellingen opgeslagen';
$string['deletecategory'] = 'Verwijder de categorie "{$a}"';
$string['deletecategorytext'] = 'Weet je zeker dat je de categorie "{$a}" wilt verwijderen?';
$string['deleteexpiredcontextstask'] = 'Verwijder vervallen contexten';
$string['deletepurpose'] = 'Verwijder het doel van "{$a}"';
$string['deletepurposetext'] = 'Weet u zeker dat u het doel "{$a}" wilt verwijderen?';
$string['deny'] = 'Weigeren';
$string['denyrequest'] = 'Verzoek weigeren';
$string['download'] = 'Download';
$string['dporolemapping'] = 'Roltoewijzing  functionaris voor gegevensbescherming';
$string['dporolemapping_desc'] = 'Selecteer een of meer rollen die toewijzen aan de rol van Data Protection Officer. Gebruikers met deze rollen kunnen gegevensverzoeken beheren. Dit vereist dat de geselecteerde rol (len) beschikken over de mogelijkheid \'tool/dataprivacy: managedatarequests \\';
$string['editcategories'] = 'Bewerk categorieën';
$string['editcategory'] = 'Bewerk categorie';
$string['editpurpose'] = 'Doel bewerken';
$string['editpurposes'] = 'Doeleinden bewerken';
$string['effectiveretentionperiodcourse'] = '{$a} (na de einddatum van cursus)';
$string['effectiveretentionperioduser'] = '{$a} sinds de laatste keer dat de gebruiker de site bezocht)';
$string['emailsalutation'] = 'Beste {$a},';
$string['errorcontexthasunexpiredchildren'] = 'De context "{$a}" heeft subcontexten die nog niet vervallen zijn. Er zijn geen contexten gemarkeerd voor verwijdering.';
$string['errorinvalidrequeststatus'] = 'Ongeldige aanvraagstatus!';
$string['errorinvalidrequesttype'] = 'Ongeldig verzoektype!';
$string['errornoexpiredcontexts'] = 'Er zijn geen vervallen contexten te verwerken';
$string['errorrequestalreadyexists'] = 'Je hebt al een lopende aanvraag.';
$string['errorrequestnotfound'] = 'Verzoek niet gevonden';
$string['errorrequestnotwaitingforapproval'] = 'Het verzoek wacht niet op goedkeuring. Of het is nog niet klaar of het is al verwerkt.';
$string['errorsendingmessagetodpo'] = 'Er is een fout opgetreden bij het verzenden van een bericht naar {$a}.';
$string['exceptionnotificationsubject'] = 'Er is een uitzondering opgetreden tijdens het verwerken van privacygegevens';
$string['expandplugin'] = 'Uitklappen en samenvouwen plugin.';
$string['expandplugintype'] = 'Uitklappen en samenvouwen plugintype.';
$string['expiredretentionperiodtask'] = 'Periode weerhouden na vervallen';
$string['expiry'] = 'Vervallen';
$string['explanationtitle'] = 'Gebruikte icoontjes op deze pagina en wat ze betekenen.';
$string['external'] = 'Bijkomend';
$string['externalexplanation'] = 'Een bijkomende plugin die op deze site geïnstalleerd is.';
$string['frontpagecourse'] = 'Startpaginacursus';
$string['gdpr_art_6_1_a_description'] = 'De betrokkene heeft toestemming gegeven voor de verwerking van zijn persoonsgegevens voor een of meer specifieke doeleinden';
$string['gdpr_art_6_1_a_name'] = 'Toestemming  (AVG Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'De verwerking is noodzakelijk voor de uitvoering van een overeenkomst waarbij de betrokkene partij is, of om op verzoek van de betrokkene vóór de sluiting van een overeenkomst maatregelen te nemen';
$string['gdpr_art_6_1_b_name'] = 'Overeenkomst (AVG Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'De verwerking is noodzakelijk om te voldoen aan een wettelijke verplichting die op de verwerkingsverantwoordelijke rust';
$string['gdpr_art_6_1_c_name'] = 'Wettelijke verplichting (AVG Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'De verwerking is noodzakelijk om de vitale belangen van de betrokkene of van een andere natuurlijke persoon te beschermen.';
$string['gdpr_art_6_1_d_name'] = 'Vitale belangen (AVG Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'De verwerking is noodzakelijk voor de vervulling van een taak van algemeen belang of van een taak in het kader van de uitoefening van het openbaar gezag dat aan de verwerkingsverantwoordelijke is opgedragen';
$string['gdpr_art_6_1_e_name'] = 'Algemeen belang (AVG Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'De verwerking is noodzakelijk voor de behartiging van de gerechtvaardigde belangen van de verwerkingsverantwoordelijke of van een derde, behalve wanneer de belangen of de grondrechten en de fundamentele vrijheden van de betrokkene die tot bescherming van persoonsgegevens nopen, zwaarder wegen dan die belangen, met name wanneer de betrokkene een kind is';
$string['gdpr_art_6_1_f_name'] = 'Gerechtvaardigd belang  (AVG Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'De betrokkene heeft uitdrukkelijke toestemming gegeven voor de verwerking van die persoonsgegevens voor een of meer welbepaalde doeleinden, behalve indien in Unierecht of lidstatelijk recht is bepaald dat het in lid 1 van AVG artikel 9 genoemde verbod niet door de betrokkene kan worden opgeheven';
$string['gdpr_art_9_2_a_name'] = 'Uitdrukkelijke toestemming (AVG Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'De verwerking is noodzakelijk met het oog op de uitvoering van verplichtingen en de uitoefening van specifieke rechten van de verwerkingsverantwoordelijke of de betrokkene op het gebied van het arbeidsrecht en het socialezekerheids- en socialebeschermingsrecht, voor zover zulks is toegestaan bij Unierecht of lidstatelijk recht of bij een collectieve overeenkomst op grond van lidstatelijk recht die passende waarborgen voor de grondrechten en de fundamentele belangen van de betrokkene biedt';
$string['gdpr_art_9_2_b_name'] = 'Arbeidsrecht en het socialezekerheids- en socialebeschermingsrecht (AVG Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'De verwerking is noodzakelijk ter bescherming van de vitale belangen van de betrokkene of van een andere natuurlijke persoon indien de betrokkene fysiek of juridisch niet in staat is zijn toestemming te geven';
$string['gdpr_art_9_2_c_name'] = 'Bescherming van de vitale belangen (AVG Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'De verwerking wordt verricht door een stichting, een vereniging of een andere instantie zonder winstoogmerk die op politiek, levensbeschouwelijk, godsdienstig of vakbondsgebied werkzaam is, in het kader van haar gerechtvaardigde activiteiten en met passende waarborgen, mits de verwerking uitsluitend betrekking heeft op de leden of de voormalige leden van de instantie of op personen die in verband met haar doeleinden regelmatig contact met haar onderhouden, en de persoonsgegevens niet zonder de toestemming van de betrokkenen buiten die instantie worden verstrekt';
$string['gdpr_art_9_2_d_name'] = 'Verwerking van leden en contacten door een stichting, een vereniging of een andere instantie zonder winstoogmerk (AVG Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'De verwerking heeft betrekking op persoonsgegevens die kennelijk door de betrokkene openbaar zijn gemaakt';
$string['gdpr_art_9_2_e_name'] = 'Gegevens door de betrokkene openbaar gemaakt (AVG Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'De verwerking is noodzakelijk voor de instelling, uitoefening of onderbouwing van een rechtsvordering of wanneer gerechten handelen in het kader van hun rechtsbevoegdheid';
$string['gdpr_art_9_2_f_name'] = 'Rechtsvordering (AVG Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'De verwerking is noodzakelijk om redenen van zwaarwegend algemeen belang, op grond van Unierecht of lidstatelijk recht, waarbij de evenredigheid met het nagestreefde doel wordt gewaarborgd, de wezenlijke inhoud van het recht op bescherming van persoonsgegevens wordt geëerbiedigd en passende en specifieke maatregelen worden getroffen ter bescherming van de grondrechten en de fundamentele belangen van de betrokkene';
$string['gdpr_art_9_2_g_name'] = 'Zwaarwegend algemeen belang (AVG Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'De verwerking is noodzakelijk voor doeleinden van preventieve of arbeidsgeneeskunde, voor de beoordeling van de arbeidsgeschiktheid van de werknemer, medische diagnosen, het verstrekken van gezondheidszorg of sociale diensten of behandelingen dan wel het beheren van gezondheidszorgstelsels en -diensten of sociale stelsels en diensten, op grond van Unierecht of lidstatelijk recht, of uit hoofde van een overeenkomst met een gezondheidswerker en behoudens de in lid 3 van AVG artikel 9 genoemde voorwaarden en waarborgen';
$string['gdpr_art_9_2_h_name'] = 'Medisch noodzakelijk (AVG Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'De verwerking is noodzakelijk om redenen van algemeen belang op het gebied van de volksgezondheid, zoals bescherming tegen ernstige grensoverschrijdende gevaren voor de gezondheid of het waarborgen van hoge normen inzake kwaliteit en veiligheid van de gezondheidszorg en van geneesmiddelen of medische hulpmiddelen, op grond van Unierecht of lidstatelijk recht waarin passende en specifieke maatregelen zijn opgenomen ter bescherming van de rechten en vrijheden van de betrokkene, met name van het beroepsgeheim';
$string['gdpr_art_9_2_i_name'] = 'Volksgezondheid (AVG Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'De verwerking is noodzakelijk met het oog op archivering in het algemeen belang, wetenschappelijk of historisch onderzoek of statistische doeleinden overeenkomstig artikel 89, lid 1, op grond van Unierecht of lidstatelijk recht, waarbij de evenredigheid met het nagestreefde doel wordt gewaarborgd, de wezenlijke inhoud van het recht op bescherming van persoonsgegevens wordt geëerbiedigd en passende en specifieke maatregelen worden getroffen ter bescherming van de grondrechten en de belangen van de betrokkene';
$string['gdpr_art_9_2_j_name'] = 'Archivering in het algemeen belang, wetenschappelijk of historisch onderzoek of statistische doeleinden (AVG Art. 9.2(j))';
$string['hide'] = 'Alles samenklappen';
$string['inherit'] = 'Overerven';
$string['lawfulbases'] = 'Wettelijke basis';
$string['lawfulbases_help'] = 'Selecteer minstens één optie die als wettelijke basis dient voor het verwerken van persoonlijke gegevens. Voor details over deze wettelijke basis, zie <a href="http://www.privacy-regulation.eu/nl/artikel-6-rechtmatigheid-van-de-verwerking-EU-AVG.htm" target=_blank">AVG Art. 6.1</a>';
$string['message'] = 'Bericht';
$string['messagelabel'] = 'Bericht:';
$string['messageprovider:contactdataprotectionofficer'] = 'Gegevens verzoeken';
$string['messageprovider:datarequestprocessingresults'] = 'Data-aanvraag verwerkingsresultaten';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Mijn persoonlijke gegevensverzoeken';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} onderliggend';
$string['newrequest'] = 'Nieuw verzoek';
$string['noactivitiestoload'] = 'Geen activiteiten';
$string['noassignedroles'] = 'Geen toegewezen rollen in deze context';
$string['noblockstoload'] = 'Geen blokken';
$string['nocategories'] = 'Er zijn nog geen categorieën';
$string['nocoursestoload'] = 'Geen activiteiten';
$string['nodatarequests'] = 'Er zijn geen gegevensverzoeken';
$string['noexpiredcontexts'] = 'Er zijn geen vervallen contexten op dit niveau die bevestigd moeten worden voor verwijdering.';
$string['nopersonaldatarequests'] = 'U hebt geen verzoeken om persoonlijke gegevens';
$string['nopurposes'] = 'Er zijn nog geen doelen';
$string['nosubjectaccessrequests'] = 'Er zijn geen gegevensverzoeken waarop u moet reageren';
$string['nosystemdefaults'] = 'Het doel en de categorie van deze website zijn nog niet gedefinieerd.';
$string['notset'] = 'Niet ingesteld (gebruik standaardwaarde)';
$string['pluginname'] = 'Data Privacy';
$string['pluginname_help'] = 'Data-privacy-plugin';
$string['pluginregistry'] = 'Plugin privacy-register';
$string['pluginregistrytitle'] = 'Plugin privacy-register compliance';
$string['privacy'] = 'Privacy';
$string['privacy:metadata:request'] = 'Informatie van verzoeken om persoonlijke gegevens (toegang tot het onderwerp en verwijderingsverzoeken) gedaan voor deze website.';
$string['privacy:metadata:request:comments'] = 'Eventuele opmerkingen van gebruikers bij het verzoek.';
$string['privacy:metadata:request:dpocomment'] = 'Eventuele opmerkingen van de respectieve privacymedewerker van deze website met betrekking tot het verzoek.';
$string['privacy:metadata:request:requestedby'] = 'De ID van de gebruiker die de aanvraag doet, indien deze is gedaan namens een andere gebruiker.';
$string['privacy:metadata:request:timecreated'] = 'Het tijdstempel dat aangeeft wanneer het verzoek door de gebruiker is gedaan.';
$string['privacy:metadata:request:userid'] = 'De ID van de gebruiker waartoe het verzoek behoort';
$string['protected'] = 'Beschermd';
$string['protectedlabel'] = 'Het bewaren van deze gegevens heeft een hoger juridisch precedent over het verzoek van een gebruiker om te worden vergeten. Deze gegevens worden pas verwijderd nadat de bewaarperiode is verstreken.';
$string['purpose'] = 'Doel';
$string['purposecreated'] = 'Doel aangemaakt';
$string['purposes'] = 'Doeleinden';
$string['purposeslist'] = 'Lijst van gegevensdoeleinden';
$string['purposeupdated'] = 'Doel bijgewerkt';
$string['replyto'] = 'Beantwoorden';
$string['requestactions'] = 'Acties';
$string['requestby'] = 'Aangevraagd door';
$string['requestcomments'] = 'Opmerkingen';
$string['requestcomments_help'] = 'Aarzel niet om meer informatie te geven over uw verzoek';
$string['requestemailintro'] = 'U hebt een gegevensverzoek ontvangen:';
$string['requestfor'] = 'Aanvragen voor';
$string['requeststatus'] = 'Status';
$string['requestsubmitted'] = 'Uw aanvraag is ingediend bij de  functionaris voor gegevensbescherming van deze website';
$string['requesttype'] = 'Type';
$string['requesttypedelete'] = 'Verwijder al mijn persoonlijke gegevens';
$string['requesttypedeleteshort'] = 'Verwijder';
$string['requesttypeexport'] = 'Exporteer al mijn persoonlijke gegevens';
$string['requesttypeexportshort'] = 'Exporteer';
$string['requesttype_help'] = 'Selecteer de reden waarom u contact wilt opnemen met de  functionaris voor gegevensbescherming  van deze website';
$string['requesttypeothers'] = 'Algemeen onderzoek';
$string['requesttypeothersshort'] = 'Anders';
$string['requiresattention'] = 'Nakijken.';
$string['requiresattentionexplanation'] = 'Deze plugin implementeert de Moodle privacy API niet. Als deze plugin persoonlijke gegevens bewaart, dan zullen die niet kunnen geëxporteerd of verwijderd worden via het privacy-systeem van Moodle.';
$string['resultdeleted'] = 'U hebt onlangs verzocht om uw account en persoonlijke gegevens in {$a} te laten verwijderen. Dit proces is voltooid en u kunt niet langer inloggen.';
$string['resultdownloadready'] = 'Uw kopie van uw persoonlijke gegevens in {$a} die u onlangs hebt aangevraagd, is nu beschikbaar om te downloaden. Klik op de onderstaande link om naar de downloadpagina te gaan.';
$string['retentionperiod'] = 'Bewaarperiode';
$string['retentionperiodnotdefined'] = 'Er is geen bewaarperiode gedefinieerd';
$string['retentionperiodzero'] = 'Geen bewaarperiode';
$string['reviewdata'] = 'Gegevens bekijken';
$string['send'] = 'Verstuur';
$string['sensitivedatareasons'] = 'Reden voor het verwerken van gevoelige persoonlijke gegevens';
$string['sensitivedatareasons_help'] = 'Selecteer één of meerdere redenen of doelen die het verwerken van gevoelige persoonlijke gegevens voor dit doel rechtvaardigen. Zie <a href="http://www.privacy-regulation.eu/nl/artikel-9-verwerking-van-bijzondere-categorieen-van-persoonsgegevens-EU-AVG.htm" target="_blank">AVG Art. 9.2</a';
$string['setdefaults'] = 'Stel de standaardwaarden in';
$string['statusapproved'] = 'Goedgekeurd';
$string['statusawaitingapproval'] = 'In afwachting van goedkeuring';
$string['statuscancelled'] = 'Geannuleerd';
$string['statuscomplete'] = 'Compleet';
$string['statusdetail'] = 'Status:';
$string['statuspending'] = 'In afwachting';
$string['statuspreprocessing'] = 'In behandeling';
$string['statusprocessing'] = 'Verwerken';
$string['statusrejected'] = 'Afgekeurd';
$string['subjectscope'] = 'Omvang onderwerp';
$string['user'] = 'Gebruiker';
$string['viewrequest'] = 'Bekijk het verzoek';
$string['visible'] = 'Alles uitklappen';
