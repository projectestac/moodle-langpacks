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
 * Strings for component 'studentquiz', language 'sv', version '4.4'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'Avbryt';
$string['add_comment'] = 'Lägg till kommentar';
$string['add_reply'] = 'Lägg till svar';
$string['addprivatecomment'] = 'Lägg till privat kommentar (dessa är mellan lärare och student endast)';
$string['addprivatecomment_help'] = 'Dessa kommentarer är enbart mellan frågeförfattaren och den person som administrerar aktiviteten. Den här tråden är mer för aktivitetsadministratörer att ge feedback om och när de ändrar frågestatus.';
$string['addpubliccomment'] = 'Lägg till publik kommentar';
$string['after_answering_end_date'] = 'StudentQuizet stängdes för besvarande {$a}';
$string['after_submission_end_date'] = 'StudentQuizet stängdes för frågeskapande {$a}';
$string['anonymous_user_name'] = 'Anonym användare nr {$a}';
$string['answeringndbeforestart'] = 'Deadline för att besvara kan inte ligga före öppningsdatumet.';
$string['api_state_change_error_content'] = 'Den här frågan kan inte raderas eftersom den har godkänts.';
$string['api_state_change_error_title'] = 'Fel då fråga skulle raderas';
$string['api_state_change_success_content'] = 'Frågestatus ändrades.';
$string['api_state_change_success_title'] = 'Det gick bra.';
$string['approve'] = 'Godkänn';
$string['approve_toggle'] = 'Underkänn / Godkänn';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Godkända';
$string['approved_veryshort'] = 'G';
$string['approveselectedscheck'] = 'Är du säker på att du vill godkänna/underkänna följande frågor?<br /><br />{$a}';
$string['average_column_name'] = 'Medel';
$string['back_to_course_button'] = 'Tillbaka till kursen';
$string['before_answering_end_date'] = 'StudentQuizet stänger för svar {$a}.';
$string['before_answering_start_date'] = 'Öppen för svar från {$a}.';
$string['before_submission_end_date'] = 'StudentQuizet stänger för inskickade frågor {$a}.';
$string['before_submission_start_date'] = 'Öppen för att skicka in frågor från {$a}.';
$string['changecurrentstate'] = 'Ändra från <b>{$a}</b> till:';
$string['changestateto'] = 'Ändra till:';
$string['collapseall'] = 'Fäll ihop alla kommentarer';
$string['collapsecomment'] = 'Fäll ihop kommentar';
$string['comment'] = 'Kommentar';
$string['comment_author'] = 'Författare';
$string['comment_cannot_update'] = 'Kan inte uppdatera kommentaren';
$string['comment_column_name'] = 'Kommentarer';
$string['comment_error'] = 'Kommentera här';
$string['comment_error_unsaved'] = 'Vill du spara kommentaren först?';
$string['comment_help'] = 'Skriv en kommentar';
$string['comment_help_help'] = 'Skriv en kommentar till frågan';
$string['comment_veryshort'] = 'Kommentarer';
$string['commentcolumnexplainprivate'] = 'Antal privata kommentarer. En blå bakgrund betyder att du har minst en oläst kommentar.';
$string['commentcolumnexplainpublic'] = 'Antal publika kommentarer. En blå bakgrund betyder att du har minst en oläst kommentar.';
$string['commenthistory'] = 'Kommentarshistorik';
$string['commentplural'] = 'Kommentarer';
$string['confirmdeletecomment'] = 'Är du säker på att du vill radera den här kommentaren?';
$string['createnewquestion'] = 'Skapa ny fråga';
$string['createnewquestionfirst'] = 'Skapa första frågan';
$string['creator_anonym_fullname'] = 'Anonym student';
$string['current_of_total'] = '{$a->current} av {$a->total}';
$string['current_state'] = 'Nuvarande status';
$string['daily'] = 'dagligen';
$string['delete'] = 'Radera';
$string['deletecomment'] = 'Radera kommentar';
$string['deleted'] = 'Raderad';
$string['deletedbyauthor'] = 'Kommentaren raderades {$a}.';
$string['deletedbyuser'] = 'Kommentaren raderades av {$a->user},  {$a->date}.';
$string['deletedcomment'] = 'Kommentaren raderades.';
$string['deleteorphanedquestions'] = 'Radera föräldralösa frågor';
$string['deleteorphanedquestionserrormdlquestion'] = '<font color="red">Fel</font>: kunde inte radera från tabellen mdl_question. Frågan används förmodligen någonstans.<br><font color="red">Fel</font>: radera från mdl_studentquiz* tabeller avbröts.<br>';
$string['deleteorphanedquestionserrorstudentquiz'] = '<font color="red">Fel</font>: kunde inte radera från tabellerna mdl_studentquiz*.';
$string['deleteorphanedquestionsfullmessage'] = 'Frågor som är icke godkända / flaggade att raderas:<ul>{$a->fullmessage}</ul>';
$string['deleteorphanedquestionsnonefound'] = '<b>ingen hittades</b>';
$string['deleteorphanedquestionsquestioninfo'] = '<li><b>{$a->name}</b> (Frågetyp: {$a->qtype}, ID: {$a->questionid})</li>';
$string['deleteorphanedquestionssmallmessage'] = 'StudentQuiz: Körningen för att ta bort föräldralösa frågor är genomförd.';
$string['deleteorphanedquestionssubject'] = 'StudentQuiz';
$string['deleteorphanedquestionssuccessmdlquestion'] = '<font color="green">Det gick bra</font>: raderades från tabeller mdl_question<br>';
$string['deleteorphanedquestionssuccessstudentquiz'] = '<font color="green">Det gick bra</font>: raderades från mdl_studentquiz*<br>';
$string['describe_already_deleted'] = 'Den här kommentaren är redan raderad.';
$string['describe_not_creator'] = 'Detta är inte din kommentar.';
$string['describe_out_of_time_delete'] = 'Den här kommentaren kan inte längre raderas';
$string['describe_out_of_time_edit'] = 'Denna kommentar kan inte längre redigeras';
$string['descriptioncofstate'] = 'Fråga ändrad till \'{$a->state}\'';
$string['descriptionofstatenew'] = 'Fråga sparad ("Utkast")';
$string['descriptionofvisibility'] = 'Frågans synlighet satt till \'{$a->visibility}\'';
$string['difficulty_all_column_name'] = 'Gruppens svårighet';
$string['difficulty_level_column_name'] = 'Svårighet';
$string['difficulty_title'] = 'Svårighetsskala';
$string['editcomment'] = 'Redigera kommentar';
$string['editedcomment_last_edit'] = 'Senast redigerad:';
$string['editedcommenthistory'] = 'Redigerad av {$a->lastesteditedcommentauthorname}, {$a->lastededitedcommenttime}';
$string['editedcommenthistorylinktext'] = 'Historik';
$string['editedcommenthistorywithuserlink'] = 'Redigerad av <a href="{$a->lastesteditedcommentauthorprofileurl}">{$a->lastesteditedcommentauthorname}</a> den {$a->lastededitedcommenttime}';
$string['editorplaceholder'] = 'Skriv din kommentar här...';
$string['emailautomationnote'] = 'Observera att detta är ett automatiskt systemmeddelande som inte kan besvaras.';
$string['emailcommentaddedbody'] = 'Hej {$a->recepientname}, din fråga \'{$a->questionname}\' i StudentQuiz \'{$a->modulename}\' i kursen \'{$a->coursename}\' har kommenterats av \'{$a->actorname}\', \'{$a->timestamp}\'. Kommentar: \'{$a->commenttext}\' Du kan se frågan här: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'Din fråga \'{$a->questionname}\' har kommenterats av {$a->username}.';
$string['emailcommentaddedsubject'] = 'Fråga har kommenterats: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Hej {$a->recepientname}, kommentaren gjord \'{$a->commenttime}\' till din fråga \'{$a->questionname}\' i StudentQuiz \'{$a->modulename}\' i kursen \'{$a->coursename}\' har raderats \'{$a->actorname}\', \'{$a->timestamp}\'. Kommentaren var: \'{$a->commenttext}\' Du kan se frågan här: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'Kommentaren till din fråga \'{$a->questionname}\' har raderats av {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'Kommentar har raderats för frågan: {$a->questionname}';
$string['emaildigestbody'] = 'Detta är din {$a->digesttype} sammanfattning av notifikationer från StudentQuiz <b>{$a->modulename}</b>, åtkomlig här:';
$string['emaildigestbody_section_content'] = 'Din fråga <b>{$a->questionname}</b> har blivit <b>{$a->actiontype}</b> av <b>{$a->actorname}</b>';
$string['emaildigestbody_section_title'] = 'Notifikation {$a->seq}, {$a->timestamp}';
$string['emaildigestsubject'] = 'StudentQuiz, sammanfattande notifikation';
$string['emailminecommentdeletedbody'] = 'Hej {$a->recepientname}, din kommentar \'{$a->commenttime}\' till frågan \'{$a->questionname}\' i StudentQuizet \'{$a->modulename}\' i kursen \'{$a->coursename}\' har raderats av \'{$a->actorname}\', \'{$a->timestamp}\'. Kommentaren var: \'{$a->commenttext}\' Du kan se frågan här: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'Din kommentar till frågan \'{$a->questionname}\' har raderats av {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Kommentar har raderats för frågan: {$a->questionname}';
$string['emailnoityfyreviewablequestion_section_content'] = 'Frågan "<b>{$a->questionname}</b>" ändrades till "<b>Reviewable</b>" av <b>{$a->actorname}</b>';
$string['emailnoityfyreviewablequestionsinglebody'] = '<b>{$a->courseshortname}</b> StudentQuiz (<b>"{$a->modulename}"</b>): frågan <b>"{$a->questionname}"</b> ändrades till "<b>Reviewable</b>" av <b>{$a->actorname}, {$a->timestamp}.</b>';
$string['emailsalutation'] = 'Hej {$a},';
$string['emailsinglebody'] = 'Din fråga <b>{$a->questionname}</b> i StudentQuizet <b>{$a->modulename}</b> i kursen <b>{$a->coursename}</b> har blivit {$a->eventname} av <b>{$a->actorname}</b>, <b>{$a->timestamp}</b>.';
$string['emailsinglebody_reviewlink'] = 'Du kan granska den här frågan här:';
$string['error_form_validation'] = '{$a}';
$string['error_permission'] = 'Tyvärr, du måste vara med i en grupp för att se den här sidan.';
$string['error_sendalert'] = 'Det uppstod ett fel när din rapport skulle skickas till {$a}. Rapporten kunde inte skickas.';
$string['expandall'] = 'Fäll ut alla kommentarer';
$string['expandcomment'] = 'Fäll ut kommentar';
$string['filter'] = 'Filtrera';
$string['filter_advanced_element'] = '{$a} (Avancerat objekt)';
$string['filter_comment_label_date'] = 'Datum';
$string['filter_comment_label_forename'] = 'Förnamn';
$string['filter_comment_label_sort_by'] = 'Sortera efter:';
$string['filter_comment_label_sort_toggle'] = 'Sortera efter {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'Efternamn';
$string['filter_ishigher'] = 'Är högre än';
$string['filter_islower'] = 'Är lägre än';
$string['filter_label_approved'] = 'Godkända frågor';
$string['filter_label_comment'] = 'Antal kommentarer';
$string['filter_label_createdate'] = 'Skapades';
$string['filter_label_difficulty_level'] = 'Svårighet';
$string['filter_label_myattempts'] = 'Mina försök';
$string['filter_label_mydifficulty'] = 'Min svårighetsgrad';
$string['filter_label_mylastattempt'] = 'Mitt senaste försök';
$string['filter_label_myrate'] = 'Min ranking';
$string['filter_label_onlyapproved'] = 'Godkända';
$string['filter_label_onlyapproved_help'] = 'Frågor godkända av lärare';
$string['filter_label_onlydifficult'] = 'Svåra för alla';
$string['filter_label_onlydifficult_help'] = 'Frågor med en genomsnittlig svårighetsgrad om mer än {$a}%';
$string['filter_label_onlydifficultforme'] = 'Svåra för mig';
$string['filter_label_onlydifficultforme_help'] = 'Frågor med min svårighetsgrad om mer än {$a}%';
$string['filter_label_onlygood'] = 'Högt värderade';
$string['filter_label_onlygood_help'] = 'Frågor med en rankning om minst {$a} sjärnor';
$string['filter_label_onlymine'] = 'Mina egna';
$string['filter_label_onlymine_help'] = 'Frågor du skapat';
$string['filter_label_onlynew'] = 'Obesvarade';
$string['filter_label_onlynew_help'] = 'Frågor du aldrig försökt besvara tidigare';
$string['filter_label_question'] = 'Frågenamn';
$string['filter_label_questiontext'] = 'Innehåll';
$string['filter_label_rates'] = 'Rankning';
$string['filter_label_show_mine'] = 'Mina frågor';
$string['filter_label_tags'] = 'Tagg';
$string['finish_button'] = 'Avsluta';
$string['hidden'] = 'Dold';
$string['history'] = 'Historik';
$string['includingunread'] = '(inklusive olästa)';
$string['invalidemail'] = 'Epostadressen är inte giltig. Ange en giltig epostadress.';
$string['lastattempt_right'] = '✓';
$string['lastattempt_right_label'] = 'Senaste försöket korrekt';
$string['lastattempt_wrong'] = '✗';
$string['lastattempt_wrong_label'] = 'Senaste försöket felaktigt';
$string['latest_column_name'] = 'Senaste';
$string['manager_anonym_fullname'] = 'Anonym ansvarig';
$string['message'] = 'Meddelande';
$string['messageprovider:commentadded'] = 'Notifikation om tillagd kommentar';
$string['messageprovider:commentdeleted'] = 'Notifikation om raderad kommentar';
$string['messageprovider:deleteorphanedquestions'] = 'Fråga raderad, notifikation';
$string['messageprovider:minecommentdeleted'] = 'Notifikation om att min kommentar raderats';
$string['messageprovider:questionchanged'] = 'Frågehändelse, notifikation';
$string['migrate_already_done'] = 'Inget gjordes för aktiviteten har redan migrerats!';
$string['migrate_studentquiz_short'] = 'Öka hastigheten på det här frågesetet.';
$string['migrated_successful'] = 'Aktiviteten migrerades!';
$string['mine_column_name'] = 'Mina';
$string['missingparam'] = 'En parameter fattas eller är felaktig.';
$string['modulename'] = 'StudentQuiz';
$string['modulename_help'] = 'StudentQuiz gör det möjligt för studenter att skapa egna frågor för gemensamma övningsquizzar/tester. I översikten kan studenterna filtrera fram frågor beroende på exempelvis svårighetsgrad och göra individuella quizzar. <br> <br> Aktiviteten ger studenterna poäng inom aktiviteten, men inte i betygsboken. Poängen listas i en rankingtabell. <BR><BR>För att betygssätta aktiviteten kan en Uppgift utan inlämning sättas upp.<BR><BR>Lärare kan välja att importera bra frågor till kursens frågebank, för användning i andra tester.';
$string['modulename_link'] = 'mod/studentquiz/view';
$string['modulenameplural'] = 'StudentQuizar';
$string['more'] = 'Mer';
$string['myattempts_column_name'] = 'Mina försök';
$string['mydifficulty_column_name'] = 'Min svårighetsgrad';
$string['mylastattempt_column_name'] = 'Mitt senaste försök';
$string['myrate_column_name'] = 'Min ranking';
$string['nav_export'] = 'Exportera';
$string['nav_import'] = 'Importera';
$string['nav_question_no'] = 'Fråga {$a->current} av {$a->total}';
$string['needtoallowatleastoneqtype'] = 'Du måste tillåta minst en frågetyp';
$string['next_button'] = 'Nästa';
$string['no_comment'] = 'ingen än';
$string['no_comments'] = 'Inga kommentarer';
$string['no_difficulty_level'] = 'ingen än';
$string['no_myattempts'] = 'inget än';
$string['no_mylastattempt'] = 'inget än';
$string['no_mylastattempt_label'] = 'Frågan har inga försök';
$string['no_questions_add'] = 'Det finns inga frågor i detta StudentQuiz. Lägg gärna till några!';
$string['no_questions_filter'] = 'Ingen av frågorna matchar dina filter. Återställ filtren för att se alla frågor.';
$string['no_questions_selected_message'] = 'Välj minst en fråga för att starta en quiz.';
$string['no_rates'] = 'ingen än';
$string['no_tags'] = 'ingen än';
$string['nocommenthistoryexist'] = 'Det finns ännu ingen historik för denna kommentar.';
$string['nofurtherprivatecomments'] = 'Inga ytterligare privata kommentarer tillåts när en fråga är "godkänd"';
$string['noquestionsselectedtodoaction'] = 'Välj en eller flera frågor innan du väljer den här åtgärden.';
$string['not_approved'] = '✗';
$string['notshowratingcomment'] = 'Observera: Gradering och kommentering är inte tillgänglig i förgranskningsläge för dina egna frågor';
$string['num_questions'] = '{$a} frågor';
$string['number_column_name'] = 'Nummer';
$string['numberreply'] = '{$a} svar';
$string['onlyrootcommentcanreply'] = 'Bara första nivån av kommentaren kan besvaras';
$string['pagesize'] = 'Sidstorlek:';
$string['pagesize_invalid_input'] = 'Fel: en angiven sidstorlek måste vara ett giltigt numeriskt värde.';
$string['pin'] = 'Nåla fast fråga';
$string['please_enrole_message'] = 'Logga in för att se dina resultat';
$string['pluginadministration'] = 'Administrera StudentQuiz';
$string['pluginname'] = 'StudentQuiz';
$string['previous_button'] = 'Föregående';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Antal korrekta svar';
$string['private'] = 'Privat';
$string['privatecomments'] = 'Privata kommentarer';
$string['progress_bar_caption'] = 'Dina framsteg i detta StudentQuiz';
$string['public'] = 'Publik';
$string['publiccomments'] = 'Publika kommentarer';
$string['questionchangedlowercase'] = 'ändrad';
$string['questionsinuse'] = '(* Frågor markerade med asterisk används redan i quizzar.)';
$string['ranking_block_title'] = 'Rankning';
$string['ranking_block_title_anonymised'] = 'Rankning (anonymiserad)';
$string['rate_all_column_name'] = 'Allas värdering';
$string['rate_column_name'] = 'Frågevärdering';
$string['rate_error'] = 'Värdera frågan';
$string['rate_help'] = 'Värdera den här frågan';
$string['rate_help_help'] = 'Värdera den här frågan. 1 är mycket dålig, 5 är mycket bra.';
$string['rate_multi_stars_desc'] = '{$a} stjärnor valda';
$string['rate_one_star_desc'] = '1 stjärna vald';
$string['rate_points'] = 'Poäng';
$string['rate_title'] = 'Värdera frågan';
$string['ratingbar_title'] = 'Värdering';
$string['remove_comment'] = 'Ta bort';
$string['remove_comment_label'] = 'Ta bort kommentar';
$string['replies'] = 'Svar';
$string['reply'] = 'Svara';
$string['replycomment'] = 'Svara';
$string['report_comment_condition1'] = 'Innehållet är oegentligt';
$string['report_comment_condition2'] = 'Innehållet är trakasserande';
$string['report_comment_condition3'] = 'Innehållet är stötande';
$string['report_comment_condition4'] = 'Innehållet är kränkande';
$string['report_comment_condition5'] = 'Innehållet gör intrång på upphovsrätten';
$string['report_comment_condition6'] = 'Den är mot reglerna för annan anledning';
$string['report_comment_condition_more'] = 'Annan information (frivillig)';
$string['report_comment_emailappendix'] = 'Du får det här meddelandet för att din epostadress har används i ett StudentQuiz för att rapportera en kommentar.';
$string['report_comment_emailpreface'] = 'En kommentar har rapporterats av {$a->fullname} ({$a->username}, {$a->email}).';
$string['report_comment_emailsubject'] = 'Anmälan kommentaren {$a->commentid} i kursen {$a->coursename}, StudentQuiz {$a->studentquizname}';
$string['report_comment_feedback'] = 'Din anmälan har skickats och kommer att granskas.';
$string['report_comment_info'] = 'Anmälningsfunktionen skickar den här kommentaren till personal som undersöker den. <STRONG>Använd den här funktionen enbart då du anser det nödvändigt.</STRONG>';
$string['report_comment_invalid'] = 'Ange en orsak för att anmäla den här kommentaren.';
$string['report_comment_invalid_checkbox'] = 'Kryssa för minst ett alternativ.';
$string['report_comment_link_text'] = 'Klicka här för att granska frågan och dess kommentarer';
$string['report_comment_not_available'] = 'Anmälningsfunktionen är inte tillgänglig.';
$string['report_comment_pagename'] = 'Anmäl en kommentar du anser oacceptabel.';
$string['report_comment_reasons'] = 'Orsaker till anmälan:';
$string['report_comment_reporter_detail'] = '{$a->fullname} ({$a->username}; {$a->email}; {$a->ip})';
$string['report_comment_reporter_info'] = 'Anmälarens information:';
$string['report_comment_submit'] = 'Skicka anmälan';
$string['reportcomment'] = 'Anmäl kommentar';
$string['reportcomment_title'] = 'Rapportera kommentar som stötande';
$string['reportquiz_admin_title'] = 'Studentstatistik';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Allas genomsnitt för senaste korrekta svar';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Allas genomsnitt för senaste felaktiga svar';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Procentsats för allas korrekta svar';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Summan av korrekta svar / Summan av alla svar';
$string['reportquiz_stats_all_progress'] = 'Allas genomsnittliga framsteg';
$string['reportquiz_stats_all_progress_help'] = 'Genomsnittligt framsteg baserat på alla deltagare';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Samtliga deltagares genomsnitt för korrekta svar';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Samtliga deltagares genomsnitt för felaktiga svar';
$string['reportquiz_stats_all_questions_answered'] = 'Genomsnitt för alla svar';
$string['reportquiz_stats_all_questions_answered_help'] = 'Genomsnittligt antal svar baserat på alla deltagare';
$string['reportquiz_stats_all_questions_approved'] = 'Totalt antal godkända frågor';
$string['reportquiz_stats_all_questions_approved_help'] = 'Lärare kan godkänna frågor för att verifiera att de är korrekta. Detta är antalet godkända frågor i detta StudentQuiz.';
$string['reportquiz_stats_all_questions_created'] = 'Totalt antal frågor i detta StudentQuiz';
$string['reportquiz_stats_all_questions_created_help'] = 'Totalt antal frågor skapade av samtliga deltagare';
$string['reportquiz_stats_all_rates_average'] = 'Värderingsgenomsnitt för samtliga frågor';
$string['reportquiz_stats_all_rates_average_help'] = 'Värderingen för varje fråga är genomsnittet av de stjärnor som den fått av deltagarna. Exempel: Deltagarna skapade fyra frågor. Om fråga A fick 3 stjärnor, fråga B = 4 stjärnor, fråga C = 2 stjärnor och fråga D = 5 stjärnor, är värderingen för alla frågor 3,5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Ditt antal senast korrekta svar';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Ditt antal senast felaktiga svar';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Procentsats för dina korrekta svar';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Procentsats korrekta svar du avgett totalt i detta StudentQuiz. Delvis korrekta svar räknas som felaktiga.';
$string['reportquiz_stats_own_progress'] = 'Personliga framsteg';
$string['reportquiz_stats_own_progress_help'] = 'Procentdel av dina senaste korrekta svar för alla frågor i detta StudentQuiz. Delvis korrekta svar räknas som felaktiga.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Ditt totala antal korrekta svar';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Ditt totala antal felaktiga svar';
$string['reportquiz_stats_own_questions_answered'] = 'Totalt antal besvarade frågor';
$string['reportquiz_stats_own_questions_answered_help'] = 'Antalet svar du totalt har avgivit i detta StudentQuiz';
$string['reportquiz_stats_own_questions_approved'] = 'Ditt antal godkända frågor';
$string['reportquiz_stats_own_questions_approved_help'] = 'Lärare kan godkänna frågor för att verifiera att frågan är korrekt. Detta är antalet godkända frågor du har i detta StudentQuiz.';
$string['reportquiz_stats_own_questions_created'] = 'Antal frågor du har bidragit med';
$string['reportquiz_stats_own_questions_created_help'] = 'Antal frågor du har bidragit med till detta StudentQuiz';
$string['reportquiz_stats_own_rates_average'] = 'Ditt mottagna värderingsgenomsnitt';
$string['reportquiz_stats_own_rates_average_help'] = 'Värderingen för varje fråga är genomsnittet av de stjärnor som den fått av deltagarna. Exempel: DU skapade frågorna A och B. Om fråga A fick 3 stjärnor och fråga B fick 4 stjärnor, är ditt mottagna värderingsgenomsnitt 3,5.';
$string['reportquiz_stats_title'] = 'Statistik';
$string['reportquiz_total_attempt'] = 'Antal gånger användaren gjort quizzet';
$string['reportquiz_total_obtained_marks'] = 'Totalt poäng';
$string['reportquiz_total_questions_answered'] = 'Totalt antal svar';
$string['reportquiz_total_questions_right'] = 'Totalt antal korrekta svar';
$string['reportquiz_total_questions_wrong'] = 'Felaktiga svar';
$string['reportquiz_total_users'] = 'Deltagarantal';
$string['reportrank_table_column_approvedquestions'] = 'Poäng för godkända frågor';
$string['reportrank_table_column_communitystatus'] = 'Deltagarstatistik';
$string['reportrank_table_column_correctanswers'] = 'Korrekta svar';
$string['reportrank_table_column_countquestions'] = 'Poäng för skapade frågor';
$string['reportrank_table_column_description'] = 'Beskrivning';
$string['reportrank_table_column_factor'] = 'Faktor';
$string['reportrank_table_column_fullname'] = 'Namn';
$string['reportrank_table_column_incorrectanswers'] = 'Felaktiga svar';
$string['reportrank_table_column_lastcorrectanswers'] = 'Poäng för senast korrekta försök';
$string['reportrank_table_column_lastincorrectanswers'] = 'Poäng för senast felaktiga försök';
$string['reportrank_table_column_points'] = 'Poäng';
$string['reportrank_table_column_progress'] = 'Personliga framsteg';
$string['reportrank_table_column_quantifier_name'] = 'Namn';
$string['reportrank_table_column_rank'] = 'Rankning';
$string['reportrank_table_column_summeanrates'] = 'Poäng för mottagna stjärnor';
$string['reportrank_table_column_total_points'] = 'Total poäng';
$string['reportrank_table_column_value'] = 'Värde';
$string['reportrank_table_column_yourstatus'] = 'Din statistik';
$string['reportrank_table_quantifier_caption'] = 'Hur dina poäng räknas ut';
$string['reportrank_table_title'] = 'Deltagarrankning - Topp 10';
$string['reportrank_table_title_for_manager'] = 'Studentrankning';
$string['reportrank_title'] = 'Rankning';
$string['review_button'] = 'Granska';
$string['savechanges'] = 'Spara ändringar';
$string['scheduled_task_send_digest_notification'] = 'Skicka notifikation om sammanfattning';
$string['setting_question_publishing'] = 'Frågepublicering';
$string['setting_question_publishing_automatic'] = 'Publicera nya frågor automatiskt';
$string['setting_question_publishing_help'] = 'Publicerade frågor visas i detta StudentQuiz frågepool, för studenterna att använda. Du kan antingen låta alla nya frågor publiceras automatiskt, eller begära att de ska vara godkända innan de kan publiceras. NOTERA: Denna inställning kan inte ändras när frågor börjat skapas i StudentQuizet.';
$string['setting_question_publishing_require_approval'] = 'Kräv godkännande innan frågor publiceras';
$string['settings_allowallqtypes'] = 'Tillåt alla frågetyper';
$string['settings_allowedqtypes'] = 'Tillåtna frågetyper';
$string['settings_allowedqtypes_help'] = 'Begränsa tllåtna frågetyper till de markerade';
$string['settings_anonymous'] = 'Anonymisera studenter';
$string['settings_anonymous_help'] = 'Studenter kan inte se varandras namn. Lärare ser alltid namnen.';
$string['settings_anonymous_label'] = 'Gör studenterna anonyma';
$string['settings_approvedquantifier'] = 'Godkänd fråga-faktor';
$string['settings_approvedquantifier_help'] = 'Poäng för varje godkänd fråga';
$string['settings_approvedquantifier_label'] = 'Poäng för varje godkänd fråga';
$string['settings_availability_close_answering_from'] = 'Stängd för att svara från';
$string['settings_availability_close_submission_from'] = 'Stängd för att skicka in frågor från';
$string['settings_availability_open_answering_from'] = 'Öppen för att svara från';
$string['settings_availability_open_submission_from'] = 'Öppen för att skicka in frågor från';
$string['settings_comment_editor_toolbar'] = 'Konfigurera kommentarsverktygen';
$string['settings_comment_editor_toolbar_des'] = 'Listan på plugins och ordningen de visas i kan konfigureras här.';
$string['settings_commentdeletionperiod'] = 'Tid för att redigera/radera egen kommentar (minuter)';
$string['settings_commentdeletionperiod_help'] = 'Ange tiden i 0-60 minuter för hur länge studenterna kan radera sina egna kommentarer efter att de skickats. Om värdet sätt till 0 kan aldrig studenterna radera sina egna kommentarer. Lärare och systemadministratörer kan alltid radera kommentarer, och även se raderade kommentarer.';
$string['settings_email_digest_first_day'] = 'Vilken dag startar veckan med?';
$string['settings_email_digest_first_day_help'] = 'Om du har valt en veckosammanfattning, kan du med det här alternativet definiera den första dagen (som börjar kl. 00.00: 00s den dagen) under sjudagarsperioden. Detta är särskilt användbart om till exempel aktiviteten startar i mitten av veckan.';
$string['settings_email_digest_type'] = 'Typ av sammanfattande notifikation via e-post';
$string['settings_email_digest_type_daily_digest'] = 'Daglig sammanfattning';
$string['settings_email_digest_type_help'] = 'StudentQuiz har olika meddelanden som du kan aktivera, till exempel att informera frågeförfattare om en tillståndsändring (t.ex. en lärare har godkänt en av deras frågor). Du kan använda den här inställningen för att ange frekvensen för dessa meddelanden. Sammanfattningsmeddelanden skickas endast när det finns minst en händelse under den angivna perioden.';
$string['settings_email_digest_type_no_digest'] = 'Ingen sammanfattning (en notifikation per händelse)';
$string['settings_email_digest_type_weekly_digest'] = 'Veckosammanfattning';
$string['settings_excluderoles'] = 'Uteslut roller från rankning';
$string['settings_excluderoles_help'] = 'Valda roller visas inte i rankningen, men användare med dessa roller kan fortfarande delta i aktiviteten.';
$string['settings_excluderoles_label'] = 'Roller som inte ska visas i rankningen';
$string['settings_forcecommenting'] = 'Tvinga att kommentera';
$string['settings_forcecommenting_help'] = 'Tvinga att kommentera fråga när försök görs';
$string['settings_forcerating'] = 'Tvinga att värdera fråga';
$string['settings_forcerating_help'] = 'Tvinga att värdera fråga när försök görs';
$string['settings_lastcorrectanswerquantifier'] = 'Senaste korrekt svar-faktor';
$string['settings_lastcorrectanswerquantifier_help'] = 'Poäng för varje korrekt svar i det senaste försöket';
$string['settings_lastcorrectanswerquantifier_label'] = 'Poäng för senaste korrekta svar';
$string['settings_lastincorrectanswerquantifier'] = 'Senaste felaktigt svar-faktor';
$string['settings_lastincorrectanswerquantifier_help'] = 'Poäng för varje felaktigt eller delvis felaktigt svar i det senaste försöket';
$string['settings_lastincorrectanswerquantifier_label'] = 'Poäng för senaste felaktiga svar';
$string['settings_notification'] = 'Inställningar för notifikationer';
$string['settings_privatecommenting'] = 'Tillåt privata kommentarer';
$string['settings_privatecommenting_help'] = 'Den privata diskussionstråden, tillgänglig när du förhandsgranskar en fråga tills en fråga är godkänd, tillåter diskussion mellan frågeförfattaren och aktivitetsadministratören(erna). Om StudentQuiz-läget är inställt på "Publicera nya frågor automatiskt", kommer frågeförfattaren inte nödvändigtvis någonsin att se denna specifika tråd. Den förblir dock tillgänglig för aktivitetsadministratören(erna) oavsett, som kan använda den för att förklara varför de har gömt eller tagit bort en fråga. Standardinställningen för privata kommentarer är inställd i plugininställningarna på servernivå.';
$string['settings_questionquantifier'] = 'Skapade frågor-faktor';
$string['settings_questionquantifier_help'] = 'Poäng för varje skapad fråga';
$string['settings_questionquantifier_label'] = 'Poäng för varje skapad fråga';
$string['settings_ratequantifier'] = 'Värderings-faktor';
$string['settings_ratequantifier_help'] = 'Poäng per mottagen stjärna';
$string['settings_ratequantifier_label'] = 'Multipelfaktor för genomsnittet av mottagna stjärnor för en fråga';
$string['settings_removeqbehavior'] = 'Ta bort frågebeteendeplugin StudentQuiz';
$string['settings_removeqbehavior_label'] = 'Ta bort frågebeteendeplugin StudentQuiz';
$string['settings_reportingemail'] = 'E-postadress för att rapportera stötande kommentarer.';
$string['settings_reportingemail_help'] = 'Om en e-postadress anges här visas en länk för anmälan bredvid varje kommentar. Användare kan klicka på länken för att anmäla stötande kommentarer. Informationen skickas till denna adress. Om fältet lämnas tomt kommer rapportfunktionen inte att visas. Mer än en e-postadress kan läggas till så länge de är separerade med semikolon.';
$string['settings_section_description_default'] = 'Dessa värden definierar förinställningar för StudentQuiz.';
$string['settings_section_header_comment_rating'] = 'Inställningar för gradering och kommentarer';
$string['settings_section_header_commenting'] = 'Kommentarsinställningar';
$string['settings_section_header_question'] = 'Frågeinställningar';
$string['settings_section_header_ranking'] = 'Rankningsinställningar';
$string['settings_showprivatecomment'] = 'Tillåt privata kommentarstrådar';
$string['settings_showprivatecomment_help'] = 'Det här alternativet möjliggör avancerad diskussion mellan en student och lärare under frågans förhandsgranskning.';
$string['settingsdeleteorphaned'] = 'Radera föräldralösa frågor';
$string['settingsdeleteorphaned_help'] = 'Aktiverar en schemalagd rensning som körs varje dag för att radera alla föräldralösa / ej godkända frågor från databasen.';
$string['settingsdeleteorphanedtime1y'] = '1 år';
$string['settingsdeleteorphanedtime2y'] = '2 år';
$string['settingsdeleteorphanedtime3y'] = '3 år';
$string['settingsdeleteorphanedtime6m'] = '6 månader';
$string['settingsdeleteorphanedtimelimit'] = 'Tidsgräns för att radera föräldralösa frågor';
$string['settingsdeleteorphanedtimelimit_help'] = 'Ställ in tidsgränsen för radering av föräldralösa / ej godkända frågor. Frågor som är äldre kommer att raderas.';
$string['show_less'] = 'Visa färre';
$string['show_more'] = 'Visa fler';
$string['slot_of_slot'] = 'Fråga {$a->slot} av {$a->slots} i det här setet';
$string['start_quiz_button'] = 'Starta quiz';
$string['state_approved'] = 'Godkänd';
$string['state_approvedlowercase'] = 'godkänd';
$string['state_approvedplural'] = 'Godkänd';
$string['state_change_tooltip_approved'] = 'Frågan är godkänd. Klicka här för att ändra dess status.';
$string['state_change_tooltip_changed'] = 'Frågan är ändrad. Klicka här för att ändra dess status.';
$string['state_change_tooltip_disapproved'] = 'Frågan är underkänd. Klicka här för att ändra dess status.';
$string['state_change_tooltip_new'] = 'Frågan är ny. Klicka här för att ändra dess status.';
$string['state_change_tooltip_reviewable'] = 'Frågan går att förhandsgranska. Klicka här för att ändra tillståndet för frågan.';
$string['state_changed'] = 'Ändrad';
$string['state_changedlowercase'] = 'ändrad';
$string['state_changedplural'] = 'Ändrade';
$string['state_column_name'] = 'Status';
$string['state_column_name_veryshort'] = 'Status';
$string['state_deleted'] = 'Raderad';
$string['state_deletedlowercase'] = 'raderad';
$string['state_deletedplural'] = 'Raderade';
$string['state_disapproved'] = 'Underkänd';
$string['state_disapprovedlowercase'] = 'underkänd';
$string['state_disapprovedplural'] = 'Underkända';
$string['state_hidden'] = 'Dold';
$string['state_hiddenlowercase'] = 'dold';
$string['state_hiddenplural'] = 'Dolda';
$string['state_new'] = 'Ny';
$string['state_newplural'] = 'Ny';
$string['state_pinned'] = 'Fastnålad';
$string['state_pinnedplural'] = 'Fastnålade';
$string['state_reviewable'] = 'Kan förhandsgranskas';
$string['state_reviewablelowercase'] = 'kan förhandsgranskas';
$string['state_reviewableplural'] = 'Kan förhandsgranskas';
$string['state_shown'] = 'Visad';
$string['state_shownlowercase'] = 'visad';
$string['state_shownplural'] = 'Visade';
$string['state_toggle'] = 'Ändra status';
$string['statehistory'] = 'Statushistorik';
$string['statistic_block_approvals'] = 'Godkända frågor';
$string['statistic_block_created'] = 'Skapade frågor';
$string['statistic_block_disapprovals'] = 'Underkända frågor';
$string['statistic_block_new_changed'] = 'Nya / ändrade frågor';
$string['statistic_block_progress_available'] = 'Tillgängliga frågor';
$string['statistic_block_progress_last_attempt_correct'] = 'Senaste försök, antal korrekta svar';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Senaste försök, antal felaktiga svar';
$string['statistic_block_progress_never'] = 'Frågor som aldrig besvarats';
$string['statistic_block_title'] = 'Mina framsteg';
$string['studentquiz'] = 'StudentQuiz';
$string['studentquiz:addinstance'] = 'Lägg till en ny StudentQuiz';
$string['studentquiz:cancommentprivately'] = 'Kommentera privat på alla frågor';
$string['studentquiz:canselfcommentprivately'] = 'Kommentera privat bara på egna frågor';
$string['studentquiz:canselfratecomment'] = 'Gradering och kommentering i förgranskningsläge';
$string['studentquiz:changestate'] = 'Ställ in status för en fråga i StudentQuiz';
$string['studentquiz:emailnotifyapproved'] = 'Meddela när fråga godkänts';
$string['studentquiz:emailnotifychanged'] = 'Meddela när fråga ändrats';
$string['studentquiz:emailnotifycommentadded'] = 'Meddela om ny kommentar';
$string['studentquiz:emailnotifycommentdeleted'] = 'Meddela om raderad kommentar';
$string['studentquiz:emailnotifyquestion'] = 'Skicka notifikation om fråga';
$string['studentquiz:emailnotifyreviewablequestion'] = 'Användaren får ett e-postmeddelande när studenten ändrar sina frågors status till granskningsbar';
$string['studentquiz:manage'] = 'Moderera frågor i StudentQuiz';
$string['studentquiz:organize'] = 'Flytta frågor till kategorier i StudentQuiz';
$string['studentquiz:pinquestion'] = 'Nåla fast frågor i STudentQuiz';
$string['studentquiz:preview'] = 'Förhandsgranska';
$string['studentquiz:previewothers'] = 'Förhandsgranska andras frågor i StudentQuiz';
$string['studentquiz:submit'] = 'Skapa frågor i StudentQuiz';
$string['studentquiz:systemnotifytaskdeleteorphanedquestions'] = 'Notifikation om raderade föräldralösa frågor';
$string['studentquiz:unhideanonymous'] = 'Kan se namn även om anonymisering är aktiverad i StudentQuizet';
$string['studentquiz:view'] = 'Se frågor i StudentQuiz';
$string['studentquizname'] = 'StudentQuizets namn';
$string['studentquizname_help'] = 'StudentQuizets namn';
$string['submissionendbeforestart'] = 'Slutdatum för inskickning kan inte anges som före öppningsdatumet';
$string['tags'] = 'Taggar';
$string['unapprove'] = 'Underkänn';
$string['unpin'] = 'Ta bort fastnålning';
$string['visiblegroupnotyetsupport'] = '"Synliga grupper" stöds inte ännu. Välj ett annat gruppläge.';
$string['weekly'] = 'veckovis';
