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
 * Strings for component 'local_edusupport', language 'es_mx', version '3.11'.
 *
 * @package     local_edusupport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archive'] = 'Archivo';
$string['assigned'] = 'Asignado';
$string['autocreate_orggroup'] = 'Crear automáticamente grupos para Organizaciones individuales';
$string['autocreate_usergroup'] = 'Crear automáticamente un grupo privilegiado para usuario';
$string['be_more_accurate'] = '¡ Por favor sea más preciso al describir su problema !';
$string['cachedef_supportmenu'] = 'Caché for the supportmenu';
$string['changes_saved_fail'] = 'No se pudieron guardar los cambios';
$string['changes_saved_successfully'] = 'Cambios guardados exitosamente';
$string['contactphone'] = 'Teléfono';
$string['contactphone_missing'] = 'Por favor escriba su número de teléfono';
$string['coursecategorydeletion'] = 'Usted está tratando de quitar una categoría que contiene foros de soporte. ¡ Por favor, asegúrese de primeramente deshabilitar los foros de soporte !';
$string['courseconfig'] = 'Configuración del curso';
$string['create_issue'] = 'Crear asunto-problema';
$string['create_issue_error_description'] = '¡Su asunto-problema no pudo ser almacenado!';
$string['create_issue_error_title'] = 'Error';
$string['create_issue_mail_success_description'] = 'Su asunto-problema ha sido almacenado. ¡Le ayudaremos tan pronto podamos!';
$string['create_issue_success_close'] = 'cerrar';
$string['create_issue_success_description'] = 'Su asunto-problema ha sido almacenado. ¡Le ayudaremos tan pronto podamos!';
$string['create_issue_success_description_mail'] = 'Su asunto-problema ha sido enviado por Email. ¡Le ayudaremos tan pronto podamos!';
$string['create_issue_success_goto'] = 'ver asunto-problema';
$string['create_issue_success_responsibles'] = 'Persona de contacto para ese problema es/son:';
$string['create_issue_success_title'] = 'Éxito';
$string['cron:deleteexpiredissues:title'] = 'eliminar asuntos-problemas expirados';
$string['cron:reminder:intro'] = '¡Este es un recordatorio amistoso acerca de problemas abiertos, que están asignados a usted como EduSupporter!';
$string['cron:reminder:title'] = 'Recordatorio EduSupporter';
$string['dedicatedsupporter'] = 'Dedicado';
$string['dedicatedsupporter:not_successfully_set'] = 'No se pudo configurar soporte dedicado';
$string['dedicatedsupporter:successfully_set'] = 'Se configuró exitosamente soporte dedicado';
$string['deletethreshhold'] = 'Eliminar asunto-problema cerrado después de';
$string['deletethreshhold:description'] = 'Configurar el umbral para la eliminación de asuntos cerrados en la vista de asuntos. Esto solamente afecta a la página de asuntos, pero no a las publicaciones del foro. 0 significa mantener para siempre asuntos cerrados (aun no recomendado)';
$string['description'] = 'Descripción';
$string['description_missing'] = 'Falta descripción';
$string['edusupport:addinstance'] = 'Añadir bloque EduSupport';
$string['edusupport:canforward2ndlevel'] = 'Puede re-enviar asuntos a Soporte de 2o Nivel';
$string['edusupport:manage'] = 'Gestionar';
$string['edusupport:myaddinstance'] = 'Añadir bloque EduSupport';
$string['email_to_xyz'] = 'Mandar Email a {$a->email}';
$string['extralinks'] = 'Extraenlaces';
$string['extralinks:description'] = 'Si usted escribe enlaces aquí, el botón de "ayuda" será un menú en lugar de un botón. Incluirá el botón "ayuda" como primer elemento, y todos los enlaces extra como enlaces adicionales. Escriba los enlaces línea por línea en la forma siguiente: linkname|url|faicon|target';
$string['faqlink'] = 'Enlace-FAQ';
$string['faqlink:description'] = 'Enlace a FAQ';
$string['faqread'] = 'alternar lectura FAQ';
$string['faqread:description'] = 'Yo confirmo, que si he leído el <a href="{$a}" target="_blank">FAQ</a> antes de publicar mi asunto.';
$string['goto_targetforum'] = 'ForodeSoporte';
$string['goto_tutorials'] = 'Documentación y Tutoriales';
$string['header'] = 'Solicitud para ayuda en <i>{$a}</i>';
$string['holidaymode'] = 'ModoVacaciones';
$string['holidaymode_end'] = 'Terminar ModoVacaciones';
$string['holidaymode_is_on'] = 'ModoVacaciones está activado';
$string['holidaymode_is_on_descr'] = 'Mientras usted esté de vacaciones, no se le asignarán nuevos asuntos.';
$string['issue'] = 'Asunto-problema';
$string['issue:countassigned'] = 'Asuntos suscritos';
$string['issue:countclosed'] = 'Asuntos cerrados';
$string['issue:countcurrent'] = 'Asuntos abiertos';
$string['issue:countother'] = 'Otros asuntos';
$string['issue_assign'] = 'Asignar asunto';
$string['issue_assign_3rdlevel:post'] = '<a href="{$a->wwwroot}/profile/view.php?id={$a->fromuserid}">{$a->fromuserfullname}</a> ha asignado este asunto a <a href="{$a->wwwroot}/profile/view.php?id={$a->touserid}">{$a->touserfullname}</a>.';
$string['issue_assign_3rdlevel:postself'] = '<a href="{$a->wwwroot}/profile/view.php?id={$a->fromuserid}">{$a->fromuserfullname}</a> ha asumido la responsabilidad para este asunto.';
$string['issue_assign_nextlevel'] = 'Re-enviar este asunto a soporte de 2o nivel';
$string['issue_assign_nextlevel:error'] = 'Lo sentimos; este asunto no se pudo re-enviar al soporte de 2o nivel';
$string['issue_assign_nextlevel:post'] = '<a href="{$a->wwwroot}/profile/view.php?id={$a->fromuserid}">{$a->fromuserfullname}</a> re-envió este asunto al soporte de 2o nivel';
$string['issue_assigned:subject'] = 'AsuntodeSoporte asignado';
$string['issue_assigned:text'] = 'El asunto de soporte fue asignado a <a href="{$a->wwwroot}/profile/view.php?id={$a->id}">{$a->firstname} {$a->lastname}</a>!';
$string['issue_close'] = 'Cerrar asunto';
$string['issue_closed:post'] = 'Este asunto cerrado fue cerrado por <a href="{$a->wwwroot}/profile/view.php?id={$a->fromuserid}">{$a->fromuserfullname}</a>. Si usted necesita mayor asistencia, por favor re-envíe este asunto nuevamente al soporte de 2o nivel.';
$string['issue_closed:subject'] = 'Asunto cerrado';
$string['issue_responsibles:post'] = '<p>
        La responsabilidad para este asunto ha sido asignada a: {$a->responsibles}!
    </p>
    <p>
        Los administradores de su organización pueden re-enviar este asunto al Soporte de {$a->sitename} al hacer clic en el botón de "Re-enviar este boleto al Soporte de {$a->sitename}" (visible solamente para administradores en el lado superior derecho de la página).
    </p>';
$string['issue_responsibles:subject'] = 'Asunto asignado';
$string['issue_revoke'] = 'Revocar este asunto del nivel de soporte superior';
$string['issue_revoke:error'] = 'Lo sentimos; este asunto no pudo ser revocado de los niveles de soporte superiores';
$string['issue_revoke:post'] = '<a href="{$a->wwwroot}/profile/view.php?id={$a->fromuserid}">{$a->fromuserfullname}</a> ha revocado este asunto del nivel de soporte superior';
$string['issue_revoke:subject'] = 'AsuntodeSoporte revocado';
$string['issues'] = 'Asuntos';
$string['issues:assigned'] = 'Suscrito';
$string['issues:assigned:none'] = 'Usted no se ha suscrito a ningún otro asunto.';
$string['issues:closed'] = 'Asuntos cerrados';
$string['issues:current'] = 'Mis asuntos';
$string['issues:current:none'] = 'Parece que se merece un descanso - ¡porque ya no hay asuntos pendientes para usted!';
$string['issues:openall'] = '{$a} total abiertos';
$string['issues:openmine'] = '{$a} para mí';
$string['issues:opennosupporter'] = '{$a} sin asignar';
$string['issues:other'] = 'Otros asuntos';
$string['issues:other:none'] = '¡Genial; al arecer ya no hay más problemas en ese planeta!';
$string['label:2ndlevel'] = '2o nivel';
$string['missing_permission'] = 'Falta permiso requerido';
$string['missing_targetforum'] = '¡Falta foro destino, debe ser configurado!';
$string['missing_targetforum_exists'] = '¡El foro destino configurado no existe. Información errónea!';
$string['no_such_issue'] = '¡Este no es un asnto abierto! Usted puede navegar a la <a href="{$a->todiscussionurl}"><u>página de la discusión</u></a> o ir a <a href="{$a->toissuesurl}"><u>regresar a la vista general de los asuntos</u></a>.';
$string['only_you'] = 'Solamente usted y su equipo';
$string['phonefield'] = 'deshabilitar campo de teléfono';
$string['phonefield:description'] = 'Deshabilitar campo de teléfono en el formato para crear asunto-problema';
$string['pluginname'] = 'Ayuda';
$string['postto2ndlevel'] = 'Pedir ayuda de 2o nivel';
$string['postto2ndlevel:description'] = 'Al parecer usted está en el soporte de primer nivel del foro que ha seleccionado. ¡Si usted quiere, puede llamar directamente al soporte de 2o nivel para su asunto!';
$string['priority'] = 'configurar prioridad';
$string['prioritylvl'] = 'habilitar prioridades';
$string['prioritylvl:description'] = 'Si se habilita, usted puede seleccionar prioridades en la lista de problemas';
$string['prioritylvl:high'] = 'alta prioridad';
$string['prioritylvl:low'] = 'baja prioridad';
$string['prioritylvl:mid'] = 'prioridad media';
$string['privacy:metadata'] = 'Este pluginno almacena ningún dato personal ya que usa un foro como destino.';
$string['privacy:metadata:edusupport:courseid'] = 'ID del curso con supportforum';
$string['privacy:metadata:edusupport:currentsupporter'] = 'ID del usuario del usuario asignado';
$string['privacy:metadata:edusupport:discussionid'] = 'ID de discusión del foro';
$string['privacy:metadata:edusupport:fieldid'] = 'Id';
$string['privacy:metadata:edusupport:issueid'] = 'Id del asunto';
$string['privacy:metadata:edusupport:issues'] = 'Asuntos de apoyadores';
$string['privacy:metadata:edusupport:opened'] = 'Estado del asunto';
$string['privacy:metadata:edusupport:subscr'] = 'Todos los asuntos suscritos';
$string['privacy:metadata:edusupport:supporters'] = 'Todos los apoyadores definidos';
$string['privacy:metadata:edusupport:supportlvl'] = 'NiveldeSoporte';
$string['privacy:metadata:edusupport:userid'] = 'ID del usuario';
$string['relativeurlsupportarea'] = 'URL relativa hacia ÁreadeSoporte';
$string['screenshot'] = 'Poner pantallazos';
$string['screenshot:description'] = 'Un pantallazo podría ayudar a resolver el problema';
$string['screenshot:generateinfo'] = 'Para generar el volcado de pantalla, el formato será ocultado, y reaparecerá después.';
$string['screenshot:upload:failed'] = '¡Falló la preparación del archivo!';
$string['screenshot:upload:successful'] = '¡El archivo fue preparado exitosamente para subirlo!';
$string['select_isselected'] = 'Actualmente seleccionado';
$string['select_unavailable'] = 'No disponible';
$string['send'] = 'Enviar';
$string['subject'] = 'Asunto';
$string['subject_missing'] = 'Falta asunto';
$string['support_area'] = 'MesadeAyuda y Tutoriales';
$string['supportcourse'] = 'CursodeSoporte';
$string['supporters'] = 'Apoyadores';
$string['supporters:choose'] = 'Elegir apoyadores';
$string['supporters:description'] = 'Todos los usuarios del curso, que estén inscritos al menos como "profesor sin derechos de edición" pueden ser configurados como apoyadores. Simplemente escriba cualquiercosa como supportlevel para activar a alguien como apoyador!';
$string['supportforum:central:disable'] = 'deshabilitar';
$string['supportforum:central:enable'] = 'habilitar';
$string['supportforum:choose'] = 'Eligir foros para EduSupport';
$string['supportforum:disable'] = 'deshabilitar';
$string['supportforum:enable'] = 'habilitar';
$string['supportlevel'] = 'NiveldeSoporte';
$string['targetforum'] = 'ForodeSoporte';
$string['targetforum:core:description'] = 'Todos los usuarios serán inscritos automáticamente al forodesoprte de todo el sitio tan pronto como ellos crean un asunto de soporte. Más grupos pueden ser creado y gestionados automáticamente para separar asuntos de soporte';
$string['targetforum:description'] = 'Por favor seleccione el foro que debería ser usado como destino para asuntos de soporte dentro de este curso. Este foro será forzado a tener el modo de grupo habilitado. El plugin creará un grupo individual para cada uno de los usuarios.';
$string['to_group'] = 'Visible para';
$string['toggle'] = 'ForodeSoporte de Curso';
$string['toggle:central'] = 'ForodeSoporte Central';
$string['trackhost'] = 'Monitorear host';
$string['trackhost:description'] = 'Los sitios Moodle grandes pueden usar una arquitectura con varios hosts. Si usted habilita esta opción, edusupport añadirá el hostname del host usado al asunto.';
$string['userid'] = 'IDdelUSuario';
$string['userlinks'] = 'habilitar enlacesdeusuario';
$string['userlinks:description'] = 'mostrar enlacesdeusuario en lista de asuntos';
$string['webhost'] = 'Host';
$string['weburl'] = 'URL';
$string['your_issues'] = 'Sus asuntos';
