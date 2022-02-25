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
 * Strings for component 'gradingform_offline', language 'es_mx', version '3.11'.
 *
 * @package     gradingform_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Añadir criterio';
$string['additionalfeedback'] = 'Retroalimentación adicional';
$string['alwaysshowdefinition'] = 'Permitirle a usuarios previsualizar rúbrica (en caso contrario solamente será mostrada después de la calificada)';
$string['backtoediting'] = 'Regresar a editar';
$string['confirmdeletecriterion'] = '¿Está seguro de querer eliminar este criterio?';
$string['confirmdeletelevel'] = '¿Está seguro de querer eliminar este nivel?';
$string['criterion'] = 'Criterio {$a}';
$string['criterionaddlevel'] = 'Añadir nivel';
$string['criteriondelete'] = 'Eliminar criterio';
$string['criterionduplicate'] = 'Duplicar criterio';
$string['criterionempty'] = 'Clic para editar criterio';
$string['criterionmovedown'] = 'Mover hacia abajo';
$string['criterionmoveup'] = 'Mover hacia arriba';
$string['criterionremark'] = 'Comentario para criterio {$a->description}: {$a->remark}';
$string['definerubric'] = 'Definir Rúbrica Fuera-de-línea';
$string['description'] = 'Descripción';
$string['enableremarks'] = 'Permitirle a quien califica añadirle comentarios de texto para cada criterio';
$string['err_mintwolevels'] = 'Cada criterio debe tener al menos dos niveles';
$string['err_nocriteria'] = 'LA rúbrica debe contener al menos un criterio';
$string['err_nodefinition'] = 'La definición de nivel no puede estar vacía';
$string['err_nodescription'] = 'La descripción de criterio no puede estar vacía';
$string['err_novariations'] = 'Los niveles de criterios no pueden valer todos el mismo número de puntos';
$string['err_scoreformat'] = 'El número de puntos para cada nivel debe ser un número válido';
$string['err_totalscore'] = 'El número máximo de puntos posibles al calificar por rúbrica debe ser mayor de cero';
$string['export'] = 'Exportar como CSV';
$string['gradingof'] = '{$a} calificando';
$string['import'] = 'Importar CSV:';
$string['importedby'] = 'Importado por';
$string['level'] = 'Nivel {$a->definition}, {$a->score} puntos.';
$string['leveldefinition'] = 'Definición de Nivel {$a}';
$string['leveldelete'] = 'Eliminar nivel {$a}';
$string['levelempty'] = 'Clic para editar nivel';
$string['levelsgroup'] = 'Nivelar grupo';
$string['lockzeropoints'] = 'Calcular calificación que tenga un puntaje mínimo de la calificación mínima obtenible para la rúbrica';
$string['lockzeropoints_help'] = 'Esta configuración solamente aplica si la suma de número mínimo de puntos para cada criterio es mayor de 0. Si se activa, el puntaje mínimo de la actividad será la calificación mínima obtenible para la rúbrica. Cuando no se activa, el puntaje mínimo posible para la rúbrica será mapeado a la calificación mínima obtenible para la actividad (la cual es 0 a menos que se use una escala).';
$string['name'] = 'Nombre';
$string['needregrademessage'] = 'La definición de la rúbrica fue cambiada después de que este estudiante fue calificado. El estudiante no puede ver esta rúbrica a menos que usted revise la rúbrica y actualice la calificación.';
$string['noerrors'] = 'No se detectaron errores durante la importación de datos.';
$string['nofile'] = 'No se Detectaron Archivos';
$string['notset'] = 'No configurado';
$string['nullfields'] = 'Se detectaron campos nulos y omitidos durante la importación en los criterios siguientes:';
$string['pluginname'] = 'Fuera-de-línea';
$string['pointsvalue'] = '{$a} puntos';
$string['previewrubric'] = 'Previsualizar rúbrica';
$string['privacy:metadata:criterionid'] = 'Un identificador para un criterio específico siendo calificado.';
$string['privacy:metadata:fillingssummary'] = 'Almacena información acerca de la calificación del usuario creada por la rúbrica.';
$string['privacy:metadata:instanceid'] = 'Un identificador relacionado con una calificación en una actividad.';
$string['privacy:metadata:levelid'] = 'El nivel obtenido en la rúbrica';
$string['privacy:metadata:remark'] = 'Comentarios relativos al criterio de la rúbrica que está siendo evaluada.';
$string['regradeoption0'] = 'No marcar para re-calificar';
$string['regradeoption1'] = 'Marcar para re-calificar';
$string['rubric'] = 'Rúbrica';
$string['rubricmapping'] = 'Reglas de mapeo de puntaje a calificar';
$string['rubricnotcompleted'] = 'Por favor elija algo para cada criterio';
$string['rubricoptions'] = 'Opciones de rúbrica';
$string['rubricstatus'] = 'Estado actual de rúbrica';
$string['save'] = 'Guardar';
$string['saverubric'] = 'Guardar rúbrica y hacerla disponible';
$string['saverubricdraft'] = 'Guardar como borrador';
$string['scoreinputforlevel'] = 'Ingreso de puntaje para nivel {$a}';
$string['scorepostfix'] = '{$a} puntos';
$string['showdescriptionstudent'] = 'Mostrarle descripción de rúbrica a quienes son calificados';
$string['showdescriptionteacher'] = 'Mostrar descripción de rúbrica durante la evaluación';
$string['showremarksstudent'] = 'Mostrar comentarios a quienes son calificados';
$string['showscorestudent'] = 'Mostrar puntos para cada nivel a quienes son calificados';
$string['showscoreteacher'] = 'Mostrar puntos para cada nivel durante la evaluación';
$string['sortlevelsasc'] = 'Ordenar orden por niveles:';
$string['sortlevelsasc0'] = 'Descendiente por número de puntos';
$string['sortlevelsasc1'] = 'Ascendiente por número de puntos';
$string['success'] = 'Se Importaron Exitosamente Datos del Archivo';
$string['unevenrows'] = 'Número disparejo de filas en archivo (Formato Incorrecto de Archivo). El archivo no fue importado.';
$string['zerolevelsabsent'] = 'Advertencia: El puntaje mínimo posible para esta rúbrica no es 0; esto puede resultar en calificaciones inesperada para la actividad. Para evitar esto, cada criterio debería de tener un nivel con 0 puntos.<br>
Esta advertencia puede ignorarse si se usa una escala para calificar, y los niveles mínimos en la rúbrica corresponden al valor mínimo de la escala.';
