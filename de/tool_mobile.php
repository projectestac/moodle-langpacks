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
 * Strings for component 'tool_mobile', language 'de', version '3.11'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb Debugging ist aktiviert. Das sollte in den Einstellungen für die externe Datenbankauthentifizierung oder für die externe Datenbankeinschreibung deaktiviert werden.';
$string['androidappid'] = 'Eindeutige ID der Android-App';
$string['androidappid_desc'] = 'Diese Einstellung sollte nur geändert werden, wenn Sie eine eigene Android-App verwenden.';
$string['apppolicy'] = 'Datenschutzinfo für mobile App';
$string['apppolicy_help'] = 'Die URL zur Datenschutzinfo für Nutzer/innen der mobilen App, die auf der Seite \'Info\' in der App aufgeführt ist. Wenn das Feld leer bleibt, wird stattdessen die URL der Datenschutzinfo für die Website verwendet.';
$string['apprequired'] = 'Diese Funktionalität ist nur verfügbar, wenn Moodle Mobile oder Moodle Desktop verwendet wird.';
$string['autologinkeygenerationlockout'] = 'Das Erzeugen von Auto-Login-Token ist blockiert. Sie müssen 6 Minuten zwischen den Anforderungen warten.';
$string['autologinnotallowedtoadmins'] = 'Das Auto-Login ist für Administrator/innen der Website nicht erlaubt.';
$string['cachedef_plugininfo'] = 'Hier wird die Liste von Plugins mit mobilen Add-ons gespeichert.';
$string['cachedef_subscriptiondata'] = 'Hier werden die Infos zum Moodle-App-Abonnement gespeichert.';
$string['clickheretolaunchtheapp'] = 'Tippen Sie hier, falls sich die mobile App nicht automatisch öffnet.';
$string['configmobilecssurl'] = 'Die CSS-Datei ermöglicht die optische Anpassung der mobilen App.';
$string['customlangstrings'] = 'Benutzerdefinierte Texte';
$string['customlangstrings_desc'] = 'Wörter und Texteinträge für die mobile App können angepasst werden. Schreiben Sie jeden angepassten Text in eine neue Zeile, u.z. in folgendem Format: Text-ID, angepasster Text und Sprachcode, jeweils getrennt durch Pipe-Zeichen |.

Beispiel:<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
Die vollständige Liste der Text-IDs und weitere Infos finden Sie in der Dokumentation.';
$string['custommenuitems'] = 'Benutzerdefinierte Menüpunkte';
$string['custommenuitems_desc'] = 'Im Hauptmenü der App können zusätzliche Punkte hinzugefügt werden. Geben Sie jeden benutzerdefinierten Menüpunkt in eine neue Zeile mit folgendem Format ein: Menütext, Link-URL, Link-Öffnungsmethode und Sprachcode (optional zum Anzeigen in der angegebenen Sprache), jeweils getrennt durch Pipe-Zeichen.

Methoden zum Öffnen von Links sind: App (zum Verknüpfen mit einer von der App unterstützten Aktivität), inappbrowser (zum Öffnen im Browser innerhalb der App), Browser (zum Öffnen im Standardbrowser außerhalb der App) und embedded (zum Anzeigen in einem iframe auf einer neuen Seite innerhalb der App).

Beispiele:
<pre>
App-Hilfe|https://someurl.xyz/help|inappbrowser
Meine Bewertungen|https://someurl.xyz/local/mygrades/index.php|embedded|en
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
You will only see this in English|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Dunkeler Modus';
$string['disabledfeatures'] = 'Deaktivierte Funktionen';
$string['disabledfeatures_desc'] = 'Wählen Sie hier die Funktionen aus, die für Ihre Website in der mobilen App deaktiviert sein sollen. Beachten Sie, dass einige Funktionen bereits an anderer Stelle deaktiviert sein könnten. Um die Änderungen sehen zu können, müssen Sie sich in der App von der Website abmelden und neu anmelden.';
$string['displayerrorswarning'] = 'Die Anzeige von Debug-Mitteilungen scheint aktiv zu sein. Diese Einstellung sollte deaktiviert werden. (debugdisplay)';
$string['downloadcourse'] = 'Kurs herunterladen';
$string['downloadcourses'] = 'Kurse herunterladen';
$string['enablesmartappbanners'] = 'Hinweisbanner für App aktivieren';
$string['enablesmartappbanners_desc'] = 'Diese Einstellung regelt die Anzeige eines Hinweisbanners für die mobile App, sobald die Website im Browser auf einem mobilen Endgerät aufgerufen wird.';
$string['filetypeexclusionlist'] = 'Ausschlussliste für Dateitypen';
$string['filetypeexclusionlist_desc'] = 'Wählen Sie alle Dateitypen aus, die nicht für ein mobiles Endgerät vorgesehen sind. Solche Dateien werden zwar weiter im Kurs aufgelistet, aber beim Versuch, sie zu öffnen, wird eine Warnung angezeigt. Nutzer/innen können die Warnung aber ignorieren und die Datei trotzdem öffnen.';
$string['filetypeexclusionlistplaceholder'] = 'Ausschlussliste für mobile Dateitypen';
$string['forcedurlscheme'] = 'Wenn Sie ausschließlich die offizielle Moodle-App zulassen möchten, tragen Sie hier den Standardwert ein. Falls Sie für Ihre Institution eine angepasste Branded-App verwenden, geben Sie hier deren URL-Schema an. Lassen Sie das Feld leer, wenn Sie jede App zulassen möchten.';
$string['forcedurlscheme_key'] = 'URL Schema';
$string['forcelogout'] = 'Abmeldung erzwingen';
$string['forcelogout_desc'] = 'Diese Einstellung legt fest, dass der Menüpunkt \'Website wechseln\' auf \'Abmelden\' geändert wird. Nutzer/innen werden dann vollständig aus der Website abgemeldet und müssen ihr Kennwort beim nächsten Zugriff neu eingeben.';
$string['getmoodleonyourmobile'] = 'Laden Sie die mobile App';
$string['h5poffline'] = 'H5P-Inhalte offline anzeigen';
$string['httpsrequired'] = 'HTTPS erforderlich';
$string['insecurealgorithmwarning'] = 'Möglicherweise verwendet das HTTPS-Zertifikat eine unsichere SHA-1 Signatur. Versuchen Sie, das Zertifikat zu aktualisieren.';
$string['invalidcertificatechainwarning'] = 'Die Zertifikatskette scheint ungültig zu sein.';
$string['invalidcertificateexpiredatewarning'] = 'Das HTTPS-Zertifikat für die Website scheint abgelaufen zu sein.';
$string['invalidcertificatestartdatewarning'] = 'Das HTTPS-Zertifikat für die Website scheint noch nicht gültig ist (Startdatum in der Zukunft).';
$string['invalidprivatetoken'] = 'Ungültiges privates Token. Das Token sollte nicht leer sein oder als GET Parameter übermittelt werden.';
$string['invaliduserquotawarning'] = 'Das Nutzerkontingent (userquota) hat einen ungültigen Wert. In den Sicherheitseinstellungen der Website sollte ein gültiger ganzzahliger Wert eingetragen werden.';
$string['iosappid'] = 'Eindeutige ID der iOS-App';
$string['iosappid_desc'] = 'Diese Einstellung sollte nur geändert werden, wenn Sie eine eigene iOS-App verwenden.';
$string['launchviasiteinbrowser'] = 'Über die Website im Standardbrowser starten';
$string['loginintheapp'] = 'In der App';
$string['logininthebrowser'] = 'Im Browser (für SSO)';
$string['loginintheembeddedbrowser'] = 'Im integrierten Browser (für SSO)';
$string['logoutconfirmation'] = 'Möchten Sie sich wirklich von der mobilen App auf Ihren mobilen Geräten abmelden? Wenn Sie sich abmelden, müssen Sie anschließend Ihren Anmeldenamen und Ihr Kennwort auf allen Geräten erneut eingeben, auf denen die App installiert ist.';
$string['mainmenu'] = 'Hauptmenü';
$string['managefiletypes'] = 'Dateitypen verwalten';
$string['minimumversion'] = 'Wenn eine minimal erforderliche Version für die Moodle-App (ab 3.8.0) vorgegeben ist, werden Nutzer/innen mit einer älteren Version zur Aktualisierung der App aufgefordert, bevor sie auf die Website zugreifen können.';
$string['minimumversion_key'] = 'Minimal erforderliche Version der App';
$string['mobileapp'] = 'Mobile App';
$string['mobileappconnected'] = 'Mobile App verbunden';
$string['mobileappearance'] = 'Mobile Darstellung';
$string['mobileappenabled'] = 'Für diese Website ist der mobile Zugriff aktiviert. Holen Sie sich die <a href="{$a}">mobile App</a>.';
$string['mobileappsubscription'] = 'Moodle-App-Abonnement';
$string['mobileauthentication'] = 'Mobile Authentifizierung';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobile Features';
$string['mobilenotificationsdisabledwarning'] = 'Die mobilen Push-Mitteilungen sind nicht aktiviert. Sie sollten unter "Systemnachrichten verwalten" aktiviert werden.';
$string['mobilesettings'] = 'Mobile Einstellungen';
$string['moodleappsportalfeatureswarning'] = 'Beachten Sie bitte, dass einige Funktionen abhängig von Ihrem Moodle-App-Abonnement eingeschränkt sein können. Weitere Infos finden Sie im <a href="{$a}" target="_blank">Moodle Apps-Portal</a>.';
$string['notifications'] = 'Systemnachrichten';
$string['notificationsactivedevices'] = 'Aktive Endgeräte';
$string['notificationscurrentactivedevices'] = 'Endgeräte, die in diesem Monat Systemnachrichten erhalten';
$string['notificationsignorednotifications'] = 'Systemnachrichten nicht gesendet';
$string['notificationslimitreached'] = 'Das monatliche Limit für aktive Endgeräte wurde überschritten. Für einige Nutzer/innen werden keine Systemnachrichten gesendet. Es wird empfohlen, dass Sie im Moodle-Apps-Portal <a href="{$a}" target="_blank"> Ihren App-Plan aktualisieren </a>.';
$string['notificationsmissingwarning'] = 'Die Statistik zu den Moodle-App-Systemnachrichten konnte nicht abgerufen werden. Wahrscheinlich liegt das daran, dass mobile Systemnachrichten auf der Website noch nicht aktiviert wurden. Sie können dies unter \'Website-Administration > Messaging > Mobile\' aktivieren.';
$string['notificationsnewdevices'] = 'Neue Endgeräte';
$string['notificationsseemore'] = 'Hinweis: Die Nutzungsstatistiken für die Moodle-App werden nicht in Echtzeit berechnet. Um auf detaillierter Statistiken einschließlich der Daten aus früheren Monaten zuzugreifen, melden Sie sich bitte beim <a href="{$a}" target="_blank">Moodle Apps Portal</a> an.';
$string['notificationssentnotifications'] = 'Systemnachrichten gesendet';
$string['oauth2identityproviders'] = 'OAuth 2 Identitätsprovider';
$string['offlineuse'] = 'Offline-Nutzung';
$string['openusingembeddedbrowser'] = 'Im integrierten Browser öffnen';
$string['pluginname'] = 'Moodle App Tools';
$string['pluginnotenabledorconfigured'] = 'Das Plugin ist nicht aktiviert oder nicht richtig konfiguriert.';
$string['privacy:metadata:core_userkey'] = 'Nutzerschlüssel zum Erstellen eines Auto-Login für die aktuelle Person';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Datum der letzten Auto-Login-Schlüsselanforderung. Zwischen jeder Anfrage sind 6 Minuten erforderlich.';
$string['qrcodedisabled'] = 'Zugriff über QR-Code deaktiviert';
$string['qrcodeformobileappaccess'] = 'QR-Code für den Zugriff mit der mobilen App';
$string['qrcodeformobileapploginabout'] = 'Scannen Sie den QR-Code mit Ihrer mobilen App und Sie werden automatisch angemeldet. Der QR-Code läuft in {$a} Minuten ab.';
$string['qrcodeformobileappurlabout'] = 'Scannen Sie den QR-Code mit Ihrer mobilen App, um die Website-URL einzugeben.';
$string['qrcodetype'] = 'QR-Code-Zugriff';
$string['qrcodetype_desc'] = 'Für Nutzer/innen der mobilen App kann ein QR-Code zum Scannen bereitgestellt werden. Der QR-Code kann verwendet werden, um die Website-URL einzugeben oder um die Person automatisch anzumelden, ohne einen Anmeldenamen oder ein Kennwort eingeben zu müssen.';
$string['qrcodetypelogin'] = 'QR-Code mit automatischer Anmeldung';
$string['qrcodetypeurl'] = 'QR-Code mit Website-URL';
$string['qrsiteadminsnotallowed'] = 'Aus Sicherheitsgründen ist eine Anmeldung über QR-Code nicht zulässig für Website-Administrator/innen oder wenn Sie als andere Person angemeldet sind.';
$string['readingthisemailgettheapp'] = 'Lesen Sie dies in einer E-Mail? <a href="{$a}">Laden Sie die mobile App und empfangen Sie alle Mitteilungen auf Ihrem mobilen Endgerät</a>.';
$string['remoteaddons'] = 'Remote Add-ons';
$string['responsivemainmenuitems'] = 'Responsive Menüelemente';
$string['scanqrcode'] = 'QR-Code scannen';
$string['selfsignedoruntrustedcertificatewarning'] = 'Das HTTPS-Zertifikat scheint selbst erstellt und nicht vertrauenswürdig zu sein. Die mobile App funktioniert nur mit vertrauenswürdigen Websites.';
$string['setuplink'] = 'Download für mobile App';
$string['setuplink_desc'] = 'Link zum Download der mobilen App im App Store und bei Google Play. Der Link zum Download wird in der Fußzeile jeder Seite und in der Übersicht aller Nutzerprofile angezeigt. Wenn das Feld leer ist, wird kein Link angezeigt.';
$string['smartappbanners'] = 'Hinweisbanner für App';
$string['subscription'] = 'Abonnement';
$string['subscriptioncreated'] = 'Startdatum';
$string['subscriptionerrorrequest'] = 'Beim Versuch, Infos zu Ihrem Moodle-App-Abonnement abzurufen, ist ein unerwarteter Fehler aufgetreten.';
$string['subscriptionexpiration'] = 'Verfallsdatum';
$string['subscriptionfeaturenotapplied'] = 'Diese Funktion ist auf Ihrer Site konfiguriert, jedoch nicht in Ihrem Moodle-App-Plan enthalten. Deswegen hat die Einstellung keine Auswirkung.';
$string['subscriptionfeatures'] = 'Abonnementfunktionen';
$string['subscriptionlimitsurpassed'] = 'Abonnementlimit überschritten';
$string['subscriptionregister'] = 'Weitere Infos zu den verschiedenen App-Plänen und zum Zugriff auf die Nutzungsstatistiken für die Moodle-Apps finden Sie im <a href="{$a}" target="_blank"> Moodle-Apps-Portal </a>.';
$string['subscriptionsseemore'] = 'Hinweis: Die angezeigten Infos werden nicht in Echtzeit aktualisiert. Möglicherweise müssen Sie sich abmelden und neu anmelden, um die Aktualisierungen anzuzeigen. Infos zum Erweitern Ihres App-Plans erhalten Sie im <a href="{$a}" target="_blank">Moodle Apps-Portal</a>.<br>';
$string['typeoflogin'] = 'Login';
$string['typeoflogin_desc'] = 'Wenn Ihre Website eine SSO-Authentifizierung verwendet, wählen Sie entweder \'Im Browser\' oder \'Im integrierten Browser\'. Der integrierte Browser sorgt für eine bessere Nutzerführung, funktioniert aber nicht mit allen SSO-Plugins.';
$string['viewqrcode'] = 'QR-Code anzeigen';
