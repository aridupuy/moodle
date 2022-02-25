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
 * Strings for component 'block_fn_marking', language 'es_mx', version '3.11'.
 *
 * @package     block_fn_marking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminfrontpage'] = 'Vista admin-portada';
$string['aggregatetype'] = 'Agregar tipo';
$string['allcourses'] = 'Todos los cursos';
$string['allcourseswithblock'] = 'Solamente incluir cursos que tienen el Bloque de Gestor de Calificar';
$string['assign'] = 'Tarea';
$string['blocksettings'] = 'Configurando un bloque de calificación FN';
$string['blocksitesettings'] = 'Configuraciones del sitio del bloque';
$string['blocktitle'] = 'Mánager de Calificador';
$string['cfgdisplaytitle'] = 'Mostrar título';
$string['close'] = 'Cerrar';
$string['config_days'] = 'Configurar el número de días que lleva el estudiante sin conectarse';
$string['config_days_help'] = '<p>Esta configuración le permite definir </p> <p>el número de días que llevan los estudiantes sin entrar al curso.</p>';
$string['config_percent'] = 'Configurar el porcentaje de puntos';
$string['config_percent_help'] = '<p>Esta configuración le permite especificar </p> <p>el porciento de puntos, y después de esto, verá el número de estudiantes con puntajes inferiores al x porciento.</p>';
$string['config_sectiontitles'] = 'Títulos de secciones';
$string['config_sectiontitles_help'] = '<p>vacío=valor por defecto del curso.</p>';
$string['config_showgradeslink'] = 'Mostrar enlace a calificación';
$string['config_showgradeslink_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultará el enlace hacia calificación en el bloque.</p>';
$string['config_showmarked'] = 'Mostrar actividades calificadas';
$string['config_showmarked_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultarán las actividades calificadas en el bloque.</p>';
$string['config_shownotloggedinuser'] = 'Mostrar usuarios no-en-línea';
$string['config_shownotloggedinuser_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultará el número de estudiantes no conectados en la semana anterior.</p>';
$string['config_showreportlink'] = 'Mostrar enlace a reporte';
$string['config_showreportlink_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultará el enlace hacia reporte en el bloque.</p>';
$string['config_showsaved'] = 'Mostrar actividades en borrador';
$string['config_showsaved_help'] = '<p>Esta configuración determina si es que se mostrarán </p> <p> o se ocultarán las actividades en borrador del estudiante en el bloque.</p>';
$string['config_showstudentmarkslessthanfiftypercent'] = 'Mostrar puntajes de estudiantes menores al 50%';
$string['config_showstudentmarkslessthanfiftypercent_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultará el número de estudiantes con puntajes inferiores al 50%.</p>';
$string['config_showstudentnotsubmittedassignment'] = 'Mostrar estudiantes que no enviaron tarea';
$string['config_showstudentnotsubmittedassignment_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultará el número de estudiantes que no enviaron su tarea la semana pasada.</p>';
$string['config_showunmarked'] = 'Mostrar actividades no calificadas';
$string['config_showunmarked_help'] = '<p>Esta configuración determina si es que se mostrarán </p> <p> o se ocultarán las actividades no-calificadas en el bloque.</p>';
$string['config_title'] = 'Título de instancia';
$string['config_title_help'] = '<p>Esta configuración permite cambiar el título del bloque </p> <p>Si el encabezado del bloque está oculto, el título no aparecerá.</p>';
$string['config_unsubmitted'] = 'Mostrar actividades no enviadas';
$string['config_unsubmitted_help'] = '<p>Esta configuración determina si es que se mostrarán </p> <p> o se ocultarán las actividades no-enviadas en el bloque.</p>';
$string['descconfig'] = '<p>Active esta opción para ocultar todos los bloques al ver la interfaz para Gestionar Calificaciones y proporcionar un aspecto menos amontonado. Por favor tenga en cuenta que ANTES de activar esta opción, Usted necesita añadir el siguiente código a  <b><em>susitiomoodle/theme/base/config.php</em>.</b></p> <p></p> <pre><code style="font-size:12px; color:#FF7600;"> // Ocultar columnas de bloques izquierdo y derecho al ver el Gestor de Calificaciones \'markingmanager\' => array(
    \'file\' => \'general.php\',
    \'regions\' => array(),
    \'options\' => array(\'noblocks\'=>true),
),
</code></pre>
DESPUÉS de añadir el código superior, su archivo deberá de verso como la imagen <a href="http://moodlefn.com/docs/marking_manager_no_blocks.png">mostrada aquí</a>.';
$string['displaytitle'] = 'Actividades enviadas';
$string['enrolledcourses'] = 'Cursos inscritos';
$string['fn_marking:addinstance'] = 'Añadir instancia';
$string['fn_marking:myaddinstance'] = 'Añadir un nuevo bloque de Gestor Calificador al Tablero';
$string['fn_marking:viewblock'] = 'Ver bloque';
$string['fn_marking:viewreadonly'] = 'Ver solo lectura';
$string['forum'] = 'Foro';
$string['grade'] = '<b>Calificación: </b>';
$string['gradebook'] = 'Libro de calificaciones';
$string['gradeslink'] = 'Calificaciones';
$string['gradingstudentprogress'] = 'Mostrando  {$a->index} de {$a->count}';
$string['headertitle'] = 'Gestor Calificador';
$string['include_orphaned'] = 'Incluir actividades huérfanas';
$string['includehiddencourses'] = 'Incluir cursos ocultos';
$string['keepseparate'] = 'Mantener separadas tareas en borrador';
$string['labelnoblocks'] = 'Ocultar todos los bloques';
$string['lastrefreshrequired'] = 'Último refresco: Actualización necesaria';
$string['listcourseszeroungraded'] = 'Enlistar cursos con cero actividades sin-calificar';
$string['manual'] = 'Manual';
$string['marked'] = 'Calificado';
$string['moodlegradebook'] = 'Abrir Libro de Calificaciones de Moodle';
$string['morethan10'] = 'Hay más de 10 cursos con trabajos sin-calificar.';
$string['no'] = 'No';
$string['notloggedin'] = '- sin ingreso en';
$string['notsubmittedany'] = '- sin envío en';
$string['opensitesettingspage'] = 'Página de configuraciones de sitio abierto';
$string['overallfailinggrade'] = '- calificación menor de';
$string['pluginname'] = 'Gestor Calificador NED';
$string['plugintitle'] = 'Gestor Calificador';
$string['posts'] = 'Publicaciones';
$string['quiz'] = 'Examen';
$string['rating'] = 'Valoración';
$string['refreshnow'] = 'Refrescar ahora';
$string['replies'] = 'Responde';
$string['reportslink'] = 'Reportes';
$string['saved'] = 'Borrador';
$string['scale'] = 'Escala';
$string['sectiontitles'] = 'Títulos de secciones';
$string['setblocktitle'] = 'Configurartítulo del bloque';
$string['setnumberofdays'] = 'Configurar número de días';
$string['setpercentmarks'] = 'Configurar porcentaje de puntos';
$string['show'] = 'Mostrar';
$string['showcourselink'] = 'Enlace del curso';
$string['showgradebook'] = 'Libro de calificaciones';
$string['showgradeslink'] = 'Reporte del Progreso';
$string['showmarked'] = 'Actividades calificadas';
$string['shownotloggedinuser'] = 'Mostrar usuarios no conectados';
$string['showreportslink'] = 'Lista de Estudiantes';
$string['showsaved'] = 'Mostrar actividades en borrador';
$string['showstudentmarkslessthanfiftypercent'] = 'Mostrar número de estudiantes con puntajes menores al 50%';
$string['showstudentnotsubmittedassignment'] = 'Mostrar número de estudiantes que no enviaron tareas';
$string['showtopmessage'] = 'Mostrar mensaje arriba de interfaz';
$string['showunmarked'] = 'Requiere calificarse';
$string['showunsubmitted'] = 'Actividades no enviadas';
$string['simplegradebook'] = 'Reporte del Progreso';
$string['sort'] = 'Ordenar';
$string['student'] = 'Estudiante';
$string['student_have_posted'] = 'Los siguientes estudiantes han publicado en este foro:';
$string['studentlist'] = 'Lista de estudiantes';
$string['title:failingwithgradelessthanxpercent'] = 'Los siguientes estudiantes tienen una calificación global menor de';
$string['title:markslessthanxpercent'] = 'Los siguientes estudiantes no han enviado ninguna actividad por';
$string['title:notlogin'] = 'Los siguientes estudiantes no se han conectado por';
$string['title:notsubmittedanyactivity'] = 'Los siguientes estudiantes no han enviado ninguna actividad por';
$string['title:saved'] = 'Los siguientes estudiantes tienen actividades en borrador';
$string['topmessage'] = 'Mensaje a mostrar';
$string['ttmarking'] = 'Interfaz para calificar';
$string['type'] = 'Tipo';
$string['unmarked'] = 'Requiere calificar';
$string['unsubmitted'] = 'No enviado';
$string['view'] = 'Ver';
$string['whocanrate'] = 'Quién puede valorar';
$string['yes'] = 'Sí';
