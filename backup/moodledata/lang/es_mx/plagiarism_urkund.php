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
 * Strings for component 'plagiarism_urkund', language 'es_mx', version '3.11'.
 *
 * @package     plagiarism_urkund
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowallsupportedfiles'] = 'Permitirr todos los tipos de archivos soportados';
$string['allowallsupportedfiles_help'] = 'Esto le permite al profesor el restringir cuales tipos de archivos serán enviados a Ouriginal para procesarse. No impide que los estudiantes suban tipos de archivos diferentes a la tarea.';
$string['areyousurebulk'] = '¿Está seguro de querer eliminar el/los {$a} archivo(s) seleccionado(s)?';
$string['assessmentresubmitted'] = 'Evaluación re-enviada';
$string['assignforcesubmissionstatement'] = 'Forzar declaratoria de envío de tarea';
$string['assignsettings'] = 'Configuraciones de Tarea';
$string['attempts'] = 'Intentos hechos';
$string['cannotupgradeunprocesseddata'] = '<h1>No puede actualizarse a esta versión del plugin debido a datos no-procesados existentes; por favor, revierta a una versión anterior de este plugin y borre los eventos antiguos.</h1><p>Esta versión del plugin requiere API de eventos nuevos en Moodle, pero su instalación contiene eventos no-procesados relacionados con la API antigua.</p>
Usted debería de revertir a una versión anterior del plugin de Ouriginal, poner al sitio en modo de mantenimiento, correr el proceso de Cron de Moodle y asegurarse de que todos los eventos sean eliminados. Después intente nuevamente actualizar a esta versión del plugin de Ouriginal.</p>
<p>Para más infrmación vea: <a href="https://docs.moodle.org/en/Plagiarism_Prevention_Ouriginal_Settings#Installation_failed_due_to_unprocessed_data">Ouriginal Installation failed due to unprocessed data</a></p>';
$string['charcount'] = 'Número mínimo de caracteres';
$string['charcount_help'] = 'Esto configura un límite mínimo en el número de caracteres que son necesarios para texto en-línea (tipo de tarea en-línea y publicaciones en foro) antes de que el contenido sea enviado a Ouriginal.';
$string['confirmresetall'] = 'Esto reiniciará todos los archivos en el estado: {$a}';
$string['debugfilter'] = 'Filtrar archivos por';
$string['defaultsdesc'] = 'Las configuraciones siguientes son por defecto al habilitar Ouriginal dentro de un Módulo de Actividad';
$string['defaultupdated'] = 'Valores por defecto actualizados';
$string['deletedwarning'] = 'Este archivo no pudo encontrarse - podría haber sido eliminado por el usurio';
$string['deleteselectedfiles'] = 'Eliminar seleccionados';
$string['errorcode_3'] = 'Error código 3 – Menos de 450 caracteres Y 20 palabras';
$string['errorcode_403'] = 'No se pudo crear dirección del destinatario para su cuenta; Usted necesita ingresar una manualmente.';
$string['errorcode_409'] = 'Su dirección del destinatario ha sido eliminada y necesita ser restaurada; por favor póngase en contacto con Ouriginal para restaurar esta cuenta';
$string['errorcode_7001'] = 'Error código 7001 – El documento no pudo ser indexado (significa que ocurrió un error cuando intentamos extraer el texto del documento). Esto pasará principalmente si hay caracteres que no sean compatibles con Unicode en el documento)';
$string['errorcode_unknown'] = 'Error {$a} – Ha ocurrido un error inesperado';
$string['errorcreate'] = 'Usted debe ingresar manualmente una dirección de análisis.';
$string['explainerrors'] = 'Esta página enlista cualquier archivo que actualmente estuviera en un estado de error.<br/>Cuando los archivos sean eliminados de esta página ya no podrán ser re-enviados y los errores ya no se mostrarán a profesores ni a estudiantes';
$string['file'] = 'Archivo';
$string['filedeleted'] = 'Archivo eliminado de la cola';
$string['filereset'] = 'Un archivo ha sido reseteado para su re-envíoa Ouriginal';
$string['fileresubmitted'] = 'Archivo puesto en la cola para re-envío';
$string['filesresubmitted'] = '{$a} archivos re-enviados';
$string['filter30'] = 'Excluir a los más antiguos de 30 días';
$string['filter7'] = 'Excluir a los más antiguos de 7 días';
$string['filter90'] = 'Excluir a los más antiguos de 90 días';
$string['getallscores'] = 'Obtener todos los puntajes';
$string['getscore'] = 'Obtener puntaje';
$string['getscores'] = 'Obtener puntajes';
$string['heldevents'] = 'Eventos realizados';
$string['heldeventsdescription'] = 'Estos son eventos que no completaron en el primer intento y fueron puestos en cola para re-enviarlos - estos impiden que eventos subsecuentes se completen y pueden requerir más investigación. Algunos de estos eventos pueden ser no-relevantes para Ouriginal.';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['module'] = 'Módulo';
$string['modulenotfound'] = 'No se pudo encontrar módulo para {$a->module} con id {$a->modid}.';
$string['name'] = 'Nombre';
$string['nofilter'] = 'Sin filtro';
$string['noreceiver'] = 'No se especificó dirección para el destinatario';
$string['optout'] = 'Optar-por-no';
$string['pending'] = 'El archivo está pendiente para enviar a Ouriginal';
$string['pluginname'] = 'Plugin de detección de plagio Ouriginal';
$string['previouslysubmitted'] = 'Previamente enviado como';
$string['privacy:metadata:core_files'] = 'Archivos y texto anexos a módulos de actividad donde está habilitado el plugin Ouriginal.';
$string['privacy:metadata:plagiarism_urkund_client'] = 'Información del usuario enviada a API Ouriginal externa';
$string['privacy:metadata:plagiarism_urkund_client:email'] = 'Email del usuario';
$string['privacy:metadata:plagiarism_urkund_client:file'] = 'Copia física del texto o contenido del archivo enviada a Ouriginal';
$string['privacy:metadata:plagiarism_urkund_client:filename'] = 'Nombredelarchivo del archivo enviado.';
$string['privacy:metadata:plagiarism_urkund_files'] = 'Almacena información sobre los archivos enviados.';
$string['privacy:metadata:plagiarism_urkund_files:lastmodified'] = 'Hora de cuando fue actualizado por última vez el registro';
$string['privacy:metadata:plagiarism_urkund_files:similarityscore'] = 'Puntaje de similitud regresado por Ouriginal';
$string['privacy:metadata:plagiarism_urkund_files:userid'] = 'La userid de Moodle';
$string['processing'] = 'Su archivo ha sido enviado a Ouriginal, ahora espera a que esté disponible el análisis';
$string['receivernotvalid'] = 'Esta no es una dirección de destinatario válida';
$string['recordsdeleted'] = '{$a} error(es) fue(ron) eliminado(s)';
$string['regenerationrequested'] = 'Todos los reportes han sido señalizados para regeneración; podría tomar bastante tiempo antes de que estén disponibles reportes actualizados.';
$string['report'] = 'reporte';
$string['restrictcontent'] = 'Enviar archivos anexos y texto-en-línea';
$string['restrictcontent_help'] = 'Ouriginal puede procesar archivos subidos, pero también puede procesar texto-en-línea de publicaciones en foros y texto del tipo de envío de tarea con texto-en-línea. Usted puede decidir cuales componentes mandar a Ouriginal.';
$string['restrictcontentfiles'] = 'Enviar solamente archivos anexos';
$string['restrictcontentno'] = 'Enviar todo';
$string['restrictcontenttext'] = 'Enviar solamente text-en-línea';
$string['restrictfiles'] = 'Tipos de archivos a enviar';
$string['resubmit'] = 'Re-enviar';
$string['resubmitall'] = 'Re-enviar todos con estatus: {$a}';
$string['resubmitclose'] = 'Re-enviar después de fecha de cierre';
$string['resubmitdue'] = 'Re-enviar después de fecha esperada';
$string['resubmittourkund'] = 'Regenerar todos los reportes Ouriginal';
$string['savedconfigfailed'] = 'Se ingresó una combinación nombre_de_usuario/contraseña o dirección API, Ouriginal ha sido deshabilitado; por favor inténtelo nuevamente.';
$string['savedconfigsuccess'] = 'Configuraciones de plagio guardadas';
$string['scoreavailable'] = 'Este archivo ha sido procesado por Ouriginal y un reporte ahora está disponible.';
$string['scorenotavailableyet'] = 'Este archivo todavía no ha sido procesado por Ouriginal';
$string['sendfiles'] = 'Enviar archivos en cola';
$string['showall'] = 'Mostrar todos los errores';
$string['showwhencutoff'] = 'Después de la fecha de corte de la actividad';
$string['showwhendue'] = 'Después de la fecha esperada de la actividad';
$string['similarity'] = 'Ouriginal';
$string['status'] = 'Estatus';
$string['status_202'] = 'Recibido, esperando el reporte';
$string['status_404'] = 'La dirección de análisis no existe';
$string['status_413'] = 'Archivo demasiado grande';
$string['status_415'] = 'Formato de archivo no soportado';
$string['status_444'] = 'Sin dirección de análisis añadida';
$string['status_pending'] = 'Esperando a ser enviado';
$string['storedocuments'] = 'Añadir envíos a base de datos de Ouriginal';
$string['studentdisclosure'] = 'Declaración para Estudiantes';
$string['studentdisclosure_help'] = 'Este texto se mostrará atodos los estudiantes en la página de subida de archivo.';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos serán enviados al servicio de detección de plagio de Ouriginal. Si Usted desea impedir que su documento sea utilizado como fuente para análisis afuera de este sitio por otras organizaciones, Usted puede usar la liga para arrepentirse que aparece después de que el reporte sea generado.';
$string['studentemailcontent'] = 'El archivo que Usted sometió a  {$a->modulename} en {$a->coursename} ha sido procesado por la herramienta de plagio Ouriginal. {$a->modulelink} Si Usted desea impedir que su documento sea utilizado como fuente para análisis afuera de este sitio por otras organizaciones, Usted puede usar este enlace para arrepentirse:. {$a->optoutlink}';
$string['studentemailcontentnoopt'] = 'El archivo que Usted envió a {$a->modulename} en {$a->coursename} ya ha sido procesado por la herramienta Ouriginal contra plagio.
{$a->modulelink}';
$string['studentemailsubject'] = 'Archivo procesado por Ouriginal';
$string['submitondraft'] = 'Enviar archivo la primera vez que se suba';
$string['submitonfinal'] = 'Enviar archivo cuando el estudiante lo envíe para ser calificado';
$string['timesubmitted'] = 'Hora enviada';
$string['toolarge'] = 'Este archivo es demasiado grande para que Ouriginal lo procese';
$string['unknownwarning'] = 'Ocurrió un error al tratar de enviar este archivo a Ouriginal';
$string['unknownwarninggetscore'] = 'Ocurrió un error al intentar obtener el puntaje para este archivo desde Ouriginal';
$string['unsupportedfiletype'] = 'Este tipo de archivo no es soportado por Ouriginal';
$string['updateallowedfiletypes'] = 'Actualizar tipos de archivos permitidos y eliminar registros de Ouriginal asociados con actividades eliminadas.';
$string['urkund'] = 'Plugin de detección de plagio Ouriginal';
$string['urkund:advancedsettings'] = 'Permitirle al profesor ver configuraciones avanzadas del módulo desde Ouriginal';
$string['urkund:enable'] = 'Permitirle al profesor habilitar/deshabilitar Ouriginal dentro de una actividad';
$string['urkund:resetfile'] = 'Permitirle al profesor re-enviar el archivo a Ouriginal después de un error';
$string['urkund:resubmitallfiles'] = 'Permitirle al profesor que re-envíe TODOS los archivos a Ouriginal';
$string['urkund:resubmitonclose'] = 'Permitirle al profesor el re-enviar archivos en la fecha de cierre/término a Ouriginal';
$string['urkund:viewreport'] = 'Permitirle al profesor ver el reporte completo de Ouriginal';
$string['urkund_advanceditems'] = 'Conjunto de configuraciones para considerarlas avanzadas';
$string['urkund_advanceditems_help'] = 'La lista de configuraciones aquí ajustadas como avanzadas, será mostrada como avanzada en las configuraciones del módulo. Si así fuera, estas configuraciones también estarán ocultas para los profesores si no tienen la capacidad \'urkund:advancedsettings\'.';
$string['urkund_api'] = 'Dirección de integración de Ouriginal';
$string['urkund_api_help'] = 'Esta es la dirección de Ouriginal API, predeterminada: https://secure.urkund.com';
$string['urkund_draft_submit'] = 'Cuando debería de enviarse el archivo';
$string['urkund_enableoptout'] = 'Mostrar enlace para opt-out (abandonar)';
$string['urkund_enableoptoutdesc'] = 'El deshabilitar esto quitará la opción para que los estudiantes des-oculten o que oculten (dependiendo de la configuración por defecto) el contenido de sus textos en caso de encontrarse una coincidencia con los trabajos de otros estudiantes ("opt-in" y "opt-out"). AL desactivar esta característica, Usted certifica que Usted se hará responsable de gestionar el derecho de autor (copyright) de los envíos de sus estudiantes y de que esto no contraviene leyes aplicables en su país.';
$string['urkund_enableplugin'] = 'Habilitar Ouriginal para {$a}';
$string['urkund_hidefilename'] = 'Ocultar nombre_de_archivo del envío';
$string['urkund_hidefilenamedesc'] = 'El habilitar esto pasará un nombre_de_archivo genérico a Ouriginal, para que los estudiantes no puedan ver el nombre_del_archivo de cualquier fuentes que coincidan con un envío existente';
$string['urkund_lang'] = 'Idioma';
$string['urkund_lang_help'] = 'Código de idioma proporcionado por Ouriginal';
$string['urkund_password'] = 'Contraseña';
$string['urkund_password_help'] = 'Contraseña proporcionada por Ouriginal para accesar al API';
$string['urkund_receiver'] = 'Dirección del receptor';
$string['urkund_receiver_help'] = 'Esta es la dirección única proporcionada por Ouriginal al profesor';
$string['urkund_resubmit_on_close'] = 'Re-enviar al cerrar';
$string['urkund_resubmit_on_close_desc'] = 'Re-enviar trabajo a Ouriginal al cerrrarse el período de envío.';
$string['urkund_resubmit_on_close_help'] = 'El habilitar esta opción causara que los envíos sean re-enviados a Ouriginal al cerrerse el período de envío de tarea.';
$string['urkund_show_student_report'] = 'Mostrar reporte de similitud al estudiante';
$string['urkund_show_student_report_help'] = 'El reporte de similitud da un desglose de que partes del envío fueron plagios y el lugar donde Ouriginal vió primero este contenido';
$string['urkund_show_student_score'] = 'Mostrar puntaje de similitud al estudiante';
$string['urkund_show_student_score_help'] = 'El puntaje de similitud es el porcentaje del envío que ha cincidido con otro contenido.';
$string['urkund_studentemail'] = 'Mandar Email a estudiante';
$string['urkund_studentemail_help'] = 'Esto mandará un correo electrónico al estudiante cuando se haya procesado un archivo para hacerle saber que está disponible un reporte. El correo también incluye el enlace para optar-por-no.';
$string['urkund_unitid'] = 'ID de unidad';
$string['urkund_username'] = 'Nombre_de_usuario';
$string['urkund_username_help'] = 'Nombre_de_usuario proporcionado por Ouriginal para accesar el API';
$string['urkund_userpref'] = 'Usar último destinatario guardado';
$string['urkund_userprefdesc'] = 'Si se habilita, la última dirección de destinatario ingresada por el usuario será guardada como la dirección predeterminada a usar cuando el usuario crea una nueva tarea. Si no se habilita, siempre se usará la dirección  predeterminada del sitio.';
$string['urkunddebug'] = 'Depurando (debugging)';
$string['urkunddefaults'] = 'Configuraciones por defecto de Ouriginal';
$string['urkunddefaults_assign'] = 'Configuraciones por defecto de Tarea';
$string['urkunddefaults_forum'] = 'Configuraciones por defecto del Foro';
$string['urkunddefaults_hsuforum'] = 'Configuraciones por defecto de hsuforum';
$string['urkunddefaults_quiz'] = 'Configuraciones predeterminadas del examen';
$string['urkunddefaults_workshop'] = 'Configuraciones por defecto del Taller';
$string['urkundexplain'] = 'Para más información sobre este plugin vea: <a href="https://ouriginal.com" target="_blank">ouriginal.com</a>';
$string['urkundfiles'] = 'Archivos Ouriginal';
$string['useurkund'] = 'Habilitar Ouriginal';
$string['waitingevents'] = 'Hay {$a->countallevents} eventos esperando a cron y {$a->countheld} eventos están siendo retenidos para re-envío';
