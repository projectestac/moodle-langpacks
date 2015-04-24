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
 * Strings for component 'scheduler', language 'fr', branch 'MOODLE_28_STABLE'
 *
 * @package   scheduler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Action';
$string['actions'] = 'Actions';
$string['addappointment'] = 'Ajouter un autre étudiant';
$string['addcommands'] = 'Ajouter des créneaux';
$string['addondays'] = 'Ajouter des rendez-vous';
$string['addscheduled'] = 'Ajouter un étudiant au rendez-vous';
$string['addscheduled_help'] = '<h3>Ajouter un entretien </h3>
<p>En utilisant ce lien, vous ajouterez un utilisateur à la liste de rendez-vous définie par l\'information de ce créneau. Cela peut être un moyen simple et rapide d\'attribuer un rendez-vous collectif. </p>';
$string['addsession'] = 'Ajouter des créneaux consécutifs';
$string['addsingleslot'] = 'Ajouter un créneau';
$string['addslot'] = 'Vous pouvez ajouter des créneaux horaires à tout moment.';
$string['addstudenttogroup'] = 'Ajouter un étudiant au groupe';
$string['allappointments'] = 'Tous les rendez-vous';
$string['allowgroup'] = 'Créneau exclusif - cliquer pour changer';
$string['allslotsincloseddays'] = 'Tous les créneaux sont dans des jours invalidés';
$string['allteachersgrading'] = 'Les enseignants peuvent noter tous les entretiens';
$string['allteachersgrading_desc'] = 'Lorsqu\'activé, les enseignants peuvent noter les entretiens auxquels ils ne sont pas assignés.';
$string['alreadyappointed'] = 'Impossible de fixer un entretien. Le créneau est déjà plein.';
$string['appointagroup'] = 'Rendez-vous de groupe';
$string['appointagroup_help'] = 'Choisir si vous voulez prendre rendez-vous pour vous seul ou pour un groupe entier.';
$string['appointfor'] = 'Prendre rendez-vous pour';
$string['appointformygroup'] = 'Prendre rendez-vous pour mon groupe entier';
$string['appointingstudent'] = 'Ajouter un rendez-vous';
$string['appointingstudentinnew'] = 'Ajouter un rendez-vous';
$string['appointmentmode'] = 'Option sur le mode de rendez-vous';
$string['appointmentmode_help'] = '<p>Vous pouvez choisir différentes méthodes de prise de rendez-vous. </p>
<p><ul>
<li><strong>"<emph>n</emph> rendez-vous":</strong> L\'étudiant peut choisir autant de rendez-vous qu\'il souhaite, dans la limite du nombre de rendez-vous défini dans l\'activité. Même si l\'enseignant les marque comme "vu", l\'étudiant ne sera pas autorisé à choisir un autre rendez-vous. La seule manière de redonner la possibilité à l\'étudiant de choisir un autre rendez-vous est de supprimer l\'ancien rendez-vous.</li>
<li><strong>"<emph>n</emph> rendez-vous à la fois":</strong> L\'étudiant peut choisir parmi un nombre limité de rendez-vous. Une fois le rendez-vous passé et que l\'enseignant a noté comme ayant "vu" l\'étudiant, l\'étudiant peut alors choisir un autre rendez-vous. Cependant l\'étudiant est limité aux <emph>n</emph> créneaux disponibles (non vu) restants.
</li>
</ul>
</p>';
$string['appointmentno'] = 'Séance {$a}';
$string['appointmentnotes'] = 'Notes de séance';
$string['appointments'] = 'Réservations';
$string['appointmentsummary'] = 'Rendez-vous le {$a->startdate} de {$a->starttime} à {$a->endtime} avec {$a->teacher}';
$string['appointsolo'] = 'moi seulement';
$string['appointsomeone'] = 'Ajouter un étudiant';
$string['attendable'] = 'Étudiants potentiels';
$string['attendablelbl'] = 'Nombre d\'étudiants total pouvant être reçus';
$string['attended'] = 'Étudiants reçus';
$string['attendedlbl'] = 'Nombre d\'étudiants total ayant été reçus';
$string['attendedslots'] = 'Créneaux soutenus';
$string['availableslots'] = 'Créneaux ouverts';
$string['availableslotsall'] = 'Tous les créneaux';
$string['availableslotsnotowned'] = 'Au nom des autres';
$string['availableslotsowned'] = 'Pour soi-même';
$string['bookwithteacher'] = 'Enseignant';
$string['bookwithteacher_help'] = 'Choisir un enseignant pour le rendez-vous.';
$string['break'] = 'Pause entre les créneaux';
$string['breaknotnegative'] = 'La durée de la pause ne peut pas être négative';
$string['canbook1appointment'] = 'Vous pouvez choisir un rendez-vous de plus.';
$string['canbooknappointments'] = 'Vous pouvez choisir {$a} rendez-vous de plus.';
$string['canbooknofurtherappointments'] = 'Vous ne pouvez plus choisir de rendez-vous.';
$string['canbooksingleappointment'] = 'Vous pouvez choisir un rendez-vous.';
$string['canbookunlimitedappointments'] = 'Vous pouvez choisir un certain nombre de rendez-vous.';
$string['cancelledbystudent'] = '{$a} : Rendez-vous annulé ou déplacé par un étudiant';
$string['cancelledbyteacher'] = '{$a} : Rendez-vous annulé par votre professeur';
$string['choice'] = 'Choix';
$string['chooseexisting'] = 'Choisir un créneau existant';
$string['choosingslotstart'] = 'Choisir le début';
$string['choosingslotstart_help'] = 'Changer (ou choisir) la date de début du rendez-vous. Si le rendez-vous chevauche avec d\'autres créneaux, il vous sera demandé si le créneau doit remplacer tous les autres rendez-vous conflictuels. À noter que les paramètres du nouveau créneau remplacera tous les paramètres précédents.';
$string['comments'] = 'Commentaires';
$string['complete'] = 'Complet';
$string['composeemail'] = 'Composer un courriel&nbsp;:';
$string['confirmdelete'] = 'Vous ne pourrez plus annuler la suppression. Continuer ?';
$string['conflictingslots'] = 'Il y a des créneaux horaires incompatibles :<br/>';
$string['course'] = 'Cours';
$string['csvencoding'] = 'Encodage texte du fichier';
$string['csvfieldseparator'] = 'Séparateur de champs csv';
$string['csvparms'] = 'Paramètres csv';
$string['csvrecordseparator'] = 'Séparateur d\'enregistrements csv';
$string['cumulatedduration'] = 'Durée totale des rendez-vous';
$string['date'] = 'Date';
$string['datelist'] = 'Synthèse';
$string['defaultslotduration'] = 'Durée du créneau par défaut';
$string['defaultslotduration_help'] = 'La durée par défaut (en minutes) pour les créneaux que vous ajoutez.';
$string['deleteallslots'] = 'Supprimer tous les créneaux';
$string['deleteallunusedslots'] = 'Supprimer les créneaux non utilisés';
$string['deletecommands'] = 'Supprimer les créneaux';
$string['deletemyslots'] = 'Supprimer tous mes créneaux';
$string['deleteselection'] = 'Supprimer les créneaux sélectionnés';
$string['deletetheseslots'] = 'Supprimer ces créneaux';
$string['deleteunusedslots'] = 'Supprimer mes créneaux non utilisés';
$string['department'] = 'D\'où ?';
$string['disengage'] = 'Annuler mes rendez-vous';
$string['displayfrom'] = 'Afficher le rendez-vous aux étudiants à partir de';
$string['distributetoslot'] = 'Distribuer à tout le groupe';
$string['divide'] = 'Diviser en créneaux ?';
$string['dontforgetsaveadvice'] = 'Vous avez modifié la liste temporaire des rendez-vous. N\'oubliez pas de sauvegarder ce formulaire pour enregistrer définitivement les modifications';
$string['downloadexcel'] = 'Exports vers Excel';
$string['downloads'] = 'Exports';
$string['duration'] = 'Durée';
$string['durationrange'] = 'La durée d\'un créneau doit se trouver entre {$a->min} et {$a->max} minutes.';
$string['email_applied_html'] = '<p>Un rendez-vous a été choisi le {$a->date} à {$a->time},<br/>
par l\'étudiant <a href="{$a->attendee_url}">{$a->attendee}</a> pour le cours:

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>dans le planning intitulé "<em>{$a->module}</em>" sur le site: <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string['email_applied_plain'] = 'Un rendez-vous a été pris le {$a->date} à {$a->time},
par l\'étudiant {$a->attendee} pour le cours :

{$a->course_short}: {$a->course}

dans le planning intitulé "{$a->module}" sur le site : {$a->site}.';
$string['email_applied_subject'] = '{$a->course_short}: Nouveau rendez-vous';
$string['email_cancelled_html'] = '<p>Votre rendez-vous le <strong>{$a->date}</strong> à <strong>{$a->time}</strong>,<br/>
avec l\'étudiant <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> pour le cours :</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>dans le planning intitulé "<em>{$a->module}</em>" sur le site : <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">a été annulé ou déplacé</span></strong>.</p>';
$string['email_cancelled_plain'] = 'Votre rendez-vous du {$a->date} à {$a->time},
avec l\'étudiant {$a->attendee} pour le cours&nbsp;:

{$a->course_short}&nbsp;: {$a->course}

dans le planning de «&nbsp;{$a->module}&nbsp;» sur le site&nbsp;: {$a->site}

a été annulé ou déplacé.';
$string['email_cancelled_subject'] = '{$a->course_short}: Rendez-vous annulé ou déplacé par un étudiant';
$string['emailreminder'] = 'Rappel par courriel';
$string['email_reminder_html'] = '<p>Vous avez un prochain rendez-vous le <strong>{$a->date}</strong>
de <strong>{$a->time}</strong> à <strong>{$a->endtime}</strong><br/>
avec <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>.</p>

<p>Lieu: <strong>{$a->location}</strong></p>';
$string['emailreminderondate'] = 'Envoyer un rappel le';
$string['email_reminder_plain'] = 'Vous avez un rendez-vous prévu prochainement
le {$a->date} de {$a->time} à {$a->endtime}
avec {$a->attendant}.

Lieu : {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: Rappel de rendez-vous';
$string['email_teachercancelled_html'] = '<p>Votre rendez-vous le <strong>{$a->date}</strong> à <strong>{$a->time} </strong>,<br/>
avec <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> ({$a->staffrole}) pour le cours :</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>dans le planning intitulé "<em>{$a->module}</em>" sur le site : <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">a été annulé</span></strong>. Merci de choisir un nouveau créneau horaire.</p>';
$string['email_teachercancelled_plain'] = 'Votre rendez-vous du {$a->date} à {$a->time},
avec le {$a->staffrole} {$a->attendant} pour le cours&nbsp;:

{$a->course_short}&nbsp;: {$a->course}

dans le planning intitulé «&nbsp;{$a->module}&nbsp;» sur le site&nbsp;: {$a->site}

a été annulé. Veuillez choisir un nouveau créneau, s\'il vous plait.';
$string['email_teachercancelled_subject'] = '{$a->course_short}: Rendez-vous annulé par l\'enseignant';
$string['end'] = 'Fin';
$string['enddate'] = 'Répéter les créneaux jusqu\'au';
$string['endtime'] = 'Heure de fin';
$string['event_appointmentlistviewed'] = 'Liste des rendez-vous consultée';
$string['event_bookingadded'] = 'Réservation ajoutée';
$string['event_bookingformviewed'] = 'Formulaire de réservation consulté';
$string['event_bookingremoved'] = 'Réservation supprimée';
$string['exclusive'] = 'Exclusif';
$string['exclusivity'] = 'Exclusivitée';
$string['exclusivity_help'] = '<p>Vous pouvez fixer un nombre de places limité pour une plage horaire donnée.</p>
<p>Fixer la limite à 1 (par défaut) fera basculer la plage horaire en mode exclusif.</p>
<p>Si on fixe la plage horaire à un nombre illimité (0), elle ne sera jamais prise en compte dans l’évaluation des contraintes, même si d’autres plages horaires sont exclusives ou limitées dans la même période de temps.</p>';
$string['exclusivitylockedto'] = 'Vous ne pouvez pas changer le mode du créneau lors d\'une planification. La limite du créneau de destination s\'appliquera. si le créneau est nouveau, une limite de 1 sera appliquée par défaut.';
$string['exclusivityoverload'] = 'Le créneau possède {$a} étudiants inscrits, ce qui est plus que la valeur permise par ce paramètre.';
$string['explaingeneralconfig'] = 'Ces options sont réglables au niveau site et sont applicables à tous les Rendez-vous actifs sur cette plate-forme.';
$string['exportinstructions'] = 'De préférence, enregistrez le fichier exporté sur votre disque dur avant de l\'exploiter.';
$string['finalgrade'] = 'Note de l\'activité';
$string['firstslotavailable'] = 'Le premier créneau horaire sera ouvert le : {$a}';
$string['for'] = 'pour';
$string['forbidgroup'] = 'Créneau de groupe - cliquer pour changer';
$string['forcewhenoverlap'] = 'Forcer si recouvrements';
$string['forcewhenoverlap_help'] = '<h3>Forcer la création d\'un créneau lors de chevauchement de créneaux</h3>
<p>Ce paramètre fixe le traitement des nouveaux créneaux lorsque ceux-ci chevauchent des créneaux existants.</p>
<p>Lorsqu\'activé, le créneau existant qui se fait chevauché est supprimé et le nouveau créneau créé.</p>
<p>Lorsque désactivé, le créneau existant qui se fait chevauché est conservé et le nouveau créneau <em>n\'est pas</em> créé.</p>';
$string['forcourses'] = 'Cours concernés';
$string['friday'] = 'Vendredi';
$string['generalconfig'] = 'Configuration générale';
$string['grade'] = 'Note';
$string['gradingstrategy'] = 'Stratégie de notation';
$string['gradingstrategy_help'] = 'Dans un planning où les étudiants peuvent avoir plusieurs entretiens, choisissez comment la notation doit être affichée.<br/> Le carnet de notes peut afficher soit <ul><li>la note moyenne ou</li><li>la note maximale</li></ul> que l\'étudiant a reçue.';
$string['group'] = 'groupe';
$string['groupbreakdown'] = 'Par taille de groupe';
$string['groupscheduling'] = 'Autoriser les rendez-vous collectifs';
$string['groupscheduling_desc'] = 'Permet à des groupes entiers d\'être en rendez-vous d\'un coup.
(En plus de l\'option globale, l\'option de groupe de l\'activité doit être «&nbsp;Groupes visibles&nbsp;» ou «&nbsp;Groupes séparés&nbsp;» pour activer cette fonctionnalité.)';
$string['groupsession'] = 'Rendez-vous collectif';
$string['groupsize'] = 'Taille du groupe';
$string['guardtime'] = 'Délai d\'annulation';
$string['guardtime_help'] = 'Le délai d\'annulation empêche l\'étudiant de changer son créneau horaire peu avant le début de son rendez-vous.
<p>Si le délai d\'annulation est activé et défini, par exemple, à 2 heures, alors l\'étudiant ne pourra plus modifier son rendez-vous 2 heures avant le début de celui-ci.</p>';
$string['guestscantdoanything'] = 'Les invités ne peuvent pas utiliser cette activité.';
$string['howtoaddstudents'] = 'Pour ajouter des étudiants à un planificateur global, utilisez le réglage des rôles du module.<br/>Vous pouvez également définir par les rôles les personnes qui pourront accueillir vos étudiants.';
$string['ignoreconflicts'] = 'Ignorer les conflits de plannings';
$string['ignoreconflicts_help'] = 'Si cette case est cochée, alors le créneau sera déplacé à la date et l\'heure demandées, même si d\'autres créneaux existent au même moment.
Cela peut provoquer des chevauchements d\'entretiens pour certains enseignants ou étudiants, et doit donc être utilisé avec précaution.';
$string['incourse'] = 'dans le cours';
$string['introduction'] = 'Introduction';
$string['invitation'] = 'Invitation';
$string['invitationtext'] = 'Veuillez choisir un créneau horaire pour un rendez-vous ici :';
$string['isnonexclusive'] = 'Non exclusif';
$string['lengthbreakdown'] = 'Par longueur de créneau';
$string['limited'] = 'Limité (reste {$a})';
$string['location'] = 'Lieu';
$string['location_help'] = 'Spécifier le lieu prévu pour le rendez-vous.';
$string['markasseennow'] = 'Marquer comme lu maintenant';
$string['markseen'] = 'Après le rendez-vous avec un étudiant, veuillez le marquer comme «&nbsp;Vu&nbsp;» en cochant la case adéquate dans le tableau ci-dessus.';
$string['maxgrade'] = 'Prendre la plus haute des notes';
$string['maxstudentlistsize'] = 'Taille maximum de la liste des étudiants';
$string['maxstudentlistsize_desc'] = 'La taille maximum de la liste d\'étudiants qui doivent prendre un rendez-vous, affichée dans la vue Enseignant. S\'il y a plus d\'étudiants que cela, aucune liste ne sera affichée.';
$string['maxstudentsperslot'] = 'Nombre maximum d\'étudiants par créneau';
$string['maxstudentsperslot_desc'] = 'Les créneaux de groupes / les groupes non-exclusif peuvent contenir au plus ce nombre d\'étudiant. Notez, en outre, que le paramètre «&nbsp;illimité&nbsp;» peut toujours être défini pour un créneau en particulier.';
$string['meangrade'] = 'Prendre la moyenne des notes';
$string['meetingwith'] = 'Rendez-vous avec votre';
$string['meetingwithplural'] = 'Rendez-vous avec vos';
$string['mins'] = 'minutes';
$string['minutes'] = 'minutes';
$string['minutesperslot'] = 'minutes par créneau';
$string['missingstudents'] = '{$a} étudiant(s) doivent encore prendre rendez-vous';
$string['missingstudentsmany'] = '{$a} étudiant(s) doivent encore prendre rendez-vous. La liste n\'est pas affichée à cause de sa taille trop importante.';
$string['mode'] = 'Mode';
$string['modeappointments'] = 'rendez-vous';
$string['modeintro'] = 'Les étudiants peuvent enregistrer';
$string['modeoneatatime'] = 'à la fois';
$string['modeoneonly'] = 'dans ce planning';
$string['modulename'] = 'Rendez-vous';
$string['modulename_help'] = 'L\'activité rendez-vous vous aide à planifier vos rendez-vous avec vos étudiants.

Les enseignants définissent des créneaux horaires, puis les étudiants en choisissent un sur Moodle. À leur tour, les enseignants peuvent exporter la liste des rendez-vous et optionnellement définir une note.

Les rendez-vous par groupe est disponible ; chaque créneau horaire peut accueillir plusieurs étudiants, et éventuellement il est possible de prendre rendez-vous pour des groupes entiers en même temps.';
$string['modulename_link'] = 'mod/scheduler/view';
$string['modulenameplural'] = 'Rendez-vous';
$string['monday'] = 'Lundi';
$string['move'] = 'Modifier';
$string['moveslot'] = 'Déplacer le créneau';
$string['multiplestudents'] = 'Autoriser plusieurs étudiants par créneau';
$string['myappointments'] = 'Mes rendez-vous';
$string['name'] = 'Titre du planning';
$string['needteachers'] = 'Les créneaux ne peuvent pas être ajoutés car ce cours n\'a pas d\'enseignant';
$string['negativerange'] = 'Plage négative impossible';
$string['never'] = 'Jamais';
$string['newappointment'] = '{$a} : Nouveau rendez-vous';
$string['noappointments'] = 'Aucun rendez-vous enregistré';
$string['noexistingstudents'] = 'Aucun étudiant ni étudiante';
$string['nogroups'] = 'Aucun groupe disponible';
$string['noresults'] = 'Pas de rendez-vous.';
$string['noschedulers'] = 'Personne dans le planning';
$string['noslots'] = 'Aucun créneau horaire n\'est disponible pour un rendez-vous. Veuillez contacter votre enseignant pour fixer un rendez-vous.';
$string['noslotsavailable'] = 'Aucun rendez-vous exigé, ou toutes les créneaux définis sont complets.';
$string['noslotsopennow'] = 'Aucun créneau horaire n\'est encore disponible à cette date.';
$string['nostudents'] = 'Aucun étudiant';
$string['nostudenttobook'] = 'Aucun étudiant à planifier';
$string['note'] = 'Note';
$string['noteacherforslot'] = 'Vous n\'avez pas choisi d\'enseignant';
$string['noteachershere'] = 'Aucun enseignant disponible';
$string['notenoughplaces'] = 'Désolé, il n\'y a plus de créneaux disponibles à cette date.';
$string['notifications'] = 'Notifications';
$string['notifications_help'] = 'Lorsque cette option est cochée, les enseignants et les étudiants reçoivent des notifications lorsque des rendez-vous sont pris ou annulés.';
$string['notseen'] = 'Pas vu';
$string['notselected'] = 'Vous n\'avez pas encore fait de choix';
$string['now'] = 'Maintenant';
$string['occurrences'] = 'Occurrences';
$string['on'] = 'le';
$string['onedaybefore'] = '1 jour avant le rendez-vous';
$string['oneslotadded'] = '1 créneau ajouté';
$string['oneweekbefore'] = '1 semaine avant le rendez-vous';
$string['onthemorningofappointment'] = 'Le matin du rendez-vous';
$string['otherstudents'] = 'Autres participants';
$string['overall'] = 'Vue d\'ensemble';
$string['overlappings'] = 'Collisions';
$string['pluginadministration'] = 'Administration Rendez-vous';
$string['pluginname'] = 'Rendez-vous';
$string['registeredlbl'] = 'Elèves enregistrés en rendez-vous';
$string['reminder'] = 'Rappel';
$string['remindertext'] = 'Ce message pour vous rappeler que vous n\'avez pas encore fixé votre rendez-vous. Veuillez choisir un créneau horaire aussi vite que possible ici :';
$string['remindtitle'] = '{$a}: Rappel de rendez-vous';
$string['remindwhere'] = 'Lieu du rendez-vous:';
$string['remindwithwhom'] = 'Votre rendez-vous avec :';
$string['resetappointments'] = 'Effacer les séances et les notes';
$string['resetslots'] = 'Effacer les créneaux';
$string['return'] = 'Revenir au cours';
$string['revoke'] = 'Révoquer le rendez-vous';
$string['saturday'] = 'Samedi';
$string['save'] = 'Enregistrer';
$string['savechoice'] = 'Enregistrer mon choix';
$string['savecomment'] = 'Sauvegarder le commentaire';
$string['saveseen'] = 'Mémoriser les présences';
$string['schedule'] = 'Planifier';
$string['scheduleappointment'] = 'Planifier un rendez-vous pour {$a}';
$string['schedulecancelled'] = '{$a} : Votre rendez-vous annulé ou déplacé';
$string['schedulegroups'] = 'Planifier par groupe';
$string['scheduleinnew'] = 'Planifier dans un nouveau créneau';
$string['scheduleinslot'] = 'Planifier dans un créneau';
$string['scheduler'] = 'Carnet';
$string['scheduler:addinstance'] = 'Ajouter un nouveau carnet de rendez-vous';
$string['scheduler:appoint'] = 'Prendre rendez-vous';
$string['scheduler:attend'] = 'Recevoir les rendez-vous';
$string['scheduler:canscheduletootherteachers'] = 'Prendre des rendez-vous pour d\'autres membres de l\'encadrement';
$string['scheduler:canseeotherteachersbooking'] = 'Voir les rendez-vous des autres membres de l\'encadrement';
$string['scheduler:disengage'] = 'Annuler ses rendez-vous (étudiants)';
$string['scheduler:manage'] = 'Gérer ses données de rendez-vous';
$string['scheduler:manageallappointments'] = 'Gérer toutes les données de rendez-vous';
$string['scheduler:seeotherstudentsbooking'] = 'Voir les autres étudiants du créneau';
$string['scheduler:seeotherstudentsresults'] = 'Voir les notes des autres étudiants du créneau';
$string['schedulestudents'] = 'Planifier par étudiant';
$string['seen'] = 'Vu';
$string['selectedtoomany'] = 'Vous avez sélectionné trop de créneaux. Vous ne pouvez pas en sélectionner plus de {$a}.';
$string['showemailplain'] = 'Afficher les adresses de courriel en texte clair';
$string['showemailplain_desc'] = 'Dans la vue enseignant du planning, afficher les adresses e-mails des étudiants voulant un entretien de façon textuelle, en plus des liens mailto:.';
$string['showparticipants'] = 'Afficher les participants';
$string['slotdescription'] = '{$a->status} le {$a->startdate} de {$a->starttime} à {$a->endtime}, à {$a->location} avec {$a->facilitator}.';
$string['slot_is_just_in_use'] = 'Désolé, ce créneau vient juste d\'être choisi par un autre étudiant ! Veuillez réessayer.';
$string['slots'] = 'Créneaux';
$string['slotsadded'] = '{$a} créneau(x) ajouté(s)';
$string['slottype'] = 'Exclusivité';
$string['slotupdated'] = '1 créneau modifié';
$string['slotwarning'] = '<strong>Attention :</strong> l\'horaire sélectionné pour ce créneau entre en conflit avec le ou les créneaux définis ci-dessous. Cochez la case "Ignorer les conflits de plannings " si vous voulez déplacer quand même le créneau.';
$string['staffbreakdown'] = 'Par {$a}';
$string['staffmember'] = 'Enseignant';
$string['staffrolename'] = 'Nom du rôle de l\'interlocuteur';
$string['staffrolename_help'] = 'L’étiquette pour la personne qui assiste les étudiantes et étudiants. Il ne s’agit pas nécessairement d’un «&nbsp;enseignant&nbsp;».';
$string['start'] = 'Début';
$string['startpast'] = 'Vous ne pouvez pas ouvrir un créneau horaire dans le passé';
$string['starttime'] = 'Heure de début';
$string['statistics'] = 'Statistiques';
$string['strdownloadcsvgrades'] = 'Export des notes au format cvs';
$string['strdownloadcsvslots'] = 'Export des créneaux au format cvs';
$string['strdownloadexcelsingle'] = 'Export vers une feuille excel';
$string['strdownloadexcelteachers'] = 'Export vers excel par {$a}';
$string['strdownloadodssingle'] = 'Export vers une feuille OpenDocument';
$string['strdownloadodsteachers'] = 'Export OpenDocument par {$a}';
$string['student'] = 'Étudiant';
$string['studentbreakdown'] = 'Par étudiant';
$string['studentcomments'] = 'Notes de l\'Etudiant';
$string['studentdetails'] = 'Détail de l\'étudiant';
$string['studentmultiselect'] = 'Chaque étudiant ne peut être sélectionné qu\'une seule fois dans ce créneau';
$string['studentnotes'] = 'Vos commentaires pour  <br/> ce rendez-vous';
$string['students'] = 'Étudiants';
$string['sunday'] = 'Dimanche';
$string['tab-otherappointments'] = 'Tous les rendez-vous de cet étudiant';
$string['tab-otherstudents'] = 'Tous les étudiants dans ce créneau';
$string['tab-thisappointment'] = 'Ce rendez-vous';
$string['teacher'] = 'Enseignant';
$string['thursday'] = 'Jeudi';
$string['tuesday'] = 'Mardi';
$string['unattended'] = 'Elèves à recevoir';
$string['unlimited'] = 'Sans limite';
$string['unregisteredlbl'] = 'Elèves sans rendez-vous';
$string['upcomingslots'] = 'Prochains créneaux horaires';
$string['updategrades'] = 'Enregistrer les notes';
$string['updatesingleslot'] = '';
$string['updatingappointment'] = 'Modification d\'un rendez-vous';
$string['wednesday'] = 'Mercredi';
$string['welcomebackstudent'] = 'La <strong>ligne en gras</strong> du tableau ci-dessous précise le moment du rendez-vous choisi. Vous pouvez modifier votre rendez-vous pour tout autre créneau disponible.';
$string['welcomenewstudent'] = 'Le tableau ci-dessous montre tous les créneaux horaires disponibles pour fixer un rendez-vous. Faites votre choix en cliquant sur un bouton et n\'oubliez pas de cliquer ensuite sur « Enregistrer mon choix ». Si vous devez par la suite effectuer une modification, vous pouvez revenir sur cette page.';
$string['welcomenewteacher'] = 'Cliquez sur le bouton ci-dessous pour ajouter des créneaux horaires vous permettant de rencontrer tous vos étudiants.';
$string['what'] = 'Pourquoi ?';
$string['whathappened'] = 'Notes';
$string['whatresulted'] = 'Résultat';
$string['when'] = 'Quand ?';
$string['where'] = 'Où ?';
$string['who'] = 'Avec qui ?';
$string['whosthere'] = 'Qui est là ?';
$string['xdaysbefore'] = '{$a} jours avant le créneau';
$string['xweeksbefore'] = '{$a} semaines avant le créneau';
$string['yourappointmentnote'] = 'Commentaire sur votre prestation individuelle';
$string['yourslotnotes'] = 'Commentaires généraux de séance';
