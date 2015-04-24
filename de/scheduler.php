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
 * Strings for component 'scheduler', language 'de', branch 'MOODLE_28_STABLE'
 *
 * @package   scheduler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Aktion';
$string['actions'] = 'Aktionen';
$string['addappointment'] = 'Teilnehmer/in hinzufügen';
$string['addcommands'] = 'Zeitfenster hinzufügen';
$string['addondays'] = 'Termine hinzufügen am';
$string['addscheduled'] = 'Wahrnehmende/n Teilnehmer/in hinzufügen';
$string['addscheduled_help'] = '<h3>Adding an appointment on slot setup</h3>
<p>Using this link, you will add a user to the appointment list defined by this slot information. It may be a simple and fast way to setup a collective appointment. </p>';
$string['addsession'] = 'Sich wiederholende Zeitfenster hinzufügen';
$string['addsingleslot'] = 'Einzelnes Zeitfenster hinzufügen';
$string['addslot'] = 'Sie können jederzeit zusätzliche Zeitfenster hinzufügen.';
$string['addstudenttogroup'] = 'Diese/n Teilnehmer/in zur Gruppe hinzufügen';
$string['allappointments'] = 'Alle Termine';
$string['allowgroup'] = 'Einzel-Zeitfenster (mit Klick änderbar)';
$string['allslotsincloseddays'] = 'Alle Zeitfenster waren in geschlossenen Tagen';
$string['allteachersgrading'] = 'Trainer/innen können alle Termine bewerten';
$string['allteachersgrading_desc'] = 'Wenn aktiviert, können Trainer/innen Termine bewerten, denen sie nicht zugeordnet sind.';
$string['alreadyappointed'] = 'Konnte den Termin nicht festlegen. Das Terminfenster ist schon voll ausgebucht.';
$string['appointagroup'] = 'Gruppen-Termin';
$string['appointagroup_help'] = 'Wählen Sie, ob Sie den Termin nur für sich selbst, oder für eine ganze Gruppe festlegen.';
$string['appointfor'] = 'Festlegen für';
$string['appointformygroup'] = 'Für meine ganze Gruppe festlegen';
$string['appointingstudent'] = 'Termin für Zeitfenster';
$string['appointingstudentinnew'] = 'Termin für neues Zeitfenster';
$string['appointmentmode'] = 'Modus wählen';
$string['appointmentmode_help'] = '<p>Sie können hier zwischen einigen Varianten wählen, wie Verabredungen getroffen werden können.</p>
<p><ul>
<li><strong>"<emph>n </emph>Termin(e) festlegen in diesem Scheduler": </strong>Teilnehmer/innen können nur eine feste Anzahl von Terminen in dieser Aktivität buchen. Selbst wenn die/der Trainer/in sie als "gesehen" markiert, wird es den die/den Teilnehmern/innen nicht erlaubt, weitere Treffen zu buchen. Der einzige Weg, die Fähigkeit einer/eines Teilnehmer/in zum Buchen zurückzusetzen ist, die alten "gesehen" Einträge zu löschen.</li>
<li><strong>"<emph>n </emph>Termin(e) festlegen auf ein Mal": </strong>Teilnehmer/innen können eine feste Anzahl von Terminen buchen. Sobald das Treffen vorbei ist und die/der Trainer/in die/den Teilnehmer/in als "gesehen" markiert, kann die/der Teilnehmer/in weitere Termine buchen. Doch die/der Teilnehmer/in ist zu jedem Zeitpunkt auf <emph>n</emph> "offene" (noch nicht gesehen) Termine beschränkt.
</li>
</ul>
</p>';
$string['appointmentno'] = 'Termin {$a}';
$string['appointmentnotes'] = 'Notizen für den Termin';
$string['appointments'] = 'Termine';
$string['appointmentsummary'] = 'Termin am {$a->startdate} von {$a->starttime} bis {$a->endtime} mit {$a->teacher}';
$string['appointsolo'] = 'nur mich';
$string['appointsomeone'] = 'Neuen Termin hinzufügen';
$string['attendable'] = 'Wahrzunehmen';
$string['attendablelbl'] = 'Anzahl Kandidaten für die Terminplanung';
$string['attended'] = 'Wahrgenommen';
$string['attendedlbl'] = 'Anzahl Teilnehmer/innen, die wahrgenommen haben';
$string['attendedslots'] = 'Wahrgenommene Zeitfenster';
$string['availableslots'] = 'Verfügbare Zeitfenster';
$string['availableslotsall'] = 'Alle Zeitfenster';
$string['availableslotsnotowned'] = 'Ohne Besitzer';
$string['availableslotsowned'] = 'Mit Besitzer';
$string['bookwithteacher'] = 'Trainer/in';
$string['bookwithteacher_help'] = 'Wählen Sie eine/n Trainer/in für den Termin.';
$string['break'] = 'Pause zwischen Zeitfenstern';
$string['breaknotnegative'] = 'Die Dauer der Pause darf nicht negativ sein';
$string['canbook1appointment'] = 'Sie können noch einen weiteren Termin in diesem Scheduler buchen.';
$string['canbooknappointments'] = 'Sie können noch {$a} weitere Termine in diesem Scheduler buchen.';
$string['canbooknofurtherappointments'] = 'Sie können keine Termine in diesem Scheduler mehr buchen.';
$string['canbooksingleappointment'] = 'Sie können einen Termin in diesem Scheduler buchen.';
$string['canbookunlimitedappointments'] = 'Sie können eine unbegrenzte Anzahl Termine in diesem Scheduler buchen.';
$string['cancelledbystudent'] = '{$a}: Termin von einer/m Teilnehmer/in abgesagt oder verschoben';
$string['cancelledbyteacher'] = '{$a}: Termin von der/vom Trainer/in abgesagt';
$string['choice'] = 'Auswahl';
$string['chooseexisting'] = 'Bestehendes wählen';
$string['choosingslotstart'] = 'Anfangszeit wählen';
$string['choosingslotstart_help'] = 'Ändern (oder wählen) Sie die Startzeit des Termins. Falls dieser Termin mit anderen Zeitfenstern kollidiert, werden Sie gefragt ob dieser Zeitfenster alle kollidierenden Termine ersetzen soll. Beachten Sie, dass die neuen Zeitfenster Parameter alle bisherigen Einstellungen überschreiben werden.';
$string['comments'] = 'Kommentare';
$string['complete'] = 'Gebucht';
$string['composeemail'] = 'E-Mail zusammenstellen:';
$string['confirmdelete'] = 'Das Löschen ist endgültig. Fortsetzen?';
$string['conflictingslots'] = 'Konflikte';
$string['course'] = 'Kurs';
$string['csvencoding'] = 'Encoding der Textdatei';
$string['csvfieldseparator'] = 'Trennzeichen der Felder der CSV-Datei';
$string['csvparms'] = 'CSV Fformatparameter';
$string['csvrecordseparator'] = 'Trenzeichen für Datensätze der CSV Datei';
$string['cumulatedduration'] = 'Addierte Dauer der Termine';
$string['date'] = 'Datum';
$string['datelist'] = 'Übersicht';
$string['defaultslotduration'] = 'Standard Dauer Zeitfenster';
$string['defaultslotduration_help'] = 'Die voreingestellte Dauer (in Minuten) der Zeitfenster, die Sie einrichten';
$string['deleteallslots'] = 'Alle Zeitfenster löschen';
$string['deleteallunusedslots'] = 'Unbenutzte Zeitfenster löschen';
$string['deletecommands'] = 'Zeitfenster löschen';
$string['deletemyslots'] = 'Alle meine Zeitfenster löschen';
$string['deleteselection'] = 'Ausgewählte Zeitfenster löschen';
$string['deletetheseslots'] = 'Diese Zeitfenster löschen';
$string['deleteunusedslots'] = 'Meine unbenutzten Zeitfenster löschen';
$string['department'] = 'Von wo?';
$string['disengage'] = 'Meine Termine absagen';
$string['displayfrom'] = 'Termin Teilnehmer/innen anzeigen ab';
$string['distributetoslot'] = 'Der ganzen Gruppe verteilen';
$string['divide'] = 'In Zeitfenster aufteilen?';
$string['dontforgetsaveadvice'] = 'Sie haben die Liste der Personen für den Termin geändert. Vergessen Sie nicht, dieses Formular zu abzusenden, um die Änderungen endgültig zu speichern.';
$string['downloadexcel'] = 'Exportieren nach Excel';
$string['downloads'] = 'Exporte';
$string['duration'] = 'Dauer';
$string['durationrange'] = 'Die Dauer der Zeitfensters muss zwischen {$a->min} und {$a->max} Minuten sein.';
$string['email_applied_html'] = '<p>Ein Termin wurde beantragt am {$a->date} um {$a->time},<br/> von der/m Teilnehmer/in <a href="{$a->attendee_url}">{$a->attendee}</a> für den Kurs:

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>über den Scheduler mit dem Titel "<em>{$a->module}</em>" auf der Website: <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string['email_applied_plain'] = 'Ein Termin wurde beantragt am {$a->date} um {$a->time},<br/> von der/m Teilnehmer/in {$a->attendee_url} für den Kurs:

{$a->course_short}: {$a->course}

über den Scheduler mit dem Titel "{$a->module}" auf der Website: {$a->site}.';
$string['email_applied_subject'] = '{$a->course_short}: Neuer Termin';
$string['email_cancelled_html'] = '<p>Ihr Termin am <strong>{$a->date}</strong> um <strong>{$a->time}</strong>,<br/> mit der/m Teilnehmer/in <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> für den Kurs:</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>im Scheduler mit dem Titel "<em>{$a->module}</em>" auf der Website: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">wurde abgesagt oder verschoben</span></strong>.</p>';
$string['email_cancelled_plain'] = 'Ihr Termin am {$ a->date} um {$ a->time} mit der/m Teilnehmer/in {$a->attendee} für den Kurs:

{$a->course_short}: {$a->course}

im Scheduler mit dem Titel "{$a->module}" auf der Website: {$a->site}

wurde abgesagt oder verschoben.';
$string['email_cancelled_subject'] = '{$a->course_short}: Termin von der/vom Teilnehmer/in abgesagt oder verschoben';
$string['emailreminder'] = 'Per E-Mail eine Erinnerung schicken';
$string['email_reminder_html'] = '<p>Sie haben einen bevorstehenden Termin am <strong>{$a->date}</strong> von <strong>{$a->time}</strong> bis <strong>{$a->endtime}</strong><br/> mit <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>.</p>

<p>Ort: <strong>{$a->location}</strong></p>';
$string['emailreminderondate'] = 'Per E-Mail eine Erinnerung schicken am';
$string['email_reminder_plain'] = 'Sie haben einen bevorstehenden Termin am {$a->date} von {$a->time} bis {$a->endtime} mit {$a->attendant}.

Ort: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: Terminerinnerung';
$string['email_teachercancelled_html'] = '<p>Ihr Termin am <strong>{$a->date}</strong> um <strong>{$a->time} </strong>,<br/> mit dem {$a->staffrole} <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> für den Kurs:</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>im Scheduler "<em>{$a->module}</em>" auf der Website: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">wurde abgesagt</span></strong>. Bitte wählen Sie ein neues Zeitfenster.</p>';
$string['email_teachercancelled_plain'] = 'Ihr Termin am {$ a->date} um {$ a->time} mit dem {$a->staffrole} {$a->attendant} für den Kurs:

{$a->course_short}: {$a->course}

im Scheduler mit dem Titel "{$a->module}" auf der Website: {$a->site}

wurde abgesagt. Bitte wählen Sie ein neues Zeitfenster.';
$string['email_teachercancelled_subject'] = '{$a->course_short}: Termin von der/vom Trainer/in abgesagt';
$string['end'] = 'Ende';
$string['enddate'] = 'Wiederhole Zeitfenster bis';
$string['endtime'] = 'Endzeit';
$string['event_appointmentlistviewed'] = 'Scheduler Terminliste angezeigt';
$string['event_bookingadded'] = 'Scheduler Buchung hinzugefügt';
$string['event_bookingformviewed'] = 'Scheduler Buchungsformular angezeigt';
$string['event_bookingremoved'] = 'Scheduler Buchung entfernt';
$string['exclusive'] = 'Exklusiv';
$string['exclusivity'] = 'Exklusivität';
$string['exclusivity_help'] = '<p>Sie können eine Höchstanzahl Teilnehmer/innen, die sich für ein bestimmtes Zeitfenster einschreiben können einstellen.</p>
<p>Eine Höchstanzahl von 1 (Standard) wird das Zeitfenster in den exklusiven Modus wechseln.</p>
<p>Wenn für das Zeitfenster eine unbegrenzte Höchstanzahl (0) eingestellt wird, wird dieses Zeitfenster nicht in Einschränkungen berücksichtigt werden, auch wenn andere Zeitfenster in der gleichen Zeitspane exklusiv oder begrenzt eingestellt sind.</p>';
$string['exclusivitylockedto'] = 'You cannot change the slot mode when scheduling. The current limit of the destination slot will apply. If the slot is new, a default limit of 1 will apply.';
$string['exclusivityoverload'] = 'Das Zeitfenster hat {$a} gebuchte Teilnehmer/innen, mals durch diese Einstellung erlaubt.';
$string['explaingeneralconfig'] = 'These options can only be setup at site level and will apply to all schedulers of this Moodle installation.';
$string['exportinstructions'] = 'You should better save the generated export file on your hard drive before using it.';
$string['finalgrade'] = 'Schlussbewertung';
$string['firstslotavailable'] = 'Das erste Zeitfenster öffnet: {$a}';
$string['for'] = 'für';
$string['forbidgroup'] = 'Gruppen-Zeitfenster (mit Klick änderbar)';
$string['forcewhenoverlap'] = 'Bei Überlappung erzwingen';
$string['forcewhenoverlap_help'] = '<h3>Erstellung eines Zeitfenster falls Zeitfenster überlappen</h3>
<p>Diese Einstellung legt fest, wie mit neuen Zeitfenstern umgegangen werden soll, falls sie sich mit anderen, bestehenden Zeitfenstern überlappen.</p>
<p>Wenn aktiviert, wird das bestehenden überlappende Zeitfenster gelöscht und ein neues Zeitfenster wird erstellt.</p>
<p>Wenn deaktiviert, wird das bestehende überlappende Zeitfenster beibehalten und ein neues Zeitfenster wird <em>nicht</em> erstellt.</p>';
$string['forcourses'] = 'Teilnehmer/innen in Kursen auswählen';
$string['friday'] = 'Freitag';
$string['generalconfig'] = 'Allgemeine Konfiguration';
$string['grade'] = 'Bewertung';
$string['gradingstrategy'] = 'Bewertungsstrategie';
$string['gradingstrategy_help'] = 'In einem Scheduler, in welchem Teilnehmer/innen mehrere Treffen haben können, wählen Sie, wie die Bewertung aggregiert wird.
    Die Bewertungen können entweder <ul><li>die durchschnittliche Bewertung oder</li><li>die beste Bewertung</li></ul> welche die/der Teilnehmer/in erreicht hat, anzeigen.';
$string['group'] = 'Gruppe';
$string['groupbreakdown'] = 'Nach Gruppengrösse';
$string['groupscheduling'] = 'Gruppeneinschreibung aktivieren';
$string['groupscheduling_desc'] = 'Allow entire groups to be scheduled at once.
(Apart from the global option, the activity group mode must be set to "Visible groups" or "Separate groups" in order to enable this feature.)';
$string['groupsession'] = 'Gruppen-Termin';
$string['groupsize'] = 'Gruppengrösse';
$string['guardtime'] = 'Blockierte Zeit';
$string['guardtime_help'] = 'Blockierte Zeit verhindert, dass Teilnehmer/innen ihre Buchung kurz vor dem Termin ändern.
<p>Wenn die Blockierte Zeit aktiviert und beispielsweise auf 2 Stunden eingestellt ist, dann sind Teilnehmer/innen nicht in der Lage, einen Termin, der in weniger als 2 Stunden Zeit ab jetzt beginnt zu buchen, und sie können einen Termin nicht löschen, wenn er in weniger als 2 Stunden beginnt.</p>';
$string['guestscantdoanything'] = 'Gäste können hier nichts tun.';
$string['howtoaddstudents'] = 'For adding students to a global scoped scheduler, use the role setting for the module.<br/>You may also use module role definitions to define the attenders of your students.';
$string['ignoreconflicts'] = 'Terminkollisionen ignorieren';
$string['ignoreconflicts_help'] = 'Wenn dieses Feld angekreuzt ist, wird das Zeifenster zum gewählten Zeitpunkt verschoben, selbst falls andere Zeitfenster zur gleichen Zeit existieren. Dies kann zu überlappenden Terminen für einige Trainer/innen oder Teilnehmer/innen führen und sollte daher mit Vorsicht verwendet werden.';
$string['incourse'] = 'in Kurs';
$string['introduction'] = 'Einführung';
$string['invitation'] = 'Einladung';
$string['invitationtext'] = 'Bitte wählen Sie ein Zeitfenster für einen Termin unter';
$string['isnonexclusive'] = 'Nicht-exklusive';
$string['lengthbreakdown'] = 'Nach Dauer des Zeitfensters';
$string['limited'] = 'Beschränkt (noch {$a})';
$string['location'] = 'Ort';
$string['location_help'] = 'Legen Sie den vorgesehenen Ort des Treffens fest.';
$string['markasseennow'] = 'Mark as seen now';
$string['markseen'] = 'Nachdem Sie einen Termin mit einer/m Teilnehmer/in hatten, markieren Sie sie bitte durch das Anklicken der entsprechenden Checkbox in der obigen Tabelle als "gesehen".';
$string['maxgrade'] = 'Beste Bewertung verwenden';
$string['maxstudentlistsize'] = 'Maximum length of student list';
$string['maxstudentlistsize_desc'] = 'The maximum length of the list of students who need to make an appointment, as shown in the teacher view of the scheduler. If there are more students than this, no list will be displayed.';
$string['maxstudentsperslot'] = 'Maximale Anzahl Teilnehmer/innen pro Zeitfenster';
$string['maxstudentsperslot_desc'] = 'Group slots / non-exclusive slots can have at most this number of students. Note that in addition, the setting "unlimited" can always be chosen for a slot.';
$string['meangrade'] = 'Durchschnittliche Bewertung verwenden';
$string['meetingwith'] = 'Treffen mit ihrer/m';
$string['meetingwithplural'] = 'Treffen mit ihrer/m';
$string['mins'] = 'Minuten';
$string['minutes'] = 'Minuten';
$string['minutesperslot'] = 'Minuten pro Zeitfenster';
$string['missingstudents'] = '{$a} Teilnehmer/innen müssen noch einen Termin festlegen';
$string['missingstudentsmany'] = '{$a} Teilnehmer/innen müssen noch einen Termin festlegen. Aufgrund der Grösse wird keine Liste angezeigt.';
$string['mode'] = 'Modus';
$string['modeappointments'] = 'Termin(e) festlegen';
$string['modeintro'] = 'Teilnehmer/innen können';
$string['modeoneatatime'] = 'auf ein Mal';
$string['modeoneonly'] = 'in diesem Scheduler';
$string['modulename'] = 'Scheduler';
$string['modulename_help'] = 'Der Scheduler Aktivität hilft Ihnen bei der Planung von Terminen mit Ihren Teilnehmern/innen.

Trainer/innen geben Zeitfenster für Treffen vor, Teilnehmer/innen wählen dann eines davon in Moodle.
Trainer/innen können wiederum Resultate - und optional eine Bewertung - eines Treffens im Scheduler erfassen.

Gruppenterminplanung wird unterstützt; das heisst, dass jedes Zeitfenster mehrere Teilnehmer/innen aufnehmen kann, und gegebenenfalls ist es möglich, Termine für ganze Gruppen gleichzeitig zu planen.';
$string['modulename_link'] = 'mod/scheduler/view';
$string['modulenameplural'] = 'Scheduler';
$string['monday'] = 'Montag';
$string['move'] = 'Verschieben';
$string['moveslot'] = 'Zeitfenster verschieben';
$string['multiplestudents'] = 'Mehrere Teilnehmer/innen pro Zeitfenster zulassen?';
$string['myappointments'] = 'Meine Termine';
$string['name'] = 'Name des Schedulers';
$string['needteachers'] = 'Slots cannot be added as this course has no teachers';
$string['negativerange'] = 'Range is negative. This can\'t be.';
$string['never'] = 'Nie';
$string['newappointment'] = '{$a}: Neuer Termin';
$string['noappointments'] = 'Keine Termine';
$string['noexistingstudents'] = 'Keine Teilnehmer/innen vorhanden';
$string['nogroups'] = 'No group available for scheduling.';
$string['noresults'] = 'Keine Ergebnisse.';
$string['noschedulers'] = 'There are no schedulers';
$string['noslots'] = 'There are no appointment slots available.';
$string['noslotsavailable'] = 'Keine Termine erforderlich oder alle angekündigten Termine sind ausgebucht.';
$string['noslotsopennow'] = 'No slots are open right now.';
$string['nostudents'] = 'Keine Teilnehmer/innen mit Terminen';
$string['nostudenttobook'] = 'Kein/e Teilnehmer/in buchbar';
$string['note'] = 'Bewertung';
$string['noteacherforslot'] = 'Kein/e Trainer/in für das Zeitfenster';
$string['noteachershere'] = 'Kein/e Trainer/in verfügbar';
$string['notenoughplaces'] = 'Sorry, there are not enough free appointments in this slot.';
$string['notifications'] = 'Benachrichtigungen';
$string['notifications_help'] = 'Wenn diese Option aktiviert ist, werden Trainer/innen und Teilnehmer/innen Benachrichtigungen erhalten, wenn Termine beantragt oder abgesagt werden.';
$string['notseen'] = 'Not seen';
$string['notselected'] = 'You have not yet made a choice';
$string['now'] = 'Jetzt';
$string['occurrences'] = 'Fundstellen';
$string['on'] = 'on';
$string['onedaybefore'] = '1 Tag vor Zeitfenster';
$string['oneslotadded'] = '1 Zeitfenster hinzugefügt';
$string['oneweekbefore'] = '1 Woche vor Zeitfenster';
$string['onthemorningofappointment'] = 'Am Morgen des Termins';
$string['otherstudents'] = 'Andere Teilnehmende';
$string['overall'] = 'Überall';
$string['overlappings'] = 'Some other slots are overlapping';
$string['pluginadministration'] = 'Scheduler-Administration';
$string['pluginname'] = 'Scheduler';
$string['registeredlbl'] = 'Teilnehmer/innen mit Terminen';
$string['reminder'] = 'Erinnerung';
$string['remindertext'] = 'This is just a reminder that you have not yet set up your appointment. Please choose a time-slot as soon as possible at';
$string['remindtitle'] = '{$a}: Terminerinnerung';
$string['remindwhere'] = 'Location of the appointment:';
$string['remindwithwhom'] = 'Scheduled appointment with';
$string['resetappointments'] = 'Termine und Bewertungen löschen';
$string['resetslots'] = 'Scheduler-Zeitfenster löschen';
$string['return'] = 'Zurück zum Kurs';
$string['revoke'] = 'Den Termin absagen';
$string['saturday'] = 'Samstag';
$string['save'] = 'Sichern';
$string['savechoice'] = 'Auswahl speichern';
$string['savecomment'] = 'Kommentar speichern';
$string['saveseen'] = 'Als gesehen speichern';
$string['schedule'] = 'Festlegen';
$string['scheduleappointment'] = 'Termin festlegen für {$a}';
$string['schedulecancelled'] = '{$a}: Ihr Termin wurde abgesagt oder verschoben';
$string['schedulegroups'] = 'Für Gruppen festlegen';
$string['scheduleinnew'] = 'In neuem Zeitfenster festlegen';
$string['scheduleinslot'] = 'In Zeitfenster festlegen';
$string['scheduler'] = 'Scheduler';
$string['scheduler:addinstance'] = 'Scheduler hinzufügen';
$string['scheduler:appoint'] = 'Festlegen';
$string['scheduler:attend'] = 'Teilnehmer/innen betreuen';
$string['scheduler:canscheduletootherteachers'] = 'Termine für andere Mitarbeiter festlegen';
$string['scheduler:canseeotherteachersbooking'] = 'Buchungen anderer Trainer/innen sehen und browsen';
$string['scheduler:disengage'] = 'Alle Termine absagen (Teilnehmer/innen)';
$string['scheduler:manage'] = 'Zeitfenster und Termine verwalten';
$string['scheduler:manageallappointments'] = 'Alle Scheduler-Einträge managen';
$string['scheduler:seeotherstudentsbooking'] = 'Die Buchung anderer Teilnehmer/innen im Zeitfenster sehen';
$string['scheduler:seeotherstudentsresults'] = 'Die Bewertung anderer Teilnehmer/innen im Zeitfenster sehen';
$string['schedulestudents'] = 'Schedule nach Teilnehmer/in';
$string['seen'] = 'Gesehen';
$string['selectedtoomany'] = 'You have selected too many slots. You can select no more than {$a}.';
$string['showemailplain'] = 'Show e-mail addresses in plain text';
$string['showemailplain_desc'] = 'In the teacher\'s view of the scheduler, show the e-mail addresses of students needing an appointment in plain text, in addition to mailto: links.';
$string['showparticipants'] = 'Teilnehmer/innen anzeigen';
$string['slotdescription'] = '{$a->status} on {$a->startdate} from {$a->starttime} to {$a->endtime} at {$a->location} with {$a->facilitator}.';
$string['slot_is_just_in_use'] = 'Sorry, das Zeitfenster wurde gerade von einer/m anderen Teilnehmer/in gewählt! Bitte versuchen Sie noch einmal.';
$string['slots'] = 'Zeitfenster';
$string['slotsadded'] = '{$a} Zeitfenster wurden hinzugefügt';
$string['slottype'] = 'Zeitfenstertyp';
$string['slotupdated'] = '1 Zeitfenster aktualisiert';
$string['slotwarning'] = '<strong>Warning: </strong>Moving this slot to the selected time conflicts with the slot(s) listed below. Tick "Ignore scheduling conflicts" if you want to move the slot nevertheless.';
$string['staffbreakdown'] = 'Nach {$a}';
$string['staffmember'] = 'Member of Staff';
$string['staffrolename'] = 'Rollenname der/s Trainers/in';
$string['staffrolename_help'] = 'Name der Rolle, welche die Teilnehmer/innen betreut. Das ist nicht unbedingt ein/e "Trainer/in".';
$string['start'] = 'Start';
$string['startpast'] = 'You can\'t start an empty appointment slot in the past';
$string['starttime'] = 'Anfangszeit';
$string['statistics'] = 'Statistik';
$string['strdownloadcsvgrades'] = 'CSV-Export der Bewertungen';
$string['strdownloadcsvslots'] = 'CSV-Export der Zeitfenster';
$string['strdownloadexcelsingle'] = 'Excel-Export als ein Blatt';
$string['strdownloadexcelteachers'] = 'Excel-Exporte nach {$a}';
$string['strdownloadodssingle'] = 'OpenDoc-Export als ein Blatt';
$string['strdownloadodsteachers'] = 'OpenDoc-Exporte nach {$a}';
$string['student'] = 'Teilnehmer/in';
$string['studentbreakdown'] = 'Nach Teilnehmer/in';
$string['studentcomments'] = 'Bemerkungen der/s Teilnehmer/in';
$string['studentdetails'] = 'Teilnehmer/in Details';
$string['studentmultiselect'] = 'Jede/r Teilnehmer/in kann nur einmal in diesem Zeitfenster ausgewählt werden.';
$string['studentnotes'] = 'Ihre Kommentare zum Treffen';
$string['students'] = 'Teilnehmer/innen';
$string['sunday'] = 'Sonntag';
$string['tab-otherappointments'] = 'Alle Termine dieser/s Teilnehmers/in';
$string['tab-otherstudents'] = 'Teilnehmer/innen in diesem Zeitfenster';
$string['tab-thisappointment'] = 'Dieser Termin';
$string['teacher'] = 'Trainer/in';
$string['thursday'] = 'Donnerstag';
$string['tuesday'] = 'Dienstag';
$string['unattended'] = 'Nicht wahrgenommen';
$string['unlimited'] = 'Unbegrenzt';
$string['unregisteredlbl'] = 'Teilnehmer/innen ohne Termine';
$string['upcomingslots'] = 'Aktuelle Zeitfenster';
$string['updategrades'] = 'Bewertungen aktualisieren';
$string['updatesingleslot'] = '';
$string['updatingappointment'] = 'Einen Termin aktualisieren';
$string['wednesday'] = 'Mittwoch';
$string['welcomebackstudent'] = 'Die <strong>fettgedruckte Zeile</strong> in folgender Tabelle markiert Ihren gewählten Termin. Sie können zu jedem anderen freien Zeitfenster wechseln.';
$string['welcomenewstudent'] = 'Die folgende Tabelle zeigt alle verfügbaren Zeitfenster für einen Termin. Treffen Sie Ihre Wahl indem Sie ein Auswahlfeld wählen und vergessen Sie nicht danach "Auswahl speichern" zu klicken. Wenn Sie später eine Änderung vornehmen müssen, können Sie diese Seite erneut besuchen.';
$string['welcomenewteacher'] = 'Bitte klicken Sie auf den Button unten, um Zeitfenster für Termine hinzuzufügen, um alle Ihre Teilnehmer/innen zu sehen.';
$string['what'] = 'Was?';
$string['whathappened'] = 'Was geschah?';
$string['whatresulted'] = 'Was resultierte?';
$string['when'] = 'Wann?';
$string['where'] = 'Wo?';
$string['who'] = 'Mit wem?';
$string['whosthere'] = 'Wer ist dort?';
$string['xdaysbefore'] = '{$a} Tage vor Zeitfenster';
$string['xweeksbefore'] = '{$a} Wochen vor Zeitfenster';
$string['yourappointmentnote'] = 'Kommentar für Sie persönlich';
$string['yourslotnotes'] = 'Kommentare zum Zeitfenster';
