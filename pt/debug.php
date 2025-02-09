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
 * Strings for component 'debug', language 'pt', version '4.4'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'O módulo de autenticação {$a} não foi encontrado.';
$string['blocknotexist'] = 'O bloco {$a} não existe';
$string['cannotbenull'] = '{$a} não pode ser nulo(a)';
$string['cannotdowngrade'] = 'Não é possível retroceder a versão do módulo \'{$a->plugin}\' de \'{$a->oldversion}\' para \'{$a->newversion}\'.';
$string['cannotfindadmin'] = 'Não foi encontrado nenhum administrador!';
$string['cannotinitpage'] = 'Não é possível iniciar totalmente a página: {$a->name} id inválido {$a->id}';
$string['cannotsetuptable'] = '{$a} tabelas NÃO foram configuradas com sucesso!';
$string['codingerror'] = 'Foi detetado o seguinte erro de programação que deve ser corrigido por um programador: {$a}';
$string['configmoodle'] = 'O Moodle ainda não foi configurado. Tem de editar o ficheiro \'config.php\' primeiro.';
$string['debuginfo'] = 'Informação de depuração';
$string['erroroccur'] = 'Ocorreu um erro durante este processo';
$string['invalidarraysize'] = 'Tamanho incorreto nos parâmetros de {$a}';
$string['invalideventdata'] = 'Foi submetida uma data do evento incorreta: {$a}';
$string['invalidparameter'] = 'Foi detetado um valor do parâmetro inválido. A execução não pode continuar.';
$string['invalidresponse'] = 'Foi detetado um valor de resposta inválido. A execução não pode continuar.';
$string['line'] = 'Linha';
$string['missingconfigversion'] = 'A configuração da tabela não contém nenhuma versão. Não é possível continuar.';
$string['modulenotexist'] = 'O módulo {$a} não existe';
$string['morethanonerecordinfetch'] = 'Foram encontrados vários registos na pesquisa!';
$string['mustbeoveride'] = 'O método {$a} abstrato deve ser substituido.';
$string['noadminrole'] = 'Não foi possivel encontrar nenhum papel de administrador';
$string['noblocks'] = 'Não há blocos instalados!';
$string['nocate'] = 'Não há categorias!';
$string['nomodules'] = 'Não foram encontrados módulos!';
$string['nopageclass'] = '{$a} importado mas não foram encontradas classes de páginas';
$string['noreports'] = 'Não há relatórios acessíveis';
$string['notables'] = 'Não há tabelas!';
$string['outputbuffer'] = 'Buffer de Output';
$string['phpvaroff'] = 'A variável de servidor PHP \'{$a->name}\' deve estar Off - {$a->link}';
$string['phpvaron'] = 'A variável de servidor PHP \'{$a->name}\' não está ligada - {$a->link}';
$string['reactive_highlightoff'] = 'Destacar DESLIGADO';
$string['reactive_highlighton'] = 'Destacar LIGADO';
$string['reactive_instances'] = 'Instâncias reativas:';
$string['reactive_noinstances'] = 'Esta página não tem instâncias reativas.';
$string['reactive_pin'] = 'Destacar';
$string['reactive_readmodeoff'] = 'Modo de leitura DESLIGADO';
$string['reactive_readmodeon'] = 'Modo de leitura LIGADO';
$string['reactive_resetpanel'] = 'Reiniciar painel';
$string['reactive_saveingwarning'] = 'Aviso: Editar o estado pode causar resultados inesperados.';
$string['reactive_statedata'] = 'State data';
$string['reactive_unpin'] = 'Remover destaque';
$string['sessionmissing'] = '{$a} objetos em falta na sessão';
$string['sqlrelyonobsoletetable'] = 'Este SQL baseia-se na tabela obsoleta: {$a}! O seu código deverá ser reparado por um programador.';
$string['stacktrace'] = 'Stack trace';
$string['withoutversion'] = 'O ficheiro \'version.php\' principal está em falta, inacessível ou corrompido.';
$string['xmlizeunavailable'] = 'as funções xmlize não estão disponíveis';
