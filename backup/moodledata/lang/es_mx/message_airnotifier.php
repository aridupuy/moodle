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
 * Strings for component 'message_airnotifier', language 'es_mx', version '3.11'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Gestionar dispositivos';
$string['airnotifieraccesskey'] = 'Clave de acceso de Airnotifier';
$string['airnotifierappname'] = 'Nombre de aplicación Airnotifier';
$string['airnotifierfielderror'] = 'Por favor quite cualquier espacio vacío o caracteres innecesarios del campo siguiente: {$a}';
$string['airnotifiermobileappname'] = 'Nombre de aplicación móvil';
$string['airnotifierport'] = 'Puerto de Airnotifier';
$string['airnotifierurl'] = 'URL de Airnotifier';
$string['checkconfiguration'] = 'ComComprobar y probar configuración de notificación push';
$string['configairnotifieraccesskey'] = 'La clave de acceso para conectarse al servidor Airnotifier. Usted puede obtener una clave de acceso al hacer clic en el enlace para "Solicitar clave de acceso" inferior (solamente para sitios registrados) o al crear una cuenta en el <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['configairnotifierappname'] = 'El identificador de nombre de app en Airnotifier';
$string['configairnotifiermobileappname'] = 'El identificado único de App móvil (usualmente algo así como como.moodle.moodlemobile).';
$string['configairnotifierport'] = 'El puerto a usar al conectarse al servidor de Airnotifier.';
$string['configairnotifierurl'] = 'La URL del servidor a conectarse para enviar notificaciones PUSH.';
$string['configured'] = 'Configurado';
$string['deletecheckdevicename'] = 'Eliminar su dispositivo: {$a->name}';
$string['deletedevice'] = 'Eliminar el dispositivo. Por favor tenga en cuenta que una app puede volver a registrar el dispositivo. Si el dispositivo sigue reapareciendo, deshabilítelo.';
$string['devicetoken'] = 'Token del dispositivo';
$string['enableprocessor'] = 'Habilitar notificaciones Mobile.';
$string['errorretrievingkey'] = 'Ocurrió un error al recuperar la clave de acceso. Su sitio Moodle debe estar registrado para usar este servicio. Si su sitio ya estaba registrado, por favor intente actualizar su registro. De forma alterna, Usted puede obtener una clave de acceso al crear una cuenta en el <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['keyretrievedsuccessfully'] = 'La clave de acceso fue obtenida exitosamente. Para acceder a las estadísticas del uso de la App Moodle, por favor cree una cuenta en el <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['messageprovidersempty'] = 'No hay notificaciones móviles habilitadas en las preferencias de notificación predeterminadas.';
$string['messageproviderslow'] = 'Solamente unas pocas notificaciones móviles están habilitadas en las preferencias de notificación predeterminadas.';
$string['moodleappsportallimitswarning'] = 'Por favor tenga en cuenta que el número de dispositivos del usuario permitidos de recibir notificaciones depende de su suscripción a la App Moodle. Para los detalles, visite el <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['nodevices'] = 'Sin dispositivos registrados. Los dispositivos aparecerán automáticamente después de que Usted instale la App Moodle y añada este sitio.';
$string['nopermissiontomanagedevices'] = 'Usted no tiene permiso para gestionar dispositivos.';
$string['notconfigured'] = 'El servidor Airnotifier no ha sido configurado, por lo que las notificaciones push no pueden ser enviadas.';
$string['notificationsserverconfiguration'] = 'Configuración del servidor de notificaciones (Airnotifier)';
$string['pluginname'] = 'Mobile';
$string['privacy:appiddescription'] = 'Este es un identificador para la aplicación que está siendo utilizada.';
$string['privacy:enableddescription'] = 'Si este dispositivo está habilitado para airnotifier.';
$string['privacy:metadata:date'] = 'La fecha en la cual se envió el mensaje.';
$string['privacy:metadata:enabled'] = 'Si es que el dispositivo airnotifier está habilitado o no.';
$string['privacy:metadata:externalpurpose'] = 'Esta información es enviada a un sitio externo, para ser ultimadamente entregada al dispositivo móvil del usuario.';
$string['privacy:metadata:fullmessage'] = 'El mensaje completo.';
$string['privacy:metadata:notification'] = 'Si este mensaje es una notificación.';
$string['privacy:metadata:smallmessage'] = 'Una sección del mensaje.';
$string['privacy:metadata:subject'] = 'La línea del asunto del mensaje.';
$string['privacy:metadata:tableexplanation'] = 'La información del dispositivo airnotifier es almacenada aquí.';
$string['privacy:metadata:userdeviceid'] = 'La ID que enlaza al dispositivo móvil del usuario';
$string['privacy:metadata:userfromfullname'] = 'El nombre completo del usuario que envió el mensaje.';
$string['privacy:metadata:userfromid'] = 'La ID del usuario del autor del mensaje.';
$string['privacy:metadata:userid'] = 'La ID del usuario que envió el mensaje.';
$string['privacy:metadata:username'] = 'El nombre_de_usuario del usuario.';
$string['privacy:metadata:usersubsystem'] = 'Este plugin está conectado al subsistema del usuario.';
$string['privacy:subcontext'] = 'Airnotifier de Mensaje';
$string['requestaccesskey'] = 'Solicitar clave de acceso';
$string['sendtest'] = 'Enviar notificación push de prueba a mis dispositivos';
$string['sendtestconfirmation'] = 'Una push notification de prueba será enviada a los dispositivos que Usted usa para conectarse a este sitio. Por favor asegúrese de que sus dispositivos están conectados a internet y que la App mobile no esté abierta (porque las notificaciones push solamente son mostradas cuando son recibidas en segundo plano).';
$string['serverconnectivityerror'] = 'Este sitio no puede conectarse al servidor de notificaciones {$a}';
$string['showhide'] = 'Habilitar/deshabilitar el dispositivo.';
$string['sitemustberegistered'] = 'Para poder usar la instancia pública de Airnotifier, su sitio necesita estar registrado. De forma alterna, Usted puede obtener una clave de acceso al crear una cuenta en el <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['unknowndevice'] = 'Dispositivo desconocido';
$string['userdevices'] = 'Dispositivos del usuario';
