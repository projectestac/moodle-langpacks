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
 * Strings for component 'publication', language 'fr', version '4.4'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Ajouter des fichiers';
$string['allfiles'] = 'Fichiers déposés';
$string['allowedfiletypes'] = 'Types de fichiers acceptés';
$string['allowedfiletypes_err'] = 'Valeur incorrecte ! Extensions ou séparateurs non valides';
$string['allowedfiletypes_help'] = 'Les types de fichiers acceptés peuvent être limités en entrant une liste de mimetypes séparée par des virgules (par exemple : « video/mp4, audio/mp3, image/png, image/jpeg ») ou une liste d’extension de fichier avec le point (par exemple : « .png, .jpg »). Si le champs est laissé vide, tous les type sont autorisés.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Les détails et formulaire d’envoi du devoir seront disponibles depuis <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Date d’ouverture';
$string['allowsubmissionsfromdate_help'] = 'Si cette option est activée, les participants ne peuvent pas déposer leurs fichiers avant cette date. Si l’option est désactivée, les participants peuvent commencer à déposer leurs fichiers dès maintenant.';
$string['allowsubmissionsfromdate_import'] = 'Approbation depuis';
$string['allowsubmissionsfromdate_upload'] = 'Dépôt à partir de';
$string['allowsubmissionsfromdatesummary'] = 'Le devoir acceptera des dépôts depuis <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Toujours montrer la description';
$string['alwaysshowdescription_help'] = 'Si désactivé, la description du devoir ci-dessus ne deviendra visible que dès la date « Dépôt/Approbation à partir de ».';
$string['approval_required'] = 'Décision en attente';
$string['approval_timeover'] = 'Vous ne pouvez modifier votre approbation que durant la période de modification.';
$string['approvalchange'] = 'Statut d’approbation modifié';
$string['approvalfromdate'] = 'Approbation à partir de';
$string['approvalfromdate_help'] = 'Le statut d’approbation ne peut pas être modifié avant cette date. Ce paramètre n’est pertinent que lorsque l’approbation par l’étudiant ou le groupe n’est pas automatique.';
$string['approvalsettings'] = 'Paramètres de publication';
$string['approvaltodate'] = 'Approbation jusqu’à';
$string['approvaltodate_help'] = 'Le statut d’approbation ne peut pas être modifié après cette date. Ce paramètre n’est pertinent que lorsque l’approbation par l’étudiant ou le groupe n’est pas automatique.';
$string['approvaltodatevalidation'] = 'La date d’approbation « jusqu’à » doit être postérieure à la date d’approbation « à partir de »';
$string['approved'] = 'Approuvé';
$string['approveusers'] = 'Approuver';
$string['assignment'] = 'Devoir';
$string['assignment_help'] = 'Choisissez le devoir (individuel ou en groupe) duquel importer les fichiers.';
$string['assignment_notfound'] = 'Le devoir depuis lequel les fichiers ont été importés ne peut plus être trouvé.';
$string['assignment_notset'] = 'Aucun devoir n’a été choisi';
$string['availability'] = 'Intervalle de temps pour le dépôt et l’approbation';
$string['choose'] = 'Veuillez sélectionner…';
$string['completiondetail:upload'] = 'Déposer un fichier';
$string['completionupload'] = 'L’étudiant doit déposer un fichier';
$string['configautoimport'] = 'Si vous préférez que les nouveaux devoirs soient automatiquement importés dans les instances du Partage de fichiers. Cette fonctionnalité peut être activée/désactivée pour chaque instance de l’activité.';
$string['configmaxbytes'] = 'Taille maximale par défaut des fichiers dans un partage de fichiers.';
$string['configmaxfiles'] = 'Nombre maximal par défaut de fichiers permis par utilisateur.';
$string['configobtainstudentapproval'] = 'Les fichiers ne seront publiés (rendus visibles à tous) qu’après approbation de l’étudiant et de l’enseignant.';
$string['configobtainteacherapproval'] = 'Les documents des étudiants sont par défaut visibles pour les autres participants.';
$string['configrequiremodintro'] = 'Désactivez cette option si vous ne voulez pas forcer les utilisateurs à entrer une description pour chaque activité';
$string['courseuploadlimit'] = 'Limite de dépôt pour le cours';
$string['currentlynotapproved'] = '* Pour l’instant, la publication n’a pas été approuvée ou rejetée.';
$string['cutoffdate'] = 'Date de fin';
$string['cutoffdate_help'] = 'Si défini, le devoir n’acceptera pas de fichiers après cette date sans une prolongation.';
$string['cutoffdate_import'] = 'Approbation possible jusqu’à';
$string['cutoffdate_upload'] = 'Dernier dépôt possible jusqu’à';
$string['cutoffdatefromdatevalidation'] = 'La date de fin doit être postérieure à la date depuis laquelle les envois sont autorisés.';
$string['cutoffdatevalidation'] = 'La date de fermeture ne peut être antérieure à la date d’échéance';
$string['details'] = 'Détails';
$string['downloadall'] = 'Télécharger tous les fichiers déposés';
$string['duedate'] = 'Date d’échéance';
$string['duedate_help'] = 'Si cette option est activée, les participants ne peuvent pas soumettre leurs fichiers après cette date. Si l’option est désactivée, les participants peuvent soumettre leurs fichiers indéfiniment.';
$string['duedate_import'] = 'Approbation jusqu’à';
$string['duedate_upload'] = 'Dépôt possible jusqu’à';
$string['duedatevalidation'] = 'La date d’échéance doit être postérieure à la date depuis laquelle les envois sont autorisés.';
$string['edit_timeover'] = 'Les fichiers ne peuvent être modifiés que pendant la période d’édition.';
$string['edit_uploads'] = 'Modifier/déposer des fichiers';
$string['email:filechange:footer'] = '</ul><br />Veuillez vérifier si votre autorisation de publication est requise.';
$string['email:filechange_import:header'] = 'Le(s) fichier(s) suivant(s) du devoir <b>« {$a->assign} » </b> a/ont été importé(s) dans <b>« {$a->publication} » </b> le {$a->dayupdated} à {$a->timeupdated} :<br /><ul>';
$string['email:filechange_import:subject'] = 'Fichier(s) importé(s)';
$string['email:filechange_upload:header'] = '<b>{$a->username}</b> a téléchargé le(s) fichier(s) suivant(s) dans <b>« {$a->publication} » </b> le {$a->dayupdated} à {$a->timeupdated} :<br /><ul>';
$string['email:filechange_upload:subject'] = 'Fichier(s) téléchargé(s)';
$string['email:statuschange:filename'] = '<li>« {$a->filename} » à « <b>{$a->apstatus}</b> » </li>';
$string['email:statuschange:header'] = 'Le statut de publication des fichiers suivants dans <b>« {$a->publication} » </b> a été modifié le {$a->dayupdated} à {$a->timeupdated} par <b>{$a->username}</b>:<br /><ul>';
$string['email:statuschange:subject'] = 'Statut de publication modifié';
$string['entiresperpage'] = 'Nombre de participants à afficher par page';
$string['eventpublicationapprovalchanged'] = 'L’approbation du fichier a changé';
$string['eventpublicationduedateextended'] = 'La date de rendu de la publication a été étendue';
$string['eventpublicationfiledeleted'] = 'Le fichier de la publication a été supprimé';
$string['eventpublicationfileimported'] = 'Un fichier a été importé';
$string['eventpublicationfileuploaded'] = 'Un fichier a été déposé';
$string['extensionduedate'] = 'Date de prolongation';
$string['extensionnotafterduedate'] = 'La date de prolongation doit être postérieure à la date d’échéance';
$string['extensionnotafterfromdate'] = 'La date de prolongation doit être postérieure à la date depuis laquelle les envois sont autorisés.';
$string['extensionto'] = 'Prolongation jusqu’à';
$string['filedetails'] = 'Détails';
$string['filesofthesetypes'] = 'Ces types de fichier sont autorisés :';
$string['filter'] = 'Filtrer';
$string['filter:allfiles'] = 'Tous les fichiers déposés';
$string['filter:approvalrequired'] = 'Décision en attente';
$string['filter:approved'] = 'Fichiers approuvés';
$string['filter:nofiles'] = 'Aucun fichier déposé';
$string['filter:nofilter'] = 'Aucun filtre';
$string['filter:rejected'] = 'Fichiers rejetés';
$string['giveapproval'] = 'Approuver';
$string['go'] = 'Envoyer';
$string['grantextension'] = 'Accorder/modifier une prolongation';
$string['group_approved'] = 'Approuvé par tous les membres du groupe.';
$string['guideline'] = 'Publication des fichiers déposés';
$string['hidden'] = 'Non publié';
$string['importfrom_err'] = 'Vous devez choisir un devoir à partir duquel vous souhaitez importer les soumissions de fichiers.';
$string['maxbytes'] = 'Taille maximale de chaque fichier';
$string['maxbytes_help'] = 'Les fichiers téléchargés par les étudiants peuvent atteindre cette taille.';
$string['maxfiles'] = 'Nombre maximal de fichiers par utilisateur/groupe';
$string['maxfiles_help'] = 'Chaque étudiant pourra télécharger jusqu’à ce nombre de fichiers pour sa soumission.';
$string['messageprovider:publication_updates'] = 'Notifications de publication';
$string['mode'] = 'Mode de fonctionnement';
$string['mode_help'] = 'Définit si les étudiants déposent des fichiers dans l’activité, ou si les travaux rendus dans une activité Devoir sont utilisés.';
$string['modeimport'] = 'Utiliser les travaux rendus d’une activité Devoir';
$string['modeupload'] = 'Les étudiants déposent des fichiers directement';
$string['modulename'] = 'Partage de fichiers';
$string['modulename_help'] = 'Le dossier étudiant offre les fonctionnalités suivantes :<br><ul><li>Les étudiants peuvent télécharger des fichiers ou les importer à partir d’une activité de devoirs.</li><li>Les fichiers seront publiés (rendus visibles pour tout le monde) automatiquement ou après l’approbation de la publication par les étudiants et/ou les enseignants.</li><li>Les étudiants et/ou les enseignants recevront une notification lorsque les étudiants téléchargeront ou modifieront un fichier ou lorsqu’un fichier sera importé ou mis à jour à partir d’une activité de devoirs. De plus, les étudiants et/ou les enseignants recevront une notification de tout changement de statut de publication.</li></ul>';
$string['modulenameplural'] = 'Partages de fichiers';
$string['myfiles'] = 'Mes fichiers';
$string['mygroupfiles'] = 'Fichiers de mon groupe';
$string['name'] = 'Nom';
$string['noentries'] = 'Aucun élément';
$string['nofiles'] = 'Aucun fichier disponible';
$string['nofilestodisplay'] = 'Actuellement, il n’y a pas de fichiers disponibles ou non encore publiés.';
$string['nofilestozip'] = 'Aucun fichier à zipper';
$string['nonexistentfiletypes'] = 'Les fichiers suivants n’ont pas été reconnus: {$a}';
$string['nopublicationsincourse'] = 'Il n’existe aucune instance de partage de fichiers dans ce cours.';
$string['nothing_to_show_groups'] = 'Rien à afficher - aucun groupe disponible';
$string['nothing_to_show_users'] = 'Rien à afficher - aucun étudiant disponible';
$string['nothingtodisplay'] = 'Aucun élément à afficher';
$string['notice'] = '<strong>Information: </strong>';
$string['notice_changes_possible_in_original'] = 'Les modifications apportées aux fichiers existants ne sont possibles que dans l’activité devoir d’origine.';
$string['notice_files_imported'] = 'Les fichiers affichés sont importés à partir d’une activité devoir.';
$string['notice_files_imported_group'] = 'Les fichiers affichés proviennent d’une soumission de groupe, importée à partir d’une activité devoir.';
$string['notice_group_all_teachernotrequired'] = 'Les fichiers ne seront publiés pour tous les étudiants qu’avec l’approbation de <strong>TOUS les membres du groupe</strong>.';
$string['notice_group_all_teacherrequired'] = 'Les fichiers ne seront publiés pour tous les étudiants qu’avec l’approbation de <strong>TOUS les membres du groupe et de l’enseignant.</strong> Les enseignants se réservent le droit de refuser la publication de vos fichiers à tout moment.';
$string['notice_group_one_teachernotrequired'] = 'Les fichiers ne seront publiés pour tous les étudiants qu’avec l’approbation d\'<strong>AU MOINS UN membre du groupe.</strong>';
$string['notice_group_one_teacherrequired'] = 'Les fichiers ne seront publiés pour tous les élèves qu’avec l’approbation d\'<strong>AU MOINS UN membre du groupe et de l’enseignant.</strong> Les enseignants se réservent le droit de refuser la publication de vos fichiers à tout moment.';
$string['notice_import_studentnotrequired_teachernotrequired'] = 'Les fichiers seront publiés (seront rendus visibles pour tous) <strong>automatiquement.</strong>';
$string['notice_import_studentnotrequired_teacherrequired'] = 'Les fichiers ne seront publiés (seront rendus visibles pour tous) <strong>qu’après l’approbation des enseignants.</strong> Les enseignants se réservent le droit de refuser la publication de vos fichiers à tout moment.';
$string['notice_import_studentrequired_teachernotrequired'] = 'Les fichiers seront publiés (seront rendus visibles pour tous) après <strong>votre approbation.</strong>';
$string['notice_import_studentrequired_teacherrequired'] = 'Les fichiers seront publiés (seront rendus visibles pour tous) après <strong>votre approbation et celle des enseignants.</strong> Les enseignants se réservent le droit de refuser la publication de vos fichiers à tout moment.';
$string['notice_upload_studentnotrequired_teachernotrequired'] = 'Tous les fichiers que vous téléchargez ici seront publiés (seront rendus visibles pour tout le monde) <strong>automatiquement</strong>.';
$string['notice_upload_studentnotrequired_teacherrequired'] = 'Tous les fichiers que vous téléchargez ici seront publiés (seront rendus visibles pour tous) seulement <strong>après l’approbation des enseignants.</strong> Les enseignants se réservent le droit de rejeter la publication de vos fichiers à tout moment.';
$string['notice_upload_studentrequired_teachernotrequired'] = 'Tous les fichiers que vous téléchargez ici seront publiés (seront rendus visibles pour tout le monde) <strong>après votre approbation.</strong>';
$string['notice_upload_studentrequired_teacherrequired'] = 'Tous les fichiers que vous téléchargez ici seront publiés (seront rendus visibles pour tous) <strong>après votre approbation et celle des enseignants.</strong> Les enseignants se réservent le droit de refuser la publication de vos fichiers à tout moment.';
$string['notifications'] = 'Notifications';
$string['notify:filechange'] = 'Notifications concernant les fichiers soumis ou importés';
$string['notify:filechange_admin'] = 'Paramètre de notification par défaut pour les modifications de fichiers - soumis ou importés';
$string['notify:filechange_help'] = 'Selon le paramètre, si cette option est activée, les étudiants et/ou les enseignants recevront une notification lorsque les étudiants téléchargent ou modifient un fichier, ou lorsqu’un fichier est importé ou mis à jour à partir d’une activité de devoir.';
$string['notify:setting:0'] = 'Aucune notification';
$string['notify:setting:1'] = 'Enseignants seulement';
$string['notify:setting:2'] = 'Étudiants seulement';
$string['notify:setting:3'] = 'Enseignants et étudiants';
$string['notify:statuschange'] = 'Notifications sur les changements de statut de publication';
$string['notify:statuschange_admin'] = 'Paramètre de notification par défaut pour les modifications du statut de publication';
$string['notify:statuschange_help'] = 'Selon le paramètre, si cette option est activée, les étudiants et/ou les enseignants recevront une notification lorsque le statut de publication de l’un des fichiers est modifié.';
$string['notifystudents'] = 'Notifier les étudiants des changements de publication';
$string['notifystudents_help'] = 'Si ce paramètre est activé, les étudiants recevront un message dès que le statut d’approbation d’un de leurs fichiers déposés est modifié.';
$string['notifyteacher'] = 'Notifier les enseignants à propos des fichiers déposés';
$string['notifyteacher_help'] = 'Si cette option est activée, les enseignants recevront une notification lorsque les étudiants déposent un fichier.';
$string['obtainapproval_automatic'] = 'Automatique';
$string['obtainapproval_required'] = 'Requis';
$string['obtaingroupapproval'] = 'Approbation par le groupe';
$string['obtaingroupapproval_admin'] = 'Paramètre d’approbation de groupe par défaut';
$string['obtaingroupapproval_admin_desc'] = 'Ce paramètre détermine le paramètre d’approbation par défaut pour les membres du groupe. Ce paramètre devient pertinent <strong>uniquement</strong> lorsque le mode est défini sur « Importer des fichiers à partir d’une activité devoir » et que le devoir a une soumission de groupe.';
$string['obtaingroupapproval_all'] = 'Obligatoire pour TOUS les membres';
$string['obtaingroupapproval_help'] = 'Cette option détermine comment la publication (visibilité) des soumissions de fichiers par les groupes se déroule : <br /><ul><li><strong>Automatique</strong> - aucune approbation des membres du groupe n’est requise. Dans l’esprit de la loi sur le droit d’auteur, nous vous demandons de demander l’approbation des étudiants pour publier des fichiers d’une manière distincte.</li><li><strong>Requis d’au moins UN membre</strong> - au moins un membre du groupe doit approuver</li><li><strong>Requis de TOUS les membres</strong> - tous les membres du groupe doivent approuver</li></ul>';
$string['obtaingroupapproval_single'] = 'Requis pour au moins UN membre';
$string['obtaingroupapproval_title'] = 'Approbation de groupe';
$string['obtainstudentapproval'] = 'Approbation par les étudiants';
$string['obtainstudentapproval_admin'] = 'Paramètre d’approbation des étudiants par défaut';
$string['obtainstudentapproval_admin_desc'] = 'Ce paramètre détermine le paramètre d’approbation par défaut pour les étudiants.';
$string['obtainstudentapproval_help'] = 'Cette option détermine comment se déroule la publication (visibilité) des fichiers soumis par l’étudiant : <br><ul><li><strong>Automatique</strong> - aucune approbation des étudiants n’est requise. Dans l’esprit de la loi sur le droit d’auteur, nous vous demandons de demander l’approbation des étudiants pour publier des fichiers d’une manière distincte.</li><li><strong>Obligatoire</strong> - Les étudiants doivent approuver manuellement le fichier pour publication</li></ul>';
$string['obtainstudentapproval_no'] = 'Automatique';
$string['obtainstudentapproval_yes'] = 'Requis';
$string['obtainteacherapproval'] = 'Approbation de l’enseignant';
$string['obtainteacherapproval_admin'] = 'Paramètre d’approbation par défaut de l’enseignant';
$string['obtainteacherapproval_admin_desc'] = 'Ce paramètre détermine le paramètre d’approbation par défaut pour les enseignants.';
$string['obtainteacherapproval_help'] = 'Cette option détermine comment se déroule la publication (visibilité) des soumissions de fichiers avec l’approbation des enseignants : <br><ul><li><strong>Automatique</strong> - aucune approbation des enseignants n’est requise.</li><li><strong>Obligatoire</strong> - Les enseignants doivent approuver manuellement le fichier pour publication</li></ul>';
$string['obtainteacherapproval_no'] = 'Automatique';
$string['obtainteacherapproval_yes'] = 'Requis';
$string['optionalsettings'] = 'Options';
$string['overdue'] = 'Date limite de la période d’édition dépassée';
$string['overview'] = 'Vue d’ensemble';
$string['pending'] = 'En attente';
$string['pluginadministration'] = 'Administration du partage de fichiers';
$string['pluginname'] = 'Partage de fichiers';
$string['privacy:metadata:approval'] = 'Indique si le membre du groupe a approuvé ou rejeté la publication du fichier.';
$string['privacy:metadata:contenthash'] = 'Hachage SHA1 du contenu du fichier, utilisé pour déterminer si le fichier a changé';
$string['privacy:metadata:extduedates'] = 'Stocke des information sur des échéances modifiées/prolongées pour mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'La date d’échéance effective pour l’utilisateur, par effet de l’octroi d’une exception/prolongation.';
$string['privacy:metadata:fileid'] = 'Identifiant du fichier';
$string['privacy:metadata:filename'] = 'Le nom du fichier';
$string['privacy:metadata:files'] = 'Stocke des informations (identifiant, propriétaire, provenance, hachage du contenu, nom du fichier et si approuvé par l’enseignant et/ou l’étudiant) sur les fichiers déposés ou importés dans mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Stocke des informations sur les approbations/rejets par les membres de groupes de fichiers déposés par le groupe.';
$string['privacy:metadata:publicationfileexplanation'] = 'Les fichiers et textes en ligne convertis utilisés par ce module sont stockés par l’API de stockage de fichiers de Moodle.';
$string['privacy:metadata:publicationperpage'] = 'Combien d’entrées afficher par page';
$string['privacy:metadata:studentapproval'] = 'Indique si l’étudiant a approuvé ou rejeté la publication du fichier.';
$string['privacy:metadata:teacherapproval'] = 'Indique si l’enseignant a approuvé ou rejeté la publication du fichier.';
$string['privacy:metadata:timecreated'] = 'L’heure et la date de création de l’enregistrement de données.';
$string['privacy:metadata:timemodified'] = 'L’heure et la date de la modification la plus récente de l’enregistrement de données.';
$string['privacy:metadata:type'] = 'Indique l’origine du fichier (déposé par l’étudiant, importé depuis un devoir de type fichier ou de type texte en ligne).';
$string['privacy:metadata:userid'] = 'Identifiant de l’utilisateur.';
$string['privacy:path:files'] = 'Fichiers';
$string['privacy:path:resources'] = 'Ressources';
$string['privacy:type:import'] = 'Fichier importé';
$string['privacy:type:onlinetext'] = 'Texte en ligne importé';
$string['privacy:type:upload'] = 'Fichier déposé';
$string['publication:addinstance'] = 'Ajouter un nouveau partage de fichiers';
$string['publication:approve'] = 'Décider si les fichiers doivent être publiés (visibles par tous les étudiants)';
$string['publication:grantextension'] = 'Accorder une prolongation';
$string['publication:receiveteachernotification'] = 'Recevoir des notifications pour les enseignants';
$string['publication:upload'] = 'Déposer des fichiers dans un partage de fichiers';
$string['publication:view'] = 'Voir le partage de fichiers';
$string['publicationstatus'] = 'Publication';
$string['publicationstatus_help'] = 'Le statut de la publication représente l’approbation de l’enseignant et la publication finale : <ul><li><i class="fa fa-check text-success fa-fw"></i> Le fichier est publié et donc visible par tous les participants</li><li><i class="fa-times text-danger fa-fw"></i> Le fichier n’est pas publié (l’approbation n’a pas encore été donnée ou a été rejetée) et n’est donc pas visible</li></ul>.';
$string['publicfiles'] = 'Fichiers publiés';
$string['published_aftercheck'] = 'Approbation des enseignants requise';
$string['published_immediately'] = 'Approuver automatiquement';
$string['rejected'] = 'Rejeté';
$string['rejectusers'] = 'Rejeter';
$string['requiremodintro'] = 'Exiger une description de l’activité';
$string['reset'] = 'Annuler';
$string['reset_userdata'] = 'Toutes les données';
$string['resetstudentapproval'] = 'Annuler l’approbation de l’étudiant';
$string['save_changes'] = 'Enregistrer les modifications';
$string['saveapproval'] = 'Enregistrer les modifications';
$string['savestudentapprovalwarning'] = 'Voulez-vous vraiment enregistrer ces modifications ? L’état de publication ne peut pas être modifié une fois qu’il a été défini.';
$string['saveteacherapproval'] = 'Enregistrer les modifications';
$string['search:activity'] = 'Partage de fichiers - informations sur l’activité';
$string['show_details'] = 'Montrer détails';
$string['status'] = 'Statut';
$string['status:approved'] = 'Approuvé';
$string['status:approvednot'] = 'Rejeté';
$string['status:approvedrevoke'] = 'Révoqué';
$string['student_approve'] = 'Approuver';
$string['student_approved'] = 'Approuvé par l’étudiant.';
$string['student_approved_automatically'] = 'Approuvé automatiquement par l’étudiant.';
$string['student_pending'] = 'La décision de l’étudiant est en attente.';
$string['student_reject'] = 'Rejeter';
$string['student_rejected'] = 'Rejeté par l’étudiant.';
$string['studentapproval'] = 'Approbation (étudiants)';
$string['studentapproval_help'] = 'Dans la colonne « Approbation (étudiants) », le feedback des étudiants est affiché:<br><ul><li><i class="fa-question fa-fw text-warning"></i> - Décision en attente</li><li><i class="fa-check text-success fa-fw"></i> - Approbation donnée</li><li><i class="fa-times text-danger fa-fw"></i> - Approbation rejetée</li></ul>';
$string['submissionsettings'] = 'Paramètres de soumission';
$string['teacher_approve'] = 'Approuver';
$string['teacher_approved'] = 'Approuvé par l’enseignant.';
$string['teacher_approved_automatically'] = 'Approuvé automatiquement par l’enseignant.';
$string['teacher_pending'] = 'La décision de l’enseignant est en attente.';
$string['teacher_reject'] = 'Rejeter';
$string['teacher_rejected'] = 'Non publié (rejeté).';
$string['teacherapproval'] = 'Approbation';
$string['teacherapproval_help'] = 'Approbation/refus actuel des fichiers, c’est-à-dire sont-ils visibles par tous les participants : <br><ul><li><strong>Choisir…</strong> - décision en attente/aucune approbation donnée ou rejetée, ces fichiers ne sont pas visibles.</li><li><strong>Approuver</strong> - approbation accordée, ces fichiers sont publiés et donc visibles par tous.</li><li><strong>Rejeter</strong> - aucune approbation donnée, ces fichiers ne sont pas publiés et donc pas visibles.</li></ul>';
$string['total'] = 'Total';
$string['updatefiles'] = 'Mettre à jour les fichiers';
$string['updatefileswarning'] = 'Les fichiers déjà importés seront remplacés ou supprimés si les fichiers originaux du devoir ont été actualisés ou supprimés. Les paramètres de l’étudiant, comme l’approbation de la publication, restent inchangés.';
$string['uploaded'] = 'Déposé';
$string['visibility'] = 'Publié';
$string['visible'] = 'Publié';
$string['visibleforstudents'] = 'Publié';
$string['visibleforstudents_no'] = 'Ce fichier n’est pas publié (pas visible par les étudiants).';
$string['visibleforstudents_yes'] = 'Ce fichier est publié (visible par les étudiants).';
$string['withselected'] = 'Avec la sélection :';
$string['zipusers'] = 'Télécharger les fichiers sélectionnés';
