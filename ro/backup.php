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
 * Strings for component 'backup', language 'ro', version '4.4'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Procesul de backup s-a finalizat';
$string['asyncbackupcompletebutton'] = 'Continuare';
$string['asyncbackupcompletedetail'] = 'Procesul de backup s-a finalizat cu succes. <br/> Puteți accesa copia de rezervă pe <a href="{$a}"> pagina de restaurare. </a>';
$string['asyncbackuperror'] = 'Procesul de backup a eșuat';
$string['asyncbackuperrordetail'] = 'Procesul de backup a eșuat. Vă rugăm să contactați administratorul de sistem.';
$string['asyncbackuppending'] = 'Procesul de creare copie rezervă este în așteptare';
$string['asyncbackupprocessing'] = 'Procesul de creare copie rezervă este în execuție';
$string['asyncbadexecution'] = 'Executarea incorectă a controlerului de rezervă. Este {$a} și ar trebui să fie 2.';
$string['asynccheckprogress'] = 'Puteți verifica progresul în orice moment pe <a href="{$a}"> pagina de restaurare </a>.';
$string['asyncemailenable'] = 'Activare notificări';
$string['asyncemailenabledetail'] = 'Dacă este activat, utilizatorii vor primi o notificare când se finalizează o copie de rezervă sau o restaurare asincronă.';
$string['asyncgeneralsettings'] = 'Copie de rezervă / restaurare asincronă';
$string['asyncmessagebody'] = 'Notificare';
$string['asyncmessagebodydefault'] = '{Operațiunea} dumneavoastră (ID: {backupid}) s-a finalizat cu succes. Se poate accesa aici: <a href="{link}">{link}</a>.';
$string['asyncmessagebodydetail'] = 'Notificare de trimis când se finalizează o copie de rezervă sau o restaurare asincronă.';
$string['asyncmessagesubject'] = 'Subiect';
$string['asyncmessagesubjectdefault'] = '{operation} Moodle s-a finalizat cu succes';
$string['asyncmessagesubjectdetail'] = 'Subiectul notificării';
$string['asyncnowait'] = 'Nu trebuie să așteptați aici, deoarece procesul va continua în fundal.';
$string['asyncprocesspending'] = 'Proces în așteptare';
$string['asyncrestorecomplete'] = 'Procesul de restaurare s-a finalizat';
$string['asyncrestorecompletebutton'] = 'Continuă';
$string['asyncrestorecompletedetail'] = 'Procesul de restaurare s-a finalizat cu succes. Dacă faceți clic pe continuare, veți ajunge la <a href="{$a}"> cursul pentru elementul restaurat. </a>';
$string['asyncrestoreerror'] = 'Procesul de restaurare a eșuat';
$string['asyncrestoreerrordetail'] = 'Procesul de restaurare a eșuat. Vă rugăm să contactați administratorul de sistem.';
$string['asyncrestoreinprogress'] = 'Restaurează în curs';
$string['asyncrestoreinprogress_help'] = 'Restaurările de curs asincrone care sunt în curs sunt prezentate aici.';
$string['asyncrestorepending'] = 'Procesul de restaurare este în așteptare';
$string['asyncrestoreprocessing'] = 'Restaurarea este în curs';
$string['asyncreturn'] = 'Revino la curs';
$string['autoactivedescription'] = 'Alegeți dacă doriți sau nu să faceți backup-uri automate. Dacă este selectată opțiunea manuală, backup-ul automat va fi posibil doar prin scriptul automat CLI backup. Acesta se poate face fie manual în linia de comandă, fie prin intermediul cron.';
$string['autoactivedisabled'] = 'Dezactivat';
$string['autoactiveenabled'] = 'Activat';
$string['autoactivemanual'] = 'Manual';
$string['automatedbackupschedule'] = 'Program';
$string['automatedbackupschedulehelp'] = 'Alege zilele din săptămână când se fac copiile de rezervă.';
$string['automatedbackupsinactive'] = 'Administratorul site-ului încă nu a activat backup-urile automate';
$string['automatedbackupstatus'] = 'Status creare de copii de rezervă';
$string['automateddeletedays'] = 'Șterge backup-uri mai vechi de';
$string['automatedmaxkept'] = 'Numărul maxim de backup-uri păstrate';
$string['automatedmaxkepthelp'] = 'Se specifică numărul maxim de backup-uri automate recente care să fie păstrate pentru fiecare curs. Backup-urile mai vechi vor fi șterse automat.';
$string['automatedminkept'] = 'Numărul minim de backup-uri păstrate';
$string['automatedminkepthelp'] = 'Dacă backup-uri mai vechi de un anumit număr de zile sunt șterse, se poate întâmpla ca un curs inactiv să rămână fără niciun backup. Pentru a preveni acest lucru, ar trebui să fie specificat un număr minim de backup-uri care să fie păstrate.';
$string['automatedsettings'] = 'Setări copie de rezervă programată';
$string['automatedsetup'] = 'Configurare backup automat';
$string['automatedstorage'] = 'Stocare backup automat';
$string['automatedstoragehelp'] = 'Alegeți locul unde doriți să fie stocate backup-urile atunci când sunt create în mod automat';
$string['backupactivity'] = 'Creează copie de rezervă a activităţii: {$a}';
$string['backupautoactivitiesdescription'] = 'Setează valoarea implicită pentru includerea activităților într-o copie de rezervă. Pentru ca să funcționeze bine coșul de reciclare, această setare trebuie să fie activată.';
$string['backupcourse'] = 'Creează copie de rezervă a cursului: {$a}';
$string['backupcoursedetails'] = 'Detalii curs';
$string['backupcoursesection'] = 'Secţiune: {$a}';
$string['backupcoursesections'] = 'Secţiuni de curs';
$string['backupdate'] = 'Data efectuării';
$string['backupdetails'] = 'Detalii copie de rezervă';
$string['backupdetailsnonstandardinfo'] = 'Fișierul selectat nu este un fișier standard back-up Moodle. Procesul de reconstituire va încerca să convertească fișierul back-up în formatul standard și apoi să îl reconstituie.';
$string['backupfile'] = 'Copie de rezervă';
$string['backupformat'] = 'Format';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Format necunoscut';
$string['backuplog'] = 'Informații tehnice și avertizări';
$string['backupmode'] = 'Mod';
$string['backupmode10'] = 'General';
$string['backupmode20'] = 'Import';
$string['backupmode30'] = 'Centru';
$string['backupmode40'] = 'Același site';
$string['backupmode50'] = 'Automat';
$string['backupmode60'] = 'Convertit';
$string['backupmode70'] = 'Asincron';
$string['backupsection'] = 'Creează copie de rezervă a secţunii de curs: {$a}';
$string['backupsettings'] = 'Setări copie de rezervă';
$string['backupsitedetails'] = 'Detalii site';
$string['backupstage16action'] = 'Continuă';
$string['backupstage1action'] = 'Următorul';
$string['backupstage2action'] = 'Următorul';
$string['backupstage4action'] = 'Creează copie de rezervă';
$string['backupstage8action'] = 'Continuă';
$string['backupthenrestore'] = 'Back-up finalizat. Start pentru restaurare.';
$string['backuptype'] = 'Tip';
$string['backuptypeactivity'] = 'Activitate';
$string['backuptypecourse'] = 'Curs';
$string['backuptypesection'] = 'Secțiune';
$string['backupversion'] = 'Versiune copie de rezervă';
$string['cannotfindassignablerole'] = 'Rolul {$a} din fişierul de copie de rezervă nu poate fi mapat pe niciunul din rolurile pe care aveţi dreptul să le asignaţi.';
$string['choosefilefromactivitybackup'] = 'Zona de backup activitate';
$string['choosefilefromactivitybackup_help'] = 'Copii de rezervă ale acestei activități.';
$string['choosefilefromautomatedbackup'] = 'Backup-uri automate';
$string['choosefilefromautomatedbackup_help'] = 'Copii de rezervă generate automat.';
$string['choosefilefromcoursebackup'] = 'Zona backup curs';
$string['choosefilefromcoursebackup_help'] = 'Copii de rezervă ale acestui curs.';
$string['choosefilefromuserbackup'] = 'Zona privată de back-up a utilizatorului';
$string['choosefilefromuserbackup_help'] = 'Copii de rezervă private ale tuturor cursurilor, cu informații anonime despre utilizator.';
$string['config_keep_groups_and_groupings'] = 'În mod implicit păstrați grupurile și grupările curente.';
$string['config_keep_roles_and_enrolments'] = 'În mod implicit păstrați rolurile și înscrierile curente.';
$string['config_overwrite_conf'] = 'Permiteți ca utilizatorii să suprascrie configurarea actuală a cursului';
$string['config_overwrite_course_fullname'] = 'În mod implicit, suprascrieți numele complet al cursului cu cel din fișierul de rezervă. Acest lucru necesită verificarea „Suprascrieți configurația cursului” și utilizatorul actual să aibă capacitatea de a schimba numele complet al cursului (moodle / course: changefullname)';
$string['config_overwrite_course_shortname'] = 'În mod implicit, suprascrieți numele scurt al cursului cu cel din fișierul de rezervă. Acest lucru necesită verificarea „Suprascrieți configurația cursului” și utilizatorul actual să aibă capacitatea de a schimba numele scurt al cursului (moodle / course: changeshortname)';
$string['config_overwrite_course_startdate'] = 'În mod implicit, suprascrieți data de începere a cursului cu cea din fișierul de rezervă. Acest lucru necesită verificarea „Suprascrieți configurația cursului” și utilizatorul curent să aibă capacitatea de a reda datele cursului la restaurare (moodle / restore: rolldates)';
$string['configgeneralactivities'] = 'Stabileşte setarea implicită pentru includerea activităţilor într-o copie de rezervă.';
$string['configgeneralanonymize'] = 'Dacă această setare este activată, toate informaţiile legate de utilizator vor fi implicit anonimizate.';
$string['configgeneralbadges'] = 'Stabilește setarea implicită pentru includerea ecusoanelor într-un backup.';
$string['configgeneralblocks'] = 'Stabileşte setarea implicită pentru includerea blocurilor într-o copie de rezervă';
$string['configgeneralcalendarevents'] = 'Se setează implicit pentru includerea evenimentelor din calendar într-un backup.';
$string['configgeneralcomments'] = 'Stabileşte setarea implicită pentru includerea comentariilor într-o copie de rezervă';
$string['configgeneralcompetencies'] = 'Setează implicit pentru includerea competențelor din calendar dintr-o copie de rezervă.';
$string['configgeneralcontentbankcontent'] = 'Setează valoarea implicită pentru includerea conținutului băncii de conținut într-o copie de rezervă.';
$string['configgeneralcustomfield'] = 'Setează configurările implicite pentru includerea câmpurilor particularizate într-un backup.';
$string['configgeneralfiles'] = 'Setează valoarea implicită pentru includerea fișierelor într-o copie de rezervă. Vă rugăm să rețineți: Dezactivarea acestei setări va duce la o copie de rezervă care include doar referințe la fișiere. Aceasta nu este o problemă dacă copia de rezervă este restaurată pe același site și fișierele nu au fost șterse conform setării „Curățați fișierele pool-ului de gunoi” (filescleanupperiod).';
$string['configgeneralfilters'] = 'Stabileşte setarea implicită pentru includerea filtrelor într-o copie de rezervă';
$string['configgeneralgroups'] = 'Stabilește setarea implicită pentru includerea grupurilor și grupărilor într-un backup.';
$string['configgeneralhistories'] = 'Stabileşte setarea implicită pentru includerea istoricului de utilizator într-o copie de rezervă';
$string['configgenerallogs'] = 'Dacă această setare este activată, jurnalele vor fi implicit incluse în copiile de rezervă';
$string['configgeneralpermissions'] = 'Dacă acest rol este activat, permisiunile vor fi importate. Prin aceasta se suprascriu permisiunile existente pentru utilizatorii înscriși.';
$string['configgeneralquestionbank'] = 'Dacă este activată această setare, banca de întrebări va fi inclusă implicit în backup. ATENȚIE: Dezactivarea acestei setări va dezactiva backup-ul activităților care utilizează banca de întrebări, cum ar fi testul.';
$string['configgeneralroleassignments'] = 'Dacă această setare este activată, în copia de rezervă vor fi salvate şi asignările implicite de roluri.';
$string['configgeneralusers'] = 'Stabileşte setarea implicită pentru includerea utilizatorilor într-o copie de rezervă';
$string['configgeneraluserscompletion'] = 'Dacă această setare este activată, informaţiile legate de gradul de finalizare a activității utilizatorilor vor fi implicit incluse în copiile de rezervă';
$string['configgeneralxapistate'] = 'Setează valoarea implicită pentru includerea statusul utilizatorului în conținut, cum ar fi activitățile H5P, într-o copie de rezervă.';
$string['configlegacyfiles'] = 'Setează valoarea implicită pentru includerea fișierelor de curs vechi într-o copie de rezervă. Fișierele de curs vechi provin din versiunile Moodle anterioare versiunii 2.0.';
$string['configloglifetime'] = 'Se specifică durata de timp cât doriți să păstrați backup-ul autentificărilor. Logările care sunt mai vechi decât această dată sunt șterse automat. Este recomandat ca această valoare să fie mică pentru că pot fi foarte multe backup-uri la autentificări.';
$string['configrestoreactivities'] = 'Setează valoarea implicită pentru restaurarea activităților.';
$string['configrestorebadges'] = 'Specifică setările implicite pentru restaurarea ecusoanelor.';
$string['configrestoreblocks'] = 'Specifică setările implicite pentru restaurarea blocurilor.';
$string['configrestorecalendarevents'] = 'Specifică setările implicite pentru restaurarea evenimentelor din calendar.';
$string['configrestorecomments'] = 'Specifică setările implicite pentru restaurarea comentariilor.';
$string['configrestorecompetencies'] = 'Specifică setările implicite pentru restaurarea competențelor.';
$string['configrestorecontentbankcontent'] = 'Setează valoarea implicită pentru restabilirea conținutului băncii de conținut.';
$string['configrestorecustomfield'] = 'Setează configurările implicite pentru restaurarea câmpurilor particularizate.';
$string['configrestoreenrolments'] = 'Specifică setările implicite pentru restaurarea metodelor de înscriere.';
$string['configrestorefilters'] = 'Specifică setările implicite pentru restaurarea filtrelor.';
$string['configrestoregroups'] = 'Setează valoarea implicită pentru restabilirea grupurilor și grupărilor dacă acestea au fost incluse în copie de rezervă.';
$string['configrestorehistories'] = 'Setează valoarea implicită pentru restabilirea istoricului utilizatorului dacă a fost inclusă în copie de rezervă.';
$string['configrestorelogs'] = 'Dacă sunt activate jurnalele vor fi restaurate în mod implicit dacă au fost incluse în copie de rezervă.';
$string['configrestorepermissions'] = 'Dacă se activează această opțiune, permisiunile rolului vor fi restaurate. Acest lucru poate suprascrie permisiunile existente pentru utilizatorii înscriși.';
$string['configrestoreroleassignments'] = 'Dacă este activat implicit, atribuțiile de roluri vor fi restaurate dacă au fost incluse în copie de rezervă.';
$string['configrestoreusers'] = 'Setează valoarea implicită pentru a restabili utilizatorii dacă au fost incluși în copie de rezervă.';
$string['configrestoreuserscompletion'] = 'Dacă este activată, informațiile de completare ale utilizatorului vor fi restaurate în mod implicit dacă au fost incluse în copie de rezervă.';
$string['configrestorexapistate'] = 'Setează valoarea implicită pentru restabilirea statusul utilizatorului în conținut, cum ar fi activitățile H5P.';
$string['confirmcancel'] = 'Anulare backup';
$string['confirmcancelimport'] = 'Anulează importul';
$string['confirmcancelno'] = 'Nu anulați';
$string['confirmcancelquestion'] = 'Sunteți sigur că doriți să anulați ?
Orice informație ați inserat, se va pierde.';
$string['confirmcancelrestore'] = 'Anulați restaurarea';
$string['confirmcancelyes'] = 'Anulați copia de rezervă';
$string['confirmnewcoursecontinue'] = 'Avertisment curs nou';
$string['confirmnewcoursecontinuequestion'] = 'Un curs (ascuns) temporar va fi creat prin procesul de reconstituire a cursului. Pentru a anula reconstituirea, dați click pe Anulare. Nu închideți browser-ul în timpul reconstituirii';
$string['copiesinprogress'] = 'Acest curs are copii în desfășurare. <a href="{$a}"> Vizualizați copii în curs de desfășurare. </a>';
$string['copycoursedesc'] = 'Creează o copie a acestui curs în orice categorie de curs.';
$string['copycourseheading'] = 'Copiați un curs';
$string['copycoursetitle'] = 'Copiați cursul: {$a}';
$string['copydest'] = 'Destinaţie';
$string['copyfieldnotfound'] = 'Câmpul solicitat nu a fost găsit pentru câmpul(câmpurile): {$a}';
$string['copyformfail'] = 'Trimiterea prin AJAX a formularului de copiere a cursului nu a reușit.';
$string['copyingcourse'] = 'Copiere curs în desfășurare';
$string['copyingcourseshortname'] = 'se copiază';
$string['copyop'] = 'Operațiune curentă';
$string['copyprogressheading'] = 'Copii de curs în curs';
$string['copyprogressheading_help'] = 'Acest tabel arată starea tuturor copiilor de curs neterminate.';
$string['copyprogresstitle'] = 'Progresul copierii cursului';
$string['copyreturn'] = 'Copiați și returnați';
$string['copysource'] = 'Sursă';
$string['copyview'] = 'Copiați și vizualizați';
$string['coursecategory'] = 'Categoria în care va fi restaurat cursul';
$string['courseid'] = 'ID iniţial';
$string['coursesettings'] = 'Setări curs';
$string['coursetitle'] = 'Titlu';
$string['currentstage1'] = 'Setări iniţiale';
$string['currentstage16'] = 'Complet';
$string['currentstage2'] = 'Setări de schemă';
$string['currentstage4'] = 'Confirmare şi verificare';
$string['currentstage8'] = 'Creează copie de rezervă';
$string['enableasyncbackup'] = 'Activați copiile de rezervă asincrone';
$string['enableasyncbackup_help'] = 'Dacă este activată această opțiune, operațiunile de backup și restaurare vor fi efectuate asincron. Acest lucru oferă o experiență mai bună pentru utilizator, permițându-le utilizatorilor să efectueze alte operațiuni în timp ce un backup sau o restaurare sunt în curs. Acest lucru nu afectează importurile și exporturile.';
$string['enterasearch'] = 'Introduceți o căutare';
$string['error_block_for_module_not_found'] = 'Instanță orfană de bloc (id: {$a->bid}) pentru modulul cursului (id: {$a->mid}) găsită. Acest bloc nu va avea backup.';
$string['error_course_module_not_found'] = 'Modul de curs Orphan (id: {$a}) găsit. Acest modul nu va avea backup.';
$string['errorcopyingbackupfile'] = 'Nu s-a copiat fișierul de backup în folderul temporar înaintea restaurării.';
$string['errorfilenamemustbezip'] = 'Fişierul pe care îl introduceţi trebuie să fie un fişier ZIP şi să aibă extensia .mbz';
$string['errorfilenamerequired'] = 'Trebuie să introduceţi un nume de fişier valid pentru această copie de rezervă';
$string['errorfilenametoolong'] = 'Numele fișierului trebuie să aibă o lungime mai mare de 25 de caractere.';
$string['errorinvalidformat'] = 'Format necunoscut de backup';
$string['errorinvalidformatinfo'] = 'Fișierul selectat nu este un fișier valid de rezervă Moodle și nu poate fi restaurat.';
$string['errorminbackup20version'] = 'Acest fişier copie de rezervă a fost creat cu o versiune de dezvoltare a copiei de rezervă Moodle ({$a->backup}). Versiunea minimă necesară este {$a->min}. Nu poate fi restaurat.';
$string['errorrestorefrontpagebackup'] = 'Puteți restabili copiile de rezervă ale site-ului de acasă numai pe site-ul de acasă';
$string['executionsuccess'] = 'Copia de rezervă a fost creată cu succes.';
$string['extractingbackupfileto'] = 'Se extrage fișierul de rezervă în: {$a}';
$string['failed'] = 'Backupul a eșuat';
$string['filealiasesrestorefailures'] = 'Aliasurile restaurează eșecurile';
$string['filealiasesrestorefailures_help'] = 'Aliasurile sunt legături simbolice către alte fișiere, inclusiv cele stocate în depozite externe. În unele cazuri, Moodle nu le poate restabili - de exemplu atunci când restaurați copia de rezervă la un alt site sau când fișierul de referință nu există.

Mai multe detalii și motivul real al eșecului pot fi găsite în fișierul jurnal de restaurare.';
$string['filealiasesrestorefailures_link'] = 'restore/filealiases';
$string['filealiasesrestorefailuresinfo'] = 'Unele aliasuri incluse în fișierul de rezervă nu au putut fi restaurate. Următoarea listă conține locația lor așteptată și fișierul sursă la care se refereau la site-ul original.';
$string['filename'] = 'Denumire fişier';
$string['filereferencesincluded'] = 'Referințele la conținuturile externe sunt incluse în fișierul de backup. Nu vor funcționa dacă backup-ul este restaurat pe un site diferit.';
$string['filereferencesnotsamesite'] = 'Backup-ul este de la alt site, referințele către fișiere nu pot fi recuperate.';
$string['filereferencessamesite'] = 'Fișierul de backup-ul este de la același site, referințele către fișiere pot fi recuperate.';
$string['generalactivities'] = 'Include activităţi și resurse';
$string['generalanonymize'] = 'Anonimizează informatiile';
$string['generalbackdefaults'] = 'Setări implicite backup (copii de rezervă)';
$string['generalbadges'] = 'Include ecusoane';
$string['generalblocks'] = 'Include blocuri';
$string['generalcalendarevents'] = 'Include evenimentele din calendar';
$string['generalcomments'] = 'Include comentarii';
$string['generalcompetencies'] = 'Include competențele';
$string['generalcontentbankcontent'] = 'Includeți conținutul băncii de conținut';
$string['generalcustomfield'] = 'Includeți câmpuri particularizate';
$string['generalenrolments'] = 'Include metodele de înscriere';
$string['generalfiles'] = 'Includeți fișiere';
$string['generalfilters'] = 'Include filtre';
$string['generalgradehistories'] = 'Include istorice';
$string['generalgroups'] = 'Include grupuri și grupări';
$string['generalhistories'] = 'Include istorice';
$string['generallegacyfiles'] = 'Includeți fișiere de curs vechi';
$string['generallogs'] = 'Include jurnale';
$string['generalpermissions'] = 'Include permisiunile suprascrise';
$string['generalquestionbank'] = 'Include banca de întrebări';
$string['generalrestoredefaults'] = 'Valori implicite de restaurare generală';
$string['generalrestoresettings'] = 'Setările generale pentru recuperare';
$string['generalroleassignments'] = 'Include asignări de roluri';
$string['generalsettings'] = 'Setări generale de backup';
$string['generalusers'] = 'Include utilizatori';
$string['generaluserscompletion'] = 'Include informaţiile legate de gradul de finalizare a activității utilizatorilor';
$string['generalxapistate'] = 'Include status-ul utilizatorului în conținuturi de genul activităților H5P';
$string['hidetypes'] = 'Ascunde tipurile de opțiuni';
$string['importbackupstage16action'] = 'Continuă';
$string['importbackupstage1action'] = 'Următorul';
$string['importbackupstage2action'] = 'Următorul';
$string['importbackupstage4action'] = 'Efectuează importul';
$string['importbackupstage8action'] = 'Continuă';
$string['importcurrentstage0'] = 'Selecție curs';
$string['importcurrentstage1'] = 'Setări inițiale';
$string['importcurrentstage16'] = 'Complet';
$string['importcurrentstage2'] = 'Setări schemă';
$string['importcurrentstage4'] = 'Confirmare și revizuire';
$string['importcurrentstage8'] = 'Efectuează importul';
$string['importfile'] = 'Încarcă o copie de rezervă';
$string['importfromccmidtocourse'] = 'Import din cmid:{$a->srccmid} în curs:{$a->dstcourseid}';
$string['importfromcoursetocourse'] = 'Import din curs:{$a->srccourseid} în curs:{$a->dstcourseid}';
$string['importgeneralduplicateadminallowed'] = 'Permiteți rezolvarea conflictelor de administrator';
$string['importgeneralduplicateadminallowed_desc'] = 'În cazul în care site-ul are un cont cu numele de utilizator "admin", încercarea de a restaura un fișier backup care conține un cont cu numele de utilizator "admin" poate provoca un conflict. Dacă această setare este activată, conflictul va fi soluționat prin schimbarea numelui de utilizator din fișierul backup în \'admin_xyz\'.';
$string['importgeneralmaxresults'] = 'Numărul maxim de cursuri listate pentru import';
$string['importgeneralmaxresults_desc'] = 'Se verifică numărul de cursuri afișate în timpul primului pas al procesului de import';
$string['importgeneralsettings'] = 'Valori generale implicite pentru import';
$string['importrootsettings'] = 'Setări de import';
$string['importsettings'] = 'Setări pentru importul general';
$string['importsuccess'] = 'Import complet. Faceți click pe continuă pentru a reveni la curs.';
$string['includeactivities'] = 'Include:';
$string['includeditems'] = 'Elemente incluse:';
$string['includefilereferences'] = 'Referințe despre fișier la conținuturi externe';
$string['includesection'] = 'Secţiunea {$a}';
$string['includeuserinfo'] = 'Informaţii de utilizator';
$string['inprogress'] = 'Copie de rezervă în curs';
$string['jumptofinalstep'] = 'Sari la pasul final';
$string['keep'] = 'Păstrează';
$string['keptroles'] = 'Includeți înscrieri de roluri';
$string['keptroles_help'] = 'Utilizatorii cu rolurile selectate vor fi înscriși la noul curs. Nu se vor copia date de utilizator decât dacă este activată opțiunea „Include date utilizator”.';
$string['locked'] = 'Blocat';
$string['lockedbyconfig'] = 'Această setare a fost blocată de setările implicite ale copiei de rezervă';
$string['lockedbyhierarchy'] = 'Blocat de dependinţe';
$string['lockedbypermission'] = 'Nu aveţi suficiente permisiuni pentru a schimba această setare';
$string['loglifetime'] = 'Păstrează datele de logare pentru';
$string['managefiles'] = 'Administrare fișiere backup';
$string['managefiles_activity'] = 'Administrare copii de rezervă ale activității';
$string['managefiles_automated'] = 'Administrare copii de rezervă automate';
$string['managefiles_backup'] = 'Administrare copii de rezervă private';
$string['managefiles_course'] = 'Administrare copii de rezervă ale cursului';
$string['mergerestoredefaults'] = 'Restaurează setările implicite la transferul în alt curs';
$string['missingfilesinpool'] = 'Unele fișiere nu au putut fi salvate în timpul copierii de rezervă și, prin urmare, nu va fi posibilă restaurarea acestora.';
$string['module'] = 'Modul';
$string['moodleversion'] = 'Versiune Moodle';
$string['morecoursesearchresults'] = 'Mai mult de {$a} cursuri găsite, se afișează primele {$a} rezultate';
$string['moreresults'] = 'Sunt prea multe rezultate, inserați o căutare mai detaliată.';
$string['nomatchingcourses'] = 'Nu sunt cursuri de afișat';
$string['norestoreoptions'] = 'Fără categorii sau cursuri existente către care puteți să restabiliți.';
$string['originalwwwroot'] = 'URL copie de rezervă';
$string['overwrite'] = 'Suprascrie';
$string['pendingasyncdeletedetail'] = 'Acest curs are o copie de rezervă asincronă în așteptare. <br/> Cursurile nu pot fi șterse până când nu se termină această copie de rezervă.';
$string['pendingasyncdetail'] = 'Copiile de rezervă asincrone permit unui utilizator să aibă o copie de rezervă în așteptare pentru o resursă la un moment dat. <br/> Copiile de rezervă asincrone multiple ale aceleiași resurse nu pot fi puse în coadă, deoarece acest lucru ar duce probabil la mai multe copii de rezervă cu același conținut.';
$string['pendingasyncedit'] = 'Apare o copie de rezervă sau o copie în așteptare solicitată pentru acest curs. Vă rugăm să nu editați cursul până când acesta nu este finalizat.';
$string['pendingasyncerror'] = 'Backup în așteptare pentru această resursă';
$string['preparingdata'] = 'Se pregătesc datele';
$string['preparingui'] = 'Se pregătește afișarea paginii';
$string['previousstage'] = 'Precedentul';
$string['privacy:metadata:backup:detailsofarchive'] = 'Această arhivă poate conține diverse date despre utilizatori legate de un curs, precum note, înscrieri de utilizatori și date despre activitate.';
$string['privacy:metadata:backup:externalpurpose'] = 'Scopul acestei arhive este de a stoca informații legate de un curs, care pot fi restaurate în viitor.';
$string['privacy:metadata:backup_controllers'] = 'Lista operațiunilor de backup';
$string['privacy:metadata:backup_controllers:itemid'] = 'ID-ul cursul';
$string['privacy:metadata:backup_controllers:operation'] = 'Operația care a fost efectuată, de ex. restabili.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'Data când acțiunea a fost creată';
$string['privacy:metadata:backup_controllers:timemodified'] = 'Data când acțiunea a fost modificată';
$string['privacy:metadata:backup_controllers:type'] = 'Tipul articolului care se operează, de ex. activitate.';
$string['qcategorycannotberestored'] = 'Categoria întrebări "{$a->name}" nu poate fi creată prin reconstituire';
$string['question2coursefallback'] = 'Categoria întrebări "{$a->name}", inițial în contextul categorie sistem/curs  în fișierul de backup, va fi creată în contextul curs la restaurare';
$string['questioncannotberestored'] = 'Întrebările "{$a->name}" nu pot fi create prin reconstituire';
$string['recyclebin_desc'] = 'Rețineți că aceste setări vor fi utilizate și pentru recycle bin.';
$string['replacerestoredefaults'] = 'Restaurați valorile implicite când restaurați într-un alt curs conținutul șters';
$string['restoreactivity'] = 'Restaurează activitate';
$string['restorecourse'] = 'Restaurează curs';
$string['restorecoursesettings'] = 'Setări curs';
$string['restoredcourseid'] = 'ID-ul cursului restaurat: {$a}';
$string['restoreexecutionsuccess'] = 'Cursul a fost restaurat cu succes.';
$string['restorefileweremissing'] = 'Unele fișiere nu au putut fi restaurate deoarece lipsesc din backup.';
$string['restorenewcoursefullname'] = 'Nume curs nou';
$string['restorenewcourseshortname'] = 'Nume scurt curs nou';
$string['restorenewcoursestartdate'] = 'Nouă dată de început';
$string['restorenofilesbackuparea'] = 'Nu se găsesc copii de rezervă încă.';
$string['restorenofilesbackuparea_activity'] = 'Încă nu se găsesc copii de rezervă ale acestei activități.';
$string['restorenofilesbackuparea_automated'] = 'Încă nu se găsesc copii de rezervă automate.';
$string['restorenofilesbackuparea_backup'] = 'Încă nu aveți copii de rezervă private.';
$string['restorenofilesbackuparea_course'] = 'Încă nu se găsesc copii de rezervă pentru acest curs.';
$string['restorerolemappings'] = 'Restaurează mapările rolului';
$string['restorerootsettings'] = 'Restaurează setări';
$string['restoresection'] = 'Restaurează secţiune';
$string['restorestage1'] = 'Confirmă';
$string['restorestage16'] = 'Verifică';
$string['restorestage16action'] = 'Efectuează restaurare';
$string['restorestage1action'] = 'Următorul';
$string['restorestage2'] = 'Destinaţie';
$string['restorestage2action'] = 'Următorul';
$string['restorestage32'] = 'Proces';
$string['restorestage32action'] = 'Continuă';
$string['restorestage4'] = 'Setări';
$string['restorestage4action'] = 'Următorul';
$string['restorestage64'] = 'Complet';
$string['restorestage64action'] = 'Continuă';
$string['restorestage8'] = 'Schemă';
$string['restorestage8action'] = 'Următorul';
$string['restoretarget'] = 'Restaurează ţintă';
$string['restoretocourse'] = 'Restaurează la curs:';
$string['restoretocurrentcourse'] = 'Restaurează în acest curs';
$string['restoretocurrentcourseadding'] = 'Include copia de rezervă a cursului în cursul existent';
$string['restoretocurrentcoursedeleting'] = 'Şterge conţinutul acestui curs şi apoi restaurează';
$string['restoretoexistingcourse'] = 'Restaurează într-un curs existent';
$string['restoretoexistingcourseadding'] = 'Include copia de rezervă a cursului în cursul existent';
$string['restoretoexistingcoursedeleting'] = 'Şterge conţinutul cursului existent şi apoi restaurează';
$string['restoretonewcourse'] = 'Restaurează ca un curs nou';
$string['restoringcourse'] = 'Restaurare curs în desfăşurare';
$string['restoringcourseshortname'] = 'se restaurează';
$string['rootenrolmanual'] = 'Restaurează ca înrolări manuale';
$string['rootsettingactivities'] = 'Include activitățile și resursele';
$string['rootsettinganonymize'] = 'Setează informațiile utilizatorului ca fiind anonime';
$string['rootsettingbadges'] = 'Include ecusoane';
$string['rootsettingblocks'] = 'Include blocuri';
$string['rootsettingcalendarevents'] = 'Include evenimentele din calendar';
$string['rootsettingcomments'] = 'Include comentarii';
$string['rootsettingcompetencies'] = 'Se includ competențele';
$string['rootsettingcontentbankcontent'] = 'Includeți conținutul băncii de conținut';
$string['rootsettingcustomfield'] = 'Includeți câmpuri personalizate';
$string['rootsettingenrolments'] = 'Include metodele de înscriere';
$string['rootsettingenrolments_always'] = 'Da, întotdeauna';
$string['rootsettingenrolments_never'] = 'Nu, restabiliți utilizatorii ca înscrieri manuale';
$string['rootsettingenrolments_withusers'] = 'Da, însă doar dacă utilizatorii sunt incluși';
$string['rootsettingfiles'] = 'Includeți fișiere';
$string['rootsettingfilters'] = 'Include filtrele';
$string['rootsettinggradehistories'] = 'Include arhiva notelor';
$string['rootsettinggroups'] = 'Include grupurile și grupările';
$string['rootsettingimscc1'] = 'Conversie la IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Conversie la IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = 'Includeți fișiere de curs vechi';
$string['rootsettinglogs'] = 'Include jurnale curs';
$string['rootsettingpermissions'] = 'Include permisiunile suprascrise';
$string['rootsettingquestionbank'] = 'Include banca de întrebări';
$string['rootsettingroleassignments'] = 'Include rolurile asignate ale utilizatorului';
$string['rootsettings'] = 'Setări copie de rezervă';
$string['rootsettingusers'] = 'Include utilizatorii inscriși';
$string['rootsettinguserscompletion'] = 'Include detalii finalizare curs ale utilizatorilor';
$string['rootsettingxapistate'] = 'Include status-ul utilizatorului în conținutul de genul activităților H5P';
$string['samesitenotification'] = 'Această copie de rezervă a fost creată numai cu referințe la fișiere, nu fișierele în sine. Restaurarea va funcționa numai pe acest site.';
$string['sectionactivities'] = 'Activităţi';
$string['sectioninc'] = 'Inclus în copia de rezervă (fără informaţii de utilizator)';
$string['sectionincanduser'] = 'Inclus în copia de rezervă împreună cu informaţii de utilizator';
$string['selectacategory'] = 'Selectați o categorie';
$string['selectacourse'] = 'Selectați un curs';
$string['setting_course_fullname'] = 'Denumire curs';
$string['setting_course_shortname'] = 'Denumire prescurtată curs';
$string['setting_course_startdate'] = 'Data începerii cursului';
$string['setting_keep_groups_and_groupings'] = 'Păstrează grupurile și grupările curente';
$string['setting_keep_roles_and_enrolments'] = 'Păstrați rolurile curente și înscrierile';
$string['setting_overwrite_conf'] = 'Suprascrie configurarea cursului';
$string['setting_overwrite_course_fullname'] = 'Supracrie numele complet al cursului';
$string['setting_overwrite_course_shortname'] = 'Suprascrie numele prescurtat al cursului';
$string['setting_overwrite_course_startdate'] = 'Suprascrie data începerii cursului';
$string['showtypes'] = 'Afișează tipuri de opțiuni';
$string['sitecourseformatwarning'] = 'Acesta este un back-up al primei pagini. Poate fi restaurat numai pe prima pagină';
$string['skiphidden'] = 'Omiteți cursurile ascunse';
$string['skiphiddenhelp'] = 'Alegeți dacă doriți sau nu să omiteți cursurile';
$string['skipmodifdays'] = 'Omiteți cursurile nemodificate din data';
$string['skipmodifdayshelp'] = 'Alegeți să omiteți cursurile nemodificate de un număr de zile';
$string['skipmodifprev'] = 'Omite cursurile nemodificate de la backup-ul anterior.';
$string['skipmodifprevhelp'] = 'Alegeți dacă doriți să omiteți cursurile nemodificate de la ultimul backup automat. Este necesară logarea pentru a activa opțiunea.';
$string['status'] = 'Status';
$string['storagecourseandexternal'] = 'Locul în care sunt backup-urile cursului și directorul specificat';
$string['storagecourseonly'] = 'Locul în care sunt backup-urile cursului';
$string['storageexternalonly'] = 'Director specificat pentru backup-uri automate';
$string['successful'] = 'Backup finalizat cu succes';
$string['successfulcopy'] = 'Copiere finalizată cu succes';
$string['successfulrestore'] = 'Restaurare finalizată cu succes';
$string['timetaken'] = 'Durată';
$string['title'] = 'Titlu';
$string['totalcategorysearchresults'] = 'Total categorii: {$a}';
$string['totalcoursesearchresults'] = 'Total cursuri: {$a}';
$string['undefinedrolemapping'] = 'Rol în mapare nedefinit pentru arhetipul \'{$a}\'.';
$string['unnamedsection'] = 'Secțiune nedenumită';
$string['userdata'] = 'Include data ale utilizatorului';
$string['userdata_help'] = 'Dacă este activată, date precum postări pe forum, trimiteri de sarcini etc. vor fi copiate în noul curs pentru orice utilizator cu un rol selectat în „Includeți înscrieri de roluri”.';
$string['userinfo'] = 'Informații utilizator';
