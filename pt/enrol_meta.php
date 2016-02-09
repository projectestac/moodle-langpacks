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
 * Strings for component 'enrol_meta', language 'pt', branch 'MOODLE_30_STABLE'
 *
 * @package   enrol_meta
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Adicionar ao grupo';
$string['coursesort'] = 'Ordenar a lista da disciplina';
$string['coursesort_help'] = 'Esta opção determina se a lista de disciplinas que podem ser agrupadas estão ordenadas por ordem de seleção (ou seja, a ordem em Administração do Site > Disciplinas > Gerir disciplinas e categorias) ou por ordem alfabética dada a configuração do curso.';
$string['creategroup'] = 'Criar um novo grupo';
$string['defaultgroupnametext'] = '{$a->increment} disciplina {$a->name}';
$string['linkedcourse'] = 'Disciplina ligada';
$string['meta:config'] = 'Configurar instâncias de inscrição em meta-disciplinas';
$string['meta:selectaslinked'] = 'Definir disciplina como meta-disciplina ligada';
$string['meta:unenrol'] = 'Desinscrever utilizadores suspensos';
$string['nosyncroleids'] = 'Papéis que não são sincronizados';
$string['nosyncroleids_desc'] = 'Por definição todas as atribuições de papéis feitas ao nível da disciplinas são sincronizadas da disciplina pai para as disciplinas filhas. Os papéis aqui indicados não serão sincronizados. Os papéis atuais serão atualizados durante a próxima execução do cron.';
$string['pluginname'] = 'Meta-disciplinas';
$string['pluginname_desc'] = 'Este módulo de inscrição permite sincronizar inscrições e atribuições de papéis entre várias disciplinas ligadas entre si.';
$string['syncall'] = 'Sincronizar todos os utilizadores inscritos';
$string['syncall_desc'] = 'Se ativo, todos os utilizadores inscritos são sincronizados mesmo que não possuam nenhum papel na disciplina pai, se inativo apenas os utilizadores que possuem pelo menos um papel sincronizado serão inscritos.';
