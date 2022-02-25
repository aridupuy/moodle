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
 * Strings for component 'local_codechecker', language 'es_mx', version '3.11'.
 *
 * @package     local_codechecker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check'] = 'Inspeccionar código';
$string['clihelp'] = 'Comprobar algo del código PHP contra las directrices de codificación de Moodle.
Opciones:
  --interactiva, -i Se detiene después de cada archivo, permitiendo continuar con el siguiente archivo, o repetir la comprobación contra el mismo.
  -excluir, -e   Excluir archivos con una lista separada por comas de rutas de coincidencia de subcadenas. Los asteriscos están permitidos como comodines en cualquier lugar.
  --help, -h        Mostrar esta información
Ejemplo:
  php run.php local/codechecker';
$string['error_find'] = 'Falló la búsqueda de carpeta';
$string['exclude'] = 'Excluir';
$string['filesfound'] = 'Archivos encontrados: {$a}';
$string['filesummary'] = '{$a->path} - {$a->count}';
$string['includewarnings'] = 'Incluir advertencias';
$string['info'] = '<p>Inspecciona código respecto a algunos aspectos de {$a->link}.</p>
<p>Escriba una ruta (path) relativa al código raíz de Moodle; por ejemplo {$a->path}.</p>
<p>Usted puede escribir, por ejemplo, un archivo PHP específico; o una carpeta para revisar todos los archivos que contiene.
Se soportan entradas múltiples (archivos o carpetas), una por línea</p>
<p>Para excluir archivos, puede usarse una lista separada por comas, de subcadenas de las rutas que concuerden, por ejemplo: {$a->ejemploaexample}. Se permiten asteriscos como comodines en cualquier posición.</p>';
$string['invalidpath'] = 'Ruta inválida {$a}';
$string['moodlecodingguidelines'] = 'Directrices para codificación de Moodle';
$string['numerrorswarnings'] = '{$a->errors} error(es) y {$a->warnings} advertencia(s)';
$string['other_crlf'] = 'Fin de línea de Windows (CRLF) en lugar de solamente alimentación de línea (LF). Se reporta solamente la primera ocurrencia.';
$string['other_eol'] = 'Espacio blanco al final de la línea';
$string['other_extralfs'] = 'Línea(s) vacía(s) extra al final del archivo (use exactamente UNA)';
$string['other_missinglf'] = 'Falta LF (alimentación de línea) al final del archivo (use exactamente UNA)';
$string['other_ratherlong'] = 'Línea más larga que los 132 caracteres recomendados';
$string['other_tab'] = 'Caracter de tabulación (tab) no permitido';
$string['other_toolong'] = 'Línea más larga que los 180 caracteres máximo';
$string['path'] = 'Ruta(s) a inspeccionar';
$string['pluginname'] = 'Inspector de código (code checker)';
$string['privacy:metadata'] = 'El plugin Code checker no almacena ningún dato personal.';
$string['recheckfile'] = 'Inspeccionar otra vez solamente este archivo';
$string['success'] = '¡Bien hecho!';
$string['summary'] = 'Total: {$a}';
$string['wholefile'] = 'Archivo';
