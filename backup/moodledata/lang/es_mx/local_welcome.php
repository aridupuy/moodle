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
 * Strings for component 'local_welcome', language 'es_mx', version '3.11'.
 *
 * @package     local_welcome
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_plugins'] = 'Plugins de Autenticación';
$string['auth_plugins_desc'] = 'Elija los plugins de autenticación para los que debería de enviarse un mensaje de BienVenida';
$string['configure'] = 'Configurar este plugin';
$string['customprofilefields'] = 'Campos personalizados del perfil';
$string['default_moderator_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Nuevo usuario del sitio [[fullname]]</h3>
    Se ha creado una nueva cuenta con los detalles siguientes:</td></tr>
<tr><td>Nombre:</td><td>[[fullname]]</td></tr>
<tr><td>Nombre_de_usuario: </td><td>[[username]]</td></tr>
<tr><td>Email: </td><td>[[email]]</td></tr>
</table>
</body>
</html>';
$string['default_moderator_email_subject'] = 'Un nuevo usuario se ha apuntado en  [[sitename]] : [[fullname]]';
$string['default_user_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>BienVenido [[fullname]]</h3>
    Se ha creado su cuenta Moodle y Usted está preparado para empezar! Su cuenta ha sido creada en [[sitelink]] con los detalles siguientes:</td></tr>
<tr><td>Nombre:</td><td>[[fullname]]</td></tr>
<tr><td>Nombre_de_usuario: </td><td>[[username]]</td></tr>
<tr><td>Email: </td><td>[[email]]</td></tr>
<tr><td colspan="2">Si alguna vez pierde su contraseña, el reiniciarla es fácil:<br>[[resetpasswordlink]]</tr>
</table>
</body>
</html>';
$string['default_user_email_subject'] = 'Hola [[fullname]] BienVenido/a a [[sitename]]';
$string['defaultprofilefields'] = 'Campos personalizados del perfil';
$string['fieldname'] = 'Fieldname';
$string['globalhelp'] = 'Este plugin para Moodle envía un mensaje configurable de BienVenida par nuevos usuarios.
<br><br>
El plugin usa el sistema de eventos en Moodle y será disparado cuando sea creado un nuevo curso, sin importar si esta fuera una cuenta creada manualmente o una cuenta creada usando el auto-registro.<br>
<br>
Las tablas en esta página muestran los campos de perfil disponibles que pueden usarse en la plantilla del mensaje en la página de configuración de este plugin.
Los valores mostrados en esta tabla son SUS valores de campos de su perfil, y serán remplazados por los valores de los destinatarios cuando se envíe el mensaje de BienVenida.';
$string['message_moderator'] = 'Mensaje para Moderador';
$string['message_moderator_desc'] = 'Mensaje enviado a moderadores';
$string['message_moderator_enabled'] = 'Habilitar mensajes a moderadores';
$string['message_moderator_enabled_desc'] = 'Esta casilla habilita el envío de mensajes de notificación a moderadores';
$string['message_moderator_subject'] = 'Asunto moderador';
$string['message_moderator_subject_desc'] = 'Este será el asunto del correo enviado al moderador. Use [[fullname]] como una marca, que será remplazada con Nombre y Apellidos de los usuarios.';
$string['message_user'] = 'Mensaje a usuario';
$string['message_user_desc'] = 'Mensaje enviado a usuarios nuevos';
$string['message_user_enabled'] = 'Habilitar mensaje a usuario';
$string['message_user_enabled_desc'] = 'Esta casilla habilita el envío de mensajes de bienvenida a nuevos usuarios<br><br>Visite <a href="{$a}">esta página para ver la lista de campos disponibles</a>';
$string['message_user_subject'] = 'Asunto usuario';
$string['message_user_subject_desc'] = 'Este será el asunto del correo enviado al usuario.  Use [[fullname]] como una marca, que será remplazada con Nombre y Apellidos de los usuarios.';
$string['moderator_email'] = 'Email del moderador';
$string['moderator_email_desc'] = 'Las notificaciones sobre  nuevos usuarios son enviadas a esta dirección de Email';
$string['pluginname'] = 'Bienvenido/a a Moodle';
$string['resetpass'] = 'Reconfigure aquí su contraseña';
$string['sender_email'] = 'Dirección Email del remitente';
$string['sender_email_desc'] = 'Cuando los nuevos usuarios entren al sistema, se usará esta dirección de Email para enviar un mensaje de notificación, los usuarios podrán ver esta dirección de Email';
$string['sender_firstname'] = 'Nombre del remitente del mensaje de bienvenida';
$string['sender_firstname_desc'] = 'Nombre usado al enviar correo a usuarios';
$string['sender_lastname'] = 'Apellido(s) del moderador';
$string['sender_lastname_desc'] = 'Apellido(s) empleado al enviar correo a usuarios';
$string['type'] = 'Tipo';
$string['welcomefields'] = 'Campos adicionales de plantilla';
$string['yourvalue'] = 'Su Valor';
