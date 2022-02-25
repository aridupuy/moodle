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
 * Strings for component 'enrol_fee', language 'es_mx', version '3.11'.
 *
 * @package     enrol_fee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['cost'] = 'Cuota de inscripción';
$string['costerror'] = 'La cuota de inscripción debe ser un número.';
$string['currency'] = 'Divisa';
$string['defaultrole'] = 'Asignación predeterminada de rol';
$string['defaultrole_desc'] = 'Seleccionar el rol a asignarle a usuarios después de hacer un pago';
$string['enrolenddate'] = 'Fecha de terminación';
$string['enrolenddate_help'] = 'Si se habilita,los usuarios pueden ser inscritos solamente hasta esta fecha.';
$string['enrolenddaterror'] = 'La fecha de fin de la inscripción no puede ser anterior a la fecha de inicio.';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_desc'] = 'Lapso de tiempo predeterminado que la inscripción es válida. Si se configura a cero, la duración de la inscripción será ilimitada por defecto.';
$string['enrolperiod_help'] = 'Lapso de tiempo que la inscripción es válida, comenzando con el momento cuando el usuario es inscrito. Si se deshabilita, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios solamente pueden ser inscritos a partir de esta fecha en adelante.';
$string['expiredaction'] = 'Acción a la expiración de inscripción';
$string['expiredaction_help'] = 'Seleccionar la acción a ser realizada cuando la inscripción de un usuario expira. Por favor tenga en cuenta que algunas configuraciones y datos del usuario son eliminadas cuando un usuario es des-inscrito.';
$string['fee:config'] = 'Configurar inscripción en instancias de inscripción por pago';
$string['fee:manage'] = 'Gestionar usuarios inscritos';
$string['fee:unenrol'] = 'Des-inscribir usuarios del curso';
$string['fee:unenrolself'] = 'Des-inscribirse usted mismo del curso';
$string['nocost'] = '¡No hay costo por inscribirse en este curso!';
$string['paymentaccount'] = 'Cuenta del pago';
$string['paymentaccount_help'] = 'Las cuotas de inscripción serán pagadas a esta cuenta.';
$string['pluginname'] = 'Inscripción al pagar';
$string['pluginname_desc'] = 'El método de inscipción al pagar le permite configurar cursos que requieren pago. Si la cuota por algún curso se configura a cero, entonces a los estudiantes no se les pide que paguen para entrar. Hay una cuota para todo el sitio que se configura aquí como predeterminada para todo el sitio y después hay una configuración del curso que Usted puede configurar individualmente para cada curso. La cuota del curso anula la cuota del sitio.';
$string['privacy:metadata'] = 'El plugin de inscripción al pagar no almacena ningún dato personal.';
$string['purchasedescription'] = 'Inscripción en curso {$a}';
$string['sendpaymentbutton'] = 'Seleccionar tipo de pago';
$string['status'] = 'Permitir inscripción en inscripciones de pago';
$string['status_desc'] = 'Permitirle a los usuarios el hacer un pago para inscribirse a un curso en forma predeterminada.';
