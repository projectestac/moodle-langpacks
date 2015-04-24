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
 * Strings for component 'ratingallocate', language 'de', branch 'MOODLE_28_STABLE'
 *
 * @package   ratingallocate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allocation_manual_explain_all'] = 'Ordnen Sie den Nutzer/innen eine Wahlmöglichkeit zu.';
$string['allocation_manual_explain_only_raters'] = 'Ordnen Sie den Nutzer/innen eine Wahlmöglichkeit zu. Es werden nur die Nutzer/innen angezeigt, welche mindestens eine Wahlmöglichkeit bewertet haben.';
$string['allocation_notification_message'] = 'Ihnen wurde in "{$a->ratingallocate}" die Wahlmöglichkeit "{$a->choice}" zugeordnet.';
$string['allocation_notification_message_subject'] = 'Nachricht über die abgeschlossene Verteilung von {$a}';
$string['at_least_one_rateable_choices_needed'] = 'Mindestens eine Wahlmöglichkeit muss aktiv sein.';
$string['choice_active'] = 'Wahlmöglichkeit aktiv';
$string['choice_active_help'] = 'Nutzer/innen können nur aktive Wahlmöglichkeiten bewerten. Inaktive Wahlmöglichkeiten werden nicht angezeigt.';
$string['choice_explanation'] = 'Beschreibung (optional)';
$string['choice_maxsize'] = 'Maximale Teilnehmerzahl';
$string['choicestatusheading'] = 'Status';
$string['choice_title'] = 'Titel';
$string['choice_title_help'] = 'Titel der Wahlmöglichkeit. *Achtung* Wahlmöglichkeiten werden aufsteigend nach Titel sortiert.';
$string['create_moodle_groups'] = 'Moodle-Gruppen erzeugen';
$string['deletechoice'] = 'Wahlmöglichkeit löschen';
$string['distribution_algorithm'] = 'Verteilungsalgorithmus';
$string['distribution_published'] = 'Die Ergebnisse der Verteilung wurden veröffentlicht.';
$string['distribution_saved'] = 'Verteilung gespeichert (in {$a}s).';
$string['distribution_table'] = 'Verteilungstabelle';
$string['download_problem_mps_format'] = 'Gleichungen exportieren (mps/txt)';
$string['download_votetest_allocation'] = 'Abstimmung und Verteilung (csv) exportieren';
$string['edit_choice'] = 'Wahlmöglichkeit \'{$a}\' bearbeiten';
$string['edit_rating'] = 'Bewertung abgeben';
$string['err_maximum'] = 'Der maximale Wert für dieses Feld ist {$a}.';
$string['err_minimum'] = 'Der minimale Wert für dieses Feld ist {$a}.';
$string['err_required'] = 'In dieses Feld muss ein Wert eingetragen werden.';
$string['export_options'] = 'Export Optionen';
$string['invalid_publishdate'] = 'Veröffentlichungsdatum ungültig. Datum muss nach der Bewertungsphase liegen.';
$string['log_allocation_published'] = 'Die Ergebnisse der Verteilung wurden veröffentlicht.';
$string['log_allocation_published_description'] = 'Nutzer/in mit der ID \'{$a->userid}\' hat die Verteilung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' veröffentlicht.';
$string['log_allocation_table_viewed'] = 'Verteilungstabelle angesehen';
$string['log_allocation_table_viewed_description'] = 'Nutzer/in mit der Id \'{$a->userid}\' hat die Verteilungstabelle für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' angesehen.';
$string['log_distribution_triggered'] = 'Verteilung gestartet';
$string['log_distribution_triggered_description'] = 'Nutzer/in mit der ID \'{$a->userid}\' hat die Verteilung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' gestartet. Der Algorithmus hat {$a->time_needed} Sekunden gebraucht.';
$string['log_manual_allocation_saved'] = 'Die manuelle Verteilung wurde gespeichert.';
$string['log_manual_allocation_saved_description'] = 'Nutzer/in mit der ID \'{$a->userid}\' hat eine manuelle Verteilung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' gespeichert.';
$string['log_ratingallocate_viewed'] = '\'Gerechte Verteilung\' angesehen';
$string['log_ratingallocate_viewed_description'] = 'Nutzer/in mit der ID \'{$a->userid}\' hat die \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' angesehen.';
$string['log_rating_saved'] = 'Bewertung des Nutzers gespeichert';
$string['log_rating_saved_description'] = 'Nutzer/in mit der ID \'{$a->userid}\' hat seine Bewertung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' gespeichert.';
$string['log_rating_viewed'] = 'Bewertung des Nutzers angesehen';
$string['log_rating_viewed_description'] = 'Nutzer/in mit der ID \'{$a->userid}\' hat seine Bewertung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' angesehen.';
$string['manual_allocation'] = 'Manuelle Verteilung';
$string['manual_allocation_filter_all'] = 'Alle Nutzer/innen anzeigen';
$string['manual_allocation_filter_only_raters'] = 'Nur Nutzer/innen mit Bewertungen anzeigen';
$string['manual_allocation_form'] = 'Formular für die manuelle Verteilung';
$string['manual_allocation_saved'] = 'Ihre manuelle Verteilung wurde gespeichert.';
$string['messageprovider:notifyalloc'] = 'Benachrichtigung für die Aktivität \'Gerechte Verteilung\'';
$string['modulename'] = 'Gerechte Verteilung';
$string['modulename_help'] = 'Die Aktivität \'Gerechte Verteilung\' stellt Nutzer/innen Wahlmöglichkeiten zur Verfügung, die diese mittels verschiedener Strategien während eines Wahlzeitraums bewerten. Nach Ablauf des Zeitraums können Sie die Nutzer/innen automatisch auf die Wahlmöglichkeiten fair verteilen lassen. Anschließend können Sie die Verteilung noch manuell bearbeiten.';
$string['modulenameplural'] = 'Gerechte Verteilungen';
$string['moodlegroups_created'] = 'Die der Verteilung entsprechenden Moodle-Gruppen wurden erzeugt.';
$string['newchoice'] = 'Neue Wahlmöglichkeit hinzufügen';
$string['newchoicetitle'] = 'Neue Wahlmöglichkeit {$a}';
$string['no_choice_to_rate'] = 'Es gibt keine Wahlmöglichkeit, die bewertet werden könnte.';
$string['no_rating_given'] = 'nicht bewertet';
$string['no_user_to_allocate'] = 'Es gibt keine Nutzer/innen, die Sie verteilen könnten.';
$string['pluginadministration'] = 'Administration für Gerechte Verteilung';
$string['pluginname'] = 'Gerechte Verteilung';
$string['publish_allocation'] = 'Verteilung veröffentlichen';
$string['publishdate'] = 'Veröffentlichungsdatum';
$string['publishdate_estimated'] = 'Geschätztes Veröffentlichungsdatum';
$string['rateable_choices'] = 'Zur Verfügung stehende Wahlmöglichkeiten';
$string['rated'] = 'bewertet mit {$a}';
$string['ratingallocate'] = 'Gerechte Verteilung';
$string['ratingallocate:addinstance'] = 'Neue Gerechte Verteilung hinzufügen';
$string['ratingallocate:export_ratings'] = 'Möglichkeit Nutzerpräferenzen zu exportieren.';
$string['ratingallocate:give_rating'] = 'Eigene Bewertung erstellen/bearbeiten';
$string['ratingallocatename'] = 'Name der Bewertung';
$string['ratingallocatename_help'] = 'Wählen Sie einen aussagekräftigen Namen.';
$string['ratingallocate:start_distribution'] = 'Verteilung starten';
$string['ratingallocate:view'] = 'Gerechte Verteilung ansehen';
$string['rating_begintime'] = 'Abstimmung startet am';
$string['rating_endtime'] = 'Abstimmung endet am';
$string['rating_is_over'] = 'Die Bewertungsphase ist vorbei.';
$string['rating_raw'] = '{$a}';
$string['ratings_saved'] = 'Ihre Bewertung wurde gespeichert.';
$string['ratings_table'] = 'Bewertungstabelle';
$string['results_not_yet_published'] = 'Die Ergebnisse wurden noch nicht veröffentlicht.';
$string['select_strategy'] = 'Bewertungsstrategie';
$string['select_strategy_help'] = 'Nach welcher Strategie sollen die Nutzer bewerten?

* **Ja-Nein** Nutzer/innen können für jede Wahlmöglichkeit mit ja oder nein abstimmen.
* **Ja-Vielleicht-Nein** Nutzer/innen können für jede Wahlmöglichkeit mit ja, vielleicht oder nein abstimmen.
* **Likert-Skala** Nutzer/innen können für jede Wahlmöglichkeit auf einer Skala mit positiven ganzen Zahlen abstimmen. Die Skala beginnt mit 0. Ihr Ende kann in den Einstellungen gesetzt werden. Eine hohe Zahl bedeutet eine hohe Präferenz.
* **Punkte verteilen** Nutzer/innen können für jede Wahlmöglichkeit Punkte vergeben. Die Gesamtzahl der zu vergebenden Punkte kann in den Einstellungen gesetzt werden. Je mehr Punkte eine Wahlmöglichkeit erhält, desto höher ist ihre Präferenz.
* **Reihenfolge** Nutzer/innen können ihre \'N\' besten Wahlmöglichkeiten angeben und ordnen. Wie viele Wahlmöglichkeiten angegeben werden müssen kann eingestellt werden.
* **Check-Ja**  Nutzer/innen können für jede Wahlmöglichkeit durch das Ankreuzen von Kästchen angeben, ob diese für sie akzeptabel ist.';
$string['show_table'] = 'Bewertungstabelle anzeigen';
$string['start_distribution'] = 'Verteilung starten';
$string['start_distribution_explanation'] = 'Der Algorithmus wird die Nutzer/innen, entsprechend ihrer Bewertungen, auf die Wahlmöglichkeiten möglichst fair verteilen.';
$string['strategy_lickert_max_no'] = 'Sie können höchstens {$a} Wahlmöglichkeiten mit 0/Ablehnung bewerten.';
$string['strategy_lickert_name'] = 'Likert-Skala';
$string['strategy_lickert_rating_biggestwish'] = 'Starke Präferenz';
$string['strategy_lickert_rating_exclude'] = 'Ablehnung';
$string['strategy_lickert_setting_maxlickert'] = 'Höchste Zahl auf der Skala (üblich sind 3, 5 oder 7)';
$string['strategy_lickert_setting_maxno'] = 'Maximale Anzahl Wahlmöglichkeiten, die ein Nutzer mit *0* bewerten kann';
$string['strategyname'] = 'Die Bewertungsstrategie lautet "{$a}".';
$string['strategy_not_specified'] = 'Sie müssen eine Bewertungsstrategie auswählen.';
$string['strategyoptions_for_strategy'] = 'Einstellungen Strategie "{$a}"';
$string['strategy_order_explain_choices'] = 'Wählen Sie zu jeder Platzierung eine Wahlmöglichkeit. Der 1. Platz ist Ihre höchste Präferenz.';
$string['strategy_order_name'] = 'Platzierung';
$string['strategy_order_no_choice'] = '{$a}. Wahl';
$string['strategy_order_setting_countoptions'] = 'Anzahl durch Nutzer zu vergebende Platzierungen (kleiner als Anzahl Wahlmöglichkeiten!)';
$string['strategy_order_use_only_once'] = 'Sie können einer Wahlmöglichkeit nur eine Platzierung geben.';
$string['strategy_points_explain_distribute_points'] = 'Geben Sie jeder Wahlmöglichkeit Punkte - insgesamt {$a} Punkte. Verteilen Sie viele Punkte auf stark präferierte Wahlmöglichkeiten. Sie können auch *0* Punkte vergeben.';
$string['strategy_points_explain_max_zero'] = 'Sie können höchstens {$a} Wahlmöglichkeiten *0* Punkte geben.';
$string['strategy_points_incorrect_totalpoints'] = 'Die Summe Ihrer vergebenen Punkte muss {$a} ergeben.';
$string['strategy_points_max_count_zero'] = 'Sie können höchstens {$a} Wahlmöglichkeiten mit *0* bewerten.';
$string['strategy_points_name'] = 'Punktevergabe';
$string['strategy_points_setting_maxzero'] = 'Maximal Anzahl Wahlmöglichkeiten, die Nutzer mit *0* Punkten bewerten kann';
$string['strategy_points_setting_totalpoints'] = 'Gesamtzahl der Punkte, die Nutzer verteilen kann';
$string['strategy_tickyes_accept'] = 'Akzeptieren';
$string['strategy_tickyes_error_mintickyes'] = 'Sie müssen mindestens {$a} Wahlmöglichkeiten akzeptieren.';
$string['strategy_tickyes_explain_mintickyes'] = 'Sie müssen mindestens {$a} Wahlmöglichkeiten auswählen.';
$string['strategy_tickyes_name'] = 'Ankreuzen';
$string['strategy_tickyes_not_accept'] = '-';
$string['strategy_tickyes_setting_mintickyes'] = 'Minimum an akzeptierten Wahlmöglichkeiten';
$string['strategy_yesmaybeno_max_count_no'] = 'Sie können höchstens {$a} Optionen ablehnen.';
$string['strategy_yesmaybeno_max_no'] = 'Sie können höchstens {$a} Wahlmöglichkeit(en) ablehnen.';
$string['strategy_yesmaybeno_name'] = 'Akzeptieren-Neutral-Ablehnen';
$string['strategy_yesmaybeno_rating_maybe'] = 'Neutral';
$string['strategy_yesmaybeno_rating_no'] = 'Ablehnen';
$string['strategy_yesmaybeno_rating_yes'] = 'Akzeptieren';
$string['strategy_yesmaybeno_setting_maxno'] = 'Maximum Anzahl Wahlmöglichkeiten, die Nutzer ablehnen kann';
$string['strategy_yesno_maximum_crossout'] = 'Sie können höchstens {$a} Wahlmöglichkeiten ablehnen.';
$string['strategy_yesno_max_no'] = 'Sie können höchstens {$a} Wahlmöglichkeit(en) ablehnen.';
$string['strategy_yesno_name'] = 'Akzeptieren-Ablehnen';
$string['strategy_yesno_rating_choose'] = 'Akzeptieren';
$string['strategy_yesno_rating_crossout'] = 'Ablehnen';
$string['strategy_yesno_setting_crossout'] = 'Maximum Anzahl Wahlmöglichkeiten, die Nutzer ablehnen kann';
$string['timeremaining'] = 'Verbleibende Zeit';
$string['too_early_to_distribute'] = 'Verteilung noch nicht möglich. Die Bewertung findet noch statt.';
$string['too_early_to_rate'] = 'Zu früh zum Bewerten.';
$string['unassigned_users'] = 'Unverteilte Nutzer';
$string['your_allocated_choice'] = 'Ihre Zuteilung';
$string['your_rating'] = 'Ihre Bewertung';
