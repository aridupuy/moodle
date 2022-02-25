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
 * Strings for component 'quizaccess_proctoring', language 'es_mx', version '3.11'.
 *
 * @package     quizaccess_proctoring
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['additionalsettingspagetitle'] = 'Todas las bitácoras de supervisión';
$string['buttonlabel:deletebutton'] = 'Eliminar imágenes';
$string['camhtml'] = '<div class="camera"> <video width="100" id="video">Fuente de video no disponible.</video></div> <canvas id="canvas" style="display:none;"> </canvas> <img style="display:none;" id="photo" alt="La captura de pantalla aparecerá en esta caja."/>';
$string['coursenameheader'] = 'Nombre del Curso';
$string['dateverified'] = 'Fecha y hora';
$string['eprotroringreports'] = 'Reporte de validación de identidad para :';
$string['eprotroringreportsdesc'] = 'En este reporte, Usted encontrará todas las imágenes del estudiante que son tomadas durante el examen. Ahora Usted puede validar sus identidades, como por ejemplo su imagen del perfil y fotos de cámara web.';
$string['event:screenshotcreated'] = 'Fue creada una nueva toma de pantalla';
$string['event:screenshotupdated'] = 'Toma de pantalla fue actualizada';
$string['event:takescreenshot'] = 'Tomado una toma de pantalla';
$string['execute_facematch_task'] = 'Ejecutar trabajo coincidecara';
$string['initiate_facematch_task'] = 'Iniciar trabajo coincidecara';
$string['mainsettingspagebtn'] = 'Configuraciones de Supervisión';
$string['modal:disabled'] = 'Deshabilitado';
$string['modal:displaysurface'] = 'Mostrar Superficie:';
$string['modal:facevalidation'] = 'Cara Validada:';
$string['modal:pending'] = 'Pendiente';
$string['modal:sharescreenbtn'] = 'compartir pantalla';
$string['modal:sharescreenstate'] = 'Compartir la Pantalla';
$string['modal:validateface'] = 'Validar Reconocimiento de Cara';
$string['name'] = 'Nombre del Estudiante';
$string['notpermissionreport'] = 'Los reportes de validación de identidad están deshabilitados para usted.';
$string['notrequired'] = 'no requerido';
$string['openwebcam'] = 'Permitir cámara web y compartir pantalla  para continuar';
$string['picturesreport'] = 'Ver reporte de supervisión';
$string['picturesusedreport'] = 'Hay imágenes capturadas durante el examen.';
$string['pluginname'] = 'Supervisión';
$string['privacy:core_files'] = 'Imágenes de cámara web de Supervisión de AccesoaExamen';
$string['privacy:metadata'] = 'Nosotros no almacenamos ningún dato personal con terceros.';
$string['privacy:metadata:core_files'] = 'El Acceso a Examen almacena imágenes de usuario que han sido tomadas por la cámara web durante intentos de examen.';
$string['privacy:metadata:courseid'] = 'La ID del curso que usa supervisión';
$string['privacy:metadata:quizaccess_proctoring_logs'] = 'Tabla de bitácoras de Supervisión de acceso a Examen Moodle que almacena imágenes del usuario.';
$string['privacy:metadata:quizid'] = 'La ID del Examen que usa supervisión.';
$string['privacy:metadata:status'] = 'El estado de la supervisión.';
$string['privacy:metadata:webcampicture'] = 'El nombre de la imagen que ha sido tomada por la supervisión.';
$string['privacy:quizaccess_proctoring_logs'] = 'Bitácoras de Supervisión de AccesoaExamen';
$string['proctoring:getcamshots'] = 'Supervisión toma fotos de cámara web';
$string['proctoring:sendcamshot'] = 'Supervisión envió foto de cámara web';
$string['proctoring:viewreport'] = 'Reporte de vista de supervisión';
$string['proctoringheader'] = '<strong>Para continuar con este intento del examen, Usted debe abrir su cámara web, y tomará algunas fotos de Usted aleatoriamente durante el examen.</strong>';
$string['proctoringlabel'] = 'Estoy de acuerdo con el proceso de validación.';
$string['proctoringrequired'] = 'Validación de identidad por cámara web';
$string['proctoringrequired_help'] = 'Si Usted habilita esta opción, los estudiantes no podrán iniciar un intento hasta que hayan activado una casilla de verificación confirmando que están conscientes de la política sobre cámara web.';
$string['proctoringrequiredoption'] = 'debe ser reconocida antes de iniciar un intento';
$string['proctoringstatement'] = 'Este examen requiere un proceso de validación por cámara web. Usted debe permitir la cámara web Y DEBE activar la casilla para recordar esta opción de la cámara web. Su cámara web tomará algunas imágenes aleatoriamente durante el examen <br />(Por favor permita a su navegador web el acceso a su cámara).';
$string['quizaccess_proctoring'] = 'Supervisión de AccesoaExamen';
$string['quiznameheader'] = 'Nombre del Examen';
$string['reportidheader'] = 'Guardar ID en bitácora';
$string['screenhtml'] = '<span><video width="100" id="pantalla de video" autoplay></video></span><canvas id="canvas-screen" style="display:none;"></canvas><img id="photo-screen" alt="La imagen aparecerá en esta caja." style="display:none;"/><span class="output-screen" style="display:none;"></span><span id="log-screen" style="display:none;"></span>';
$string['screensharemsg'] = '';
$string['screenshots'] = 'Pantallazos';
$string['setting:aws_key'] = 'Clave AWS';
$string['setting:aws_keydesc'] = 'Clave AWS para servicio de reconocimiento de cara.';
$string['setting:aws_secret'] = 'Secreto AWS';
$string['setting:aws_secretdesc'] = 'Secreto AWS para servicio de reconocimiento de cara.';
$string['setting:bs_api'] = 'API servicio BS';
$string['setting:bs_apidesc'] = 'puntofinal API servicio BS';
$string['setting:bs_apitoken'] = 'Token BS';
$string['setting:bs_apitokendesc'] = 'Token API para servicio de coincidenciacara BS';
$string['setting:camshotdelay'] = 'El retraso entre fotos de cámara en segundos.';
$string['setting:camshotdelay_desc'] = 'El valor dado será el retraso en segundos entra cada foto de cámara';
$string['setting:camshotwidth'] = 'El ancho de la imagen de foto de cámara en pixeles';
$string['setting:camshotwidth_desc'] = 'El valor dado será el ancho de la foto de cámara. La imagen será escalada a eso';
$string['setting:externalpage'] = 'Página Externa';
$string['setting:facematch'] = 'Número de coincidenciacara por examen';
$string['setting:facematchdesc'] = 'Número de coincidenciacara por examen. (-1 para comprobar todas)';
$string['setting:fc_method'] = 'Método de Coincidenciacara (BS/AWS)';
$string['setting:fc_methoddesc'] = 'Servicio para coincidir caras .(Valores: AWS/BS).';
$string['setting:fcthreshold'] = 'Porcentaje umbral de coincidencia de cara.';
$string['setting:fcthresholddesc'] = 'Porcentaje umbral de coincidencia de cara.';
$string['setting:proctoringreconfigureproctoring'] = 'Auto-configurar Supervisión';
$string['setting:proctoringreconfigureproctoring_desc'] = 'Si se habilita, los usuarios que naveguen al examen toman imágenes con cámara web';
$string['settings:deleteallconfirm'] = '¿Realmente quiere ELIMINAR TODAS LAS IMÁGENES de TODOS LOS EXÁMENES?';
$string['settings:deleteallformlabel'] = 'Elegir el botón para Eliminar Todas las Imágenes eliminará todas las imágenes de todos los exámenes.';
$string['settings:deleteallsuccess'] = 'Se eliminaron exitosamente todas las imágenes.';
$string['settings:enablescreenshot'] = 'Habilitar pantallazos para exámenes.';
$string['settings:enablescreenshot_desc'] = 'Habilitar pantallazos para exámenes.';
$string['settings:fcheckquizstart'] = 'Validar ID de cara al iniciar examen';
$string['settings:fcheckquizstart_desc'] = 'Validar ID de cara al iniciar examen [en caso de  "si" el usuario tiene que validar ID de cara para iniciar examen].';
$string['settings:screenshareenable'] = 'Habilitar compartirpantalla';
$string['settings:screenshareenable_desc'] = 'Habilitar compartirpantalla [en caso de  "si" la imagen del usuario será enviada con la imagen de la cámara web].';
$string['settings:updatesuccess'] = 'Se actualizaron exitosamente todas las configuraciones de supervisión.';
$string['settingscontroll:deleteall'] = 'Purgar Todos los Datos de Supervisión';
$string['settingscontroll:save'] = 'Guardar Configuraciones';
$string['settingserror:formcancelled'] = 'Usted canceló formsubmit.';
$string['settingserror:imagedelay'] = 'El retraso entre camshots solamente puede ser un número entero';
$string['settingserror:imagewidth'] = 'El ancho de la imagen de camshots solamente puede ser un número entero';
$string['status'] = 'Estado de validación';
$string['summarypagedesc'] = 'En este reporte usted encontrará el resumen del reporte del monitoreo para curso y exámenes. Usted puede eliminar todos los datos relacionados con el examen y el curso. Eliminará también los archivos de imagen y las bitácoras.';
$string['timemodified'] = 'Última modificación';
$string['warning:cameraallowwarning'] = 'Por favor permita el acceso a la cámara.';
$string['warninglabel'] = 'Advertencias';
$string['webcampicture'] = 'Imágenes Capturadas';
$string['youmustagree'] = 'Usted debe acceder a validar su identidad antes de continuar.';
