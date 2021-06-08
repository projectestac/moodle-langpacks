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
 * Strings for component 'pdfannotator', language 'pt', version '3.11'.
 *
 * @package     pdfannotator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actiondropdown'] = 'Opções';
$string['activities'] = 'Atividades';
$string['addAComment'] = 'Adicionar um comentário';
$string['ago'] = '{$a} atrás';
$string['all'] = 'tudo';
$string['allanswers'] = 'tudo';
$string['allquestions'] = 'tudo';
$string['allquestionsimgtitle'] = 'Mostrar todas as perguntas deste documento';
$string['allquestionstitle'] = 'Todas as perguntas em';
$string['allreports'] = 'todos os relatórios';
$string['annotationDeleted'] = 'A anotação foi apagada';
$string['anonymous'] = 'Anónimo';
$string['answer'] = 'Resposta';
$string['answerButton'] = 'Responder';
$string['answerSolved'] = 'Esta resposta foi marcada como correta pelo gestor.';
$string['answercounthelpicon'] = 'Número de respostas';
$string['answercounthelpicon_help'] = 'Esta coluna informa o número de respostas que a pergunta recebeu.';
$string['answers'] = 'respostas';
$string['answerstab'] = 'Respostas';
$string['answerstabicon'] = 'Respostas';
$string['answerstabicon_help'] = 'Esta página pode mostrar todas as respostas ou apenas respostas às perguntas às quais está subscrito¹. A lista abrange todos os anotadores desta disciplina. <br>(¹) Quando publica uma pergunta, fica automaticamente subscrito desde que não cancele a subscrição.';
$string['author'] = 'Autor';
$string['average'] = 'média';
$string['average_answers'] = 'média das respostas';
$string['average_help'] = 'Apenas utilizadores que escreveram pelo menos um comentário são incluídos no cálculo da média (média aritmética)';
$string['average_questions'] = 'média das perguntas';
$string['by'] = 'por';
$string['by_other_users'] = 'por outros utilizadores';
$string['bynameondate'] = 'por {$a->name} - {$a->date}';
$string['cancelButton'] = 'Cancelar';
$string['chart_title'] = 'Perguntas e respostas nos anotadores desta disciplina';
$string['clicktoopen2'] = 'Clique na hiperligação {$a} para visualizar o ficheiro.';
$string['closedquestions'] = 'respondidas';
$string['colorPicker'] = 'Selecione uma cor';
$string['comment'] = 'Comentário';
$string['commentDeleted'] = 'O comentário foi apagado';
$string['comments'] = 'Comentários';
$string['correct'] = 'correta';
$string['count'] = 'contagem';
$string['createAnnotation'] = 'Criar anotação';
$string['currentPage'] = 'número da página atual';
$string['day'] = 'dia';
$string['days'] = 'dias';
$string['decision'] = 'Tomar uma decisão';
$string['decision:overlappingAnnotation'] = 'Clicou numa área na qual há mais de uma anotação. Decida em qual pretende clicar.';
$string['delete'] = 'Apagar';
$string['deleteComment'] = 'Apagar comentário';
$string['deletedComment'] = 'comentário apagado';
$string['deletedQuestion'] = 'pergunta apagada';
$string['deletingAnnotation_manager'] = 'A anotação e todos os comentários relacionados serão apagados.';
$string['deletingAnnotation_student'] = 'A anotação e todos os comentários relacionados serão apagados.<br>Pode apagar as suas próprias anotações, desde que não tenham sido comentadas por outros utilizadores.';
$string['deletingComment'] = 'O comentário será apagado. Será exibido como apagado, a menos que seja o último comentário da conversação.';
$string['deletingCommentTitle'] = 'Tem a certeza?';
$string['deletingQuestion_manager'] = 'O comentário será apagado.<br>Dica: Se também pretende apagar todas as respostas, exclua a anotação no documento.';
$string['deletingQuestion_student'] = 'A pergunta será apagada.<br>Se não foi respondida, a anotação também será apagada; caso contrário, a pergunta será exibida como apagada.';
$string['deletionForbidden'] = 'Não é permitido apagar';
$string['didyouknow'] = 'Sabia?';
$string['dnduploadpdfannotator'] = 'Criar ficheiro para Anotar PDF';
$string['document'] = 'Documento';
$string['drawing'] = 'Desenhar no documento com a caneta.';
$string['edit'] = 'Editar';
$string['editAnnotation'] = 'A anotação irá ser movida.<br>Isto pode mudar o contexto da pergunta.';
$string['editAnnotationTitle'] = 'Tem a certeza?';
$string['editButton'] = 'Guardar';
$string['editNotAllowed'] = 'O movimento panorâmico não é permitido!';
$string['editedComment'] = 'última edição';
$string['emptypdf'] = 'De momento, não exisstem comentários neste anotador.';
$string['enterText'] = 'Insira texto';
$string['entity_helptitle'] = 'Ajuda para';
$string['error'] = 'Erro!';
$string['error:markasread'] = 'O item não pôde ser marcado como lido.';
$string['error:markasunread'] = 'O item não pôde ser marcado como não lido.';
$string['error:missingAnnotationtype'] = 'O tipo de anotação não existe. Possivelmente, a entrada na tabela pdfannotator_annotationtypes está em falta.';
$string['eventreport_added'] = 'Um comentário foi reportado.';
$string['filenotfound'] = 'Ficheiro não encontrado.';
$string['forward'] = 'Encaminhar';
$string['forwardedquestionhtml'] = '{$a->sender} encaminhou a seguinte pergunta para si: <br /> <br />
        "{$a->questioncontent}" <br /> <br />
        com a mensagem: <br /> <br />
        "{$a->message}" <br /> <br />
        A pergunta está disponível <a href="{$a->urltoquestion}">aqui</a>.';
$string['forwardedquestiontext'] = '{$a->sender} partilhou consigo a seguinte pergunta:

        "{$a->questioncontent}"

        com a seguinte mensagem:

        "{$a->message}"

        A pergunta está disponível aqui: {$a->urltoquestion}';
$string['fullscreen'] = 'Ecrã inteiro';
$string['fullscreenBack'] = 'Sair de ecrã inteiro';
$string['global_setting_anonymous'] = 'Permitir repostas anónimas?';
$string['global_setting_anonymous_desc'] = 'Esta opção permite que o utilizador publique comentários anonimamente. Esta opção ativa a publicação anónima global.';
$string['global_setting_latexapisetting'] = 'API LaTeX para PNG';
$string['global_setting_latexapisetting_desc'] = 'API para conversão de Latex para PNG ao descarregar o PDF.<br>
Nota: Se usar a API do Google Chart, o Google obterá todas as fórmulas no documento se alguém optar por usar o LaTeX.<br>
Se usar a API Moodle, precisa ter instalado no seu servidor o LaTex, dvips e conversor binário. (Consulte a <a href="https://docs.moodle.org/38/en/TeX_notation_filter">documentação do Moodle</a>)';
$string['global_setting_latexusegoogle'] = 'API do Google Chart';
$string['global_setting_latexusemoodle'] = 'API interna Moodle';
$string['global_setting_use_studentdrawing'] = 'Permitir desenhar para os participantes?';
$string['global_setting_use_studentdrawing_desc'] = 'Tenha em atenção que os desenhos são anónimos e não podem ser comentados nem reportados.';
$string['global_setting_use_studenttextbox'] = 'Permitir caixas de texto para os participantes?';
$string['global_setting_use_studenttextbox_desc'] = 'Tenha em atenção que as anotações da caixa de texto são anónimas e não podem ser comentadas nem reportadas.';
$string['global_setting_useprint'] = 'Permitir guardar e imprimir?';
$string['global_setting_useprint_comments'] = 'Permitir guardar/imprimir comentários?';
$string['global_setting_useprint_comments_desc'] = 'Permitir que os participantes guardem e imprimam anotações e comentários.';
$string['global_setting_useprint_desc'] = 'Permitir aos participantes guardar e imprimir o documento PDF e os respetivos comentários.';
$string['global_setting_useprint_document'] = 'Permitir guardar/imprimir o documento?';
$string['global_setting_useprint_document_desc'] = 'Permitir aos participantes guardar e imprimir o documento PDF.';
$string['global_setting_usevotes'] = 'Permitir gostar de comentários?';
$string['global_setting_usevotes_desc'] = 'Se ativar esta opção, os utilizadores podem gostar/votar noutras publicações que não as suas.';
$string['hiddenComment'] = 'comentário oculto';
$string['hiddenforparticipants'] = 'Oculto para os alunos';
$string['hideAnnotations'] = 'Ocultar anotações';
$string['highlight'] = 'Realçar o texto e adicionar um comentário.';
$string['hour'] = 'hora';
$string['hours'] = 'horas';
$string['in_course'] = 'nesta disciplina';
$string['in_document'] = 'neste documento';
$string['infonocomments'] = 'De momento, este documento não contém comentários.';
$string['iscorrecthelpicon'] = 'Correta';
$string['iscorrecthelpicon_help'] = 'Quando um professor ou gestor marcar uma resposta como correta, um visto a verde aparecerá ao lado da resposta.';
$string['itemsperpage'] = 'Itens por página: ';
$string['justnow'] = 'agora';
$string['lastanswered'] = 'Última resposta';
$string['lastedited'] = 'última alteração';
$string['legacyfilesactive'] = 'Ativo';
$string['legacyfilesdone'] = 'Terminada';
$string['like'] = 'como';
$string['likeAnswer'] = 'útil';
$string['likeAnswerForbidden'] = 'já marcada como útil';
$string['likeCountAnswer'] = 'pessoas acham que esta resposta é útil';
$string['likeCountQuestion'] = 'pessoas também estão interessadas nesta questão';
$string['likeForbidden'] = 'Não tem permissão para gostar deste comentário';
$string['likeOwnComment'] = 'próprios comentários';
$string['likeQuestion'] = 'pergunta interessante';
$string['likeQuestionForbidden'] = 'já marcada como útil';
$string['loading'] = 'A carregar!';
$string['markCorrect'] = 'Marcar como correta';
$string['markSolved'] = 'Fechar pergunta';
$string['markUnsolved'] = 'Reabrir pergunta';
$string['markasread'] = 'Marcar como lida';
$string['markasunread'] = 'Marcar como não lida';
$string['markhidden'] = 'Ocultar';
$string['me'] = 'eu';
$string['messageforwardform'] = 'A sua mensagem para o(s) destinatário(s)';
$string['min2Chars'] = 'Não são permitidas perguntas ou comentários com menos de dois caracteres.';
$string['minute'] = 'minuto';
$string['minutes'] = 'minutos';
$string['missingAnnotation'] = 'A anotação correspondente não pôde ser encontrada!';
$string['modifiedby'] = 'autor';
$string['modulename'] = 'Anotar PDF';
$string['modulename_help'] = 'Esta ferramenta permite a marcação colaborativa em documentos PDF. Os utilizadores podem anotar partes específicas de um PDF e discuti-las com outros.';
$string['modulenameplural'] = 'Anotar PDF';
$string['month'] = 'mês';
$string['months'] = 'meses';
$string['myanswers'] = 'minhas respostas';
$string['mypost'] = 'Minhas anotações';
$string['myquestion'] = 'Pergunta';
$string['myquestions'] = 'minhas perguntas';
$string['newanswerhtml'] = 'A sua pergunta subscrita "{$a->question}" foi respondida por {$a->answeruser} com o comentário: <br /> <br /> "{$a->content}"<br /><br />
A resposta está disponível <a href="{$a->urltoanswer}">aqui</a>.';
$string['newanswertext'] = 'A sua pergunta subscrita "{$a->question}" foi respondida por {$a->answeruser} com o comentário:

"{$a->content}"

A resposta está disponível aqui: {$a->urltoanswer}';
$string['newquestionhtml'] = 'Foi adicionada uma nova pergunta por {$a->answeruser} com o seguinte conteúdo: <br /> <br /> "{$a->content}"<br /><br />
A pergunta está disponível <a href="{$a->urltoanswer}">aqui</a>.';
$string['newquestions'] = 'Perguntas recentes';
$string['newquestiontext'] = 'Foi adicionada uma nova pergunta por {$a->answeruser} com o seguinte conteúdo:

"{$a->content}"

A pergunta está disponível aqui: {$a->urltoanswer}';
$string['nextPage'] = 'Página seguinte';
$string['noCommentsupported'] = 'Este tipo de anotação não aceita comentários.';
$string['noanswers'] = 'De momento, não existem respostas nesta disciplina.';
$string['noanswerssubscribed'] = 'De momento, não existem respostas para as perguntas subscritas nesta disciplina.';
$string['noquestions'] = 'Nenhuma pergunta nesta página!';
$string['notificationsubject:forwardedquestion'] = 'Pergunta encaminhada {$a}';
$string['notificationsubject:newanswer'] = 'Nova resposta à pergunta subscrita {$a}';
$string['notificationsubject:newquestion'] = 'Nova pergunta \'{$a}\'';
$string['notificationsubject:newreport'] = 'Um comentário foi relatado {$a}';
$string['nounreadreports'] = 'De momento, não existem relatórios não lidos nesta disciplina.';
$string['on'] = 'data/hora';
$string['onlyDeleteOwnAnnotations'] = ', porque pertence a outro utilizador.';
$string['onlyDeleteUncommentedPosts'] = ', porque os comentários de outros utilizadores também seriam apagados.';
$string['openquestions'] = 'não respondidas';
$string['overview'] = 'Visão global';
$string['overviewactioncolumn'] = 'Gerir';
$string['ownpoststab'] = 'Minhas publicações';
$string['ownpoststabicon'] = 'Minhas publicações';
$string['ownpoststabicon_help'] = 'Esta página exibe todos os comentários que publicou nesta disciplina.';
$string['page'] = 'página';
$string['pdfButton'] = 'Documento';
$string['pdfannotator'] = 'Documento';
$string['pdfannotator:addinstance'] = 'adicionar instância';
$string['pdfannotator:administrateuserinput'] = 'Administrar comentários';
$string['pdfannotator:closeanyquestion'] = 'Fechar qualquer pergunta';
$string['pdfannotator:closequestion'] = 'Fechar as pergunta do próprio';
$string['pdfannotator:create'] = 'Criar anotações e comentários';
$string['pdfannotator:deleteany'] = 'Apagar qualquer anotação e comentário';
$string['pdfannotator:deleteown'] = 'Apagar as próprias anotações e comentários';
$string['pdfannotator:edit'] = 'Editar as próprias anotações e comentários';
$string['pdfannotator:editanypost'] = 'Editar qualquer anotação e comentário';
$string['pdfannotator:forwardquestions'] = 'Encaminhar perguntas';
$string['pdfannotator:printcomments'] = 'Descarregar dcomentários (mesmo que a opção esteja desativada para um anotador de PDF)';
$string['pdfannotator:printdocument'] = 'Descarregar documento (mesmo que a opção esteja desativada para um anotador de PDF)';
$string['pdfannotator:recievenewquestionnotifications'] = 'Receber notificações sobre novas perguntas';
$string['pdfannotator:report'] = 'Reportar comentários inadequados ao gestor da disciplina';
$string['pdfannotator:seehiddencomments'] = 'Ver comentários ocultos';
$string['pdfannotator:view'] = 'Ver Anotar PDF';
$string['pdfannotator:viewstatistics'] = 'Ver página das estatísticas';
$string['pdfannotator:viewteacherstatistics'] = 'Mais informações adicionais na página das estatísticas';
$string['pdfannotatorcolumn'] = 'Documento';
$string['pdfannotatorcontent'] = 'Ficheiros e subpastas';
$string['pdfannotatorname'] = 'Ferramenta Anotar PDF';
$string['pluginadministration'] = 'Administração de Anotar PDF';
$string['pluginname'] = 'Anotar PDF';
$string['point'] = 'Adicionar um alfinete no documento e escrever um comentário.';
$string['prevPage'] = 'Página anterior';
$string['print'] = 'descarregar documento';
$string['printButton'] = 'Descarregar';
$string['printviewtitle'] = 'Comentários';
$string['printwithannotations'] = 'descarregar comentários';
$string['question'] = 'Pergunta';
$string['questionSolved'] = 'As perguntas estão fechadas. No entanto, ainda pode criar novos comentários.';
$string['questionsimgtitle'] = 'Mostrar todas as perguntas desta página';
$string['questionstab'] = 'Perguntas';
$string['questionstabicon'] = 'Perguntas';
$string['questionstabicon_help'] = 'Esta página exibe todas as perguntas não respondidas que foram feitas nesta disciplina. Também pode optar por ver todas as perguntas ou apenas as perguntas respondidas nesta disciplina.';
$string['questionstitle'] = 'Perguntas na página';
$string['read'] = 'Ler';
$string['reason'] = 'Explicação';
$string['recievenewquestionnotifications'] = 'Receber notificações sobre novas perguntas';
$string['recipient'] = 'Destinatário(s)';
$string['recipient_help'] = 'Para selecionar vários destinatários, mantenha pressionada a tecla "Ctrl"';
$string['recipientforwardform'] = 'Encaminhar para';
$string['recipientrequired'] = 'Selecione o(s) destinatário(s)';
$string['rectangle'] = 'Adicionar um retângulo no documento e escrever um comentário.';
$string['removeCorrect'] = 'Remover marca de correta';
$string['removehidden'] = 'Mostrar';
$string['report'] = 'Reportar';
$string['reportaddedhtml'] = '{$a->reportinguser} reportou um comentário com a mensagem: <br /><br /> "{$a->introduction}"<br /><br />
Está disponível <a href="{$a->urltoreport}">aqui</a>.';
$string['reportaddedtext'] = '{$a->reportinguser} reportou um comentário com a mensagem:

"{$a->introduction}"

Está disponível aqui: {$a->urltoreport}';
$string['reportedby'] = 'autor/data';
$string['reportedcomment'] = 'Comentário reportado';
$string['reports'] = 'Comentários reportados';
$string['reportsendbutton'] = 'Enviar';
$string['reportstab'] = 'Comentários reportados';
$string['reportstabicon'] = 'Comentários reportados';
$string['reportstabicon_help'] = 'Esta página exibe comentários que foram reportados como inadequados nesta disciplina. Pode optar por ver apenas relatórios não lidos/lidos ou todos os relatórios¹.<br>(¹) Qualquer gestor desta disciplina pode marcar um relatório como lido.';
$string['reportwassentoff'] = 'O comentário foi reportado.';
$string['search'] = 'Procurar';
$string['searchresults'] = 'Procurar resultados';
$string['second'] = 'segundo';
$string['seconds'] = 'segundos';
$string['seenreports'] = 'apenas de leitura';
$string['send'] = 'Enviar';
$string['sendAnonymous'] = '&nbsp;resposta anónima';
$string['setting_alternative_name'] = 'Nome';
$string['setting_anonymous'] = 'Permitir respostas anónimas?';
$string['setting_fileupload'] = 'Selecione um ficheiro PDF';
$string['setting_use_studentdrawing'] = 'Desenhar';
$string['setting_use_studenttextbox'] = 'Caixa de texto';
$string['setting_useprint'] = 'guardar e imprimir';
$string['setting_useprint_comments'] = 'Guardar e imprimir comentários';
$string['setting_useprint_comments_help'] = 'Permitir que os participantes guardem e imprimam anotações e comentários';
$string['setting_useprint_document'] = 'Guardar e imprimir documento PDF';
$string['setting_usevotes'] = 'Votos/Gostos';
$string['setting_usevotes_help'] = 'Se ativar esta opção, os utilizadores podem gostar/votar em publicações diferentes das suas.';
$string['show'] = 'Mostrar';
$string['showAnnotations'] = 'Mostrar anotações';
$string['showless'] = 'menos';
$string['showmore'] = 'mais';
$string['slotdatetimelabel'] = 'Date e hora';
$string['startDiscussion'] = 'Iniciar uma conversação';
$string['statistic'] = 'Estatística';
$string['strftimedatetime'] = '%d %b %Y %H:%M';
$string['strikeout'] = 'Rasurar o texto e adicionar um comentário.';
$string['studentdrawingforbidden'] = 'Este anotador não oferece suporte a desenhos para o seu papel de utilizador.';
$string['studenttextboxforbidden'] = 'Este anotador não oferece suporte a caixas de texto para o seu papel de utilizador.';
$string['subscribe'] = 'Subscrever esta anotações';
$string['subscribeQuestion'] = 'Subscrever';
$string['subscribed'] = 'Subscrito';
$string['subscribedanswers'] = 'às minhas perguntas subscritas';
$string['subtitleforreportcommentform'] = 'A sua mensagem para o gestor da disciplina';
$string['successfullyEdited'] = 'Alterações guardadas';
$string['successfullyHidden'] = 'A partir de agora, este comentário está oculto para os participantes.';
$string['successfullyUnsubscribed'] = 'A sua subscrição foi cancelada.';
$string['successfullyUnsubscribedPlural'] = 'A sua subscrição foi cancelada. Todas as {$a} respostas à pergunta foram removidas desta tabela.';
$string['sumPages'] = 'Número de páginas';
$string['text'] = 'Adicionar um texto no documento.';
$string['titleforreportcommentform'] = 'Reportar comentário';
$string['titleforwardform'] = 'Encaminhar pergunta';
$string['toreport'] = 'Reportar';
$string['unseenreports'] = 'apenas não lidos';
$string['unsolvedquestionstitle'] = 'Perguntas não respondidas';
$string['unsolvedquestionstitle_help'] = 'Todas as perguntas não respondidas nesta disciplina estão listadas.';
$string['unsubscribeQuestion'] = 'Cancelar subscrição';
$string['unsubscribingDidNotWork'] = 'Não foi possível cancelar a subscrição.';
$string['use_studentdrawing'] = 'Ativar desenho para os participantes?';
$string['use_studenttextbox'] = 'Ativar ferramenta de caixa de texto para os participantes?';
$string['useprint'] = 'Conceder aos participantes acesso ao PDF?';
$string['useprint_comments'] = 'Conceder aos participantes acesso ao PDF e respetivos comentários?';
$string['useprint_document'] = 'Conceder aos participantes acesso ao PDF?';
$string['usevotes'] = 'Permitir que os utilizadores gostem de comentários.';
$string['view'] = 'Documento';
$string['votes'] = 'Gostos';
$string['voteshelpicon'] = 'Gostos';
$string['voteshelpicon_help'] = 'Esta coluna informa o número de pessoas (outras) que mostraram interesse pela pergunta.';
$string['voteshelpicontwo'] = 'Gostos';
$string['voteshelpicontwo_help'] = 'Esta coluna indica com que frequência as suas publicações receberam <em>Gosto</em>.';
$string['week'] = 'semana';
$string['weeks'] = 'semanas';
$string['year'] = 'ano';
$string['years'] = 'anos';
$string['yesButton'] = 'Sim';
$string['zoom'] = 'zoom';
$string['zoomin'] = 'Aumentar zoom';
$string['zoomout'] = 'Diminuir zoom';
