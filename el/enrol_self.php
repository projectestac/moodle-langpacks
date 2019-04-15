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
 * Strings for component 'enrol_self', language 'el', branch 'MOODLE_34_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Οι εγγραφές είναι απενεργοποιημένες ή ανενεργές';
$string['canntenrolearly'] = 'Δεν μπορείτε να εγγραφείτε ακόμα. Οι εγγραφές αρχίζουν στις {$a}.';
$string['canntenrollate'] = 'Δεν μπορείτε πλέον να εγγραφείτε, καθώς οι εγγραφές ολοκληρώθηκαν στις {$a}.';
$string['cohortnonmemberinfo'] = 'Μόνο μέλη της ομάδας χρηστών \'{$a}\' μπορούν να αυτο-εγγραφούν.';
$string['cohortonly'] = 'Μόνο μέλη ομάδας χρηστών';
$string['cohortonly_help'] = 'Η αυτο-εγγραφή μπορεί να περιορίζεται στα μέλη μόνο μιας συγκεκριμένης ομάδας. Σημειώστε ότι η αλλαγή αυτής της ρύθμισης δεν έχει καμία επίδραση στις υπάρχουσες εγγραφές.';
$string['customwelcomemessage'] = 'Προσαρμοσμένο μήνυμα καλωσορίσματος';
$string['customwelcomemessage_help'] = 'Ένα προσαρμοσμένο μήνυμα καλωσορίσματος μπορεί να προστεθεί ως απλό κείμενο ή σε μορφότυπο Moodle-auto, που μπορεί να περιλαμβάνει ετικέτες HTML και ετικέτες πολλαπλών γλωσσών (multi-lang).

Μπορούν να περιλαμβάνονται στο μήνυμα τα ακόλουθα δεσμευτικά θέσης:

* Όνομα μαθήματος {$a->coursename}
* Σύνδεσμος στη σελίδα προφίλ χρήστη {$a->profileurl}
* Διεύθυνση ηλεκτρονικού ταχυδρομείου χρήστη {$a->email}
* Πλήρες όνομα χρήστη {$a->fullname}';
$string['defaultrole'] = 'Προεπιλεγμένη ανάθεση ρόλου';
$string['defaultrole_desc'] = 'Επιλέξτε τον ρόλο, ο οποίος θα πρέπει να ανατεθεί στους χρήστες κατά τη διάρκεια της αυτο-εγγραφής';
$string['enrolenddate'] = 'Ημερομηνία Λήξης';
$string['enrolenddate_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες μπορούν να αυτο-εγγραφούν μόνο μέχρι αυτή την ημερομηνία.';
$string['enrolenddaterror'] = 'Η ημερομηνία λήξης εγγραφών δεν μπορεί να είναι νωρίτερα από την ημερομηνία έναρξης';
$string['enrolme'] = 'Εγγραφή';
$string['enrolperiod'] = 'Διάρκεια εγγραφής';
$string['enrolperiod_desc'] = 'Προεπιλεγμένη διάρκεια ισχύος της εγγραφής. Αν ορισθεί σε μηδέν, η διάρκεια εγγραφής θα είναι απεριόριστη από προεπιλογή.';
$string['enrolperiod_help'] = 'Διάρκεια ισχύος της εγγραφής, ξεκινώντας από τη στιγμή που ο χρήστης εγγράφεται. Αν είναι απενεργοποιημένη, η διάρκεια εγγραφής θα είναι απεριόριστη.';
$string['enrolstartdate'] = 'Ημερομηνία έναρξης';
$string['enrolstartdate_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες μπορούν να αυτο-εγγραφούν μόνο από αυτήν την ημερομηνία και μετά.';
$string['expiredaction'] = 'Ενέργεια λήξης εγγραφής';
$string['expiredaction_help'] = 'Επιλέξτε την ενέργεια που θα εκτελεστεί όταν λήξει η εγγραφή του χρήστη. Παρακαλούμε έχετε υπόψη ότι ορισμένα δεδομένα χρήστη και ρυθμίσεις εξαλείφονται από το μάθημα κατά την ακύρωση εγγραφής στο μάθημα.';
$string['expirymessageenrolledbody'] = 'Αγαπητέ χρήστη {$a->user},

Αυτή είναι μια ειδοποίηση ότι η εγγραφή σας στο μάθημα «{$a->course}» θα λήξει στις {$a->timeend}.

Εάν χρειάζεστε βοήθεια, επικοινωνήστε με τον/την «{$a->enroller}».';
$string['expirymessageenrolledsubject'] = 'Ειδοποίηση λήξης αυτο-εγγραφής';
$string['expirymessageenrollerbody'] = 'Η αυτο-εγγραφή στο μάθημα \'{$a->course}\' θα λήξει μέσα στο επόμενο {$a->threshold} για τους εξής χρήστες: {$a->users} Για να επεκταθεί η εγγραφή τους, πηγαίνετε στο {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Ειδοποίηση λήξης αυτο-εγγραφής';
$string['groupkey'] = 'Χρήση ομαδικών κλειδιών εγγραφής';
$string['groupkey_desc'] = 'Χρησιμοποιήστε ομαδικά κλειδιά εγγραφής από προεπιλογή.';
$string['groupkey_help'] = 'Εκτός από τον περιορισμό της πρόσβασης στο μάθημα σε όσους γνωρίζουν το κλειδί μόνο, η χρήση κλειδιών εγγραφής ομάδας σημαίνει ότι οι χρήστες προστίθενται αυτόματα σε ομάδες κατά την εγγραφή τους στο μάθημα.

Σημείωση: Το κλειδί εγγραφής για το μάθημα πρέπει να καθορίζεται στις ρυθμίσεις αυτο-εγγραφής καθώς και σε πλήκτρα εγγραφής ομάδας στις ρυθμίσεις ομάδας.';
$string['keyholder'] = 'Θα πρέπει να έχετε λάβει αυτό το κλειδί εγγραφής από:';
$string['longtimenosee'] = 'Ακύρωση εγγραφής ανενεργού μετά από';
$string['longtimenosee_help'] = 'Αν οι χρήστες δεν έχουν μπει σε ένα μάθημα για μεγάλο χρονικό διάστημα, τότε γίνεται ακύρωση της εγγραφής τους αυτόματα. Αυτή η παράμετρος καθορίζει αυτή την προθεσμία.';
$string['maxenrolled'] = 'Μέγιστος αριθμός εγγεγραμμένων χρηστών';
$string['maxenrolled_help'] = 'Καθορίζει τον μέγιστο αριθμό χρηστών που μπορούν να αυτο-εγγραφούν. Το 0 σημαίνει ότι δεν υπάρχει όριο.';
$string['maxenrolledreached'] = 'Έχει επιτευχθεί ο μέγιστος αριθμός χρηστών που επιτρέπεται να αυτο-εγγραφούν.';
$string['messageprovider:expiry_notification'] = 'Ειδοποιήσεις λήξης αυτο-εγγραφής';
$string['newenrols'] = 'Επιτρέπονται νέες εγγραφές';
$string['newenrols_desc'] = 'Να επιτρέπεται στους χρήστες να αυτο-εγγράφονται σε νέα μαθήματα από προεπιλογή.';
$string['newenrols_help'] = 'Αυτή η ρύθμιση καθορίζει αν ένας χρήστης μπορεί να εγγραφεί σε αυτό το μάθημα.';
$string['nopassword'] = 'Δεν χρειάζεται κλειδί εγγραφής.';
$string['password'] = 'Κλειδί εγγραφής';
$string['password_help'] = 'Ένα κλειδί εγγραφής επιτρέπει η πρόσβαση στο μάθημα να περιορίζεται μόνο σε όσους γνωρίζουν το κλειδί.

Αν το πεδίο παραμείνει κενό, οποιοσδήποτε χρήστης μπορεί να εγγραφεί στο μάθημα.

Εάν έχει οριστεί κλειδί εγγραφής, οποιοσδήποτε χρήστης προσπαθεί να εγγραφεί στο μάθημα θα πρέπει να προμηθεύσει το κλειδί. Σημειώστε ότι ένας χρήστης πρέπει να παρέχει το κλειδί εγγραφής μόνο ΜΙΑ ΦΟΡΑ, όταν εγγραφεί στο μάθημα.';
$string['passwordinvalid'] = 'Εσφαλμένο κλειδί εγγραφής. Παρακαλούμε προσπαθήστε ξανά';
$string['passwordinvalidhint'] = 'Αυτό το κλειδί εγγραφής ήταν εσφαλμένο. Παρακαλούμε, δοκιμάστε ξανά<br />(Ορίστε μια υπόδειξη - ξεκινάει με «{$a}»)';
$string['pluginname'] = 'Αυτο-εγγραφή';
$string['pluginname_desc'] = 'Το πρόσθετο αυτο-εγγραφής επιτρέπει στους χρήστες να επιλέξουν σε ποιά μαθήματα επιθυμούν να συμμετέχουν. Τα μαθήματα μπορεί να προστατεύονται από ένα κλειδί εγγραφής. Εσωτερικά η εγγραφή γίνεται μέσω του πρόσθετου χειροκίνητης εγγραφής, η οποία πρέπει να είναι ενεργοποιημένη στο ίδιο μάθημα.';
$string['privacy:metadata'] = 'Το πρόσθετο «Αυτο-εγγραφή» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['requirepassword'] = 'Απαιτείται κλειδί εγγραφής';
$string['requirepassword_desc'] = 'Απαιτείται κλειδί εγγραφής στα νέα μαθήματα και αποτρέπεται η αφαίρεση του κλειδιού εγγραφής από τα υπάρχοντα μαθήματα.';
$string['role'] = 'Προεπιλεγμένος ρόλος που ανατίθεται';
$string['self:config'] = 'Παραμετροποίηση περιπτώσεων αυτο-εγγραφής';
$string['self:holdkey'] = 'Εμφανίζεται ως ο κάτοχος κλειδιού αυτο-εγγραφής';
$string['self:manage'] = 'Διαχείριση εγγεγραμένων χρηστών';
$string['self:unenrol'] = 'Ακύρωση εγγραφής χρηστών στο μάθημα';
$string['self:unenrolself'] = 'Αυτο-απεγγραφή από το μάθημα';
$string['sendcoursewelcomemessage'] = 'Αποστολή μηνύματος καλωσορίσματος σε επίπεδο μαθήματος';
$string['sendcoursewelcomemessage_help'] = 'Όταν ένας χρήστης αυτο-εγγραφεί στο μάθημα, μπορεί να του αποσταλεί μέσω ηλεκτρονικού ταχυδρομείου, ένα μήνυμα  καλωσορίσματος. Αν αποσταλεί από την επαφή επικοινωνίας του μαθήματος (από προεπιλογή η διεύθυνση του  διδάσκοντος) και περισσότεροι από ένας χρήστες έχουν αυτόν τον ρόλο, το μήνυμα αποστέλλεται από τον πρώτο χρήστη στον οποίο ανατέθηκε ο ρόλος.';
$string['showhint'] = 'Εμφάνιση υπόδειξης';
$string['showhint_desc'] = 'Εμφάνιση πρώτου γράμματος από το κλειδί πρόσβασης επισκέπτη.';
$string['status'] = 'Να επιτρέπονται οι υπάρχουσες εγγραφές';
$string['status_desc'] = 'Επιτρέψτε αυτο-εγγραφές (χρηστών) στα νέα μαθήματα.';
$string['status_help'] = 'Εάν ενεργοποιηθεί με την επιλογή «Επιτρέπονται νέες εγγραφές» απενεργοποιημένη, μόνο χρήστες που έχουν εγγραφεί από μόνοι τους προηγουμένως μπορούν να έχουν πρόσβαση στο μάθημα. Αν απενεργοποιηθεί, αυτή η μέθοδος αυτο-εγγραφής απενεργοποιείται στην πράξη, αφού όλες οι υπάρχουσες αυτο-εγγραφές αναστέλλονται και δεν μπορούν να εγγραφούν από μόνοι τους νέοι χρήστες.';
$string['unenrol'] = 'Ακύρωση εγγραφής χρήστη';
$string['unenrolselfconfirm'] = 'Είστε βεβαιοι ότι θέλετε να ακυρώσετε την εγγραφή σας στο μάθημα "{$a}";';
$string['unenroluser'] = 'Είστε βεβαιοι ότι θέλετε να ακυρώσετε την εγγραφή του χρήστη "{$a->user}" στο μάθημα "{$a}";';
$string['usepasswordpolicy'] = 'Χρήση πολιτικής κωδικού πρόσβασης';
$string['usepasswordpolicy_desc'] = 'Χρήση της τυπικής πολιτικής κωδικών πρόσβασης για τα κλειδιά εγγραφής.';
$string['welcometocourse'] = 'Καλωσήλθατε στο {$a}';
$string['welcometocoursetext'] = 'Καλώς ήρθατε στο {$a->coursename}!

Ένα από τα πρώτα πράγματα που θα πρέπει να κάνετε είναι να επεξεργαστείτε τη σελίδα
με το προφίλ σας μέσα σε αυτό το μάθημα ώστε να μάθουμε περισσότερα για εσάς:

  {$a->profileurl}';
