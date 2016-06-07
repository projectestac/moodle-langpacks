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
 * Strings for component 'choicegroup', language 'fr', branch 'MOODLE_30_STABLE'
 *
 * @package   choicegroup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Ajouter';
$string['add_group'] = 'Ajouter le groupe';
$string['add_grouping'] = 'Ajouter le groupement';
$string['add_groupings'] = 'Ajouter les groupements';
$string['add_groups'] = 'Ajouter les groupes';
$string['addmorechoices'] = 'Ajouter plus de choix';
$string['afterresultsviewable'] = 'Les résultats ne sont visibles qu\'après avoir fait votre choix.';
$string['allowupdate'] = 'Laisser le choix être modifié';
$string['and'] = 'et';
$string['answered'] = 'Répondu';
$string['applytoallgroups'] = 'Appliquer à tous les groupes';
$string['available_groups'] = 'Groupes disponibles';
$string['byparticipants'] = 'par {$a} participants';
$string['char_bullet_collapsed'] = '►';
$string['char_bullet_expanded'] = '▼';
$string['char_limitui_parenthesis_end'] = ')';
$string['char_limitui_parenthesis_start'] = '(';
$string['choice'] = 'Choix';
$string['choicegroup:addinstance'] = 'Ajouter un nouveau choix de groupe';
$string['choicegroup:choose'] = 'Enregistrer un choix';
$string['choicegroupclose'] = 'Jusqu\'à';
$string['choicegroup:deleteresponses'] = 'Supprimer les réponses';
$string['choicegroup:downloadresponses'] = 'Télécharger les réponses';
$string['choicegroupfull'] = 'Ce choix est complet et il n\'y a plus de places disponibles.';
$string['choicegroupname'] = 'Nom du choix de groupe';
$string['choicegroupopen'] = 'Ouvert';
$string['choicegroupoptions'] = 'Options des choix';
$string['choicegroupoptions_help'] = 'Spécifier les options que les participants ont à choisir.

Vous pouvez remplir un certain nombre d\'options. Si vous laissez quelques-unes des options vierges, elles ne seront pas affichées. Si vous avez besoin de plus d\'options, cliquez sur le bouton « Ajouter trois champs ».';
$string['choicegroup:readresponses'] = 'Lire les réponses';
$string['choicegroupsaved'] = 'Votre choix a été enregistré';
$string['choicetext'] = 'Texte';
$string['chooseaction'] = 'Choisir une action...';
$string['choosegroup'] = 'Choisir un groupe';
$string['collapse_all_groupings'] = 'Réduire tous les groupements';
$string['completionsubmit'] = 'Montrer comme complet quand l\'utilisateur fait son choix';
$string['createdate'] = 'Date de création';
$string['defaultsettings'] = 'Options par défaut';
$string['del'] = 'Supprimer';
$string['del_group'] = 'Supprimer le groupe';
$string['del_groups'] = 'Supprimer les groupes';
$string['displayhorizontal'] = 'Afficher horizontalement';
$string['displaymode'] = 'Mode d\'affichage';
$string['displayvertical'] = 'Afficher verticalement';
$string['double_click_grouping_legend'] = 'Double-clic sur groupement pour le développer/réduire.';
$string['double_click_group_legend'] = 'Double-clic sur groupe pour l\'ajouter.';
$string['event:answered'] = 'Choix effectué';
$string['event:answered_desc'] = 'L\'utilisateur ID \'{$a->userid}\' a choisi un groupe dans l\'activité choix de groupe avec numéro de module \'{$a->contextinstanceid}\'.';
$string['event:removed'] = 'Choix supprimé';
$string['event:removed_desc'] = 'L\'utilisateur ID \'{$a->userid}\' a supprimé son choix dans l\'activité choix de groupe avec numéro de module \'{$a->contextinstanceid}\'.';
$string['event:reportviewed'] = 'Rapport affiché';
$string['event:reportviewed_desc'] = 'L\'utilisateur ID \'{$a->userid}\' a affiché le rapport pour l\'activité choix de groupe avec numéro de module \'{$a->contextinstanceid}\'.';
$string['expand_all_groupings'] = 'Développer tous les groupements';
$string['expired'] = 'Désolé, cette activité est fermée depuis le {$a} et n\'est plus disponible';
$string['fillinatleastoneoption'] = 'Vous devez fournir au moins deux réponses possibles.';
$string['fillinatleasttwooptions'] = 'Vous devez spécifier au moins deux choix possibles.';
$string['full'] = '(Complet)';
$string['generallimitation'] = 'Limite générale';
$string['groupdoesntexist'] = 'Certains groupes spécifiés n\'existent pas dans ce cours. L\'enseignant devrait créer les groupes nécessaires et/ou modifier cette activité.';
$string['groupmembers'] = 'Membres du groupe';
$string['groupsheader'] = 'Groupes';
$string['havetologin'] = 'Vous devez vous connecter avant de pouvoir soumettre votre choix';
$string['hidedescription'] = 'Masquer les descriptions';
$string['limit'] = 'Limite';
$string['limitanswers'] = 'Limiter le nombre de réponses';
$string['limitanswers_help'] = 'Cette option vous permet de limiter le nombre de participants dans un groupe. Lorsque la limite est atteinte, personne d\'autre ne peut sélectionner ce groupe.

Si les limites sont désactivées, n\'importe quel nombre de participants peut s\'inscrire dans le groupe.';
$string['members/'] = 'Membres';
$string['members/max'] = 'Membres / Capacité';
$string['modulename'] = 'Choix de Groupe';
$string['modulename_help'] = 'Le module « Choix de Groupe » permet à l\'enseignant de laisser l\'étudiant choisir un groupe. L\'enseignant peut déterminer parmi quels groupes les étudiants peuvent choisir et le nombre maximal d\'étudiants dans chaque groupe';
$string['modulenameplural'] = 'Choix de Groupe';
$string['moveselectedusersto'] = 'Déplacer les utilisateurs sélectionnés pour ...';
$string['multipleenrollmentspossible'] = 'Permettre l\'inscription à plusieurs groupes';
$string['mustchooseone'] = 'Vous devez choisir une réponse avant de l\'enregistrer. Rien n\'a été sauvé.';
$string['name'] = 'Nom';
$string['neverresultsviewable'] = 'Les résultats ne sont pas visibles.';
$string['noguestchoose'] = 'Désolé, les visiteurs ne sont pas autorisés à faire des choix.';
$string['noresultsviewable'] = 'Les résultats ne sont pas actuellement visibles.';
$string['notanswered'] = 'Pas encore répondu';
$string['notenrolledchoose'] = 'Désolé, seuls les utilisateurs inscrits sont autorisés à faire des choix.';
$string['notopenyet'] = 'Désolé, cette activité n\'est pas disponible jusqu\'à {$a}';
$string['notyetresultsviewable'] = 'Les résultats ne seront visibles que lorsque cette activité sera terminée.';
$string['numberofuser'] = 'Nombre d\'utilisateurs';
$string['option'] = 'Groupe';
$string['page-mod-choice-x'] = 'Toutes les pages du module Choix du groupe';
$string['pleasesetgroups'] = 'Veuillez créer au moins deux groupes dans ce cours.';
$string['pluginadministration'] = 'Administration de Choix de Groupe';
$string['pluginname'] = 'Choix de groupe';
$string['privacy'] = 'Confidentialité des résultats';
$string['publish'] = 'Publier les résultats';
$string['publishafteranswer'] = 'Afficher les résultats aux étudiants après leur réponse';
$string['publishafterclose'] = 'Afficher les résultats pour les étudiants seulement après la fermeture du choix';
$string['publishalways'] = 'Toujours afficher les résultats aux élèves';
$string['publishanonymous'] = 'Publier les résultats anonymes, ne montre pas les noms des élèves';
$string['publishnames'] = 'Publier les résultats complets, indique les noms et leurs choix';
$string['publishnot'] = 'Ne pas publier les résultats aux élèves';
$string['removemychoicegroup'] = 'Supprimer mon choix';
$string['removeresponses'] = 'Supprimer toutes les réponses';
$string['responses'] = 'Réponses';
$string['responsesto'] = 'Réponses à {$a}';
$string['samegroupused'] = 'Un même groupe ne peut pas être utilisé plus d\'une fois.';
$string['savemychoicegroup'] = 'Enregistrer mon choix';
$string['selected_groups'] = 'Groupes sélectionnés';
$string['set_limit_for_group'] = 'Limite pour';
$string['showdescription'] = 'Afficher les descriptions.';
$string['showunanswered'] = 'Afficher une colonne pour sans réponse';
$string['skipresultgraph'] = 'Sauter le graphique de résultat';
$string['sortgroupsby'] = 'Trier les groupes par';
$string['spaceleft'] = 'espace disponible';
$string['spacesleft'] = 'espaces disponibles';
$string['systemdefault_date'] = 'Valeur par défaut du système (actuellement par la date de création des groupes)';
$string['systemdefault_name'] = 'Valeur par défaut du système (actuellement par le nom)';
$string['taken'] = 'Pris';
$string['the_value_you_entered_is_not_a_number'] = 'La valeur donnée n’est pas un nombre.';
$string['timerestrict'] = 'Restreindre la réponse à cette période';
$string['viewallresponses'] = 'Afficher {$a} réponses';
$string['withselected'] = 'Avec la sélection';
$string['yourselection'] = 'Votre sélection';
