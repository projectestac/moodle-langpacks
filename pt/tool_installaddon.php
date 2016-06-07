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
 * Strings for component 'tool_installaddon', language 'pt', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Confirmação';
$string['acknowledgementtext'] = 'Compreendo que é da minha responsabilidade ter cópias de segurança completas deste site antes de instalar módulos adicionais. Aceito e compreendo que os módulos (especialmente, mas não apenas, os provenientes de fontes não oficiais) podem conter falhas de segurança, tornar o site indisponível ou causar fuga ou perda de dados privados.';
$string['featuredisabled'] = 'O instalador de módulos está desativado neste site.';
$string['installaddon'] = 'Instalar módulo';
$string['installaddons'] = 'Instalar módulos';
$string['installfromrepo'] = 'Instalar módulos a partir da diretoria de módulos do Moodle';
$string['installfromrepo_help'] = 'Será redirecionado para a diretoria de módulos do Moodle para procurar e instalar um módulo. Note que o nome do site completo, URL e versão Moodle também serão enviados por forma a facilitar-lhe o processo de instalação.';
$string['installfromzip'] = 'Instale o módulo a partir do ficheiro ZIP';
$string['installfromzipfile'] = 'Pacote ZIP';
$string['installfromzipfile_help'] = 'O pacote ZIP do módulo deve conter apenas uma diretoria e ter um nome correspondente ao do módulo. O conteúdo do ficheiro ZIP será extraído numa localização apropriada para o tipo de módulo. Se descarregou o pacote a partir de moodle.org/plugins, então ele terá essa estrutura.';
$string['installfromzip_help'] = 'Uma alternativa para instalar um módulo diretamente da diretoria de módulos do Moodle passará por fazer o carregamento de um pacote ZIP do módulo. O pacote ZIP deve ter a mesma estrutura de um pacote cuja descarga foi feita a partir da diretoria de módulos do Moodle.';
$string['installfromzipinvalid'] = 'O pacote ZIP do módulo deve conter apenas uma diretoria e ter um nome correspondente ao do módulo. O ficheiro apresentado é um pacote ZIP do módulo inválido .';
$string['installfromziprootdir'] = 'Alterar o nome da diretoria raiz';
$string['installfromziprootdir_help'] = 'Alguns pacotes ZIP, tais como os gerados por Github, podem conter um nome de diretoria raiz incorreto. Se assim for, o nome correto pode ser introduzido aqui.';
$string['installfromzipsubmit'] = 'Instalar módulo a partir do ficheiro ZIP';
$string['installfromziptype'] = 'Tipo de módulo';
$string['installfromziptype_help'] = 'No caso de módulos que declaram corretamente o seu nome, o instalador é capaz de detetar automaticamente o tipo de módulo. Se a auto-deteção falhar, escolha manualmente o tipo correto de módulo que está prestes a instalar.
Aviso: O procedimento de instalação pode falhar se um tipo de módulo incorreto for especificado.';
$string['permcheck'] = 'Certifique-se de que a localização raiz do tipo de módulo permite gravação pelo processo de servidor web.';
$string['permcheckerror'] = 'Erro durante a verificação de permissão de gravação';
$string['permcheckprogress'] = 'A verificar a permissão de gravação…';
$string['permcheckrepeat'] = 'Verifique novamente';
$string['permcheckresultno'] = 'A localização do tipo de módulo <em>{$a->path}</em> não permite gravaçã';
$string['permcheckresultyes'] = 'A localização do tipo de módulo <em>{$a->path}</em> permite gravação';
$string['pluginname'] = 'Instalador de módulo';
$string['remoterequestalreadyinstalled'] = 'Há um pedido para instalar neste site o módulo \'{$a->name}\' ({$a->component}) na versão \'{$a->version}\' a partir da diretoria de módulos do Moodle. No entanto, este módulo <strong>já está instalado</strong> no site.';
$string['remoterequestconfirm'] = 'Há um pedido para instalar neste site o módulo <strong>\'{$a->name}\'</strong> ({$a->component}) na versão \'{$a->version}\' a partir da diretoria de módulos do Moodle. Se continuar, o pacote ZIP do módulo será descarregado para validação. Para já, nada será instalado.';
$string['remoterequestinvalid'] = 'Há um pedido para instalar neste site um módulo a partir da diretoria de módulos do Moodle. Infelizmente, o pedido não é válido e, por isso, o módulo não pode ser instalado.';
$string['remoterequestnoninstallable'] = 'Existe um pedido para instalar o módulo {$a->name} ({$a->component}) da versão {$a->version} da diretoria de módulo do Moodle, para este site. Contudo, a verificação de pré-requisitos da instalação do mmódulo falhou (código do motivo: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Há um pedido para instalar neste site o módulo \'{$a->name} ({$a->component})\' na versão \'{$a->version}\' a partir da diretoria de módulos do Moodle. No entanto,  <strong>{$a->typepath}</strong><strong>não permite a gravação</strong>. Precisa de dar acesso de gravação ao utilizador do servidor web para a localização, depois clique no botão \'Continuar\' para repetir a verificação.';
$string['remoterequestpluginfoexception'] = 'Ocorreu um erro ao tentar obter informações sobre o módulo {$a->name} ({$a->component}) na versão {$a->version}. O módulo não pode ser instalado. Ative o modo de depuração para ver os detalhes do erro.';
$string['typedetectionfailed'] = 'Não foi possível detectar o tipo de módulo. Por favor, escolha manualmente o tipo de módulo que está prestes a instalar.';
$string['typedetectionmismatch'] = 'O tipo de módulo selecionado não corresponde ao declarado pelo presente módulo: {$a}';
