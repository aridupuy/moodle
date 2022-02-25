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
 * Strings for component 'workshopeval_credit', language 'es_mx', version '3.11'.
 *
 * @package     workshopeval_credit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['mode'] = 'Modo de evaluación';
$string['mode_desc'] = 'Modo de evaluación de calificación por defecto usado por  \'Crédito de participación\'';
$string['mode_help'] = 'El modo determina cómo se calculan las calificaciones para la evaluación:

* Todo o nada - El revisor debe evaluar todos los envíos asignados para obtener la calificación máxima; de otra forma reciben una calificación de cero.
* Proporcional - La calificación obtenida es proporcional al número de evaluaciones. Si todos los envíos asignados son evaluados, el revisor obtendrá la calificación máxima; si la mitad de los envíos son evaluados, el revisor obtendrá el 50% de la calificación máxima.
* Al menos uno - El revisor debe evaluar al menos un envío asignado para obtener la calificación máxima.';
$string['modeall'] = 'Todo o nada';
$string['modeone'] = 'Al menos uno';
$string['modeproportional'] = 'Proporcional';
$string['pluginname'] = 'Crédito de participación';
$string['privacy:metadata'] = 'Crédito de participación no almacena ningún dato personal';
