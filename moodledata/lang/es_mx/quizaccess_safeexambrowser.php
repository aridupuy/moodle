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
 * Strings for component 'quizaccess_safeexambrowser', language 'es_mx', version '3.11'.
 *
 * @package     quizaccess_safeexambrowser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedbrowserkeys'] = 'Claves del navegador en examen permitidas';
$string['allowedbrowserkeys_help'] = 'En ésta caja Usted puede escribir las claves permitidas para el Navegador de Examen Seguro para acceder a éste examen. Si no se escriben las claves, entonces es que no se requiere clave de examen en navegador específica para este examen.';
$string['allowedbrowserkeysdistinct'] = 'Todas las teclas deben ser diferentes';
$string['allowedbrowserkeyssyntax'] = 'Usted debe escribir las teclas permitidas a razón de una por línea. Una tecla debe ser una cadena hexadecimal de 64-caracteres';
$string['allowedkeys_adv'] = 'las teclas son una configuración avanzada';
$string['allowedkeys_adv_desc'] = 'Si ésta opción está activada, entonces la lista de teclas permitidas del navegador es un campo avanzado en el formato de la configuración del examen.';
$string['pluginname'] = 'Regla de acceso al examen con Navegador de Examen Seguro';
$string['privacy:metadata'] = 'El plugin de la regla de acceso a examen con Navegador de Examen Seguro no almacena ningún dato personal.';
$string['safebrowserdownloadurl'] = 'URL para descargar el Navegador de examen Seguro';
$string['safebrowserdownloadurl_desc'] = 'Si Usted escribe aquí una URL, entonces se les dirá a los usuarios que pueden descargar la versión requerida del Navegador de Examen Seguro desde allí.';
$string['safebrowsermustbeused'] = 'Usted debe usar una versión aprobada del Navegador de Examen Seguro para intentar este examen.';
$string['safebrowsermustbeusedwithlink'] = 'Usted debe usar una versión aprobada del Navegador de Examen Seguro para intentar este examen. Lo puede descargar desde {$a->link}';
$string['safeexambrowser:exemptfromcheck'] = 'Eximir de la revisión del Navegador de Examen seguro';
