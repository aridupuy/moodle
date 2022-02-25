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
 * Strings for component 'tool_task', language 'es_mx', version '3.11'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad-hoc';
$string['adhocempty'] = 'La cola de trabajos ad-hoc está vacía';
$string['adhocqueueold'] = 'El trabajo más antiguo es de {$a->age} lo cual es más de {$a->max}';
$string['adhocqueuesize'] = 'La cola de trabajos ad-hoc tiene {$a} trabajos';
$string['adhoctaskid'] = 'ID de trabajo ad-hoc: {$a}';
$string['adhoctasks'] = 'Trabajos ad-hoc';
$string['asap'] = 'Tan Pronto Como Sea Posible';
$string['backtoscheduledtasks'] = 'Regresar a trabajos agendados';
$string['blocking'] = 'Bloqueando';
$string['cannotfindthepathtothecli'] = 'No se puede encontrar la ruta al ejecutable PHP CLI por lo que se abortó el trabajo. Ajuste la configuración "Ruta hacia PHP CLI" en Administración del sitio / Servidor / Rutas del sistema.';
$string['checkadhocqueue'] = 'Cola de trabajos ad-hoc';
$string['checkcronrunning'] = 'Cron ejecutando';
$string['checkmaxfaildelay'] = 'Retraso de falla máx del trabajo';
$string['classname'] = 'Nombre de la clase';
$string['clearfaildelay_confirm'] = '¿Está seguro de querer borrar el retraso por fallo para el trabajo \'{$a}\'? Después de borrar el retraso, el trabajo correrá de acuerdo a su propia agenda.';
$string['component'] = 'Componente';
$string['corecomponent'] = 'Núcleo';
$string['crondisabled'] = 'Cron está deshabilitado. No serán iniciados nuevos trabajos. El sistema no operará apropiadamente hasta que sea habilitado de nuevo.';
$string['cronok'] = 'Cron está ejecutándose frecuentemente';
$string['default'] = 'Por defecto';
$string['defaultx'] = 'Predeterminado: {$a}';
$string['disabled'] = 'Deshabilitado';
$string['disabled_help'] = 'Los trabajos agendados deshabilitados no son ejecutados desde cron; sin embargo, todavía podrían ejecutarse manualmente mediante la herramienta CLI de Interfaz por Línea de Comando.';
$string['edittaskschedule'] = 'Editar agenda de trabajo: {$a}';
$string['enablerunnow'] = 'Permitir  \'Ejecutar ahora\' (Run now) para trabajos agendados';
$string['enablerunnow_desc'] = 'Permitirle a administradores el ejecutar un solo trabajo agendado inmediatamente, en lugar de esperar para que ejecute como está agendado. La característica requiere que esté configurada \'Ruta a PHP CLI\' (pathto´php) en las Rutas del sistema. El trabajo ejecuta en el servidor web, por lo que Usted podría desear deshabilitar esta característica para evitar problemas potenciales de desempeño.';
$string['faildelay'] = 'Retraso por falla';
$string['fromcomponent'] = 'Del componente: {$a}';
$string['hostname'] = 'Nombre del host';
$string['lastruntime'] = 'Última corrida';
$string['lastupdated'] = 'Última actualización {$a}.';
$string['nextruntime'] = 'Siguiente corrida';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Plugin deshabilitado';
$string['pluginname'] = 'Configuración de trabajo agendado';
$string['privacy:metadata'] = 'El plugin de Configuración de trabajo agendado no almacena ningún dato personal.';
$string['resettasktodefaults'] = 'Reiniciar agenda de trabajo a valores por defecto';
$string['resettasktodefaults_help'] = 'Esto descartará cualquier cambio local y revertirá la agenda para este trabajo a sus configuraciones originales';
$string['runagain'] = 'Ejecutar de nuevo';
$string['runningtasks'] = 'Trabajos corriendo ahorita mismo';
$string['runnow'] = 'Ejecutar ahora';
$string['runnow_confirm'] = '¿Está Usted seguro de querer correr este trabajo agendado ‘{$a}’ ahora? El trabajo agendado correrá en el servidor web y puede tomar bastante tiempo para completarse.';
$string['runpattern'] = 'Correr patrón';
$string['scheduled'] = 'Agendado';
$string['scheduledtaskchangesdisabled'] = 'Se han impedido modificaciones a la lista de trabajos (\'\'tasks\'\') agendados en la configuración de Moodle';
$string['scheduledtasks'] = 'Trabajos agendados';
$string['started'] = 'Iniciado';
$string['taskdisabled'] = 'Trabajo deshabilitado';
$string['taskfailures'] = '{$a} trabajo(s) fallando';
$string['tasklogs'] = 'Bitácoras de trabajo';
$string['tasknofailures'] = 'No hay trabajos fallando';
$string['taskscheduleday'] = 'Día';
$string['taskscheduleday_help'] = 'Campo de día del mes para agenda de trabajo. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:

* <strong>*</strong> Cada día
* <strong>*/2</strong> Un día sí y otro no
* <strong>1</strong> El primer día de cada mes
* <strong>1,15</strong> El primer día y el día 15 de cada mes';
$string['taskscheduledayofweek'] = 'Día de la semana';
$string['taskscheduledayofweek_help'] = 'Campo de día de la semana para agenda de trabajo. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:

* <strong>*</strong> Cada día
* <strong>0</strong> Cada Domingo
* <strong>6</strong> Cada Sábado
* <strong>1,5</strong> Cada Lunes y Viernes';
$string['taskschedulehour'] = 'Hora';
$string['taskschedulehour_help'] = 'Campo de hora para agenda de trabajo. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:

* <strong>*</strong> Cada hora
* <strong>*/2</strong> Cada 2 horas
* <strong>2-10</strong> Cada hora desde las 2am hasta las 10am (inclusive)
* <strong>2,6,9</strong> 2am, 6am y 9am';
$string['taskscheduleminute'] = 'Minuto';
$string['taskscheduleminute_help'] = 'Campo de minuto para agenda de trabajo. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:

* <strong>*</strong> Cada minuto
* <strong>*/5</strong> Cada 5 minutos
* <strong>2-10</strong> Cada minuto entre 2 y 10 después de la hora (inclusive)<
* <strong>2,6,9</strong>  2, 6 y 9 minutos después de la hora';
$string['taskschedulemonth'] = 'Mes';
$string['taskschedulemonth_help'] = 'Campo de mes para agenda de trabajo. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:


* <strong>*</strong> Cada mes
* <strong>*/2</strong> Un mes si y otro no
* <strong>1</strong> Cada Enero
* <strong>1,5</strong> Cada Enero y Mayo';
$string['viewlogs'] = 'Ver bitácoras para {$a}';
