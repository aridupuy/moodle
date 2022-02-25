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
 * Strings for component 'tool_assignmentupgrade', language 'es_mx', version '3.11'.
 *
 * @package     tool_assignmentupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousure'] = '¿Está seguro?';
$string['areyousuremessage'] = '¿Está seguro de querer actualizar la tarea  "{$a->name}"?';
$string['assignmentid'] = 'ID de tarea';
$string['assignmentnotfound'] = 'No se encontró la tarea  (id={$a})';
$string['assignmentsperpage'] = 'Tareas por página';
$string['assignmenttype'] = 'Tipo de tarea';
$string['backtoindex'] = 'Regresar al índice';
$string['batchoperations'] = 'Operaciones en lote';
$string['batchupgrade'] = 'Subir múltiples tareas';
$string['confirmbatchupgrade'] = 'Confirmar actualización de tareas por lote';
$string['conversioncomplete'] = 'Tarea convertida';
$string['conversionfailed'] = 'Falló la conversión de tarea. La bitácora  de la actualización fué: <br />{$a}';
$string['listnotupgraded'] = 'Enlista tareas que no han sido actualizadas';
$string['listnotupgraded_desc'] = 'Usted puede actualizar tareas individuales desde aquí';
$string['noassignmentsselected'] = 'No se seleccionaron tareas';
$string['noassignmentstoupgrade'] = 'No hay tareas que requieran actualización';
$string['notsupported'] = '';
$string['notupgradedintro'] = 'Esta página enlista las tareas creadas con una versión anterior de Moodle que no han sido actualizadas para el nuevo módulo de tarea de Moodle 2.3. Observe que no es posible actualizar todas las tareas - si fueron creadas con un subtipo de tarea hecho a la medida, entonces dicho subtipo deberá ser actualizado al nuevo formato de plugin de tarea para poder completar la actualización.';
$string['notupgradedtitle'] = 'Tareas no actualizadas';
$string['pluginname'] = 'Ayuda para actualización de tarea';
$string['privacy:metadata:preference:perpage'] = 'La preferencia de registros por página de actualización de tarea configurada por el usuario.';
$string['select'] = 'Seleccionar';
$string['submissions'] = 'Envíos';
$string['supported'] = 'Actualizar';
$string['unknown'] = 'Desconocido';
$string['updatetable'] = 'Actualizar tabla';
$string['upgradable'] = 'Actualizable';
$string['upgradeall'] = 'Actualizar todas las tareas';
$string['upgradeallconfirm'] = '¿Actualizar todas las tareas?';
$string['upgradeassignmentfailed'] = 'Resultado: Actualización fallida. La bitácora de actualización fué: <br/><div class="tool_assignmentupgrade_upgradelog">{$a->log}</div>';
$string['upgradeassignmentsuccess'] = 'Resultado: Actualización exitosa';
$string['upgradeassignmentsummary'] = 'Actualizar tarea: {$a->name} (Course: {$a->shortname})';
$string['upgradeprogress'] = 'Actualizar tarea {$a->current} de {$a->total}';
$string['upgradeselected'] = 'Actualizar tareas seleccionadas';
$string['upgradeselectedcount'] = '¿Actualizar {$a} tareas seleccionadas?';
$string['upgradesingle'] = 'Actualizar tarea única';
$string['viewcourse'] = 'Ver el curso con la tarea convertida';
