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
 * Strings for component 'block_panopto', language 'fr', version '4.4'.
 *
 * @package     block_panopto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_a_panopto_server'] = 'Aucun - Veuillez ajouter un serveur Panopto ou une clé d’application pour continuer.';
$string['add_to_panopto'] = 'Synchroniser ce cours avec Panopto';
$string['api_manager_unavailable'] = 'Impossible de créer le client API {$a} ! (Le serveur Panopto est-il disponible, si oui, le nom d’instance et la clé d’application sont-ils corrects ?)';
$string['application_key'] = 'Clé d’application';
$string['async_wait_warning'] = 'Les tâches asynchrones entraînent un délai avant la synchronisation des utilisateurs. Ce délai est généralement de 5 à 15 minutes mais peut changer en fonction de la configuration de Moodle.';
$string['attempt_provision_course'] = 'Tentative de provisionnement d’un dossier Panopto avec une Id externe de : {$a}.';
$string['attempt_sync_user'] = 'Tentative de synchronisation d’un utilisateur avec un Id de {$a} vers Panopto.';
$string['attempt_sync_user_server'] = 'Le serveur cible de la tentative de synchronisation est {$a}.';
$string['attempt_unprovision_course'] = 'Tentative de déprovisionnement d’un dossier Panopto avec une Id externe de {$a}.';
$string['attempted_import_course_id'] = 'Id Moodle du cours d’importation source';
$string['attempted_moodle_course_id'] = 'Tentative pour l’ID du cours Moodle';
$string['attempted_panopto_server'] = 'Tentative sur le server Panopto';
$string['attempted_provisioning_personal_folder'] = 'Tentative pour le provisionnement du dossier personnel, ceci n’est pas actuellement une action supportée par Panopto. Veuillez faire correspondre le cours à un autre dossier par le biais de la configuration de l’instance de bloc et essayez de reprovisionner.';
$string['attempted_target_course_id'] = 'Id. Moodle du cours cible';
$string['attribute_ensure_branch_failed'] = 'Vérifier l’erreur de la branche';
$string['attribute_ensured_branch'] = 'Hiérarchie des branches garantie';
$string['attribute_new_name'] = 'Nouveau nom de répertoire';
$string['attribute_original_name'] = 'Nom du dossier original';
$string['attribute_target_branch_leaf'] = 'Nom de la catégorie du nœud de la branche cible';
$string['attribute_target_panopto_server'] = 'Serveur cible Panopto';
$string['autoprovision_new_courses'] = 'Provisionnement automatique des cours nouvellement créés';
$string['autoprovision_off'] = 'Ne pas provisionner les nouveaux cours';
$string['autoprovision_on_block_view'] = 'Provisionnement automatique lors de la première visualisation du bloc Panopto';
$string['back_to_config'] = 'Retour à la configuration';
$string['back_to_course'] = 'Retour au cours';
$string['begin_building_category_structure'] = 'Commencez à construire la structure des catégories';
$string['begin_reinitializing_imports'] = 'Commencer à réinitialiser les importations';
$string['block_edit_error'] = 'Impossible de configurer l’instance de bloc : la configuration globale est incomplète. Veuillez contacter votre administrateur système.';
$string['block_edit_header'] = 'Sélectionnez le dossier du cours Panopto à afficher dans ce bloc.';
$string['block_edit_header_help'] = 'Choisissez un dossier de cours Panopto existant ou créez un nouveau dossier de cours Panopto pour ce bloc.';
$string['block_global_add_courses'] = 'Ajouter des cours Moodle à Panopto';
$string['block_global_application_key'] = 'Clé d’application';
$string['block_global_application_key_desc'] = 'Entrez la clé de l’application depuis la page des fournisseurs d’identité Panopto.';
$string['block_global_build_category_structure'] = 'Synchroniser toutes les catégories de Moodle avec Panopto';
$string['block_global_hostname'] = 'Nom d’hôte du serveur Panopto';
$string['block_global_hostname_desc'] = 'Saisir le FQDN (nom de domaine complet) de votre serveur Panopto.';
$string['block_global_instance_desc'] = 'Entrez le nom de l’instance depuis la page des fournisseurs d’identité Panopto.';
$string['block_global_instance_name'] = 'Nom de l’instance Moodle';
$string['block_global_panopto_bulk_and_batch_tools'] = 'Outils pour les opérations par lots';
$string['block_global_panopto_folder_and_category_options'] = 'Options pour les dossiers et les catégories';
$string['block_global_panopto_http_and_debug_settings'] = 'Http et options de débogage';
$string['block_global_panopto_role_options'] = 'Options de rôle Panopto';
$string['block_global_panopto_server_config'] = 'Configuration du server Panopto';
$string['block_global_panopto_syncing_options'] = 'Options de synchronisation de Panopto';
$string['block_global_reinitialize_all_imports'] = 'Réinitialiser toutes les importations de dossiers Panopto';
$string['block_global_rename_all_folders'] = 'Mettre à jour tous les noms de dossiers Panopto';
$string['block_global_unprovision_courses'] = 'Déprovisionner les dossiers Panopto des cours Moodle';
$string['block_global_upgrade_all_folders'] = 'Mise à jour de tous les dossiers et importations existants';
$string['block_panopto_any_creator_can_view_folder_settings'] = 'Permettre à tous les utilisateurs ayant un accès créateur de voir les liens des paramètres des dossiers Panopto';
$string['block_panopto_any_creator_can_view_folder_settings_desc'] = 'Lorsque cette option est sélectionnée, les utilisateurs ayant un rôle de créateur dans le dossier peuvent afficher son lien de paramètres. Par défaut, seuls les enseignants du cours peuvent afficher le lien des paramètres du cours.';
$string['block_panopto_anyone_view_recorder_links'] = 'Permettre à tous les rôles d’afficher les liens de téléchargement de l’enregistreur';
$string['block_panopto_anyone_view_recorder_links_desc'] = 'Lorsque cette option est sélectionnée, les utilisateurs peuvent afficher les liens de téléchargement de l’enregistreur. Par défaut, seuls les utilisateurs ayant un accès de créateur et/ou de provisionnement sur un dossier peuvent voir les liens de téléchargement.';
$string['block_panopto_async_tasks'] = 'Activer les tâches de synchronisation asynchrones (non recommandé)';
$string['block_panopto_async_tasks_desc'] = 'Lorsque cette option est sélectionnée, les tâches de connexion, d’inscription, de désinscription, d’application de la catégorie et de suppression de l’utilisateur se déroulent de manière asynchrone. Si cette option est désélectionnée, ces opérations se produisent de manière synchrone dans le gestionnaire d’événements. Comme il est difficile de détecter l’échec en temps voulu, nous ne recommandons pas cette option.';
$string['block_panopto_auto_add_block_to_new_courses'] = 'Ajouter automatiquement un bloc Panopto aux nouveaux cours';
$string['block_panopto_auto_add_block_to_new_courses_desc'] = 'Lorsque cette option est sélectionnée, un bloc Panopto est automatiquement ajouté dans toutes les nouvelles pages de cours Moodle.';
$string['block_panopto_auto_insert_lti_link_to_new_courses'] = 'Créer automatiquement un lien vers l’outil LTI pour les nouveaux cours.';
$string['block_panopto_auto_insert_lti_link_to_new_courses_desc'] = 'Lorsque cette option est sélectionnée, un lien vers votre serveur Panopto à fonctionnement automatique sera automatiquement inséré dans la première section disponible de votre page de cours Moodle.';
$string['block_panopto_auto_provision'] = 'Provisionner automatiquement les cours';
$string['block_panopto_auto_provision_desc'] = 'Cette option peut être configurée pour provisionner automatiquement un dossier de cours Panopto lorsqu’un cours est créé. Cette option peut également être configurée pour approvisionner automatiquement un cours lorsque le bloc Panopto est consulté pour la première fois.';
$string['block_panopto_auto_sync_imports'] = 'Accorder automatiquement des permissions lors de l’importation d’un cours';
$string['block_panopto_auto_sync_imports_desc'] = 'Lorsque cette option est sélectionnée, Panopto accorde automatiquement les autorisations de visualisation lors de l’importation d’un cours.';
$string['block_panopto_automatic_operation_target_server'] = 'Serveur cible de l’opération automatique';
$string['block_panopto_automatic_operation_target_server_desc'] = 'Sélectionner le serveur Panopto qui sera ciblé pour les tâches « Fournir automatiquement de nouveaux cours », « Synchroniser l’utilisateur à la connexion » et « Appliquer la structure des catégories ».';
$string['block_panopto_check_server_interval'] = 'Intervalle de vérification de la santé du serveur';
$string['block_panopto_check_server_interval_desc'] = 'Fréquence à laquelle le bilan de santé du serveur doit tenter de se connecter au serveur Panopto. Le résultat sera enregistré et mis en cache jusqu’au prochain contrôle de santé.';
$string['block_panopto_check_server_status'] = 'Vérifier la santé du serveur avant de charger le bloc';
$string['block_panopto_check_server_status_desc'] = 'Lorsque cette option est sélectionnée, le serveur Panopto cible est vérifié pour s’assurer qu’il est en cours d’exécution afin d’éviter des appels de délai potentiellement longs lorsque le serveur est inaccessible. Cette option est désélectionnée par défaut car elle utilise une fonctionnalité dépendant de la plate-forme ou du système d’exploitation. Elle ne doit être sélectionnée que si le support Panopto vous l’a conseillé.';
$string['block_panopto_creator_mapping'] = 'Attribution du rôle créateur';
$string['block_panopto_creator_mapping_desc'] = 'Sélectionner les rôles de cours qui seront définis comme créateurs dans les nouveaux dossiers de cours Panopto.';
$string['block_panopto_enforce_category_after_course_provision'] = 'Créer des dossiers de catégories lors de la (re)mise à disposition de cours';
$string['block_panopto_enforce_category_after_course_provision_desc'] = 'Lorsque cette option est sélectionnée, le (re)provisionnement créera des dossiers pour les catégories dans lesquelles se trouve le cours, ainsi que le dossier du cours lui-même.';
$string['block_panopto_enforce_category_structure'] = 'Synchroniser les catégories nouvelles et déplacées avec Panopto';
$string['block_panopto_enforce_category_structure_desc'] = 'Lorsque cette option est sélectionnée, chaque fois qu’une catégorie est créée ou déplacée, la structure de cette catégorie est reproduite sur le site Panopto.';
$string['block_panopto_enforce_https_on_wsdl'] = 'Appliquer HTTPS sur les appels d’API Panopto';
$string['block_panopto_enforce_https_on_wsdl_desc'] = 'Lorsque cette option est sélectionnée, les points de terminaison HTTPS sont utilisés pour les appels à l’API Panopto. Ce paramètre est fortement recommandé.';
$string['block_panopto_folder_name_style'] = 'Apparence du nom du dossier Panopto';
$string['block_panopto_folder_name_style_desc'] = 'Sélectionner la façon dont les nouveaux dossiers Panopto apparaissent dans le bloc Moodle.';
$string['block_panopto_non_editing_teacher_provision'] = 'Autoriser l’enseignant non éditeur à provisionner';
$string['block_panopto_non_editing_teacher_provision_desc'] = 'Activer cette option pour permettre aux enseignants non éditeurs de provisionner les dossiers de cours Panopto.';
$string['block_panopto_panopto_connection_timeout'] = 'Délai de connexion Panopto';
$string['block_panopto_panopto_connection_timeout_desc'] = 'Délai d’attente en secondes pour la connexion de Panopto. Modifier la valeur uniquement lorsque le support Panopto vous le conseille.';
$string['block_panopto_panopto_socket_timeout'] = 'Délai d’expiration du socket Panopto';
$string['block_panopto_panopto_socket_timeout_desc'] = 'Durée en secondes pendant laquelle le plugin attendra que Panopto termine une tâche après s’être connecté. Ne modifiez cette valeur que si le support Panopto vous le conseille.';
$string['block_panopto_print_log_to_file'] = 'Rediriger les journaux d’erreurs vers un fichier texte';
$string['block_panopto_print_log_to_file_desc'] = 'Lorsque cette option est sélectionnée, le journal d’erreur de Panopto sera redirigé vers un fichier .txt, « PanoptoLogs.txt », situé dans le répertoire de base de Moodle. Cette option ne doit être sélectionnée que si le support Panopto le recommande.';
$string['block_panopto_print_verbose_logs'] = 'Imprimer les journaux détaillés';
$string['block_panopto_print_verbose_logs_desc'] = 'Lorsque cette option est sélectionnée, davantage de journaux seront ajoutés au journal d’erreurs PHP de Panopto. Cette option ne doit être sélectionnée qu’en cas de besoin, à des fins de débogage.';
$string['block_panopto_publisher_mapping'] = 'Attribution du rôle éditeur';
$string['block_panopto_publisher_mapping_desc'] = 'Attribution du rôle éditeur';
$string['block_panopto_publisher_system_role_mapping'] = 'Rôles système avec autorisations d’approvisionnement';
$string['block_panopto_publisher_system_role_mapping_desc'] = 'Sélectionnez les rôles du système qui peuvent approvisionner de nouveaux dossiers de cours Panopto. L’ajout de rôles à ce paramètre peut avoir un impact sur les performances des grands systèmes.';
$string['block_panopto_server_number_desc'] = 'Cliquez sur "Enregistrer les modifications" pour mettre à jour le nombre de serveurs.';
$string['block_panopto_server_number_name'] = 'Nombre de serveurs Panopto';
$string['block_panopto_sso_sync_type'] = 'Comportement de la synchronisation du SSO de Panopto';
$string['block_panopto_sso_sync_type_desc'] = 'Sélectionnez le comportement de la synchronisation des utilisateurs lors de l’accès au contenu de Panopto. Les utilisateurs peuvent être synchronisés en même temps qu’ils sont connectés à Panopto, ou en arrière-plan à l’aide d’une tâche asynchrone après qu’ils se soient connectés avec succès.';
$string['block_panopto_sync_after_login'] = 'Authentification et synchronisation avec Panopto lors de la connexion à Moodle (non recommandé)';
$string['block_panopto_sync_after_login_desc'] = 'Lorsque cette option est sélectionnée, les utilisateurs sont authentifiés auprès de Panopto et leurs permissions sont synchronisées lorsqu’ils se connectent à Moodle. En règle générale, l’authentification et la synchronisation des autorisations se produisent lorsqu’un utilisateur accède à Panopto dans le cours. Nous ne recommandons donc aux organisations d’activer ce paramètre que si elles ne placent pas le bloc Panopto dans Moodle (non recommandé). De plus, le temps de connexion sera prolongé si cette option est sélectionnée.';
$string['block_panopto_sync_after_provisioning'] = 'Synchroniser les utilisateurs inscrits après avoir réussi le provisionnement (non recommandé)';
$string['block_panopto_sync_after_provisioning_desc'] = 'Si cette option est sélectionnée, tous les utilisateurs inscrits à un cours seront synchronisés après le provisionnement. En général, lorsqu’un utilisateur accède au bloc Panopto dans un cours, l’authentification et la synchronisation des autorisations pour ce cours se produisent. Par conséquent, nous ne recommandons aux organisations d’activer ce paramètre que si elles ne placent pas le bloc Panopto dans Moodle (non recommandé).';
$string['block_panopto_sync_on_enrolment'] = 'Synchroniser les utilisateurs après l’inscription à une classe (facultatif)';
$string['block_panopto_sync_on_enrolment_desc'] = 'Synchronise l’autorisation lorsqu’un étudiant est inscrit à un cours avec un dossier Panopto valide. Lorsqu’elle est désactivée, l’autorisation est synchronisée avec Panopto lorsque l’utilisateur visionne le bloc Panopto. Cette fonction peut être activée si vous n’avez pas l’intention d’utiliser le bloc dans un cours, ou si un cours a intégré du contenu Panopto directement dans la page d’accueil du cours (dans ce cas, le contenu se chargera avant la synchronisation du bloc). Notez que l’activation de cette fonctionnalité peut entraîner un ralentissement des performances lors de l’inscription des utilisateurs.';
$string['block_panopto_wsdl_proxy_host'] = 'Hôte du proxy WSDL';
$string['block_panopto_wsdl_proxy_host_desc'] = 'Facultativement, vous pouvez ajouter l’adresse hôte utilisée comme proxy pour tout service Panopto WSDL.';
$string['block_panopto_wsdl_proxy_port'] = 'Port du proxy WSDL';
$string['block_panopto_wsdl_proxy_port_desc'] = 'Facultativement, vous pouvez ajouter le port utilisé comme proxy pour tout service Panopto WSDL.';
$string['build_category_structure_start'] = 'Commencer à faire correspondre toutes les catégories de Moodle à {$a}';
$string['bulk_remove_all_adhoc_task'] = 'Suppression de toutes les tâches adhoc de Panopto en file d’attente';
$string['bulk_rename_single_failed'] = 'Échec de la mise à jour du nom de dossier pour un dossier associé au cours Moodle Id {$a}';
$string['bulk_rename_single_success'] = 'Le dossier du cours Moodle Id {$a->moodleid} a été renommé avec succès. Ancien nom : {$a->ancien nom}, nouveau nom : {$a->nouveau nom}.';
$string['bulk_rename_single_unnecessary'] = 'No need to rename, folder already matches course name of {$a}';
$string['bulk_rename_start_button'] = 'Commencez à renommer les dossiers';
$string['bulk_rename_start_renaming'] = 'Début de la mise à jour de tous les noms de dossiers';
$string['bulk_reprovision_begin_reprovision'] = 'Re-provisionnement des cours vérifiés';
$string['bulk_reprovision_start'] = 'Mise à jour de tous les dossiers de panopto';
$string['bulk_reprovision_start_button'] = 'Commencez à mettre à niveau les dossiers';
$string['bulk_task_access_error'] = 'BULK TASK BLOCKED : l’utilisateur {$a} n’a pas accès à un dossier de cours Panopto provisionné. L’utilisateur doit avoir au moins un accès de visionneur à tous les dossiers de cours Panopto pour les opérations en masse. Il est fortement recommandé que l’utilisateur soit un administrateur de Panopto.';
$string['bulk_task_contact_support'] = 'Veuillez ouvrir un ticket de support Panopto si vous avez des questions.';
$string['bulk_task_new_step'] = 'Commençons maintenant l’étape : {$a}';
$string['bulk_task_reached_count'] = 'Vous avez atteint le nombre de dossiers souhaité, vous passez à l’étape suivante.';
$string['bulk_task_removing_bad_folder_row'] = 'L’entrée du mappage de dossier semble corrompue, déplaçant l’entrée vers old_foldermap pour la référence de l’utilisateur. Ligne corrompue utilisée pour le cours avec l’identifiant Moodle : {$a}';
$string['bulk_task_rename_cli_command'] = 'php -f rename_all_folders_cli.php';
$string['bulk_task_rename_warning'] = 'Ce processus renommera tous les dossiers Panopto fournis à un cours Moodle, si le nom du cours Moodle a changé depuis sa mise à disposition initiale. Une fois exécuté, ce processus ne peut être annulé. Ce processus peut prendre un certain temps si vous avez un grand nombre de cours. Vous pouvez l’exécuter en utilisant la ligne de commande pour éviter un délai d’attente dans votre navigateur. Pour ce faire, connectez-vous à votre environnement Moodle et exécutez la commande suivante depuis le répertoire /lib/cli :';
$string['bulk_task_reprovision_cli_command'] = 'php -f upgrade_all_folders_cli.php';
$string['bulk_task_reprovision_warning'] = 'Ce processus va reprovisionner tous vos cours Moodle dans Panopto. Ce processus peut prendre un certain temps si vous avez un grand nombre de cours. Vous pouvez l’exécuter en utilisant la ligne de commande pour éviter un délai d’attente dans votre navigateur. Pour ce faire, connectez-vous à votre environnement Moodle et exécutez la commande suivante depuis le répertoire /lib/cli :';
$string['bulk_task_skipping_folder'] = 'Sauter le dossier {$a}';
$string['bulk_task_update_progress'] = 'Traitement du dossier {$a->progression actuelle} sur {$a->totalitems}';
$string['bulk_task_version_error'] = 'Erreur Panopto pour l’orpération de masse - Le serveur Panopto nécessite une version plus récente.';
$string['bulk_task_working_count'] = 'En commençant par le dossier {$a->beginningdex} jusqu’au dossier {$a->endingindex}.';
$string['categories_need_newer_panopto'] = 'Les appels de catégorie nécessitent une version du serveur Panopto de {$a->requiredpanoptoversion} pour réussir, la version du serveur Panopto visé est {$a->activepanoptoversion}.';
$string['cli_category_invalid_arguments'] = 'Veuillez exécuter la commande avec les arguments suivants \'build_category_structure.php <panoptoservername> <applicationkey>\'.';
$string['cli_heading_build_category_structure'] = 'Synchroniser toutes les catégories de Moodle avec Panopto';
$string['completed_recordings'] = 'Enregistrements terminés';
$string['copy_access_error'] = 'L’utilisateur n’a pas accès au dossier Panopto lié au cours source importé avec l’Id de {$a->importedcourseid}.';
$string['copy_api_error'] = 'Erreur lors de l’importation du cours avec l’Id {$a->importedcourseid}. Veuillez consulter les journaux d’erreurs PHP de Panopto pour plus de détails.';
$string['copy_api_error_auth'] = 'Erreur d’autorisation avec le serveur panopto {$a}.';
$string['copy_api_error_response'] = 'Échec de la copie de la réponse : {$a}';
$string['copy_course_init'] = 'La copie de cours a été initialisée, une tâche est mise en file d’attente pour copier le contenu d’un dossier Panopto associé au cours Moodle avec l’Id {$a->SourceCourseContexts} vers un dossier Panopto associé au cours Moodle avec l’Id {$a->TargetCourseContext}';
$string['course'] = 'Cours';
$string['course_already_provisioned'] = 'Ce cours a déjà été ajouté au dossier avec un Id public de : {$a}.';
$string['course_has_invalid_panopto_data'] = 'Le cours Moodle cible n’est pas associé à des données de dossier Panopto valides.';
$string['course_name'] = 'Nom du cours';
$string['course_settings'] = 'Paramètres du cours';
$string['creator'] = 'Créateur';
$string['creator_help'] = 'Un Créateur peut créer et éditer du contenu dans Panopto.';
$string['creators'] = 'Créateurs';
$string['current_version'] = 'Version actuelle : {$a}';
$string['current_version_attr'] = 'Version actuelle';
$string['download_recorder'] = 'Télécharger l’enregistreur';
$string['ensure_category_branch_failed'] = 'L’appel pour assurer la branche de la catégorie n’a pas réussi, veuillez consulter le journal de Panopto pour plus de détails.';
$string['ensure_category_branch_start'] = 'Commencer à assurer la branche de la catégorie supérieure pour la catégorie : {$a->categoryname} sur le serveur Panopto {$a->targetserver}.';
$string['ensure_category_branch_success'] = 'Branche de catégorie assurée avec la structure suivante : \\n {$a}';
$string['error_invalid_category_information'] = 'La catégorie cible ne contenait pas d’informations valides.';
$string['error_no_admin_account_found'] = 'Erreur : aucun compte administrateur n’a été trouvé';
$string['error_retrieving'] = 'Erreur de récupération du dossier du cours Panopto. Veuillez consulter le fichier PHP error_log pour plus de détails.';
$string['existing_course'] = 'Sélectionnez un dossier Panopto existant qui n’est pas actuellement associé à un autre cours :';
$string['fetching_content'] = 'Récupérer le contenu de Panopto…';
$string['folder_not_found_error'] = 'Le dossier actuellement provisionné pour le cours Moodle cible sur le serveur Panopto n’a pas pu être trouvé, a-t-il été supprimé ? Le provisionnement se poursuivra en établissant un lien avec le dossier Moodle par défaut ou en en créant un s’il n’existe pas encore.';
$string['get_provisioning_info'] = 'Je tente d’obtenir des informations sur le provisionnement d’un cours avec l’identifiant Moodle : {$a}.';
$string['groups_getting_synced'] = 'Groupes à synchroniser avec cet appel : {$a}';
$string['impacted_server'] = 'Serveur impacté : {$a}';
$string['impacted_server_attr'] = 'Serveur impacté';
$string['import_access_error'] = 'L’utilisateur n’a pas accès au dossier Panopto lié au cours source importé avec l’Id de {$a->importedcourseid}.';
$string['import_error'] = 'Erreur lors de l’importation du cours avec l’Id {$a->importedcourseid}. Voici le message d’erreur : {$a->errormessage}';
$string['import_not_mapped'] = 'Le cours importé n’a pas été provisionné dans un dossier Panopto ! (aucun session_group_id défini dans block_panopto_foldermap)';
$string['import_status'] = 'Statut de la tentative d’importation';
$string['import_success'] = 'Importation réussie du cours avec Id {$a->importedcourseid}.';
$string['init_import_source'] = 'Tentative d’importation de la source du cours Moodle Id : {$a}.';
$string['init_import_target'] = 'Tentative d’importation de la cible du cours Moodle Id : {$a}.';
$string['invalid_folder_information'] = 'Les informations Panopto pour ce cours sont non valides. Veuillez re-provisionner ce cours.';
$string['links'] = 'Liens';
$string['live_sessions'] = 'Sessions en direct';
$string['minimum_required_version'] = 'Version minimale requise : {$a}';
$string['minimum_required_version_attr'] = 'Version minimale requise';
$string['missing_moodle_required_version'] = 'Le bloc Panopto nécessite une version de Moodle plus récente que {$a->requiredversion}, votre version actuelle de Moodle est : {$a->currentversion}.';
$string['missing_required_version'] = 'L’appel API n’a pas retourné de réponse, cela peut être dû au fait que le serveur Panopto que vous avez tenté d’utiliser ne possède pas la version minimale requise pour supporter cette version du bloc Panopto de Moodle. Cela peut également être dû à l’indisponibilité du serveur.';
$string['moodle_course_not_exist'] = 'Déplacement de la ligne vers l’ancienne carte de dossier, le cours n’existait pas dans Moodle.';
$string['name_style_combination'] = '[nom court] : [nom complet]';
$string['name_style_fullname'] = '[nom complet]';
$string['name_style_shortname'] = '[nom court]';
$string['no_access'] = 'Vous n’avez pas accès à ce dossier Panopto.';
$string['no_completed_recordings'] = 'Aucun enregistrement achevé';
$string['no_course_selected'] = 'Aucun dossier de cours Panopto sélectionné';
$string['no_creators'] = 'Pas de créateurs.';
$string['no_folder_associated_with_moodle_id'] = 'Aucun dossier Panopto n’a été associé à au cours avec l’Id {$a}.';
$string['no_live_sessions'] = 'Pas de sessions en direct';
$string['no_publishers'] = 'Pas d’éditeurs.';
$string['no_server'] = 'Il n’y a pas de serveurs configurés pour le provisionnement. Veuillez contacter l’administrateur système.';
$string['no_users_synced_desc'] = 'Tous les utilisateurs inscrits au cours seront synchronisés avec Panopto dès qu’ils verront le bloc Panopto dans un cours.';
$string['no_viewers'] = 'Pas de visionneurs';
$string['or'] = 'OU';
$string['panopto:addinstance'] = 'Ajouter un nouveau bloc Panopto';
$string['panopto:myaddinstance'] = 'Ajouter un nouveau bloc Panopto à ma page';
$string['panopto:provision_aspublisher'] = 'Provisionner en tant qu’éditeur';
$string['panopto:provision_asteacher'] = 'Provisionner en tant qu’enseignant';
$string['panopto:provision_course'] = 'Provisionner un cours';
$string['panopto:provision_multiple'] = 'Provisionner plusieurs cours à la fois';
$string['panopto_server_error'] = 'Le serveur Panopto {$a} a retourné avec une erreur, nous réessayerons lors de la prochaine connexion.';
$string['pluginname'] = 'Panopto';
$string['podcast_audio'] = 'Podcast audio';
$string['podcast_feeds'] = 'Flux de podcasts';
$string['podcast_video'] = 'Podcast video';
$string['privacy:metadata:block_panopto'] = 'Pour s’intégrer à un service Panopto, les données de l’utilisateur doivent être échangées avec ce service.';
$string['privacy:metadata:block_panopto:email'] = 'Votre e-mail est envoyé à Panopto pour permettre l’utilisation des fonctions de messagerie de Panopto.';
$string['privacy:metadata:block_panopto:firstname'] = 'Votre prénom est envoyé à Panopto pour permettre de montrer le vrai nom de l’utilisateur dans l’expérience utilisateur de Panopto.';
$string['privacy:metadata:block_panopto:lastname'] = 'Votre nom de famille est envoyé à Panopto pour permettre de montrer le vrai nom de l’utilisateur dans l’expérience utilisateur de Panopto.';
$string['privacy:metadata:block_panopto:username'] = 'Votre nom d’utilisateur est envoyé à Panopto pour lui permettre de créer un compte Panopto en utilisant le nom d’utilisateur Moodle comme nom d’utilisateur Panopto.';
$string['provision'] = 'Provisionnement';
$string['provision_access_error'] = 'Cours déjà provisionné dans un dossier Panopto et l’utilisateur actuel n’a pas l’accès pour effectuer des opérations sur ce dossier (l’utilisateur doit avoir au moins un accès de visionneurs dans le dossier Panopto cible).';
$string['provision_course_link_text'] = 'Provisionnement du cours';
$string['provision_courses'] = 'Provisionnement des cours';
$string['provision_error'] = 'Erreur de provisionnement du cours, veuillez vérifier les journaux pour plus de détails.';
$string['provision_successful'] = 'Le dossier de cours avec Id : {$a}';
$string['provisioncourseselect'] = 'Sélectionnez les cours à provisionner.';
$string['provisioncourseselect_help'] = 'Il est possible d’effectuer des sélections multiples en cliquant et avec la touche Ctrl (Windows) ou Cmd (Mac) enfoncée.';
$string['publisher'] = 'Éditeur';
$string['publisher_help'] = 'Un éditeur peut approuver le contenu soumis par les créateurs';
$string['publishers'] = 'Éditeurs';
$string['reinitialize_import_finished'] = 'fini de réinitialiser l’importation.';
$string['reinitialize_import_started'] = 'Début de la réinitialisation de l’importation.';
$string['removed_panopto_adhoc_tasks'] = 'Toutes les tâches adhoc Panopto existantes ont été supprimées.';
$string['require_panopto_version_title'] = 'Version minimale de Panopto requise pour cette version du bloc Panopto de Moodle';
$string['result'] = 'Résultat';
$string['role_map_header'] = 'Modifier les attributions des rôles Panopto';
$string['role_map_header_help'] = 'Choisir comment les rôles Moodle sont associés aux rôles Panopto. Les rôles Moodle non attribués se verront attribuer le rôle de visionneur dans Panopto.';
$string['select_server'] = 'Sélectionnez un serveur Panopto';
$string['select_server_help'] = 'Choisissez le serveur Panopto sur lequel les dossiers de cours seront provisionnés.';
$string['server_info_not_valid'] = 'Le nom du serveur ou la clé d’application ne sont pas valides. Voici les valeurs tentées.';
$string['server_name'] = 'Nom du serveur';
$string['server_not_available'] = 'Le serveur Panopto {$a} n’était pas disponible. Le serveur est peut-être en panne';
$string['show_all'] = 'Afficher plus';
$string['show_less'] = 'Afficher moins';
$string['sso_invalid_authcode'] = 'Code d’authentification non valide.';
$string['sso_invalid_server'] = 'Serveur Panopto non valide. Le serveur doit être configuré dans la configuration du bloc Panopto avant d’être utilisé.';
$string['sso_type_asyncsync'] = 'Faire une tâche de synchronisation asnchrone au moment de la connexion sur Panopto';
$string['sso_type_nosync'] = 'Ne pas synchroniser au moment de la connexion sur Panopto';
$string['sso_type_sync'] = 'Synchroniser au moment de la connexion sur Panopto';
$string['synced_user_info'] = 'Informations sur les utilisateurs synchronisées';
$string['take_notes'] = 'Prenez des notes';
$string['target_invalid_panopto_data'] = 'Les données Panopto dans la table foldermap associée au cours cible de cette importation étaient soit corrompues, soit n’existent plus. Supprimez la relation Panopto et continuez.';
$string['target_moodle_course_deleted'] = 'Le cours auquel cette importation était associée n’existe plus, supprimer la relation avec Panopto et continuez.';
$string['unconfigured'] = 'La configuration globale est incomplète. Veuillez contacter votre administrateur système.';
$string['unknown_provisioning_error'] = 'Une erreur inconnue s’est produite.';
$string['unprovision'] = 'Déprovisionnement';
$string['unprovision_courses'] = 'Déprovisionnement des cours depuis Panopto';
$string['unprovision_error'] = 'Le déprovisionnement a rencontré une erreur et n’a pas abouti.';
$string['unprovision_from_moodle'] = 'Déprovisionner ce cours du dossier Panopto actuel';
$string['unprovision_requires_newer_server'] = 'Le déprovisionnement nécessite au minimum la version 7.0.0 installé sur le serveur Panopto.';
$string['unprovision_successful'] = 'Le déprovisionnement a été un succès';
$string['unprovisioncourseselect'] = 'Sélectionnez les cours que vous voulez déprovisionner de Panopto.';
$string['unprovisioncourseselect_help'] = 'Il est possible d’effectuer des sélections multiples en cliquant avec la touche Ctrl (Windows) ou Cmd (Mac).';
$string['unprovisioned'] = 'Ce cours n’a pas encore été provisionné.';
$string['upgrade_panopto_required_version'] = 'Le serveur Panopto que vous utilisez ne répond pas à la version minimale requise pour supporter cette version du bloc Panopto de Moodle. La mise à niveau sera bloquée jusqu’à ce que tous les serveurs Panopto utilisés répondent aux exigences de la version minimale.';
$string['users_have_been_synced'] = 'Les utilisateurs ci-dessous ont été synchronisés et devraient être prêts à utiliser Panopto.';
$string['users_will_be_synced_custom'] = 'Les futurs utilisateurs seront automatiquement synchronisés en fonction de vos paramètres Panopto personnalisés.';
$string['verifying_permission'] = 'Vérification de l’autorisation';
$string['viewers'] = 'Visionneurs';
$string['watch_live'] = 'Visionner en direct';
