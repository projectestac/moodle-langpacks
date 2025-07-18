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
 * Strings for component 'group', language 'fr', version '4.4'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Ajouté par {$a}';
$string['addgroup'] = 'Ajouter l’utilisateur à un groupe';
$string['addgroupstogrouping'] = 'Ajouter le groupe au groupement';
$string['addgroupstogroupings'] = 'Ajouter/retirer des groupes';
$string['adduserstogroup'] = 'Ajouter/retirer des utilisateurs';
$string['allocateby'] = 'Répartir les membres';
$string['anygrouping'] = '[N’importe quel groupement]';
$string['autocreategroups'] = 'Créer des groupes automatiquement';
$string['backtogroupings'] = 'Retour aux groupements';
$string['backtogroups'] = 'Retour aux groupes';
$string['badnamingscheme'] = 'Doit contenir exactement un caractère « @ » ou un « # »';
$string['byfirstname'] = 'Alphabétiquement par prénom, puis nom';
$string['byidnumber'] = 'Alphabétiquement par identifiant';
$string['bylastname'] = 'Alphabétiquement par nom, puis prénom';
$string['createautomaticgrouping'] = 'Créer groupement automatique';
$string['creategroup'] = 'Créer un groupe';
$string['creategrouping'] = 'Créer un groupement';
$string['creategroupinselectedgrouping'] = 'Créer un groupe dans le groupement';
$string['createingrouping'] = 'Groupement de groupes créés automatiquement';
$string['createorphangroup'] = 'Créer un groupe orphelin';
$string['csvdelimiter'] = 'Séparateur CSV';
$string['databaseupgradegroups'] = 'La version des groupes est maintenant {$a}';
$string['defaultgrouping'] = 'Groupement par défaut';
$string['defaultgroupingname'] = 'Groupement';
$string['defaultgroupname'] = 'Groupe';
$string['deleteallgroupings'] = 'Supprimer tous les groupements';
$string['deleteallgroups'] = 'Supprimer tous les groupes';
$string['deletegroupconfirm'] = 'Voulez-vous vraiment supprimer le groupe « {$a} » ?';
$string['deletegrouping'] = 'Supprimer groupement';
$string['deletegroupingconfirm'] = 'Voulez-vous vraiment supprimer le groupement « {$a} » ? (les groupes dans ce groupement ne seront pas supprimés.)';
$string['deletegroupsconfirm'] = 'Voulez-vous vraiment supprimer les groupes suivants ?';
$string['deleteselectedgroup'] = 'Supprimer';
$string['disablemessagingaction'] = 'Désactiver la messagerie';
$string['editgroupingsettings'] = 'Modifier les réglages du groupement';
$string['editgroupsettings'] = 'Modifier les réglages du groupe';
$string['editusersgroupsa'] = 'Modifier les groupes de « {$a} »';
$string['enablemessaging'] = 'Messagerie de groupe';
$string['enablemessaging_help'] = 'Si ce réglage est activé, les membres du groupe peuvent envoyer des messages personnels aux autres membres de leur groupe.';
$string['enablemessagingaction'] = 'Activer la messagerie';
$string['encoding'] = 'Encodage';
$string['enrolmentkey'] = 'Clef d’inscription';
$string['enrolmentkey_help'] = 'Une clef d’inscription permet de donner accès à un cours aux seuls utilisateurs la détenant. Si une clef d’inscription de groupe est spécifiée, non seulement cette clef permettra l’accès au cours, mais elle inscrira simultanément l’utilisateur utilisant cette clef comme membre de ce groupe.

Remarque : le réglage pour les clefs d’inscription de groupe doit être également activé dans les réglages d’auto-inscription, et une clef d’inscription doit en outre être spécifiée pour le cours.';
$string['enrolmentkeyalreadyinuse'] = 'Cette clef d’inscription est déjà utilisée pour un autre groupe.';
$string['erroraddremoveuser'] = 'Erreur lors de l’ajout ou du retrait de l’utilisateur {$a} du groupe';
$string['erroraddtogroup'] = 'Valeur non valide pour addtogroup. La valeur doit être 0 pour pas de groupe ou 1 pour une nouveau groupe à créer.';
$string['erroraddtogroupgroupname'] = 'Le groupname ne peut pas être spécifié lorsque addtogroup est spécifié.';
$string['erroreditgroup'] = 'Erreur lors de la création ou de la modification du groupe {$a}';
$string['erroreditgrouping'] = 'Erreur lors de la création ou de la modification du groupement {$a}';
$string['errorinvalidgroup'] = 'Groupe {$a} non valide';
$string['errorremovenotpermitted'] = 'Vous n’avez pas les permissions requises pour retirer le membre du groupe {$a} ajouté automatiquement';
$string['errorselectone'] = 'Veuillez ne sélectionner qu’un groupe avant de choisir cette option';
$string['errorselectsome'] = 'Veuillez sélectionner un ou plusieurs groupes avant de choisir cette option';
$string['evenallocation'] = 'Remarque : pour obtenir une répartition équilibrée des groupes, le nombre réel des membres par groupe a été adapté. Il différera du nombre que vous avez indiqué.';
$string['eventgroupcreated'] = 'Groupe créé';
$string['eventgroupdeleted'] = 'Groupe supprimé';
$string['eventgroupingcreated'] = 'Groupement créé';
$string['eventgroupingdeleted'] = 'Groupement supprimé';
$string['eventgroupinggroupassigned'] = 'Groupe attribué à un groupement';
$string['eventgroupinggroupunassigned'] = 'Groupe retiré d’un groupement';
$string['eventgroupingupdated'] = 'Groupement modifié';
$string['eventgroupmemberadded'] = 'Membre ajouté à un groupe';
$string['eventgroupmemberremoved'] = 'Membre retiré d’un groupe';
$string['eventgroupupdated'] = 'Groupe modifié';
$string['existingmembers'] = 'Membres actuels : {$a}';
$string['exportgroupsgroupings'] = 'Télécharger les groupes et groupements sous';
$string['filtergroups'] = 'Filtrer les groupes par :';
$string['group'] = 'Groupe';
$string['groupaddedsuccesfully'] = 'Le groupe {$a} a été ajouté';
$string['groupaddedtogroupingsuccesfully'] = 'Groupe {$a->groupname} ajouté au groupement {$a->groupingname}';
$string['groupby'] = 'Création automatique basée sur';
$string['groupdescription'] = 'Description du groupe';
$string['groupinfo'] = 'Information sur le groupe sélectionné';
$string['groupinfomembers'] = 'Information sur les membres sélectionnés';
$string['groupinfopeople'] = 'Information sur les personnes sélectionnées';
$string['grouping'] = 'Groupement';
$string['grouping_help'] = 'Un groupement est un ensemble de groupes dans un cours. Si un groupement est sélectionné, les utilisateurs dans les groupes du groupement pourront travailler ensemble.';
$string['groupingaddedsuccesfully'] = 'Groupement {$a} ajouté';
$string['groupingdescription'] = 'Description du groupement';
$string['groupingname'] = 'Nom du groupement';
$string['groupingnameexists'] = 'Le nom de groupement « {$a} » existe déjà dans ce cours. Veuillez en choisir un autre.';
$string['groupings'] = 'Groupements';
$string['groupingsection'] = 'Accès au groupement';
$string['groupingsection_help'] = 'Un groupement est un ensemble de groupes d’un cours. Si un groupement est sélectionné ici, seuls les participants faisant partie de groupes dans ce groupement auront accès à cette section.';
$string['groupingsonly'] = 'Groupements seuls';
$string['groupmember'] = 'Membre du groupe';
$string['groupmemberdesc'] = 'Rôle par défaut pour un membre d’un groupe.';
$string['groupmembers'] = 'Membres du groupe';
$string['groupmemberssee'] = 'Voir les membres du groupe';
$string['groupmembersselected'] = 'Membres du groupe sélectionné';
$string['groupmode'] = 'Mode de groupe';
$string['groupmode_groupsseparate_help'] = 'Les étudiants sont séparés en groupes et ne peuvent voir que le travail de leur groupe.';
$string['groupmode_groupsvisible_help'] = 'Les étudiants sont séparés en groupes, mais peuvent aussi voir le travail des autres groupes';
$string['groupmode_help'] = '* Pas de groupe.
* Groupes séparés : les étudiants sont séparés en groupes et ne peuvent voir que le travail de leur groupe.
* Groupes visibles : les étudiants sont séparés en groupes, mais peuvent aussi voir le travail des autres groupes.

Le mode de groupe défini au niveau du cours est le mode par défaut pour toutes les activités. Si le mode de groupe est imposé au niveau du cours, il ne peut pas être modifié dans une activité.';
$string['groupmodeforce'] = 'Imposer le mode de groupe';
$string['groupmodeforce_help'] = 'Le mode de groupe est imposé pour toutes les activités et ne peut pas être changé dans une activité.';
$string['groupmy'] = 'Mon groupe';
$string['groupname'] = 'Nom du groupe';
$string['groupnameexists'] = 'Le nom de groupe « {$a} » existe déjà dans ce cours. Veuillez en choisir un autre.';
$string['groupnotamember'] = 'Désolé, vous n’êtes pas membre de ce groupe';
$string['groups'] = 'Groupes';
$string['groupscount'] = 'Groupes ({$a})';
$string['groupsettingsheader'] = 'Groupes';
$string['groupsgroupings'] = 'Groupes & groupements';
$string['groupsinselectedgrouping'] = 'Groupes dans';
$string['groupsnone'] = 'Aucun groupe';
$string['groupsonly'] = 'Seulement les groupes';
$string['groupspreview'] = 'Prévisualisation des groupes';
$string['groupsseparate'] = 'Groupes séparés';
$string['groupsvisible'] = 'Groupes visibles';
$string['grouptemplate'] = 'Groupe @';
$string['importgroups'] = 'Importer des groupes';
$string['importgroups_help'] = 'Les groupes peuvent être importés depuis un fichier texte. Le format de ce fichier doit être le suivant :

* chaque ligne du fichier contient un enregistrement ;
* chaque enregistrement est constitué d’une série de données séparées par le caractère de séparation sélectionné ;
* le premier enregistrement contient la liste des noms des champs définissant le format du reste du fichier ;
* le seul champ requis est groupname ;
* les champs optionnels sont groupidnumber, description, enrolmentkey, groupingname, enablemessaging ;
* les noms des champs ne doivent pas être traduits.';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'N’inclure que les inscription actives';
$string['includeonlyactiveenrol_help'] = 'Si ce réglage est activé, les utilisateurs suspendus ne seront pas inclus dans les groupes.';
$string['javascriptrequired'] = 'Cette page requiert l’activation de Javascript.';
$string['manageactions'] = 'Gérer';
$string['memberofgroup'] = 'Membre du groupe : {$a}';
$string['members'] = 'Membres par groupe';
$string['membersofselectedgroup'] = 'Membres de :';
$string['messagingdisabled'] = 'Messagerie désactivée dans {$a} groupe(s)';
$string['messagingenabled'] = 'Messagerie activée dans {$a} groupe(s)';
$string['mygroups'] = 'Mes groupes';
$string['namingscheme'] = 'Schéma de dénomination';
$string['namingscheme_help'] = 'Le caractère arobase (@) peut être utilisé pour créer des groupes contenant des lettres. Par exemple, « Groupe @ » générera des groupes nommés « Groupe A », « Groupe B », « Groupe C », etc.

Le caractère dièse (#) peut être utilisé pour créer des groupes contenant des nombres. Par exemple, « Groupe # » générera des groupes nommés « Groupe 1 », « Groupe 2 », « Groupe 3 », etc.';
$string['newgrouping'] = 'Nouveau groupement';
$string['newpicture'] = 'Nouvelle image';
$string['newpicture_help'] = 'Sélectionnez une image en format JPG ou PNG. L’image sera redimensionnée en un carré de 100x100 pixels.';
$string['noallocation'] = 'Pas d’attribution';
$string['nogroup'] = 'Aucun groupe';
$string['nogrouping'] = 'Pas de groupement';
$string['nogroups'] = 'Il n’y a pas encore de groupe dans ce cours';
$string['nogroupsassigned'] = 'Aucun groupe n’a été attribué';
$string['nopermissionforcreation'] = 'Impossible de créer le groupe « {$a} », car vous n’avez pas les permissions requises';
$string['nosmallgroups'] = 'Empêcher un petit groupe pour terminer';
$string['notingroup'] = 'Ignorer les utilisateurs dans des groupes';
$string['notingrouping'] = 'Membre d’aucun groupement';
$string['notingrouplist'] = 'Membre d’aucun groupe';
$string['nousersinrole'] = 'Il n’y a pas d’utilisateur adéquat dans le rôle sélectionné';
$string['number'] = 'Nombre de groupes/membres';
$string['numgroups'] = 'Nombre de groupes';
$string['nummembers'] = 'Membres par groupe';
$string['othergroups'] = 'Autres groupes';
$string['overview'] = 'Vue d’ensemble';
$string['participation'] = 'Afficher le groupe dans un menu déroulant pour les activités en mode groupe';
$string['participation_help'] = 'Si ce réglage est activé, les membres peuvent sélectionner ce groupe pour les activités en mode groupes séparés ou groupes visibles. Ce réglage n’est applicable que si l’affiliation au groupe est visible ou seulement visible pour les membres.';
$string['participationshort'] = 'Participation';
$string['potentialmembers'] = 'Membres potentiels : {$a}';
$string['potentialmembs'] = 'Membres potentiels';
$string['printerfriendly'] = 'Affichage pour impression';
$string['privacy:metadata:core_message'] = 'Les conversations de groupe';
$string['privacy:metadata:groups'] = 'Un enregistrement des affiliations à des groupes.';
$string['privacy:metadata:groups:groupid'] = 'L’identifiant du groupe.';
$string['privacy:metadata:groups:timeadded'] = 'L’horodatage de l’ajout de l’utilisateur au groupe.';
$string['privacy:metadata:groups:userid'] = 'L’identifiant de l’utilisateur qui est affilié au groupe.';
$string['random'] = 'Aléatoirement';
$string['removefromgroup'] = 'Retirer un utilisateur du groupe {$a}';
$string['removefromgroupconfirm'] = 'Voulez-vous vraiment retirer l’utilisateur « {$a->user} » du groupe « {$a->group} » ?';
$string['removegroupfromselectedgrouping'] = 'Retirer le groupe du groupement';
$string['removegroupingsmembers'] = 'Retirer tous les groupes des groupements';
$string['removegroupsmembers'] = 'Retirer tous les membres des groupes';
$string['removeselectedusers'] = 'Retirer les utilisateurs sélectionnés';
$string['selectfromgroup'] = 'Sélectionner les membres du groupe';
$string['selectfromgrouping'] = 'Sélectionner les membres du groupement';
$string['selectfromrole'] = 'Sélectionnez des utilisateurs avec le rôle';
$string['showgroupsingrouping'] = 'Afficher les groupes du groupement';
$string['showmembersforgroup'] = 'Afficher les membres du groupe';
$string['toomanygroups'] = 'Il n’y a pas assez d’utilisateurs pour répartir ce nombre de groupes. Il n’y a que {$a} utilisateurs ayant le rôle sélectionné.';
$string['usercount'] = 'Nombre d’utilisateurs';
$string['usercounttotal'] = 'Nombre d’utilisateurs ({$a})';
$string['usergroupmembership'] = 'Groupes dont l’utilisateur sélectionné fait partie :';
$string['visibility'] = 'Visibilité de l’affiliation au groupe';
$string['visibility_help'] = '* Visible - tous les participants au cours peuvent voir qui est membre du groupe
* Visible seulement pour les membres - les participants au cours qui ne sont pas membre du groupe ne peuvent pas voir le groupe, ni ses membres.
* Ne voir que sa propre affiliation - un utilisateur peut voir qu’il fait partie du groupe, mais ne peut pas voir d’autres membres du groupe
* Caché - seuls les enseignants peuvent voir le groupe et ses membres

Les utilisateurs avec la capacité de voir les groupes cachés peuvent toujours voir l’affiliation à un groupe.

Ce réglage ne peut pas être modifié dès que le groupe compte des membres.';
$string['visibilityall'] = 'Visible';
$string['visibilitymembers'] = 'Visible seulement pour les membres';
$string['visibilitynone'] = 'Caché';
$string['visibilityown'] = 'Ne voir que sa propre affiliation';
$string['visibilityshort'] = 'Visibilité';
$string['withselected'] = 'Avec la sélection';
