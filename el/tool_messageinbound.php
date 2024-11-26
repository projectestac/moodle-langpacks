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
 * Strings for component 'tool_messageinbound', language 'el', version '4.4'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Όνομα κλάσης';
$string['component'] = 'Στοιχείο λογισμικού';
$string['configmessageinboundhost'] = 'Η διεύθυνση του εξυπηρετητή τον οποίο το Moodle θα πρέπει να ελέγχει για ηλε.αλληλογραφία. Για να καθορίσετε μια μη προεπιλεγμένη θύρα, χρησιμοποιήστε το [server]:[θύρα], για παράδειγμα mail.example.com:993. Εάν δεν έχει οριστεί μια θύρα, θα χρησιμοποιηθεί η προεπιλεγμένη θύρα για τον τύπο εξυπηρετητή ηλε.ταχυδρομείου.';
$string['defaultexpiration'] = 'Προεπιλεγμένη περίοδος λήξης διεύθυνσης';
$string['defaultexpiration_help'] = 'Όταν δημιουργείται μια διεύθυνση ηλε.ταχυδρομείου από το χειριστή, μπορεί να οριστεί αυτόματα να λήξει μετά από ένα χρονικό διάστημα, ώστε να μην μπορεί πλέον να χρησιμοποιηθεί. Συνιστάται να ορίσετε μια περίοδο λήξης.';
$string['description'] = 'Περιγραφή';
$string['domain'] = 'Τομέας διεύθυνσης ηλε.ταχυδρομείου';
$string['edit'] = 'Επεξεργασία';
$string['edithandler'] = 'Επεξεργασία ρυθμίσεων για τον χειριστή {$a}';
$string['editinghandler'] = 'Επεξεργασία {$a}';
$string['enabled'] = 'Ενεργοποιημένο';
$string['fixedenabled_help'] = 'Δεν μπορείτε να αλλάξετε την κατάσταση αυτού του χειριστή. Ίσως διότι ο χειριστής αυτός απαιτείται από άλλους χειριστές.';
$string['fixedvalidateaddress'] = 'Επικύρωση της διεύθυνσης του αποστολέα';
$string['fixedvalidateaddress_help'] = 'Δεν μπορείτε να αλλάξετε την διεύθυνση επικύρωσης για αυτό τον χειριστή.';
$string['handlerdisabled'] = 'Ο χειριστής ηλε.ταχυδρομείου με τον οποίο προσπαθήσατε να επικοινωνήσετε έχει απενεργοποιηθεί. Αδυναμία επεξεργασίας μηνύματος αυτή τη στιγμή.';
$string['incomingmailconfiguration'] = 'Ρυθμίσεις εισερχόμενης ηλε.αλληλογραφίας';
$string['incomingmailserversettings'] = 'Ρυθμίσεις εξυπηρετητή εισερχόμενης ηλε.αλληλογραφίας';
$string['incomingmailserversettings_desc'] = 'Το Moodle μπορεί να συνδεθεί με κατάλληλα διαμορφωμένους εξυπηρετητές IMAP. Μπορείτε να καθορίσετε εδώ τις ρυθμίσεις που χρησιμοποιούνται για τη σύνδεση στον εξυπηρετητή IMAP σας.';
$string['invalid_recipient_handler'] = 'Αν ληφθεί ένα έγκυρο μήνυμα αλλά ο αποστολέας δεν μπορεί να αυθεντικοποιηθεί, το μήνυμα αποθηκεύεται στον εξυπηρετητή ηλε.ταχυδρομείου και γίνεται επικοινωνία με τον χρήστη μέσω της δηλωμένης στο προφίλ χρήστη διεύθυνσης ηλε.ταχυδρομείου.
Δίνεται στον χρήστη η ευκαιρία να απαντήσει ώστε να επιβεβαιωθεί η αυθεντικότητα του αρχικού μηνύματος.
Αυτό το χειριστήριο επεξεργάζεται αυτές τις απαντήσεις. Δεν είναι δυνατόν να απενεργοποιηθεί η επαλήθευση αποστολέα για αυτό το χειριστήριο διότι ο χρήστης μπορεί να απαντήσει από μια λανθασμένη διεύθυνση ηλε.ταχυδρομείου αν το πρόγραμμα ανάγνωσης ηλε.ταχυδρομείου του χρήστη είναι λανθασμένα ρυθμισμένο.';
$string['invalid_recipient_handler_name'] = 'Μη έγκυρος χειριστής αποστολέα';
$string['invalidrecipientdescription'] = 'Το μήνυμα «{$a->subject}» δεν μπόρεσε να αυθεντικοποιηθεί, καθώς στάλθηκε από διαφορετική διεύθυνση ηλε.ταχυδρομείου από τη δηλωμένη στο προφίλ σας. Για να αυθεντικοποιηθεί το μήνυμα, πρέπει να απαντήσετε σε αυτό το μήνυμα.';
$string['invalidrecipientdescriptionhtml'] = 'Το μήνυμα «{$a->subject}» δεν μπόρεσε να αυθεντικοποιηθεί, καθώς στάλθηκε από διαφορετική διεύθυνση ηλε.ταχυδρομείου από τη δηλωμένη στο προφίλ σας. Για να αυθεντικοποιηθεί το μήνυμα, πρέπει να απαντήσετε σε αυτό το μήνυμα.';
$string['invalidrecipientfinal'] = 'Το μήνυμα «{$a->subject}» δεν μπόρεσε να αυθεντικοποιηθεί. Παρακαλούμε ελέγξτε ότι στέλνετε το μήνυμα από την διεύθυνση ηλε.ταχυδρομείου που δηλώσατε στο προφίλ σας.';
$string['mailbox'] = 'Όνομα γραμματοκιβωτίου';
$string['mailboxconfiguration'] = 'Ρυθμίσεις ηλεκτρονικού γραμματοκιβωτίου';
$string['mailboxdescription'] = '[Γραμματοκιβώτιο]+ΥποΔιεύθυνση@[τομέας] ([mailbox]+subaddress@[domain])';
$string['mailsettings'] = 'Ρυθμίσεις ηλε.ταχυδρομείου';
$string['message_handlers'] = 'Χειριστές μηνύματος';
$string['messageinbound'] = 'Μήνυμα Εισερχόμενο';
$string['messageinboundenabled'] = 'Ενεργοποίηση επεξεργασίας εισερχόμενης αλληλογραφίας';
$string['messageinboundenabled_desc'] = 'Η επεξεργασία εισερχομένων μηνυμάτων πρέπει να είναι ενεργοποιημένη, για να μπορούν τα μηνύματα να αποστέλλονται με τις κατάλληλες πληροφορίες.';
$string['messageinboundgeneralconfiguration'] = 'Γενικές ρυθμίσεις';
$string['messageinboundgeneralconfiguration_desc'] = 'Η επεξεργασία εισερχόμενων μηνυμάτων σας επιτρέπει να λαμβάνετε και να επεξεργάζεστε μηνύματα ηλε.ταχυδρομείου μέσα από το Moodle. Αυτό περιλαμβάνει εφαρμογές όπως αποστολή απάντησης μέσω μηνύματος ηλε.ταχυδρομείου σε αναρτήσεις φόρουμ ή προσθήκη αρχείων στα ιδιωτικά αρχεία χρήστη.';
$string['messageinboundhost'] = 'Εξυπηρετητής εισερχόμενης αλληλογραφίας';
$string['messageinboundhostpass'] = 'Κωδικός πρόσβασης';
$string['messageinboundhostpass_desc'] = 'Αυτός είναι ο κωδικός πρόσβασης που θα σας έχει προμηθεύσει ο πάροχος υπηρεσιών σας για τη σύνδεση στο λογαριασμό σας ηλε.ταχυδρομείου.';
$string['messageinboundhostssl'] = 'Χρήση SSL';
$string['messageinboundhostssl_desc'] = 'Μερικοί εξυπηρετητές ηλε.ταχυδρομείου υποστηρίζουν ένα επιπρόσθετο επίπεδο ασφάλειας, κρυπτογραφώντας την επικοινωνία μεταξύ του Moodle και του εξυπηρετητή σας. Συνιστούμε να χρησιμοποιήσετε αυτήν την κρυπτογράφηση SSL, αν ο εξυπηρετητής σας την υποστηρίζει.';
$string['messageinboundhosttype'] = 'Τύπος εξυπηρετητή';
$string['messageinboundhostuser'] = 'Όνομα χρήστη';
$string['messageinboundhostuser_desc'] = 'Αυτό είναι το όνομα χρήστη που ο πάροχος υπηρεσιών σας θα σας έχει παράσχει για να συνδέεστε στο λογαριασμό ηλε.ταχυδρομείου σας.';
$string['messageinboundmailboxconfiguration_desc'] = 'Όταν αποστέλλονται μηνύματα, ακολουθούν το μορφότυπο address+data@example.com. Για να δημιουργήσετε αξιόπιστα διευθύνσεις από το Moodle, προσδιορίστε τη διεύθυνση που θα χρησιμοποιούσατε κανονικά πριν από το σύμβολο @ και τον τομέα μετά το σημείο @ ξεχωριστά. Για παράδειγμα, το όνομα του γραμματοκιβωτίου στο παράδειγμα θα είναι «address» και ο τομέας ηλε.ταχυδρομείου θα είναι «example.com». Για το σκοπό αυτό πρέπει να χρησιμοποιήσετε ξεχωριστό/ειδικό λογαριασμό ηλε.ταχυδρομείου.';
$string['messageprocessingerror'] = 'Στείλατε πρόσφατα ένα μήνυμα ηλε.ταχυδρομείου «{$a->subject}», αλλά δυστυχώς δεν ήταν δυνατή η επεξεργασία του.

Οι λεπτομέρειες του σφάλματος παρουσιάζονται παρακάτω.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Στείλατε πρόσφατα ένα μήνυμα ηλε.ταχυδρομείου «{$a->subject}», αλλά δυστυχώς δεν ήταν δυνατή η επεξεργασία του.</p>
<p>Οι λεπτομέρειες του σφάλματος φαίνονται παρακάτω.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'Δεν ήταν δυνατή η επεξεργασία του μηνύματος ηλε.ταχυδρομείου «{$a->subject}». Το σφάλμα έχει ως εξής: «{$a->message}».';
$string['messageprocessingfailedunknown'] = 'Δεν ήταν δυνατή η επεξεργασία του μηνύματος ηλε.ταχυδρομείου «{$a->subject}». Επικοινωνήστε με τον διαχειριστή σας για περισσότερες πληροφορίες.';
$string['messageprocessingsuccess'] = '{$a->plain}

Εάν δεν επιθυμείτε να λαμβάνετε αυτές τις ειδοποιήσεις στο μέλλον, μπορείτε να επεξεργαστείτε τις ρυθμίσεις προσωπικών μηνυμάτων, ανοίγοντας τη διεύθυνση {$a->messagepreferencesurl} στον περιηγητή σας.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Αν δεν επιθυμείτε να λαμβάνετε αυτές τις ειδοποιήσεις στο μέλλον, μπορείτε να <a href="{$a->messagepreferencesurl}"> επεξεργαστείτε τις προτιμήσεις σας για προσωπικά μηνύματα</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Μήνυμα για επιβεβαίωση ότι ένα εισερχόμενο μήνυμα ήρθε για σας';
$string['messageprovider:messageprocessingerror'] = 'Προειδοποίηση όταν δεν μπόρεσε να γίνει επεξεργασία ενός εισερχόμενου μηνύματος';
$string['messageprovider:messageprocessingsuccess'] = 'Επιβεβαίωση ότι η επεξεργασία ενός μηνύματος ολοκληρώθηκε με επιτυχία';
$string['name'] = 'Όνομα';
$string['noencryption'] = 'Ανενεργό - Δεν υπάρχει κρυπτογράφηση';
$string['noexpiry'] = 'Χωρίς λήξη';
$string['oldmessagenotfound'] = 'Προσπαθήσατε να αυθεντικοποιήσετε χειροκίνητα ένα μήνυμα, αλλά το μήνυμα δεν βρέθηκε. Αυτό μπορεί να οφείλεται στο γεγονός ότι έχει ήδη υποβληθεί σε επεξεργασία ή επειδή το μήνυμα έληξε.';
$string['oneday'] = 'Μια μέρα';
$string['onehour'] = 'Μία ώρα';
$string['oneweek'] = 'Μια εβδομάδα';
$string['oneyear'] = 'Ένας χρόνος';
$string['pluginname'] = 'Ρυθμίσεις εισερχόμενου μηνύματος';
$string['privacy:metadata:coreuserkey'] = 'Κλειδιά χρηστών για την επικύρωση του μηνύματος ηλε.ταχυδρομείου που παραλήφθηκε';
$string['privacy:metadata:messagelist'] = 'Μια λίστα αναγνωριστικών μηνυμάτων που απέτυχαν στην επικύρωση και απαιτούν περαιτέρω εξουσιοδότηση';
$string['privacy:metadata:messagelist:address'] = 'Η διεύθυνση αποστολής του μηνύματος ηλε.ταχυδρομείου';
$string['privacy:metadata:messagelist:messageid'] = 'Το αναγνωριστικό του μηνύματος';
$string['privacy:metadata:messagelist:timecreated'] = 'Πότε έγινε η εγγραφή';
$string['privacy:metadata:messagelist:userid'] = 'Το αναγνωριστικό του χρήστη που πρέπει να εγκρίνει το μήνυμα';
$string['replysubjectprefix'] = 'Απάντ:';
$string['requirevalidation'] = 'Επικυρώστε τη διεύθυνση του αποστολέα';
$string['ssl'] = 'SSL (Αυτόματη ανίχνευση έκδοσης SSL)';
$string['sslv2'] = 'SSLv2 (Επιβολή SSL Έκδοσης 2)';
$string['sslv3'] = 'SSLv3 (Επιβολή SSL Έκδοσης 3)';
$string['taskcleanup'] = 'Εκκαθάριση μη επαληθευμένων εισερχόμενων μηνυμάτων ηλε.ταχυδρομείου';
$string['taskpickup'] = 'Παραλαβή εισερχομένων μηνυμάτων ηλε.ταχυδρομείου';
$string['tls'] = 'TLS (TLS· ξεκίνησε μέσω διαπραγμάτευσης σε επίπεδο πρωτοκόλλου μέσω μη κρυπτογραφημένου καναλιού· ΣΥΝΙΣΤΩΜΕΝΟΣ τρόπος εκκίνησης ασφαλούς σύνδεσης)';
$string['tlsv1'] = 'TLSv1 (άμεση σύνδεση με εξυπηρετητή TLS έκδοσης 1.x)';
$string['validateaddress'] = 'Επικυρώστε τη διεύθυνση ηλε.ταχυδρομείου του αποστολέα';
$string['validateaddress_help'] = 'Όταν λαμβάνεται ένα μήνυμα από ένα χρήστη, το Moodle προσπαθεί να επικυρώσει το μήνυμα συγκρίνοντας τη διεύθυνση ηλε.ταχυδρομείου του αποστολέα με τη διεύθυνση ηλε.ταχυδρομείου στο προφίλ χρήστη. Εάν ο αποστολέας δεν ταιριάζει, τότε στον χρήστη αποστέλλεται μια ειδοποίηση για να επιβεβαιώσει ότι πραγματικά αυτός έστειλε το μήνυμα. Εάν αυτή η ρύθμιση είναι απενεργοποιημένη, τότε η διεύθυνση ηλε.ταχυδρομείου του αποστολέα δεν ελέγχεται καθόλου.';
