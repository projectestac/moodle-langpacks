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
 * Strings for component 'role', language 'pt', version '4.4'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'A adicionar novo papel';
$string['addrole'] = 'Adicionar novo papel';
$string['advancedoverride'] = 'Redefinição avançada de papéis';
$string['allow'] = 'Permitir';
$string['allowassign'] = 'Permitir atribuição de papéis';
$string['allowed'] = 'Permitidos';
$string['allowoverride'] = 'Permitir redefinir papéis';
$string['allowroletoassign'] = 'Permitir que os utilizadores com o papel de {$a->fromrole} atribuam o papel {$a->targetrole}';
$string['allowroletooverride'] = 'Permitir que os utilizadores com o papel de {$a->fromrole} redefinam o papel {$a->targetrole}';
$string['allowroletoswitch'] = 'Permitir que os utilizadores com o papel de {$a->fromrole} assumam o papel {$a->targetrole}';
$string['allowroletoview'] = 'Permitir que os utilizadores com o papel de {$a->fromrole} vejam o papel {$a->targetrole}';
$string['allowswitch'] = 'Permitir assumir outros papéis';
$string['allowview'] = 'Permitir visualização do papel';
$string['allsiteusers'] = 'Todos os utilizadores do site';
$string['analytics:listinsights'] = 'Mostrar perceções';
$string['analytics:listowninsights'] = 'Listar perceções próprias';
$string['analytics:managemodels'] = 'Gerir modelos';
$string['archetype'] = 'Papel modelo';
$string['archetype_help'] = 'O modelo do papel define as permissões atribuídas quando o papel é reiniciado para os seus valores originais. Define ainda novas permissões para o papel quando o site é atualizado.';
$string['archetypecoursecreator'] = 'MODELO: Criador de disciplina';
$string['archetypeeditingteacher'] = 'MODELO: Professor (editor)';
$string['archetypefrontpage'] = 'MODELO: Utilizador autenticado na página principal';
$string['archetypeguest'] = 'MODELO: Visitante';
$string['archetypemanager'] = 'MODELO: Gestor';
$string['archetypestudent'] = 'MODELO: Aluno';
$string['archetypeteacher'] = 'MODELO: Professor (não editor)';
$string['archetypeuser'] = 'MODELO: Utilizador autenticado';
$string['assignanotherrole'] = 'Atribuir outro papel';
$string['assignedroles'] = 'Papéis atribuídos';
$string['assignerror'] = 'Ocorreu um erro ao atribuir o papel {$a->role} ao utilizador {$a->user}.';
$string['assignglobalroles'] = 'Atribuir papéis no sistema';
$string['assignmentcontext'] = 'Contexto da atribuição';
$string['assignmentoptions'] = 'Opções da atribuição';
$string['assignrole'] = 'Atribuir papel';
$string['assignrolenameincontext'] = 'Atribuir papel \'{$a->role}\' em \'{$a->context}\'';
$string['assignroles'] = 'Atribuir papéis';
$string['assignroles_help'] = 'A atribuição de um papel a um utilizador num contexto dá a esse utilizador as permissões associadas ao papel no contexto em que o papel é atribuído e em todos os contextos abaixo desse. Por exemplo, se for atribuído o papel de aluno a um utilizador numa disciplina, ele terá também o papel de aluno em todas as atividades e blocos da disciplina.';
$string['assignroles_link'] = 'admin/roles/assign';
$string['assignrolesin'] = 'Atribuir papéis no contexto de \'{$a}\'';
$string['assignrolesrelativetothisuser'] = 'Atribuir papéis relativos a este utilizador';
$string['backtoallroles'] = 'Voltar à lista de papéis';
$string['backup:anonymise'] = 'Ocultar identidade dos utilizadores na cópia de segurança';
$string['backup:backupactivity'] = 'Fazer cópia de segurança das atividades';
$string['backup:backupcourse'] = 'Fazer cópia de segurança das disciplinas';
$string['backup:backupsection'] = 'Fazer cópia de segurança das secções';
$string['backup:backuptargetimport'] = 'Fazer cópia de segurança para importação';
$string['backup:configure'] = 'Configurar opções da cópia de segurança';
$string['backup:downloadfile'] = 'Descarregar ficheiros das áreas de cópia de segurança';
$string['backup:userinfo'] = 'Fazer cópia de segurança das informações dos utilizadores';
$string['badges:awardbadge'] = 'Atribuir medalha a um utilizador';
$string['badges:configurecriteria'] = 'Configurar/editar critérios para atribuição de uma medalha';
$string['badges:configuredetails'] = 'Configurar/editar detalhes da medalha';
$string['badges:configuremessages'] = 'Configurar mensagens da medalha';
$string['badges:createbadge'] = 'Criar/duplicar medalhas';
$string['badges:deletebadge'] = 'Apagar medalhas';
$string['badges:earnbadge'] = 'Receber medalha';
$string['badges:manageglobalsettings'] = 'Gerir configurações globais das medalhas';
$string['badges:manageownbadges'] = 'Ver e gerir as medalhas recebidas';
$string['badges:revokebadge'] = 'Remover uma medalha de um utilizador';
$string['badges:viewawarded'] = 'Ver utilizadores que receberam uma medalha específica mas cujo papel não lhes permite atribuir uma medalha';
$string['badges:viewbadges'] = 'Ver medalhas disponíveis sem as ter';
$string['badges:viewotherbadges'] = 'Ver medalhas públicas no perfil de outros utilizadores';
$string['block:edit'] = 'Alterar as configurações de um bloco';
$string['block:view'] = 'Ver bloco';
$string['blog:create'] = 'Criar novas entradas do blogue';
$string['blog:manageentries'] = 'Editar e gerir entradas';
$string['blog:manageexternal'] = 'Gerir e alterar blogues externos';
$string['blog:search'] = 'Pesquisar mensagens dos blogues';
$string['blog:view'] = 'Ver entradas do blogue';
$string['blog:viewdrafts'] = 'Ver rascunhos das mensagens dos blogues';
$string['calendar:manageentries'] = 'Gerir todos os eventos do calendário';
$string['calendar:managegroupentries'] = 'Gerir entradas no calendário de grupo';
$string['calendar:manageownentries'] = 'Gerir entradas no calendário individual';
$string['capabilities'] = 'Permissões';
$string['capability'] = 'Permissão';
$string['category:create'] = 'Criar categorias';
$string['category:delete'] = 'Apagar categorias';
$string['category:manage'] = 'Gerir categorias';
$string['category:update'] = 'Atualizar categorias';
$string['category:viewcourselist'] = 'Visualizar a categoria da disciplina com as respetivas disciplinas';
$string['category:viewhiddencategories'] = 'Ver categorias ocultas';
$string['category:visibility'] = 'Ver categorias ocultas';
$string['checkglobalpermissions'] = 'Verificar permissões do sistema';
$string['checkpermissions'] = 'Verificar permissões';
$string['checkpermissionsin'] = 'Verificar permissões no contexto: {$a}';
$string['checksystempermissionsfor'] = 'Verificar as permissões de sistema de {$a->fullname}';
$string['checkuserspermissionshere'] = 'Verificar permissões que {$a->fullname} tem em {$a->contextlevel}';
$string['chooseroletoassign'] = 'Atribuição de papéis';
$string['cohort:assign'] = 'Adicionar/remover Grupos globais';
$string['cohort:configurecustomfields'] = 'Configurar campos personalizados do Grupo global';
$string['cohort:manage'] = 'Criar, apagar e mover Grupos globais';
$string['cohort:view'] = 'Ver Grupos globais ao nível do site';
$string['comment:delete'] = 'Apagar comentários';
$string['comment:post'] = 'Publicar comentários';
$string['comment:view'] = 'Ver comentários';
$string['competency:competencygrade'] = 'Definir avaliação da competência';
$string['competency:competencymanage'] = 'Gerir quadros de competências';
$string['competency:competencyview'] = 'Ver quadros de competências';
$string['competency:coursecompetencyconfigure'] = 'Configurar as definições das competências da disciplina';
$string['competency:coursecompetencygradable'] = 'Receber avaliação da competência';
$string['competency:coursecompetencymanage'] = 'Gerir competências da disciplina';
$string['competency:coursecompetencyview'] = 'Ver competências da disciplina';
$string['competency:evidencedelete'] = 'Apagar comprovativo';
$string['competency:plancomment'] = 'Comentar um plano de aprendizagem';
$string['competency:plancommentown'] = 'Comentar um plano de aprendizagem seu';
$string['competency:planmanage'] = 'Gerir planos de aprendizagem';
$string['competency:planmanagedraft'] = 'Gerir rascunho de planos de aprendizagem';
$string['competency:planmanageown'] = 'Gerir os seus planos de aprendizagem';
$string['competency:planmanageowndraft'] = 'Gerir os seus rascunhos de planos de aprendizagem';
$string['competency:planrequestreview'] = 'Requerer revisão de um plano de aprendizagem';
$string['competency:planrequestreviewown'] = 'Requerer revisão de um plano de aprendizagem seu';
$string['competency:planreview'] = 'Rever um plano de aprendizagem';
$string['competency:planview'] = 'Visualizar todos os planos de aprendizagem';
$string['competency:planviewdraft'] = 'Visualizar rascunhos de planos de aprendizagem';
$string['competency:planviewown'] = 'Visualizar os seus planos de aprendizagem';
$string['competency:planviewowndraft'] = 'Visualizar os seus rascunhos de planos de aprendizagem';
$string['competency:templatemanage'] = 'Gerir modelos de planos de aprendizagem';
$string['competency:templateview'] = 'Visualizar modelos de planos de aprendizagem';
$string['competency:usercompetencycomment'] = 'Comentar numa competência de um utilizador';
$string['competency:usercompetencycommentown'] = 'Comentar numa competência sua';
$string['competency:usercompetencyrequestreview'] = 'Requerer revisão da uma competência de um utilizador';
$string['competency:usercompetencyrequestreviewown'] = 'Requerer revisão de uma competência sua';
$string['competency:usercompetencyreview'] = 'Rever uma competência de um utilizador';
$string['competency:usercompetencyview'] = 'Visualizar uma competência de um utilizador';
$string['competency:userevidencemanage'] = 'Gerir comprovativos de aprendizagem anterior';
$string['competency:userevidencemanageown'] = 'Gerir os seus comprovativos de aprendizagem anterior';
$string['competency:userevidenceview'] = 'Visualizar comprovativos de aprendizagem anterior de um utilizador';
$string['confirmaddadmin'] = 'Tem a certeza de que pretende designar o utilizador <strong>{$a}</strong> como administrador do site?';
$string['confirmaddadmins'] = 'Tem a certeza de que pretende adicionar à lista de administradores do site os seguintes utilizadores?';
$string['confirmdeladmin'] = 'Tem a certeza de que pretende remover o utilizador <strong>{$a}</strong> da lista de administradores do site?';
$string['confirmremoveadmins'] = 'Tem a certeza de que pretende remover da lista de administradores do site os seguintes utilizadores?';
$string['confirmroleprevent'] = 'Tem a certeza de que pretende remover <"strong>{$a->role}</strong>" da lista dos papéis permitidos para a permissão \'{$a->cap}\' no contexto {$a->context}?';
$string['confirmroleunprohibit'] = 'Tem a certeza de que pretende remover "<strong>{$a->role}</strong>" da lista dos papéis proibidos para a permissão \'{$a->cap}\' no contexto {$a->context}?';
$string['confirmunassign'] = 'Tem a certeza de que pretende retirar este papel a este utilizador?';
$string['confirmunassignno'] = 'Cancelar';
$string['confirmunassigntitle'] = 'Confirmar mundança de papel';
$string['confirmunassignyes'] = 'Remover';
$string['contentbank:access'] = 'Aceder ao banco de conteúdos';
$string['contentbank:copyanycontent'] = 'Copiar qualquer conteúdo no banco de conteúdo';
$string['contentbank:copycontent'] = 'Copiar conteúdo no banco de conteúdo';
$string['contentbank:deleteanycontent'] = 'Apagar qualquer conteúdo do banco de conteúdos';
$string['contentbank:deleteowncontent'] = 'Apagar conteúdo do banco de conteúdos pessoal';
$string['contentbank:downloadcontent'] = 'Descarregar conteúdo do banco de conteúdos';
$string['contentbank:manageanycontent'] = 'Gerir qualquer conteúdo do banco de conteúdos';
$string['contentbank:manageowncontent'] = 'Gerir próprio conteúdo do banco de conteúdos próprio';
$string['contentbank:upload'] = 'Carregar novo conteúdo para o banco de conteúdos';
$string['contentbank:useeditor'] = 'Criar ou editar conteúdo usando um editor de tipo de conteúdo';
$string['contentbank:viewunlistedcontent'] = 'Visualizar conteúdo não listado do banco de conteúdos';
$string['context'] = 'Contexto';
$string['contextrolenotallowed'] = 'Papel \'{$a}\' não permitido neste contexto.';
$string['course:activityvisibility'] = 'Ocultar/mostrar atividades';
$string['course:bulkmessaging'] = 'Enviar uma mensagem a várias pessoas';
$string['course:changecategory'] = 'Modificar a categoria da disciplina';
$string['course:changefullname'] = 'Modificar o nome completo da disciplina';
$string['course:changeidnumber'] = 'Modificar o ID da disciplina';
$string['course:changelockedcustomfields'] = 'Alterar campos personalizados bloqueados';
$string['course:changeshortname'] = 'Modificar o nome curto da disciplina';
$string['course:changesummary'] = 'Modificar a descrição da disciplina';
$string['course:configurecoursecommunication'] = 'Definir as configurações de comunicação da disciplina';
$string['course:configurecustomfields'] = 'Configurar campos personalizados da disciplina';
$string['course:configuredownloadcontent'] = 'Configurar descarregamento do conteúdo da disciplina';
$string['course:create'] = 'Criar disciplinas';
$string['course:creategroupconversations'] = 'Criar conversações de grupo';
$string['course:delete'] = 'Apagar disciplinas';
$string['course:downloadcoursecontent'] = 'Descarregar conteúdo da disciplina';
$string['course:enrolconfig'] = 'Configurar instâncias de incrição nas disciplinas';
$string['course:enrolreview'] = 'Rever papéis da disciplina';
$string['course:ignoreavailabilityrestrictions'] = 'Ignorar condições de acesso';
$string['course:ignorefilesizelimits'] = 'Utilizar ficheiros maiores do que quaisquer restrições de tamanho';
$string['course:isincompletionreports'] = 'Ser mostrado nos relatórios de conclusão';
$string['course:manageactivities'] = 'Gerir atividades';
$string['course:managefiles'] = 'Gerir ficheiros';
$string['course:managegrades'] = 'Gerir notas';
$string['course:managegroups'] = 'Gerir grupos';
$string['course:managescales'] = 'Gerir escalas';
$string['course:markcomplete'] = 'Marcar utilizadores como "concluído" na conclusão da disciplina';
$string['course:movesections'] = 'Mover secções';
$string['course:overridecompletion'] = 'Substituir o estado de conclusão da atividade';
$string['course:recommendactivity'] = 'Recomendar atividades no seletor de atividades';
$string['course:renameroles'] = 'Alterar os nomes dos papéis';
$string['course:request'] = 'Pedir nova disciplina';
$string['course:reset'] = 'Repor disciplina';
$string['course:reviewotherusers'] = 'Rever outros utilizadores';
$string['course:sectionvisibility'] = 'Controlar visibilidade das secções';
$string['course:setcurrentsection'] = 'Definir secção atual';
$string['course:setforcedlanguage'] = 'Forçar idioma da disciplina ou atividade';
$string['course:tag'] = 'Alterar palavras-chave da disciplina';
$string['course:togglecompletion'] = 'Marcar manualmente as atividades como concluídas';
$string['course:update'] = 'Atualizar as configurações da disciplina';
$string['course:useremail'] = 'Ativar/desativar endereço de e-mail';
$string['course:view'] = 'Ver disciplinas sem permissão para participar';
$string['course:viewcoursegrades'] = 'Ver notas de disciplinas';
$string['course:viewhiddenactivities'] = 'Ver atividades ocultas';
$string['course:viewhiddencourses'] = 'Ver disciplinas ocultas';
$string['course:viewhiddengroups'] = 'Ver grupos ocultos';
$string['course:viewhiddensections'] = 'Ver secções ocultas';
$string['course:viewhiddenuserfields'] = 'Ver campos de utilizador ocultos';
$string['course:viewparticipants'] = 'Ver participantes';
$string['course:viewscales'] = 'Ver escalas';
$string['course:viewsuspendedusers'] = 'Ver utilizadores suspensos';
$string['course:visibility'] = 'Ocultar/mostrar disciplinas';
$string['createrolebycopying'] = 'Criar um papel copiado de {$a}';
$string['createthisrole'] = 'Criar este papel';
$string['currentcontext'] = 'Contexto atual';
$string['currentrole'] = 'Papel atual';
$string['customroledescription'] = 'Descrição personalizada';
$string['customroledescription_help'] = 'As descrições dos papéis-padrão são traduzidas automaticamente caso a descrição personalizada esteja vazia.';
$string['customrolename'] = 'Nome completo personalizado';
$string['customrolename_help'] = 'Os nomes dos papéis-padrão são localizados automaticamente se o nome personalizado estiver em branco. Tem de indicar um nome completo para todos os papéis personalizados.';
$string['defaultrole'] = 'Papel predefinido';
$string['defaultx'] = 'Predefinido: {$a}';
$string['defineroles'] = 'Definir papéis';
$string['definitionofrolex'] = 'Definição do papel \'{$a}\'';
$string['deletecourseoverrides'] = 'Apagar todas as redefinições existentes na disciplina';
$string['deletelocalroles'] = 'Apagar todas as atribuições locais de papéis';
$string['deleterolesure'] = '<p>Tem a certeza de que pretende apagar o papel "{$a->name} ({$a->shortname})"?</p><p>Atualmente existem {$a->count} utilizadores aos quais foi atribuído este papel.</p>';
$string['deletexrole'] = 'Apagar o papel {$a}';
$string['duplicaterole'] = 'Duplicar papel';
$string['duplicaterolesure'] = '<p>Tem a certeza de que pretende duplicar o papel "{$a->name} ({$a->shortname})"?</p>';
$string['editingrolex'] = 'A editar o papel \'{$a}\'';
$string['editrole'] = 'Editar papel';
$string['editxrole'] = 'Editar o papel {$a}';
$string['errorbadrolename'] = 'Nome do papel incorreto';
$string['errorbadroleshortname'] = 'Nome curto do papel incorreto';
$string['errorexistsrolename'] = 'O nome do papel já existe';
$string['errorexistsroleshortname'] = 'O nome curto do papel já existe';
$string['errorroleshortnametoolong'] = 'O nome curto não pode exceder 100 caracteres';
$string['eventcapabilityassigned'] = 'Permissão atribuída';
$string['eventcapabilityunassigned'] = 'Permissão não atribuída';
$string['eventroleallowassignupdated'] = 'Permitir atribuição de papel';
$string['eventroleallowoverrideupdated'] = 'Permitir redefinir papel';
$string['eventroleallowswitchupdated'] = 'Permitir trocar de papel';
$string['eventroleallowviewupdated'] = 'Permitir visualização de papel';
$string['eventroleassigned'] = 'Papel atribuído';
$string['eventrolecapabilitiesupdated'] = 'Permissões do papel atualizadas';
$string['eventrolecreated'] = 'Papel criado';
$string['eventroledeleted'] = 'Papel eliminado';
$string['eventroleunassigned'] = 'Papel não atribuído';
$string['eventroleupdated'] = 'Papel atualizado';
$string['existingadmins'] = 'Administradores do site';
$string['existingusers'] = '{$a} utilizadores existentes';
$string['explanation'] = 'Explicação';
$string['export'] = 'Exportar';
$string['extusers'] = 'Utilizadores existentes';
$string['extusersmatching'] = 'Utilizadores existentes que correspondem a \'{$a}\'';
$string['filter:manage'] = 'Gerir configurações atuais do filtro';
$string['frontpageuser'] = 'Utilizador autenticado na página principal';
$string['frontpageuserdescription'] = 'Todos os utilizadores com sessão na página principal.';
$string['globalrole'] = 'Papel global';
$string['globalroleswarning'] = 'Aviso! Todos os papéis que atribuir nesta página serão aplicados aos utilizadores indicados em todo o site, incluindo a página principal e todas as disciplinas.';
$string['gotoassignroles'] = 'Ir para Atribuição de papéis em {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Ir para Atribuição de papéis no sistema';
$string['grade:edit'] = 'Editar notas';
$string['grade:export'] = 'Exportar notas';
$string['grade:hide'] = 'Ocultar/mostrar notas ou itens';
$string['grade:import'] = 'Importar notas';
$string['grade:lock'] = 'Bloquear notas ou itens';
$string['grade:manage'] = 'Gerir itens de avaliação';
$string['grade:managegradingforms'] = 'Gerir métodos avançados de avaliação';
$string['grade:manageletters'] = 'Gerir notas alfabéticas';
$string['grade:manageoutcomes'] = 'Gerir resultados da aprendizagem';
$string['grade:managesharedforms'] = 'Gerir formulários de avaliação dos métodos avançados de avaliação';
$string['grade:override'] = 'Ajustar notas';
$string['grade:sharegradingforms'] = 'Partilhar formulários de avaliação dos métodos de avançados de avaliação';
$string['grade:unlock'] = 'Bloquear notas ou itens';
$string['grade:view'] = 'Ver as próprias notas';
$string['grade:viewall'] = 'Ver notas de outros utilizadores';
$string['grade:viewhidden'] = 'Ver notas ocultas para o próprio';
$string['group:configurecustomfields'] = 'Configurar campos personalizados de grupo/agrupamento';
$string['h5p:deploy'] = 'Implantar conteúdo H5P';
$string['h5p:setdisplayoptions'] = 'Definir opções de exibição do H5P';
$string['h5p:updatelibraries'] = 'Gerir tipos de conteúdo H5P';
$string['highlightedcellsshowdefault'] = 'As permissões destacadas na tabela abaixo mostram as permissões predefinidas para o papel modelo atualmente selecionado acima.';
$string['highlightedcellsshowinherit'] = 'As células destacadas na tabela abaixo mostram as permissões (se existirem) que serão herdadas. À parte das permissões que pretende alterar, deve deixar as restantes com a permissão \'Herdar\'.';
$string['inactiveformorethan'] = 'sem atividade há mais de {$a->timeperiod}';
$string['ingroup'] = 'no grupo {$a->group}';
$string['inherit'] = 'Herdar';
$string['invalidpresetfile'] = 'Ficheiro de definição de papel inválido';
$string['legacy:admin'] = 'PAPEL LEGADO: Administrador';
$string['legacy:coursecreator'] = 'PAPEL LEGADO: Criador de disciplina';
$string['legacy:editingteacher'] = 'PAPEL LEGADO: Professor (editor)';
$string['legacy:guest'] = 'PAPEL LEGADO: Visitante';
$string['legacy:student'] = 'PAPEL LEGADO: Aluno';
$string['legacy:teacher'] = 'PAPEL LEGADO: Professor (não editor)';
$string['legacy:user'] = 'PAPEL LEGADO: Utilizador autenticado';
$string['legacytype'] = 'Tipo de legado de atribuições';
$string['listallroles'] = 'Mostrar lista de papéis';
$string['localroles'] = 'Papéis atribuídos localmente';
$string['mainadmin'] = 'Administrador principal';
$string['mainadminset'] = 'Definir administrador principal';
$string['manageadmins'] = 'Gerir os administradores do site';
$string['manager'] = 'Gestor';
$string['managerdescription'] = 'Os gestores podem aceder às disciplinas e modificá-las mas normalmente não participam nas disciplinas.';
$string['manageroles'] = 'Gerir papéis';
$string['maybeassignedin'] = 'Tipos de contextos em que este papel pode ser atribuído';
$string['moodlenet:shareactivity'] = 'Partilhar atividades no MoodleNet';
$string['moodlenet:sharecourse'] = 'Partilhar disciplina no MoodleNet';
$string['morethan'] = 'Mais de {$a}';
$string['multipleroles'] = 'Papéis múltiplos';
$string['my:configsyspages'] = 'Configurar modelos do sistema para o Painel do utilizador';
$string['my:manageblocks'] = 'Gerir blocos do Painel do utilizador';
$string['neededroles'] = 'Papéis com permissão';
$string['nocapabilitiesincontext'] = 'Não existem permissões disponíveis neste contexto';
$string['noneinthisx'] = 'Nenhum em {$a}';
$string['noneinthisxmatching'] = 'Nenhum utilizador corresponde a \'{$a->search}\' em {$a->contexttype}';
$string['norole'] = 'Sem papel';
$string['noroleassignments'] = 'Não foi atribuído qualquer papel a este utilizador neste site.';
$string['noroles'] = 'Sem papéis';
$string['notabletoassignroleshere'] = 'A atribuição de papéis neste contexto não foi ativada pelo administrador.';
$string['notabletooverrideroleshere'] = 'Não tem permissão para redefinir aqui as permissões de nenhum papel';
$string['notes:manage'] = 'Gerir anotações';
$string['notes:view'] = 'Ver anotações';
$string['notset'] = 'Não definido';
$string['novisibleroles'] = 'Sem papéis';
$string['overrideanotherrole'] = 'Redefinir outro papel';
$string['overridecontext'] = 'Contexto da redefinição';
$string['overridepermissions'] = 'Redefinir permissões';
$string['overridepermissions_help'] = 'Redefinir permissões faz com que as permissões selecionadas sejam permitidas, ou não, num contexto específico.';
$string['overridepermissions_link'] = 'admin/roles/override';
$string['overridepermissionsforrole'] = 'Redefinir permissões do papel \'{$a->role}\' em {$a->context}';
$string['overridepermissionsin'] = 'Redefinir permissões em {$a}';
$string['overrideroles'] = 'Redefinir papéis';
$string['overriderolesin'] = 'Redefinir papéis em {$a}';
$string['overrides'] = 'Ajustamentos';
$string['overridesbycontext'] = 'Redefinir (por contexto)';
$string['payment:manageaccounts'] = 'Gerir contas';
$string['payment:viewpayments'] = 'Visualizar pagamentos';
$string['permission'] = 'Permissão';
$string['permission_help'] = 'As permissões podem ser definidas com base em 4 opções:

* Não definido
* Permitir - A permissão é concedida
* Impedir - A permissão é removida caso tenha sido permitida num contexto superior
* Proibir - A permissão é completamente proibida e não pode ser adaptada em nenhum contexto mais baixo (mais específico)';
$string['permissions'] = 'Permissões';
$string['permissionsforuser'] = 'Permissões para o utilizador {$a}';
$string['permissionsincontext'] = 'Permissões em {$a}';
$string['portfolio:export'] = 'Exportar para portefólios';
$string['potentialusers'] = '{$a} potenciais utilizadores';
$string['potusers'] = 'Potenciais utilizadores';
$string['potusersmatching'] = 'Potenciais utilizadores correspondentes a \'{$a}\'';
$string['prevent'] = 'Impedir';
$string['privacy:metadata:preference:showadvanced'] = 'Controlar o botão de alternar para o modo avançado.';
$string['privacy:metadata:role_assignments'] = 'Atribuições de papéis';
$string['privacy:metadata:role_assignments:component'] = 'Módulo responsável pela atribuição de papel, em branco quando atribuído manualmente.';
$string['privacy:metadata:role_assignments:itemid'] = 'O ID da autenticação/instância auth responsável por este papel';
$string['privacy:metadata:role_assignments:modifierid'] = 'O ID do utilizador que criou ou modificou o papel';
$string['privacy:metadata:role_assignments:roleid'] = 'O ID do papel';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'Esta tabela armazena os papéis atribuídos em cada contexto.';
$string['privacy:metadata:role_assignments:timemodified'] = 'A data de quando o papel foi atribuído ou modificado.';
$string['privacy:metadata:role_assignments:userid'] = 'O ID do utilizador';
$string['privacy:metadata:role_capabilities'] = 'Permissões do papel';
$string['privacy:metadata:role_capabilities:capability'] = 'O nome da permissão.';
$string['privacy:metadata:role_capabilities:modifierid'] = 'O ID do utilizador que criou ou modificou a permissão.';
$string['privacy:metadata:role_capabilities:permission'] = 'Tipo de permissão: herdar, permitir, impedir, proibir.';
$string['privacy:metadata:role_capabilities:roleid'] = 'O ID do papel.';
$string['privacy:metadata:role_capabilities:tableexplanation'] = 'As permissões e as permissões redefinidas de um papel em particular num contexto particular';
$string['privacy:metadata:role_capabilities:timemodified'] = 'A data de quando a permissão foi criada ou modificada.';
$string['privacy:metadata:role_cohortroles'] = 'Papéis para Grupo global';
$string['prohibit'] = 'Proibir';
$string['prohibitedroles'] = 'Proibido';
$string['question:add'] = 'Adicionar novas perguntas';
$string['question:commentall'] = 'Comentar em todas as perguntas';
$string['question:commentmine'] = 'Comentar em todas as suas perguntas';
$string['question:config'] = 'Configurar tipos de pergunta';
$string['question:editall'] = 'Editar todas as perguntas';
$string['question:editmine'] = 'Editar perguntas próprias';
$string['question:flag'] = 'Marcar perguntas durante a tentativa de resposta ao teste';
$string['question:managecategory'] = 'Editar categorias de perguntas';
$string['question:moveall'] = 'Mover todas as perguntas';
$string['question:movemine'] = 'Mover as suas próprias perguntas';
$string['question:tagall'] = 'Etiquetar todas as perguntas';
$string['question:tagmine'] = 'Etiquetar as suas perguntas';
$string['question:useall'] = 'Utilizar todas as perguntas';
$string['question:usemine'] = 'Utilizar as próprias perguntas';
$string['question:viewall'] = 'Ver todas as perguntas';
$string['question:viewmine'] = 'Ver perguntas próprias';
$string['rating:rate'] = 'Adicionar notas aos itens';
$string['rating:view'] = 'Ver a sua nota total';
$string['rating:viewall'] = 'Ver as notas dadas individualmente';
$string['rating:viewany'] = 'Ver as notas totais de um utilizador';
$string['reportbuilder:edit'] = 'Editar relatórios personalizados';
$string['reportbuilder:editall'] = 'Editar todos os relatórios personalizados';
$string['reportbuilder:scheduleviewas'] = 'Relatórios agendados para serem vistos como outros utilizadores';
$string['reportbuilder:view'] = 'Ver relatórios personalizados';
$string['reportbuilder:viewall'] = 'Ver todos os relatórios personalizados';
$string['resetrole'] = 'Redefinir';
$string['resettingrole'] = 'Redefinir papel \'{$a}\'';
$string['restore:configure'] = 'Configurar opções do restauro';
$string['restore:createuser'] = 'Criar utilizadores no restauro';
$string['restore:restoreactivity'] = 'Restaurar atividades';
$string['restore:restorecourse'] = 'Restaurar disciplinas';
$string['restore:restoresection'] = 'Restaurar secções';
$string['restore:restoretargetimport'] = 'Restaurar a partir de ficheiros marcados como importados';
$string['restore:rolldates'] = 'Com permissão para mudar as datas da configuração das atividades no restauro';
$string['restore:uploadfile'] = 'Carregar ficheiros para as áreas das cópias de segurança';
$string['restore:userinfo'] = 'Restaurar informações dos utilizadores';
$string['restore:viewautomatedfilearea'] = 'Restaurar disciplinas de cópias de segurança automáticas';
$string['risks'] = 'Riscos';
$string['role:assign'] = 'Atribuir papéis aos utilizadores';
$string['role:manage'] = 'Criar e editar papéis';
$string['role:override'] = 'Redefinir papéis';
$string['role:review'] = 'Rever permissões de outros';
$string['role:safeoverride'] = 'Redefinir permissões seguras de outros';
$string['role:switchroles'] = 'Assumir outros papéis';
$string['roleallowheader'] = 'Permitir papel:';
$string['roleallowinfo'] = 'Selecionar o papel a ser adicionado à lista de papéis permitidos no contexto \'{$a->context}\', permissão \'{$a->cap}\':';
$string['roleassignment'] = 'Atribuição de papel';
$string['roleassignments'] = 'Atribuição de papéis';
$string['roledefinitions'] = 'Definições do papel';
$string['rolefullname'] = 'Nome do papel';
$string['roleincontext'] = '{$a->role} em {$a->context}';
$string['roleoriginalname'] = 'Nome original';
$string['roleprohibitheader'] = 'Proibir papel';
$string['roleprohibitinfo'] = 'Selecionar o papel a ser adicionado à lista de papéis proibidos no contexto \'{$a->context}\', permissão \'{$a->cap}\':';
$string['rolerepreset'] = 'Usar configurações predefinidas do papel';
$string['roleresetdefaults'] = 'Configurações predefinidas';
$string['roleresetrole'] = 'Usar papel ou modelo';
$string['rolerisks'] = 'Riscos do papel';
$string['roles'] = 'Papéis';
$string['roles_help'] = 'Papéis são conjuntos de permissões, definidos para todo o sistema, que são atribuídos aos utilizadores em contextos específicos.';
$string['roles_link'] = 'papéis';
$string['roleselect'] = 'Selecionar papel';
$string['rolesforuser'] = 'Papéis do utilizador {$a}';
$string['roleshortname'] = 'Nome curto';
$string['roleshortname_help'] = 'O nome curto do papel é um identificador de papel de baixo nível no qual apenas são permitidos caracteres ASCII alfanuméricos.';
$string['roletoassign'] = 'Papel a atribuir';
$string['roletooverride'] = 'Papel a redefinir';
$string['safeoverridenotice'] = 'Nota: As permissões com riscos foram bloqueadas porque apenas possui permissão para redefinir permissões seguras.';
$string['search:query'] = 'Realizar pesquisas em todo o site';
$string['selectanotheruser'] = 'Selecionar outro utilizador';
$string['selectauser'] = 'Selecionar um utilizador';
$string['selectrole'] = 'Selecionar um papel';
$string['showallroles'] = 'Mostrar todos os papéis';
$string['showthisuserspermissions'] = 'Mostrar as permissões deste utilizador';
$string['site:accessallgroups'] = 'Aceder a todos os grupos';
$string['site:approvecourse'] = 'Aprovar criação de disciplinas';
$string['site:backup'] = 'Fazer cópias de segurança de disciplinas';
$string['site:config'] = 'Alterar configurações do site';
$string['site:configview'] = 'Mostrar a hierarquia da Administração do Site (mas não com todas as páginas)';
$string['site:deleteanymessage'] = 'Apagar todas as mensagens do site';
$string['site:deleteownmessage'] = 'Apagar as mensagens enviadas pelo e para o utilizador';
$string['site:doanything'] = 'Autorizado a fazer tudo';
$string['site:doclinks'] = 'Mostrar hiperligações para documentos localizados fora do site';
$string['site:forcelanguage'] = 'Sobrepor idioma da disciplina';
$string['site:import'] = 'Importar outras disciplinas para uma disciplina';
$string['site:maintenanceaccess'] = 'Aceder ao site enquanto estiver em modo de manutenção';
$string['site:manageallmessaging'] = 'Adicionar, apagar, bloquear e desbloquear contactos para qualquer utilizador';
$string['site:manageblocks'] = 'Gerir blocos a nível do site';
$string['site:managecontextlocks'] = 'Gerir contextos bloqueados';
$string['site:messageanyuser'] = 'Ignorar as preferências de privacidade do utilizador para enviar mensagens para qualquer utilizador';
$string['site:mnetloginfromremote'] = 'Autenticação de um Moodle remoto';
$string['site:mnetlogintoremote'] = 'Navegar para um Moodle remoto';
$string['site:readallmessages'] = 'Ler todas as mensagens no site';
$string['site:restore'] = 'Restaurar disciplinas';
$string['site:senderrormessage'] = 'Enviar uma mensagem para o suporte a partir da página de erro';
$string['site:sendmessage'] = 'Enviar mensagens para qualquer utilizador';
$string['site:trustcontent'] = 'Confiar no conteúdo submetido';
$string['site:uploadusers'] = 'Carregar novos utilizadores a partir de um ficheiro';
$string['site:viewanonymousevents'] = 'Mostrar eventos anónimos nos relatórios';
$string['site:viewfullnames'] = 'Ver sempre o nome completo dos utilizadores';
$string['site:viewparticipants'] = 'Ver participantes';
$string['site:viewreports'] = 'Ver relatórios';
$string['site:viewuseridentity'] = 'Ver os dados completos do utilizador nas listas';
$string['siteadministrators'] = 'Administradores do site';
$string['siteadministratorsconfigphp'] = 'A lista de administradores do site não pode ser alterada porque está definida em config.php.';
$string['tag:edit'] = 'Editar palavras-chave existentes';
$string['tag:editblocks'] = 'Editar blocos nas páginas de palavras-chave';
$string['tag:flag'] = 'Marcar palavras-chave como inapropriadas';
$string['tag:manage'] = 'Gerir todas as palavras-chave';
$string['thisnewrole'] = 'Este novo papel';
$string['thisusersroles'] = 'Papéis atribuídos a este utilizador';
$string['unassignarole'] = 'Retirar o papel {$a}';
$string['unassignconfirm'] = 'Pretende realmente retirar o papel "{$a->role}" ao utilizador "{$a->user}"?';
$string['unassignerror'] = 'Ocorreu um erro ao retirar o papel {$a->role} ao utilizador {$a->user}.';
$string['user:changeownpassword'] = 'Modificar a sua senha';
$string['user:create'] = 'Criar utilizadores';
$string['user:delete'] = 'Apagar utilizadores';
$string['user:editmessageprofile'] = 'Editar o perfil de envio de mensagens do utilizador';
$string['user:editownmessageprofile'] = 'Editar o seu perfil de envio de mensagens';
$string['user:editownprofile'] = 'Editar o próprio perfil';
$string['user:editprofile'] = 'Editar perfil do utilizador';
$string['user:ignoreuserquota'] = 'Ignorar o limite de quota do utilizador';
$string['user:loginas'] = 'Entrar como outro utilizador';
$string['user:manageblocks'] = 'Gerir blocos no perfil do utilizador de outros utilizadores';
$string['user:manageownblocks'] = 'Gerir blocos no seu perfil público de utilizador';
$string['user:manageownfiles'] = 'Gerir ficheiros nas áreas de ficheiros privados';
$string['user:managesyspages'] = 'Configurar a estrutura predefinida das páginas públicas dos perfis dos utilizadores';
$string['user:readuserblogs'] = 'Ver todos os blogues do utilizador';
$string['user:readuserposts'] = 'Ver todos os tópicos de Fórum do utilizador';
$string['user:update'] = 'Modificar o perfil dos utilizadores';
$string['user:viewalldetails'] = 'Ver a informação completa do utilizador';
$string['user:viewdetails'] = 'Ver perfil dos utilizadores';
$string['user:viewhiddendetails'] = 'Ver dados ocultos dos utilizadores';
$string['user:viewlastip'] = 'Ver último endereço IP do utilizador';
$string['user:viewuseractivitiesreport'] = 'Ver relatórios de atividade do utilizador';
$string['user:viewusergrades'] = 'Ver notas de utilizador';
$string['usersfrom'] = 'Utilizadores de {$a}';
$string['usersfrommatching'] = 'Utilizadores de {$a->contextname} que correspondem a \'{$a->search}\'';
$string['usersinthisx'] = 'Utilizadores deste {$a}';
$string['usersinthisxmatching'] = 'Utilizadores deste {$a->contexttype} que correspondem a \'{$a->search}\'';
$string['userswithrole'] = 'Todos os utilizadores com um papel';
$string['userswiththisrole'] = 'Utilizadores com papel';
$string['useshowadvancedtochange'] = 'Usar \'Mostrar avançado\' para alterar';
$string['viewingdefinitionofrolex'] = 'A visualizar as configurações do papel \'{$a}\'';
$string['viewrole'] = 'Ver detalhes de papéis';
$string['webservice:createmobiletoken'] = 'Criar um token de web service para acesso com dispositivos móveis';
$string['webservice:createtoken'] = 'Criar um token de web service';
$string['webservice:managealltokens'] = 'Gerir tokens dos web services dos utilizadores';
$string['whydoesuserhavecap'] = 'Porque é que {$a->fullname} tem a permissão {$a->capability} no contexto {$a->context}?';
$string['whydoesusernothavecap'] = 'Porque é que {$a->fullname} não tem a permissão {$a->capability} no contexto {$a->context}?';
$string['xroleassignments'] = 'Papéis atribuídos a {$a}';
$string['xuserswiththerole'] = 'Utilizadores com o papel "{$a->role}"';
