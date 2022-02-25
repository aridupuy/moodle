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
 * Strings for component 'local_invitation', language 'es_mx', version '3.11'.
 *
 * @package     local_invitation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['available_from'] = 'Disponible desde:';
$string['available_to'] = 'Disponible hasta:';
$string['back_to_course'] = 'Regresar a su curso';
$string['clipboard'] = 'Portapapeles';
$string['consent'] = 'Consentimiento (opcional)';
$string['consent_help'] = 'Si usted define un texto de consentimiento, aparecerá una casilla a elegir a los usuarios invitados la cual debe ser activada por ellos.';
$string['consent_title'] = 'Confirmación';
$string['current_invitation'] = 'Invitación actual';
$string['current_invitation_note'] = 'Si crea una nueva invitación, la anterior se volverá inválida automáticamente.';
$string['delete_after_logout'] = 'Eliminar después de salir del sitio';
$string['delete_after_logout_help'] = 'Eliminar al usuario inmediatamente después de salir del sitio. Con esto activado, usted no pude ver a este usuario en las bitácoras del curso.';
$string['delete_confirmation'] = '¿Desea eliminar esta invitación?Después de esto, el enlace de la invitación ya no podrá ser usado nunca más.';
$string['delete_invitation'] = 'eliminar invitación';
$string['edit_invitation'] = 'Editar invitación para acceso temporal al curso';
$string['error_could_not_create_and_enrol'] = 'Error: ¡No se pudo crear e inscribir al nuevo usuario!';
$string['error_invalid_invitation'] = 'Error: ¡Esta invitación no es válida!';
$string['error_invitation_not_active'] = 'Error: ¡La caraterística de invitación no está activada en este sistema!';
$string['error_timeend_can_not_be_before_timestart'] = 'La invitación no puede terminar antes de que inicie.';
$string['error_timeend_can_not_be_in_past'] = 'La invitación no puede terminar en elpasado.';
$string['error_userrole_not_defined'] = 'El rol del usuario no está definido en la configuración. Por favor póngase en contacto con su administrador.';
$string['expiration_time'] = 'Tiempo de expiración (días)';
$string['expiration_time_help'] = 'Una cuenta de usuario creada por este plugin expirará después del número de días definidos. Una cuenta expirada será anonimizada y eliminada posteriormente.';
$string['free_slots'] = 'Espacios libres:';
$string['guestuser_suffix'] = '(Usuario invitado)';
$string['info_already_loggedin'] = 'Usted ya está ingresado en el sitio. Si continúa será sacado del sitio.';
$string['invitation'] = 'Invitación';
$string['invitation:manage'] = 'Gestionar invitación';
$string['invitation_created'] = 'Invitación creada exitosamente.';
$string['invitation_delete_note_timeandlogout'] = 'La cuenta temporal y los datos asociados son eliminados automáticamente tan pronto como el usuario salga del sitio, pero a más tardar después de {$a}.';
$string['invitation_delete_note_timeonly'] = 'El acceso temporal y los datos asociados son eliminados automáticamente después de {$a}.';
$string['invitation_deleted'] = 'Invitación eliminada exitosamente.';
$string['invitation_note'] = 'Usted puede usar la función de invitación para otorgar acceso temporal a este curso. El enlace de invitación creado habilita que los usuarios sin una cuenta regular puedan acceder a este curso.';
$string['invitation_updated'] = 'Invitación actualizada exitosamente.';
$string['invite_participants'] = 'Nueva invitación para acceso temporal al curso';
$string['join'] = 'unirse';
$string['link_copied'] = 'El enlace ha sido copiado.';
$string['max_users'] = 'Usuarios máximos';
$string['max_users_per_invitation'] = 'Usuarios máximos por invitación';
$string['nameinfo'] = 'Información del nombre';
$string['nameinfo_help'] = 'Con este texto usted puede definir una breve explicación acerca de como usar el campo del Nombre en el formato para unirse.';
$string['note'] = 'Nota:';
$string['pluginname'] = 'Invitación';
$string['preventactions'] = 'Evitar acciones';
$string['preventactions_help'] = '<strong>Nota:</strong>Usted puede definir URLs o partes de URLs a las cuales los usuarios puedan llamarl.<br>
Si el usuario invitado llama a dicha URL será redireccionado a su curso o a la Portada de Moodle.<br>
¡Usted no debería de incluir el Tablero o la página inicial del sitio en esta lista!';
$string['qrcode'] = 'Código QR';
$string['remove_old_invitations'] = 'Quitar usuarios antiguos';
$string['showqrcode'] = 'Mostrar código QR';
$string['single_name_field'] = 'Campo de nombre único';
$string['single_name_field_help'] = 'Cuando se activa el "campo de nombre único", el usuario solamente necesita especificar un solo nombre y no requiere nombre y apellidos. Además, se añade un sufijo al nombre.';
$string['systemrole'] = 'Rol del sistema';
$string['systemrole_help'] = 'Si un rol del sistema está definido entonces se le asignará al usuario. Esto puede ser usado para restringir al usuario invitado en el nivel del sistema.';
$string['timeend'] = 'Hora de fin';
$string['timestart'] = 'Hora de inicio';
$string['usedslots'] = 'Usado:';
$string['userrole'] = 'Rol del usuario';
$string['welcome_note'] = '¡BienVenido {$a->firstname} {$a->lastname}!';
