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
 * Strings for component 'antivirus', language 'it', version '3.11'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Plugin antivirus disponibili';
$string['antiviruscommonsettings'] = 'Impostazioni comuni antivirus';
$string['antiviruses'] = 'Plugin antivirus';
$string['antivirussettings'] = 'Gestione plugin antivirus';
$string['configantivirusplugins'] = 'Seleziona il plugin antivirus che desideri utilizzare e la sequenza di utilizzo.';
$string['datainfecteddesc'] = 'Sono stati rilevati dati infetti.';
$string['datainfectedname'] = 'Dati infetti';
$string['datastream'] = 'Dati';
$string['emailadditionalinfo'] = 'Dettagli aggiuntivi riportati dal motore antivirus:';
$string['emailauthor'] = 'Caricato da:';
$string['emailcontenthash'] = 'Hash del contenuto:';
$string['emailcontenttype'] = 'Tipo di contenuto:';
$string['emaildate'] = 'Data di caricamento:';
$string['emailfilename'] = 'Nome del file:';
$string['emailfilesize'] = 'Dimensione del file:';
$string['emailgeoinfo'] = 'Localizzazione geografica:';
$string['emailinfectedfiledetected'] = 'File infetto individuato';
$string['emailipaddress'] = 'Indirizzo IP:';
$string['emailreport'] = 'Report:';
$string['emailscanner'] = 'Scanner:';
$string['emailscannererrordetected'] = 'Si è verificato un errore durante la scansione';
$string['emailsubject'] = '{$a} :: Notifica Antivirus';
$string['enablequarantine'] = 'Abilita quarantena';
$string['enablequarantine_help'] = 'Nella cartella di quarantena verranno inseriti i file infetti per poterli ispezionare in seguito ([dataroot]/{$a}). Il caricamento dei file sarà comunque segnalato come non andato a buon fine. Qualora fosse presente un processo di scansione virus a livello di sistema, sarà necessario escludere dalla scansione la cartella di quarantena.';
$string['fileinfecteddesc'] = 'E\' stato individuato un file infetto';
$string['fileinfectedname'] = 'File infetto';
$string['notifyemail'] = 'Email delle notifiche antivirus';
$string['notifyemail_help'] = 'Le notifiche antivirus saranno indirizzate all\'email configurata in caso di individuazione di un virus. Non configurando l\'impostazione, le notifiche saranno inviate a tutti gli amministratori del sito.';
$string['privacy:metadata'] = 'Il sistema Antivirus non memorizza dati personali.';
$string['quarantinedfiles'] = 'File inseriti in quarantena dall\'antivirus';
$string['quarantinedisabled'] = 'La quarantena è disabilitata, i file non sono stati memorizzati.';
$string['quarantinetime'] = 'Durata massima quarantena:';
$string['quarantinetime_desc'] = 'I file in quarantena saranno rimossi trascorsa la durata massima della quarantena.';
$string['taskcleanup'] = 'Elimina file in quarantena';
$string['unknown'] = 'Sconosciuto';
$string['virusfound'] = '{$a->item} è stato analizzato dall\'antivirus ed è risultato infetto.';
