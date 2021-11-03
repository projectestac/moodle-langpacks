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
 * Strings for component 'studentquiz', language 'nl', version '3.11'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'Afbreken';
$string['add_comment'] = 'Opmerking toevoegen';
$string['add_reply'] = 'Antwoord toevoegen';
$string['after_answering_end_date'] = 'Deze StudentQuiz is op {$a} gesloten voor beantwoorden.';
$string['after_submission_end_date'] = 'Deze StudentQuiz is op {$a} gesloten voor insturen van vragen.';
$string['anonymous_user_name'] = 'Anonieme gebruiker #{$a}';
$string['answeringndbeforestart'] = 'De deadline voor beantwoorden kan niet liggen voor de openingsdatum voor beantwoorden';
$string['api_state_change_success_content'] = 'Status/zichtbaarheid van de vraag succesvol gewijzigd';
$string['api_state_change_success_title'] = 'Succes';
$string['approve'] = 'Goedkeuren';
$string['approve_toggle'] = 'Goed-/afkeuren';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Goedgekeurd';
$string['approved_veryshort'] = 'Goed';
$string['approveselectedscheck'] = 'Weet je zeker dat je de volgende vragen wilt goed-/afkeuren><br /><br />{$a}';
$string['average_column_name'] = 'Gemiddelde';
$string['collapseall'] = 'Alle opmerkingen inklappen';
$string['collapsecomment'] = 'Opmerking inklappen';
$string['comment_author'] = 'Auteur';
$string['comment_cannot_update'] = 'Kan opmerking niet bijwerken';
$string['comment_column_name'] = 'Opmerkingen';
$string['comment_error'] = 'Plaats een opmerking';
$string['comment_error_unsaved'] = 'Wil je deze opmerking eerst bewaren?';
$string['comment_help'] = 'Schrijf een opmerking';
$string['comment_help_help'] = 'Schrijf een opmerking bij de vraag';
$string['comment_veryshort'] = 'Opm.';
$string['commenthistory'] = 'Opmerkingengeschiedenis';
$string['confirmdeletecomment'] = 'Weet je zeker dat je deze opmerking wilt verwijderen?';
$string['createnewquestion'] = 'Maak nieuwe vraag';
$string['createnewquestionfirst'] = 'Maak eerste vraag';
$string['creator_anonym_fullname'] = 'Anonieme leerling';
$string['current_of_total'] = '{$a->current} van {$a->total}';
$string['delete'] = 'Verwijderen';
$string['deletecomment'] = 'Opmerking verwijderen';
$string['deletedbyauthor'] = 'Dit bericht werd op {$a} verwijderd.';
$string['deletedbyuser'] = 'Dit bericht werd op {$a->date} verwijderd door {$a->user}.';
$string['deletedcomment'] = 'Verwijderd bericht.';
$string['deleteorphanedquestions'] = 'Verweesde vragen verwijderen';
$string['deleteorphanedquestionserrormdlquestion'] = '<font color="red">Fout</font>: Kon niet verwijderen uit tabel mdl_question. De vraag wordt waarschijnlijk op een andere plaats gebruikt.<br><font color="red">Fout</font>: Verwijderen uit mdl_studentquiz* tabellen is overgeslagen.<br>';
$string['deleteorphanedquestionsfullmessage'] = 'Vragen die zijn afgekeurd/gemarkeerd voor verwijderen:<ul>{$a->fullmessage</ul>';
$string['deleteorphanedquestionsnonefound'] = '<b>Niets gevonden</b>';
$string['deleteorphanedquestionssubject'] = 'StudentQuiz';
$string['deleteorphanedquestionssuccessmdlquestion'] = '<font color="green">Gelukt</font>: verwijderd uit de mdl_question tabel.<br>';
$string['deleteorphanedquestionssuccessstudentquiz'] = '<font color="green">Gelukt</font>: verwijderd uit de mdl_studentquiz* tabellen.<br>';
$string['describe_already_deleted'] = 'Deze opmerking is al verwijderd.';
$string['describe_not_creator'] = 'Dit is niet jouw opmerking.';
$string['describe_out_of_time_delete'] = 'Er is geen tijd meer deze opmerking te verwijderen';
$string['describe_out_of_time_edit'] = 'Er is geen tijd meer deze opmerking te bewerken';
$string['difficulty_all_column_name'] = 'Moeilijkheidsgraad gemeenschap';
$string['difficulty_level_column_name'] = 'Moeilijkheidsgraad';
$string['difficulty_title'] = 'Balk moeilijkheidsgraad';
$string['editcomment'] = 'Bewerk opmerking';
$string['editedcomment_last_edit'] = 'Laatst bewerkt:';
$string['editedcommenthistorylinktext'] = 'Geschiedenis';
$string['editorplaceholder'] = 'Plaats hier je opmerking ...';
$string['emailautomationnote'] = 'Let op: Dit is een geautomatiseerd systeembericht - dit e-mailadres wordt niet gelezen.';
$string['emailsalutation'] = 'Beste {$a},';
$string['error_form_validation'] = '{$a}';
$string['error_sendalert'] = 'Er is een fout opgetreden bij het versturen van je rapport aan {$a}.
Het rapport kon niet worden verstuurd.';
$string['expandall'] = 'Alle opmerkingen uitklappen';
$string['expandcomment'] = 'Opmerking uitklappen';
$string['filter'] = 'Filteren';
$string['filter_advanced_element'] = '{$a}(Geavanceerd element)';
$string['filter_comment_label_date'] = 'Datum';
$string['filter_comment_label_forename'] = 'Voornaam';
$string['filter_comment_label_sort_by'] = 'Sorteren op';
$string['filter_comment_label_sort_toggle'] = 'Sorteer op {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'Achternaam';
$string['filter_ishigher'] = 'Is hoger';
$string['filter_islower'] = 'Is lager';
$string['filter_label_approved'] = 'Goedgekeurde vragen';
$string['filter_label_comment'] = 'Opmerkingen';
$string['filter_label_createdate'] = 'Aanmaakdatum';
$string['filter_label_difficulty_level'] = 'Moeilijkheidsgraad';
$string['filter_label_fast_filters'] = 'Snelfilter voor vragen';
$string['filter_label_myattempts'] = 'Mijn pogingen';
$string['filter_label_mydifficulty'] = 'Mijn moeilijkheidsgraad';
$string['filter_label_mylastattempt'] = 'Mijn laatste poging';
$string['filter_label_myrate'] = 'Mijn beoordeling';
$string['filter_label_onlyapproved'] = 'Goedgekeurd';
$string['filter_label_onlyapproved_help'] = 'Vragen goedgekeurd door je leraar';
$string['filter_label_onlydifficult'] = 'Moeilijk voor iedereen';
$string['filter_label_onlydifficultforme'] = 'Moeilijk voor mij';
$string['filter_label_onlygood'] = 'Goed';
$string['filter_label_onlymine'] = 'Van mij';
$string['filter_label_onlymine_help'] = 'Vragen die je hebt aangemaakt';
$string['filter_label_onlynew'] = 'Onbeantwoord';
$string['filter_label_onlynew_help'] = 'Vragen die je nog niet eerder hebt beantwoord';
$string['filter_label_question'] = 'Vraagtitel';
$string['filter_label_rates'] = 'Beoordeling';
$string['filter_label_show_mine'] = 'Mijn vragen';
$string['filter_label_tags'] = 'Tag';
$string['finish_button'] = 'Beëindigen';
$string['image_placeholder'] = '[image]';
$string['invalidcomment'] = 'ongeldige opmerking';
$string['lastattempt_right'] = '✓';
$string['lastattempt_wrong'] = '✗';
$string['manager_anonym_fullname'] = 'Anonieme beheerder';
$string['message'] = 'Bericht';
$string['mine_column_name'] = 'Van mij';
$string['moderator'] = 'Moderator';
$string['modulename'] = 'StudentQuiz';
$string['modulenameplural'] = 'StudentQuizzen';
$string['more'] = 'Meer';
$string['myattempts_column_name'] = 'Mijn pogingen';
$string['mydifficulty_column_name'] = 'Mijn moeilijkheidsgraad';
$string['mylastattempt_column_name'] = 'Mijn laatste pogingen';
$string['nav_export'] = 'Exporteren';
$string['nav_import'] = 'Importeren';
$string['next_button'] = 'Volgende';
$string['no_comment'] = 'n.v.t.';
$string['no_difficulty_level'] = 'n.v.t.';
$string['no_myattempts'] = 'n.v.t.';
$string['no_mylastattempt'] = 'n.v.t.';
$string['no_rates'] = 'n.v.t.';
$string['no_tags'] = 'n.v.t.';
$string['not_approved'] = '✗';
$string['pluginname'] = 'StudentQuiz';
$string['previous_button'] = 'Vorige';
$string['privacy:metadata:studentquiz_notification:studentquizid'] = 'StudentQuiz ID';
$string['rate_points'] = 'Punten';
$string['replies'] = 'Reacties';
$string['reply'] = 'Reactie';
$string['replycomment'] = 'Plaats reactie';
$string['report_comment_submit'] = 'Rapport versturen';
$string['reportcomment'] = 'Rapport';
$string['reportquiz_stats_own_progress'] = 'Jouw voortgang';
$string['reportquiz_stats_title'] = 'Statistieken';
$string['reportquiz_total_questions_wrong'] = 'Onjuiste antwoorden';
$string['reportrank_table_column_approvedquestions'] = 'Punten voor goedgekeurde vragen';
$string['reportrank_table_column_communitystatus'] = 'Statistieken van gemeenschap';
$string['reportrank_table_column_correctanswers'] = 'Juiste antwoorden';
$string['reportrank_table_column_description'] = 'Beschrijving';
$string['reportrank_table_column_factor'] = 'Factor';
$string['reportrank_table_column_fullname'] = 'Volledige naam';
$string['reportrank_table_column_incorrectanswers'] = 'Onjuiste antwoorden';
$string['reportrank_table_column_points'] = 'Punten';
$string['reportrank_table_column_quantifier_name'] = 'Naam';
$string['settings_lastincorrectanswerquantifier_label'] = 'Punten voor laatste onjuiste antwoorden';
$string['settings_notification'] = 'Instellingen meldingen';
$string['settings_questionquantifier'] = 'Factor gepubliceerde vraag';
$string['settings_questionquantifier_help'] = 'Punten voor iedere gepubliceerde vraag';
$string['settings_questionquantifier_label'] = 'Punten voor iedere gepubliceerde vraag';
$string['settings_ratequantifier'] = 'Beoordelingsfactor';
$string['settings_ratequantifier_help'] = 'Punten voor iedere ontvangen ster.';
$string['settings_ratequantifier_label'] = 'Multiplicator voor het gemiddelde aantal sterren ontvangen voor een vraag';
$string['settings_section_header_comment_rating'] = 'Instellingen opmerkingen en beoordelingen';
$string['settings_section_header_question'] = 'Vraaginstellingen';
$string['settings_section_header_ranking'] = 'Instellingen rangschikking';
$string['settingsdeleteorphaned'] = 'Verweesde vragen verwijderen';
$string['settingsdeleteorphanedtime1y'] = '1 jaar';
$string['settingsdeleteorphanedtime2y'] = '2 jaar';
$string['settingsdeleteorphanedtime3y'] = '3 jaar';
$string['settingsdeleteorphanedtime6m'] = '6 maanden';
$string['settingsdeleteorphanedtimelimit'] = 'Tijdgrens voor verwijderen verweesde vraag';
$string['show_less'] = 'Toon minder';
$string['show_more'] = 'Toon meer';
$string['slot_of_slot'] = 'Vraag {$a->slot} van {$a->slots} in deze set';
$string['start_quiz_button'] = 'Start quiz';
$string['state_approved'] = 'Goedgekeurd';
$string['state_change_tooltip_approved'] = 'Vraag is goedgekeurd. Klik hier om de status van deze vraag te wijzigen';
$string['state_change_tooltip_changed'] = 'Vraag is gewijzigd. Klik hier om de status van deze vraag te wijzigen';
$string['state_change_tooltip_disapproved'] = 'Vraag is afgekeurd. Klik hier om de status van deze vraag te wijzigen';
$string['state_change_tooltip_new'] = 'Vraag is nieuw. Klik hier om de status van deze vraag te wijzigen';
$string['state_changed'] = 'Gewijzigd';
$string['state_column_name'] = 'Status';
$string['state_column_name_veryshort'] = 'S';
$string['state_disapproved'] = 'Afgekeurd';
$string['state_new'] = 'Nieuw';
$string['state_toggle'] = 'Status wijzigen';
$string['statistic_block_approvals'] = 'Goedgekeurde vragen';
$string['statistic_block_created'] = 'Aangemaakte vragen';
$string['statistic_block_disapprovals'] = 'Afgekeurde vragen';
$string['statistic_block_new_changed'] = 'Nieuwe / gewijzigde vragen';
$string['statistic_block_progress_available'] = 'Beschikbare vragen';
$string['statistic_block_progress_last_attempt_correct'] = 'Laatste poging juist';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Laatste poging onjuist';
$string['statistic_block_progress_never'] = 'Nog nooit beantwoorde vragen';
$string['statistic_block_title'] = 'Mijn voortgang';
$string['studentquiz'] = 'studentquiz';
$string['studentquizname'] = 'Naam StudentQuiz';
$string['tags'] = 'Tags';
$string['unapprove'] = 'Afkeuren';
