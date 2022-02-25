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
 * Strings for component 'local_bulkenrol', language 'es_mx', version '3.11'.
 *
 * @package     local_bulkenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkenrol:enrolusers'] = 'Usar inscripción masiva de usuario';
$string['bulkenrol_form_intro'] = 'Aquí puede Usted inscribir masivamente usuarios a su curso. Un usuario a ser inscrito es identificado por su dirección E.mail almacenada en su cuenta Moodle.';
$string['enrol_users'] = 'Inscribir usuarios';
$string['enrol_users_successful'] = 'Inscripción masiva de usuario exitosa';
$string['enrolinfo_headline'] = 'Detalles de inscripción';
$string['enrolplugin'] = 'Plugin de inscripción';
$string['enrolplugin_desc'] = 'El   método de inscripción a ser usado para inscribir masivamente los usuarios. Si el método de inscripción configurado no está activo / añadido en el curso cuando los usuarios sean inscritos masivamente, es añadido / activado automáticamente.';
$string['error_check_is_already_member'] = 'Error al revisar si es que el usuario (<em>{$a->email}</em>) ya era un miembro del grupo (<em>{$a->groupname}</em>). {$a->error}';
$string['error_empty_line'] = 'La línea {$a->line} está vacía y será ignorada.';
$string['error_enrol_user'] = 'Hubo un problema al inscribir al usuario con E-mail <em>{$a->email}</em> al curso.';
$string['error_enrol_users'] = 'Hubo un problema al inscribir los usuarios al curso.';
$string['error_exception_info'] = 'Información de excepción';
$string['error_getting_user_for_email'] = 'Hubo un problema al obtener el registro del usuario para la dirección E-mail  <em>{$a}</em> de la base de datos.';
$string['error_group_add_member'] = 'Hubo un problema al añadir al usuario con E-mail <em>{$a->email}</em> al grupo del curso <em>{$a->group}</em>.';
$string['error_group_add_members'] = 'Hubo un problema al añadir los usuarios a los grupos del curso.';
$string['error_invalid_email'] = 'Se encontró una dirección E-mail inválida en la línea {$a->row} (<em>{$a->email}</em>). Esta línea será ignorada.';
$string['error_more_than_one_record_for_email'] = 'Se encontró más de una cuenta de usuario Moodle existente con la dirección de E-mail <em>{$a}</em>em> found.<br />  Esta línea será ignorada y ninguno de los usuarios Moodle existentes será inscrito.';
$string['error_no_email'] = 'No se encontró una dirección E-mail  en la línea {$a->line} (<em>{$a->content}</em>). Esta línea será ignorada.';
$string['error_no_record_found_for_email'] = 'No existe cuenta de usuario Moodle con dirección E-mail  <em>{$a}</em>.<br />Esta línea será ignorada; no se creará cuenta de usuario Moodle al vuelo.';
$string['error_no_valid_email_in_list'] = 'No se encontró dirección Email válida en la lista dada.<br />Por favor <a href=\'{$a->url}\'>regrese y compruebe sus datos ingresados</a>.';
$string['error_usermails_empty'] = 'La lista de direcciones E-mail está vacía. Por favor añada al menos una dirección E-mail.';
$string['group_name_headline'] = 'Nombre del grupo';
$string['group_status_create'] = 'El grupo será creado';
$string['group_status_exists'] = 'El grupo ya existe';
$string['group_status_headline'] = 'Estado del grupo';
$string['groupinfos_headline'] = 'Grupos incluidos en la lista';
$string['hints'] = 'Pistas';
$string['parameter_empty'] = 'Parámetro vacío';
$string['pluginname'] = 'Inscripción masiva de usuario';
$string['privacy:metadata'] = 'El plugin de inscripción de usuario masiva actúa como una herramienta para inscribir usuarios en cursos, pero no almacena ningún dato personal.';
$string['role'] = 'Rol';
$string['role_assigned'] = 'Rol asignado';
$string['role_description'] = 'El rol a ser usado para inscribir masivamente a los usuarios.';
$string['row'] = 'Fila';
$string['type_enrol'] = 'Método de nscripción';
$string['user_enroled'] = 'Inscripción de usuario';
$string['user_enroled_already'] = 'El usuario ya estaba inscrito';
$string['user_enroled_yes'] = 'El usuario será inscrito';
$string['user_groups'] = 'Membresía de grupo';
$string['user_groups_already'] = 'El usuario ya era miembro del grupo';
$string['user_groups_yes'] = 'Usuario será añadido al grupo';
$string['usermails'] = 'Lista de direcciones Email';
$string['usermails_help'] = 'Para inscribir un usuario Moodle existente dentro de este curso, añada su dirección E-mail a este formato; un usuario / una dirección E-mail de usuario por línea.<br /><br />Ejemplo:<br />alicia@ejemplo.com<br />pepe@ejemplo.com<br /><br />Opcionalmente, Usted puede crear grupos y añadir los usuarios inscritos a los grupos. Todo lo que Usted tiene que hacer es añadir una línea de encabezado con un signo # y el nombre del grupo, separando la lista de usuarios,.<br /><br />Ejemplo:<br /># Grupo 1<br />alicia@ejemplo.com<br />pepe@ejemplo.com<br /># Grupo 2<br />carola@ejemplo.com<br />david@ejemplo.com';
$string['users_to_enrol_in_course'] = 'Los usuarios serán inscritos en el curso';
