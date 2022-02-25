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
 * Strings for component 'condition', language 'es_mx', version '3.11'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Agregar {no} condiciones de actividad al formato';
$string['addgrades'] = 'Agregar {no} condiciones de calificación al formato';
$string['adduserfields'] = 'Añadir {no} condiciones de campo al formato';
$string['availabilityconditions'] = 'Restringir acceso';
$string['availablefrom'] = 'Permitir acceso a partir de';
$string['availablefrom_help'] = 'Las fechas de acceso desde/hasta determinan cuando los estudiantes pueden accesar la actividad vía un enlace en la página del curso.

La diferencia entre las fechas desde/hasta y las configuraciones de disponibilidad para la actividad es que, fuera de las fechas programadas, esta última (disponibilidada) les permite a los estudiantes ver la descripción de la actividad, mientras que los accesos desde/hasta impiden completamente el acceso.';
$string['availableuntil'] = 'Permitir acceso hasta';
$string['badavailabledates'] = 'Fechas no válidas. Si configura ambas fechas, la fecha de \'Permitir acceso desde\' debe ser anterior a la fecha del \'hasta\'.';
$string['badgradelimits'] = 'Si pone ambos límites superior e inferior, el límite superior debe ser mayor que el límite inferior';
$string['completion_complete'] = 'debe ser evaluada como completa';
$string['completion_fail'] = 'debe estar completa con calificación reprobatoria';
$string['completion_incomplete'] = 'no debe estar marcado como completo';
$string['completion_pass'] = 'debe estar completo con calificación aprobatoria';
$string['completioncondition'] = 'Condicionante por actividad finalizada';
$string['completioncondition_help'] = 'Este ajuste determina cualquier condición(es)  de finalización de la actividad, que debe(n) cumplirse para acceder a la actividad. Note que el seguimiento de finalización debe activarse antes de que se pueda configurar alguna condición de finalización de la actividad.

Si se desea, se pueden ajustar múltiples condiciones de finalización de la actividad. Si se hace así, la actividad sólo estará disponible cuando se cumplan TODAS las condiciones de finalización.';
$string['completionconditionsection'] = 'Condición de finalización de activida';
$string['completionconditionsection_help'] = 'Esta configuración determina cualquier condición de finalización que debe cubrirse para tener acceso a la sección. Observe que el seguimiento de finalización debe configurarse primero antes de configurar la condición de finalización. Se pueden configurar condiciones múltiples de actividad finalizada si se desea. De esta forma, solamente se podrá acceder a la sección cuando TODAS las condiciones de finalización se cumplan.';
$string['configenableavailability'] = 'Cuando se habilita, le permite poner condiciones (basadas en fecha, calificación, o finalización) que controlan si se puede o no accesar a una actividad o recurso.';
$string['contains'] = 'contiene';
$string['doesnotcontain'] = 'no contiene';
$string['enableavailability'] = 'Habilitar acceso condicionado';
$string['endswith'] = 'termina en';
$string['fielddeclaredmultipletimes'] = 'Usted no puede declarar el mismo campo más de una vez por actividad';
$string['grade_atleast'] = 'debe ser cuando menos';
$string['grade_upto'] = 'y no llegar o pasar de';
$string['gradecondition'] = 'Pre-requisitos';
$string['gradecondition_help'] = 'Este ajuste determina los pre-requisitos que deben cumplirse para acceder a la actividad.

Si se desea, se pueden ajustar múltiples condiciones de pre-requisitos. Si se hace así, la actividad sólo estará disponible cuando se cumplan TODOS los pre-requisitos.';
$string['gradeconditionsection'] = 'Condición de calificación';
$string['gradeconditionsection_help'] = 'Este ajuste determina los pre-requisitos de calificación que deben cumplirse para acceder a la sección.

Si se desea, se pueden ajustar múltiples condiciones de pre-requisitos. Si se hace así, la sección sólo estará disponible cuando se cumplan TODOS los pre-requisitos.';
$string['gradeitembutnolimits'] = 'Debe poner un límite superior, o inferior, o ambos';
$string['gradelimitsbutnoitem'] = 'Usted debe elegir un item de calificación.';
$string['gradesmustbenumeric'] = 'Las calificaciones mínimas y máximas deben ser numéricas ( o en blanco)';
$string['groupingnoaccess'] = 'Actualmente, Usted no pertenece a algún grupo que tenga acceso a esta sección.';
$string['isempty'] = 'está vacío';
$string['isequalto'] = 'es igual a';
$string['isnotempty'] = 'no está vacío';
$string['none'] = '(ninguno)';
$string['notavailableyet'] = 'Aún no disponible';
$string['requires_completion_0'] = 'no disponible a menos que la actividad <strong>{$a}</strong> esté incompleta.';
$string['requires_completion_1'] = 'No disponible hasta que la actividad <strong>{$a}</strong> esté evaluada como terminada (completa).';
$string['requires_completion_2'] = 'No disponible hasta que la actividad <strong>{$a}</strong> esté completa y aprobada (pasada).';
$string['requires_completion_3'] = 'No disponible a menos que la actividad <strong>{$a}</strong> esté completa y reprobada.';
$string['requires_date'] = 'Disponible desde {$a}.';
$string['requires_date_before'] = 'Disponible hasta {$a}.';
$string['requires_date_both'] = 'Disponible desde {$a->from} hasta {$a->until}.';
$string['requires_date_both_single_day'] = 'Disponible en {$a}.';
$string['requires_grade_any'] = 'No disponible hasta que tenga una calificación en <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'No disponible hasta que tenga un puntaje apropiado en <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'No disponible hasta que Usted obtenga la puntuación necesaria en <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'No disponible a menos que tenga una puntuación particular en la actividad <strong>{$a}</strong>.';
$string['requires_grouping'] = 'Disponible solamente para el agrupamiento <strong>{$a}</strong>.';
$string['requires_user_field_contains'] = 'No disponible a menos que su <strong>{$a->field}</strong> tenga <strong>{$a->value}</strong>.';
$string['requires_user_field_doesnotcontain'] = 'No disponible si su <strong>{$a->field}</strong> tiene <strong>{$a->value}</strong>.';
$string['requires_user_field_endswith'] = 'No disponible a menos que su <strong>{$a->field}</strong> termine con <strong>{$a->value}</strong>.';
$string['requires_user_field_isempty'] = 'No disponible a menos que su <strong>{$a->field}</strong> esté vacío/a.';
$string['requires_user_field_isequalto'] = 'No disponible a menos que su <strong>{$a->field}</strong> sea igual a <strong>{$a->value}</strong>.';
$string['requires_user_field_isnotempty'] = 'No disponible si su <strong>{$a->field}</strong> está vacío/a.';
$string['requires_user_field_startswith'] = 'No disponible a menos que su  <strong>{$a->field}</strong> empiece con <strong>{$a->value}</strong>.';
$string['showavailability'] = 'Mientras el acceso esta impedido';
$string['showavailability_hide'] = 'Ocultar completamente la actividad en el curso y en el libro de calificaciones';
$string['showavailability_show'] = 'Mostrar esta actividad sombreada en gris, con información de restricción';
$string['showavailabilitysection'] = 'Antes de que la sección pueda ser accesada';
$string['showavailabilitysection_hide'] = 'Ocultar completamente la sección';
$string['showavailabilitysection_show'] = 'Mostrar la sección en gris atenuado, con información sobre la restricción';
$string['startswith'] = 'comienza con';
$string['userfield'] = 'Campo de usuario';
$string['userfield_help'] = 'Usted puede restringir el acceso basándose en cualquier campo del perfil del usuario.';
$string['userrestriction_hidden'] = 'Restringida (completamente oculta, sin mensaje): {$a}';
$string['userrestriction_visible'] = 'Restringida: {$a}';
