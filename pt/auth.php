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
 * Strings for component 'auth', language 'pt', branch 'MOODLE_31_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Módulos de autenticação disponíveis';
$string['allowaccountssameemail'] = 'Permitir a existência de contas com o mesmo e-mail';
$string['allowaccountssameemail_desc'] = 'Se ativar esta opção, o mesmo endereço de e-mail poderá ser utilizado em várias contas de utilizador. Esta ação poderá levantar alguns problemas de privacidade e de segurança em determinadas situações, como por exemplo, no envio de e-mails para alteração de senha.';
$string['alternatelogin'] = 'Se inserir um URL aqui, será utilizado como página de autenticação para este site. A página deverá conter um formulário que tenha a propriedade action definida para <strong>\'{$a}\'</strong> e campos de retorno <strong>username</strong> e <strong>password</strong>.<br />Tenha cuidado para não inserir um URL incorreto porque pode bloqueá-lo a si mesmo de aceder a este site.<br /> Deixe esta definição em branco para utilizar a página de autenticação predefinida do Moodle.';
$string['alternateloginurl'] = 'Endereço alternativo para autenticação';
$string['auth_changepasswordhelp'] = 'Ajuda para alterar senha';
$string['auth_changepasswordhelp_expl'] = 'Mostrar ajuda de perca de senha aos utilizadores que perderam a sua senha {$a}. Será mostrada também ou em vez do <strong>URL para alterar senha</strong> ou a mudança de senha interna do Moodle.';
$string['auth_changepasswordurl'] = 'URL para alterar senha';
$string['auth_changepasswordurl_expl'] = 'Especifique o URL a enviar aos utilizadores que perderam a sua senha {$a}. Selecione <strong>Não</strong> no campo <strong>Usar página predefinida para alteração de senha</strong>';
$string['auth_changingemailaddress'] = 'Foi pedida uma alteração do e-mail  {$a->oldemail} para {$a->newemail}. Por questões de segurança, é enviada uma mensagem para o novo e-mail para garantir que este lhe pertence. A alteração de e-mail terá efeito assim que abrir o URL enviado nessa mensagem.';
$string['auth_common_settings'] = 'Definições comuns';
$string['auth_data_mapping'] = 'Mapa de Dados';
$string['authenticationoptions'] = 'Opções de autenticação';
$string['auth_fieldlock'] = 'Bloquear valor';
$string['auth_fieldlock_expl'] = '<p><b>Valor bloqueado:</b> Se ativo, irá prevenir que os utilizadores e administradores do Moodle editem um campo diretamente. Utilize esta opção se quiser manter os dados no sistema de autorização externo. </p>';
$string['auth_fieldlocks'] = 'Bloquear campos de utilizador';
$string['auth_fieldlocks_help'] = '<p>Pode bloquear os campos de perfil dos utilizadores. Esta configuração é útil para sites onde os dados dos utilizadores são mantidos manualmente pelos administradores, editando os registos dos utilizadores ou fazendo o carregamento utilizando a ferramenta \'Carregar utilizadores\'. Se está a bloquear campos requeridos pelo Moodle, verifique que fornece esses dados ao criar contas de utilizadores, senão as contas não serão válidas.</p><p>Pondere a utilização do modo de bloqueio \'Desbloquear se vazio\' para evitar este problema.</p>';
$string['authinstructions'] = 'Deixe este campo em branco para que as instruções de autenticação predefinidas sejam mostradas na página de autenticação. Se pretender disponibilizar instruções personalizadas, introduza-as aqui.';
$string['auth_invalidnewemailkey'] = 'Erro: se está a tentar confirmar uma alteração de e-mail, deve ter cometido um erro ao copiar o URL enviado no e-mail de confirmação. Por favor, copie novamente o URL e volte a tentar.';
$string['authloginviaemail'] = 'Permitir autenticação por e-mail';
$string['authloginviaemail_desc'] = 'Permitir que os utilizadores usem o nome de utilizador ou endereço de e-mail (se for único) para se autenticarem no site.';
$string['auth_multiplehosts'] = 'Podem ser especificados vários servidores OU endereços (por exemplo, serv1.com;serv2.com;serv3.com OU xxx.xxx.xxx.xxx;yyy.yyy.yyy.yyy)';
$string['auth_notconfigured'] = 'O método de autenticação {$a} não está configurado.';
$string['auth_outofnewemailupdateattempts'] = 'Esgotou o número de tentativas disponíveis para atualizar o seu e-mail. O seu pedido de atualização foi cancelado.';
$string['auth_passwordisexpired'] = 'A sua senha expirou. Quer alterá-la agora?';
$string['auth_passwordwillexpire'] = 'A sua senha vai expirar dentro de {$a} dias. Quer alterá-la agora?';
$string['auth_remove_delete'] = 'Apagar interno totalmente';
$string['auth_remove_keep'] = 'Manter interno';
$string['auth_remove_suspend'] = 'Suspender interno';
$string['auth_remove_user'] = 'Especifique o que fazer com contas internas de utilizadores durante sincronização em massa quando o utilizador foi removido da fonte externa. Só utilizadores suspensos são automaticamente reativados se eles reaparecem em fontes externas.';
$string['auth_remove_user_key'] = 'Remover utilizador externo';
$string['auth_sync_script'] = 'Sincronização da conta de utilizador';
$string['auth_sync_suspended'] = 'Se ativar esta opção, o atributo suspenso será utilizado para atualizar o estado de suspensão conta local de utilizador.';
$string['auth_sync_suspended_key'] = 'Sincronizar estado de suspensão do utilizador local';
$string['auth_updatelocal'] = 'Atualizar localmente';
$string['auth_updatelocal_expl'] = '<p><b>Atualização local:</b> Se ativo, o campo será atualizado (com autorização externa) cada vez que o utilizador faz a autenticação ou exista uma sincronização de utilizadores. Os campos definidos para serem atualizados localmente deverão estar bloqueados.</p>';
$string['auth_updateremote'] = 'Atualizar externamente';
$string['auth_updateremote_expl'] = '<p><b>Atualização externa:</b> Se ativo, a autorização externa será atualizada quando o registo do utilizador for atualizado. Os campos deverão estar desbloquados para que sejam permitidas edições.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Note:</b> Para atualizar dados externos do LDAP é necessário que defina o binddn e o bindpw para um utilizador bind com privilégios de edição a todos os registos do utilizador. Atualmente não preserva os atributos multi-valued, e irá remover valores extra aquando da atualização. </p>';
$string['auth_user_create'] = 'Permitir a criação de utilizadores';
$string['auth_user_creation'] = 'Novos (anónimos) utilizadores podem criar contas de autenticação externa confirmadas por e-mail. Se ativar esta opção, lembre-se de configurar as opções no módulo específico para criação de utilizadores.';
$string['auth_usernameexists'] = 'O nome escolhido já existe. Escolha outro.';
$string['auto_add_remote_users'] = 'Adicionar automaticamente utilizadores remotos';
$string['changepassword'] = 'Endereço para alteração de senha';
$string['changepasswordhelp'] = 'Endereço URL da página de recuperação de senha, que será enviado aos utilizadores por e-mail. Tenha em atenção que esta configuração não terá efeito caso um endereço URL de recuperação de senha esteja definido nas configurações comuns de autenticação.';
$string['chooseauthmethod'] = 'Escolha um método de autenticação:';
$string['chooseauthmethod_help'] = 'Esta configuração determina o método de autenticação utilizado sempre que o utilizador se autentica. Deve selecionar unicamente métodos de autenticação ativos, caso contrário o utilizador não conseguirá se autenticar. Para impedir um utilizador de se autenticar, selecione "Sem autenticação".';
$string['createpassword'] = 'Gerar senha e notificar utilizador';
$string['createpasswordifneeded'] = 'Criar senha se necessário e enviar por e-mail';
$string['emailchangecancel'] = 'Cancelar a mudança de e-mail';
$string['emailchangepending'] = 'Atualização pendente. Abra a hiperligação que lhe foi enviada para {$a->preference_newemail}.';
$string['emailnowexists'] = 'O endereço que está a tentar defnir no seu perfil já foi associado à conta de outro utilizador. Assim, o seu pedido foi cancelado, mas pode voltar a tentar com um endereço de e-mail diferente.';
$string['emailupdate'] = 'Atualização do endereço de e-mail';
$string['emailupdatemessage'] = 'Caro(a) {$a->fullname},

Foi pedida uma mudança de e-mail na sua conta de utilizador em {$a->site}.

Abra por favor o seguinte URL no seu navegador para confirmar essa mudança.

{$a->url}';
$string['emailupdatesuccess'] = 'O e-mail do utilizador <em>{$a->fullname}</em> foi atualizado com sucesso para <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Confirmação de atualização de e-mail em {$a->site}';
$string['enterthenumbersyouhear'] = 'Insira os números que ouvir';
$string['enterthewordsabove'] = 'Insira as palavras indicadas acima';
$string['errormaxconsecutiveidentchars'] = 'As senhas só podem ter um máximo de {$a} caracteres iguais consecutivos.';
$string['errorminpassworddigits'] = 'A senha deverá ter pelo menos {$a} algarismo(s)';
$string['errorminpasswordlength'] = 'A senha deverá ter pelo menos {$a} caracteres.';
$string['errorminpasswordlower'] = 'A senha deverá ter pelo menos {$a} letra(s) minúscula(s).';
$string['errorminpasswordnonalphanum'] = 'A senha deverá ter pelo menos {$a} caracter(es) não alfanumérico(s) tais como *, -, ou #..';
$string['errorminpasswordupper'] = 'A senha deverá ter pelo menos {$a} letra(s) maiúscula(s).';
$string['errorpasswordreused'] = 'Esta senha já foi utilizada anteriormente, e não é permitida a sua reutilização';
$string['errorpasswordupdate'] = 'Erro na atualização da senha; senha não modificada';
$string['eventuserloggedin'] = 'Utilizador autenticou-se';
$string['eventuserloggedinas'] = 'Utilizador entrou como outro utilizador';
$string['eventuserloginfailed'] = 'Autenticação de utilizador falhou';
$string['forcechangepassword'] = 'Obrigar a alterar senha';
$string['forcechangepasswordfirst_help'] = 'Obrigar os utilizadores a alterar a senha na sua primeira autenticação no Moodle.';
$string['forcechangepassword_help'] = 'Obrigar os utilizadores a alterar a senha na sua próxima autenticação no Moodle.';
$string['forgottenpassword'] = 'Se inserir um URL aqui, será usado neste site como página para recuperação de senhas. Este campo foi criado para sites onde as senhas são geridas externamente ao Moodle, na sua totalidade. Deixe em branco se quiser usar a página de recuperação de senha predefinida do Moodle.';
$string['forgottenpasswordurl'] = 'URL para recuperação de senha';
$string['getanaudiocaptcha'] = 'Versão áudio do CAPTCHA';
$string['getanimagecaptcha'] = 'Versão gráfica do CAPTCHA';
$string['getanothercaptcha'] = 'Gerar outro CAPTCHA';
$string['guestloginbutton'] = 'Botão de entrada como visitante';
$string['incorrectpleasetryagain'] = 'Incorreto. Por favor, tente novamente.';
$string['infilefield'] = 'Campo necessário no ficheiro';
$string['informminpassworddigits'] = 'pelo menos {$a} dígito(s)';
$string['informminpasswordlength'] = 'pelo menos {$a} caracteres';
$string['informminpasswordlower'] = 'pelo menos {$a} letra(s) minúscula(s)';
$string['informminpasswordnonalphanum'] = 'pelo menos {$a} caracter(es) não alfanumérico(s) como o *, -, ou #';
$string['informminpasswordreuselimit'] = 'As senhas podem ser reutilizadas após {$a} alterações';
$string['informminpasswordupper'] = 'pelo menos {$a} letra(s) maiúscula(s)';
$string['informpasswordpolicy'] = 'A senha tem que ter {$a}';
$string['instructions'] = 'Instruções';
$string['internal'] = 'Interno';
$string['limitconcurrentlogins'] = 'Limitar múltiplas sessões';
$string['limitconcurrentlogins_desc'] = 'Se ativar esta opção, o número de sessões iniciadas em simultâneo passará a ser restrito para cada utilizador. A sessão iniciada há mais tempo será terminada após o limite ser atingido, por favor note que os utilizadores poderão perder toda a informação ainda não guardada. Esta configuração não é compatível com módulos de autenticação single-sign-on (SSO).';
$string['locked'] = 'Bloqueado';
$string['md5'] = 'Criptografia MD5';
$string['nopasswordchange'] = 'A senha não pode ser modificada.';
$string['nopasswordchangeforced'] = 'Não consegue prosseguir sem modificar a senha, entretanto não existe nenhuma página disponível para a mudar. Por favor contate o Administrador do site Moodle.';
$string['noprofileedit'] = 'O perfil não pode ser alterado';
$string['ntlmsso_attempting'] = 'A tentar "Single Sign On" via NTLM...';
$string['ntlmsso_failed'] = 'A autenticação automática falhou; tente usar a página de autenticação normal';
$string['ntlmsso_isdisabled'] = 'SSO por NTLM está desativado.';
$string['passwordhandling'] = 'Tratamento do campo de senha';
$string['plaintext'] = 'Texto simples';
$string['pluginnotenabled'] = 'O módulo de autenticação \'{$a}\' não está ativado.';
$string['pluginnotinstalled'] = 'O módulo de autenticação \'{$a}\' não está instalado.';
$string['potentialidps'] = 'Autenticar-se usando a sua conta em:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'O CAPTCHA serve para evitar ações indevidas por parte de programas automáticos. Insira as palavras na caixa, pela ordem apresentada e separadas por um espaço em branco.Se não tem a certeza das palavras, obtenha um novo CAPTCHA ou um CAPTCHA em formato áudio.';
$string['recaptcha_link'] = 'link';
$string['security_question'] = 'Pergunta de segurança';
$string['selfregistration'] = 'Autorregisto';
$string['selfregistration_help'] = 'Se estiver selecionado um módulo de autenticação como, por exemplo, o Autorregisto com confirmação por e-mail, então é possível aos utilizadores potenciais se registarem e criarem a sua conta de utilizador. Todavia isto torna também possível que spammers criem para usar os fóruns, blogues, etc. para inserir mensagens de spam (publicidade por exemplo). Para evitar estas situações, o autorregisto deve ser desativado ou limitado através da opção <em>Domínios de e-mail permitidos</em>';
$string['sha1'] = 'tabela hash SHA-1';
$string['showguestlogin'] = 'Pode optar por esconder ou mostrar o botão de entrada para visitantes na página de autenticação.';
$string['stdchangepassword'] = 'Usar a página predefinida para alterar a senha';
$string['stdchangepassword_expl'] = 'Se o sistema de autenticação externa permitir alteração da senha pelo Moodle, mude isto para Sim. Esta definição sobrepõe o endereço para alteração de senha\'.';
$string['stdchangepassword_explldap'] = 'NOTA: É recomendado utilizar o LDAP sobre um túnel encriptado SSL (ldaps://) se o servidor LDAP for remoto.';
$string['suspended'] = 'Conta suspensa';
$string['suspended_help'] = 'Os utilizadores que tenham as suas contas suspensas não podem autenticar-se no site nem usar os web services, e qualquer mensagem enviada para eles será descartada.';
$string['testsettings'] = 'Configurações de teste';
$string['testsettingsheading'] = 'Configurações da autenticação de teste - {$a}';
$string['unlocked'] = 'Desbloqueado';
$string['unlockedifempty'] = 'Desbloquear se vazio';
$string['update_never'] = 'Nunca';
$string['update_oncreate'] = 'Em criação';
$string['update_onlogin'] = 'Em cada autenticação';
$string['update_onupdate'] = 'Em atualização';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() não suporta o usertype selecionado: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() não suporta o usertype selecionado (..por enquanto)';
$string['username'] = 'Utilizador';
$string['username_help'] = 'Tenha atenção que alguns módulos de autenticação não permitem a alteração do nome de utilizador.';
