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
 * Strings for component 'tool_crawler', language 'es_mx', version '3.11'.
 *
 * @package     tool_crawler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc_crawl_task'] = 'Trabajos del gateo ad-hoc';
$string['autocreate'] = 'Auto crear';
$string['bigfilesize'] = 'Tamaño de Archivos Grandes';
$string['bigfilesizedesc'] = 'Que tan grande necesita ser un archivo (en MB) para ser marcado como de tamaño-excesivo.';
$string['botcantgettestpage'] = 'El robot no pudo solicitar página de prueba';
$string['botpassword'] = 'Contraseña del robot';
$string['botpassworddesc'] = 'La contraseña para que gatee el usuario Moodle. Este usuario debería de tener permiso de ver todo el sitio completo, pero permisos de edición muy limitados, y estar configurado para usar autenticación básica.';
$string['bottestpagenotreturned'] = 'No se regresó la página de prueba del robot';
$string['bottestpageredirected'] = 'La página de prueba del robot se redirigió hacia {$a->resredirect}';
$string['botuser'] = 'Usuario robot';
$string['botusermissing'] = 'Falta usuario robot';
$string['botusername'] = 'Nombre_de_usuario del robot';
$string['botusernamedesc'] = 'El nombre_de_usuario del usuario Moodle para gatearcomo';
$string['broken'] = 'Enlaces rotos';
$string['broken_header'] = '<p>Las URLs duplicadas solamente se buscarán una vez.</p>';
$string['clicrawlashelp'] = 'Rastrear una URL como el robot y analizarla.

Es útil cuando una página ha sido corregida y Usted quiere refglejar esto instantáneamente.

Opciones:
-h, --help      Imprimir esta ayuda
-u, --url       URL a rastrear y procesar

Ejemplo:
$sudo -u www-data php crawl-as.php --url=https://host.ejemplo/';
$string['clicrawlerhelp'] = 'Ejecutar el rastreador manualmente sin tener que esperar al trabajo agendado.

Opciones:
-h, --help          Imprimir esta ayuda
--verbose=<level>   Verbosity level (0 = Silencioso, 1 = Verbosidad estandar, 2 = Verbosidad extendida), Predeterminado: 1

Ejemplo:
$sudo -u www-data php crawler.php --verbose=1';
$string['clierror'] = 'Error: {$a}';
$string['configmissing'] = 'Falta configuración';
$string['course'] = 'Curso';
$string['crawl_task'] = 'Trabajo de rastreo paralelo';
$string['crawlend'] = 'Termina gateado';
$string['crawlstart'] = 'Inicia gateado';
$string['cronticks'] = 'Ticks del cron';
$string['curcrawlstart'] = 'El gateado actual comenzó en';
$string['custompriority'] = 'Personalizado: {$a}';
$string['defaultpriority'] = 'Bajo';
$string['disablebot'] = 'Deshabilitar el robot rastreador de enlaces';
$string['disablebotdesc'] = 'Hacer que el rastreador no haga nada cuando se está ejecutando un trabajo agendado. Esto efectivamente impide el rastreo de enlaces y la ejecución de funciones de limpieza del bot. Está hecho para desactivar, o pausar temporalmente, el rastreador sin tener que deshabilitar todos sus trabajos agendados.';
$string['duration'] = 'Duración';
$string['event:crawlstart'] = 'Gateo de revisión de enlaces iniciado';
$string['event:crawlstartdesc'] = 'Gateo de revisión de enlaces iniciado {$a}';
$string['eventrobotcleanupcompleted'] = 'Limpieza de robot revisador-de-enlace completado';
$string['eventrobotcleanupstarted'] = 'Limpieza de robot revisador-de-enlace iniciado';
$string['excludecourses'] = 'Excluir cursos';
$string['excludecoursesdesc'] = 'Un nombre de código-corto de curso por línea y el uso del comodín * también están aceptados.  Por ejemplo, si tiene nombres cortos de curso como COMP100_SEM1_2020 entonces usted podría excluir todos los cursos COMP100 con <code>COMP100*</code> o todos los cursos 2019 con <code>*_2019</code>';
$string['excludeexturl'] = 'Excluir URLs externas';
$string['excludeexturldesc'] = 'Una URL por línea y el uso del comodín * en cualquier posición también está permitido., Cada una es contrastada contra la URL completa';
$string['excludemdldom'] = 'Excluir partes de DOMs Moodle';
$string['excludemdldomdesc'] = 'Una expresión CSS / XPath por línea; las partes coincidentes del DOM serán quitadas antes de que los enlaces sean extraídos';
$string['excludemdlparam'] = 'Excluir parámetros de URL Moodle';
$string['excludemdlparamdesc'] = 'Una clave de parámetro por línea. Las URLs que usan esto todavía serán gateados, pero con estos parámetros quitados para evitar duplicados.';
$string['excludemdlurl'] = 'Excluir URLs de Moodle';
$string['excludemdlurldesc'] = 'Una URL por línea y el uso del comodín * en cualquier posición también está permitido., Cada una es contrastada excluyendo el wwwroot';
$string['fetcherror'] = 'Error Curl : {$a->errormessage}';
$string['found'] = 'Encontrado';
$string['frompage'] = 'De la página';
$string['good'] = 'Bien';
$string['greaterthansize'] = '> {$a->size}';
$string['hellorobot'] = 'Hola robot: \'{$a->botusername}\'';
$string['hellorobotheading'] = '¡Hola robot!';
$string['highpriority'] = 'Alto';
$string['idattr'] = 'Contexto HTML';
$string['incomingurls'] = 'URLs entrantes';
$string['incourse'] = 'En curso';
$string['lastcrawledtime'] = 'Último tiempo de gateado';
$string['lastcrawlend'] = 'El último gateo terminó en';
$string['lastcrawlproc'] = 'Último proceso de gateo';
$string['lastqueuesize'] = 'Último tamaño de cola';
$string['linktext'] = 'Texto del enlace';
$string['max_workers'] = 'Max trabajadores';
$string['max_workersdesc'] = 'El número máximo de trabajos de rastreo ad-hoc (trabajadores) que deberían de correr en paralelo en algún momento.';
$string['maxcrontime'] = 'Límite corrida Cron';
$string['maxcrontimedesc'] = 'El gateador seguirá gateando hasta que se alcance este límite en cada click del Cron.';
$string['maxtime'] = 'Tiempo máximo de ejecución';
$string['maxtimedesc'] = 'El tiempo de descarte (en segundos) para cada solicitud de gateo';
$string['mimetype'] = 'Tipo de medio';
$string['missing'] = 'Faltante';
$string['networkstrain'] = 'Extensión de uso de recursos de red';
$string['networkstrainexcessive'] = 'excesivo';
$string['networkstrainreasonable'] = 'razonable';
$string['networkstrainresolute'] = 'resoluto';
$string['networkstrainwasteful'] = 'desperdiciado';
$string['neverfinished'] = 'Nunca terminado';
$string['neverrun'] = 'Nunca corrido';
$string['no'] = 'No';
$string['normalpriority'] = 'Normal';
$string['notyetknown'] = 'Aun desconocido';
$string['numberurlsfound'] = 'Se encontraron {$a->reports_number} {$a->repoprt_type} URLs';
$string['numlinks'] = 'Enlaces totales';
$string['numurls'] = 'URLs totales';
$string['outgoingurls'] = 'URLs salientes';
$string['oversize'] = 'Enlaces grandes / lentos';
$string['oversize_header'] = '<p>Los archivos grandes con múltiples enlaces entrantes hacia ellos serán duplicados.</p>';
$string['pluginname'] = 'Robot gateador de enlaces';
$string['priority'] = 'Prioridad';
$string['privacy:no_data_reason'] = 'El plugin rastreador no almacena ningún dato personal.';
$string['progress'] = 'Progreso';
$string['progresseta'] = '{$a->percent} ETA es {$a->eta}';
$string['queued'] = 'En cola';
$string['queued_header'] = '<p>El título y curso solamente son conocidos si la URL se ha visto en un gateo anterior.</p>';
$string['recent'] = 'Recientemente gateadas';
$string['recent_header'] = '';
$string['recentactivity'] = 'Días de actividad reciente';
$string['recentactivitydesc'] = 'Un curso solamente será rastreado si ha sido visto en el último número de días aquí configurado.';
$string['redirect'] = 'Redirigirt: {$a->redirectlink}';
$string['resetprogress'] = 'Reiniciar Progreso';
$string['resetprogress_header'] = 'Reiniciar Pogreso del Gateador';
$string['resetprogress_warning'] = 'Advertencia: Está a punto de reiniciar al Gateador. ¿Está seguro de querer hacer esto?';
$string['resetprogress_warning_button'] = 'Reiniciar rastreador';
$string['response'] = 'Respuesta';
$string['retentionperiod'] = 'Período de retención para URLs malas';
$string['retentionperioddesc'] = 'Cuantos días conservar las URLs malas en la BasedeDatos';
$string['retry'] = 'Reintentar';
$string['robotcleanup'] = 'Limpieza robot';
$string['robotstatus'] = 'Estatus';
$string['seedurl'] = 'URL semilla';
$string['seedurldesc'] = 'En donde iniciará el gateador';
$string['settings'] = 'Configuraciones';
$string['size'] = 'Tamaño';
$string['slowurl'] = 'URL lenta';
$string['status'] = 'Estatus';
$string['symbolforunknown'] = '?';
$string['unknown'] = 'Desconocido';
$string['url'] = 'URL';
$string['urldetails'] = 'Detalles de URL';
$string['urldetails_help'] = 'Esto muestra todos los enlaces entrantes y salientes para esta URL. Los enlaces que han sido puestos en la lista-negra o los que están en elementos DOM excluídos no se mostrarán.';
$string['usehead'] = 'Habilitar solicitudes HTTP HEAD';
$string['uselogs'] = 'Usar tablas de bitácoras';
$string['uselogsdesc'] = 'Si se habilita, rastrear  solamente los enlaces que sean parte de cursos con actividad reciente. Usa tabla mdl_logstore_standard_log.';
$string['useraccount'] = 'Cuenta del usuario';
$string['useragent'] = 'Cadena de texto de agente usuario robot';
$string['useragentdesc'] = 'La cadena de texto del agente usuario que se usa en los encabezados (headers) HTTP + la versión de este plugin';
$string['whenqueued'] = 'Cuando esté en cola';
$string['yes'] = 'Si';
