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
 * Strings for component 'block_xp', language 'fr', branch 'MOODLE_28_STABLE'
 *
 * @package   block_xp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrulesformhelp'] = 'La dernière colonne définit la quantité de points d\'expérience acquise lorsque le critère est rempli.';
$string['basexp'] = 'Base de l\'algorithme';
$string['cachedef_filters'] = 'Filtres de niveau';
$string['changelevelformhelp'] = 'Si vous changez le nombre de niveaux, les badges de niveau personnalisés seront temporairement désactivés pour éviter d\'éventuels niveaux sans badges. Si vous changez le nombre de niveaux, une fois ce formulaire enregistré, visitez la page \'Visuels\' pour réactiver les badges personnalisés.';
$string['cheatguard'] = 'Protection anti-triche';
$string['coefxp'] = 'Coefficient de l\'algorithme';
$string['comparisonrule'] = 'Règle de comparaison';
$string['configdescription'] = 'Description à ajouter';
$string['configheader'] = 'Réglages';
$string['configtitle'] = 'Titre';
$string['congratulationsyouleveledup'] = 'Félicitations !';
$string['coolthanks'] = 'Merci c\'est cool !';
$string['courselog'] = 'Journal du cours';
$string['coursereport'] = 'Rapport du cours';
$string['courserules'] = 'Règles du cours';
$string['coursesettings'] = 'Réglages du cours';
$string['coursevisuals'] = 'Visuels de cours';
$string['createnewrulefromthisevent'] = 'Créer une nouvelle règle pour cet événement';
$string['customizelevels'] = 'Personnaliser les niveaux';
$string['defaultrulesformhelp'] = 'Ce sont les règles par défaut fournies par le plugin, Elles attribuent automatiquement des points d\'expérience par défaut et ignorent certains événements redondants. Les règles personnalisées ont priorité sur elles.';
$string['description'] = 'Description';
$string['enableinfos'] = 'Activer la page d\'infos';
$string['enableinfos_help'] = 'Lorsque ce réglage est sur «Non», les étudiants ne seront pas en mesure d\'afficher la page d\'infos.';
$string['enableladder'] = 'Activer l\'échelle';
$string['enableladder_help'] = 'Lorsque ce réglage est sur «Non», les étudiants ne seront pas en mesure d\'afficher l\'échelle.';
$string['enablelevelupnotif'] = 'Activer la notification de progression';
$string['enablelevelupnotif_help'] = 'Lorsque ce réglage est à \'Oui\', une fenêtre surgissante sera affichée pour féliciter les étudiants du nouveau niveau atteint.';
$string['enablelogging'] = 'Activer l\'historique';
$string['enablexpgain'] = 'Activer le gain d\'expérience';
$string['enablexpgain_help'] = 'Si ce réglage est à \'Non\', personne ne pourra gagner des points d\'expérience dans ce cours. Ceci peut être utile pour bloquer l\'expérience acquise, ou pour la débloquer à un certain moment.

S\'il vous plait notez que ceci peut être controlé de manière plus fine  par la permission \'block/xp:earnxp\'.';
$string['errorformvalues'] = 'l y a quelques problèmes dans les valeurs de formulaire, s\'il vous plaît corrigez-les.';
$string['errorlevelsincorrect'] = 'Le nombre minimum de niveaux est 2';
$string['errornotalllevelsbadgesprovided'] = 'Tous les badges de niveau n\'ont pas été fournis. Manquant : {$a}';
$string['errorxprequiredlowerthanpreviouslevel'] = 'L\'expérience requise est inférieure ou égale à celle du précédent niveau.';
$string['eventname'] = 'Nom de l\'événement';
$string['eventproperty'] = 'Propriété de l\'événement';
$string['eventtime'] = 'Heure de l\'événement';
$string['event_user_leveledup'] = 'Utilisateur promu';
$string['existingruleformhelp'] = 'Utilisez le premier champ pour réordonner les règles, la première règle trouvée a toujours priorité sur les autres. Pour supprimer une règle, effacez sa valeur.';
$string['for1day'] = 'Pour 1 jour';
$string['for1month'] = 'Pour 1 mois';
$string['for1week'] = 'Pour une semaine';
$string['for3days'] = 'Pour 3 jours';
$string['forever'] = 'Pour toujours';
$string['give'] = 'donne';
$string['infos'] = 'Informations';
$string['invalidxp'] = 'Valeur d\'expérience invalide';
$string['keeplogs'] = 'Conserver l\'historique';
$string['ladder'] = 'Echelle';
$string['level'] = 'Niveau';
$string['levelbadges'] = 'Badges de niveau';
$string['levelbadgesformhelp'] = 'Nommez les fichiers [niveau].[extension de fichier] par exemple 1.png, 2.jpg, etc. La taille d\'image recommandée est 100 x 100.';
$string['levelcount'] = 'Nombre de niveaux';
$string['leveldesc'] = 'Description du niveau';
$string['levels'] = 'Niveaux';
$string['levelswillbereset'] = 'Attention ! Sauver ce formulaire recalculera le niveau de chaque participant !';
$string['levelup'] = 'Progressez !';
$string['levelx'] = 'Niveau #{$a}';
$string['logging'] = 'Historiques';
$string['maxactionspertime'] = 'Nombre max d\'actions par intervalle de temps';
$string['maxactionspertime_help'] = 'Le nombre maximal d\'actions qui seront prise en compte pour le calcul de l\'expérience au cours de la période de temps donnée. Toute action ultérieure sera ignorée.';
$string['navinfos'] = 'Infos';
$string['navladder'] = 'Echelle';
$string['navlevels'] = 'Niveaux';
$string['navlog'] = 'Historique';
$string['navreport'] = 'Rapport';
$string['navrules'] = 'Règles';
$string['navsettings'] = 'Réglages';
$string['navvisuals'] = 'Visuels';
$string['participatetolevelup'] = 'Participez au cours pour gagner des points d\'expérience et progresser !';
$string['pluginname'] = 'Progessez !';
$string['progress'] = 'Progression';
$string['property:action'] = 'Action de l\'événement';
$string['property:component'] = 'Composant de l\'événement';
$string['property:crud'] = 'Event CRUD';
$string['property:eventname'] = 'Nom de l\'événement';
$string['property:target'] = 'Cible de l\'événement';
$string['rank'] = 'Rang';
$string['reallyresetdata'] = 'Really reset the levels and experience points of everyone in this course?';
$string['resetcoursedata'] = 'Réinitialiser les données du cours';
$string['rule'] = 'Règle';
$string['rule:contains'] = 'contient';
$string['rule:eq'] = 'est égal à';
$string['rule:eqs'] = 'est strictement égal à';
$string['rule:gt'] = 'est supérieur à';
$string['rule:gte'] = 'est supérieur ou égal à';
$string['rule:lt'] = 'est inférieur à';
$string['rule:lte'] = 'est inférieur ou égal à';
$string['rule:regex'] = 'correspond à l\'expression rationnelle';
$string['rulesformhelp'] = '<p> Ce plugin utilise les événements pour attribuer des points d\'expérience aux étudiants selon les actions effectuées. Vous pouvez utiliser le formulaire ci-dessous pour ajouter vos propres règles et voir celles par défaut. </p>
<p> Il est conseillé de vérifier le plugin <a href="{$a->log}">historique</a> pour identifier les événements qui sont déclenchés lorsque vous effectuez des actions dans le cours, et aussi pour en savoir plus sur les événements eux-mêmes: <a href="{$a->list}">liste de tous les événements</a> , <a href="{$a->doc}">documentation développeur</a> . </p>
<p> Enfin, veuillez noter que le plugin ignore toujours:
<ul>
    <li> Les actions effectuées par les administrateurs, invités ou non connectés. </li>
    <li> Les actions réalisées par des utilisateurs n\'ayant pas la permission <em>block/xp:earnxp</em>.</li>
    <li> Les actions répétées dans un court intervalle de temps, pour éviter la tricherie. </li>
    <li> Et les événements de niveau d\'éducation différent de <em>participation.</em> </li>
</ul>
</p>';
$string['timebetweensameactions'] = 'Temps requis entre deux actions identiques';
$string['timebetweensameactions_help'] = 'Temps minimum nécessaire en secondes entre les actions identiques. Une action est considéré comme identique si elle concerne le même contexte et le même l\'objet, la lecture d\'un message sur le forum sera considérée comme identique si le même message est relu.';
$string['timeformaxactions'] = 'Temps max pour un nombre max d\'actions';
$string['timeformaxactions_help'] = 'Le laps de temps (en secondes) pendant lequel l\'utilisateur ne doit pas excéder un nombre maximal d\'actions.';
$string['updateandpreview'] = 'Mise à jour et aperçu';
$string['usealgo'] = 'Utiliser l\'algorithme';
$string['usecustomlevelbadges'] = 'Utiliser les badges de niveau personnalisés';
$string['usecustomlevelbadges_help'] = 'Lorsque cette option est sur \'Oui\', vous devez fournir une image pour chaque niveau.';
$string['value'] = 'Valeur';
$string['valuessaved'] = 'Les valeurs ont été enregistrées avec succès';
$string['viewtheladder'] = 'Voir l\'échelle';
$string['when'] = 'Quand';
$string['xp'] = 'Points d\'expérience';
$string['xp:addinstance'] = 'Ajouter un nouveau bloc XP';
$string['xp:earnxp'] = 'Gagner des points d\'expérience';
$string['xpgaindisabled'] = 'Gain d\'expérience désactivé';
$string['xprequired'] = 'Expérience requise';
$string['youreachedlevela'] = 'Vous avez atteint le niveau {$a} !';
