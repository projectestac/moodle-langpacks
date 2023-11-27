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
 * Strings for component 'block_xp', language 'nl', version '4.1'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acties';
$string['activityoresourceis'] = 'De activiteit of bron is {$a}';
$string['addacondition'] = 'Voeg een conditie toe';
$string['addarule'] = 'Voeg een regel toe';
$string['addinstructions'] = 'Voeg meer informatie toe';
$string['additionalresources'] = 'Extra bronnen';
$string['addlevel'] = 'Level toevoegen';
$string['addoninstallationerror'] = 'We detecteren een probleem met de add-on (local_xp), deze lijkt niet correct te zijn geïnstalleerd. Een beheerder moet de installatie voltooien.';
$string['addonnotactivated'] = 'De add-on is niet geactiveerd.';
$string['addrulesformhelp'] = 'De laatste kolom bepaalt de hoeveelheid ervaringspunten wanneer er voldaan is aan een criterium.';
$string['admindefaultrulesintro'] = 'De volgende regels worden standaard gebruikt voor cursussen waarin het blok is toegevoegd.';
$string['admindefaultsettingsintro'] = 'De onderstaande instellingen worden standaard gebruikt wanneer het blok nieuw wordt toegevoegd aan een cursus. Sommige instellingen kunnen worden vergrendeld, in welk geval hun waarde strikt wordt afgedwongen in alle gevallen van de plug-in.';
$string['admindefaultvisualsintro'] = 'Het volgende wordt standaard gebruikt wanneer het blok nieuw wordt toegevoegd aan een cursus.';
$string['adminscanearnxp'] = 'Beheerder kan punten verdienen';
$string['adminscanearnxp_desc'] = 'Beheerders worden standaard niet opgenomen in de groep gebruikers die punten kunnen verdienen. Dit komt omdat beheerders altijd de rechten hebben _block/xp:earnxp_, waardoor ze overal doorlopend punten kunnen verzamelen. U kunt deze instelling gebruiken om beheerders ook punten te laten verdienen.';
$string['anonymity'] = 'Anonimiteit';
$string['anonymity_help'] = 'Deze instelling bepaalt of deelnemers elkaars naam en avatar kunnen zien.';
$string['apply'] = 'Pas toe';
$string['awardaxpwhen'] = '<strong>{$a}</strong> punten worden verdiend wanneer:';
$string['badgeaward'] = 'Badge om uit te reiken';
$string['badgeawarddesc'] = 'Een badge om toe te kennen wanneer de gebruiker het level bereikt.';
$string['basepoints'] = 'Basis punten';
$string['basepointslineardesc'] = 'De minimale stap tussen elk level.';
$string['basepointsrelativedesc'] = 'Het aantal punt om mee te beginnen.';
$string['basexp'] = 'Algoritmebasis';
$string['blockappearance'] = 'Uiterlijk van het blok';
$string['blockappearancemovedtopluginsettings'] = 'De instellingen voor het uiterlijk van het blok zijn verplaatst naar de instellingenpagina van de plug-in.';
$string['cachedef_filters'] = 'Level filters';
$string['cachedef_ruleevent_eventslist'] = 'Lijst van gebeurtenissen';
$string['cannotbesetindefaults'] = 'Deze kan niet op standaardwaarde worden gezet.';
$string['cannotearnpoints'] = 'Kan geen punten verdienen.';
$string['cannotshowblockconfig'] = 'Normaal gesproken zou ik hier de weergave-instellingen weergeven, maar ik kon je blok niet vinden. Om het uiterlijk van het blok te wijzigen, ga terug [hier]({$a}) (of waar je het blok hebt toegevoegd), schakel de bewerkingsmodus in en volg de optie "Configureren" in de vervolgkeuzelijst van het blok. Als je het blok niet kunt vinden, voeg het dan opnieuw toe aan je cursus.';
$string['cannotshowblockconfigsys'] = 'Normaal gesproken zou ik hier de weergave-instellingen weergeven, maar ik kon je blok niet vinden. Het kan ontbreken op de [frontpage]({$a->fp}) en het [default dashboard]({$a->mysys}) van uw gebruikers, of in beide aanwezig zijn. Om de instellingen vanaf hier te bewerken, zorg er dan voor dat deze slechts in één van beide wordt weergegeven.';
$string['changelevelformhelp'] = 'Als je het aantal levels aanpast, zullen de standaard level badges tijdelijk uitgeschakeld worden om er voor te zorgen dat er geen levels zonder badges ontstaan. Als je het aantal levels wilt aan passen, ga dan naar de pagina \'Visuals (Visueel)\' om de custom badges weer aan te zetten na het op slaan van dit formulier.';
$string['cheatguard'] = 'Valsspeelbeveiliging';
$string['clicktoselectcm'] = 'Klik om een activiteit of bron te selecteren';
$string['cmselector'] = 'Selector voor cursusmodules';
$string['coefxp'] = 'Algoritmecoëfficient';
$string['colon'] = '{$a->a}: {$a->b}';
$string['compatibilitycheck'] = 'Controle van de compatibiliteit';
$string['configblockrankingsnapshot'] = 'Momentopname van scorebord weergeven';
$string['configblockrankingsnapshot_help'] = 'De momentopname van het scorebord geeft de rang van de gebruiker weer. Het zal ook proberen de twee mensen om de gebruiker heen weer te geven. Deze functie vereist dat het scorebord is ingeschakeld en dat de rangen worden weergegeven.';
$string['configdescription'] = 'Introductie';
$string['configdescription_help'] = 'Een kort introductiebericht dat in het blok wordt weergegeven. Studenten hebben de mogelijkheid om het bericht te negeren, in welk geval ze het niet meer zien.';
$string['configheader'] = 'Instellingen';
$string['configrecentactivity'] = 'Laat recente beloningen zien';
$string['configrecentactivity_help'] = 'Indien ingeschakeld, toont het blok een korte lijst met recente gebeurtenissen die de student met punten hebben beloond.';
$string['configtitle'] = 'Titel';
$string['configtitle_help'] = 'De titel van het blok';
$string['congratulationsyouleveledup'] = 'Gefeliciteerd!';
$string['coolthanks'] = 'Cool, bedankt!';
$string['courselog'] = 'Cursus log';
$string['coursereport'] = 'Cursusverslag';
$string['courserules'] = 'Cursusregels';
$string['courseselectedcolon'] = 'Geselecteerde cursus';
$string['coursesettings'] = 'Cursusinstellingen';
$string['coursevisuals'] = 'Cursus visueel';
$string['currencysign'] = 'Punten symbool';
$string['currencysign_help'] = 'Met deze instelling kun je de betekenis van de punten wijzigen. Het wordt weergegeven naast het aantal punten dat elke gebruiker heeft als vervanging voor de verwijzing naar _ervaringspunten_. Kies een van de meegeleverde symbolen of upload je eigen symbolen!';
$string['currencysignxp'] = 'XP (Ervaringspunten)';
$string['customizelevels'] = 'Pas de levels aan';
$string['dangerzone'] = 'Gevarenzone';
$string['defaultlevels'] = 'Standaard levels';
$string['defaultrules'] = 'Standaardregels';
$string['defaultrulesformhelp'] = 'Dit zijn de standaard regels van deze plugin. Ze geven automatisch exerpience punten en negeren wat onbelangrijke gebeurtenissen. Regels die je zelf aanmaakt overstijgen deze standaard regels.';
$string['defaultsettings'] = 'Standaard instellingen';
$string['defaultvisuals'] = 'Standaard visueel';
$string['deletecondition'] = 'Verwijder conditie';
$string['deleterule'] = 'Verwijder regel';
$string['description'] = 'Beschrijving';
$string['difference'] = 'Diff.';
$string['difficulty'] = 'Punt reken methode';
$string['difficultyflat'] = 'Gelijk';
$string['difficultyflatdesc'] = 'Alle niveaus vereisen hetzelfde aantal punten om te behalen.';
$string['difficultylinear'] = 'Toenemend';
$string['difficultylineardesc'] = 'Niveaus duren geleidelijk langer om te bereiken.';
$string['difficultylinearincrdesc'] = 'Het aantal punten dat wordt gebruikt voor de progressieve moeilijkheidsgraad.';
$string['difficultypointincrease'] = 'Punten verhogen';
$string['difficultyrelative'] = 'Sneeuwbal effect';
$string['difficultyrelativedesc'] = 'Levels worden exponentieel moeilijker te bereiken.';
$string['difficultyrelativeincrdesc'] = 'Het percentage van punten dat moet worden verhoogd ten opzichte van het vorige level.';
$string['discoverlevelupplus'] = 'Ontdek Level Up XP+';
$string['dismissnotice'] = 'Sluit deze melding';
$string['displayeveryone'] = 'Laat iedereen zien';
$string['displaynneighbours'] = 'Toon {$a}  buren';
$string['displayoneneigbour'] = 'Toon één buur';
$string['displayparticipantsidentity'] = 'Toon deelnemers identiteit';
$string['displayrank'] = 'Toon rang';
$string['displayrelativerank'] = 'Toon een relatieve rang';
$string['documentation'] = 'Documentatie';
$string['drops'] = 'Drops';
$string['drops_help'] = 'In videogames kunnen sommige personages items of ervaringspunten op de grond _laten vallen_ die de speler kan oprapen. Deze items en punten worden gewoonlijk drops genoemd.

In Level Up XP zijn drops shortcodes (bijv. \'[xpdrop abcdef]\') die een instructeur in reguliere Moodle-content kan plaatsen. Wanneer een gebruiker deze drops tegenkomt, worden deze drops -opgepakt- en wordt er een bepaald aantal punten toegekend.

Op dit moment zijn drops onzichtbaar voor de gebruiker en worden passief punten toegekend wanneer ze voor het eerst worden aangetroffen.

Drops kunnen worden gebruikt om op een slimme manier punten toe te kennen wanneer een bepaald type inhoud door een student wordt bekeken. Hier zijn enkele ideeën:

-Plaats een drop in de feedback van een quiz (test) die alleen zichtbaar is bij perfecte scores;
- Plaats een drop diep verstopt in de inhoud om het bekijken te belonen;
- Plaats een drop in een interessante forumdiscussie;
- Plaats een drop op een moeilijk bereikbare bladzijde in een lesmodule.

[Meer info] (https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['dropsintro'] = 'Drops zijn codefragmenten die rechtstreeks in inhoud worden geplaatst en die punten toekennen wanneer ze door een gebruiker worden aangetroffen.';
$string['editingdefaultsettingsinwholesitemodenotice'] = '**Let op!** U wijzigt momenteel de actieve instellingen niet, maar de standaardwaarden. Aangezien Level Up XP voor de hele site wordt gebruikt, is de kans groot dat u de instellingen voor de hele site wijzigt. [Navigeer here] ({$a->url}) om deze instellingen te wijzigen, of volg de link "Instellingen" van het XP-blok.';
$string['editinstructions'] = 'Bewerk informatie';
$string['enablecheatguard'] = 'Beveilig valsspelen';
$string['enablecheatguard_help'] = 'De bewaker valsspelen biedt een eenvoudig, goedkoop mechanisme om te voorkomen dat studenten het systeem misbruiken met behulp van voor de hand liggende technieken, zoals het eindeloos verversen van dezelfde pagina of het steeds opnieuw herhalen van dezelfde actie.';
$string['enableinfos'] = 'Activeer informatiepagina';
$string['enableinfos_help'] = 'Wanneer dit op "Nee" staat, kunnen studenten de informatiepagina niet benaderen.';
$string['enableladder'] = 'Activeer de ladder';
$string['enableladder_help'] = 'Wanneer dit op "Nee" staat, kunnen studenten niet de ladder benaderen.';
$string['enablelevelupnotif'] = 'Activeer level up notificatie';
$string['enablelevelupnotif_help'] = 'Wanneer dit op "Ja" staat, zullen studenten een popup krijgen met een felicitatie wanneer ze een level omhoog gaan.';
$string['enablelogging'] = 'Activeer logs';
$string['enablexpgain'] = 'Activeer XP verkrijgen';
$string['enablexpgain_help'] = 'Wanner dit op "Nee" staat, zal niemand in de cursus experience punten krijgen. Dit is nuttig om het aantal experience punten te bevriezen, of om het te activeren op gegeven tijdstip.

Dit kan iets preciezer gecontroleerd worden door te configureren via \'blockxp:earnxp\'';
$string['errorformvalues'] = 'Er zijn wat problemen in de formulier waarden, fix dit alsjeblieft.';
$string['errorlevelsincorrect'] = 'Het minimale aantal levels is 2';
$string['errornotalllevelsbadgesprovided'] = 'Niet alle level badges zijn aangeleverd. De volgende missen:{$a}';
$string['errorunknownevent'] = 'Fout: onbekende gebeurtenis';
$string['errorunknownmodule'] = 'Fout: onbekende module';
$string['errorxprequiredlowerthanpreviouslevel'] = 'De XP nodig is lager of gelijk aan die van het vorige level.';
$string['event_user_leveledup'] = 'Gebruiker is een level omhoog gegaan';
$string['eventis'] = 'De gebeurtenis is {$a}';
$string['eventname'] = 'Gebeurtenis naam';
$string['eventproperty'] = 'Gebeurtenis eigenschap';
$string['eventtime'] = 'Gebeurtenis tijd';
$string['for1day'] = 'Voor 1 dag';
$string['for1month'] = 'Voor een maand';
$string['for1week'] = 'Voor een week';
$string['for3days'] = 'Voor 3 dagen';
$string['forever'] = 'Voor altijd';
$string['forthewholesite'] = 'Voor de gehele site';
$string['give'] = 'geef';
$string['incourses'] = 'In cursussen';
$string['infos'] = 'Informatie';
$string['invalidxp'] = 'Ongeldige XP waarde';
$string['keeplogs'] = 'Behoud logs';
$string['ladder'] = 'Ladder';
$string['level'] = 'Level';
$string['levelbadges'] = 'Level badges';
$string['levelbadgesformhelp'] = 'Benoem de bestanden [level].[file extension], bijvoorbeeld: 1.png, 2.png, etc... De aanbevolen resolutie is: 100x100.';
$string['levelcount'] = 'Aantal levels';
$string['leveldesc'] = 'Level beschrijving';
$string['levels'] = 'Levels';
$string['levelswillbereset'] = 'Waarschuwing! Dit formulier opslaan herberekend de levels van iedereen!';
$string['levelup'] = 'Level omhoog!';
$string['levelx'] = 'Level #{$a}';
$string['likenotice'] = '<strong>Bevalt deze pluging?</strong> Neem alsjeblieft een momentje om <a href="{$a->moodleorg}" target="_blank"> deze plugin toe te voegen aan je favorieten op Moodle.org</a> of <a href="{$a->github}" target="_blank">star het op Github</a>';
$string['logging'] = 'Loggen';
$string['maxactionspertime'] = 'Maximale acties in tijd frame.';
$string['maxactionspertime_help'] = 'Het maximale aantal acties die mee tellen voor XP binnen de opgegeven tijd. Alle acties daarbuiten worden genegeerd.';
$string['movecondition'] = 'Verplaats conditie';
$string['moverule'] = 'Verplaats regel';
$string['navinfos'] = 'Informatie';
$string['navladder'] = 'Ladder';
$string['navlevels'] = 'Levels';
$string['navlog'] = 'Log';
$string['navreport'] = 'Verslag';
$string['navrules'] = 'Regels';
$string['navsettings'] = 'Instellingen';
$string['navvisuals'] = 'Visueel';
$string['participatetolevelup'] = 'Neem deel aan de cursus om experience points te krijgen en levels omhoog te gaan!';
$string['pickaconditiontype'] = 'Kies een conditie type';
$string['pluginname'] = 'Level omhoog!';
$string['progress'] = 'Vooruitgang';
$string['property:action'] = 'Gebeurtenis actie';
$string['property:component'] = 'Gebeurtenis onderdeel';
$string['property:crud'] = 'Gebeurtenis CRUD';
$string['property:eventname'] = 'Gebeurtenis naam';
$string['property:target'] = 'Gebeurtenis doel';
$string['rank'] = 'Rang';
$string['reallyresetdata'] = 'Weet je zeker dat je alle levels en experience points wilt resetten voor iedereen in deze cursus?';
$string['reallyresetgroupdata'] = 'Weet je zeker dat je alle levels en experience points wilt resetten voor iedereen in deze groep?';
$string['resetcoursedata'] = 'Reset de cursus data';
$string['resetgroupdata'] = 'Reset de groep data';
$string['rule'] = 'Regel';
$string['rule:contains'] = 'bevat';
$string['rule:eq'] = 'is gelijk aan';
$string['rule:eqs'] = 'is precies gelijk aan';
$string['rule:gt'] = 'is groter dan';
$string['rule:gte'] = 'is groter dan of gelijk aan';
$string['rule:lt'] = 'is kleiner dan';
$string['rule:lte'] = 'is kleiner dan of gelijk aan';
$string['rule:regex'] = 'is gelijk aan de regex';
$string['rulecm'] = 'Activiteit of bron';
$string['rulecmdesc'] = 'De activiteit of bron is \'{$a->contextname}\'.';
$string['ruleevent'] = 'Specifieke gebeurtenis';
$string['ruleeventdesc'] = 'De gebeurtenis is {$a->eventname}';
$string['ruleproperty'] = 'Gebeurtenis eigenschap';
$string['rulepropertydesc'] = 'De eigenschap \'{$a->property}\' {$a->compare}\'{$a->value}\'.';
$string['ruleset'] = 'Set van condities';
$string['ruleset:all'] = 'Als voldaan is aan ALLE condities';
$string['ruleset:any'] = 'Als voldaan is aan tenminste één van de condities';
$string['ruleset:none'] = 'Als voldaan is aan GEEN van de condities';
$string['rulesformhelp'] = '<p> Deze plugin gebruikt de gebeurtenissen om experience points aan acties gedaan door studenten te koppelen. Je kunt het formulier hier beneden gebruiken om je eigen regels toe te voegen en de standaard regels te bekijken. </p>
<p>It is advised to check the plugin\'s <a href="{$a->log}">log</a> to identify what events are triggered as you perform actions in the course, and also to read more about events themselves: <a href="{$a->list}">list of all events</a>, <a href="{$a->doc}">developer documentation</a>.</p>
<p> Tot slot, de plugin negeert altijd:
<ul>
 <li> De acties gedaan door administrators, gasten of gebruikers die niet ingelogd zijn. </li>
<li>De acties gedaan door gebruikers die niet het block/xp:earnxp mogen bekijken </li>
<li> Herhaalde acties in een korte tijd, om valsspelen te voorkomen</li>
<li> Gebeurtenissen die gemarkeerd zijn als anoniem, in een anonieme feedback bijvoorbeeld</li>
<li> En alle gebeurtenissen van gebruikers die niet deelnemen </li>
</ul>
</p>';
$string['timebetweensameactions'] = 'Benodigde tijd tussen gelijke acties';
$string['timebetweensameactions_help'] = 'In seconden, de minimale tijd die verstreken moet zijn tussen twee gelijke acties om beiden te laten tellen. Een actie is gelijk wanneer deze geplaatst is in het zelfde object of in de zelfde context. Het lezen van een forum post is een gelijke actie als dezelfde post nog een keer gelezen wordt.';
$string['timeformaxactions'] = 'Tijdsbestek voor maximale acties.';
$string['timeformaxactions_help'] = 'Aantal seconden waarin een gebruiker niet het maximale aantal acties moet overschrijden.';
$string['updateandpreview'] = 'Update en laat zien';
$string['usealgo'] = 'Gebruik algoritme';
$string['usecustomlevelbadges'] = 'Gebruik aangepaste badges';
$string['usecustomlevelbadges_help'] = 'Wanneer ingesteld op Ja, moet je voor elk level een afbeelding aanleveren.';
$string['value'] = 'Waarde';
$string['valuessaved'] = 'De waarden zijn succesvol opgeslagen.';
$string['viewtheladder'] = 'Bekijk de ladder';
$string['when'] = 'Wanneer';
$string['wherearexpused'] = 'Wanneer worden experience points gebruikt?';
$string['wherearexpused_desc'] = 'Wanneer';
$string['xp'] = 'Experience points';
$string['xp:addinstance'] = 'Voeg nieuw XP blok toe';
$string['xp:earnxp'] = 'Experience points verdienen';
$string['xp:myaddinstance'] = 'Voeg het blok aan mijn dashboard toe.';
$string['xp:view'] = 'Laat het blok en gerelateerde pagina\'s zien';
$string['xpgaindisabled'] = 'XP verdienen uitgeschakeld.';
$string['xprequired'] = 'XP vereist.';
$string['youreachedlevela'] = 'Je hebt level {$a} behaald!';
$string['yourownrules'] = 'Je eigen regels.';
