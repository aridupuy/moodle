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
 * Strings for component 'tool_imageoptimize', language 'es_mx', version '3.11'.
 *
 * @package     tool_imageoptimize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundoptimizingheading'] = 'Configuraciones para optimización en segundo plano';
$string['cantcopyfile'] = 'El archivo no pudo ser almacenado.';
$string['cantfindfile'] = 'El archivo no pudo ser encontrado en filestorage.';
$string['create_desc'] = 'Aplicar optimización en la primera subida de archivos';
$string['enablebackgroundoptimizing'] = 'Habilitar optimización en segundo plano';
$string['enablebackgroundoptimizing_desc'] = 'Cuando la optimización en segundo plano es habilitada no habrá optimización al subir.';
$string['filecheckfailed'] = 'Falló la comprobación del archivo';
$string['filehasnofilesize'] = 'El archivo no tiene tamaño de archivo o tamaño es 0. ¡Abortar!';
$string['files_types'] = 'Tipos de filtros';
$string['files_types_desc'] = 'Seleccionar los tipos de filtros a los cuales será aplicada la optimización';
$string['filesortorder'] = 'Seleccionar ordenamiento';
$string['filesortorder_id_asc'] = 'Comenzar con los más antiguos';
$string['filesortorder_id_desc'] = 'Comenzar con los más nuevos';
$string['gifsicle'] = '<strong><a href="http://www.lcdf.org/gifsicle/" target="_blank">Gifsicle</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install gifsicle</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install gifsicle</code></li>
                        </ul>';
$string['info_title'] = 'Para extender la función de compresión de formato <strong>{$a}</strong>, usted puede instalar paquetes adicionales para compresión';
$string['jpegoptim'] = '<strong><a href="http://freshmeat.sourceforge.net/projects/jpegoptim" target="_blank">JpegOptim</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install jpegoptim</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install jpegoptim</code></li>
                        </ul>';
$string['maxchunksize'] = 'Número máximo de archivos procesados con una llamada al trabajo.';
$string['maxchunksizeimport'] = 'Número máximo de archivos escritos a la tabla de procesamiento con una llamada al trabajo.';
$string['more_than'] = 'Optimizar archivos para más de, Kb';
$string['optipng'] = '<strong><a href="http://optipng.sourceforge.net/" target="_blank">OptiPNG</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install optipng</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install optipng</code></li>
                        </ul>';
$string['os_warning'] = 'Actualmente, este plugin no soporta el trabajar con el sistema operativo de su servidor: <strong>{$a}</strong>';
$string['pathnamehashchanged'] = 'El hash al nombre de archivo ha cambiado. ¡Abortar!';
$string['pluginname'] = 'Optimización de imagen';
$string['privacy:metadata'] = 'El plugin de optimización de imagen no almacena ningún dato personal.';
$string['taskoptimize'] = 'Trabajo de optimización de imagen en segundo plano';
$string['taskoptimize_fill_table'] = 'Poblando la tabla tool_imageoptimize_files';
$string['update_desc'] = 'Permitir optimización en una subida de archivo';
$string['warning_title'] = 'Para que aparezca la opción, instale uno de los paquetes en su servidor o todos juntos';
$string['webp'] = '<strong><a href="https://developers.google.com/speed/webp" target="_blank">WebP</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install webp</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install libwebp-tools</code></li>
                        </ul>';
