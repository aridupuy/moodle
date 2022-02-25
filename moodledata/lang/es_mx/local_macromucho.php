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
 * Strings for component 'local_macromucho', language 'es_mx', version '3.11'.
 *
 * @package     local_macromucho
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['gradeadjusted'] = 'Calificación {$a}% fue ajustada a la opción más cercana posible';
$string['help_multichoice'] = '<ul><li>Añadir dos columnas por cada opción de respuesta - una contiene el texto de la respuesta y la otra el puntaje.
</li><li>Usted puede elegir entre llenar manualmente las calificaciones para las respuestas entre 100 y -100, o puede usar "x" para respuestas correctas y "f" para incorrectas y que se sumen automáticamente hasta 100 o -100 respectivamente.
</li><li>Cuando use Opción Única, al menos una respuesta debe tener una calificación de 100, y cuando use Opción Múltiple, todas las respuestas correctas deben sumar un total de  100.</li></ul>';
$string['help_multichoiceset'] = '<ul><li>Añadir dos columnas para cada respuesta posible - una contiene el texto de la respuesta y la otra el puntaje.
</li><li>Use "x" para marcar las respuestas correctas.
</li><li>Usted puede añadir hasta 50 opciones de respuesta.</li></ul>';
$string['help_oumultiresponse'] = 'ul><li>Añadir dos columnas para cada respuesta posible - una contiene el texto de la respuesta y la otra el puntaje.
</li><li>Use "x" para marcar las respuestas correctas.
</li><li>Usted puede añadir hasta 50 opciones de respuesta.</li></ul>';
$string['help_truefalse'] = '<ul><li>En la cuarta columna, ingrese "t" para una oración verdadera, "f" para una falsa.</li></ul>';
$string['howtouse'] = '<ol><li>Seleccione un tipo de pregunta desde el menú desplegable (puede encontrar una comparación de los diferentes tipos de pregunta   <a href="https://moodle.technikum-wien.at/course/view.php?id=5682#multichoice">aquí</a>)</li>
<li>Copie/pegue los contenidos del campo importado a su programa favorito de hoja de cálculo (por ejemplo MS Excel)</li>
<li>Elimine las preguntas de ejemplo, llene cuantas filas de preguntas quiera</li>
<li>Copie/pegue todos los datos desde su hoja de cálculo hasta el campo para importar y presione  <b>Enviar</b></li></ol>
Las primeras 3 columnas son las mismas para todos los tipos de preguntas - Nombre de la pregunta, texto de la pregunta y puntaje predeterminado.<br><br>
El barajear las respuestas es habilitado automáticamente  para todas las preguntas que lo soportan.';
$string['howtouselabel'] = 'Como usarlo';
$string['importdata_copypastebutton'] = 'Copiar al portapapeles';
$string['importdata_description'] = 'Importar campo';
$string['importdata_truefalse'] = 'Nombre                Texto pregunta	        Puntaje 	Verdadero(t)/Falso
Ejemplo FV 1        Esta frase es verdadera.	1	t
Ejemplo FV 2        Esta frase es falsa.  	        1	f';
$string['importerror'] = 'Parámetros insuficientes - saltando la pregunta';
$string['importresult'] = 'Resultado de importación';
$string['importsuccess'] = 'Importación exitosa';
$string['importtotalerror'] = 'Errores:';
$string['importtotalsuccess'] = 'Preguntas importadas exitosamente:';
$string['infolabel'] = 'Descripción';
$string['infotext'] = 'Con esta utilería, usted puede fácilmente crear un gran número de preguntas de opción múltiple en su App de hoja de cálculo preferida, y después podrá importarlas directamente al banco de preguntas de Moodle.';
$string['pluginname'] = 'Creación masiva de preguntas de opción múltiple';
$string['pluginname_help'] = 'Creación fácil y rápida de muchas preguntas de opción múltiple de diferentes tipos de preguntas';
$string['pluginnameadding'] = '<b>Cre</b>ación <b>ma</b>siva <b>d</b>e preguntas de  <b>Op</b>ción <b>múl</b>tiple';
$string['pluginnamesummary'] = 'Permite la creación fácil y rápida de muchas preguntas de opción múltiple de diferentes tipos de preguntas';
$string['privacy:metadata'] = 'El plugin de tipo de pregunta de Creación de Preguntas de Opción Múltiple no almacena ningún dato personal.';
$string['toomanycorrect'] = 'Está soportado un máximo de 10 respuestas correctas para calificaciones auto-calculadas para este tipo de pregunta. Ingrese manualmente las calificaciones para que sumen 100 o use el tipo de pregunta "OU respuesta múltiple".';
$string['toomanyincorrect'] = 'El cálculo de calificación podría ser inexacto para más de 10 opciones incorrectas, porque Moodle proporciona opciones de calificación limitadas para este tipo de pregunta.';
