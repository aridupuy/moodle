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
 * Strings for component 'availability_quizquestion', language 'es_mx', version '3.11'.
 *
 * @package     availability_quizquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajaxerror'] = 'Error al contactar al servidor para obtener pregunta del examen';
$string['description'] = 'Este plugin le permite limitar el acceso a otra actividad Moodle simplemente por el resultado de una sola pregunta en un examen.';
$string['error_selectquestion'] = 'Usted debe seleccionar una pregunta.';
$string['error_selectquiz'] = 'Usted debe seleccionar un examen.';
$string['error_selectstate'] = 'Usted debe seleccionar un estado.';
$string['label_question'] = 'Cual pregunta en el examen seleccionado';
$string['label_state'] = 'Estado requerido';
$string['pluginname'] = 'Restricción por una sola pregunta del examen';
$string['privacy:metadata'] = 'El plugin de Restricción por una sola pregunta del examen no almacena ningún dato personal.';
$string['questionnumberandname'] = 'P{$a->number}) {$a->name}';
$string['requires_quizquestion'] = 'La pregunta <b>{$a->questiontext}</b> en <b><a href="{$a->quizurl}">{$a->quizname}</a></b> esté <b>{$a->requiredstate}</b>';
$string['requires_quizquestionnot'] = 'La pregunta <b>{$a->questiontext}</b> en <b><a href="{$a->quizurl}">{$a->quizname}</a></b> no esté <b>{$a->requiredstate}</b>';
$string['title'] = 'Pregunta del examen';
