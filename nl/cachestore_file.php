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
 * Strings for component 'cachestore_file', language 'nl', version '4.4'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Asynchroon wissen van map';
$string['asyncpurge_help'] = 'Indien ingeschakeld wordt een nieuwe map met cache-revisie gemaakt en wordt de oude map asynchroon verwijderd via een geplande taak.';
$string['autocreate'] = 'Automatisch map maken';
$string['autocreate_help'] = 'Indien ingeschakeld zal de map in het pad automatisch gemaakt worden als ze nog niet bestaat.';
$string['lockwait'] = 'Maximale wachttijd voor vergrendeling';
$string['lockwait_help'] = 'De maximale tijd in seconden om te wachten op een exclusieve vergrendeling voordat een cachesleutel wordt gelezen of geschreven. Dit wordt alleen gebruikt voor cachedefinities waarvoor lees- of schrijfvergrendeling vereist is.';
$string['path'] = 'Cache pad';
$string['path_help'] = 'De map die gebruikt moet worden om bestanden voor de cache te bewaren. Indien leeg gelaten (standaard) zal er automatisch een map gemaakt worden in de Moodle datamap. Dit kan gebruikt worden om te verwijzen naar een map op een schijf met betere performantie (bijvoorbeeld een RAM-schijf).';
$string['pluginname'] = 'Bestandscache';
$string['prescan'] = 'Map vooraf lezen';
$string['prescan_help'] = 'Indien ingeschakeld wordt de map bij eerste gebruikt en aanvragen voor bestanden worden naast de scangegevens gelegd. Dit kan helpen op een traag bestandssysteem wanneer je merkt dat bestandsoperaties een vertraging veroorzaken.';
$string['privacy:metadata'] = 'De bestandscache bewaart gegevens kort als deel van zijn cachingsfunctie, maar deze gegevens worden regelmatig gewist.';
$string['singledirectory'] = 'Opslag in één map';
$string['singledirectory_help'] = 'Indien ingeschakeld worden de bestanden (items in cache) opgeslagen in één enkele map, eerder dan opgesplitst in meerdere mappen.

Dit inschakelen zal de snelheid van acties met bestanden doen toenemen, maar het risico vergroten om aan de limieten van het bestandssysteem te raken.

Het wordt je aangeraden dit enkel in te schakelen als het volgende waar is:

* als je weet dat het aantal items in je cache klein genoeg is, zodat je geen problemen krijgt op het bestandssysteem dat je gebruikt.
* De gecachede gegevens zijn niet zwaar om te genereren. Als dat wel een probleem is, dan is het beter de standaardinstelling te laten staan omdat de kans op problemen hiermee verkleint.';
$string['task_asyncpurge'] = 'Asynchroon wissen van oude cache mappen';
