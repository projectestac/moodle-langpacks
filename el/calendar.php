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
 * Strings for component 'calendar', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   calendar
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = 'Γεγονός δραστηριότητας';
$string['addevent'] = 'Προσθήκη γεγονότων';
$string['advancedoptions'] = 'Για προχωρημένους';
$string['allday'] = 'Ολοήμερο';
$string['annually'] = 'Ετησίως';
$string['calendar'] = 'Ημερολόγιο';
$string['calendarheading'] = 'Ημερολόγιο {$a}';
$string['calendarpreferences'] = 'Προτιμήσεις ημερολογίου';
$string['calendartypes'] = 'Τύποι ημερολογίου';
$string['calendarurl'] = 'Διεύθυνση URL ημερολογίου: {$a}';
$string['categoryevent'] = 'Γεγονότα κατηγορίας';
$string['categoryevents'] = 'Γεγονότα κατηγορίας';
$string['clickhide'] = 'πατήστε για απόκρυψη';
$string['clickshow'] = 'πατήστε για εμφάνιση';
$string['colactions'] = 'Ενέργειες';
$string['colcalendar'] = 'Ημερολόγιο';
$string['collastupdated'] = 'Τελευταία ενημέρωση';
$string['colpoll'] = 'Ενημέρωση';
$string['commontasks'] = 'Διεργασίες';
$string['confirmeventdelete'] = 'Θέλετε σίγουρα να διαγράψετε αυτό το γεγονός «{$a}»;';
$string['confirmeventseriesdelete'] = 'Το γεγονός «{$a->name}» είναι μέρος μιας σειράς γεγονότων. Θέλετε να διαγράψετε μόνο αυτό το γεγονός ή και τα {$a->count} γεγονότα της σειράς;';
$string['course'] = 'Μάθημα';
$string['courseevent'] = 'Γεγονός μαθήματος';
$string['courseevents'] = 'Γεγονότα μαθήματος';
$string['courses'] = 'Μαθήματα';
$string['customexport'] = 'Προσαρμοσμένο εύρος ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'Καθημερινά';
$string['daynext'] = 'Επόμενη ημέρα';
$string['dayprev'] = 'Προηγούμενη ημέρα';
$string['dayviewfor'] = 'Ημερήσια προβολή για:';
$string['dayviewtitle'] = 'Ημερήσια προβολή: {$a}';
$string['daywithnoevents'] = 'Δεν υπάρχουν γεγονότα για αυτή την ημέρα.';
$string['default'] = 'Προεπιλογή';
$string['deleteallevents'] = 'Διαγραφή όλων των γεγονότων';
$string['deleteevent'] = 'Διαγραφή γεγονότος';
$string['deleteevents'] = 'Διαγραφή γεγονότων';
$string['deleteoneevent'] = 'Διαγραφή αυτού του γεγονότος';
$string['detailedmonthviewfor'] = 'Λεπτομερής μηνιαία προβολή για:';
$string['detailedmonthviewtitle'] = 'Λεπτομερής μηνιαία προβολή: {$a}';
$string['durationminutes'] = 'Διάρκεια σε λεπτά';
$string['durationnone'] = 'Χωρίς διάρκεια';
$string['durationuntil'] = 'Μέχρι';
$string['editevent'] = 'Επεξεργασία γεγονότος';
$string['erroraddingevent'] = 'Αποτυχία προσθήκης του γεγονότος';
$string['errorbadsubscription'] = 'Αδυναμία εύρεσης συνδρομής στο ημερολόγιο';
$string['errorbeforecoursestart'] = 'Δεν είναι δυνατός ο ορισμός του γεγονότος προγενέστερα της ημερομηνίας έναρξης του μαθήματος';
$string['errorcannotimport'] = 'Δεν είναι δυνατός ο ορισμός μιας συνδρομής στο ημερολόγιο αυτή τη στιγμή.';
$string['errorhasuntilandcount'] = 'Σε έναν κανόνα επανάληψης, μπορεί να εμφανιστεί είτε το UNTIL είτε το COUNT, αλλά ΔΕΝ ΠΡΕΠΕΙ  να εμφανιστούν ΜΑΖΙ στον ίδιο κανόνα επανάληψης.';
$string['errorinvalidbydayprefix'] = 'Οι ακέραιες τιμές που προηγούνται των κανόνων BYDAY (ανά ημέρα) μπορούν να εμφανιστούν μόνο για έναν επαναλαμβανόμενο κανόνα MONTHLY (μηνιαίως) ή YEARLY (ετησίως).';
$string['errorinvalidbydaysuffix'] = 'Έγκυρες τιμές για την ημέρα της εβδομάδας ως μέρος του κανόνα BYDAY είναι οι εξής: MO, TU, WE, TH, FR, SA και SU.';
$string['errorinvalidbyhour'] = 'Έγκυρες τιμές για τον κανόνα BYHOUR είναι από 1 έως 23.';
$string['errorinvalidbyminute'] = 'Έγκυρες τιμές για τον κανόνα BYMINUTE είναι από 1 έως 59.';
$string['errorinvalidbymonth'] = 'Έγκυρες τιμές για τον κανόνα BYMONTH είναι από 1 έως 12.';
$string['errorinvalidbymonthday'] = 'Έγκυρες τιμές για τον κανόνα BYMONTHDAY είναι από 1 έως 31 και από -31 έως -1.';
$string['errorinvalidbysecond'] = 'Έγκυρες τιμές για τον κανόνα BYSECOND είναι από 1 έως 59.';
$string['errorinvalidbysetpos'] = 'Έγκυρες τιμές για τον κανόνα BYSETPOS είναι από 1 έως 366 και από -366 έως -1.';
$string['errorinvalidbyweekno'] = 'Έγκυρες τιμές για τον κανόνα BYWEEKNO είναι από 1 έως 53 και από -53 έως -1.';
$string['errorinvalidbyyearday'] = 'Έγκυρες τιμές για τον κανόνα BYYEARDAY (ανά ημέρα του έτους) είναι από 1 έως 366 και από -366 έως -1.';
$string['errorinvaliddate'] = 'Μη έγκυρη ημερομηνία';
$string['errorinvalidicalurl'] = 'Η συγκεκριμένη διεύθυνση URL iCal είναι άκυρη.';
$string['errorinvalidinterval'] = 'Η τιμή για τον κανόνα INTERVAL πρέπει να είναι ένας θετικός ακέραιος.';
$string['errorinvalidminutes'] = 'Προσδιορίστε την διάρκεια σε λεπτά δίνοντας έναν αριθμό από το 1 ως το 999.';
$string['errorinvalidrepeats'] = 'Προσδιορίστε το πλήθος των γεγονότων δίνοντας έναν αριθμό από το 1 ως το 99.';
$string['errormustbeusedwithotherbyrule'] = 'Ο κανόνας BYSETPOS πρέπει να χρησιμοποιείται μόνο σε συνδυασμό με άλλο τμήμα κανόνα BYxxx.';
$string['errornodescription'] = 'Η περιγραφή απαιτείται';
$string['errornoeventname'] = 'Το όνομα απαιτείται';
$string['errornonyearlyfreqwithbyweekno'] = 'Ο κανόνας BYWEEKNO (ανά αριθμό εβδομάδας) ισχύει μόνο για τους YEARLY (ετήσιους) κανόνες.';
$string['errorrequiredurlorfile'] = 'Είτε μια διεύθυνση URL ή ένα αρχείο είναι υποχρεωτικό για να εισαγάγετε ένα ημερολόγιο.';
$string['errorrrule'] = 'Ο κανόνας επανάληψης περασμένων μοιάζει λανθασμένος.';
$string['errorrruleday'] = 'Ο κανόνας επανάληψης έχει μια μη έγκυρη παράμετρο ημέρας.';
$string['errorrrulefreq'] = 'Ο κανόνας επανάληψης έχει μια μη έγκυρη παράμετρο συχνότητας';
$string['eventcalendareventcreated'] = 'Το γεγονός ημερολογίου δημιουργήθηκε';
$string['eventcalendareventdeleted'] = 'Το γεγονός ημερολογίου διαγράφηκε';
$string['eventcalendareventupdated'] = 'Το γεγονός ημερολογίου ενημερώθηκε';
$string['eventdate'] = 'Ημερομηνία';
$string['eventdescription'] = 'Περιγραφή';
$string['eventduration'] = 'Διάρκεια';
$string['eventendtime'] = 'Ώρα λήξης';
$string['eventendtimewrapped'] = '{$a} (Χρόνος τέλους)';
$string['eventinstanttime'] = 'Ώρα';
$string['eventkind'] = 'Τύπος του γεγονότος';
$string['eventname'] = 'Τίτλος γεγονότος';
$string['eventnameandcategory'] = '{$a->κατηγορία}: {$a->όνομα}';
$string['eventnameandcourse'] = '{$a->course}: {$a->name}';
$string['eventnone'] = 'Κανένα γεγονός';
$string['eventrepeat'] = 'Επαναλήψεις';
$string['events'] = 'Γεγονότα';
$string['eventsall'] = 'Όλα τα γεγονότα';
$string['eventsdeleted'] = 'Τα γεγονότα διαγράφηκαν';
$string['eventsfor'] = '{$a} γεγονότα';
$string['eventsimported'] = 'Γεγονότα που εισήχθησαν: {$a}';
$string['eventskey'] = 'Υπόμνημα γεγονότων';
$string['eventsource'] = 'Προέλευση αψτγεγονότος';
$string['eventspersonal'] = 'Τα προσωπικά μου γεγονότα';
$string['eventsrelatedtocategories'] = 'Γεγονότα σχετικά με κατηγορίες';
$string['eventsrelatedtocourses'] = 'Γεγονότα σχετικά με μαθήματα';
$string['eventsrelatedtogroups'] = 'Γεγονότα σχετικά με ομάδες';
$string['eventstarttime'] = 'Ώρα έναρξης';
$string['eventstoexport'] = 'Γεγονότα για εξαγωγή';
$string['eventsubscriptioncreated'] = 'Η συνδρομή στο ημερολόγιο δημιουργήθηκε';
$string['eventsubscriptiondeleted'] = 'Η συνδρομή στο ημερολόγιο διαγράφηκε';
$string['eventsubscriptioneditwarning'] = 'Αυτό το γεγονός ημερολογίου αποτελεί μέρος συνδρομής. Οποιεσδήποτε αλλαγές κάνετε σε αυτό το γεγονός θα χαθούν αν η συνδρομή διαγραφεί.';
$string['eventsubscriptionupdated'] = 'Η συνδρομή στο ημερολόγιο ενημερώθηκε';
$string['eventsupdated'] = 'Γεγονότα που ενημερώθηκαν: {$a}';
$string['eventtime'] = 'Ώρα';
$string['eventtype'] = 'Τύπος γεγονότος';
$string['eventtypecategory'] = 'γεγ. κατηγορίας';
$string['eventtypecourse'] = 'γεγ. μαθήματος';
$string['eventtypeglobal'] = 'καθολικών γεγ.';
$string['eventtypegroup'] = 'γεγ. ομάδας';
$string['eventtypemodule'] = 'γεγ. αρθρώματος';
$string['eventtypesite'] = 'γεγ. ιστοτόπου';
$string['eventtypeuser'] = 'γεγ. χρήστη';
$string['eventview'] = 'Λεπτομέρειες γεγονότος';
$string['expired'] = 'Έληξε';
$string['explain_site_timeformat'] = 'Μπορείτε να επιλέξετε να προβάλλονται οι ώρες σε 12ωρη ή 24ωρη μορφή. Αν επιλέξετε «προεπιλογή», τότε η μορφή θα επιλεγεί αυτόματα με βάση τη γλώσσα που ορίσατε ως προεπιλεγμένη. Κάθε χρήστης μπορεί πάντως να παρακάμψει/αλλάξει τη ρύθμιση αυτή για τον εαυτό του.';
$string['export'] = 'Εξαγωγή';
$string['exportbutton'] = 'Εξαγωγή';
$string['exportcalendar'] = 'Εξαγωγή ημερολογίου';
$string['exporthelp'] = 'Πώς γίνεται η εγγραφή σε αυτό το ημερολόγιο από μια εφαρμογή ημερολογίου (Google/Outlook/Άλλη);';
$string['forcecalendartype'] = 'Υποχρεωτικό ημερολόγιο';
$string['fri'] = 'Παρ';
$string['friday'] = 'Παρασκευή';
$string['generateurlbutton'] = 'URL ημερολογίου';
$string['global'] = 'Καθολικό';
$string['globalevent'] = 'Καθολικό γεγονός';
$string['globalevents'] = 'Καθολικά γεγονότα';
$string['gotoactivity'] = 'Πηγαίνετε στη δραστηριότητα';
$string['gotocalendar'] = 'Μετάβαση στο ημερολόγιο';
$string['group'] = 'Ομάδα συμμετεχόντων';
$string['groupevent'] = 'Ομαδικό γεγονός';
$string['groupevents'] = 'Ομαδικά γεγονότα';
$string['hidecourseevents'] = 'Κρύψε γεγ. μαθήματος';
$string['hideeventtype'] = 'Κρύψε {$a}';
$string['hideglobalevents'] = 'Κρύψε καθολικά γεγ.';
$string['hidegroupsevents'] = 'Κρύψε γεγ. ομάδων';
$string['hideuserevents'] = 'Κρύψε γεγ. χρηστών';
$string['hourly'] = 'Ωριαία';
$string['ical'] = 'iCal';
$string['importcalendar'] = 'Εισαγωγή ημερολογίου';
$string['importcalendarfrom'] = 'Εισαγωγή από';
$string['importcalendarheading'] = 'Εισαγωγή ημερολογίου...';
$string['importfromfile'] = 'Αρχείο ημερολογίου (.ics)';
$string['importfrominstructions'] = 'Παρακαλούμε δώστε μια διεύθυνση URL για ένα απομακρυσμένο ημερολόγιο, ή ανεβάστε ένα αρχείο.';
$string['importfromurl'] = 'Διεύθυνση URL ημερολογίου';
$string['invalideventtype'] = 'Ο τύπος γεγονότος που έχετε επιλέξει δεν είναι έγκυρος.';
$string['invalidtimedurationminutes'] = 'Η διάρκεια σε λεπτά που έχετε εισάγει δεν είναι έγκυρη. Παρακαλούμε εισάγετε την διάρκεια σε λεπτά μεγαλύτερη από 0 ή επιλέξτε Όχι διάρκεια.';
$string['invalidtimedurationuntil'] = 'Η ημερομηνία και η ώρα που επιλέξατε για διάρκεια έως είναι προγενέστερη από την ώρα έναρξης του γεγονότος. Παρακαλούμε διορθώστε πριν προχωρήσετε.';
$string['iwanttoexport'] = 'Εξαγωγή';
$string['less'] = 'Λιγότερα';
$string['managesubscriptions'] = 'Διαχείριση συνδρομών';
$string['manyevents'] = '{$a} γεγονότα';
$string['mon'] = 'Δευ';
$string['monday'] = 'Δευτέρα';
$string['monthly'] = 'Μηνιαία';
$string['monthlyview'] = 'Εμφάνιση μήνα';
$string['monthnext'] = 'Επόμενος μήνας';
$string['monthprev'] = 'Προηγούμενος μήνας';
$string['monththis'] = 'Τρέχων μήνας';
$string['more'] = 'Περισσότερα';
$string['namewithsource'] = '{$a->name} ({$a->source})';
$string['never'] = 'Ποτέ';
$string['newevent'] = 'Νέο  γεγονός';
$string['nocalendarsubscriptions'] = 'Δεν έχεις καμία συνδρομή σε ημερολόγιο';
$string['notitle'] = 'χωρίς τίτλο';
$string['noupcomingevents'] = 'Δεν υπάρχουν επικείμενα γεγονότα';
$string['oneevent'] = '1 γεγονός';
$string['pollinterval'] = 'Διάστημα ενημέρωσης';
$string['pollinterval_help'] = 'Πόσο συχνά θα θέλατε το ημερολόγιο να ενημερώνεται με νέα γεγονότα.';
$string['preferences'] = 'Προτιμήσεις';
$string['preferences_available'] = 'Οι προσωπικές σας προτιμήσεις';
$string['preferredcalendar'] = 'Προτεινόμενο ημερολόγιο';
$string['pref_lookahead'] = 'Πριν από πόσες ημέρες θεωρείται επικείμενο ένα γεγονός;';
$string['pref_lookahead_help'] = 'Καθορίζει τον (μέγιστο) αριθμό ημερών (από σήμερα) στο μέλλον μέσα στις οποίες ξεκινά ένα γεγονός προκειμένου να θεωρηθεί επικείμενο. Γεγονότα που ξεκινούν πέρα από αυτό δεν θα εμφανίζονται ως επικείμενα. Παρακαλούμε σημειώστε ότι <strong>δεν υπάρχει καμία εγγύηση</strong> ότι όλα τα γεγονότα που ξεκινούν σε αυτό το το χρονικό πλαίσιο θα εμφανιστούν. Αν υπάρχουν πάρα πολλά (πάνω από την προτίμηση «Μέγιστος αριθμός επικείμενων γεγονότων»), τότε τα πιο μακρινά γεγονότα δεν θα εμφανίζονται.';
$string['pref_maxevents'] = 'Μέγιστος αριθμός επικείμενων γεγονότων';
$string['pref_maxevents_help'] = 'Ορίζεται ο μέγιστος αριθμός επικείμενων γεγονότων που μπορούν να εμφανιστούν. Αν επιλέξετε μεγάλο αριθμό γεγονότων, τότε υπάρχει περίπτωση να χρησιμοποιηθεί μεγάλο μέρος της οθόνης σας για την εμφάνισή τους.';
$string['pref_persistflt'] = 'Απομνημόνευση ρυθμίσεων φίλτρου';
$string['pref_persistflt_help'] = 'Εάν ενεργοποιηθεί, τότε το Moodle θα θυμάται τις τελευταίες ρυθμίσεις φίλτρου γεγονότων σας και θα τις επαναφέρει αυτόματα κάθε φορά που θα συνδέεστε.';
$string['pref_startwday'] = 'Πρώτη μέρα εβδομάδας';
$string['pref_startwday_help'] = 'Οι εβδομάδες στο ημερολόγιο θα εμφανίζονται ως αρχής γενομένης από την ημέρα που θα επιλέξετε εδώ.';
$string['pref_timeformat'] = 'Μορφή εμφάνισης ώρας';
$string['pref_timeformat_help'] = 'Μπορείτε να επιλέξετε να δείτε την ώρα σε 12ωρη ή 24ωρη μορφή. Αν επιλέξετε «προεπιλογή», τότε η μορφή θα επιλεγεί αυτόματα ανάλογα με τη γλώσσα που χρησιμοποιείτε στον ιστότοπο.';
$string['privacy:metadata:calendar:event'] = 'Το στοιχείο λογισμικού ημερολογίου μπορεί να αποθηκεύσει λεπτομέρειες γεγονότος ημερολογίου χρήστη στο βασικό υποσύστημα (πυρήνα).';
$string['privacy:metadata:calendar:event:description'] = 'Περιγραφή του γεγονότος ημερολογίου.';
$string['privacy:metadata:calendar:event:eventtype'] = 'Ο τύπος γεγονότος του γεγονότος ημερολογίου.';
$string['privacy:metadata:calendar:event:name'] = 'Το όνομα του γεγονότος ημερολογίου.';
$string['privacy:metadata:calendar:event_subscriptions'] = 'Το στοιχείο λογισμικού Ημερολόγιο μπορεί να αποθηκεύσει τις λεπτομέρειες των συνδρομών χρήστη ημερολογίου μέσα στο υποσύστημα πυρήνα.';
$string['privacy:metadata:calendar:event_subscriptions:eventtype'] = 'Ο τύπος γεγονότος της συνδρομής ημερολογίου.';
$string['privacy:metadata:calendar:event_subscriptions:name'] = 'Το όνομα της συνδρομής του ημερολογίου.';
$string['privacy:metadata:calendar:event_subscriptions:url'] = 'Η διεύθυνση URL της συνδρομής του ημερολογίου.';
$string['privacy:metadata:calendar:event:timeduration'] = 'Η διάρκεια του γεγονότος ημερολογίου.';
$string['privacy:metadata:calendar:event:timestart'] = 'Η ώρα έναρξης του γεγονότος ημερολογίου.';
$string['privacy:metadata:calendar:preferences:calendar_savedflt'] = 'Η προτίμηση του χρήστη στις ρυθμίσεις του τύπου εμφάνισης γεγονότος ημερολογίου.';
$string['quickdownloadcalendar'] = 'Γρήγορη λήψη / συνδρομή στο ημερολόγιο';
$string['recentupcoming'] = 'Πρόσφατα και επόμενες 60 ημέρες';
$string['repeatedevents'] = 'Επαναλαμβανόμενα γεγονότα';
$string['repeateditall'] = 'Εφαρμογή αλλαγών σε όλα τα γεγονότα ({$a}) σε αυτή την επαναλαμβανόμενη σειρά';
$string['repeateditthis'] = 'Εφαρμογή αλλαγών σε αυτό το γεγονός μόνο';
$string['repeatevent'] = 'Επανάληψη γεγονότος';
$string['repeatnone'] = 'Χωρίς επαναλήψεις';
$string['repeatweeksl'] = 'Εβδομαδιαία επανάληψη, γενική δημιουργία';
$string['repeatweeksr'] = 'γεγονότων';
$string['sat'] = 'Σαβ';
$string['saturday'] = 'Σάββατο';
$string['showcourseevents'] = 'Δείξε γεγ. μαθήματος';
$string['showeventtype'] = 'Δείξε {$a}';
$string['showglobalevents'] = 'Δείξε γεγ. ιστοτόπου';
$string['showgroupsevents'] = 'Δείξε γεγ. ομάδας';
$string['shown'] = 'εμφανίζονται';
$string['showuserevents'] = 'Δείξε γεγ. χρήστη';
$string['siteevents'] = 'Γεγονότα ιστοτόπου';
$string['spanningevents'] = 'Γεγονότα σε εξέλιξη';
$string['subscriptionname'] = 'Όνομα ημερολογίου';
$string['subscriptionremoved'] = 'Η συνδρομή στο ημερολόγιο {$a} αφαιρέθηκε';
$string['subscriptions'] = 'Συνδρομές';
$string['subscriptionsource'] = 'Προέλευση γεγονότος: {$a}';
$string['subscriptionupdated'] = 'Η συνδρομή στο ημερολόγιο {$a} ενημερώθηκε';
$string['subsource'] = 'Προέλευση γεγονότος: {$a->name}';
$string['sun'] = 'Κυρ';
$string['sunday'] = 'Κυριακή';
$string['thu'] = 'Πεμ';
$string['thursday'] = 'Πέμπτη';
$string['timeformat_12'] = '12ωρη (πμ/μμ)';
$string['timeformat_24'] = '24ωρη';
$string['timeperiod'] = 'Χρονική περίοδος';
$string['today'] = 'Σήμερα';
$string['todayplustitle'] = 'Σήμερα {$a}';
$string['tomorrow'] = 'Αύριο';
$string['tt_deleteevent'] = 'Διαγραφή γεγονότος';
$string['tt_editevent'] = 'Επεξεργασία γεγονότος';
$string['tt_hidecourse'] = 'Τα γεγονότα μαθήματος εμφανίζονται (κλικ για απόκρυψη)';
$string['tt_hideglobal'] = 'Τα γεγονότα ιστοτόπου εμφανίζονται (κλικ για απόκρυψη)';
$string['tt_hidegroups'] = 'Τα ομαδικά γεγονότα εμφανίζονται (κλικ για απόκρυψη)';
$string['tt_hideuser'] = 'Τα προσωπικά γεγονότα εμφανίζονται (κλικ για απόκρυψη)';
$string['tt_showcourse'] = 'Τα γεγονότα μαθήματος δεν εμφανίζονται (κλικ για εμφάνιση)';
$string['tt_showglobal'] = 'Τα καθολικά γεγονότα δεν εμφανίζονται (κλικ για εμφάνιση)';
$string['tt_showgroups'] = 'Τα ομαδικά γεγονότα δεν εμφανίζονται (κλικ για εμφάνιση)';
$string['tt_showuser'] = 'Τα προσωπικά γεγονότα δεν εμφανίζονται (κλικ για εμφάνιση)';
$string['tue'] = 'Τρι';
$string['tuesday'] = 'Τρίτη';
$string['typecategory'] = 'Γεγονός κατηγορίας';
$string['typeclose'] = 'Κλείσιμο γεγονότος';
$string['typecourse'] = 'Γεγονός μαθήματος';
$string['typedue'] = 'Γεγονός που λήγει';
$string['typegradingdue'] = 'Γεγονός λήξης βαθμολόγησης';
$string['typegroup'] = 'Ομαδικό γεγονός';
$string['typeopen'] = 'Ανοιχτό γεγονός';
$string['typesite'] = 'Γεγονός ιστοτόπου';
$string['typeuser'] = 'Γεγονός χρήστη';
$string['upcomingevents'] = 'Επικείμενα  γεγονότα';
$string['upcomingeventsfor'] = 'Επικείμενα γεγονότα για:';
$string['urlforical'] = 'URL ημερολογίου για εξαγωγή σε μορφή iCalendar';
$string['user'] = 'Χρήστης';
$string['userevent'] = 'Γεγονός χρήστη';
$string['userevents'] = 'Γεγονότα χρήστη';
$string['wed'] = 'Τετ';
$string['wednesday'] = 'Τετάρτη';
$string['weekly'] = 'Εβδομαδιαία';
$string['weeknext'] = 'Επόμενη εβδομάδα';
$string['weekthis'] = 'Τρέχουσα εβδομάδα';
$string['when'] = 'Όταν';
$string['yesterday'] = 'Χθές';
$string['youcandeleteallrepeats'] = 'Αυτό το γεγονός αποτελεί τμήμα μιας επαναλαμβανόμενης σειράς γεγονότων. Μπορείτε να διαγράψετε αυτό το γεγονός μόνο του, ή και τα {$a} γεγονότα της σειράς μονομιάς.';
