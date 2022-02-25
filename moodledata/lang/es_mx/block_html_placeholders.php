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
 * Strings for component 'block_html_placeholders', language 'es_mx', version '3.11'.
 *
 * @package     block_html_placeholders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowadditionalcssclasses'] = 'Permitir clases CSS adicionales';
$string['configallowadditionalcssclasses'] = 'Añadir una opción de configuración a instancias de bloque HTML permitiendo que sean configuradas clases CSS adicionales.';
$string['configclasses'] = 'Clases CSS adicionales';
$string['configclasses_help'] = 'El propósito de esta configuración es ayudar al personalizado del tema al ayudar a distinguir los bloques HTML unos de otros. Cualquier clase CSS ingresada aquí (delimitadas por espacio) serán añadidas a las clases predeterminadas del bloque.';
$string['configcontent'] = 'Contenido';
$string['configtitle'] = 'Título del bloque HTML con reemplazables';
$string['html_placeholders:addinstance'] = 'Añadir un nuevo bloque HTML con reemplazables';
$string['html_placeholders:myaddinstance'] = 'Añadir un nuevo bloque HTML con reemplazables al Tablero';
$string['newhtml_placeholdersblock'] = '(nuevo bloque HTML con reemplazables)';
$string['placeholders'] = 'Reemplazables';
$string['placeholders_desc'] = 'Una lista de reemplazables soportados. El nombre del reemplazable seguido del caracter de barra vertical (|). y el valor predeterminado de ese reemplazable. Solamente un reemplazable por linea, separados por un salto de línea entre cada reemplazable.
Por ejemplo:
<pre>
profesión | Doctor
type | On-line
</pre>';
$string['pluginname'] = 'HTML con reemplazables';
$string['privacy:metadata:block'] = 'El bloque HTML con reemplazables almacena todos sus datos dentro del subsistema de bloque.';
$string['search:content'] = 'Contenido del bloque HTML con reemplazables';
$string['shortcodes'] = 'Mostrar el reemplazable';
$string['shortcodes_help'] = 'Envolver su reemplazable dentro de marcas [htmlplaceholder] .

Ejemplo:
    [htmlplaceholder]{{profesión}}[/htmlplaceholder]';
