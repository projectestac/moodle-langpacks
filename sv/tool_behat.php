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
 * Strings for component 'tool_behat', language 'sv', version '4.4'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Detta administrationsverktyg hjälper utvecklare och testare att skapa .feature-filer som beskriver Moodles funktioner och kör dem automatiskt. Stegdefinitioner som är tillgängliga för användning i .feature-filer listas nedan.';
$string['allavailablesteps'] = 'Tillgängliga stegdefinitioner';
$string['errorbehatcommand'] = 'Fel vid körning av behat CLI-kommando. Försök köra "{$a} --help" manuellt för att få vidare information om problemet.';
$string['errorcomposer'] = 'Composer-beroenden inte installerade.';
$string['errordataroot'] = '$CFG->behat_dataroot har inte konfigurerats eller så är den ogiltig.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix och $CFG->behat_wwwroot måste specificeras i config.php.';
$string['erroruniqueconfig'] = '<code>$CFG->behat_dataroot</code>, <code>$CFG->behat_prefix</code> och <code>$CFG->behat_wwwroot</code> behöver skilja sig från värdena för <code>$CFG->dataroot</code>, <code>$CFG->prefix</code>, <code>$CFG->wwwroot</code>, <code>$CFG->phpunit_dataroot</code> och <code>$CFG->phpunit_prefix values</code>.<br/>Eller, om <code>$CFG->behat_prefix</code> är lika så måste <code>$CFG->behat_dbname</code> eller <code>$CFG->behat_dbhost</code> skilja sig från <code>$CFG->phpunit_dbname</code> och <code>$CFG->phpunit_dbhost</code> och från <code>$CFG->dbname</code> och <code>$CFG->dbhost</code>.';
$string['fieldvalueargument'] = 'Fältvärdesargument';
$string['fieldvalueargument_help'] = 'Detta argument ska fyllas i av ett fältvärde. Det finns många fälttyper, inklusive enkla som kryssrutor, val eller textområden eller komplexa som datumväljare. Se dev-dokumentationen <a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">Acceptance_testing</a> för information om förväntade fältvärden.';
$string['giveninfo'] = 'Givna. Processer för att ställa in miljön.';
$string['infoheading'] = 'Info';
$string['installinfo'] = 'Läs {$a} för installations- och testexekveringsinfo.';
$string['newstepsinfo'] = 'Läs {$a} för information om hur man lägger till nya stegdefinitioner.';
$string['newtestsinfo'] = 'Läs {$a} för information om hur man skriver nya tester.';
$string['nostepsdefinitions'] = 'Det finns inga stegdefinitioner som matchar detta filter.';
$string['pluginname'] = 'Acceptanstestning';
$string['privacy:metadata'] = 'Pluginmodulen Acceptanstestning lagrar ingen personinformation.';
$string['stepsdefinitionscomponent'] = 'Område';
$string['stepsdefinitionscontains'] = 'Innehåller';
$string['stepsdefinitionsfilters'] = 'Stegdefinitioner';
$string['stepsdefinitionstype'] = 'Typ';
$string['theninfo'] = 'Sen. Kontroller för att validera att utfallen är de förväntade.';
$string['unknownexceptioninfo'] = 'Det är problem med Selenium eller din webbläsare. Försäkra dig om att du använder senaste versionen av Selenium. Fel:';
$string['viewsteps'] = 'Filter';
$string['warndirrootconfigfound'] = 'En konfigurationsfil hittades i {$a}. Denna fil uppdateras inte automatiskt och kan bli förlegad. Vi rekommenderar att du tar bort denna fil.';
$string['wheninfo'] = 'När. Åtgärd som förorsakar en händelse.';
$string['wrongbehatsetup'] = 'Något är fel med behat-inställningen och därför kan inte stegdefinitionerna visas: <b>{$a->errormsg}</b><br/><br/>Vänligen kontrollera att:<ul> <li>Värdena för $CFG->behat_dataroot, $CFG->behat_prefix och $CFG->behat_wwwroot som anges i config.php skiljer sig från värdena för $CFG->dataroot, $CFG->prefix och $CFG->wwwroot.</li> <li>Du körde "{$a->behatinit}" från din Moodle root katalog.</li> <li>Beroenden installeras i vändor/ och filen {$a->behatcommand} har exekveringsrättighetet.</li></ul>';
