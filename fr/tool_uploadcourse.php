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
 * Strings for component 'tool_uploadcourse', language 'fr', version '4.4'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permettre les suppressions';
$string['allowdeletes_help'] = 'Ce réglage détermine si le champ supprimer est accepté ou non.';
$string['allowrenames'] = 'Permettre les renommages';
$string['allowrenames_help'] = 'Ce réglage détermine si le champ renommer est accepté ou non.';
$string['allowresets'] = 'Permettre les réinitialisations';
$string['allowresets_help'] = 'Ce réglage détermine si le champ réinitialiser est accepté ou non.';
$string['cachedef_helper'] = 'Cache de l’assistant';
$string['cannotdeletecoursenotexist'] = 'Impossible de supprimer un cours qui n’existe pas';
$string['cannotforcelang'] = 'Pas les permissions requises pour imposer la langue dans ce cours.';
$string['cannotgenerateshortnameupdatemode'] = 'Impossible de générer un nom abrégé lorsque la modification est autorisée';
$string['cannotreadbackupfile'] = 'Impossible de lire le fichier de sauvegarde';
$string['cannotrenamecoursenotexist'] = 'Impossible de renommer un cours qui n’existe pas';
$string['cannotrenameidnumberconflict'] = 'Impossible de renommer le cours, l’identifiant est en conflit avec celui d’un cours existant';
$string['cannotrenameshortnamealreadyinuse'] = 'Impossible de renommer le cours, car le nom abrégé est déjà utilisé';
$string['cannotupdatefrontpage'] = 'Il n’est pas autorisé de modifier la page d’accueil';
$string['canonlyrenameinupdatemode'] = 'Le renommage n’est autorisé que lors de la modification';
$string['canonlyresetcourseinupdatemode'] = 'La réinitialisation n’est autorisée que lors de la modification';
$string['couldnotresolvecatgorybyid'] = 'Impossible de trouver la catégorie à partir de l’identifiant';
$string['couldnotresolvecatgorybyidnumber'] = 'Impossible de trouver la catégorie à partir du numéro d’identification';
$string['couldnotresolvecatgorybypath'] = 'Impossible de trouver la catégorie à partir du chemin';
$string['coursecreated'] = 'Cours créé';
$string['coursedeleted'] = 'Cours supprimé';
$string['coursedeletionnotallowed'] = 'La suppression de cours n’est pas autorisée';
$string['coursedoesnotexistandcreatenotallowed'] = 'Le cours n’existe pas et la création de cours n’est pas autorisée';
$string['courseexistsanduploadnotallowed'] = 'Le cours existe et la modification n’est pas autorisée';
$string['coursefile'] = 'Fichier';
$string['coursefile_help'] = 'Ce fichier doit être en format CSV';
$string['courseidnumberincremented'] = 'Numéro d’identification du cours incrémenté de {$a->from} à {$a->to}';
$string['courseprocess'] = 'Traitement du cours';
$string['courserenamed'] = 'Cours renommé';
$string['courserenamingnotallowed'] = 'Le renommage des cours n’est pas autorisé';
$string['coursereset'] = 'Cours réinitialisé';
$string['courseresetnotallowed'] = 'La réinitialisation de cours n’est pas autorisée';
$string['courserestored'] = 'Cours restauré';
$string['coursescreated'] = 'Cours créés : {$a}';
$string['coursesdeleted'] = 'Cours supprimés : {$a}';
$string['courseserrors'] = 'Erreurs dans les cours : {$a}';
$string['courseshortnamegenerated'] = 'Noms abrégés de cours générés : {$a}';
$string['courseshortnameincremented'] = 'Noms abrégés de cours incrémentés de {$a->from} à {$a->to}';
$string['coursestotal'] = 'Total des cours du fichier déposé : {$a}';
$string['coursesupdated'] = 'Cours modifiés : {$a}';
$string['coursetemplatename'] = 'Cours existant modèle';
$string['coursetemplatename_help'] = 'Indiquez ici le nom abrégé d’un cours existant à utiliser comme modèle pour tous les cours créés.';
$string['coursetorestorefromdoesnotexist'] = 'Le cours indiqué pour servir de modèle n’existe pas';
$string['courseupdated'] = 'Cours modifié';
$string['courseuploadnotallowed'] = 'Vous n’avez pas les autorisations requises pour déposer des cours dans la catégorie {$a}';
$string['courseuploadupdatenotallowed'] = 'Un cours avec ce nom abrégé existe, mais vous n’avez pas les autorisations requises pour utiliser l’outil de dépôt pour sa mise à jour.';
$string['createall'] = 'Tout créer, en incrémentant si nécessaire le nom abrégé';
$string['createnew'] = 'Créer uniquement les nouveaux cours et passer les cours existants';
$string['createorupdate'] = 'Créer de nouveaux cours ou modifier les cours existants';
$string['csvdelimiter'] = 'Séparateur CSV';
$string['csvdelimiter_help'] = 'Le caractère de séparation des données de chaque enregistrement.';
$string['csvfileerror'] = 'Le format de ce fichier CSV comporte des erreurs. Veuillez vérifier que le nombre des champs d’en-tête et celui des champs des lignes suivantes correspondent et que le séparateur et l’encodage du fichier soient correctement définis : {$a}';
$string['csvline'] = 'Ligne';
$string['customfieldinvalid'] = 'Le champ personnalisé « {$a} » est vide ou contient des données non valides';
$string['defaultvalues'] = 'Réglages par défaut pour les cours';
$string['defaultvaluescustomfieldcategory'] = 'Valeurs par défaut pour « {$a} »';
$string['downloadcontentnotallowed'] = 'Configuration du téléchargement des contenus de cours pas autorisée';
$string['encoding'] = 'Encodage';
$string['encoding_help'] = 'Encodage du fichier CSV';
$string['errorcannotcreateorupdateenrolment'] = 'Impossible de créer ou modifier la méthode d’inscription « {$a} »';
$string['errorcannotdeleteenrolment'] = 'Impossible de supprimer la méthode d’inscription « {$a} »';
$string['errorcannotdisableenrolment'] = 'Impossible de désactiver la méthode d’inscription « {$a} »';
$string['errorunsupportedmethod'] = 'La méthode d’inscription « {$a} » n’est pas prise en charge par fichier CSV';
$string['errorwhiledeletingcourse'] = 'Erreur lors de la suppression du cours';
$string['errorwhilerestoringcourse'] = 'Erreur lors de la restauration du cours';
$string['generatedshortnamealreadyinuse'] = 'Le nom abrégé généré existe déjà';
$string['generatedshortnameinvalid'] = 'Le nom abrégé généré n’est pas valide';
$string['id'] = 'Id';
$string['idnumberalreadyinuse'] = 'Cet identifiant est déjà utilisé par un cours';
$string['importoptions'] = 'Options d’importation';
$string['invalidbackupfile'] = 'Fichier de sauvegarde non valide';
$string['invalidcourseformat'] = 'Format de cours non valide';
$string['invalidcsvfile'] = 'Fichier CSV non valide';
$string['invaliddownloadcontent'] = 'Valeur non valide pour le téléchargement de contenus de cours';
$string['invalidencoding'] = 'Encodage non valide';
$string['invalideupdatemode'] = 'Mode de modification sélectionné non valide';
$string['invalidfullnametoolong'] = 'Le nom complet du champ est limité à {$a} caractères';
$string['invalidmode'] = 'Mode sélectionné non valide';
$string['invalidroles'] = 'Noms de rôles non valides : {$a}';
$string['invalidshortname'] = 'Nom abrégé non valide';
$string['invalidshortnametoolong'] = 'Le nom abrégé du champ est limité à {$a} caractères';
$string['invalidvisibilitymode'] = 'Mode d’affichage non valide';
$string['missingmandatoryfields'] = 'Valeur manquante pour des champs requis : {$a}';
$string['missingshortnamenotemplate'] = 'Nom abrégé manquant et modèle de nom abrégé non défini';
$string['mode'] = 'Mode de traitement';
$string['mode_help'] = 'Ce réglage permet de spécifier si les cours peuvent être créés et/ou modifiés.';
$string['nochanges'] = 'Aucun changement';
$string['pluginname'] = 'Déposer des cours';
$string['preview'] = 'Prévisualiser';
$string['privacy:metadata'] = 'Le plugin Déposer des cours n’enregistre aucune donnée personnelle.';
$string['reset'] = 'Réinitialiser le cours';
$string['reset_help'] = 'Détermine s’il faut réinitialiser le cours après sa création ou modification.';
$string['restoreafterimport'] = 'Restaurer après importation';
$string['result'] = 'Résultat';
$string['rowpreviewnum'] = 'Rangées à prévisualiser';
$string['rowpreviewnum_help'] = 'Le nombre de rangées du fichier CSV à prévisualiser sur la page suivante. Cette option a pour but de limiter la taille de la page suivante.';
$string['shortnametemplate'] = 'Modèle pour génération des noms abrégés';
$string['shortnametemplate_help'] = 'Le nom abrégé du cours est affiché dans la navigation. Vous pouvez indiquer ici un modèle pour ces noms abrégés avec des variables (%f = nom complet, %i = identifiant) ou saisir une valeur initiale qui sera incrémentée';
$string['templatefile'] = 'Fichier de sauvegarde de cours modèle';
$string['templatefile_help'] = 'Le fichier de cours sélectionné sera utilisé comme modèle pour tous les cours créés.';
$string['unknownimportmode'] = 'Mode d’importation inconnu';
$string['updatemissing'] = 'Compléter les éléments manquants à partir du fichier CSV et des réglages par défaut';
$string['updatemode'] = 'Mode de modification';
$string['updatemode_help'] = 'Si vous autorisez la modification des cours, vous devez aussi indiquer comment les modifier.';
$string['updatemodedoessettonothing'] = 'Le mode de modification choisi ne permet pas la modification';
$string['updateonly'] = 'Ne modifier que les cours existants';
$string['updatewithdataonly'] = 'Ne modifier qu’à partir des données CSV';
$string['updatewithdataordefaults'] = 'Modifier à partir des données CSV et des réglages par défaut';
$string['uploadcourse:use'] = 'Utiliser l’outil de dépôt de cours';
$string['uploadcourses'] = 'Modifier des cours par lots';
$string['uploadcourses_help'] = 'Des cours peuvent être créés ou modifiés en déposant un fichier texte. Le format de ce fichier doit être le suivant :

* chaque ligne du fichier contient un seul enregistrement ;
* chaque enregistrement est constitué d’une série de données séparées par le caractère de séparation sélectionné ;
* le premier enregistrement contient la liste des noms des champs définissant le format du reste du fichier ;
* les champs requis sont le nom abrégé (shortname), le nom complet (fullname) et la catégorie du cours (category).';
$string['uploadcoursespreview'] = 'Prévisualisation du fichier de cours déposé';
$string['uploadcoursesresult'] = 'Résultats du traitement du fichier de cours';
