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
 * Strings for component 'auth_ldap', language 'de', branch 'MOODLE_31_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Im Active Directory konnte kein neues Nutzerkonto angelegt werden. Stellen Sie sicher, dass die Voraussetzungen stimmen (LDAPS-Verbindung, Bind-User mit den notwendigen Rechten, usw.)';
$string['auth_ldap_attrcreators'] = 'Liste von Gruppen oder Kontexten, deren Mitglieder zur Erstellung von Merkmalen berechtigt sind. Mehrere Gruppen werden durch ein \';\' (Semikolon) getrennt. Der Eintrag hat üblicherweise die folgende Form: \'cn=teacher,ou=staff,o=myorg\'.';
$string['auth_ldap_attrcreators_key'] = 'Merkmal für Kursersteller/innen';
$string['auth_ldap_auth_user_create_key'] = 'Nutzer/innen extern anlegen';
$string['auth_ldap_bind_dn'] = 'Falls Sie für die Nutzerabfrage einen \'Bind-User\' verwenden müssen, tragen Sie hier dessen Anmeldenamen ein. Der Eintrag hat üblicherweise die Form: \'cn=ldapuser,ou=public,o=org\'.';
$string['auth_ldap_bind_dn_key'] = 'Anmeldename';
$string['auth_ldap_bind_pw'] = 'Kennwort des Bind-Users';
$string['auth_ldap_bind_pw_key'] = 'Kennwort';
$string['auth_ldap_bind_settings'] = 'Bind-Einstellungen';
$string['auth_ldap_changepasswordurl_key'] = 'URL zur Kennwortänderung';
$string['auth_ldap_contexts'] = 'Liste der Kontexte, in denen Nutzer/innen zu finden sind. Mehrere Kontexte werden durch ein \';\' (Semikolon) getrennt, wie z.B.: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Kontexte';
$string['auth_ldap_create_context'] = 'Wenn Sie die Nutzererstellung mit E-Mail-Bestätigung aktivieren, geben Sie den Kontext an, in dem die Nutzer/innen erstellt werden sollen. Dieser Kontext sollte sich von dem anderer Nutzer/innen unterscheiden, um Sicherheitsrisiken zu vermeiden. Sie brauchen diesen Kontext nicht zur Variablen ldap_contexts hinzuzufügen. Moodle sucht in diesem Kontext automatisch nach Nutzer/innen.
<br /><b>Achtung!</b> Sie müssen die Funktion user_create() in der Datei auth/ldap/auth.php anpassen, damit die Nutzererstellung funktioniert.';
$string['auth_ldap_create_context_key'] = 'Kontext für neue Nutzer/innen';
$string['auth_ldap_create_error'] = 'Fehler beim Anlegen des Nutzerkontos in LDAP';
$string['auth_ldap_creators'] = 'Liste von Gruppen oder Kontexten, deren Mitglieder Kurse verwalten und neu anlegen dürfen (Liste der Kursersteller/innen). Mehrere Gruppen werden durch ein \';\' (Semikolon) getrennt. Normalerweise hat der Eintrag diese Form: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Kursersteller/innen';
$string['auth_ldapdescription'] = '<p>Diese Anmeldemethode ermöglicht die Authentifizierung über einen externen LDAP-Server.

<p>Um ein neues LDAP-basiertes Nutzerkonto in Moodle anzulegen, muss vorher das LDAP-Nutzerkonto existieren. Beim ersten Login wird automatisch ein neues Nutzerkonto in der Moodle-Datenbank, wobei Anmeldename und Kennwort vorher von LDAP geprüft werden. Das Modul sorgt dafür, dass ausgewählte Nutzerdaten von LDAP in die Moodle-Datenbank übernommen werden können. Wenn das Kennwort weiterhin ausschließlich von LDAP verwaltet wird, ermöglicht dies einheitliche Anmeldedaten in unterschiedlichen Moodle-Instanzen und bei anderen Servern.

<p>Bei allen weiteren Logins werden weiterhin Anmeldename und Kennwort vom LDAP-Server überprüft.';
$string['auth_ldap_expiration_desc'] = 'Setzen Sie \'Nein\' (\'no\'), um das Gültigkeitsende für Kennwörter nicht zu prüfen. Wenn Sie \'LDAP\' wählen, wird diese Überprüfung direkt über LDAP abgewickelt.';
$string['auth_ldap_expiration_key'] = 'Gültigkeitsende';
$string['auth_ldap_expiration_warning_desc'] = 'Diese Zahl gibt an, wie viele Tage vor dem Gültigkeitsende von Kennwörtern eine Warnung versendet wird.';
$string['auth_ldap_expiration_warning_key'] = 'Warnung zum Gültigkeitsende';
$string['auth_ldap_expireattr_desc'] = 'Optional: Überschreibt die LDAP Attribute, die das Ablaufdatum für Kennwörter enthält.';
$string['auth_ldap_expireattr_key'] = 'Merkmal für Gültigkeitsende';
$string['auth_ldapextrafields'] = 'Die folgenden Felder sind optional. Im Nutzerprofil können automatisch einige Moodle-Felder mit ausgewählten Nutzerdaten aus <b>LDAP-Feldern</b> vorbelegt werden. <p>Wenn Sie die nachfolgenden Einträge leer lassen, wird nichts von LDAP übertragen und die Moodle-Voreinstellungen werden verwendet. In diesem Fall muss das Nutzerprofil beim ersten Login selbst fertig ausgefüllt werden. <p>Zusätzlich wird eingestellt, welche Felder im Nutzerprofil bearbeitbar sein sollen.';
$string['auth_ldap_graceattr_desc'] = 'Optional: Merkmal für GraceLogin ändern';
$string['auth_ldap_gracelogin_key'] = 'Merkmal für GraceLogin';
$string['auth_ldap_gracelogins_desc'] = 'LDAP-GraceLogin aktivieren. Wenn das Gültigkeitsende von Kennwörtern erreicht ist, können sich die Nutzer/innen noch solange weiter einloggen, bis der GraceLogin-Zähler den Wert 0 hat. Nach dem Aktivieren der Einstellung wird eine GraceLogin-Mitteilung angezeigt, sobald die Gültigkeitsende erreicht ist.';
$string['auth_ldap_gracelogins_key'] = 'GraceLogins';
$string['auth_ldap_groupecreators'] = 'Liste von Gruppen oder Kontexten, deren Mitglieder berechtigt sind Gruppen zu erstellen. Mehrere Gruppen werden durch ein \';\' (Semikolon) getrennt, z.B. \'cn=teachers,ou=staff,o=myorg\'.';
$string['auth_ldap_groupecreators_key'] = 'Gruppenersteller';
$string['auth_ldap_host_url'] = 'Geben Sie einen LDAP-Server in URL-Form an, z.B. \'ldap://ldap.meinserver.de/\' oder \'ldaps://ldap. meinserver.de/\'. Mehrere LDAP-Server trennen Sie bitte mit \';\' (Semikolon), z.B. als LDAP-Failover.';
$string['auth_ldap_host_url_key'] = 'Host URL';
$string['auth_ldap_ldap_encoding'] = 'Die Codierung des LDAP-Servers sollte standardmäßig utf-8 sein, aber das Microsoft ActiveDirectory v2 verwendet andere Codierungen, z.B. cp1252 oder cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP-Codierung';
$string['auth_ldap_login_settings'] = 'Login-Einstellungen';
$string['auth_ldap_memberattribute'] = 'Optional: Mitgliedsmerkmal ändern, mit dem Nutzer/innen zu einer Gruppe gehören. Normalerweise \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Optional: Gebrauch von Mitgliedsmerkmalen ändern, entweder 0 oder 1';
$string['auth_ldap_memberattribute_isdn_key'] = 'Mitgliedsmerkmal nutzt dn';
$string['auth_ldap_memberattribute_key'] = 'Mitgliedsmerkmal';
$string['auth_ldap_noconnect'] = 'Das LDAP-Modul kann keine Serververbindung herstellen: {$a}';
$string['auth_ldap_noconnect_all'] = 'Das LDAP-Modul kann keine Serververbindung herstellen: {$a}';
$string['auth_ldap_noextension'] = 'Die PHP-Extension LDAP ist nicht verfügbar. Um die LDAP-Authentifizierung nutzen zu können, muss die Extension LDAP installiert und aktiviert sein.';
$string['auth_ldap_no_mbstring'] = 'Die PHP-Extension mbstring ist erforderlich, um Nutzer/innen in LDAP anzulegen.';
$string['auth_ldapnotinstalled'] = 'Die LDAP-Authentifizierung kann nicht genutzt werden, weil die PHP-Extension LDAP nicht installiert ist.';
$string['auth_ldap_objectclass'] = 'Optional: Überschreibt die ObjectClass zur Nutzersuche in LDAP (ldap_user_type). Die Voreinstellung muss normalerweise nicht geändert werden.';
$string['auth_ldap_objectclass_key'] = 'ObjectClass';
$string['auth_ldap_opt_deref'] = 'Legt fest wie Aliasbezeichnungen bei der Suche behandelt werden. Wählen Sie einen der folgenden Werte: \'Nein\' (ldap_deref_never) oder \'Ja\' (ldap_deref_always)';
$string['auth_ldap_opt_deref_key'] = 'Aliase berücksichtigen';
$string['auth_ldap_passtype'] = 'Geben Sie das Format für neue Kennwörter auf dem LDAP-Server an.';
$string['auth_ldap_passtype_key'] = 'Kennwortformat';
$string['auth_ldap_passwdexpire_settings'] = 'Gültigkeitsablauf von Kennwörtern';
$string['auth_ldap_preventpassindb'] = 'Wählen Sie \'ja\', um Kennwörter <b>nicht</b> in die Moodle-Datenbank zu übernehmen';
$string['auth_ldap_preventpassindb_key'] = 'Kennwörter nicht cachen';
$string['auth_ldap_search_sub'] = 'Nutzersuche auch in Subkontexten durchführen';
$string['auth_ldap_search_sub_key'] = 'Subkontexte';
$string['auth_ldap_server_settings'] = 'LDAP-Server-Einstellungen';
$string['auth_ldap_suspended_attribute'] = 'Optional: Falls verfügbar wird dieses Merkmal verwendet, um das erstellte lokale Nutzerkonto zu aktivieren oder auszublenden.';
$string['auth_ldap_suspended_attribute_key'] = 'Ausblendemerkmal';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() unterstützt den gewählten Nutzertyp nicht: \'{$a}\'';
$string['auth_ldap_update_userinfo'] = 'Nutzerdaten (Vorname, Name, Adresse...) von LDAP nach Moodle übertragen. Ändern Sie die Einstellungen zur Datenzuordnung entsprechend Ihren Anforderungen.';
$string['auth_ldap_user_attribute'] = 'Optional: Merkmal zur Nutzerbenennung und -suche ändern. Normalerweise \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Nutzermerkmal';
$string['auth_ldap_user_exists'] = 'LDAP-Anmeldename existiert bereits!';
$string['auth_ldap_user_settings'] = 'Nutzersuche (user lookup)';
$string['auth_ldap_user_type'] = 'Wählen Sie, wie die Nutzerdaten in LDAP hinterlegt sind. Diese Einstellungen legen auch fest, wie das Gültigkeitsende für Kennwörter, die GraceLogins und das Anlegen neuer Nutzer in LDAP funktionieren.';
$string['auth_ldap_user_type_key'] = 'Nutzertyp';
$string['auth_ldap_usertypeundefined'] = 'config.user_type ist nicht definiert oder Funktion ldap_expirationtime2unix unterstützt den ausgewählten Typ nicht!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type ist nicht definiert oder Funktion ldap_unixi2expirationtime unterstützt den ausgewählten Typ nicht!';
$string['auth_ldap_version'] = 'Tragen Sie verfügbare LDAP-Version auf Ihrem Server ein.';
$string['auth_ldap_version_key'] = 'Version';
$string['auth_ntlmsso'] = 'NTLM-SSO';
$string['auth_ntlmsso_enabled'] = 'Aktivieren Sie diese Einstellung, um die einmalige Anmeldung (Single Sign On) mit der NTML-Domain zu versuchen. Anmerkung: Zusätzlich sind Einstellungen für den Webserver notwendig. Siehe <a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Aktivieren';
$string['auth_ntlmsso_ie_fastpath'] = 'Wenn diese Option aktiviert ist, wird der \'NTLM SSO fast path\' zugelassen. Das funktioniert nur mit dem Internet Explorer.';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'NTLM mit allen Browsern versuchen';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE fast path?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Ja, andere NTLM Browser versuchen';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Ja, alle anderen Browser benutzen das normale Login';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Der Nutzername konnte aus dem Header des REMOTE_USER nicht ausgelesen werden. Ist das Format richtig konfiguriert?';
$string['auth_ntlmsso_missing_username'] = 'Sie müssen zumindest den %username% im Format des entfernten Nutzernamen festlegen.';
$string['auth_ntlmsso_remoteuserformat'] = 'Wenn Sie \'NTLM\' als \'Authentifizierungstyp\' verwenden, können Sie hier das Format von externen Nutzernamen angeben. Bleibt der Eintrag leer wird das Standardformat verwendet. Verwenden Sie den optionalen <b>%domain%</b> Platzhalter, um festzulegen wo der Domainname erscheint und den erforderlichen Platzhalter <b>%username%</b> für den Nutzernamenort. <br /><br />Häufig genutzte Formate sind <tt>%domain%%username%</tt> (MS Windows default), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> und einfach <tt>%username%</tt> (wenn kein Domainteil verwendet wird).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Format externer Nutzernamen';
$string['auth_ntlmsso_subnet'] = 'Tragen Sie in dieses Feld eine Maske für ein Subnet ein, um NTLM-SSO auf IP-Adressen aus diesem Subnet zu beschränken. Mehrere Subnetze werden kommagetrennt angegeben. Format: xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = 'Subnet';
$string['auth_ntlmsso_type'] = 'Diese Methode ist beim Webserver eingestellt, um Nutzer/innen zu authentifizieren. Falls Sie sich nicht sicher sind, wählen Sie bitte NTLM.';
$string['auth_ntlmsso_type_key'] = 'Authentifizierungsart';
$string['connectingldap'] = 'Verbindung zum LDAP-Server aufbauen...';
$string['creatingtemptable'] = 'Temporäre Tabelle {$a} erstellen';
$string['didntfindexpiretime'] = 'Für die Funktion password_expire() wurde kein Gültigkeitsende gefunden';
$string['didntgetusersfromldap'] = 'Kein Nutzerkonto über LDAP einlesbar! Fehler?';
$string['gotcountrecordsfromldap'] = '{$a} Datensätze von LDAP eingelesen';
$string['morethanoneuser'] = 'Mehr als ein Nutzerkonto in LDAP gefunden! Es wird nur das erste Nutzerkonto verwendet.';
$string['needbcmath'] = 'Sie benötigen die PHP- Extension BCMath, um GraceLogins mit dem Active Directory nutzen zu können';
$string['needmbstring'] = 'Sie benötigen die PHP-Extension mbstring, um Kennwörter im Active Directory ändern zu können';
$string['nodnforusername'] = 'Fehler in der Funktion user_update_password(). Kein DN für: {$a->username}';
$string['noemail'] = 'Der Versuch Ihnen eine E-Mail zu senden ist gescheitert!';
$string['notcalledfromserver'] = 'Dies sollte nicht vom Webserver aufgerufen werden!';
$string['noupdatestobedone'] = 'Keine Aktualisierung nötig';
$string['nouserentriestoremove'] = 'Keine Nutzerkonten zum Entfernen gefunden';
$string['nouserentriestorevive'] = 'Keine Nutzerkonten zum Reaktivieren gefunden';
$string['nouserstobeadded'] = 'Keine Nutzerkonten zum Hinzufügen';
$string['ntlmsso_attempting'] = 'NTLM-SSO versuchen...';
$string['ntlmsso_failed'] = 'Die automatische Anmeldung ist fehlgeschlagen. Versuchen Sie das normale Login...';
$string['ntlmsso_isdisabled'] = 'NTLM-SSO ist deaktiviert.';
$string['ntlmsso_unknowntype'] = 'Unbekannter NTLM-SSO-Typ!';
$string['pagedresultsnotsupp'] = 'LDAP paged results werden nicht unterstützt. Entweder unterstützt Ihre PHP Version dies nicht oder Sie haben Moodle so konfiguriert, dass die LDAP Protokoll Version 2 verwandt wird.';
$string['pagesize'] = 'Stellen Sie sicher, dass dieser Wert kleiner ist als die Obergrenze Ihres LDAP-Servers für eine einzelne Datenbankabfrage.';
$string['pagesize_key'] = 'Einträge pro Seite';
$string['pluginname'] = 'LDAP-Server';
$string['pluginnotenabled'] = 'Plugin nicht aktiviert!';
$string['renamingnotallowed'] = 'Namensänderungen sind in LDAP nicht erlaubt';
$string['rootdseerror'] = 'Fehler bei der rootDSE-Abfrage für das Active Directory';
$string['start_tls'] = 'LDAP-Service mit TLS (über Port 389) verschlüsseln';
$string['start_tls_key'] = 'TLS benutzen';
$string['synctask'] = 'Synchronisierung von LDAP-Nutzerkonten';
$string['updatepasserror'] = 'Fehler in der Funktion user_update_password().
<br />Fehler-Code: {$a->errno}; Fehlertext: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Fehler in der Funktion user_update_password() beim Lesen der Gültigkeitsdauer des Kennwortes.
<br />Fehler-Code: {$a->errno}; Fehlertext: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Fehler in der Funktion user_update_password() beim Ändern der Gültigkeitsdauer bzw. des GraceLogins.
<br />Fehler-Code: {$a->errno}; Fehlertext: {$a->errstring}';
$string['updateremfail'] = 'Fehler beim Aktualisieren des LDAP-Datensatzes {$a->key}.
<br />Fehler-Code: {$a->errno}; Fehlertext: {$a->errstring}
<br/>Alter Moodle-Wert: \'{$a->ouvalue}\' - neuer Wert: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'Fehler beim Aktualisieren von LDAP mit mehrdeutigem Bereich {$a->key}.
<br />Alter Moodle-Wert: \'{$a->ouvalue}\' - neuer Wert: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'Nutzereintrag konnte bei der externen Aktualisierung nicht gefunden werden.
<br />Details: search base: \'{$a->userdn}\'; search filter: \'(objectClass=*)\'; search attributes: {$a->attribs}';
$string['useracctctrlerror'] = 'Fehler beim Lesen von userAccountControl für {$a}';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() unterstützt nicht den ausgewählten Nutzertyp: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() unterstützt nicht den ausgewählten Nutzertyp: {$a}';
$string['userentriestoadd'] = 'Nutzerkonten zum Hinzufügen: {$a}';
$string['userentriestoremove'] = 'Nutzerkonten zum Löschen: {$a}';
$string['userentriestorevive'] = 'Nutzerkonten zur Reaktivierung: {$a}';
$string['userentriestoupdate'] = 'Nutzerkonten zur Aktualisierung: {$a}';
$string['usernotfound'] = 'Nutzerkonto in LDAP nicht gefunden';
