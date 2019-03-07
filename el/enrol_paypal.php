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
 * Strings for component 'enrol_paypal', language 'el', branch 'MOODLE_32_STABLE'
 *
 * @package   enrol_paypal
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Ανάθεση ρόλου';
$string['businessemail'] = 'Ηλεκτρονικό ταχυδρομείο επιχειρησιακού PayPal';
$string['businessemail_desc'] = 'Η ηλεκτρονική διεύθυνση του επιχειρησιακού σας PayPal λογαριασμού';
$string['cost'] = 'Κόστος εγγραφής';
$string['costerror'] = 'Το κόστος εγγραφής δεν είναι αριθμητικό';
$string['costorkey'] = 'Παρακαλούμε επιλέξτε μία από τις παρακάτω μεθόδους για εγγραφή.';
$string['currency'] = 'Νόμισμα';
$string['defaultrole'] = 'Προεπιλεγμένη ανάθεση ρόλου';
$string['defaultrole_desc'] = 'Επιλέξτε τον ρόλο, ο οποίος θα ανατεθεί στους χρήστες κατά τη διάρκεια των PayPal εγγραφών';
$string['enrolenddate'] = 'Ημερομηνία λήξης';
$string['enrolenddate_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες μπορούν να εγγραφούν μόνο μέχρι αυτή την ημερομηνία.';
$string['enrolenddaterror'] = 'Η ημερομηνία λήξης της εγγραφής δεν μπορεί να είναι νωρίτερα από την ημερομηνία έναρξης';
$string['enrolperiod'] = 'Διάρκεια εγγραφής';
$string['enrolperiod_desc'] = 'Προεπιλεγμένη διάρκεια ισχύος της εγγραφής. Αν ορισθεί σε μηδέν, η διάρκεια εγγραφής θα είναι απεριόριστη από προεπιλογή.';
$string['enrolperiod_help'] = 'Διάρκεια ισχύος της εγγραφής, ξεκινώντας από τη στιγμή εγγραφής του χρήστη. Αν απενεργοποιηθεί, η διάρκεια εγγραφής θα είναι απεριόριστη.';
$string['enrolstartdate'] = 'Ημερομηνία έναρξης';
$string['enrolstartdate_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες μπορούν να εγγραφούν μόνο από την ημερομηνία αυτή και μετά.';
$string['errdisabled'] = 'Το πρόσθετο εγγραφής PayPal είναι απενεργοποιημένο και δεν χειρίζεται τις ειδοποιήσεις πληρωμής.';
$string['erripninvalid'] = 'Η ειδοποίηση άμεσης πληρωμής δεν έχει επαληθευτεί από το PayPal.';
$string['errpaypalconnect'] = 'Δεν ήταν δυνατή η σύνδεση με {$a->url} για να επαληθευτεί η ειδοποίηση άμεσης πληρωμής: {$a->result}';
$string['expiredaction'] = 'Ενέργεια λήξης εγγραφής';
$string['expiredaction_help'] = 'Επιλέξτε την ενέργεια που θα εκτελεστεί όταν λήξει η εγγραφή του χρήστη. Παρακαλούμε έχετε υπόψη ότι ορισμένα δεδομένα χρήστη και ρυθμίσεις εξαλείφονται από το μάθημα κατά την ακύρωση εγγραφής στο μάθημα.';
$string['mailadmins'] = 'Ενημέρωση διαχειριστή';
$string['mailstudents'] = 'Ειδοποίηση μαθητών';
$string['mailteachers'] = 'Ενημέρωση καθηγητών';
$string['messageprovider:paypal_enrolment'] = 'Μηνύματα εγγραφής PayPal';
$string['nocost'] = 'Δεν υπάρχει κόστος που σχετικό με την εγγραφή σε αυτό το μάθημα!';
$string['paypalaccepted'] = 'Αποδεκτές οι πληρωμές μέσω PayPal';
$string['paypal:config'] = 'Παραμετροποίηση περιπτώσεων εγγραφής μέσω PayPal';
$string['paypal:manage'] = 'Διαχείριση εγγεγραμένων χρηστών';
$string['paypal:unenrol'] = 'Ακύρωση εγγραφής χρηστών στο μάθημα';
$string['paypal:unenrolself'] = 'Ακύρωση εγγραφής στο μάθημα από τον ίδιο';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Το άρθρωμα PayPal σας επιτρέπει να δημιουργήσετε μαθήματα επί πληρωμή. Αν το κόστος για κάθε μάθημα είναι μηδενικό, τότε οι μαθητές δεν καλούνται να πληρώσουν για να εισαχθούν. Υπάρχει ένα κόστος για όλο τον ιστότοπο το οποίο το ορίζετε εδώ ως προεπιλογή για όλο τον ιστότοπο και έπειτα μια ρύθμιση μαθήματος που μπορείτε να ορίσετε για κάθε μάθημα μεμονωμένα. Το κόστος μαθήματος παρακάμπτει το κόστος ιστοτόπου.';
$string['sendpaymentbutton'] = 'Αποστολή πληρωμής με Paypal';
$string['status'] = 'Επιτρέπονται εγγραφές PayPal';
$string['status_desc'] = 'Επιτρέπεται στους χρήστες να χρησιμοποιούν PayPal για να εγγραφούν στο μάθημα από προεπιλογή.';
$string['unenrolselfconfirm'] = 'Είστε βεβαιοι ότι θέλετε να ακυρώσετε την εγγραφή σας στο μάθημα "{$a}";';
