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
 * Strings for component 'completion', language 'pt', branch 'MOODLE_28_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Atingir nota';
$string['activities'] = 'Atividades';
$string['activitiescompleted'] = 'Conclusão de atividade';
$string['activitiescompletednote'] = 'Nota: a Conclusão da atividade deve ser definida para uma atividade para que seja exibida na lista acima.';
$string['activityaggregation'] = 'Condição requer';
$string['activityaggregation_all'] = 'TODAS as atividades selecionadas estão estarem concluídas';
$string['activityaggregation_any'] = 'QUALQUER UMA das atividades selecionadas está concluída';
$string['activitycompletion'] = 'Conclusão da atividade';
$string['aggregationmethod'] = 'Requer verificação de';
$string['all'] = 'Todos';
$string['any'] = 'Qualquer';
$string['approval'] = 'Aprovação';
$string['badautocompletion'] = 'Quando seleciona a conclusão automática, tem de ativar pelo menos uma das condições (abaixo).';
$string['completed'] = 'Concluído';
$string['completedunlocked'] = 'Opções de conclusão desbloqueadas';
$string['completedunlockedtext'] = 'Quando guardar as alterações, o estado de conclusão de todos os alunos será apagado. Se não desejar que isto aconteça, não guarde as alterações.';
$string['completedwarning'] = 'Opções de conclusão bloqueadas';
$string['completedwarningtext'] = 'Um ou mais alunos ({$a}) já assinalaram esta atividade como concluída. Se alterar as opções de conclusão irá apagar o estado de conclusão destes alunos, podendo gerar alguma confusão. Assim, as opções foram bloqueadas e não devem ser desbloqueadas, excepto se for absolutamente necessário.';
$string['completion'] = 'Verificação da conclusão';
$string['completionactivitydefault'] = 'Usar configuração predefinida da atividade';
$string['completion-alt-auto-enabled'] = 'A atividade é dada como concluída pelo sistema quando se verificarem determinadas condições';
$string['completion-alt-auto-fail'] = 'Concluída (não atingiu nota de aprovação)';
$string['completion-alt-auto-n'] = 'Não concluída';
$string['completion-alt-auto-pass'] = 'Concluída (atingiu nota de aprovação)';
$string['completion-alt-auto-y'] = 'Concluída';
$string['completion-alt-manual-enabled'] = 'Os alunos podem assinalar a atividade como concluída';
$string['completion-alt-manual-n'] = 'Não concluída; Selecione para dar como concluída';
$string['completion-alt-manual-y'] = 'Concluída; Selecione para dar como não concluída';
$string['completion_automatic'] = 'Dar como concluída quando se verificarem as seguintes condições';
$string['completiondefault'] = 'Usar configuração predefinida da Verificação de conclusão';
$string['completiondisabled'] = 'Desativado, não mostrar nas configurações das atividades';
$string['completionduration'] = 'Inscrição';
$string['completionenabled'] = 'Disponível, via configurações de conclusão e das atividades';
$string['completionexpected'] = 'Data prevista de conclusão';
$string['completionexpected_help'] = 'Esta configuração define a data em que se espera que a atividade esteja concluída. A data não é apresentada aos alunos, apenas é visível no relatório de conclusão da atividade.';
$string['completion-fail'] = 'Completo (não atingiu a nota de passagem)';
$string['completion_help'] = 'Se ativar esta opção, a conclusão da atividade será controlada, manualmente ou automaticamente, com base em determinadas condições. Podem ser definidas várias condições, se necessário. Neste caso, a atividade apenas será dada como concluída quando TODAS as condições se verificarem.

As atividades concluídas serão assinaladas na página da disciplina com um visto junto do nome da atividade .';
$string['completionicons'] = 'Caixas de verificação da conclusão';
$string['completionicons_help'] = 'Pode surgir um visto junto ao nome de uma atividade para indicar quando esta atividade está concluída.

Se for exibida uma caixa com o limite tracejado, o visto aparecerá automaticamente quando a atividade foi concluída de acordo com as condições definidas pelo professor.

Se for exibida uma caixa com o limite sólido, isto significa que pode clicar sobre ela para colocar o visto, indicando assim que completou a atividade (Se clicar novamente o visto é removido, se tiver mudado de ideias). O visto é opcional e consiste apenas numa forma de assinalar o seu progresso ao longo da disciplina.';
$string['completion_link'] = 'atividade/conclusão';
$string['completion_manual'] = 'Os alunos podem assinalar a atividade como concluída';
$string['completionmenuitem'] = 'Conclusão';
$string['completion-n'] = 'Por completar';
$string['completion_none'] = 'Não verificar conclusão da atividade';
$string['completionnotenabled'] = 'A conclusão não está ativa';
$string['completionnotenabledforcourse'] = 'A conclusão não está ativa para esta disciplina';
$string['completionnotenabledforsite'] = 'A conclusão não está ativa para este site';
$string['completionondate'] = 'Data';
$string['completionondatevalue'] = 'O utilizador tem de se manter inscrito até';
$string['completion-pass'] = 'Concluído (atingiu a nota de passagem)';
$string['completionsettingslocked'] = 'Configurações de conclusão bloqueadas';
$string['completion-title-manual-n'] = 'Dar como concluída';
$string['completion-title-manual-y'] = 'Dar como não concluída';
$string['completionusegrade'] = 'Requer nota';
$string['completionusegrade_desc'] = 'Os alunos devem ter uma nota para concluir a atividade';
$string['completionusegrade_help'] = 'Se ativar esta opção, a atividade é considerada concluída quando for atribuída uma nota ao aluno. Os ícones de aprovação ou reprovação podem aparecer caso tenha sido definida uma nota mínima para aprovação.';
$string['completionview'] = 'Requer visualização';
$string['completionview_desc'] = 'Os alunos devem ver a atividade para a concluir';
$string['completion-y'] = 'Concluído';
$string['configcompletiondefault'] = 'A configuração predefinida para a verificação de conclusão quando são criadas novas atividades.';
$string['configenablecompletion'] = 'Se ativar esta opção, será possível ativar a verificação da conclusão (progresso) ao nível da disciplina.';
$string['confirmselfcompletion'] = 'Confirmar autoconclusão';
$string['courseaggregation'] = 'Condição requer';
$string['courseaggregation_all'] = 'TODAS as disciplinas selecionadas estarem concluídas';
$string['courseaggregation_any'] = 'QUALQUER UMA das disciplinas selecionadas estar concluída';
$string['coursealreadycompleted'] = 'Já concluiu esta disciplina';
$string['coursecomplete'] = 'Disciplina concluída';
$string['coursecompleted'] = 'Disciplina concluída';
$string['coursecompletion'] = 'Conclusão da disciplina';
$string['coursecompletioncondition'] = 'Condição: {$a}';
$string['coursegrade'] = 'Nota da disciplina';
$string['coursesavailable'] = 'Disciplinas disponíveis';
$string['coursesavailableexplaination'] = 'Nota: As condições de conclusão da disciplina devem ser definidas na disciplina para que esta seja exibida na lista acima.';
$string['criteria'] = 'Critérios';
$string['criteriagroup'] = 'Grupo de critérios';
$string['criteriarequiredall'] = 'Todos os critérios abaixo são exigidos';
$string['criteriarequiredany'] = 'Qualquer dos critérios abaixo é necessário';
$string['csvdownload'] = 'Descarregar em formato de folha de cálculo (UTF-8 .csv)';
$string['datepassed'] = 'Data passada';
$string['days'] = 'Dias';
$string['daysoftotal'] = '{$a->days} de {$a->total}';
$string['deletecompletiondata'] = 'Apagar informação sobre conclusão';
$string['dependencies'] = 'Dependências';
$string['dependenciescompleted'] = 'Conclusão de outras disciplinas';
$string['editcoursecompletionsettings'] = 'Editar configurações de conclusão da disciplina';
$string['enablecompletion'] = 'Ativar verificação de conclusão';
$string['enablecompletion_help'] = 'Se ativar esta opção, podem ser definidas condições de conclusão de atividade e/ou condições de conclusão da disciplina.';
$string['enrolmentduration'] = 'Duração da inscrição';
$string['enrolmentdurationlength'] = 'O utilizador tem de se manter inscrito por';
$string['err_noactivities'] = 'Não há nenhuma atividade configurada com a verificação da conclusão ativa  na disciplina, por isso não pode ser exibida nenhuma atividade. Pode ativar a verificação da conclusão das atividades editando as suas configurações.';
$string['err_nocourses'] = 'A verificação da conclusão não está ativa noutras disciplinas, por isso nenhuma pode ser exibida. Ative a verificação da conclusão das outras disciplinas nas suas configurações.';
$string['err_nograde'] = 'Não foi definida nenhuma nota de aprovação para esta disciplina. Para ativar este tipo de critério deve definir uma nota de aprovação para a disciplina.';
$string['err_noroles'] = 'Não existem papéis com a capacidade \'moodle/course:markcomplete\' nesta disciplina.';
$string['err_nousers'] = 'Não existem alunos nesta disciplina ou grupo para o qual as informações sobre conclusões são exibidas. (Por predefinição, a informação sobre conclusão aplica-se apenas a  alunos logo, se não existirem alunos, verá este erro. Os administradores podem alterar estas definições.)';
$string['err_settingslocked'] = 'Um ou mais alunos já completaram os critérios definidos e, por isso, as opções de configuração foram bloqueadas. Desbloquear as opções de verificação de conclusão apagará os dados existentes dos utilizadores e poderá causar alguma confusão.';
$string['err_system'] = 'Ocorreu um erro interno no sistema. (Os administradores do sistema podem consultar informações sobre o erro para saber mais detalhes)';
$string['eventcoursecompleted'] = 'Disciplina concluída';
$string['eventcoursecompletionupdated'] = 'Atualização da conclusão da disciplina';
$string['eventcoursemodulecompletionupdated'] = 'Atualização do módulo de conclusão da disciplina';
$string['excelcsvdownload'] = 'Descarregar em formato compatível com Excel (.csv)';
$string['fraction'] = 'Fração';
$string['graderequired'] = 'Nota requerida da disciplina';
$string['gradexrequired'] = 'exigida {$a}';
$string['inprogress'] = 'Em progresso';
$string['manualcompletionby'] = 'Conclusão manual por outros';
$string['manualcompletionbynote'] = 'Nota: a capacidade \'moodle/course:markcomplete\' tem de ser atribuída a um papel para que este seja exibido na lista.';
$string['manualselfcompletion'] = 'Conclusão manual pelo próprio';
$string['manualselfcompletionnote'] = 'Nota: O bloco Autoconclusão deverá ser adicionado à disciplina se a autoconclusão manual estiver ativada.';
$string['markcomplete'] = 'Dar como concluído';
$string['markedcompleteby'] = 'Dado como concluído por {$a}';
$string['markingyourselfcomplete'] = 'A dar como concluído';
$string['moredetails'] = 'Mais informações';
$string['nocriteriaset'] = 'Não foram definidos critérios para esta disciplina';
$string['notcompleted'] = 'Por completar';
$string['notenroled'] = 'Não está inscrito como aluno nesta disciplina';
$string['nottracked'] = 'Atualmente não está a ser monitorizado pela verificação da conclusão nesta disciplina';
$string['notyetstarted'] = 'Ainda não iniciou';
$string['overallaggregation'] = 'Requisitos de conclusão';
$string['overallaggregation_all'] = 'A disciplina está concluída quando se verificam TODAS as condições';
$string['overallaggregation_any'] = 'A disciplina está concluída quando se verifica QUALQUER UMA das condições';
$string['pending'] = 'Pendente';
$string['periodpostenrolment'] = 'Período após inscrição';
$string['progress'] = 'Progresso do aluno';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progresso: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Reconhecimento de aprendizagem anterior';
$string['remainingenroledfortime'] = 'Manter-se inscrito por um determinado período de tempo';
$string['remainingenroleduntildate'] = 'Manter-se inscrito até uma determinada data';
$string['reportpage'] = 'Mostrar participantes {$a->from} a {$a->to} de {$a->total}.';
$string['requiredcriteria'] = 'Critério obrigatório';
$string['restoringcompletiondata'] = 'A registar dados de conclusão';
$string['roleaggregation'] = 'Condição requer';
$string['roleaggregation_all'] = 'TODOS os papéis confirmam manualmente a conclusão';
$string['roleaggregation_any'] = 'QUALQUER UM dos papéis confirma manualmente a conclusão';
$string['roleidnotfound'] = 'ID do Papel do utilizador {$a} não encontrado';
$string['saved'] = 'Guardado';
$string['seedetails'] = 'Ver detalhes';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Autoconclusão';
$string['showinguser'] = 'A mostrar utilizador';
$string['unenrolingfromcourse'] = 'Cancelar inscrição na disciplina';
$string['unenrolment'] = 'Cancelamento da inscrição';
$string['unit'] = 'Unidade';
$string['unlockcompletion'] = 'Desbloquear opções de conclusão';
$string['unlockcompletiondelete'] = 'Desbloquear opções de conclusão e apagar dados de conclusão do utilizador';
$string['usealternateselector'] = 'Usar o selecionador alternativo de disciplinas';
$string['usernotenroled'] = 'O utilizador não está inscrito nesta disciplina';
$string['viewcoursereport'] = 'Ver relatório da disciplina';
$string['viewingactivity'] = 'A ver {$a}';
$string['writingcompletiondata'] = 'A registar dados da conclusão';
$string['xdays'] = '{$a} dias';
$string['yourprogress'] = 'O seu progresso';
