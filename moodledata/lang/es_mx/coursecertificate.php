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
 * Strings for component 'coursecertificate', language 'es_mx', version '3.11'.
 *
 * @package     coursecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhiddenwarning'] = 'La actividad actualmente está oculta. Al hacerla visible, los estudiantes que cumplan la restricción de acceso a la actividad automáticamente recibirán una copia en PDF del certificado.';
$string['automaticsend_helptitle'] = 'Ayuda con el envío automático';
$string['automaticsenddisabled'] = 'El envío automático de este certificado está deshabilitado.';
$string['automaticsenddisabled_help'] = 'Al dejar esto deshabilitado, los estudiantes deben elegir el enlace a la actividad mostrado en la página del curso para recibir el certificado, una vez que hayan cumplido con las restricciones de acceso de la actividad.<br/><br/>
Al habilitarlo, los estudiantes recibirán automáticamente una copia en PDF del certificado una vez que hayan cumplido con las restricciones de acceso de la actividad. Tenga en cuenta que todos los estudiantes que ya hubieran cumplido con las restricciones de acceso de esta actividad recibirán el certificado cuando habilite esto.';
$string['automaticsenddisabledalert'] = 'A los estudiantes que cumplan con las  restricciones de acceso de esta actividad les serán emitidos sus certificados una vez que accedan a ellos.';
$string['automaticsenddisabledinfo'] = 'Actualmente, {$a} estudiantes cumplen con las restricciones de acceso de esta actividad y les será emitido su certificado una vez que accedan a él..';
$string['automaticsendenabled'] = 'El envío automático de este certificado está habilitado.';
$string['automaticsendenabled_help'] = 'Al dejar esto habilitado, los estudiantes recibirán automáticamente una copia en PDF del certificado una vez que hayan cumplido con las restricciones de acceso de esta actividad.<br/><br/>
Al deshabilitarlo, los estudiantes necesitarán elegir el enlace hacia la actividad mostrado en la página del curso para recibir el certificado, una vez que hayan cumplido con las restricciones de acceso de esta actividad..';
$string['certificateissues'] = 'Emisiones de certificado';
$string['certifiedusers'] = 'Usuarios certificados';
$string['chooseatemplate'] = 'Elija una plantilla...';
$string['code'] = 'Código';
$string['coursecertificate:addinstance'] = 'Añadir una actividad de Certificado de curso';
$string['coursecertificate:receive'] = 'Recibir certificado emitido';
$string['coursecertificate:view'] = 'Ver certificado del curso';
$string['coursecertificate:viewreport'] = 'Ver reporte de problemas del Certificado de curso';
$string['coursecompletiondate'] = 'Fecha de terminación';
$string['courseinternalid'] = 'ID interna del curso usada en URLs';
$string['courseurl'] = 'URL del curso';
$string['disableautomaticsend'] = 'Los estudiantes ya no recibirán automáticamente una copia en PDF del certificado tan pronto como cumplan con las restricciones de acceso a la actividad. En su lugar, ellos necesitarán elegir el enlace de la actividad mostrado en la página del curso para recibir el certificado, una vez que cumplan con las restricciones de acceso de la actividad.';
$string['enableautomaticsend'] = 'Los estudiantes recibirán automáticamente una copia en PDF del certificado tan pronto como cumplan con las restricciones de acceso a la actividad. <br/><br/>
Actualmente, {$a} estudiantes ya cumplen con las restricciones de acceso pero no han accedido aun a la actividad. Ellos recibirán inmediatamente su copia también.<br/><br/>
Los estudiantes que ya hayan accedido a esta actividad no recibirán nuevamente el certificado.';
$string['enableautomaticsendpopup'] = 'Todos los estudiantes recibirán automáticamente una copia en PDF del certificado tan pronto como cumplan las restricciones de acceso de esta actividad.<br/><br/>
Los estudiantes que ya hayan cumplido estas restricciones de acceso pero que aun no hayan accedido a esta actividad recibirán inmediatamente su copia también.<br/><br/>
Los estudiantes que ya hayan accedido a esta actividad no recibirán nuevamente el certificado.';
$string['expirydate'] = 'Fecha de expiración';
$string['issueddate'] = 'Fecha de emisión';
$string['managetemplates'] = 'Gestionar plantillas de certificado';
$string['modulename'] = 'Certificado de curso';
$string['modulename_help'] = 'El módulo de certificado del curso proporciona una oportunidad para que los estudiantes celebren logros al obtener certificados.<br/><br/> Le permite a Usted elegir entre diferentes plantillas de certificados que automáticamente mostrarán datos del usuario como  nombre completo, curso, etc. <br/><br/> Los usuarios podrán descargar ellos mismos una copia en PDF del certificado al acceder a esta actividad y hay opciones para enviárselas automáticamente por Email.<br/><br/>Si la plantilla usada en esta actividad contiene un código QR, los usuarios podrán escanearlo para validar sus certificados.';
$string['modulenameplural'] = 'Certificados de curso';
$string['notemplateselected'] = 'La plantilla seleccionada no puede ser encontrada. Por favor vaya a las configuraciones de la actividad y seleccione una nueva.';
$string['notemplateselecteduser'] = 'El certificado no está disponible. Por favor póngase en contacto con el administrador del curso.';
$string['notemplateswarning'] = 'No hay plantillas disponibles. Por favor ´póngase en contacto con el administrador del sitio.';
$string['notemplateswarningwithlink'] = 'No hay plantillas disponibles. Por favor vaya a <a href="{$a}">la página de gestión de plantillas de certificado</a> y seleccione una nueva.';
$string['nouserscertified'] = 'Ningún usuario está certificado.';
$string['open'] = 'Abrir';
$string['page-mod-coursecertificate-x'] = 'Cualquier página del módulo certificado de curso';
$string['pluginadministration'] = 'Administración de certificado del curso';
$string['pluginname'] = 'Certificado de curso';
$string['previewcoursefullname'] = 'Nombre completo del curso';
$string['previewcourseshortname'] = 'Nombre corto del curso';
$string['privacy:metadata'] = 'La actividad de certificado de curso no almacena ningún dato personal.';
$string['revoke'] = 'Revocar';
$string['revokeissue'] = '¿Está seguro de querer revocar esta emisión de certificado de este usuario?';
$string['selectdate'] = 'Seleccionar fecha';
$string['selecttemplatewarning'] = 'Una vez que esta actividad emita al menos un certificado, este campo será bloqueado y ya no será editable.';
$string['status'] = 'Estado';
$string['taskissuecertificates'] = 'Emitir certificados del curso';
$string['template'] = 'Plantilla';
