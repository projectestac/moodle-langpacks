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
 * Strings for component 'auth', language 'el', version '4.4'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Διαθέσιμα πρόσθετα αυθεντικοποίησης';
$string['allowaccountssameemail'] = 'Επιτρέπονται λογαριασμοί με την ίδια διεύθυνση ηλε.ταχυδρομείου';
$string['allowaccountssameemail_desc'] = 'Αν ενεργοποιηθεί, τότε πολλοί χρήστες θα μπορούν να κάνουν κοινή χρήση της ίδιας διεύθυνσης ηλε.ταχυδρομείου. Αυτό μπορεί να οδηγήσει σε προβλήματα ασφάλειας ή ιδιωτικότητας, όπως για παράδειγμα, στο μήνυμα ηλε.ταχυδρομείου επιβεβαίωσης αλλαγής του κωδικού πρόσβασης.';
$string['alternatelogin'] = 'Εάν εισάγετε μια URL διεύθυνση εδώ, θα χρησιμοποιηθεί ως σελίδα σύνδεσης για τον ιστότοπό σας. Η σελίδα πρέπει να περιέχει μια φόρμα, η οποία θα έχει την ιδιότητα action ορισμένη σε <strong>«{$a}»</strong> και θα επιστρέφει τα πεδία <strong>username (όνομα χρήστη)</strong> και <strong>password (κωδικός πρόσβασης)</strong>.<br />
Προσέξτε να μην εισάγετε λανθασμένη URL διεύθυνση διότι μπορεί να κλειδώσετε τον εαυτό σας έξω από αυτό τον ιστότοπο.<br />
Αφήστε τη ρύθμιση αυτή κενή για να χρησιμοποιηθεί η προεπιλεγμένη σελίδα σύνδεσης.';
$string['alternateloginurl'] = 'Εναλλακτική URL διεύθυνση σελίδας σύνδεσης';
$string['auth_changepasswordhelp'] = 'Βοήθεια αλλαγής κωδικού πρόσβασης';
$string['auth_changepasswordhelp_expl'] = 'Εμφάνιση της βοήθειας απολεσθέντος κωδικού πρόσβασης στους χρήστες που έχασαν τον {$a} κωδικό τους. Αυτό θα εμφανιστεί μαζί με ή αντί του <strong>URL διεύθυνση αλλαγής κωδικού πρόσβασης</strong> ή αλλαγή κωδικού πρόσβασης εσωτερικά του Moodle.';
$string['auth_changepasswordurl'] = 'URL διεύθυνση αλλαγής κωδικού πρόσβασης';
$string['auth_changepasswordurl_expl'] = 'Προσδιορίστε την URL διεύθυνση που θα αποστέλλεται στους χρήστες που έχουν χάσει τον {$a} κωδικό πρόσβασής τους. Ορίστε την επιλογή <strong>«Χρήση της κανονικής σελίδας αλλαγής κωδικού πρόσβασης»</strong> σε <strong>Όχι</strong>.';
$string['auth_changingemailaddress'] = 'Έχετε ζητήσει μια αλλαγή της διεύθυνσης ηλε.ταχυδρομείου, από {$a->oldemail} στο {$a->newemail}. Για λόγους ασφαλείας, σας στέλνουμε ένα μήνυμα ηλε.ταχυδρομείου στη νέα διεύθυνση για να επιβεβαιώσετε ότι ανήκει σε εσάς. Η διεύθυνση του ηλε.ταχυδρομείου σας θα ενημερωθεί αμέσως μόλις ανοίξετε το σύνδεσμο που σας έχει αποσταλεί σε αυτό το μήνυμα.';
$string['auth_common_settings'] = 'Κοινές ρυθμίσεις';
$string['auth_data_mapping'] = 'Αντιστοίχιση πεδίων';
$string['auth_fieldlock'] = 'Κλείδωμα τιμής';
$string['auth_fieldlock_expl'] = '<p><b>Κλείδωμα τιμής:</b> Εάν ενεργοποιηθεί, αποτρέπει χρήστες του Moodle και διαχειριστές να επεξεργαστούν το πεδίο άμεσα. Χρησιμοποιήστε την επιλογή αυτή εάν διατηρείτε τα δεδομένα σε εξωτερικό σύστημα αυθεντικοποίησης. </p>';
$string['auth_fieldlockfield'] = 'Κλείδωμα τιμής ({$a})';
$string['auth_fieldlocks'] = 'Κλείδωμα πεδίων χρήστη';
$string['auth_fieldlocks_help'] = '<p>Έχετε τη δυνατότητα να κλειδώσετε κάποια από τα πεδία χρηστών. Αυτό είναι χρήσιμο για ιστοτόπους όπου τα πεδία αυτά συντηρούνται από τους διαχειριστές μη αυτόματα ή αυτόματα μέσω της λειτουργίας «Εισαγωγή χρηστών». Εάν όμως κλειδώσετε πεδία που απαιτούνται από το Moodle, βεβαιωθείτε ότι παρέχεται τα δεδομένα αυτά κατά την δημιουργία των λογαριασμών ειδάλλως οι λογαριασμοί δεν θα μπορούν να χρησιμοποιηθούν.</p><p>Λάβετε υπόψη και την ρύθμιση «Ξεκλείδωσε αν κενό» ώστε να αποφύγετε το πρόβλημα.</p>';
$string['auth_fieldmapping'] = 'Αντιστοίχιση πεδίων ({$a})';
$string['auth_invalidnewemailkey'] = 'Σφάλμα: αν προσπαθείτε να επιβεβαιώσετε μια αλλαγή διεύθυνσης ηλε.ταχυδρομείου, μπορεί να κάνατε κάποιο λάθος στην αντιγραφή της URL διεύθυνσης που σας στείλαμε με ηλε.ταχυδρομείο. Παρακαλούμε, αντιγράψτε την διεύθυνση και προσπαθήστε ξανά.';
$string['auth_multiplehosts'] = 'Πολλαπλοί hosts ή διευθύνσεις μπορούν να προσδιοριστούν (π.χ. host1.com;host2.com;host3.com) ή (π.χ. xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'Η μέθοδος αυθεντικοποίησης {$a} δεν έχει ρυθμιστεί.';
$string['auth_outofnewemailupdateattempts'] = 'Δεν έχετε άλλη προσπάθεια αλλαγής της διεύθυνσής σας ηλε.ταχυδρομείου. Το αίτημα σας ακυρώθηκε.';
$string['auth_passwordisexpired'] = 'Ο κωδικός πρόσβασής σας έχει λήξει. Παρακαλούμε, αλλάξτε τον τώρα.';
$string['auth_passwordwillexpire'] = 'Ο κωδικός πρόσβασής σας θα λήξει σε {$a} ημέρες. Θέλετε να αλλάξετε τον κωδικό πρόσβασής σας τώρα;';
$string['auth_remove_delete'] = 'Πλήρης διαγραφή χρήστη εσωτερικά';
$string['auth_remove_keep'] = 'Διατήρηση χρήστη εσωτερικά';
$string['auth_remove_suspend'] = 'Αναστολή χρήστη εσωτερικά';
$string['auth_remove_user'] = 'Καθορίστε τι πρέπει να γίνει με τον εσωτερικό λογαριασμό χρήστη κατά τη διάρκεια μαζικού συγχρονισμού όταν ο χρήστης έχει αφαιρεθεί από την εξωτερική πηγή. Μόνο χρήστες σε αναστολή μπορούν να επαναφερθούν αυτόματα αν επανεμφανιστούν στην εξωτερική πηγή.';
$string['auth_remove_user_key'] = 'Ο εξωτερικός χρήστης διαγράφηκε';
$string['auth_sync_script'] = 'Συγχρονισμός λογαριασμών χρηστών';
$string['auth_sync_suspended'] = 'Εάν ενεργοποιηθεί, το ιδιοχαρακτηριστικό αναστολής θα χρησιμοποιηθεί για την ενημέρωση της κατάστασης αναστολής του τοπικού λογαριασμού χρήστη.';
$string['auth_sync_suspended_key'] = 'Κατάσταση αναστολής συγχρονισμού τοπικού χρήστη';
$string['auth_updatelocal'] = 'Ενημέρωση τοπικών (πεδίων)';
$string['auth_updatelocal_expl'] = '<p><b>Ενημέρωση τοπικού (πεδίου):</b> Εάν ενεργοποιηθεί, το πεδίο θα ενημερώνεται (από εξωτερική πιστοποίηση) κάθε φορά που ο χρήστης εισέρχεται ή γίνεται συγχρονισμός χρηστών. Τα πεδία που ορίστηκαν να ενημερώνονται αυτόματα πρέπει να είναι κλειδωμένα.</p>';
$string['auth_updatelocalfield'] = 'Ενημέρωση τοπικού (πεδίου) ({$a})';
$string['auth_updateremote'] = 'Ενημέρωση εξωτερικών (πεδίων)';
$string['auth_updateremote_expl'] = '<p><b>Ενημέρωση εξωτερικών (πεδίων):</b> Εάν ενεργοποιηθεί, τα πεδία εξωτερικής αυθεντικοποίησης θα ενημερώνεται κάθε φορά που η εγγραφή του χρήστη ενημερώνεται. Τα πεδία να είναι ξεκλείδωτα για να επιτρέπεται η επεξεργασία. </p>';
$string['auth_updateremote_ldap'] = '<p><b>Σημείωση:</b> Η ενημέρωση εξωτερικών LDAP δεδομένων απαιτεί να ορίσετε τα binddn και bindpw σε έναν χρήστη δέσμευσης (bind-user) με επιπλέον προνόμια σε όλες τις εγγραφές των χρηστών. Επί του παρόντος δεν διατηρεί ιδιοχαρακτηριστικά με πολλαπλές τιμές και αφαιρεί πλεονάζουσες τιμές κατά την ενημέρωση. </p>';
$string['auth_updateremotefield'] = 'Ενημέρωση εξωτερικού (πεδίου) ({$a})';
$string['auth_user_create'] = 'Να επιτρέπεται η δημιουργία χρηστών';
$string['auth_user_creation'] = 'Νέοι (ανώνυμοι) χρήστες μπορούν να δημιουργήσουν λογαριασμούς χρηστών στο εξωτερικό σημείο πιστοποίησης και να τους επιβεβαιώσουν μέσω ηλε.ταχυδρομείου. Αν το ενεργοποιήσετε αυτό, θυμηθείτε επίσης να επεξεργαστείτε τις επιλογές κάθε συγκεκριμένου αρθρώματος για δημιουργία χρηστών.';
$string['auth_usernameexists'] = 'Αυτό το όνομα χρήστη υπάρχει ήδη. Παρακαλούμε επιλέξτε άλλο.';
$string['auth_usernotexist'] = 'Αδυναμία ενημέρωσης χρήστη ανύπαρκτου χρήστη: {$a}';
$string['authenticationoptions'] = 'Επιλογές αυθεντικοποίησης';
$string['authinstructions'] = 'Αφήστε το κενό για να εμφανιστούν οι προεπιλεγμένες οδηγίες σύνδεσης στην σελίδα σύνδεσης. Αν θέλετε να παρέχετε προσαρμοσμένες οδηγίες, μπορείτε να τις εισάγετε εδώ.';
$string['authloginviaemail'] = 'Να επιτρέπεται σύνδεση μέσω ηλε.ταχυδρομείου';
$string['authloginviaemail_desc'] = 'Επιτρέψτε στους χρήστες να χρησιμοποιούν εκτός από το όνομα χρήστη και την διεύθυνση ηλε.ταχυδρομείου (αν είναι μοναδική) για σύνδεση στον ιστότοπο.';
$string['auto_add_remote_users'] = 'Αυτόματη προσθήκη απομακρυσμένων χρηστών';
$string['cannotmapfield'] = 'Το πεδίο «{$a->fieldname}» δεν μπορεί να αντιστοιχηθεί επειδή το σύντομο όνομα «{$a->shortname}» είναι υπερβολικά μεγάλο. Για να μπορέσει να αντιστοιχηθεί, πρέπει να περιορίσετε το σύντομο όνομα σε {$a->charlimit} χαρακτήρες. <a href="{$a->link}">Επεξεργασία πεδίων προφίλ χρήστη</a>';
$string['changepassword'] = 'URL διεύθυνση αλλαγής κωδικού πρόσβασης';
$string['changepasswordhelp'] = 'Διεύθυνση URL σελίδας ανάκτησης κωδικού πρόσβασης, που θα αποστέλλεται στους χρήστες με μήνυμα ηλε.ταχυδρομείου. Σημειώστε ότι αυτή η ρύθμιση δεν θα έχει κανένα αποτέλεσμα αν μια διεύθυνση URL για ξεχασμένους κωδικούς πρόσβασης έχει οριστεί στις κοινές ρυθμίσεις αυθεντικοποίησης.';
$string['chooseauthmethod'] = 'Επιλέξτε μέθοδο αυθεντικοποίησης';
$string['chooseauthmethod_help'] = 'Αυτή η ρύθμιση καθορίζει την μέθοδο αυθεντικοποίησης που χρησιμοποιείται όταν ο χρήστης συνδέεται. Πρέπει να επιλέγονται μόνο ενεργοποιημένα πρόσθετα αυθεντικοποίησης, αλλιώς ο χρήστης δεν θα μπορεί να ξανασυνδεθεί. Για να εμποδίσετε την σύνδεση του χρήστη, επιλέξτε «Καθόλου είσοδος».';
$string['createpassword'] = 'Δημιουργία κωδικού πρόσβασης και ενημέρωση χρήστη';
$string['createpasswordifneeded'] = 'Δημιουργία κωδικού πρόσβασης αν χρειαστεί και αποστολή μέσω μηνύματος ηλε.ταχυδρομείου';
$string['emailchangecancel'] = 'Ακύρωση αλλαγής διεύθυνσης ηλε.ταχυδρομείου';
$string['emailchangepending'] = 'Η αλλαγή εκκρεμεί (δεν έχει γίνει ακόμη). Ανοίξτε τον σύνδεσμο που έχει σταλεί στο ηλε.ταχυδρομείο σας στη διεύθυνση {$a->preference_newemail}.';
$string['emailnowexists'] = 'Η διεύθυνση ηλε.ταχυδρομείου που προσπαθήσατε να αποδώσετε στο προφίλ σας έχει ήδη αποδοθεί σε κάποιον άλλο μετά το αρχικό σας αίτημα. Το αίτημά σας για αλλαγή της ηλε.διεύθυνσής σας, με το παρόν μήνυμα ακυρώνεται, αλλά μπορείτε να προσπαθήσετε ξανά με μια διαφορετική διεύθυνση.';
$string['emailupdate'] = 'Ανανέωση διεύθυνσης ηλε.ταχυδρομείου';
$string['emailupdatemessage'] = 'Αγαπητέ χρήστη {$a->fullname},

Ζητήσατε μια αλλαγή της διεύθυνσης ηλε.ταχυδρομείου σας για το λογαριασμό σας στο {$a->site}. Για να επιβεβαιώσετε αυτή την αλλαγή, παρακαλούμε μεταβείτε στην ακόλουθη διεύθυνση ιστού:

{$a->url}

{$a->supportemail}';
$string['emailupdatesuccess'] = 'Η διεύθυνση ηλε.ταχυδρομείου του χρήστη <em>{$a->fullname}</em> ενημερώθηκε με επιτυχία σε <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Επιβεβαίωση ενημέρωσης διεύθυνσης ηλε.ταχυδρομείου στο {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Οι κωδικοί πρόσβασης θα πρέπει να έχουν το πολύ {$a} διαδοχικούς πανομοιότυπους χαρακτήρες.';
$string['errorminpassworddigits'] = 'Οι κωδικοί πρόσβασης θα πρέπει να έχουν τουλάχιστον {$a} ψηφία.';
$string['errorminpasswordlength'] = 'Οι κωδικοί πρόσβασης θα πρέπει να είναι τουλάχιστον {$a} χαρακτήρες.';
$string['errorminpasswordlower'] = 'Οι κωδικοί πρόσβασης θα πρέπει να έχουν τουλάχιστον {$a} πεζά γράμματα.';
$string['errorminpasswordnonalphanum'] = 'Οι κωδικοί πρόσβασης θα πρέπει να έχουν τουλάχιστον {$a} μη αλφαριθμητικούς χαρακτήρες όπως *, -, ή #.';
$string['errorminpasswordupper'] = 'Οι κωδικοί πρόσβασης θα πρέπει να έχουν τουλάχιστον {$a} κεφαλαία γράμματα.';
$string['errorpasswordreused'] = 'Αυτός ο κωδικός πρόσβασης έχει χρησιμοποιηθεί στο παρελθόν και δεν επιτρέπεται η επαναχρησιμοποίηση του.';
$string['errorpasswordupdate'] = 'Σφάλμα κατά την ενημέρωση κωδικού πρόσβασης, δεν είναι δυνατή η αλλαγή κωδικού πρόσβασης';
$string['eventuserloggedin'] = 'Ο χρήστης έχει συνδεθεί';
$string['eventuserloggedinas'] = 'Ο χρήστης έχει συνδεθεί ως άλλος χρήστης';
$string['eventuserloginfailed'] = 'Η σύνδεση χρήστη απέτυχε';
$string['forcechangepassword'] = 'Επιβολή αλλαγής κωδικού πρόσβασης';
$string['forcechangepassword_help'] = 'Υποχρεωτική αλλαγή κωδικού πρόσβασης των χρηστών την επόμενη φορά που θα συνδεθούν στο Moodle';
$string['forcechangepasswordfirst_help'] = 'Υποχρεωτική αλλαγή κωδικού πρόσβασης των χρηστών την πρώτη φορά που θα συνδεθούν στο Moodle';
$string['forgottenpassword'] = 'Αν εισάγετε εδώ μια διεύθυνση URL, θα χρησιμοποιηθεί ως η σελίδα ανάκτησης κωδικού πρόσβασης για αυτόν τον ιστότοπο. Αυτό προορίζεται για ιστοτόπους όπου η διαχείριση κωδικών πρόσβασης γίνεται εξ ολοκλήρου εκτός Moodle. Αφήστε το κενό για να χρησιμοποιήσετε την προεπιλεγμένη ανάκτηση κωδικού πρόσβασης';
$string['forgottenpasswordurl'] = 'Διεύθυνση URL ξεχασμένου κωδικού πρόσβασης';
$string['getrecaptchaapi'] = 'Για να χρησιμοποιήσετε το reCAPTCHA, πρέπει να πάρετε ένα κλειδί API από τη διεύθυνση <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Σύνδεσμος για την σύνδεση ως καλεσμένος';
$string['incorrectpleasetryagain'] = 'Λάθος. Παρακαλούμε προσπαθήστε ξανά.';
$string['infilefield'] = 'Απαιτούμενο πεδίο στο αρχείο';
$string['informminpassworddigits'] = 'τουλάχιστον {$a} ψηφίο/-α';
$string['informminpasswordlength'] = 'τουλάχιστον {$a} χαρακτήρες';
$string['informminpasswordlower'] = 'τουλάχιστον {$a} πεζό/-ά γράμμα/-τα';
$string['informminpasswordnonalphanum'] = 'τουλάχιστον {$a} μη αλφαριθμητικό/-ούς χαρακτήρα/-ες όπως *,- ή #';
$string['informminpasswordreuselimit'] = 'Οι κωδικοί πρόσβασης μπορούν να ξαναχρησιμοποιηθούν μετά από {$a} αλλαγές';
$string['informminpasswordupper'] = 'τουλάχιστον {$a} κεφαλαίο/-α γράμμα/-τα';
$string['informpasswordpolicy'] = 'Ο κωδικός πρόσβασης πρέπει να έχει {$a}';
$string['instructions'] = 'Οδηγίες';
$string['internal'] = 'Εσωτερικό';
$string['limitconcurrentlogins'] = 'Περιορισμός ταυτόχρονων συνδέσεων.';
$string['limitconcurrentlogins_desc'] = 'Αν ενεργοποιηθεί, ο αριθμός των σύγχρονων συνδέσεων περιηγητή περιορίζεται. Η παλαιότερη σύνοδος τερματίζεται μόλις ξεπεραστεί το όριο. Παρακαλούμε σημειώστε ότι οι χρήστες μπορεί να χάσουν όλη την μη αποθηκευμένη εργασία τους. Αυτή η ρύθμιση είναι ασύμβατη με πρόσθετα αυθεντικοποίησης ενιαίας σύνδεσης (SSO).';
$string['locked'] = 'Κλειδωμένο';
$string['md5'] = 'MD5 κατατεμαχισμός';
$string['nopasswordchange'] = 'Δεν είναι δυνατή η αλλαγή κωδικού πρόσβασης';
$string['nopasswordchangeforced'] = 'Δεν μπορείτε να προχωρήσετε χωρίς να αλλάξετε τον κωδικό πρόσβασής σας, ωστόσο δεν υπάρχει διαθέσιμη σελίδα για την αλλαγή του. Παρακαλούμε επικοινωνήστε με τον διαχειριστή του Moodle.';
$string['noprofileedit'] = 'Το προφίλ δεν μπορεί να επεξεργαστεί';
$string['ntlmsso_attempting'] = 'Προσπάθεια για Single Sign On μέσω NTLM...';
$string['ntlmsso_failed'] = 'Αποτυχία αυτόματης σύνδεσης, παρακαλούμε δοκιμάστε την κανονική σελίδα σύνδεσης...';
$string['ntlmsso_isdisabled'] = 'Η ενιαία αυθεντικοποίηση SSO μέσω NTLM είναι απενεργοποιημένη.
(NTLM =NT LAN Manager: διαχειριστής τοπικού δικτύου των Microsoft NT) (SSO=Single sign-on: ενιαία σύνδεση με μία και μόνον αυθεντικοποίηση)';
$string['passwordhandling'] = 'Χειρισμός πεδίου κωδικού πρόσβασης';
$string['plaintext'] = 'Απλό κείμενο';
$string['pluginnotenabled'] = 'Το πρόσθετο αυθεντικοποίησης «{$a}» δεν είναι ενεργοποιημένο.';
$string['pluginnotinstalled'] = 'Το πρόσθετο αυθεντικοποίησης «{$a}» δεν είναι εγκατεστημένο.';
$string['potentialidps'] = 'Συνδεθείτε χρησιμοποιώντας το λογαριασμό σας στο:';
$string['privacy:metadata:userpref:createpassword'] = 'Δείχνει ότι πρέπει να δημιουργηθεί ένας κωδικός πρόσβασης για τον χρήστη';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Δείχνει αν ο χρήστης πρέπει να αλλάξει τον κωδικό πρόσβασης κατά τη σύνδεση';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Αποτυχημένες προσπάθειες σύνδεσης χρήστη';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Αποτυχημένες προσπάθειες σύνδεσης χρήστη από την τελευταία επιτυχημένη προσπάθεια';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Η ημερομηνία που καταγράφηκε η τελευταία αποτυχημένη προσπάθεια σύνδεσης';
$string['privacy:metadata:userpref:loginlockout'] = 'Το αν ο λογαριασμός του χρήστη είναι κλειδωμένος λόγω αποτυχημένων προσπαθειών σύνδεσης και η ημερομηνία κλειδώματος του λογαριασμού';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Δείχνει ότι ο λογαριασμός ενός χρήστη δεν πρέπει ποτέ να υπόκειται σε αποκλεισμούς';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Όταν είναι κλειδωμένο, το μυστικό που πρέπει να χρησιμοποιήσει ο χρήστης για να ξεκλειδώσει το λογαριασμό του';
$string['recaptcha'] = 'reCAPTCHA (αποτροπή κατάχρησης & ψηφιοποίηση)';
$string['recaptcha_help'] = 'Το CAPTCHA είναι για αποτροπή κατάχρησης από αυτοματοποιημένα προγράμματα. Ακολουθήστε τις οδηγίες για να επαληθεύσετε ότι είστε άνθρωπος (και όχι πρόγραμμα). Αυτό θα μπορούσε να είναι ένα πλαίσιο για να το τσεκάρετε, (δυσδιάκριτοι) χαρακτήρες που παρουσιάζονται σε μια εικόνα για να τους πληκτρολογήσετε ή ένα σύνολο εικόνων για να επιλέξετε κάποια(-ες). Αν δεν είστε σίγουροι (για την απάντησή σας), μπορείτε να προσπαθήσετε να λάβετε ένα άλλο CAPTCHA ή ένα ακουστικό CAPTCHA.';
$string['recaptcha_link'] = '';
$string['security_question'] = 'Ερώτηση ασφαλείας';
$string['selfregistration'] = 'Αυτο-καταχώρηση';
$string['selfregistration_help'] = 'Αν επιλεγεί ένα πρόσθετο αυθεντικοποίησης, όπως η αυτο-καταχώρηση με χρήση ηλε.ταχυδρομείου, τότε επιτρέπει σε πιθανούς χρήστες να αυτο-καταχωρούνται και να δημιουργούν λογαριασμούς. Αυτό δίνει δυνατότητα σε ανεπιθύμητους να δημιουργούν λογαριασμούς για να στέλνουν ανεπιθύμητα μηνύματα μέσω αναρτήσεων σε φόρουμ, αναρτήσεων σε ιστολόγια κλπ. Για να αποφύγετε αυτόν τον κίνδυνο, η αυτο-καταχώρηση πρέπει να απενεργοποιείται ή να περιορίζεται με τη ρύθμιση <em>Επιτρεπόμενοι τομείς διευθύνσεων ηλε.ταχυδρομείου</em>.';
$string['settingmigrationmismatch'] = 'Εντοπίστηκε αναντιστοιχία τιμών κατά τη διόρθωση των ονομάτων των ρυθμίσεων του πρόσθετου. Το πρόσθετο αυθεντικοποίησης «{$a->plugin}» είχε τη ρύθμιση «{$a->setting}» διαμορφωμένη σε «{$a->legacy}» με το παλαιότερης έκδοσης όνομα και σε «{$a->current}» με το τρέχον όνομα. Η τελευταία τιμή έχει οριστεί ως η έγκυρη αλλά θα πρέπει να ελέγξετε και να επιβεβαιώσετε ότι είναι αποδεκτή.';
$string['sha1'] = 'SHA-1 κατατεμαχισμός';
$string['showguestlogin'] = 'Μπορείτε να αποκρύψετε ή να εμφανίσετε το σύνδεσμο στη σελίδα σύνδεσης';
$string['stdchangepassword'] = 'Χρήση της κανονικής σελίδας αλλαγής κωδικού πρόσβασης';
$string['stdchangepassword_expl'] = 'Εάν το εξωτερικό σύστημα αυθεντικοποίησης επιτρέπει αλλαγές στον κωδικό πρόσβασης μέσω του Moodle, ορίστε αυτή την επιλογή σε «Ναι». Αυτή η ρύθμιση παρακάμπτει την ρύθμιση «URL διεύθυνση αλλαγής κωδικού πρόσβασης».';
$string['stdchangepassword_explldap'] = 'Σημείωση: Εάν ο εξυπηρετητής LDAP είναι απομακρυσμένος, συνιστάται να χρησιμοποιήσετε LDAP πάνω από ένα SSL κρυπτογραφημένο τούνελ (ldaps://).';
$string['suspended'] = 'Λογαριασμός σε αναστολή';
$string['suspended_help'] = 'Οι λογαριασμοί χρηστών σε αναστολή δεν μπορούν να συνδεθούν ή να χρησιμοποιήσουν υπηρεσίες ιστού και όλα τα εξερχόμενα μηνύματα απορρίπτονται.';
$string['testsettings'] = 'Δοκιμαστικές ρυθμίσεις';
$string['testsettingsheading'] = 'Ελέγξτε τις ρυθμίσεις αυθεντικοποίησης - {$a}';
$string['unlocked'] = 'Ξεκλειδωμένο';
$string['unlockedifempty'] = 'Ξεκλείδωμα αν είναι κενό';
$string['update_never'] = 'Ποτέ';
$string['update_oncreate'] = 'Στην δημιουργία';
$string['update_onlogin'] = 'Σε κάθε σύνδεση';
$string['update_onupdate'] = 'Στην ανανέωση';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() δεν υποστηρίζει τον επιλεγμένο τύπο χρήστη: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() δεν υποστηρίζει τον επιλεγμένο τύπο χρήστη: {$a} (...ακόμα)';
$string['username'] = 'Όνομα χρήστη';
$string['username_help'] = 'Παρακαλούμε να έχετε υπόψιν σας ότι κάποια πρόσθετα αυθεντικοποίησης δεν επιτρέπουν αλλαγή στο όνομα χρήστη.';
