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
 * Strings for component 'wooclap', language 'es_mx', version '3.11'.
 *
 * @package     wooclap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesskeyid'] = 'ID de la Plataforma (accessKeyId)';
$string['accesskeyid-description'] = 'Access key id se usa para comunicarse con Wooclap. Debería comenzar con \'ak.\'.';
$string['baseurl'] = 'URL base';
$string['baseurl-description'] = 'Esto es solamente para fines de depuración. Solamente cambiar este valor a solicitud del equipo de soporte de Wooclap';
$string['consent-screen:agree'] = 'Estoy de acuerdo';
$string['consent-screen:description'] = '<b>Wooclap</b> hace que sus estudiantes jueguen un rol activo en su expeiencia de aprendizaje.';
$string['consent-screen:disagree'] = 'NO estoy de acuerdo';
$string['consent-screen:explanation'] = 'Para que funcionen algunas características, como por ejemplo el enviar un reporte personalizado al final de la sesión, Wooclap le pide su dirección de correo electrónico. Nunca se usará para propósitos de mercadeo. Haga clic en "Estoy de acuerdo" para compartir su dirección de correo electrónico con Wooclap, o en "NO estoy de acuerdo" para continuar sin las características extendidas.';
$string['customcompletion'] = '.Estado de finalización actualizado solamente por wooclap';
$string['customcompletiongroup'] = 'Finalización personalizada Wooclap';
$string['error-auth-nosession'] = 'Falta sesión en autenticación';
$string['error-callback-is-not-url'] = 'Parámetro callback (llamada_de_retorno) no es una URL válida';
$string['error-couldnotauth'] = 'No se pudo obtener usuario o curso durante la autenticación';
$string['error-couldnotloadevents'] = 'No sepudieron cargar eventos Wooclap del usuario';
$string['error-couldnotperformv3upgradestep1'] = 'No se pudo realizar el Paso 1 de la Actualización V3. Asegúrese de que la accesskeyid, la baseurl y la secretaccesskey estén configuradas en las configuraciones del plugin.';
$string['error-couldnotperformv3upgradestep2'] = 'No se pudo realizar el Paso 2 de la Actualización V3';
$string['error-couldnotredirect'] = 'se No pudo re-direccionar';
$string['error-couldnotupdatereport'] = 'No se pudo actualizar reporte';
$string['error-invalid-callback-url'] = 'La callback URL proporcionada no coincide con el nombre de baseurl domain definido en las configuraciones.';
$string['error-invalidjoinurl'] = 'URL para unirse inválida';
$string['error-invalidtoken'] = 'Token inválido';
$string['error-missingparameters'] = 'Faltan parámetros';
$string['error-noeventid'] = 'No pudo determinarse ID del evento';
$string['error-reportdeprecated'] = 'report_wooclap.php está deprecada. Useen su lugar  report_wooclap_v3.php.';
$string['modulename'] = 'Wooclap';
$string['modulename_help'] = 'Este módulo proporciona una integración de la plataforma interactiva Wooclap a Moodle';
$string['modulenameplural'] = 'Wooclap';
$string['modulenamepluralformatted'] = 'Lista de actividades Wooclap';
$string['nowooclap'] = 'No hay instancias Wooclap';
$string['pingNOTOK'] = 'No pudo establecerse la conexión con Wooclap. Por favor revise sus configuraciones.';
$string['pingOK'] = 'Conexión establecida con Wooclap';
$string['pluginadministration'] = 'Administración de Wooclap';
$string['pluginname'] = 'Wooclap';
$string['privacy:metadata:wooclap_server'] = 'Para poderse integrar con Wooclap, necesitan intercambiarse datos del usuuario.';
$string['privacy:metadata:wooclap_server:userid'] = 'La id del usuario es enviada desde Moodle para permitirle acceder a sus datos en Wooclap.';
$string['quiz'] = 'Importar un examen Wooclap';
$string['secretaccesskey'] = 'Clave API (secretAccessKey)';
$string['secretaccesskey-description'] = 'Clave secreta de acceso usada para comunicarse con Wooclap. Debería comenzar con \'sk.\'.';
$string['showconsentscreen'] = '¿Mostrar pantalla de consentimiento?';
$string['showconsentscreen-description'] = 'Si se activa, Wooclap le pedirá a los participantes su consentimiento antes de colectar sus direcciones de Email.';
$string['testconnection'] = 'Probar conexión';
$string['warn-missing-config-during-upgrade-to-v3'] = 'Para poder ejecutar la migración,  la accesskeyid, la baseurl y la secretaccesskey deberían ser configuradas en las configuraciones. Se saltará la migración por ahora; usted puede ejecutarla después vía el script cli/v3_upgrade.php. Nota: si quiere usar el plugin, esta migración es necesaria.';
$string['wooclap:addinstance'] = 'Añadir una actividad Wooclap a un curso';
$string['wooclap:view'] = 'Acceder a una actividad Wooclap';
$string['wooclapeventid'] = 'Duplicar un evento Wooclap';
$string['wooclapintro'] = 'Descripción';
$string['wooclapname'] = 'Nombre';
$string['wooclapsettings'] = 'Configuraciones';
