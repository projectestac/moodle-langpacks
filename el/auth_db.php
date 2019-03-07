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
 * Strings for component 'auth_db', language 'el', branch 'MOODLE_32_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcantconnect'] = 'Δεν ήταν δυνατή η σύνδεση με την καθορισμένη βάση δεδομένων αυθεντικοποίησης...';
$string['auth_dbchangepasswordurl_key'] = 'Διεύθυνση URL αλλαγής κωδικού πρόσβασης';
$string['auth_dbdebugauthdb'] = 'Αποσφαλμάτωση ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Αποσφαλμάτωση σύνδεσης  ADOdb με την εξωτερική βάση δεδομένων - χρησιμοποιείται όταν ληφθεί κενή σελίδα κατά τη σύνδεσης. Δεν είναι κατάλληλο για ιστοτόπους παραγωγής.';
$string['auth_dbdeleteuser'] = 'Ο χρήστης «{$a->name}» με αναγνωριστικό «{$a->id}» διεγράφη';
$string['auth_dbdeleteusererror'] = 'Σφάλμα κατά τη διαγραφή του χρήστη «{$a}»';
$string['auth_dbdescription'] = 'Αυτή η μέθοδος χρησιμοποιεί έναν εξωτερικό πίνακα βάσης δεδομένων για να ελέγξει εάν το όνομα χρήστη και ο κωδικός πρόσβασης που δίνονται ισχύουν. Εάν ο λογαριασμός είναι καινούργιος, τότε πληροφορίες από άλλα πεδία μπορούν επίσης να αποσταλούν στο Moodle.';
$string['auth_dbextencoding'] = 'Εξωτερική κωδικοποίηση βάσης δεδομένων';
$string['auth_dbextencodinghelp'] = 'Κωδικοποίηση που χρησιμοποιείται στην εξωτερική βάση δεδομένων';
$string['auth_dbextrafields'] = 'Αυτά τα πεδία είναι προαιρετικά. Υπάρχει η επιλογή να προ-συμπληρώσετε μερικά πεδία χρηστών του Moodle χρησιμοποιώντας πληροφορίες από την <b>εξωτερική βάση δεδομένων</b> που θα ορίσετε εδώ. <p>Εάν τα αφήσετε κενά, τότε θα χρησιμοποιηθούν τα προεπιλεγμένα στοιχεία.</p> <p>Σε κάθε περίπτωση, ο χρήστης θα μπορεί να παρέμβει σε όλα αυτά τα πεδία μετά την σύνδεση.</p>';
$string['auth_dbfieldpass'] = 'Όνομα πεδίου που περιέχει τους κωδικούς πρόσβασης';
$string['auth_dbfieldpass_key'] = 'Πεδίο κωδικού πρόσβασης';
$string['auth_dbfielduser'] = 'Όνομα πεδίου που περιέχει τα ονόματα χρηστών';
$string['auth_dbfielduser_key'] = 'Πεδίο ονόματος χρήστη';
$string['auth_dbhost'] = 'Ο υπολογιστής που φιλοξενεί τον εξυπηρετητή βάσης δεδομένων. Χρησιμοποιήστε μια καταχώρηση συστήματος DSN εάν χρησιμοποιείτε ODBC.';
$string['auth_dbhost_key'] = 'O Η/Υ που φιλοξενεί τον εξυπηρετητή της βάσης δεδομένων';
$string['auth_dbinsertuser'] = 'Ο χρήστης «{$a->name}» με αναγνωριστικό «{$a->id}» εισήχθη';
$string['auth_dbinsertuserduplicate'] = 'Σφάλμα κατά την εισαγωγή χρήστη με  όνομα «{$a->username}» - χρήστης με αυτό το όνομα χρήστη δημιουργήθηκε ήδη μέσω του πρόσθετου «{$a->auth}».';
$string['auth_dbinsertusererror'] = 'Σφάλμα κατά την εισαγωγή του χρήστη «{$a}»';
$string['auth_dbname'] = 'Όνομα της ίδιας της βάσης δεδομένων. Αφήστε κενό εάν χρησιμοποιείτε ODBC DSN.';
$string['auth_dbname_key'] = 'Όνομα βάσης δεδομένων';
$string['auth_dbpass'] = 'Κωδικός πρόσβασης που αντιστοιχεί στο παραπάνω όνομα χρήστη';
$string['auth_dbpass_key'] = 'Κωδικός πρόσβασης';
$string['auth_dbpasstype'] = '<p>Καθορίστε τη μορφή που χρησιμοποιείται από το πεδίο του κωδικού πρόσβασης. Η κρυπτογράφηση MD5 είναι χρήσιμη για σύνδεση με άλλες κοινές διαδικτυακές εφαρμογές όπως το  PostNuke.</p><p>Χρησιμοποιήστε το \'internal\' αν θέλετε η εξωτερική βάση δεδομένων να διαχειρίζεται ονόματα χρηστών και διευθύνσεις ηλεκτρονικού ταχυδρομείου, αλλά το Moodle θα διαχειρίζεται τους κωδικούς πρόσβασης. Αν  χρησιμοποιήσετε το \'internal\', <i>πρέπει</i> να παρέχετε ένα συμπληρωμένο πεδίο διεύθυνσης ηλεκτρονικού ταχυδρομείου στην εξωτερική βάση δεδομένων και πρέπει να εκτελείτε το  admin/cron.php συχνά. Το Moodle στέλνει ένα μήνυμα ηλεκτρονικού ταχυδρομείου που περιέχει ένα προσωρινό κωδικό πρόσβασης στους νέους χρήστες.</p>';
$string['auth_dbpasstype_key'] = 'Μορφότυπος κωδικού πρόσβασης';
$string['auth_dbreviveduser'] = 'O χρήστης «{$a->name}» με αναγνωριστικό «{$a->id}» αναβιώθηκε';
$string['auth_dbrevivedusererror'] = 'Σφάλμα κατά την αναβίωση του χρήστη «{$a}»';
$string['auth_dbsaltedcrypt'] = 'Mονόδρομος κατακερματισμός συμβολοσειράς μέσω της εντολής crypt';
$string['auth_dbsetupsql'] = 'Εντολή εγκατάστασης SQL';
$string['auth_dbsetupsqlhelp'] = 'Εντολή SQL για ειδική εγκατάσταση βάσης δεδομένων. Συχνά χρησιμοποιείται για να ρυθμίσει την κωδικοποίηση επικοινωνίας - παράδειγμα για την MySQL και την PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Ο χρήστης με όνομα «{$a->name}» και αναγνωριστικό «{$a->id}» μπήκε σε αναστολή';
$string['auth_dbsuspendusererror'] = 'Σφάλμα κατά την αναστολή χρήστη «{$a}»';
$string['auth_dbsybasequoting'] = 'Χρήση sybase εισαγωγικών';
$string['auth_dbsybasequotinghelp'] = 'Η μορφή sybase μονών εισαγωγικών απαιτείται για την Oracle, την MS SQL και ορισμένες άλλες βάσεις δεδομένων. Μην τα χρησιμοποιείται για την MySQL!';
$string['auth_dbtable'] = 'Όνομα του πίνακα στη βάση δεδομένων';
$string['auth_dbtable_key'] = 'Πίνακας';
$string['auth_dbtype'] = 'Ο τύπος της βάσης δεδομένων (Δείτε την <a ref="http://phplens.com/adodb/supported.databases.html" target="_blank">τεκμηρίωση ADOdb</A> για λεπτομέρειες)';
$string['auth_dbtype_key'] = 'Βάση δεδομένων';
$string['auth_dbupdatinguser'] = 'Ενημέρωση του χρήστη με όνομα «{$a->name}» και αναγνωριστικό «{$a->id}»';
$string['auth_dbuser'] = 'Όνομα χρήστη με δικαίωμα ανάγνωσης της βάσης δεδομένων.';
$string['auth_dbuser_key'] = 'Χρήστης βάσης δεδομένων';
$string['auth_dbusernotexist'] = 'Δεν είναι δυνατή η ενημέρωση του μη υπάρχοντος χρήστη: {$a}';
$string['auth_dbuserstoadd'] = 'Καταχωρήσεις χρηστών προς εισαγωγή: {$a}';
$string['auth_dbuserstoremove'] = 'Καταχωρήσεις χρήστη προς διαγραφή: {$a}';
$string['pluginname'] = 'Εξωτερική βάση δεδομένων';
