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
 * Strings for component 'tool_xmldb', language 'it', version '4.4'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Reale';
$string['addpersistent'] = 'Aggiungi campi permanenti obbligatori';
$string['aftertable'] = 'Dopo la tabella:';
$string['back'] = 'Indietro';
$string['backtomainview'] = 'Torna alla vista principale';
$string['cannotuseidfield'] = 'Non è possibile inserire il campo "id,  è una colonna autonumeric';
$string['change'] = 'Modifica';
$string['charincorrectlength'] = 'Lunghezza errata di un campo carattere';
$string['check_bigints'] = 'Cerca DB Integer errati';
$string['check_defaults'] = 'Cerca valori di default inconsistenti';
$string['check_foreign_keys'] = 'Cerca violazioni di foreign key';
$string['check_indexes'] = 'Cerca indici mancanti nel DB';
$string['check_oracle_semantics'] = 'Cerca semantiche di lunghezza errata';
$string['checkbigints'] = 'Controlla integer';
$string['checkdefaults'] = 'Controlla default';
$string['checkforeignkeys'] = 'Controlla foreign key';
$string['checkindexes'] = 'Controlla indici';
$string['checkoraclesemantics'] = 'Controlla semantiche';
$string['completelogbelow'] = '(visualizza il log completo della ricerca)';
$string['confirmcheckbigints'] = 'La funzione individua la presenza di  <a href="http://tracker.moodle.org/browse/MDL-11038">Integer potenzialmente errati</a> nel server Moodle, generando automaticamente il codice SQL necessario per sistemare gli Integer errati individuati. Il codice SQL viene generato ma non eseguito.

Una volta completata l\'individuazione, è possibile copiare il codice SQL generato ed eseguirlo tramite l\'interfaccia SQL preferita (effettuare sempre un backup del database prima di eseguire il codice SQL).

Si raccomanda di utilizzare la versione di Moodle più recente (versione +) disponibile per la release in uso prima di cercare valori di Integer errati.

La ricerca non effettua modifiche sul database, legge solamente i dati e pertanto può essere eseguita con sicurezza in qualsiasi momento.';
$string['confirmcheckdefaults'] = 'La funzione individua la presenza di valori di default inconsistenti nel server Moodle, generando automaticamente il codice SQL necessario per sistemare tutti i valori dei default inconsistenti eventualmente presenti. Il codice SQL viene generato ma non eseguito.

Una volta completata l\'individuazione, è possibile copiare il codice SQL generato ed eseguirlo tramite l\'interfaccia SQL preferita (effettuare sempre un backup del database prima di eseguire il codice SQL).

Si raccomanda di utilizzare la versione di Moodle più recente (versione +) disponibile per la release in uso prima di cercare valori di default inconsistenti.

La ricerca non effettua modifiche sul database, legge solamente i dati e pertanto può essere eseguita con sicurezza in qualsiasi momento.';
$string['confirmcheckforeignkeys'] = 'La funzione individua la presenza di possibili violazioni delle foreign key definite nel file install.xml. (Al momento Moodle non impone vincoli per le foreign key ed è questo il motivo per cui potrebbero essere presenti.)

Prima di cercare violazioni delle foreign key, si raccomanda di utilizzare la versione di Moodle più recente (versione +) disponibile per la release in uso.

La ricerca non effettua modifiche sul database, legge solamente i dati e pertanto può essere eseguita con sicurezza in qualsiasi momento.';
$string['confirmcheckindexes'] = 'La funzione individua indici mancanti nel server Moodle, generando automaticamente il codice SQL necessario per sistemare tutti i valori dei default inconsistenti eventualmente presenti. Il codice SQL viene generato ma non eseguito.

Una volta completata l\'individuazione, è possibile copiare il codice SQL generato ed eseguirlo tramite l\'interfaccia SQL preferita (effettuare sempre un backup del database prima di eseguire il codice SQL).

Si raccomanda di utilizzare la versione di Moodle più recente (versione +) disponibile per la release in uso prima di cercare indici mancanti.

la ricerca non effettua modifiche sul database, legge solamente i dati e pertanto può essere eseguita con sicurezza in qualsiasi momento.';
$string['confirmcheckoraclesemantics'] = 'La funzione cerca nel sito Moodle <a href="http://tracker.moodle.org/browse/MDL-29322">colonne Oracle varchar2 che usano la semantica BYTE</a> e genererà (senza eseguirlo) il codice SQL necessario per convertire le colonne all\'uso delle semantica CHAR (preferibile sia per la compatibilità tra database sia per la lunghezza massima dei contenuti).

Una volta completata la ricerca è possibile copiare il codice SQL generato ed eseguirlo tramite l\'interfaccia SQL preferita (effettuare sempre un backup del database prima di eseguire il codice SQL).

Si raccomanda di utilizzare la versione di Moodle più recente (versione +) disponibile per la release in uso prima di cercare colonne con semantica BYTE.

la ricerca non effettua modifiche sul database, legge solamente i dati e pertanto può essere eseguita con sicurezza in qualsiasi momento.';
$string['confirmdeletefield'] = 'Sei sicuro di rimuovere il campo:';
$string['confirmdeleteindex'] = 'Sei sicuro di rimuovere l\'indice:';
$string['confirmdeletekey'] = 'Sei sicuro di rimuovere la chiave:';
$string['confirmdeletetable'] = 'Sei sicuro di rimuovere la tabella:';
$string['confirmdeletexmlfile'] = 'Sei sicuro di rimuovere il file:';
$string['confirmrevertchanges'] = 'Sei sicuro di ripristinare le modifiche effettuate:';
$string['create'] = 'Crea';
$string['createtable'] = 'Crea tabella:';
$string['defaultincorrect'] = 'Default errato';
$string['delete'] = 'Elimina';
$string['delete_field'] = 'Elimina campo';
$string['delete_index'] = 'Elimina indice';
$string['delete_key'] = 'Elimina chiave';
$string['delete_table'] = 'Elimina tabella';
$string['delete_xml_file'] = 'Elimina file XML';
$string['doc'] = 'Doc';
$string['docindex'] = 'Indice documentazione:';
$string['documentationintro'] = 'La documentazione viene generata automaticamente dalle definizioni XMLDB del database. È disponibile solamente in Inglese.';
$string['down'] = 'Giù';
$string['duplicate'] = 'Duplica';
$string['duplicatefieldname'] = 'Esiste già un altro campo con lo stesso nome ';
$string['duplicatefieldsused'] = 'Sono in uso campi duplicati';
$string['duplicateindexname'] = 'Il nome dell\'indice è duplicato';
$string['duplicatekeyname'] = 'Esiste già una chiave con lo stesso nome';
$string['duplicatetablename'] = 'Esiste giò una tabella con lo stesso nome';
$string['edit'] = 'Modifica';
$string['edit_field'] = 'Modifica campo';
$string['edit_field_save'] = 'Salva campo';
$string['edit_index'] = 'Modifica indice';
$string['edit_index_save'] = 'Salva indice';
$string['edit_key'] = 'Modifica chiave';
$string['edit_key_save'] = 'Salva chiave';
$string['edit_table'] = 'Modifica tabella';
$string['edit_table_save'] = 'Salva tabella';
$string['edit_xml_file'] = 'Modifica file XML';
$string['enumvaluesincorrect'] = 'Valori non corretti per un campo enum';
$string['expected'] = 'Attesi';
$string['extensionrequired'] = 'Spiacente - per svolgere questa azione è necessaria l\'estensione PHP \'{$a}\'. Se vuoi usare questa funzionalità per favore installa l\'estensione.';
$string['extraindexesfound'] = 'Indici extra individuati';
$string['field'] = 'Campo';
$string['fieldnameempty'] = 'Il nome campo è vuoto';
$string['fields'] = 'Campi';
$string['fieldsnotintable'] = 'Il campo non è presente nella tabella';
$string['fieldsusedinindex'] = 'Il campo è usato come indice';
$string['fieldsusedinkey'] = 'Questo campo è usato come chiave.';
$string['filemodifiedoutfromeditor'] = 'Attenzione: il file è stato modificato localmente tramite l\'editor XMLDB. Il salvataggio annullerà le modifiche locali.';
$string['filenotwriteable'] = 'File non scrivibile';
$string['fkunknownfield'] = 'La foreign key {$a->keyname} nella tabella {$a->tablename} punta ad un campo inesistente {$a->reffield} nella tabella {$a->reftable}.';
$string['fkunknowntable'] = 'La foreign key {$a->keyname} nella tabella {$a->tablename} punta ad una tabella inesistente {$a->reftable}.';
$string['fkviolationdetails'] = 'La foreign key {$a->keyname} nella tabella  {$a->tablename} è stata violata  {$a->numviolations} su un totale di {$a->numrows} righe.';
$string['float2numbernote'] = 'Nota: sebbene i campi "float" siano supportati al 100% da XMLDB, si consiglia comunque di migrare verso campi "number".';
$string['floatincorrectdecimals'] = 'Numero di decimali non corretto per un campo float';
$string['floatincorrectlength'] = 'Lunghezza non corretta per un campo float';
$string['generate_all_documentation'] = 'Tutta la documentazione';
$string['generate_documentation'] = 'Documentazione';
$string['gotolastused'] = 'Vai all\'ultimo file utilizzato';
$string['incorrectfieldname'] = 'Nome errato';
$string['incorrectindexname'] = 'Il nome dell\'indice è errato';
$string['incorrectkeyname'] = 'Il nome della chiave è errato';
$string['incorrecttablename'] = 'Il nome della tabella non è corretto';
$string['index'] = 'Indice';
$string['indexes'] = 'Indici';
$string['indexnameempty'] = 'Il nome dell\'indice è vuoto';
$string['integerincorrectlength'] = 'Lunghezza errata di un campo Integer';
$string['key'] = 'Chiave';
$string['keynameempty'] = 'Il nome';
$string['keys'] = 'Chiavi';
$string['listreservedwords'] = 'Elenco delle Parole Riservate<br/>(utilizzato per mantenere aggiornato <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a>)';
$string['load'] = 'Carica';
$string['main_view'] = 'Vista principale';
$string['masterprimaryuniqueordernomatch'] = 'I campi nella foreign key devono essere elencati nello stesso ordine con cui compaiono nella UNIQUE KEY della tabella referenziata.';
$string['missing'] = 'Mancanti';
$string['missingindexes'] = 'Indici mancanti individuati';
$string['mustselectonefield'] = 'Devi selezionare un campo per vedere le azioni possibili!';
$string['mustselectoneindex'] = 'Devi selezionare un indice per vedere le azioni possibili!';
$string['mustselectonekey'] = 'Devi selezionare  una chiave per vedere le azioni possibili!';
$string['new_table_from_mysql'] = 'Nuova tabella da MySQL';
$string['newfield'] = 'Nuovo campo';
$string['newindex'] = 'Nuovo indice';
$string['newkey'] = 'Nuova chiave';
$string['newtable'] = 'Nuova tabella';
$string['newtablefrommysql'] = 'Nuova tabella da MySQL';
$string['nofieldsspecified'] = 'Non sono stati specificati campi';
$string['nomasterprimaryuniquefound'] = 'Le colonnae referenziata dalla foreign key devonoe essere incluse in una primary o unique KEY della tabella referenziata. Da notare che la colonna in UNIQUE INDEX non è sufficiente.';
$string['nomissingorextraindexesfound'] = 'Non sono stati trovati indici mancanti o aggiuntivi, quindi non sono necessarie ulteriori azioni.';
$string['noreffieldsspecified'] = 'Non sono stati specificati campi di riferimento';
$string['noreftablespecified'] = 'La tabella di riferimento specificata non è stata trovata';
$string['noviolatedforeignkeysfound'] = 'Non sono state trovate violazioni di Foreign key';
$string['nowrongdefaultsfound'] = 'Non sono stati trovati valori di default inconsistenti. Il DB non ha bisogno di azioni ulteriori.';
$string['nowrongintsfound'] = 'Non sono stati trovati Integer errati. Il DB non ha bisogno di azioni ulteriori.';
$string['nowrongoraclesemanticsfound'] = 'Non sono state trovate colonne che utilizzano le semantiche Oracle BYTE, il tuo database non ha bisogno di ulteriori azioni.';
$string['numberincorrectdecimals'] = 'Numero errato di decimali per un campo number';
$string['numberincorrectlength'] = 'Lunghezza errata per un campo number';
$string['numberincorrectwholepart'] = 'La parte intera del numero è troppo grande per il campo numerico';
$string['pendingchanges'] = 'Nota: hai effettuato modiche al file. Puoi salvarle in qualsiasi momento.';
$string['pendingchangescannotbesaved'] = 'Il file è stato modificato ma non è possibile salvare le modifiche. Per favore verifice che il processo del web server abbia i permessi di scrittura per la cartella e per il file "install.xml".';
$string['pendingchangescannotbesavedreload'] = 'Il file è stato modificato ma non è possibile salvare le modifiche. Per favore verifica che il processo del web server abbia i permessi di scrittura per la cartella e per il file "install.xml". Dopo la verifica ricarica la pagina per controllare se è possibile salvare le modifiche.';
$string['persistentfieldscomplete'] = 'Sono stati aggiunti i seguenti campi:';
$string['persistentfieldsconfirm'] = 'Vuoi aggiungere i seguenti campi:';
$string['persistentfieldsexist'] = 'I seguenti campi sono già esistenti:';
$string['pluginname'] = 'Editor XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'La chiave primaria non può essere null';
$string['privacy:metadata'] = 'Il plugin "Editor XMLDB" non memorizza dati personali.';
$string['reconcile_files'] = 'Controlla se i file XMLDB richiedono riconciliazione';
$string['reconcile_files_intro'] = 'Questa funzionalità esamina il contenuto di tutti i file XMLDB per verificare che corrispondano ai risultati della loro generazione dall\'editor XMLDB.

Verrà visualizzato un elenco di file che devono essere riconciliati (rigenerati) e l\'editor XMLDB può essere utilizzato per correggerli.';
$string['reconcile_files_no'] = 'Tutti i file sono OK, non è necessaria la riconciliazione.';
$string['reconcile_files_yes'] = 'File da riconciliare:';
$string['reconcilefiles'] = 'Riconcilia file XMLDB';
$string['reserved'] = 'Riservata';
$string['reservedwords'] = 'Parole riservate';
$string['revert'] = 'Ripristina';
$string['revert_changes'] = 'Ripristina modifiche';
$string['save'] = 'Salva';
$string['searchresults'] = 'Risultati della ricerca';
$string['selectaction'] = 'Scegli un\'azione:';
$string['selectdb'] = 'Scegli un database:';
$string['selectfieldkeyindex'] = 'Scegli un campo/chiave/indice:';
$string['selectonecommand'] = 'Per favore seleziona un\'azione dall\'elenco per visualizzare il codice PHP';
$string['selectonefieldkeyindex'] = 'Per favore seleziona un campo/chiave/indice dall\'elenco per visualizzare il codice PHP';
$string['selecttable'] = 'Scegli una tabella:';
$string['table'] = 'Tabella';
$string['tablenameempty'] = 'Il nome della tabella non può essere lasciato vuoto';
$string['tables'] = 'Tabelle';
$string['unknownfield'] = 'Riferimento ad un campo sconosciuto.';
$string['unknowntable'] = 'Riferimento ad una tabella sconosciuta.';
$string['unload'] = 'Scarica';
$string['up'] = 'Su';
$string['view'] = 'Visualizza';
$string['view_reserved_words'] = 'Visualizza parole riservate';
$string['view_structure_php'] = 'Visualizza struttura PHP';
$string['view_structure_sql'] = 'Visualizza struttura SQL';
$string['view_table_php'] = 'Visualizza tabella PHP';
$string['view_table_sql'] = 'Visualizza tabella SQL';
$string['viewedited'] = 'Visualizza con le modifiche';
$string['vieworiginal'] = 'Visualizza originale';
$string['viewphpcode'] = 'Visualizza codice PHP';
$string['viewsqlcode'] = 'Visualizza codice SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Violazioni di foreign key';
$string['violatedforeignkeysfound'] = 'Sono stati individuate violazioni di Foreign key';
$string['violations'] = 'Violazioni';
$string['wrong'] = 'Errati';
$string['wrongdefaults'] = 'Sono stati trovati valori di default errati';
$string['wrongints'] = 'Sono stati trovati integer errati';
$string['wronglengthforenum'] = 'Lunghezza errata di un campo enum';
$string['wrongnumberofreffields'] = 'Numero errato di campi di riferimento';
$string['wrongoraclesemantics'] = 'Sono state trovate semantiche Oracle  BYTE non valide.';
$string['wrongreservedwords'] = 'Parole riservate in uso<br/>(da notare che il nomi delle tabelle non sono importanti se si utilizza $CFG->prefix)';
$string['yesextraindexesfound'] = 'Sono stati trovati i seguenti indici aggiuntivi.';
$string['yesmissingindexesfound'] = '<p>Nel tuo DB sono stati individuati alcuni indici mancanti. Di seguito vengono riportati i dettagli e il codice SQL necessario per crearli (non dimenticare di effettuare un backup del database prima di eseguire il codice SQL.</p>
<p>Dopo aver eseguito il codice SQL utilizza di nuovo questa funzione per verificare che non manchino altri indici.</p>';
$string['yeswrongdefaultsfound'] = '<p>Nel tuo DB sono stati individuati valori di default inconsistenti. Di seguito vengono riportati i dettagli e il codice SQL necessario per sistemarli (non dimenticare di effettuare un backup del database prima di eseguire il codice SQL.</p>
<p>Dopo aver eseguito il codice SQL utilizza di nuovo questa funzione per verificare che non siano presenti altri valori di default inconsistenti.</p>';
$string['yeswrongintsfound'] = '<p>Nel DB sono stati individuati Integer errati. Di seguito vengono riportati i dettagli e il codice SQL necessario per sistemarli (non dimenticare di effettuare un backup del database prima di eseguire il codice SQL.</p>
<p>Dopo aver eseguito il codice SQL utilizzare di nuovo questa funzione per verificare che non siano presenti altri Integer errati.</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>Nel database sono state trovate alcune colonne che utilizzano le semantiche Oracle BYTE. Di seguito vengono riportati i dettagli e il codice SQL necessario per sistemarli con l\'interfaccia SQL preferita (non dimenticare di effettuare un backup del database prima di eseguire il codice SQL).</p>
<p>Dopo aver eseguito le istruzioni, verificare nuovamente la presenza di semantiche errate con questo strumento.</p>';
