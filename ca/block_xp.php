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
 * Strings for component 'block_xp', language 'ca', branch 'MOODLE_28_STABLE'
 *
 * @package   block_xp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['defaultrulesformhelp'] = 'Aquestes són les regles per defecte que proporciona el connector. Dónen punts d\'experiència automàticament i ignoren alguns esdeveniments redundants. Les regles personalitzades tenen preferència sobre aquestes.';
$string['rulesformhelp'] = '<p>Aquest connector fa ús dels esdeveniments per atribuir punts d\'experiència a les accions que fan els estudiants. Podeu usar el formulari del dessota per afegir les vostres pròpies regles i visualitzar les que hi ha per defecte.</p>
<p>S\'aconsella comprovar el <a href="{$a->log}">registre</a> del connector per tal d\'identificar quins esdeveniments s\'activen a mesura que feu accions en el curs, així com llegir més sobre els esdeveniments mateixos: <a href="{$a->list}">llista de tots els esdeveniments</a>, <a href="{$a->doc}">documentació del desenvolupador</a>.</p>
<p>Finalment, sapigueu que el connector ignora sempre:
<ul>
  <li>Les accions que fan els administradors, convidats o usuaris no autenticats.</li>
  <li>Les accions que fan els usuaris que no tenen la capacitat <em>block/xp:earnxp</em>.</li>
  <li>Accions repetides en poca estona, per tal d\'evitar la còpia.</li>
  <li>I els esdeveniments d\'un nivell educatiu diferent a <em>Participant</em>.</li>
</ul>
</p>';
