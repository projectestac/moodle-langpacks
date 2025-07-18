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
 * Strings for component 'tool_task', language 'eu', version '4.4'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad hoc';
$string['adhocempty'] = 'Ad hoc atazen ilara hutsik dago';
$string['adhocqueueold'] = 'Prozesatu gabeko ataza zaharrenak {$a->age} du, eta hori {$a->max} baino gehiago da';
$string['adhocqueuesize'] = 'Ad hoc atazen ilarak {$a} ataza du';
$string['adhoctaskid'] = 'Ad hoc atazaren IDa: {$a}';
$string['adhoctaskrun'] = 'Ad hoc atazaren exekuzioa hasita';
$string['adhoctasks'] = 'Ad hoc atazak';
$string['adhoctasksdue'] = 'Ad hoc atazen amaiera';
$string['adhoctasksfailed'] = 'Huts egindako ad hoc atazak';
$string['adhoctasksfuture'] = 'Etorkizuneko ad hoc atazak';
$string['adhoctasksrunning'] = 'Exekutatzen ari diren ad hoc atazak';
$string['asap'] = '<abbr title="Ahal bezain laster">ASAP</abbr>';
$string['backtoadhoctasks'] = 'Itzuli Ad hoc atazetara';
$string['backtoscheduledtasks'] = 'Itzuli programatutako atazetara';
$string['blocking'] = 'Blokeoak';
$string['cannotfindthepathtothecli'] = 'Ez da aurkitu PHP CLI exekutagarriaren bidea eta ondorioz atazaren exekuzioa bertan behera utzi da. Zehaztu \'PHP CLIrako bidea\' ezarpena Gunearen kudeaketa / Zerbitzaria / Sistemaren bideak atalean.';
$string['checkadhocqueue'] = 'Ad hoc atazen ilara';
$string['checkcronrunning'] = 'Cron-a martxan';
$string['checklongrunningtaskcount'] = 'Iraupen luzeko ataza kopurua: {$a}';
$string['checklongrunningtasks'] = 'Iraupen luzeko atazak';
$string['checkmaxfaildelay'] = 'Atazen gehieneko atzerapena';
$string['classname'] = 'Klasearen izena';
$string['clearfaildelay_confirm'] = 'Ziur zaude \'{$a}\' atazaren huts egiteen ondoriozko atzerapena garbitu nahi duzula?';
$string['component'] = 'Osagaia';
$string['corecomponent'] = 'Sistema';
$string['crondisabled'] = 'Cron-a desgaituta dago. Ez da ataza berririk abiaraziko. Sistemak ez du ondo funtzionatuko berriz gaitzen denera arte.';
$string['cronok'] = 'Cron-a maiz exekutatzen ari da';
$string['default'] = 'Lehenetsitakoa';
$string['defaultx'] = 'Lehenetsitakoa: {$a}';
$string['disabled'] = 'Desgaituta';
$string['disabled_help'] = 'Desgaitutako programatutako atazak ez dira cron-ean exekutatzen, baina CLI erremintaren bitartez exekutatzen jarrai daiteke.';
$string['edittaskschedule'] = 'Editatu atazaren programazioa: {$a}';
$string['enablerunnow'] = 'Baimendu \'Exekutatu orain\' programatutako atazetarako';
$string['enablerunnow_desc'] = 'Baimendu kudeatzaileek ataza bat edozein unetan exekutatzea, programatutako unean exekutatu arte itxaron behar izan beharrean. Funtzio honek Sistemaren bideak ataleko \'PHP CLIrako bidea\' (pathtophp) ezarpena zehaztuta egotea behar du. Ataza web-zerbitzarian exekutatzen da, eta hori dela eta agian funtzionalitate hau desgaitu nahiko duzu errendimendu arazo potentzialak ekiditeko.';
$string['faildelay'] = 'Huts egiteen ondoriozko atzerapena';
$string['failed'] = 'Huts eginda';
$string['fromcomponent'] = 'Zereginaren jatorrizko osagaia: {$a}';
$string['hostname'] = 'Hostalari-izena';
$string['lastcronstart'] = 'Azken cron-exekuziotik igarotako denbora: {$a}';
$string['lastruntime'] = 'Azken exekuzioa';
$string['lastupdated'] = 'Azkenengoz eguneratuta {$a}.';
$string['nextruntime'] = 'Hurrengo exekuzioa';
$string['noclassname'] = 'Klasearen izena ez da zehaztu';
$string['notasks'] = 'Ez dago atazarik martxan';
$string['payload'] = 'Atazaren datuak';
$string['pid'] = 'PIDa';
$string['plugindisabled'] = 'Plugina desgaituta dago';
$string['pluginname'] = 'Programatutako atazen ezarpenak';
$string['privacy:metadata'] = 'Programatutako atazen ezarpenak pluginak ez du datu pertsonalik biltzen.';
$string['resettasktodefaults'] = 'Berrabiarazi programatutako ataza lehenetsitako balioetara';
$string['resettasktodefaults_help'] = 'Honek lokalki egindako edozein aldaketa baztertu eta ataza honen programazioa bere jatorrizko balioetara itzuliko du.';
$string['run_adhoctasks'] = 'Exekutatu ad hoc atazak';
$string['runadhoc'] = 'Exekutatu ad hoc atazak orain?';
$string['runadhoc_confirm'] = 'Atazak web-zerbitzarian exekutatuko dira eta baliteke denbora-tarte bat behar izatea amaitzeko.';
$string['runadhoctask'] = 'Exekutatu {$a->taskid} IDa duen \'{$a->task}\' ataza';
$string['runadhoctasks'] = 'Exekutatu \'{$a}\' ataza guztiak';
$string['runadhoctasksfailed'] = 'Exekutatu huts egindako \'{$a}\' atazak';
$string['runagain'] = 'Exekutatu berriro';
$string['runclassname'] = 'Exekutatu guztiak';
$string['runclassnamefailedonly'] = 'Exekutatu huts egindako guztiak';
$string['runningalltasks'] = 'Ataza guztiak exekutatzen';
$string['runningfailedtasks'] = 'Huts egindako atazak exekutatzen';
$string['runningtasks'] = 'Une honetan martxan dauden atazak';
$string['runnow'] = 'Exekutatu orain';
$string['runnow_confirm'] = 'Ziur zaude \'{$a}\' ataza orain exekutatu nahi duzula? Ataza web-zerbitzarian exekutatuko da eta denbora bat eman dezake osatu arte.';
$string['runpattern'] = 'Exekuzio-patroia';
$string['scheduled'] = 'Programatuta';
$string['scheduledtaskchangesdisabled'] = 'Moodleko konfigurazioan programatutako atazen zerrendari aldaketak egitea ekidin da.';
$string['scheduledtasks'] = 'Programatutako atazak';
$string['showall'] = 'Erakutsi guztiak';
$string['showfailedonly'] = 'Erakutsi huts egindakoak soilik';
$string['showsummary'] = 'Erakutsi ad hoc atazen laburpena';
$string['slowtask'] = 'Atazaren exekuzioak {$a} baino denbora gehiago behar izan du';
$string['started'] = 'Abian';
$string['taskage'] = 'Exekuzio denbora';
$string['taskdetails'] = 'Exekuzioak {$a->time} baino denbora gehiago (gehienekoa: {$a->maxtime}) behar izan duen ataza kopurua: {$a->count} ataza daude';
$string['taskdisabled'] = 'Ataza desgaituta';
$string['taskfailures'] = 'Huts egindako {$a} ataza';
$string['taskid'] = 'Atazaren IDa';
$string['tasklogs'] = 'Atazen erregistroak';
$string['tasknofailures'] = 'Ez dago huts egindako atazarik';
$string['taskrunningtime'] = 'Atazaren exekuzioak {$a} behar izan du';
$string['taskscheduleday'] = 'Eguna';
$string['taskscheduleday_help'] = 'Programatutako atazetarako hileko egunentzako eremua. Eremuak unix cron-aren formatu bera erabiltzen du. Hauek dira adibide batzuk:

* <strong>*</strong> Egunero
* <strong>*</strong> Bi egunean behin
* <strong>*</strong> Hileko lehen egunean
* <strong>*</strong> Hileko lehen eta 15. egunean';
$string['taskscheduledayofweek'] = 'Asteko eguna';
$string['taskscheduledayofweek_help'] = 'Programatutako atazetarako asteko egunentzako eremua. Eremuak unix cron-aren formatu bera erabiltzen du. Hauek dira adibide batzuk:

<strong>*</strong> Egunero
<strong>0</strong> Igandero
<strong>6</strong> Larunbatero
<strong>1,5</strong> Astelehen eta ostiralero';
$string['taskschedulehour'] = 'Ordua';
$string['taskschedulehour_help'] = 'Programatutako atazetarako orduentzako eremua. Eremuak unix cron-aren formatu bera erabiltzen du. Hauek dira adibide batzuk:

<strong>*</strong> Orduro
<strong>*/2</strong> Bi orduan behin
<strong>2-10</strong> Orduro 2:00etatik 10:00ak bitartean (biak barne)
<strong>2,6,9</strong> 2:00etan, 06:00etan eta 9:00etan';
$string['taskscheduleminute'] = 'Minutua';
$string['taskscheduleminute_help'] = 'Programatutako atazetarako minutuentzako eremua. Eremuak unix cron-aren formatu bera erabiltzen du. Hauek dira adibide batzuk:

<strong>*</strong> Minuturo
<strong>*/5</strong> 5 minutuan behin
<strong>2-10</strong> Minuturo orduko 2. eta 10. minutuaren artean (biak barne)
<strong>2,6,9</strong> Orduko 2. miinutuan, 6. minutuan eta 9. minutuan';
$string['taskschedulemonth'] = 'Hilabetea';
$string['taskschedulemonth_help'] = 'Programatutako atazetarako hilabeteentzako eremua. Eremuak unix cron-aren formatu bera erabiltzen du. Hauek dira adibide batzuk:

<strong>*</strong> Hilabetero
<strong>*/2</strong> Bi hilean behin
<strong>1</strong> Urtarrila guztietan
<strong>1,5</strong> Urtarrilean eta maiatza guztietan';
$string['viewlogs'] = 'Ikusi {$a}(e)rako erregistroak';
