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
 * Strings for component 'message_email', language 'pt', branch 'MOODLE_31_STABLE'
 *
 * @package   message_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowattachments'] = 'Permitir anexos';
$string['allowusermailcharset'] = 'Permitir que o utilizador selecione o conjunto de caracteres';
$string['configallowattachments'] = 'Se ativar esta opção, os e-mails enviados a partir do site podem ter anexos, tais como Medalhas.';
$string['configallowusermailcharset'] = 'Se ativar esta opção, os utilizadores podem selecionar nas configurações do seu perfil um conjunto de caracteres para usar no e-mail.';
$string['configemailonlyfromnoreplyaddress'] = 'Se ativar esta opção, todos os emails serão enviados com o endereço no-replay como endereço do remetente. Isto pode ser usado para controlos de anti-falsificação em sistemas de email externos que bloqueiam e-mails.';
$string['configmailnewline'] = 'Caracteres usados para iniciar uma nova linha nas mensagens de e-mail. De acordo com a norma RFC 822bis deve ser usado o CRLF. Alguns servidores de e-mail fazem automaticamente a conversão de LF para CRLF, mas outros fazem a conversão incorreta de CRLF para CRCRLF, e outros rejeitam os e-mails apenas com LF (qmail por exemplo). Tente alterar esta configuração se estiver com problemas na recepção dos e-mails pelos utilizadores ou mudanças duplas de linha.';
$string['confignoreplyaddress'] = 'Os e-mails às vezes são enviados em nome de um utilizador (por exemplo, as mensagens do fórum). O e-mail que inserir aqui será usado como o endereço do remetente nos casos em que os destinatários não devem responder diretamente ao utilizador (por exemplo, quando um utilizador opta por manter o seu endereço privado).';
$string['configsitemailcharset'] = 'Esta configuração especifica o conjunto de caracteres predefinido para todos os emails enviados a partir do site.';
$string['configsmtpauthtype'] = 'Esta configuração define o tipo de autenticação a utilizar no servidor smtp.';
$string['configsmtphosts'] = 'Dê o nome completo de um ou mais servidores SMTP locais que o Moodle deve usar para enviar e-mails (ex: \'mail.a.com\' or \'mail.a.com;mail.b.com\'). Para especificar uma porta não predefinida (i.é outra além da porta 25), pode usar [server]:[port] syntax (ex \'mail.a.com:587\'). Para conexões seguras, a porta 465 é usualmente usada com SSL, a porta 587 é usada com TLS, especifique um protocolo de segurança abaixo se desejar. Se deixar este campo em branco, o Moodle usará o método PHP padrão de envio de e-mail.';
$string['configsmtpmaxbulk'] = 'Número máximo de mensagens enviadas por sessão SMTP. Agrupar mensagens pode acelerar o envio de e-mails. Valores inferiores a 2 forçam a criação de uma nova sessão SMTP para cada e-mail.';
$string['configsmtpsecure'] = 'Se o servidor SMTP requerer uma conexão segura, especifique o tipo de protocolo correto.';
$string['configsmtpuser'] = 'Se tiver especificado um servidor SMTP acima e o servidor requer autenticação, digite o nome de utilizador e senha aqui.';
$string['email'] = 'Enviar notificações por e-mail para';
$string['emailonlyfromnoreplyaddress'] = 'Enviar sempre e-mail a partir do endereço no-reply?';
$string['ifemailleftempty'] = 'Deixe em branco para enviar notificações para {$a}';
$string['mailnewline'] = 'Caracteres de nova linha no mail';
$string['none'] = 'Nenhum';
$string['noreplyaddress'] = 'Endereço não responder';
$string['pluginname'] = 'E-mail';
$string['sitemailcharset'] = 'Conjunto de caracteres';
$string['smtpauthtype'] = 'Tipo de autenticação SMTP';
$string['smtphosts'] = 'Servidores SMTP';
$string['smtpmaxbulk'] = 'Limite de sessão SMTP';
$string['smtppass'] = 'Senha SMTP';
$string['smtpsecure'] = 'Segurança SMTP';
$string['smtpuser'] = 'Nome de utilizador SMTP';
