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
 * Strings for component 'lti', language 'de', branch 'MOODLE_28_STABLE'
 *
 * @package   lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Akzeptieren';
$string['accepted'] = 'Akzeptiert';
$string['accept_grades'] = 'Bewertungen aus dem Tool akzeptieren';
$string['accept_grades_admin'] = 'Bewertungen aus dem Tool akzeptieren';
$string['accept_grades_admin_help'] = 'Legen Sie fest, ob der Tool Provider Bewertungen der Instanzen des Tools hinzufügen, aktualisieren, lesen und löschen darf. Enige tool Provider ermöglichen, dass Bewertungen aus den Aktivitäten im Tool an Moodle berichtet werden. Dadurch erscheint das Tool noch besser integriert.';
$string['accept_grades_help'] = 'Diese Option legt fest, ob der Tool-Provider Bewertungen hinzufügen, aktualisieren, lesen und löschen darf, die mit der Tool-Instanz zusammenhängen. Manche Tool-Provider ermöglichen die Übernahme von Bewertungen aus den Tool-Aktivitäten und schaffen so eine bessere Integration in Moodle.

Diese Einstellung kann in der Tool-Konfiguration überschrieben werden.';
$string['action'] = 'Aktion';
$string['active'] = 'Aktiv';
$string['activity'] = 'Aktivität';
$string['addnewapp'] = 'Externes Programm aktivieren';
$string['addserver'] = 'Neuen vertrauensvollen Server hinzufügen';
$string['addtype'] = 'Externes Tool - Konfiguration hinzufügen';
$string['allow'] = 'Erlauben';
$string['allowinstructorcustom'] = 'Trainer/innen erlauben,  Parameter anzupassen';
$string['allowsetting'] = 'Dem Tool erlauben, Einstellungen (8 KB) in Moodle zu speichern';
$string['always'] = 'Immer';
$string['automatic'] = 'Automatisch, entsprechend der Start-URL';
$string['baseurl'] = 'Basis URL / Tool Registrierungsname';
$string['basiclti'] = 'Externes Tool';
$string['basicltiactivities'] = 'LTI Aktivitäten';
$string['basiclti_base_string'] = 'LTI OAuth base string';
$string['basiclti_endpoint'] = 'LTI launch endpoint';
$string['basicltifieldset'] = 'Angepasste Beispielwerte';
$string['basiclti_in_new_window'] = 'Ihre Aktivität wurde in einem neuen Fenster geöffnet';
$string['basicltiintro'] = 'Beschreibung der Aktivität';
$string['basicltiname'] = 'Name der Aktivität';
$string['basiclti_parameters'] = 'LTI Startparameter';
$string['basicltisettings'] = 'Basiseinstellungen für Externes Tool (Learning Tool Interoperability (LTI))';
$string['cancel'] = 'Abbrechen';
$string['cancelled'] = 'Abgebrochen';
$string['cannot_delete'] = 'Sie sollten diese Tool-Konfiguration nicht löschen';
$string['cannot_edit'] = 'Sie können diese Tool-Konfiguration nicht löschen';
$string['capabilities'] = 'Berechtigungen';
$string['capabilities_help'] = 'Wählen Sie die Berechtigungen, die Sie dem Tool-Anbieter übergeben möchten. Sie können mehrere Optionen auswählen.';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Weiter</a>';
$string['comment'] = 'Kommentar';
$string['configpassword'] = 'Standardmäßiges Kennwort für Remote Tool';
$string['configpreferheight'] = 'Höhe (Vorgabe)';
$string['configpreferwidget'] = 'Widget als Standard zum Start setzen';
$string['configpreferwidth'] = 'Breite (Vorgabe)';
$string['configresourceurl'] = 'Standardmäßige URL für Ressource';
$string['configtoolurl'] = 'Standardmäßige Remote Tool URL';
$string['configtypes'] = 'LTI Anwendungen aktivieren';
$string['configured'] = 'Konfiguriert';
$string['courseid'] = 'Kurs ID-Nummer';
$string['coursemisconf'] = 'Kurs ist falsch konfiguriert';
$string['course_tool_types'] = 'Kurs-Tooltypen';
$string['createdon'] = 'Erstellt am';
$string['curllibrarymissing'] = 'PHP Curl Bibliothek muss zur Nutzung von LTI installiert sein';
$string['custom'] = 'Angepasste Parameter';
$string['custom_config'] = 'Angepasste Tool-Konfiguration verwenden';
$string['custom_help'] = 'Angepasste Parameter sind Einstellungen, die vom Tool Provider genutzt werden. Beispiel: eine Parameter kann die Nutzung einer Ressource des Providers sein.
Jeder Parameter ist in einer eigenenZeile einzugeben. Die Eingabe erfolgt nach folgender Regel: "name=value"; z.B. "chapter=3".

Wenn keine direkten Hinweise des Tool Providers vorliegen, ist es am sichersten das Feld leer zu lassen.';
$string['custominstr'] = 'Angepasste Parameter';
$string['debuglaunch'] = 'Debug-Optionen';
$string['debuglaunchoff'] = 'Normaler Start';
$string['debuglaunchon'] = 'Debug-Start';
$string['default'] = 'Standardwert';
$string['default_launch_container'] = 'Standardmäßiger Startcontainer';
$string['default_launch_container_help'] = 'Der Startcontainer beeinflusst die Anzeige des Tools beim Start aus dem Kurs heraus. Einige Startcontainer generieren eine Oberfläche in der Darstellung des Tools, andere passen sich an die Oberfläche von Moodle an.

* **Standard** - Startcontainer wie in Tool-Konfiguration festgelegt verwenden.
* **Einbetten** - Das Tool wird in einem bestehenden Moodle-Fenster angezeigt, ählich wie andere Aktivitäten.
* **Eingebettet, ohne Blöcke** - Das Tool wird in einem bestehenden Moodle-Fenster ohne Blöcke, nur mit der Navigation im Kopf angezeigt.
* **Neues Fenster** - Das Tool öffnet in einem neuen Fenster und nutzt den gesamten Raum im Fenster aus. Abhängig vom Browser  wird ein neuer Tab angelegt oder ein neues Fenster geöffnet.';
$string['delegate'] = 'An Trainer/in zuweisen';
$string['delete'] = 'Löschen';
$string['delete_confirmation'] = 'Möchten Sie diese Konfiguration für externe Tools wirklich löschen?';
$string['deletetype'] = 'Konfiguration des externen Tools löschen.';
$string['display_description'] = 'Beschreibung bei Start anzeigen';
$string['display_description_help'] = 'Die oben eingegebene Beschreibung wird bei Aktivierung über dem Inhalt des Tools angezeigt. Die Beschreibung kann genutzt werden, um Teilnehmern zusätzliche Hinweise zugeben. Sie ist nicht unbedingt erforderlich. Wenn die Darstellung im neuen Fenster erfolgt, kann die Beschreibung nie angezeigt werden.';
$string['display_name'] = 'Aktivitätenname bei Start anzeigen';
$string['display_name_help'] = 'Der Aktivitätenname kann über dem Inhalt des Toolanbieters angezeigt werden. Es ist auch möglich, dass der Toolanbieter den Namen direkt anzeigt. Die Option kann damit eine doppelte Anzeige verhindern. Die Titelanzeige ist nicht verfügbar wenn das Tool in einem neuen Fenster geöffnet wird.';
$string['domain_mismatch'] = 'Start URL Domain passt nicht zum Eintrag in Tool-Konfiguration';
$string['donot'] = 'Nicht senden';
$string['donotaccept'] = 'Nicht akzeptieren';
$string['donotallow'] = 'Nicht erlauben';
$string['duplicateregurl'] = 'Diese Registrierungs-URL ist bereits benutzt';
$string['edittype'] = '\'Externes Tool\'-Konfiguration bearbeiten';
$string['embed'] = 'Eingebettet';
$string['embed_no_blocks'] = 'Eingebettet ohne Blöcke';
$string['enableemailnotification'] = 'E-Mail-Mitteilungen senden';
$string['enableemailnotification_help'] = 'Nach der Aktivierung erhalten Teilnehmende E-Mail-Benachrichtungen wenn ihre Leistungen bewertet wurden.';
$string['errormisconfig'] = 'Das Tool wurde falsch konfiguriert. Ihr Administrator/in kann Ihnen weiter helfen.';
$string['existing_window'] = 'Vorhandenes Fenster';
$string['extensions'] = 'LTI Extension Service';
$string['external_tool_type'] = 'Typ des externen Tools';
$string['external_tool_type_help'] = 'Die Hauptfunktion der Tool-Konfiguration ist die Vorbereitung einer sicheren Kommunikation mit dem Tool-Anbieter. Zusätzlich erlaubt sie Grundeinstellungen vorzunehmen und spezielle Services des Tool-Anbieters aufzurufen.

* **Automatisch mit StartURL** - Diese Einstellung ist meistens ausreichend. Moodle verwendet dann die passendste Konfiguration über die Start-URL. Es können Tools verwandt werden, die vom Administrator vorkonfiguriert oder im Kurs angelegt wurden.
Sofern eine Start-URL definiert ist, erzeugt Moodle ein Feedback, ob dieses erkannt wird oder nicht. Sollte dieser Zugang scheitern, können Konfigurationsinformationen manuell eingetragen werden.
* **Ein spezifischer Tool-Typ** - Die Auswahl erzwingt eine bestimmte Konfiguration zur Kommunikation mit dem Tool-Anbieter zu nutzen. Sollte die eingetragene Start-URL nicht zu dem Tool-Anbieter passen, erfolgt eine Warnung. Manchmal ist es nicht nötig eine Start-URL einzutragen falls ein spezifischer Tool-Typ verwandt wird.
* **Individuelle Konfiguration** - Die spezifische Konfiguration wird nur für die spezielle Instanz verwandt. Unter erweiterten Einstellungen können Anwenderschlüsssel und Kennwörter (shared secret) eingetragen werden. Beide werden durch den Tool Provider zur Verfügung gestellt. Falls das Tool diese Einstellungen nicht benötigt, können die Felder leer bleiben.

##Tool-Typ bearbeiten

Drei Icons erscheinen in der Liste
* **Hinzufügen** - Eine Tool-Konfiguration auf Kursebene erstellen. Alle Instanzen in diesem Kurs werden diese verwenden.
* **Bearbeiten** - Typ aus Dropdownmneu auswählen und die Details konfigurieren.
* **Löschen** - Ausgewählten Typ im Kurs löschen.';
$string['external_tool_types'] = 'Typen von externen Tools';
$string['failedtoconnect'] = 'Moodle konnte keine Kommunikation mit dem System \'{$a}\' aufbauen.';
$string['filter_basiclti_configlink'] = 'Konfigurieren Sie die bevorzugten Seiten und deren Kennwörter';
$string['filter_basiclti_password'] = 'Kennwort ist erforderlich';
$string['filterconfig'] = 'LTI Administration';
$string['filtername'] = 'Externes Tool';
$string['fixexistingconf'] = 'Verwenden Sie eine bestehende Konfiguration für die fehlerhafte Instanz';
$string['fixnew'] = 'Neue Konfiguration';
$string['fixnewconf'] = 'Definieren Sie eine neue Konfiguration für die fehlerhafte Instanz';
$string['fixold'] = 'Bestehende verwenden';
$string['forced_help'] = 'Diese Einstellung wurde systemweit oder für einen Kurs konfiguriert. Sie können diese nicht verändern.';
$string['force_ssl'] = 'SSL erzwingen';
$string['force_ssl_help'] = 'Mit dieser Funktion erzwingen Sie SSL für alle Verbindungen zu diesem Anbieter.
Dies gilt auch für alle Web Service Anfrage zu dem Anbieter.
Hierzu ist es erforderelich, dass sowohl das Moodle-System als auch der Anbieter SSL unterstützen.';
$string['generaltool'] = 'Allgemeines Tool';
$string['global_tool_types'] = 'Globale Tooltypen';
$string['grading'] = 'Bewertungsweiterleitung';
$string['icon_url'] = 'Icon URL';
$string['icon_url_help'] = 'Die Funktion Icon URl ermöglich es, das für die Aktivität verwandte Icon auszutauschen.  An Stelle des Standard LTI Icons kann ein Icon, das zur eingebundenen Aktivität passt, gewählt werden.';
$string['id'] = 'ID';
$string['invalidid'] = 'LTI ID war fehlerhaft';
$string['launch_in_moodle'] = 'Tool in Moodle starten';
$string['launchinpopup'] = 'Startcontainer';
$string['launch_in_popup'] = 'Tool in Pop-Up starten';
$string['launchinpopup_help'] = 'Der Startcontainer beeinflusst die Anzeige des Tools beim Start aus dem Kurs heraus. Einige Startcontainer generieren eine Oberfläche in der Darstellung des Tools, andere passen sich an die Oberfläche von Moodle an.

* **Standard** - Startcontainer wie in Tool-Konfiguration festgelegt verwenden.
* **Einbetten** - Das Tool wird in einem bestehenden Moodle-Fenster angezeigt, ählich wie andere Aktivitäten.
* **Eingebettet, ohne Blöcke** - Das Tool wird in einem bestehenden Moodle-Fenster ohne Blöcke, nur mit der Navigation im Kopf angezeigt.
* **Neues Fenster** - Das Tool öffnet in einem neuen Fenster und nutzt den gesamten Raum im Fenster aus. Abhängig vom Browser  wird ein neuer Tab angelegt oder ein neues Fenster geöffnet.';
$string['launchoptions'] = 'Startoptionen';
$string['launch_url'] = 'Start URL';
$string['launch_url_help'] = 'Die Start-URL bezeichnet die Webadresse des externen Tools. Sie kann zusätzliche Informationen entalten, welche Ressource geanu aufgerufen werden soll. Genauere Informationen gibt der Tool-Anbieter.
Falls ein spezieller Tool-Typ gewählt wurde, kann u.U. auf die Start URL verzichtet werden.';
$string['lti'] = 'Externes Tool';
$string['lti:addcoursetool'] = 'Kursspezifisch LTI Aktivitäten konfigurieren';
$string['lti:addinstance'] = 'Aktivität \'Externes Tool\' hinzufügen';
$string['lti_administration'] = 'LTI Administration';
$string['lti_errormsg'] = 'Das Tool gab folgende Fehlermeldung zurück: \'{$a}\'';
$string['lti:grade'] = 'Bewertungen vom ext. Tool anzeigen';
$string['lti_launch_error'] = 'Beim Start des externen Tools trat ein Fehler auf:';
$string['lti_launch_error_tool_request'] = '<p>Zum Versand einer Anfrage an den Administrator zur Vervollständigung der Tool-Konfiguration klicken Sie <a href="{$a->admin_request_url}" target="_top">hier</a>. </p>';
$string['lti_launch_error_unsigned_help'] = '<p>Der Fehler kann seine Ursache in einem fehlenden Anwenderschlüssel und Sicherheitseinstellungen für den Toolanbieter haben</p><p>Wenn Sie einen Anwenderschlüssel und Daten für die Sicherheitskonfiguration haben, geben Sie diese bei den Einstellungen für das externe Tool  ein. Beachten Sie auch die erweiterten Einstelloptionen.<br />Alternativ können Sie auch eine kursweite Konfiguration für den Tool-Anbieter anlegen. Klicken Sie dazu
<a href="{$a->course_tool_editor}">hier</a>. </p>';
$string['lti:manage'] = 'Als Trainer/in auf das ext. Tool zugreifen';
$string['lti:requesttooladd'] = 'Externes Tool zur systemweiten Nutzung anfragen';
$string['ltisettings'] = 'LTI Einstellungen';
$string['lti_tool_request_added'] = 'Die Konfigurationsanfrage wurde erfolgreich weitergeleitet. Kontakten Sie den Administrator nun, um den Prozess abzuschließen.';
$string['lti_tool_request_existing'] = 'Für die Domain wurde bereits eine Konfiguration beauftragt.';
$string['ltiunknownserviceapicall'] = 'Unbekannter API-Aufruf für externes Tool';
$string['lti:view'] = 'Aktivität Externes Tool aufrufen';
$string['main_admin'] = 'Allgemeine Hilfe';
$string['main_admin_help'] = 'Externe Tools ermöglichen es Moodle Nutzern nahtlos mit externen Lernanwendungen zu arbeiten und Daten auszutauschen. Durch ein spezielles Start-Protokoll erhält das externe Tool Zugriff auf bestimmte Daten des Nutzers. Dies können sein: Institutionsbezeichnung, Kurs-ID, Nutzer-ID, Nutzername oder E-Mail.

Die Tools sind in drei unterschiedliche Typen klassifiziert:
* ** Aktiv** - Dieser Tool Anbieter wurde durch einen Administrator geprüft und konfiguriert. Er kann in jedem Kurs genutzt werden. Wenn ein Anwenderschlüssel und ein Kennwort eingegegeben wird, wird eine geschützte Verbindung zwischen Moodle und dem Tool-Anbieter aufgebaut.
* **Abwarten** - Dieser Tool Anbieter wurde im Rahmen eines Paketimports im System hinterlegt. Er ist noch nicht von einem Administrator konfiguriert worden. Trainer können dieses Tool verwenden wenn sie selber über einen Anwenderschlüssel und ein Kennwort verfügen oder dies nicht erforderlich ist.
* **Gesperrt** - Diese Tool sind vom Administrator nicht zur systemweiten Nutzung freigegeben worden. Trainer können die Tools dennoch nutzen wenn sie über einen Anwenderschlüssel und ein Kennwort für dieses Tool verfügen oder dies nicht erforderlich ist.';
$string['manage_tool_proxies'] = 'Registrierung von externen Tools verwalten';
$string['manage_tools'] = 'Typen von externen Tools verwalten';
$string['miscellaneous'] = 'Verschiedenes';
$string['misconfiguredtools'] = 'Fehlerhaft konfigurierte Instanzen entdeckt';
$string['missingparameterserror'] = 'Diese Seite ist falsch konfiguriert: \'{$a}\'';
$string['module_class_type'] = 'Moodle Modultyp';
$string['modulename'] = 'Externes Tool';
$string['modulename_help'] = 'Mit der Schnittstelle \'Externe Tools\' geben Sie den Teilnehmer/innen direkten Zugriff auf Lernprogramme außerhalb von Moodle.

Die Teilnehmer/innen benötigen kein zusätzliches Login. Die Verbindung zwischen Moodle und dem externen Lernprogramm erfolgt über den LTI-Standard, den das andere Lernprogramm unterstützen muss. Sie erhalten vom Anbieter einen Link und Zugangsschlüssel.

Hinweis zum Datenschutz: Häufig werden Namen und E-Mail-Adressen Ihrer Teilnehmer/innen an den externen Anbieter übertragen. Fragen Sie den Anbieter.';
$string['modulenameplural'] = 'Externe Tools';
$string['modulenamepluralformatted'] = 'LTI Instanzen';
$string['name'] = 'Name';
$string['never'] = 'Nie';
$string['new_window'] = 'Neues Fenster';
$string['noattempts'] = 'Es gibt noch keine Versuche in diesr Tool-Instanz';
$string['no_lti_configured'] = 'Keine aktiven externen Tools konfiguriert';
$string['no_lti_pending'] = 'Keine anstehenden externen Tools';
$string['no_lti_rejected'] = 'Keine zurückgewiesenen externen Tools';
$string['noltis'] = 'Keine Instanzen mit externen Tools';
$string['noprofileservice'] = 'Der Profilservice wurde nicht gefunden.';
$string['noservers'] = 'Keine Server gefunden';
$string['no_tp_accepted'] = 'Die Registrierungen beim externen Tool wurden nicht akzeptiert.';
$string['no_tp_cancelled'] = 'Es gibt keine abgebrochenen Registrierungen für externe Tools.';
$string['no_tp_configured'] = 'Es sind keine externen Tools konfiguriert, die nicht registriert wurden.';
$string['no_tp_pending'] = 'Es gibt keine ausstehenden Registrierungen für externe Tools.';
$string['no_tp_rejected'] = 'Es gibt keine zurückgewiesenen Registrierungen für externe Tools.';
$string['notypes'] = 'Es sind zur Zeit keine LTI Tools in Moodle angelegt. Mit dem Installieren-Link können diese jetzt angelegt werden.';
$string['noviewusers'] = 'Keine Nutzer mit diesem Recht gefunden.';
$string['optionalsettings'] = 'Optionale Einstellungen';
$string['organization'] = 'Organisation Details';
$string['organizationdescr'] = 'Beschreibung der Organisation';
$string['organizationid'] = 'Organisations ID';
$string['organizationid_help'] = 'Eindeutiges Kennzeichen für die Moodle-Instanz. Dies kann die DNS Bezeichnung sein. Bleibt das Feld leer wird der Host Name des Moodle-Systems als Standardwert verwandt.';
$string['organizationurl'] = 'Organisations-URL';
$string['organizationurl_help'] = 'Basis URL der Moodle-Instanz. Bleibt das Feld leer wird der Wert aus der Moodle-Installation verwandt.';
$string['pagesize'] = 'Zahl der Leistungen pro Seite';
$string['parameter'] = 'Tool-Parameter';
$string['parameter_help'] = 'Tool-Parameter sind Einstellungen zur Datenübertragung über einen Proxy des Tool-Providers.';
$string['password'] = 'Öffentliches Kennwort';
$string['password_admin'] = 'Öffentliches Kennwort';
$string['password_admin_help'] = 'Das Kennwort wird für die Authentifizierung genutzt. Es wird mit dem Anwenderschlüssel vom Tool-Anbieter zur Verfügung gestellt.
Tools, die keine sichere Datenübertragung oder keine zusätzlichen Dienste (wie Bewertungen) anbieten, können auf Kennwörter verzichten.';
$string['password_help'] = 'Für vorkonfigurierte Tools ist es nicht erforderlich ein Kenwort einzugeben. Dies erfolgte schon während der Tool Konfiguration.

Das Feld ist jedoch auszufüllen, falls eine Verbindung zu einem Anbieter geschaffen werden soll, die noch nicht existiert.  Falls das Tool mehrfach genutzt werden soll ist es zu empfehlen, diese Einstellungen in der Kurs Konfiguration vorzunehmen, um sich mehrfache Arbeit zu ersparen.

Das Kennwort wird für eine Authentifizierung beim externen Tool verwandt. Es wird meist zusammen mit dem Anwenderschlüsel vergeben.

Tools die keine sichere Kommunikation mit Moodle erfordern, benötigen meist auch kein Kennwort.';
$string['pending'] = 'Wartend';
$string['pluginadministration'] = 'LTI-Administration';
$string['pluginname'] = 'Externes Tool';
$string['preferheight'] = 'Höhe (bevorzugt)';
$string['preferwidget'] = 'Widget Start (bevorzugt)';
$string['preferwidth'] = 'Breite (bevorzugt)';
$string['press_to_submit'] = 'Klicken zum Start der Aktivität';
$string['privacy'] = 'Datenschutz';
$string['quickgrade'] = 'Direktbewertung zulassen';
$string['quickgrade_help'] = 'Nach der Aktivierung können mehrere Tools auf einer Seite bewertet werden. Bewertungen und Kommentare eintragen und dann den \'Speichern aller Feedbacks\' Button drücken.';
$string['redirect'] = 'Sie werden in ein paar Sekunden weitergeleitet. andernfalls den Button anklicken.';
$string['register'] = 'Registrieren';
$string['registertype'] = 'Konfiguration eines neu registrierten externen Tools';
$string['register_warning'] = 'Die Registrierungsseite benötigt einige Zeit zum Öffnen. Sollte dies nicht erfolgreich sein, prüfen Sie die eingegebene URL in den Konfigurationseinstellungen,';
$string['registrationname'] = 'Name des Toolanbieters';
$string['registrationname_help'] = 'Geben Sie den Namen des Toolproviders an, dessen Angebot Sie registrieren.';
$string['registration_options'] = 'Registierungsoptionen';
$string['registrationurl'] = 'Registrierungs-URL';
$string['registrationurl_help'] = 'Die Registrierungs-URL wird Ihnen vom Tool-Anbieter zur Verfügung gestellt. An diese URL werden Registrierungsanfragen gesandt.';
$string['reject'] = 'Zurückweisen';
$string['rejected'] = 'Zurückgewiesen';
$string['resource'] = 'Ressource';
$string['resourcekey'] = 'Anwenderschlüssel';
$string['resourcekey_admin'] = 'Anwenderschlüssel';
$string['resourcekey_admin_help'] = 'Der Anwenderschlüssel ist eine Art Nutzername zur Authentifizierung gegenüber dem externen Tool. Es wird vom Tool-Anbieter vergeben,um das Moodle System eindeutig zu identifizieren

Der Anwenderschlüssel wird vom Tool-Anbieter bereitgestellt. Dies kann automatisch oder nach Kontaktaufnahme mit dem Anbieter erfolgen.

Tools, die keine sichere Kommunikation von Moodle erfordern oder keine zusätzlichen Dienste (z. B: Bewertungen zurück liefern) anbieten verzichten häufig auf Anwenderschlüssel.';
$string['resourcekey_help'] = 'Für vorkonfigurierte Tools ist es nicht notwendig einen Ressourcen Schlüssel einzugeben. Der Anwenderschlüssel wird bereits bei der Konfiguration eingegeben.

Das Feld sollte ausgefüllt werden falls noch keine Konfiguration für das Tool erstellt wurde. Falls das Angebot dieses Anbieters mehrfach genutzt werden soll, ist die Kurs Konfiguration sinnvoll, um dich mehrfache Arbeit zu ersparen.

Der Anwenderschlüssel ist eine Art Nutzername zur Authentifizierung gegenüber dem externen Tool. Es wird vom Tool-Anbieter vergeben,um das Moodle System eindeutig zu identifizieren

Der Anwenderschlüssel wird vom Tool-Anbieter bereitgestellt. Dies kann automatisch oder nach Kontaktaufnahme mit dem Anbieter erfolgen.

Tools, die keine sichere Kommunikation von Moodle erfordern oder keine zusätzlichen Dienste (z. B: Bewertungen zurück liefern) anbieten verzichten häufig auf Anwenderschlüssel.';
$string['resourceurl'] = 'Ressource-URL';
$string['return_to_course'] = 'Klicken Sie <a href="{$a->link}" target="_top">hier</a> um zum Kurs zurückzukommen.';
$string['saveallfeedback'] = 'Alle Feedbacks speichern';
$string['secure_icon_url'] = 'Sichere Icon-URL';
$string['secure_icon_url_help'] = 'Ähnlich wie Icon URL. Die Funktion wird genutzt bei verschlüsselter Datenübertragung, um zu verhindern, dass der Nutzer einen Warnhinwies erhält, falls ein Icon unverscchlüsselt aufgerufen wird.';
$string['secure_launch_url'] = 'Sichere Start-URL';
$string['secure_launch_url_help'] = 'Ähnlich wie Start URL. Wird verwendet, um höhere Sicherheistanforderungen unzusetzen. Moodle verwendet die siuchere Start URL anstelle der Standard URL falls das Moodle-System selber über verschlüsselte Zugänge (https) arbeitet.

Es kann auch die Standard Start URL mit einem https:// Wert versehen werden. Dann kann dieses Feld leer bleiben.';
$string['send'] = 'Senden';
$string['services'] = 'Services';
$string['services_help'] = 'Wählen Sie die Services, die an den Tool-Anbieter übertragen werden sollen. Es können mehrere ausgewählt werden.';
$string['setupoptions'] = 'Setup-Optionen';
$string['share_email'] = 'E-Mail des Anwenders an Tool übergeben';
$string['share_email_admin'] = 'E-Mail des Anwenders an Tool übergeben';
$string['share_email_admin_help'] = 'Legen Sie fest, ob die E-Mailadresse des Nutzers übergeben werden soll. Dies kan notwendig sein,um bestimmte Informationen im Tool anzuzeigen oder aufgrund von Aktivitäten im externen Tool E-Mails zu versenden.';
$string['share_email_help'] = 'Diese Option legt fest, ob die Nutzer-E-Mail-Adresse an den Tool-Provider übergeben wird, wenn die Tool-Instanz verwendet wird. Nutzer/innen können so bei einem wiederholten Zugriff wiedererkannt werden und personalisierte Informationen per E-Mails erhalten.

Diese Einstellung kann in der Tool-Konfiguration überschrieben werden.';
$string['share_name'] = 'Anwendername an Tool übergeben';
$string['share_name_admin'] = 'Anwendername an Tool überegeben';
$string['share_name_admin_help'] = 'Festlegen, ob der Name des Anwenders an den Anbieter des Tools übergeben werden soll. Dies kann erforderlich sein, um im Tool bestimmte  Informationen anzeigen zu können.';
$string['share_name_help'] = 'Diese Option legt fest, ob der vollständige Nutzername an den Tool-Provider übergeben wird, wenn die Tool-Instanz verwendet wird. Nutzer/innen können so bei einem wiederholten Zugriff wiedererkannt werden und personalisierte Informationen erhalten.

Diese Einstellung kann in der Tool-Konfiguration überschrieben wreden.';
$string['share_roster'] = 'Tool Zugriff auf Teilnehmerliste geben';
$string['share_roster_admin'] = 'Tool kann auf Teilnehmerliste zugreifen.';
$string['share_roster_admin_help'] = 'Festlegen, ob das Tool auf die Liste der Teilnehmer des Kurses zugreifen darf.';
$string['share_roster_help'] = 'Diese Option legt fest, ob das Tool auf die Teilnehmerliste des Kurses zugreifen darf.

Diese Einstellung kann in der Tool-Konfiguration überschrieben werden.';
$string['show_in_course'] = 'Tool-Typ bei der Erstellung von Instanzen im Kurs anzeigen';
$string['show_in_course_help'] = 'Falls ausgewählt erscheint diese Konfiguration als \'Externer Tool-Typ\' in der kursspezifischen Konfiguration und ist für Trainer sichtbar.
In den meisten Fällen ist diese Funktion nicht erforderlich. Trainer können in der Regel über die Start URL und die pasende Basis URL das Tool ansprechen.

Es wird empfohlen, diese Funktion zu verwenden, wenn die Tool-Konfiguration ein Single-Sign-On verwendet. In dem Fall würden die Nutzer nicht auf einer speziellen Seite landen, sondern eine Startseite vorfinden.';
$string['size'] = 'Größenparameter';
$string['submission'] = 'Leistungen';
$string['submissions'] = 'Einträge';
$string['submissionsfor'] = 'Einreichungen für {$a}';
$string['subplugintype_ltiresource'] = 'LTI Service Ressource';
$string['subplugintype_ltiresource_plural'] = 'LTI Service Ressourcen';
$string['subplugintype_ltiservice'] = 'LTI Service';
$string['subplugintype_ltiservice_plural'] = 'LTI Services';
$string['subplugintype_ltisource'] = 'LTI Quelle';
$string['subplugintype_ltisource_plural'] = 'LTI Quellen';
$string['toggle_debug_data'] = 'Debug-Modus umschalten';
$string['tool_config_not_found'] = 'Tool-Konfiguration für diese URL nicht gefunden';
$string['toolproxy'] = 'Registrierung von externen Tools';
$string['toolproxy_help'] = 'Administratoren können hier externe Tools registrieren, die den LTI 2.0 Standard bereitstellen. Für den Beginn ist nur eine URL des Anbieters des Tools erforderlich. Die Berechtigungen und Service-Zugänge werden dann beim Anlegen einer neuen Aktivität festgelegt.

Die registrierten Tools  werden in vier Kategorien angezeigt:

* **Konfiguriert** - Das Tool wurde angelegt, aber noch nicht fertig konfiguriert.
* **Wartend** - Der Registrierungsprozess wurde begonnen, jedoch noch nicht abgeschlossen. Verschieben Sie die Einstellungen zurück zu \'konfiguriert\' und speichern Sie sie erneut.
* **Akzeptiert** - Die Tool-Einstellungen wurden bestätigt. Die Ressourcen erscheinen unter Wartend.
* **Zurückgewiesen** - Die Registrierung wurde vom Anbieter abgewiesen. Prüfen Sie die Einstellungen und verschieben Sie sie zurück in die Kategorie \'Konfiguriert\', damit der Prozess erneut starten kann.';
$string['toolproxyregistration'] = 'Registrierung eines externen Tools';
$string['toolregistration'] = 'Registrierung eines externen Tools';
$string['tool_settings'] = 'Tool-Einstellungen';
$string['toolsetup'] = 'Konfiguration externes Tool';
$string['toolurl'] = 'Basis-URL des Tools';
$string['toolurl_help'] = 'Die Basis-URL des Tools wird verwendet um die Start URLs mit der korrekten Konfiguration zu verknüpfen. Die Verwendung von http(s) am Beginn ist optional.

Die Basis-URL wird auch verwandt wenn das Tool keine separate Start-URL zur Verfügung stellt.

Die Basis-URL von *tool.com* passt für folgendes:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=20
* www.tool.com/quizzes

Die Basis-URL von *www.tool.com/quizzes* hingegen passt für folgendes:

* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=20
* www.tool.com/quizzes


Die Basis-URL von *quiz.tool.com* hingegen passt für folgendes:

* quiz.tool.com/
* quiz.tool.com/take.php?id=20

Wenn es zwei unterschiedliche Tool-Konfigurationen für die gleiche Domain gibt, wird diespezifischere verwandt..';
$string['typename'] = 'Name des Tools';
$string['typename_help'] = 'Die Toolbezeichnung wird genutzt, um den Toolanbieter in Moodle zu identifizieren. Die Bezeichnung wird Trainer/innen gezeigt, wenn sie das Tool in ihren Kursen einbinden.';
$string['types'] = 'Typen';
$string['update'] = 'Update';
$string['using_tool_configuration'] = 'Tool-Konfiguration verwenden:';
$string['validurl'] = 'Eine gültige URL muss mit http(s):// beginnen';
$string['viewsubmissions'] = 'Leistungen und Bewertungsbildschirm anzeigen';
