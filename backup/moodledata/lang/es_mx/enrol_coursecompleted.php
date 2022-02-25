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
 * Strings for component 'enrol_coursecompleted', language 'es_mx', version '3.11'.
 *
 * @package     enrol_coursecompleted
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftercourse'] = 'Después de completar el curso: {$a}';
$string['cachedef_compcourses'] = 'Caché Finalización Inscripción al completar curso';
$string['compcourse'] = 'Curso completado';
$string['compcourse_help'] = 'Cual curso tiene que ser completado.';
$string['confirmbulkdeleteenrolment'] = '¿Está seguro de querer eliminar estas inscripciones de usuario?';
$string['confirmbulkediteenrolment'] = '¿Está seguro de querer cambiar estas inscripciones de usuario?';
$string['coursecompleted:config'] = 'Configurar instancias de incripción al completar curso';
$string['coursecompleted:enrolpast'] = 'Inscribir usuarios que completaron cursos en el pasado';
$string['coursecompleted:manage'] = 'Gestionar usuarios inscritos';
$string['coursecompleted:unenrol'] = 'Des-inscribir (dar de baja) usuarios del curso';
$string['coursecompleted:unenrolself'] = 'Des-inscribirse (darse de baja) a sí mismo del curso';
$string['customwelcome'] = 'Mensaje personalizado de BienVenida';
$string['customwelcome_help'] = 'Un mensaje personalizado de BienVenida puede ser añadido como texto simple o formato auto-Moodle, incluyendo marcas (tags) HTML y marcas multi-idioma.

Los remplazables siguientes pueden ser incluidos en el mensaje:

* Nombre del curso {$a->coursename}
+ Nombre del curso completado {$a->completed}
* Enlace hacia la página del perfil del usuario {$a->profileurl}
* Email del usuario {$a->email}
* Nombre completo del usuario {$a->fullname}';
$string['deleteselectedusers'] = 'Eliminar inscripciones seleccionadas en finalización del curso';
$string['editselectedusers'] = 'Editar inscripciones seleccionadas en finalización del curso';
$string['editusers'] = 'Cambiar inscripciones de usuarios';
$string['group'] = 'Conservar el grupo';
$string['group_help'] = 'Tratar de añadir usuarios a un grupo con el mismo nombre';
$string['keepgroup'] = 'Configuraciones predeterminadas de conservar grupo';
$string['keepgroup_help'] = 'De forma predeterminada, intentar añadir usuarios a un grupo con el mismo nombre';
$string['pluginname'] = 'Inscripción por curso completado';
$string['pluginname_desc'] = 'El plugin de inscripción por curso completado le otorga acceso a cursos una vez que haya completado un curso.';
$string['privacy:metadata'] = 'El plugin de Inscripción por curso completado no afecta ni almacena ningún dato del usuario';
$string['processexpirationstask'] = 'Trabajo de expiración de inscripción por curso completado';
$string['status'] = 'Habilitada';
$string['status_desc'] = 'Permitir por defecto inscripción por curso completado';
$string['status_help'] = 'Esta configuración determina si es habilitada la inscripción por curso completado.';
$string['svglearnpath'] = 'Mostrar ruta de aprendizaje';
$string['svglearnpath_help'] = 'Mostrar (posible) ruta de aprendizaje usando íconos SVG.';
$string['unenrolusers'] = 'Des-inscribir usuarios';
$string['uponcompleting'] = 'Al completar el curso {$a}';
$string['usersenrolled'] = '{$a} Usuarios inscritos';
$string['welcome'] = 'Mandar mensaje de BienVenida al curso';
$string['welcome_help'] = 'Cuando un usuario es inscrito en un curso al completar otro curso, puede enviarse un mensaje de BienVenida por Email.';
$string['welcometocourse'] = 'BienVenido/a a {$a->coursename}!

¡Felicitaciones!

Después de completar exitosamente {$a->completed}, Usted está ahora automáticamente inscrito en el curso siguiente {$a->coursename}.';
$string['willbeenrolled'] = 'Usted será inscrito en este curso una vez que complete el curso {$a}';
