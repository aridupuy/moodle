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
 * Strings for component 'booktool_wordimport', language 'es_mx', version '3.11'.
 *
 * @package     booktool_wordimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'No puede abrirse archivo temporal <b>{$a}</b>';
$string['embeddedimageswarning'] = 'Advertencia: este archivo debe ser abierto usando Word 2020 o Word 365 para poder manejar correctamente imágenes incrustadas.';
$string['encodedimageswarning'] = 'Advertencia: este archivo contiene imágenes incrustadas. Vea <a href="http://www.moodle2word.net/mod/page/view.php?id=143">más información acerca de como convertirlas de vuelta a imágenes incrustadas</a>.';
$string['exportbook'] = 'Exportar libro hacia Microsoft Word';
$string['exportchapter'] = 'Exportar este capítulo hacia Microsoft Word';
$string['exportformat'] = 'Formato de exportación.';
$string['exportformat_desc'] = 'Formato de exportación.';
$string['exportformat_embedded'] = 'Word 2010';
$string['exportformat_encoded'] = 'Word 2020';
$string['exportformat_help'] = 'Elija formato compatible con Word 2020/365 si tiene acceso a Word 2019, Word 2020 o Word 365. En caso contrario, elija Word 2010, el cual requiere una plantilla externa de Word para poder convertir imágenes a un formato utilizable. Vea <a href="http://www.moodle2word.net/mod/page/view.php?id=143">más información acerca de como convertirlas de vuelta a imágenes incrustadas</a>.';
$string['heading1stylelevel'] = 'Nivel de elemento del encabezado para Encabezado estilo 1';
$string['heading1stylelevel_desc'] = 'Nivel de elemento de encabezado HTML al cual debería ser mapeado el estilo  "Heading 1" (Título 1) de Word';
$string['importchapters'] = 'Importar de Microsoft Word';
$string['insertionpoint'] = 'Insertar antes del capítulo actual';
$string['insertionpoint_help'] = 'Insertar contenidos antes del capítulo actual, manteniendo todo el contenido existente';
$string['nochapters'] = 'No se encontraron capítulos de libro, por lo que no se pudo exportar hacia Microsoft Word.';
$string['pluginname'] = 'Importar/Exportar archivo de Microsoft Word (Libro)';
$string['privacy:metadata'] = 'La herramienta para importar/exportar archivos Microsoft Word para libros no almacena ningún dato personal.';
$string['replacebook'] = 'Remplazar libro';
$string['replacebook_help'] = 'Eliminar el contenido actualdel libro antes de la importación';
$string['replacechapter'] = 'Remplazar el capítulo actual';
$string['replacechapter_help'] = 'Remplazar el contenido del capítulo actual con el primer capítulo del archivo, pero conservar todos los demás capítulos';
$string['settings'] = 'Configuraciones de Importación/Exportación (Libro) de archivo Microsoft Word';
$string['splitonsubheadings'] = 'Crear subcapítulos basados en sub-encabezados';
$string['splitonsubheadings_help'] = 'Se crearán subcapítulos en estilos "Encabezado 2"';
$string['stylesheetunavailable'] = 'La hoja_de_estilo XSLT <b>{$a}</b> no está disponible';
$string['transformationfailed'] = 'Falló la transformación XSLT';
$string['wordfile'] = 'Archivo de Microsoft Word';
$string['wordfile_help'] = 'Subir archivo <i>.docx</i> guardado desde Microsoft Word o LibreOffice';
$string['wordimport:export'] = 'Exportar archivo de Microsft Word';
$string['wordimport:import'] = 'Importar archivo de Microsoft Word';
$string['xsltunavailable'] = 'Usted necesita tener instalada la biblioteca XSLT en PHP para poder guardar este archivo de Word';
