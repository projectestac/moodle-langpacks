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
 * Strings for component 'workshop', language 'fr', version '4.1'.
 *
 * @package     workshop
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:assessmentsclose'] = 'La phase d\'évaluation ferme :';
$string['activitydate:assessmentsclosed'] = 'Phase d\'évaluation fermée :';
$string['activitydate:assessmentsopen'] = 'La phase d\'évaluation ouvre :';
$string['activitydate:assessmentsopened'] = 'Phase d\'évaluation ouverte :';
$string['activitydate:submissionsclose'] = 'La phase de remise ferme :';
$string['activitydate:submissionsclosed'] = 'Phase de remise fermée :';
$string['activitydate:submissionsopen'] = 'La phase de remise ouvre :';
$string['activitydate:submissionsopened'] = 'Phase de remise ouverte :';
$string['aggregategrades'] = 'Recalculer les notes';
$string['aggregation'] = 'Combinaison des notes';
$string['allocate'] = 'Attribuer les travaux';
$string['allocatedetails'] = 'attendus : {$a->expected}<br />remis : {$a->submitted}<br />à attribuer : {$a->allocate}';
$string['allocation'] = 'Attribution des travaux';
$string['allocationconfigured'] = 'Attribution configurée';
$string['allocationdone'] = 'Attribution effectuée';
$string['allocationerror'] = 'Erreur d\'attribution';
$string['allowedfiletypesforoverallfeedback'] = 'Types de fichier autorisés en annexe du feedback';
$string['allowedfiletypesforoverallfeedback_help'] = 'Les types de fichiers annexés aux feedbacks peuvent être limités en indiquant une liste d\'extensions des types de fichiers autorisés. Si le champ est laissé vide, tous les types de fichiers sont autorisés.';
$string['allowedfiletypesforoverallfeedback_link'] = 'admin/tool/filetypes/index';
$string['allowedfiletypesforsubmission'] = 'Types de fichier autorisés pour le travail à remettre';
$string['allowedfiletypesforsubmission_help'] = 'Les types de fichiers remis peuvent être limités en indiquant une liste d\'extensions des types de fichiers autorisés. Si le champ est laissé vide, tous les types de fichiers sont autorisés.';
$string['allowedfiletypesforsubmission_link'] = 'admin/tool/filetypes/index';
$string['allsubmissions'] = 'Tous les travaux remis ({$a})';
$string['alreadygraded'] = 'Déjà noté';
$string['areaconclusion'] = 'Texte de conclusion';
$string['areainstructauthors'] = 'Instructions pour la remise des travaux';
$string['areainstructreviewers'] = 'Instructions pour l\'évaluation des travaux';
$string['areaoverallfeedbackattachment'] = 'Annexes du feedback général';
$string['areaoverallfeedbackcontent'] = 'Textes du feedback général';
$string['areasubmissionattachment'] = 'Annexes du travail';
$string['areasubmissioncontent'] = 'Textes du travail';
$string['assess'] = 'Évaluer';
$string['assessedexample'] = 'Travail exemplaire évalué';
$string['assessedsubmission'] = 'Travail évalué';
$string['assessingexample'] = 'Évaluation du travail exemplaire';
$string['assessingsubmission'] = 'Évaluation du travail remis';
$string['assessment'] = 'Évaluation';
$string['assessmentby'] = 'par <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Évaluation par {$a}';
$string['assessmentbyyourself'] = 'Votre évaluation';
$string['assessmentdeleted'] = 'Retrait de l\'attribution';
$string['assessmentend'] = 'Fin des évaluations';
$string['assessmentendbeforestart'] = 'Le délai pour l\'évaluation ne peut pas être antérieur à la date d\'ouverture des évaluations';
$string['assessmentenddatetime'] = 'Délai d\'évaluation : {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} délai pour l\'évaluation';
$string['assessmentform'] = 'Formulaire d\'évaluation';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Évaluation</a> de <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Évaluation de référence';
$string['assessmentreferenceconflict'] = 'Il n\'est pas possible d\'évaluer un travail exemplaire pour lequel vous avez fourni une évaluation de référence.';
$string['assessmentreferenceneeded'] = 'Vous devez évaluer ce travail exemplaire pour fournir une référence d\'évaluation. Cliquer « Continuer » pour évaluer le travail exemplaire.';
$string['assessments'] = 'Évaluations';
$string['assessmentsettings'] = 'Modalités d\'évaluation';
$string['assessmentstart'] = 'Début des évaluations';
$string['assessmentstartdatetime'] = 'Ouvert pour évaluation dès le {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} ouverture de l\'évaluation';
$string['assessmentweight'] = 'Pondération de l\'évaluation';
$string['assignedassessments'] = 'Travaux à évaluer';
$string['assignedassessmentsnone'] = 'Vous n\'avez pas de travail à évaluer';
$string['backtoeditform'] = 'Revenir au formulaire';
$string['byfullname'] = 'par <a href="{$a->url}">{$a->name}</a>';
$string['byfullnamewithoutlink'] = 'par {$a}';
$string['calculategradinggrades'] = 'Calculer les notes des évaluations';
$string['calculategradinggradesdetails'] = 'attendues : {$a->expected}<br />calculées : {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Calculer les notes des travaux remis';
$string['calculatesubmissiongradesdetails'] = 'attendues : {$a->expected}<br />calculées : {$a->calculated}';
$string['chooseuser'] = 'Sélectionner un utilisateur…';
$string['clearaggregatedgrades'] = 'Effacer toutes les notes';
$string['clearaggregatedgrades_help'] = 'Les notes combinées du travail et de l\'évaluation seront réinitialisées. Vous pouvez les recalculer en recommençant la phase de notation des évaluations.';
$string['clearaggregatedgradesconfirm'] = 'Voulez-vous vraiment effacer les notes calculées des travaux remis et des évaluations ?';
$string['clearassessments'] = 'Effacer les évaluations';
$string['clearassessments_help'] = 'Les notes calculées pour le travail et les évaluations seront réinitialisées. L\'information sur le remplissage des formulaires d\'évaluation sera conservée, mais tous les évaluateurs devront rouvrir ce formulaire et le réenregistrer pour que le calcul des notes données s\'effectue à nouveau.';
$string['clearassessmentsconfirm'] = 'Voulez-vous vraiment effacer toutes les notes des évaluations ? Vous ne pourrez pas récupérer l\'information par vous-même, et les évaluateurs devront réévaluer les travaux attribués.';
$string['conclusion'] = 'Conclusion';
$string['conclusion_help'] = 'Le texte de conclusion est affiché aux participants à la fin de l\'activité.';
$string['configexamplesmode'] = 'Mode par défaut pour l\'évaluation des travaux exemplaires des ateliers';
$string['configgrade'] = 'Note maximale par défaut pour les travaux remis dans les ateliers';
$string['configgradedecimals'] = 'Nombre de chiffres à afficher par défaut après la virgule lors de l\'affichage des notes.';
$string['configgradinggrade'] = 'Note maximale par défaut pour les évaluations dans les ateliers';
$string['configmaxbytes'] = 'Taille maximale par défaut des travaux remis pour tous les ateliers du site (peut être modifié par les limites des cours et d\'autres réglages locaux)';
$string['configstrategy'] = 'Stratégie d\'évaluation par défaut des ateliers';
$string['createsubmission'] = 'Ajouter un travail';
$string['crontask'] = 'Traitement en tâche de fond du module Atelier';
$string['daysago'] = 'il y a {$a} jours';
$string['daysleft'] = '{$a} jours restants';
$string['daystoday'] = 'aujourd\'hui';
$string['daystomorrow'] = 'demain';
$string['daysyesterday'] = 'hier';
$string['deadlinesignored'] = 'Les restrictions de temps ne s\'appliquent pas à vous';
$string['deletesubmission'] = 'Supprimer le travail remis';
$string['editassessmentform'] = 'Préparer le formulaire d\'évaluation';
$string['editassessmentformstrategy'] = 'Préparer le formulaire d\'évaluation ({$a})';
$string['editingassessmentform'] = 'Modification du formulaire d\'évaluation';
$string['editingsubmission'] = 'Modification du travail remis';
$string['editsubmission'] = 'Modifier le travail remis';
$string['err_multiplesubmissions'] = 'Une autre version de ce travail a été enregistrée alors que vous modifiiez ce formulaire. Les remises de plusieurs travaux par utilisateur ne sont pas autorisées.';
$string['err_removegrademappings'] = 'Impossible de supprimer les attributions de notes pas utilisées';
$string['evaluategradeswait'] = 'Veuillez attendre que les évaluations aient été notées et que les notes soient calculées';
$string['evaluation'] = 'Notation des évaluations';
$string['evaluationmethod'] = 'Méthode de notation des évaluations';
$string['evaluationmethod_help'] = 'La méthode de notation des évaluations détermine comment est calculée la note pour les évaluations données. Vous pouvez la faire recalculer les notes à plusieurs reprises avec différents réglages tant que le résultat ne vous satisfait pas.';
$string['evaluationsettings'] = 'Réglages de la notation des évaluations';
$string['eventassessableuploaded'] = 'Un travail a été déposé.';
$string['eventassessmentevaluated'] = 'Évaluation notée';
$string['eventassessmentevaluationsreset'] = 'Notes des évaluations réinitialisées';
$string['eventassessmentreevaluated'] = 'Évaluation ré-évaluée';
$string['eventphaseautomaticallyswitched'] = 'Phase changée automatiquement';
$string['eventphaseswitched'] = 'Phase changée';
$string['eventsubmissionassessed'] = 'Travail evalué';
$string['eventsubmissionassessmentsreset'] = 'Évaluations de travail effacées';
$string['eventsubmissioncreated'] = 'Travail créé';
$string['eventsubmissiondeleted'] = 'Travail supprimé';
$string['eventsubmissionreassessed'] = 'Travail ré-évalué';
$string['eventsubmissionupdated'] = 'Travail modifié';
$string['eventsubmissionviewed'] = 'Travail consulté';
$string['example'] = 'Travail exemplaire';
$string['exampleadd'] = 'Ajouter travail exemplaire';
$string['exampleassess'] = 'Évaluer travail exemplaire';
$string['exampleassessments'] = 'Travaux exemplaires à évaluer';
$string['exampleassesstask'] = 'Évaluer les travaux exemplaires';
$string['exampleassesstaskdetails'] = 'attendus : {$a->expected}<br />évalués : {$a->assessed}';
$string['examplecomparing'] = 'Comparaison des évaluations des travaux exemplaires';
$string['exampledelete'] = 'Supprimer travail exemplaire';
$string['exampledeleteconfirm'] = 'Voulez-vous vraiment supprimer le travail exemplaire suivant ? Cliquer sur le bouton « Continuer » pour le supprimer.';
$string['exampleedit'] = 'Modifier travail exemplaire';
$string['exampleediting'] = 'Modification du travail exemplaire';
$string['exampleneedassessed'] = 'Vous devez d\'abord évaluer tous les travaux exemplaires';
$string['exampleneedsubmission'] = 'Vous devez d\'abord remettre votre travail et évaluer tous les travaux exemplaires';
$string['examplesbeforeassessment'] = 'Les travaux exemplaires sont disponibles une fois le travail remis et sont à évaluer avant ceux des pairs';
$string['examplesbeforesubmission'] = 'Les travaux exemplaires doivent être évalués avant de remettre le travail ';
$string['examplesmode'] = 'Mode d\'évaluation des travaux exemplaires';
$string['examplesubmissions'] = 'Travaux exemplaires';
$string['examplesvoluntary'] = 'L\'évaluation des travaux exemplaires est facultative';
$string['exportsubmission'] = 'Exporter cette page';
$string['feedbackauthor'] = 'Feedback pour l\'auteur';
$string['feedbackauthorattachment'] = 'Annexe';
$string['feedbackby'] = 'Feedback de {$a}';
$string['feedbackreviewer'] = 'Feedback pour l\'évaluateur';
$string['feedbacksettings'] = 'Feedback';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Notes données';
$string['grade_grading_name'] = 'Évaluation';
$string['grade_submission_name'] = 'Travail remis';
$string['gradecalculated'] = 'Note calculée pour le travail remis';
$string['gradedecimals'] = 'Décimales dans les notes';
$string['gradegivento'] = '→';
$string['gradeinfo'] = 'Note : {$a->received} sur {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (évaluation)';
$string['gradeitemsubmission'] = '{$a->workshopname} (travail remis)';
$string['gradeover'] = 'Modifier la note du travail remis';
$string['gradereceivedfrom'] = '←';
$string['gradesreport'] = 'Rapport d\'évaluation de l\'atelier';
$string['gradetopassgrading'] = 'Note de l\'évaluation pour réussir';
$string['gradetopasssubmission'] = 'Note du travail pour réussir';
$string['gradinggrade'] = 'Note du processus d\'évaluation';
$string['gradinggrade_help'] = 'Ce réglage spécifie la note maximale pouvant être obtenue pour l\'évaluation de travaux.';
$string['gradinggradecalculated'] = 'Note calculée pour l\'évaluation';
$string['gradinggradeof'] = 'Note pour l\'évaluation (sur {$a})';
$string['gradinggradeover'] = 'Modifier la note de l\'évaluation';
$string['gradingsettings'] = 'Réglages d\'évaluation';
$string['groupnoallowed'] = 'Vous n\'avez les permissions requises pour accéder à aucun groupe de cet atelier';
$string['iamsure'] = 'Oui, vraiment';
$string['indicator:cognitivedepth'] = 'Atelier : aspect cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'étudiant dans une activité Atelier.';
$string['indicator:cognitivedepthdef'] = 'Atelier : aspect cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint durant cet intervalle d\'analyse ce pourcentage d\'engagement cognitif offert par les activités « Atelier » (niveaux : pas de vue, vue, envoi, vue du feedback, commentaire du feedback, nouvel envoi après vue du feedback).';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Atelier : aspect social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l\'interaction sociale atteinte par l\'étudiant dans une activité Atelier.';
$string['indicator:socialbreadthdef'] = 'Atelier : aspect social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint durant cet intervalle d\'analyse ce pourcentage d\'engagement social offert par les activités « Atelier » (niveaux : pas de participation, participant seul, participant avec d\'autres).';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Info';
$string['instructauthors'] = 'Instructions pour la remise du travail';
$string['instructreviewers'] = 'Instructions pour l\'évaluation';
$string['introduction'] = 'Description';
$string['latesubmissions'] = 'Travaux remis en retard';
$string['latesubmissions_desc'] = 'Autoriser la remise des travaux après le délai';
$string['latesubmissions_help'] = 'Si ce réglage est activé, les participants peuvent remettre leur travail après le délai fixé ou durant la phase d\'évaluation. Les travaux remis en retard ne pourront en revanche pas être modifiés.';
$string['latesubmissionsallowed'] = 'Les travaux remis en retard sont autorisés';
$string['legacyallocationplugincron'] = 'Cron obsolète d\'attribution des évaluations des ateliers';
$string['maxbytes'] = 'Taille maximale des annexes aux travaux';
$string['modulename'] = 'Atelier';
$string['modulename_help'] = 'Le module d\'activité atelier permet de recueillir et d\'examiner les travaux des participants, et de les faire évaluer par les pairs.

Les participants peuvent remettre tous types de travaux sous forme de fichiers numériques (fichiers texte, présentations, feuilles de calcul, etc.) ou également saisir directement du texte en ligne dans l\'éditeur de texte.

Les travaux remis sont évalués au moyen d\'un formulaire d\'évaluation multicritère défini par l\'enseignant. Pour la phase d\'évaluation par les pairs et afin que le formulaire d\'évaluation soit bien compris, des travaux exemplaires accompagnés d\'une évaluation de référence peuvent être mis en place par l\'enseignant. Les participants ont la possibilité d\'évaluer un ou plusieurs travaux de pairs, au besoin de façon anonyme.

Les participants peuvent obtenir deux notes dans l\'activité atelier : une pour le travail qu\'ils remettent, et l\'autre pour la qualité de leur évaluation des travaux de pairs. Les deux notes sont enregistrées dans le carnet de notes.';
$string['modulename_link'] = 'mod/workshop/view';
$string['modulenameplural'] = 'Ateliers';
$string['myassessments'] = 'Mes évaluations';
$string['mysubmission'] = 'Mon travail remis';
$string['nattachments'] = 'Nombre maximal d\'annexes jointes';
$string['noexamples'] = 'Il n\'y a encore aucun travail exemplaire dans cet atelier';
$string['noexamplesformready'] = 'Vous devez préparer le formulaire d\'évaluation avant de fournir des travaux exemplaires';
$string['nogradeyet'] = 'Pas encore de note';
$string['nosubmissionfound'] = 'Aucun travail remis par cet utilisateur';
$string['nosubmissions'] = 'Aucun travail remis dans cet atelier';
$string['nosubmissiontype'] = 'Au moins un type de remise doit être disponible';
$string['notassessed'] = 'Pas encore évalué';
$string['nothingfound'] = 'Rien à afficher';
$string['nothingtoreview'] = 'Rien à évaluer';
$string['notoverridden'] = 'Pas modifié';
$string['noworkshops'] = 'Il n\'y a pas d\'atelier dans ce cours';
$string['noyoursubmission'] = 'Vous n\'avez pas encore remis votre travail';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Feedback général';
$string['overallfeedbackfiles'] = 'Nombre maximal d\'annexes du feedback général';
$string['overallfeedbackmaxbytes'] = 'Taille totale maximale des annexes de feedback';
$string['overallfeedbackmode'] = 'Mode feedback général';
$string['overallfeedbackmode_0'] = 'Désactivé';
$string['overallfeedbackmode_1'] = 'Activé et optionnel';
$string['overallfeedbackmode_2'] = 'Activé et requis';
$string['overallfeedbackmode_help'] = 'Si ce réglage est activé, un champ de texte est affiché au bas du formulaire d\'évaluation. Les évaluateurs peuvent y noter une évaluation globale du travail remis, ou y fournir une explication supplémentaire de leur évaluation.';
$string['page-mod-workshop-x'] = 'Toute page du module atelier';
$string['participant'] = 'Participant';
$string['participantrevierof'] = 'Le participant est évaluateur de';
$string['participantreviewedby'] = 'Le participant est évalué par';
$string['phaseassessment'] = 'Phase d\'évaluation';
$string['phaseclosed'] = 'Fermé';
$string['phaseevaluation'] = 'Phase de notation des évaluations';
$string['phasesetup'] = 'Phase de mise en place';
$string['phasesoverlap'] = 'La phase de remise des travaux et celle de l\'évaluation ne peuvent pas se chevaucher';
$string['phasesubmission'] = 'Phase de remise';
$string['pluginadministration'] = 'Administration de l\'atelier';
$string['pluginname'] = 'Atelier';
$string['prepareexamples'] = 'Préparer des travaux exemplaires';
$string['previewassessmentform'] = 'Prévisualisation';
$string['privacy:metadata:aggregatedgradinggrade'] = 'Note combinée de toutes les évaluations faites par l\'utilisateur dans l\'activité atelier donnée';
$string['privacy:metadata:assessmentgrade'] = 'Note combinée suggérée par cette évaluation pour le travail remis';
$string['privacy:metadata:assessmentgradinggrade'] = 'Note pour avoir fourni cette évaluation';
$string['privacy:metadata:assessmentgradinggradeover'] = 'Valeur de remplacement donnée manuellement pour la note pour avoir fourni cette évaluation';
$string['privacy:metadata:assessmentid'] = 'Identifiant de l\'évaluation';
$string['privacy:metadata:authorid'] = 'Identifiant de l\'auteur du travail remis';
$string['privacy:metadata:dimensiongrade'] = 'Note dans la dimension de l\'évaluation donnée';
$string['privacy:metadata:dimensionid'] = 'Identifiant de la dimension de l\'évaluation';
$string['privacy:metadata:example'] = 'Si cet enregistrement représente un travail exemplaire';
$string['privacy:metadata:feedbackauthor'] = 'Feedback pour l\'auteur';
$string['privacy:metadata:feedbackauthorformat'] = 'Format de texte du feedback pour l\'auteur';
$string['privacy:metadata:feedbackreviewer'] = 'Feedback pour l\'utilisateur fournissant l\'évaluation';
$string['privacy:metadata:feedbackreviewerformat'] = 'Format de texte du feedback pour l\'utilisateur fournissant l\'évaluation';
$string['privacy:metadata:late'] = 'Si le travail a été remis après le délai';
$string['privacy:metadata:peercomment'] = 'Commentaire sur la note donnée par l\'utilisateur fournissant l\'évaluation';
$string['privacy:metadata:peercommentformat'] = 'Format de texte du commentaire sur la note donnée';
$string['privacy:metadata:preference:perpage'] = 'Nombre de travaux remis que l\'utilisateur préfère voir sur une page';
$string['privacy:metadata:preference:viewlet-allexamples-collapsed'] = 'L\'état replié/déplié de la vue « Travaux exemplaires »';
$string['privacy:metadata:preference:viewlet-allsubmissions-collapsed'] = 'L\'état replié/déplié de la vue « Rapport de remise de l\'atelier »';
$string['privacy:metadata:preference:viewlet-assessmentform-collapsed'] = 'L\'état replié/déplié de la vue « Formulaire d\'évaluation »';
$string['privacy:metadata:preference:viewlet-assignedassessments-collapsed'] = 'L\'état replié/déplié de la vue « Travaux à évaluer »';
$string['privacy:metadata:preference:viewlet-cleargrades-collapsed'] = 'L\'état replié/déplié de la vue « Boîte à outil atelier »';
$string['privacy:metadata:preference:viewlet-conclusion-collapsed'] = 'L\'état replié/déplié de la vue « Conclusion »';
$string['privacy:metadata:preference:viewlet-examples-collapsed'] = 'L\'état replié/déplié de la vue « Travaux exemplaires à évaluer »';
$string['privacy:metadata:preference:viewlet-examplesfail-collapsed'] = 'L\'état replié/déplié de la vue « Travaux exemplaires à évaluer »';
$string['privacy:metadata:preference:viewlet-gradereport-collapsed'] = 'L\'état replié/déplié de la vue « Rapport d\'évaluation de l\'atelier »';
$string['privacy:metadata:preference:viewlet-instructauthors-collapsed'] = 'L\'état replié/déplié de la vue « Instructions pour la remise du travail »';
$string['privacy:metadata:preference:viewlet-instructreviewers-collapsed'] = 'L\'état replié/déplié de la vue « Instructions pour l\'évaluation »';
$string['privacy:metadata:preference:viewlet-intro-collapsed'] = 'L\'état replié/déplié de la vue « Description »';
$string['privacy:metadata:preference:viewlet-overallfeedback-collapsed'] = 'L\'état replié/déplié de la vue « Feedback général »';
$string['privacy:metadata:preference:viewlet-ownsubmission-collapsed'] = 'L\'état replié/déplié de la vue « Votre travail remis »';
$string['privacy:metadata:preference:viewlet-publicsubmissions-collapsed'] = 'L\'état replié/déplié de la vue « Travaux remis publiés »';
$string['privacy:metadata:preference:viewlet-yourgrades-collapsed'] = 'L\'état replié/déplié de la vue « Vos notes »';
$string['privacy:metadata:published'] = 'Si le travail remis doit être publié pour tous les participants une fois l\'atelier fermé';
$string['privacy:metadata:reviewerid'] = 'Identifiant de l\'utilisateur fournissant l\'évaluation';
$string['privacy:metadata:strategy'] = 'Nom du sous-plugin de stratégie d\'évaluation interprétant les valeurs de l\'enregistrement';
$string['privacy:metadata:submissioncontent'] = 'Contenu du travail remis';
$string['privacy:metadata:submissioncontentformat'] = 'Format texte du contenu du travail remis';
$string['privacy:metadata:submissiongrade'] = 'Note combinée pour le travail remis, sous la forme d\'un nombre décimal entre 0 et 100';
$string['privacy:metadata:submissiongradeover'] = 'Valeur de remplacement donnée manuellement pour la note combinée';
$string['privacy:metadata:submissionid'] = 'Identifiant du travail remis';
$string['privacy:metadata:submissiontitle'] = 'Titre du travail remis';
$string['privacy:metadata:subsystem:corefiles'] = 'Le module Atelier enregistre des fichiers intégrés ou annexés au texte du travail remis';
$string['privacy:metadata:subsystem:coreplagiarism'] = 'Le module Atelier supporte nativement des systèmes de prévention du plagiat';
$string['privacy:metadata:timeaggregated'] = 'Date et heure du dernier calcul de la note combinée';
$string['privacy:metadata:timecreated'] = 'Date et heure de la création de cet enregistrement dans la base de données';
$string['privacy:metadata:timemodified'] = 'Date et heure de la modification de cet enregistrement dans la base de données';
$string['privacy:metadata:userid'] = 'Identifiant de l\'utilisateur pour lequel cette note combinée est calculée';
$string['privacy:metadata:weight'] = 'Pondération de l\'évaluation';
$string['privacy:metadata:workshopaggregations'] = 'Enregistre les notes combinées pour l\'évaluation';
$string['privacy:metadata:workshopassessments'] = 'Enregistre des informations sur les évaluations attribuées aux travaux remis de l\'atelier';
$string['privacy:metadata:workshopgrades'] = 'Enregistre des informations sur la manière dont les formulaires d\'évaluation ont été remplis avec des notes et des commentaires';
$string['privacy:metadata:workshopid'] = 'Identifiant de l\'activité atelier';
$string['privacy:metadata:workshopsubmissions'] = 'Enregistre des informations sur les travaux remis de l\'atelier';
$string['privacy:request:delete:content'] = 'Le contenu a été supprimé (à la demande de l\'utilisateur ou parce qu\'arrivé à échéance)';
$string['privacy:request:delete:title'] = '[Supprimé]';
$string['publishedsubmissions'] = 'Travaux remis publiés';
$string['publishsubmission'] = 'Publier travail remis';
$string['publishsubmission_help'] = 'Les travaux remis publiés sont disponibles pour les autres dès que l\'atelier est terminé.';
$string['reassess'] = 'Ré-évaluer';
$string['receivedgrades'] = 'Notes reçues';
$string['recentassessments'] = 'Évaluations de l\'atelier :';
$string['recentsubmissions'] = 'Travaux remis de l\'atelier';
$string['resetassessments'] = 'Supprimer toutes les évaluations';
$string['resetassessments_help'] = 'Vous pouvez choisir de ne supprimer que les évaluations attribuées sans toucher les travaux remis. Si des travaux doivent être supprimés, leurs évaluations seront également supprimées et cette option peut être ignorée. Ce réglage concerne également les évaluations des travaux exemplaires.';
$string['resetphase'] = 'Passer à la phase de mise en place';
$string['resetphase_help'] = 'Si ce réglage est activé, tous les ateliers seront passés à la phase de mise en place.';
$string['resetsubmissions'] = 'Supprimer tous les travaux remis';
$string['resetsubmissions_help'] = 'Tous les travaux remis et leurs évaluations vont être supprimés, à l\'exception des travaux exemplaires et de leurs évaluations.';
$string['saveandclose'] = 'Enregistrer et fermer';
$string['saveandcontinue'] = 'Enregistrer et continuer les modifications';
$string['saveandpreview'] = 'Enregistrer et prévisualiser';
$string['saveandshownext'] = 'Enregistrer et afficher la suite';
$string['search:activity'] = 'Atelier – information sur l\'activité';
$string['selfassessmentdisabled'] = 'Auto-évaluation désactivée';
$string['showingperpage'] = 'Affichage de {$a} éléments par page';
$string['showingperpagechange'] = 'Changer…';
$string['someuserswosubmission'] = 'Au moins un participant n\'a pas encore remis son travail';
$string['sortasc'] = 'Tri ascendant';
$string['sortdesc'] = 'Tri descendant';
$string['strategy'] = 'Stratégie d\'évaluation';
$string['strategy_help'] = 'La stratégie d\'évaluation détermine le formulaire d\'évaluation utilisé ainsi que la méthode d\'évaluation des travaux remis. Il y a 4 possibilités :

* Évaluation cumulative : des commentaires et une note sont donnés sur différents aspects spécifiés
* Commentaires : des commentaires sont donnés sur différents aspects spécifiés, mais sans note
* Nombre d\'erreurs : des commentaires sont donnés ainsi qu\'une évaluation oui/non sur des affirmations spécifiées
* Critères : des évaluations de niveau sont donnés sur différents critères spécifiés';
$string['strategyhaschanged'] = 'La stratégie d\'évaluation de l\'atelier a été modifiée depuis l\'ouverture de ce formulaire.';
$string['submission'] = 'Travail remis';
$string['submissionattachment'] = 'Annexe';
$string['submissionby'] = 'Travail remis par {$a}';
$string['submissioncontent'] = 'Contenu du travail remis';
$string['submissiondeleteconfirm'] = 'Voulez-vous vraiment supprimer le travail suivant ?';
$string['submissiondeleteconfirmassess'] = 'Voulez-vous vraiment supprimer le travail suivant ? Cette opération supprimera aussi {$a->count} évaluations associées à ce travail, ce qui aura un effet sur les notes des évaluateurs.';
$string['submissionend'] = 'Fin de la remise des travaux';
$string['submissionendbeforestart'] = 'Le délai pour la remise des travaux ne peut pas être antérieur à la date d\'ouverture de ces remises';
$string['submissionenddatetime'] = 'Délai de remise des travaux : {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} délai de remise';
$string['submissionendswitch'] = 'Passer à la phase suivante après le délai de remise des travaux';
$string['submissionendswitch_help'] = 'Si un délai de remise des travaux est spécifié et si cette option est activée, l\'atelier passera automatiquement à la phase d\'évaluation après le délai de remise des travaux.

Si vous activez ce réglage, il est recommandé de configurer également la méthode d\'attribution programmée. Si les travaux ne sont pas attribués, aucune évaluation ne sera possible même si l\'atelier est dans la phase d\'évaluation.';
$string['submissiongrade'] = 'Note pour le travail remis';
$string['submissiongrade_help'] = 'Ce réglage détermine la note maximale pouvant être obtenue pour le travail remis.';
$string['submissiongradeof'] = 'Note pour le travail remis (sur {$a})';
$string['submissionlastmodified'] = 'Dernière modification';
$string['submissionrequiredcontent'] = 'Veuillez saisir du texte ou ajouter un fichier.';
$string['submissionrequiredfile'] = 'Veuillez ajouter un fichier ou saisir du texte.';
$string['submissionsallocation'] = 'Attribution des travaux remis';
$string['submissionsettings'] = 'Réglages de remise des travaux';
$string['submissionsreport'] = 'Rapport de remise de l\'atelier';
$string['submissionstart'] = 'Début de la remise des travaux';
$string['submissionstartdatetime'] = 'Ouvert pour la remise des travaux dès le {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} ouverture des remises';
$string['submissiontitle'] = 'Titre';
$string['submissiontypedisabled'] = 'Ce type de remise est désactivé dans cet atelier.';
$string['submissiontypefileavailable'] = 'Fichier joint <span class="accesshide">disponible</span>';
$string['submissiontypefilerequired'] = '<span class="accesshide">Fichier joint</span> Requis';
$string['submissiontypes'] = 'Types de remise';
$string['submissiontypetextavailable'] = 'Texte en ligne <span class="accesshide">disponible</span>';
$string['submissiontypetextrequired'] = '<span class="accesshide">Texte en ligne</span> Requis';
$string['submittednotsubmitted'] = 'Remis ({$a->submitted}) / non remis ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'Méthode d\'attribution des travaux';
$string['subplugintype_workshopallocation_plural'] = 'Méthodes d\'attribution des travaux';
$string['subplugintype_workshopeval'] = 'Méthode de notation des évaluations';
$string['subplugintype_workshopeval_plural'] = 'Méthodes de notation des évaluations';
$string['subplugintype_workshopform'] = 'Stratégie d\'évaluation';
$string['subplugintype_workshopform_plural'] = 'Stratégies d\'évaluation';
$string['switchingphase'] = 'Changement de phase';
$string['switchphase'] = 'Changer de phase';
$string['switchphase10'] = 'Passer à la phase de configuration';
$string['switchphase10info'] = 'Vous allez passer cet atelier à la <strong>phase de mise en place</strong>. Durant cette phase, les participants ne peuvent pas modifier leur travail remis, ni leurs évaluations. Les enseignants peuvent mettre à profit cette phase pour modifier les réglages de l\'atelier, la stratégie de notation et peaufiner les formulaires d\'évaluation.';
$string['switchphase20'] = 'Passer à la phase de remise des travaux';
$string['switchphase20info'] = 'Vous allez passer cet atelier à la <strong>phase de remise</strong>. Durant cette phase, les étudiants peuvent remettre leur travail (dans l\'intervalle de temps défini pour la remise des travaux, le cas échéant). Les enseignants peuvent attribuer des travaux pour évaluation par les pairs.';
$string['switchphase30'] = 'Passer à la phase d\'évaluation';
$string['switchphase30auto'] = 'L\'atelier passera automatiquement dans la phase d\'évaluation après {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'Vous allez passer cet atelier à la <strong>phase d\'évaluation</strong>. Durant cette phase, les évaluateurs peuvent évaluer les travaux qui leur ont été attribués (dans l\'intervalle de temps défini pour l\'évaluation des travaux, le cas échéant).';
$string['switchphase40'] = 'Passer à la phase de notation des évaluations';
$string['switchphase40info'] = 'Vous allez passer cet atelier à la <strong>phase de notation</strong>. Durant cette phase, les participants ne peuvent pas modifier leur travail remis, ni leurs évaluations. Les enseignants peuvent utiliser les outils de notation pour calculer les notes finales et fournir un feedback aux évaluateurs.';
$string['switchphase50'] = 'Terminer l\'atelier';
$string['switchphase50info'] = 'Vous allez fermer cet atelier. Ceci permettra aux notes calculées d\'apparaître dans le carnet de notes. Les étudiants pourront voir leur travail et les évaluations qu\'ils ont reçues.';
$string['switchphaseauto'] = 'Le passage à une phase suivante a été programmé';
$string['switchphasenext'] = 'Passer à la phase suivante';
$string['taskassesspeers'] = 'Évaluer vos pairs';
$string['taskassesspeersdetails'] = 'total : {$a->total}<br />restant : {$a->todo}';
$string['taskassessself'] = 'Vous évaluer vous-même';
$string['taskconclusion'] = 'Fournir une conclusion à l\'activité';
$string['taskdone'] = 'Tâche effectuée';
$string['taskfail'] = 'Tâche échouée';
$string['taskinfo'] = 'Info de tâche';
$string['taskinstructauthors'] = 'Fournir des instructions pour la remise des travaux';
$string['taskinstructreviewers'] = 'Fournir des instructions pour l\'évaluation';
$string['taskintro'] = 'Saisir la description de l\'atelier';
$string['tasksubmit'] = 'Remettre votre travail';
$string['tasktodo'] = 'Tâche à effectuer';
$string['toolbox'] = 'Boîte à outil atelier';
$string['undersetup'] = 'L\'atelier est en cours de configuration. Veuillez attendre qu\'il passe à la phase suivante.';
$string['useexamples'] = 'Utiliser des travaux exemplaires';
$string['useexamples_desc'] = 'Des travaux exemplaires sont fournis pour tester le processus d\'évaluation';
$string['useexamples_help'] = 'Si ce réglage est activé, les participants pourront évaluer un ou plusieurs travaux exemplaires et comparer leur évaluation avec celle fournie en référence. La note n\'est pas comptée dans la note d\'évaluation.';
$string['usepeerassessment'] = 'Utiliser les évaluations par les pairs';
$string['usepeerassessment_desc'] = 'Les étudiants peuvent évaluer les travaux de leurs collègues';
$string['usepeerassessment_help'] = 'Si ce réglage est activé, des travaux de participants peuvent être attribués à d\'autres participants pour être évalués. Les participants évaluateurs recevront une note pour leurs évaluations en plus de la note pour leur propre travail.';
$string['userdatecreated'] = 'remis le <span>{$a}</span>';
$string['userdatemodified'] = 'modifié le <span>{$a}</span>';
$string['userplan'] = 'Planning de l\'atelier';
$string['userplan_help'] = 'La ligne de temps de l\'atelier affiche les différentes phases de l\'activité et la liste des tâches de chaque phase. La phase en cours est mise en évidence et les tâches accomplies sont assorties d\'une coche.';
$string['userplanaccessibilityskip'] = 'Aller directement aux tâches actuelles';
$string['userplanaccessibilitytitle'] = 'Chronologie de l\'atelier avec {$a} phases';
$string['userplancurrentphase'] = 'Phase actuelle';
$string['useselfassessment'] = 'Utiliser les auto-évaluations';
$string['useselfassessment_desc'] = 'Les étudiants peuvent évaluer leur propre travail';
$string['useselfassessment_help'] = 'Si ce réglage est activé, les participants auront la possibilité d\'évaluer leur propre travail. Ils recevront une note pour leur évaluation en plus de la note pour leur propre travail.';
$string['viewworkshopsummary'] = 'Consulter le résumé de l\'atelier';
$string['weightinfo'] = 'Pondération : {$a}';
$string['withoutsubmission'] = 'Évaluateur sans travail remis';
$string['workshop:addinstance'] = 'Ajouter un atelier';
$string['workshop:allocate'] = 'Attribuer les travaux remis pour évaluation';
$string['workshop:deletesubmissions'] = 'Supprimer des travaux remis';
$string['workshop:editdimensions'] = 'Modifier les formulaires d\'évaluation';
$string['workshop:exportsubmissions'] = 'Exporter les travaux remis';
$string['workshop:ignoredeadlines'] = 'Ignorer les restrictions de temps';
$string['workshop:manageexamples'] = 'Gérer les travaux exemplaires';
$string['workshop:overridegrades'] = 'Modifier les notes calculées';
$string['workshop:peerassess'] = 'Évaluer ses pairs';
$string['workshop:publishsubmissions'] = 'Publier les travaux remis';
$string['workshop:submit'] = 'Remettre un travail';
$string['workshop:switchphase'] = 'Changer de phase';
$string['workshop:view'] = 'Consulter l\'atelier';
$string['workshop:viewallassessments'] = 'Voir toutes les évaluations';
$string['workshop:viewallsubmissions'] = 'Voir tous les travaux remis';
$string['workshop:viewauthornames'] = 'Voir les noms des auteurs';
$string['workshop:viewauthorpublished'] = 'Voir les auteurs des travaux publiés';
$string['workshop:viewpublishedsubmissions'] = 'Voir les travaux remis publiés';
$string['workshop:viewreviewernames'] = 'Voir les noms des évaluateurs';
$string['workshopname'] = 'Nom de l\'atelier';
$string['yourassessmentfor'] = 'Votre évaluation pour {$a}';
$string['yourgrades'] = 'Vos notes';
$string['yoursubmission'] = 'Votre travail remis';
$string['yoursubmissionwithassessments'] = 'Votre travail avec ses évaluations';
