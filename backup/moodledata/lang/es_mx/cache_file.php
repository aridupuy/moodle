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
 * Strings for component 'cache_file', language 'es_mx', version '3.11'.
 *
 * @package     cache_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Auto crear directorio';
$string['autocreate_help'] = 'Si se habilita, el directorio especificado en la ruta se creará automáticamente en caso de que no existiera previamente.';
$string['path'] = 'Ruta al caché';
$string['path_help'] = 'El directorio que debería usarse para almacenar archivos para este almacén de caché. Si se deja vacío (por defecto) se creará automáticamente un directorio dentro del directorio moodledata. Esto puede usarse para apuntar un almacén de archivo hacia un directorio situado en un disco de mejor desempeño (como uno en memoria).';
$string['pluginname'] = 'Caché de archivo';
$string['prescan'] = 'Directorio de pre-revisión';
$string['prescan_help'] = 'Si se habilita, el directorio es revisado cuando se use el caché por primera vez y se revisan las solicitudes de archivos contra los datos revisados por primera vez. Esto puede ayudar si Usted tiene un sistema de archivos lento y está encontrando que las operaciones con archivos están causándole u cuello de botella.';
