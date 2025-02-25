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
 * Strings for component 'tool_uploadcourse', language 'it', version '4.4'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Consenti eliminazioni';
$string['allowdeletes_help'] = 'Consente di accettare il campo eliminazione';
$string['allowrenames'] = 'Consenti cambio titoli';
$string['allowrenames_help'] = 'Consente di accettare il campo cambio titoli';
$string['allowresets'] = 'Consenti reset';
$string['allowresets_help'] = 'Consente di accettare il campo reset';
$string['cachedef_helper'] = 'Aiuto per la cache';
$string['cannotdeletecoursenotexist'] = 'Non è possibile eliminare un corso inesistente';
$string['cannotforcelang'] = 'Non sei autorizzato a forzare la lingua del corso';
$string['cannotgenerateshortnameupdatemode'] = 'Non è possibile generare un titolo abbreviato se sono ammessi aggiornamenti';
$string['cannotreadbackupfile'] = 'Non è possibile leggere il file di backup';
$string['cannotrenamecoursenotexist'] = 'Non è possibile cambiare titolo ad un corso inesistente';
$string['cannotrenameidnumberconflict'] = 'Non è possibile cambiare titolo al corso, il codice identificativo è in conflitto con un corso esistente';
$string['cannotrenameshortnamealreadyinuse'] = 'Non è possibile cambiare titolo al corso, il titolo abbreviato è già utilizzato';
$string['cannotupdatefrontpage'] = 'Non sei autorizzato a modificare la pagina home del sito.';
$string['canonlyrenameinupdatemode'] = 'È possibile cambiare il titolo del corso solo quando è consentito l\'aggiornamento';
$string['canonlyresetcourseinupdatemode'] = 'È possibile solamente il reset del corso in modalità aggiornamento';
$string['couldnotresolvecatgorybyid'] = 'Non è stato possibile individuare la categoria tramite l\'ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Non è stato possibile individuare la categoria tramite il codice identificativo';
$string['couldnotresolvecatgorybypath'] = 'Non è stato possibile individuare la categoria tramite il percorso';
$string['coursecreated'] = 'Corso creato';
$string['coursedeleted'] = 'Corso eliminato';
$string['coursedeletionnotallowed'] = 'L\'eliminazione del corso non è consentita';
$string['coursedoesnotexistandcreatenotallowed'] = 'Il corso non esiste e la creazione di corsi non è consentita';
$string['courseexistsanduploadnotallowed'] = 'Il corso esiste e l\'aggiornamento di corsi non è consentito';
$string['coursefile'] = 'File';
$string['coursefile_help'] = 'Il file deve essere un file CSV';
$string['courseidnumberincremented'] = 'Codice identificativo corso incrementato {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Elaborazione corso';
$string['courserenamed'] = 'Titolo del corso cambiato';
$string['courserenamingnotallowed'] = 'Cambiamento del titolo del corso non consentito';
$string['coursereset'] = 'Reset corso';
$string['courseresetnotallowed'] = 'Reset corso non consentito';
$string['courserestored'] = 'Corso ripristinato';
$string['coursescreated'] = 'Corsi creati: {$a}';
$string['coursesdeleted'] = 'Corsi eliminati: {$a}';
$string['courseserrors'] = 'Corsi con errori: {$a}';
$string['courseshortnamegenerated'] = 'Titolo abbreviato generato per il corso: {$a}';
$string['courseshortnameincremented'] = 'Titolo abbreviato incrementato {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Totale corsi: {$a}';
$string['coursesupdated'] = 'Corsi aggiornati: {$a}';
$string['coursetemplatename'] = 'Ripristina da questo corso dopo il caricamento';
$string['coursetemplatename_help'] = 'Inserire il titolo abbreviato del corso da usare come modello per la creazione dei corsi';
$string['coursetorestorefromdoesnotexist'] = 'Il corso dal quale ripristinare non esiste';
$string['courseupdated'] = 'Corso aggiornato';
$string['courseuploadnotallowed'] = 'Non sei autorizzato a caricare corsi nella categoria: {$a}';
$string['courseuploadupdatenotallowed'] = 'Un corso con questo titolo abbreviato esiste già non sei autorizzato a utilizzare la funzionalità di caricamento corsi per aggiornarlo.';
$string['createall'] = 'Crea tutti i corsi, se necessario incrementa il titolo abbreviato';
$string['createnew'] = 'Crea corsi nuovi, salta corsi esistenti';
$string['createorupdate'] = 'Crea corsi nuovi, aggiorna corsi esistenti';
$string['csvdelimiter'] = 'Delimitatore CSV';
$string['csvdelimiter_help'] = 'Il carattere che separa i dati nel file CSV.';
$string['csvfileerror'] = 'Il formato del file CSV presenta dei problemi. Verificare che il numero delle intestazioni corrisponda con il numero delle colonne e che il separatore e la codifica siano corretti. {$a}';
$string['csvline'] = 'Linea';
$string['customfieldinvalid'] = 'Il campo personalizzato \'{$a}\' è vuoto oppure contiene valori non validi';
$string['defaultvalues'] = 'Valori di default del corso';
$string['defaultvaluescustomfieldcategory'] = 'Valori di default di \'{$a}\'';
$string['downloadcontentnotallowed'] = 'La configurazione dello scaricamento dei corsi non è consentita.';
$string['encoding'] = 'Codifica';
$string['encoding_help'] = 'La codifica del file CSV';
$string['errorcannotcreateorupdateenrolment'] = 'Non è possibile creare o aggiornare il metodo di iscrizione \'{$a}\'';
$string['errorcannotdeleteenrolment'] = 'Non è possibile eliminare il metodo di iscrizione \'{$a}\'';
$string['errorcannotdisableenrolment'] = 'Non è possibile disabilitare il metodo di iscrizione \'{$a}\'';
$string['errorunsupportedmethod'] = 'Il metodo di iscrizione \'{$a}\' non è supportato nel caricamento CSV';
$string['errorwhiledeletingcourse'] = 'Si è verificato un errore durante l\'eliminazione del corso';
$string['errorwhilerestoringcourse'] = 'Si è verificato un errore durante il ripristino del corso';
$string['generatedshortnamealreadyinuse'] = 'Il titolo abbreviato generato è già utilizzato';
$string['generatedshortnameinvalid'] = 'Il titolo abbreviato generato non è valido';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'Il codice identificativo è già utilizzato da un altro corso';
$string['importoptions'] = 'Opzioni di importazione';
$string['invalidbackupfile'] = 'File di backup non valido';
$string['invalidcourseformat'] = 'Formato di corso non valido';
$string['invalidcsvfile'] = 'File CSV di input non valido';
$string['invaliddownloadcontent'] = 'Download non valido del valore del contenuto del corso';
$string['invalidencoding'] = 'Codifica non valida';
$string['invalideupdatemode'] = 'Modalità di aggiornamento non valida';
$string['invalidfullnametoolong'] = 'Il titolo deve essere lungo al massimo {$a} caratteri';
$string['invalidmode'] = 'Modalità selezionata non valida';
$string['invalidroles'] = 'Nome del ruolo non valido: {$a}';
$string['invalidshortname'] = 'Titolo abbreviato non valido';
$string['invalidshortnametoolong'] = 'Il titolo abbreviato deve essere lungo al massimo {$a} caratteri';
$string['invalidvisibilitymode'] = 'La modalità scelta per la visibilità non è valida';
$string['missingmandatoryfields'] = 'Campi obbligatori con valori mancanti: {$a}';
$string['missingshortnamenotemplate'] = 'Titolo abbreviato mancante e modello per generazione titolo abbreviato non impostato';
$string['mode'] = 'Modalità caricamento';
$string['mode_help'] = 'Consente di impostare la modalità di caricamento dei corsi.';
$string['nochanges'] = 'Nessuna modifica';
$string['pluginname'] = 'Caricamento corso';
$string['preview'] = 'Anteprima';
$string['privacy:metadata'] = 'Il plugin "Caricamento corsi" non memorizza dati personali.';
$string['reset'] = 'Reset corso dopo il caricamento';
$string['reset_help'] = 'Consente di accettare il campo reset dopo la creazione o l\'aggiornamento del corso.';
$string['restoreafterimport'] = 'Ripristino dopo importazione';
$string['result'] = 'Risultato';
$string['rowpreviewnum'] = 'Righe di anteprima';
$string['rowpreviewnum_help'] = 'Il numero di righe del file CSV da visualizzare in anteprima nella prossima pagina. Utile per limitare la dimensione della pagina stessa.';
$string['shortnametemplate'] = 'Modello per generazione titolo abbreviato';
$string['shortnametemplate_help'] = 'Il titolo abbreviato del corso da visualizzare nella navigazione. È possibile usare una sintassi (%f = titolo, %i = codice identificativo) oppure inserire un valore iniziale da incrementare.';
$string['templatefile'] = 'Ripristina da questo file dopo il caricamento';
$string['templatefile_help'] = 'Selezionare un file da utilizzare come modello per la creazione di corsi.';
$string['unknownimportmode'] = 'Modalità di importazione sconosciuta';
$string['updatemissing'] = 'Inserimento degli elementi mancanti dal file CSV e dai default';
$string['updatemode'] = 'Modalità aggiornamento';
$string['updatemode_help'] = 'Abilitando l\'aggiornamento dei corsi, è anche necessario indicare come aggiornare i corsi esistenti.';
$string['updatemodedoessettonothing'] = 'La modalità aggiornamento non consente di aggiornare niente.';
$string['updateonly'] = 'Aggiorna solo i corsi esistenti';
$string['updatewithdataonly'] = 'Aggiorna solo con i dati CSV';
$string['updatewithdataordefaults'] = 'Aggiorna con i dati CSV e con i default';
$string['uploadcourse:use'] = 'Utilizza lo strumento Caricamento corso';
$string['uploadcourses'] = 'Caricamento corsi';
$string['uploadcourses_help'] = 'È possibile caricare corsi tramite file di testo. Il formato del file deve essere come descritto di seguito:

* ciascuna linea contiene un record
* ciascun record è una sequenza di dati divisi dal separatore selezionato
* il primo record deve contenere l\'elenco dei nomi dei campi che definiscono il formato del dati presenti nel resto del file
* i campi obbligatori sono titolo abbreviato, titolo, descrizione e categoria';
$string['uploadcoursespreview'] = 'Anteprima caricamento corso';
$string['uploadcoursesresult'] = 'Risultati caricamento corsi';
