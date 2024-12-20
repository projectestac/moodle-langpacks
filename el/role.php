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
 * Strings for component 'role', language 'el', version '4.4'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Προσθήκη νέου ρόλου';
$string['addrole'] = 'Προσθήκη νέου ρόλου';
$string['advancedoverride'] = 'Παράκαμψη ανώτερου ρόλου';
$string['allow'] = 'Άδεια';
$string['allowassign'] = 'Να επιτρέπεται ανάθεση ρόλων';
$string['allowed'] = 'Επιτρέπεται';
$string['allowoverride'] = 'Να επιτρέπεται παράκαμψη ρόλων';
$string['allowroletoassign'] = 'Να επιτρέπεται στους χρήστες με ρόλο {$a->fromrole} να αναθέτουν το ρόλο {$a->targetrole}';
$string['allowroletooverride'] = 'Να επιτρέπεται στους χρήστες με ρόλο {$a->fromrole} να παρακάμπτουν το ρόλο {$a->targetrole}';
$string['allowroletoswitch'] = 'Να επιτρέπεται στους χρήστες με ρόλο {$a->fromrole} να αλλάζουν ρόλο σε {$a->targetrole}';
$string['allowroletoview'] = 'Να επιτρέπεται στους χρήστες με ρόλο {$a->fromrole} να βλέπουν τον ρόλο {$a->targetrole}';
$string['allowswitch'] = 'Να επιτρέπονται εναλλαγές ρόλων';
$string['allowview'] = 'Να επιτρέπεται στο ρόλο η προβολή';
$string['allsiteusers'] = 'Όλοι οι χρήστες';
$string['analytics:listinsights'] = 'Λίστα με ενοράσεις';
$string['analytics:listowninsights'] = 'Κατάλογος των δικών σας ενοράσεων';
$string['analytics:managemodels'] = 'Διαχείριση μοντέλων';
$string['archetype'] = 'Αρχέτυπο ρόλου';
$string['archetype_help'] = 'Ο ρόλος αρχέτυπο καθορίζει τα δικαιώματα όταν ένας ρόλος επαναφέρεται στις προεπιλεγμένες ρυθμίσεις. Καθορίζει επίσης οποιαδήποτε νέα δικαιώματα για το ρόλο, όταν αναβαθμίζεται ο ιστότοπος.';
$string['archetypecoursecreator'] = 'ΑΡΧΕΤΥΠΟ: Δημιουργός μαθημάτων';
$string['archetypeeditingteacher'] = 'ΑΡΧΕΤΥΠΟ: Διδάσκων (με δικαίωμα επεξεργασίας)';
$string['archetypefrontpage'] = 'ΑΡΧΕΤΥΠΟ: Πιστοποιημένος χρήστης στην πρώτη σελίδα';
$string['archetypeguest'] = 'ΑΡΧΕΤΥΠΟ: Επισκέπτης';
$string['archetypemanager'] = 'ΑΡΧΕΤΥΠΟ: Διευθυντής';
$string['archetypestudent'] = 'ΑΡΧΕΤΥΠΟ: Μαθητής';
$string['archetypeteacher'] = 'ΑΡΧΕΤΥΠΟ: Περιορισμένος διδάσκων (χωρίς δικαίωμα επεξεργασίας)';
$string['archetypeuser'] = 'ΑΡΧΕΤΥΠΟ: Πιστοποιημένος χρήστης';
$string['assignanotherrole'] = 'Ανάθεση άλλου ρόλου';
$string['assignedroles'] = 'Ρόλοι που έχουν ανατεθεί';
$string['assignerror'] = 'Σφάλμα κατά την ανάθεση του ρόλου {$a->role} στο χρήστη {$a->user}.';
$string['assignglobalroles'] = 'Ανάθεση γενικών ρόλων';
$string['assignmentcontext'] = 'Πλαίσιο απόδοσης';
$string['assignmentoptions'] = 'Επιλογές απόδοσης';
$string['assignrole'] = 'Ανάθεση ρόλου';
$string['assignrolenameincontext'] = 'Ανάθεση του ρόλου {$a->role} στο πλαίσιο {$a->context}';
$string['assignroles'] = 'Ανάθεση ρόλων';
$string['assignroles_help'] = 'Αναθέτοντας ένα ρόλο σε ένα χρήστη σε ένα πλαίσιο, του παρέχετε τα δικαιώματα που περιλαμβάνονται σε αυτόν τον ρόλο, για το τρέχον πλαίσιο και όλα τα χαμηλότερα (ειδικότερα) πλαίσια. Για παράδειγμα, αν σε ένα χρήστη ανατεθεί ο ρόλος του μαθητή σε ένα μάθημα, θα έχει και το ρόλο του μαθητή σε όλες τις δραστηριότητες και μπλοκ μέσα στο μάθημα.';
$string['assignroles_link'] = '';
$string['assignrolesin'] = 'Ανάθεση ρόλων στο {$a}';
$string['assignrolesrelativetothisuser'] = 'Ανάθεση ρόλων σχετιζόμενων με αυτό το χρήστη';
$string['backtoallroles'] = 'Επιστροφή στη λίστα ρόλων';
$string['backup:anonymise'] = 'Ανώνυμα δεδομένα χρήστη στα αντίγραφα ασφαλείας';
$string['backup:backupactivity'] = 'Δημιουργία αντιγράφου ασφαλείας στις δραστηριότητες';
$string['backup:backupcourse'] = 'Αντίγραφα ασφαλείας μαθημάτων';
$string['backup:backupsection'] = 'Αντίγραφα ασφαλείας ενοτήτων';
$string['backup:backuptargetimport'] = 'Αντίγραφα ασφαλείας για εισαγωγή';
$string['backup:configure'] = 'Διαμόρφωση επιλογών αντιγράφων ασφαλείας';
$string['backup:downloadfile'] = 'Λήψη αρχείων από περιοχές αντιγράφων ασφαλείας';
$string['backup:userinfo'] = 'Αντίγραφα ασφαλείας δεδομένων χρήστη';
$string['badges:awardbadge'] = 'Απονομή διακριτικού σε ένα χρήστη';
$string['badges:configurecriteria'] = 'Ορίστε/επεξεργαστείτε κριτήρια απονομής ενός διακριτικού';
$string['badges:configuredetails'] = 'Ορίστε/επεξεργαστείτε λεπτομέρειες ενός διακριτικού';
$string['badges:configuremessages'] = 'Ρυθμίστε τα μηνύματα του διακριτικού';
$string['badges:createbadge'] = 'Δημιουργία/αντιγραφή διακριτικών';
$string['badges:deletebadge'] = 'Διαγραφή διακριτικών';
$string['badges:earnbadge'] = 'Αποκτήστε το διακριτικό';
$string['badges:manageglobalsettings'] = 'Διαχειριστείτε τις γενικές ρυθμίσεις του διακριτικού';
$string['badges:manageownbadges'] = 'Εμφάνιση και διαχείριση των διακριτικών που έχετε αποκτήσει';
$string['badges:revokebadge'] = 'Ανάκληση διακριτικού από ένα χρήστη';
$string['badges:viewawarded'] = 'Εμφάνιση χρηστών που απέκτησαν ένα συγκεκριμένο διακριτικό χωρίς να μπορούν να απονείμουν διακριτικά.';
$string['badges:viewbadges'] = 'Εμφάνιση διαθέσιμων διακριτικών χωρίς να τα αποκτήσετε';
$string['badges:viewotherbadges'] = 'Δείτε τα δημόσια διακριτικά σε προφίλ άλλων χρηστών';
$string['block:edit'] = 'Επεξεργασία ρυθμίσεων μπλοκ';
$string['block:view'] = 'Εμφάνιση μπλοκ';
$string['blog:create'] = 'Δημιουργία αναρτήσεων σε ιστολόγιο';
$string['blog:manageentries'] = 'Επεξεργασία καταχωρήσεων';
$string['blog:manageexternal'] = 'Επεξεργασία και διαχείριση εξωτερικών ιστολογίων';
$string['blog:search'] = 'Αναζήτηση αναρτήσεων ιστολογίου';
$string['blog:view'] = 'Εμφάνιση αναρτήσεων ιστολογίου';
$string['blog:viewdrafts'] = 'Εμφάνιση προσχεδίων αναρτήσεων ιστολογίου';
$string['calendar:manageentries'] = 'Διαχείριση των καταχωρήσεων οποιουδήποτε ημερολογίου';
$string['calendar:managegroupentries'] = 'Διαχείριση ομαδικών γεγονότων';
$string['calendar:manageownentries'] = 'Διαχείριση προσωπικών γεγονότων';
$string['capabilities'] = 'Δυνατότητες';
$string['capability'] = 'Δυνατότητα';
$string['category:create'] = 'Δημιουργία κατηγοριών';
$string['category:delete'] = 'Διαγραφή κατηγοριών';
$string['category:manage'] = 'Διαχείριση κατηγοριών';
$string['category:update'] = 'Τροποποίηση κατηγοριών';
$string['category:viewcourselist'] = 'Εμφάνιση κατηγορίας μαθημάτων των μαθημάτων μέσα σε αυτή';
$string['category:viewhiddencategories'] = 'Εμφάνιση κρυφών κατηγοριών';
$string['category:visibility'] = 'Εμφάνιση κρυφών κατηγοριών';
$string['checkglobalpermissions'] = 'Έλεγχος δυνατοτήτων συστήματος';
$string['checkpermissions'] = 'Έλεγχος δυνατοτήτων';
$string['checkpermissionsin'] = 'Έλεγχος δυνατοτήτων στο {$a}';
$string['checksystempermissionsfor'] = 'Έλεγχος δυνατοτήτων συστήματος για το χρήστη {$a->fullname}';
$string['checkuserspermissionshere'] = 'Έλεγχος δυνατοτήτων για το χρήστη {$a->fullname} που έχει στο επίπεδο πλαισίου {$a->contextlevel}';
$string['chooseroletoassign'] = 'Παρακαλούμε επιλέξτε ρόλο προς ανάθεση';
$string['cohort:assign'] = 'Προσθήκη και διαγραφή μελών συνόλου χρηστών';
$string['cohort:manage'] = 'Δημιουργία, διαγραφή και μετακίνηση συνόλων χρηστών';
$string['cohort:view'] = 'Εμφάνιση όλων των συνόλων χρηστών του ιστοτόπου';
$string['comment:delete'] = 'Διαγραφή σχολίων';
$string['comment:post'] = 'Αποστολή σχολίων';
$string['comment:view'] = 'Εμφάνιση σχολίων';
$string['competency:competencygrade'] = 'Ορισμός εκτίμησης προσόντος';
$string['competency:competencymanage'] = 'Διαχείριση πλαισίων προσόντων';
$string['competency:competencyview'] = 'Εμφάνιση πλαισίων προσόντων';
$string['competency:coursecompetencyconfigure'] = 'Ρυθμίσεις προσόντων μαθήματος';
$string['competency:coursecompetencygradable'] = 'Να λαμβάνονται βαθμοί προσόντος';
$string['competency:coursecompetencymanage'] = 'Διαχείριση προσόντων μαθήματος';
$string['competency:coursecompetencyview'] = 'Εμφάνιση προσόντων μαθήματος';
$string['competency:evidencedelete'] = 'Διαγραφή αποδεικτικού';
$string['competency:plancomment'] = 'Σχόλιο για ένα σχέδιο μάθησης';
$string['competency:plancommentown'] = 'Σχόλιο για δικό σας σχέδιο μάθησης';
$string['competency:planmanage'] = 'Διαχείριση σχεδίων μάθησης';
$string['competency:planmanagedraft'] = 'Διαχείριση προσχεδίων σχεδίων μάθησης';
$string['competency:planmanageown'] = 'Διαχείριση δικών σας σχεδίων μάθησης';
$string['competency:planmanageowndraft'] = 'Διαχείριση δικών σας προσχεδίων για σχέδια μάθησης';
$string['competency:planrequestreview'] = 'Αίτημα για εξέταση ενός σχεδίου μάθησης';
$string['competency:planrequestreviewown'] = 'Αίτημα για εξέταση του δικού σας σχεδίου μάθησης';
$string['competency:planreview'] = 'Εξέταση ενός σχεδίου μάθησης';
$string['competency:planview'] = 'Εμφάνιση όλων των σχεδίων μάθησης';
$string['competency:planviewdraft'] = 'Εμφάνιση προσχεδίων για σχέδια μάθησης';
$string['competency:planviewown'] = 'Εμφάνιση των δικών σας σχεδίων μάθησης';
$string['competency:planviewowndraft'] = 'Εμφάνιση των δικών σας προσχεδίων για σχέδια μάθησης';
$string['competency:templatemanage'] = 'Διαχείριση υποδειγμάτων σχεδίων μάθησης';
$string['competency:templateview'] = 'Εμφάνιση υποδειγμάτων σχεδίων μάθησης';
$string['competency:usercompetencycomment'] = 'Σχολιασμός προσόντος χρήστη';
$string['competency:usercompetencycommentown'] = '(Αυτο)σχολιασμός για δικό σας προσόν χρήστη';
$string['competency:usercompetencyrequestreview'] = 'Αίτημα επανεξέτασης προσόντος χρήστη';
$string['competency:usercompetencyrequestreviewown'] = 'Αίτημα επανεξέτασης προσόντος τρέχοντος χρήστη';
$string['competency:usercompetencyreview'] = 'Επανεξέταση προσόντος χρήστη';
$string['competency:usercompetencyview'] = 'Εμφάνιση προσόντος χρήστη';
$string['competency:userevidencemanage'] = 'Διαχείριση αποδεικτικών προηγούμενης μάθησης';
$string['competency:userevidencemanageown'] = 'Διαχείριση δικών σας αποδεικτικών προηγούμενης μάθησης';
$string['competency:userevidenceview'] = 'Εμφάνιση αποδεικτικών προηγούμενης μάθησης ενός χρήστη';
$string['confirmaddadmin'] = 'Θέλετε πραγματικά να προσθέσετε τον χρήστη <strong>«{$a}»</strong> ως νέο διαχειριστή ιστοτόπου;';
$string['confirmdeladmin'] = 'Θέλετε πραγματικά να αφαιρέσετε τον χρήστη <strong>{$a}</strong> από τη λίστα των διαχειριστών ιστοτόπου;';
$string['confirmroleprevent'] = 'Θέλετε πραγματικά να αφαιρέσετε τον ρόλο <strong>«{$a->role}»</strong> από τη λίστα επιτρεπόμενων ρόλων για τη δυνατότητα «{$a->cap}» στο πλαίσιο «{$a->context}»;';
$string['confirmroleunprohibit'] = 'Θέλετε πραγματικά να αφαιρέσετε τον ρόλο <strong>«{$a->role}»</strong> από τη λίστα απαγορευμένων ρόλων για τη δυνατότητα «{$a->cap}» στο πλαίσιο «{$a->context}»;';
$string['confirmunassign'] = 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτόν τον ρόλο από αυτόν τον χρήστη;';
$string['confirmunassignno'] = 'Άκυρο';
$string['confirmunassigntitle'] = 'Επιβεβαίωση αλλαγής ρόλου';
$string['confirmunassignyes'] = 'Αφαίρεση';
$string['contentbank:access'] = 'Πρόσβαση στην τράπεζα περιεχομένου';
$string['contentbank:deleteanycontent'] = 'Διαγραφή οποιουδήποτε περιεχομένου από την τράπεζα περιεχομένου';
$string['contentbank:deleteowncontent'] = 'Διαγραφή περιεχομένου από τη δική σας τράπεζα περιεχομένου';
$string['contentbank:downloadcontent'] = 'Λήψη περιεχομένου από την τράπεζα περιεχομένου';
$string['contentbank:manageanycontent'] = 'Διαχείριση οποιουδήποτε περιεχομένου από την τράπεζα περιεχομένου';
$string['contentbank:manageowncontent'] = 'Διαχείριση περιεχομένου από δική σας τράπεζα περιεχομένου';
$string['contentbank:upload'] = 'Ανέβασμα νέου περιεχομένου στην τράπεζα περιεχομένου';
$string['contentbank:useeditor'] = 'Δημιουργία ή επεξεργασία περιεχομένου με χρήση προγράμματος επεξεργασίας τύπων περιεχομένου';
$string['contentbank:viewunlistedcontent'] = 'Προβολή περιεχομένου εκτός λίστας από την τράπεζα περιεχομένου';
$string['context'] = 'Πλαίσιο';
$string['course:activityvisibility'] = 'Προβολή/απόκρυψη δραστηριοτήτων';
$string['course:bulkmessaging'] = 'Αποστολή ενός μηνύματος σε πολλούς παραλήπτες';
$string['course:changecategory'] = 'Τροποποίηση κατηγορίας μαθήματος';
$string['course:changefullname'] = 'Αλλαγή πλήρους ονόματος μαθήματος';
$string['course:changeidnumber'] = 'Αλλαγή αναγνωριστικού αριθμού μαθήματος';
$string['course:changelockedcustomfields'] = 'Τροποποίηση των κλειδωμένων προσαρμοσμένων πεδίων';
$string['course:changeshortname'] = 'Τροποποίηση σύντομου ονόματος μαθήματος';
$string['course:changesummary'] = 'Τροποποίηση περίληψης μαθήματος';
$string['course:configurecustomfields'] = 'Ρυθμίσεις προσαρμοσμένων πεδίων';
$string['course:configuredownloadcontent'] = 'Ρυθμίσεις λήψης περιεχομένου μαθήματος';
$string['course:create'] = 'Δημιουργία μαθημάτων';
$string['course:creategroupconversations'] = 'Δημιουργία ομαδικών συζητήσεων';
$string['course:delete'] = 'Διαγραφή μαθημάτων';
$string['course:downloadcoursecontent'] = 'Λήψη περιεχομένων μαθήματος';
$string['course:enrolconfig'] = 'Διαμόρφωση στιγμιοτύπων εγγραφής στα μαθήματα';
$string['course:enrolreview'] = 'Εξέταση εγγραφών μαθήματος';
$string['course:ignoreavailabilityrestrictions'] = 'Αγνοήστε τους περιορισμούς διαθεσιμότητας';
$string['course:ignorefilesizelimits'] = 'Χρησιμοποιήστε αρχεία μεγαλύτερα από οποιονδήποτε περιορισμό μεγέθους αρχείου';
$string['course:isincompletionreports'] = 'Εμφάνιση στις αναφορές ολοκλήρωσης';
$string['course:manageactivities'] = 'Διαχείριση δραστηριοτήτων';
$string['course:managefiles'] = 'Διαχείριση αρχείων';
$string['course:managegrades'] = 'Διαχείριση βαθμών';
$string['course:managegroups'] = 'Διαχείριση ομάδων';
$string['course:managescales'] = 'Διαχείριση κλιμάκων';
$string['course:markcomplete'] = 'Επισήμανση χρηστών για ολοκλήρωση κατά την ολοκλήρωση του μαθήματος';
$string['course:movesections'] = 'Μετακίνηση ενοτήτων';
$string['course:overridecompletion'] = 'Παράκαμψη της κατάστασης ολοκλήρωσης δραστηριότητας';
$string['course:recommendactivity'] = 'Προτείνετε δραστηριότητες μέσω του επιλογέα δραστηριότητας';
$string['course:renameroles'] = 'Μετονομασία ρόλων';
$string['course:request'] = 'Αίτηση για δημιουργία μαθημάτων';
$string['course:reset'] = 'Επαναφορά αρχικών ρυθμίσεων μαθήματος';
$string['course:reviewotherusers'] = 'Αξιολογήστε άλλους χρήστες';
$string['course:sectionvisibility'] = 'Προβολή/απόκρυψη ενότητας';
$string['course:setcurrentsection'] = 'Ορισμός τρέχουσας ενότητας';
$string['course:setforcedlanguage'] = 'Επιβολή γλώσσας μαθήματος';
$string['course:tag'] = 'Αλλαγή ετικετών μαθήματος';
$string['course:togglecompletion'] = 'Χειροκίνητη επισήμανση δραστηριοτήτων ως ολοκληρωμένων';
$string['course:update'] = 'Επεξεργασία ρυθμίσεων μαθήματος';
$string['course:useremail'] = 'Ενεργοποίηση/απενεργοποίηση διεύθυνσης email';
$string['course:view'] = 'Εμφάνιση μαθημάτων χωρίς συμμετέχοντες';
$string['course:viewcoursegrades'] = 'Εμφάνιση βαθμών μαθήματος';
$string['course:viewhiddenactivities'] = 'Εμφάνιση κρυφών δραστηριοτήτων';
$string['course:viewhiddencourses'] = 'Εμφάνιση κρυφών μαθημάτων';
$string['course:viewhiddensections'] = 'Εμφάνιση κρυφών ενοτήτων';
$string['course:viewhiddenuserfields'] = 'Εμφάνιση κρυφών πεδίων χρηστών';
$string['course:viewparticipants'] = 'Εμφάνιση συμμετεχόντων';
$string['course:viewscales'] = 'Εμφάνιση κλιμάκων';
$string['course:viewsuspendedusers'] = 'Εμφάνιση χρηστών σε αναστολή';
$string['course:visibility'] = 'Προβολή/απόκρυψη μαθημάτων';
$string['createrolebycopying'] = 'Δημιουργία νέου ρόλου βασισμένου στον «{$a}»';
$string['createthisrole'] = 'Δημιουργία αυτού του ρόλου';
$string['currentcontext'] = 'Τρέχον πλαίσιο';
$string['currentrole'] = 'Τρέχων ρόλος';
$string['customroledescription'] = 'Προσαρμοσμένη περιγραφή';
$string['customroledescription_help'] = 'Οι περιγραφές τυπικών ρόλων προσαρμόζονται τοπικά αυτόματα αν η προσαρμοσμένη περιγραφή είναι κενή.';
$string['customrolename'] = 'Προσαρμοσμένο πλήρες όνομα';
$string['customrolename_help'] = 'Τα ονόματα των τυπικών ρόλων εντοπίζονται αυτόματα αν το προσαρμοσμένο όνομα είναι κενό. Πρέπει να δώσετε ένα πλήρες όνομα για όλους τους προσαρμοσμένους ρόλους.';
$string['defaultrole'] = 'Αρχική κατηγορία χρηστών';
$string['defaultx'] = 'Προεπιλογή: «{$a}»';
$string['defineroles'] = 'Διαχείριση ρόλων';
$string['deletecourseoverrides'] = 'Διαγραφή όλων των παρακάμψεων στο μάθημα';
$string['deletelocalroles'] = 'Διαγραφή όλων των τοπικών αναθέσεων ρόλων';
$string['deleterolesure'] = '<p>Είστε σίγουροι ότι θέλετε να διαγράψετε το ρόλο «{$a->name} ({$a->shortname})»;</p><p>Αυτή τη στιγμή ο ρόλος αυτός έχει ανατεθεί σε {$a->count} χρήστες.';
$string['deletexrole'] = 'Διαγραφή του ρόλου «{$a}»';
$string['duplicaterole'] = 'Αντίγραφο ρόλου';
$string['duplicaterolesure'] = '<p>Είστε σίγουροι ότι θέλετε να δημιουργηθεί αντίγραφο του ρόλου «{$a->name} ({$a->shortname})»;</p>';
$string['editingrolex'] = 'Τροποποίηση του ρόλου «{$a}»';
$string['editrole'] = 'Επεξεργασία ρόλου';
$string['editxrole'] = 'Τροποποίηση του ρόλου «{$a}»';
$string['errorbadrolename'] = 'Εσφαλμένο όνομα ρόλου';
$string['errorbadroleshortname'] = 'Εσφαλμένο σύντομο όνομα ρόλου';
$string['errorexistsrolename'] = 'Υπάρχει ήδη ένας ρόλος με το ίδιο όνομα';
$string['errorexistsroleshortname'] = 'Υπάρχει ήδη ένας ρόλος με το ίδιο όνομα';
$string['errorroleshortnametoolong'] = 'Το σύντομο όνομα δεν πρέπει να υπερβαίνει τους 100 χαρακτήρες';
$string['eventcapabilityassigned'] = 'Η δυνατότητα ανατέθηκε';
$string['eventcapabilityunassigned'] = 'Η δυνατότητα αφαιρέθηκε';
$string['eventroleallowassignupdated'] = 'Να επιτρέπεται ανάθεση ρόλου';
$string['eventroleallowoverrideupdated'] = 'Να επιτρέπεται παράκαμψη ρόλου';
$string['eventroleallowswitchupdated'] = 'Να επιτρέπεται εναλλαγή ρόλων';
$string['eventroleallowviewupdated'] = 'Να επιτρέπεται προβολή ρόλου';
$string['eventroleassigned'] = 'Ο ρόλος έχει ανατεθεί';
$string['eventrolecapabilitiesupdated'] = 'Οι δυνατότητες ρόλων ενημερώθηκαν';
$string['eventroledeleted'] = 'Ο ρόλος έχει διαγραφεί';
$string['eventroleunassigned'] = 'Ο ρόλος αφαιρέθηκε';
$string['eventroleupdated'] = 'Ο ρόλος ενημερώθηκε';
$string['existingadmins'] = 'Υπάρχοντες διαχειριστές ιστοτόπου';
$string['existingusers'] = '{$a} υπάρχοντες χρήστες';
$string['explanation'] = 'Επεξήγηση';
$string['export'] = 'Εξαγωγή';
$string['extusers'] = 'Υπάρχοντες χρήστες';
$string['extusersmatching'] = 'Υπάρχοντες χρήστες που ταιριάζουν στο «{$a}»';
$string['filter:manage'] = 'Διαχείριση τοπικών ρυθμίσεων φίλτρου';
$string['frontpageuser'] = 'Πιστοποιημένος χρήστης στην πρώτη σελίδα';
$string['frontpageuserdescription'] = 'Όλοι οι συνδεδεμένοι χρήστες στο μάθημα στην πρώτη σελίδα.';
$string['globalrole'] = 'Ρόλος συστήματος';
$string['globalroleswarning'] = 'ΠΡΟΣΟΧΗ! Οι ρόλοι που αποδίδετε στους χρήστες από αυτήν την σελίδα, εφαρμόζονται σε ολόκληρο το σύστημα, συμπεριλαμβανόμενης της πρώτης σελίδας και όλων των μαθημάτων.';
$string['gotoassignroles'] = 'Ανάθεση ρόλων σε αυτό το {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Ανάθεση ρόλων συστήματος';
$string['grade:edit'] = 'Τροποποίηση βαθμών';
$string['grade:export'] = 'Εξαγωγή βαθμών';
$string['grade:hide'] = 'Απόκρυψη/εμφάνιση βαθμών';
$string['grade:import'] = 'Εισαγωγή βαθμών';
$string['grade:lock'] = 'Κλείδωμα βαθμών';
$string['grade:manage'] = 'Διαχείριση στοιχείων βαθμού';
$string['grade:managegradingforms'] = 'Διαχείριση μεθόδων προχωρημένης βαθμολόγησης';
$string['grade:manageletters'] = 'Διαχείριση βαθμών (γραμμάτων)';
$string['grade:manageoutcomes'] = 'Διαχείριση μαθησιακών αποτελεσμάτων βαθμού';
$string['grade:managesharedforms'] = 'Διαχείριση υποδειγμάτων φόρμας προχωρημένης βαθμολόγησης';
$string['grade:override'] = 'Παράκαμψη βαθμών';
$string['grade:sharegradingforms'] = 'Κοινή χρήση φόρμας προχωρημένης βαθμολόγησης ως υποδείγματος';
$string['grade:unlock'] = 'Ξεκλείδωμα βαθμών ή στοιχείων';
$string['grade:view'] = 'Εμφάνιση των βαθμών σας';
$string['grade:viewall'] = 'Εμφάνιση των βαθμών άλλων χρηστών';
$string['grade:viewhidden'] = 'Εμφάνιση των κρυφών βαθμών μου';
$string['h5p:deploy'] = 'Επιτρέπει εγκατάσταση/χρήση περιεχομένου H5P';
$string['h5p:setdisplayoptions'] = 'Ορισμός των επιλογών εμφάνισης σε περιεχόμενο H5P';
$string['h5p:updatelibraries'] = 'Διαχείριση τύπων περιεχομένου H5P';
$string['highlightedcellsshowdefault'] = 'Τα φωτο-επισημασμένα δικαιώματα στον παρακάτω πίνακα είναι οι προεπιλογές για το αρχικό πρότυπο ρόλων που έχετε επιλέξει παραπάνω.κελιά στον παρακάτω πίνακα δείχνουν την από προεπιλογή δυνατότητα για το ρόλο αυτό, βασισμένα στον «Ιστορικό τύπο ρόλου».';
$string['highlightedcellsshowinherit'] = 'Τα φωτο-επισημασμένα κελιά στον παρακάτω πίνακα δείχνουν το δικαίωμα (αν υπάρχει) που πρόκειται να κληρονομηθεί. Εκτός από τις δυνατότητες που πραγματικά θέλετε να αλλάξετε, αφήστε όλες τις άλλες ρυθμισμένες σε Κληρονομεί.';
$string['inactiveformorethan'] = 'ανενεργό για παραπάνω από {$a->timeperiod}';
$string['ingroup'] = 'στην ομάδα «{$a->group}»';
$string['inherit'] = 'Κληρονομικότητα';
$string['invalidpresetfile'] = 'Μη έγκυρο αρχείο ορισμού ρόλου';
$string['legacy:admin'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΤΕΡΟΥ ΤΥΠΟΥ: Διαχειριστής';
$string['legacy:coursecreator'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΤΕΡΟΥ ΤΥΠΟΥ: Δημιουργός μαθημάτων';
$string['legacy:editingteacher'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΤΕΡΟΥ ΤΥΠΟΥ: Διδάσκων (με δικαίωμα επεξεργασίας)';
$string['legacy:guest'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΤΕΡΟΥ ΤΥΠΟΥ: Επισκέπτης';
$string['legacy:student'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΤΕΡΟΥ ΤΥΠΟΥ: Μαθητής';
$string['legacy:teacher'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΤΕΡΟΥ ΤΥΠΟΥ: Περιορισμένος διδάσκων (χωρίς δικαίωμα επεξεργασίας)';
$string['legacy:user'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΤΕΡΟΥ ΤΥΠΟΥ: Αυθεντικοποιημένος χρήστης';
$string['legacytype'] = 'Τύπος ρόλου παλαιότερου τύπου';
$string['listallroles'] = 'Εμφάνιση όλων των ρόλων';
$string['localroles'] = 'Τοπικά ανατεθειμένοι ρόλοι';
$string['mainadmin'] = 'Κύριος διαχειριστής';
$string['mainadminset'] = 'Ορισμός κύριου διαχειριστή';
$string['manageadmins'] = 'Επεξεργασία διαχειριστών ιστοτόπου';
$string['manager'] = 'Διευθυντής';
$string['managerdescription'] = 'Οι διευθυντές μπορούν να έχουν πρόσβαση σε μαθήματα και να τα τροποποιούν, αλλά συνήθως δεν συμμετέχουν σε αυτά.';
$string['manageroles'] = 'Διαχείριση ρόλων';
$string['maybeassignedin'] = 'Τύποι πλαισίου στους οποίους μπορεί να ανατεθεί ο ρόλος αυτός';
$string['morethan'] = 'Περισσότερο από {$a}';
$string['multipleroles'] = 'Πολλαπλοί ρόλου';
$string['my:configsyspages'] = 'Ρυθμίσεις υποδειγμάτων συστήματος για τις σελίδες Ταμπλό';
$string['my:manageblocks'] = 'Διαχείριση των μπλοκ σελίδας Ταμπλό';
$string['neededroles'] = 'Αδειοδοτημένοι ρόλοι';
$string['nocapabilitiesincontext'] = 'Δεν υπάρχουν διαθέσιμες δυνατότητες σε αυτό το πλαίσιο';
$string['noneinthisx'] = 'Κανένας σε αυτό το {$a}';
$string['noneinthisxmatching'] = 'Δεν υπάρχουν χρήστες παρόμοιοι με «{$a->search}» σε αυτό το {$a->contexttype}';
$string['norole'] = 'Κανένας ρόλος';
$string['noroleassignments'] = 'Ο χρήστης αυτός δεν έχει αναθέσεις ρόλων πουθενά στο Moodle.';
$string['noroles'] = 'Χωρίς ρόλους';
$string['notabletoassignroleshere'] = 'Η ανάθεση ρόλων σε αυτό το πλαίσιο δεν έχει ενεργοποιηθεί από κάποιον διαχειριστή.';
$string['notabletooverrideroleshere'] = 'Δεν μπορείτε να παρακάμψετε τις δυνατότητες ρόλων εδώ';
$string['notes:manage'] = 'Διαχείριση σημειώσεων';
$string['notes:view'] = 'Εμφάνιση σημειώσεων';
$string['notset'] = 'Μη καταχωρημένο';
$string['novisibleroles'] = 'Χωρίς ρόλους';
$string['overrideanotherrole'] = 'Παράκαμψη άλλου ρόλου';
$string['overridecontext'] = 'Παράκαμψη πλαισίου';
$string['overridepermissions'] = 'Παράκαμψη δυνατοτήτων';
$string['overridepermissions_help'] = 'Οι παρακάμψεις δικαιωμάτων επιτρέπουν την αποδοχή ή την αποτροπή επιλεγμένων δυνατοτήτων σε ένα συγκεκριμένο πλαίσιο.';
$string['overridepermissions_link'] = '';
$string['overridepermissionsforrole'] = 'Παράκαμψη δυνατοτήτων για το ρόλο «{$a->role}» στο {$a->context}';
$string['overridepermissionsin'] = 'Παράκαμψη δυνατοτήτων σε {$a}';
$string['overrideroles'] = 'Παράκαμψη ρόλων';
$string['overriderolesin'] = 'Παράκαμψη ρόλων σε {$a}';
$string['overrides'] = 'Παρακάμψεις';
$string['overridesbycontext'] = 'Παρακάμψεις (ανά πλαίσιο)';
$string['payment:manageaccounts'] = 'Διαχείριση λογαριασμών';
$string['payment:viewpayments'] = 'Εμφάνιση πληρωμών';
$string['permission'] = 'Δυνατότητα';
$string['permission_help'] = 'Δικαιώματα είναι ρυθμίσεις δυνατοτήτων. Υπάρχουν 4 επιλογές:

* Μη ορισμένο
* Επιτρέπεται - Το δικαίωμα παρέχεται για την δυνατότητα
* Αποτρέπεται - Το δικαίωμα αφαιρείται ακόμη κι αν επιτρεπόταν σε ανώτερο πλαίσιο
* Απαγορεύεται - Πλήρης άρνηση του δικαιώματος και δεν μπορεί να παρακαμφθεί σε οποιοδήποτε χαμηλότερο (ειδικότερο) πλαίσιο.';
$string['permissions'] = 'Δικαιώματα χρήσης';
$string['permissionsforuser'] = 'Δυνατότητες για το χρήστη {$a}';
$string['permissionsincontext'] = 'Δικαιώματα στο πλαίσιο «{$a}»';
$string['portfolio:export'] = 'Εξαγωγή σε χαρτοφυλάκια';
$string['potentialusers'] = '{$a} πιθανοί χρήστες';
$string['potusers'] = 'Πιθανοί χρήστες';
$string['potusersmatching'] = 'Πιθανοί χρήστες που ταιριάζουν με «{$a}»';
$string['prevent'] = 'Παρεμπόδιση';
$string['privacy:metadata:preference:showadvanced'] = 'Χειρισμός του πλήκτρου της εναλλαγής προχωρημένης λειτουργίας.';
$string['privacy:metadata:role_assignments'] = 'Αναθέσεις ρόλων';
$string['privacy:metadata:role_assignments:component'] = 'Το πρόσθετο που είναι υπεύθυνο για την αντιστοίχιση ρόλων· κενό όταν έχει εκχωρηθεί μη αυτόματα';
$string['privacy:metadata:role_assignments:itemid'] = 'Το αναγνωριστικό του στιγμιοτύπου εγγραφής/αυθεντικοποίησης που είναι υπεύθυνο για αυτήν την ανάθεση ρόλου';
$string['privacy:metadata:role_assignments:modifierid'] = 'Το αναγνωριστικό του χρήστη που δημιούργησε ή τροποποίησε την ανάθεση ρόλων';
$string['privacy:metadata:role_assignments:roleid'] = 'Το αναγνωριστικό του ρόλου';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'Αυτός ο πίνακας αποθηκεύει τους ρόλους που ανατέθηκαν σε κάθε πλαίσιο.';
$string['privacy:metadata:role_assignments:timemodified'] = 'Η ημερομηνία κατά την οποία η ανάθεση ρόλων δημιουργήθηκε ή τροποποιήθηκε.';
$string['privacy:metadata:role_assignments:userid'] = 'Το αναγνωριστικό του χρήστη';
$string['privacy:metadata:role_capabilities'] = 'Δυνατότητες ρόλων';
$string['privacy:metadata:role_capabilities:capability'] = 'Το όνομα της δυνατότητας.';
$string['privacy:metadata:role_capabilities:modifierid'] = 'Το αναγνωριστικό του χρήστη που δημιούργησε ή τροποποίησε τη δυνατότητα';
$string['privacy:metadata:role_capabilities:permission'] = 'Το δικαίωμα για μια δυνατότητα: κληρονομείται, επιτρέπεται, αποτρέπεται ή απαγορεύεται.';
$string['privacy:metadata:role_capabilities:roleid'] = 'Το αναγνωριστικό του ρόλου';
$string['privacy:metadata:role_capabilities:tableexplanation'] = 'Οι δυνατότητες και οι δυνατότητες παράκαμψης για ένα συγκεκριμένο ρόλο σε ένα συγκεκριμένο πλαίσιο';
$string['privacy:metadata:role_capabilities:timemodified'] = 'Η ημερομηνία δημιουργίας ή τροποποίησης της δυνατότητας.';
$string['privacy:metadata:role_cohortroles'] = 'Ρόλοι σε σύνολο χρηστών';
$string['prohibit'] = 'Απαγόρευση';
$string['prohibitedroles'] = 'Απαγορευμένοι';
$string['question:add'] = 'Προσθήκη νέων ερωτήσεων';
$string['question:commentall'] = 'Σχολιάστε όλες τις ερωτήσεις';
$string['question:commentmine'] = 'Σχολιάστε τις δικές σας ερωτήσεις';
$string['question:config'] = 'Ρύθμιση τύπων ερωτήσεων';
$string['question:editall'] = 'Τροποποίηση όλων των ερωτήσεων';
$string['question:editmine'] = 'Τροποποίηση των δικών σας ερωτήσεων';
$string['question:flag'] = 'Σημαιοδότηση ερωτήσεων κατά την προσπάθεια';
$string['question:managecategory'] = 'Επεξεργασία κατηγοριών ερωτήσεων';
$string['question:moveall'] = 'Μετακίνηση όλων των ερωτήσεων';
$string['question:movemine'] = 'Μετακίνηση των δικών σας ερωτήσεων';
$string['question:tagall'] = 'Θέστε ετικέτες σε όλες τις ερωτήσεις';
$string['question:tagmine'] = 'Θέστε ετικέτες στις δικές σας ερωτήσεις';
$string['question:useall'] = 'Χρήση όλων των ερωτήσεων';
$string['question:usemine'] = 'Χρήση των δικών σας ερωτήσεων';
$string['question:viewall'] = 'Εμφάνιση όλων των ερωτήσεων';
$string['question:viewmine'] = 'Εμφάνιση των δικών σας ερωτήσεων';
$string['rating:rate'] = 'Προσθήκη βαθμολογιών στα αντικείμενα';
$string['rating:view'] = 'Εμφάνιση της συνολικής βαθμολογίας που έλαβες';
$string['rating:viewall'] = 'Εμφάνιση όλων των πρώτων αξιολογήσεων που δόθηκαν ατομικά';
$string['rating:viewany'] = 'Εμφάνιση όλων των συνολικών αξιολογήσεων που έλαβε κάποιος';
$string['resetrole'] = 'Επαναρχικοποίηση';
$string['resettingrole'] = 'Επαναρχικοποίηση του ρόλου «{$a}»';
$string['restore:configure'] = 'Διαμόρφωση επιλογών επαναφοράς';
$string['restore:createuser'] = 'Δημιουργία χρηστών κατά την επαναφορά';
$string['restore:restoreactivity'] = 'Επαναφορά δραστηριοτήτων';
$string['restore:restorecourse'] = 'Επαναφορά μαθημάτων';
$string['restore:restoresection'] = 'Επαναφορά ενοτήτων';
$string['restore:restoretargetimport'] = 'Επαναφορά από αρχεία που προορίζονται για εισαγωγές';
$string['restore:rolldates'] = 'Επιτρέπεται να μετακυληθούν οι ημερομηνίες που έχουν χρησιμοποιηθεί στις δραστηριότητες κατά την επαναφορά';
$string['restore:uploadfile'] = 'Ανέβασμα αρχείων στις περιοχές των αντιγράφων ασφαλείας';
$string['restore:userinfo'] = 'Επαναφορά δεδομένων χρήστη';
$string['restore:viewautomatedfilearea'] = 'Επαναφορά μαθημάτων από αυτόματα αντίγραφα ασφαλείας';
$string['risks'] = 'Κίνδυνοι';
$string['role:assign'] = 'Ανάθεση ρόλων στους χρήστες';
$string['role:manage'] = 'Δημιουργία και διαχείριση ρόλων';
$string['role:override'] = 'Παράκαμψη δικαιωμάτων από άλλους';
$string['role:review'] = 'Εξέταση δικαιωμάτων για άλλους χρήστες';
$string['role:safeoverride'] = 'Παράκαμψη δικαιωμάτων από άλλους με ασφάλεια';
$string['role:switchroles'] = 'Αλλαγή σε άλλους ρόλους';
$string['roleallowheader'] = 'Επιτρέπονται στο ρόλο:';
$string['roleallowinfo'] = 'Επιλέξτε ένα ρόλο που θα προστεθεί στη λίστα επιτρεπόμενων ρόλων στο πλαίσιο «{$a->context}», δυνατότητα «{$a->cap}»:';
$string['roleassignments'] = 'Ανάθεση ρόλων';
$string['roledefinitions'] = 'Ορισμοί ρόλων';
$string['rolefullname'] = 'Όνομα';
$string['roleincontext'] = 'με ρόλο: «{$a->role}» στο πλαίσιο: «{$a->context}»';
$string['roleprohibitheader'] = 'Απαγόρευση ρόλου';
$string['roleprohibitinfo'] = 'Επιλέξτε ένα ρόλο που θα προστεθεί στη λίστα απαγορευμένων ρόλων στο πλαίσιο «{$a->context}», δυνατότητα «{$a->cap}»:';
$string['rolerepreset'] = 'Χρήση προρύθμισης ρόλου';
$string['roleresetdefaults'] = 'Προεπιλογές';
$string['roleresetrole'] = 'Χρήση ρόλου ή αρχετύπου';
$string['rolerisks'] = 'Κίνδυνοι ρόλου';
$string['roles'] = 'Ρόλοι';
$string['roles_help'] = 'Ρόλος είναι μια συλλογή από δικαιώματα ορισμένα για όλο τον ιστότοπο που μπορούν να ανατεθούν σε συγκεκριμένους χρήστες σε συγκεκριμένα πλαίσια.';
$string['roles_link'] = 'ρόλοι';
$string['roleselect'] = 'Επιλογή ρόλου';
$string['rolesforuser'] = 'Ρόλοι για τον χρήστη «{$a}»';
$string['roleshortname'] = 'Σύντομο όνομα';
$string['roleshortname_help'] = 'Το σύντομο όνομα ρόλου είναι ένα αναγνωριστικό ρόλου χαμηλού επιπέδου στο οποίο επιτρέπονται μόνο αλφαριθμητικοί χαρακτήρες ASCII. Μην αλλάζετε τα σύντομα ονόματα τυπικών ρόλων.';
$string['roletoassign'] = 'Ρόλος προς καταχώρηση';
$string['roletooverride'] = 'Ρόλος προς παράκαμψη';
$string['safeoverridenotice'] = 'Σημείωση: Οι δυνατότητες με υψηλότερους πιθανούς κινδύνους είναι κλειδωμένες γιατί μπορείτε να παρακάμψετε μόνο ασφαλείς δυνατότητες.';
$string['search:query'] = 'Εκτελέστε αναζητήσεις σε επίπεδο ιστοτόπου';
$string['selectanotheruser'] = 'Επιλέξτε έναν άλλο χρήστη';
$string['selectauser'] = 'Επιλέξτε ένα χρήστη';
$string['selectrole'] = 'Επιλογή ρόλου';
$string['showallroles'] = 'Εμφάνιση όλων των ρόλων';
$string['showthisuserspermissions'] = 'Εμφάνιση των δικαιωμάτων του χρήστη';
$string['site:accessallgroups'] = 'Πρόσβαση σε όλες τις ομάδες';
$string['site:approvecourse'] = 'Έγκριση δημιουργίας μαθήματος';
$string['site:backup'] = 'Αντίγραφα ασφαλείας μαθημάτων';
$string['site:config'] = 'Αλλαγή των ρυθμίσεων του Moodle';
$string['site:configview'] = 'Εμφάνιση του δέντρου διαχείρισης ιστοτόπου (αλλά όχι όλων των σελίδων του)';
$string['site:deleteanymessage'] = 'Διαγράψτε οποιαδήποτε μηνύματα στον ιστότοπο';
$string['site:deleteownmessage'] = 'Διαγραφή μηνυμάτων που αποστέλλονται από και προς τον χρήστη';
$string['site:doanything'] = 'Επιτρέπεται να κάνει τα πάντα';
$string['site:doclinks'] = 'Εμφάνιση συνδέσμων για έγγραφα εκτός σελίδων';
$string['site:forcelanguage'] = 'Να παρακαμφθεί η γλώσσα του μαθήματος';
$string['site:import'] = 'Εισαγωγή άλλων μαθημάτων σε ένα μάθημα';
$string['site:maintenanceaccess'] = 'Πρόσβαση στον ιστότοπο κατά την διάρκεια της λειτουργίας συντήρησης';
$string['site:manageallmessaging'] = 'Προσθήκη, αφαίρεση, μπλοκάρισμα και ξεμπλοκάρισμα επαφών για οποιονδήποτε χρήστη';
$string['site:manageblocks'] = 'Διαχείριση των μπλοκ σε μια σελίδα';
$string['site:managecontextlocks'] = 'Διαχειριστείτε το πάγωμα πλαισίων';
$string['site:messageanyuser'] = 'Παρακάμψτε τις προτιμήσεις απορρήτου/ιδιωτικότητας χρήστη για την αποστολή μηνυμάτων σε οποιονδήποτε χρήστη';
$string['site:mnetloginfromremote'] = 'Σύνδεση από απομακρυσμένη εφαρμογή μέσω MNet';
$string['site:mnetlogintoremote'] = 'Σύνδεση σε απομακρυσμένη εγκατάσταση εφαρμογής (Moodle) μέσω MNet';
$string['site:readallmessages'] = 'Ανάγνωση όλων των μηνυμάτων';
$string['site:restore'] = 'Επαναφορά μαθημάτων';
$string['site:senderrormessage'] = 'Αποστολή μηνύματος στο χρήστη υποστήριξης από τη σελίδα σφάλματος';
$string['site:sendmessage'] = 'Αποστολή μηνυμάτων σε χρήστες';
$string['site:trustcontent'] = 'Εμπιστοσύνη σε υποβαλλόμενο περιεχόμενο';
$string['site:uploadusers'] = 'Δημιουργία χρηστών από αρχείο';
$string['site:viewanonymousevents'] = 'Δείτε ανώνυμα γεγονότα στις αναφορές';
$string['site:viewfullnames'] = 'Εμφάνιση του ονοματεπώνυμου των χρηστών';
$string['site:viewparticipants'] = 'Εμφάνιση συμμετεχόντων';
$string['site:viewreports'] = 'Εμφάνιση αναφορών';
$string['site:viewuseridentity'] = 'Δείτε το πλήρες αναγνωριστικό του χρήστη στις λίστες';
$string['siteadministrators'] = 'Διαχειριστές ιστοτόπου';
$string['tag:edit'] = 'Τροποποίηση υπαρχουσών ετικετών';
$string['tag:editblocks'] = 'Τροποποίηση μπλοκ στις σελίδες ετικετών';
$string['tag:flag'] = 'Σημαιοδότηση ετικετών ως ανάρμοστων';
$string['tag:manage'] = 'Διαχείριση όλων των ετικετών';
$string['thisnewrole'] = 'Αυτός ο νέος ρόλος';
$string['thisusersroles'] = 'Ρόλοι που έχουν ανατεθεί στο χρήστη';
$string['unassignarole'] = 'Αφαίρεση του ρόλου «{$a}»';
$string['unassignconfirm'] = 'Θέλετε πραγματικά να αφαιρέσετε τον ρόλο «{$a->role}» από τον χρήστη «{$a->user}»;';
$string['unassignerror'] = 'Σφάλμα κατά την αφαίρεση του ρόλου «{$a->role}» από τον χρήστη «{$a->user}».';
$string['user:changeownpassword'] = 'Αλλαγή του δικού σας κωδικού πρόσβασης';
$string['user:create'] = 'Δημιουργία λογαριασμών χρηστών';
$string['user:delete'] = 'Διαγραφή λογαριασμών χρηστών';
$string['user:editmessageprofile'] = 'Τροποποίηση προφίλ μηνυμάτων άλλων χρηστών';
$string['user:editownmessageprofile'] = 'Τροποποίηση του δικού σας προφίλ μηνυμάτων';
$string['user:editownprofile'] = 'Τροποποίηση του δικού σας προφίλ χρήστη';
$string['user:editprofile'] = 'Τροποποίηση προφίλ χρήστη άλλων χρηστών';
$string['user:ignoreuserquota'] = 'Αγνοήστε το όριο ποσοστώσεως χρήστη';
$string['user:loginas'] = 'Σύνδεση σαν άλλος χρήστης';
$string['user:manageblocks'] = 'Διαχείριση μπλοκ στο προφίλ χρήστη των άλλων χρηστών';
$string['user:manageownblocks'] = 'Διαχείριση των μπλοκ στο δικό σας δημόσιο προφίλ χρήστη';
$string['user:manageownfiles'] = 'Διαχείριση αρχείων στις δικές σας ιδιωτικές περιοχές αρχείων';
$string['user:managesyspages'] = 'Διαμόρφωση προεπιλεγμένης διάταξης σελίδας για δημόσια προφίλ χρηστών';
$string['user:readuserblogs'] = 'Εμφάνιση των ιστολογίων όλων των χρηστών';
$string['user:readuserposts'] = 'Εμφάνιση όλων των αναρτήσεων φόρουμ του χρήστη';
$string['user:update'] = 'Επεξεργασία των προφίλ των χρηστών';
$string['user:viewalldetails'] = 'Εμφάνιση όλων των πληροφοριών του χρήστη';
$string['user:viewdetails'] = 'Εμφάνιση των προφίλ των χρηστών';
$string['user:viewhiddendetails'] = 'Εμφάνιση των κρυφών πληροφοριών των χρηστών';
$string['user:viewlastip'] = 'Εμφάνιση της τελευταίας διεύθυνσης IP του χρήστη';
$string['user:viewuseractivitiesreport'] = 'Εμφάνιση αναφορών δραστηριότητας χρήστη';
$string['user:viewusergrades'] = 'Εμφάνιση βαθμών χρήστη';
$string['usersfrom'] = 'Χρήστες του πλαισίου {$a}';
$string['usersfrommatching'] = 'Χρήστες του πλαισίου «{$a->contextname}» που ταιριάζουν με «{$a->search}»';
$string['usersinthisx'] = 'Χρήστες σε αυτό το {$a}';
$string['usersinthisxmatching'] = 'Χρήστες σε αυτό το «{$a->contexttype}» που ταιριάζουν στο «{$a->search}»';
$string['userswithrole'] = 'Χρήστες με οποιοδήποτε ρόλο';
$string['userswiththisrole'] = 'Χρήστες με αυτό το ρόλο';
$string['useshowadvancedtochange'] = 'Χρησιμοποιήστε το «Εμφάνιση προχωρημένων» για αλλαγές';
$string['viewingdefinitionofrolex'] = 'Εμφάνιση του ορισμού του ρόλου «{$a}»';
$string['viewrole'] = 'Εμφάνιση των λεπτομερειών του ρόλου';
$string['webservice:createmobiletoken'] = 'Δημιουργία ενός κουπονιού υπηρεσιών ιστού για πρόσβαση κινητών.';
$string['webservice:createtoken'] = 'Δημιουργία ενός κουπονιού υπηρεσίας ιστού';
$string['webservice:managealltokens'] = 'Διαχείριση κουπονιών όλων των χρηστών';
$string['whydoesuserhavecap'] = 'Γιατί ο «{$a->fullname}» έχει τη δυνατότητα «{$a->capability}» στο πλαίσιο «{$a->context}»;';
$string['whydoesusernothavecap'] = 'Γιατί ο «{$a->fullname}» δεν έχει τη δυνατότητα «{$a->capability}» στο πλαίσιο «{$a->context}»;';
$string['xroleassignments'] = 'Αναθέσεις ρόλων του «{$a}»';
$string['xuserswiththerole'] = 'Χρήστες με τον ρόλο «{$a->role}»';
