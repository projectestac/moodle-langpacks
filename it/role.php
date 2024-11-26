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
 * Strings for component 'role', language 'it', version '4.4'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Aggiungi un ruolo';
$string['addrole'] = 'Aggiungi un ruolo';
$string['advancedoverride'] = 'Modifica avanzata ruolo';
$string['allow'] = 'Consenti';
$string['allowassign'] = 'Autorizzati ad assegnare ruoli';
$string['allowed'] = 'Consentito';
$string['allowoverride'] = 'Autorizzati a modificare ruoli';
$string['allowroletoassign'] = 'Consenti agli utenti con il ruolo {$a->fromrole} di assegnare il ruolo {$a->targetrole}';
$string['allowroletooverride'] = 'Consenti agli utenti con il ruolo {$a->fromrole} di modificare il ruolo {$a->targetrole}';
$string['allowroletoswitch'] = 'Consenti agli utenti con il ruolo {$a->fromrole} di cambiare il ruolo in {$a->targetrole}';
$string['allowroletoview'] = 'Consenti agli utenti con il ruolo {$a->fromrole} di visualizzare utenti con il ruolo {$a->targetrole}';
$string['allowswitch'] = 'Autorizzati a cambiare ruolo';
$string['allowview'] = 'Autorizzati a visualizzare ruoli';
$string['allsiteusers'] = 'Tutti gli utenti del sito';
$string['analytics:listinsights'] = 'Elencare considerazioni';
$string['analytics:listowninsights'] = 'Elencare proprie considerazioni';
$string['analytics:managemodels'] = 'Gestire modelli';
$string['archetype'] = 'Ruolo archetipo';
$string['archetype_help'] = 'Il ruolo archetipo determina i privilegi quando si effettua il reset di un ruolo e quando vengono aggiunti privilegi ad un ruolo durante gli aggiornamenti del sito.';
$string['archetypecoursecreator'] = 'ARCHETIPO: Creatore di corsi';
$string['archetypeeditingteacher'] = 'ARCHETIPO: Docente (editor)';
$string['archetypefrontpage'] = 'ARCHETIPO: Utente autenticato nella pagina home del sito';
$string['archetypeguest'] = 'ARCHETIPO: Ospite';
$string['archetypemanager'] = 'ARCHETIPO: Manager';
$string['archetypestudent'] = 'ARCHETIPO: Studente';
$string['archetypeteacher'] = 'ARCHETIPO: Docente (non editor)';
$string['archetypeuser'] = 'ARCHETIPO: Utente autenticato';
$string['assignanotherrole'] = 'Assegna un altro ruolo';
$string['assignedroles'] = 'Ruoli assegnati';
$string['assignerror'] = 'Errore nell\'assegnazione del ruolo {$a->role} all\'utente {$a->user}.';
$string['assignglobalroles'] = 'Ruoli globali';
$string['assignmentcontext'] = 'Contesto di assegnazione';
$string['assignmentoptions'] = 'Opzioni di assegnazione';
$string['assignrole'] = 'Assegna ruolo';
$string['assignrolenameincontext'] = 'Assegna ruolo \'{$a->role}\' in {$a->context}';
$string['assignroles'] = 'Ruoli';
$string['assignroles_help'] = 'Assegnando un ruolo ad un utente in un dato contesto, l\'utente riceverà tutti i privilegi previsti dal ruolo nel contesto di assegnazione ed in tutti i contesti sottostanti.
Ad esempio, assegnando ad un utente il ruolo studente in un corso, l\'utente avrà tale ruolo nel corso, in tutti  blocchi ed in tutte le attività appartenenti al medesimo corso.';
$string['assignroles_link'] = 'admin/roles/assign';
$string['assignrolesin'] = 'Assegna ruoli nel contesto \'{$a}\'';
$string['assignrolesrelativetothisuser'] = 'Assegna ruoli relativi a questo utente';
$string['backtoallroles'] = 'Torna all\'elenco di tutti i ruoli';
$string['backup:anonymise'] = 'Rendere anonimi i dati utente nei backup';
$string['backup:backupactivity'] = 'Eseguire backup di attività';
$string['backup:backupcourse'] = 'Eseguire backup di corsi';
$string['backup:backupsection'] = 'Eseguire backup di sezioni';
$string['backup:backuptargetimport'] = 'Eseguire backup per importare';
$string['backup:configure'] = 'Configurare opzioni di backup';
$string['backup:downloadfile'] = 'Scaricare file dalle aree di backup';
$string['backup:userinfo'] = 'Eseguire backup dei dati utente';
$string['badges:awardbadge'] = 'Rilasciare badge agli utenti';
$string['badges:configurecriteria'] = 'Impostare/modificare criteri di conseguimento badge';
$string['badges:configuredetails'] = 'Impostare/modificare dettagli badge';
$string['badges:configuremessages'] = 'Configurare messaggi badge';
$string['badges:createbadge'] = 'Creare/duplicare badge';
$string['badges:deletebadge'] = 'Eliminare badge';
$string['badges:earnbadge'] = 'Conseguire badge';
$string['badges:manageglobalsettings'] = 'Gestire impostazioni globali badge';
$string['badges:manageownbadges'] = 'Visualizzare e gestire i badge conseguiti';
$string['badges:revokebadge'] = 'Revocare badge dell\'utente';
$string['badges:viewawarded'] = 'Visualizzare utenti che hanno conseguito un determinato badge senza poterlo conferire';
$string['badges:viewbadges'] = 'Visualizzare badge disponibili senza conseguirli';
$string['badges:viewotherbadges'] = 'Visualizzare badge pubblici nei profili di altri utenti';
$string['block:edit'] = 'Modificare le impostazioni del blocco';
$string['block:view'] = 'Visualizzare blocchi';
$string['blog:create'] = 'Creare nuovi interventi nei blog';
$string['blog:manageentries'] = 'Modificare e gestire interventi nei blog';
$string['blog:manageexternal'] = 'Modificare e gestire blog esterni';
$string['blog:search'] = 'Modificare e gestire interventi nei blog';
$string['blog:view'] = 'Visualizzare interventi nei blog';
$string['blog:viewdrafts'] = 'Visualizzare le bozze degli interventi dei blog';
$string['calendar:manageentries'] = 'Gestire qualsiasi evento nel calendario';
$string['calendar:managegroupentries'] = 'Gestire eventi di gruppo nel calendario';
$string['calendar:manageownentries'] = 'Gestire eventi personali nel calendario';
$string['capabilities'] = 'Privilegi';
$string['capability'] = 'Privilegio';
$string['category:create'] = 'Creare categorie';
$string['category:delete'] = 'Eliminare categorie';
$string['category:manage'] = 'Gestire categorie';
$string['category:update'] = 'Modificare categorie';
$string['category:viewcourselist'] = 'Visualizzare categorie di corsi e i corsi';
$string['category:viewhiddencategories'] = 'Visualizzare categorie nascoste';
$string['category:visibility'] = 'Visualizzare categorie nascoste';
$string['checkglobalpermissions'] = 'Verifica autorizzazioni';
$string['checkpermissions'] = 'Verifica autorizzazioni';
$string['checkpermissionsin'] = 'Verifica autorizzazioni nel contesto \'{$a}\'';
$string['checksystempermissionsfor'] = 'Verifica delle autorizzazioni di sistema per {$a->fullname}';
$string['checkuserspermissionshere'] = 'Verifica delle autorizzazioni per {$a->fullname} in questo {$a->contextlevel}';
$string['chooseroletoassign'] = 'Scegli il ruolo da assegnare';
$string['cohort:assign'] = 'Aggiungere e rimuovere membri dei gruppi globali';
$string['cohort:configurecustomfields'] = 'Configurare campi personalizzati dei gruppi globali';
$string['cohort:manage'] = 'Creare, eliminare e spostare gruppi globali';
$string['cohort:view'] = 'Visualizzare gruppi globali del sito';
$string['comment:delete'] = 'Eliminare commenti';
$string['comment:post'] = 'Scrivere commenti';
$string['comment:view'] = 'Visualizzare commenti';
$string['competency:competencygrade'] = 'Impostare valutazioni delle competenze';
$string['competency:competencymanage'] = 'Gestire quadri di competenze';
$string['competency:competencyview'] = 'Visualizzare quadri di competenze';
$string['competency:coursecompetencyconfigure'] = 'Configurare impostazioni delle competenze del corso';
$string['competency:coursecompetencygradable'] = 'Ricevere valutazioni delle competenze';
$string['competency:coursecompetencymanage'] = 'Gestire competenze del corso';
$string['competency:coursecompetencyview'] = 'Visualizzare competenze del corso';
$string['competency:evidencedelete'] = 'Eliminare attestazione';
$string['competency:plancomment'] = 'Commentare piani di formazione';
$string['competency:plancommentown'] = 'Commentare il proprio piano di formazione';
$string['competency:planmanage'] = 'Gestire piani di formazione';
$string['competency:planmanagedraft'] = 'Gestire bozze di piani formazione';
$string['competency:planmanageown'] = 'Gestire i propri piani di formazione';
$string['competency:planmanageowndraft'] = 'Gestire bozze dei propri piani di formazione';
$string['competency:planrequestreview'] = 'Richiedere la revisione di piani di formazione';
$string['competency:planrequestreviewown'] = 'Richiedere la revisione del proprio piano di formazione';
$string['competency:planreview'] = 'Revisionare piani di formazione';
$string['competency:planview'] = 'Visualizzare tutti i piani di formazione';
$string['competency:planviewdraft'] = 'Visualizzare bozze di piani di formazione';
$string['competency:planviewown'] = 'Visualizzare i propri piani di formazione';
$string['competency:planviewowndraft'] = 'Visualizzare bozze dei propri piani di formazione';
$string['competency:templatemanage'] = 'Gestire modelli di piani di formazione';
$string['competency:templateview'] = 'Visualizzare di piani di formazione';
$string['competency:usercompetencycomment'] = 'Commentare competenze degli utenti';
$string['competency:usercompetencycommentown'] = 'Commentare le proprie competenze';
$string['competency:usercompetencyrequestreview'] = 'Richiedere la revisione delle competenze di un utente';
$string['competency:usercompetencyrequestreviewown'] = 'Richiedere la revisione delle proprie competenze';
$string['competency:usercompetencyreview'] = 'Rivedere la competenza degli utenti';
$string['competency:usercompetencyview'] = 'Visualizzare competenze utente';
$string['competency:userevidencemanage'] = 'Gestire attestazioni della formazione pregressa';
$string['competency:userevidencemanageown'] = 'Gestire le proprie attestazioni della formazione pregressa';
$string['competency:userevidenceview'] = 'Visualizzare attestazioni della formazione pregressa';
$string['confirmaddadmin'] = 'Sei sicuro di aggiungere l\'utente <strong>{$a}</strong> tra gli amministratori del sito?';
$string['confirmaddadmins'] = 'Sei sicuro di aggiungere i seguenti utenti all\'elenco degli amministratori del sito?';
$string['confirmdeladmin'] = 'Sei sicuro di togliere l\'utente <strong>{$a}</strong> dagli amministratori del sito?';
$string['confirmremoveadmins'] = 'Sei sicuro di rimuovere i seguenti utenti dall\'elenco degli amministratori del sito?';
$string['confirmroleprevent'] = 'Sei sicuro di rimuovere il ruolo <strong>"{$a->role}"</strong> dall\'elenco dei ruoli che possiedono il privilegio "{$a->cap}" nel contesto "{$a->context}"?';
$string['confirmroleunprohibit'] = 'Sei sicuro di rimuovere il ruolo <strong>"{$a->role}"</strong> dall\'elenco dei ruoli che non possiedono il privilegio "{$a->cap}" nel contesto "{$a->context}"?';
$string['confirmunassign'] = 'Sei sicuro di togliere questo ruolo all\'utente?';
$string['confirmunassignno'] = 'Annulla';
$string['confirmunassigntitle'] = 'Conferma cambiamento di ruolo';
$string['confirmunassignyes'] = 'Rimuovi';
$string['contentbank:access'] = 'Accedere al deposito dei contenuti';
$string['contentbank:copyanycontent'] = 'Copiare qualsiasi contenuto dal deposito dei contenuti';
$string['contentbank:copycontent'] = 'Copiare contenuto nel deposito dei contenuti';
$string['contentbank:deleteanycontent'] = 'Eliminare qualsiasi contenuto dal deposito dei contenuti';
$string['contentbank:deleteowncontent'] = 'Eliminare propri contenuti dal deposito dei contenuti';
$string['contentbank:downloadcontent'] = 'Scaricare contenuti dal deposito dei contenuti';
$string['contentbank:manageanycontent'] = 'Gestire contenuti nel deposito';
$string['contentbank:manageowncontent'] = 'Gestire contenuti nel proprio deposito';
$string['contentbank:upload'] = 'Caricare contenuti nel deposito';
$string['contentbank:useeditor'] = 'Creare o modificare contenuti con un editor di tipi di contenuti';
$string['contentbank:viewunlistedcontent'] = 'Visualizzare contenuti non elencati nel deposito dei contenuti';
$string['context'] = 'Contesto';
$string['contextrolenotallowed'] = 'Non è consentito assegnare il ruolo {$a} in questo contesto.';
$string['course:activityvisibility'] = 'Nascondere/visualizzare attività';
$string['course:bulkmessaging'] = 'Inviare un messaggio a più persone';
$string['course:changecategory'] = 'Modificare categoria del corso';
$string['course:changefullname'] = 'Modificare titolo del corso';
$string['course:changeidnumber'] = 'Modificare il codice identificativo del corso';
$string['course:changelockedcustomfields'] = 'Modificare campi personalizzati bloccati';
$string['course:changeshortname'] = 'Modificare il titolo abbreviato del corso';
$string['course:changesummary'] = 'Modificare l\'introduzione al corso';
$string['course:configurecoursecommunication'] = 'Configurare le impostazioni di comunicazione del corso';
$string['course:configurecustomfields'] = 'Configurare campi personalizzati del corso';
$string['course:configuredownloadcontent'] = 'Configurare scaricamento dei contenuti dei corso';
$string['course:create'] = 'Creare corsi';
$string['course:creategroupconversations'] = 'Creare conversazioni di gruppo';
$string['course:delete'] = 'Eliminare corsi';
$string['course:downloadcoursecontent'] = 'Scaricare contenuti dei corsi';
$string['course:enrolconfig'] = 'Configurare istanze di plugin di iscrizione nei corsi';
$string['course:enrolreview'] = 'Rivedere le iscrizioni al corso';
$string['course:ignoreavailabilityrestrictions'] = 'Ignorare disponibilità condizionata';
$string['course:ignorefilesizelimits'] = 'Usare file di dimensioni maggiori dei limiti impostati';
$string['course:isincompletionreports'] = 'Comparire nei report di completamento';
$string['course:manageactivities'] = 'Gestire attività';
$string['course:managefiles'] = 'Gestire file';
$string['course:managegrades'] = 'Gestire valutazioni';
$string['course:managegroups'] = 'Gestire gruppi';
$string['course:managescales'] = 'Gestire scale di valutazione';
$string['course:markcomplete'] = 'Approvare manualmente il completamento del corso';
$string['course:movesections'] = 'Spostare sezioni';
$string['course:overridecompletion'] = 'Modificare lo stato di completamento delle attività';
$string['course:recommendactivity'] = 'Suggerire attività nel selettore attività';
$string['course:renameroles'] = 'Personalizzare nomi dei ruoli';
$string['course:request'] = 'Richiedere corsi';
$string['course:reset'] = 'Eseguire reset del corso';
$string['course:reviewotherusers'] = 'Rivedere altri utenti';
$string['course:sectionvisibility'] = 'Gestire visibilità delle sezioni';
$string['course:setcurrentsection'] = 'Impostare sezione attiva';
$string['course:setforcedlanguage'] = 'Forzare lingua del corso o dell\'attiivtà';
$string['course:tag'] = 'Modificare tag del corso';
$string['course:togglecompletion'] = 'Contrassegnare un\'attività come completata';
$string['course:update'] = 'Modificare impostazioni del corso';
$string['course:useremail'] = 'Abilitare/disabilitare indirizzi email';
$string['course:view'] = 'Visualizzare corsi senza parteciparvi';
$string['course:viewcoursegrades'] = 'Visualizzare valutazioni del corso';
$string['course:viewhiddenactivities'] = 'Visualizzare attività nascoste';
$string['course:viewhiddencourses'] = 'Visualizzare corsi nascosti';
$string['course:viewhiddengroups'] = 'Visualizzare gruppi nascosti';
$string['course:viewhiddensections'] = 'Visualizzare sezioni nascoste';
$string['course:viewhiddenuserfields'] = 'Visualizzare campi utente nascosti';
$string['course:viewparticipants'] = 'Visualizzare partecipanti';
$string['course:viewscales'] = 'Visualizzare scale di valutazione';
$string['course:viewsuspendedusers'] = 'Visualizzare utenti sospesi';
$string['course:visibility'] = 'Nascondere/visualizzare corsi';
$string['createrolebycopying'] = 'Aggiungi un ruolo basato su {$a}';
$string['createthisrole'] = 'Crea questo ruolo';
$string['currentcontext'] = 'Contesto attuale';
$string['currentrole'] = 'Ruolo';
$string['customroledescription'] = 'Descrizione personalizzata';
$string['customroledescription_help'] = 'Le descrizioni dei ruoli standard vengono automaticamente localizzate se la descrizione personalizzata è vuota.';
$string['customrolename'] = 'Nome personalizzato';
$string['customrolename_help'] = 'I nomi dei ruoli standard vengono automaticamente localizzati se il nome  personalizzato è vuoto.';
$string['defaultrole'] = 'Ruolo di default';
$string['defaultx'] = 'Default: {$a}';
$string['defineroles'] = 'Gestione ruoli';
$string['definitionofrolex'] = 'Definizione del ruolo \'{$a}\'';
$string['deletecourseoverrides'] = 'Cancellare tutte le modifiche di ruolo nel corso';
$string['deletelocalroles'] = 'Cancellare tutte le assegnazioni locali di ruolo';
$string['deleterolesure'] = '<p>Sei sicuro di eliminare il ruolo "{$a->name} ({$a->shortname})"?</p><p>Al momento questo ruolo è assegnato a {$a->count} utenti.</p>';
$string['deletexrole'] = 'Elimina il ruolo {$a}';
$string['duplicaterole'] = 'Duplica ruolo';
$string['duplicaterolesure'] = 'Sei sicuro di duplicare il ruolo "<b>{$a->name} ({$a->shortname})</b>"?</p>';
$string['editingrolex'] = 'Modifica del ruolo \'{$a}\'';
$string['editrole'] = 'Modificare ruolo';
$string['editxrole'] = 'Modifica il ruolo {$a}';
$string['errorbadrolename'] = 'Nome ruolo non corretto';
$string['errorbadroleshortname'] = 'Nome abbreviato del ruolo non corretto';
$string['errorexistsrolename'] = 'Nome ruolo già esistente';
$string['errorexistsroleshortname'] = 'Nome ruolo già esistente';
$string['errorroleshortnametoolong'] = 'Il nome abbreviato non deve superare i 100 caratteri';
$string['eventcapabilityassigned'] = 'Modifica privilegio';
$string['eventcapabilityunassigned'] = 'Rimozione privilegio';
$string['eventroleallowassignupdated'] = 'Aggiornamento autorizzati ad assegnare ruoli';
$string['eventroleallowoverrideupdated'] = 'Aggiornamento autorizzati a modificare ruoli';
$string['eventroleallowswitchupdated'] = 'Aggiornamento autorizzati a cambiare ruolo';
$string['eventroleallowviewupdated'] = 'Aggiornamento autorizzati a visualizzare ruoli';
$string['eventroleassigned'] = 'Assegnazione ruolo';
$string['eventrolecapabilitiesupdated'] = 'Aggiornamento privilegi ruolo';
$string['eventrolecreated'] = 'Ruolo creato';
$string['eventroledeleted'] = 'Eliminazione ruolo';
$string['eventroleunassigned'] = 'Revoca ruolo';
$string['eventroleupdated'] = 'Aggiornamento ruolo';
$string['existingadmins'] = 'Amministratori del sito esistenti';
$string['existingusers'] = '{$a} utenti esistenti';
$string['explanation'] = 'Spiegazione';
$string['export'] = 'Esporta';
$string['extusers'] = 'Utenti esistenti';
$string['extusersmatching'] = 'Utenti esistenti che corrispondono a \'{$a}\'';
$string['filter:manage'] = 'Gestire impostazioni locali dei filtri';
$string['frontpageuser'] = 'Utente autenticato nella pagina home del sito';
$string['frontpageuserdescription'] = 'Tutti gli utenti autenticati nel corso pagina home del sito.';
$string['globalrole'] = 'Ruolo globale';
$string['globalroleswarning'] = 'Attenzione: qualsiasi ruolo assegnato agli utenti tramite questa pagina, sarà un ruolo globale, ossia valido in tutto il sito, inclusa la pagina home del sito e tutti  i corsi.';
$string['gotoassignroles'] = 'Vai alla assegnazione di ruoli per questo {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Vai alla assegnazione di ruoli di sistema';
$string['grade:edit'] = 'Modificare valutazioni';
$string['grade:export'] = 'Esportare valutazioni';
$string['grade:hide'] = 'Nascondere/visualizzare valutazioni o elementi';
$string['grade:import'] = 'Importare valutazioni';
$string['grade:lock'] = 'Bloccare valutazioni o elementi';
$string['grade:manage'] = 'Gestire elementi di valutazione';
$string['grade:managegradingforms'] = 'Gestire metodi di valutazione avanzati';
$string['grade:manageletters'] = 'Gestire valutazioni letterali';
$string['grade:manageoutcomes'] = 'Gestire obiettivi di valutazione';
$string['grade:managesharedforms'] = 'Gestire modelli di valutazione avanzata';
$string['grade:override'] = 'Modificare valutazioni';
$string['grade:sharegradingforms'] = 'Condividere modelli di valutazione avanzata';
$string['grade:unlock'] = 'Sbloccare valutazioni o elementi';
$string['grade:view'] = 'Visualizzare proprie valutazioni';
$string['grade:viewall'] = 'Visualizzare valutazioni di altri utenti';
$string['grade:viewhidden'] = 'Visualizzare valutazioni nascoste per proprietario';
$string['group:configurecustomfields'] = 'Configurare campi personalizzati dei gruppi e dei raggruppamenti';
$string['h5p:deploy'] = 'Utilizzare contenuto H5P';
$string['h5p:setdisplayoptions'] = 'Impostare opzioni di visualizzazione H5P';
$string['h5p:updatelibraries'] = 'Gestire tipi di contenuto H5P';
$string['highlightedcellsshowdefault'] = 'I privilegi evidenziati nella tabella sottostante sono i privilegi di default per il ruolo archetipo selezionato sopra.';
$string['highlightedcellsshowinherit'] = 'Le caselle evidenziate nella tabella sottostante indicano i privilegi ereditati (se presenti). Ad eccezione dei privilegi che desideri modificare, tutti gli altri privilegi dovrebbero essere lasciati a Eredita.';
$string['inactiveformorethan'] = 'non attivo per più di {$a->timeperiod}';
$string['ingroup'] = 'nel gruppo "{$a->group}"';
$string['inherit'] = 'Eredita';
$string['invalidpresetfile'] = 'Il file della definizione del ruolo non è valido';
$string['legacy:admin'] = 'RUOLO ORIGINE: Amministratore';
$string['legacy:coursecreator'] = 'RUOLO ORIGINE: Creatore corsi';
$string['legacy:editingteacher'] = 'RUOLO ORIGINE: Docente (editor)';
$string['legacy:guest'] = 'RUOLO ORIGINE: Ospite';
$string['legacy:student'] = 'RUOLO ORIGINE: Studente';
$string['legacy:teacher'] = 'RUOLO ORIGINE: Docente (non editor)';
$string['legacy:user'] = 'RUOLO ORIGINE: Utente registrato';
$string['legacytype'] = 'Tipo di ruolo origine';
$string['listallroles'] = 'Elenco di tutti i ruoli';
$string['localroles'] = 'Ruoli locali';
$string['mainadmin'] = 'Amministratore primario';
$string['mainadminset'] = 'Imposta amministratore primario';
$string['manageadmins'] = 'Gestione amministratori del sito';
$string['manager'] = 'Manager';
$string['managerdescription'] = 'I manager possono accedere ai corsi e modificarli ma in genere non vi partecipano.';
$string['manageroles'] = 'Gestione ruoli';
$string['maybeassignedin'] = 'Contesti dove questo ruolo può essere assegnato';
$string['moodlenet:shareactivity'] = 'Condividere attività su MoodleNet';
$string['moodlenet:sharecourse'] = 'Condividere corsi su MoodleNet';
$string['morethan'] = 'Più di {$a}';
$string['multipleroles'] = 'Ruoli multipli';
$string['my:configsyspages'] = 'Configurare modelli di Dashboard a livello di sistema';
$string['my:manageblocks'] = 'Gestire blocchi nella Dashboard';
$string['neededroles'] = 'Ruoli autorizzati';
$string['nocapabilitiesincontext'] = 'Nessun privilegio disponibile in questo contesto';
$string['noneinthisx'] = 'Non c\'è nulla in questo {$a}';
$string['noneinthisxmatching'] = 'Non ci sono utenti corrispondenti alla ricerca \'{$a->search}\' in questo {$a->contexttype}';
$string['norole'] = 'Nessun ruolo';
$string['noroleassignments'] = 'Questo utente non ha nessun ruolo in questo sito.';
$string['noroles'] = 'Nessun ruolo';
$string['notabletoassignroleshere'] = 'L\'assegnazione di ruoli in questo contesto non è stato abilitato dall\'amministratore.';
$string['notabletooverrideroleshere'] = 'Qui non sei autorizzato a modificare i privilegi di nessun ruolo';
$string['notes:manage'] = 'Gestire note';
$string['notes:view'] = 'Visualizzare note';
$string['notset'] = 'Non impostato';
$string['novisibleroles'] = 'Nessun ruolo';
$string['overrideanotherrole'] = 'Modifica un altro ruolo';
$string['overridecontext'] = 'Modifica un contesto';
$string['overridepermissions'] = 'Modifica autorizzazioni';
$string['overridepermissions_help'] = 'Le modifiche dei ruoli consentono di alterare i privilegi in un determinato contesto.';
$string['overridepermissions_link'] = 'admin/roles/override';
$string['overridepermissionsforrole'] = 'Modifica autorizzazioni per il ruolo \'{$a->role}\' nel contesto {$a->context}';
$string['overridepermissionsin'] = 'Modifica autorizzazioni nel contesto \'{$a}\'';
$string['overrideroles'] = 'Modifica ruoli';
$string['overriderolesin'] = 'Modifica ruoli in {$a}';
$string['overrides'] = 'Modifiche';
$string['overridesbycontext'] = 'Modifiche (per contesto)';
$string['payment:manageaccounts'] = 'Gestire account';
$string['payment:viewpayments'] = 'Visualizzare pagamenti';
$string['permission'] = 'Autorizzazione';
$string['permission_help'] = 'I privilegi hanno 4 opzioni disponibili:

* Non impostato
* Consenti - Il privilegio è concesso
* Previeni - Il privilegio viene revocato, anche se già concesso in un contesto più alto
* Nega - Il privilegio non è concesso e non è possibile annullare l\'impostazione in contesti più bassi';
$string['permissions'] = 'Autorizzazioni';
$string['permissionsforuser'] = 'Autorizzazioni per l\'utente {$a}';
$string['permissionsincontext'] = 'Autorizzazioni per {$a}';
$string['portfolio:export'] = 'Esportare in un portfolio';
$string['potentialusers'] = '{$a} utenti potenziale';
$string['potusers'] = 'Utenti potenziali';
$string['potusersmatching'] = 'Utenti potenziali che corrispondono a \'{$a}\'';
$string['prevent'] = 'Previeni';
$string['privacy:metadata:preference:showadvanced'] = 'Gestione del pulsante di attivazione/disattivazione della modalità avanzata.';
$string['privacy:metadata:role_assignments'] = 'Assegnazioni dei ruoli.';
$string['privacy:metadata:role_assignments:component'] = 'Plugin responsabile dell\'assegnazione dei ruoli, vuoto quando l\'assegnazione è manuale.';
$string['privacy:metadata:role_assignments:itemid'] = 'ID dell\'istanza iscrizione/autenticazione responsabile dell\'assegnazione di questo ruolo.';
$string['privacy:metadata:role_assignments:modifierid'] = 'ID dell\'utente che ha creato o modificato l\'assegnazione del ruolo.';
$string['privacy:metadata:role_assignments:roleid'] = 'ID del ruolo.';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'La tabella memorizza i ruoli assegnati in ogni contesto.';
$string['privacy:metadata:role_assignments:timemodified'] = 'Data di creazione o modifica dell\'assegnazione del ruolo.';
$string['privacy:metadata:role_assignments:userid'] = 'ID dell\'utente.';
$string['privacy:metadata:role_capabilities'] = 'Privilegi del ruolo.';
$string['privacy:metadata:role_capabilities:capability'] = 'Nome del privilegio.';
$string['privacy:metadata:role_capabilities:modifierid'] = 'ID dell\'utente che ha creato o modificato il privilegio.';
$string['privacy:metadata:role_capabilities:permission'] = 'Autorizzazione per un privilegio: eredita, consenti, previeni o nega.';
$string['privacy:metadata:role_capabilities:roleid'] = 'ID del ruolo.';
$string['privacy:metadata:role_capabilities:tableexplanation'] = 'Privilegi e privilegi di modifica per un determinato ruolo in un determinato contesto.';
$string['privacy:metadata:role_capabilities:timemodified'] = 'Data e ora di creazione o modifica del privilegio.';
$string['privacy:metadata:role_cohortroles'] = 'Ruoli da gruppo globale';
$string['prohibit'] = 'Nega';
$string['prohibitedroles'] = 'Non autorizzati';
$string['question:add'] = 'Aggiungere domande';
$string['question:commentall'] = 'Commentare tutte le domande';
$string['question:commentmine'] = 'Commentare le proprie domande';
$string['question:config'] = 'Configurare tipi di domande';
$string['question:editall'] = 'Modificare qualsiasi domanda';
$string['question:editmine'] = 'Modificare solo le proprie domande';
$string['question:flag'] = 'Contrassegnare domande durante il tentativo';
$string['question:managecategory'] = 'Gestire categorie di domande';
$string['question:moveall'] = 'Spostare qualsiasi domanda';
$string['question:movemine'] = 'Spostare solo le proprie domande';
$string['question:tagall'] = 'Assegnare tag alle domande';
$string['question:tagmine'] = 'Assegnare tag alle proprie domande';
$string['question:useall'] = 'Utilizzare qualsiasi domanda';
$string['question:usemine'] = 'Utilizzare solo le proprie domande';
$string['question:viewall'] = 'Visualizzare tutte le domande';
$string['question:viewmine'] = 'Visualizzare solo le proprie domande';
$string['rating:rate'] = 'Valutare elementi';
$string['rating:view'] = 'Visualizzare voti totali ricevuti';
$string['rating:viewall'] = 'Visualizzare voti grezzi dati da ciascuno';
$string['rating:viewany'] = 'Visualizzare voti totali ricevuti da ciascuno';
$string['reportbuilder:edit'] = 'Modificare i propri report personalizzati';
$string['reportbuilder:editall'] = 'Modificare tutti i report personalizzati';
$string['reportbuilder:scheduleviewas'] = 'Pianificare report da visualizzare come altri utenti';
$string['reportbuilder:view'] = 'Visualizzare report personalizzati';
$string['reportbuilder:viewall'] = 'Visualizza tutti i report personalizzati';
$string['resetrole'] = 'Ripristina';
$string['resettingrole'] = 'Ripristino del ruolo \'{$a}\'';
$string['restore:configure'] = 'Configurare opzioni di ripristino';
$string['restore:createuser'] = 'Creare utenti durante il ripristino';
$string['restore:restoreactivity'] = 'Ripristinare attività';
$string['restore:restorecourse'] = 'Ripristinare corsi';
$string['restore:restoresection'] = 'Ripristinare sezioni';
$string['restore:restoretargetimport'] = 'Ripristinare da file contrassegnati  per l\'importazione';
$string['restore:rolldates'] = 'Posticipare date di attività durante il ripristino';
$string['restore:uploadfile'] = 'Caricare file dalle aree di backup';
$string['restore:userinfo'] = 'Ripristinare dati utente';
$string['restore:viewautomatedfilearea'] = 'Ripristinare corsi dai backup automatici';
$string['risks'] = 'Rischi';
$string['role:assign'] = 'Assegnare ruoli agli utenti';
$string['role:manage'] = 'Creare e gestire ruoli';
$string['role:override'] = 'Modificare autorizzazioni di altri utenti';
$string['role:review'] = 'Rivedere privilegi di altri utenti';
$string['role:safeoverride'] = 'Modificare autorizzazioni sicure di altri utenti';
$string['role:switchroles'] = 'Utilizzare altri ruoli';
$string['roleallowheader'] = 'Autorizza ruolo:';
$string['roleallowinfo'] = 'Scegli un ruolo da aggiungere all\'elenco dei ruoli consentiti nel contesto "{$a->context}", privilegio "{$a->cap}":';
$string['roleassignment'] = 'Assegnazioni di ruolo';
$string['roleassignments'] = 'Assegnazioni di ruolo';
$string['roledefinitions'] = 'Definizioni dei ruoli';
$string['rolefullname'] = 'Nome';
$string['roleincontext'] = '{$a->role} in {$a->context}';
$string['roleoriginalname'] = 'Nome originale';
$string['roleprohibitheader'] = 'Ruolo da non autorizzare';
$string['roleprohibitinfo'] = 'Scegli un ruolo da aggiungere all\'elenco dei ruoli non consentiti nel contesto "{$a->context}", privilegio "{$a->cap}":';
$string['rolerepreset'] = 'Usa ruolo preimpostato';
$string['roleresetdefaults'] = 'Default';
$string['roleresetrole'] = 'Usa ruolo o archetipo';
$string['rolerisks'] = 'Rischi intrinseci al ruolo';
$string['roles'] = 'Ruoli';
$string['roles_help'] = 'Un Ruolo è un insieme di privilegi definito a livello di sito. Il ruolo può essere assegnato agli utenti in specifici contesti.';
$string['roles_link'] = 'roles';
$string['roleselect'] = 'Seleziona ruolo';
$string['rolesforuser'] = 'Ruoli dell\'utente {$a}';
$string['roleshortname'] = 'Nome abbreviato';
$string['roleshortname_help'] = 'Il nome abbreviato del ruolo è un identificativo di base dove sono consentiti solo caratteri alfanumerici ASCII.';
$string['roletoassign'] = 'Ruolo da assegnare';
$string['roletooverride'] = 'Ruolo da modificare';
$string['safeoverridenotice'] = 'Nota: I privilegi con rischi più alti sono bloccati perché si ha solo il permesso di modificare i privilegi sicuri.';
$string['search:query'] = 'Eseguire ricerche in tutto il sito';
$string['selectanotheruser'] = 'Seleziona un altro utente';
$string['selectauser'] = 'Seleziona un utente';
$string['selectrole'] = 'Scegli un ruolo';
$string['showallroles'] = 'Visualizza tutti i ruoli';
$string['showthisuserspermissions'] = 'Visualizza le autorizzazioni di questo utente';
$string['site:accessallgroups'] = 'Accedere a qualsiasi gruppo';
$string['site:approvecourse'] = 'Approvare creazione di corsi';
$string['site:backup'] = 'Effettuare backup corsi';
$string['site:config'] = 'Modificare configurazione del sito';
$string['site:configview'] = 'Visualizzare l\'alberatura dell\'amministrazione del sito (ma non tutte le pagine contenute)';
$string['site:deleteanymessage'] = 'Eliminare qualsiasi messaggio nel sito';
$string['site:deleteownmessage'] = 'Eliminare messaggi inviati e ricevuti';
$string['site:doanything'] = 'Modificare qualsiasi cosa';
$string['site:doclinks'] = 'Visualizzare link a documenti esterni';
$string['site:forcelanguage'] = 'Forzare lingua del corso';
$string['site:import'] = 'Importare altri corsi in un corso';
$string['site:maintenanceaccess'] = 'Accedere al sito in modalità manutenzione';
$string['site:manageallmessaging'] = 'Aggiungere, rimuovere, bloccare e sbloccare contatti per qualsiasi utente';
$string['site:manageblocks'] = 'Gestire blocchi nelle pagine';
$string['site:managecontextlocks'] = 'Gestione congelamento contesti';
$string['site:messageanyuser'] = 'Inviare messaggi a chiunque ignorando preferenze di privacy';
$string['site:mnetloginfromremote'] = 'Effettuare login da un Moodle remoto';
$string['site:mnetlogintoremote'] = 'Roaming verso un\'applicazione remota tramite MNet';
$string['site:readallmessages'] = 'Leggere qualsiasi messaggio sul sito';
$string['site:restore'] = 'Ripristinare corsi';
$string['site:senderrormessage'] = 'Inviare messaggi al supporto dalle pagine di errore';
$string['site:sendmessage'] = 'Inviare messaggi a qualsiasi utente';
$string['site:trustcontent'] = 'Fidarsi dei contenuti inviati';
$string['site:uploadusers'] = 'Caricare nuovi utenti da file';
$string['site:viewanonymousevents'] = 'Visualizzare eventi anonimi nel report';
$string['site:viewfullnames'] = 'Visualizzare sempre nome e cognome degli utenti';
$string['site:viewparticipants'] = 'Visualizzare i partecipanti';
$string['site:viewreports'] = 'Visualizzare i report';
$string['site:viewuseridentity'] = 'Visualizzare negli elenchi di utenti l\'identità completa delle persone';
$string['siteadministrators'] = 'Amministratori del sito';
$string['siteadministratorsconfigphp'] = 'L\'elenco degli amministratori del sito non può essere modificata perché è definita nel file config.php';
$string['tag:edit'] = 'Modificare tag esistenti';
$string['tag:editblocks'] = 'Modificare blocchi nelle pagine dei tag';
$string['tag:flag'] = 'Segnalare tag inappropriati';
$string['tag:manage'] = 'Gestire qualsiasi tag';
$string['thisnewrole'] = 'Questo nuovo ruolo';
$string['thisusersroles'] = 'Ruoli assegnati all\'utente';
$string['unassignarole'] = 'Togli il ruolo {$a}';
$string['unassignconfirm'] = 'Sei sicuro di togliere il ruolo "{$a->role}" all\'utente "{$a->user}"?';
$string['unassignerror'] = 'Errore nella rimozione del ruolo {$a->role} all\'utente {$a->user}.';
$string['user:changeownpassword'] = 'Modificare propria password';
$string['user:create'] = 'Creare utenti';
$string['user:delete'] = 'Eliminare utenti';
$string['user:editmessageprofile'] = 'Modificare il profilo di messaggistica degli utenti';
$string['user:editownmessageprofile'] = 'Modificare il proprio profilo di messaggisitca';
$string['user:editownprofile'] = 'Modificare il proprio profilo utente';
$string['user:editprofile'] = 'Modificare profili utente';
$string['user:ignoreuserquota'] = 'Ignorare la quota dell\'utente';
$string['user:loginas'] = 'Eseguire login come altri utenti';
$string['user:manageblocks'] = 'Gestire blocchi nel profilo di altri utenti';
$string['user:manageownblocks'] = 'Gestire blocchi nel proprio profilo';
$string['user:manageownfiles'] = 'Gestire file personali';
$string['user:managesyspages'] = 'Configurare il layout di default per la parte pubblica del profilo utente';
$string['user:readuserblogs'] = 'Visualizzare i blog di qualsiasi utente';
$string['user:readuserposts'] = 'Visualizzare gli interventi di qualsiasi utente';
$string['user:update'] = 'Aggiornare i profili utente';
$string['user:viewalldetails'] = 'Visualizzare il profilo completo degli utenti';
$string['user:viewdetails'] = 'Visualizzare i profili utente';
$string['user:viewhiddendetails'] = 'Visualizzare campi nascosti nei profili utenti';
$string['user:viewlastip'] = 'Visualizzare Indirizzo IP più recente';
$string['user:viewuseractivitiesreport'] = 'Visualizzare i report delle attività degli utenti';
$string['user:viewusergrades'] = 'Visualizzare le valutazioni degli utenti';
$string['usersfrom'] = 'Utenti da {$a}';
$string['usersfrommatching'] = 'Utenti da {$a->contextname} corrispondenti alla ricerca \'{$a->search}\'';
$string['usersinthisx'] = 'Utenti in questo {$a}';
$string['usersinthisxmatching'] = 'Utenti in questo {$a->contexttype} che corrispondono alla ricerca di \'{$a->search}\'';
$string['userswithrole'] = 'Tutti gli utenti con un ruolo';
$string['userswiththisrole'] = 'Utenti col ruolo';
$string['useshowadvancedtochange'] = 'Per modificare, utilizza \'Visualizza impostazioni avanzate\'';
$string['viewingdefinitionofrolex'] = 'Visualizzazione della definizione del ruolo \'{$a}\'';
$string['viewrole'] = 'Visualizzazione dettagliata del ruolo';
$string['webservice:createmobiletoken'] = 'Creare un web service per l\'accesso mobile';
$string['webservice:createtoken'] = 'Creare token web service';
$string['webservice:managealltokens'] = 'Gestire i token web service di tutti gli utenti';
$string['whydoesuserhavecap'] = 'Come mai {$a->fullname} ha il privilegio {$a->capability} nel contesto {$a->context}?';
$string['whydoesusernothavecap'] = 'Come mai {$a->fullname} non ha il privilegio {$a->capability} nel contesto {$a->context}?';
$string['xroleassignments'] = 'Ruoli assegnati a {$a}';
$string['xuserswiththerole'] = 'Utenti con il ruolo "<b>{$a->role}</b>"';
