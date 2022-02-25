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
 * Strings for component 'enrol_apply', language 'es_mx', version '3.11'.
 *
 * @package     enrol_apply
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applicationcancelednotification'] = 'Su solicitud para inscripción a curso fue cancelada.';
$string['applicationconfirmednotification'] = 'Su solicitud para inscripción a curso fue confirmada.';
$string['applicationdeferrednotification'] = 'Su solicitud para inscripción a curso fue diferida (Usted está actualmente en la lista de espera).';
$string['apply:config'] = 'Configurar instancias de aplicar inscripción';
$string['apply:manage'] = 'Gestionar inscripciones de usuario';
$string['apply:manageapplications'] = 'Gestionar aplicar inscripciones';
$string['apply:unenrol'] = 'Cancelar usuarios del curso';
$string['apply:unenrolself'] = 'Cancelarse a sí mismo del curso';
$string['applycomment'] = 'Comentario';
$string['applydate'] = 'Fecha de inscripción';
$string['applymanage'] = 'Gestionar solicitudes de inscripción';
$string['applyuser'] = 'Nombre / Apellido(s)';
$string['applyusermail'] = 'Corrreo electrónico';
$string['btncancel'] = 'Cancelar solicitudes';
$string['btnconfirm'] = 'Confirmar solicitudes';
$string['btnwait'] = 'Diferir solicitudes';
$string['cancelmail_desc'] = '';
$string['cancelmail_heading'] = 'E-mail para cancelación';
$string['cancelmailcontent'] = 'Cancelar contenido del Email';
$string['cancelmailcontent_desc'] = 'Por favor use las siguientes marcas especiales designadas para remplazar el contenido del correo con datos de Moodle.<br>{firstname}: El nombre del usuario; {content}: El nombre del curso;{lastname}:El/los apellido(s) del usuario;{username}:El nombre_de_usuario del registro del usuario';
$string['cancelmailsubject'] = 'Cancelación de asunto del EMail';
$string['cancelmailsubject_desc'] = '';
$string['cantenrol'] = 'La inscripción está deshabilitada o inactiva';
$string['comment'] = 'Comentario';
$string['confirmenrol'] = 'Gestionar aplicación';
$string['confirmmail_desc'] = '';
$string['confirmmail_heading'] = 'E-mail para confirmación';
$string['confirmmailcontent'] = 'Confirmación de contenido del Email';
$string['confirmmailcontent_desc'] = 'Por favor use las siguientes marcas especiales designadas para  remplazar el contenido del correo con datos de Moodle .<br>{firstname}: El nombre del usuario; {content}: El nombre del curso;{lastname}:El apellido (los apellidos) del usuario;{username}:El nombre_de_usuario del usuario; {timeend}: La fecha de expiración (caducidad) de la inscripción';
$string['confirmmailsubject'] = 'Confirmación de asunto del Email';
$string['confirmmailsubject_desc'] = '';
$string['confirmusers'] = 'Confirmar Inscripción';
$string['confirmusers_desc'] = 'Los usuarios en filas coloreadas en gris están en la lista de espera.';
$string['coursename'] = 'Curso';
$string['custom_label'] = 'Etiqueta personalizada';
$string['defaultperiod'] = 'Duración de la inscripción por defecto';
$string['defaultperiod_desc'] = 'Tiempo de duración por el que  la inscripción es válida. Si se configura a cero, la duración de la inscripción será ilimitada por defecto.';
$string['defaultperiod_help'] = 'Tiempo de duración por el que  la inscripción es válida, iniciando con el momento en el que el usuario es inscrito. Si se deshabilita, la duración de la inscripción será ilimitada por defecto.';
$string['editdescription'] = 'Descripción del área_de_texto';
$string['enrolname'] = 'Confirmación de inscripción a curso';
$string['enrolusers'] = 'Inscribir usuarios';
$string['expiredaction'] = 'Acción de expiración de inscripción';
$string['expiredaction_help'] = 'Seleccionar acción a realizar cuando expire la inscripción del usuario. Por favor tenga en cuenta que algunos datos del usuario y algunas configuraciones son purgadas del curso durante la des-inscripción (baja) al curso.';
$string['expiry_desc'] = '';
$string['expiry_heading'] = 'Configuraciones de expiración';
$string['mailtoteacher_suject'] = '¡Nueva solicitud de Inscripción!';
$string['maxenrolled'] = 'Máximos usuarios inscritos';
$string['maxenrolled_help'] = 'Especificar el número máximo de usuarios que se pueden auto-inscribir, 0 significa sin límite.';
$string['maxenrolled_tip_1'] = 'de un total de';
$string['maxenrolled_tip_2'] = 'asientos ya reservados.';
$string['maxenrolledreached_left'] = 'Número máximo permitido de usuarios';
$string['maxenrolledreached_right'] = 'ya se ha alcanzado';
$string['messageprovider:application'] = 'Notificaciones de solicitudes de inscripción a curso';
$string['messageprovider:cancelation'] = 'Notificaciones de cancelación de solicitudes de inscripción a curso';
$string['messageprovider:confirmation'] = 'Notificaciones de confirmación de solicitudes de inscripción a curso';
$string['messageprovider:waitinglist'] = 'Notificaciones de diferimiento de solicitudes de inscripción a curso';
$string['newapplicationnotification'] = 'Hay una nueva solicitud de inscripción a curso que espera su revisión.';
$string['newenrols'] = 'Permitir solicitud de inscripción a nuevo curso';
$string['notification'] = '<b>Se mandó exitosamente la Solicitud de Inscripción</b>. <br/><br/>Usted será notificado por correo electrónico tan pronto como su inscripción haya sido confirmada.';
$string['notify_desc'] = 'Definir quien es notificado sobre nuevas solicitudes para inscripción.';
$string['notify_heading'] = 'Configuraciones de notificación';
$string['notifycoursebased'] = 'Nueva notificación de solicitud de inscripción (basada en instancia, por ejemplo, profesores del curso)';
$string['notifycoursebased_desc'] = 'Valor por defecto para nuevas instancias. Notificar a todos los que tengan la capacidad de \'Gestionar aplicar inscripción\' para el curso correspondiente (por ejemplo, profesores y mánagers)';
$string['notifyglobal'] = 'Nueva notificación de solicitud de inscripción (global, por ejemplo administradores y mánagers globales)';
$string['notifyglobal_desc'] = 'Definir quien es notificado acerca de nuevas solicitudes de inscripción para cualquier curso.';
$string['pluginname'] = 'Confirmación de inscripción a curso';
$string['pluginname_desc'] = 'Con este plugin, los usuarios pueden solicitar ser inscritos en un curso. Un profesor o administrador del sitio tiene entonces que aceptarlos antes de que el usuario sea inscrito.';
$string['privacy:metadata'] = 'El plugin de confirmación de inscripción no almacena ningún dato personal.';
$string['show_extra_user_profile'] = 'Mostrar campos extra  de perfil de usuario en pantalla  para inscripción';
$string['show_standard_user_profile'] = 'Mostrar campos estándar  de perfil de usuario en pantalla  para inscripción';
$string['status'] = 'Permitir confirmación de inscripción a curso';
$string['status_desc'] = 'Permitir acceso al curso a los usuarios inscritos internamente.';
$string['submitted_info'] = 'Información sobre inscripción';
$string['user_profile'] = 'Perfil de usuario';
$string['waitmail_desc'] = '';
$string['waitmail_heading'] = 'Emial de lista de espera';
$string['waitmailcontent'] = 'Contenidos de correo lista de espera';
$string['waitmailcontent_desc'] = 'Por favor, use las marcas especiales siguientes para remplazar el contenido del Email con datos de Moodle.<br/>{firstname}:Nombre(s) del usuario; {content}:El nombre del curso;{lastname}:Apellido(s) del usuario;{username}:El nombre_de_usuario registrado del usuario';
$string['waitmailsubject'] = 'Asunto de correo lista de espera';
$string['waitmailsubject_desc'] = '';
