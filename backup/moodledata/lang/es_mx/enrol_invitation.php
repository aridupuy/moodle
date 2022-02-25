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
 * Strings for component 'enrol_invitation', language 'es_mx', version '3.11'.
 *
 * @package     enrol_invitation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_day'] = '1 día';
$string['a_minute'] = '1 minuto';
$string['about_hour'] = 'alrededor de 1 hora';
$string['about_x_hours'] = 'alrededor de {$a} horas';
$string['accepteddescription'] = 'Usuario con id {$a->userid} aceptó una invitación para el curso con id \'{$a->courseid}\'.';
$string['action_extend_invite'] = 'Extender invitación';
$string['action_resend_invite'] = 'Re-enviar invitación';
$string['action_revoke_invite'] = 'Revocar invitación';
$string['anonymoususer'] = '(desconocido)';
$string['assignrole'] = 'Asignar rol';
$string['customnamecourse'] = 'Formato personalizado';
$string['customsubjectformat'] = '{$a->shortname} - {$a->fullname}';
$string['default_subject'] = 'Invitación al curso: {$a}';
$string['defaultinvitevalues'] = 'Valores predeterminados de invitación';
$string['defaultsubjectformat'] = 'Formato predeterminado de asunto';
$string['defaultsubjectformat_desc'] = 'Este es el formato predeterminado del nombre del curso que será usado en la línea del asunto cuando se manden Emails de invitación. Tenga en cuenta que esto solamente afectará instancias del método de inscripción cuando sean creadas por primera vez. Si usted selecciona <strong>formato personalizado</strong>, usted puede <a href="../tool/customlang/">personalizar la <strong>\'customsubjectformat\'</strong> cadena de caracteres del idioma</a> del plugin de la <strong>invitación a inscribirse</strong> usando cualquier combinación de nombres cortos y largos del curso. Cuando este plugin es instalado por primera vez, el formato predeterminado es configurado a \'nombrecorto - nombrecompleto\'.';
$string['deleteddescription'] = 'El usuario con id {$a->userid} eliminó una invitación para el curso con id \'{$a->courseid}\' a \'{$a->email}\'.';
$string['editenrolment'] = 'Editar inscripciones';
$string['email_clarification'] = 'Usted puede especificar múltiples direcciones Email al separarlas con puntoycomas, comas, espacios o líneas nuevas';
$string['emailaddressnumber'] = 'Dirección de Email';
$string['emailmessageuserenrolled'] = 'Hola,

{$a->userfullname} ({$a->useremail}) ha aceptado su invitación para acceder a {$a->coursefullname} como un "{$a->rolename}". Usted puede verificar el estado de esta invitación al ver, ya sea:

* Lista de participantes: {$a->courseenrolledusersurl}
* Historia de invitación: {$a->invitehistoryurl}

{$a->sitename}
-------------
{$a->supportemail}';
$string['emailmsghtml'] = 'Previsualización';
$string['emailmsghtml_help'] = '<p>Buenos días,</p>
<p>Usted está invitado a unirse al curso siguiente:</p>
<ul>
  <li>Nombre del curso: <b>{$a->coursename}</b></li>
  <li>Fecha de inicio: <b>{$a->start}</b></li>
  <li>Fecha de término: <b>{$a->end}</b></li>
</ul>
{$a->message}
<p>Apúntese para confirmar su inscripción en el curso.</p>
<p>Al usar este enlace, usted está reconociendo que es la persona a quien estaba dirigido este Email y a quien se le envió esta invitación.</p>
<p><a class="btn btn-primary" href="{$a->inviteurl}">{$a->acceptinvitation}</a></p>
<p>Si usted no quiere unirse a este curso, use por favor este otro enlace:</p>
<p><a class="btn btn-danger" href="{$a->rejecturl}">{$a->rejectinvitation}</a></p>
<p>Tenga en cuenta que estos enlaces expirarán en <b>{$a->expiration}</b></p>
<p>Esperamos verlo en el curso.</p>';
$string['emailmsgunsubscribe'] = '<span class="apple-link">Si usted cree que ha recibido este mensaje por error, o necesita ayuda, o no desea recibir más invitaciones para este curso, por favor póngase en contacto con:</span> <a href="mailto:{$a->supportemail}">{$a->supportemail}</a>.';
$string['emailtitleuserenrolled'] = '{$a->userfullname} ha aceptado invitación a {$a->coursefullname}.';
$string['enrolconfimation'] = 'Requerir confirmación del estudiante de inscripción';
$string['err_cohortlist'] = 'O, usted debe seleccionar cohortes aquí.';
$string['err_userlist'] = 'O, usted debe seleccionar usuarios aquí.';
$string['event_invitation_accepted'] = 'Aceptar';
$string['event_invitation_attempted'] = 'Intento';
$string['event_invitation_deleted'] = 'Eliminado';
$string['event_invitation_rejected'] = 'Rechazo';
$string['event_invitation_sent'] = 'Enviar';
$string['event_invitation_updated'] = 'Actualizado';
$string['event_invitation_viewed'] = 'Visto';
$string['expiredtoken'] = 'Ficha (token) de invitación está expirada o ya ha sido usada.';
$string['extend_invite_sucess'] = 'Invitación extendida exitosamente';
$string['failuredescription'] = 'Falla: User id {$a->userid}, curso con id \'{$a->courseid}\'. Razón: {$a->errormsg}.';
$string['half_minute'] = 'medio minuto';
$string['header_email'] = '¿A quién quiere invitar?';
$string['header_role'] = '¿Qué rol le quiere asignar al invitado?';
$string['historyactions'] = 'Acciones';
$string['historydateexpiration'] = 'Fecha de expiración';
$string['historydatesent'] = 'Fecha de enviada';
$string['historyexpires_in'] = 'expira en';
$string['historyinvitee'] = 'Invitado';
$string['historyrole'] = 'Rol';
$string['historystatus'] = 'Estado';
$string['historyundefinedrole'] = 'No se puede encontrar rol. Por favor vuelva a enviar invitación y elija otro rol.';
$string['invitation:config'] = 'Configurar instancias de invitación';
$string['invitation:enrol'] = 'Invitar usuarios';
$string['invitation:manage'] = 'Gestionar asignaciones de invitación';
$string['invitation:unenrol'] = 'Des-asignar usuarios del curso';
$string['invitation:unenrolself'] = 'Des-asignarse usted mismo del curso';
$string['invitation_acceptance_title'] = 'Aceptación de invitación';
$string['invitationacceptance'] = '<p>Usted está invitado a acceder a <strong>{$a->coursefullname}</strong> como un <strong>{$a->rolename}</strong>. Por favor confirme su aceptación para unirse a este curso.</p>';
$string['invitationacceptancebutton'] = 'Aceptar invitación';
$string['invitationrejectbutton'] = 'Rechazar invitación';
$string['invitationrejected'] = 'Invitación rechazada';
$string['invitationsuccess'] = 'Invitación enviada exitosamente';
$string['inviteexpiration'] = 'Expiración de invitación';
$string['inviteexpiration_desc'] = 'Lapso de tiempo que una invitación es válida (en segundos). Lo predeterminado son 2 semanas.';
$string['invitehistory'] = 'Historia de invitación';
$string['inviteusers'] = 'Invitar usuarios';
$string['invtitation_rejected_notice'] = '<p>Esta invitación ha sido rechazada.</p>';
$string['less_minute'] = 'menos de un minuto';
$string['less_than_x_seconds'] = 'menos de {$a} segundos';
$string['loggedinnot'] = '<p>Usted debe ingresar al sitio antes de que pueda aceptar esta invitación.</p>';
$string['message'] = 'Mensaje';
$string['noenddate'] = 'Sin fecha de término';
$string['noinvitationinstanceset'] = 'No se ha encontrado instancia de inscripción por invitación. Por favor añada una instancia de inscripción por invitación a su curso en primer lugar.';
$string['noinvitehistory'] = 'Aun no se han enviado invitaciones';
$string['nopermissiontosendinvitation'] = 'No hay permisos para enviar invitaciones';
$string['norole'] = 'Por favor elija un rol.';
$string['notify_inviter'] = 'Notificarme a {$a->email} cuando los usuarios invitados acepten esta invitación';
$string['notsentdescription'] = 'El usuario con id {a->userid} no envió una invitación al curso con id \'{a->courseid}\' porque no hay una cuenta con dirección Email \'{a->email}\'.';
$string['pluginname'] = 'Invitación';
$string['pluginname_desc'] = 'El módulo de invitación le permite enviar invitaciones por Email. Estas invitaciones pueden usarse solamente una vez. Los usuarios que hagan clic en la liga enviada por Email serán inscritos automáticamente.';
$string['registeredonly'] = 'Enviar invitaciones solamente a usuarios registrados';
$string['registeredonly_help'] = 'La invitación solamente será enviada a Emails que pertenezcan a usuarios registrados.';
$string['rejecteddescription'] = 'Usuario con id {$a->userid} rechazó una invitación para el curso con id \'{$a->courseid}\'.';
$string['reminder'] = 'Recordatorio:';
$string['resend_invite_sucess'] = 'Invitación re-enviada exitosamente';
$string['returntocourse'] = 'Regresar al curso';
$string['returntoinvite'] = 'Enviar otra invitación';
$string['revoke_invite_sucess'] = 'Invitación revocada exitosamente';
$string['sentdescription'] = 'Usuario con id {$a->userid} envió una invitación para el curso con id \'{$a->courseid}\' a \'{$a->email}\'.';
$string['show_from_email'] = 'Permitirle al usuario invitado que se ponga en contacto conmigo a {$a->email} (su dirección estará en el campo "DE". Si no estuviera seleccionado, el campo "DE" será {$a->supportemail})';
$string['status'] = 'Permitir invitaciones';
$string['status_desc'] = 'Permitirle de forma predterminada a los usuarios invitar a la gente a inscribirse a un curso.';
$string['status_invite_active'] = 'Activa';
$string['status_invite_expired'] = 'Expirada';
$string['status_invite_invalid'] = 'Inválida';
$string['status_invite_rejected'] = 'Rechazada';
$string['status_invite_resent'] = 'Re-enviada';
$string['status_invite_revoked'] = 'Revocada';
$string['status_invite_used'] = 'Aceptada';
$string['status_invite_used_expiration'] = '(acceso termina en {$a})';
$string['status_invite_used_noaccess'] = '(ya no tiene acceso)';
$string['subject'] = 'Asunto';
$string['unenrol'] = 'Des-inscribir usuario';
$string['unenroluser'] = '¿Realmente desea des-inscribir a "{$a->user}" del curso "{$a->course}"?';
$string['updateddescription'] = 'Usuario con id {$a->userid} extendió la invitación para el curso con id \'{$a->courseid} a \'{$a->email}\'.';
$string['used_by'] = 'por {$a->username} ({$a->roles}, {$a->useremail}) en {$a->timeused}';
$string['usedefaultvalues'] = 'Usar invitación con valores predeterminados';
$string['usernotmatch'] = '<p>LA invitación está dirigida para un usuario diferente.</p>';
$string['vieweddescription'] = 'Usuario con id {$a->userid} vio la invitación para el curso con id \'{$a->courseid}\'.';
$string['x_days'] = '{$a} días';
$string['x_minutes'] = '{$a} minutos';
