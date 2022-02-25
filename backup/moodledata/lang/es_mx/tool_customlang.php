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
 * Strings for component 'tool_customlang', language 'es_mx', version '3.11'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Guardar las cadenas de texto en el paquete de idioma';
$string['checkout'] = 'Abrir el paquete de idioma para editarlo';
$string['checkoutdone'] = 'El paquete de idioma fue cargado';
$string['checkoutinprogress'] = 'Cargando el paquete de idioma';
$string['cliexportfileexists'] = 'El archivo para {$a->lang} ya existe; saltándoselo. Si quiere anularlo añada la opción --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'Archivo {$a->filepath} no encontrado para el idioma {$a->lang}. Saltándose este archivo.';
$string['cliexportheading'] = 'Empezando a exportar archivos de idioma';
$string['cliexportnofilefoundforlang'] = 'No se encontraron archivos para exportar. Saltándose la exportación para este idioma.';
$string['cliexportstartexport'] = 'Exportando idioma {$a}';
$string['cliexportzipdone'] = 'Zip creado: {$a}';
$string['cliexportzipfail'] = 'No se puede crear zip {$a}';
$string['clifiles'] = 'Archivos a importar dentro de {$a}';
$string['cliimporting'] = 'Importar archivo de cadena de caracteres  (modo {$a})';
$string['climissingfiles'] = 'Faltan archivos válidos';
$string['climissinglang'] = 'Idioma faltante';
$string['climissingmode'] = 'Modo inválido o faltante (válido es todo, nuevo o actualizar)';
$string['climissingsource'] = 'Archivo o carpeta faltante';
$string['clinolog'] = 'Nada para importar dentro de {$a}';
$string['confirmcheckin'] = 'Está a punto de guardar modificaciones a su paquete de idioma local. Esto exportará las cadenas de texto personalizadas desde el traductor hasta su directorio de datos y su sitio comenzará a utilizar las cadenas modificadas. Pulse \'Continuar\' para guardarlas.';
$string['customlang:edit'] = 'Editar traducción local';
$string['customlang:export'] = 'Exportar traducción local';
$string['customlang:view'] = 'Ver traducción local';
$string['export'] = 'Exportar cadenas de texto personalizadas';
$string['exportfilter'] = 'Seleccionar componente(s) a exportar';
$string['filter'] = 'Filtrar cadenas';
$string['filtercomponent'] = 'Mostrar cadenas de estos componentes';
$string['filtercustomized'] = 'Sólo las personalizadas';
$string['filtermodified'] = 'Sólo las modificadas en esta sesión';
$string['filteronlyhelps'] = 'Sólo ayuda';
$string['filtershowstrings'] = 'Mostrar cadenas';
$string['filterstringid'] = 'Identificador de cadena';
$string['filtersubstring'] = 'Solamente cadenas con';
$string['headingcomponent'] = 'Componente';
$string['headinglocal'] = 'Personalización local';
$string['headingstandard'] = 'Texto estándar';
$string['headingstringid'] = 'Cadena';
$string['import'] = 'Importar cadenas de caracteres personalizadas';
$string['import_all'] = 'Crear o actualizar todas las cadenas de los componentes';
$string['import_mode'] = 'Modo de importación';
$string['import_new'] = 'Crear solamente cadenas sin personalización local';
$string['import_update'] = 'Actualizar solamente cadenas con personalización local';
$string['importfile'] = 'Importar archivo';
$string['langpack'] = 'Componente(s) del idioma';
$string['markinguptodate'] = 'Marcando la personalización como actualizada';
$string['markinguptodate_help'] = 'La traducción personalizada puede quedar obsoleta si los paquetes con el Inglés original o la traducción principal se han modificado posteriormente a la personalización de su sitio. Revise la traducción personalizada; si ve que está actualizada marque la casilla, En caso contrario, edítela de nuevo.';
$string['markuptodate'] = 'marcar como actualizada';
$string['modifiedno'] = 'No hay cadenas modificadas para guardar.';
$string['modifiednum'] = 'Hay {$a} cadenas modificadas. ¿Desea guardar estos cambios en su paquete de idioma local ?';
$string['nolocallang'] = 'No se encontraron cadenas de texto locales.';
$string['nostringsfound'] = 'No se han encontrado cadenas, por favor modifique la configuración del filtro';
$string['notice_ignorenew'] = 'Ignorando cadena de caracteres {$a->component}/{$a->stringid} porque no está personalizada.';
$string['notice_ignoreupdate'] = 'Ignorando cadena de caracteres {$a->component}/{$a->stringid} porque ya está definida.';
$string['notice_inexitentstring'] = 'Cadena de caracteres {$a->component}/{$a->stringid} no encontrada.';
$string['notice_missingcomponent'] = 'Componente faltante {$a->component}.';
$string['notice_success'] = 'Cadena de caracteres {$a->component}/{$a->stringid} actualizada exitosamente.';
$string['placeholder'] = 'Sustituibles (placeholders)';
$string['placeholder_help'] = 'Los sustituibles (placeholders) son instrucciones especiales, como \'{$a}\' o \'{$a->algo}\' dentro de una cadena de texto. Se sustituyen con un valor cuando se imprime la cadena de texto. Es importante copiarlos exactamente igual a como están en la cadena original. NO LOS TRADUZCA NI CAMBIE SU ESTRUCTURA INTERNA.';
$string['placeholderwarning'] = 'La cadena contiene un sustituible (placeholder)';
$string['pluginname'] = 'Personalización del idioma';
$string['privacy:metadata'] = 'El plugin de Personalización del idioma no almacena ningún dato personal.';
$string['savecheckin'] = 'Guardar los cambios en el paquete de idioma';
$string['savecontinue'] = 'Aplicar cambios y continuar editando';
