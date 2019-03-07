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
 * Strings for component 'auth_mnet', language 'el', branch 'MOODLE_32_STABLE'
 *
 * @package   auth_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnet_auto_add_remote_users'] = 'Όταν οριστεί σε Ναι, μια εγγραφή τοπικού χρήστη δημιουργείται αυτόματα όταν ένας απομακρυσμένος χρήστης συνδέεται για πρώτη φορά.';
$string['auth_mnetdescription'] = 'Οι χρήστες αυθεντικοποιούνται σύμφωνα με τον ιστό εμπιστοσύνης που ορίζεται στις ρυθμίσεις του δικτύου Moodle.';
$string['auth_mnet_roamin'] = 'These host\'s users can roam in to your site';
$string['auth_mnet_roamout'] = 'Your users can roam out to these hosts';
$string['auth_mnet_rpc_negotiation_timeout'] = 'Το χρονικό όριο σε δευτερόλεπτα για αυθεντικοποίηση κατά τη μεταφορά XMLRPC.';
$string['auto_add_remote_users'] = 'Auto add remote users';
$string['pluginname'] = 'Αυθεντικοποίηση στο MNet (Moodle Network)';
$string['rpc_negotiation_timeout'] = 'RPC negotiation timeout';
$string['sso_idp_description'] = 'Έκδοση αυτής της υπηρεσίας για να επιτραπεί στους χρήστες σας να επισκέπτονται τον ιστότοπο {$a} χωρίς να χρειαστεί να ξανασυνδεθούν εκεί. <ul><li><em>Εξάρτηση</em>: Πρέπει επιπλέον να <strong>εγγραφείτε</strong> στην υπηρεσία SSO του Πάροχου Υπηρεσίας {$a}. </li></ul><br />
<br />Γίνετε συνδρομητής σε αυτή την υπηρεσία για να επιτρέψετε σε αυθεντικοποιημένους χρήστες του {$a} να έχουν πρόσβαση στον ιστότοπό σας χωρίς να χρειαστεί να ξανασυνδεθούν. <ul><li><em>Εξάρτηση</em>: Πρέπει επιπλέον να <strong>εκδώσετε</strong> την υπηρεσία SSO του Πάροχου Υπηρεσίας {$a}.</li></ul>
<br /><br />
(SSO=Single sign-on: μία και μόνον ενιαία αυθεντικοποίηση)';
$string['sso_idp_name'] = 'Πάροχος Ταυτότητας SSO
(SSO=Single sign-on: μία και μόνον ενιαία αυθεντικοποίηση)';
$string['sso_mnet_login_refused'] = 'Το όνομα χρήστη «{$a->user}» δεν επιτρέπεται να συνδεθεί από τον Η/Υ «{$a->host}».';
$string['sso_sp_description'] = 'Εκδώστε αυτή την υπηρεσία για να επιτρέψετε σε αυθεντικοποιημένους χρήστες του {$a} να έχουν πρόσβαση στον ιστότοπό σας χωρίς να χρειαστεί να ξανασυνδεθούν. <ul><li><em>Απαιτούμενα</em>: Πρέπει επιπλέον να <strong>εγγραφείτε</strong> στην υπηρεσία SSO του Παρόχου Ταυτότητας {$a}.</li></ul><br />
Γίνετε συνδρομητής σε αυτή την υπηρεσία για να επιτρέψετε στους χρήστες σας να επισκέπτονται τον ιστότοπο {$a} χωρίς να χρειαστεί να ξανασυνδεθούν όταν φτάσουν εκεί. <ul><li><em>Απαιτούμενα</em>: Πρέπει επιπλέον να <strong>εκδώσετε</strong> την υπηρεσία SSO του Πάροχου Ταυτότητας {$a}.</li></ul><br /><br />
(SSO=Single sign-on: μία και μόνον ενιαία αυθεντικοποίηση)';
$string['sso_sp_name'] = 'Πάροχος Υπηρεσίας SSO
(SSO=Single sign-on: μία και μόνον ενιαία αυθεντικοποίηση)';
