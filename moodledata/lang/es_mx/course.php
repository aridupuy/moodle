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
 * Strings for component 'course', language 'es_mx', version '3.11'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Pie de página del selector de actividad';
$string['activitychooseractivefooter_desc'] = 'El selector de actividad puede soportar plugins que añaden elementos al pie de página.';
$string['activitychoosercategory'] = 'Selector de actividad';
$string['activitychooserhidefooter'] = 'Sin pie de página';
$string['activitychooserrecommendations'] = 'Actividades recomendadas';
$string['activitychoosersettings'] = 'Configuraciones del Selector de actividad';
$string['activitychoosertabmode'] = 'Pestañas del Selector de actividad';
$string['activitychoosertabmode_desc'] = 'El Selector de actividad le permite a un profesor seleccionar fácilmente actividades y recursos para añadirlos a sus cursos. Esta configuración determina cuales pestañas deberían mostrarse en él. Tenga en cuenta que la pestaña destacada solamente es mostrada para un usuario si es que ha destacado una o más actividades y la pestaña recomendada solamente es mostrada si el administrador ha especificado algunas actividades recomendadas.';
$string['activitychoosertabmodeone'] = 'Destacadas, Todas, Actividades, Recursos, Recomendadas';
$string['activitychoosertabmodethree'] = 'Destacadas, Actividades, Recursos, Recomendadas';
$string['activitychoosertabmodetwo'] = 'Destacadas, Todas, Recomendadas';
$string['activitydate:closed'] = 'Cerró:';
$string['activitydate:closes'] = 'Cierra:';
$string['activitydate:opened'] = 'Abrió:';
$string['activitydate:opens'] = 'Abre:';
$string['aria:coursecategory'] = 'Categoría del curso';
$string['aria:courseimage'] = 'Imagen del curso';
$string['aria:coursename'] = 'Nombre del curso';
$string['aria:courseshortname'] = 'Nombre corto del curso';
$string['aria:defaulttab'] = 'Actividades predeterminadas';
$string['aria:favourite'] = 'El curso está destacado';
$string['aria:favouritestab'] = 'Actividades destacadas';
$string['aria:modulefavourite'] = 'Destacar actividad {$a}';
$string['aria:recommendedtab'] = 'Actividades recomendadas';
$string['completion_automatic:done'] = 'Hecho:';
$string['completion_automatic:failed'] = 'Reprobado:';
$string['completion_automatic:todo'] = 'Por hacer:';
$string['completion_manual:aria:done'] = '{$a} está marcado como hecho. Presionar para deshacer.';
$string['completion_manual:aria:markdone'] = 'Marcar {$a} como hecho';
$string['completion_manual:done'] = 'Hecho';
$string['completion_manual:markdone'] = 'Marcar como hecho';
$string['completion_setby:auto:done'] = 'Hecho: {$a->condition} (configurado por {$a->setby})';
$string['completion_setby:auto:todo'] = 'Por hacer: {$a->condition} (configurado por {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} está marcado por {$a->setby} como hecho. Presionar para deshacer.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} está marcado por {$a->setby} como NO hecho. Presionar para deshacer.';
$string['completionrequirements'] = 'Requisitos de finalización para {$a}';
$string['coursealreadyfinished'] = 'Curso ya terminado';
$string['coursenotyetfinished'] = 'El curso aun no ha terminado';
$string['coursenotyetstarted'] = 'El curso aun no ha comenzado';
$string['coursetoolong'] = 'El curso es demasiado largo';
$string['customfield_islocked'] = 'Bloqueado';
$string['customfield_islocked_help'] = 'Cuando el campo está bloqueado, solamente los usuarios con la capacidad para "Modificar campos bloqueados" (por defecto solamente los usuarios con el rol de Mánager) podrán cambiarlo en las configuraciones del curso.';
$string['customfield_notvisible'] = 'Nadie';
$string['customfield_visibility'] = 'Visible a';
$string['customfield_visibility_help'] = 'Esta configuración determina quién debería poder ver el nombre del campo personalizado y su valor en el listado de cursos o en el filtro del campo personalizado disponible del Tablero.';
$string['customfield_visibletoall'] = 'Todos';
$string['customfield_visibletoteachers'] = 'Profesores';
$string['customfieldsettings'] = 'Configuraciones para campos comunes personalizados del curso';
$string['downloadcourseconfirmation'] = 'Usted está a punto de descargar un archivo ZIP de contenidos del curso (excluyendo elementos que no pueden ser descargados y cualquier archivo mayor a {$a}).';
$string['downloadcoursecontent'] = 'Descargar contenido del curso';
$string['downloadcoursecontent_help'] = 'Esta configuración determina si es que el contenido del curso puede ser descargado por usuarios con la capacidad para descargar contenido del curso (por defecto usuarios con el rol de estudiante o profesor).';
$string['enabledownloadcoursecontent'] = 'Habilitar descargar contenido del curso';
$string['errorendbeforestart'] = 'La fecha de fin ({$a}) es anterior a la fecha de inicio del curso.';
$string['favourite'] = 'Curso destacado';
$string['gradetopassnotset'] = 'Este curso no tiene configurada una calificación aprobatoria. Puede configurarse en el ítem de calificación del curso (Configuración del Libro de calificaciones).';
$string['informationformodule'] = 'Información acerca de la actividad {$a}';
$string['module'] = 'Actividad';
$string['noaccesssincestartinfomessage'] = 'Hola {$a->userfirstname},
<p>Un número de estudiantes en {$a->coursename} nunca han accedido al curso.</p>';
$string['nocourseactivity'] = 'No hay suficientes actividades del curso entre el principio y el fin del curso';
$string['nocourseendtime'] = 'El curso no tiene una hora de fin';
$string['nocoursesections'] = 'Sin secciones del curso';
$string['nocoursestudents'] = 'Sin estudiantes';
$string['norecentaccessesinfomessage'] = 'Hola {$a->userfirstname},
<p>Un número de estudiantes en {$a->coursename} no han accedido recientemente al curso.</p>';
$string['noteachinginfomessage'] = 'Hola {$a->userfirstname},
<p>Los cursos con fechas de inicio en la próxima semana han sido identificados como cursos que no tienen inscripciones de profesores o estudiantes.</p>';
$string['privacy:completionpath'] = 'Finalización del curso';
$string['privacy:favouritespath'] = 'Información de curso destacado';
$string['privacy:metadata:activityfavouritessummary'] = 'El sistema del curso contiene información acerca de cuales ítems del selector de actividades han sido destacados por el usuario.';
$string['privacy:metadata:completionsummary'] = 'El curso contiene información de finalización acerca del usuario.';
$string['privacy:metadata:favouritessummary'] = 'El curso contiene información relacionada al curso que está siendo destacado por el usuario.';
$string['privacy:perpage'] = 'El número de cursos a mostrar por página.';
$string['recommend'] = 'Recomendado';
$string['recommendcheckbox'] = 'Actividad recomendada: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} después del inicio del curso';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} antes del inicio del curso';
$string['searchactivitiesbyname'] = 'Buscar actividades por nombre';
$string['searchresults'] = 'Resultados de búsqueda: {$a}';
$string['studentsatriskincourse'] = 'Estudiantes en riesgo en curso {$a}';
$string['studentsatriskinfomessage'] = 'Hola {$a->userfirstname},
<p>Los estudiantes en el curso {$a->coursename} han sido identificados como estudiantes en riesgo.</p>';
$string['submitsearch'] = 'Enviar búsqueda';
$string['target:coursecompetencies'] = 'Estudiantes en riesgo de no obtener las competencias asignadas a un curso';
$string['target:coursecompetencies_help'] = 'Esta meta describe si es que un estudiante está o no en riesgo de no obtener las competencias asignadas al curso. Esta meta considera que todas las competencias asignadas al curso deben de ser logradas al final del curso.';
$string['target:coursecompletion'] = 'Estudiantes en riesgo de no obtener las condiciones de finalización del curso';
$string['target:coursecompletion_help'] = 'Esta meta describe si es que el estudiante está o no considerado en riesgo de no cumplir las condiciones de finalización del curso.';
$string['target:coursedropout'] = 'Estudiantes en riesgo de abandonar';
$string['target:coursedropout_help'] = 'Esta meta describe si es que el estudiante está o no considerado en riesgo de abandonar.';
$string['target:coursegradetopass'] = 'Estudiantes en riesgo de no obtener la calificación mínima para pasar el curso';
$string['target:coursegradetopass_help'] = 'Esta meta describe si es que el estudiante está o no en riesgo de no obtener la calificación mínima para pasar el curso.';
$string['target:noaccesssincecoursestart'] = 'Estudiantes que aun no han accedido al curso';
$string['target:noaccesssincecoursestart_help'] = 'Esta meta describe estudiantes quienes nunca accedieron a un curso en el cual estaban inscritos.';
$string['target:noaccesssincecoursestartinfo'] = 'Los siguientes estudiantes están inscritos en un curso que ha iniciado, pero ellos nunca han accedido al curso.';
$string['target:norecentaccesses'] = 'Estudiantes que no han accedido recientemente al curso';
$string['target:norecentaccesses_help'] = 'Esta meta identifica estudiantes quienes no han accedido a un curso en el cual están inscritos dentro del intervalo de análisis (por defecto el mes pasado).';
$string['target:norecentaccessesinfo'] = 'Los siguientes estudiantes no han accedido al curso en el cual están inscritos dentro del intervalo del análisis (por defecto el mes pasado).';
$string['target:noteachingactivity'] = 'Cursos en riesgo de no iniciar';
$string['target:noteachingactivity_help'] = 'Esta meta describe si es que los cursos que están próximos a iniciar en la semana siguiente tendrán actividad de enseñanza.';
$string['target:noteachingactivityinfo'] = 'Los siguientes cursos próximos a iniciar en los días siguientes están en riesgo de no iniciar porque no tienen profesores o estudiantes inscritos.';
$string['targetlabelstudentcompetenciesno'] = 'Estudiante que es probable de lograr las competencias asignadas a un curso';
$string['targetlabelstudentcompetenciesyes'] = 'Estudiante en riesgo de no lograr las competencias asignadas a un curso';
$string['targetlabelstudentcompletionno'] = 'Estudiante que es probable que cumpla las condiciones de finalización del curso';
$string['targetlabelstudentcompletionyes'] = 'Estudiante en riesgo de no cumplir las condiciones de finalización del curso';
$string['targetlabelstudentdropoutno'] = 'No en riesgo';
$string['targetlabelstudentdropoutyes'] = 'Estudiante en riesgo de abandonar';
$string['targetlabelstudentgradetopassno'] = 'Estudiante que es probable que cumpla la calificación mínima para pasar el curso.';
$string['targetlabelstudentgradetopassyes'] = 'Estudiante en riesgo de no alcanzar la calificación mínima para pasar el curso.';
$string['targetlabelteachingno'] = 'Cursos en riesgo de no iniciar';
$string['targetlabelteachingyes'] = 'Usuarios con capacidades de enseñanza que tienen acceso al curso';
