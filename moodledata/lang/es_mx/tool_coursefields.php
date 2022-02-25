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
 * Strings for component 'tool_coursefields', language 'es_mx', version '3.11'.
 *
 * @package     tool_coursefields
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursefields:setfields'] = 'Configurar los campos del curso de todos los cursos en una categoría.';
$string['fieldisrequired'] = '<strong>Este campo personalizado está configurado para ser  requerido.</strong> Con esta herramienta, Usted puede sobrescribir esta regla y sobre-ecribir este campo con valores vacíos. Por favor solamente haga esto si realmente sabe lo que está haciendo.';
$string['fieldisunique'] = '<strong>Este campo personalizado está configurado para ser único.</strong> Con esta herramienta, Usted puede sobrescribir esta regla con todos los valores iguales. Por favor solamente haga esto si realmente sabe lo que está haciendo.';
$string['overwritefield'] = 'Sobrescribir valores existentes de campos';
$string['pluginname'] = 'Configurar campos del curso';
$string['privacy:metadata'] = 'El plugin para configurar campos del curso no almacena ningún dato personal.';
$string['setfields'] = 'Configurar campos del curso';
$string['setfieldsinstruction'] = 'Configurar los campos del curso para todos los cursos en una categoría, incluyendo subcategorías. elija sus opciones y haga cic en "Confirmar". Al confirmar, Moodle creará un "trabajo adhoc" para configurar todos los campos del curso en segundo plano. Esto requiere que cron esté habilitado.';
$string['updatequeued'] = 'Un trabajo ad-hoc ha sido en cola de espera para actualizar todos los cursos en la categoría <strong>{$a}</strong>. Se ejecutará la próxima vez que se ejecute cron.';
